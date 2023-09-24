<?php

namespace Puzzle;

use Puzzle\WeaponBehavior;

class AxeBehavior implements WeaponBehavior
{
    public function useWeapon()
    {
        echo 'using an axe';
    }
}