<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\App;

class ObradyController extends Controller
{
    //


    public function iboga_obrady() {
        return View::make('pages.obrady.iboga_obrady');
    }


    public function lekarske_smernice() {
        return View::make('pages.obrady.lekarske-smernice');
    }

    public function pobyt() {
        return View::make('pages.obrady.pobyt');
    }

    public function vase_prvni_ceremonie() {

        App::setLocale('ru');
        return View::make('pages.obrady.pobyt');
    }


}
