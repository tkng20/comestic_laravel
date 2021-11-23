<!-- [ navigation menu ] start -->
<nav class="pc-sidebar ">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{ route('admin') }}" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="{{ asset('backend/Kit_Template/assets/images/logo.svg') }}" alt="" class="logo logo-lg">
                <img src="{{ asset('backend/Kit_Template/assets/images/logo-sm.svg') }}" alt="" class="logo logo-sm">
            </a>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                @include('backend.layouts.sidebar')

            </ul>
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->

<!-- [ Header ] start -->
<!---->
{{-- <header class="pc-header ">
    <div class="header-wrapper">
        <div class="ml-auto">
            <ul class="list-unstyled navbar-right">
                <li class="dropdown pc-h-item ">
                    <a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{ asset('backend/Kit_Template/assets/images/user/avatar-2.jpg') }}"
                            alt="user-image" class="user-avtar">
                        <span>
                            <span class="user-name">Joseph William</span>
                            <span class="user-desc">Administrator</span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right pc-h-dropdown">
                        <!--Account-->
                        <a href="#!" class="dropdown-item">
                            <i class="material-icons-two-tone">account_circle</i>
                            <span>My Account</span>
                        </a>
                        <!--Setting-->
                        <a href="#!" class="dropdown-item">
                            <i class="material-icons-two-tone">settings</i>
                            <span>Settings</span>
                        </a>
                        <!--Support-->
                        <a href="#!" class="dropdown-item">
                            <i class="material-icons-two-tone">support</i>
                            <span>Support</span>
                        </a>
                        <!--Log out-->
                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="material-icons-two-tone">chrome_reader_mode</i>
                            <span>Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                <li class="dropdown pc-h-item">
                    <a class=" pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="material-icons-two-tone">search</i>
                        <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . .">
                    </a>
                </li>

            </ul>
        </div>

    </div>
</header> --}}
<header class="pc-header ">
    <div class="header-wrapper">
        <div class="mr-auto pc-mob-drp">
            <ul class="list-unstyled">
                <li class="dropdown pc-h-item">
                    <a class=" pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="material-icons-two-tone">search</i>
                        <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . .">
                    </a>
                </li>
            </ul>
        </div>
        <div class="ml-auto">
            <ul class="list-unstyled">
                <li class="dropdown pc-h-item ">
                    <a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{ asset('backend/Kit_Template/assets/images/user/avatar-2.jpg') }}"
                            alt="user-image" class="user-avtar">
                        <span>
                            <span class="user-name">Joseph William</span>
                            <span class="user-desc">Administrator</span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right pc-h-dropdown">
                        <!--Account-->
                        <a href="#!" class="dropdown-item">
                            <i class="material-icons-two-tone">account_circle</i>
                            <span>My Account</span>
                        </a>
                        <!--Setting-->
                        <a href="#!" class="dropdown-item">
                            <i class="material-icons-two-tone">settings</i>
                            <span>Settings</span>
                        </a>
                        <!--Support-->
                        <a href="#!" class="dropdown-item">
                            <i class="material-icons-two-tone">support</i>
                            <span>Support</span>
                        </a>
                        <!--Log out-->
                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                            <i class="material-icons-two-tone">chrome_reader_mode</i>
                            <span>Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>
<!-- [ Header ] end -->
