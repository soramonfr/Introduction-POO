<?php
class Character

{
    private $nickName;
    private $health;
    private $rage;
   
    public function __construct($nickName, $starterHealth = 100)
    {
        $this->nickName = $nickName;
        $this->health = $starterHealth;
        $this->rage = 0;
    }

}