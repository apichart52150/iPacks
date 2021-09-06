@section('css')
<style>
    table tr .awswer {
        vertical-align: middle;
    }


    .input-con {
        display: inline-block;
        position: relative;
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
$Q_1->e11 = new stdClass();
$Q_1->e12 = new stdClass();
$Q_1->e13 = new stdClass();
$Q_1->e14 = new stdClass();
$Q_1->e15 = new stdClass();

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
$Q_1->e11->n = "11";
$Q_1->e12->n = "12";
$Q_1->e13->n = "13";
$Q_1->e14->n = "14";
$Q_1->e15->n = "15";

$Q_1->e1->q = "It's raining,";
$Q_1->e2->q = "You've been here before,";
$Q_1->e3->q = "We ought to arrive on time,";
$Q_1->e4->q = "Jack built this house,";
$Q_1->e5->q = "You live in the northern suburbs,";
$Q_1->e6->q = "Your neighbours are from Vietnam,";
$Q_1->e7->q = "Sheila's grown a lot,";
$Q_1->e8->q = "This isn't real leather,";
$Q_1->e9->q = "You haven't been married long,";
$Q_1->e10->q = "He's still single,";
$Q_1->e11->q = "We've seen this film before,";
$Q_1->e12->q = "There isn't much time left,";
$Q_1->e13->q = "She's studying to be an engineer,";
$Q_1->e14->q = "This car uses unleaded petrol,";
$Q_1->e15->q = "You usually leave work at six o'clock,";

$Q_1->e1->aw = "isn't it";
$Q_1->e2->aw = "haven't you";
$Q_1->e3->aw = "oughtn't we";
$Q_1->e4->aw = "didn't he";
$Q_1->e5->aw = "don't you";
$Q_1->e6->aw = "aren't they";
$Q_1->e7->aw = "hasn't she";
$Q_1->e8->aw = "is it";
$Q_1->e9->aw = "have you";
$Q_1->e10->aw = "isn't he";
$Q_1->e11->aw = "haven't we";
$Q_1->e12->aw = "is there";
$Q_1->e13->aw = "isn't she";
$Q_1->e14->aw = "doesn't it";
$Q_1->e15->aw = "don't you";

@endphp


<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-16">
            <h4 class="mt-0">{{$pageTitle['sub_menu_name']}}</h4>

            <p>Listen to the example:</p>
            <p class="p-0 m-0"><b>e.g. </b>You like watching television, ........................?</p>
            <p class="p-0 m-0"><b>Answer: </b>You like watching television, don't you?</p>
            <p class="pt-2 m-0"><b>e.g. </b>She can't speak Polish, ..........................? </p>
            <p class="p-0 m-0"><b>Answer: </b>She can't speak Polish, can she?</p>
            <p class="pt-2">Now you do it: </p>

            <table class="w-100">
                @foreach($Q_1 as $index => $Q_1)
                <tr>
                    <td style="width: 23px;">{{$Q_1->n}}.</td>
                    <td class="py-1" colspan="2">
                        {{$Q_1->q}}
                        <div class="input-con">
                            <input type="text" class="form-control w-100 q-val1" show-aw="Q_1-{{$index}}"
                                aw="{{$Q_1->aw}}">
                        </div>
                        <span class="text-danger px-1 Q_1-{{$index}} aw1">{{$Q_1->aw}}</span>
                        ?
                    </td>
                </tr>
                @endforeach
            </table>

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


    // $('#sound-modal').modal({
    //     'show': true,
    //     'backdrop': "static",
    //     'keyboard': false
    // })
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