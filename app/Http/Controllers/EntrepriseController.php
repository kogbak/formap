<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Entreprise;
use Illuminate\Http\Request;
use App\Models\Formateur;
use App\Models\User;
use Auth;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session()->put('choix_inscription','entreprise' );
        return view('inscription_entreprise');
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
            'siret' => 'required',
            'nom' => 'required', 
            'description' => 'required',
            
            
        ]);

        Entreprise::create([
            'user_id' => session()->get('user_id'),
            'image' => uploadImage($request),
            'siret' => $request['siret'],
            'nom' => $request['nom'],
            'description' => $request['description'],
            
            
        ]);

        return redirect()->route('login')->with('message', 'Votre compte entreprise a était créer avec succès 🙂');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($id)
    {
        $user = Auth::user();        
        $user->load('entreprise');  
        return view('profil_entreprise', compact('user'));

        // $user = Auth::user();        
        // $user->load('entreprise', 'annonces');  
        // return view('profil_entreprise', compact('user', 'annonces'));
      
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
        $user->load('entreprise');  
        return view('modif_entreprise', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Entreprise $entreprise, Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required', 
                         
        ]);

        $entreprise->nom = $request->input('nom');
        $entreprise->description = $request->input('description');
        $entreprise->image = uploadImage($request);
        
        $entreprise->save();

        return redirect()->route('entreprise.edit', compact('entreprise'))->with('message', 'Le compte a bien été modifié 🙂');
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
