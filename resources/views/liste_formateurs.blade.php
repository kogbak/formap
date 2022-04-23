@extends('layouts.app')

@section('content')
    <html>

    <body>
        <div class="header-violet d-flex flex-column justify-content-center align-items-center mb-5">
            <h3>Listes des formateurs</h3>
            <p style="color: #d6d7ff">Cliquez sur le profil d'un formateur pour avoir plus de détails</p>
        </div>
        
        <div class="container">
            <div class="row mb-5">

                @foreach ($formateurs as $formateur)
                    <!-- Modalllllllllllllllllllllllllllllllllllllllll -->
                    <div class="modal fade" id="{{ 'exampleModal' . $loop->iteration }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <img src="{{ asset('images/profil_formateur/' . $formateur->image) }}" alt="profil"
                                        class="photo m-2">
                                    <h5 class="modal-title ms-3" id="exampleModalLabel">{{ $formateur->user->prenom }}
                                        {{ $formateur->user->nom }}</h5>

                                    @if ($formateur->disponible == 1)
                                        <div class="profil_disponible ms-3 text-center">Actuellement disponible</div>
                                    @else
                                        <div class="profil_pas_disponible ms-3 text-center">Actuellement indisponible</div>
                                    @endif

                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <h5>{{ $formateur->user->prenom }} {{ $formateur->user->nom }}</h5>
                                            <h5>{{ $formateur->age }} ans</h5>
                                            <h5>{{ $formateur->user->ville }} {{ $formateur->user->code_postal }}</h5>
                                            
                                            <button type="button" class="telephone_cacher mb-2 mt-2"
                                                onclick="toggle_text('telephone_{{ $formateur->user->id }}');">Afficher n° téléphone</button><br>
                                            <span id="telephone_{{ $formateur->user->id }}" style="display:none;">
                                                <h5 style="color: #288fd1">{{ $formateur->user->telephone }}</h5>
                                            </span>

                                            

                                        </div>

                                        <div class="col-8">
                                            <h5>Diplome(s):</h5>
                                            <p style="color: #616161">{{ $formateur->diplomes }}</p>
                                            <h5>Expérience(s):</h5>
                                            <p style="color: #616161">{{ $formateur->experiences }}</p>
                                            <h5>Année total d'experience:</h5>
                                            <p style="color: #616161">{{ $formateur->annees_experience }} ans</p>
                                            <h5 class="mt-3">Distance de trajet allers simple, prêt à effectuer:
                                            </h5>
                                            <p class="profil_kms text-center w-25">{{ $formateur->kms }} km / maximum</p>
                                            <h5 class="mt-3">Date de disponibilité:</h5>

                                            @if ($formateur->date_debut_dispo == null && $formateur->date_fin_dispo == true)
                                                <p class="text_dispo">Disponible à partir du : <span
                                                        id="indisponible">indisponible</span> jusq'au:
                                                    {{ $formateur->date_fin_dispo }}</p>
                                            @elseif($formateur->date_fin_dispo == null && $formateur->date_debut_dispo == true)
                                                <p class="text_dispo">Disponible à partir du :
                                                    {{ $formateur->date_debut_dispo }} jusq'au:
                                                    <span id="indisponible">indisponible</span>
                                                </p>
                                            @elseif($formateur->date_debut_dispo == null && $formateur->date_fin_dispo == null)
                                                <p class="text_dispo">Disponible à partir du : <span
                                                        id="indisponible">indisponible</span> jusq'au: <span
                                                        id="indisponible">indisponible</span></p>
                                            @else
                                                <p class="text_dispo">Disponible à partir du :
                                                    {{ $formateur->date_debut_dispo }} jusq'au:
                                                    {{ $formateur->date_fin_dispo }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                @if (Auth::user())
                                    <div class="modal-footer">
                                        <button type="button" class="bouton_contacter mx-auto" data-bs-dismiss="modal">Me
                                            contacter</button>
                                    </div>
                                @else
                                    <p class="text-center mt-5 mb-3" style="color: #6c6dda;">Veuillez vous connecté pour
                                        contacter le formateur</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- Modallllllllllllllllllllllllllllll -->

                    <div class="col-md-4" data-bs-toggle="modal"
                        data-bs-target="{{ '#exampleModal' . $loop->iteration }}">
                        <div class="cards m-4">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{ asset('images/profil_formateur/' . $formateur->image) }}" alt="profil"
                                        class="photo m-2">
                                </div>
                                <div class="col-8">
                                    <div class="d-flex justify-content-end">
                                        @if ($formateur->disponible == 1)
                                            <div class="rond_disponible m-2"></div>
                                        @else
                                            <div class="rond_pas_disponible m-2"></div>
                                        @endif
                                    </div>

                                    <div class="row ">
                                        <div class="col-12 d-flex justify-content-end pe-4 nom_prenom_age">
                                            {{ $formateur->user->prenom }}
                                            {{ $formateur->user->nom }}
                                        </div>
                                        <p class=" d-flex justify-content-end pe-4 nom_prenom_age">
                                            {{ $formateur->age }} ans
                                        </p>
                                    </div>

                                    <div class="row d-flex justify-content-end pe-4 code_ville">
                                        (@php echo substr($formateur->user->code_postal, 0, 2); @endphp)
                                        {{ $formateur->user->ville }}
                                    </div>
                                </div>
                                <div class="row mt-2 mb-2">
                                    <div class="col d-flex justify-content-center align-items-center">
                                        @foreach ($formateur->domaines as $domaine)
                                            <div class="domaine m-2 p-2">{{ $domaine->domaine }}</div>
                                        @endforeach
                                        <script type="text/javascript">
                                            function toggle_text(id) {
                                                var span = document.getElementById(id);
                                                if (getComputedStyle(span, null).display == "none") {
                                                    span.style.display = "inline";
                                                } else {
                                                    span.style.display = "none";
                                                }
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


    </body>

    </html>
@endsection
