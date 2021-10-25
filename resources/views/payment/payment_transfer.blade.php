@extends('layouts.payment')
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('success') }}">back</a></li>
                        <li class="breadcrumb-item active">Payment - Fransfer</li>
                    </ol>
                </div>
                <h4 class="page-title">Payment - Transter</h4>
            </div>
        </div>
    </div>     
    <!-- end page title -->


    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <!-- Logo & title -->
                <div class="clearfix">
                    <div class="float-right">
                        <img src="{{ asset('public/assets/images/logo_ielte_practice.svg') }}" alt="" height="60">
                    </div>
                </div>

               
                <!-- end row -->
            </div> <!-- end card-box -->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
</div> <!-- end container -->
@endsection