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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./asset/css/style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

    <style>
        @font-face {
            font-family: Open Sans;
            src: url("Open_Sans/OpenSans-Light.ttf");
        }
        
        * {
            margin: 0;
            padding: 0;
            border-radius: 0 !important;
            font-family: Open Sans;
        }
        
        @font-face {
            font-family: Open Sans;
            src: url("Open_Sans/OpenSans-Light.ttf");
        }
        /*xử lý menu*/
        
        .dropdown {
            position: relative;
            display: inline-block;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            z-index: 1;
            background-color: #70b19f;
            color: #FFF;
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
        }
        
        .others {
            display: flex;
            padding: 10px;
            padding-right: 20px;
        }
        
        .others>li {
            padding: 0 12px;
            list-style: none;
            font-size: 20px;
        }
        
        .navbar-brand {
            margin-right: -11rem !important;
            padding-left: 14px !important;
        }
        
        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: 2rem !important;
            padding-left: 0.5rem !important;
        }
    </style>
</head>
<body>
    <div id="app">
        {{-- <nav class="navbar sticky-top navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                    <div><img src="/svg/MyWebDemo.svg" style="height: 40px; border-right: 1px solid; " class="pr-3"></div>
                    <div class="pl-3 pt-2">Picture Shared</div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <ul class="navbar-nav m-auto"> 
                        @guest
                        @else
                            <form class="form-inline my-2 my-sm-0" action="/search" method="get">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                            </form>
                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
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

                            <li><a href="/p/create" class="btn btn-dark"><i class="fas fa-plus"></i></a></li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="/profile/{{ Auth::user()->id }}"><i class="fas fa-user mr-2"></i>Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt mr-2"></i>{{ __('Logout') }}
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
        </nav> --}}
        <!--menu-->
        <!--menu-->
            <!-- menu -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">

            <a class="navbar-brand" href="./index.html"><img src="./asset/img/logo.png" alt="" width="25%"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">BEST SELLER</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown">
                MAKE UP
                </a>
                        <div class="dropdown-content">
                            <a class="dropdown-item" href="#">Face</a>
                            <a class="dropdown-item" href="#">Eye</a>
                            <a class="dropdown-item" href="#">Lip</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SKINCARE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SPECIAL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about.html">EXPLORE</a>
                    </li>
    
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    <div class="others">
                        <li><i class="fa fa-shopping-cart" aria-hidden="true"></i></li>
                        <li><i class="fa fa-user" aria-hidden="true"></i></li>
                    </div>
                </form>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
        <footer>
            <div class="card">
                <div class="card-footer">
                  Featured
                </div>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </footer>
    </div>
</body>
</html>
