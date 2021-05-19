<?php
require_once "config.php";
ob_start();
$uri = $_SERVER["REQUEST_URI"];
$cleaned = explode("?", $uri)[0];

route('/', 'homeController');

route('/shop', 'shopController');
route('/shop/(?<shop>[\w]+)', 'shopParamsController'); // write in url

route('/shop/session/fot', 'shopSessionController', "POST");
route('/shop/session/dunakeszi', 'shopSessionController', "POST");
route('/shop/session/igbdunakeszi', 'shopSessionController', "POST");

list($view, $data) = dispatch($cleaned, 'notFoundController');
if (preg_match("%^redirect\:%", $view)) {
    $redirectTarget = substr($view, 9);
    header("Location:" . $redirectTarget);
    die;
}
extract($data);
ob_clean();
require_once "tamplates/layout.php";
