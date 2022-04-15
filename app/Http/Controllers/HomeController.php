<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annonce;
use App\Models\Entreprise;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $annonces =  Annonce::with('domaine', 'entreprise')->get();
        return view('accueil', compact('annonces'));
    }

    public function inscription()
    {
        return view('inscription');
    }
}
