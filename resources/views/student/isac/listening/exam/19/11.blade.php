@section('css')
<style>
    table tr .awswer {
        vertical-align: middle;
    }


    .aw1,
    .aw2,
    .aw3,
    .aw4,
    .aw5,
    .aw6 {
        display: none;
    }
    .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
        color: #ffffff;
        background-color:#ec6391;
        border-color: #dee2e6 #dee2e6 #fff;
    }
</style>
@stop
@php

$Q_1 = new stdClass();
$Q_1->e1 = new stdClass();
$Q_1->e2 = new stdClass();
$Q_1->e3 = new stdClass();
$Q_1->e4 = new stdClass();
$Q_1->e5 = new stdClass();
$Q_1->e6 = new stdClass();
$Q_1->e7 = new stdClass();
$Q_1->e8 = new stdClass();
$Q_1->e9 = new stdClass();
$Q_1->e10 = new stdClass();

$Q_1->e1->n = "1";
$Q_1->e2->n = "2";
$Q_1->e3->n = "3";
$Q_1->e4->n = "4";
$Q_1->e5->n = "5";
$Q_1->e6->n = "6";
$Q_1->e7->n = "7";
$Q_1->e8->n = "8";
$Q_1->e9->n = "9";
$Q_1->e10->n = "10";

$Q_1->e1->q = "You ought to go to bed.";
$Q_1->e2->q = "You ought to learn some manners.";
$Q_1->e3->q = "She ought to get a haircut.";
$Q_1->e4->q = "We ought to have a holiday.";
$Q_1->e5->q = "I ought to get down to some hard work.";
$Q_1->e6->q = "They ought to move into their own flat.";
$Q_1->e7->q = "He ought to get a move on.";
$Q_1->e8->q = "You ought to get your finger out.";
$Q_1->e9->q = "She ought to fight her own battles.";
$Q_1->e10->q = "We ought to have some food.";

$Q_1->e1->aw = "It's time you went to bed";
$Q_1->e2->aw = "It's time you learnt some manners";
$Q_1->e3->aw = "It's time she got a haircut";
$Q_1->e4->aw = "It's time we had a holiday";
$Q_1->e5->aw = "It's time I got down to some hard work";
$Q_1->e6->aw = "It's time they moved into their own flat";
$Q_1->e7->aw = "It's time he got a move on";
$Q_1->e8->aw = "It's time you got your finger out";
$Q_1->e9->aw = "It's time she fought her own battles";
$Q_1->e10->aw = "It's time we had some food";

$Q_2 = new stdClass();
$Q_2->e1 = new stdClass();
$Q_2->e2 = new stdClass();
$Q_2->e3 = new stdClass();
$Q_2->e4 = new stdClass();
$Q_2->e5 = new stdClass();
$Q_2->e6 = new stdClass();
$Q_2->e7 = new stdClass();
$Q_2->e8 = new stdClass();
$Q_2->e9 = new stdClass();
$Q_2->e10 = new stdClass();

$Q_2->e1->n = "1";
$Q_2->e2->n = "2";
$Q_2->e3->n = "3";
$Q_2->e4->n = "4";
$Q_2->e5->n = "5";
$Q_2->e6->n = "6";
$Q_2->e7->n = "7";
$Q_2->e8->n = "8";
$Q_2->e9->n = "9";
$Q_2->e10->n = "10";

$Q_2->e1->q = "I've got a hangover. I drank too much last night.";
$Q_2->e2->q = "I'm broke. I spent all my money on the horses.";
$Q_2->e3->q = "It's raining. I didn't bring an umbrella.";
$Q_2->e4->q = "I fell into a hole. I didn't look where I was going.";
$Q_2->e5->q = "I can't do my homework. I didn't pay attention in class.";
$Q_2->e6->q = "I feel sick. I ate too much for lunch.";
$Q_2->e7->q = "I've missed my plane. I left home too late.";
$Q_2->e8->q = "I got lost. I didn't take a compass with me.";
$Q_2->e9->q = "I can't remember what you told me to do. I didn't pay attention.";
$Q_2->e10->q = "Someone has stolen my bike. I didn't lock it up.";

$Q_2->e1->aw = "You shouldn't have drunk too much last night";
$Q_2->e2->aw = "You shouldn't have spent all your money on the horses";
$Q_2->e3->aw = "You should've brought an umbrella";
$Q_2->e4->aw = "You should've looked where you were going";
$Q_2->e5->aw = "You should've paid attention";
$Q_2->e6->aw = "You shouldn't have eaten too much for lunch";
$Q_2->e7->aw = "You shouldn't have left home too late";
$Q_2->e8->aw = "You should've taken a compass with you";
$Q_2->e9->aw = "You should've paid attention";
$Q_2->e10->aw = "You should've locked it up";

$Q_3 = new stdClass();
$Q_3->e1 = new stdClass();
$Q_3->e2 = new stdClass();
$Q_3->e3 = new stdClass();
$Q_3->e4 = new stdClass();
$Q_3->e5 = new stdClass();
$Q_3->e6 = new stdClass();
$Q_3->e7 = new stdClass();
$Q_3->e8 = new stdClass();
$Q_3->e9 = new stdClass();
$Q_3->e10 = new stdClass();

$Q_3->e1->n = "1";
$Q_3->e2->n = "2";
$Q_3->e3->n = "3";
$Q_3->e4->n = "4";
$Q_3->e5->n = "5";
$Q_3->e6->n = "6";
$Q_3->e7->n = "7";
$Q_3->e8->n = "8";
$Q_3->e9->n = "9";
$Q_3->e10->n = "10";

$Q_3->e1->q = "My eyes need testing.";
$Q_3->e2->q = "My trousers need shortening.";
$Q_3->e3->q = "My tooth needs taking out.";
$Q_3->e4->q = "My car oil needs changing.";
$Q_3->e5->q = "My watch battery needs replacing.";
$Q_3->e6->q = "My drains need sweeping.";
$Q_3->e7->q = "That clock needs fixing.";
$Q_3->e8->q = "That knife needs sharpening.";
$Q_3->e9->q = "The car battery needs recharging.";
$Q_3->e10->q = "This suit needs dry-cleaning.";

$Q_3->e1->aw = "You ought to get them tested";
$Q_3->e2->aw = "You ought to get them shortened";
$Q_3->e3->aw = "You ought to get it taken out";
$Q_3->e4->aw = "You ought to get it changed";
$Q_3->e5->aw = "You ought to get it replaced";
$Q_3->e6->aw = "You ought to get them swept";
$Q_3->e7->aw = "You ought to get it fixed";
$Q_3->e8->aw = "You ought to get it sharpened";
$Q_3->e9->aw = "You ought to get it recharged";
$Q_3->e10->aw = "You ought to get it dry-cleaned";

$Q_4 = new stdClass();
$Q_4->e1 = new stdClass();
$Q_4->e2 = new stdClass();
$Q_4->e3 = new stdClass();
$Q_4->e4 = new stdClass();
$Q_4->e5 = new stdClass();
$Q_4->e6 = new stdClass();
$Q_4->e7 = new stdClass();
$Q_4->e8 = new stdClass();
$Q_4->e9 = new stdClass();
$Q_4->e10 = new stdClass();

$Q_4->e1->n = "1";
$Q_4->e2->n = "2";
$Q_4->e3->n = "3";
$Q_4->e4->n = "4";
$Q_4->e5->n = "5";
$Q_4->e6->n = "6";
$Q_4->e7->n = "7";
$Q_4->e8->n = "8";
$Q_4->e9->n = "9";
$Q_4->e10->n = "10";

$Q_4->e1->q = "I've lost my purse.";
$Q_4->e2->q = "My husband keeps beating me.";
$Q_4->e3->q = "I'm exhausted.";
$Q_4->e4->q = "There's no future in my job.";
$Q_4->e5->q = "I'm really overweight.";
$Q_4->e6->q = "I got sunburnt yesterday.";
$Q_4->e7->q = "My new car keeps breaking down.";
$Q_4->e8->q = "This milk smells sour.";
$Q_4->e9->q = "I've got a bad cough.";
$Q_4->e10->q = "I've got indigestion.";

$Q_4->e1->q2 = "(report it)";
$Q_4->e2->q2 = "(leave him)";
$Q_4->e3->q2 = "(go to bed early)";
$Q_4->e4->q2 = "(re-train)";
$Q_4->e5->q2 = "(eat less fat)";
$Q_4->e6->q2 = "(stay out of the sun)";
$Q_4->e7->q2 = "(take it back)";
$Q_4->e8->q2 = "(throw it away)";
$Q_4->e9->q2 = "(quit smoking)";
$Q_4->e10->q2 = "(eat more slowly)";

$Q_4->e1->aw = "If I were you, I'd report it";
$Q_4->e2->aw = "If I were you, I'd leave him";
$Q_4->e3->aw = "If I were you, I'd go to bed early";
$Q_4->e4->aw = "If I were you, I'd re-train";
$Q_4->e5->aw = "If I were you, I'd eat less fat";
$Q_4->e6->aw = "If I were you, I'd stay out of the sun";
$Q_4->e7->aw = "If I were you, I'd take it back";
$Q_4->e8->aw = "If I were you, I'd throw it away";
$Q_4->e9->aw = "If I were you, I'd quit smoking";
$Q_4->e10->aw = "If I were you, I'd eat more slowly";

@endphp


<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-16">
            <h4 class="mt-0">{{$pageTitle['sub_menu_name']}}</h4>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#exercise1" data-toggle="tab" aria-expanded="true" class="nav-link active">
                        <span class="d-inline-block d-sm-none"><i class="fas fa-home"></i></span>
                        <span class="d-none d-sm-inline-block">Exercise 1</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#exercise2" data-toggle="tab" aria-expanded="false" class="nav-link">
                        <span class="d-inline-block d-sm-none"><i class="far fa-user"></i></span>
                        <span class="d-none d-sm-inline-block">Exercise 2</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#exercise3" data-toggle="tab" aria-expanded="false" class="nav-link">
                        <span class="d-inline-block d-sm-none"><i class="far fa-user"></i></span>
                        <span class="d-none d-sm-inline-block">Exercise 3</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#exercise4" data-toggle="tab" aria-expanded="false" class="nav-link">
                        <span class="d-inline-block d-sm-none"><i class="far fa-user"></i></span>
                        <span class="d-none d-sm-inline-block">Exercise 4</span>
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="exercise1">

                    <p>Listen to the example:</p>
                    <p class="p-0 m-0"><b>e.g. </b>You ought to get your eyes tested.</p>
                    <p class="p-0 m-0"><b>Answer: </b>It's time you got your eyes tested.</p>
                    <p class="pt-2">Now you do it: </p>

                    <table class="w-100">
                        @foreach($Q_1 as $index => $Q_1)
                        <tr>
                            <td style="width: 23px;">{{$Q_1->n}}.</td>
                            <td colspan="2">{{$Q_1->q}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="pt-2" style="width: 80px;vertical-align:middle;"><b>Answer: </b></td>
                            <td class="pt-2">
                                <input type="text" class="form-control w-75 q-val1" show-aw="Q_1-{{$index}}"
                                    aw="{{$Q_1->aw}}">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="pb-2">
                                <span class="text-danger Q_1-{{$index}} aw1">{{$Q_1->aw}}</span>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    <div class="mt-3 d-flex justify-content-center">
                        <button id="check-answer1" class="btn btn-info">Check Answers</button>
                    </div>
                </div>

                <div class="tab-pane fade" id="exercise2">

                    <p>Listen to the example:</p>
                    <p class="p-0 m-0"><b>e.g. </b>I'm tired. I went to bed too late last night. </p>
                    <p class="p-0 m-0"><b>Answer: </b>You shouldn't have gone to bed too late last night.</p>
                    <p class="pt-2 m-0"><b>e.g. </b>I failed the exam. I didn't work hard enough.</p>
                    <p class="p-0 m-0"><b>Answer: </b>You should have worked hard enough.</p>
                    <p class="pt-2">Now you do it: </p>

                    <table class="w-100">
                        @foreach($Q_2 as $index => $Q_2)
                        <tr>
                            <td style="width: 23px;">{{$Q_2->n}}.</td>
                            <td colspan="2">{{$Q_2->q}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="pt-2" style="width: 80px;vertical-align:middle;"><b>Answer: </b></td>
                            <td class="pt-2">
                                <input type="text" class="form-control w-75 q-val2" show-aw="Q_2-{{$index}}"
                                    aw="{{$Q_2->aw}}">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="pb-2">
                                <span class="text-danger Q_2-{{$index}} aw2">{{$Q_2->aw}}</span>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    <div class="mt-3 d-flex justify-content-center">
                        <button id="check-answer2" class="btn btn-info">Check Answers</button>
                    </div>
                </div>

                <div class="tab-pane fade" id="exercise3">

                    <p>Listen to the example:</p>
                    <p class="p-0 m-0"><b>e.g. </b>My hair needs cutting.</p>
                    <p class="p-0 m-0"><b>Answer: </b>You ought to get it cut</p>
                    <p class="pt-2">Now you do it: </p>

                    <table class="w-100">
                        @foreach($Q_3 as $index => $Q_3)
                        <tr>
                            <td style="width: 23px;">{{$Q_3->n}}.</td>
                            <td colspan="2">{{$Q_3->q}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="pt-2" style="width: 80px;vertical-align:middle;"><b>Answer: </b></td>
                            <td class="pt-2">
                                <input type="text" class="form-control w-75 q-val3" show-aw="Q_3-{{$index}}"
                                    aw="{{$Q_3->aw}}">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="pb-2">
                                <span class="text-danger Q_3-{{$index}} aw3">{{$Q_3->aw}}</span>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    <div class="mt-3 d-flex justify-content-center">
                        <button id="check-answer3" class="btn btn-info">Check Answers</button>
                    </div>
                </div>

                <div class="tab-pane fade" id="exercise4">

                    <p>Listen to the example:</p>
                    <p class="p-0 m-0"><b>e.g. </b><span class="pr-4">I've got a bad headache.</span><b>(take a
                            pill)</b></p>
                    <p class="p-0 m-0"><b>Answer: </b>If I were you, I'd take a pill.</p>
                    <p class="pt-2">Now you do it: </p>

                    <table class="w-100">
                        @foreach($Q_4 as $index => $Q_4)
                        <tr>
                            <td style="width: 23px;">{{$Q_4->n}}.</td>
                            <td colspan="2" style="width: 150px;">{{$Q_4->q}}</td>
                            <td><b>{{$Q_4->q2}}</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="pt-2" style="width: 80px;vertical-align:middle;"><b>Answer: </b></td>
                            <td colspan="2" class="pt-2">
                                <input type="text" class="form-control w-75 q-val4" show-aw="Q_4-{{$index}}"
                                    aw="{{$Q_4->aw}}">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td colspan="2" class="pb-2">
                                <span class="text-danger Q_4-{{$index}} aw4">{{$Q_4->aw}}</span>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    <div class="mt-3 d-flex justify-content-center">
                        <button id="check-answer4" class="btn btn-info">Check Answers</button>
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
                    {{$pageTitle['sub_menu_name'] }}</h4>
            </div>
            <div class="modal-body text-center">
                <button id="sound-intro" class="btn btn-bordered-primary">Play Sound</button>
                <audio data-sound="sound-intro">
                    <source
                        src="{{ asset('public/isac_listening/'.$pageTitle['sub_menu_type'] .'/' .$pageTitle['name_audio']) }}"
                        type="audio/mp3">
                </audio>
            </div>
        </div>
    </div>
</div>

@section('button-control')

<!-- <button id="check-answer" class="btn btn-info">Check Answers</button> -->

@endsection

@section('js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

<script>
    $('#check-answer1').on('click', () => {
        $('#check-answer1').prop('disabled', true)
        $('.q-val1').each((idx, item) => {
            if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'), item)
            else
                show_error(item)
        })
        $('.aw1').removeClass('aw1')
    })
    $('#check-answer2').on('click', () => {
        $('#check-answer2').prop('disabled', true)
        $('.q-val2').each((idx, item) => {
            if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'), item)
            else
                show_error(item)
        })
        $('.aw2').removeClass('aw2')
    })
    $('#check-answer3').on('click', () => {
        $('#check-answer3').prop('disabled', true)
        $('.q-val3').each((idx, item) => {
            if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'), item)
            else
                show_error(item)
        })
        $('.aw3').removeClass('aw3')
    })
    $('#check-answer4').on('click', () => {
        $('#check-answer4').prop('disabled', true)
        $('.q-val4').each((idx, item) => {
            if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'), item)
            else
                show_error(item)
        })
        $('.aw4').removeClass('aw4')
    })

    function show_aw(aw, item) {
        $(item).addClass('border border-success')
        $('.' + aw).addClass('text-success')
        $('.' + aw).removeClass('text-danger')
    }

    function show_error(item) {
        $(item).addClass('border border-danger')
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
    })

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
    })
</script>
@stop