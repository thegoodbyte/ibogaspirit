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
        $applocale = session('applocale');

        return View::make('pages.iboga.jak_vam_iboga_muze_pomoci', [
            'pageTitle' => 'Iboga rostlinná medicína léčí deprese, úzkosti, traumata, sebevražedné myšlenky, Alternativní léčení Česko',
            'metaDesc' => 'Iboga může vyléčit deprese, úzkosti, traumata, sebevražedné myšlenky, Alternativní léčení, Iboga terapie Česko',
            'metaKws' => 'iboga, deprese, úzkost, PTSD, sebevražda, rostlinná medicína, traumata, negativní mysl, iboga terapie',
            'applocale' => $applocale,
            'routeNameGeneric' => $this->genericRoute


        ]);


    }

    public function iboga_vs_ayahuasca() {

        return View::make('pages.iboga.iboga_vs_ayahuasca',[
            'pageTitle' => 'Rozdíl mezi Ibogou a Ayahuaskou. Iboga terapie  Česká Republika. ',
            'metaDesc' => 'Iboga i Ayahuasca jsou učitelské rostliny, které zapalují trvalé, hluboké duchovní transformace a rozšíření vědomí. Zatímco Ayahuasca vás posílá ven, Iboga vás přivádí dovnitř',
            'metaKws' => '',
            'applocale' => session('applocale') ?? 'cz'
            ]);

    }

    public function deprese() {

        return View::make('pages.iboga.deprese',[
            'pageTitle' => 'Alternativní léčení deprese Iboga terapie  Česká Republika. ',
            'metaDesc' => '',
            'metaKws' => 'depression, alternativní léčení, Iboga terapie',
            'applocale' => session('applocale') ?? 'cz'
        ]);

    }

    public function bwiti_tradice() {

        return View::make('pages.iboga.bwiti-tradice',
            [
                'pageTitle' => __('seo.seo.iboga.bwiti_tradition.pageTitle'),
                'metaDesc' => 'Iboga povodňové dávky ceremonie poskytované v autentické africké tradici bwiti',
                'metaKws' => 'bwiti tradice, bwiti healing, Iboga healing, iboga terapie, šamanské léčení, alternativní léčení',
                'applocale' => session('applocale') ?? 'cz'
            ]);

    }

    public function gabon() {

        return View::make('pages.iboga.gabon', [
            'pageTitle' => 'Iboga léčí',
            'metaDesc' => 'Iboga i Ayahuasca jsou hlavní učitelské rostliny, které zapalují trvalé, hluboké duchovní transformace a rozšíření vědomí. Iboga je na druhé straně mužský i ženský duch',
            'metaKws' => 'Iboga Gabon Africa Bwiti',
            'applocale' => session('applocale') ?? 'cz'
        ]);

    }

    public function what_is_iboga() {

        return View::make('pages.iboga.what_is_iboga', [
            'pageTilte' => 'Iboga ceremonie Česká republika - poznejte své pravé ja, miluj se, Iboga léčí vaše sebevražedné myšlenky, deprese, úzkosti, traumata',
            'metaDesc' => 'Iboga  je mužský i ženský duch, hluboké duchovní transformace a rozšíření vědomí',
            'metaKws' => 'Iboga, what is iboga, Tabernanthe iboga, Ibogaine, Iboga terapie',
            'applocale' => session('applocale') ?? 'cz',

            ]);
    }

    public function iboga_ibogaine_difference() {
        return View::make('pages.iboga.iboga_ibogaine_difference', [
            'pageTilte' => 'Iboga ceremonie Česká republika - poznejte své pravé ja, miluj se, Iboga léčí vaše sebevražedné myšlenky, deprese, úzkosti, traumata',
            'applocale' => session('applocale') ?? 'cz'
            ]);
    }

    public function history() {
        return View::make('pages.iboga.history', [
            'pageTilte' => 'Iboga ceremonie Česká republika - poznejte své pravé ja, miluj se, Iboga léčí vaše sebevražedné myšlenky, deprese, úzkosti, traumata',
            'applocale' => session('applocale') ?? 'cz'
            ]);
    }
}
