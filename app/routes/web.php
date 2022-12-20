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
Route::get('/iboga', [\App\Http\Controllers\IbogaController::class, "what_id_iboga"]);
Route::get('/iboga/co-je-iboga', [\App\Http\Controllers\IbogaController::class, "what_is_iboga"]);
Route::get('/iboga/jak-vam-iboga-muze-pomoci', [\App\Http\Controllers\IbogaController::class, "jak_vam_iboga_muze_pomoci"]);
Route::get('/iboga/iboga-vs-ayahuasca', [\App\Http\Controllers\IbogaController::class, "iboga_vs_ayahuasca"]);
Route::get('/iboga/gabon', [\App\Http\Controllers\IbogaController::class, "gabon"]);
Route::get('/iboga/deprese', [\App\Http\Controllers\IbogaController::class, "deprese"]);
Route::get('/iboga/bwiti-tradice', [\App\Http\Controllers\IbogaController::class, "bwiti_tradice"]);

Route::get('/obrady/priprava', [\App\Http\Controllers\CeremoniesController::class, "preparation"]);
Route::get('/obrady/lekarske-smernice', [\App\Http\Controllers\CeremoniesController::class, "medical_guidelines"]);
Route::get('/obrady/osmi-denni-iboga-lecebny-pobyt', [\App\Http\Controllers\CeremoniesController::class, "eight_day_retreat"]);
Route::get('/obrady/prvni-ceremonial-a-co-ocekavat', [\App\Http\Controllers\CeremoniesController::class, "your_first_ceremony"]);
Route::get('/obrady/terminy-a-ceny', [\App\Http\Controllers\CeremoniesController::class, "dates"]);

Route::get('/iboga-ceremonie-ceska-republika/priprava', [\App\Http\Controllers\CeremoniesController::class, "preparation"])->name('ceremonies-preparation_cz');
Route::get('/iboga-ceremonie-cechy/lekarske-smernice', [\App\Http\Controllers\CeremoniesController::class, "medical_guidelines"])->name('ceremonies-medical-guidelines_cz');
Route::get('/iboga-ceremonie-cechy/osmi-denni-iboga-lecebny-pobyt', [\App\Http\Controllers\CeremoniesController::class, "eight_day_retreat"])->name('ceremonies-retreat_cz');
Route::get('/iboga-zkusenosti-ceremonie-cechy/prvni-ceremonie-a-co-ocekavat', [\App\Http\Controllers\CeremoniesController::class, "your_first_ceremony"])->name('ceremonies-first-ceremony_cz');
Route::get('/iboga-ceremonie-cechy/terminy-a-ceny', [\App\Http\Controllers\CeremoniesController::class, "dates"])->name('ceremonies-dates_cz');


Route::get('/onas/nganga', [\App\Http\Controllers\HomeController::class, "nganga"]);
Route::get('/onas/moughenda', [\App\Http\Controllers\HomeController::class, "moughenda"]);
Route::get('/kontakt', [\App\Http\Controllers\HomeController::class, "kontakt"]);
Route::post('/contactus', [\App\Http\Controllers\HomeController::class, 'mailContactForm'])->name('contactus');

