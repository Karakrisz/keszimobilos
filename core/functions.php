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
    $message = (new Swift_Message('Szerviz igénylés'))
        ->setFrom([EMAIL => $user_name])
        // ->setCc('rrd@webmania.cc') copy
        ->setTo([EMAIL])
        ->setBody(
            'Új szerviz igénylés érkezett!

            Igénylő neve: ' . "$user_name" . '
            Igénylő email címe: ' . "$user_email" . '
            Igénylő telefon száma: ' . "$user_tel" . '
            Igénylő készülékének típusa: ' . "$phone_name" . '
            Hiba jellemzése: ' . $user_message . '
            '
        );

    $confirmation_email_message = (new Swift_Message('Szerviz igénylés'))
        ->setFrom([EMAIL => $user_name])
        ->setTo([$user_email])
        ->setBody(
            'Köszönjük érdeklődését!

            Kollegáink hamarosan, felveszik Önnel a kapcsolatot! 

            Az Ön adatai: 

            Neve: ' . "$user_name" . '
            Email címe: ' . "$user_email" . '
            Telefon száma: ' . "$user_tel" . '
            Készülékének típusa: ' . "$phone_name" . '
            Hiba jellemzése: ' . $user_message . '
            
            Üdvözlettel: Keszimobilos! 
            '
        );


    $mailer->send($message);
    $confirmation_email->send($confirmation_email_message);
}
