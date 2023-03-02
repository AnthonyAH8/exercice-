<?php

abstract class Character
{
    private $name;
    private $life;
    private $strength;
    private $mana;

    public function __construct($name, $life = 100, $strength = 10, $mana =10)
    {
        $this->name = $name;
        $this->life = $life;
        $this->strength = $strength;
        $this->mana = $mana;
        
    }
}

?>