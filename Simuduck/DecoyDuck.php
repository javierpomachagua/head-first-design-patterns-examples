<?php

require_once 'Duck.php';
class DecoyDuck extends Duck
{
    public function quack()
    {
        echo '';
    }

    public function fly()
    {
        echo '';
    }

    public function display()
    {
        echo 'looks like a decoy duck';
    }
}