@extends('layouts.main')

@section('page-title')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active"><i class="fas fa-home"></i> Home</li>
                    </ol>
                </div>
                <h4 class="page-title">Home</h4>
            </div>
        </div>
    </div>     
    <!-- end page title -->
@endsection

@section('content')

@if(Auth::user()->std_status == 'wait')

    <center><h1>ถ้ายังไม่ได้จ่ายตัง</h1></center>

    <div class="row d-flex justify-content-center">
        <div class="col-xl-6 col-md-6 col-sm-12">
            <div class="card-box widget-icon bg-secondary">
                <h1>Standard</h1> 
            </div>
        </div>

        <div class="col-xl-6 col-md-6 col-sm-12">
            <div class="card-box widget-icon bg-warning">
               <h1>Premium</h1>
            </div>
        </div>
    </div>

@elseif (Auth::user()->std_status == 'expire')
    <center><h1>ถ้าหมดอายุ</h1></center>

    <div class="row d-flex justify-content-center">
        <div class="col-xl-6 col-md-6 col-sm-12">
            <div class="card-box widget-icon bg-secondary">
                <h1>Standard</h1> 
            </div>
        </div>

        <div class="col-xl-6 col-md-6 col-sm-12">
            <div class="card-box widget-icon bg-warning">
            <h1>Premium</h1>
            </div>
        </div>
    </div>
@endif
@endsection

