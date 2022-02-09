<?php

namespace App\Models;

class Facture 

{
    public $montant = 0;

    public function add($tabVoiture)
    {
        $this->montant = 0;
        foreach($tabVoiture as $voiture){
            $this->montant += $voiture->getPrix();
        }

        return $this->montant;
    }

}