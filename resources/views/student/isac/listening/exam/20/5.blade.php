@section('css')
<style>
    table tr .awswer {
        vertical-align: middle;
    }

    .aw1,
    .aw2,
    .aw3 {
        display: none;
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

$Q_1->e1->q = "The fish has disappeared.";
$Q_1->e2->q = "I can't find my key.";
$Q_1->e3->q = "The ground is wet.";
$Q_1->e4->q = "The ship was deserted.";
$Q_1->e5->q = "Three girls disappeared.";
$Q_1->e6->q = "The woman was killed in the fire. ";
$Q_1->e7->q = "The fire started in the kitchen.";
$Q_1->e8->q = "The swimmer disappeared.";
$Q_1->e9->q = "My leg is bleeding.";
$Q_1->e10->q = "We've lost contact.";

$Q_1->e1->q2 = "Perhaps the cat ate it. ";
$Q_1->e2->q2 = "Perhaps you've lost it. ";
$Q_1->e3->q2 = "Perhaps it's been raining. ";
$Q_1->e4->q2 = "Perhaps the crew mutinied. ";
$Q_1->e5->q2 = "Perhaps they fell off the rock.";
$Q_1->e6->q2 = "Perhaps she was smoking in bed. ";
$Q_1->e7->q2 = "Perhaps the oil caught fire. ";
$Q_1->e8->q2 = "Perhaps a shark got him. ";
$Q_1->e9->q2 = "Perhaps the cat scratched it. ";
$Q_1->e10->q2 = "Perhaps the wind blew down the cables.";

$Q_1->e1->aw = "The cat might have eaten the fish";
$Q_1->e2->aw = "You might have lost your key";
$Q_1->e3->aw = "It might have been raining";
$Q_1->e4->aw = "The crew might have mutinied";
$Q_1->e5->aw = "The girls might have fallen off the rock";
$Q_1->e6->aw = "The woman might have been smoking in bed";
$Q_1->e7->aw = "The oil might have caught fire";
$Q_1->e8->aw = "A shark might have got the swimmer";
$Q_1->e9->aw = "The cat might have scratched your leg";
$Q_1->e10->aw = "The wind might have blown down the cables";

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

$Q_2->e1->q = "I wonder who mended the fuse.";
$Q_2->e2->q = "I wonder who did the washing-up.";
$Q_2->e3->q = "I wonder who painted the fence.";
$Q_2->e4->q = "I wonder who cut the grass.";
$Q_2->e5->q = "I wonder who turned the TV off.";
$Q_2->e6->q = "I wonder who fed the dog.";
$Q_2->e7->q = "I wonder who drank all the milk.";
$Q_2->e8->q = "I wonder who ate all the cake.";
$Q_2->e9->q = "I wonder who blew out the candle?";
$Q_2->e10->q = "I wonder who sent me this Valentine?";

$Q_2->e1->q2 = "It was Bill, for sure.";
$Q_2->e2->q2 = "It was Charlie, for sure.";
$Q_2->e3->q2 = "It was Judy, for sure.";
$Q_2->e4->q2 = "It was the gardener, for sure. ";
$Q_2->e5->q2 = "It was Susan, for sure. ";
$Q_2->e6->q2 = "It was Tim, for sure. ";
$Q_2->e7->q2 = "It was Simon, for sure. ";
$Q_2->e8->q2 = "It was Edith, for sure.";
$Q_2->e9->q2 = "It was the wind, for sure. ";
$Q_2->e10->q2 = "It was Grant, for sure. ";

$Q_2->e1->aw = "Bill must have mended the fuse";
$Q_2->e2->aw = "Charlie must have done the washing up";
$Q_2->e3->aw = "Judy must have painted the fence";
$Q_2->e4->aw = "The gardener must have cut the grass";
$Q_2->e5->aw = "Susan must have turned the TV off";
$Q_2->e6->aw = "Tim must have fed the dog";
$Q_2->e7->aw = "Simon must have drunk all the milk";
$Q_2->e8->aw = "Edith must have eaten all the cake";
$Q_2->e9->aw = "The wind must have blown out the candle";
$Q_2->e10->aw = "Grant must have sent you this Valentine";

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

$Q_3->e1->q = "The man escaped from the prison.";
$Q_3->e2->q = "The girl knew my name.";
$Q_3->e3->q = "Someone has stolen my wallet.";
$Q_3->e4->q = "There's a letter in the mail-box.";
$Q_3->e5->q = "I can't find Sally.";
$Q_3->e6->q = "The plane hasn't arrived yet.";
$Q_3->e7->q = "There was an explosion.";
$Q_3->e8->q = "I've misplaced my book.";
$Q_3->e9->q = "There's graffiti on the wall.";
$Q_3->e10->q = "I've just received a Valentine.";

$Q_3->e1->q2 = "I wonder how it happened. ";
$Q_3->e2->q2 = "I wonder how she knew. ";
$Q_3->e3->q2 = "I wonder who it was. ";
$Q_3->e4->q2 = "I wonder when the postman came.";
$Q_3->e5->q2 = "I wonder where she's gone. ";
$Q_3->e6->q2 = "I wonder what's happened to it.";
$Q_3->e7->q2 = "I wonder what caused it. ";
$Q_3->e8->q2 = "I wonder where you put it. ";
$Q_3->e9->q2 = "I wonder who painted it there. ";
$Q_3->e10->q2 = "I wonder who sent it. ";

$Q_3->e1->aw = "How could the man have escaped from prison?";
$Q_3->e2->aw = "How could the girl have known your name?";
$Q_3->e3->aw = "Who could have stolen your wallet?";
$Q_3->e4->aw = "When could the postman have come?";
$Q_3->e5->aw = "Where could Sally have gone?";
$Q_3->e6->aw = "What could have happened to the plane?";
$Q_3->e7->aw = "What could have caused the explosion?";
$Q_3->e8->aw = "Where could you have put your book?";
$Q_3->e9->aw = "Who could have painted the graffiti on the wall?";
$Q_3->e10->aw = "Who could have sent the Valentine?";

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
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="exercise1">

                    <p>Listen to the example:</p>
                    <p class="p-0 m-0"><b>e.g. </b><span class="pr-5">The window is broken.</span> <span>Perhaps the boys broke it.</span> </p>
                    <p class="p-0 m-0"><b>Answer: </b>The boys might have broken the window.</p>
                    <p class="pt-2">Now you do it: </p>

                    <table class="w-100">
                        @foreach($Q_1 as $index => $Q_1)
                        <tr>
                            <td style="width: 23px;">{{$Q_1->n}}.</td>
                            <td colspan="2">{{$Q_1->q}}</td>
                            <td>{{$Q_1->q2}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="pt-2" style="width: 80px;vertical-align:middle;"><b>Answer: </b></td>
                            <td colspan="2" class="pt-2">
                                <input type="text" class="form-control w-75 q-val1" show-aw="Q_1-{{$index}}" aw="{{$Q_1->aw}}">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td colspan="2" class="pb-2">
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
                    <p class="p-0 m-0"><b>e.g. </b><span class="pr-5">I wonder who cleaned the car. </span> <span>It was dad, for sure. </span> </p>
                    <p class="p-0 m-0"><b>Answer: </b>Dad must have cleaned the car. </p>
                    <p class="pt-2">Now you do it: </p>

                    <table class="w-100">
                        @foreach($Q_2 as $index => $Q_2)
                        <tr>
                            <td style="width: 23px;">{{$Q_2->n}}.</td>
                            <td colspan="2">{{$Q_2->q}}</td>
                            <td>{{$Q_2->q2}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="pt-2" style="width: 80px;vertical-align:middle;"><b>Answer: </b></td>
                            <td colspan="2" class="pt-2">
                                <input type="text" class="form-control w-75 q-val2" show-aw="Q_2-{{$index}}" aw="{{$Q_2->aw}}">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td colspan="2" class="pb-2">
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
                    <p class="p-0 m-0"><b>e.g. </b><span class="pr-5">I can't find the matches.</span> <span>I wonder where John put them.</span> </p>
                    <p class="p-0 m-0"><b>Answer: </b>Where could John have put the matches? </p>
                    <p class="pt-2 m-0"><b>e.g. </b><span class="pr-5">Someone has taken my pen. </span> <span>I wonder who it was. </span> </p>
                    <p class="p-0 m-0"><b>Answer: </b>Who could have taken your pen?</p>
                    <p class="pt-2">Now you do it: </p>

                    <table class="w-100">
                        @foreach($Q_3 as $index => $Q_3)
                        <tr>
                            <td style="width: 23px;">{{$Q_3->n}}.</td>
                            <td colspan="2" style="width: 150px;">{{$Q_3->q}}</td>
                            <td>{{$Q_3->q2}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="pt-2" style="width: 80px;vertical-align:middle;"><b>Answer: </b></td>
                            <td colspan="2" class="pt-2">
                                <input type="text" class="form-control w-75 q-val3" show-aw="Q_3-{{$index}}" aw="{{$Q_3->aw}}">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td colspan="2" class="pb-2">
                                <span class="text-danger Q_3-{{$index}} aw3">{{$Q_3->aw}}</span>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    <div class="mt-3 d-flex justify-content-center">
                        <button id="check-answer3" class="btn btn-info">Check Answers</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('button-control')

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

    function show_aw(aw, item) {
        $(item).addClass('border border-success')
        $('.' + aw).addClass('text-success')
        $('.' + aw).removeClass('text-danger')
    }

    function show_error(item) {
        $(item).addClass('border border-danger')
    }


    // $('#sound-modal').modal({
    //     'show': true,
    //     'backdrop': "static",
    //     'keyboard': false
    // })
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