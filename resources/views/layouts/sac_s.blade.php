
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title','iSAC Speaking | Student')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="คอร์สเรียน IELTS รับรองผล 7.5 สอนสดทุกคลาส โดยเจ้าของภาษา ได้ผลจริง จากสถาบันภาษาคุณภาพ ระดับยอดเยี่ยม 4 ปีซ้อน  เน้นเทคนิคทำข้อสอบ หลักสูตรคุณภาพมาตรฐานสากล" />
	    <meta name="keywords" content="เรียน IELTS, เรียนไอเอล, สอน IELTS, เรียน IELTS ที่ไหน ดี, ติว IELTS, เรียน IELTS ราคาถูก, คอร์สเรียน IELTS, คอร์สเตรียมสอบ IELTS, ที่เรียน IELTS, เรียน IELTS รับรองผล, สอบ IELTS, สอบไอเอล, สอนไอเอล "  />

	    <!-- App favicon -->
	    <link rel="shortcut icon" href="{{ asset('public/assets/images/icon-nc-big.png') }}">

	    <meta property="og:title" content="iSAC Speaking">
	    <meta property="og:description" content="คอร์สเรียน IELTS รับรองผล 7.5 สอนสดทุกคลาส โดยเจ้าของภาษา ได้ผลจริง จากสถาบันภาษาคุณภาพ ระดับยอดเยี่ยม 4 ปีซ้อน  เน้นเทคนิคทำข้อสอบ หลักสูตรคุณภาพมาตรฐานสากล">
	    <meta property="og:image" content="{{ asset('public/assets/images/logo_nc.png') }}">

        <!-- Custom box css -->
        <link href="{{ asset('public/assets/libs/custombox/custombox.min.css') }}" rel="stylesheet">

        <!-- Lightbox css -->
        <link href="{{ asset('public/assets/libs/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css" />


        <!-- App css -->
        <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        
        
        <!-- third party css -->
        <link href="{{ asset('public/assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        

        <!-- Global Styles -->
        <style>
            #topnav {
                padding: 0;
            }
            .border-3 {
                border-width:10px !important;
            }
            @media(max-width: 991px) {
                .wrapper {
                    padding-top: 140px !important;
                }
            }
            #download {
                cursor: pointer;
            }
            @media(max-width: 500px) {
                .card-header {
                    padding-top: 5px;
                    padding-bottom: 5px;
                }
                .card-header h3 {
                    font-size: 16px;
                }
                .card-body {
                    padding: 0;
                }
            }
        </style>

        @yield('css')

    </head>

    <body class="unsticky-header">
        @php 
            use App\Model\Speaking;
            $route = Route::current()->uri;
        @endphp

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="container-fluid">
                <!-- Topbar Start -->
                <div class="navbar-custom bg-white">

                    <ul class="list-unstyled topnav-menu float-right mb-0">
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{ asset('public/assets/images/user.png') }}" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ml-1 text-secondary">
                                    {{ Auth::user()->std_name }} <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right profile-dropdown">
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
                                <img src="{{asset('public/assets/images/logo-nc-color.png') }}" alt="" height="45">
                                <!-- <span class="logo-lg-text-light">Xeria</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-sm-text-dark">X</span> -->
                                <img src="{{asset('public/assets/images/icon-nc-big.png') }}"alt="" height="45">
                            </span>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->
            
            <div class="topbar-menu border-bottom border-left border-right border-white border-3 bg-success">
                <div class="container-fluid">
                    <div id="navigation d-block">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu text-center d-flex justify-content-center font-weight-bold py-1">
                            <li class="p-2 mr-3">
                                <a href="{{ route('user_home') }}" class="p-0 text-white"><i class="fas fa-home font-20 d-block mb-1 mx-0"></i>Home</a>
                            </li>
                            
                            <li class="p-2 mr-3">
                                <a href="{{ route('isac_speaking_home') }}" class="p-0 text-white"><i class="fas fa-folder-open font-20 d-block mb-1 mx-0"></i> iSAC SPEAKING</a>
                            </li>

                            <li class="p-2">
                                <a href="{{ route('status_speaking') }}" class="p-0 text-white"><i class="fas fa-file-audio font-20 d-block mb-1 mx-0"></i> STATUS</a>
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
            <div class="container-fluid p-0 mt-4">
                <!-- start page title -->
                @yield('page-title')
                <!-- end page title --> 
                @yield('content')
            </div> 
        </div>



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
        
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    
        <!-- Vendor js -->
        <script src="{{ asset('public/assets/js/vendor.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/peity/jquery.peity.min.js') }}"></script>

        <!-- Modal-Effect -->
        <script src="{{ asset('public/assets/libs/custombox/custombox.min.js') }}"></script>

        <!-- Magnific Popup-->
        <script src="{{ asset('public/assets/libs/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

        <!-- Gallery Init-->
        <script src="{{ asset('public/assets/js/pages/gallery.init.js') }}"></script>
        
        <script src="{{ asset('public/assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('public/assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
        <!-- Datatables init -->
        <script src="{{ asset('public/assets/js/pages/datatables.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('public/assets/js/app.min.js') }}"></script>

        <!-- Sparkline charts -->
        <script src="{{ asset('public/assets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
        
        <!-- init js -->
        <script src="{{ asset('public/assets/js/pages/dashboard-1.init.js') }}"></script>

        <script>
            var session_id = "{!! (session('ss_id'))?session('ss_id'):'' !!}";
            var user_id = "{!! (Auth::user())?Auth::user()->session_id:'' !!}";

            if(user_id != session_id) {
                alert('Your account login from another device!!', 'Warning Alert');
                window.location.href = "{{ route('user_logout')}}";
            } 
        </script>

        <script>
            var check_level = "{!! (Auth::user())?Auth::user()->std_level:'' !!}";

            if(check_level != 'premium') {
                alert('Your account is standard. Please upgrade youre package to access it!!', 'Warning Alert');
                window.location.href = "{{ route('user_home')}}";
            }

        </script>

        @yield('javascript')

    </body>
</html>