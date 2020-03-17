<?php


// if (isset($_SERVER['HTTP_COOKIE'])) {
//     $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
//     foreach($cookies as $cookie) {
//         $parts = explode('=', $cookie);
//         $name = trim($parts[0]);
//         setcookie($name, '', time()-1000);
//         setcookie($name, '', time()-1000, '/');
//     }
// }

if( isset($_POST['button'] )){
    $type = $_POST ['type'] ?? [];

    $_SESSION['shopping_cart'][$type] = [];
//    echo '<script> window.location = "/product" </script>';
header("Location: /product");
exit;
 }
