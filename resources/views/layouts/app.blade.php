<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <script src="https://kit.fontawesome.com/737c5f819d.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">


        <nav class="navbar navbar-expand-md navbar-light bg-white p-4">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/formap.png') }}" alt="logo" style="width: 10em;" class="mx-auto">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest


                            @if (Route::has('login'))
                                <li class="nav-item ">
                                    <a class="bouton-connexion" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item ms-4">
                                    <a class="bouton-inscription"
                                        href="{{ route('inscription') }}">{{ __('Inscription') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a href="{{ route('accueil') }}">{{ __('Accueil') }}</a>
                            </li>

                            <li class="nav-item ms-3">
                                <a href="{{ route('liste_formateurs') }}">{{ __('Liste formateur') }}</a>
                            </li>



                            {{-- SI FORMATEUR JE VAIS DANS LE PROFIL FORMATEUR SINON JE VAIS DANS PROFIL ENTREPRISE --}}

                            @if (Auth::user()->formateur && auth()->user()->role_id == 1)
                                <li class="nav-item ms-3">
                                    <a
                                        href="{{ route('formateur.show', Auth::user()->formateur) }}">{{ __('Profil') }}</a>
                                </li>
                            @elseif (Auth::user()->entreprise && auth()->user()->role_id == 1)
                                <li class="nav-item ms-3">
                                    <a
                                        href="{{ route('entreprise.show', Auth::user()->entreprise) }}">{{ __('Profil') }}</a>
                                </li>
                            @else
                                <li class="nav-item ms-3">
                                    <a href="{{ route('admin.index') }}">{{ __('Back-office') }}</a>
                                </li>
                            @endif


                            <li class="nav-item ms-3">
                                <a href="{{ route('messages') }}">{{ __('Messagerie') }}</a>
                            </li>


                            <li class="nav-item ms-3">
                                <a id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>


                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                                                                         document.getElementById('logout-form').submit();">
                                    {{ __('Déconnexion') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            @endguest
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <main>
            @yield('content')

        </main>
        <footer>

            <div class="row text-center align-middle">
                <h5 class="mt-5">© copyright - tous droits réserves - formap.fr</h5>
            </div>



        </footer>
    </div>



</body>


</html>
