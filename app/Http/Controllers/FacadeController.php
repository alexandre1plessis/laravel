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

class FacadeController extends BaseController
{
    public function commander()
    {
        $usine = Factory::create('Opel');
        $concession = new Concession();
        $concession->add($usine);
        $facture = new Facture();
        $facture->add($concession->getGarage());

        return [$usine, $concession, $facture];
    }
}