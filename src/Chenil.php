<?php

    class Chenil
    {
        private $animals = [];

        public function keep(Animal $animal){
            $this->animals[] = $animal;

            return $this;
        }
    }

?>