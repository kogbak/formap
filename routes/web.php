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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('inscription', [App\Http\Controllers\InscriptionController::class, 'index'])->name('inscription');
Route::resource('/formateur', \App\Http\Controllers\FormateurController::class);
Route::resource('/entreprise', \App\Http\Controllers\EntrepriseController::class);


Route::get('inscription_formateur_etape_2', [App\Http\Controllers\Auth\RegisterController::class, 'inscription_formateur_etape_2'])->name('inscription_formateur_etape_2');
