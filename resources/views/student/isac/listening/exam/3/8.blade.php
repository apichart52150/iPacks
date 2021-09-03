<link rel="stylesheet" href="{{ asset('public/css/draggable.css') }}">
<style>
    table tr td {
        vertical-align: middle;
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
        min-width: 80px;
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
        grid-template-columns: repeat(4, 1fr);
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

$caller_1 = new stdClass();
$caller_1_choice = new stdClass();
$caller_1->e1 = new stdClass();
$caller_1->e2 = new stdClass();
$caller_1->e3 = new stdClass();
$caller_1->e4 = new stdClass();
$caller_1->e5 = new stdClass();
$caller_1->e6 = new stdClass();
$caller_1->e7 = new stdClass();
$caller_1->e8 = new stdClass();
$caller_1->e9 = new stdClass();
$caller_1->e10 = new stdClass();

$caller_1->e1->q = "confined";
$caller_1->e2->q = "the globe";
$caller_1->e3->q = "conventional";
$caller_1->e4->q = "irrefutable";
$caller_1->e5->q = "alien";
$caller_1->e6->q = "to hurtle";
$caller_1->e7->q = "to generate";
$caller_1->e8->q = "sceptics";
$caller_1->e9->q = "to shift";
$caller_1->e10->q = "to propel";

$caller_1->e1->aw = "restricted, limited, closed";
$caller_1->e2->aw = "the world";
$caller_1->e3->aw = "normal, customary";
$caller_1->e4->aw = "cannot be proved false";
$caller_1->e5->aw = "from a different country or planet";
$caller_1->e6->aw = "to move very fast";
$caller_1->e7->aw = "to produce";
$caller_1->e8->aw = "people who do not believe";
$caller_1->e9->aw = "to move";
$caller_1->e10->aw = "to push forward";

$caller_1_choice->ch1 = "normal, customary";
$caller_1_choice->ch2 = "to push forward";
$caller_1_choice->ch3 = "the world";
$caller_1_choice->ch4 = "to produce";
$caller_1_choice->ch5 = "cannot be proved false";
$caller_1_choice->ch6 = "restricted, limited, closed";
$caller_1_choice->ch7 = "people who do not believe";
$caller_1_choice->ch8 = "to move very fast";
$caller_1_choice->ch9 = "to move";
$caller_1_choice->ch10 = "from a different country or planet";


$caller_2 = new stdClass();
$caller_2->row1 = new stdClass();
$caller_2->row1->col = new stdClass();
$caller_2->row1->col->col1 = new stdClass();
$caller_2->row1->col->col2 = new stdClass();
$caller_2->row1->col->col3 = new stdClass();
$caller_2->row1->col->col4 = new stdClass();

$caller_2->row1->col->col1->aw = "Australasia";
$caller_2->row1->col->col2->aw = "Dec 30 1978";
$caller_2->row1->col->col3->aw = "UFOs";
$caller_2->row1->col->col4->aw = "TV crew; pilots; air-traffic controllers; Prof. Ronald Brown";


@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['sub_menu_name']}}
            </p>
            <div class="row">

                <div class="col-lg-12">
                    <span>
                        Before you listen to the tape, match the words and phrases in List A with their meanings in List B.
                    </span>
                    <table class="mt-1 w-100 mb-3">
                        @foreach($caller_1 as $index => $caller_1)
                        <tr>
                            <td class="">{{$caller_1->q}}</td>
                            <td class="px-4">=</td>
                            <td class="py-1">
                                <select class="form-select form-control q-text" show-aw="caller_1-{{$index}}" aw="{{$caller_1->aw}}" aria-label="Default select example">
                                    <option value="...">...</option>
                                    @foreach($caller_1_choice as $choice)
                                    <option value="{{$choice}}">{{$choice}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><span class="aw caller_1-{{$index}} text-danger">{{$caller_1->aw}}</span></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="col-lg-12">
                    <h5>Complete the following table of information:</h5>
                    <table class="w-100 table">
                        <tr>
                            <th>Country</th>
                            <th>Date(s)</th>
                            <th>Phenomenon</th>
                            <th>People involved</th>
                        </tr>
                        @foreach($caller_2 as $index => $caller_2)
                        <tr>
                            @foreach($caller_2->col as $index2 => $col)
                            <td>
                                <textarea style="resize: none;" name="" id="" rows="3" class="w-100 q-text" show-aw="caller_2-{{$index}}-{{$index2}}" aw="{{$col->aw}}"></textarea>
                                <span class="aw caller_2-{{$index}}-{{$index2}} text-danger">{{$col->aw}}</span>
                            </td>
                            @endforeach
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
                <h4 class="modal-title text-white mx-auto">Listening - 
 {{$pageTitle['sub_menu_name'] }}</h4>
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
<!-- <button id="show-answer" class="btn btn-success">Show Answers</button> -->
@endsection

@section('js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

<script>
    $('.q-caller_2').each((idx, item) => {
        let input = '<div class="input-con w-100 py-1">' +
            '<div class="dropbox q w-100" show-aw="' + $(item).attr('show-aw') + '" aw="' + $(item).attr('aw') + '"></div>' +
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
        $('.q-text').each((idx, item) => {
            if ($(item).val().replace(/(\r\n|\n|\r)/gm, " ").trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
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