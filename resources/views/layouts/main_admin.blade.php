<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>IELTS Practice | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="disable-extension-feature" content="read-dom" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('public/assets/images/favicon.ico') }}">

    <!-- third party css -->
    <link href="{{ asset('public/assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('public/assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('public/assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- Custom box css -->
    <link href="{{ asset('public/assets/libs/custombox/custombox.min.css') }}" rel="stylesheet">

    <!-- Footable css -->
    <link href="{{ asset('public/assets/libs/footable/footable.core.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Sweet Alert-->
    <link href="{{ asset('public/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

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
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light"
                            data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{ asset('public/assets/images/avatar-1.jpg') }}" alt="user-image"
                                class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                {{ Auth::user('staff')->staff_username }} <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown">

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-circle"></i>
                                <span>My Profile</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <a href="{{ route('admin_logout') }}" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>

                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="{{route('admin_home')}}" class="logo text-center">
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

        @yield('topbar-menu')

    </header>
    <!-- Navigation Bar-->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="wrapper">
        <div class="container-fluid">

            @yield('page-title')

            @yield('content')

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

        <!-- Footable js -->
        <script src="{{ asset('public/assets/libs/footable/footable.all.min.js') }}"></script>

        <!-- Init js -->
        <script src="{{ asset('public/assets/js/pages/foo-tables.init.js') }}"></script>

        <!-- sweet-alerts -->
        <script src="{{ asset('public/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/pages/sweet-alerts.init.js') }}"></script>


        <script src="{{ asset('public/assets/js/ajax.jquery.js') }}"></script>


</body>

</html>