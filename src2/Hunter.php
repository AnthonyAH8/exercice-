<?php

    class Hunter extends Character

    {
        private $attack = 10;

        public function __construct($name, $life, $strength, $mana)
        {
            parent::__construct($name, $life, $strength, $mana);
        }

        public function rangedAttack()
        {
            return $this->attack;
        }
    }

?>