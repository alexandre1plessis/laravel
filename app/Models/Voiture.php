<?php

namespace App\Models;

abstract class Voiture 
{

    abstract function __construct();

    public abstract function getMarque();

    public abstract function getPrix();

    public function getOptions(){
        foreach($this->options as $option){
            echo $option." ,";
        }
    }

    public function getText(){
        echo $this->getMarque()." : ";
        echo $this->getOptions();
    }
    
}
