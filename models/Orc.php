<?php 
class Orc extends Character

{
    private $damage;

    public function __construct($health, $damage)
    {
        parent::__construct($health);
        $this->damage = $damage; 
    }

    public function getDamage() {
        return $this->damage;
    }

    public function setDamage($damage) {
        $this->damage = $damage;
    }
}