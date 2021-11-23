<!doctype html>
<html lang="en">

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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--Login-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('backend/login_form/css/style.css') }}">

<body class="img js-fullheight" style="background-image: url({{ asset('backend/login_form/images/reset_bg.jpg') }} );">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h1 class="heading-section">{{ __('Reset Password') }}</h1>
                </div>
            </div>
            <!---->
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="form-group row">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" placeholder="Email" required
                                    autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3"
                                    style="color: #fff">{{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                            <!--Other-->
                            <br>
                            <div class="form-group text-xl-center text-md-center">
                                @if (Route::has('register'))
                                    <a style="color: #fff" href="{{ route('register') }}">
                                        {{ __('Create An Account!') }}
                                    </a>
                                @endif
                            </div>
                            <div class="form-group text-xl-center text-md-center">
                                @if (Route::has('login'))
                                    <a style="color: #fff" href="{{ route('login') }}">
                                        {{ __('Already Have An Account? Login!') }}
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('backend/login_form/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/login_form/js/popper.js') }}"></script>
    <script src="{{ asset('backend/login_form/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/login_form/js/main.js') }}"></script>
</body>

</html>
