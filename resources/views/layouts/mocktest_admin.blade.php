<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Admin - Mocktest</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('public/assets/images/favicon.ico') }}">

        <!-- third party css -->
        <link href="{{ asset('public/assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

        <!-- Custom box css -->
        <link href="{{ asset('public/assets/libs/custombox/custombox.min.css') }}" rel="stylesheet">

        <!-- App css -->
        <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body class="menubar-dark">

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
                        <a href="{{url('/admin_home')}}" class="logo text-center">
                            <span class="logo-lg">
                                <span class="logo-lg-text-light">Mocktest</span>
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-sm-text-dark">X</span> -->
                                <img src="{{ asset('public/assets/images/logo-sm.png') }}" alt="" height="24">
                            </span>
                        </a>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->

            <div class="topbar-menu">
                <div class="container-fluid">
                    <div id="navigation" class="bg-dark">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu  d-lg-flex justify-content-center">

                            <li class="has-submenu">
                                <a href="{{ url('admin') }}" class="text-light">
                                    <i class="fas fa-home"></i>Home
                                </a>
                            </li>

                            <li class="has-submenu">
                                <a href="{{ url('mocktest/dashboard') }}" class="text-light">
                                    <i class="fas fa-folder-plus"></i>All Class
                                </a>
                            </li>

                            <li class="has-submenu">
                                <a href="{{ url('mocktest/all_user') }}" class="text-light">
                                    <i class="fas fa-folder-minus"></i>All Profile 
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
            <div class="container-fluid mt-3">

                @yield('content')
                
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->
        @yield('javascript')

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    
      
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{ asset('public/assets/js/vendor.min.js') }}"></script>

        <!-- third party js -->
        <script src="{{ asset('public/assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('public/assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/datatables/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/datatables/buttons.print.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/datatables/dataTables.select.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/pdfmake/vfs_fonts.js') }}"></script>
        <!-- third party js ends -->

        <!-- Datatables init -->
        <script src="{{ asset('public/assets/js/pages/datatables.init.js') }}"></script>

        <!-- Modal-Effect -->
        <script src="{{ asset('public/assets/libs/custombox/custombox.min.js') }}"></script>

        @yield('javascript')

        @yield('js')

        <!-- App js -->
        <script src="{{ asset('public/assets/js/app.min.js') }}"></script>

       
    </body>
</html>