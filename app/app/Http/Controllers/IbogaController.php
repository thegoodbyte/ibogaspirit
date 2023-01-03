<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class IbogaController extends Controller
{


    public function __construct()
    {
        parent::__construct();
    }

    public function index() {

        return View::make('pages.iboga.index');

    }

    public function how_iboga_can_help() {
        if (empty(session('applocale'))) {
            session(['applocale' => 'cz']);
        }

        $applocale = session('applocale') ?? 'cz';

        return View::make('pages.iboga.jak_vam_iboga_muze_pomoci',
            [
                'pageTitle' => __('seo/iboga/how-iboga-can-help.seo.title'),
                'metaDesc' => __('seo/iboga/how-iboga-can-help.seo.metaDesc'),
                'metaKws' => __('seo/iboga/how-iboga-can-help.seo.metaKws'),
                'applocale' => $applocale
            ]
        );

    }

    public function iboga_vs_ayahuasca() {

        $applocale = session('applocale') ?? 'cz';

        return View::make('pages.iboga.iboga_vs_ayahuasca',
            [
            'pageTitle' => __('seo/iboga/iboga-vs-ayahusca.seo.title'),
            'metaDesc' => __('seo/iboga/iboga-vs-ayahusca.seo.metaDesc'),
            'metaKws' => __('seo/iboga/iboga-vs-ayahusca.seo.metaKws'),
            'applocale' => $applocale
            ]
        );


    }

    public function deprese() {

        $applocale = session('applocale') ?? 'cz';

        return View::make('pages.iboga.deprese',
            [
                'pageTitle' => __('seo/iboga/depression.seo.title'),
                'metaDesc' => __('seo/iboga/depression.seo.metaDesc'),
                'metaKws' => __('seo/iboga/depression.seo.metaKws'),
                'applocale' => $applocale
            ]
        );

    }

    public function bwiti_tradice() {

        $applocale = session('applocale') ?? 'cz';

        return View::make('pages.iboga.bwiti-tradition',
            [
                'pageTitle' => __('seo/iboga/bwiti-tradition.seo.title'),
                'metaDesc' => __('seo/iboga/bwiti-tradition.seo.metaDesc'),
                'metaKws' => __('seo/iboga/bwiti-tradition.seo.metaKws'),
                'applocale' => $applocale
            ]
        );

    }

    public function gabon() {

        $applocale = session('applocale') ?? 'cz';

        return View::make('pages.iboga.gabon',
            [
                'pageTitle' => __('seo/iboga/gabon.seo.title'),
                'metaDesc' => __('seo/iboga/gabon.seo.metaDesc'),
                'metaKws' => __('seo/iboga/gabon.seo.metaKws'),
                'applocale' => $applocale
            ]
        );

    }

    public function what_is_iboga()
    {

        $applocale = session('applocale') ?? 'cz';

        return View::make('pages.iboga.what_is_iboga',
            [
                'pageTitle' => __('seo/iboga/what-is-iboga.seo.title'),
                'metaDesc' => __('seo/iboga/what-is-iboga.seo.metaDesc'),
                'metaKws' => __('seo/iboga/what-is-iboga.seo.metaKws'),
                'applocale' => $applocale
            ]
        );
    }


    public function iboga_ibogaine_difference() {
        return View::make('pages.iboga.iboga_ibogaine_difference', [
            'pageTitle' => 'Iboga ceremonie Česká republika - poznej své pravé já, miluj se, Iboga léčí vaše eprese, úzkosti, traumata, sebevražedné myšlenky',
            'applocale' => session('applocale') ?? 'cz'
            ]);
    }

    public function history() {
        return View::make('pages.iboga.history', [
            'pageTitle' => 'Iboga ceremonie Česká republika - poznej své pravé ja, miluj se, Iboga léčí vaše sebevražedné myšlenky, deprese, úzkosti, traumata',
            'applocale' => session('applocale') ?? 'cz'
            ]);
    }
}
