@extends('layouts.sac_w')

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
                <div class="card-header bg-primary text-white text-center">{{ $data->header_test }}</div>
                <div class="card-body">
                    <img src="{{ asset($img_path) }}" alt="{{ $img_path }}" width="100%">
                </div>
            </div>    
        </div>

        <div class="col-md-6 card-body">
            <div class="col-md-12">
                <div class="media mb-2 mt-1">
                    <img class="d-flex mr-2 rounded-circle avatar-sm" src="{{ asset('public/assets/images/user.png') }}" alt="Generic placeholder image">
                    <div class="media-body">

                    <span class="float-right font-weight-bold">{{ date('d-m-Y H:i', strtotime($data->sent_date)) }}</span>
                        <br><b>Teacher:</b> {{ $data->th_name }} <b>Mode:</b> {{ $data->mode }} <b>Target band</b> : {{ $data->targetbrand }}
                    </small>
                </div>
            </div>

            <img class="card-img-top img-fluid mb-3" src="{{asset('public/assets/images/sac-colorV4.jpg')}}" alt="SAC Color">

            <h4 class="mt-1">NC Band Score : {{ $data->score}}</h4>

            <div class="form-group border-bottom">
            <h4 class="bg-light p-1">Comment :</h4>
                <p class="lead text-break">{{$data->comment}}</p>
            </div>

            <textarea id="elm1" contenteditable="false">
                {!! str_replace('<p>&nbsp;</p>', '', $data->th_text) !!}
            </textarea>
            
            

        </div>
    </div>
</div>

@endsection

@section('js')
<script>
   tinymce.get('#elm1').getBody().setAttribute('contenteditable', false);
</script>
@stop

