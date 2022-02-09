<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Sujet;
use App\Models\Obs1;
use App\Models\Obs2;

class ObservatorController extends BaseController
{
    public function show()
    {
        $sub = new Sujet();
        $obs1 = new Obs1();
        $obs2 = new Obs2();
        $sub->addObs($obs1);
        $sub->addObs($obs2);
        $sub->notify();
        $sub->removeObs($obs2);
        $sub->notify();

        return view('observator', ['obs1' => $obs1, 'obs2' => $obs2]);
    }
}