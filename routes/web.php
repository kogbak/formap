<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



Auth::routes();

Route::get('/accueil', [App\Http\Controllers\HomeController::class, 'index'])->name('accueil');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('accueil');

//page inscription choix entre formateur et entreprise :
Route::get('inscription', [App\Http\Controllers\InscriptionController::class, 'index'])->name('inscription');


//Les pages resources
Route::resource('/formateur', \App\Http\Controllers\FormateurController::class);
Route::resource('/entreprise', \App\Http\Controllers\EntrepriseController::class);


//pages inscription pour les etapes 2 :
Route::get('inscription_formateur_etape_2', [App\Http\Controllers\Auth\RegisterController::class, 'inscription_formateur_etape_2'])->name('inscription_formateur_etape_2');
Route::get('inscription_entreprise_etape_2', [App\Http\Controllers\Auth\RegisterController::class, 'inscription_entreprise_etape_2'])->name('inscription_entreprise_etape_2');
