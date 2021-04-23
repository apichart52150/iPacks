@extends('layouts.main_admin')

@section('topbar-menu')
    <div class="topbar-menu">
        <div class="container-fluid">
            <div id="navigation" class="bg-dark">
                <!-- Navigation Menu-->
                <ul class="navigation-menu  d-lg-flex justify-content-center">

                    <li class="has-submenu">
                        <a href="{{ url('writing/dashboard') }}" class="text-light">
                            <i class="fas fa-highlighter"></i>iSAC Writing
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ url('speaking/dashboard') }}" class="text-light">
                            <i class="fas fa-comments"></i>iSAC Speaking
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ url('mocktest/dashboard') }}" class="text-light">
                            <i class="fas fa-list-alt"></i>Mocktest 
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ url('clubs/dashboard') }}" class="text-light">
                            <i class="far fa-calendar-alt"></i>Club & Bonus 
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
@endsection

@section('page-title')
    <!-- start page title -->
    <div class="row">
        <div class="col-xl-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Home Admin</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>     
@endsection


@section('content')

    <div class="row">
        
        <div class="col-xl-6 col-md-6">
            <a href="{{ url('writing/dashboard')}}">
                <div class="widget-bg-color-icon card-box">
                    <div class="avatar-lg rounded-circle bg-icon-warning float-left">
                        <i class="fas fa-highlighter font-24 avatar-title text-white"></i>
                    </div>
                    <div class="text-right">
                        <h3 class="text-dark mt-1"><span class="counter">iSAC</span></h3>
                        <h3 class="text-warning mb-0"><span class="counter">Writing</span></h3>
                    </div>
                    <div class="clearfix"></div>
            </div>
            </a>
        </div>

        <div class="col-xl-6 col-md-6">
            <a href="{{url('speaking/dashboard')}}">
                <div class="widget-bg-color-icon card-box">
                    <div class="avatar-lg rounded-circle bg-icon-success float-left">
                        <i class="fas fa-comments font-24 avatar-title text-white"></i>
                    </div>
                    <div class="text-right">
                        <h3 class="text-dark mt-1"><span class="counter">iSAC</span></h3>
                        <h3 class="text-success mb-0"><span class="counter">Speaking</span></h3>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>

    </div>
    <!-- end row -->

    <div class="row">
        
        <div class="col-xl-6 col-md-6">
            <a href="{{url('mocktest/dashboard')}}">
                <div class="widget-bg-color-icon card-box">
                    <div class="avatar-lg rounded-circle bg-icon-primary float-left">
                        <i class="fas fa-list-alt font-24 avatar-title text-white"></i>
                    </div>
                    <div class="text-right">
                        <h3 class="text-dark mt-1"><span class="counter">Admin</span></h3>
                        <h3 class="text-primary mb-0"><span class="counter">Mocktest</span></h3>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>

        <div class="col-xl-6 col-md-6">
            <a href="{{url('clubs/dashboard')}}">
                <div class="widget-bg-color-icon card-box">
                    <div class="avatar-lg rounded-circle bg-icon-primary float-left">
                        <i class="far fa-calendar-alt font-24 avatar-title text-white"></i>
                    </div>
                    <div class="text-right">
                        <h3 class="text-dark mt-1"><span class="counter">Admin</span></h3>
                        <h3 class="text-primary mb-0"><span class="counter">Clubs</span></h3>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>

    </div>
    <!-- end row -->
    
@endsection

