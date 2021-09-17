@section('css')
<style>
    table tr .awswer {
        vertical-align: middle;
    }


    .aw1,
    .aw2,
    .aw3,
    .aw4,
    .aw5,
    .aw6 {
        display: none;
    }
</style>
@stop
@php

$Q_1 = new stdClass();
$Q_1->e1 = new stdClass();
$Q_1->e2 = new stdClass();
$Q_1->e3 = new stdClass();
$Q_1->e4 = new stdClass();
$Q_1->e5 = new stdClass();
$Q_1->e6 = new stdClass();
$Q_1->e7 = new stdClass();
$Q_1->e8 = new stdClass();
$Q_1->e9 = new stdClass();
$Q_1->e10 = new stdClass();

$Q_1->e1->n = "1";
$Q_1->e2->n = "2";
$Q_1->e3->n = "3";
$Q_1->e4->n = "4";
$Q_1->e5->n = "5";
$Q_1->e6->n = "6";
$Q_1->e7->n = "7";
$Q_1->e8->n = "8";
$Q_1->e9->n = "9";
$Q_1->e10->n = "10";

$Q_1->e1->q = "I was having a bath. I slipped and hurt myself.";
$Q_1->e2->q = "She was walking to work. It started to rain.";
$Q_1->e3->q = "The car broke down. He was driving to work.";
$Q_1->e4->q = "The thunderstorm began. The boys were playing football.";
$Q_1->e5->q = "The politician was giving a speech. Someone threw a tomato at him.";
$Q_1->e6->q = "The traffic lights were not working. A number of accidents occurred.";
$Q_1->e7->q = "The salvage workers were trying to save the ship. It caught fire.";
$Q_1->e8->q = "There was a power cut. They were watching an exciting film.";
$Q_1->e9->q = "The plane developed engine trouble. It was flying from Perth to Adelaide.";
$Q_1->e10->q = "The man was walking across the street. He slipped on a banana skin.";

$Q_1->e1->aw = "While I was having a bath, I slipped and hurt myself";
$Q_1->e2->aw = "While she was walking to work, it started to rain";
$Q_1->e3->aw = "The car broke down while he was driving to work";
$Q_1->e4->aw = "The thunderstorm began while the boys were playing football";
$Q_1->e5->aw = "While the politician was giving a speech, someone threw a tomato at him";
$Q_1->e6->aw = "While the traffic lights were not working, a number of accidents occurred";
$Q_1->e7->aw = "While the salvage workers were trying to save the ship, it caught fire";
$Q_1->e8->aw = "There was a power cut while they were watching an exciting film";
$Q_1->e9->aw = "The plane developed engine trouble while it was flying from Perth to Adelaide";
$Q_1->e10->aw = "While the man was walking across the street, he slipped on a banana skin";

@endphp


<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-16">
            <h4 class="mt-0">{{$pageTitle['sub_menu_name']}}</h4>

            <p>Listen to the example:</p>
            <p class="p-0 m-0"><b>e.g. </b>The phone rang. We were eating dinner.</p>
            <p class="p-0 m-0"><b>Answer: </b>The phone rang while we were eating dinner. </p>
            <p class="pt-2 m-0"><b>e.g. </b>The plane was taking off. The tyre burst. </p>
            <p class="p-0 m-0"><b>Answer: </b>While the plane was taking off, the tyre burst.</p>
            <p class="pt-2">Now you do it: </p>

            <table class="w-100">
                @foreach($Q_1 as $index => $Q_1)
                <tr>
                    <td style="width: 23px;">{{$Q_1->n}}.</td>
                    <td colspan="2">{{$Q_1->q}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="pt-2" style="width: 80px;vertical-align:middle;"><b>Answer: </b></td>
                    <td class="pt-2">
                        <input type="text" class="form-control w-75 q-val1" show-aw="Q_1-{{$index}}" aw="{{$Q_1->aw}}">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="pb-2">
                        <span class="text-danger Q_1-{{$index}} aw1">{{$Q_1->aw}}</span>
                    </td>
                </tr>
                @endforeach
            </table>


        </div>
    </div>
</div>

<div id="sound-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-primary py-2">
                <h4 class="modal-title text-white mx-auto">Listening -
                    {{$pageTitle['sub_menu_name'] }}</h4>
            </div>
            <div class="modal-body text-center">
                <button id="sound-intro" class="btn btn-bordered-primary">Play Sound</button>
                <audio data-sound="sound-intro">
                    <source
                        src="{{ asset('public/isac_listening/'.$pageTitle['sub_menu_type'] .'/' .$pageTitle['name_audio']) }}"
                        type="audio/mp3">
                </audio>
            </div>
        </div>
    </div>
</div>
@section('button-control')

<button id="check-answer1" class="btn btn-info">Check Answers</button>

@endsection

@section('js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

<script>
    $('#check-answer1').on('click', () => {
        $('#check-answer1').prop('disabled', true)
        $('.q-val1').each((idx, item) => {
            if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'), item)
            else
                show_error(item)
        })
        $('.aw1').removeClass('aw1')
    })

    function show_aw(aw, item) {
        $(item).addClass('border border-success')
        $('.' + aw).addClass('text-success')
        $('.' + aw).removeClass('text-danger')
    }

    function show_error(item) {
        $(item).addClass('border border-danger')
    }


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