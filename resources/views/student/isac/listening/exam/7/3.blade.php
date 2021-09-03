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
        min-width: 200px;
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

$Q21_26 = new stdClass();
$Q21_26->e1 = new stdClass();
$Q21_26->e2 = new stdClass();
$Q21_26->e3 = new stdClass();
$Q21_26->e4 = new stdClass();
$Q21_26->e5 = new stdClass();
$Q21_26->e6 = new stdClass();

$Q21_26->e1->n = "21";
$Q21_26->e2->n = "22";
$Q21_26->e3->n = "23";
$Q21_26->e4->n = "24";
$Q21_26->e5->n = "25";
$Q21_26->e6->n = "26";

$Q21_26->e1->q = "What was the main reason for Steve and Gitta’s choice of project topic?";
$Q21_26->e2->q = "What has been one reason for the growth in housing estates?";
$Q21_26->e3->q = "What changes have been made to public transportation?";
$Q21_26->e4->q = "What impact has the five pounds inner city road tax had?";
$Q21_26->e5->q = "Which facility has the council recently opened?";
$Q21_26->e6->q = "What will be the main focus of Steve and Gitta’s project?";

$Q21_26->e1->aw = "C. There is a strong sense of community in the estates.";
$Q21_26->e2->aw = "B. People have left other areas to set up home there.";
$Q21_26->e3->aw = "B. An underground rail system has been developed.";
$Q21_26->e4->aw = "A. Fewer cars now enter the city centre.";
$Q21_26->e5->aw = "D. A sports centre in the centre of town";
$Q21_26->e6->aw = "C. The link between improved facilities and a reduction in crime";

$Q21_26->e1->choice = new stdClass;
$Q21_26->e2->choice = new stdClass;
$Q21_26->e3->choice = new stdClass;
$Q21_26->e4->choice = new stdClass;
$Q21_26->e5->choice = new stdClass;
$Q21_26->e6->choice = new stdClass;

$Q21_26->e1->choice->a = "A. They both live in housing estates.";
$Q21_26->e1->choice->b = "B. There have been a lot of changes in the housiNg estates recently.";
$Q21_26->e1->choice->c = "C. There is a strong sense of community in the estates.";
$Q21_26->e1->choice->d = "D. There has been a reduction in community activitIies in recent years.";
$Q21_26->e2->choice->a = "A. Urban migration from the city to the estates has increased.";
$Q21_26->e2->choice->b = "B. People have left other areas to set up home there.";
$Q21_26->e2->choice->c = "C. People have chosen to live in inner city areas rather than on the estates.";
$Q21_26->e2->choice->d = "D. The council has made improvements in infrastructure.";
$Q21_26->e3->choice->a = "A. There are more buses now than there used to be.";
$Q21_26->e3->choice->b = "B. An underground rail system has been developed.";
$Q21_26->e3->choice->c = "C. A mono-rail link links part of the inner city.";
$Q21_26->e3->choice->d = "D. There are more cars on the road now.";
$Q21_26->e4->choice->a = "A. Fewer cars now enter the city centre.";
$Q21_26->e4->choice->b = "B. More people use the pedestrian precincts.";
$Q21_26->e4->choice->c = "C. There is now more money available for infrastructure development.";
$Q21_26->e4->choice->d = "D. People tend to leave their cars at home.";
$Q21_26->e5->choice->a = "A. Areas to play football and badminton in the parks";
$Q21_26->e5->choice->b = "B. Multi-purpose sports hall in the suburbs";
$Q21_26->e5->choice->c = "C. Community education centres";
$Q21_26->e5->choice->d = "D. A sports centre in the centre of town";
$Q21_26->e6->choice->a = "A. The incidence of crime in other parts of the country";
$Q21_26->e6->choice->b = "B. The correlation between crime in the city and crime in the housing estates";
$Q21_26->e6->choice->c = "C. The link between improved facilities and a reduction in crime";
$Q21_26->e6->choice->d = "D. The impact of juvenile crime on housing estates";


$Q27_30 = new stdClass();
$Q27_30->e1 = new stdClass();
$Q27_30->e2 = new stdClass();
$Q27_30->e3 = new stdClass();
$Q27_30->e4 = new stdClass();

$Q27_30->e1->n = "27";
$Q27_30->e2->n = "28";
$Q27_30->e3->n = "29";
$Q27_30->e4->n = "30";

$Q27_30->e1->q = "Review of the literature";
$Q27_30->e2->q = "Questionnaire";
$Q27_30->e3->q = "Follow-up action: case study proposals";
$Q27_30->e4->q = "Presentation methodology";

$Q27_30->e1->aw = "B. Satisfactory";
$Q27_30->e2->aw = "C. Not so good";
$Q27_30->e3->aw = "A. Good";
$Q27_30->e4->aw = "B. Satisfactory";

$Q27_30->e1->choice = new stdClass;
$Q27_30->e2->choice = new stdClass;
$Q27_30->e3->choice = new stdClass;
$Q27_30->e4->choice = new stdClass;

$Q27_30->e1->choice->a = "A. Good";
$Q27_30->e1->choice->b = "B. Satisfactory";
$Q27_30->e1->choice->c = "C. Not so good";
$Q27_30->e2->choice->a = "A. Good";
$Q27_30->e2->choice->b = "B. Satisfactory";
$Q27_30->e2->choice->c = "C. Not so good";
$Q27_30->e3->choice->a = "A. Good";
$Q27_30->e3->choice->b = "B. Satisfactory";
$Q27_30->e3->choice->c = "C. Not so good";
$Q27_30->e4->choice->a = "A. Good";
$Q27_30->e4->choice->b = "B. Satisfactory";
$Q27_30->e4->choice->c = "C. Not so good";

@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['sub_menu_name']}}
            </p>
            <div class="row">
                <div class="col-lg-12">
                    Choose the best answer from the given options. Write <b>A</b>, <b>B</b>, <b>C</b> or <b>D</b>.
                    <div class="w-100 d-flex justify-content-center">
                        <table class="w-100">
                            @foreach($Q21_26 as $index => $Q21_26)
                            <tr>
                                <td style="width: 20px;">{{$Q21_26->n}}. </td>
                                <td colspan="2">{{$Q21_26->q}}</td>
                            </tr>
                            @foreach($Q21_26->choice as $index2 => $choice)
                            <tr>
                                <td></td>
                                <td style="width: 20px;">
                                    <div class="form-check">
                                        <input class="form-check-input event-click position-static q-check Q21_26-{{$index}}-{{$index2}}" type="radio" name="Q21_26-{{$index}}" show-aw="Q21_26-{{$index}}" aw="{{$Q21_26->aw}}" value="{{$choice}}">
                                    </div>
                                </td>
                                <td>
                                    <span class="event-click" onclick="checkRadio('Q21_26-{{$index}}-{{$index2}}')">{{$choice}}</span>
                                </td>
                            </tr>
                            @endforeach
                            <tr class="aw">
                                <td></td>
                                <td colspan="2" class="aw Q21_26-{{$index}} text-danger">{{$Q21_26->aw}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="mt-4 col-lg-12">
                    Match the parts of the project proposal with the tutor’s comments, <b>A-C</b>, in the box below.
                    <br>
                    Write a letter <b>A</b>, <b>B</b> or <b>C</b>.
                    <div class="w-100 d-flex justify-content-center">
                        <table class="w-100">
                            @foreach($Q27_30 as $index => $Q27_30)
                            <tr>
                                <td style="width: 20px;">{{$Q27_30->n}}. </td>
                                <td colspan="2">{{$Q27_30->q}}</td>
                            </tr>
                            @foreach($Q27_30->choice as $index2 => $choice)
                            <tr>
                                <td></td>
                                <td style="width: 20px;">
                                    <div class="form-check">
                                        <input class="form-check-input event-click position-static q-check Q27_30-{{$index}}-{{$index2}}" type="radio" name="Q27_30-{{$index}}" show-aw="Q27_30-{{$index}}" aw="{{$Q27_30->aw}}" value="{{$choice}}">
                                    </div>
                                </td>
                                <td>
                                    <span class="event-click" onclick="checkRadio('Q27_30-{{$index}}-{{$index2}}')">{{$choice}}</span>
                                </td>
                            </tr>
                            @endforeach
                            <tr class="aw">
                                <td></td>
                                <td colspan="2" class="aw Q27_30-{{$index}} text-danger">{{$Q27_30->aw}}</td>
                            </tr>
                            @endforeach
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