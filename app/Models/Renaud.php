<?php

namespace App\Models;

class Renaud extends Voiture
{
    private $marque;

    public $options = ["basses intégrées", "quoi de plus, vous avez les basses"];

    public $prix = 1800;

    public function __construct(){
        $this->marque = "Renaud";
    }

    public function getMarque(){
        return "Renaud";
    }

    public function getPrix(){
        return $this->prix;
    }
    
}
