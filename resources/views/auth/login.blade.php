<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-SHOP || Login Page</title>
    <!--Login-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('backend/assets/login_form/css/style.css') }}">

</head>
{{-- @section('content') --}}

<body class="img js-fullheight" style="background-image: url({{ asset('backend/assets/login_form/images/bg.jpg') }});">
    {{-- <section>class="img js-fullheight" style="background-image: url({{ asset('backend/assets/login_form/images/bg.jpg') }});"> --}} <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h1 class="heading-section">{{ __('Login to your account') }}</h1>
                </div>
            </div>
            <!---->
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <!--Email-->
                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" placeholder="Email" required
                                    autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--Password-->
                            <div class="form-group">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                                    name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password "></span>
                            </div>
                            <!--Sign in-->
                            <div class="form-group">
                                <button type="submit"
                                    class="form-control btn btn-primary submit px-3">{{ __('Login') }}
                                </button>
                            </div>
                            <!--Other-->
                            <div class="form-group d-md-flex">
                                <div class="w-50 text-md-left">
                                    <label class="checkbox-wrap checkbox-primary ">Remember Me
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    @if (Route::has('password.request'))
                                        <a style="color: #fff" href="{{ route('password.request') }}">
                                            {{ __('Forgot Password') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- @endsection --}}
    <!--Login -->
    {{-- <script src="{{ asset('backend/assets/login_form/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/login_form/js/popper.js') }}"></script>
    <script src="{{ asset('backend/assets/login_form/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/login_form/js/main.js') }}"></script> --}}
    {{-- </body>

</html> --}}
    <script src="{{ asset('backend/assets/login_form/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/login_form/js/popper.js') }}"></script>
    <script src="{{ asset('backend/assets/login_form/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/login_form/js/main.js') }}"></script>
</body>

</html>
