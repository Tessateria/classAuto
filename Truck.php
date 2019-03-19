<?php

require_once ('Auto.php');

class Truck extends Auto
{
    private $cargo_weight;

    public function setCargoWeight($cargo_weight)
    {
        $this->cargo_weight = $cargo_weight;
    }

    public function getCargoWeight()
    {
        return $this->cargo_weight;
    }
}