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
        margin: 10px 0;
    }

    .answers-container .dropbox {
        display: inline-block;
    }

    .dropbox {
        border: 2px dashed #ccc;
        border-radius: 5px;
        padding: 3px;
        margin: 5px;
        min-width: 150px;
        min-height: 40px;
        vertical-align: middle;
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

    .table2 tr td {
        vertical-align: middle;
    }

    .table2 tr .map-l {
        border-right: 1px solid black;
    }

    .table2 tr .map {
        border: 1px solid black;
    }

    .event-click {
        cursor: pointer;
    }
</style>
@php

$aw = new stdClass();
$aw->e16 = "A Terms and conditions of employment";
$aw->e17 = "D Curriculum vitae";
$aw->e18 = "F Interview";
$aw->e19 = "G Originals";
$aw->e20 = "C Induction session";

$choice_16_20 = new stdClass();
$choice_16_20->e1 = "A Terms and conditions of employment";
$choice_16_20->e2 = "B Job description";
$choice_16_20->e3 = "C Induction session";
$choice_16_20->e4 = "D Curriculum vitae";
$choice_16_20->e5 = "E Copies";
$choice_16_20->e6 = "F Interview";
$choice_16_20->e7 = "G Originals";
$choice_16_20->e8 = "H Salary range";

$Q11_15 = new stdClass();
$Q11_15->e1 = new stdClass();
$Q11_15->e2 = new stdClass();
$Q11_15->e3 = new stdClass();
$Q11_15->e4 = new stdClass();
$Q11_15->e5 = new stdClass();

$Q11_15->e1->n = "11";
$Q11_15->e2->n = "12";
$Q11_15->e3->n = "13";
$Q11_15->e4->n = "14";
$Q11_15->e5->n = "15";

$Q11_15->e1->q = "events coordinator";
$Q11_15->e2->q = "catering manager";
$Q11_15->e3->q = "relief housekeeper";
$Q11_15->e4->q = "personal trainers";
$Q11_15->e5->q = "tele-sales";

$Q11_15->e1->aw = "A. Foreign languages";
$Q11_15->e2->aw = "C. Professional qualifications";
$Q11_15->e3->aw = "B. Overseas travel";
$Q11_15->e4->aw = "C. Professional qualifications";
$Q11_15->e5->aw = "A. Foreign languages";

$Q11_15->e1->choice = new stdClass;
$Q11_15->e2->choice = new stdClass;
$Q11_15->e3->choice = new stdClass;
$Q11_15->e4->choice = new stdClass;
$Q11_15->e5->choice = new stdClass;

$Q11_15->e1->choice->a = "A. Foreign languages";
$Q11_15->e1->choice->b = "B. Overseas travel";
$Q11_15->e1->choice->c = "C. Professional qualifications";
$Q11_15->e2->choice->a = "A. Foreign languages";
$Q11_15->e2->choice->b = "B. Overseas travel";
$Q11_15->e2->choice->c = "C. Professional qualifications";
$Q11_15->e3->choice->a = "A. Foreign languages";
$Q11_15->e3->choice->b = "B. Overseas travel";
$Q11_15->e3->choice->c = "C. Professional qualifications";
$Q11_15->e4->choice->a = "A. Foreign languages";
$Q11_15->e4->choice->b = "B. Overseas travel";
$Q11_15->e4->choice->c = "C. Professional qualifications";
$Q11_15->e5->choice->a = "A. Foreign languages";
$Q11_15->e5->choice->b = "B. Overseas travel";
$Q11_15->e5->choice->c = "C. Professional qualifications";


@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['sub_menu_name']}}
            </p>
            <div class="row">
                <div class="col-lg-12">
                    <h5>Match the essential qualities in the box with the jobs.</h5>
                    Write <b>A</b>, <b>B</b>, or <b>C</b>.
                    <table>
                        <tr>
                            <td>
                                <table>
                                    @foreach($Q11_15 as $index => $Q11_15)
                                    <tr>
                                        <td>{{$Q11_15->n}}. </td>
                                        <td colspan="2">{{$Q11_15->q}}</td>
                                    </tr>
                                    @foreach($Q11_15->choice as $index2 => $choice)
                                    <tr>
                                        <td></td>
                                        <td style="width: 20px;">
                                            <div class="form-check">
                                                <input class="form-check-input event-click position-static q-check Q11_15-{{$index}}-{{$index2}}" type="radio" name="Q11_15-{{$index}}" show-aw="Q11_15-{{$index}}" aw="{{$Q11_15->aw}}" value="{{$choice}}">
                                            </div>
                                        </td>
                                        <td>
                                            <span class="event-click" onclick="checkRadio('Q11_15-{{$index}}-{{$index2}}')">{{$choice}}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr class="aw">
                                        <td></td>
                                        <td colspan="2" class="aw Q11_15-{{$index}} text-danger">{{$Q11_15->aw}}</td>
                                    </tr>
                                    @endforeach
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-12">
                    <h5>
                        Complete the flow-chart with answers from the list below
                        <br>
                        Write the correct letter A-H on your answer sheet.
                    </h5>
                    <div class="border border-dark px-2 text-center">
                        <div class="drag-container">
                            <div class="d-grid grid-5" id="choices">
                                @foreach($choice_16_20 as $choice)
                                <div class="drag">{{$choice}}</div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="w-100 d-flex justify-content-center">
                        <table class="table2 w-50 text-center">
                            <tr>

                            </tr>
                            <tr>
                                <td>
                                    <h4>RECRUITMENT PROCEDURES</h4>
                                </td>
                            </tr>
                            <tr>
                                <td class="map px-2">
                                    Register interest on-line
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size: 30px;">
                                    ↓
                                </td>
                            </tr>
                            <tr>
                                <td class="answers-container map px-2">
                                    Receive personal registration code and agree to (16)
                                    <div class="dropbox q" show-aw="q-16" aw="{{$aw->e16}}"></div>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size: 30px;">
                                    ↓
                                </td>
                            </tr>
                            <tr>
                                <td class="map">
                                    Download and complete application form off-line
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size: 30px;">
                                    ↓
                                </td>
                            </tr>
                            <tr>
                                <td class="map px-2 answers-container">
                                    Submit completed form and attach (17)
                                    <div class="dropbox q" show-aw="q-17" aw="{{$aw->e17}}"></div>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size: 30px;">
                                    ↓
                                </td>
                            </tr>
                            <tr>
                                <td class="answers-container map px-2">
                                    Receive confirmation and invitation to attend (18)
                                    <div class="dropbox q" show-aw="q-18" aw="{{$aw->e18}}"></div>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size: 30px;">
                                    ↓
                                </td>
                            </tr>
                            <tr>
                                <td class="map px-2 answers-container">
                                    Bring (19)
                                    <div class="dropbox q" show-aw="q-19" aw="{{$aw->e19}}"></div>
                                    of certificates to interview
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size: 30px;">
                                    ↓
                                </td>
                            </tr>
                            <tr>
                                <td class="map px-2 answers-container">
                                    Attend (20)
                                    <div class="dropbox q" show-aw="q-20" aw="{{$aw->e20}}"></div>
                                    at one of our hotels.
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
<button id="show-answer" class="d-none btn btn-info">
    Show Answers
  </button>
@endsection

@section('js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

<script>
    $('#check-answer').on('click', () => {
        $("#show-answer").addClass("d-block");
$("#show-answer").removeClass("d-none");
$("#check-answer").addClass("d-none");
        $('#check-answer').prop('disabled',true)
        $('.q').each((idx, item) => {
            if ($(item).text().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                    {show_aw($(item).attr('show-aw'), item)
                $(item).children().addClass('bg-success')
            }else{
                    if($(item).text().trim().toUpperCase()!="")
                        $(item).children().addClass('bg-danger')
                    show_error(item)
                }
        })
        
        $('.q-check:checked').each((idx, item) => {
            if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'), item)
            else
                show_error(item)
        })
     
        $('.aw').removeClass('aw')
    })
    $('#show-answer').on('click', function() {
                    $('check-answer').addClass('d-none')
                    $('.dropbox').each((idx, item) => {
                
                        if($(item).children().length == 1) {
                            if($(item).children().hasClass('bg-danger')) {
                                if($(item).children().text($(item).attr('aw'))) {
                                    $(item).children().removeClass('bg-danger')
                                }
                            }
                        } else {
                            $(item).append(`<div class="drag">`+$(item).attr('aw')+`</div>`)
                        }
                
                        $('.drag-container .drag').remove();
                    })
                    $("#show-answer").hide();
                });
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