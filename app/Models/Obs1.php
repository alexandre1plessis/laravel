<?php

namespace App\Models;

class Obs1
{
    public $count = 0;

    public function __construct(){}

    public function display()
    {
        return $this->count;
    }

    public function update()
    {
        return $this->count += 1;
    }
    
}
