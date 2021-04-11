@extends('layouts.main')

@section('topbar')

<div class="topbar-menu">
    <div class="container-fluid">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">

                <li class="has-submenu">
                    <a href="#">
                        <i class="mdi mdi-view-dashboard"></i>iSAC<div class="arrow-down"></div>
                    </a>
                    <ul class="submenu">
                        <li>
                        <a href="{{ route('isac_writing_home') }}"><i class="mdi mdi-trophy-variant mr-1"></i>  Writing</a> 
                        <li>
                            <a href="{{ route('browser-settings') }}"><i class="mdi mdi-trophy-variant mr-1"></i>  Speaking</a>
                        </li>
                        <li>
                                <a href="#"><i class="mdi mdi-trophy-variant mr-1"></i>  Reading</a>
                        </li>
                        <li>
                                <a href="#"><i class="mdi mdi-trophy-variant mr-1"></i>  Listening</a>
                        </li>
                    </ul>
                </li>


                <li class="has-submenu">
                    <a href="#">
                        <i class="mdi mdi-layers"></i>Mocktest<div class="arrow-down"></div>
                    </a>
                </li>

                <li class="has-submenu">
                    <a href="#">
                        <i class="mdi mdi-layers"></i>Strategies Packs<div class="arrow-down"></div>
                    </a>
                </li>

                <li class="has-submenu">
                    <a href="#">
                        <i class="mdi mdi-layers"></i>Topic Packs<div class="arrow-down"></div>
                    </a>
                </li>

                <li class="has-submenu">
                    <a href="#">
                        <i class="mdi mdi-layers"></i>Bonus&Club<div class="arrow-down"></div>
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

@endsection

@section('page_titile')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">iPacks</a></li>
                    <li class="breadcrumb-item active">Home</li>
                </ol>
            </div>
            <h4 class="page-title">Home</h4>
        </div>
    </div>
    </div>     
<!-- end page title --> 
@endsection
@section('content')

<style>

    .ribbon-box .ribbon-two-silver span {
        background: #C0C0C0 !important;
    }


    .ribbon-box .ribbon-two-platinum span {
        background: #81C1BD !important;
    }


    .ribbon-box .ribbon-two-diamond span {
        background: #70d1f4  !important;
    }

</style>

    <div class="row d-flex justify-content-center">
        
        <div class="col-xl-3 col-md-6">
            <a href="#" class="wave-light">
                <div class="card-box widget-icon ribbon-box bg-danger">
                    <div class="avatar-lg float-left">
                        <i class="mdi mdi-volume-high avatar-title display-6 m-0 " style="font-size: 5em;"></i>
                    </div>
                    <div class="wid-icon-info text-right">
                        <h2 class="mb-1 text-light"> iSac  </h2>
                        <h4 class="text-light mb-1">Listening</h4>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-3 col-md-6">
            <a href="#">
                <div class="card-box widget-icon ribbon-box bg-info">
                    <div class="avatar-lg float-left">
                    <i class="mdi mdi-eye avatar-title display-6 m-0 " style="font-size: 5em;"></i>
                    </div>
                    <div class="text-right">
                        <h2 class="mb-1 text-light"> iSac  </h2>
                        <h4 class="text-light mb-1">Reading</h4>
                    </div>
                </div>
            </a>
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <a href="{{url('/isac_writing_home')}}">
                <div class="card-box widget-icon ribbon-box bg-primary">
                    <div class="ribbon-two ribbon-two-silver"><span>Silver</span></div>
                    <div class="avatar-lg float-left">
                        <i class="mdi mdi-lead-pencil  avatar-title display-6 m-0 " style="font-size: 5em;"></i>
                    </div>
                    <div class="text-right">
                        <h2 class="mb-1 text-light"> iSac  </h2>
                        <p class="text-light mb-1">Writing</p>
                    </div>
                </div>
            </a>
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <a href="{{url('/browser-settings')}}">
                <div class="card-box widget-icon ribbon-box bg-success">
                    <div class="ribbon-two ribbon-two-platinum avatar-title display-6 m-0 "><span>Platinum</span></div>
                    <div class="avatar-lg float-left">
                        <i class="mdi mdi-voice avatar-title display-6 m-0 " style="font-size: 5em;"></i>
                    </div>
                    <div class="text-right">
                        <h2 class="mb-1 text-light"> iSac </h2>
                        <p class="text-light mb-1">Speaking</p>
                    </div>
                </div>
            </a>
        </div><!-- end col -->

    </div>


    <div class="row">
        
        <div class="col-xl-6 col-md-6">
            <div class="card-box widget-icon ribbon-box bg-primary">
                <div class="avatar-lg float-left">
                    <i class="mdi mdi-view-compact avatar-title display-6 m-0 " style="font-size: 5em;"></i>
                </div>
                <div class="text-center">
                    <h2 class="mb-3 text-light "> Strategies Packs</h2>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-xl-6 col-md-6">
            <div class="card-box widget-icon ribbon-box bg-primary">
                <div class="ribbon-two ribbon-two-diamond avatar-title display-6 m-0 "><span>Diamond</span></div>
                <div class="avatar-lg float-left">
                    <i class=" mdi mdi-alphabetical avatar-title display-6 m-0 " style="font-size: 5em;"></i>
                </div>
                <div class="text-center">
                    <h2 class="mb-3 text-light"> Mocktest </h2>
                </div>
            </div>
        </div><!-- end col -->

    </div>
   

    <div class="row">

        <div class="col-xl-6 col-md-6">
            <div class="card-box widget-icon ribbon-box bg-primary">
                <div class="avatar-lg float-left">
                    <i class="mdi mdi-animation avatar-title display-6 m-0 " style="font-size: 5em;"></i>
                </div>
                <div class="text-center">
                    <h2 class="mb-3 text-light"> Topic Packs</h2>
                </div>
            </div>
        </div><!-- end col -->
        
        

        <div class="col-xl-6 col-md-6">
            <div class="card-box widget-icon ribbon-box bg-primary">
                <div class="ribbon-two ribbon-two-secondary avatar-title display-6 m-0 "><span>Premium</span></div>
                <div class="avatar-lg float-left">
                    <i class="mdi mdi-account-group avatar-title display-6 m-0 " style="font-size: 5em;"></i>
                </div>
                <div class="text-center">
                    <h2 class="mb-3 text-light"> Club </h2>
                </div>
            </div>
        </div><!-- end col -->

    </div>
@endsection
