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

Route::get('/{en}', [\App\Http\Controllers\HomeController::class, "index"]);

Route::controller(\App\Http\Controllers\IbogaController::class)->group(function() {
    Route::get('/{en}/iboga-bwiti-retraeats-czech-republic-europe', 'index');
});

Route::controller(\App\Http\Controllers\IbogaController::class)->group(function($locale) {
    Route::get('/{locale}/iboga', "what_is_iboga");
    Route::get('/{locale}/iboga/co-je-iboga',  "what_is_iboga");
    Route::get('/{locale}/iboga/jak-vam-iboga-muze-pomoci',  "jak_vam_iboga_muze_pomoci");
    Route::get('/{locale}/iboga/iboga-vs-ayahuasca',  "iboga_vs_ayahuasca");
    Route::get('/{locale}/iboga/gabon', "gabon");
    Route::get('/{locale}/iboga/deprese',  "deprese");
//    Route::get('/{locale}/iboga/bwiti-tradice',  "bwiti_tradice");

    Route::get('/{locale}/iboga/bwiti-tradice', 'bwiti_tradice');


});


Route::get('/set-language/{lang}', [\App\Http\Controllers\HomeController::class, 'setLanguage'])->name('set.language');




//Route::get('/iboga', [\App\Http\Controllers\IbogaController::class, "what_id_iboga"]);
Route::get('/iboga/co-je-iboga', [\App\Http\Controllers\IbogaController::class, "what_is_iboga"]);
//Route::get('/iboga/jak-vam-iboga-muze-pomoci', [\App\Http\Controllers\IbogaController::class, "jak_vam_iboga_muze_pomoci"]);
//Route::get('/iboga/iboga-vs-ayahuasca', [\App\Http\Controllers\IbogaController::class, "iboga_vs_ayahuasca"]);
//Route::get('/iboga/gabon', [\App\Http\Controllers\IbogaController::class, "gabon"]);
//Route::get('/iboga/deprese', [\App\Http\Controllers\IbogaController::class, "deprese"]);
Route::get('/iboga/bwiti-tradice', [\App\Http\Controllers\IbogaController::class, "bwiti_tradice"]);

Route::get('/obrady/priprava', [\App\Http\Controllers\ObradyController::class, "preparation"]);
Route::get('/obrady/lekarske-smernice', [\App\Http\Controllers\ObradyController::class, "lekarske_smernice"]);
Route::get('/obrady/osmi-denni-iboga-wellness-pobyt', [\App\Http\Controllers\ObradyController::class, "eight_day_retreat"]);
Route::get('/obrady/prvni-ceremonial-a-co-ocekavat', [\App\Http\Controllers\ObradyController::class, "your_first_ceremony"]);
Route::get('/obrady/terminy-a-ceny', [\App\Http\Controllers\ObradyController::class, "dates"]);


Route::get('/onas/nganga', [\App\Http\Controllers\HomeController::class, "nganga"]);
Route::get('/onas/moughenda', [\App\Http\Controllers\HomeController::class, "moughenda"]);
Route::get('/kontakt', [\App\Http\Controllers\HomeController::class, "kontakt"]);
Route::post('/contactus', [\App\Http\Controllers\HomeController::class, 'mailContactForm'])->name('contactus');

