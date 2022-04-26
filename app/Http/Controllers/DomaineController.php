<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domaine;

class DomaineController extends Controller
{
  

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

        ]);

        Domaine::create([

            'domaine' => $request['domaine'],


        ]);

        return redirect()->route('admin.index')->with('message', 'Le domaine a était créer avec succès 🙂');
    }

 
}
