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

    .event-click {
        cursor: pointer;
    }
</style>
@php

$aw = new stdClass();

$aw->e21 = "7.00 pm";
$aw->e22 = "healthy eating";
$aw->e23 = "questionnaire";
$aw->e24 = "case studies";
$aw->e25 = "20";

$Q26_30 = new stdClass();
$Q26_30->e1 = new stdClass();
$Q26_30->e2 = new stdClass();
$Q26_30->e3 = new stdClass();
$Q26_30->e4 = new stdClass();
$Q26_30->e5 = new stdClass();

$Q26_30->e1->n = "26";
$Q26_30->e2->n = "27";
$Q26_30->e3->n = "28";
$Q26_30->e4->n = "29";
$Q26_30->e5->n = "30";

$Q26_30->e1->q = "Compiling the questionnaire";
$Q26_30->e2->q = "Collating data from the questionnaire";
$Q26_30->e3->q = "Writing questions for the case studies";
$Q26_30->e4->q = "Conducting case study interviews";
$Q26_30->e5->q = "Recording the interviews";

$Q26_30->e1->aw = "C Peter and Jane together";
$Q26_30->e2->aw = "C Peter and Jane together";
$Q26_30->e3->aw = "B Jane";
$Q26_30->e4->aw = "B Jane";
$Q26_30->e5->aw = "A Peter";

@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['sub_menu_name']}}
            </p>
            <div class="row">
                <div class="col-lg-12">
                    Write <b>NO MORE THAN TWO WORDS OR A NUMBER</b>.
                    <table class="w-100">
                        <tr>
                            <td>
                                21. The restaurant canteen closes at
                                <div class="input-con py-1">
                                    <input type="text" class="q-val form-control" show-aw="q-21" aw="{{$aw->e21}}">
                                </div>
                                <span class="aw text-danger q-21 px-2">{{$aw->e21}}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                22 The university has recently been conducting a
                                <div class="input-con py-1">
                                    <input type="text" class="q-val form-control" show-aw="q-22" aw="{{$aw->e22}}">
                                </div>
                                <span class="aw text-danger q-22 px-2">{{$aw->e22}}</span>
                                campaign.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                23. Peter and Jane decide to conduct a survey using a
                                <div class="input-con py-1">
                                    <input type="text" class="q-val form-control" show-aw="q-23" aw="{{$aw->e23}}">
                                </div>
                                <span class="aw text-danger q-23 px-2">{{$aw->e23}}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                24. Jane suggests following this up with a few
                                <div class="input-con py-1">
                                    <input type="text" class="q-val form-control" show-aw="q-24" aw="{{$aw->e24}}">
                                </div>
                                <span class="aw text-danger q-24 px-2">{{$aw->e24}}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                25. They decide to interview no more than
                                <div class="input-con py-1">
                                    <input type="text" class="q-val form-control" show-aw="q-25" aw="{{$aw->e25}}">
                                </div>
                                <span class="aw text-danger q-25 px-2">{{$aw->e25}}</span>
                                students.
                            </td>
                        </tr>
                        <tr>
                            <td class="pt-4">
                                Who will be responsible for each task? For each question write one letter: A, B, or C
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table>
                                    @foreach($Q26_30 as $index => $Q26_30)
                                    <tr>
                                        <td>{{$Q26_30->n}}.</td>
                                        <td colspan="2">{{$Q26_30->q}}</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td style="width: 20px;">
                                            <div class="form-check">
                                                <input class="form-check-input event-click position-static q-check Q26_30-{{$index}}-1" type="radio" name="Q26_30-{{$index}}" show-aw="Q26_30-{{$index}}" aw="{{$Q26_30->aw}}" value="A Peter">
                                            </div>
                                        </td>
                                        <td>
                                            <span class="event-click" onclick="checkRadio('Q26_30-{{$index}}-1')">A Peter</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td style="width: 20px;">
                                            <div class="form-check">
                                                <input class="form-check-input event-click position-static q-check Q26_30-{{$index}}-2" type="radio" name="Q26_30-{{$index}}" show-aw="Q26_30-{{$index}}" aw="{{$Q26_30->aw}}" value="B Jane">
                                            </div>
                                        </td>
                                        <td>
                                            <span class="event-click" onclick="checkRadio('Q26_30-{{$index}}-2')">B Jane</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td style="width: 20px;">
                                            <div class="form-check">
                                                <input class="form-check-input event-click position-static q-check Q26_30-{{$index}}-3" type="radio" name="Q26_30-{{$index}}" show-aw="Q26_30-{{$index}}" aw="{{$Q26_30->aw}}" value="C Peter and Jane together">
                                            </div>
                                        </td>
                                        <td>
                                            <span class="event-click" onclick="checkRadio('Q26_30-{{$index}}-3')">C Peter and Jane together</span>
                                        </td>
                                    </tr>
                                    <tr class="aw">
                                        <td></td>
                                        <td colspan="2" class="aw Q26_30-{{$index}} text-danger">{{$Q26_30->aw}}</td>
                                    </tr>
                                    @endforeach
                                </table>
                            </td>
                        </tr>
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
                    <source src="{{ asset('public/isac_listening/'.$pageTitle['sub_menu_id'] .'/' .$pageTitle['name_audio']) }}" type="audio/mp3">
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