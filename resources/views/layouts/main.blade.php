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

        <!-- App css -->
        <link href="{{asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/assets/css/app.min.cs') }}s" rel="stylesheet" type="text/css" />

        
        <!-- third party css -->
        <link href="{{ asset('public/assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

        <!-- Custom box css -->
        <link href="{{ asset('public/assets/libs/custombox/custombox.min.css') }}" rel="stylesheet">

        <!-- Footable css -->
        <link href="{{ asset('public/assets/libs/footable/footable.core.min.css') }}" rel="stylesheet" type="text/css" />
        
        <link href="{{asset('public/assets/css/style.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{asset('public/plugins/jquery.steps/css/jquery.steps.css')}}" />
        <style>
            .wizard .content .body{
                width: 100%;
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
                                <img src="{{asset('public/assets/images/users/avatar-1.jpg') }}" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ml-1">
                                {{ session('std_name') }}<i class="mdi mdi-chevron-down"></i> 
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
                        <a href="#" class="logo text-center">
                            <span class="logo-lg">
                                <img src="{{asset('public/assets/images/logo-nc.png') }}" alt="" height="45">
                                <!-- <span class="logo-lg-text-light">Xeria</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-sm-text-dark">X</span> -->
                                <img src="{{asset('public/assets/images/logo-nc.png') }}" alt="" height="24">
                            </span>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->

            @yield('topbar')

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

        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body p-4 text-center">

                        <img src="{{ asset('public/assets/images/users/user_std.png') }}" class="rounded-circle avatar-xl img-thumbnail" alt="profile-image">

                        <div class="border border-primary border-top-0 border-right-0 border-left-0 mb-1" style="border-width: 3px !important;">
                            <h5 class="m-b-5 m-t-10 text-uppercase">{{ \App\Model\Profile::getProfile()->std_name }} ( {{\App\Model\Profile::getProfile()->std_nickname }} )</h5>
                        </div>

                        <div class="text-left mt-2 row">
                            <div class="col-md-6">
                                <p class="text-muted font-15"><strong>Full Name :</strong> <span class="m-l-15">{{\App\Model\Profile::getProfile()->std_name }}</span></p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-muted font-15"><strong>Mobile :</strong><span class="m-l-15">{{\App\Model\Profile::getProfile()->std_mobile }}</span></p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-muted font-15"><strong>Teacher :</strong> <span class="m-l-15">{{\App\Model\Profile::getProfile()->th_name }}</span></p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-muted font-15"><strong>Course :</strong> <span class="m-l-15">{{\App\Model\Profile::getProfile()->coursename }}</span></p>
                            </div>
                        </div>

                        <hr>

                        <div class="text-left m-t-20 row">
                    
                            <div class="col-md-6">
                                <p class="text-muted font-16"><strong>Writing Point :</strong> <span class="badge badge-primary p-1">{{ \App\Model\PointsWriting::checkPoint() }} Point</span></p>
                            </div>

                            <div class="col-md-6">
                                <p class="text-muted font-16"><strong>Speaking Point :</strong> <span class="badge badge-success p-1">{{ \App\Model\Points::checkPoint() }} Point</span></p>
                            </div>
                        </div>

                        <div class="text-left m-t-20 row">
                    
                            <div class="col-md-6">
                                <p class="text-muted font-16"><strong>Bonus & Club :</strong> <span class="badge badge-info p-1">{{ \App\Model\Points::bonusPoint() }} Point</span></p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-muted font-16"><strong>Expire Date :</strong> <span class="badge badge-danger p-1">{{ date('d-m-Y', strtotime(\App\Model\Profile::getProfile()->lastdate)) }}</span></p>
                            </div>
                        </div>

                        <hr>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{url('clubs/status_clubs')}}" class="btn btn-bordered-primary waves-effect width-md waves-light">View Club</a>
                            </div>
                        </div>
                           
                    </div>
                </div>
            </div>
        </div><!-- /.modal -->

       

        

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{ asset('public/assets/js/vendor.min.js') }}"></script>

        <!-- Modal-Effect -->
        <script src="{{ asset('public/assets/libs/custombox/custombox.min.js') }}"></script>

        <script src="{{ asset('public/assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/peity/jquery.peity.min.js') }}"></script>

        <!-- Sparkline charts -->
        <script src="{{ asset('public/assets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

        <!-- init js -->
        <script src="{{ asset('public/assets/js/pages/dashboard-1.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('public/assets/js/app.min.js') }}"></script>

        <!-- add wizard -->

        <!--Form Wizard--> 
        <script src="{{ asset('public/plugins/jquery.steps/js/jquery.steps.min.js') }}" type="text/javascript"></script> 

        <!--wizard initialization--> 
        <script src="{{ asset('public/assets/pages/jquery.wizard-init.js') }}" type="text/javascript"></script>

        
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
        @yield('javascript') 
        
    </body>
</html>