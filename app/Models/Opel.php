<?php

namespace App\Models;

class Opel extends Voiture
{
    private $marque;

    public $options = ["bluetooth", "climatisation bien trop chère vu l'état de la planête actuelle"];

    public $prix = 1500;

    public function __construct(){
        $this->marque = "Opel";
    }

    public function getMarque(){
        return "Opel";
    }

    public function getPrix(){
        return $this->prix;
    }
}
