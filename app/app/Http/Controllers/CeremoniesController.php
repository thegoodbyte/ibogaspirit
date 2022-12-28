<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\App;

class CeremoniesController extends Controller
{
    //


    public function preparation() {

        $applocale = session('applocale');

        return View::make('pages.ceremonies.preparation',
            [
                'pageTitle' => __('seo/ceremonies/preparation.seo.title'),
                'metaDesc' => __('seo/ceremonies/preparation.seo.metaDesc'),
                'metaKws' => __('seo/ceremonies/preparation.seo.metaKws'),
                'applocale' => $applocale
            ]
        );
    }




    public function medical_guidelines() {

        $applocale = session('applocale');

        return View::make('pages.ceremonies.medical_guidelines',
            [
                'pageTitle' => __('seo/ceremonies/medical-guidelines.seo.title'),
                'metaDesc' => __('seo/ceremonies/medical-guidelines.seo.metaDesc'),
                'metaKws' => __('seo/ceremonies/medical-guidelines.seo.metaKws'),
                'applocale' => $applocale
            ]
        );
    }




    public function vase_prvni_ceremonie() {

        $applocale = session('applocale');

        return View::make('pages.ceremonies.pobyt',
            [
                'pageTitle' => __('seo/ceremonies/your-first-ceremony.seo.title'),
                'metaDesc' => __('seo/ceremonies/your-first-ceremony.seo.metaDesc'),
                'metaKws' => __('seo/ceremonies/your-first-ceremony.seo.metaKws'),
                'applocale' => $applocale
            ]
    );
    }

    public function eight_day_retreat() {

        $applocale = session('applocale');


        return View::make('pages.ceremonies.8-day-retreat',
            [
                'pageTitle' => __('seo/ceremonies/retreat.seo.title'),
                'metaDesc' => __('seo/ceremonies/retreat.seo.metaDesc'),
                'metaKws' => __('seo/ceremonies/retreat.seo.metaKws'),
                'applocale' => $applocale
            ]);
    }

    public function your_first_ceremony() {

        $applocale = session('applocale');

        return View::make('pages.ceremonies.your-first-ceremony',
            [
                'pageTitle' => __('seo/ceremonies/your-first-ceremony.seo.title'),
                'metaDesc' => __('seo/ceremonies/your-first-ceremony.seo.metaDesc'),
                'metaKws' => __('seo/ceremonies/your-first-ceremony.seo.metaKws'),
                'applocale' => $applocale
            ]
        );
    }

    public function dates() {

        $applocale = session('applocale');

        return View::make('pages.ceremonies.dates',
            [
                'pageTitle' => __('seo/ceremonies/dates.seo.title'),
                'metaDesc' => __('seo/ceremonies/dates.seo.metaDesc'),
                'metaKws' => __('seo/ceremonies/dates.seo.metaKws'),
                'applocale' => $applocale
            ]
        );

    }




}
