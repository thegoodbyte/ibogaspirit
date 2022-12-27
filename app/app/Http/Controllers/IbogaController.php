<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class IbogaController extends Controller
{
    public function index() {

        return View::make('pages.iboga.index');

    }

    public function jak_vam_iboga_muze_pomoci() {

        return View::make('pages.iboga.jak_vam_iboga_muze_pomoci', [
            'pageTitle' => 'Iboga rostlinná medicína léčí deprese, úzkosti, traumata, sebevražedné myšlenky, Alternativní léčení Česko',
            'metaDesc' => 'Iboga může vyléčit deprese, úzkosti, traumata, sebevražedné myšlenky, Alternativní léčení, Iboga terapie Česko',
            'metaKws' => 'iboga, deprese, úzkost, PTSD, sebevražda, rostlinná medicína, traumata, negativní mysl, iboga terapie'


        ]);

    }

    public function iboga_vs_ayahuasca() {

        return View::make('pages.iboga.iboga_vs_ayahuasca',
            [
            'pageTitle' => __('seo/iboga/iboga-vs-ayahusca.seo.title'),
            'metaDesc' => __('seo/iboga/iboga-vs-ayahusca.seo.metaDesc'),
            'metaKws' => __('seo/iboga/iboga-vs-ayahusca.seo.metaKws')
            ]
        );

    }

    public function deprese() {

        return View::make('pages.iboga.deprese',[
            'pageTitle' => 'Alternativní léčení deprese Iboga terapie  Česká Republika. ',
            'metaDesc' => '',
            'metaKws' => 'depression, alternativní léčení, Iboga terapie'
        ]);

    }

    public function bwiti_tradice() {

        return View::make('pages.iboga.bwiti-tradice',
            ['pageTitle' => __('seo.seo.iboga.bwiti_tradition.pageTitle'),
        'metaDesc' => 'Iboga povodňové dávky ceremonie poskytované v autentické africké tradici bwiti',
            'metaKws' => 'bwiti tradice, bwiti healing, Iboga healing, iboga terapie, šamanské léčení, alternativní léčení'
            ]);

    }

    public function gabon() {

        return View::make('pages.iboga.gabon', [
            'pageTitle' => 'Iboga léčí',
            'metaDesc' => 'Iboga i Ayahuasca jsou hlavní učitelské rostliny, které zapalují trvalé, hluboké duchovní transformace a rozšíření vědomí. Iboga je na druhé straně mužský i ženský duch',
            'metaKws' => 'Iboga Gabon Africa Bwiti'
        ]);

    }

    public function what_is_iboga() {

        return View::make('pages.iboga.what_is_iboga', [
            'pageTilte' => 'Iboga ceremonie Česká republika - poznejte své pravé ja, miluj se, Iboga léčí vaše sebevražedné myšlenky, deprese, úzkosti, traumata',
            'metaDesc' => 'Iboga  je mužský i ženský duch, hluboké duchovní transformace a rozšíření vědomí',
            'metaKws' => 'Iboga, what is iboga, Tabernanthe iboga, Ibogaine, Iboga terapie']);

    }
}
