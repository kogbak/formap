<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annonce;
use App\Models\Domaine;
use Auth;
use Illuminate\Auth\Events\Validated;
use App\Models\Entreprise;

class AnnonceController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $domaines = Domaine::all();
        return view('creer_annonce', compact('domaines'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([


            'domaine' => 'required',
            'titre' => 'required',
            'description_courte' => 'required',
            'description_longue' => 'required',
            'ville' => 'required',
            'code_postal' => 'required',


        ]);

        Annonce::create([
            'domaine_id' => $request['domaine'],
            'entreprise_id' => $request['entreprise_id'],
            'titre' => $request['titre'],
            'description_courte' => $request['description_courte'],
            'description_longue' => $request['description_longue'],
            'ville' => $request['ville'],
            'code_postal' => $request['code_postal'],


        ]);

        return redirect()->route('entreprise.show', Auth::user()->entreprise)->with('message', 'Votre annonce a était créer avec succès 🙂');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Entreprise $entreprise)
    {
        $entreprise->load('annonces');
        return view('profil_entreprise', compact('entreprise'));

        // comment faire ????????????????????????????????????????????????
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annonce $annonce)
    {
        $annonce->delete();
        return redirect()->route('entreprise.show', Auth::user()->entreprise)->with('message', 'Votre annonce a était supprimer avec succès 🙂');
    }



    public function search(Request $request)
    {
        $request->validate([
            'domaine' => 'nullable|max:20|min:4|string',
        ]);

        $recherche_domaine = strtolower($request['domaine']);

        $domaine = Domaine::where('domaine', 'like', "$recherche_domaine%")
            ->with("annonces")->get();

        return view('accueil', compact('domaine'));
    }
}
