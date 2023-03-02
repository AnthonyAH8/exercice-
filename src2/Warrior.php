<?php

    class Warrior extends Character{

        private $strength = 10;

        public function __construct($name, $life, $mana)
        {
            parent::__construct($name, $life, $mana);
            
        }

        public function strength()
        {
            return $this->strength*2;
        }

        public function attack(Character $strength)
        {
            return 100 - $this->strength *2;
        }
    }

?>