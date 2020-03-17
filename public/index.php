<?php
session_start();

define ('BASE_PATH', dirname (__FILE__, 2));
define ('APP_PATH', dirname (__FILE__, 2) . DIRECTORY_SEPARATOR . 'App');
define ('CONFIG_PATH', dirname (__FILE__, 2) . DIRECTORY_SEPARATOR . 'config');
define ('VIEWS_PATH', APP_PATH . DIRECTORY_SEPARATOR . 'Views');
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 5/7/2019
 * Time: 1:08 PM
 */

//echo 'Hello';

require __DIR__.'/../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Twig\Extension\DebugExtension;
use Dotenv\Dotenv;

$twig = new Environment (new FilesystemLoader (APP_PATH . DIRECTORY_SEPARATOR . 'Views'), [
    //'cache' =>  APP_PATH . '/Views/cache',
    'debug' => true,
    //'auto_reload'   =>  true
]);
$twig->addExtension(new DebugExtension);
//require_once '../app/bootstrap.php';

$dotenv = Dotenv::createImmutable (BASE_PATH);
$dotenv->load ();

require_once  '../bootstrap/bootstrap.php';
