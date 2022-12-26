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



    public function index() {

        return View::make('pages.home.index', [
            'pageTitle' => __('seo/homepage.seo.title'),
            'metaDesc' => 'S Ibogou můžeš vyléčit celoživotní trauma během jedné noci, pokud jsi připraven přinést pravdu do své mysli. Iboga ceremonie v africké tradici Bwiti',
            'metaKws' => 'Iboga pobyt, Iboga terapie, Iboga zkušenosti, Iboga Bwiti léčení, iboga terapie, šamanské léčení, alternativní léčení'
        ]);

    }

    public function nganga() {
        return View::make('pages.onas.nganga', [
            'pageTitle' => 'Zkušený Bwiti léčitel a facilitátor Ibogy vyškolený v Gabonu v Africe poskytující bezpečné Bwiti ceremonie povodňových dávek v České republice',
            'metaDesc' => 'Zkušený Bwiti léčitel a facilitátor Ibogy vyškolený v Gabonu v Africe poskytující bezpečné Bwiti ceremonie povodňových dávek v České republice',
            'metaKws' => 'Iboga Bwiti léčitel, Iboga terapie, Iboga zkušenosti, Iboga léčení, iboga terapie, šamanské léčení, alternativní léčení'
        ]);
    }

    public function moughenda() {
        return View::make('pages.onas.moughenda', [
        'pageTitle' => 'Iboga šaman Moughenda Mikala - Bwiti učitel a léčitel',
            'metaDesc' => 'Iboga šaman Moughenda Mikala - Bwiti učitel a léčitel',
            'metaKws' => 'Iboga šaman Moughenda Mikala - Bwiti učitel, léčitell, Iboga terapie, Iboga zkušenosti, Iboga léčení, iboga terapie, šamanské léčení, alternativní léčení'
        ]);
    }

    public function kontakt() {


        return View::make('pages.onas.kontakt', [
            'pageTitle' => 'Kontaktuje zkušeneho Bwiti léčitele a facilitátora Ibogy vyškoleneho v africkem Gabon',
            'metaDesc' => 'Domluvte si schůzku ještě dnes a prodiskutujte, jak vám medicína Iboga může pomoci  vás vyléčit a rozšířit vědomí',
            'metaKws' => 'Iboga terapie, Iboga zkušenosti, Iboga léčení, iboga terapie, šamanské léčení, alternativní léčení'
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


}
