<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, "index"]);

Route::controller(\App\Http\Controllers\IbogaController::class)->group(function() {
    Route::get('/{en}/iboga-bwiti-retraeats-czech-republic-europe', 'index');
});

// czech

/**
 * the first part of the Router(get) has to be unique  - it looks like it builds an array of routes with routes being the keys
 */
    Route::get('/iboga', [\App\Http\Controllers\IbogaController::class, "what_is_iboga"])->name('iboga_cz');
    Route::get('/iboga/co-je-iboga', [\App\Http\Controllers\IbogaController::class, "what_is_iboga"])->name('iboga-what-is_cz');
//    Route::get('/iboga/co-je-iboga', [\App\Http\Controllers\IbogaController::class, "what_is_iboga"])->name('iboga-what-is_de');
    Route::get('/iboga/jak-vam-iboga-muze-pomoci',[\App\Http\Controllers\IbogaController::class,  "how_iboga_can_help"])->name('iboga-how-can-help_cz');
    Route::get('/iboga/iboga-vs-ayahuasca', [\App\Http\Controllers\IbogaController::class, "iboga_vs_ayahuasca"])->name('iboga-vs-aya_cz');
    Route::get('iboga/gabon', [\App\Http\Controllers\IbogaController::class, "gabon"])->name('iboga-gabon_cz');
    Route::get('/iboga/deprese', [\App\Http\Controllers\IbogaController::class, "deprese"])->name('iboga-depresion_cz');
    Route::get('/iboga/bwiti-tradice', [\App\Http\Controllers\IbogaController::class, 'bwiti_tradice'])->name('iboga-bwiti-tradition_pl');

    Route::get('/obrady/priprava',  [\App\Http\Controllers\ObradyController::class, "preparation"])->name('ceremonies-prep_cz');
    Route::get('/obrady/lekarske-smernice',  [\App\Http\Controllers\ObradyController::class, "medical_guidelines"])->name('ceremonies-medical-guidelines_cz');
    Route::get('/obrady/osmi-denni-iboga-wellness-pobyt', [ \App\Http\Controllers\ObradyController::class, "eight_day_retreat"])->name('ceremonies_8-day-stay_cz');
    Route::get('/obrady/prvni-ceremonial-a-co-ocekavat', [ \App\Http\Controllers\ObradyController::class, "your_first_ceremony"])->name('ceremonies-first-ceremony_cz');
    Route::get('/obrady/terminy-a-ceny', [\App\Http\Controllers\ObradyController::class, "dates"])->name('ceremonies-dates_cz');

    Route::get('/onas/nganga', [\App\Http\Controllers\HomeController::class, "nganga"])->name('about-nganga_cz');
    Route::get('/onas/moughenda', [\App\Http\Controllers\HomeController::class, "moughenda"])->name('about-moughenda_cz');
    Route::get('/kontakt', [\App\Http\Controllers\HomeController::class, "kontakt"])->name('contact_cz');
    Route::post('/contactus', [\App\Http\Controllers\HomeController::class ,'mailContactForm'])->name('contactus')->name('contact-post_cz');
    Route::get('/set-language/{lang}',  [\App\Http\Controllers\HomeController::class, 'setLanguage'])->name('set.language');

//// ======================================================================================================
////         spanish
//// =====================================================================================================
Route::get('/iboga', [\App\Http\Controllers\IbogaController::class, "what_is_iboga"])->name('iboga_es');
Route::get('/iboga-ceremonies-europe/co-je-iboga',[\App\Http\Controllers\IbogaController::class, "what_is_iboga"])->name('iboga-what-is_es');
Route::get('/iboga/jak-vam-iboga-muze-pomoci2',[\App\Http\Controllers\IbogaController::class,  "how_iboga_can_help"])->name('iboga-how-can-help_es');
Route::get('/iboga/iboga-vs-ayahuasca', [\App\Http\Controllers\IbogaController::class, "iboga_vs_ayahuasca"])->name('iboga-vs-aya_es');
Route::get('/iboga/gabon', [\App\Http\Controllers\IbogaController::class, "gabon"])->name('iboga-gabon_es');
Route::get('/iboga/deprese', [\App\Http\Controllers\IbogaController::class, "deprese"])->name('iboga-depresion_es');
Route::get('/iboga/bwiti-tradice', [\App\Http\Controllers\IbogaController::class, 'bwiti_tradice'])->name('iboga-bwiti-tradition_es');

Route::get('/obrady/priprava',  [\App\Http\Controllers\ObradyController::class, "preparation"])->name('ceremonies-prep_es');
Route::get('/obrady/lekarske-smernice',  [\App\Http\Controllers\ObradyController::class, "medical_guidelines"])->name('ceremonies-medical-guidelines_es');
Route::get('/obrady/osmi-denni-iboga-wellness-pobyt', [ \App\Http\Controllers\ObradyController::class, "eight_day_retreat"])->name('ceremonies_8-day-stay_es');
Route::get('/obrady/prvni-ceremonial-a-co-ocekavat', [ \App\Http\Controllers\ObradyController::class, "your_first_ceremony"])->name('ceremonies-first-ceremony_es');
Route::get('/obrady/terminy-a-ceny', [\App\Http\Controllers\ObradyController::class, "dates"])->name('ceremonies-dates_es');

////
////// ======================================================================================================
//////         P O L I S H
////// =====================================================================================================
    Route::get('/iboga', [\App\Http\Controllers\IbogaController::class, "what_is_iboga"])->name('iboga_pl');
    Route::get('/pl/iboga/co-je-iboga',[\App\Http\Controllers\IbogaController::class, "what_is_iboga"])->name('iboga-what-is_pl');
    Route::get('/iboga/jak-vam-iboga-muze-pomoci',[\App\Http\Controllers\IbogaController::class,  "how_iboga_can_help"])->name('ddd');
    Route::get('/iboga/iboga-vs-ayahuasca', [\App\Http\Controllers\IbogaController::class, "iboga_vs_ayahuasca"])->name('iboga-vs-aya_pl');
    Route::get('/iboga/gabon', [\App\Http\Controllers\IbogaController::class, "gabon"])->name('iboga-gabon_pl');
    Route::get('/iboga/deprese', [\App\Http\Controllers\IbogaController::class, "deprese"])->name('iboga-depresion_pl');
    Route::get('/iboga/bwiti-tradice', [\App\Http\Controllers\IbogaController::class, 'bwiti_tradice'])->name('iboga-bwiti-tradition_pl');
//
//    Route::get('/obrady/priprava',  [\App\Http\Controllers\ObradyController::class, "preparation"])->name('ceremonies-prep_pl');
//    Route::get('/obrady/lekarske-smernice',  [\App\Http\Controllers\ObradyController::class, "medical_guidelines"])->name('ceremonies-medical-guidelines_pl');
//    Route::get('/obrady/osmi-denni-iboga-wellness-pobyt', [ \App\Http\Controllers\ObradyController::class, "eight_day_retreat"])->name('ceremonies_8-day-stay_pl');
//    Route::get('/obrady/prvni-ceremonial-a-co-ocekavat', [ \App\Http\Controllers\ObradyController::class, "your_first_ceremony"])->name('ceremonies-first-ceremony_pl');
//    Route::get('/obrady/terminy-a-ceny', [\App\Http\Controllers\ObradyController::class, "dates"])->name('ceremonies-dates_pl');
//
//    Route::get('/onas/nganga', [\App\Http\Controllers\HomeController::class, "nganga"])->name('about-nganga_pl');
//    Route::get('/onas/moughenda', [\App\Http\Controllers\HomeController::class, "moughenda"])->name('about-moughenda_pl');
//    Route::get('/kontakt', [\App\Http\Controllers\HomeController::class, "kontakt"])->name('contact_pl');
//    Route::post('/contactus', [\App\Http\Controllers\HomeController::class ,'mailContactForm'])->name('contactus')->name('contact-post_pl');
//
//
////
//
//
//Route::get('/onas/nganga', [\App\Http\Controllers\HomeController::class, "nganga"])->name('about-nganga_pl');
//Route::get('/onas/moughenda', [\App\Http\Controllers\HomeController::class, "moughenda"])->name('about-moughenda_pl');
//Route::get('/kontakt', [\App\Http\Controllers\HomeController::class, "kontakt"])->name('contact_es');
//Route::post('/contactus', [\App\Http\Controllers\HomeController::class ,'mailContactForm'])->name('contactus')->name('contact-post_pl');

//Route::get('/iboga', [\App\Http\Controllers\IbogaController::class, "what_id_iboga"]);

//Route::get('/iboga/jak-vam-iboga-muze-pomoci', [\App\Http\Controllers\IbogaController::class, "how_iboga_can_help"])->name('iboga-how-can-help_cz');
//Route::get('/iboga/was-ist-iboga', [\App\Http\Controllers\IbogaController::class, "what_is_iboga"])->name('iboga-what-is_de');
//Route::get('/iboga/what-is-iboga', [\App\Http\Controllers\IbogaController::class, "what_is_iboga"])->name('iboga-what-is_en');

//Route::get('/iboga/jak-vam-iboga-muze-pomoci', [\App\Http\Controllers\IbogaController::class, "jak_vam_iboga_muze_pomoci"]);
//Route::get('/iboga/iboga-vs-ayahuasca', [\App\Http\Controllers\IbogaController::class, "iboga_vs_ayahuasca"]);
//Route::get('/iboga/gabon', [\App\Http\Controllers\IbogaController::class, "gabon"]);
//Route::get('/iboga/deprese', [\App\Http\Controllers\IbogaController::class, "deprese"]);
//Route::get('/iboga/bwiti-tradice', [\App\Http\Controllers\IbogaController::class, "bwiti_tradice"]);
//
//Route::get('/obrady/priprava', [\App\Http\Controllers\ObradyController::class, "preparation"]);
//Route::get('/obrady/lekarske-smernice', [\App\Http\Controllers\ObradyController::class, "medical_guidelines"]);
//Route::get('/obrady/osmi-denni-iboga-wellness-pobyt', [\App\Http\Controllers\ObradyController::class, "eight_day_retreat"]);
//Route::get('/obrady/prvni-ceremonial-a-co-ocekavat', [\App\Http\Controllers\ObradyController::class, "your_first_ceremony"]);
//Route::get('/obrady/terminy-a-ceny', [\App\Http\Controllers\ObradyController::class, "dates"]);




