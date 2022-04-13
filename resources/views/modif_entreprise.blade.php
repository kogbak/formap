@extends('layouts.app')

@section('content')
    <html>

    <body>
        <div class="mini-header-violet mb-5"></div>
        <div class="container">
            <div class="row mt-3">
                <div class="col-12">

                    @if (session()->has('message'))
                        <p class="alert alert-success">{{ session()->get('message') }}</p>
                    @endif

                    <h4 class="text-center" style="color:#6c6dda;">Modifier information entreprise</h4>

                    <form method="POST" action="{{ route('modif_user') }}">
                        @csrf
                        @method('PUT')

                        <div class="modif-input d-flex flex-column w-50 mx-auto">

                            <label class="mt-3" for="email">Adresse email:</label>
                            <input type="text" id="email" name="email" required maxlength="50"
                                value=" {{ $user->email }}">

                            <label class="mt-3" for="telephone">Téléphone:</label>
                            <input type="text" id="telephone" name="telephone" required maxlength="50"
                                value=" {{ $user->telephone }}">

                            <label class="mt-3" for="adresse">Adresse:</label>
                            <input type="text" id="adresse" name="adresse" required maxlength="30"
                                value=" {{ $user->adresse }}">

                            <label class="mt-3" for="ville">Ville:</label>
                            <input type="text" id="ville" name="ville" required maxlength="30"
                                value=" {{ $user->ville }}">

                            <label class="mt-3" for="code_postal">Code postal:</label>
                            <input type="text" id="code_postal" name="code_postal" required maxlength="5"
                                value=" {{ $user->code_postal }}">

                        </div>

                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <input type="submit" value="Modifier" class="bouton-suivant mt-4 mb-5">
                            </div>
                    </form>

                    <h4 class="text-center" style="color:#6c6dda;">Modifier description entreprise</h4>
                    <form method="POST" action="{{ route('entreprise.update', $user->entreprise) }}">
                        @csrf
                        @method('PUT')
                        <div class="modif-input d-flex flex-column w-50 mx-auto">

                            <label class="mt-3" for="nom">Raison social:</label>
                            <input type="String" id="nom" name="nom" required maxlength="50"
                                value=" {{ $user->entreprise->nom }}">

                            <label class="mt-3" for="experiences">Description entreprise :</label>
                            <textarea id="description" name="description" rows="8" cols="33"
                                class="mt-3">{{ $user->entreprise->description }}</textarea>

                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                    <input type="submit" value="Modifier" class="bouton-suivant mt-4 mb-5">
                                </div>
                            </div>
                    </form>

                    <form method="POST" action="{{ route('supprimer_user') }}">
                        @csrf
                        @method('DELETE')
                        <div class="col-12 d-flex flex-column mx-auto w-75 mt-5">
                            <div class="row ">
                                <h4 class="text-center" style="color:#a9a9a9;">Supprimer mon compte:</h4>
                                <div
                                    class="explication_supression mb-3 mt-3 d-flex justify-content-center align-items-center">
                                    &#x26A0;
                                    La supression de votre compte supprime la totalité de vos information personnel.
                                    Attention
                                    cela est irreversible !</div>
                                <div class="col d-flex justify-content-center">
                                    <input type="submit" value="supprimer" class="bouton-supprimer mt-4 mb-5">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </body>

    </html>
@endsection
