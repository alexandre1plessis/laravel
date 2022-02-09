<?php

namespace App\Models;

class Obs2
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
