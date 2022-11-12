<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{



    public function index() {

        return View::make('pages.home.index');

    }

    public function nganga() {
        return View::make('pages.onas.nganga');
    }

    public function moughenda() {
        return View::make('pages.onas.moughenda');
    }

    public function kontakt() {

    }
}
