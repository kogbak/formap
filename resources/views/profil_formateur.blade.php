@extends('layouts.app')

@section('content')
    <html>

    <body>
        <div class="header-violet d-flex flex-column justify-content-center align-items-center mb-5">
            <h3>Mon profil formateur</h3>
            <p style="color: #d6d7ff">ici vous pouvez modifier vos coordonnée vos informations et vos disponibilité</p>
        </div>
        <div class="container">
            <div class="row d-flex justify-content-center ">

                <div class="col-12 d-flex justify-content-center">
                    <form method="GET" action="{{ route('formateur.edit', $user->formateur) }}">
                        @csrf

                        <button type="submit"
                            class="bouton_modifier_profil d-flex flex-column justify-content-center align-items-center">
                            <div class="carre_plus mb-3"></div>Modifier profil
                        </button>

                    </form>
                </div>
            </div>

            <form method="POST" action="{{ route('update_dispo', $user->formateur) }}">
                @csrf
                @method('PUT')
                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <h5 class="m-5" style="color: #6c6dda; ">Modifier vos disponibilité et vos kms:</h5>

                        <div>
                            <input type="radio" id="disponible" name="drone" value="disponible" checked >
                            <label class="ms-2" for="disponible">Disponible</label>
                        </div>

                        <div>
                            <input type="radio" id="non_disponible" name="drone" value="non_disponible">
                            <label class="ms-2" for="non_disponible">Non disponible </label>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-12 text-center modif-input">
                        <label for="date_debut_dispo">Disponible à partir du:</label>
                        <input class="ms-2 ps-4 pe-4" type="date" id="date_debut_dispo" name="date_debut_dispo" required maxlength="50"
                            class="mb-5">
                        <label class="ms-4" for="date_fin_dispo">Jusqu'a:</label>
                        <input class="ms-2 ps-4 pe-4" type="date" id="date_fin_dispo" name="date_fin_dispo" required maxlength="50"
                            class="mb-5">
                    </div>
                </div>


                <div class="row mt-5">
                    <div class="col-12 text-center modif-input">
                        <label for="kms">Combien de Kms (allers simple) êtes vous prêt à faire:</label><br>
                        <input class=" w-25" type="number" id="kms" name="kms" required maxlength="3"
                            placeholder="120">
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <input type="submit" value="Modifier" class="bouton-suivant mb-5">
                    </div>
                </div>
            </form>
        </div>

    </body>

    </html>
@endsection
