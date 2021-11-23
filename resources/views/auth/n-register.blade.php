<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>RegistrationForm_v1 by Colorlib</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet"
        href="{{ asset('backend/assets/register_form/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">



    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/register_form/css/style.css') }}">
</head>

<body>

    <div class="wrapper"
        style="background-image: url({{ asset('backend/assets/register_form/images/bg_lg.jpg') }}); background-color: rgba(0, 0, 0, 0.6);">
        <div class="inner">
            <div class="image-holder">
                <img src="{{ asset('backend/assets/register_form/images/bg_md.jpg') }}" alt="">
            </div>
            <form action="">
                <h3>{{ __('Register') }}</h3>
                <div class="form-wrapper">
                    <input id="fullname" type="text" placeholder="Fullname"
                        class="form-control @error('fullname') is-invalid @enderror" name="fullname"
                        value="{{ old('fullname') }}" required autocomplete="fullname" autofocus>
                    @error('fullname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <i class="zmdi zmdi-account"></i>
                </div>
                <div class="form-wrapper">
                    <input id="username" type="text" placeholder="Username"
                        class="form-control @error('username') is-invalid @enderror" name="username"
                        value="{{ old('username') }}" required autocomplete="username" autofocus>
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <i class="zmdi zmdi-account"></i>
                </div>
                <div class="form-wrapper">
                    <input id="phone" type="text" placeholder="Phone"
                        class="form-control @error('phone') is-invalid @enderror" name="phone"
                        value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <i class="zmdi zmdi-phone"></i>
                </div>
                <div class="form-wrapper">
                    <input id="address" type="text" placeholder="Address"
                        class="form-control @error('address') is-invalid @enderror" name="address"
                        value="{{ old('address') }}" required autocomplete="address" autofocus>
                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <i class="zmdi zmdi-account-box-mail"></i>
                </div>
                <div class="form-wrapper">
                    <input id="email" type="email" placeholder="Email"
                        class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <i class="zmdi zmdi-email"></i>
                </div>
                <div class="form-wrapper">
                    <input id="password" type="password" placeholder="Password"
                        class="form-control @error('password') is-invalid @enderror" name="password" required
                        autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <i class="zmdi zmdi-lock"></i>
                </div>
                <div class="form-wrapper">
                    <input type="password" placeholder="Confirm Password" class="form-control"
                        name="password_confirmation" required autocomplete="new-password">
                    <i class="zmdi zmdi-lock"></i>
                </div>
                <button>Register
                    <i class="zmdi zmdi-arrow-right"></i>
                </button>
            </form>
        </div>
    </div>
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</body>

</html>
