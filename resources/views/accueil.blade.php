@extends('layouts.app')

@section('content')

    <a href="{{ route('inscription') }}"><img src="{{ asset('images/banniere_formap.jpg') }}" alt="logo"
            class="banniere"></a>



    <div class="container">
        <div class="row ">
            <div class="col-12 ">


                <div class="cadre_recherche_annonce mt-5 d-flex align-items-center justify-content-center">

                    <div class=" modif-input d-flex justify-content-center align-items-center">
                        <h4 style="color: #2e2e2e">Rechercher des annonces :</h4>
                        <select id="domaine" name="domaines" class="ms-5">
                            <option value="null" disabled="disabled" selected>Domaine d'activité</option>
                            <option value="Charpentier">Charpentier</option>
                            <option value="Boulanger">Boulanger</option>
                            <option value="Kiné">Kiné</option>
                        </select>
                        <input type="text" id="lieux" name="lieux" required maxlength="50" placeholder="Lieux d'activités"
                            size="30" class="ms-5 p-2">
                    </div>
                    <div class="cadre_recherche_annonce-v"></div>
                </div>
                <button class="bouton_recherche d-flex mx-auto mt-4">Rechercher</button>
            </div>
        </div>
        
        @foreach ($annonces as $annonce)
        <div class="cadre_annonce mt-5">
            <div class="barre_violet_annonce m-5">
                <div class="col-12 " >
                    <div class="row ms-2">
                        <div class="d-flex">
                            <p class="titre_annonce">
                                
                                    {{strtoupper( $annonce->titre )}}
                                
                            </p>
                            <i class="fa-solid fa-location-dot fa-lg ms-3" style="line-height: 25px; color:#3f3f3f;"></i>
                            <p class="ville_code ms-2">{{ $annonce->ville }}</p>
                            <p class="ville_code ms-2">({{ $annonce->code_postal }})</p>
                        </div>
                    </div>
                    <div class="row ms-2">
                        <p class="description_courte">{{ $annonce->description_courte }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    
    </div>
@endsection
