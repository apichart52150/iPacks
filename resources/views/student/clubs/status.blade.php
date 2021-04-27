@extends('layouts.main')
@section('topbar')
    <div class="topbar-menu">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li class="has-submenu">
                        <a href="{{url('clubs/home')}}">
                            <i class="fas fa-calendar-check"></i>Club Registration
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{url('clubs/history')}}">
                            <i class="fas fa-history"></i>History lists
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{url('clubs/status_clubs')}}">
                            <i class="fas fa-question-circle"></i>Status Club
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
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{url('user_home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Club & Bonus status</li>
                </ol>
            </div>
            <h4 class="page-title">Club & Bonus status</h4>
        </div>
    </div>
</div>
@endsection

@section('content')

<div class="row">
    <div class="col-md-6 col-xl-3">
        @forelse($myclubs as $myclub)
            @if(strpos($myclub['title_type'], 'Bonus') !== false)
            <button type="button" class="btn btn-warning btn-raised" style="white-space: normal;"> 
                {{ $myclub['title_type'] }} ( {{ $myclub['teacher'] }} )<br>
                {{ $myclub['date_show'] }}
                <div class="ripple-container"></div>
            </button>
            @else
            <button type="button" class="btn btn-primary btn-raised" style="white-space: normal;"> 
                {{ $myclub['title_type'] }} ( {{ $myclub['teacher'] }} )<br>
                {{ $myclub['topicClub'] }} <br>
                {{ $myclub['date_show'] }}
                <div class="ripple-container"></div>
            </button>
            @endif
        @empty
            <p>ไม่มีรายการ คุณสามารถจองคลับได้ที่นี่ </p>
            <a href="{{ url('clubs/home') }}" class="btn btn-outline-success waves-effect waves-light">Club Registration</a>
        @endforelse

    </div><!-- end col -->
</div>
<!-- end row -->

@endsection