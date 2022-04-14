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
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->

                    <div class="col-md-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                        <div class="domaine">Soudeur</div>
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
