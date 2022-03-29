@extends('layouts.app')

@section('content')
    <div class="container w-50">
        <h4 class="text-center mt-5 mb-5" style="color:#6c6dda">Se connecter</h4>
        
            <div class="row d-flex justify-content-center ">
                <div class="col-6 modif-input">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="row">
                        <label for="email">Adresse mail:</label><br>
                        <input id="email" type="email" class="mb-4 @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="row">
                        <label for="password">{{ __('Mot de passe:') }}</label><br>
                        <input id="password" type="password" class="mb-5 @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <input type="submit" value="Connexion" class="bouton-connexion-2">
                    </div>
                </div>
        </form>

        <div class="row mt-4 mb-3 text-center">
            <div class="col  d-flex flex-row justify-content-center">
                <div class="trait"></div>
                <p style="color:#838383; line-height : 0px;" class="ms-1 me-1">OU</p>
                <div class="trait"></div>
            </div>
        </div>

        <div class="row">
            <div class="col text-center">

                <a href="{{ route('inscription') }}">
                    <button type="submit" class="bouton-inscription-2">
                        S'inscrire</button>
                    </a>


            </div>
        </div>
    </div>
    </div>
@endsection
