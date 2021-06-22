@extends('layouts.main')

@section('page-title')
    <div class="row">
        <div class="col-12 m-0">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><i class="fas fa-home"></i> <a href="{{ url('/isac/listening') }}">Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Topic </a></li> -->
                        <li class="breadcrumb-item active">{{$name}}</li>
                    </ol>
                </div>
                <h4 class="page-title">iSAC Listening</h4>
            </div>
        </div>
    </div>
@stop


@section('content')
<div class="row">
    <div class="col-lg-12 text-center">
        <div class="card card-body border-top border-info border border-1 ">
            <audio src="{{asset('public/isac_listening/'.$id.'/'.$name)}}" controlslist="nodownload" controls="" class="m-auto w-100"></audio>
        </div>
        <a href="{{url('/isac/listening')}}" class="btn btn-primary waves-effect waves-light">Back</a>
    </div>
</div>
<!-- end row -->
@endsection
