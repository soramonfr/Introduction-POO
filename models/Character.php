<?php
class Character

{
    private $health;
    private $rage;
    
    public function __construct($health = 100)
    {
        $this->health = $health;
        $this->rage = 0;
    }

    public function getHealth() {
        return $this->health;
    }

    public function setHealth($health) {
        $this->health = $health;
    }

    public function getRage() {
        return $this->rage;
    }

    public function setRage($rage) {
        $this->rage = $rage;
    }
}