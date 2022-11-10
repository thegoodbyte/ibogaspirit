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

