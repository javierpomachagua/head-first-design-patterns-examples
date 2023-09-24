<?php

require_once "FlyBehavior.php";
abstract class Duck
{
    public FlyBehavior $flyBehavior;
    public QuackBehavior $quackBehavior;

    public function swim()
    {
        echo 'swim';
    }

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    abstract public function display();

    /**
     * @param  FlyBehavior  $flyBehavior
     */
    public function setFlyBehavior(FlyBehavior $flyBehavior): void
    {
        $this->flyBehavior = $flyBehavior;
    }

    /**
     * @param  QuackBehavior  $quackBehavior
     */
    public function setQuackBehavior(QuackBehavior $quackBehavior): void
    {
        $this->quackBehavior = $quackBehavior;
    }
}