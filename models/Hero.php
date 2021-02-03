<?php
class Hero extends Character

{
    private $weapon;
    private $weaponDamage;
    private $shield;
    private $shieldValue;

    public function __construct($health = 100, $weapon = "Spatule", $weaponDamage = 25, $shield = "Couette", $shieldValue = 12)
    {
        parent::__construct($health);
        $this->weapon = $weapon;
        $this->weaponDamage = $weaponDamage;
        $this->shield = $shield;
        $this->shieldValue = $shieldValue;
    }

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

    public function displayHero () {
        $br = "<br>";
        echo "Nom : Inconnu ${br}Vie : " . $this->getHealth() . $br
            . "Arme: " . $this->weapon . $br
            . "Dégats de l'arme: " . $this->weaponDamage . $br
            . "Bouclier: " . $this->shield . $br
            . "Protection du bouclier: " . $this->shieldValue;
    }
}
