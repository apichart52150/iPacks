
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>iSAC Writing | Teacher</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="disable-extension-feature" content="read-dom" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('public/assets/images/favicon.ico') }}">

        <!-- DataTables -->
        <link href="{{ asset('public/assets/js/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/js/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ asset('public/assets/js/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />


        <!-- Plugins css-->
        <link href="{{ asset('public/assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet" />
        <link href="{{ asset('public/assets/libs/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/libs/multiselect/multi-select.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/libs/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" />

        <link href="{{ asset('public/assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/libs/clockpicker/bootstrap-clockpicker.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/libs/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
        
        <!-- Jquery Toast css -->
        <link href="{{ asset('public/assets/libs/jquery-toast/jquery.toast.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

        <style>
            a#download {
                cursor: pointer;
            }
            div.btn-group {
                float: left !important;
            }
        </style>

        @yield('css')

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
                                <img src="{{ asset('public/assets/images/user.png') }}" alt="user-image" class="rounded-circle">
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
                                <span class="logo-lg-text-light">iSAC Writing</span>
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
                                <a href="{{ url('writing/dashboard') }}" class="text-light">
                                    <i class="fas fa-folder-plus"></i>All Writing
                                </a>
                            </li>

                            <li class="has-submenu">
                                <a href="{{ url('writing/pending') }}" class="text-light">
                                    <i class="fas fa-clock"></i>Pending 
                                </a>
                            </li>

                            <li class="has-submenu">
                                <a href="{{ url('writing/completed') }}" class="text-light">
                                    <i class="fas fa-list-alt"></i>Completed 
                                </a>
                            </li>
                            
                            @if(Auth::user()->level == 2)
                            <li class="has-submenu">
                                <a href="{{ route('report_writing_teachers') }}" class="text-light">
                                <i class="fas fa-lightbulb"></i> Report
                            	</a>
                            </li>
                            <li class="has-submenu">
                                <a href="{{ route('report_writing_students') }}" class="text-light">
                                	<i class="fas fa-lightbulb"></i> Report All
                                </a>
                            </li>
                            @endif

                            @if(Auth::user()->level == 99)
                            <li class="has-submenu">
                                <a href="{{ route('manage_writing') }}" class="text-light">Manage</a>
                            </li>
                            @endif

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

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{ asset('public/assets/js/vendor.min.js') }}"></script>

        <!--form wysiwig-->
        <script src="{{ asset('public/assets/plugins/tinymce/tinymce.min.js') }}"></script>


        <!-- Required datatable js -->
        <script src="{{ asset('public/assets/js/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/datatables/dataTables.bootstrap4.min.js') }}"></script>
        <!-- Buttons examples -->
        <script src="{{ asset('public/assets/js/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/datatables/jszip.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/datatables/pdfmake.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/datatables/vfs_fonts.js') }}"></script>
        <script src="{{ asset('public/assets/js/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/datatables/buttons.print.min.js') }}"></script>

        

        <!-- Key Tables -->
        <script src="{{ asset('public/assets/js/datatables/dataTables.keyTable.min.js') }}"></script>

        <!-- Responsive examples -->
        <script src="{{ asset('public/assets/js/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/datatables/responsive.bootstrap4.min.js') }}"></script>

        <!-- Selection table -->
        <script src="{{ asset('public/assets/js/datatables/dataTables.select.min.js') }}"></script>

        <!-- Sparkline charts -->
        <script src="{{ asset('public/assets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
        
        <!-- init js -->
        <script src="{{ asset('public/assets/js/pages/dashboard-1.init.js') }}"></script>

        <!-- Plugins Js -->
        <script src="{{ asset('public/assets/libs/switchery/switchery.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/multiselect/jquery.multi-select.js') }}"></script>
        <script src="{{ asset('public/assets/libs/select2/select2.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/jquery-mask-plugin/jquery.mask.min.js') }}"></script>

        <!-- init js -->
        <script src="{{ asset('public/assets/js/pages/form-advanced.init.js') }}"></script>

        <!-- Plugins js-->
        <script src="{{ asset('public/assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/clockpicker/bootstrap-clockpicker.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/moment/moment.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

        <!-- Init js-->
        <script src="{{ asset('public/assets/js/pages/form-pickers.init.js') }}"></script>

        <!-- Tost-->
        <script src="{{ asset('public/assets/libs/jquery-toast/jquery.toast.min.js') }}"></script>

        <!-- toastr init js-->
        <script src="{{ asset('public/assets/js/pages/toastr.init.js') }}"></script>

        @yield('javascript')
        <!-- App js -->
        <script src="{{ asset('public/assets/js/app.min.js') }}"></script>

        <script>
            if($("#elm1").length > 0){
                tinymce.init({
                    selector: "textarea#elm1",
                    theme: "modern",
                    height: 400,
                    menubar: false,
                    plugins: [
                        "wordcount",
                        "textcolor"
                    ],
                    browser_spellcheck: false,
                    toolbar: "undo redo | bold strikethrough italic | forecolor backcolor",
                    textcolor_cols: "6",
                    textcolor_map: [
                        "fe0000", "SP",
                        "008001", "Prep",
                        "993400", "S/V",
                        "808080", "P/S",
                        "ff6600", "T",
                        "81007f", "WO",
                        "ff00ff", "WW",
                        "ffff01", "Rephrase",
                        "00ff01", "S/PI",
                        "01ffff", "VP",
                        "ff99cb", "V",
                        "3366ff", "A",
                    ]
                });
            }
        </script>

        @yield('js')
        
    </body>
</html>