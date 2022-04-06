<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Formateur;
use App\Models\Domaine;

class FormateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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
            'image' => session()->get('image'),
            'age' => session()->get('age'),
            'sexe' => session()->get('sexe'),
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('profil_formateur');
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
}
