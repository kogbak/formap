@extends('layouts.app')

@section('content')
    <html>


    <body>
        <div class="header-violet d-flex justify-content-center align-items-center mb-5">
            <h3>Mon profil formateur</h3>
            <p style="color: #d6d7ff">ici vous pouvez modifier vos coordonnée et vos disponibilitées</p>
        </div>
        <div class="container d-flex justify-content-center w-50">
            <form method="POST" action="{{ route('formateur.store') }}">
                @csrf
            </form>
        </div>

<h1>PROFIL FORMATEUR</h1>


    </body>

    </html>
@endsection
