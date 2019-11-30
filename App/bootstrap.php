<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 5/7/2019
 * Time: 1:33 PM
 */

//require_once 'execute.php';
//require_once 'Model/Photo.php';

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/views/index.php';
        break;
    case '' :
        require __DIR__ . '/views/index.php';
        break;
    case '/about' :
        require __DIR__ . '/views/about.php';
        break;
    case '/read' :
        require __DIR__ . 'Api/product/read.php';
        break;
    default:
        require __DIR__ . '/views/404.php';
        break;
}