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
Route::get('inscription', [App\Http\Controllers\HomeController::class, 'inscription'])->name('inscription');

//Liste des formateurs :
Route::get('liste_formateurs', [App\Http\Controllers\FormateurController::class, 'listeFormateurs'])->name('liste_formateurs');

//Les pages resources
Route::resource('/formateur', \App\Http\Controllers\FormateurController::class);
Route::resource('/entreprise', \App\Http\Controllers\EntrepriseController::class);
Route::resource('/annonce', \App\Http\Controllers\AnnonceController::class);

// user
Route::put('modif_user', [App\Http\Controllers\UserController::class, 'update'])->name('modif_user');
Route::delete('supprimer_user', [App\Http\Controllers\UserController::class, 'destroy'])->name('supprimer_user');

//update disponibilité

Route::put('update_dispo', [App\Http\Controllers\FormateurController::class, 'update_dispo'])->name('update_dispo');

//pages inscription pour les etapes 2 :
Route::get('inscription_formateur_etape_2', [App\Http\Controllers\Auth\RegisterController::class, 'inscription_formateur_etape_2'])->name('inscription_formateur_etape_2');
Route::get('inscription_entreprise_etape_2', [App\Http\Controllers\Auth\RegisterController::class, 'inscription_entreprise_etape_2'])->name('inscription_entreprise_etape_2');
