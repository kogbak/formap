@extends('layouts.app')

@section('content')
    <html>


    <body>
        <div class="header-violet d-flex justify-content-center align-items-center mb-5">
            <h3>Remplir mon profil formateur. Etape 2/2</h3>
        </div>
        <div class="container d-flex justify-content-center w-50">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">
                    <div class="col-12 modif-input">








                        <div class="row w-50">
                            <label class="d-flex" for="domaine">Mon domaine de formateur : </label><br>
                            <p style="font-size: small; color:#6c6dda;">(Séparer vos domaines par une virgule)</p>
                            <input type="text" id="domaine" name="domaine" onkeyup="mot(this.value)" required maxlength="50"
                                placeholder="Plombier, Chauffagiste">
                            <div id="mot" class="mb-5"></div>
                            @error('domaine')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <script>
                            let array_mot = [];

                           

                            function mot(text) {
                                if (text.substr(-1) == ',') {
                                    let html_tmp = '';
                                    array_mot.push(text.slice(0, -1));
                                    for (var i = 0; i < array_mot.length; i++) {
                                        html_tmp += '<div class="domaine_input d-flex justify-content-between align-items-center" id="domaine_input_' + i + '"> ' + array_mot[i] + '<div onclick="mot_suppr(' + i +
                                            ')" class="supprimer">x</div>' + '</div>';
                                    }

                                    document.getElementById("mot").innerHTML = html_tmp;
                                    document.getElementById("domaine").value = null
                                }
                            }

                            function mot_suppr(id) {
                                array_mot.splice(id, 1);
                                let div_mot = document.getElementById("mot");
                                let domaine_input = document.getElementById("domaine_input_" + id);
                                div_mot.removeChild(domaine_input);
                            }
                        </script>







                        <div class="row w-50">
                            <label class="d-flex" for="domaine">Numero Siret :</label><br>
                            <input type="text" id="siret" name="siret" required maxlength="50" class="mb-5">
                            @error('siret')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                            <label for="diplome">Diplome(s):</label><br>
                            <input type="text" id="diplome" name="diplome" required maxlength="30" class="mb-5">
                            @error('diplome')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                            <label for="experiences">Experience(s):</label><br>
                            <textarea id="experiences" name="experiences" rows="8" cols="33" class="mb-5"></textarea>
                            @error('experiences')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="row">
                                <label for="kms">Combien de Kms (allers simple) êtes vous prêt à faire:</label><br>
                                <input class=" w-50 mb-5" type="number" id="kms" name="kms" required maxlength="3">
                                @error('kms')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
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
