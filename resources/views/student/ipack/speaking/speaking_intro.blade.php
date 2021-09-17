@extends('layouts.main')

@section('content')
<div class="row justify-content-center mt-3">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-success text-center py-2">
                <h3 class="text-white p-0 m-0">Topic {{ $data['topic'] }}</h3>
            </div>
            <div class="card-body">
                <a href="{{ asset('public/topics/'.$data['images']) }}.jpg" class="image-popup" title="{{ $data['topic'] }}">
                    <img src="{{ asset('public/topics/'.$data['images']) }}.jpg" class="img-fluid" alt="work-thumbnail">
                </a>    
            </div>
        </div>

        <h1 id="timer" class="text-center display-4 font-weight-bold text-primary">01:20</h1>

    </div>
</div>

<div id="modal" class="modal fade-scale" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h4 class="text-center">Click to start</h4>

                <button class="btn btn-success btn-sm mt-3" id="btnPlaySound">START</button>
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
<script>
    let totalTime = 80; //80
    function setTime() {
        totalTime--

        let minutes = Math.floor(totalTime / 60)
        let seconds = totalTime % 60

        let min = minutes < 10 ? '0' + minutes : minutes
        let sec = seconds < 10 ? '0' + seconds : seconds

        if(totalTime <= 10) {
            $('#timer').addClass('text-danger').removeClass('text-primary')
        }

        $('#timer').text(min + ':' + sec)

        if (totalTime === 0) {
            let queryString = location.pathname;
            queryString = queryString.split('/');

            let url = `${location.origin}/${queryString[1]}/record/${queryString[3]}`;
            location.href = url;
        }
    }

    function startTime() {
        timer = setInterval(setTime, 1000)
    }

    function stopTime() {
        clearInterval(timer)
    }
    
	$(document).ready(function() {
        $('#modal').modal({
            backdrop: 'static',
            keyboard: false
        })
        $('#modal').modal('show');

    });

    $('#btnPlaySound').on('click', () => {
        let audio = document.getElementById('audio1');
        audio.play();
        $('#modal').modal('hide');
        startTime()
    })

</script>
@stop