<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ObradyController extends Controller
{
    //


    public function iboga_obrady() {
        return View::make('obrady.iboga_obrady');
    }


    public function lekarske_smernice() {
        return View::make('obrady.lekarske-smernice');
    }

}
