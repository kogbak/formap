<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formateur;
use App\Models\Domaine;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class FormateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listeFormateurs()
    {
        $formateurs = Formateur::with('user', 'domaines')->get();
        return view('liste_formateurs', compact('formateurs'));
    }


    public function index()
    {
        session()->put('choix_inscription', 'formateur');
        return view('inscription_formateur');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'domaines' => 'required',
            'diplomes' => 'required',
            'experiences' => 'required',
            'annees_experience' => 'required',
            'kms' => 'required|max:40',
            'siret' => 'min:17|max:17',

        ]);
        
        $formateur = Formateur::create([
            'user_id' => session()->get('user_id'),         
            'age' => session()->get('age'),
            'sexe' => session()->get('sexe'),
            'image' => uploadImage($request),
            'diplomes' => $request['diplomes'],
            'experiences' => $request['experiences'],
            'annees_experience' => $request['annees_experience'],
            'kms' => $request['kms'],
            'siret' => $request['siret'],

        ]);

        // sauvegarde de ses domaines dans table domaines_formateurs (attach)

        $domainesChoisis = array_filter(explode('-', $request["domaines"])); // récupération domaines choisis

        $domaines = Domaine::all(); // récupération de tous les domaines

        // faire le lien entre un domaine dans $domainesChoisis et son id dans $domaines

        foreach ($domaines as $domaine) {    // on boucle sur tous les domaines

            if (in_array($domaine->nom, $domainesChoisis)) {   // pour chaque domaine, si son nom a été choisi
                $formateur->domaines->attach($domaine->id);  // je l'insère dans la table intermédiaire
            }
        }

        return redirect()->route('login')->with('message', 'Votre compte formateur a était créer avec succès');
    }


    public function show($id)
    {

        $user = Auth::user();
        $user->load('formateur');
        return view('profil_formateur', compact('user'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = Auth::user();
        $user->load('formateur');
        return view('modif_formateur', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Formateur $formateur, Request $request)
    {
        $request->validate([
            'diplomes' => 'required',
            'experiences' => 'required',
            'annees_experience' => 'required',

        ]);


        $formateur->update($request->except('_token'));

        return redirect()->route('formateur.edit', compact('formateur'))->with('message', 'Le compte a bien été modifié 🙂');
    }


    public function update_dispo(Formateur $formateur, Request $request)
    {

        $user = Auth::user();
        $formateur = Formateur::where('user_id', $user->id)->get();
        $formateur = $formateur[0];

        $request->validate([

            'disponible' => 'required',
            'date_debut_dispo' => 'required',
            'date_fin_dispo' => 'required',
            'kms' => 'required',
        ]);
       

        $formateur->update([
            'disponible' => intval($request->input('disponible')),
            'date_debut_dispo' => $request->input('date_debut_dispo'),
            'date_fin_dispo' => $request->input('date_fin_dispo'),
            'kms' => intval($request->input('kms'))
        ]);

        return redirect()->route('formateur.show', compact('formateur'))->with('message', 'Le compte a bien été modifié 🙂');
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
}
