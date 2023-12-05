<?php

namespace Puzzle;

use Puzzle\WeaponBehavior;

class SwordBehavior implements WeaponBehavior
{
    public function useWeapon()
    {
        echo 'using a sword';
    }
}