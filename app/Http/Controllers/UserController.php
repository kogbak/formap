<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;
use Auth;
use App\Models\Formateur;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'telephone' => 'required',
            'adresse' => 'required',
            'ville' => 'required',
            'code_postal' => 'required',
        ]);

        $user = Auth::user();
        $user->update($request->except('_token'));

        
        if (session($user->entreprise)) {

            return redirect()->route('entreprise.edit', $user->entreprise)->with('message', 'Le compte a bien été modifié 🙂');
        } else {

            return redirect()->route('formateur.edit', $user->formateur)->with('message', 'Le compte a bien été modifié 🙂');
        }
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        // récupérer formateur ou entreprise associer au user
        // et apres delete user je dois delete formateur ou entreprise associé

        $formateur = Formateur::with('user')->get();
        $entreprise = Entreprise::with('user')->get();
        $user = Auth::user();

        if (formateur) {
            $user->formateur->delete();
        }else{
            $user->entreprise->delete();
        }

        return redirect()->route('accueil')->with('message', 'Nous somme navrés de vous voir partir 🙁');
    }
}
