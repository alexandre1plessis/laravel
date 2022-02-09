<?php

namespace App\Models;

class Concession 

{
    public $garage = [];

    public function __construct(){}

    public function add($voiture)
    {
        $this->garage[] = $voiture;
    }

    public function getGarage()
    {
        return $this->garage;
    }

    public function getIterator(){
        return new ConcessionIterateur($this->garage);
    }

}