<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Singleton;

class SingletonController extends BaseController
{

    public function show()
    {
        $a = Singleton::getInstance();
        $b = Singleton::getInstance();
        return view('singleton', ['a' => $a, 'b' => $b]);
    }
}