<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 5/8/2019
 * Time: 7:39 AM
 */

namespace App;

use App\Web\Hoover;


// modify as needed
define('DEFAULT_URL', 'http://surreyviktor.com/');
define('DEFAULT_TAG', 'a');

// get "vacuum" class
$vac = new Hoover();
// NOTE: the PHP 7 null coalesce operator is used
$url = strip_tags($_GET['url'] ?? DEFAULT_URL);
$tag = strip_tags($_GET['tag'] ?? DEFAULT_TAG);
echo 'Dump of Tags: </br>' ;
//var_dump($vac->getTags($url, $tag));

$dumps = $vac->getTags($url, $tag);

foreach ($dumps as $dump){

    print_r($dump) .'<br>';
}

