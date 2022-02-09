<?php

namespace App\Models;

class Sujet 
{
    public $observers = [];
    
    public function __construct() { }
    
    public function notify() {
        $listobservers = $this->observers;
        foreach ($listobservers as $observer){
            $observer->update();
        }
    }

    public function addObs($obs) {
        $this->observers[] = $obs;
    }

    public function removeObs($obs) {
        if(in_array($obs, $this->observers)){
            unset($this->observers[1]);
        }
    }
}
