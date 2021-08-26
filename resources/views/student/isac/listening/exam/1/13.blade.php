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
        grid-template-columns: repeat(6, 1fr);
    }

    .aw {
        display: none;
    }
</style>
@php


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
$caller_2->e9 = new stdClass();

$caller_2->e1->n = "i";
$caller_2->e2->n = "ii";
$caller_2->e3->n = "iii";
$caller_2->e4->n = "iv";
$caller_2->e5->n = "v";
$caller_2->e6->n = "vi";
$caller_2->e7->n = "vii";
$caller_2->e8->n = "viii";
$caller_2->e9->n = "ix";

$caller_2->e1->q = "How intense was the earthquake?";
$caller_2->e2->q = "What time did the earthquake strike?";
$caller_2->e3->q = "Which phone number would you call if you had relatives in the town where the earthquake struck?";
$caller_2->e4->q = "How many people died in the Sydney fire?";
$caller_2->e5->q = "How much damage was caused?";
$caller_2->e6->q = "How old was the woman who was attacked in Melbourne?";
$caller_2->e7->q = "How tall is her attacker thought to be?";
$caller_2->e8->q = "What's the matter with Jim Austin?";
$caller_2->e9->q = "According to the weather forecast, is it likely to rain the following day?";

$caller_2->e1->aw = "7.4 on the Richter scale";
$caller_2->e2->aw = "5.30 a.m.";
$caller_2->e3->aw = "06 3481 2944";
$caller_2->e4->aw = "None";
$caller_2->e5->aw = "Estimated at over $100,000";
$caller_2->e6->aw = "23 years old";
$caller_2->e7->aw = "1 metre 80 tall";
$caller_2->e8->aw = "He's broken a bone in his finger";
$caller_2->e9->aw = "No, but there's the possibility of a shower later in the day.";

$caller_2_choice->ch1 = "Estimated at over $100,000";
$caller_2_choice->ch2 = "1 metre 80 tall";
$caller_2_choice->ch3 = "7.4 on the Richter scale";
$caller_2_choice->ch4 = "He's broken a bone in his finger";
$caller_2_choice->ch5 = "None";
$caller_2_choice->ch6 = "06 3481 2944";
$caller_2_choice->ch7 = "23 years old";
$caller_2_choice->ch8 = "No, but there's the possibility of a shower later in the day.";
$caller_2_choice->ch9 = "5.30 a.m.";



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
                    <div class="card-box box-shadow" id="">
                        <h5>As you listen, find answers to these questions:</h5>
                        <div class="row justify-content-center mb-2">
                            <div class="col-md-12">
                                <div class="border border-dark px-2 text-center">
                                    <div class="drag-container">
                                        <div class="d-grid grid-5" id="choices">
                                            @foreach($caller_2_choice as $choice)
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
                                    @foreach($caller_2 as $index => $caller_2)
                                    <tr>
                                        <td>{{$caller_2->n}}.</td>
                                        <td class="border-dark p-2">{{$caller_2->q}}</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50px;"><b>Answer: </b></td>
                                        <td class="border-dark p-2">
                                            <div class="input-con w-75">
                                                <div class="dropbox w-100 q" show-aw="caller_2-{{$index}}" aw="{{$caller_2->aw}}"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="aw caller_2-{{$index}} text-danger">
                                            {{$caller_2->aw}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <h4 class="font-italic">Caller 2</h4>
                    <div class="card-box box-shadow" id="">
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
                </div>
                <div class="col-lg-12">
                    <h4 class="font-italic">Caller 3</h4>
                    <div class="card-box box-shadow" id="">
                        <h5>As you listen again, make notes and write a short report about one of the news items.</h5>
                        <textarea name="" class="w-100" style="resize: none;" id="" cols="30" rows="10"></textarea>
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