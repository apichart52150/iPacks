@extends('layouts.sac_w')

@if($data['mode'] == 'test')
    @section('test_time')
    <span id="displayTime"></span>
    @stop
@endif

<style>
.card-header {
    background-color: #ffc107 !important;
}
</style>


@section('page-title')
<div class="row">
	<div class="col-12">
		<div class="page-title-box">
			<div class="page-title-right">
				<ol class="breadcrumb m-0">
					<li class="breadcrumb-item"><i class="mdi mdi-keyboard-return"></i> <a href="{{ url('isac_writinh_home') }}">Back</a></li>
					<!-- <li class="breadcrumb-item"><a href="#">Topic </a></li> -->
					<li class="breadcrumb-item active">{{$data['header_test']}}</li>
				</ol>
			</div>
			<h4 class="page-title">Status Writing</h4>
		</div>
	</div>
</div>     
@stop

@section('content')
    <div class="row">
        <div class="col-12 mt-2">
            <div class="row">
                <div class="col-md-6">
                    <div class="card text-center">
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
                    <div class="card text-center">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">{{ $data['header_test'] }} Answer</a>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('store.sac') }}" method="POST" id="form_test">
                                {{ csrf_field() }}

                                <input type="hidden" name="code_test" value="{{ $data['code_sac'] }}">
                                <input type="hidden" name="header_test" value="{{ $data['header_test'] }}">
                                <input type="hidden" name="mode" value="{{ $data['mode'] }}">
                                <input type="hidden" name="test_type" value="{{ $data['test_type'] }}">
                                <input type="hidden" name="level" value="{{ $data['level'] }}">
                                <input type="hidden" name="btn_status" value="">

                                <div class="form-group row">
                                    <label class="col-auto col-form-label">Select target band</label>
                                    <div class="col-auto">
                                        <select name="targetbrand" class="form-control">
                                            <option value="5">5</option>
                                            <option value="5.5">5.5</option>
                                            <option value="6">6</option>
                                            <option value="6.5">6.5</option>
                                            <option value="7">7</option>
                                            <option value="7.5">7.5</option>
                                            <option value="8">8</option>
                                            <option value="8.5">8.5</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                </div>

                                <textarea id="elm1" name="text_result"></textarea>

                            </form>

                            <div class="text-center mt-3">

                                @if($data['mode'] == 'practice')
                                    <button id="save" class="btn btn-primary">SAVE</button>
                                    <a href="{{ url('/isac_writing_home') }}" class="btn btn-danger">CANCEL</a>

                                @else
                                <button id="submit" class="btn btn-success">SUBMIT</button>
                                <a href="{{ url('/isac_writing_home') }}" class="btn btn-danger">CANCEL</a>
                                @endif
                            </div>
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
@stop