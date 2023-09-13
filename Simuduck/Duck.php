<?php

abstract class Duck
{
    public function quack()
    {
        echo 'quack';
    }

    public function swim()
    {
        echo 'swim';
    }

    public function fly()
    {
        echo 'fly';
    }

    abstract public function display();
}