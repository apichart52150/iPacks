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


$Q31_37 = new stdClass();
$Q31_37->e1 = new stdClass();
$Q31_37->e2 = new stdClass();
$Q31_37->e3 = new stdClass();
$Q31_37->e4 = new stdClass();
$Q31_37->e5 = new stdClass();
$Q31_37->e6 = new stdClass();
$Q31_37->e7 = new stdClass();

$Q31_37->e1->n = "31";
$Q31_37->e2->n = "32";
$Q31_37->e3->n = "33";
$Q31_37->e4->n = "34";
$Q31_37->e5->n = "35";
$Q31_37->e6->n = "36";
$Q31_37->e7->n = "37";

$Q31_37->e1->q = "Why are tropical rain forests covered by dense vegetation?";
$Q31_37->e2->q = "Why does the amount of sunshine and the length of day vary so little?";
$Q31_37->e3->q = "Which of the following environments share the unvarying nature of the jungle?";
$Q31_37->e4->q = "The great variety of vegetation in the jungle can best be seen from the";
$Q31_37->e5->q = "The total number of different species in the Amazon forest is";
$Q31_37->e6->q = "The jungle canopy is inhabited by";
$Q31_37->e7->q = "Taking photographs of creatures which live in the canopy";

$Q31_37->e1->aw = "A. Because of the hot, humid conditions there.";
$Q31_37->e2->aw = "A. Because of the proximity of the equator.";
$Q31_37->e3->aw = "A. Oceans";
$Q31_37->e4->aw = "C. flowers.";
$Q31_37->e5->aw = "C. impossible to estimate accurately.";
$Q31_37->e6->aw = "A. most of the insects in the jungle.";
$Q31_37->e7->aw = "C. requires a great deal of patience.";

$Q31_37->e1->choice = new stdClass();
$Q31_37->e2->choice = new stdClass();
$Q31_37->e3->choice = new stdClass();
$Q31_37->e4->choice = new stdClass();
$Q31_37->e5->choice = new stdClass();
$Q31_37->e6->choice = new stdClass();
$Q31_37->e7->choice = new stdClass();

$Q31_37->e1->choice->a = "A. Because of the hot, humid conditions there.";
$Q31_37->e1->choice->b = "B. Because they are extremely dense.";
$Q31_37->e1->choice->c = "C. Because they are described as evergreen rain forest.";
$Q31_37->e2->choice->a = "A. Because of the proximity of the equator.";
$Q31_37->e2->choice->b = "B. Because of the small variation in the rainfall.";
$Q31_37->e2->choice->c = "C. Because it has been like that for so long.";
$Q31_37->e3->choice->a = "A. Oceans";
$Q31_37->e3->choice->b = "B. Deserts";
$Q31_37->e3->choice->c = "C. Mountains";
$Q31_37->e4->choice->a = "A. tree trunks.";
$Q31_37->e4->choice->b = "B. leaves.";
$Q31_37->e4->choice->c = "C. flowers.";
$Q31_37->e5->choice->a = "A. over 950.";
$Q31_37->e5->choice->b = "B. 40,000.";
$Q31_37->e5->choice->c = "C. impossible to estimate accurately.";
$Q31_37->e6->choice->a = "A. most of the insects in the jungle.";
$Q31_37->e6->choice->b = "B. a variety of sounds.";
$Q31_37->e6->choice->c = "C. creatures which are active by night only.";
$Q31_37->e7->choice->a = "A. is impossible.";
$Q31_37->e7->choice->b = "B. is possible with binoculars and craning necks.";
$Q31_37->e7->choice->c = "C. requires a great deal of patience.";

$Q38_40 = new stdClass();
$Q38_40->e1 = new stdClass();
$Q38_40->e2 = new stdClass();
$Q38_40->e3 = new stdClass();

$Q38_40->e1->n = "38";
$Q38_40->e2->n = "39";
$Q38_40->e3->n = "40";

$Q38_40->e1->q = "Scientists have long tried to find out more about life in the jungle canopy. At first they tried training ___ to collect samples from the tree tops.";
$Q38_40->e2->q = "In addition, they used guns to shoot down twigs. This was largely unsuccessful because of the ___ caused by the gunshots or by the fall from such a height.";
$Q38_40->e3->q = "Finally, they were able to adapt a method first used by ___ using a climbing rope and hand-grips to reach the canopy.";

$Q38_40->e1->aw = "monkeys";
$Q38_40->e2->aw = "damage";
$Q38_40->e3->aw = "mountaineers";

@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['sub_menu_name']}}
            </p>
            <div class="row">
                <div class="col-lg-12">
                    Choose the best answer for each question. Write <b>A</b>, <b>B</b>, or <b>C</b>.
                    <table class="w-75">
                        <tr>
                            <td>
                                <table>
                                    @foreach($Q31_37 as $index => $Q31_37)
                                    <tr>
                                        <td>{{$Q31_37->n}}.</td>
                                        <td colspan="2">{{$Q31_37->q}}</td>
                                    </tr>
                                    @foreach($Q31_37->choice as $index2 => $choice)
                                    <tr>
                                        <td></td>
                                        <td style="width: 20px;">
                                            <div class="form-check">
                                                <input class="form-check-input position-static Q31_37-{{$index}}-{{$index2}} q-check" type="radio" name="Q31_37-{{$index}}" show-aw="Q31_37-{{$index}}" aw="{{$Q31_37->aw}}" value="{{$choice}}">
                                            </div>
                                        </td>
                                        <td onclick="checkRadio('Q31_37-{{$index}}-{{$index2}}')">{{$choice}}</td>
                                    </tr>
                                    @endforeach
                                    <tr class="aw">
                                        <td></td>
                                        <td colspan="2" class="aw Q31_37-{{$index}} text-danger">{{$Q31_37->aw}}</td>
                                    </tr>
                                    @endforeach
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="mt-4 col-lg-12">
                    Write <b>ONE WORD ONLY</b>.
                    <table class="w-100">
                        @foreach($Q38_40 as $index => $Q38_40)
                        <tr>
                            <td class="Q38_40 replace_Q38_40-{{$index}}" replace="replace_Q38_40-{{$index}}" show-aw="Q38_40-{{$index}}" aw="{{$Q38_40->aw}}">{{$Q38_40->n}}. {{$Q38_40->q}}</td>
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
    $('.Q38_40').each((idx, item) => {
        let text = $(item).html()
        let input = '<div class="input-con">' +
            '<input type="text" class="form-control w-100 q-val" show-aw="' + $(item).attr('show-aw') + '" aw="' + $(item).attr('aw') + '">' +
            '</div>' +
            '<span class="aw text-danger ' + $(item).attr('show-aw') + ' px-2">' + $(item).attr('aw') + '</span>'
        text = text.replace("___", input)
        $('.' + $(item).attr('replace')).html(text)
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