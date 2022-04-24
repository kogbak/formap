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
                <div class="row">
                    <h5 style="color: #6c6dda; ">Mes annonces(ici nombre d'annonce)</h5>
                </div>

                <div class="row">

                    {{-- @foreach ($annonces as $annonce)
                        
                    @endforeach --}}
                    <h4 class="mt-3" style="color: #d8d8d8; ">Vous n'avez aucune annonce</h4>
                </div>

            </div>
        </div>

    </body>

    </html>
@endsection
