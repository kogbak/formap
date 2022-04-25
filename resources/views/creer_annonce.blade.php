@extends('layouts.app')

@section('content')
    <html>

    <body>
        <div class="mini-header-violet mb-5"></div>
        <div class="container">
            <div class="row mt-3">
                <div class="col-12">



                    <h4 class="text-center" style="color:#6c6dda;">Créer une annonce</h4>

                    <form method="POST" action="{{ route('annonce.store') }}">
                        @csrf

                        <div class="modif-input d-flex flex-column w-50 mx-auto">

                            <input type="hidden" name="entreprise_id" value="{{Auth::user()->entreprise->id}}">
                            
                            <label class="mt-3" for="domaine">Domaine rechercher:</label>
                            <select name="domaine" id="domaine">
                                <option value="">Choisissez le domaine rechercher</option>
                                @foreach ($domaines as $domaine)
                                    <option value="{{$domaine->id}}">{{ $domaine->domaine }}</option>
                                @endforeach
                            </select>

                            <label class="mt-3" for="titre">Titre de l'annonce:</label>
                            <input type="text" id="titre" name="titre" required maxlength="50">

                            <label class="mt-3" for="description_courte">Description courte:</label>
                            <textarea id="description_courte" name="description_courte" rows="3" cols="33"
                                placeholder="Un petite résumé de votre recherche"></textarea>

                            <label class="mt-3" for="description_longue">Description longue:</label>
                            <textarea id="description_longue" name="description_longue" rows="8" cols="33"
                                placeholder="Une description de votre entreprise et de ce que vous rechercher"></textarea>

                            <label class="mt-3" for="ville">Ville du poste de travail:</label>
                            <input type="text" id="ville" name="ville" required maxlength="30">

                            <label class="mt-3" for="code_postal">Code postal du poste de travail:</label>
                            <input type="text" id="code_postal" name="code_postal" required maxlength="5" max="5">

                        </div>

                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <input type="submit" value="Confirmer" class="bouton-suivant mt-4 mb-5">
                            </div>
                    </form>


                </div>
            </div>

        </div>

    </body>

    </html>
@endsection
