<link rel="stylesheet" href="{{ asset('public/css/draggable.css') }}">
<style>
    table tr td {
        vertical-align: top;
    }

    .table tr td {
        vertical-align: middle;
        border: 1px solid black;
    }

    .table tr th {
        border: 1px solid black;
    }

    .input-con {
        display: inline-block;
        position: relative;
    }

    .input-con2 {
        width: 100px;
    }

    .drag-container {
        margin-bottom: 25px;
    }

    .answers-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 10px 0;
    }

    .answers-container p {
        font-size: 16px;
    }

    .dropbox {
        border: 1px dashed #ccc;
        border-radius: 5px;
        padding: 3px;
        width: 100%;
        height: auto;
        min-width: 250px;
        min-height: 40px;
    }

    .dropbox .drag {
        margin: 0;
        vertical-align: middle;
    }

    .grid-5 {
        grid-template-columns: repeat(3, 1fr);
    }

    .grid-5-2 {
        grid-template-columns: repeat(5, 1fr);
    }

    .aw {
        display: none;
    }

    .input-text {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 3px;
        width: 100%;
        height: auto;
        min-width: 80px;
        min-height: 40px;
    }

    #caller-3 tr .col-3-500 {
        width: 500px;
        padding-left: 10px;
    }
</style>
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
$Q1_10->e11 = new stdClass();
$Q1_10->e12 = new stdClass();
$Q1_10->e13 = new stdClass();
$Q1_10->e14 = new stdClass();
$Q1_10->e15 = new stdClass();
$Q1_10->e16 = new stdClass();
$Q1_10->e1->q = "Departing: ";
$Q1_10->e2->q = "Destination:";
$Q1_10->e3->q = "Date of travel:";
$Q1_10->e4->q = "Departure time:";
$Q1_10->e5->q = "Arrival Time:";
$Q1_10->e6->q = "Number of people travelling: ";
$Q1_10->e7->q = "Seat no.: ";
$Q1_10->e8->q = "Special requirements:";
$Q1_10->e9->q = "Travel insurance: ";
$Q1_10->e10->q = "Total cost:";
$Q1_10->e11->q = "Payment method: ";
$Q1_10->e12->q = "Baggage allowance:";
$Q1_10->e13->q = "Hand baggage: ";
$Q1_10->e14->q = "Visa:";
$Q1_10->e15->q = "Check-in:";
$Q1_10->e16->q = "On-line check-in:";

$Q1_10->e1->q2 = "Bangkok";
$Q1_10->e2->q2 = "(1) ___";
$Q1_10->e3->q2 = "(2) ___";
$Q1_10->e4->q2 = "9.30 pm";
$Q1_10->e5->q2 = "(3) ___";
$Q1_10->e6->q2 = "2 pax";
$Q1_10->e7->q2 = "(4) ___  56K";
$Q1_10->e8->q2 = "(5) ___ food";
$Q1_10->e9->q2 = "YES";
$Q1_10->e10->q2 = "(6) ___";
$Q1_10->e11->q2 = "(7) ___";
$Q1_10->e12->q2 = "20 kgs";
$Q1_10->e13->q2 = "(8) ___";
$Q1_10->e14->q2 = "Visa on arrival";
$Q1_10->e15->q2 = "(9) ___";
$Q1_10->e16->q2 = "(10) ___";

$Q1_10->e1->aw = "";
$Q1_10->e2->aw = "Hong Kong";
$Q1_10->e3->aw = "25 August";
$Q1_10->e4->aw = "";
$Q1_10->e5->aw = "11.45 pm";
$Q1_10->e6->aw = "";
$Q1_10->e7->aw = "56J";
$Q1_10->e8->aw = "Vegetarian";
$Q1_10->e9->aw = "";
$Q1_10->e10->aw = "520 dollars";
$Q1_10->e11->aw = "bank transfer";
$Q1_10->e12->aw = "";
$Q1_10->e13->aw = "8 kg";
$Q1_10->e14->aw = "";
$Q1_10->e15->aw = "3 hours";
$Q1_10->e16->aw = "1 hour";

@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['sub_menu_name']}}
            </p>
            <div class="row">
                <div class="col-lg-12">
                    Write <b>NO MORE THAN TWO WORDS AND/OR A DATE OR A NUMBER</b>.
                    <div class="w-100 d-flex justify-content-center">
                        <table class="w-75">
                            <tr>
                                <td style="border: 1px solid black;">
                                    <div class="p-3">
                                        <div class="w-100 text-center">
                                            <b>Booking Form</b>
                                        </div>
                                        <div class="w-100 d-flex justify-content-center">
                                            <table>
                                                @foreach($Q1_10 as $index => $Q1_10)
                                                <tr>
                                                    <td class="pr-2">{{$Q1_10->q}}</td>
                                                    <td class="Q1_10-{{$index}} q1_10" show-aw="show_aw_Q1_10-{{$index}}" aw="{{$Q1_10->aw}}" replace="Q1_10-{{$index}}">{{$Q1_10->q2}}</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <span class="aw text-danger show_aw_Q1_10-{{$index}}">{{$Q1_10->aw}}</span>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
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
                <audio data-sound="sound-intro">
                    <source src="{{ asset('public/audio/exam/listen/unit-i-nmbers.mp3') }}" type="audio/mp3">
                </audio>
            </div>
        </div>
    </div>
</div>


@section('button-control')
<button id="check-answer" class="btn btn-info">Check Answers</button>
<!-- <button id="show-answer" class="btn btn-success">Show Answers</button> -->
@endsection

@section('js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

<script>
    $('.q1_10').each((idx, item) => {
        let text = $(item).html()
        let input = '<div class="input-con py-1">' +
            '<input class="q-val form-control" show-aw="' + $(item).attr('show-aw') + '" aw="' + $(item).attr('aw') + '">' +
            '</div>'
            text = text.replace("___",input)
        $(item).html(text)
    })

    $('#check-answer').on('click', () => {
        $('.q-val').each((idx, item) => {
            if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'))
        })
        $('.q-check:checked').each((idx, item) => {
            if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'))
        })
        $('.q-check-input:checked').each((idx, item) => {
            let aw = ""
            if ($(item).val() == "False")
                aw = $(item).val() + ": " + $('.' + $(item).attr('text')).val()
            else
                aw = $(item).val()
            if (aw.trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'))
        })
        $('.aw').removeClass('aw')
    })

    function show_aw(aw) {
        $('.' + aw).addClass('text-success')
        $('.' + aw).removeClass('text-danger')
    }

    function checkRadio(x) {
        $('.' + x).prop("checked", true);
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
    });

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
    });
</script>

@stop