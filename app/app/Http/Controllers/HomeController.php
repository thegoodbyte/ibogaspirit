<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Validator;
use Redirect;

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

        return View::make('pages.onas.kontakt');
    }

    public function postContactus(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'required',
            'email' => 'required',
            'description' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);
        // Write here your database logic
        \Session::put('success', 'Youe Request Submited Successfully..!!');
        return redirect()->back();
    }
}
