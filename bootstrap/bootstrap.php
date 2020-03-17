<?php
use function App\Helpers\{
    controller,
    uriBeginWith
};
use App\Controllers\IndexController;
use App\Controllers\ExceptionController;
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 9/19/2019
 * Time: 10:12 AM
 */

define('API', $_SERVER['DOCUMENT_ROOT'].'/Api');
define('APP', $_SERVER['DOCUMENT_ROOT'].'/App');

//error_reporting (0);

$request = $_SERVER['REQUEST_URI'];

switch (true) {
    case preg_match ('/^(\/)$/', $_SERVER ['REQUEST_URI']) :
        controller ($twig, '\App\Controllers\IndexController', 'index', []);
        //(new IndexController ($twig))->index ();
        break;
    case preg_match ('/^(\/\?fbclid\=)/', $_SERVER ['REQUEST_URI']) :
        controller ($twig, '\App\Controllers\IndexController', 'index', []); break;
    case preg_match ('/^(\/ceni)+/', $_SERVER ['REQUEST_URI']) :

        controller ($twig, '\App\Controllers\IndexController', 'prices', []); break;
    case preg_match ('/^(\/about)+/', $_SERVER ['REQUEST_URI']) :
        (new IndexController ($twig))->about ();
        break;
    case preg_match ('/^(\/doza)+/', $_SERVER ['REQUEST_URI']) :
        (new IndexController ($twig))->dose ();
        break;
    case preg_match ('/^(\/otzivi)+/', $_SERVER ['REQUEST_URI']) :
        (new IndexController ($twig))->feedback ();
        break;
    case preg_match ('/^(\/contact)+/', $_SERVER ['REQUEST_URI']):
        (new IndexController ($twig))->contact ();
        break;
    case preg_match ('/^(\/en-harmony)+/', $_SERVER ['REQUEST_URI']):
        (new IndexController ($twig))->enHarmony ();
        break;
    case preg_match ('/^(\/kv-analisator)+/', $_SERVER ['REQUEST_URI']):
        (new IndexController ($twig))->kvAnalisator ();
        break;
    case preg_match ('/^(\/aura-diagnosis)+/', $_SERVER ['REQUEST_URI']) :
        (new IndexController ($twig))->auraDiagnosis ();
        break;
    case preg_match ('/^(\/bio-diagnosis)+/', $_SERVER ['REQUEST_URI']) :
        (new IndexController ($twig))->bioDiagnosis ();
        break;
    case preg_match ('/^(\/iris-diagnosis)+/', $_SERVER ['REQUEST_URI']) :
        (new IndexController ($twig))->irisDiagnosis ();
        break;
    case preg_match ('/^(\/radioestesia)+/', $_SERVER ['REQUEST_URI']) :
        (new IndexController ($twig))->radioestesia ();
        break;
    case preg_match ('/^(\/siriusclub)+/', $_SERVER ['REQUEST_URI']) :
        (new IndexController ($twig))->siriusclub ();
        break;
    case preg_match ('/^(\/product)+/', $_SERVER ['REQUEST_URI']):
        (new IndexController ($twig))->product ();
        break;
    case preg_match ('/^(\/cart)+/', $_SERVER ['REQUEST_URI']):
        (new IndexController ($twig))->cart ();
        break;
    case preg_match ('/^(\/order)+/', $_SERVER ['REQUEST_URI']):
        (new IndexController ($twig))->order ();
        break;
    case preg_match ('/^(\/clear)+/', $_SERVER ['REQUEST_URI']):
        (new IndexController ($twig))->clear ();
        break;
    case preg_match ('/^(\/bank)+/', $_SERVER ['REQUEST_URI']):
        (new IndexController ($twig))->bank ();
        break;
      case preg_match ('/^(\/mail)+/', $_SERVER ['REQUEST_URI']):
        (new IndexController ($twig))->mail ();
        break;
    default:
        (new ExceptionController ($twig))->notFound ();
        break;


  // http://www.sirius-d.biz/?fbclid=IwAR1_t9f1WK1FFoRJ9GWxU8XUPys6WTfgWGu4wdaiFT9zHjgMGVOkSQ4Io2o
    /**/
}
