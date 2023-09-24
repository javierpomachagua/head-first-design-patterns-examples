<?php

class DuckCall
{
    public QuackBehavior $quackBehavior;

    /**
     * @param  QuackBehavior  $quackBehavior
     */
    public function setQuackBehavior(QuackBehavior $quackBehavior): void
    {
        $this->quackBehavior = $quackBehavior;
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }
}