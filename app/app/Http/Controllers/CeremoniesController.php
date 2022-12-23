<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\App;

class CeremoniesController extends Controller
{
    //


    public function preparation() {
        return View::make('pages.ceremonies.preparation', [
            'applocale' => session('applocale') ?? 'cz'
        ]);
    }




    public function medical_guidelines() {
        return View::make('pages.ceremonies.medical_guidelines', [
            'applocale' => session('applocale') ?? 'cz'
        ]);
    }




    public function vase_prvni_ceremonie() {


        return View::make('pages.ceremonies.pobyt', [
            'applocale' => session('applocale') ?? 'cz'
        ]);


    }

    public function eight_day_retreat() {
        return View::make('pages.ceremonies.8-day-retreat', [
            'applocale' => session('applocale') ?? 'cz'
        ]);
    }

    public function your_first_ceremony() {
        return View::make('pages.ceremonies.your-first-ceremony', [
            'applocale' => session('applocale') ?? 'cz'
        ]);
    }

    public function dates() {
        return View::make('pages.ceremonies.dates', [
            'pageTitle' => 'Týdenní Iboga pobyt v České republice se dvěma ceremoniemi Ibogy, Jídlo a ubytování v ceně',
            'applocale' => session('applocale') ?? 'cz'
            ]);
    }




}
