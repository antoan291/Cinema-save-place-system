<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img class="mt-2" style="width:100px;" src="https://cdn.logo.com/hotlink-ok/logo-social.png">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <div class="d-flex align-items-center">
                    <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Sell Products
                    </a>
                         <div class="dropdown-menu dropdown-menu-right"  aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/sellFirstMovie">Филм 1</a>
                        <a class="dropdown-item" href="/sellSecondMovie">Филм 2</a>
                        <a class="dropdown-item" href="/sellThirdMovie">Филм 3</a>
                        <a class="dropdown-item" href="/sellFourthMovie">Филм 4</a>
                        <a class="dropdown-item" href="/sellFifthMovie">Филм 5</a>
                        <a class="dropdown-item" href="/sellSixthMovie">Филм 6</a>
                        <a class="dropdown-item" href="/sellSeventhMovie">Филм 7</a>
                        <a class="dropdown-item" href="/sellEightMovie">Филм 8</a>
                        </div>
                        <div class="d-flex align-items-center">
                    <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Reserve Seats
                    </a>
                    <!-- /reserveFirstMovie , -->
                         <div class="dropdown-menu dropdown-menu-right"  aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/firstMovie">Филм 1</a>
                        <a class="dropdown-item" href="/secondMovie">Филм 2</a>
                        <a class="dropdown-item" href="/thirdMovie">Филм 3</a>
                        <a class="dropdown-item" href="/fourthMovie">Филм 4</a>
                        <a class="dropdown-item" href="/fifthMovie">Филм 5</a>
                        <a class="dropdown-item" href="/sixthMovie">Филм 6</a>
                        <a class="dropdown-item" href="/seventhMovie">Филм 7</a>
                        <a class="dropdown-item" href="/eightMovie">Филм 8</a>
                        </div>
                        </li>
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <!-- <a class="dropdown-item" href="">Home</a>
                                  <hr> -->
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
