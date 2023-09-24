<?php

class MuteQuack implements QuackBehavior
{

    public function quack()
    {
        echo 'No quack';
    }
}