<?php

namespace App\Models;

class Factory 

{

    public $voiture;

    public function create($marque)
    {
        $voiture = '';
        if($marque == 'Opel'){
            $voiture = new Opel;
        }
        else if($marque == 'Renaud'){
            $voiture = new Renaud;
        }
        else{
            echo "Mauvaise marque";
        }
        return $voiture;
    }
}