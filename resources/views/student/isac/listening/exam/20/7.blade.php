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

$Q_1->e1->q = "As I am a peace-loving person, I turned the other cheek.";
$Q_1->e2->q = "Since the car had broken down, we had to walk to the nearest village.";
$Q_1->e3->q = "The weather was unsettled so we had to cancel the barbecue.";
$Q_1->e4->q = "She didn't feel very well so she stayed in bed all day.";
$Q_1->e5->q = "He went on a diet because he was overweight.";
$Q_1->e6->q = "He arrived late because he had been caught in the rush-hour traffic.";
$Q_1->e7->q = "She hadn't had any formal education so she couldn't read or write.";
$Q_1->e8->q = "She had previously lived in Italy so she was quite fluent in Italian.";
$Q_1->e9->q = "The road was barricaded so we took a diversion.";
$Q_1->e10->q = "We'd had enough so we called it a day.";

$Q_1->e1->aw = "Being a peace-loving person, I turned the other cheek";
$Q_1->e2->aw = "The car having broken down, we had to walk to the nearest village";
$Q_1->e3->aw = "The weather being unsettled, we had to cancel the barbecue";
$Q_1->e4->aw = "Not feeling very well, she stayed in bed all day";
$Q_1->e5->aw = "Being overweight, he went on a diet";
$Q_1->e6->aw = "Having been caught in the rush-hour traffic, he arrived late";
$Q_1->e7->aw = "Not having had any formal education, she couldn't read or write";
$Q_1->e8->aw = "Having previously lived in Italy, she was quite fluent in Italian";
$Q_1->e9->aw = "The road being barricaded, we took a diversion";
$Q_1->e10->aw = "Having had enough, we called it a day";

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

$Q_2->e1->q = "After I had finished the speech, I answered a few questions.";
$Q_2->e2->q = "After he had completed the form, he handed it in at the desk.";
$Q_2->e3->q = "After we had paid the bill, we called for a taxi.";
$Q_2->e4->q = "After they had checked the figures, they all agreed there was a mistake.";
$Q_2->e5->q = "After they had travelled to Darwin by car, they then flew back to Perth.";
$Q_2->e6->q = "After we had eaten as much as we could, we then settled down to watch TV.";
$Q_2->e7->q = "After I had repaid my debts, I felt great relief.";
$Q_2->e8->q = "After she had told everyone she was getting married, she then called it off.";
$Q_2->e9->q = "After he had served the last customer, he closed the shop.";
$Q_2->e10->q = "After they had redecorated the house, they put it on the market.";

$Q_2->e1->aw = "Having finished the speech, I answered a few questions";
$Q_2->e2->aw = "Having completed the form, he handed it in at the desk";
$Q_2->e3->aw = "Having paid the bill, we called for a taxi";
$Q_2->e4->aw = "Having checked the figures, they all agreed there was a mistake";
$Q_2->e5->aw = "Having travelled to Darwin by car, they flew back to Perth";
$Q_2->e6->aw = "Having eaten as much as we could, we settled down to watch TV";
$Q_2->e7->aw = "Having repaid my debts, I felt great relief";
$Q_2->e8->aw = "Having told everyone she was getting married, she called it off";
$Q_2->e9->aw = "Having served the last customer, he closed the shop";
$Q_2->e10->aw = "Having redecorated the house, they put it on the market";

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
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="exercise1">

                    <h3>Cause and effect</h3>
                    <p>Listen to the example:</p>
                    <p class="p-0 m-0"><b>e.g. </b>I don't like sleeping alone because I'm afraid of the dark.</p>
                    <p class="p-0 m-0"><b>Answer: </b>Being afraid of the dark, I don't like sleeping alone. </p>
                    <p class="pt-2 m-0"><b>e.g. </b>The airport was fog-bound so the aircraft was diverted. </p>
                    <p class="p-0 m-0"><b>Answer: </b>The airport being fogbound, the aircraft was diverted.</p>
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

                    <h3>Sequence</h3>
                    <p>Listen to the example:</p>
                    <p class="p-0 m-0"><b>e.g. </b>After she had turned off the television, she went to bed. </p>
                    <p class="p-0 m-0"><b>Answer: </b>Having turned off the television, she went to bed. </p>
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