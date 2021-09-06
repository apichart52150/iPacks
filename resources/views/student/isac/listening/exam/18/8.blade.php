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
$Q_1->e11 = new stdClass();
$Q_1->e12 = new stdClass();

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
$Q_1->e11->n = "11";
$Q_1->e12->n = "12";

$Q_1->e1->aw = "He is swimming";
$Q_1->e2->aw = "She is listening to the radio";
$Q_1->e3->aw = "He is eating";
$Q_1->e4->aw = "They are dancing";
$Q_1->e5->aw = "He is fishing";
$Q_1->e6->aw = "He is watching TV";
$Q_1->e7->aw = "She is riding a bike";
$Q_1->e8->aw = "They are writing letters";
$Q_1->e9->aw = "He is singing";
$Q_1->e10->aw = "He is painting";
$Q_1->e11->aw = "He is shaving";
$Q_1->e12->aw = "He is playing tennis";

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

$Q_2->e1->n = "1";
$Q_2->e2->n = "2";
$Q_2->e3->n = "3";
$Q_2->e4->n = "4";
$Q_2->e5->n = "5";
$Q_2->e6->n = "6";
$Q_2->e7->n = "7";
$Q_2->e8->n = "8";
$Q_2->e9->n = "9";

$Q_2->e1->q = "Are you riding a horse?";
$Q_2->e2->q = "Are you fishing?";
$Q_2->e3->q = "Are you eating?";
$Q_2->e4->q = "Are you smoking?";
$Q_2->e5->q = "Are you reading?";
$Q_2->e6->q = "Are you walking?";
$Q_2->e7->q = "Are you painting?";
$Q_2->e8->q = "Are you swimming?";
$Q_2->e9->q = "Are you singing?";

$Q_2->e1->aw = "No, I'm not";
$Q_2->e2->aw = "Yes, I am";
$Q_2->e3->aw = "Yes, I am";
$Q_2->e4->aw = "No, I'm not";
$Q_2->e5->aw = "Yes, I am";
$Q_2->e6->aw = "No, I'm not";
$Q_2->e7->aw = "Yes, I am";
$Q_2->e8->aw = "No, I'm not";
$Q_2->e9->aw = "Yes, I am";

$Q_2->e1->aw2 = "I'm riding a bicycle";
$Q_2->e2->aw2 = "";
$Q_2->e3->aw2 = "";
$Q_2->e4->aw2 = "I'm watching TV";
$Q_2->e5->aw2 = "";
$Q_2->e6->aw2 = "I'm running";
$Q_2->e7->aw2 = "";
$Q_2->e8->aw2 = "I'm playing table tennis";
$Q_2->e9->aw2 = "";

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

                    <p>Listen to the example:</p>
                    <p class="p-0 m-0"><b>e.g. </b></p>
                    <p class="p-0 m-0"><b>Answer: </b></p>
                    <p class="pt-2 m-0"><b>e.g. </b></p>
                    <p class="p-0 m-0"><b>Answer: </b></p>
                    <p class="pt-2">Now you do it: </p>

                    <div class="row">
                        @foreach($Q_1 as $index => $Q_1)
                        <div class="mt-4 text-center col-md-4">
                            <p>({{$Q_1->n}})</p>
                            <input type="text" class="form-control w-100 q-val1" show-aw="Q_1-{{$index}}"
                                aw="{{$Q_1->aw}}">
                            <p class="text-danger Q_1-{{$index}} aw1">{{$Q_1->aw}}</p>
                        </div>
                        @endforeach
                    </div>

                    <div class="mt-3 d-flex justify-content-center">
                        <button id="check-answer1" class="btn btn-info">Check Answers</button>
                    </div>
                </div>

                <div class="tab-pane fade" id="exercise2">

                    <p>Listen to the example:</p>
                    <p class="p-0 m-0"><b>e.g. </b>Are you swimming? </p>
                    <p class="p-0 m-0"><b>Answer: </b>Yes, I am. </p>
                    <p class="pt-2 m-0"><b>e.g. 2 </b>Are you watching television?</p>
                    <p class="p-0 m-0"><b>Answer: </b>No, I'm not.</p>
                    <p class="p-0 m-0"><b>Answer: </b>I'm listening to the radio.</p>
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
                                <input type="text" class="form-control w-75 q-val2" show-aw="Q_2-{{$index}}-1"
                                    aw="{{$Q_2->aw}}">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="pb-2">
                                <span class="text-danger Q_2-{{$index}}-1 aw2">{{$Q_2->aw}}</span>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="width: 80px;"><b>Answer: </b></td>
                            <td class="pt-2">
                                <input type="text" class="form-control w-75 q-val2" show-aw="Q_2-{{$index}}-2"
                                    aw="{{$Q_2->aw2}}">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="pb-2">
                                <span class="text-danger Q_2-{{$index}}-2 aw2">{{$Q_2->aw2}}</span>
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