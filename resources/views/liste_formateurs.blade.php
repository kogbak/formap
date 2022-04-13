@extends('layouts.app')

@section('content')
    <html>

    <body>
        <div class="header-violet d-flex flex-column justify-content-center align-items-center mb-5">
            <h3>Listes des formateurs</h3>
            <p style="color: #d6d7ff">Cliquez sur le profil d'un formateur pour avoir plus de détails</p>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-12 d-flex flex-row-reverse flex-column">
            @foreach ($formateurs as $formateur)
                <div class="cards m-5" style="width: 18rem;">
                    <img src="{{ asset($formateur->image) }}" alt="profil" style="width: 10em;" class="card-img-top">
                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                            @if ($formateur->disponible == 1)
                                <div class="rond_disponible m-2"></div>
                            @else
                                <div class="rond_pas_disponible m-2"></div>
                            @endif
                        </div>
                        <div class="row ">
                            <div class="col-12 d-flex justify-content-end pe-4 nom_prenom_age">
                                {{ $formateur->user->prenom }}
                                {{ $formateur->user->nom }}
                            </div>        
                                <p class=" d-flex justify-content-end pe-4 nom_prenom_age">{{ $formateur->age }} ans</p>          
                        </div>
                        <div class="row d-flex justify-content-end pe-4 code_ville">
                            (@php substr($formateur->user->code_postal, 0, 2); @endphp)
                            {{ $formateur->user->ville }}
                        </div>
                        <div class="row mt-4 p-3 text-center">
                            <div class="domaine">Soudeur</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </body>

    </html>
@endsection
