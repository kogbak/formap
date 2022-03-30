@extends('layouts.app')

@section('content')
    <html>


    <body>
        <div class="header-violet d-flex justify-content-center align-items-center mb-5">
            <h3>Remplir mon profil Entreprise. Etape 2/2</h3>
        </div>
        <div class="container d-flex justify-content-center">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">
                    <div class="col-12 modif-input">
                        <div class="row w-50">
                            <label class="d-flex" for="domaine">Nom de l'entreprise :</label><br>
                            <input type="text" id="domaine" name="domaine" required maxlength="50" class="mb-5">
                            @error('domaine')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row w-50">
                            <label for="siret">Numero Siret :</label><br>
                            <input type="number" id="siret" name="siret" required maxlength="30" class="mb-5">
                            @error('siret')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                            <label for="decsription">Description de l'entreprise</label><br>
                            <textarea id="description" name="description" rows="8" cols="33" class="mb-5"></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-12 d-flex flex-row justify-content-center">
                            <div class="rond-etape-valid me-2"></div>
                            <div class="rond-etape-valid"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-end">
                            <input type="submit" value="Valider" class="bouton-suivant">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>

    </html>
@endsection
