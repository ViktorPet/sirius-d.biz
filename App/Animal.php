<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 5/6/2019
 * Time: 4:31 PM
 */

namespace App;

use App\Model\Photo;


class Animal
{

    public function __construct()
    {


    }


    public function roar(){

        return  'ROAAAAAAR';
    }

}

$c = new Photo();

$c->printd();

$animal = new Animal();

echo $animal->roar();