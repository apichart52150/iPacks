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

$caller_1 = new stdClass();
$caller_1->e1 = new stdClass();
$caller_1->e2 = new stdClass();
$caller_1->e3 = new stdClass();
$caller_1->e4 = new stdClass();
$caller_1->e5 = new stdClass();

$caller_1->e1->aw = "2 years";
$caller_1->e2->aw = "Homosexual";
$caller_1->e3->aw = "0";
$caller_1->e4->aw = "None";
$caller_1->e5->aw = "Move in with William";




$caller_2 = new stdClass();
$caller_2->e1 = new stdClass();
$caller_2->e2 = new stdClass();
$caller_2->e3 = new stdClass();
$caller_2->e4 = new stdClass();
$caller_2->e5 = new stdClass();
$caller_2->e6 = new stdClass();
$caller_2->e7 = new stdClass();
$caller_2->e8 = new stdClass();
$caller_2->e9 = new stdClass();
$caller_2->e10 = new stdClass();
$caller_2->e11 = new stdClass();
$caller_2->e12 = new stdClass();
$caller_2->e13 = new stdClass();
$caller_2->e14 = new stdClass();
$caller_2->e15 = new stdClass();

$caller_2->e1->n = "1";
$caller_2->e2->n = "2";
$caller_2->e3->n = "3";
$caller_2->e4->n = "4";
$caller_2->e5->n = "5";
$caller_2->e6->n = "6";
$caller_2->e7->n = "7";
$caller_2->e8->n = "8";
$caller_2->e9->n = "9";
$caller_2->e10->n = "10";
$caller_2->e11->n = "11";
$caller_2->e12->n = "12";
$caller_2->e13->n = "13";
$caller_2->e14->n = "14";
$caller_2->e15->n = "15";

$caller_2->e1->q = "How did Monica NOT feel after the divorce?";
$caller_2->e2->q = "Why do you think Tom slapped Monica across the face?";
$caller_2->e3->q = "Which of the following statements is NOT TRUE?";
$caller_2->e4->q = "Which of the following statements is TRUE?";
$caller_2->e5->q = "Why does Monica feel sorry for Tom?";
$caller_2->e6->q = "Which of the following did George NOT feel on the evening his wife told him about her boyfriend?";
$caller_2->e7->q = "Why did George feel naive?";
$caller_2->e8->q = "Which of the following statements about George is most accurate?";
$caller_2->e9->q = "How long did Lisa's engagement last?";
$caller_2->e10->q = "Which of the following describes Harry's feelings towards his first child?";
$caller_2->e11->q = "When Lisa started going out more frequently";
$caller_2->e12->q = "How did Harry feel about the divorce?";
$caller_2->e13->q = "Why did Edward's mother not go to his wedding?";
$caller_2->e14->q = "'...I suppose we needed someone to push us together.' What was the reason for this?";
$caller_2->e15->q = "Why did Edward go to the bar that night?";

$caller_2->e1->aw = "c. afraid";
$caller_2->e2->aw = "a. She told him not to be stupid.";
$caller_2->e3->aw = "d. Tom did not beat Monica again.";
$caller_2->e4->aw = "a. Monica saw the counsellor before she saw the lawyer.";
$caller_2->e5->aw = "d. All the above reasons.";
$caller_2->e6->aw = "b. angry";
$caller_2->e7->aw = "a. He hadn't suspected anything.";
$caller_2->e8->aw = "d. He has accepted the situation.";
$caller_2->e9->aw = "b. Less than a year.";
$caller_2->e10->aw = "b. jealousy";
$caller_2->e11->aw = "d. she realized her life up to that time had been boring.";
$caller_2->e12->aw = "d. indifferent";
$caller_2->e13->aw = "a. She didn't want Edward to marry Susan.";
$caller_2->e14->aw = "a. Neither Susan nor Edward were out-going people.";
$caller_2->e15->aw = "a. So that he would get home after Susan had gone to bed.";

$caller_2->e1->choice = new stdClass();
$caller_2->e2->choice = new stdClass();
$caller_2->e3->choice = new stdClass();
$caller_2->e4->choice = new stdClass();
$caller_2->e5->choice = new stdClass();
$caller_2->e6->choice = new stdClass();
$caller_2->e7->choice = new stdClass();
$caller_2->e8->choice = new stdClass();
$caller_2->e9->choice = new stdClass();
$caller_2->e10->choice = new stdClass();
$caller_2->e11->choice = new stdClass();
$caller_2->e12->choice = new stdClass();
$caller_2->e13->choice = new stdClass();
$caller_2->e14->choice = new stdClass();
$caller_2->e15->choice = new stdClass();

$caller_2->e1->choice->a = "a. sad";
$caller_2->e1->choice->b = "b. relieved";
$caller_2->e1->choice->c = "c. afraid";
$caller_2->e1->choice->d = "d. hopeful";
$caller_2->e2->choice->a = "a. She told him not to be stupid.";
$caller_2->e2->choice->b = "b. She had a boy-friend.";
$caller_2->e2->choice->c = "c. He'd been down the pub.";
$caller_2->e2->choice->d = "d. He started to kick her.";
$caller_2->e3->choice->a = "a. Monica had to go to the hospital.";
$caller_2->e3->choice->b = "b. Monica was seriously injured.";
$caller_2->e3->choice->c = "c. The situation at home did not improve.";
$caller_2->e3->choice->d = "d. Tom did not beat Monica again.";
$caller_2->e4->choice->a = "a. Monica saw the counsellor before she saw the lawyer.";
$caller_2->e4->choice->b = "b. Monica saw a counsellor about a divorce.";
$caller_2->e4->choice->c = "c. Monica spoke to the lawyer immediately after seeing the counsellor.";
$caller_2->e4->choice->d = "d. Tom tried to discuss the situation with Monica.";
$caller_2->e5->choice->a = "a. He's lost his children.";
$caller_2->e5->choice->b = "b. She feels he has nothing to look forward to.";
$caller_2->e5->choice->c = "c. He has nothing left but memories.";
$caller_2->e5->choice->d = "d. All the above reasons.";
$caller_2->e6->choice->a = "a. devastated";
$caller_2->e6->choice->b = "b. angry";
$caller_2->e6->choice->c = "c. shocked";
$caller_2->e6->choice->d = "d. incredulous";
$caller_2->e7->choice->a = "a. He hadn't suspected anything.";
$caller_2->e7->choice->b = "b. Gloria had planned the whole thing.";
$caller_2->e7->choice->c = "c. He didn't feel like eating the dinner.";
$caller_2->e7->choice->d = "d. Gloria had ordered a beautiful dinner.";
$caller_2->e8->choice->a = "a. He has forgiven Gloria.";
$caller_2->e8->choice->b = "b. He'd like Gloria to come back to him.";
$caller_2->e8->choice->c = "c. He feels resentful about the whole thing.";
$caller_2->e8->choice->d = "d. He has accepted the situation.";
$caller_2->e9->choice->a = "a. More than a year.";
$caller_2->e9->choice->b = "b. Less than a year.";
$caller_2->e9->choice->c = "c. Twenty-one years.";
$caller_2->e9->choice->d = "d. Over four years.";
$caller_2->e10->choice->a = "a. love";
$caller_2->e10->choice->b = "b. jealousy";
$caller_2->e10->choice->c = "c. interest";
$caller_2->e10->choice->d = "d. fear";
$caller_2->e11->choice->a = "a. the children became more independent.";
$caller_2->e11->choice->b = "b. Harry's first novel was rejected by the publishers.";
$caller_2->e11->choice->c = "c. she found she had more time on her hands.";
$caller_2->e11->choice->d = "d. she realized her life up to that time had been boring.";
$caller_2->e12->choice->a = "a. happy";
$caller_2->e12->choice->b = "b. sad";
$caller_2->e12->choice->c = "c. angry";
$caller_2->e12->choice->d = "d. indifferent";
$caller_2->e13->choice->a = "a. She didn't want Edward to marry Susan.";
$caller_2->e13->choice->b = "b. The wedding was low-key.";
$caller_2->e13->choice->c = "c. She didn't like Susan.";
$caller_2->e13->choice->d = "d. There was a strange atmosphere at the wedding.";
$caller_2->e14->choice->a = "a. Neither Susan nor Edward were out-going people.";
$caller_2->e14->choice->b = "b. Susan had had one or two boyfriends before.";
$caller_2->e14->choice->c = "c. Their friend thought they would hit it off.";
$caller_2->e14->choice->d = "d. Edward had never had a girlfriend before.";
$caller_2->e15->choice->a = "a. So that he would get home after Susan had gone to bed.";
$caller_2->e15->choice->b = "b. He wanted to meet William.";
$caller_2->e15->choice->c = "c. He wanted a couple of drinks.";
$caller_2->e15->choice->d = "d. Because Susan had been to see a counsellor.";

@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['sub_menu_name']}}
            </p>
            <div class="row">

                <div class="col-lg-12">
                    <h5>Listen to the audio. You will hear four people talking about their recent divorces. As you
                        listen to the audio, complete the information table below: </h5>
                    <table class="w-100 table">
                        <tr>
                            <th>NAME</th>
                            <th>How long married?</th>
                            <th>Reasons for divorce</th>
                            <th>No. of children</th>
                            <th>Custody of children</th>
                            <th>Plans for future</th>
                        </tr>
                        <tr>
                            <td>Edward</td>
                            @foreach($caller_1 as $index => $caller_1)
                            <td>
                                <input type="text" class="w-100 form-control q-text" show-aw="caller_1-{{$index}}" aw="{{$caller_1->aw}}">
                                <span class="aw caller_1-{{$index}} text-danger">{{$caller_1->aw}}</span>
                            </td>
                            @endforeach
                        </tr>
                    </table>
                </div>
                <div class="col-lg-12">
                    <table>
                        <tr>
                            <td colspan="3">
                                Look at the following questions and choose the best answer for each question:
                            </td>
                        </tr>
                        @foreach($caller_2 as $index => $caller_2)
                        <tr>
                            <td>{{$caller_2->n}}.</td>
                            <td colspan="2">{{$caller_2->q}}</td>
                        </tr>
                        @foreach($caller_2->choice as $index2 => $choice)
                        <tr>
                            <td></td>
                            <td style="width: 20px;">
                                <div class="form-check">
                                    <input class="form-check-input position-static q-check caller_4-{{$index}}-{{$index2}}" type="radio" name="caller_2-{{$index}}" show-aw="caller_2-{{$index}}" aw="{{$caller_2->aw}}" value="{{$choice}}">
                                </div>
                            </td>
                            <td onclick="checkRadio('caller_2-{{$index}}-{{$index2}}')">{{$choice}}</td>
                        </tr>
                        @endforeach
                        <tr class="aw">
                            <td></td>
                            <td colspan="2" class="aw caller_2-{{$index}} text-danger">{{$caller_2->aw}}</td>
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
    $('.q-caller-2').each((idx, item) => {
        let text = $(item).html()
        let new_text = $(item).html()
        let aw = $(item).attr('aw').split("***")
        console.log("text", text)
        console.log("aw", aw)
        for (let i = 0; i < text.split("...").length - 1; i++) {
            let input = '<div class="input-con input-con2 caller_3 pb-1 "><input type="text" class="input-text caller_3" aw="' + aw[i] + '" show-aw="caller_3-' + idx + '-' + i + '" autocomplete="off"></div>' +
                '<labal class="w-100 px-2 aw caller_3-' + idx + '-' + i + ' text-danger">' + aw[i] + '</labal>'
            new_text = new_text.replace("...", input)
        }
        $('.q-caller-2-e' + (idx + 1)).html(new_text)
    })

    $('#check-answer').on('click', () => {
        $('.q').each((idx, item) => {
            if ($(item).text().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'))
        })
        $('.q-text').each((idx, item) => {
            if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'))
        })
        $('.q-check:checked').each((idx, item) => {
            if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'))
        })
        $('.aw').removeClass('aw')
    })

    function show_aw(aw) {
        console.log("aw", aw)
        $('.' + aw).addClass('text-success')
        $('.' + aw).removeClass('text-danger')
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