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
Route::get('/iboga', [\App\Http\Controllers\IbogaController::class, "index"]);
Route::get('/iboga/jak-vam-iboga-muze-pomoci', [\App\Http\Controllers\IbogaController::class, "jak_vam_iboga_muze_pomoci"]);
Route::get('/iboga/iboga-vs-ayahuasca', [\App\Http\Controllers\IbogaController::class, "iboga_vs_ayahuasca"]);
Route::get('/iboga', [\App\Http\Controllers\IbogaController::class, "index"]);
Route::get('/iboga/deprese', [\App\Http\Controllers\IbogaController::class, "deprese"]);
Route::get('/iboga/bwiti-tradice', [\App\Http\Controllers\IbogaController::class, "bwiti_tradice"]);

Route::get('/obrady/vse-o-iboga-obradech', [\App\Http\Controllers\ObradyController::class, "iboga_obrady"]);
Route::get('/obrady/lekarske-smernice', [\App\Http\Controllers\ObradyController::class, "lekarske_smernice"]);


Route::get('/onas/nganga', [\App\Http\Controllers\HomeController::class, "nganga"]);
Route::get('/onas/moughenda', [\App\Http\Controllers\HomeController::class, "moughenda"]);

