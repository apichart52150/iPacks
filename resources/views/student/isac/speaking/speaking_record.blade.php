@extends('layouts.sac_s')

@section('css')
<style>
    .breathing-color {
        background-color: red;
        animation: 1s infinite breathing;
    }

    @keyframes breathing {
        0% { background-color: #e74856; }
        50% { background-color: red; }
        100% { background-color: #e74856; }
    }
</style>
@stop

@section('content')
<div class="row justify-content-center" id="app">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-success text-center">
                <h3 class="text-white p-0 m-0">{{ $topics['title'] }}</h3>
            </div>
            <div class="card-body">
                <a href="{{ asset('public/topics/'.$topics['img']) }}.jpg" class="image-popup" title="{{ $topics['title'] }}">
                    <img src="{{ asset('public/topics/'.$topics['img']) }}.jpg" class="img-fluid" alt="work-thumbnail">
                </a>  
            </div>
        </div>
        <h4 id="message" class="text-center d-none">Please wait after submitting...</h4>
        <div id="beforesend" class="mb-2 d-none">
            <div class="progress-bar" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <p class="bg-success text-white px-2 py-1 rounded" id="showCount"><span id="minutes">02</span>:<span id="seconds">00</span></p>
                    
                    <div>
                        <button id="recordBtn" class="btn btn-success" disabled>Record</button>
                        <div id="icon" class="d-none">
                            <button class="btn btn-danger" type="button" disabled="">
                                <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                                    Recording ...
                            </button>
                        </div>
                        <!-- <button id="stopBtn" class="btn btn-warning text-white" disabled>Stop</button> -->

                        <button id="load" class="btn btn-success d-none">Submit</button>
                        <button id="reset" class="btn btn-dark d-none" onclick="refresh()">Reset</button>
                    </div>
                </div>

                <div class="row" id="row">
                    <div class="col-md-12 d-none" id="recordingslist">
                        <h2>Recording</h2>
                        <div class="text-center" id="spinner-audio">
                        	<span class="spinner-border spinner-border-sm mx-auto" role="status" aria-hidden="true"></span> 
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modal" class="modal fade-scale" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content w-auto mx-auto">
            <div class="modal-body font-15 text-dark">
                <p class="mb-0">When recording, make sure to <i><b>speak clearly</b></i></p>
                <p>into your microphone <img src="{{ asset('public/assets/images/speak_icon.jpg') }}" alt="" width="40"></p>
                <div class="form-group text-center mb-0">
                    <button class="btn btn-success btn-sm" id="play">Continue</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="modalError" class="modal fade-scale" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h4 class="modal-title text-white" id="mySmallModalLabel">Error</h4>
            </div>
            <div class="modal-body text-center">
                <span class="text-danger m-auto" id="errPermission">Permission denied. Please allow your microphone</span>

                <button class="btn btn-success btn-sm mt-3" data-dismiss="modal">OK</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<audio id="myAudio">
    <source src="{{ asset('public/audio/audio_02.m4a') }}" type="audio/mpeg">
    <source src="{{ asset('public/audio/audio_02.m4a') }}" type="audio/mp4">
</audio>
@endsection

@section('javascript')
<script src="{{ asset('public/js/WebAudioRecorder.min.js') }}"></script>
<script src="{{ asset('public/js/rec.js') }}"></script>
<script>
$(document).ready(function() {
    $('#myAudio').on('ended', () => {
        this.currenTime = 0;
        $('#recordBtn').removeAttr('disabled');
    });

    $('#modalError').modal('hide');


	$('#modal').modal({
        backdrop: 'static',
        keyboard: false
    });

	$('#modal').modal('show');

})

document.getElementById('play').addEventListener('click', () => {
    let audio = document.getElementById('myAudio');
    audio.play();
    $('#modal').modal('hide');
});

function refresh() {
    location.reload();
}
</script>
@stop