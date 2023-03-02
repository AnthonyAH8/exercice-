<?php

class Magus extends Character
{
    private $mana = 10;

    public function __construct($name, $life, $strength)
 {

    parent::__construct($name, $life, $strength);

 }

    public function mana()
    {
        return $this->mana *2;
    }
}

?>