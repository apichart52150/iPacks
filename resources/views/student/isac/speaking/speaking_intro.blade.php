@extends('layouts.sac_s')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-success text-center py-2">
                <h3 class="text-white p-0 m-0">{{ $topics['title'] }}</h3>
            </div>
            <div class="card-body">
                <a href="{{ asset('public/topics/'.$topics['img']) }}.jpg" class="image-popup" title="{{ $topics['title'] }}">
                    <img src="{{ asset('public/topics/'.$topics['img']) }}.jpg" class="img-fluid" alt="work-thumbnail">
                </a>    
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 m-auto">
                <div class="p-2 bg-success text-white d-inline rounded" id="counter">01:20</div>
            </div>
        </div>
    </div>
</div>

<div id="modal" class="modal fade-scale" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h4 class="text-center">Click to start</h4>

                <button class="btn btn-success btn-sm mt-3" id="play">START</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<audio id="audio1">
    <source src="{{ asset('public/audio/audio_01.m4a') }}" type="audio/mpeg">
    <source src="{{ asset('public/audio/audio_01.m4a') }}" type="audio/mp4">
</audio>
@endsection

@section('js')
<script src="{{ asset('public/js/timer.js') }}"></script>
<script>
	$(document).ready(function() {
		
        $('#modal').modal({
            backdrop: 'static',
            keyboard: false
        })
        $('#modal').modal('show');

    });
    
	document.getElementById('play').addEventListener('click', () => {
        let audio = document.getElementById('audio1');
        audio.play();
        $('#modal').modal('hide');
        begintimer();
    });

</script>
@stop