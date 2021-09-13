@extends('layouts.main')

@section('content')

<style>
    .custom-modal-title {
    background-color: #009688 !important;
}
</style>

@section('page-title')
<div class="row">
	<div class="col-12 m-0">
		<div class="page-title-box">
			<div class="page-title-right">
				<ol class="breadcrumb m-0">
					<li class="breadcrumb-item"><i class="fas fa-home"></i> <a href="{{ url('/') }}">Home</a></li>
					<li class="breadcrumb-item active">iPACK Speaking</li>
				</ol>
			</div>
			<h4 class="page-title">Speaking</h4>
		</div>
	</div>
</div>     
@stop


<div class="row justify-content-center">
    <input type="hidden" name="id" value="{{ auth('web')->user()->id }}">
    <div class="col-md-12">
        <div class="card-box border-top border-success border border-1">
            <h3 class="text-center">Please select a topic</h3>
            <p class="text-center mb-3">Each topic will deduct one point from your account</p>
            <div class="row text-center">
                <div class="col-12">
                    @for($i = 1; $i <= 40; $i++)
                                                
                        <button  type="button" class="btn btn-success waves-effect waves-light mt-2" data-animation="fadein" data-toggle="modal" data-target="#custom-modal{{$i}}"><i class="fas fa-microphone-alt"></i> Topic {{$i < 10 ? "0".$i : $i}}</button>
                    

                        <div id="custom-modal{{$i}}" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="myCenterModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myCenterModalLabel">Topic {{$i < 10 ? "0".$i : $i}}</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <ul class="text-dark text-left">
                                            <li>Click the <b class="font-italic">Next</b> button to view your speaking topic</li>
                                            <li>Click the <b class="font-italic">Record</b> button to begin recording your answer</li>
                                            <li>Click the <b class="font-italic">Reset</b> button to redo your recording</li>
                                            <li>Click the <b class="font-italic">Allow</b> button to enable your microphone</li>
                                        </ul>
                                        <div class="text-center">
                                            <img src="{{ asset('public/assets/images/allow_mic.png') }}" class="border border-3" width="300">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="m-auto">
                                            <a href="{{ url('intro/Topic'.($i < 10 ? '0'.$i : $i)) }}" class="btn btn-success waves-effect waves-light">NEXT</a>
                                        </div>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->

                    @endfor
                </div>
            </div>
            <!-- end button-list -->
        </div>
        <!-- end card card-body -->
    </div>
    <!-- end col-md-9 -->
</div>
<!-- end row -->
@endsection