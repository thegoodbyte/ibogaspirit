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
            'pageTitle' => 'Iboga rostlinná medicína léčí deprese, úzkosti, traumata, sebevražedné myšlenky, Alternativní léčení Česko'
        ]);

    }

    public function iboga_vs_ayahuasca() {

        return View::make('pages.iboga.iboga_vs_ayahuasca',[
            'pageTitle' => 'Rozdíl mezi Ibogou a Ayahuaskou. Iboga terapie  Česká Republika. ',
            'metaDesc' => 'Iboga i Ayahuasca jsou hlavní učitelské rostliny, které zapalují trvalé, hluboké duchovní transformace a rozšíření vědomí'
            ]);

    }

    public function deprese() {

        return View::make('pages.iboga.deprese');

    }

    public function bwiti_tradice() {

        return View::make('pages.iboga.bwiti-tradice', ['pageTitle' => __('seo.seo.iboga.bwiti_tradition.pageTitle')]);

    }

    public function gabon() {

        return View::make('pages.iboga.gabon', ['pageTitle' => 'Iboga léčí']);

    }

    public function what_is_iboga() {

        return View::make('pages.iboga.what_is_iboga', [
            'pageTilte' => 'Iboga ceremonie Česká republika - poznejte své pravé ja, miluj se, Iboga léčí vaše sebevražedné myšlenky, deprese, úzkosti, traumata']);

    }
}
