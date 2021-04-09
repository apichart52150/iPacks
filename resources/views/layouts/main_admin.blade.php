
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>iSAC Speaking | Teacher</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="disable-extension-feature" content="read-dom" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('public/assets/images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Navigation Bar-->
        <header id="topnav">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-right mb-0">

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

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{ asset('public/assets/images/users/useradmin.png') }}" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ml-1">
                                    {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown">

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle"></i>
                                    <span>My Profile</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a href="{{ route('logout') }}" class="dropdown-item notify-item" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <i class="mdi mdi-logout"></i>
                                    <span>Logout</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>

                            </div>
                        </li>            

                    </ul>

                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="#" class="logo text-center">
                            <span class="logo-lg">
                                <span class="logo-lg-text-light">IPACKS ADMIN</span>
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-sm-text-dark">X</span> -->
                                <img src="{{ asset('public/assets/images/logo-sm.png') }}" alt="" height="24">
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end Topbar -->


            <div class="topbar-menu">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="#">
                                    <i class="mdi mdi-view-dashboard"></i>iSAC<div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="index.html">Writing</a>
                                    </li>
                                    <li>
                                        <a href="dashboard-2.html">Speaking</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#">
                                    <i class="mdi mdi-view-dashboard"></i>Mocktest<div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="index.html">Writing</a>
                                    </li>
                                    <li>
                                        <a href="dashboard-2.html">Speaking</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#">
                                    <i class="mdi mdi-view-dashboard"></i>Bonus<div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="index.html">Writing</a>
                                    </li>
                                    <li>
                                        <a href="dashboard-2.html">Speaking</a>
                                    </li>
                                </ul>
                            </li>


                        </ul>
                        <!-- End navigation menu -->

                        <div class="clearfix"></div>
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="wrapper">
        <div class="container-fluid">
            <!-- start page title -->
            @yield('page-title')
            <!-- end page title --> 
            @yield('content')
            </div> <!-- end container -->
        </div>

        <!-- end wrapper -->

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

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{ asset('public/assets/js/vendor.min.js') }}"></script>

    </body>
</html>