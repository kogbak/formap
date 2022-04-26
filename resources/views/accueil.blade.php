@extends('layouts.app')

@section('content')
    @if (session()->has('message'))
        <p class="alert alert-success">{{ session()->get('message') }}</p>
    @endif

    <a href="{{ route('inscription') }}"><img src="{{ asset('images/banniere_formap.jpg') }}" alt="logo"
            class="banniere"></a>



    <div class="container">

        <form method="get" action="{{ route('search') }}">

            <div
                class="row cadre_recherche_annonce modif-input mt-5 d-flex justify-content-around align-items-center p-5 w-75 mx-auto">
                <div class="col-md-2">
                    <h4 style="color: #4d4d4d; font-size:small;">Rechercher des annonces :</h4>
                </div>

                <div class="col">
                    <div class="row d-flex justify-content-center">
                        <i class="fa-solid fa-briefcase mx-auto my-auto col-1" style="color: #9a9a9a"></i>
                        <input type="text" id="domaine" name="domaine" maxlength="50"
                            placeholder="Domaine d'activités, exp: Soudeur" class="p-2 col-11">
                    </div>
                </div>

                <div class="row cadre_recherche_annonce-v"></div>

            </div>

            <button type="submit" class="bouton_recherche d-flex mx-auto mt-4 mb-5">Rechercher</button>


        </form>


        <h4 style="color: #858585">Liste des annonces :</h4>

        @php
            if (isset($domaine[0])) {
                // si la recherche a été lancée et qu'elle contient des résultats
                $annonces = $domaine[0]->annonces;
            }
        @endphp

        @if (isset($annonces))
            @foreach ($annonces as $annonce)
                <!-- Modal -->
                <div class="modal fade" id="{{ 'exampleModal' . $loop->iteration }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <img src="{{ asset('images/' . $annonce->entreprise->image) }}" alt="profil"
                                    class="photo m-2">
                                <h5 class="modal-title" style="font-size:large;" id="exampleModalLabel">
                                    {{ $annonce->entreprise->nom }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <div class="row mb-2">
                                    <div class="col">
                                        <p style="font-weight:bold; font-size:large;">{{ $annonce->titre }} </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <h5 style="color: #6c6dda;">Description de l'annonce:</h5>
                                        <p style="color: #909090">{{ $annonce->description_longue }}</p>
                                    </div>
                                </div>
                            </div>

                            @if (Auth::user())
                                <div class="modal-footer">
                                    <a style="text-decoration:none; color:white;"
                                        href="mailto:{{ $annonce->entreprise->user->email }}"
                                        class="bouton_contacter mx-auto">{{ $annonce->entreprise->user->email }}</a>
                                </div>
                            @else
                                <p class="text-center mt-5 mb-3" style="color: #6c6dda;">Veuillez vous connecté pour
                                    contacter
                                    l'entreprise</p>
                            @endif

                        </div>
                    </div>
                </div>
                <!-- Modal -->

                <div class="cadre_annonce mt-5 " data-bs-toggle="modal"
                    data-bs-target="{{ '#exampleModal' . $loop->iteration }}">
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
                                <p class="description_courte">{{ $annonce->description_courte }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <h4 class="text-center mt-5 mb-5" style="font-weight: bold; color:#a2a2a2;">Malheureusement il n'y a aucune annonce correspondant au domaine</h4>
        @endif
    </div>
    </div>
@endsection
