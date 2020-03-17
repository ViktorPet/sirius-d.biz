<?php
namespace App\Controllers;

use Twig\Environment as Twig;

class ExceptionController {
    /**
     *
     *
     */
    private $twig;
    /**
     *
     *
     */
    private $configs = [];
    /**
     *
     *
     */
    public function __construct (Twig $twig, array $configs = []) {
        $this->twig = $twig;
        $this->configs = $configs;
    }

    public function notFound () {
        echo $this->twig->render ('errors/404.html.twig', []);
    }
}
