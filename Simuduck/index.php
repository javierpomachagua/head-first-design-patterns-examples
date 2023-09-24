<?php

require_once 'MallardDuck.php';
require_once 'RedHeadDuck.php';
require_once 'RubberDuck.php';
require_once 'DecoyDuck.php';
require_once 'FlyNoWay.php';
require_once 'ModelDuck.php';
require_once 'FlyRocketPowered.php';

//$mallarDuck = new MallardDuck(new FlyWithWings(), new Quack());
//$mallarDuck->performFly();
//echo "\n";
//$mallarDuck->performQuack();
//
//echo "\n";
//
//$redheadDuck = new RedHeadDuck();
//$redheadDuck->display();

//$rubberDuck = new RubberDuck();
//$rubberDuck->quack();

//$decoyDuck = new DecoyDuck();
//$decoyDuck->quack();

$modelDuck = new ModelDuck();
$modelDuck->performFly();
echo "\n";
$modelDuck->setFlyBehavior(new FlyRocketPowered());
$modelDuck->performFly();