<?php

require_once 'Duck.php';
require_once 'Quack.php';
require_once 'FlyWithWings.php';
class MallardDuck extends Duck
{
    public function display()
    {
        echo 'looks like a mallard';
    }
}