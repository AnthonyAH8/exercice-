<?php

class Cat extends Animal
{
    private $retractableClaws = true;

    public function __construct($name, $retractableClaws = true)
    {
        parent::__construct($name);
        $this->retractableClaws = $retractableClaws;
    }

    public function climbsOnRoof()
    {
        return $this->name.' grimpe sur le toit.';
    }

    public function move()
    {
        return parent::move().'silencieusement';
    }

    public function breathe()
    {
        return 'Le chat respire par son museau';
    }
}

?>