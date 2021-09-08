@section('css')
<style>
    table tr .awswer {
        vertical-align: middle;
    }


    .aw1,.aw2,.aw3,.aw4,.aw5,.aw6 {
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

$Q_1->e1->q = "'You are lazy,’ Mum said to Jack.";
$Q_1->e2->q = "'You ate all the cake,’ Mary said to her sister.";
$Q_1->e3->q = "'You've lost my pencil,’ Jeff said to his younger brother.";
$Q_1->e4->q = "'You're a liar,’ the judge said to the defendant.";
$Q_1->e5->q = "'You robbed the bank,’ the police officer said to the woman.";
$Q_1->e6->q = "'You cheated in the exam,’ the examiner said to the candidate.";
$Q_1->e7->q = "'You've wasted all your money,’ Bob said to his son.";
$Q_1->e8->q = "'You've created a monster,’ the man said to Frankenstein.";
$Q_1->e9->q = "'You broke the window,' the woman said to the boys.";
$Q_1->e10->q = "'You were driving too fast,' the police officer said to the motorist.";

$Q_1->e1->aw = "Mum accused Jack of being lazy";
$Q_1->e2->aw = "Mary accused her sister of eating all the cake";
$Q_1->e3->aw = "Jeff accused his younger brother of losing his pencil";
$Q_1->e4->aw = "The judge accused the defendant of being a liar";
$Q_1->e5->aw = "The police officer accused the woman of robbing the bank";
$Q_1->e6->aw = "The examiner accused the candidate of cheating in the exam";
$Q_1->e7->aw = "Bob accused his son of wasting all his money";
$Q_1->e8->aw = "The man accused Frankenstein of creating a monster";
$Q_1->e9->aw = "The woman accused the boys of breaking the window";
$Q_1->e10->aw = "The police officer accused the motorist of driving too fast";

$Q_2 = new stdClass();
$Q_2->e1 = new stdClass();
$Q_2->e2 = new stdClass();
$Q_2->e3 = new stdClass();
$Q_2->e4 = new stdClass();
$Q_2->e5 = new stdClass();
$Q_2->e6 = new stdClass();
$Q_2->e7 = new stdClass();
$Q_2->e8 = new stdClass();

$Q_2->e1->n = "1";
$Q_2->e2->n = "2";
$Q_2->e3->n = "3";
$Q_2->e4->n = "4";
$Q_2->e5->n = "5";
$Q_2->e6->n = "6";
$Q_2->e7->n = "7";
$Q_2->e8->n = "8";

$Q_2->e1->q = "'I can't read your writing,’ said the little boy.";
$Q_2->e2->q = "'I don't like my nose,’ said Carole.";
$Q_2->e3->q = "'I won't be late,’ said Joseph.";
$Q_2->e4->q = "'I didn't go to the shops,' said Aunty Hilda.";
$Q_2->e5->q = "'I've already seen this film,’ said Rita.";
$Q_2->e6->q = "'I'm thirsty,’ said Richard.";
$Q_2->e7->q = "'I can't come to your party,' said Sue.";
$Q_2->e8->q = "'I'll finish the job tomorrow,’ said the workman.";

$Q_2->e1->aw = "The little boy said he couldn't read my writing";
$Q_2->e2->aw = "Carole said she didn't like her nose";
$Q_2->e3->aw = "Joseph said he wouldn't be late";
$Q_2->e4->aw = "Aunty Hilda said she hadn't been to the shops";
$Q_2->e5->aw = "Rita said she had already seen that film";
$Q_2->e6->aw = "Richard said he was thirsty";
$Q_2->e7->aw = "Sue said she couldn't come to my party";
$Q_2->e8->aw = "The workman said he would finish the job the next day";

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

$Q_3->e1->q = "'Who broke this window?'";
$Q_3->e2->q = "'How much does it cost?'";
$Q_3->e3->q = "'Where can I buy some chillies?'";
$Q_3->e4->q = "'When did the show begin?'";
$Q_3->e5->q = "'Why did she run away?'";
$Q_3->e6->q = "'Which suit are you going to wear?'";
$Q_3->e7->q = "'Who did you speak to?'";
$Q_3->e8->q = "'What's in that bag?'";
$Q_3->e9->q = "'When did the prisoner escape?'";
$Q_3->e10->q = "'Why is the door locked?'";

$Q_3->e1->aw = "I don't know who broke that window";
$Q_3->e2->aw = "I don't know how much it costs";
$Q_3->e3->aw = "I don't know where you can buy some chillies";
$Q_3->e4->aw = "I don't know when the show began";
$Q_3->e5->aw = "I don't know why she ran away";
$Q_3->e6->aw = "I don't know which suit I'm going to wear";
$Q_3->e7->aw = "I don't know who I spoke to";
$Q_3->e8->aw = "I don't know what is in that bag";
$Q_3->e9->aw = "I don't know when the prisoner escaped";
$Q_3->e10->aw = "I don't know why the door is locked";

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

$Q_4->e1->q = "'Is it raining?'";
$Q_4->e2->q = "‘Will it shrink in the wash?'";
$Q_4->e3->q = "'Do you like me?'";
$Q_4->e4->q = "'Have you ever been to New Zealand?'";
$Q_4->e5->q = "'Did you watch TV?'";
$Q_4->e6->q = "'Are you playing badminton this evening?'";
$Q_4->e7->q = "'Can you speak Japanese?'";
$Q_4->e8->q = "'Does the dog bite?'";
$Q_4->e9->q = "'Were you at the club last night?'";
$Q_4->e10->q = "'Have you seen my pencil?'";

$Q_4->e1->aw = "He wanted to know if it was raining";
$Q_4->e2->aw = "She wanted to know if it would shrink in the wash";
$Q_4->e3->aw = "He wanted to know if I liked him";
$Q_4->e4->aw = "She wanted to know if I had ever been to New Zealand";
$Q_4->e5->aw = "He wanted to know if I had watched TV";
$Q_4->e6->aw = "She wanted to know if I was playing badminton that evening";
$Q_4->e7->aw = "He wanted to know if I could speak Japanese";
$Q_4->e8->aw = "She wanted to know if the dog bit";
$Q_4->e9->aw = "He wanted to know if I had been at the club the night before";
$Q_4->e10->aw = "She wanted to know if I had seen her pencil";

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
                    <p class="p-0 m-0"><b>e.g. </b>'You stole my watch,’ the girl said to the man.</p>
                    <p class="p-0 m-0"><b>Answer: </b>The girl accused the man of stealing her watch. </p>
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
                                <input type="text" class="form-control w-75 q-val1" show-aw="Q_1-{{$index}}" aw="{{$Q_1->aw}}">
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
                    <p class="p-0 m-0"><b>e.g. </b>'I'm tired,' said Fred. </p>
                    <p class="p-0 m-0"><b>Answer: </b>Fred said he was tired.</p>
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
                                <input type="text" class="form-control w-75 q-val2" show-aw="Q_2-{{$index}}" aw="{{$Q_2->aw}}">
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
                    <p class="p-0 m-0"><b>e.g. </b>'Where does he live?' </p>
                    <p class="p-0 m-0"><b>Answer: </b>I don't know where he lives.</p>
                    <p class="pt-2 m-0"><b>e.g. </b></p>
                    <p class="p-0 m-0"><b>Answer: </b></p>
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
                                <input type="text" class="form-control w-75 q-val3" show-aw="Q_3-{{$index}}" aw="{{$Q_3->aw}}">
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
                    <p class="p-0 m-0"><b>e.g. </b>'Have you finished?'</p>
                    <p class="p-0 m-0"><b>Answer: </b>He wanted to know if I had finished. </p>
                    <p class="pt-2">Now you do it: </p>

                    <table class="w-100">
                        @foreach($Q_4 as $index => $Q_4)
                        <tr>
                            <td style="width: 23px;">{{$Q_4->n}}.</td>
                            <td colspan="2">{{$Q_4->q}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="pt-2" style="width: 80px;vertical-align:middle;"><b>Answer: </b></td>
                            <td class="pt-2">
                                <input type="text" class="form-control w-75 q-val4" show-aw="Q_4-{{$index}}" aw="{{$Q_4->aw}}">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="pb-2">
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
    $('#check-answer5').on('click', () => {
        $('#check-answer5').prop('disabled', true)
        $('.q-val5').each((idx, item) => {
            if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'), item)
            else
                show_error(item)
        })
        $('.aw5').removeClass('aw5')
    })
    $('#check-answer6').on('click', () => {
        $('#check-answer6').prop('disabled', true)
        $('.q-val6').each((idx, item) => {
            if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'), item)
            else
                show_error(item)
        })
        $('.aw6').removeClass('aw6')
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