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

    .event-click {
        cursor: pointer;
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
$caller_1->e11 = new stdClass();

$caller_1->e1->q = "to claim";
$caller_1->e2->q = "to foresee";
$caller_1->e3->q = "mystical";
$caller_1->e4->q = "to emerge";
$caller_1->e5->q = "to relate";
$caller_1->e6->q = "carcass";
$caller_1->e7->q = "inherent";
$caller_1->e8->q = "blunt";
$caller_1->e9->q = "patent number";
$caller_1->e10->q = "superstitious";
$caller_1->e11->q = "aura";

$caller_1->e1->aw = "to say something is true";
$caller_1->e2->aw = "to see something before it happens";
$caller_1->e3->aw = "mysterious; magical";
$caller_1->e4->aw = "to appear, to come out";
$caller_1->e5->aw = "to tell";
$caller_1->e6->aw = "dead body";
$caller_1->e7->aw = "existing in a natural way; naturally present";
$caller_1->e8->aw = "not sharp";
$caller_1->e9->aw = "an official number given to new inventions";
$caller_1->e10->aw = "believing in magic, witchcraft";
$caller_1->e11->aw = "atmosphere";

$caller_1_choice->ch1 = "to see something before it happens";
$caller_1_choice->ch2 = "to tell";
$caller_1_choice->ch3 = "existing in a natural way; naturally present";
$caller_1_choice->ch4 = "to appear, to come out";
$caller_1_choice->ch5 = "believing in magic, witchcraft";
$caller_1_choice->ch6 = "to say something is true";
$caller_1_choice->ch7 = "an official number given to new inventions";
$caller_1_choice->ch8 = "not sharp";
$caller_1_choice->ch9 = "mysterious; magical";
$caller_1_choice->ch10 = "dead body";
$caller_1_choice->ch11 = "atmosphere";


$caller_2 = new stdClass();
$caller_2->row1 = new stdClass();
$caller_2->row1->col = new stdClass();
$caller_2->row1->col->col1 = new stdClass();
$caller_2->row1->col->col2 = new stdClass();
$caller_2->row1->col->col3 = new stdClass();
$caller_2->row1->col->col4 = new stdClass();

$caller_2->row1->col->col1->aw = "Egypt";
$caller_2->row1->col->col2->aw = "a. 1799 b. 1850’s c. 1950’s";
$caller_2->row1->col->col3->aw = "Pyramids";
$caller_2->row1->col->col4->aw = "a. Napoleon + guide b. Bovis c. Karel Drbal";

$caller_3 = new stdClass();
$caller_3->e1 = new stdClass();
$caller_3->e2 = new stdClass();
$caller_3->e3 = new stdClass();
$caller_3->e4 = new stdClass();
$caller_3->e5 = new stdClass();
$caller_3->e6 = new stdClass();
$caller_3->e7 = new stdClass();
$caller_3->e8 = new stdClass();
$caller_3->e9 = new stdClass();
$caller_3->e10 = new stdClass();

$caller_3->e1->n = "1";
$caller_3->e2->n = "2";
$caller_3->e3->n = "3";
$caller_3->e4->n = "4";
$caller_3->e5->n = "5";
$caller_3->e6->n = "6";
$caller_3->e7->n = "7";
$caller_3->e8->n = "8";
$caller_3->e9->n = "9";
$caller_3->e10->n = "10";

$caller_3->e1->q = "How did the air-traffic controllers know that the strange objects were not conventional aircraft?";
$caller_3->e2->q = "The aircraft which accompanied the large spaceship";
$caller_3->e3->q = "Professor Ronald Brown didn't believe";
$caller_3->e4->q = "Who was the first to notice unusual happenings in the house in London?";
$caller_3->e5->q = "Which of the following statements is NOT TRUE?";
$caller_3->e6->q = "What was strange about the voices which emerged from the two daughters?";
$caller_3->e7->q = "How many 'beings' or ghosts were there in the house?";
$caller_3->e8->q = "Napoleon visited the King's Chamber";
$caller_3->e9->q = "During the 1850's the rubbish in the Great Pyramid was a result of";
$caller_3->e10->q = "Drbal was granted a patent number because";

$caller_3->e1->aw = "c. Both the above reasons.";
$caller_3->e2->aw = "a. were not as large as the main spaceship.";
$caller_3->e3->aw = "c. that the TV crew had seen a spacecraft.";
$caller_3->e4->aw = "c. One of the girls.";
$caller_3->e5->aw = "b. One of the policemen fell over a chair.";
$caller_3->e6->aw = "c. Both the above reasons.";
$caller_3->e7->aw = "a. at least eight.";
$caller_3->e8->aw = "b. for a few hours.";
$caller_3->e9->aw = "c. increased numbers of tourists.";
$caller_3->e10->aw = "c. his idea was tested and found to be correct.";

$caller_3->e1->choice = new stdClass();
$caller_3->e2->choice = new stdClass();
$caller_3->e3->choice = new stdClass();
$caller_3->e4->choice = new stdClass();
$caller_3->e5->choice = new stdClass();
$caller_3->e6->choice = new stdClass();
$caller_3->e7->choice = new stdClass();
$caller_3->e8->choice = new stdClass();
$caller_3->e9->choice = new stdClass();
$caller_3->e10->choice = new stdClass();

$caller_3->e1->choice->a = "a. The objects moved too quickly.";
$caller_3->e1->choice->b = "b. The objects behaved differently from conventional aircraft.";
$caller_3->e1->choice->c = "c. Both the above reasons.";
$caller_3->e2->choice->a = "a. were not as large as the main spaceship.";
$caller_3->e2->choice->b = "b. were orange in colour.";
$caller_3->e2->choice->c = "c. looked like a ball of fire.";
$caller_3->e3->choice->a = "a. what he had seen.";
$caller_3->e3->choice->b = "b. that life-forms could exist elsewhere in the galaxy.";
$caller_3->e3->choice->c = "c. that the TV crew had seen a spacecraft.";
$caller_3->e4->choice->a = "a. One of the parents.";
$caller_3->e4->choice->b = "b. One of the boys.";
$caller_3->e4->choice->c = "c. One of the girls.";
$caller_3->e5->choice->a = "a. At first, the police refused to believe what the family told them.";
$caller_3->e5->choice->b = "b. One of the policemen fell over a chair.";
$caller_3->e5->choice->c = "c. The police witnessed a strange happening in the house.";
$caller_3->e6->choice->a = "a. The voices were not the voices of the two girls.";
$caller_3->e6->choice->b = "b. The girls did not open their mouths to speak.";
$caller_3->e6->choice->c = "c. Both the above reasons.";
$caller_3->e7->choice->a = "a. at least eight.";
$caller_3->e7->choice->b = "b. fewer than eight.";
$caller_3->e7->choice->c = "c. we are not told.";
$caller_3->e8->choice->a = "a. with a guide.";
$caller_3->e8->choice->b = "b. for a few hours.";
$caller_3->e8->choice->c = "c. when he was white and visibly shaken.";
$caller_3->e9->choice->a = "a. Bovis' visit.";
$caller_3->e9->choice->b = "b. a dead cat.";
$caller_3->e9->choice->c = "c. increased numbers of tourists.";
$caller_3->e10->choice->a = "a. there was a shortage of razor blades in Eastern Europe.";
$caller_3->e10->choice->b = "b. people were sceptical about his claims.";
$caller_3->e10->choice->c = "c. his idea was tested and found to be correct.";

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
                <div class="col-lg-12">
                    <table>
                        <tr>
                            <td colspan="3">
                                Choose the best answer for each of the following questions:
                            </td>
                        </tr>
                        @foreach($caller_3 as $index => $caller_3)
                        <tr>
                            <td>{{$caller_3->n}}.</td>
                            <td colspan="2">{{$caller_3->q}}</td>
                        </tr>
                        @foreach($caller_3->choice as $index2 => $choice)
                        <tr>
                            <td></td>
                            <td style="width: 20px;">
                                <div class="form-check">
                                    <input class="form-check-input event-click position-static q-check caller_3-{{$index}}-{{$index2}}" type="radio" name="caller_3-{{$index}}" show-aw="caller_3-{{$index}}" aw="{{$caller_3->aw}}" value="{{$choice}}">
                                </div>
                            </td>
                            <td>
                                <span class="event-click" onclick="checkRadio('caller_3-{{$index}}-{{$index2}}')">{{$choice}}</span>
                            </td>
                        </tr>
                        @endforeach
                        <tr class="aw">
                            <td></td>
                            <td colspan="2" class="aw caller_3-{{$index}} text-danger">{{$caller_3->aw}}</td>
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