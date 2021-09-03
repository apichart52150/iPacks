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

    .event-click {
        cursor: pointer;
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

$aw->e11 = "D. Newspapers and magazines";
$aw->e12 = "B. Fiction";
$aw->e13 = "E. Photocopiers";
$aw->e14 = "A. Computers";
$aw->e15 = "C. Non-fiction";

$choice_11_15 = new stdClass();
$choice_11_15->ch1 = "A. Computers";
$choice_11_15->ch2 = "B. Fiction";
$choice_11_15->ch3 = "C. Non-fiction";
$choice_11_15->ch4 = "D. Newspapers and magazines";
$choice_11_15->ch5 = "E. Photocopiers";
$choice_11_15->ch6 = "F. Listening centre";
$choice_11_15->ch7 = "G. Study area";
$choice_11_15->ch8 = "H. Reference books";

$Q16_20 = new stdClass();
$Q16_20->e1 = new stdClass();
$Q16_20->e2 = new stdClass();
$Q16_20->e3 = new stdClass();
$Q16_20->e4 = new stdClass();
$Q16_20->e5 = new stdClass();

$Q16_20->e1->n = "16";
$Q16_20->e2->n = "17";
$Q16_20->e3->n = "18";
$Q16_20->e4->n = "19";
$Q16_20->e5->n = "20";

$Q16_20->e1->q = "Why does the library stay open seven days a week?";
$Q16_20->e2->q = "Which of the following do not need to pay any money?";
$Q16_20->e3->q = "Where is it NOT possible to watch a video?";
$Q16_20->e4->q = "How much does it cost for a drink and a snack from the vending machines?";
$Q16_20->e5->q = "If someone introduces a friend to the library, they will receive…";

$Q16_20->e1->aw = "B Because a lot of people asked for this";
$Q16_20->e2->aw = "A People who want to read the newspapers and magazines";
$Q16_20->e3->aw = "A In the library video room";
$Q16_20->e4->aw = "C £1.50";
$Q16_20->e5->aw = "B Free photocopies";

$Q16_20->e1->choice = new stdClass;
$Q16_20->e2->choice = new stdClass;
$Q16_20->e3->choice = new stdClass;
$Q16_20->e4->choice = new stdClass;
$Q16_20->e5->choice = new stdClass;

$Q16_20->e1->choice->a = "A So that people who work until early evening can use the facilities";
$Q16_20->e1->choice->b = "B Because a lot of people asked for this";
$Q16_20->e1->choice->c = "C To take full advantage of the renovations ";
$Q16_20->e2->choice->a = "A People who want to read the newspapers and magazines";
$Q16_20->e2->choice->b = "B People who want to make copies of books ";
$Q16_20->e2->choice->c = "C People who want to take books home on loan";
$Q16_20->e3->choice->a = "A In the library video room";
$Q16_20->e3->choice->b = "B At home";
$Q16_20->e3->choice->c = "C In the computer room";
$Q16_20->e4->choice->a = "A 50 p";
$Q16_20->e4->choice->b = "B £1.00";
$Q16_20->e4->choice->c = "C £1.50";
$Q16_20->e5->choice->a = "A Free magazines";
$Q16_20->e5->choice->b = "B Free photocopies";
$Q16_20->e5->choice->c = "C Free catalogues";


@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['sub_menu_name']}}
            </p>
            <div class="row">
                <div class="col-lg-12">
                    <h5>Choose FIVE answers from the box and write the correct letter, A – H, in boxes 11- 15 under the diagram.</h5>
                    <div class="w-100 d-flex justify-content-center">
                        <table class="w-75 mb-4">
                            <tr>
                                <td class="text-center pb-3">
                                    <img src="{{ asset('public/img_lang/listening/5-2.PNG') }}" alt="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row justify-content-center mb-2">
                                        <div class="col-md-12">
                                            <div class="border border-dark px-2 text-center">
                                                <div class="drag-container">
                                                    <div class="d-grid grid-5" id="choices">
                                                        @foreach($choice_11_15 as $choice)
                                                        <div class="drag">{{$choice}}</div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: middle;">
                                    <span>11. </span>
                                    <div class="input-con w-75 py-1">
                                        <div class="dropbox q w-100" show-aw="q-11" aw="{{$aw->e11}}"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="aw text-danger q-11 px-2">{{$aw->e11}}</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>12. </span>
                                    <div class="input-con w-75 py-1">
                                        <div class="dropbox q w-100" show-aw="q-12" aw="{{$aw->e12}}"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="aw text-danger q-12 px-2">{{$aw->e12}}</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>13. </span>
                                    <div class="input-con w-75 py-1">
                                        <div class="dropbox q w-100" show-aw="q-13" aw="{{$aw->e13}}"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="aw text-danger q-13 px-2">{{$aw->e13}}</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>14. </span>
                                    <div class="input-con w-75 py-1">
                                        <div class="dropbox q w-100" show-aw="q-14" aw="{{$aw->e14}}"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="aw text-danger q-14 px-2">{{$aw->e14}}</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>15. </span>
                                    <div class="input-con w-75 py-1">
                                        <div class="dropbox q w-100" show-aw="q-15" aw="{{$aw->e15}}"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="aw text-danger q-15 px-2">{{$aw->e15}}</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-lg-12">
                    <h5>Choose one letter, A, B or C for each question.</h5>
                    <table>
                        <tr>
                            <td>
                                <table>
                                    @foreach($Q16_20 as $index => $Q16_20)
                                    <tr>
                                        <td>{{$Q16_20->n}}. </td>
                                        <td colspan="2">{{$Q16_20->q}}</td>
                                    </tr>
                                    @foreach($Q16_20->choice as $index2 => $choice)
                                    <tr>
                                        <td></td>
                                        <td style="width: 20px;">
                                            <div class="form-check">
                                                <input class="form-check-input event-click position-static q-check Q16_20-{{$index}}-{{$index2}}" type="radio" name="Q16_20-{{$index}}" show-aw="Q16_20-{{$index}}" aw="{{$Q16_20->aw}}" value="{{$choice}}">
                                            </div>
                                        </td>
                                        <td>
                                            <span class="event-click" onclick="checkRadio('Q16_20-{{$index}}-{{$index2}}')">{{$choice}}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr class="aw">
                                        <td></td>
                                        <td colspan="2" class="aw Q16_20-{{$index}} text-danger">{{$Q16_20->aw}}</td>
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