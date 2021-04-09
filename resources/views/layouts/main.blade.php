
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title','iPACKS | Student')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="คอร์สเรียน IELTS รับรองผล 7.5 สอนสดทุกคลาส โดยเจ้าของภาษา ได้ผลจริง จากสถาบันภาษาคุณภาพ ระดับยอดเยี่ยม 4 ปีซ้อน  เน้นเทคนิคทำข้อสอบ หลักสูตรคุณภาพมาตรฐานสากล" />
	    <meta name="keywords" content="เรียน IELTS, เรียนไอเอล, สอน IELTS, เรียน IELTS ที่ไหน ดี, ติว IELTS, เรียน IELTS ราคาถูก, คอร์สเรียน IELTS, คอร์สเตรียมสอบ IELTS, ที่เรียน IELTS, เรียน IELTS รับรองผล, สอบ IELTS, สอบไอเอล, สอนไอเอล "  />

	    <!-- App favicon -->
	    <link rel="shortcut icon" href="{{ asset('public/assets/images/newcambridge-logo_bar.png') }}">

	    <meta property="og:title" content="iSAC Speaking">
	    <meta property="og:description" content="คอร์สเรียน IELTS รับรองผล 7.5 สอนสดทุกคลาส โดยเจ้าของภาษา ได้ผลจริง จากสถาบันภาษาคุณภาพ ระดับยอดเยี่ยม 4 ปีซ้อน  เน้นเทคนิคทำข้อสอบ หลักสูตรคุณภาพมาตรฐานสากล">
	    <meta property="og:image" content="{{ asset('public/assets/images/logo_nc.png') }}">

        
        <!-- App css -->
        <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
       
        

    </head>

    <body>
        @php 
            use App\Model\Speaking;
        @endphp

        <!-- Navigation Bar-->
        <header id="topnav">
        
            <!-- Topbar Start -->
            <div class="navbar-custom bg-white">
                <div class="container-fluid">

                    <ul class="list-unstyled topnav-menu float-right mb-0">
                        <li class="dropdown notification-list mt-3">
                        <!-- <span class="badge badge-primary p-1 font-13"><i class="mdi mdi-gamepad-circle pr-1"></i>You have all point {{ \App\Model\Points::checkPoint() }} points</span> -->
                        </li>
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{ asset('public/assets/images/users/user_std.png') }}" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ml-1 text-secondary">
                                    {{ session('std_name') }} <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                <!-- item-->
                                <a href="{{ url('user_profile') }}" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle"></i>
                                    <span>My Profile</span>
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
                        <a href="{{ route('user_home') }}" class="logo text-center">
                            <span class="logo-lg">
                                <img src="{{ asset('public/assets/images/logo_nc.png') }}" alt="" width="80%">
                            </span>
                            <span class="logo-sm">
                            	<img src="{{ asset('public/assets/images/logo_nc.png') }}" alt="" width="100px">
                            </span>
                        </a>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->
        </header>
        <!-- End Navigation Bar-->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        

        <div class="wrapper" style="padding-top: 80px;">
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
    
        <!-- Vendor js -->
        <script src="{{ asset('public/assets/js/vendor.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/peity/jquery.peity.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('public/assets/js/app.min.js') }}"></script>

        <!-- init js -->
        <script src="{{ asset('public/assets/js/pages/dashboard-1.init.js') }}"></script>

    </body>
</html>