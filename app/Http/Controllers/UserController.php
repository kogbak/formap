<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;
use Auth;
use App\Models\Formateur;

class UserController extends Controller
{
  

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


        if (Auth::user()->entreprise) {

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
        $user = Auth::user();


        if ($user->formateur) {

            $formateur = Formateur::where('user_id', $user->id)->get();
            $formateur = $formateur[0];
            $formateur->delete();
        } else {
            $entreprise = Entreprise::where('user_id', $user->id)->get();
            $entreprise = $entreprise[0];
            $entreprise->delete();
        }

        $user->delete();
        return redirect()->route('accueil')->with('message', 'Le compte a bien été supprimé mais nous somme navrés de vous voir partir 🙁');
    }
}
