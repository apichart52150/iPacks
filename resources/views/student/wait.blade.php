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

<style>
    .hover-scale i.fas {
        transform: scale(1);
        transition: transform .15s ease;
    }

    .hover-scale:hover i.fas {
        transform: scale(1.1);
    }

    .border-2 {
        border-width: 2px;
    }

    .ribbon-box .ribbon-two-secondary span {
        background: #C5B358 !important;
    }

</style>

@if(Auth::user()->std_status == 'wait')

    <div class="row d-flex justify-content-center">
        <div class="col-xl-3 col-md-6">
            <div class="card-box widget-icon bg-danger">
                <div class="avatar-lg float-left">
                    <div class="hover-scale">
                        <div class="widget-simple">
                            <i class=" fas fa-volume-up avatar-title display-6 m-0 " style="font-size: 5em;"></i>
                        </div>
                    </div>
                </div>
                <div class="wid-icon-info text-right">
                    <h2 class="mb-1 text-light">wait</h2>
                    <h4 class="text-light mb-1">wait</h4>
                </div>
            </div>
        </div>
    </div>

@elseif (Auth::user()->std_status == 'paid')

    <div class="row d-flex justify-content-center">
        <div class="col-xl-6 col-sm-12">
            <a href="{{ url('isac/listening') }}" class="wave-light">
                <div class="card-box widget-icon bg-danger">
                    <div class="avatar-lg float-left">
                        <div class="hover-scale">
                            <div class="widget-simple">
                                <i class=" fas fa-volume-up avatar-title display-6 m-0 " style="font-size: 5em;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="wid-icon-info text-right">
                        <h2 class="mb-1 text-light">iSac</h2>
                        <h4 class="text-light mb-1">Listening</h4>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-6 col-sm-12">
            <a href="{{url('language/home')}}">
                <div class="card-box widget-icon bg-pink">
                    <div class="avatar-lg float-left">
                        <div class="hover-scale">
                            <div class="widget-simple">
                                <i class="fas fa-eye avatar-title display-6 m-0 " style="font-size: 5em;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <h2 class="mb-1 text-light">iSac</h2>
                        <h4 class="text-light mb-1">Language Use</h4>
                    </div>
                </div>
            </a>
        </div><!-- end col -->
    </div>

@elseif (Auth::user()->std_status == 'expire')
    <div class="row d-flex justify-content-center">
        <div class="col-xl-3 col-md-6">
            <div class="card-box widget-icon bg-danger">
                <div class="avatar-lg float-left">
                    <div class="hover-scale">
                        <div class="widget-simple">
                            <i class=" fas fa-volume-up avatar-title display-6 m-0 " style="font-size: 5em;"></i>
                        </div>
                    </div>
                </div>
                <div class="wid-icon-info text-right">
                    <h2 class="mb-1 text-light">Expire</h2>
                    <h4 class="text-light mb-1">Expire</h4>
                </div>
            </div>
        </div>
    </div>
@endif
@endsection

