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

$E1_1_5->e1->q = "Where will the seaweed be grown?";
$E1_1_5->e2->q = "Which of the following is TRUE?";
$E1_1_5->e3->q = "What is the problem with people collecting natural seaweed from the beaches?";
$E1_1_5->e4->q = "Why will seaweed farms be good for the local people?";
$E1_1_5->e5->q = "How long does it take for the seaweed to grow?";

$E1_1_5->e1->aw = "B. In India";
$E1_1_5->e2->aw = "B. Seaweed has been used in cooking in India for a long time.";
$E1_1_5->e3->aw = "C. There will be no more seaweed left for people to collect.";
$E1_1_5->e4->aw = "C. The local people will have more money and jobs.";
$E1_1_5->e5->aw = "A. 45 days";

$E1_1_5->e1->choice = new stdClass();
$E1_1_5->e2->choice = new stdClass();
$E1_1_5->e3->choice = new stdClass();
$E1_1_5->e4->choice = new stdClass();
$E1_1_5->e5->choice = new stdClass();

$E1_1_5->e1->choice->a = "A. In America";
$E1_1_5->e1->choice->b = "B. In India";
$E1_1_5->e1->choice->c = "C. We don’t know.";
$E1_1_5->e2->choice->a = "A. Seaweed has been farmed in India for a long time.";
$E1_1_5->e2->choice->b = "B. Seaweed has been used in cooking in India for a long time.";
$E1_1_5->e2->choice->c = "C. Natural seaweed has been grown in India for a short time.";
$E1_1_5->e3->choice->a = "A. There will soon be no people left to collect the seaweed.";
$E1_1_5->e3->choice->b = "B. There will be no more beaches left for people to collect seaweed.";
$E1_1_5->e3->choice->c = "C. There will be no more seaweed left for people to collect.";
$E1_1_5->e4->choice->a = "A. A lot more people will come to live in the area.";
$E1_1_5->e4->choice->b = "B. The local people will be able to buy the seaweed.";
$E1_1_5->e4->choice->c = "C. The local people will have more money and jobs.";
$E1_1_5->e5->choice->a = "A. 45 days";
$E1_1_5->e5->choice->b = "B. 100 days";
$E1_1_5->e5->choice->c = "C. more than 100 days";

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

$E2_1_5->e1->q = "Who has decided to grow seaweed in India?";
$E2_1_5->e2->q = "How long is the piece of coast which they have chosen for the seaweed farms?";
$E2_1_5->e3->q = "Why do the people in India collect natural seaweed?";
$E2_1_5->e4->q = "How many farms will they make?";
$E2_1_5->e5->q = "Who will take care of the farms?";

$E2_1_5->e1->aw = "One of America’s largest producers of food and drinks";
$E2_1_5->e2->aw = "ten kilometers";
$E2_1_5->e3->aw = "for use in cooking";
$E2_1_5->e4->aw = "one hundred";
$E2_1_5->e5->aw = "One family will take care of each farm";

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

$E3_1_5->e1->q = "In most countries it’s better to eat the ___ fruits grown there. They’re fresh and not so expensive.";
$E3_1_5->e2->q = "Sarina has bright red hair but that’s her ___ colour.";
$E3_1_5->e3->q = "Many companies in Europe build factories in Asia for the ___ of things such as cars and clothes.";
$E3_1_5->e4->q = "In some countries tigers are endangered and could soon ___ if people continue to hunt them.";
$E3_1_5->e5->q = "During the school holidays I like to ___ all the fruit which has fallen from the trees.";

$E3_1_5->e1->aw = "local";
$E3_1_5->e2->aw = "natural";
$E3_1_5->e3->aw = "production";
$E3_1_5->e4->aw = "disappear";
$E3_1_5->e5->aw = "collect";

$E3_1_5_choice = new stdClass();
$E3_1_5_choice->ch1 = "production";
$E3_1_5_choice->ch2 = "natural";
$E3_1_5_choice->ch3 = "collect";
$E3_1_5_choice->ch4 = "local";
$E3_1_5_choice->ch5 = "disappear";

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
                                        <input class="form-check-input position-static q-check E1_1_5-{{$index}}-1" type="radio" name="E1_1_5-{{$index}}" show-aw="E1_1_5-{{$index}}" aw="{{$E1_1_5->aw}}" value="{{$choice}}">
                                    </div>
                                </td>
                                <td onclick="checkRadio('E1_1_5-{{$index}}-1')">{{$choice}}</td>
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
                                <td>
                                    <b>Answer: </b>
                                    <div class="input-con w-75">
                                        <input type="text" class="q-val form-control w-100" show-aw="E2_1_5-{{$index}}" aw="{{$E2_1_5->aw}}">
                                    </div>
                    </div>
                    </td>
                    </tr>
                    <tr class="aw">
                        <td></td>
                        <td class="aw E2_1_5-{{$index}} E2_1_5-{{$index}} text-danger">{{$E2_1_5->aw}}</td>
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
                                <td>
                                    <span class="q-replace" style="height: 40px;" show-aw="E3_1_5-{{$index}}" aw="{{$E3_1_5->aw}}">
                                        {{$E3_1_5->q}}
                                    </span>
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
    $('.q-replace').each((idx, item) => {
        let text = $(item).html()
        let input = '<div class="input-con w-25 input-con2">' +
            '<div class="dropbox q w-100" show-aw="' + $(item).attr('show-aw') + '" aw="' + $(item).attr('aw') + '"></div>' +
            '</div>' +
            '<span class="px-2 aw ' + $(item).attr('show-aw') + ' text-danger">' + $(item).attr('aw') + '</span>'
        text = text.replace("___", input)
        $(item).html(text)
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