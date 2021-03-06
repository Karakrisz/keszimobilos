<?php


function logMessage($level, $message)
{
    $file = fopen('app.log', "a");
    fwrite($file, "[$level] $message" . PHP_EOL);
    fclose($file);
}

function errorPage()
{
    include "tamplates/error.php";
    die();
}

$routes = [];

function route($action, $callable, $method = 'GET')
{
    global $routes;
    $pattern = "%^$action$%";
    $routes[strtoupper($method)][$pattern] = $callable;
}

function dispatch($action, $notFound)
{
    global $routes;
    $method = $_SERVER["REQUEST_METHOD"];
    if (array_key_exists($method, $routes)) {
        foreach ($routes[$method] as $pattern => $callable) {
            if (preg_match($pattern, $action, $matches)) {
                return $callable($matches);
            }
        }
    }
    return $notFound();
}


function esc($string)
{
    echo htmlspecialchars($string);
}

function getConnection()
{
    global $config;
    $connection = mysqli_connect($config['DB_HOST'], $config['DB_USER'], $config['DB_PASS'], $config['DB_NAME']);
    if (!$connection) {
        logMessage('ERROR', 'Connection error:' . mysqli_connect_error());
        errorPage();
    }
    return $connection;
}


define('EMAIL', 'keszimobil@keszimobilos.hu');
define('PASS', 'Hacker13prog');

$pEvent = filter_input(INPUT_POST, "event", FILTER_SANITIZE_SPECIAL_CHARS);

$sendemail = filter_input(INPUT_POST, "sendemail", FILTER_SANITIZE_SPECIAL_CHARS);

$user_name = filter_input(INPUT_POST, "user_name", FILTER_SANITIZE_SPECIAL_CHARS);
$phone_name = filter_input(INPUT_POST, "phone_name", FILTER_SANITIZE_SPECIAL_CHARS);
$user_email = filter_input(INPUT_POST, "user_email", FILTER_SANITIZE_SPECIAL_CHARS);
$user_tel = filter_input(INPUT_POST, "user_tel", FILTER_SANITIZE_SPECIAL_CHARS);
$user_message = filter_input(INPUT_POST, "user_message", FILTER_SANITIZE_SPECIAL_CHARS);

if ($pEvent == 'sendemail') {
    require_once 'vendor/autoload.php';
    // Create the Transport
    $transport = (new Swift_SmtpTransport('s28.tarhely.com', 587, 'tls'))
        ->setUsername(EMAIL)
        ->setPassword(PASS);

    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);
    $confirmation_email = new Swift_Mailer($transport);

    // Create a message
    $message = (new Swift_Message('Szerviz ig??nyl??s'))
        ->setFrom([EMAIL => $user_name])
        // ->setCc('rrd@webmania.cc') copy
        ->setTo([EMAIL])
        ->setBody(
            '??j szerviz ig??nyl??s ??rkezett!

            Ig??nyl?? neve: ' . "$user_name" . '
            Ig??nyl?? email c??me: ' . "$user_email" . '
            Ig??nyl?? telefon sz??ma: ' . "$user_tel" . '
            Ig??nyl?? k??sz??l??k??nek t??pusa: ' . "$phone_name" . '
            Hiba jellemz??se: ' . $user_message . '
            '
        );

    $confirmation_email_message = (new Swift_Message('Szerviz ig??nyl??s'))
        ->setFrom([EMAIL => $user_name])
        ->setTo([$user_email])
        ->setBody(
            'K??sz??nj??k ??rdekl??d??s??t!

            Kolleg??ink hamarosan, felveszik ??nnel a kapcsolatot! 

            Az ??n adatai: 

            Neve: ' . "$user_name" . '
            Email c??me: ' . "$user_email" . '
            Telefon sz??ma: ' . "$user_tel" . '
            K??sz??l??k??nek t??pusa: ' . "$phone_name" . '
            Hiba jellemz??se: ' . $user_message . '
            
            ??dv??zlettel: Keszimobilos! 
            '
        );


    $mailer->send($message);
    $confirmation_email->send($confirmation_email_message);
}
