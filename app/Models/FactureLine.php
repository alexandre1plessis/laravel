<?php

namespace App\Models;

class FactureLine 
{
    protected $voiture;
    protected $tva;
    private $strategy;

    public function __construct($voiture){
        if($voiture->getMarque() == "Opel"){
            $this->strategy = new StrategyOpel;
        }
        elseif($voiture->getMarque() == "Renaud"){
            $this->strategy = new StrategyRenaud;
        }
    }

    public function getFactureLine(){
        return $this->strategy->getTVA();
    }
    
}
