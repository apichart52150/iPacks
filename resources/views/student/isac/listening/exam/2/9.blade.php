<link rel="stylesheet" href="{{ asset('public/css/draggable.css') }}">
<style>
    table tr td {
        vertical-align: text-top;
    }

    .aw {
        display: none;
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
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card-box text-dark font-16">
            <h2>(The Meaning of Development)</h2>
            <table class="w-100 py-2">
                <tr>
                    <td style="width: 30px;">3.1</td>
                    <td colspan="2">
                        You are going to hear a talk entitled: <b>'The Meaning of Development'</b>.
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" class="py-2">
                        Make predictions about what you think you might hear. Write down any words which you
                        associate with this topic. Make sure you understand the concept: 'development'.
                    </td>
                </tr>
                <tr>
                    <td>3.2</td>
                    <td colspan="2" class="py-2">
                        Now you are ready to listen to the talk.
                        <br>
                        As you listen to the talk, make notes using any conventions which will help you.
                    </td>
                </tr>

                <tr>
                    <td>3.3</td>
                    <td colspan="2" class="py-2">
                        Listen to the recording twice only.
                    </td>
                </tr>
                <tr>
                    <td>3.4</td>
                    <td colspan="2" class="py-2">
                        Now, write a short summary of the talk in <b>about 50 - 80 words</b>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" class="py-2">
                        <textarea name="" class="w-100" style="resize: none;" id="" cols="30" rows="10"></textarea>
                        <h5 class="mt-3 aw text-success">Summary (possible answer)</h5>
                        <span class="aw text-success">
                            The word 'develop' can mean 'unwrap' or 'uncover'. It also means to allow a picture to show from
                            a negative image. In the context of growing vegetables, it means providing an environment which
                            allows growth to occur. True development means allowing people to develop in their own way by
                            removing obstacles which prevent growth. This means integrating people into their own
                            development to make it meaningful.
                        </span>
                    </td>
                </tr>
            </table>
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
                <audio data-sound="sound-intro">
                    <source src="{{ asset('public/audio/exam/listen/unit-i-nmbers.mp3') }}" type="audio/mp3">
                </audio>
            </div>
        </div>
    </div>
</div>


@section('button-control')
<button id="check-answer" class="btn btn-info">Check Answersss</button>
<!-- <button id="show-answer" class="btn btn-success">Show Answer</button> -->
@endsection

@section('js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

<script>
    $('#check-answer').on('click', () => {
        $('.aw').removeClass('aw')
    })


    $('#sound-modal').modal({
        'show': true,
        'backdrop': "static",
        'keyboard': false
    })
    $('#sound-intro').on('click', (e) => {
        $('#sound-modal').modal('hide')
        const audio = document.querySelector('audio[data-sound="sound-intro"]');
        audio.play()
    })
</script>

@stop