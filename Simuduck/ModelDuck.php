<?php

require_once 'Duck.php';
require_once 'Quack.php';
require_once 'FlyWithWings.php';

class ModelDuck extends Duck
{

    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Quack();
    }

    public function display()
    {
        echo 'looks like a model duck';
    }
}