<style>
    .mark,
    mark {
        padding: .2em;
        background-color: #ffc107;
    }
</style>
@php



@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['sub_menu_name']}}
            </p>

            <p>Circle the numbers you hear</p>
            <div class="row">
                <div class="col-md-6">
                    <label for="">A.</label>
                    <input type="radio" name="a">
                    <label for="">13</label>
                    <input type="radio" name="a">
                    <label for="">30</label>
                    
                    <label for="">B.</label>
                    <input type="radio" name="a">
                    <label for="">213</label>
                    <input type="radio" name="a">
                    <label for="">230</label>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
    </div>
</div>

<div id="sound-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-primary py-2">
                <h4 class="modal-title text-white mx-auto">Activity 1 - Intro</h4>
            </div>
            <div class="modal-body text-center">
                <button id="sound-intro" class="btn btn-bordered-primary">Play Sound</button>
                <!-- <audio data-sound="sound-intro">
                    <source src="{{ asset('public/assets/files/topic1/sounds/act1-intro.mp3') }}" type="audio/mp3">
                </audio> -->
            </div>
        </div>
    </div>
</div>


@section('button-control')
<button id="check-answer" class="btn btn-info">Check Answersss</button>
<!-- <button id="show-answer" class="btn btn-success">Show Answer</button> -->
@endsection

@section('js')

<script>
    $('#sound-modal').modal({
        'show': true,
        'backdrop': "static",
        'keyboard': false
    })
    $('#sound-intro').on('click', (e) => {
        $('#sound-modal').modal('hide')
        // const audio = document.querySelector('audio[data-sound="sound-intro"]');
        audio.play()
    })
</script>

@stop