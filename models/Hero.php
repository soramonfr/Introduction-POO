<?php
class Hero extends Character

{
    private $weapon;
    private $weaponDamage;
    private $shield;
    private $shieldValue;

    public function getWeapon()
    {
        return $this->weapon;
    }

    public function setWeapon($weapon)
    {
        $this->weapon = $weapon;
    }

    public function getWeaponDamage()
    {
        return $this->weaponDamage;
    }

    public function setWeaponDamage($weaponDamage)
    {
        $this->weaponDamage = $weaponDamage;
    }

    public function getShield()
    {
        return $this->shield;
    }

    public function setShield($shield)
    {
        $this->shield = $shield;
    }

    public function getShieldValue()
    {
        return $this->shieldValue;
    }

    public function setShieldValue($shieldValue)
    {
        $this->shieldValue = $shieldValue;
    }
}
