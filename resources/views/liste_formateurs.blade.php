@extends('layouts.app')

@section('content')
    <html>

    <body>
        <div class="header-violet d-flex flex-column justify-content-center align-items-center mb-5">
            <h3>Listes des formateurs</h3>
            <p style="color: #d6d7ff">Cliquez sur le profil d'un formateur pour avoir plus de détails</p>
        </div>
        <div class="container">

            @foreach ($formateurs as $formateur)
                <div class="row ">

                    <div class="col-12">
                        @php
                            $user = $formateur->user
                    
                        @endphp
                        {{ $formateur->experiences }}
                        {{ $user->prenom }}


                    </div>
                </div>
            @endforeach
    </body>

    </html>
@endsection
