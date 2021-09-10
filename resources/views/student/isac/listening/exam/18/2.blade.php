@section('css')
<style>
    table tbody tr td {
        vertical-align: middle !important;
    }

    table thead tr th:first-of-type {
        width: 40%;
    }

    table thead tr th:nth-child(2) {
        width: 20%;
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
$question1 = [
'q1' => '1. What is she going to do next Friday? ',
'q2' => '2. What are they going to do tomorrow?',
'q3' => '3. What are you going to do this afternoon?',
'q4' => '4. What is he going to do when he gets home?',
'q5' => '5. What are they going to do tonight? ',
'q6' => '6. What is she going to do when she leaves school?',
'q7' => '7. What are you going to do on the weekend?',
'q8' => '8. What is he going to do when he passes the test?',
'q9' => '9. What are we going to do when the food runs out?',
'q10' => '10. What are they going to do if it rains?',
];

$key1 = [
'k1' => "(visit her parents)",
'k2' => "(go for a bike ride)",
'k3' => "(relax)",
'k4' => "(have lunch)",
'k5' => "(eat out)",
'k6' => "(study at university)",
'k7' => "(work in the garden)",
'k8' => "(buy a new car)",
'k9' => "(get very hungry)",
'k10' => "(postpone the barbie)",
];

$question2 = [
'q1' => "1. When does your driving licence expire?",
'q2' => "2. When does the plane take off?",
'q3' => "3. When do the shops open?",
'q4' => "4. When do you finish school?",
'q5' => "5. When does the library close?",
'q6' => "6. When does the programme start?",
'q7' => "7. When does daylight saving begin?",
'q8' => "8. When does the Christmas sale start?",
'q9' => "9. When do you go on holiday?",
'q10' => "10. When do you start your new job?",
];

$key2 = [
'k1' => "(next year)",
'k2' => "(at three o'clock)",
'k3' => "(in half an hour's time)",
'k4' => "(next December)",
'k5' => "(in fifteen minutes' time)",
'k6' => "(at eight o'clock tonight)",
'k7' => "(next week)",
'k8' => "(on Boxing Day)",
'k9' => "(in three days' time)",
'k10' => "(next Monday)",
];

$question3 = [
'q1' => "1. Can you come to a party with me next Saturday?",
'q2' => "2. Can you work late this evening?",
'q3' => "3. Can you help me with my homework later on?",
'q4' => "4. Can you cook dinner tomorrow? ",
'q5' => "5. Can you go on holiday with me next week?",
'q6' => "6. Can you babysit for me on Saturday night",
'q7' => "7. Can you wash the car for me this afternoon?",
'q8' => "8. Can you feed my cat when I'm on holida",
'q9' => "9. Can you marry me next Sunday?",
'q10' => "10. Can you pick up the kids from school today?",
];

$key3 = [
'k1' => "(next year)",
'k2' => "(at three o'clock)",
'k3' => "(in half an hour's time)",
'k4' => "(next December)",
'k5' => "(in fifteen minutes' time)",
'k6' => "(at eight o'clock tonight)",
'k7' => "(next week)",
'k8' => "(on Boxing Day)",
'k9' => "(in three days' time)",
'k10' => "(next Monday)",
];
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
                    <table class="table table-sm table-bordered nowrap text-dark mt-3">
                        <thead>
                            <p><u>Listen to the example:</u></p>

                            <p><strong>e.g. 1 </strong>What are you going to do next week?</p>
                            <p><strong>Key: </strong> (take a holiday)</p>
                            <p><strong>Answer: </strong>Next week I'm going to <u>take a holiday</u>. </p>

                            <p><u>Now you do it: </u></p>
                            <tr>
                                <th class="font-weight-bold">QUESTION</th>
                                <th class="font-weight-bold">KEY</th>
                                <th class="font-weight-bold">ANSWER</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i <= count($question1); $i++) <tr>
                                <td>{{ $question1['q'.$i] }}</td>
                                <td>{{ $key1['k'.$i] }}</td>
                                <td>
                                    <div class="position-relative">
                                        <input type="text1" class="form-control">
                                    </div>
                                </td>
                                </tr>
                                @endfor
                        </tbody>
                    </table>
                    <center><button id="check-answer1" class="btn btn-info">Check Answersss</button></center>
                </div>

                <div class="tab-pane fade" id="exercise2">
                    <table class="table table-sm table-bordered nowrap text-dark mt-3">
                        <thead>
                            <p><u>Listen to the example:</u></p>

                            <p><strong>e.g. 1 </strong>When does the train leave?</p>
                            <p><strong>Key: </strong> (in ten minutes' time)</p>
                            <p><strong>Answer: </strong>The train leaves <u>in ten minutes' time</u>.</p>

                            <p><u>Now you do it: </u></p>
                            <tr>
                                <th class="font-weight-bold">QUESTION</th>
                                <th class="font-weight-bold">KEY</th>
                                <th class="font-weight-bold">ANSWER</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i <= count($question2); $i++) <tr>
                                <td>{{ $question2['q'.$i] }}</td>
                                <td>{{ $key2['k'.$i] }}</td>
                                <td>
                                    <div class="position-relative">
                                        <input type="text2" class="form-control">
                                    </div>
                                </td>
                                </tr>
                                @endfor
                        </tbody>
                    </table>
                    <center> <button id="check-answer2" class="btn btn-info">Check Answersss</button></center>
                </div>

                <div class="tab-pane fade" id="exercise3">
                    <table class="table table-sm table-bordered nowrap text-dark mt-3">
                        <thead>
                            <p><u>Listen to the example:</u></p>

                            <p><strong>e.g. 1 </strong>Can you come to the cinema with me tonight? </p>
                            <p><strong>Key: </strong>(wash my hair)</p>
                            <p><strong>Answer: </strong>I'm afraid I can't. I'm <u>washing my hair</u> tonight.</p>

                            <p><u>Now you do it: </u></p>
                            <tr>
                                <th class="font-weight-bold">QUESTION</th>
                                <th class="font-weight-bold">KEY</th>
                                <th class="font-weight-bold">ANSWER</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i <= count($question3); $i++) <tr>
                                <td>{{ $question3['q'.$i] }}</td>
                                <td>{{ $key3['k'.$i] }}</td>
                                <td>
                                    <div class="position-relative">
                                        <input type="text3" class="form-control">
                                    </div>
                                </td>
                                </tr>
                                @endfor
                        </tbody>
                    </table>
                    <center> <button id="check-answer3" class="btn btn-info">Check Answersss</button></center>
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

@endsection

@section('js')
<script>
    const selectAnswer1 = [
            "Next Friday she's going to visit her parents", 
            "Tomorrow they're going to go for a bike ride", 
            "This afternoon I'm going to relax", 
            "When he gets home, he's going to have lunch", 
            "Tonight they're going to eat out", 
            "When she leaves school, she's going to study at university", 
            "On the weekend I'm going to work in the garden", 
            "When he passes the test, he's going to buy a new car", 
            "When the food runs out, we're going to get very hungry", 
            "If it rains, they're going to postpone the barbie",
        ];

        const selectAnswer2 = [
            "My driving licence expires next year", 
            "The plane takes off at three o'clock", 
            "The shops open in half an hour's time", 
            "I finish school next December", 
            "The library closes in fifteen minutes' time", 
            "The programme starts at eight o'clock tonight", 
            "Daylight saving begins next week", 
            "The Christmas sale starts on Boxing Day", 
            "I go on holiday in three days' time", 
            "I start my new job next Monday",
        ];

        const selectAnswer3 = [
            "I'm afraid I can't. I'm visiting my aunt next Saturday", 
            "I'm afraid I can't. I'm going to the theatre this evening", 
            "I'm afraid I can't. I'm going out later on", 
            "I'm afraid I can't. I'm eating out tomorrow", 
            "I'm afraid I can't. I'm attending a course next week", 
            "I'm afraid I can't. I'm meeting some friends on Saturday night", 
            "I'm afraid I can't. I'm playing footie this afternoon", 
            "I'm afraid I can't. I'm leaving town when you're on holiday", 
            "I'm afraid I can't. I'm marrying someone else next Sunday", 
            "I'm afraid I can't. I'm flying to Sydney today",
        ];

        $('#check-answer1').on('click', () => {
        $('#check-answer1').prop('disabled',true)
            $('input[type="text1"]').each((index, item) => {
                if (selectAnswer1[index].toLowerCase() == $(item).val().toLowerCase()) {
                    item.className = 'form-control border-success'
                    $(`<span class="text-success mt-2">${selectAnswer1[index]}</span>`).insertAfter($(item));
                } else {
                    item.className = 'form-control border-danger'
                    $(`<span class="text-danger mt-2">${selectAnswer1[index]}</span>`).insertAfter($(item));
                }
            });
            $('#check-answer1').prop('disabled',true)
        });

        $('#check-answer2').on('click', () => {
        $('#check-answer2').prop('disabled',true)
            $('input[type="text2"]').each((index, item) => {
                if (selectAnswer2[index].toLowerCase() == $(item).val().toLowerCase()) {
                    item.className = 'form-control border-success'
                    $(`<span class="text-success mt-2">${selectAnswer2[index]}</span>`).insertAfter($(item));
                } else {
                    item.className = 'form-control border-danger'
                    $(`<span class="text-danger mt-2">${selectAnswer2[index]}</span>`).insertAfter($(item));
                }
            });
            $('#check-answer2').prop('disabled',true)
        });

        $('#check-answer3').on('click', () => {
        $('#check-answer3').prop('disabled',true)
            $('input[type="text3"]').each((index, item) => {
                if (selectAnswer3[index].toLowerCase() == $(item).val().toLowerCase()) {
                    item.className = 'form-control border-success'
                    $(`<span class="text-success mt-2">${selectAnswer3[index]}</span>`).insertAfter($(item));
                } else {
                    item.className = 'form-control border-danger'
                    $(`<span class="text-danger mt-2">${selectAnswer3[index]}</span>`).insertAfter($(item));
                }
            });
            $('#check-answer3').prop('disabled',true)
        });
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