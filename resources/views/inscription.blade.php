@extends('layouts.app')

@section('content')
    <html>

    <body>
        <div class="container-{12}">
            <div class="header-violet d-flex justify-content-center align-items-center">
                <h3>Inscription</h3>
            </div>
            <div class="row">
                <div class="col-12">
                    <a class="case-inscription d-flex justify-content-center align-items-center"
                        href="{{ route('formateur.index') }}">
                        <div class="case-inscription-v"></div>Vous êtes un(e) formateur(trice) ?
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a class="case-inscription d-flex justify-content-center align-items-center"
                        href="{{ route('entreprise.index') }}">
                        <div class="case-inscription-v"></div>Vous êtes une Entreprise, Centre de
                        formation ?
                    </a>
                </div>
            </div>
        </div>
        </div>
        </div>
    </body>
    </html>
    
@endsection
