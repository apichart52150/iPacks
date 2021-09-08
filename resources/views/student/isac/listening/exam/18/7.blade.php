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
        'q1' => '1. What will happen if you light the fuse?',
        'q2' => '2. What will you do if the car breaks down again?',
        'q3' => '3. What will happen if the government wins the election?',
        'q4' => '4. What will you do if you lose your job?',
        'q5' => '5. What will happen if the ship hits the rocks?',
        'q6' => '6. What will you do if the ship sinks?',
        'q7' => '7. What will you do if the Eagles win the Flag?',
        'q8' => '8. What will you do if the mortgage rate goes up?',
        'q9' => '9. What will happen if there is a power cut?',
        'q10' => '10. What will you do if the lights go out?',
    ];

    $choise1 = [
        'c1' => '(bomb explode)',
        'c2' => '(sell it)',
        'c3' => '(raise taxes)',
        'c4' => '(move to Sydney)',
        'c5' => '(sink to the bottom)',
        'c6' => '(swim to the shore)',
        'c7' => '(celebrate) ',
        'c8' => '(sell the house)',
        'c9' => '(lights go out)',
        'c10' => '(find a candle)',
    ];

    $question2 = [
        'q1' => "1. We'll call off the barbie if the weather doesn't improve.",
        'q2' => "2. If we don't hear from you, we'll assume the party is cancelled.",
        'q3' => "3. If you don't turn the music down, you'll never hear the phone.",
        'q4' => "4. They'll miss the bus if they don't get a move on.",
        'q5' => "5. He won't get the job if he doesn't get a haircut.",
        'q6' => "6. I'll finish the work tonight if there isn't a power cut.",
        'q7' => "7. If the car doesn't break down, we'll arrive in Perth by midnight.",
        'q8' => "8. If we don't get some rain soon, the plants will all die.",
        'q9' => "9. If we don't set off soon, we'll never arrive on time.",
        'q10' => "10. I'll never be rich if I don't win Lotto.",
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
                        <span class="d-none d-sm-inline-block">Exercise 2 Unless....</span> 
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="exercise1">
                    <table class="table table-sm table-bordered nowrap text-dark mt-3">
                        <thead>
                            Listen to the example:
                            <tr>
                                <th class="font-weight-bold">QUESTION</th>
                                <th class="font-weight-bold">KEY</th>
                                <th class="font-weight-bold">ANSWER</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>e.g.</strong> What will happen if you push that button?</td>
                                <td>
                                    <div class="position-relative">
                                        (door open)
                                    </div>
                                </td>
                                <td>
                                    <div class="position-relative">
                                        <input class="form-control" value="If you push that button, the door will open." disabled>
                                    </div>
                                </td>
                            </tr>
        
                            @for ($i = 1; $i <= count($question1); $i++)
                                <tr>
                                    <td>{{ $question1['q'.$i] }}</td>
                                    <td>{{ $choise1['c'.$i] }}</td>
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
                            Listen to the example:
                            <tr>
                                <th class="font-weight-bold">QUESTION</th>
                                <th class="font-weight-bold">ANSWER</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>e.g.</strong> If you don't apologise, I won't speak to you again.</td>
                                <td>
                                    <div class="position-relative">
                                        <input class="form-control" value="Unless you apologise, I won't speak to you again." disabled>
                                    </div>
                                </td>
                            </tr>
        
                            @for ($i = 1; $i <= count($question2); $i++)
                                <tr>
                                    <td>{{ $question2['q'.$i] }}</td>
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
            "If you light the fuse, the bomb will explode.", 
            "If the car breaks down again, I'll sell it.", 
            "If the government wins the election, it will raise taxes.", 
            "If I lose my job, I'll move to Sydney.", 
            "If the ship hits the rocks, it will sink to the bottom.", 
            "If the ship sinks, I'll swim to the shore.", 
            "If the Eagles win the Flag, I'll celebrate", 
            "If the mortgage rate goes up, I'll sell the house.", 
            "If there is a power cut, the lights will go out.", 
            "If the lights go out, I'll find a candle.",
        ];

        const selectAnswer2 = [
            "We'll call off the barbie unless the weather improves", 
            "Unless we hear from you, we'll assume the party is cancelled.", 
            "Unless you turn the music down, you'll never hear the phone.", 
            "They'll miss the bus unless they get a move on.", 
            "He won't get the job unless he gets a haircut.", 
            "I'll finish the work tonight unless there's a power cut.", 
            "Unless the car breaks down, we'll arrive in Perth by midnight.", 
            "Unless we get some rain soon, the plants will all die.", 
            "Unless we set off soon, we'll never arrive on time.", 
            "I'll never be rich unless I win Lotto.",
        ];

        $('#check-answer1').on('click', () => {
        $('#check-answer1').prop('disabled',true)
            $('input[type="text1"]').each((index, item) => {
                if (selectAnswer1[index].toLowerCase() == $(item).val().toLowerCase()) {
                    item.className = 'form-control border-success'
                } else {
                    $(`<span class="text-success mt-2">${selectAnswer1[index]}</span>`).insertAfter($(item));
                }
            });
            $('#check-answer1').prop('disabled',true)
        });

        $('#check-answer2').on('click', () => {
        $('#check-answer2').prop('disabled',true)
            $('input[type="text2"]').each((index, item) => {
                if (selectAnswer2[index].toLowerCase() == $(item).val().toLowerCase()) {
                    item.className = 'form-control border-success'
                } else {
                    $(`<span class="text-success mt-2">${selectAnswer2[index]}</span>`).insertAfter($(item));
                }
            });
            $('#check-answer2').prop('disabled',true)
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