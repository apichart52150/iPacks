<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Newcambridge">
    <link rel="shortcut icon" href="{{ asset('public/assets/images/favicon.ico') }}">
    <title>IELTS TEST</title>
    
    <link rel="shortcut icon" href="{{asset('public/assets/images/favicon.ico') }}">
    <link href="{{asset('public/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/assets/css/app.min.cs') }}s" rel="stylesheet" type="text/css" />


    <link href="{{asset('public/assets/css/css_mocktest/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('public/plugins/jquery.steps/css/jquery.steps.css')}}" />
    <link href="{{asset('public/assets/css/css_mocktest/style.css') }}" rel="stylesheet" type="text/css">            
    
   
	<style>
		/*set input form-control*/
		input{
			width:200px;
		}
		input.form-control {
		margin: -5px 0px 10px 0px;
		padding: 0px;
		height: 30px;
		}
		
		.bigBox{
			width:100%; 
			border-radius:5px; 
			padding:6px 0px;
		}
		.box-content{
			padding: 10px 10px;
			height:500px;
			width:100%;
			overflow:auto;
			border-radius:8px;
		}
		fieldset{
			border:1px solid  #E0E0E0;
			padding: 5px 5px;
		}

		.content-page{
		margin:0px 0px;
		} /*ส่วนแสดงเนื้อหาบนกระดาษ*/

		.wizard .content .body{
			width: 100%;
		}
	</style>
</head>

<body>
  <!-- Navigation Bar-->
  <header id="topnav">
            <!-- Topbar Start -->
            <div class="navbar-custom" style="margin-left: 0px;">
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
                                    Nik Patel <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
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

        </header>
        <!-- End Navigation Bar-->

    @yield('content') 


    <!-- Plugins  --> 
    @yield('javascript') 


    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="{{ asset('public/assets/js/vendor.min.js') }}"></script>

    <script src="{{ asset('public/assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>
    <script src="{{ asset('public/assets/libs/peity/jquery.peity.min.js') }}"></script>

    <!-- Sparkline charts -->
    <script src="{{ asset('public/assets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ asset('public/assets/js/pages/dashboard-1.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('public/assets/js/app.min.js') }}"></script>


    <!--Form Wizard--> 
    <script src="{{ asset('public/plugins/jquery.steps/js/jquery.steps.min.js') }}" type="text/javascript"></script> 

    <!--wizard initialization--> 
    <script src="{{ asset('public/assets/pages/jquery.wizard-init.js') }}" type="text/javascript"></script>

</body>

</html>