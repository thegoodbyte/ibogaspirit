<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class IbogaController extends Controller
{


    public function __construct()
    {

    }

    public function index() {

        return View::make('pages.iboga.index');

    }

    public function how_iboga_can_help() {

        session(['applocale' => 'en']);
        return View::make('pages.iboga.jak_vam_iboga_muze_pomoci');

    }

    public function iboga_vs_ayahuasca() {

        return View::make('pages.iboga.iboga_vs_ayahuasca',['pageTitle' => 'Iboga vs ayahuaca Ceremonie - Missoko Bwiti Tradice - šamanské léčení deprese, úzkosti atd.']);

    }

    public function deprese() {

        return View::make('pages.iboga.deprese');

    }

    public function bwiti_tradice() {

        return View::make('pages.iboga.bwiti-tradice', ['pageTitle' => __('seo.seo.iboga.bwiti_tradition.pageTitle')]);

    }

    public function gabon() {

        return View::make('pages.iboga.gabon', ['pageTitle' => 'Iboga ']);

    }

    public function what_is_iboga() {

        return View::make('pages.iboga.what_is_iboga', [
            'pageTilte' => 'Iboga ceremonie Česká republika - poznejte své pravé ja, vyléčte se z deprese, uzkosti či traumatu']);

    }
}
