<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Facade;
use App\Models\Factory;
use App\Models\Facture;
use App\Models\Concession;

class IteratorController extends BaseController
{
    public function commander()
    {
        $usine1 = Factory::create('Opel');
        $usine2 = Factory::create('Renaud');
        $concession = new Concession();
        $concession->add($usine1);
        $concession->add($usine2);
        $ite = $concession->getIterator();

        return ['iterator', ['ite' => $ite]];
    }
}