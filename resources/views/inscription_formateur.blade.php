@extends('layouts.app')

@section('content')
    <html>

    <body>
        <div class="header-violet d-flex justify-content-center align-items-center mb-5">
            <h3>Remplir mon profil formateur. Etape 1/2</h3>
        </div>
        <div class="container d-flex justify-content-center w-50">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">
                    <div class="row mb-5">
                        <div class="col-12 ajouter-photo">
                            <img src="{{ asset('images/image_profil.png') }}" alt="logo" class="mx-auto">
                            <a href="">+ Ajouter une photo</a>
                        </div>
                    </div>
                    <div class="col-6 modif-input">
                        <div class="row">
                            <label for="email">Adresse mail:</label><br>
                            <input type="text" id="email" name="email" required maxlength="50" class="mb-5">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                            <label for="prenom">Prénom:</label><br>
                            <input type="text" id="prenom" name="prenom" required maxlength="50" class="mb-5">
                            @error('prenom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                            <label for="telephone">Téléphone:</label><br>
                            <input type="text" id="telephone" name="telephone" required maxlength="50" class="mb-5">
                            @error('telephone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                            <label for="age">Age:</label><br>
                            <input type="number" id="age" name="age" required maxlength="2">
                            @error('age')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6 modif-input">

                        <div class="row ms-3">
                            <label for="password">Mot de passe:</label><br>
                            <input type="text" id="password" name="password" required maxlength="30"
                                class="mb-5">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row ms-3">
                            <label for="nom">Nom:</label><br>
                            <input type="text" id="nom" name="nom" required maxlength="30" class="mb-5">
                            @error('nom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row ms-3">
                            <label for="adresse">Adresse:</label><br>
                            <input type="text" id="adresse" name="adresse" required maxlength="30" class="mb-5">
                            @error('adresse')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row ms-3">
                            <label for="ville">Ville:</label><br>
                            <input type="text" id="ville" name="ville" required maxlength="30" class="mb-5">
                            @error('ville')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row ms-3">
                            <label for="code_postal">Code postal:</label><br>
                            <input type="text" id="code_postal" name="code_postal" required maxlength="5"
                                class="mb-5">
                            @error('code_postal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12 d-flex flex-row justify-content-center">
                            <div class="rond-etape-valid me-2"></div>
                            <div class="rond-etape"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-end">
                            <input type="submit" value="Suivant" class="bouton-suivant">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>

    </html>
@endsection
