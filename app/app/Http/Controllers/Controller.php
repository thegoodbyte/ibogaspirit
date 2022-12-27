<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Route;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $genericRoute = 'home';

    public function __construct()
    {
//        $route = Route::currentRouteName();
//        echo $route;
//        $allowedLocales = ['cz', 'en'];
//
//        $split = explode("_", $route);
//        if (!empty($split[1]) && in_array($split[1], $allowedLocales)) {
//            session(['applocale' => $split[1]]);
//            echo session('applocale');
//
//            $this->genericRoute = $split[0];
//        } else {
//            if (empty(session('applocale'))) {
//                session(['applocale' => 'cz']);
//                echo 'session not split';
//            }
//        }
    }
}
