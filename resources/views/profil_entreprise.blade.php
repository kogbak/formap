@extends('layouts.app')

@section('content')
    <html>


    <body>
        <div class="header-violet d-flex flex-column justify-content-center align-items-center mb-5">
            <h3>Mon profil recruteur</h3>
            <p style="color: #d6d7ff">ici vous pouvez modifier vos coordonnée et aussi créer de nouvel annonce</p>
        </div>
        <div class="container d-flex justify-content-center w-50">
            <form method="POST" action="{{ route('formateur.store') }}">
                @csrf
            </form>
        </div>

<h1>{{$user->entreprise->nom}}</h1>


    </body>

    </html>
@endsection
