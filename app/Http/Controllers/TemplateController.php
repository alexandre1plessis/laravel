<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Factory;

class TemplateController extends BaseController
{
    public function show()
    {
        $v1 = Factory::create('Opel');
        $v2 = Factory::create('Renaud');
        return view('template', ['v1' => $v1, 'v2' => $v2]);
    }
}