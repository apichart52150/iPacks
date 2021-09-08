
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

    $Q_1->e1->q = "Peter started smoking a pipe ten years ago.";
    $Q_1->e2->q = "Sandra started dancing professionally when she was sixteen.";
    $Q_1->e3->q = "I started collecting coins almost a year ago.";
    $Q_1->e4->q = "We started growing our own vegetables three years ago.";
    $Q_1->e5->q = "June started learning Japanese four weeks ago.";
    $Q_1->e6->q = "Paul started teaching at the university after he graduated.";
    $Q_1->e7->q = "Bill started surfing when he learnt how to swim.";
    $Q_1->e8->q = "I started driving a Rolls-Royce when I won Lotto.";
    $Q_1->e9->q = "We started redecorating the house three months ago.";
    $Q_1->e10->q = "You started writing your life history ten years ago.";

    $Q_1->e1->aw = "Peter's been smoking a pipe for ten years";
    $Q_1->e2->aw = "Sandra's been dancing professionally since she was sixteen";
    $Q_1->e3->aw = "I've been collecting coins for almost a year";
    $Q_1->e4->aw = "We've been growing our own vegetables for three years";
    $Q_1->e5->aw = "June's been learning Japanese for four weeks";
    $Q_1->e6->aw = "Paul's been teaching at the university since he graduated";
    $Q_1->e7->aw = "Bill's been surfing since he learnt how to swim";
    $Q_1->e8->aw = "I've been driving a Rolls-Royce since I won Lotto";
    $Q_1->e9->aw = "We've been redecorating the house for three months";
    $Q_1->e10->aw = "You've been writing your life history for ten years";

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

    $Q_2->e1->q = "He started playing football when he was twelve.";
    $Q_2->e2->q = "She began taking driving lessons when she got this new job.";
    $Q_2->e3->q = "They started watching films six years ago.";
    $Q_2->e4->q = "I began typing this letter at four o'clock.";
    $Q_2->e5->q = "Dorothy started going out with boys when she was fifteen.";
    $Q_2->e6->q = "Michael began to sniff glue last year.";
    $Q_2->e7->q = "We started to travel at dusk.";
    $Q_2->e8->q = "When the teacher arrived home from school, he started marking the essays.";
    $Q_2->e9->q = "Julie began preparing dinner three hours ago.";
    $Q_2->e10->q = "When he left school, Bruce began acting.";

    $Q_2->e1->aw = "He's been playing football since he was twelve";
    $Q_2->e2->aw = "She's been taking driving lessons since she got this new job";
    $Q_2->e3->aw = "They've been watching films for six years";
    $Q_2->e4->aw = "I've been typing this letter since four o'clock";
    $Q_2->e5->aw = "Dorothy's been going out with boys since she was fifteen";
    $Q_2->e6->aw = "Michael's been sniffing glue since last year";
    $Q_2->e7->aw = "We've been travelling since dusk";
    $Q_2->e8->aw = "The teacher's been marking the essays since he arrived home from school";
    $Q_2->e9->aw = "Julie's been preparing dinner for three hours";
    $Q_2->e10->aw = "Bruce's been acting since he left school";

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

    $Q_3->e1->q = "We started decorating the house last month.";
    $Q_3->e2->q = "I started using Word Perfect five years ago.";
    $Q_3->e3->q = "He started taking insulin when he got diabetes.";
    $Q_3->e4->q = "She started playing the guitar when she was ten years old.";
    $Q_3->e5->q = "The girls started painting the fence two hours ago.";
    $Q_3->e6->q = "I started working seriously last Sunday.";
    $Q_3->e7->q = "He started doing exercises when he had a heart attack.";
    $Q_3->e8->q = "We started collecting coins in 1989.";
    $Q_3->e9->q = "She started perming her hair when she got divorced.";
    $Q_3->e10->q = "He started listening to jazz music when his mother bought him a trumpet.";

    $Q_3->e1->aw = "We've been decorating the house since last month";
    $Q_3->e2->aw = "I've been using Word Perfect for five years";
    $Q_3->e3->aw = "He's been taking insulin since he got diabetes";
    $Q_3->e4->aw = "She's been playing the guitar since she was ten years old";
    $Q_3->e5->aw = "The girls have been painting the fence for two hours";
    $Q_3->e6->aw = "I've been working seriously since last Sunday";
    $Q_3->e7->aw = "He's been doing exercises since he had a heart attack";
    $Q_3->e8->aw = "We've been collecting coins since 1989";
    $Q_3->e9->aw = "She's been perming her hair since she got divorced";
    $Q_3->e10->aw = "He's been listening to jazz music since his mother bought him a trumpet";

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
                    <p class="p-0 m-0"><b>e.g. </b>I started playing football a year ago. </p>
                    <p class="p-0 m-0"><b>Answer: </b>I've been playing football for a year.</p>
                    <p class="pt-2 m-0"><b>e.g. </b>She started playing the piano when she was ten. </p>
                    <p class="p-0 m-0"><b>Answer: </b>She's been playing the piano since she was ten.</p>
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
                    <p class="p-0 m-0"><b>e.g. </b>I started learning English two years ago. </p>
                    <p class="p-0 m-0"><b>Answer: </b>I've been learning English for two years.</p>
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
                    <p class="p-0 m-0"><b>e.g. </b>I started learning Japanese last April.</p>
                    <p class="p-0 m-0"><b>Answer: </b>I've been learning Japanese since last April.</p>
                    <p class="pt-2 m-0"><b>e.g. </b>He started driving ten years ago.</p>
                    <p class="p-0 m-0"><b>Answer: </b>He's been driving for ten years.</p>
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



    
</script>
@stop