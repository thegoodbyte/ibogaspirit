<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;


use App\Notifications\ContactFormMessage;
use App\Http\Requests\ContactFormRequest;
use App\Models\Recipient;


use Validator;
use Redirect;

class HomeController extends Controller
{


    public function __construct() {

    }

    public function index() {

        $applocale = session('applocale') ?? 'cz';
        return View::make('pages.home.index', ['applocale' => $applocale]);

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

    /**
     * @param ContactFormRequest $message
     * @param Recipient $recipient
     * @return \Illuminate\Http\RedirectResponse
     *
     * https://welcm.uk/blog/creating-a-contact-form-for-your-laravel-website
     */
    public function mailContactForm(ContactFormRequest $message, Recipient $recipient)
    {

        $recipient->notify(new ContactFormMessage($message));

        return redirect()->back()->with('message', 'Thanks for your message! We will get back to you soon!');
    }


    public function setLanguage($lang) {
        session(['applocale' => $lang]);
        return back();
    }


}
