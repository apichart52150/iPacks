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
$caller_1->e1 = new stdClass();
$caller_1->e1->q = "1. This means that one in seven workers lack literacy skills ... for our technologically ... society. ";
$caller_1->e1->aw = "adequate***sophisticated";
$caller_1->e2 = new stdClass();
$caller_1->e2->q = "2. They can't read training and safety ... and they can't fill out simple forms.";
$caller_1->e2->aw = "manuals";
$caller_1->e3 = new stdClass();
$caller_1->e3->q = "3. When a person has literacy problems, it's harder to get ... .";
$caller_1->e3->aw = "promotion";
$caller_1->e4 = new stdClass();
$caller_1->e4->q = "4. People are willing to ... in a number of directions. ";
$caller_1->e4->aw = "point the finger";
$caller_1->e5 = new stdClass();
$caller_1->e5->q = "5. some with literacy problems missed large ... of schooling due to poor health or sight or hearing problems.";
$caller_1->e5->aw = "chunks";
$caller_1->e6 = new stdClass();
$caller_1->e6->q = "6. And most importantly, courses are run on a ... basis.";
$caller_1->e6->aw = "voluntary";
$caller_1->e7 = new stdClass();
$caller_1->e7->q = "7. The Government has also ... a sum of money to fund courses for unemployed adults who need to up-grade their literacy skills.";
$caller_1->e7->aw = "allocated";

$caller_1_choice = new stdClass();
$caller_1_choice->ch1 = "manuals";
$caller_1_choice->ch2 = "adequate";
$caller_1_choice->ch3 = "voluntary";
$caller_1_choice->ch4 = "chunks";
$caller_1_choice->ch5 = "sophisticated";
$caller_1_choice->ch6 = "allocated";
$caller_1_choice->ch7 = "point the finger";
$caller_1_choice->ch8 = "promotion";


$caller_2 = new stdClass();
$caller_2_choice = new stdClass();
$caller_2->e1 = new stdClass();
$caller_2->e2 = new stdClass();
$caller_2->e3 = new stdClass();
$caller_2->e4 = new stdClass();
$caller_2->e5 = new stdClass();
$caller_2->e6 = new stdClass();
$caller_2->e7 = new stdClass();
$caller_2->e8 = new stdClass();

$caller_2->e1->n = "1";
$caller_2->e2->n = "2";
$caller_2->e3->n = "3";
$caller_2->e4->n = "4";
$caller_2->e5->n = "5";
$caller_2->e6->n = "6";
$caller_2->e7->n = "7";
$caller_2->e8->n = "8";

$caller_2->e1->q = "pieces";
$caller_2->e2->q = "freely, willing, not forced";
$caller_2->e3->q = "show where the blame lies";
$caller_2->e4->q = "given";
$caller_2->e5->q = "a better position or job";
$caller_2->e6->q = "enough, sufficient";
$caller_2->e7->q = "instruction booklets";
$caller_2->e8->q = "complex and modern";

$caller_2->e1->aw = "chunks";
$caller_2->e2->aw = "voluntary";
$caller_2->e3->aw = "point the finger";
$caller_2->e4->aw = "allocated";
$caller_2->e5->aw = "promotion";
$caller_2->e6->aw = "adequate";
$caller_2->e7->aw = "manuals";
$caller_2->e8->aw = "sophisticated";


$caller_3 = new stdClass();
$caller_3->e1 = new stdClass();
$caller_3->e2 = new stdClass();
$caller_3->e3 = new stdClass();
$caller_3->e4 = new stdClass();
$caller_3->e5 = new stdClass();

$caller_3->e1->n = "1";
$caller_3->e2->n = "2";
$caller_3->e3->n = "3";
$caller_3->e4->n = "4";
$caller_3->e5->n = "5";

$caller_3->e1->q = "Illiteracy is only a migrant problem.";
$caller_3->e2->q = "Most of the employers who were surveyed said they would not give a job to a person with poor literacy skills.";
$caller_3->e3->q = "Most employees do exactly the same job for the whole of their working lives.";
$caller_3->e4->q = "There are a variety of reasons why this literacy problem exists.";
$caller_3->e5->q = "Improved literacy skills usually lead to increased confidence.";

$caller_3->e1->aw = "False: Lack of literacy is not just a migrant problem";
$caller_3->e2->aw = "False: 40 % of them";
$caller_3->e3->aw = "False: workers could expect 50% of their current workforce tasks to be out-of-date in three to five years";
$caller_3->e4->aw = "True";
$caller_3->e5->aw = "True";

$caller_3_choice = new stdClass();
$caller_3_choice->a = "True";
$caller_3_choice->b = "False";


$caller_4 = new stdClass();
$caller_4->e1 = new stdClass();
$caller_4->e2 = new stdClass();
$caller_4->e3 = new stdClass();
$caller_4->e4 = new stdClass();
$caller_4->e5 = new stdClass();

$caller_4->e1->n = "1";
$caller_4->e2->n = "2";
$caller_4->e3->n = "3";
$caller_4->e4->n = "4";
$caller_4->e5->n = "5";

$caller_4->e1->q = "Which of the following would not be a problem for a person with low literacy?";
$caller_4->e2->q = "The $3 billion in lost productivity for industry includes";
$caller_4->e3->q = "Which of the following can lead to literacy problems?";
$caller_4->e4->q = "Which of the following statements about the literacy courses run by industry is not correct?";
$caller_4->e5->q = "The Government has allocated money for literacy courses to help";

$caller_4->e1->aw = "b. watching a television programme.";
$caller_4->e2->aw = "c. time lost through poor communication.";
$caller_4->e3->aw = "a. sight or hearing problems.";
$caller_4->e4->aw = "b. They are conducted during overtime periods.";
$caller_4->e5->aw = "a. illiterate people without a job.";

$caller_4->e1->choice = new stdClass();
$caller_4->e2->choice = new stdClass();
$caller_4->e3->choice = new stdClass();
$caller_4->e4->choice = new stdClass();
$caller_4->e5->choice = new stdClass();

$caller_4->e1->choice->a = "understanding the label on a medicine bottle.";
$caller_4->e1->choice->b = "watching a television programme.";
$caller_4->e1->choice->c = "finding a cinema programme in the newspaper.";
$caller_4->e2->choice->a = "losses through accidents.";
$caller_4->e2->choice->b = "high staff turnover.";
$caller_4->e2->choice->c = "time lost through poor communication.";
$caller_4->e3->choice->a = "sight or hearing problems.";
$caller_4->e3->choice->b = "school holidays";
$caller_4->e3->choice->c = "all of the above";
$caller_4->e4->choice->a = "Attendance is voluntary.";
$caller_4->e4->choice->b = "They are conducted during overtime periods.";
$caller_4->e4->choice->c = "They cost money to run.";
$caller_4->e5->choice->a = "illiterate people without a job.";
$caller_4->e5->choice->b = "volunteer staff.";
$caller_4->e5->choice->c = "people who consider themselves to be stupid.";

$caller_5_a = new stdClass();
$caller_5_a->e1 = new stdClass();
$caller_5_a->e2 = new stdClass();
$caller_5_a->e3 = new stdClass();
$caller_5_a->e4 = new stdClass();

$caller_5_a->e1->q = "'This is a time when Australia needs";
$caller_5_a->e2->q = "labour force; a labour force that is";
$caller_5_a->e3->q = ", not held back in low-paid,";
$caller_5_a->e4->q = "- but which can take advantage of";

$caller_5_a->e1->aw = "the most flexible, skilled, productive and educated";
$caller_5_a->e2->aw = "literate in the full sense of that term";
$caller_5_a->e3->aw = "unsatisfying employment - or unemployment";
$caller_5_a->e4->aw = "the opportunities that are there";

$caller_5_b = new stdClass();
$caller_5_b->e1 = new stdClass();
$caller_5_b->e2 = new stdClass();
$caller_5_b->e3 = new stdClass();
$caller_5_b->e4 = new stdClass();
$caller_5_b->e5 = new stdClass();

$caller_5_b->e1->q = "'Attitudes have changed. You can see";
$caller_5_b->e2->q = ". They're less";
$caller_5_b->e3->q = "about";
$caller_5_b->e4->q = ". They react";
$caller_5_b->e5->q = "Some of them have been able";

$caller_5_b->e1->aw = "they're more relaxed";
$caller_5_b->e2->aw = "nervous";
$caller_5_b->e3->aw = "communicating";
$caller_5_b->e4->aw = "more quickly to problems";
$caller_5_b->e5->aw = "to find better positions";

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
                        The words in the box below appear in the listening script. As you listen to the script for the first
                        time, complete the sentences (taken from the script) with these words:
                    </span>
                    <div class="row justify-content-center mb-2">
                        <div class="col-md-12">
                            <div class="border border-dark px-2 text-center">
                                <div class="drag-container">
                                    <div class="d-grid grid-5" id="choices">
                                        @foreach($caller_1_choice as $choice)
                                        <div class="drag">{{$choice}}</div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-2">
                        <div class="col-md-12">
                            @foreach($caller_1 as $index => $caller_1)
                            <p class="w-100 pr-3 q-caller-1 q-caller-1-{{$index}}" q="caller-1-{{$index}}" aw="{{$caller_1->aw}}">{{$caller_1->q}}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="mt-4 col-lg-12">
                    <span>
                        Now match the words in the box with their correct meaning:
                    </span>
                    <table class="w-100">
                        @foreach($caller_2 as $index => $caller_2)
                        <tr>
                            <td style="width: 20px;">{{$caller_2->n}}.</td>
                            <td>{{$caller_2->q}}</td>
                            <td class="px-4">=</td>
                            <td>
                                <div class="input-con w-75">
                                    <input type="text" class="input-text q-text w-100" show-aw="caller_2-{{$index}}" aw="{{$caller_2->aw}}">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <span class="pl-4 aw text-danger caller_2-{{$index}}">{{$caller_2->aw}}</span>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="mt-4 col-lg-12">
                    <table class="w-100">
                        <tr>
                            <td colspan="4">
                                <h5>
                                    Decide which of the following statements are true and which are false.
                                    <br>
                                    If a sentence is false, say why it is false.
                                </h5>
                            </td>
                        </tr>
                        @foreach($caller_3 as $index => $caller_3)
                        <tr>
                            <td style="width: 25px;">{{$caller_3->n}}.</td>
                            <td colspan="3">{{$caller_3->q}}</td>
                        </tr>

                        @foreach($caller_3_choice as $index2 => $choice)
                        <tr>
                            <td></td>
                            <td style="width: 1px;">
                                <div class="form-check">
                                    <input onclick="show_input('caller_3-input-{{$index}}-{{$index2}}','{{$choice}}');" class="form-check-input event-click position-static q-check caller_3-{{$index}}-{{$index2}}" text="caller_3-input-{{$index}}-{{$index2}}" type="radio" name="caller_3-{{$index}}" show-aw="caller_3-{{$index}}" aw="{{$caller_3->aw}}" value="{{$choice}}">
                                </div>
                            </td>
                            <td style="width: 100px;">
                                <span class="event-click" onclick="checkRadio('caller_3-{{$index}}-{{$index2}}','caller_3-input-{{$index}}-{{$index2}}','{{$choice}}')">
                                    {{$index2}}. {{$choice}}
                                </span>
                            </td>
                            <td>
                                @if($choice == "False")
                                <input type="text" class="form-control w-75 caller_3-input-{{$index}}-{{$index2}}">
                                @endif
                            </td>
                        </tr>
                        @endforeach

                        <tr class="aw">
                            <td></td>
                            <td colspan="3" class=" caller_3-{{$index}} text-danger">{{$caller_3->aw}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="mt-4 col-lg-12">
                    <table class="w-100">
                        <tr>
                            <td colspan="3">
                                <h5>Choose the best answer for each question from the alternatives given: a. b. or c. </h5>
                            </td>
                        </tr>
                        @foreach($caller_4 as $index => $caller_4_1)
                        <tr>
                            <td>{{$caller_4_1->n}}.</td>
                            <td colspan="2">{{$caller_4_1->q}}</td>
                        </tr>
                        @foreach($caller_4_1->choice as $index2 => $caller_4_2)
                        <tr>
                            <td></td>
                            <td style="width: 20px;">
                                <div class="form-check">
                                    <input class="form-check-input event-click position-static q-check caller_4-{{$index}}-{{$index2}}" type="radio" name="caller_4-{{$index}}" show-aw="caller_4-{{$index}}" aw="{{$caller_4_1->aw}}" value="{{$index2}}. {{$caller_4_2}}">
                                </div>
                            </td>
                            <td>
                                <span class="event-click" onclick="checkRadio('caller_4-{{$index}}-{{$index2}}')">{{$index2}}. {{$caller_4_2}}</span>
                            </td>
                        </tr>
                        @endforeach
                        <tr class="aw">
                            <td></td>
                            <td colspan="2" class="aw caller_4-{{$index}} text-danger">{{$caller_4_1->aw}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="mt-4 col-lg-12">
                    <h5>Complete the following quotations </h5>
                    <br>
                    <b>a. Bill Hayden said:</b>
                    <br>
                    <span>
                        @foreach($caller_5_a as $index => $caller_5_a)
                        {{$caller_5_a->q}}
                        <div class="input-con pb-1">
                            <input type="text" class="form-control q-text" show-aw="caller_4-a-{{$index}}" aw="{{$caller_5_a->aw}}">
                        </div>
                        <span class="aw text-danger px-3 caller_4-a-{{$index}}">{{$caller_5_a->aw}}</span>
                        @endforeach
                        .'
                    </span>
                    <br>
                    <br>
                    <b>b. The manager of a major company said:</b>
                    <br>
                    <span>
                        @foreach($caller_5_b as $index => $caller_5_b)
                        {{$caller_5_b->q}}
                        <div class="input-con pb-1">
                            <input type="text" class="form-control q-text" show-aw="caller_4-a-{{$index}}" aw="{{$caller_5_b->aw}}">
                        </div>
                        <span class="aw text-danger px-3 caller_4-a-{{$index}}">{{$caller_5_b->aw}}</span>
                        @endforeach
                        .'
                    </span>
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
    $('.q-caller-1').each((idx, item) => {
        let text = $(item).html()
        let new_text = $(item).html()
        let aw = $(item).attr('aw').split("***")
        for (let i = 0; i < text.split("...").length - 1; i++) {
            let input = '<div class=" input-con caller_1 pb-1 m-0 ">' +
                '<div class="dropbox q" class="caller_1" aw="' + aw[i] + '" show-aw="caller_1-' + idx + '-' + i + '"></div>' +
                '</div>' +
                '<labal class=" px-2 aw caller_1-' + idx + '-' + i + ' text-danger">' + aw[i] + '</labal>'
            new_text = new_text.replace("...", input)
        }
        $('.q-caller-1-e' + (idx + 1)).html(new_text)
    })

    $('#check-answer').on('click', () => {
        $('.q').each((idx, item) => {
            if ($(item).text().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'), item)
            else
                show_error(item)
        })
        $('.q-text').each((idx, item) => {
            if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'), item)
            else
                show_error(item)
        })
        $('.q-check:checked').each((idx, item) => {
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

    function checkRadio(x, input, value) {
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