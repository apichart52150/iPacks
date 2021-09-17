@section('css')
<style>
    table tr .awswer {
        vertical-align: middle;
    }

    .aw {
        display: none;
    }
</style>
@stop
@php

$Q1_10 = new stdClass();
$Q1_10->e1 = new stdClass();
$Q1_10->e2 = new stdClass();
$Q1_10->e3 = new stdClass();
$Q1_10->e4 = new stdClass();
$Q1_10->e5 = new stdClass();
$Q1_10->e6 = new stdClass();
$Q1_10->e7 = new stdClass();
$Q1_10->e8 = new stdClass();
$Q1_10->e9 = new stdClass();
$Q1_10->e10 = new stdClass();

$Q1_10->e1->n = "1";
$Q1_10->e2->n = "2";
$Q1_10->e3->n = "3";
$Q1_10->e4->n = "4";
$Q1_10->e5->n = "5";
$Q1_10->e6->n = "6";
$Q1_10->e7->n = "7";
$Q1_10->e8->n = "8";
$Q1_10->e9->n = "9";
$Q1_10->e10->n = "10";

$Q1_10->e1->q = "Please don't play the music so loud.";
$Q1_10->e2->q = "Please change your clothes.";
$Q1_10->e3->q = "Please pay at the door.";
$Q1_10->e4->q = "Please be more courteous.";
$Q1_10->e5->q = "Please don't sit there.";
$Q1_10->e6->q = "Please deliver the furniture on Friday instead of today.";
$Q1_10->e7->q = "Please don't be so rude.";
$Q1_10->e8->q = "Please think before answering next time.";
$Q1_10->e9->q = "Please write in ink.";
$Q1_10->e10->q = "Please go to bed now.";

$Q1_10->e1->aw = "I'd rather you didn't play the music so loud.";
$Q1_10->e2->aw = "I'd rather you changed your clothes.";
$Q1_10->e3->aw = "I'd rather you paid at the door.";
$Q1_10->e4->aw = "I'd rather you were more courteous.";
$Q1_10->e5->aw = "I'd rather you didn't sit there.";
$Q1_10->e6->aw = "I'd rather you delivered the furniture on Friday instead of today.";
$Q1_10->e7->aw = "I'd rather you weren't so rude.";
$Q1_10->e8->aw = "I'd rather you thought before answering next time.";
$Q1_10->e9->aw = "I'd rather you wrote in ink.";
$Q1_10->e10->aw = "I'd rather you went to bed now.";

@endphp


<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-16">
            <h4 class="mt-0">{{$pageTitle['sub_menu_name']}}</h4>

            <p>Listen to the example:</p>
            <p class="p-0 m-0"><b>e.g. </b>Please don't do that.</p>
            <p class="p-0 m-0"><b>Answer: </b>I'd rather you didn't do that</p>
            <p class="pt-2 m-0"><b>e.g. </b>Please bring your own book.</p>
            <p class="p-0 m-0"><b>Answer: </b>I'd rather you brought your own book.</p>
            <p class="pt-2">Now you do it: </p>

            <table class="w-100">
                @foreach($Q1_10 as $index => $Q1_10)
                <tr>
                    <td style="width: 23px;">{{$Q1_10->n}}.</td>
                    <td colspan="2">{{$Q1_10->q}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="pt-2" style="width: 80px;vertical-align:middle;"><b>Answer: </b></td>
                    <td class="pt-2">
                        <input type="text" class="form-control w-75 q-val" show-aw="Q1_10-{{$index}}" aw="{{$Q1_10->aw}}">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="pb-2">
                        <span class="text-danger Q1_10-{{$index}} aw">{{$Q1_10->aw}}</span>
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

<button id="check-answer" class="btn btn-info">Check Answers</button>

@endsection

@section('js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

<script>
    $('#check-answer').on('click', () => {
        $('#check-answer').prop('disabled', true)
        $('.q-val').each((idx, item) => {
            if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'), item)
            else
                show_error(item)
        })
        $('.aw').removeClass('aw')
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