@extends('layouts.main_admin')

@section('content')



<div class="container-fluid">

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


    <div class="row">
        
        <div class="col-xl-6 col-md-6">
            <a href="{{ url('writing/dashboard')}}">
                <div class="widget-bg-color-icon card-box">
                    <div class="avatar-lg rounded-circle bg-icon-warning float-left">
                        <i class="mdi mdi-grease-pencil font-24 avatar-title text-white"></i>
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
                        <i class="mdi mdi-voice font-24 avatar-title text-white"></i>
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
    
    </div> <!-- end container -->
@endsection

