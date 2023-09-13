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

    abstract public function display();
}