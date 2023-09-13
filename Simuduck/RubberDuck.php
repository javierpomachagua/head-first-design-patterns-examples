<?php

require_once 'Duck.php';
class RubberDuck extends Duck
{
    public function quack()
    {
        echo 'squeak';
    }

    public function fly()
    {
        echo '';
    }

    public function display()
    {
        echo 'looks like a rubber duck';
    }
}