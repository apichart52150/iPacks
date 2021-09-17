<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>iPACK - All</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('public/assets/images/logo_ielte_practice.svg') }}">
    
    <!-- App css -->
    <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body class="center-menu">
    <!-- Navigation Bar-->

    <header id="topnav">
        <!-- Topbar Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown notification-list mt-3 mr-3">
                        @yield('test_time')
                    </li>

                    <li class="dropdown notification-list">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>

                    {{-- @if($user)
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light"
                            data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{asset('public/assets/images/user.png') }}" alt="user-image"
                                class="rounded-circle">
                            <span class="pro-user-name ml-1">

                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                            <!-- item-->
                            <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>
                    @else --}}
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light"
                            href="{{ route('login') }}">
                            <span class="pro-user-name ml-1">
                                Login
                            </span>
                        </a>
                    </li>
                    {{-- @endif --}}
                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <div class="logo text-center">
                        <span class="logo-lg">
                            <img src="{{asset('public/assets/images/logo-nc-light.png') }}" alt="" height="45">
                            <!-- <span class="logo-lg-text-light">Xeria</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">X</span> -->
                            <img src="{{asset('public/assets/images/icob-nc-light.png') }}" alt="" height="45">
                        </span>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end Topbar -->

        <div class="topbar-menu">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">

                        <li class="has-submenu">
                            <a href="{{url('/detail/standard')}}">
                                {{-- <i class="mdi mdi-home"></i> --}}
                                Standard<div class="arrow-down"></div>
                            </a>
                        </li>
                        <li class="has-submenu">
                            <a href="{{url('/detail/premium')}}">
                                {{-- <i class="mdi mdi-home"></i> --}}
                                Premium<div class="arrow-down"></div>
                            </a>
                        </li>

                    </ul>
                    <!-- End navigation menu -->

                    <div class="clearfix"></div>
                </div>
                <!-- end #navigation -->
            </div>
            <!-- end container -->
        </div>

    </header>
    <!-- End Navigation Bar-->
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->
    <div class="py-5">
        <div class="container pt-5">
            @yield('content')
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    2021 iPACKS © New Cambridge
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    {{-- @include('student.profile') --}}

    <!-- Vendor js -->
    <script src="{{ asset('public/assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('public/assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>
    <script src="{{ asset('public/assets/libs/peity/jquery.peity.min.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('public/assets/js/app.min.js') }}"></script>





</body>

</html>