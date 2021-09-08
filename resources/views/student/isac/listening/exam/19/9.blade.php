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

$Q_1->e1->q = "What would you do if you found a Redback in your bag?";
$Q_1->e2->q = "What would you do if you saw a swimmer in difficulty?";
$Q_1->e3->q = "What would you do if you had a headache?";
$Q_1->e4->q = "What would you do if you felt ill one morning?";
$Q_1->e5->q = "What would you do if your computer broke down?";
$Q_1->e6->q = "What would you do if your house caught fire?";
$Q_1->e7->q = "What would you do if the weather turned hot?";
$Q_1->e8->q = "What would you do if you found a diamond ring?";
$Q_1->e9->q = "What would you do if you were offered the job?";
$Q_1->e10->q = "What would you do if someone stole your car?";

$Q_1->e1->q2 = "(kill it)";
$Q_1->e2->q2 = "(tell the surfguard)";
$Q_1->e3->q2 = "(take a pill)";
$Q_1->e4->q2 = "(stay in bed)";
$Q_1->e5->q2 = "(get it fixed)";
$Q_1->e6->q2 = "(call for help)";
$Q_1->e7->q2 = "(go for a swim)";
$Q_1->e8->q2 = "(keep it)";
$Q_1->e9->q2 = "(accept it)";
$Q_1->e10->q2 = "(report it)";

$Q_1->e1->aw = "If I found a Redback in my bag, I'd kill it";
$Q_1->e2->aw = "If I saw a swimmer in difficulty, I'd tell the surfguard";
$Q_1->e3->aw = "If I had a headache, I'd take a pill";
$Q_1->e4->aw = "If I felt ill one morning, I'd stay in bed";
$Q_1->e5->aw = "If my computer broke down, I'd get it fixed";
$Q_1->e6->aw = "If my house caught fire, I'd call for help";
$Q_1->e7->aw = "If the weather turned hot, I'd go for a swim";
$Q_1->e8->aw = "If I found a diamond ring, I'd keep it";
$Q_1->e9->aw = "If I were offered the job, I'd accept it";
$Q_1->e10->aw = "If someone stole my car, I'd report it";

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

$Q_2->e1->q = "I never come to visit you because I don't have a car.";
$Q_2->e2->q = "She never goes to parties because she's very shy.";
$Q_2->e3->q = "People never understand him because he doesn't speak clearly.";
$Q_2->e4->q = "They never use the internet because they don't have a computer.";
$Q_2->e5->q = "He never goes to the pool because he can't swim very well.";
$Q_2->e6->q = "I never go to the cinema because I'm too busy.";
$Q_2->e7->q = "Simon doesn't buy a lot of books because he can't read very well.";
$Q_2->e8->q = "Paula never gets up on time because she doesn't have an alarm clock.";
$Q_2->e9->q = "I don't drive a Porsche because I'm not rich enough.";
$Q_2->e10->q = "Richard never passes his exams because he plays around in class all the time.";

$Q_2->e1->aw = "But if I had a car, I would come to visit you";
$Q_2->e2->aw = "But if she weren't very shy, she would go to parties";
$Q_2->e3->aw = "But if he spoke clearly, people would understand him";
$Q_2->e4->aw = "But if they had a computer, they would use the internet";
$Q_2->e5->aw = "But if he could swim very well, he would go to the pool";
$Q_2->e6->aw = "But if I weren't too busy, I would go to the cinema";
$Q_2->e7->aw = "But if he could read very well, he would buy a lot of books";
$Q_2->e8->aw = "But if she had an alarm clock, she would get up on time";
$Q_2->e9->aw = "But if I were rich enough, I would drive a Porsche";
$Q_2->e10->aw = "But if he didn't play around in class all the time, he would pass his exams";

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
                    <p class="p-0 m-0"><b>e.g. </b><span class="pr-4">What would you do if you found a Redback in your bag?</span><b>(kill it)</b></p>
                    <p class="p-0 m-0"><b>Answer: </b>If I won Lotto, I'd buy a new car.</p>
                    <p class="pt-2">Now you do it: </p>

                    <table class="w-100">
                        @foreach($Q_1 as $index => $Q_1)
                        <tr>
                            <td style="width: 23px;">{{$Q_1->n}}.</td>
                            <td colspan="2" style="width: 150px;">{{$Q_1->q}}</td>
                            <td><b>{{$Q_1->q2}}</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="pt-2" style="width: 80px;vertical-align:middle;"><b>Answer: </b></td>
                            <td colspan="2" class="pt-2">
                                <input type="text" class="form-control w-75 q-val1" show-aw="Q_1-{{$index}}"
                                    aw="{{$Q_1->aw}}">
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
                    <p class="p-0 m-0"><b>e.g. </b>We never go on holiday because we can't afford it.</p>
                    <p class="p-0 m-0"><b>Answer: </b>But if we could afford it, we would go on holiday.</p>
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