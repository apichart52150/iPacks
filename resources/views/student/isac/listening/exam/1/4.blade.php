<link rel="stylesheet" href="{{ asset('public/css/draggable.css') }}">
<style>
    table tr td{
        vertical-align: top;
    }
    .input-con {
        display: inline-block;
        position: relative;
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
    }

    .dropbox .drag {
        margin: 0;
    }

    .grid-5 {
        grid-template-columns: repeat(6, 1fr);
    }

    .aw {
        display: none;
    }
</style>
@php

$caller_2 = new stdClass();
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

$caller_2->e1->q = "Although significant numbers still come from English-speaking countries";
$caller_2->e2->q = "The term 'drinking' refers to the consumption of alcoholic drinks such as";
$caller_2->e3->q = "Excessive alcohol consumption can lead not only to physiological problems";
$caller_2->e4->q = "There are both financial and environmental costs associated with landfill sites; not only are they a waste of potentially valuable land,";
$caller_2->e5->q = "In spite of these negative effects on the human body";
$caller_2->e6->q = "The two most important factors in developing a good study ethos are, first of all, a positive attitude,";
$caller_2->e7->q = "As attitudes in society change, one would expect language to develop at the same rate; however,";
$caller_2->e8->q = "He socially constructed gender division of labour restricts the employment possibilities for both men and women; an illustration of this";

$caller_2->e1->aw = "Although significant numbers still come from English-speaking countries, an even larger number come from non-English-speaking countries.";
$caller_2->e2->aw = "The term 'drinking' refers to the consumption of alcoholic drinks such as beer, wine and spirits.";
$caller_2->e3->aw = "Excessive alcohol consumption can lead not only to physiological problems, but also to psychological problems.";
$caller_2->e4->aw = "There are both financial and environmental costs associated with landfill sites; not only are they a waste of potentially valuable land, but they also present pollution problems.";
$caller_2->e5->aw = "In spite of these negative effects on the human body, there are, however, some beneficial aspects.";
$caller_2->e6->aw = "The two most important factors in developing a good study ethos are, first of all, a positive attitude, and, second, a healthy life-style.";
$caller_2->e7->aw = "As attitudes in society change, one would expect language to develop at the same rate; however, it doesn't.";
$caller_2->e8->aw = "The socially constructed gender division of labour restricts the employment possibilities for both men and women; an illustration of this is the small number of women in executive management positions.";



$caller_4 = new stdClass();
$caller_4_choice = new stdClass();
$caller_4->e2 = new stdClass();
$caller_4->e3 = new stdClass();
$caller_4->e4 = new stdClass();
$caller_4->e5 = new stdClass();
$caller_4->e6 = new stdClass();
$caller_4->e7 = new stdClass();
$caller_4->e8 = new stdClass();
$caller_4->e9 = new stdClass();
$caller_4->e10 = new stdClass();
$caller_4->e11 = new stdClass();
$caller_4->e12 = new stdClass();
$caller_4->e13 = new stdClass();
$caller_4->e14 = new stdClass();

$caller_4->e2->n = "2";
$caller_4->e3->n = "3";
$caller_4->e4->n = "4";
$caller_4->e5->n = "5";
$caller_4->e6->n = "6";
$caller_4->e7->n = "7";
$caller_4->e8->n = "8";
$caller_4->e9->n = "9";
$caller_4->e10->n = "10";
$caller_4->e11->n = "10";
$caller_4->e12->n = "12";
$caller_4->e13->n = "13";
$caller_4->e14->n = "14";

$caller_4->e2->q = "Introduction of GST";
$caller_4->e3->q = "Increase in public spending";
$caller_4->e4->q = "Balance of payments reduction";
$caller_4->e5->q = "Reduction in unemployment";
$caller_4->e6->q = "Income tax rise";
$caller_4->e7->q = "Rise in tobacco tax";
$caller_4->e8->q = "Rise in alcohol tax";
$caller_4->e9->q = "Rise in petrol tax";
$caller_4->e10->q = "Payrise for police";
$caller_4->e11->q = "Payrise for teachers";
$caller_4->e12->q = "Payrise for nurses";
$caller_4->e13->q = "Inflation rate rise";
$caller_4->e14->q = "Government re-election";

$caller_4->e2->aw = "probable = 75%";
$caller_4->e3->aw = "improbable = 25%";
$caller_4->e4->aw = "certain = 100%";
$caller_4->e5->aw = "improbable = 25%";
$caller_4->e6->aw = "possible = 50%";
$caller_4->e7->aw = "probable = 75%";
$caller_4->e8->aw = "improbable = 25%";
$caller_4->e9->aw = "improbable = 25%";
$caller_4->e10->aw = "probable = 75%";
$caller_4->e11->aw = "probable = 75%";
$caller_4->e12->aw = "improbable = 25%";
$caller_4->e13->aw = "improbable = 25%";
$caller_4->e14->aw = "probable = 75%";

$caller_4->e2->aw2 = "..a strong possibility..";
$caller_4->e3->aw2 = "..unlikely that there'll be a real increase..";
$caller_4->e4->aw2 = "I'm sure the Treasurer will try to reduce this..";
$caller_4->e5->aw2 = "I don't think there's much chance..";
$caller_4->e6->aw2 = "It's also possible that we'll see..";
$caller_4->e7->aw2 = "It's probable that taxation on cigarettes will rise.";
$caller_4->e8->aw2 = "Highly unlikely";
$caller_4->e9->aw2 = "Highly unlikely";
$caller_4->e10->aw2 = "I believe the government would like to..";
$caller_4->e11->aw2 = "I expect there will be a salary increase..";
$caller_4->e12->aw2 = "I doubt that very much.";
$caller_4->e13->aw2 = "It seems unlikely..";
$caller_4->e14->aw2 = "..should have no problem getting re-elected..";

$caller_4_choice->e2 = "I'm sure the Treasurer will try to reduce this..";
$caller_4_choice->e3 = "I believe the government would like to..";
$caller_4_choice->e4 = "I expect there will be a salary increase..";
$caller_4_choice->e5 = "Highly unlikely";
$caller_4_choice->e6 = "..unlikely that there'll be a real increase..";
$caller_4_choice->e7 = "It's probable that taxation on cigarettes will rise.";
$caller_4_choice->e8 = "I don't think there's much chance..";
$caller_4_choice->e9 = "It seems unlikely..";
$caller_4_choice->e10 = "Highly unlikely";
$caller_4_choice->e11 = "..should have no problem getting re-elected..";
$caller_4_choice->e12 = "I doubt that very much.";
$caller_4_choice->e13 = "It's also possible that we'll see..";
$caller_4_choice->e14 = "..a strong possibility..";

@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['sub_menu_name']}}
            </p>
            <div class="row">

                <div class="col-lg-12">
                    <h4 class="font-italic">Caller 1</h4>
                    <div class="card-box box-shadow" id="">
                        <table class="w-100">
                            <tr>
                                <td>1.</td>
                                <td>You are going to hear a talk entitled: 'The Meaning of Development'.
                                    Make predictions about what you think you might hear. Write down any words which you
                                    associate with this topic. Make sure you understand the concept: 'development'.</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Brainstorm some of these ideas with a small group of people in your class.</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Now you are ready to listen to the talk. As you listen to the talk, make notes using
                                    any conventions which will help you.
                                </td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Listen to the recording twice only.</td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td> After listening to the recording twice, compare your notes with those of the person sitting next
                                    to you. Are your notes similar? Did either of you miss out chunks from the recording? If so, help
                                    each other to complete the notes.</td>
                            </tr>
                            <tr>
                                <td>6.</td>
                                <td> Now, write a short summary of the talk in about 50 - 80 words.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <textarea name="" class="w-100" style="resize: none;" id="" cols="30" rows="10"></textarea>
                                    <h5 class="mt-3 aw text-success">Summary (possible answer)</h5>
                                    <span class="aw text-success">
                                        The word 'develop' can mean 'unwrap' or 'uncover'. It also means to allow a picture to show from a
                                        negative image. In the context of growing vegetables, it means providing an environment which
                                        allows growth to occur. True development means allowing people to develop in their own way by
                                        removing obstacles which prevent growth. This means integrating people into their own
                                        development to make it meaningful.
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-lg-12">
                    <h4 class="font-italic">Caller 2</h4>
                    <div class="card-box box-shadow" id="">
                        <table class="w-100">
                            <tr>
                                <td colspan="2">Listen to the sentences.
                                    <br>
                                    They are not complete (how do you know this, just by listening?).
                                    <br>
                                    Complete the sentences with suitable endings, depending on the speech markers contained in each sentence.
                                    <br><br>
                                    e.g. The Silver Spur is heavier than the Silver Ghost. The former weighs two and a half tonnes whereas
                                    the latter weighs only two tonnes. (or any weight less than two and a half tonnes.)
                                </td>
                            </tr>
                            @foreach($caller_2 as $caller_2)
                            <tr>
                                <td>{{$caller_2->n}}</td>
                                <td>{{$caller_2->q}}</td>
                            </tr>
                            <tr>
                                <td><b>Answer: </b></td>
                                <td>
                                    <input type="text" class="w-100">
                                </td>
                            </tr>
                            <tr>
                                <td class="aw text-success"><b>Possible answers: </b></td>
                                <td class="aw text-success">{{$caller_2->aw}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="col-lg-12">
                    <h4 class="font-italic">Caller 3</h4>
                    <div class="card-box box-shadow" id="">
                        <!-- ///////////////// -->
                    </div>
                </div>
                <div class="col-lg-12">
                    <h4 class="font-italic">Caller 4</h4>
                    <div class="card-box box-shadow" id="">
                        <h5>Write the following sentences in note form, using abbreviations, signs, symbols or anything else which will help you. Focus only on the content words. </h5>
                        <div class="row justify-content-center mb-2">
                            <div class="col-md-12">
                                <div class="border border-dark px-2 text-center">
                                    <div class="drag-container">
                                        <div class="d-grid grid-5" id="choices">
                                            @foreach($caller_4_choice as $choice)
                                            <div class="drag">{{$choice}}</div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center mb-2">
                            <div class="col-md-12">
                                <table class="w-100">
                                    <tr>
                                        <td colspan="2">
                                            <h5>Prediction</h5>
                                        </td>
                                        <td colspan="2">
                                            <h5>Probability</h5>
                                        </td>
                                        <td colspan="2">
                                            <h5>Words used</h5>
                                        </td>
                                    </tr>
                                    @foreach($caller_4 as $index => $caller_4)
                                    <tr>
                                        <td>{{$caller_4->n}}.</td>
                                        <td>{{$caller_4->q}}</td>
                                        <td class="pr-4">
                                            <select class="form-control q-text" show-aw="caller_4-{{$index}}" aw="{{$caller_4->aw}}">
                                                <option>certain = 100%</option>
                                                <option>probable = 75%</option>
                                                <option>possible = 50%</option>
                                                <option>improbable = 25%</option>
                                                <option>or less</option>
                                            </select>
                                        </td>
                                        <td class="aw caller_4-{{$index}} text-danger">{{$caller_4->aw}}</td>
                                        <td>
                                            <div class="input-con">
                                                <div class="dropbox q" show-aw="caller_42-{{$index}}" aw="{{$caller_4->aw2}}"></div>
                                            </div>
                                        </td>
                                        <td class="aw caller_42-{{$index}} text-danger">{{$caller_4->aw2}}</td>
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
<button id="check-answer" class="btn btn-info">Check Answersss</button>
<!-- <button id="show-answer" class="btn btn-success">Show Answer</button> -->
@endsection

@section('js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

<script>
    $('.q-caller-2').each((idx, item) => {
        let text = $(item).html()
        if (text == "...") {
            let input = '<div class="input-con">' +
                '<div class="dropbox q" show-aw="' + $(item).attr('show-aw') + '" aw="' + $(item).attr('aw') + '"></div>' +
                '</div>'
            text = text.replace("...", input)
            $(item).html(input)
        }
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
        $('.aw').removeClass('aw')
    })

    function show_aw(aw) {
        $('.' + aw).addClass('text-success')
        $('.' + aw).removeClass('text-danger')
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