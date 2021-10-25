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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/nav.css">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">

            <a class="navbar-brand" href="{{ route ('sanphams.index') }}"><img src="./asset/img/logo.png" alt="" width="25%"></a>
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
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    
                    @guest
                            <i class="fa fa-shopping-cart ml-2"></i>
                            @if (Route::has('login'))
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @endif

                            @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                    @else 
                        <i class="fa fa-shopping-cart"></i>
                        <div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                                <a class="nav-link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                        </div>
                    @endguest
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        
    </div>
    <script src="/js/product.js"></script>
</body>
</html>