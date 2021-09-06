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

$Q_1->e1->q = "";
$Q_1->e2->q = "";
$Q_1->e3->q = "";
$Q_1->e4->q = "";
$Q_1->e5->q = "";
$Q_1->e6->q = "";
$Q_1->e7->q = "";
$Q_1->e8->q = "";
$Q_1->e9->q = "";
$Q_1->e10->q = "";

$Q_1->e1->aw = "";
$Q_1->e2->aw = "";
$Q_1->e3->aw = "";
$Q_1->e4->aw = "";
$Q_1->e5->aw = "";
$Q_1->e6->aw = "";
$Q_1->e7->aw = "";
$Q_1->e8->aw = "";
$Q_1->e9->aw = "";
$Q_1->e10->aw = "";

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

$Q_2->e1->q = "";
$Q_2->e2->q = "";
$Q_2->e3->q = "";
$Q_2->e4->q = "";
$Q_2->e5->q = "";
$Q_2->e6->q = "";
$Q_2->e7->q = "";
$Q_2->e8->q = "";
$Q_2->e9->q = "";
$Q_2->e10->q = "";

$Q_2->e1->aw = "";
$Q_2->e2->aw = "";
$Q_2->e3->aw = "";
$Q_2->e4->aw = "";
$Q_2->e5->aw = "";
$Q_2->e6->aw = "";
$Q_2->e7->aw = "";
$Q_2->e8->aw = "";
$Q_2->e9->aw = "";
$Q_2->e10->aw = "";

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

$Q_3->e1->q = "";
$Q_3->e2->q = "";
$Q_3->e3->q = "";
$Q_3->e4->q = "";
$Q_3->e5->q = "";
$Q_3->e6->q = "";
$Q_3->e7->q = "";
$Q_3->e8->q = "";
$Q_3->e9->q = "";
$Q_3->e10->q = "";

$Q_3->e1->aw = "";
$Q_3->e2->aw = "";
$Q_3->e3->aw = "";
$Q_3->e4->aw = "";
$Q_3->e5->aw = "";
$Q_3->e6->aw = "";
$Q_3->e7->aw = "";
$Q_3->e8->aw = "";
$Q_3->e9->aw = "";
$Q_3->e10->aw = "";

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

$Q_4->e1->q = "";
$Q_4->e2->q = "";
$Q_4->e3->q = "";
$Q_4->e4->q = "";
$Q_4->e5->q = "";
$Q_4->e6->q = "";
$Q_4->e7->q = "";
$Q_4->e8->q = "";
$Q_4->e9->q = "";
$Q_4->e10->q = "";

$Q_4->e1->aw = "";
$Q_4->e2->aw = "";
$Q_4->e3->aw = "";
$Q_4->e4->aw = "";
$Q_4->e5->aw = "";
$Q_4->e6->aw = "";
$Q_4->e7->aw = "";
$Q_4->e8->aw = "";
$Q_4->e9->aw = "";
$Q_4->e10->aw = "";

$Q_5 = new stdClass();
$Q_5->e1 = new stdClass();
$Q_5->e2 = new stdClass();
$Q_5->e3 = new stdClass();
$Q_5->e4 = new stdClass();
$Q_5->e5 = new stdClass();
$Q_5->e6 = new stdClass();
$Q_5->e7 = new stdClass();
$Q_5->e8 = new stdClass();
$Q_5->e9 = new stdClass();
$Q_5->e10 = new stdClass();

$Q_5->e1->n = "1";
$Q_5->e2->n = "2";
$Q_5->e3->n = "3";
$Q_5->e4->n = "4";
$Q_5->e5->n = "5";
$Q_5->e6->n = "6";
$Q_5->e7->n = "7";
$Q_5->e8->n = "8";
$Q_5->e9->n = "9";
$Q_5->e10->n = "10";

$Q_5->e1->q = "";
$Q_5->e2->q = "";
$Q_5->e3->q = "";
$Q_5->e4->q = "";
$Q_5->e5->q = "";
$Q_5->e6->q = "";
$Q_5->e7->q = "";
$Q_5->e8->q = "";
$Q_5->e9->q = "";
$Q_5->e10->q = "";

$Q_5->e1->aw = "";
$Q_5->e2->aw = "";
$Q_5->e3->aw = "";
$Q_5->e4->aw = "";
$Q_5->e5->aw = "";
$Q_5->e6->aw = "";
$Q_5->e7->aw = "";
$Q_5->e8->aw = "";
$Q_5->e9->aw = "";
$Q_5->e10->aw = "";

$Q_6 = new stdClass();
$Q_6->e1 = new stdClass();
$Q_6->e2 = new stdClass();
$Q_6->e3 = new stdClass();
$Q_6->e4 = new stdClass();
$Q_6->e5 = new stdClass();
$Q_6->e6 = new stdClass();
$Q_6->e7 = new stdClass();
$Q_6->e8 = new stdClass();
$Q_6->e9 = new stdClass();
$Q_6->e10 = new stdClass();

$Q_6->e1->n = "1";
$Q_6->e2->n = "2";
$Q_6->e3->n = "3";
$Q_6->e4->n = "4";
$Q_6->e5->n = "5";
$Q_6->e6->n = "6";
$Q_6->e7->n = "7";
$Q_6->e8->n = "8";
$Q_6->e9->n = "9";
$Q_6->e10->n = "10";

$Q_6->e1->q = "";
$Q_6->e2->q = "";
$Q_6->e3->q = "";
$Q_6->e4->q = "";
$Q_6->e5->q = "";
$Q_6->e6->q = "";
$Q_6->e7->q = "";
$Q_6->e8->q = "";
$Q_6->e9->q = "";
$Q_6->e10->q = "";

$Q_6->e1->aw = "";
$Q_6->e2->aw = "";
$Q_6->e3->aw = "";
$Q_6->e4->aw = "";
$Q_6->e5->aw = "";
$Q_6->e6->aw = "";
$Q_6->e7->aw = "";
$Q_6->e8->aw = "";
$Q_6->e9->aw = "";
$Q_6->e10->aw = "";

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
                <li class="nav-item">
                    <a href="#exercise5" data-toggle="tab" aria-expanded="false" class="nav-link">
                        <span class="d-inline-block d-sm-none"><i class="far fa-user"></i></span>
                        <span class="d-none d-sm-inline-block">Exercise 5</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#exercise6" data-toggle="tab" aria-expanded="false" class="nav-link">
                        <span class="d-inline-block d-sm-none"><i class="far fa-user"></i></span>
                        <span class="d-none d-sm-inline-block">Exercise 6</span>
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

                    <p>Listen to the example:</p>
                    <p class="p-0 m-0"><b>e.g. </b></p>
                    <p class="p-0 m-0"><b>Answer: </b></p>
                    <p class="pt-2 m-0"><b>e.g. </b></p>
                    <p class="p-0 m-0"><b>Answer: </b></p>
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
                    <p class="p-0 m-0"><b>e.g. </b></p>
                    <p class="p-0 m-0"><b>Answer: </b></p>
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

                <div class="tab-pane fade" id="exercise4">

                    <p>Listen to the example:</p>
                    <p class="p-0 m-0"><b>e.g. </b></p>
                    <p class="p-0 m-0"><b>Answer: </b></p>
                    <p class="pt-2 m-0"><b>e.g. </b></p>
                    <p class="p-0 m-0"><b>Answer: </b></p>
                    <p class="pt-2">Now you do it: </p>

                    <table class="w-100">
                        @foreach($Q_4 as $index => $Q_4)
                        <tr>
                            <td style="width: 23px;">{{$Q_4->n}}.</td>
                            <td colspan="2">{{$Q_4->q}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="width: 80px;"><b>Answer: </b></td>
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

                <div class="tab-pane fade" id="exercise5">

                    <p>Listen to the example:</p>
                    <p class="p-0 m-0"><b>e.g. </b></p>
                    <p class="p-0 m-0"><b>Answer: </b></p>
                    <p class="pt-2 m-0"><b>e.g. </b></p>
                    <p class="p-0 m-0"><b>Answer: </b></p>
                    <p class="pt-2">Now you do it: </p>

                    <table class="w-100">
                        @foreach($Q_5 as $index => $Q_5)
                        <tr>
                            <td style="width: 23px;">{{$Q_5->n}}.</td>
                            <td colspan="2">{{$Q_5->q}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="width: 80px;"><b>Answer: </b></td>
                            <td class="pt-2">
                                <input type="text" class="form-control w-75 q-val5" show-aw="Q_5-{{$index}}" aw="{{$Q_5->aw}}">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="pb-2">
                                <span class="text-danger Q_5-{{$index}} aw5">{{$Q_5->aw}}</span>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    <div class="mt-3 d-flex justify-content-center">
                        <button id="check-answer5" class="btn btn-info">Check Answers</button>
                    </div>
                </div>

                <div class="tab-pane fade" id="exercise6">

                    <p>Listen to the example:</p>
                    <p class="p-0 m-0"><b>e.g. </b></p>
                    <p class="p-0 m-0"><b>Answer: </b></p>
                    <p class="pt-2 m-0"><b>e.g. </b></p>
                    <p class="p-0 m-0"><b>Answer: </b></p>
                    <p class="pt-2">Now you do it: </p>

                    <table class="w-100">
                        @foreach($Q_6 as $index => $Q_6)
                        <tr>
                            <td style="width: 23px;">{{$Q_6->n}}.</td>
                            <td colspan="2">{{$Q_6->q}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="width: 80px;"><b>Answer: </b></td>
                            <td class="pt-2">
                                <input type="text" class="form-control w-75 q-val6" show-aw="Q_6-{{$index}}" aw="{{$Q_6->aw}}">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="pb-2">
                                <span class="text-danger Q_6-{{$index}} aw6">{{$Q_6->aw}}</span>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    <div class="mt-3 d-flex justify-content-center">
                        <button id="check-answer6" class="btn btn-info">Check Answers</button>
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