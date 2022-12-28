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
                'pageTitle' => __('seo/ceremonies/preparation.seo.title'),
                'metaDesc' => __('seo/ceremonies/preparation.seo.metaDesc'),
                'metaKws' => __('seo/ceremonies/preparation.seo.metaKws')
            ]
//            [
//                'pageTitle' => 'Iboga zkušenosti - příprava na vaši první Iboga terapii v našem týdenním pobytu ',
//                'metaDesc' => 'Osmidenní pobyt s dvěma povodňovými ceremoniemi Ibogy poskytované v autentické africké tradici Bwiti',
//                'metaKws' => 'Iboga pobyt, Iboga terapie, Iboga zkušenosti, Iboga Bwiti léčení, iboga terapie, šamanské léčení, alternativní léčení'
//            ]
    );
    }


    public function medical_guidelines() {
        return View::make('pages.ceremonies.medical_guidelines',
            [
                'pageTitle' => __('seo/ceremonies/medical-guidelines.seo.title'),
                'metaDesc' => __('seo/ceremonies/medical-guidelines.seo.metaDesc'),
                'metaKws' => __('seo/ceremonies/medical-guidelines.seo.metaKws')
            ]
//            [
//                'pageTitle' => 'Lékařský průvodce',
//                'metaDesc' => 'Lékařské směrnice a bezpeči Iboga povodňových dávek. Iboga ceremonie poskytované v autentické africké tradici Bwiti',
//                'metaKws' => 'Lékařské směrnice, Iboga bezpečí, Iboga bezpečnost, bwiti tradice, bwiti healing, Iboga healing, iboga terapie, šamanské léčení, alternativní léčení'
//            ]
    );
    }


    public function vase_prvni_ceremonie() {

        return View::make('pages.ceremonies.pobyt',
            [
                'pageTitle' => __('seo/ceremonies/your-first-ceremony.seo.title'),
                'metaDesc' => __('seo/ceremonies/your-first-ceremony.seo.metaDesc'),
                'metaKws' => __('seo/ceremonies/your-first-ceremony.seo.metaKws')
            ]
//            [
//                'pageTitle' => 'Iboga zkušenosti - příprava na vaši první Iboga terapii v našem týdenním pobytu ',
//                'metaDesc' => 'Osmidenní pobyt s dvěmy povodňovymi ceremoniemi Ibogy poskytované v autentické africké tradici Bwiti',
//                'metaKws' => 'Iboga pobyt, Iboga terapie, Iboga zkušenosti, Iboga Bwiti léčení, iboga terapie, šamanské léčení, alternativní léčení'
//            ]
    );
    }

    public function eight_day_retreat() {
        return View::make('pages.ceremonies.8-day-retreat',
            [
                'pageTitle' => __('seo/ceremonies/retreat.seo.title'),
                'metaDesc' => __('seo/ceremonies/retreat.seo.metaDesc'),
                'metaKws' => __('seo/ceremonies/retreat.seo.metaKws')
            ]);
    }

    public function your_first_ceremony() {
        return View::make('pages.ceremonies.your-first-ceremony',
            [
                'pageTitle' => __('seo/ceremonies/your-first-ceremony.seo.title'),
                'metaDesc' => __('seo/ceremonies/your-first-ceremony.seo.metaDesc'),
                'metaKws' => __('seo/ceremonies/your-first-ceremony.seo.metaKws')
            ]
//            [
//                'pageTitle' => 'Iboga zkušenosti - příprava na vaši první Iboga terapii v našem týdenním pobytu ',
//                'metaDesc' => 'Iboga zkušenosti - příprava na osmidenní pobyt s dvěma povodňovými ceremoniemi Ibogy poskytované v autentické africké tradici Bwiti',
//                'metaKws' => 'Iboga terapie a ceremonie,  Iboga zkušenosti, Iboga Bwiti léčení,  příprava , šamanské léčení, alternativní léčení'
//            ]
    );
    }

    public function dates() {
        return View::make('pages.ceremonies.dates',
            [
                'pageTitle' => __('seo/ceremonies/dates.seo.title'),
                'metaDesc' => __('seo/ceremonies/dates.seo.metaDesc'),
                'metaKws' => __('seo/ceremonies/dates.seo.metaKws')
            ]

    );
    }




}
