<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\App;

class CeremoniesController extends Controller
{
    //


    public function preparation() {
        return View::make('pages.ceremonies.preparation',
            [
                'pageTitle' => 'Iboga zkušenosti - příprava na vaši první Iboga terapii v našem týdenním pobytu ',
                'metaDesc' => 'Osmidenní pobyt s dvěma povodňovými ceremoniemi Ibogy poskytované v autentické africké tradici Bwiti',
                'metaKws' => 'Iboga pobyt, Iboga terapie, Iboga zkušenosti, Iboga Bwiti léčení, iboga terapie, šamanské léčení, alternativní léčení'
            ]);
    }


    public function medical_guidelines() {
        return View::make('pages.ceremonies.medical_guidelines',
            [
                'pageTitle' => 'Lékařský průvodce',
                'metaDesc' => 'Lékařské směrnice a bezpeči Iboga povodňových dávek. Iboga ceremonie poskytované v autentické africké tradici Bwiti',
                'metaKws' => 'Lékařské směrnice, Iboga bezpečí, Iboga bezpečnost, bwiti tradice, bwiti healing, Iboga healing, iboga terapie, šamanské léčení, alternativní léčení'
            ]);
    }


    public function vase_prvni_ceremonie() {

        return View::make('pages.ceremonies.pobyt',
            [
                'pageTitle' => 'Iboga zkušenosti - příprava na vaši první Iboga terapii v našem týdenním pobytu ',
                'metaDesc' => 'Osmidenní pobyt s dvěmy povodňovymi ceremoniemi Ibogy poskytované v autentické africké tradici Bwiti',
                'metaKws' => 'Iboga pobyt, Iboga terapie, Iboga zkušenosti, Iboga Bwiti léčení, iboga terapie, šamanské léčení, alternativní léčení'
            ]);
    }

    public function eight_day_retreat() {
        return View::make('pages.ceremonies.8-day-retreat',
            [
                'pageTitle' => 'Osmidenní pobyt s dvěmy povodňovými ceremoniemi Ibogy poskytované v autentické africké tradici Bwiti',
                'metaDesc' => 'Iboga povodňové dávky ceremonie poskytované v autentické africké tradici Bwiti',
                'metaKws' => 'Iboga pobyt, Iboga terapie, Iboga zkušenosti, Iboga Bwiti léčení, iboga terapie, šamanské léčení, alternativní léčení'
            ]);
    }

    public function your_first_ceremony() {
        return View::make('pages.ceremonies.your-first-ceremony',
            [
                'pageTitle' => 'Iboga zkušenosti - příprava na vaši první Iboga terapii v našem týdenním pobytu ',
                'metaDesc' => 'Iboga zkušenosti - příprava na osmidenní pobyt s dvěma povodňovými ceremoniemi Ibogy poskytované v autentické africké tradici Bwiti',
                'metaKws' => 'Iboga terapie a ceremonie,  Iboga zkušenosti, Iboga Bwiti léčení,  příprava , šamanské léčení, alternativní léčení'
            ]);
    }

    public function dates() {
        return View::make('pages.ceremonies.dates', [
            'pageTitle' => 'Termíny našich týdenních Iboga terapií pobytů s dvěma ceremoniemi Ibogy v České republice, Jídlo a ubytování v ceně',
            'metaDesc' => 'Iboga povodňové dávky ceremonie poskytované v autentické africké tradici bwiti',
            'metaKws' => 'termíny,iboga ceny, povodňové dávky ceremonie, bwiti tradice, bwiti healing, Iboga healing, iboga terapie, šamanské léčení, alternativní léčení'
            ]);
    }




}
