<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 9/19/2019
 * Time: 10:12 AM
 */

define('API', $_SERVER['DOCUMENT_ROOT'].'/Api');
define('APP', $_SERVER['DOCUMENT_ROOT'].'/App');

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require APP . '/Views/index.php';
        break;
    case '/about' :
        require APP . '/Views/about.php';
        break;
    case '/doza' :
        require APP . '/Views/doza.php';
        break;
    case '/ceni' :
        require APP . '/Views/ceni.php';
        break;
    case '/otzivi' :
        require APP. '/Views/otzivi.php';
        break;
    case '/contact' :
        require APP. '/Views/contact.php';
        break;
    case '/en-harmony' :
        require APP. '/Views/en-harmony.php';
        break;
    case '/kv-analisator' :
        require APP. '/Views/kv-analisator.php';
        break;
    case '/aura-diagnosis' :
        require APP. '/Views/aura-diagnosis.php';
        break;
    case '/bio-diagnosis' :
        require APP. '/Views/bio-diagnosis.php';
        break;
    case '/iris-diagnosis' :
        require APP. '/Views/iris-diagnosis.php';
        break;


    /*default:
        require __DIR__ . '/views/404.php';
        break;*/
}