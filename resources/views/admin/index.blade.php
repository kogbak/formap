@extends('layouts.app')
@section('title')
    Admin
@endsection

@section('content')
<div class="mini-header-violet mb-5"></div>
    <script>
        function showElement(elementId) {
            var element = document.getElementById(elementId);
            var display = window.getComputedStyle(element, null).getPropertyValue("display");
            display == "block" ? element.style.display = "none" : element.style.display = "block";
            
        }
    </script>

    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">

                <div class=" cadre_bouton_admin d-flex justify-content-between">
                    <button class="bouton_creer_domaine" onclick="showElement('creation_domaine')"><i class="fa-solid fa-gear"></i>&nbsp; Creer un domaine</button>
                    <button class="bouton_list" onclick="showElement('listeFormateurs')"><i class="fa-solid fa-hammer"></i>&nbsp; Liste des formateur</button>
                    <button class="bouton_list" onclick="showElement('listeEntreprises')"><i class="fa-solid fa-briefcase"></i>&nbsp; Liste des entreprise</button>
                </div>

            </div>
        </div>

        <!-- FOREACH LISTE FORMATEUR !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->

        <table  style="display: none;" id="listeFormateurs">
            <div class="mt-5 mb-5">
            <tr style="background-color:#e8e9ff; color:#6c6dda;">
                <th>Nom & Prenom</th>
                <th>Domaine</th>
                <th>Téléphone</th> 
                <th>Adresse</th>
                <th>Supprimer</th>
            </tr>
            @foreach ($formateurs as $formateur)
                <tr>
                    
                    <td style="color: #6c6dda; font-weight:bold;">{{ $formateur->user->nom }}
                        {{ $formateur->user->prenom }}</td>
                    @foreach ($formateur->domaines as $domaine)
                    <td><div class="d-flex justify-content-center domaine m-2 p-2">{{ $domaine->domaine }}</div></td>
                    @endforeach
                    <td>{{ $formateur->user->telephone }}</td>
                    <td>{{ $formateur->user->adresse }}
                        {{ $formateur->user->ville }}
                        {{ $formateur->user->code_postal }}</td>

                    <form action="{{ route('supprimer_user') }}" method="post">
                        @csrf
                        @method('DELETE')
                        <td><input type="submit" class="bouton-supprimer" name="supprimer" value="Supprimer"></td>
                    </form>
                </tr>
            @endforeach
            </div>
        </table>

        <!-- FOREACH LISTE ENTREPRISE !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->

        <table style="display: none;" id="listeEntreprises">
            <div class="mt-5 mb-5">
            <tr style="background-color:#e8e9ff; color:#6c6dda;">
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Siret</th>
                <th>Adresse</th>
                <th>Supprimer</th>
            </tr>
            @foreach ($entreprises as $entreprise)
                <tr>
                    <td style="color: #6c6dda; font-weight:bold;">{{ $entreprise->nom }}</td>
                    <td>{{ $entreprise->user->email }}</td>
                    <td>{{ $entreprise->user->telephone }}</td>
                    <td>{{ $entreprise->siret }}</td>
                    <td>{{ $entreprise->user->adresse }}
                        {{ $entreprise->user->ville }}
                        {{ $entreprise->user->code_postal }}</td>

                    <form action="{{ route('supprimer_user') }}" method="post">
                        @csrf
                        @method('DELETE')
                        <td><input type="submit" class="bouton-supprimer" name="supprimer" value="Supprimer"></td>
                    </form>
                </tr>
            @endforeach
        </div>
        </table>
   
        <!-- FORMULAIRE CREATION DOMAINE  **************************************************************************** -->

        <div class="row" style="display: none;" id="creation_domaine">
            {{-- <form action="{{ route('article.store') }}" method="POST"> --}}
                @csrf
                <div class="mb-3 w-50 mx-auto bg-white p-5 shadow">
                    <h3><label class="form-label mb-5">Creation domaine:</label></h3>
                    <div class="mb-3">
                        <label for="domaine" class="form-label">Nom : </label>
                        <input type="text" class="form-control" id="domaine" name="domaine">
                    </div>
                    
                    <input type="submit" class="button-25 mt-3" value="Créer le domaine">
                </div>

            </form>
        </div> 
    </div>
@endsection
