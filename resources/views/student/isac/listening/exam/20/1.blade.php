<link rel="stylesheet" href="{{ asset('public/css/draggable.css') }}">

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

$Q1_10->e1->q = "Peter drove carelessly so he had an accident.";
$Q1_10->e2->q = "Carol didn't take an umbrella with her so she got wet.";
$Q1_10->e3->q = "You didn't take a compass so you got lost.";
$Q1_10->e4->q = "We didn't have enough money so we couldn't buy the book.";
$Q1_10->e5->q = "Richard got up late so he couldn't eat breakfast.";
$Q1_10->e6->q = "The dog barked loudly so the burglar ran away.";
$Q1_10->e7->q = "The door was open so the bird escaped.";
$Q1_10->e8->q = "The road was slippery so the car skidded.";
$Q1_10->e9->q = "I didn't know the answers so I didn't pass the test.";
$Q1_10->e10->q = "His handwriting was untidy so I couldn't read the address.";

$Q1_10->e1->aw = "If Peter hadn't driven carelessly, he wouldn't have had an accident";
$Q1_10->e2->aw = "If Carol had taken an umbrella with her, she wouldn't have got wet";
$Q1_10->e3->aw = "If you had taken a compass, you wouldn't have got lost";
$Q1_10->e4->aw = "If we had had enough money, we could've bought the book";
$Q1_10->e5->aw = "If Richard hadn't got up late, he could've eaten breakfast";
$Q1_10->e6->aw = "If the dog hadn't barked loudly, the burglar wouldn't have run away";
$Q1_10->e7->aw = "If the door hadn't been open, the bird wouldn't have escaped";
$Q1_10->e8->aw = "If the road hadn't been slippery, the car wouldn't have skidded";
$Q1_10->e9->aw = "If I had known the answers, I would've passed the test";
$Q1_10->e10->aw = "If his handwriting hadn't been untidy, I could've read the address";

@endphp

<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-16">
            <h4 class="mt-0">{{$pageTitle['sub_menu_name']}}</h4>

            <p>Listen to the example:</p>
            <p class="p-0 m-0"><b>e.g. </b> Bob left work late so he missed the train. </p>
            <p class="p-0 m-0"><b>Answer: </b>If Bob hadn't left work late, he wouldn't have missed the train</p>
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
                    {{$pageTitle['sub_menu_name'] }}
                </h4>
            </div>
            <div class="modal-body text-center">
                <button id="sound-intro" class="btn btn-bordered-primary">Play Sound</button>
                <audio data-sound="sound-intro">
                    <source src="{{ asset('public/isac_listening/'.$pageTitle['sub_menu_type'] .'/' .$pageTitle['name_audio']) }}" type="audio/mp3">
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



    $(".drag").draggable({
        revert: "invalid",
        cursor: "move",
        opacity: 0.7,
        zIndex: 100,
        containment: ".card-box",
        stop: function(event, ui) {
            if ($("#choices").children().length == 0) {
                $("#check-answer").prop("disabled", false);
            }
        },
    })

    $(".dropbox").droppable({
        accept: ".drag",
        tolerance: "touch",
        zIndex: 100,
        over: function(event, ui) {
            $(this).css("border-color", "#777");
        },
        out: function(event, ui) {
            $(this).css("border-color", "#ccc");
        },
        drop: function(event, ui) {
            if ($(this).children().length > 0) {
                var move = $(this).children().detach();
                $(ui.draggable).css({
                    top: 0,
                    left: 0
                }).parent().append(move);
            }
            $(this).css("border-color", "#ccc");
            $(this).append($(ui.draggable).css({
                top: 0,
                left: 0
            }));
        },
    })
</script>
@stop