<?php

namespace App\Models;

class State
{
    public $etat;

    public function __construct(){
        $this->etat = "Demande";
    }

    public function modifEtat($newEtat){
        switch ($newEtat) {
            case "Demande":
                echo "Etat est 'Demande'";
                $this->etat = $newEtat;
                break;
            case "ConstruireChassis":
                echo "Etat est 'ConstruireChassis'";
                $this->etat = $newEtat;
                break;
            case "Peindre":
                echo "Etat est 'Peindre'";
                $this->etat = $newEtat;
                break;
            case "Envoyer":
                echo "Etat est 'Envoyer'";
                $this->etat = $newEtat;
                break;
            default :
                echo "Cet etat n'est pas pris en compte";
        }
    }

    public function getEtat(){
        return $this->etat;
    }
    
}
