<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>iPACK - All</title>
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
    <link href="{{ asset('public/assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('public/assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('public/assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    @yield('css')

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

                    <li class="dropdown notification-list">
                        <span class="nav-link dropdown-toggle mr-0 waves-effect waves-light">
                            You have ? point
                        </span>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light"
                            data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{asset('public/assets/images/user.png') }}" alt="user-image"
                                class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                {{Auth::user()->username}}<i class="mdi mdi-chevron-down"></i>
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

                            <a href="{{ route('status_writing') }}" class="dropdown-item notify-item text-info">
                                <i class="fas fa-pencil-alt"></i>
                                <span>Status Writing</span>
                            </a>

                            <a href="{{ route('status_speaking') }}" class="dropdown-item notify-item text-success">
                                <i class="fas fa-comment-dots"></i>
                                <span>Status Speaking</span>
                            </a>

                            <div class="dropdown-divider"></div>


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
                    <div class="logo text-center">
                        <span class="logo-lg">
                            <a href="{{ route('user_home') }}">
                                <img src="{{asset('public/assets/images/logo_ielte_practice.svg') }}" alt=""
                                    height="60">
                                <!-- <span class="logo-lg-text-light">Xeria</span> -->
                            </a>
                        </span>
                        <span class="logo-sm">
                            <a href="{{ route('user_home') }}">
                                <!-- <span class="logo-sm-text-dark">X</span> -->
                                <img src="{{asset('public/assets/images/logo_ielte_practice.svg') }}" alt=""
                                    height="60">
                            </a>
                        </span>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end Topbar -->

        @if(Auth::user()->level == "platinum")
        <div class="topbar-menu">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">

                        <li class="has-submenu">
                            <a href="#">
                                <i class=" mdi mdi-view-dashboard"></i>iPACK<div class="arrow-down"></div>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="{{ route('ipack_writing') }}"><i class="fas fa-pencil-alt"></i> Writing</a>
                                <li>
                                    <a href="{{ route('browser-settings') }}"><i class="fas fa-comment-dots"></i>
                                        Speaking</a>
                                </li>
                                <li>
                                    <a href="{{ route('ipack_reading') }}" target="_blank"><i class="fas fa-eye"></i>
                                        Reading</a>
                                </li>
                                <li>
                                    <a href="{{ route('ipack_listening') }}"><i class=" fas fa-volume-up"></i>
                                        Listening</a>
                                </li>
                            </ul>
                        </li>


                        <li class="has-submenu">
                            <a href="{{ route('ipack_language')}}">
                                <i class="fas fa-language"></i>Language Use<div class="arrow-down"></div>
                            </a>
                        </li>

                        <li class="has-submenu">
                            <a href="{{ route('strategies_pack') }}" target="_blank">
                                <i class="fas fa-film"></i>Strategies Packs<div class="arrow-down"></div>
                            </a>
                        </li>

                        <li class="has-submenu">
                            <a href="{{ route('topic_pack') }}" target="_blank">
                                <i class="fas fa-briefcase"></i>Topic Packs<div class="arrow-down"></div>
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
        @elseif(Auth::user()->level == "standard")
        <div class="topbar-menu">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">

                        <li class="has-submenu">
                            <a href="#">
                                <i class=" mdi mdi-view-dashboard"></i>iPACK<div class="arrow-down"></div>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="{{ route('ipack_reading') }}" target="_blank"><i class="fas fa-eye"></i>
                                        Reading</a>
                                </li>
                                <li>
                                    <a href="{{ route('ipack_listening')}}"><i class=" fas fa-volume-up"></i>
                                        Listening</a>
                                </li>
                            </ul>
                        </li>


                        <li class="has-submenu">
                            <a href="{{ route('ipack_language') }}">
                                <i class="fas fa-language"></i>Language Use<div class="arrow-down"></div>
                            </a>
                        </li>

                        <li class="has-submenu">
                            <a href="{{ route('strategies_pack') }}" target="_blank">
                                <i class="fas fa-film"></i>Strategies Packs<div class="arrow-down"></div>
                            </a>
                        </li>

                        <li class="has-submenu">
                            <a href="{{ route('topic_pack') }}" target="_blank">
                                <i class="fas fa-briefcase"></i>Topic Packs<div class="arrow-down"></div>
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
        @else
        <div class="topbar-menu">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">

                        <li class="has-submenu">
                            <a href="{{url('/')}}">
                                <i class="mdi mdi-home"></i>Home<div class="arrow-down"></div>
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
        @endif
    </header>
    <!-- End Navigation Bar-->
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->
    <div class="wrapper">
        <div class="container-fluid p-0">
            @yield('page-title')
            @yield('content')

            @isset($pagination)
            <div class="row mb-3">
                <div class="col-md-12 d-flex justify-content-between">
                    <a href="{{ url($pagination['prev']) }}"
                        class="btn btn-dark {{ $pagination['current'] == '1' ? 'disabled' : '' }}">Previous</a>
                    <div class="btn-controls">
                        @yield('button-control')
                        <button id="reset" class="btn btn-purple">Reset</button>
                    </div>
                    <a href="{{ url($pagination['next']) }}" class="btn btn-dark">{{ $pagination['textBtn'] }}</a>
                </div>
            </div>
            @endisset
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

    @yield('js')

    <!-- App js -->
    <script src="{{ asset('public/assets/js/app.min.js') }}"></script>


    <script>
        $(document).ready(function () {
                $('.image-popup').magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    mainClass: 'mfp-fade',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0,1]
                    }
                });

                if($("#elm1").length > 0){
                    tinymce.init({
                        selector: "textarea#elm1",
                        theme: "modern",
                        height: 300,
                        menubar: false,
                        plugins: [
                            "wordcount",
                            "textcolor"
                        ],
                        contenteditable: false
                    });
                }
            })
    </script>


    <script>
        $('input[type="text"]').attr({
                'onChange': 'this.value = this.value.toUpperCase()',
                'autocomplete': false,
                'spellcheck': false
            })

            $('#reset').on('click', () => location.reload())
            
            var session_id = "{!! (session('ss_id'))?session('ss_id'):'' !!}";
            var user_id = "{!! (Auth::user())?Auth::user()->remember_token:'' !!}";

            if(user_id !== session_id) {
                alert('Your account login from another device!!', 'Warning Alert');
                window.location.href = "{{ route('logout')}}";
            } 

            document.oncontextmenu = function() { return false; }
            document.onselectstart = function() { return false; }

    </script>



</body>

</html>