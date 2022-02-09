<?php

namespace App\Models;

class ConcessionIterateur

{
    public $offset = 0;
    public $list = [];

    public function __construct($tabvoiture){
        $this->list = $tabvoiture;
    }

    public function hasnext(){
        return isset($list[$offset]);
    }

    public function next(){
        return $list[$offset++];
    }
}