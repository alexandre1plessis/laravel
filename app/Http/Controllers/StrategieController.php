<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Factory;
use App\Models\FactureLine;

class StrategieController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show(){
        $opel = Factory::create('Opel');
        $renaud = Factory::create('Renaud');
        $fOpel = new FactureLine($opel);
        $fRenaud = new FactureLine($renaud);

        return view('strategie', ['opel' => $fOpel->getFactureLine(), 'renaud' => $fRenaud->getFactureLine()]);
    }
}