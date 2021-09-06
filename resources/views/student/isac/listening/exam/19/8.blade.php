@section('css')
<style>
    table tr .awswer {
        vertical-align: middle;
    }


    .aw1,.aw2,.aw3,.aw4,.aw5,.aw6 {
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

$Q_1->e1->q = "My car is faster than yours.";
$Q_1->e2->q = "John is taller than Simon.";
$Q_1->e3->q = "This suitcase is heavier than that one.";
$Q_1->e4->q = "Gold is more valuable than silver.";
$Q_1->e5->q = "The Nile is longer than the Amazon.";
$Q_1->e6->q = "You are better at tennis than I am.";
$Q_1->e7->q = "He knows more about cars than I do.";
$Q_1->e8->q = "She reads more books than I do.";
$Q_1->e9->q = "You drive more carefully than I do.";
$Q_1->e10->q = "She can swim further than I can.";

$Q_1->e1->aw = "Your car isn't as fast as mine";
$Q_1->e2->aw = "Simon isn't as tall as John";
$Q_1->e3->aw = "That suitcase isn't as heavy as this one";
$Q_1->e4->aw = "Silver isn't as valuable as gold";
$Q_1->e5->aw = "The Amazon isn't as long as the Nile";
$Q_1->e6->aw = "I am not as good at tennis as you are";
$Q_1->e7->aw = "I don't know as much about cars as he does";
$Q_1->e8->aw = "I don't read as many books as she does";
$Q_1->e9->aw = "I don't drive as carefully as you do";
$Q_1->e10->aw = "I can't swim as far as she can";

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

$Q_2->e1->q = "As you use more electricity so you have to pay more.";
$Q_2->e2->q = "As you grow older so you become wiser.";
$Q_2->e3->q = "As you eat more so you put on more weight.";
$Q_2->e4->q = "As you practise more so you become more fluent.";
$Q_2->e5->q = "As you earn more so you spend more.";
$Q_2->e6->q = "As the day becomes hotter so you need to drink more.";
$Q_2->e7->q = "As you drive faster so you use more petrol.";
$Q_2->e8->q = "As Samson's hair grew longer so he became stronger.";
$Q_2->e9->q = "As you save more so you become richer.";
$Q_2->e10->q = "As the rain became heavier so the river flowed faster.";

$Q_2->e1->aw = "The more electricity you use, the more you have to pay";
$Q_2->e2->aw = "The older you grow, the wiser you become";
$Q_2->e3->aw = "The more you eat, the more weight you put on";
$Q_2->e4->aw = "The more you practise, the more fluent you become";
$Q_2->e5->aw = "The more you earn, the more you spend";
$Q_2->e6->aw = "The hotter the day becomes, the more you need to drink";
$Q_2->e7->aw = "The faster you drive, the more petrol you use";
$Q_2->e8->aw = "The longer Samson's hair grew, the stronger he became";
$Q_2->e9->aw = "The more you save, the richer you become";
$Q_2->e10->aw = "The heavier the rain became, the faster the river flowed";

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

$Q_3->e1->q = "No-one in the world can run as fast as he can.";
$Q_3->e2->q = "No-one in the class is as clever as he is.";
$Q_3->e3->q = "No-one in the family is as tall as he is.";
$Q_3->e4->q = "No-one in the world plays golf as well as she does.";
$Q_3->e5->q = "No-one in the street drives as carefully as he does.";
$Q_3->e6->q = "No-one in the state can swim as fast as she can.";
$Q_3->e7->q = "No-one in the world is as strong as he is.";
$Q_3->e8->q = "No-one in the country sings as well as she does.";
$Q_3->e9->q = "No-one in the state plays the piano as well as he does.";
$Q_3->e10->q = "No-one in the family cooks as well as she does.";

$Q_3->e1->aw = "He is the fastest runner in the world";
$Q_3->e2->aw = "He is the cleverest person in the class";
$Q_3->e3->aw = "He is the tallest person in the family";
$Q_3->e4->aw = "She is the best golf player in the world";
$Q_3->e5->aw = "He is the most careful driver in the street";
$Q_3->e6->aw = "She is the fastest swimmer in the state";
$Q_3->e7->aw = "He is the strongest person in the world";
$Q_3->e8->aw = "She is the best singer in the country";
$Q_3->e9->aw = "He is the best piano player in the state";
$Q_3->e10->aw = "She is the best cook in the family";

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
                    <p class="p-0 m-0"><b>e.g. </b>Sydney is bigger than Perth. </p>
                    <p class="p-0 m-0"><b>Answer: </b>Perth isn't as big as Sydney.</p>
                    <p class="pt-2 m-0"><b>e.g. </b>My car uses more petrol than hers does. </p>
                    <p class="p-0 m-0"><b>Answer: </b>Her car doesn't use as much petrol as mine does. </p>
                    <p class="pt-2">Now you do it: </p>

                    <table class="w-100">
                        @foreach($Q_1 as $index => $Q_1)
                        <tr>
                            <td style="width: 23px;">{{$Q_1->n}}.</td>
                            <td colspan="2">{{$Q_1->q}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="width: 80px;"><b>Answer: </b></td>
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

                    <h3>The more..., the more...</h3>
                    <p>Listen to the example:</p>
                    <p class="p-0 m-0"><b>e.g. </b>As he grew older so he became more forgetful.</p>
                    <p class="p-0 m-0"><b>Answer: </b>The older he grew, the more forgetful he became. </p>
                    <p class="pt-2 m-0"><b>e.g. </b>As the temperature rose so I sweated more profusely.</p>
                    <p class="p-0 m-0"><b>Answer: </b>The more the temperature rose, the more profusely I sweated. </p>
                    <p class="pt-2">Now you do it: </p>

                    <table class="w-100">
                        @foreach($Q_2 as $index => $Q_2)
                        <tr>
                            <td style="width: 23px;">{{$Q_2->n}}.</td>
                            <td colspan="2">{{$Q_2->q}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="width: 80px;"><b>Answer: </b></td>
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
                    <p class="p-0 m-0"><b>e.g. </b>No-one in the club plays tennis as well as he does. </p>
                    <p class="p-0 m-0"><b>Answer: </b>He's the best tennis player in the club. </p>
                    <p class="pt-2">Now you do it: </p>

                    <table class="w-100">
                        @foreach($Q_3 as $index => $Q_3)
                        <tr>
                            <td style="width: 23px;">{{$Q_3->n}}.</td>
                            <td colspan="2">{{$Q_3->q}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="width: 80px;"><b>Answer: </b></td>
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