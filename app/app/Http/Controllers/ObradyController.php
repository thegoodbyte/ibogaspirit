<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\App;

class ObradyController extends Controller
{
    //


    public function preparation() {
        return View::make('pages.ceremonies.preparation');
    }



    public function medical_guidelines() {
        return View::make('pages.ceremonies.medical_guidelines');

    }


    public function vase_prvni_ceremonie() {


        return View::make('pages.ceremonies.pobyt');

    }

    public function eight_day_retreat() {
        return View::make('pages.ceremonies.8-day-retreat');
    }

    public function your_first_ceremony() {
        return View::make('pages.ceremonies.your-first-ceremony');
    }

    public function dates() {
        return View::make('pages.ceremonies.dates', ['pageTitle' => 'Týdenní Iboga pobyt v České republice se dvěma ceremoniemi Ibogy, Jídlo a ubytování v ceně']);
    }




}
