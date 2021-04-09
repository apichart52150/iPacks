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

            <form action="{{ route('check_writing_submit') }}" method="POST">
                {{ csrf_field() }}

                <input type="hidden" name="id" value="{{ $check['id'] }}">

                <textarea id="elm1" name="th_text">
                    @if($check['th_text'])
                        {!! $check['th_text'] !!}
                    @else 
                        {!! $check['text'] !!}
                    @endif
                </textarea>
                
                <div class="form-group mt-3">
                    <label>NC Band Score</label>
                    <input type="text" name="score" class="form-control" placeholder="Score" required>
                </div>

                <div class="form-group">
                    <label>Comment :</label>
                    <textarea name="comment" class="form-control" placeholder="Comment :"></textarea>
                </div>

                <div class="form-group mt-5">
                    <div class="text-center">
                        <input type="submit" value="SAVE" name="type" class="btn btn-primary" onclick="return confirm('Are you sure you want to Save!')">
                        <input type="submit" value="SUBMIT" name="type" class="btn btn-success" onclick="return confirm('Are you sure you want to Submit!')">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('js')
@stop

