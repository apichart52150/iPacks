<link rel="stylesheet" href="{{ asset('public/css/draggable.css') }}">
<style>
    table tr td {
        vertical-align: top;
        padding-top: 10px;
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
        vertical-align: middle;
    }

    .grid-5 {
        grid-template-columns: repeat(3, 1fr);
    }

    .aw {
        display: none;
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
$caller_1->e12 = new stdClass();
$caller_1->e13 = new stdClass();
$caller_1->e14 = new stdClass();
$caller_1->e15 = new stdClass();
$caller_1->e16 = new stdClass();
$caller_1->e17 = new stdClass();
$caller_1->e18 = new stdClass();
$caller_1->e19 = new stdClass();
$caller_1->e20 = new stdClass();

$caller_1->e1->q = "attitudes";
$caller_1->e2->q = "discrepancy";
$caller_1->e3->q = "status";
$caller_1->e4->q = "emancipation";
$caller_1->e5->q = "eradicating";
$caller_1->e6->q = "belittle";
$caller_1->e7->q = "reviewed";
$caller_1->e8->q = "to skid";
$caller_1->e9->q = "assumption";
$caller_1->e10->q = "anecdote";
$caller_1->e11->q = "to denote";
$caller_1->e12->q = "insults";
$caller_1->e13->q = "connotations";
$caller_1->e14->q = "counterparts";
$caller_1->e15->q = "the former";
$caller_1->e16->q = "the latter";
$caller_1->e17->q = "newly-coined";
$caller_1->e18->q = "omission";
$caller_1->e19->q = "prolonged";
$caller_1->e20->q = "intention";

$caller_1->e1->aw = "position, standing";
$caller_1->e2->aw = "reconsidered, changed";
$caller_1->e3->aw = "short story, often humorous";
$caller_1->e4->aw = "make someone look small and unimportant";
$caller_1->e5->aw = "ways in which people think; beliefs";
$caller_1->e6->aw = "leaving out; not included";
$caller_1->e7->aw = "the thing mentioned first";
$caller_1->e8->aw = "the thing mentioned last";
$caller_1->e9->aw = "to show";
$caller_1->e10->aw = "equivalents";
$caller_1->e11->aw = "aim, purpose to do something";
$caller_1->e12->aw = "difference";
$caller_1->e13->aw = "getting rid of";
$caller_1->e14->aw = "to slide out of control, usually in a vehicle";
$caller_1->e15->aw = "freedom from restrictive bonds";
$caller_1->e16->aw = "recently invented (words, phrases)";
$caller_1->e17->aw = "extended, over a longer period";
$caller_1->e18->aw = "additional meanings";
$caller_1->e19->aw = "language used to hurt someone's feelings";
$caller_1->e20->aw = "something which is accepted as true without proof";

$caller_1_choice->ch1 = "ways in which people think; beliefs";
$caller_1_choice->ch2 = "make someone look small and unimportant";
$caller_1_choice->ch3 = "aim, purpose to do something";
$caller_1_choice->ch4 = "equivalents";
$caller_1_choice->ch5 = "short story, often humorous";
$caller_1_choice->ch6 = "freedom from restrictive bonds";
$caller_1_choice->ch7 = "difference";
$caller_1_choice->ch8 = "leaving out; not included";
$caller_1_choice->ch9 = "extended, over a longer period";
$caller_1_choice->ch10 = "getting rid of";
$caller_1_choice->ch11 = "position, standing";
$caller_1_choice->ch12 = "to slide out of control, usually in a vehicle";
$caller_1_choice->ch13 = "additional meanings";
$caller_1_choice->ch14 = "reconsidered, changed";
$caller_1_choice->ch15 = "something which is accepted as true without proof";
$caller_1_choice->ch16 = "the thing mentioned last";
$caller_1_choice->ch17 = "to show";
$caller_1_choice->ch18 = "language used to hurt someone's feelings";
$caller_1_choice->ch19 = "recently invented (words, phrases)";
$caller_1_choice->ch20 = "the thing mentioned first";



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

$caller_3->e1->aw = "More than a dozen people are known to have been killed";
$caller_3->e2->aw = "the final figure is expected to rise considerably";
$caller_3->e3->aw = "At least one hundred and thirty people are said to be seriously injured";
$caller_3->e4->aw = "a breakdown in telecommunications systems..., thought to have been caused by vandals";
$caller_3->e5->aw = "Damage is expected to amount to millions of dollars";
$caller_3->e6->aw = "The fire is believed to have started in the kitchen";
$caller_3->e7->aw = "The parents of the two children are said to have been visiting relatives";
$caller_3->e8->aw = "The property is not believed to have been insured";
$caller_3->e9->aw = "He's expected to be fit for the Third Test starting two weeks on Thursday";
$caller_3->e10->aw = "The fine weather is expected to continue for the next few days";

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
                    <span>
                        In the lecture you will hear the words in List A.
                        <b>Before you listen to the lecture</b>, match the words in List A with their meanings in List B.
                        Then do Exercise 2.
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
                            <table class="w-100 mb-3">
                                @foreach($caller_1 as $index => $caller_1)
                                <tr>
                                    <td class="pl-4" style="width: 200px;">{{$caller_1->q}}</td>
                                    <td>=</td>
                                    <td>
                                        <div class="input-con w-75">
                                            <div class="dropbox w-100 q" show-aw="caller_1-{{$index}}" aw="{{$caller_1->aw}}"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td class="aw caller_1-{{$index}} text-danger">
                                        {{$caller_1->aw}}
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <h4 class="font-italic">Caller 2</h4>
                    <table class="w-100">
                        <tr>
                            <td colspan="2">
                                <h5>As you listen to the report again, identify sentences using the <b>Passive + Infinitive</b> construction.
                                    (There are about 10 in the report)</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>e.g.</td>
                            <td>
                                None of the buildings in the small town is believed to have survived.........
                            </td>
                        </tr>
                        @foreach($caller_3 as $index => $caller_3)
                        <tr>
                            <td>{{$caller_3->n}}.</td>
                            <td>
                                <input type="text" class="q-text w-75" show-aw="caller_3-{{$index}}" aw="{{$caller_3->aw}}">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="aw caller_3-{{$index}} text-danger">{{$caller_3->aw}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="col-lg-12">
                    <h4 class="font-italic">Caller 3</h4>
                    <h5>As you listen again, make notes and write a short report about one of the news items.</h5>
                    <textarea name="" class="w-100" style="resize: none;" id="" cols="30" rows="10"></textarea>
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
    $('#check-answer').on('click', () => {
        $('.q').each((idx, item) => {
            if ($(item).text().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'))
        })
        $('.q-text').each((idx, item) => {
            console.log($(item).val().trim().toUpperCase())
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