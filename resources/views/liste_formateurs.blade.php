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
                    <!-- Modal -->
                    <div class="modal fade" id="{{ 'exampleModal' . $loop->iteration }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{ $formateur->user->prenom }}
                                        {{ $formateur->user->nom }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>

                                @if (Auth::user())
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary mx-auto" data-bs-dismiss="modal">Me
                                            contacter</button>
                                    </div>
                                @else
                                    <p class="text-center mt-5 mb-3" style="color: #6c6dda;">Veuillez vous connecté pour
                                        contacter
                                        l'entreprise</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->

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
                                <div class="row ">
                                    <div class="col-12 m-3  d-flex justify-content-center">
                                        @foreach ($formateur->domaines as $domaine)
                                        <div class="domaine">{{ $domaine->domaine }}</div>
                                        @endforeach
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
