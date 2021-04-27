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
                        <a href="{{ url('mocktest/home') }}">
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
                        <a href="{{ url('clubs/condition') }}">
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

@section('page-title')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{url('user_home')}}">iPacks</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
                <h4 class="page-title">Profile</h4>
            </div>
        </div>
    </div>     
    <!-- end page title -->
@endsection
@section('content')

<!-- end page title --> 
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card-box text-center">
            <img src="{{ asset('public/assets/images/users/user_std.png') }}" class="rounded-circle avatar-xl img-thumbnail" alt="profile-image">

                <div class="border border-primary border-top-0 border-right-0 border-left-0 mb-1" style="border-width: 3px !important;">
                    <h5 class="m-b-5 m-t-10 text-uppercase">{{ $profile->std_name }} ( {{ $profile->std_nickname }} )</h5>
                </div>

                <div class="text-left mt-2 row">
                    <div class="col-md-6">
                        <p class="text-muted font-15"><strong>Full Name :</strong> <span class="m-l-15">{{ $profile->std_name }}</span></p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-muted font-15"><strong>Mobile :</strong><span class="m-l-15">{{ $profile->std_mobile }}</span></p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-muted font-15"><strong>Teacher :</strong> <span class="m-l-15">{{ $profile->th_name }}</span></p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-muted font-15"><strong>Course :</strong> <span class="m-l-15">{{ $profile->coursename }}</span></p>
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
                        <p class="text-muted font-16"><strong>Expire Date :</strong> <span class="badge badge-danger p-1">{{ date('d-m-Y', strtotime($profile->lastdate)) }}</span></p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection