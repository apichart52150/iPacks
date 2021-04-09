@extends('layouts.layout_admin_w')

@section('css')
<style>
    .note-editable {
        border-bottom: 1px solid rgba(128, 137, 142, 0.8);
    }
</style>
@endsection

@section('content')

<div class="card-box pt-0">
    <div class="row">
        <div class="col-md-6 card-body">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">{{ $check['header_test'] }}</div>
                <input type="hidden" name="std_id" value="{{ $check['std_id'] }}">
                <div class="card-body">
                    <img src="{{ asset($check['img']) }}" alt="{{ $check['img'] }}" width="100%">
                </div>
            </div>    
        </div>

        <div class="col-md-6 card-body">
            <div class="col-md-12">
                <div class="media mb-2 mt-1">
                    <img class="d-flex mr-2 rounded-circle avatar-sm" src="{{ asset('public/assets/images/user.png') }}" alt="Generic placeholder image">
                    <div class="media-body">

                    <span class="float-right font-weight-bold">{{ date('d-m-Y H:i', strtotime($check['sent_date'])) }}</span>
                    <h6 class="m-0 font-15 text-primary">{{ $check['std_name'] }}</h6>
                    <small class="text-dark font-14">
                        <b>Course:</b> {{ $check['coursename'] }} 
                        <br><b>Teacher:</b> {{ $check['th_name'] }} <b>Mode:</b> {{ $check['mode'] }} <b>Target band</b> : {{ $check['targetbrand'] }}
                    </small>
                </div>
            </div>

            <img class="card-img-top img-fluid mb-3" src="{{asset('public/assets/images/sac-colorV4.jpg')}}" alt="SAC Color">

            <textarea id="elm1" contenteditable="false">
                {!! str_replace('<p>&nbsp;</p>', '', $check['th_text']) !!}
            </textarea>
            
            <h4>NC Band Score : {{ $check['score']}}</h4>

            <div class="form-group border-bottom">
            <h4 class="bg-light p-1">Comment :</h4>
                <p class="lead text-break">{{$check['comment']}}</p>
            </div>

        </div>
    </div>
</div>

@endsection

@section('js')
@stop

