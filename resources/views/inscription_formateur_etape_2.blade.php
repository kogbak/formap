@extends('layouts.app')

@section('content')
    <html>


    <body>
        <div class="header-violet d-flex justify-content-center align-items-center mb-5">
            <h3>Remplir mon profil formateur. Etape 2/2</h3>
        </div>
        <div class="container d-flex justify-content-center w-50">
            <form method="POST" action="{{ route('formateur.store') }}">
                @csrf

                <div class="row mb-5">
                    <div class="col-6 ajouter-photo ps-0">
                        <label for="image" class="mt-3">Ajouter une photo</label>
                    <input type="file" name="image" class="form-control w-50">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12 modif-input">
                        <div class="row w-50">
                            <label class="d-flex" for="domaines">Mon domaine de formateur : </label><br>

                            <select id="domaine" onchange="mot(this.value)">
                                <option value="null" disabled="disabled" selected>Choisi un domaine</option>
                                <option value="Charpentier">Charpentier</option>
                                <option value="Boulanger">Boulanger</option>
                                <option value="Kiné">Kiné</option>
                            </select>
                            <div id="mot" class="mb-5"></div>

                            <!-- input caché qui contient les domaines choisis -->
                            <input id="domaines" type="hidden" name="domaines">

                            @error('domaines')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <script>
                            let array_mot = [];

                            function mot(text) {
                                if (array_mot.length < 3 && array_mot.indexOf(text) == -1 && text != "null") {
                                    array_mot.push(text);
                                    document.getElementById("domaine").value = 'null';
                                    mot_afficher();
                                    ajouterDomaine(text);
                                }
                            }

                            function mot_suppr(index) {
                                console.log(array_mot[index]);
                                let nouvelleListeDomaines = document.getElementById('domaines').value.replace('-' + array_mot[index], '')
                                console.log("nouvelle liste après suppression :" + nouvelleListeDomaines)
                                document.getElementById('domaines').value = nouvelleListeDomaines
                                console.log("input hidden après suppression : " + nouvelleListeDomaines)
                                array_mot.splice(index, 1);
                                mot_afficher();
                            }

                            function mot_afficher() {
                                let html_tmp = '';
                                for (var i = 0; i < array_mot.length; i++) {
                                    html_tmp +=
                                        '<div class="domaine_input d-flex justify-content-between align-items-center" id = "domaine_input_' +
                                        i + '" > ' + array_mot[i] + ' <div onclick = "mot_suppr(' + i + ')" class="supprimer">x</div>' +
                                        ' </div>';
                                }
                                document.getElementById("mot").innerHTML = html_tmp;
                            }

                            function ajouterDomaine(domaine) {
                                let domaines = document.getElementById('domaines').value; // on récupère la valeur de l'input hidden
                                document.getElementById('domaines').value = domaines + "-" + domaine; // on lui ajoute le nouveau domaine
                                console.log("input hidden : " + document.getElementById('domaines').value)
                            }
                        </script>







                        <div class="row w-50">
                            <label class="d-flex" for="domaine">Numero Siret :</label><br>
                            <input type="text" id="siret" name="siret" required maxlength="17" class="mb-5"
                                placeholder="XXX XXX XXX XXXXX">
                            @error('siret')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                            <label for="diplomes">Diplome(s):</label><br>
                            <input type="string" id="diplomes" name="diplomes" required maxlength="50"
                                class="mb-5" placeholder="Cap soudeur, Bep chaudronier, Bac pro cuisinier ....">
                            @error('diplomes')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                            <label for="experiences">Experience(s):</label><br>
                            <textarea id="experiences" name="experiences" rows="8" cols="33" class="mb-5"
                                placeholder="5 ans d'expérience dans la soudure"></textarea>
                            @error('experiences')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="row">
                            <label for="annees_experience">Années / Mois total d'experience:</label><br>
                            <input type="number" id="annees_experience" name="annees_experience" required maxlength="2"
                                class="mb-5 w-50" placeholder="0">
                            @error('annees_experience')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="row">
                            <label for="kms">Combien de Kms (allers simple) êtes vous prêt à faire:</label><br>
                            <input class=" w-50 mb-5" type="number" id="kms" name="kms" required maxlength="3"
                                placeholder="120">
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
                <div class="row mb-5">
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
