<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\App;

class ObradyController extends Controller
{
    //


    public function all_about_iboga_ceremonies() {
        return View::make('pages.obrady.all_about_iboga_ceremonies');
    }


    public function lekarske_smernice() {
        return View::make('pages.obrady.lekarske-smernice');
    }



    public function vase_prvni_ceremonie() {

        App::setLocale('ru');
        return View::make('pages.obrady.pobyt');
    }

    public function eight_day_retreat() {
        return View::make('pages.obrady.8-day-retreat');
    }

    public function your_first_ceremony() {
        return View::make('pages.obrady.your-first-ceremony');
    }




}
