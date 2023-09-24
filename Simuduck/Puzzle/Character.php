<?php

namespace Puzzle;

require_once "WeaponBehavior.php";
abstract class Character
{
    public WeaponBehavior $weaponBehavior;

    /**
     * @param  WeaponBehavior  $weaponBehavior
     */
    public function setWeaponBehavior(WeaponBehavior $weaponBehavior): void
    {
        $this->weaponBehavior = $weaponBehavior;
    }

    public function fight()
    {
        $this->weaponBehavior->useWeapon();
    }

}