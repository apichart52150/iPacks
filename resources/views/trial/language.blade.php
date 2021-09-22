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
        <link href="{{ asset('public/assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="{{ asset('public/css/draggable.css') }}">
        <style>
            .drag-container {
                margin-bottom: 30px;
            }

            .grid-5 {
                grid-template-columns: repeat(5, 1fr);
            }

            .answers-container {
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin: 10px 0;
            }

            .answers-container p {
                font-size: 16px;
            }

            .dropbox {
                border: 2px dashed #ccc;
                border-radius: 5px;
                padding: 3px;
                width: 200px;
                height: 100%;
                min-height: 40px;
            }

            .dropbox .drag {margin: 0;
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
                            <h4 class="page-title">Language</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box text-dark font-16">
                            <p class="lead">
                            Match the items on the top to the box on the right.
                            </p>
                            
                            <div class="drag-container">
                                <div class="d-grid grid-5" id="choices">
                                    <div class="drag">bring up</div>
                                    <div class="drag">fall out</div>
                                    <div class="drag">leave out</div>
                                    <div class="drag">keep on</div>
                                    <div class="drag">look after</div>
                                    <div class="drag">grow up</div>
                                    <div class="drag">drop out</div>
                                    <div class="drag">put forward</div>
                                    <div class="drag">cut down on</div>
                                    <div class="drag">take over</div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="answers-container">
                                        <p class="mb-0">assume control of something e.g. a company</p>
                                        <div class="dropbox"></div>
                                    </div>
                                    <div class="answers-container">
                                        <p class="mb-0">raise (children)</p>
                                        <div class="dropbox"></div>
                                    </div>
                                    <div class="answers-container">
                                        <p class="mb-0">continue</p>
                                        <div class="dropbox"></div>
                                    </div>
                                    <div class="answers-container">
                                        <p class="mb-0">stop doing something e.g. leave school</p>
                                        <div class="dropbox"></div>
                                    </div>
                                    <div class="answers-container">
                                        <p class="mb-0">argue; have a disagreement</p>
                                        <div class="dropbox"></div>
                                    </div>
                                    <div class="answers-container">
                                        <p class="mb-0">take care of</p>
                                        <div class="dropbox"></div>
                                    </div>
                                    <div class="answers-container">
                                        <p class="mb-0">reduce</p>
                                        <div class="dropbox"></div>
                                    </div>
                                    <div class="answers-container">
                                        <p class="mb-0">omit; not include</p>
                                        <div class="dropbox"></div>
                                    </div>
                                    <div class="answers-container">
                                        <p class="mb-0">become adult</p>
                                        <div class="dropbox"></div>
                                    </div>
                                    <div class="answers-container">
                                        <p class="mb-0">suggest; state a plan of action</p>
                                        <div class="dropbox"></div>
                                    </div>
                                </div>
                            </div>
                            <center>
                                <button id="check-answer" class="btn btn-info">Check Answers</button>
                                <button id="show-answer" class="btn btn-success">Show Answers</button>
                                <button id="back-home" class="btn btn-primary">Back Home</button>
                            </center>
                        </div>
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
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
        <script>
            const answers = [
                "take over",
                "bring up",
                "keep on",
                "drop out",
                "fall out",
                "look after",
                "cut down on",
                "leave out",
                "grow up",
                "put forward",
            ];

            $("#show-answer").hide();

            $(".drag").draggable({
                revert: "invalid",
                cursor: "move",
                opacity: 0.7,
                zIndex: 100,
                containment: ".card-box",
                stop: function (event, ui) {
                if ($("#choices").children().length == 0) {
                    $("#check-answer").prop("disabled", false);
                }
                },
            });

            $(".dropbox").droppable({
                accept: ".drag",
                tolerance: "touch",
                zIndex: 100,
                over: function (event, ui) {
                    $(this).css("border-color", "#777");
                },
                out: function (event, ui) {
                    $(this).css("border-color", "#ccc");
                },
                drop: function (event, ui) {
                    if ($(this).children().length > 0) {
                        var move = $(this).children().detach();
                        $(ui.draggable).css({ top: 0, left: 0 }).parent().append(move);
                    }
                    $(this).css("border-color", "#ccc");
                    $(this).append($(ui.draggable).css({ top: 0, left: 0 }));
                },
            });

            $('#check-answer').on('click', function() {

                let droppables = $(".dropbox");

                droppables.each((idx, item) => {
                    if($(item).children().text().trim() == answers[idx]) {
                        checkAnswer($(item).children(), 'correct');
                    } else {
                        checkAnswer($(item).children(), 'incorrect');
                    }
                });

                $(".drag").draggable({
                    disabled: true,
                });

                $("#show-answer").show();
                $("#check-answer").hide();
            });

            $('#show-answer').on('click', function() {

                $('.dropbox').each((idx, item) => {

                    if($(item).children().length == 1) {
                        if($(item).children().hasClass('color-danger')) {
                            if($(item).children().text(answers[idx])) {
                                $(item).children().removeClass('color-danger')
                            }
                        }
                    } else {
                        $(item).append(`<div class="drag">${ answers[idx] }</div>`)
                    }

                    $('.drag-container .drag').remove();
                })
                $("#show-answer").hide();
                $("#back-home").show();
                alert();
            });

            function alert(){
                swal({
                    title: 'Finish Trial',
                    text: "You went to continue?",
                    type: 'warning',
                    showConfirmButton: true,
                    footer:'<a href="{{ route("register") }}">Register and purchese Package for more practice</a>',
                });
            }
            
            $('#back-home').on('click', function() {
                window.location = "{{ route('trial_home') }}";
            });

            function checkAnswer(ele, status) {
                let bgColor, icon;
                status == 'correct' ? (bgColor = 'color-success', icon = '<i class="fas fa-check"></i>') : (bgColor = 'color-danger', icon = '<i class="fas fa-times"></i>')
                ele.addClass(bgColor)
                ele.append(icon)
            }
        </script>
    </body>
</html>
