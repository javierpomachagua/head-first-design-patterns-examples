<?php

require_once 'MallardDuck.php';
require_once 'RedHeadDuck.php';

$mallarDuck = new MallardDuck();
$mallarDuck->display();

echo "\n";

$redheadDuck = new RedHeadDuck();
$redheadDuck->display();
