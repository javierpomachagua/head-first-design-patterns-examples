<?php

namespace Puzzle;

use Puzzle\WeaponBehavior;

class BowAndArrowBehavior implements WeaponBehavior
{
    public function useWeapon()
    {
        echo 'using an arrow with a bow';
    }
}