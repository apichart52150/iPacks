@extends('layouts.layout_admin_w')

@section('content')
<div class="row pt-4">
    <div class="col-lg-12">
        <h5>{{ $data->header_test }}</h5>
    </div>
    <div class="col-lg-5">
        <a href="{{ asset($img_path) }}" class="image-popup" title="{{ $data->header_test }}">
            <img src="{{ asset($img_path) }}" class="thumb-img" alt="{{ $data->header_test }}">
        </a>
    </div>
    <div class="col-lg-7">
        <div class="card-box">
            <div class="media m-b-30">
                <img class="d-flex mr-3 rounded-circle thumb-sm" src="{{ asset('public/assets/images/user.png') }}" alt="Generic placeholder image">
                <div class="media-body">
                    <h4 class="text-primary font-16 m-0">{{ $data->std_name }}</h4>
                    <small class="text-muted font-14">
                        <b>Course:</b> {{$data->coursename}} <b>Teacher:</b> {{ $data->th_in_class }} <b>Mode:</b> {{ ucfirst($data->mode) }} <b>Target band</b> : {{$data->targetbrand}}
                    </small>
                    <div class="d-flex mt-2">
                        <span class="badge badge-warning mr-2">Teacher Pending : {{ $data->th_name }}</span>
                        <span class="badge badge-success">{{ date('d M Y H:i:s', strtotime($data->sent_date)) }}</span>
                    </div>
                </div>
            </div>
            <img class="card-img-top img-fluid mb-3" src="{{asset('public/assets/images/sac-colorV4.jpg')}}" alt="SAC Color">
            <textarea id="elm1" contenteditable="false">
                @if(!empty($data->th_text))
                    {!! str_replace('<p>&nbsp;</p>', '', $data->th_text) !!}
                @else 
                    {!! str_replace('<p>&nbsp;</p>', '', $data->text) !!}
                @endif
            </textarea>
            
            <div class="form-group mt-3">
                <label for="nc_score">NC :</label>
                <input type="text" class="form-control w-auto" id="nc_score" value="{{ $data->score }}">
            </div>

            <div class="form-group mt-3">
                <label for="comment">Comment :</label>
                <textarea id="comment" rows="5" class="form-control">{{ $data->comment }}</textarea>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $('input:text, textarea').attr('disabled', 'disabled')
</script>
@stop
