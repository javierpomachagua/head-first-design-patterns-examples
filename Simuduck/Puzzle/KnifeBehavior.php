<?php

namespace Puzzle;

use Puzzle\WeaponBehavior;

class KnifeBehavior implements WeaponBehavior
{
    public function useWeapon()
    {
        echo 'cutting with knife';
    }
}