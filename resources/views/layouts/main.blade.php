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
        <link rel="shortcut icon" href="{{asset('public/assets/images/newcambridge-logo_bar.png') }}">

        <!-- Lightbox css -->
        <link href="{{ asset('public/assets/libs/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Custom box css -->
        <link href="{{ asset('public/assets/libs/custombox/custombox.min.css') }}" rel="stylesheet">
    </head>

    <body class="center-menu">
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
                                <img src="{{asset('public/assets/images/users/avatar-1.jpg') }}" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ml-1">
                                {{Auth::user()->std_name}}<i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>
                                
                                <a data-toggle="modal" data-target="#myModal" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle"></i>
                                    <span>My Account</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a href="{{ route('user_logout') }}" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </li>            
                    </ul>

                    <!-- LOGO -->
                    <div class="logo-box">
                        <div class="logo text-center">
                            <span class="logo-lg">
                                <img src="{{asset('public/assets/images/logo-nc.png') }}" alt="" height="45">
                                <!-- <span class="logo-lg-text-light">Xeria</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-sm-text-dark">X</span> -->
                                <img src="{{asset('public/assets/images/logo-nc-mini.png') }}"alt="" height="45">
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
                                <a href="#">
                                    <i class=" mdi mdi-view-dashboard"></i>iSAC<div class="arrow-down"></div>
                                </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="{{ route('isac_writing_home') }}"><i class="fas fa-pencil-alt"></i>  Writing</a> 
                                    <li>
                                        <a href="{{ route('browser-settings') }}"><i class="fas fa-comment-dots"></i>  Speaking</a>
                                    </li>
                                    <li>
                                            <a href="https://newcambridgethailand.com/isac_reading/access/G4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ/{{auth('student')->user()->std_id}}" target="_blank"><i class="fas fa-eye"></i>  Reading</a>
                                    </li>
                                    <li>
                                            <a href="https://newcambridgethailand.com/topic-packs/access/wRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c/{{auth('student')->user()->std_id }}"  target="_blank"><i class=" fas fa-volume-up"></i>  Listening</a>
                                    </li>
                                </ul>
                            </li>


                            <li class="has-submenu">
                                <a href="#">
                                    <i class="fas fa-language"></i>Language Use<div class="arrow-down"></div>
                                </a>
                            </li>

                            <li class="has-submenu">
                                <a href="#">
                                    <i class="fas fa-film"></i>Strategies Packs<div class="arrow-down"></div>
                                </a>
                            </li>

                            <li class="has-submenu">
                                <a href="https://newcambridgethailand.com/topic-packs/access/wRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c/{{auth('student')->user()->std_id }}"  target="_blank">
                                    <i class="fas fa-briefcase"></i>Topic Packs<div class="arrow-down"></div>
                                </a>
                            </li>

                            <li class="has-submenu">
                                <a href="{{ url('clubs/condition') }}">
                                    <i class="fas fa-users"></i>Bonus&Club<div class="arrow-down"></div>
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
            <!-- end navbar-custom -->

        </header>
        <!-- End Navigation Bar-->
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="wrapper">
            <div class="container-fluid p-0">
                @yield('page-title')
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

        @include('student.profile')

        
       
        <!-- Vendor js -->
        <script src="{{ asset('public/assets/js/vendor.min.js') }}"></script>

        <!-- Modal-Effect -->
        <script src="{{ asset('public/assets/libs/custombox/custombox.min.js') }}"></script>

        <!-- Magnific Popup-->
        <script src="{{ asset('public/assets/libs/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

        <!-- Gallery Init-->
        <script src="{{ asset('public/assets/js/pages/gallery.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('public/assets/js/app.min.js') }}"></script>

        @yield('js')
        
    </body>
</html>