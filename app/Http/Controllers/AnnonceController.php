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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

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

            // 'domaine' => 'required',
            'domaine' => $request->input('domaine'),
            'titre' => 'required',
            'description_courte' => 'required', 
            'description_longue' => 'required',
            'ville' => 'required',
            'code_postal' => 'required',
            
            
        ]);

        Annonce::create([
            'domaine' => $request['domaine'],
            'titre' => $request['titre'],
            'description_courte' => $request['description_courte'],
            'description_longue' => $request['description_longue'],
            'ville' => $request['ville'],
            'code_postal' => $request['code_postal'],
            
            
        ]);

        return redirect()->route('entreprise.show')->with('message', 'Votre annonce a était créer avec succès 🙂');

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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function search(Request $request)
    {
        $request->validate([
            'domaine' => 'required|max:20|min:4|string',
            'ville' => 'nullable|max:50|min:1|string'
        ]);

        $recherche_domaine = strtolower($request['domaine']);
        $recherche_ville = strtolower($request['ville']);

        $domaine =  Domaine::where('domaine', 'like', "$recherche_domaine%")
            ->with(['annonces' => function ($query, $recherche_ville) {
                $query->where('ville', 'like', $recherche_ville)->latest()->paginate(10);
            }])->get();

        $domaine = $domaine[0];
        return view('accueil', compact('domaine'));
    }
}
