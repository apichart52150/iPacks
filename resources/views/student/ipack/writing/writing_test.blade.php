@extends('layouts.main')

@section('page-title')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><i class="mdi mdi-keyboard-return"></i> <a href="{{ route('ipack_writing') }}">Back</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Topic </a></li> -->
                        <li class="breadcrumb-item active">{{$data['header_test']}}</li>
                    </ol>
                </div>
                <h4 class="page-title">Status Writing</h4>
            </div>
        </div>
    </div>     
@endsection

@if($data['mode'] == 'test')
    @section('test_time')
    <span id="displayTime"></span>
    @stop
@endif


@section('content')

    <style>
        .card-header {
            background-color: #00BCD4 !important;
        }
    </style>

    <div class="row">
        <div class="col-12 mt-2">
            <div class="row">
                <div class="col-md-6">
                    <div class="card-box text-center">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">{{ $data['header_test'] }} Question</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <a href="{{ asset($data['imgPath']) }}" class="image-popup w-100" title="{{ $data['header_test'] }}">
                                <img src="{{ asset($data['imgPath']) }}" class="thumb-img w-100" alt="{{ $data['header_test'] }}">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card-box text-center">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">{{ $data['header_test'] }} Answer</a>
                                </li>
                            </ul>
                        </div>

                        
                        <form action="{{ route('store.sac') }}" method="POST" id="form_test">
                            {{ csrf_field() }}

                            <input type="hidden" name="code_test" value="{{ $data['code_sac'] }}">
                            <input type="hidden" name="header_test" value="{{ $data['header_test'] }}">
                            <input type="hidden" name="mode" value="{{ $data['mode'] }}">
                            <input type="hidden" name="test_type" value="{{ $data['test_type'] }}">
                            <input type="hidden" name="level" value="{{ $data['level'] }}">
                            <input type="hidden" name="btn_status" value="">

                            <textarea id="elm1" name="text_result"></textarea>

                        </form>

                        <div class="text-center mt-3">
                            @if($data['mode'] == 'practice')
                                <button id="save" class="btn btn-info">SAVE</button>
                                <a href="{{ route('ipack_writing') }}" class="btn btn-danger">CANCEL</a>

                            @else
                            <button id="submit" class="btn btn-info">SUBMIT</button>
                            <a href="{{ route('ipack_writing') }}" class="btn btn-danger">CANCEL</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    @if($data['mode'] == 'test')
        @php
            $data['task'] == '1' ? $limit = '20:00' : $limit = '40:00';   
        @endphp

        <script>
            let limit = "{{ $limit }}"
            let parselimit = limit.split(":")
            parselimit = parselimit[0] * 60 + parselimit[1] * 1
        </script>

        <script src="{{ asset('public/assets/js/time-sacw/timer.js') }}"></script>

        <script>
            document.body.onload = begintimer()
        </script>
    @endif

    <script>
        $('#save, #submit').on('click', function(e) {
            let text, textBtn;
            if(e.target.id == 'save') {
                text = 'You want to Save?'
                textBtn = 'Save'
                $('input[name="btn_status"]').val('save')
            } else {
                text = 'You want to Submit?'
                textBtn = 'Submit'
                $('input[name="btn_status"]').val('submit')
            }

            swal(
                {
                    title: "Are you sure",
                    text: text,
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: textBtn,
                    confirmButtonClass: 'btn btn-confirm btn-sm mt-2',
                    cancelButtonClass: 'btn btn-cancel ml-2 mt-2',
                }
            ).then(function (result) {

                if(result) {
                    $('#form_test').submit()
                }

            }, function(dismiss) {
                if (dismiss === 'cancel') {
                    return
                }
            })

            e.preventDefault()
        })
    </script>

@php 
    use App\Model\Points;
    $point = Points::getPoint(Auth::user('web')->id);
@endphp

<script>
    var speaking = {{ $point->speaking_point }};
    if(speaking == 0){
        swal({
            title: 'Access denied',
            text: "You dont't have point",
            type: 'warning',
            showConfirmButton: false,
            footer:'<a href="{{ url("payment/platinum") }}">Upgrade to Platinum</a>',
        }).then(function() {
            window.location.href ="{{ route('user_home')}}"
        });
    }
</script>
@stop