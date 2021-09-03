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
        grid-template-columns: repeat(4, 1fr);
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

$aw = new stdClass();

$aw->e1 = "04368955401";
$aw->e2 = "house";
$aw->e3 = "washing machine";
$aw->e4 = "250 pounds";
$aw->e5 = "Friday";
$aw->e6 = "225 pounds";


$Q7_10 = new stdClass();
$Q7_10->e7 = new stdClass();
$Q7_10->e8 = new stdClass();
$Q7_10->e9 = new stdClass();
$Q7_10->e10 = new stdClass();

$Q7_10->e7->n = "7";
$Q7_10->e8->n = "8";
$Q7_10->e9->n = "9";
$Q7_10->e10->n = "10";

$Q7_10->e7->aw = "B. Garden";
$Q7_10->e8->aw = "E. Kitchen";
$Q7_10->e9->aw = "G. Office";
$Q7_10->e10->aw = "H. Bathroom";

$choice_7_10 = new stdClass();
$choice_7_10->ch1 = "A. Outside appearance";
$choice_7_10->ch2 = "B. Garden";
$choice_7_10->ch3 = "C. Size";
$choice_7_10->ch4 = "D. Neighbourhood";
$choice_7_10->ch5 = "E. Kitchen";
$choice_7_10->ch6 = "F. Living room";
$choice_7_10->ch7 = "G. Office";
$choice_7_10->ch8 = "H. Bathroom";
$choice_7_10->ch9 = "I. Bedrooms";

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
                                            <h3 class="pb-2">Jones Real Estate</h3>
                                        </div>
                                        <div class="w-100 d-flex justify-content-center">
                                            <table>
                                                <tr>
                                                    <th class="pr-2">Name: </th>
                                                    <td>
                                                        Janice Jackson
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="pr-2">Contact number:</th>
                                                    <td>
                                                        (1)
                                                        <div class="input-con py-1">
                                                            <input type="text" class="form-control q-val" show-aw="q-1" aw="{{$aw->e1}}">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="pr-2"></th>
                                                    <td><span class="aw text-danger q-1">{{$aw->e1}}</span></td>
                                                </tr>
                                                <tr>
                                                    <th class="pr-2">Type of accommodation: </th>
                                                    <td>
                                                        (2)
                                                        <div class="input-con py-1">
                                                            <input type="text" class="q-val form-control" show-aw="q-2" aw="{{$aw->e2}}">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="pr-2"></th>
                                                    <td><span class="aw text-danger q-2">{{$aw->e2}}</span></td>
                                                </tr>
                                                <tr>
                                                    <th class="pr-2">Location: </th>
                                                    <td>
                                                        In the suburbs
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="pr-2">Special requirements: </th>
                                                    <td>
                                                        Internet connection
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="pr-2"></th>
                                                    <td>
                                                        (3)
                                                        <div class="input-con py-1">
                                                            <input type="text" class="q-val form-control" show-aw="q-3" aw="{{$aw->e3}}">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-2"></td>
                                                    <td><span class="aw text-danger q-3">{{$aw->e3}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-2"></td>
                                                    <td>
                                                        (4)
                                                        <div class="input-con py-1">
                                                            <input type="text" class="q-val form-control" show-aw="q-4" aw="{{$aw->e4}}">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-2"></td>
                                                    <td><span class="aw text-danger q-4">{{$aw->e4}}</span></td>
                                                </tr>
                                                <tr>
                                                    <th class="pr-2">Property for viewing: </th>
                                                    <td>
                                                        26 High Street, Henley
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="pr-2">Day: </th>
                                                    <td>
                                                        (5)
                                                        <div class="input-con py-1">
                                                            <input type="text" class="q-val form-control" show-aw="q-5" aw="{{$aw->e5}}">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-2"></td>
                                                    <td><span class="aw text-danger q-5">{{$aw->e5}}</span></td>
                                                </tr>
                                                <tr>
                                                    <th class="pr-2">Time: </th>
                                                    <td>
                                                        7.00 pm
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="pr-2">Rent: </th>
                                                    <td>
                                                        (6)
                                                        <div class="input-con py-1">
                                                            <input type="text" class="q-val form-control" show-aw="q-6" aw="{{$aw->e6}}">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-2"></td>
                                                    <td><span class="aw text-danger q-6">{{$aw->e6}}</span></td>
                                                </tr>
                                                <tr>
                                                    <th class="pr-2">Deposit: </th>
                                                    <td>
                                                        2 months’ rent
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="pt-4 col-lg-12">
                    Which of the following did Janice <b>NOT LIKE</b> about the house?
                    <br>
                    Choose 4 answers from the list. Write the letters a-i.
                    <div class="mt-2 row justify-content-center mb-2">
                        <div class="col-md-12">
                            <div class="border border-dark px-2 text-center">
                                <div class="drag-container">
                                    <div class="d-grid grid-5" id="choices">
                                        @foreach($choice_7_10 as $choice)
                                        <div class="drag">{{$choice}}</div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="w-100">
                        @foreach($Q7_10 as $index => $Q7_10)
                        <tr>
                            <td style="width: 25px; vertical-align: middle;">{{$Q7_10->n}}.</td>
                            <td>
                                <div class="input-con w-75 py-1">
                                    <div class="dropbox q w-100" show-aw="Q7_10-{{$index}}" aw="{{$Q7_10->aw}}"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <span class="aw text-danger Q7_10-{{$index}} px-2">{{$Q7_10->aw}}</span>
                            </td>
                        </tr>
                        @endforeach
                    </table>
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
    $('.q-caller_2').each((idx, item) => {
        let input = '<div class="input-con py-1">' +
            '<div class="dropbox q" show-aw="' + $(item).attr('show-aw') + '" aw="' + $(item).attr('aw') + '"></div>' +
            '</div><br>' +
            '<span class="aw ' + $(item).attr('show-aw') + ' text-danger">' + $(item).attr('aw') + '</span>'
        $(item).html(input)
    })

    $('#check-answer').on('click', () => {
        $('.q').each((idx, item) => {
            if ($(item).text().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'), item)
            else
                show_error(item)
        })
        $('.q-val').each((idx, item) => {
            if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'), item)
            else
                show_error(item)
        })
        $('.q-check:checked').each((idx, item) => {
            if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'), item)
            else
                show_error(item)
        })
        $('.q-check-input:checked').each((idx, item) => {
            let aw = ""
            if ($(item).val() == "False")
                aw = $(item).val() + ": " + $('.' + $(item).attr('text')).val()
            else
                aw = $(item).val()
            if (aw.trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
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