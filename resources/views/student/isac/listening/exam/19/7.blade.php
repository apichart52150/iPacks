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

$Q_1->e1->q = "The boy broke the window. The policeman saw him.";
$Q_1->e2->q = "The thief entered the house through the window. The neighbour saw him.";
$Q_1->e3->q = "The people cheered when their team scored. The whole town heard them.";
$Q_1->e4->q = "The convict escaped from the prison. Nobody saw him.";
$Q_1->e5->q = "The swimmer broke the world record. The spectators watched her.";
$Q_1->e6->q = "The school bell rang. The students heard it.";
$Q_1->e7->q = "Gary Ablett kicked ten goals. The supporters watched him.";
$Q_1->e8->q = "The woman cheated during the examination. The examiner saw her.";
$Q_1->e9->q = "The truck slid down the hill. The anxious driver watched it.";
$Q_1->e10->q = "The snake bit the dog. The farmer saw it.";

$Q_1->e1->aw = "The policeman saw the boy break the window";
$Q_1->e2->aw = "The neighbour saw the thief enter the house through the window";
$Q_1->e3->aw = "The whole town heard the people cheer when their team scored";
$Q_1->e4->aw = "Nobody saw the convict escape from the prison";
$Q_1->e5->aw = "The spectators watched the swimmer break the world record";
$Q_1->e6->aw = "The students heard the bell ring";
$Q_1->e7->aw = "The supporters watched Gary Ablett kick ten goals";
$Q_1->e8->aw = "The examiner saw the woman cheat during the examination";
$Q_1->e9->aw = "The anxious driver watched the truck slide down the hill";
$Q_1->e10->aw = "The farmer saw the snake bite the dog";

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

$Q_2->e1->q = "The soup was burning. You could smell it.";
$Q_2->e2->q = "The girl was screaming for help. The police officer heard her.";
$Q_2->e3->q = "The rain was leaking through a hole in the roof. Nobody noticed it.";
$Q_2->e4->q = "The plane was falling towards the ground. We saw it.";
$Q_2->e5->q = "The cyclone was approaching the coast. The weather bureau watched it.";
$Q_2->e6->q = "Smoke was pouring out of the house. The rescuers noticed it.";
$Q_2->e7->q = "The phone was ringing. Nobody heard it.";
$Q_2->e8->q = "The flood water was rising. The nervous residents watched it.";
$Q_2->e9->q = "The suspect was carrying a sack. The police observed this.";
$Q_2->e10->q = "I was trying to put out the fire. My friends saw me.";

$Q_2->e1->aw = "You could smell the soup burning";
$Q_2->e2->aw = "The police officer heard the girl screaming for help";
$Q_2->e3->aw = "Nobody noticed the rain leaking through a hole in the roof";
$Q_2->e4->aw = "We saw the plane falling towards the ground";
$Q_2->e5->aw = "The weather bureau watched the cyclone approaching the coast";
$Q_2->e6->aw = "The rescuers noticed smoke pouring out of the house";
$Q_2->e7->aw = "Nobody heard the phone ringing";
$Q_2->e8->aw = "The nervous residents watched the flood water rising";
$Q_2->e9->aw = "The police observed the suspect carrying a sack";
$Q_2->e10->aw = "My friends saw me trying to put out the fire";

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
                    <p class="p-0 m-0"><b>e.g. </b>The cat caught a rat. I saw it.</p>
                    <p class="p-0 m-0"><b>Answer: </b>I saw the cat catch a rat.</p>
                    <p class="pt-2 m-0"><b>e.g. </b>He slammed the door shut. Everybody heard him. </p>
                    <p class="p-0 m-0"><b>Answer: </b>Everybody heard him slam the door shut.</p>
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
                    <p class="p-0 m-0"><b>e.g. </b>The boy was climbing through the window. We saw him. </p>
                    <p class="p-0 m-0"><b>Answer: </b>We saw the boy climbing through the window.</p>
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