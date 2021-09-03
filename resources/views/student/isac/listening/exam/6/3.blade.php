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


$Q21_24 = new stdClass();
$Q21_24->e1 = new stdClass();
$Q21_24->e2 = new stdClass();
$Q21_24->e3 = new stdClass();
$Q21_24->e4 = new stdClass();

$Q21_24->e1->n = "21";
$Q21_24->e2->n = "22";
$Q21_24->e3->n = "23";
$Q21_24->e4->n = "24";

$Q21_24->e1->q = "Which of the following areas did Paula feel was the strongest part of her assignment?";
$Q21_24->e2->q = "Which part of the assignment did Richard think he’d spent too much time on?";
$Q21_24->e3->q = "What aspect of Paula’s data collection does the tutor feel needs improvement?";
$Q21_24->e4->q = "Which aspect of Richard’s assignment did the tutor feel was the weakest part?";

$Q21_24->e1->aw = "C. The conclusions";
$Q21_24->e2->aw = "B. The field-work";
$Q21_24->e3->aw = "C. The follow-up work";
$Q21_24->e4->aw = "A. The literature review";

$Q21_24->e1->choice = new stdClass();
$Q21_24->e2->choice = new stdClass();
$Q21_24->e3->choice = new stdClass();
$Q21_24->e4->choice = new stdClass();

$Q21_24->e1->choice->a = "A. The literature review";
$Q21_24->e1->choice->b = "B. The field-work";
$Q21_24->e1->choice->c = "C. The conclusions";
$Q21_24->e2->choice->a = "A. The literature review";
$Q21_24->e2->choice->b = "B. The field-work";
$Q21_24->e2->choice->c = "C. The conclusions";
$Q21_24->e3->choice->a = "A. The questions in the survey";
$Q21_24->e3->choice->b = "B. The number of people surveyed";
$Q21_24->e3->choice->c = "C. The follow-up work";
$Q21_24->e4->choice->a = "A. The literature review";
$Q21_24->e4->choice->b = "B. Data collection techniques";
$Q21_24->e4->choice->c = "C. Data analysis";

$Q26_30 = new stdClass();
$Q26_30->e1 = new stdClass();
$Q26_30->e2 = new stdClass();
$Q26_30->e3 = new stdClass();
$Q26_30->e4 = new stdClass();
$Q26_30->e5 = new stdClass();
$Q26_30->e6 = new stdClass();

$Q26_30->e1->n = "25";
$Q26_30->e2->n = "26";
$Q26_30->e3->n = "27";
$Q26_30->e4->n = "28";
$Q26_30->e5->n = "29";
$Q26_30->e6->n = "30";

$Q26_30->e1->q = "Reviewing the literature";
$Q26_30->e2->q = "Preparing the questions for the survey";
$Q26_30->e3->q = "Conducting the survey";
$Q26_30->e4->q = "Analysing the data";
$Q26_30->e5->q = "Conducting case-study interviews";
$Q26_30->e6->q = "Writing the final report";

$Q26_30->e1->aw = "C. Both Paula and Richard";
$Q26_30->e2->aw = "A. Paula";
$Q26_30->e3->aw = "C. Both Paula and Richard";
$Q26_30->e4->aw = "B. Richard";
$Q26_30->e5->aw = "A. Paula";
$Q26_30->e6->aw = "C. Both Paula and Richard";

@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['sub_menu_name']}}
            </p>
            <div class="row">
                <div class="col-lg-12">
                    <h5>(Questions 21 to 24)</h5>
                    <table class="w-75">
                        <tr>
                        </tr>
                        <tr>
                            <td>
                                <table>
                                    @foreach($Q21_24 as $index => $Q21_24)
                                    <tr>
                                        <td>{{$Q21_24->n}}.</td>
                                        <td colspan="2">{{$Q21_24->q}}</td>
                                    </tr>
                                    @foreach($Q21_24->choice as $index2 => $choice)
                                    <tr>
                                        <td></td>
                                        <td style="width: 20px;">
                                            <div class="form-check">
                                                <input class="form-check-input event-click position-static Q21_24-{{$index}}-{{$index2}} q-check" type="radio" name="Q21_24-{{$index}}" show-aw="Q21_24-{{$index}}" aw="{{$Q21_24->aw}}" value="{{$choice}}">
                                            </div>
                                        </td>
                                        <td>
                                            <span class="event-click" onclick="checkRadio('Q21_24-{{$index}}-{{$index2}}')">{{$choice}}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr class="aw">
                                        <td></td>
                                        <td colspan="2" class="aw Q21_24-{{$index}} text-danger">{{$Q21_24->aw}}</td>
                                    </tr>
                                    @endforeach
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="mt-4 col-lg-12">
                    Who will be responsible for each part of the next project?
                    <br>
                    Write <b>A</b>, <b>B</b>, or <b>C</b>.
                    <table class="w-75">
                        <tr>
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
                                                <input class="form-check-input event-click position-static q-check Q26_30-{{$index}}-1" type="radio" name="Q26_30-{{$index}}" show-aw="Q26_30-{{$index}}" aw="{{$Q26_30->aw}}" value="A. Paula">
                                            </div>
                                        </td>
                                        <td>
                                            <span class="event-click" onclick="checkRadio('Q26_30-{{$index}}-1')">A. Paula</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td style="width: 20px;">
                                            <div class="form-check">
                                                <input class="form-check-input event-click position-static q-check Q26_30-{{$index}}-2" type="radio" name="Q26_30-{{$index}}" show-aw="Q26_30-{{$index}}" aw="{{$Q26_30->aw}}" value="B. Richard">
                                            </div>
                                        </td>
                                        <td>
                                            <span class="event-click" onclick="checkRadio('Q26_30-{{$index}}-2')">B. Richard</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td style="width: 20px;">
                                            <div class="form-check">
                                                <input class="form-check-input event-click position-static q-check Q26_30-{{$index}}-3" type="radio" name="Q26_30-{{$index}}" show-aw="Q26_30-{{$index}}" aw="{{$Q26_30->aw}}" value="C. Both Paula and Richard">
                                            </div>
                                        </td>
                                        <td>
                                            <span class="event-click" onclick="checkRadio('Q26_30-{{$index}}-3')">C. Both Paula and Richard</span>
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