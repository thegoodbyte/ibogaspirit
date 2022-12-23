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

/**
 * kept for old SEAO links
 */
    Route::get('/iboga', [\App\Http\Controllers\IbogaController::class, "what_is_iboga"])->name('iboga_old_cz');
    Route::get('/iboga/co-je-iboga', [\App\Http\Controllers\IbogaController::class, "what_is_iboga"])->name('iboga-what-is_old_cz');
//    Route::get('/iboga/co-je-iboga', [\App\Http\Controllers\IbogaController::class, "what_is_iboga"])->name('iboga-what-is_de');
    Route::get('/iboga/jak-vam-iboga-muze-pomoci',[\App\Http\Controllers\IbogaController::class,  "how_iboga_can_help"])->name('iboga-how-can-help_old_cz');
    Route::get('/iboga/iboga-vs-ayahuasca', [\App\Http\Controllers\IbogaController::class, "iboga_vs_ayahuasca"])->name('iboga-iboga-vs-aya_old_cz');
    Route::get('iboga/gabon', [\App\Http\Controllers\IbogaController::class, "gabon"])->name('iboga-gabon_old_cz');
    Route::get('/iboga/deprese', [\App\Http\Controllers\IbogaController::class, "deprese"])->name('iboga-depresion_old_cz');
    Route::get('/iboga/bwiti-tradice', [\App\Http\Controllers\IbogaController::class, 'bwiti_tradice'])->name('iboga-bwiti-tradition_old_cz');

    Route::get('/obrady/priprava',  [\App\Http\Controllers\CeremoniesController::class, "preparation"])->name('ceremonies-prep_old_cz');
    Route::get('/obrady/lekarske-smernice',  [\App\Http\Controllers\CeremoniesController::class, "medical_guidelines"])->name('ceremonies-medical-guidelines_old_cz');
    Route::get('/obrady/osmi-denni-iboga-wellness-pobyt', [ \App\Http\Controllers\CeremoniesController::class, "eight_day_retreat"])->name('ceremonies-retreat_old_cz');
    Route::get('/obrady/prvni-ceremonial-a-co-ocekavat', [ \App\Http\Controllers\CeremoniesController::class, "your_first_ceremony"])->name('ceremonies-first-ceremony_old_cz');
    Route::get('/obrady/terminy-a-ceny', [\App\Http\Controllers\CeremoniesController::class, "dates"])->name('ceremonies-dates_old_cz');

    Route::get('/onas/nganga', [\App\Http\Controllers\HomeController::class, "nganga"])->name('about-nganga_old_cz');
    Route::get('/onas/moughenda', [\App\Http\Controllers\HomeController::class, "moughenda"])->name('about-moughenda_old_cz');
    Route::get('/kontakt', [\App\Http\Controllers\HomeController::class, "kontakt"])->name('contact_old_cz');
    Route::post('/contactus', [\App\Http\Controllers\HomeController::class ,'mailContactForm'])->name('contactus')->name('contact-post_old_cz');


/**
 * seo cZ Links
 */
Route::get('/iboga', [\App\Http\Controllers\IbogaController::class, "what_is_iboga"])->name('iboga_cz');
Route::get('/iboga/co-je-iboga', [\App\Http\Controllers\IbogaController::class, "what_is_iboga"])->name('iboga-what-is_cz');
//    Route::get('/iboga/co-je-iboga', [\App\Http\Controllers\IbogaController::class, "what_is_iboga"])->name('iboga-what-is_de');
Route::get('/iboga-terapie/jak-vam-iboga-muze-pomoci',[\App\Http\Controllers\IbogaController::class,  "how_iboga_can_help"])->name('iboga-how-can-help_cz');
Route::get('/iboga-terapie/iboga-vs-ayahuasca', [\App\Http\Controllers\IbogaController::class, "iboga_vs_ayahuasca"])->name('iboga-iboga-vs-aya_cz');
Route::get('iboga-terapie/gabon', [\App\Http\Controllers\IbogaController::class, "gabon"])->name('iboga-gabon_cz');
Route::get('/iboga-terapie/deprese', [\App\Http\Controllers\IbogaController::class, "deprese"])->name('iboga-depresion_cz');
Route::get('/iboga-terapie/bwiti-tradice', [\App\Http\Controllers\IbogaController::class, 'bwiti_tradice'])->name('iboga-bwiti-tradition_cz');

Route::get('/iboga-ritualni-ceremonie/priprava',  [\App\Http\Controllers\CeremoniesController::class, "preparation"])->name('ceremonies-prep_cz');
Route::get('/iboga-ritualni-ceremonie/lekarske-smernice',  [\App\Http\Controllers\CeremoniesController::class, "medical_guidelines"])->name('ceremonies-medical-guidelines_cz');
Route::get('/iboga-ritualni-ceremonie/osmi-denni-iboga-wellness-pobyt', [ \App\Http\Controllers\CeremoniesController::class, "eight_day_retreat"])->name('ceremonies-retreat_cz');
Route::get('/iboga-ritualni-ceremonie/prvni-ceremonial-a-co-ocekavat', [ \App\Http\Controllers\CeremoniesController::class, "your_first_ceremony"])->name('ceremonies-first-ceremony_cz');
Route::get('/iboga-ritualni-ceremonie/terminy-a-ceny', [\App\Http\Controllers\CeremoniesController::class, "dates"])->name('ceremonies-dates_cz');

Route::get('/onas-iboga-terapie-cesko/nganga', [\App\Http\Controllers\HomeController::class, "nganga"])->name('about-nganga_cz');
Route::get('/onas-iboga-terapie-cesko/moughenda', [\App\Http\Controllers\HomeController::class, "moughenda"])->name('about-moughenda_cz');
Route::get('/kontakt', [\App\Http\Controllers\HomeController::class, "kontakt"])->name('contact_cz');
Route::post('/contactus', [\App\Http\Controllers\HomeController::class ,'mailContactForm'])->name('contactus')->name('contact-post_cz');
Route::get('/set-language/{lang}',  [\App\Http\Controllers\HomeController::class, 'setLanguage'])->name('set.language');
Route::get('/cookies',  [\App\Http\Controllers\HomeController::class, 'cookies'])->name('cookies');

    // ======================================================================================================
    //         ENGLISH
    // =====================================================================================================
Route::prefix('en')->group(function() {
    $applocale = 'en';
    session(['applocale' => 'en']);
    Route::get('/iboga-europe-czech-republic', [\App\Http\Controllers\IbogaController::class, "what_is_iboga"])->name('iboga_en');
    Route::get('/iboga-europe-czech-republic/what-is-iboga', [\App\Http\Controllers\IbogaController::class, "what_is_iboga"])->name('iboga-what-is_en');
    Route::get('/iboga-europe-czech-republic/how-iboga-plant-medicine-can-help-you-heal', [\App\Http\Controllers\IbogaController::class, "how_iboga_can_help"])->name('iboga-how-can-help_en');
    Route::get('/iboga-europe-czech-republic/iboga-vs-ayahuasca-plant-medicine', [\App\Http\Controllers\IbogaController::class, "iboga_vs_ayahuasca"])->name('iboga-iboga-vs-aya_en');
    Route::get('/iboga-europe-czech-republic/gabon', [\App\Http\Controllers\IbogaController::class, "gabon"])->name('iboga-gabon_en');
    Route::get('/iboga-europe-czech-republic/alternative-depression-anxiety-healing-with-plant-medicine', [\App\Http\Controllers\IbogaController::class, "deprese"])->name('iboga-depresion_en');
    Route::get('/iboga-europe-czech-republic/bwiti-tradition-shamanic-healing-of-moderm-mental-illneses', [\App\Http\Controllers\IbogaController::class, 'bwiti_tradice'])->name('iboga-bwiti-tradition_en');
    //THESE TWO ARE EXTRA!
    Route::get('/iboga-europe-czech-republic/history', [\App\Http\Controllers\IbogaController::class, 'bwiti_tradice'])->name('iboga-history_en');
    Route::get('/iboga-europe-czech-republic/oboga-vs-ibogaine', [\App\Http\Controllers\IbogaController::class, 'bwiti_tradice'])->name('iboga-iboga-vs-ibogaine_en');

    Route::get('/iboga-ceremonies-europe/preparation-for-first-iboga-healing-ceremony', [\App\Http\Controllers\CeremoniesController::class, "preparation"])->name('ceremonies-prep_en');
    Route::get('/iboga-ceremonies-europe/iboga-plant-medicine-plant-healing', [\App\Http\Controllers\CeremoniesController::class, "medical_guidelines"])->name('ceremonies-medical-guidelines_en');
    Route::get('/iboga-ceremonies-europe/eight-day-iboga-healing-stay', [\App\Http\Controllers\CeremoniesController::class, "eight_day_retreat"])->name('ceremonies-retreat_en');
    Route::get('/iboga-ceremonies-europe/your-first-iboga-healing-ceremony', [\App\Http\Controllers\CeremoniesController::class, "your_first_ceremony"])->name('ceremonies-first-ceremony_en');
    Route::get('/iboga-ceremonies-europe/iboga-retreats-europe-dates-and-prices', [\App\Http\Controllers\CeremoniesController::class, "dates"])->name('ceremonies-dates_en');

    Route::get('/about-us-iboga-czech-republic/nganga-traditional-bwiti-spiritual-healer', [\App\Http\Controllers\HomeController::class, "nganga"])->name('about-nganga_en');
    Route::get('/about-us-iboga-czech-republic/bwiti-shaman-moughenda', [\App\Http\Controllers\HomeController::class, "moughenda"])->name('about-moughenda_en');
    Route::get('/contact-iboga-healing-europe-healer', [\App\Http\Controllers\HomeController::class, "kontakt"])->name('contact_en');
    Route::post('/contactus', [\App\Http\Controllers\HomeController::class, 'mailContactForm'])->name('contactus')->name('contact-post_en');
});
// ======================================================================================================
    //         spanish
    // =====================================================================================================
    Route::get('/es/iboga', [\App\Http\Controllers\IbogaController::class, "what_is_iboga"])->name('iboga_es');
    Route::get('/es/iboga-ceremonies-europe/co-je-iboga',[\App\Http\Controllers\IbogaController::class, "what_is_iboga"])->name('iboga-what-is_es');
    Route::get('/es/iboga/jak-vam-iboga-muze-pomoci2',[\App\Http\Controllers\IbogaController::class,  "how_iboga_can_help"])->name('iboga-how-can-help_es');
    Route::get('/es/iboga/iboga-vs-ayahuasca', [\App\Http\Controllers\IbogaController::class, "iboga_vs_ayahuasca"])->name('iboga-iboga-vs-aya_es');
    Route::get('/es/iboga/gabon', [\App\Http\Controllers\IbogaController::class, "gabon"])->name('iboga-gabon_es');
    Route::get('/es/iboga/deprese', [\App\Http\Controllers\IbogaController::class, "deprese"])->name('iboga-depresion_es');
    Route::get('/es/iboga/bwiti-tradice', [\App\Http\Controllers\IbogaController::class, 'bwiti_tradice'])->name('iboga-bwiti-tradition_es');

    Route::get('/es/ceremonies/priprava',  [\App\Http\Controllers\CeremoniesController::class, "preparation"])->name('ceremonies-prep_es');
    Route::get('/es/ceremonias/lekarske-smernice',  [\App\Http\Controllers\CeremoniesController::class, "medical_guidelines"])->name('ceremonies-medical-guidelines_es');
    Route::get('/es/ceremonias/osmi-denni-iboga-wellness-pobyt', [ \App\Http\Controllers\CeremoniesController::class, "eight_day_retreat"])->name('ceremonies-retreat_es');
    Route::get('/es/ceremonias/prvni-ceremonial-a-co-ocekavat', [ \App\Http\Controllers\CeremoniesController::class, "your_first_ceremony"])->name('ceremonies-first-ceremony_es');
    Route::get('/es/ceremonias/terminy-a-ceny', [\App\Http\Controllers\CeremoniesController::class, "dates"])->name('ceremonies-dates_es');

    Route::get('/es/onas/nganga', [\App\Http\Controllers\HomeController::class, "nganga"])->name('about-nganga_es');
    Route::get('/es/onas/moughenda', [\App\Http\Controllers\HomeController::class, "moughenda"])->name('about-moughenda_es');
    Route::get('/es/kontakt', [\App\Http\Controllers\HomeController::class, "kontakt"])->name('contact_es');
    Route::post('/es/contactus', [\App\Http\Controllers\HomeController::class ,'mailContactForm'])->name('contactus')->name('contact-post_es');

// ======================================================================================================
//         P O L I S H
// =====================================================================================================
    Route::get('/pl/iboga', [\App\Http\Controllers\IbogaController::class, "what_is_iboga"])->name('iboga_pl');
    Route::get('/pl/iboga/co-je-iboga',[\App\Http\Controllers\IbogaController::class, "what_is_iboga"])->name('iboga-what-is_pl');
    Route::get('/pl/iboga/jak-vam-iboga-muze-pomoci',[\App\Http\Controllers\IbogaController::class,  "how_iboga_can_help"])->name('iboga-how-can-help_pl');
    Route::get('/pl/iboga/iboga-vs-ayahuasca', [\App\Http\Controllers\IbogaController::class, "iboga_vs_ayahuasca"])->name('iboga-iboga-iboga-vs-aya_pl');
    Route::get('/pl/iboga/gabon', [\App\Http\Controllers\IbogaController::class, "gabon"])->name('iboga-gabon_pl');
    Route::get('/pl/iboga/deprese', [\App\Http\Controllers\IbogaController::class, "deprese"])->name('iboga-depresion_pl');
    Route::get('/pl/iboga/bwiti-tradice', [\App\Http\Controllers\IbogaController::class, 'bwiti_tradice'])->name('iboga-bwiti-tradition_pl');

    Route::get('/pl/ceremonie/priprava',  [\App\Http\Controllers\CeremoniesController::class, "preparation"])->name('ceremonies-prep_pl');
    Route::get('/pl/ceremonie/lekarske-smernice',  [\App\Http\Controllers\CeremoniesController::class, "medical_guidelines"])->name('ceremonies-medical-guidelines_pl');
    Route::get('/pl/ceremonie/osmi-denni-iboga-wellness-pobyt', [ \App\Http\Controllers\CeremoniesController::class, "eight_day_retreat"])->name('ceremonies-retreat_pl');
    Route::get('/pl/ceremonie/prvni-ceremonial-a-co-ocekavat', [ \App\Http\Controllers\CeremoniesController::class, "your_first_ceremony"])->name('ceremonies-first-ceremony_pl');
    Route::get('/pl/ceremonie/terminy-a-ceny', [\App\Http\Controllers\CeremoniesController::class, "dates"])->name('ceremonies-dates_pl');

    Route::get('/pl/onas-iboga-polska/nganga', [\App\Http\Controllers\HomeController::class, "nganga"])->name('about-nganga_pl');
    Route::get('/pl/onas-iboga-polska/moughenda', [\App\Http\Controllers\HomeController::class, "moughenda"])->name('about-moughenda_pl');
    Route::get('/pl/kontakt', [\App\Http\Controllers\HomeController::class, "kontakt"])->name('contact_pl');
    Route::post('/pl/contactus', [\App\Http\Controllers\HomeController::class ,'mailContactForm'])->name('contactus')->name('contact-post_pl');

// ======================================================================================================
//         GERMAN
// =====================================================================================================
Route::get('/de/iboga-europa-tschechische-republik-deutschland', [\App\Http\Controllers\IbogaController::class, "what_is_iboga"])->name('iboga_de');
Route::get('/de/iboga-europa-tschechische-republik/was-ist-iboga-pflanzenmedizin',[\App\Http\Controllers\IbogaController::class, "what_is_iboga"])->name('iboga-what-is_de');
Route::get('/de/iboga-europa-tschechische-republik/wie-iboga-ihnen-helfen kann',[\App\Http\Controllers\IbogaController::class,  "how_iboga_can_help"])->name('iboga-how-can-help_de');
Route::get('/de/iboga-europa-tschechische-republik/iboga-vs-ayahuasca', [\App\Http\Controllers\IbogaController::class, "iboga_vs_ayahuasca"])->name('iboga-iboga-vs-aya_de');
Route::get('/de/iboga-europa-tschechische-republik/gabon', [\App\Http\Controllers\IbogaController::class, "gabon"])->name('iboga-gabon_de');
Route::get('/de/iboga-europa-tschechische-republik/alternative-Depression-Angst-Heilung', [\App\Http\Controllers\IbogaController::class, "deprese"])->name('iboga-depresion_de');
Route::get('/de/iboga-europa-tschechische-republik/bwiti-tradition-schamanische-heilung-geist-körper-geist', [\App\Http\Controllers\IbogaController::class, 'bwiti_tradice'])->name('iboga-bwiti-tradition_de');

Route::get('/de/iboga-schamanische-heilungszeremonien-europa/vorbereitung-auf-die-iboga-zeremonie',  [\App\Http\Controllers\CeremoniesController::class, "preparation"])->name('ceremonies-prep_de');
Route::get('/de/iboga-schamanische-heilungszeremonien-europa/medizinische-richtlinien',  [\App\Http\Controllers\CeremoniesController::class, "medical_guidelines"])->name('ceremonies-medical-guidelines_de');
Route::get('/de/iboga-schamanische-heilungszeremonien-europa/achttägiger-iboga-heilaufenthalt', [ \App\Http\Controllers\CeremoniesController::class, "eight_day_retreat"])->name('ceremonies-retreat_de');
Route::get('/de/iboga-schamanische-heilungszeremonien-europa/erste-iboga-zeremonie', [ \App\Http\Controllers\CeremoniesController::class, "your_first_ceremony"])->name('ceremonies-first-ceremony_de');
Route::get('/de/iboga-schamanische-heilungszeremonien-europa/termine-und-preise-von-europa-schamanischen-heilaufenthalten', [\App\Http\Controllers\CeremoniesController::class, "dates"])->name('ceremonies-dates_de');

Route::get('/de/uber-uns-iboga-deutschland/nganga-iboga-spirituelle-heilerin-deutschland', [\App\Http\Controllers\HomeController::class, "nganga"])->name('about-nganga_de');
Route::get('/de/uber-uns-iboga-deutschland/moughenda', [\App\Http\Controllers\HomeController::class, "moughenda"])->name('about-moughenda_de');
Route::get('/de/kontakt', [\App\Http\Controllers\HomeController::class, "kontakt"])->name('contact_de');
Route::post('/de/contactus', [\App\Http\Controllers\HomeController::class ,'mailContactForm'])->name('contactus')->name('contact-post_de');

// ======================================================================================================
//         FRENCH
// =====================================================================================================
Route::get('/fr/iboga', [\App\Http\Controllers\IbogaController::class, "what_is_iboga"])->name('iboga_fr');
Route::get('/fr/iboga/co-je-iboga',[\App\Http\Controllers\IbogaController::class, "what_is_iboga"])->name('iboga-what-is_fr');
Route::get('/fr/iboga/jak-vam-iboga-muze-pomoci',[\App\Http\Controllers\IbogaController::class,  "how_iboga_can_help"])->name('iboga-how-can-help_fr');
Route::get('/fr/iboga/iboga-vs-ayahuasca', [\App\Http\Controllers\IbogaController::class, "iboga_vs_ayahuasca"])->name('iboga-iboga-vs-aya_fr');
Route::get('/fr/iboga/gabon', [\App\Http\Controllers\IbogaController::class, "gabon"])->name('iboga-gabon_fr');
Route::get('/fr/iboga/deprese', [\App\Http\Controllers\IbogaController::class, "deprese"])->name('iboga-depresion_fr');
Route::get('/fr/iboga/bwiti-tradice', [\App\Http\Controllers\IbogaController::class, 'bwiti_tradice'])->name('iboga-bwiti-tradition_fr');

Route::get('/fr/zeremonien/priprava',  [\App\Http\Controllers\CeremoniesController::class, "preparation"])->name('ceremonies-prep_fr');
Route::get('/fr/zeremonien/lekarske-smernice',  [\App\Http\Controllers\CeremoniesController::class, "medical_guidelines"])->name('ceremonies-medical-guidelines_fr');
Route::get('/fr/zeremonien/osmi-denni-iboga-wellness-pobyt', [ \App\Http\Controllers\CeremoniesController::class, "eight_day_retreat"])->name('ceremonies-retreat_fr');
Route::get('/fr/zeremonien/prvni-ceremonial-a-co-ocekavat', [ \App\Http\Controllers\CeremoniesController::class, "your_first_ceremony"])->name('ceremonies-first-ceremony_fr');
Route::get('/fr/zeremonien/terminy-a-ceny', [\App\Http\Controllers\CeremoniesController::class, "dates"])->name('ceremonies-dates_fr');

Route::get('/fr/onas/nganga', [\App\Http\Controllers\HomeController::class, "nganga"])->name('about-nganga_fr');
Route::get('/fr/onas/moughenda', [\App\Http\Controllers\HomeController::class, "moughenda"])->name('about-moughenda_fr');
Route::get('/fr/kontakt', [\App\Http\Controllers\HomeController::class, "kontakt"])->name('contact_fr');
Route::post('/fr/contactus', [\App\Http\Controllers\HomeController::class ,'mailContactForm'])->name('contactus')->name('contact-post_fr');


// ======================================================================================================
//         ITALIAN
// =====================================================================================================
Route::get('/it/iboga-pianta-medicina-guarigione-della-mente', [\App\Http\Controllers\IbogaController::class, "what_is_iboga"])->name('iboga_it');
Route::get('/it/iboga-europa-repubblica-ceca/cose-la-medicina-vegetale-di-iboga',[\App\Http\Controllers\IbogaController::class, "what_is_iboga"])->name('iboga-what-is_it');
Route::get('/it/iboga-europa-repubblica-ceca/come-liboga-puo-aiutarti-a-guarire',[\App\Http\Controllers\IbogaController::class,  "how_iboga_can_help"])->name('iboga-how-can-help_it');
Route::get('/it/iboga-europa-repubblica-ceca/iboga-vs-ayahuasca', [\App\Http\Controllers\IbogaController::class, "iboga_vs_ayahuasca"])->name('iboga-iboga-vs-aya_it');
Route::get('/it/iboga-europa-repubblica-ceca/gabon', [\App\Http\Controllers\IbogaController::class, "gabon"])->name('iboga-gabon_it');
Route::get('/it/iboga-europa-repubblica-ceca/alternativa-olistica-guarigione-della-depressione-con-iboga', [\App\Http\Controllers\IbogaController::class, "deprese"])->name('iboga-depresion_it');
Route::get('/it/iboga-europa-repubblica-ceca/bwiti-tradizione-guarigione-sciamanica-della-mente-corpo-spirito', [\App\Http\Controllers\IbogaController::class, 'bwiti_tradice'])->name('iboga-bwiti-tradition_it');

Route::get('/it/cerimonie-di-guarigione-sciamanica-iboga-europa-repubblica-ceca/cerimonia di preparazione-per-iboga-guarigione',  [\App\Http\Controllers\CeremoniesController::class, "preparation"])->name('ceremonies-prep_it');
Route::get('/it/cerimonie-di-guarigione-sciamanica-iboga-europa-repubblica-ceca/iboga-pianta-medicina-medico-linee-guida',  [\App\Http\Controllers\CeremoniesController::class, "medical_guidelines"])->name('ceremonies-medical-guidelines_it');
Route::get('/it/cerimonie-di-guarigione-sciamanica-iboga-europa-repubblica-ceca/soggiorno-curativo-di-otto-giorni-con-liboga', [ \App\Http\Controllers\CeremoniesController::class, "eight_day_retreat"])->name('ceremonies-retreat_it');
Route::get('/it/cerimonie-di-guarigione-sciamanica-iboga-europa-repubblica-ceca/prima-cerimonia-di-iboga', [ \App\Http\Controllers\CeremoniesController::class, "your_first_ceremony"])->name('ceremonies-first-ceremony_it');
Route::get('/it/cerimonie-di-guarigione-sciamanica-iboga-europa-repubblica-ceca/date-e-prezzi', [\App\Http\Controllers\CeremoniesController::class, "dates"])->name('ceremonies-dates_it');

Route::get('/it/chi-siamo/nganga-iboga-guaritore-spirituale', [\App\Http\Controllers\HomeController::class, "nganga"])->name('about-nganga_it');
Route::get('/it/chi-siamo/bwiti-sciamano-guaritore-e-insegnante-moughenda', [\App\Http\Controllers\HomeController::class, "moughenda"])->name('about-moughenda_it');
Route::get('/it/contattare-european-iboga-healer', [\App\Http\Controllers\HomeController::class, "kontakt"])->name('contact_it');
Route::post('/it/contactus', [\App\Http\Controllers\HomeController::class ,'mailContactForm'])->name('contactus')->name('contact-post_it');

// ======================================================================================================
//         RUSSIAN
// =====================================================================================================
Route::get('/ru', [\App\Http\Controllers\HomeController::class, "index"])->name('home_ru');
Route::get('/ru/ибога', [\App\Http\Controllers\IbogaController::class, "what_is_iboga"])->name('iboga_ru');
Route::get('/ru/ибога/что-такое-ибога',[\App\Http\Controllers\IbogaController::class, "what_is_iboga"])->name('iboga-what-is_ru');
Route::get('/ru/ибога/джак-вам-ибога-музе-помочи',[\App\Http\Controllers\IbogaController::class,  "how_iboga_can_help"])->name('iboga-how-can-help_ru');
Route::get('/ru/ибога/ибога-против-аяуаски', [\App\Http\Controllers\IbogaController::class, "iboga_vs_ayahuasca"])->name('iboga-iboga-vs-aya_ru');
Route::get('/ru/ибога/Габон', [\App\Http\Controllers\IbogaController::class, "gabon"])->name('iboga-gabon_ru');
Route::get('/ru/iибога/угнетать', [\App\Http\Controllers\IbogaController::class, "deprese"])->name('iboga-depresion_ru');
Route::get('/ru/ибога/бвити-традиция', [\App\Http\Controllers\IbogaController::class, 'bwiti_tradice'])->name('iboga-bwiti-tradition_ru');

Route::get('/ru/церемонии/подготовка',  [\App\Http\Controllers\CeremoniesController::class, "preparation"])->name('ceremonies-prep_ru');
Route::get('/ru/церемонии/медицинские-рекомендации',  [\App\Http\Controllers\CeremoniesController::class, "medical_guidelines"])->name('ceremonies-medical-guidelines_ru');
Route::get('/ru/церемонии/восьмидневное-лечение-ибогой', [ \App\Http\Controllers\CeremoniesController::class, "eight_day_retreat"])->name('ceremonies-retreat_ru');
Route::get('/ru/церемонии/первый-церемониальный-и-что-ожидать', [ \App\Http\Controllers\CeremoniesController::class, "your_first_ceremony"])->name('ceremonies-first-ceremony_ru');
Route::get('/ru/церемонии/срок-службы', [\App\Http\Controllers\CeremoniesController::class, "dates"])->name('ceremonies-dates_ru');

Route::get('/ru/о-нас/Нганга-духовный-целитель-растение-медицина', [\App\Http\Controllers\HomeController::class, "nganga"])->name('about-nganga_ru');
Route::get('/ru/о-на/бвити-шаман-мохенда', [\App\Http\Controllers\HomeController::class, "moughenda"])->name('about-moughenda_ru');
Route::get('/ru/контакт', [\App\Http\Controllers\HomeController::class, "kontakt"])->name('contact_ru');
Route::post('/ru/contactus', [\App\Http\Controllers\HomeController::class ,'mailContactForm'])->name('contactus')->name('contact-post_ru');



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
//Route::get('/obrady/priprava', [\App\Http\Controllers\CeremoniesController::class, "preparation"]);
//Route::get('/obrady/lekarske-smernice', [\App\Http\Controllers\CeremoniesController::class, "medical_guidelines"]);
//Route::get('/obrady/osmi-denni-iboga-wellness-pobyt', [\App\Http\Controllers\CeremoniesController::class, "eight_day_retreat"]);
//Route::get('/obrady/prvni-ceremonial-a-co-ocekavat', [\App\Http\Controllers\CeremoniesController::class, "your_first_ceremony"]);
//Route::get('/obrady/terminy-a-ceny', [\App\Http\Controllers\CeremoniesController::class, "dates"]);



//
//Route::get('/iboga', [\App\Http\Controllers\IbogaController::class, "what_id_iboga"]);
//Route::get('/iboga/co-je-iboga', [\App\Http\Controllers\IbogaController::class, "what_is_iboga"]);
//Route::get('/iboga/jak-vam-iboga-muze-pomoci', [\App\Http\Controllers\IbogaController::class, "jak_vam_iboga_muze_pomoci"]);
//Route::get('/iboga/iboga-vs-ayahuasca', [\App\Http\Controllers\IbogaController::class, "iboga_vs_ayahuasca"]);
//Route::get('/iboga/gabon', [\App\Http\Controllers\IbogaController::class, "gabon"]);
//Route::get('/iboga/deprese', [\App\Http\Controllers\IbogaController::class, "deprese"]);
//Route::get('/iboga/bwiti-tradice', [\App\Http\Controllers\IbogaController::class, "bwiti_tradice"]);
//
//Route::get('/obrady/priprava', [\App\Http\Controllers\CeremoniesController::class, "preparation"]);
//Route::get('/obrady/lekarske-smernice', [\App\Http\Controllers\CeremoniesController::class, "medical_guidelines"]);
//Route::get('/obrady/osmi-denni-iboga-lecebny-pobyt', [\App\Http\Controllers\CeremoniesController::class, "eight_day_retreat"]);
//Route::get('/obrady/prvni-ceremonial-a-co-ocekavat', [\App\Http\Controllers\CeremoniesController::class, "your_first_ceremony"]);
//Route::get('/obrady/terminy-a-ceny', [\App\Http\Controllers\CeremoniesController::class, "dates"]);
//
//Route::get('/iboga-ceremonie-ceska-republika/priprava', [\App\Http\Controllers\CeremoniesController::class, "preparation"])->name('ceremonies-preparation_cz');
//Route::get('/iboga-ceremonie-cechy/lekarske-smernice', [\App\Http\Controllers\CeremoniesController::class, "medical_guidelines"])->name('ceremonies-medical-guidelines_cz');
//Route::get('/iboga-ceremonie-cechy/osmi-denni-iboga-lecebny-pobyt', [\App\Http\Controllers\CeremoniesController::class, "eight_day_retreat"])->name('ceremonies-retreat_cz');
//Route::get('/iboga-zkusenosti-ceremonie-cechy/prvni-ceremonie-a-co-ocekavat', [\App\Http\Controllers\CeremoniesController::class, "your_first_ceremony"])->name('ceremonies-first-ceremony_cz');
//Route::get('/iboga-ceremonie-cechy/terminy-a-ceny', [\App\Http\Controllers\CeremoniesController::class, "dates"])->name('ceremonies-dates_cz');
//
//
//Route::get('/onas/nganga', [\App\Http\Controllers\HomeController::class, "nganga"]);
//Route::get('/onas/moughenda', [\App\Http\Controllers\HomeController::class, "moughenda"]);
//Route::get('/kontakt', [\App\Http\Controllers\HomeController::class, "kontakt"]);
//Route::post('/contactus', [\App\Http\Controllers\HomeController::class, 'mailContactForm'])->name('contactus');


