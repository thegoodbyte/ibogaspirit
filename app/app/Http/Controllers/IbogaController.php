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

        return View::make('pages.iboga.jak_vam_iboga_muze_pomoci');

    }

    public function iboga_vs_ayahuasca() {

        return View::make('pages.iboga.iboga_vs_ayahuasca');

    }

    public function deprese() {

        return View::make('pages.iboga.deprese');

    }

    public function bwiti_tradice() {

        return View::make('pages.iboga.bwiti-tradice');

    }

    public function gabon() {

        return View::make('pages.iboga.gabon');

    }

    public function what_is_iboga() {

        return View::make('pages.iboga.what_is_iboga');

    }
}
