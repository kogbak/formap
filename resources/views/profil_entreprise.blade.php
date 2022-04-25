@extends('layouts.app')

@section('content')
    <html>

    <body>
        <div class="header-violet d-flex flex-column justify-content-center align-items-center mb-5">
            <h3>Mon profil recruteur</h3>
            <p style="color: #d6d7ff">ici vous pouvez modifier vos coordonnée et aussi créer de nouvel annonce</p>
        </div>
        @if (session()->has('message'))
            <p class="alert alert-success">{{ session()->get('message') }}</p>
        @endif
        <div class="container">
            <div class="row d-flex justify-content-center ">

                <div class="col-12 d-flex justify-content-center">
                    <form method="GET" action="{{ route('entreprise.edit', $user->entreprise) }}">
                        @csrf
                        <button type="submit"
                            class="bouton_modifier_profil d-flex flex-column justify-content-center align-items-center">
                            <div class="carre_plus mb-3"></div>Modifier profil
                        </button>
                    </form>

                    <form method="GET" action="{{ route('annonce.create', $user->entreprise) }}">
                        @csrf
                        <button type="submit"
                            class="bouton_modifier_profil ms-5 d-flex flex-column justify-content-center align-items-center">
                            <div class="carre_plus mb-3"></div>Créer une annonce
                        </button>
                    </form>

                </div>
            </div>
            <div class="col-12 flex-column d-flex justify-content-center align-items-center mt-5">
                <div class="row mt-5">
                    <h5 style="color: #6c6dda; ">Mes annonces:</h5>
                </div>

                <div class="row mt-5">
                    @if (Auth::user()->entreprise->annonces >= true)
                        @foreach (Auth::user()->entreprise->annonces as $annonce)
                            <div class="col-10">
                                <div class="cadre_annonce mt-2 ">
                                    <div class="barre_violet_annonce ms-3">
                                        <div class="col-12 mb-5">
                                            <div class="row ms-2">
                                                <div class="d-flex">
                                                    <p class="titre_annonce">

                                                        {{ mb_strtoupper($annonce->titre) }}

                                                    </p>
                                                    <i class="fa-solid fa-location-dot fa-lg ms-3"
                                                        style="line-height: 25px; color:#3f3f3f;"></i>
                                                    <p class="ville_code ms-2">{{ $annonce->ville }}</p>
                                                    <p class="ville_code ms-2">({{ $annonce->code_postal }})</p>
                                                    <p class="domaine_annonce ms-2">{{ $annonce->domaine->domaine }}</p>
                                                </div>
                                            </div>
                                            <div class="row ms-2">
                                                <p class="description_courte">
                                                    {{ wordwrap($annonce->description_courte, 30, "\n", '<br />') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center">
                                <form action="{{ route('annonce.destroy', $annonce) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <td><input type="submit" class="bouton-supprimer" name="supprimer" value="Supprimer">
                                    </td>
                                </form>
                            </div>
                        @endforeach
                    @else
                        <h4 class="mt-3" style="color: #d8d8d8; ">Vous n'avez aucune annonce</h4>
                    @endif
                </div>
            </div>
        </div>
    </body>
    </html>
@endsection
