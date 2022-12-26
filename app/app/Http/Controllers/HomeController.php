<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;

use App\Notifications\ContactFormMessage;
use App\Http\Requests\ContactFormRequest;
use App\Models\Recipient;


use Validator;
use Redirect;

class HomeController extends Controller
{


    public function index() {

        $route = Route::currentRouteName();

        $allowedLocales = ['cz', 'en'];

        $split = explode("_", $route);
        if (!empty($split[1]) && in_array($split[1], $allowedLocales)) {
            session(['applocale' => $split[1]]);
        } else {
            if (empty(session('applocale'))) {
                session(['applocale' => 'cz']);
            }
        }

        $applocale = session('applocale');


        return View::make('pages.home.index', [
            'pageTitle' => 'Iboga terapie ceremnie - alternativní léčení depreseú, úzkosti, traumat, rozšíření vědomí - České republika',
            'metaDesc' => 'S Ibogou můžeš vyléčit celoživotní trauma během jedné noci, pokud jsi připraven přinést pravdu do své mysli. Iboga ceremonie v africké tradici Bwiti',
            'metaKws' => 'Iboga pobyt, Iboga terapie, Iboga zkušenosti, Iboga Bwiti léčení, iboga terapie, šamanské léčení, alternativní léčení',
            'applocale' => $applocale
        ]);


    }

    public function nganga() {

        if (empty(session('applocale'))) {
            session(['applocale' => 'cz']);
        }
        $applocale = session('applocale');

        return View::make('pages.onas.nganga', [
            'pageTitle' => 'Zkušený Bwiti léčitel a facilitátor Ibogy vyškolený v Gabonu v Africe poskytující bezpečné Bwiti ceremonie povodňových dávek v České republice',
            'metaDesc' => 'Zkušený Bwiti léčitel a facilitátor Ibogy vyškolený v Gabonu v Africe poskytující bezpečné Bwiti ceremonie povodňových dávek v České republice',
            'metaKws' => 'Iboga Bwiti léčitel, Iboga terapie, Iboga zkušenosti, Iboga léčení, iboga terapie, šamanské léčení, alternativní léčení',
            'applocale' => $applocale
        ]);
    }



    public function moughenda() {
        if (empty(session('applocale'))) {
            session(['applocale' => 'cz']);
        }
        $applocale = session('applocale');

        return View::make('pages.onas.moughenda', [
        'pageTitle' => 'Iboga šaman Moughenda Mikala - Bwiti učitel a léčitel',
            'metaDesc' => 'Iboga šaman Moughenda Mikala - Bwiti učitel a léčitel',
            'metaKws' => 'Iboga šaman Moughenda Mikala - Bwiti učitel, léčitell, Iboga terapie, Iboga zkušenosti, Iboga léčení, iboga terapie, šamanské léčení, alternativní léčení',
        'applocale' => $applocale
        ]);

    }

    public function kontakt() {
        if (empty(session('applocale'))) {
            session(['applocale' => 'cz']);
        }
        $applocale = session('applocale');

        return View::make('pages.onas.kontakt', [
            'pageTitle' => 'Kontaktuje zkušeneho Bwiti léčitele a facilitátora Ibogy vyškoleneho v africkem Gabon',
            'metaDesc' => 'Domluvte si schůzku ještě dnes a prodiskutujte, jak vám medicína Iboga může pomoci  vás vyléčit a rozšířit vědomí',
            'metaKws' => 'Iboga terapie, Iboga zkušenosti, Iboga léčení, iboga terapie, šamanské léčení, alternativní léčení',
            'applocale' => $applocale
        ]);

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
