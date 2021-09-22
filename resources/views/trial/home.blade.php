<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>IELTS Practice - All</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('public/assets/images/logo_ielte_practice.svg') }}">

        <!-- Custom box css -->
        <link href="{{ asset('public/assets/libs/custombox/custombox.min.css') }}" rel="stylesheet">

        <!-- Lightbox css -->
        <link href="{{ asset('public/assets/libs/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css" />

        <!-- Sweet Alert-->
        <link href="{{ asset('public/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- third party css -->
        <link href="{{ asset('public/assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

        <style>
            .hover-scale i.fas {
                transform: scale(1);
                transition: transform .15s ease;
            }

            .hover-scale:hover i.fas {
                transform: scale(1.1);
            }

            .border-2 {
                border-width: 2px;
            }

            .ribbon-box .ribbon-two-secondary span {
                background: #C5B358 !important;
            }
        </style>
        
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
                                <img src="{{asset('public/assets/images/user.png') }}" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ml-1">
                               <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>
                                
                                
                            </div>
                        </li>            
                    </ul>

                    <!-- LOGO -->
                    <div class="logo-box">
                        <div class="logo text-center">
                            <span class="logo-lg">
                                <a href="{{ route('trial_home') }}">
                                    <img src="{{asset('public/assets/images/logo_ielte_practice.svg') }}" alt="" height="60">
                                    <!-- <span class="logo-lg-text-light">Xeria</span> -->
                                </a>
                            </span>
                            <span class="logo-sm">
                                <a href="{{ route('trial_home') }}">
                                    <!-- <span class="logo-sm-text-dark">X</span> -->
                                    <img src="{{asset('public/assets/images/logo_ielte_practice.svg') }}"alt="" height="60">
                                </a>
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
                                    <a href="{{route('register')}}">
                                        <i class=" mdi mdi-view-dashboard"></i>Purchase Package<div class="arrow-down"></div>
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
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item active"><i class="fas fa-home"></i> Home</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Home</h4>
                        </div>
                    </div>
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="col-xl-6 col-md-6">
                        <a href="{{ route('trial_listening') }}" class="wave-light">
                            <div class="card-box widget-icon bg-danger">
                                <div class="avatar-lg float-left">
                                    <div class="hover-scale">
                                        <div class="widget-simple">
                                            <i class=" fas fa-volume-up avatar-title display-6 m-0 " style="font-size: 5em;"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="wid-icon-info text-right">
                                    <h2 class="mb-1 text-light">IELTS Practice</h2>
                                    <h4 class="text-light mb-1">Listening (Trial)</h4>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-6 col-md-6">
                        <a href="#" id="check-answer">
                            <div class="card-box widget-icon bg-pink">
                                <div class="avatar-lg float-left">
                                    <div class="hover-scale">
                                        <div class="widget-simple">
                                            <i class="fas fa-eye avatar-title display-6 m-0 " style="font-size: 5em;"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <h2 class="mb-1 text-light">IELTS Practice</h2>
                                    <h4 class="text-light mb-1">Reading (Trial)</h4>
                                </div>
                            </div>
                        </a>
                    </div><!-- end col -->
                </div>


                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12">
                        <a href="{{ route('trial_language') }}">
                            <div class="card-box widget-icon bg-primary">
                                <!-- <div class="ribbon-two ribbon-two-diamond avatar-title display-6 m-0 "><span>Diamond</span></div> -->
                                <div class="avatar-lg float-left">
                                    <div class="hover-scale">
                                        <div class="widget-simple">
                                            <i class="fas fa-language avatar-title display-6 m-0 " style="font-size: 5em;"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h2 class="mb-3 text-light">Language Use (Trial)</h2>
                                </div>
                            </div>
                        </a>
                    </div><!-- end col -->
                </div>

                <div class="timeline-desk">
                    <div class="timeline-box">
                        <h4 class="mt-0 font-16">Recommended</h4>
                        <p class="mb-0"><i class="mdi mdi-monitor-screenshot"></i> On computer</p>
                    </div>
                </div>
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
        <!-- Vendor js -->
        <script src="{{ asset('public/assets/js/vendor.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/peity/jquery.peity.min.js') }}"></script>

        <!-- Sparkline charts -->
        <script src="{{ asset('public/assets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

        <!-- Modal-Effect -->
        <script src="{{ asset('public/assets/libs/custombox/custombox.min.js') }}"></script>

        <!--form wysiwig-->
        <script src="{{ asset('public/assets/plugins/tinymce/tinymce.min.js') }}"></script>

        <!-- Magnific Popup-->
        <script src="{{ asset('public/assets/libs/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

        <!-- Gallery Init-->
        <script src="{{ asset('public/assets/js/pages/gallery.init.js') }}"></script>

        <!-- sweet-alerts -->
        <script src="{{ asset('public/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/pages/sweet-alerts.init.js') }}"></script>

        <script src="{{ asset('public/assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('public/assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
        <!-- Datatables init -->
        <script src="{{ asset('public/assets/js/pages/datatables.init.js') }}"></script>

        <script src="{{ asset('public/assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>
        <!-- App js -->
        <script src="{{ asset('public/assets/js/app.min.js') }}"></script>

        <script>
            $('#check-answer').on('click', () => {
                swal({
                    title: 'In Progress..',
                    type: 'warning',
                    showConfirmButton: true,
                });
            });
        </script>

       
    </body>
</html>