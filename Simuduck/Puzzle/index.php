<?php

use Puzzle\AxeBehavior;
use Puzzle\BowAndArrowBehavior;
use Puzzle\KnifeBehavior;
use Puzzle\Queen;
use Puzzle\Troll;

require_once "Character.php";
require_once "Queen.php";
require_once "Troll.php";
require_once "KnifeBehavior.php";
require_once "SwordBehavior.php";
require_once "BowAndArrowBehavior.php";
require_once "AxeBehavior.php";

$character = new Troll();
$character->setWeaponBehavior(new BowAndArrowBehavior());
$character->fight();
