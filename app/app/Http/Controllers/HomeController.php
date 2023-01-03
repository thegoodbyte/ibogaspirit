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

        $applocale = session('applocale') ?? 'cz';

        return View::make('pages.home.index',
            [
                'pageTitle' => __('seo/homepage.seo.title'),
                'metaDesc' => __('seo/homepage.seo.metaDesc'),
                'metaKws' => __('seo/homepage.seo.metaKws'),
                'applocale' => $applocale
            ]
        );

    }

    public function index_en() {

        if (session('applocale') != 'en') {
            return $this->setLanguage('en');
        } else {
            return $this->index();
        }
    }

    public function index_pl() {

        if (session('applocale') != 'pl') {
            return $this->setLanguage('pl');
        } else {
            return $this->index();
        }
    }

    public function nganga() {

        if (empty(session('applocale'))) {
            session(['applocale' => 'cz']);
        }
        $applocale = session('applocale') ?? 'cz';

        return View::make('pages.aboutus.nganga',
            [
                'pageTitle' => __('seo/about/nganga.seo.title'),
                'metaDesc' => __('seo/about/nganga.seo.metaDesc'),
                'metaKws' => __('seo/about.nganga.seo.metaKws'),
                'applocale' => $applocale
            ]
        );

    }



    public function moughenda() {

        $applocale = session('applocale') ?? 'cz';

        return View::make('pages.aboutus.moughenda',
            [
                'pageTitle' => __('seo/about/moughenda.seo.title'),
                'metaDesc' => __('seo/about/moughenda.seo.metaDesc'),
                'metaKws' => __('seo/about/moughenda.seo.metaKws'),
                'applocale' => $applocale
            ]
        );
    }

    public function contact() {
        if (empty(session('applocale'))) {
            session(['applocale' => 'cz']);
        }
        $applocale = session('applocale' ?? 'cz');


        return View::make('pages.aboutus.contact',
            [
                'pageTitle' => __('seo/contact.seo.title'),
                'metaDesc' => __('seo/contact.seo.metaDesc'),
                'metaKws' => __('seo/contact.seo.metaKws'),
                'applocale' => $applocale
            ]

        );

    }

    public function privacy_policy() {
        if (empty(session('applocale'))) {
            session(['applocale' => 'cz']);
        }
        $applocale = session('applocale') ?? 'cz';


        return View::make('pages.home.privacy_policy',
            [
                'pageTitle' => __('seo/privacy_policy.seo.title'),
                'metaDesc' => __('seo/privacy_policy.seo.metaDesc'),
                'metaKws' => __('seo/privacy_policy.seo.metaKws'),
                'applocale' => $applocale
            ]

        );

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

        if (in_array($lang, ['cz', 'en'])) {
            session(['applocale' => $lang]);
        } else {
            $lang = session('applocale') ?? 'cz';
        }
        return redirect()->route('home_' . $lang);
    }


}
