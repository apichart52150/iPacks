@extends('layouts.main')

@section('content')

    <div class="row justify-content-center mt-2">
       <div class="col-md-12">
            <h2 id="timer" class="mt-0 text-primary text-center display-4">02:00</h2>
            <div class="progress progress-xl mb-2 d-none">
                <div class="progress-bar bg-success" role="progressbar"></div>
            </div>

            <div class="mt-2 border-top border-primary bg-white p-2 d-none" style="border-width: 2px !important;">
                <h3 class="mt-0 mb-3">Play</h3>
                <div id="audio-container"></div>
            </div>
            
            <div class="text-center">
                <button class="btn btn-primary btn-sm width-lg d-none" type="button" disabled="" id="loading">
                    <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                    Recording...
                </button>
                <button id="play" class="btn btn-primary btn-sm width-lg"><i class="fas fa-microphone"></i> Record</button>
                <button id="finish" class="btn btn-success btn-sm d-none mt-2"><i class="fas fa-upload"></i> Finish</button>
                <button id="reset" class="btn btn-warning btn-sm d-none mt-2"><i class="fas fa-undo"></i> Reset</button>
            </div>

            <div class="font-16 text-center d-none" id="encode-process">
                <div class='spinner-grow text-dark mr-2 align-middle' role='status'></div>
                <p>This process may take several seconds to a few minutes</p>
            </div>

        </div>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary py-2">
                    <h3 class="text-center text-white m-0">Topic {{ $data['topic'] }}</h3>
                </div>
                <div class="card-body">
                    <a href="{{ asset('public/topics/'.$data['images']) }}.jpg" class="image-popup" title="Topic {{ $data['topic'] }}">
                        <img src="{{ asset('public/topics/'.$data['images']) }}.jpg" class="img-fluid" alt="work-thumbnail">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="soundModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary p-2">
                    <h4 class="modal-title text-white" id="mySmallModalLabel">{{ $data['topic'] }}</h4>
                </div>
                <div class="modal-body text-center">
                    <div class="font-16 text-dark">
                        <p class="mb-0">When recording, make sure to <span class="font-italic font-weight-bold">speak clearly</span></p>
                        <p>into your microphone <img src="{{ asset('public/assets/images/speak_icon.jpg') }}" alt="" width="40"></p>
                    </div>
                    <button class="btn btn-primary" id="btnPlaySound">Continue</button>
                </div>
            </div>
        </div>
    </div>

    <audio src="{{ asset('public/audio/audio_02.m4a') }}" id="audio"></audio>

@endsection


@section('js')
<script src="{{ asset('public/js/WebAudioRecorder.min.js') }}"></script>
<script src="{{ asset('public/js/rec.js') }}"></script>
<script>
    let timeCount = 10
    totalTime = timeCount;

    function createDownloadLink(blob) { 
        
        let url = URL.createObjectURL(blob);
        
        audioContainer.innerHTML = `<audio src="${url}" controls controlsList="nodownload" class="w-100"></audio>`; 

        audioContainer.parentElement.classList.remove('d-none');
        
        loadingBtn.classList.add('d-none');
        finishBtn.classList.remove('d-none');
        resetBtn.classList.remove('d-none');

        finishBtn.addEventListener('click', function() {
            let form_data = new FormData();
            form_data.append('topic', "{{ $data['topic'] }}")
            form_data.append('audio_data', blob, "{{ $data['topic'] }}")

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                xhr: function() {
                    var xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener("progress", function(evt) {
                        if (evt.lengthComputable) {
                            var percentComplete = ((evt.loaded / evt.total) * 100);
                            $('.progress').removeClass('d-none')
                            $(".progress-bar").width(percentComplete + '%');
                            $(".progress-bar").html(percentComplete+'%');
                        }
                    }, false);
                    return xhr;
                },
                url: "{{ route('saveSound') }}",
                type: 'POST',
                data: form_data,
                processData: false,
                contentType: false,
                beforesend: function() {
                    $(".progress-bar").width('0%');
                },
                success: function(data) {
                    if(data.msg == 'Upload Success') {
                        window.location = data.url
                        localStorage.removeItem('listen');
                    }
                }

            });
        })
    }

    if(!localStorage.getItem('listen')) {

        $('#play').attr('disabled', true);

        $('#soundModal').modal({
            show: true,
            keyboard: false,
            backdrop: 'static'
        })

        $('#audio').on('ended', () => {
            $('#play').attr('disabled', false);
        })

    } 

    $('#btnPlaySound').on('click', () => {
        $('#audio')[0].play();
        $('#soundModal').modal('hide')
        localStorage.setItem('listen', true);
    })

</script>
@endsection