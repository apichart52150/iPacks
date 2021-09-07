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

    .event-click {
        cursor: pointer;
    }
</style>
@php



$E1_1_5 = new stdClass();
$E1_1_5->e1 = new stdClass();
$E1_1_5->e2 = new stdClass();
$E1_1_5->e3 = new stdClass();
$E1_1_5->e4 = new stdClass();
$E1_1_5->e5 = new stdClass();

$E1_1_5->e1->n = "1";
$E1_1_5->e2->n = "2";
$E1_1_5->e3->n = "3";
$E1_1_5->e4->n = "4";
$E1_1_5->e5->n = "5";

$E1_1_5->e1->q = "In which of these are men NOT stronger than women?";
$E1_1_5->e2->q = "What do we know about Japan?";
$E1_1_5->e3->q = "Why do more men than women die as a result of crimes?";
$E1_1_5->e4->q = "Which of these is TRUE?";
$E1_1_5->e5->q = "‘Life-style’ means …";

$E1_1_5->e1->aw = "C. Real life";
$E1_1_5->e2->aw = "B. Women live longer than men.";
$E1_1_5->e3->aw = "C. The passage doesn’t tell us why.";
$E1_1_5->e4->aw = "A. Men drive faster than women.";
$E1_1_5->e5->aw = "C. both the above.";

$E1_1_5->e1->choice = new stdClass();
$E1_1_5->e2->choice = new stdClass();
$E1_1_5->e3->choice = new stdClass();
$E1_1_5->e4->choice = new stdClass();
$E1_1_5->e5->choice = new stdClass();

$E1_1_5->e1->choice->a = "A. Sports";
$E1_1_5->e1->choice->b = "B. Work";
$E1_1_5->e1->choice->c = "C. Real life";
$E1_1_5->e2->choice->a = "A. Men live longer than women.";
$E1_1_5->e2->choice->b = "B. Women live longer than men.";
$E1_1_5->e2->choice->c = "C. Men can expect to live till they are eighty-five.";
$E1_1_5->e3->choice->a = "A. Because men are stronger than women.";
$E1_1_5->e3->choice->b = "B. Because women are stronger than men.";
$E1_1_5->e3->choice->c = "C. The passage doesn’t tell us why.";
$E1_1_5->e4->choice->a = "A. Men drive faster than women.";
$E1_1_5->e4->choice->b = "B. Women drink more alcohol than men.";
$E1_1_5->e4->choice->c = "C. Men visit the doctor more often than women.";
$E1_1_5->e5->choice->a = "A. the kind of things we eat and drink.";
$E1_1_5->e5->choice->b = "B. the things we do to our bodies.";
$E1_1_5->e5->choice->c = "C. both the above.";

$E2_1_5 = new stdClass();
$E2_1_5->e1 = new stdClass();
$E2_1_5->e2 = new stdClass();
$E2_1_5->e3 = new stdClass();
$E2_1_5->e4 = new stdClass();
$E2_1_5->e5 = new stdClass();

$E2_1_5->e1->n = "1";
$E2_1_5->e2->n = "2";
$E2_1_5->e3->n = "3";
$E2_1_5->e4->n = "4";
$E2_1_5->e5->n = "5";

$E2_1_5->e1->q = "How long can a Japanese woman expect to live?";
$E2_1_5->e2->q = "How long can a Japanese man expect to live?";
$E2_1_5->e3->q = "Do we know for sure why women live longer than men?";
$E2_1_5->e4->q = "Name TWO drinks with alcohol in the passage.";
$E2_1_5->e5->q = "Give TWO examples of how women take better care of themselves than men.";

$E2_1_5->e1->aw = "85 years";
$E2_1_5->e2->aw = "79 years";
$E2_1_5->e3->aw = "No, but doctors believe it has something to do with life-style";
$E2_1_5->e4->aw = "beer and whisky";
$E2_1_5->e5->aw = "They visit the doctor more often / they do more exercise / they drink less alcohol; / they smoke fewer cigarettes / they don’t drive so fast";

$E3_1_5 = new stdClass();
$E3_1_5->e1 = new stdClass();
$E3_1_5->e2 = new stdClass();
$E3_1_5->e3 = new stdClass();
$E3_1_5->e4 = new stdClass();
$E3_1_5->e5 = new stdClass();

$E3_1_5->e1->n = "1";
$E3_1_5->e2->n = "2";
$E3_1_5->e3->n = "3";
$E3_1_5->e4->n = "4";
$E3_1_5->e5->n = "5";

$E3_1_5->e1->q = "___ is another word for ‘boys and men’.";
$E3_1_5->e2->q = "The ___ turtle lays her eggs on the beach and covers them with sand.";
$E3_1_5->e3->q = "You need to do some ___ like swimming or jogging so that you don’t get fat.";
$E3_1_5->e4->q = "People who have been drinking ___ should not drive a car.";
$E3_1_5->e5->q = "If you have an unhealthy ___ you are likely to get sick quite often.";

$E3_1_5->e1->aw = "Male";
$E3_1_5->e2->aw = "female";
$E3_1_5->e3->aw = "exercise";
$E3_1_5->e4->aw = "alcohol";
$E3_1_5->e5->aw = "life-style";

$E3_1_5_choice = new stdClass();
$E3_1_5_choice->ch1 = "alcohol";
$E3_1_5_choice->ch2 = "male";
$E3_1_5_choice->ch3 = "female";
$E3_1_5_choice->ch4 = "life-style";
$E3_1_5_choice->ch5 = "exercise";

@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['sub_menu_name']}}
            </p>
            <div class="row">
                <div class="col-lg-12">
                    <h5>Choose the best answer to each question.</h5>
                    <div class="w-100 d-flex justify-content-center">
                        <table class="w-100">
                            @foreach($E1_1_5 as $index => $E1_1_5)
                            <tr>
                                <td style="width: 20px;">{{$E1_1_5->n}}. </td>
                                <td colspan="2">{{$E1_1_5->q}}</td>
                            </tr>
                            @foreach($E1_1_5->choice as $index2 => $choice)
                            <tr>
                                <td></td>
                                <td style="width: 20px;">
                                    <div class="form-check">
                                        <input class="form-check-input event-click position-static q-check E1_1_5-{{$index}}-{{$index2}}" type="radio" name="E1_1_5-{{$index}}" show-aw="E1_1_5-{{$index}}" aw="{{$E1_1_5->aw}}" value="{{$choice}}">
                                    </div>
                                </td>
                                <td>
                                    <span class="event-click" onclick="checkRadio('E1_1_5-{{$index}}-{{$index2}}')">{{$choice}}</span>
                                </td>
                            </tr>
                            @endforeach
                            <tr class="aw">
                                <td></td>
                                <td colspan="2" class="aw E1_1_5-{{$index}} text-danger">{{$E1_1_5->aw}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="mt-4 col-lg-12">
                    <h5>Write a short answer to each question.</h5>
                    <div class="w-100 d-flex justify-content-center">
                        <table class="w-100">
                            @foreach($E2_1_5 as $index => $E2_1_5)
                            <tr>
                                <td style="width: 20px;">{{$E2_1_5->n}}. </td>
                                <td>{{$E2_1_5->q}}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="pt-2">
                                    <b>Answer: </b>
                                    <div class="input-con w-75">
                                        <input type="text" class="q-val form-control w-100" show-aw="E2_1_5-{{$index}}" aw="{{$E2_1_5->aw}}">
                                    </div>
                                </td>
                            </tr>
                            <tr class="">
                                <td class="pb-2"></td>
                                <td class="pb-2 aw E2_1_5-{{$index}} E2_1_5-{{$index}} text-danger">{{$E2_1_5->aw}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="mt-4 col-lg-12">
                        <h5>Vocabulary</h5>
                        <div class="row justify-content-center mb-2">
                            <div class="col-md-12">
                                <div class="border border-dark px-2 text-center">
                                    <div class="drag-container">
                                        <div class="d-grid grid-5" id="choices">
                                            @foreach($E3_1_5_choice as $choice)
                                            <div class="drag">{{$choice}}</div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 d-flex justify-content-center">
                            <table class="w-100">
                                @foreach($E3_1_5 as $index => $E3_1_5)
                                <tr>
                                    <td style="width: 20px;">{{$E3_1_5->n}}. </td>
                                    <td class="q-replace answers-container" show-aw="E3_1_5-{{$index}}" aw="{{$E3_1_5->aw}}">
                                        {{$E3_1_5->q}}
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
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
<!-- <button id="show-answer" class="btn btn-success">Show Answers</button> -->
@endsection

@section('js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

<script>
    $('.q-replace').each((idx, item) => {
        let text = $(item).html()
        let input = '<div class="dropbox q w-25" show-aw="' + $(item).attr('show-aw') + '" aw="' + $(item).attr('aw') + '"></div>' +
            '<span class="aw px-2 ' + $(item).attr('show-aw') + ' text-danger">' + $(item).attr('aw') + '</span>'
        text = text.replace("___", input)
        $(item).html(text)
    })

    $('#check-answer').on('click', () => {
        $('#check-answer').prop('disabled',true)
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

        $('.q-val2').each((idx, item) => {
            let aw = $(item).attr('aw').split("/")
            let aw2 = $(item).val().split("/")
            let count_aw = 0
            for (let i = 0; i < aw2.length; i++) {
                var results = aw.filter(function(elem) {
                    return elem.trim().toUpperCase() == aw2[i].trim().toUpperCase();
                })
                if (results.length > 0)
                    count_aw++
            }
            if (count_aw >= 2)
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