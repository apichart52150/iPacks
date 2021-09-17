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

$Q_1->e1->q = "I've never travelled by air before.";
$Q_1->e2->q = "She's never tasted squid before.";
$Q_1->e3->q = "He's never been to China before.";
$Q_1->e4->q = "They've never drunk red wine before.";
$Q_1->e5->q = "I've never driven a Rolls Royce before.";
$Q_1->e6->q = "She's never considered leaving home before.";
$Q_1->e7->q = "I've never heard that one before.";
$Q_1->e8->q = "They've never owned their own home before.";
$Q_1->e9->q = "I've never tried fish-heads before.";
$Q_1->e10->q = "He's never been fishing at night before.";

$Q_1->e1->aw = "This is the first time I've ever travelled by air.";
$Q_1->e2->aw = "This is the first time she's ever tasted squid.";
$Q_1->e3->aw = "This is the first time he's ever been to China.";
$Q_1->e4->aw = "This is the first time they've ever drunk red wine.";
$Q_1->e5->aw = "This is the first time I've ever driven a Rolls-Royce.";
$Q_1->e6->aw = "This is the first time she's ever considered leaving home.";
$Q_1->e7->aw = "This is the first time I've ever heard that one.";
$Q_1->e8->aw = "This is the first time they've ever owned their own home.";
$Q_1->e9->aw = "This is the first time I've ever tried fish-heads.";
$Q_1->e10->aw = "This is the first time he's ever been fishing at night.";

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

$Q_2->e1->q = "Have you ever eaten sushi?";
$Q_2->e2->q = "Have you ever met Paul Keating?";
$Q_2->e3->q = "Have you ever been wind-surfing?";
$Q_2->e4->q = "Have you ever travelled by hovercraft?";
$Q_2->e5->q = "Have you ever climbed Mount Everest?";
$Q_2->e6->q = "Have you ever played squash?";
$Q_2->e7->q = "Have you ever swum with a whale?";
$Q_2->e8->q = "Have you ever caught a shark?";
$Q_2->e9->q = "Have you ever camped on the beach?";
$Q_2->e10->q = "Have you ever read 'War and Peace'?";

$Q_2->e1->q2 = "(last week)";
$Q_2->e2->q2 = "(at the meeting)";
$Q_2->e3->q2 = "(last weekend)";
$Q_2->e4->q2 = "(1980)";
$Q_2->e5->q2 = "(1992)";
$Q_2->e6->q2 = "(last month)";
$Q_2->e7->q2 = "(last summer)";
$Q_2->e8->q2 = "(3 days ago)";
$Q_2->e9->q2 = "(last year)";
$Q_2->e10->q2 = "(5 years ago)";

$Q_2->e1->aw = "Yes, I have. I ate sushi last week.";
$Q_2->e2->aw = "Yes, I have. I met Paul Keating at the meeting.";
$Q_2->e3->aw = "Yes, I have. I went wind-surfing last weekend.";
$Q_2->e4->aw = "Yes, I have. I travelled by hovercraft in 1980.";
$Q_2->e5->aw = "Yes, I have. I climbed Mt Everest in 1992.";
$Q_2->e6->aw = "Yes, I have. I played squash last month.";
$Q_2->e7->aw = "Yes, I have. I swam with a whale last summer.";
$Q_2->e8->aw = "Yes, I have. I caught a shark 3 days ago.";
$Q_2->e9->aw = "Yes, I have. I camped on the beach last year.";
$Q_2->e10->aw = "Yes, I have. I read 'War and Peace' 5 years ago.";

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

$Q_3->e1->q = "Has John read the newspaper yet? (√)";
$Q_3->e2->q = "Have you finished the book yet? (√)";
$Q_3->e3->q = "Has Sharon arrived yet? (X)";
$Q_3->e4->q = "Have the girls left yet? (√)";
$Q_3->e5->q = "Has the baby woken up yet? (X)";
$Q_3->e6->q = "Have you decided yet? (X) ";
$Q_3->e7->q = "Have the children tidied their room yet? (X)";
$Q_3->e8->q = "Have you checked the mailbox yet? (√) ";
$Q_3->e9->q = "Has the teacher marked the essays yet? (X)";
$Q_3->e10->q = "Have you heard the news yet? (√) ";

$Q_3->e1->aw = "Yes, he's already read the newspaper.";
$Q_3->e2->aw = "Yes, I've already finished the book.";
$Q_3->e3->aw = "No, she hasn't arrived yet.";
$Q_3->e4->aw = "Yes, they've already left.";
$Q_3->e5->aw = "No, it hasn't woken up yet.";
$Q_3->e6->aw = "No, I haven't decided yet.";
$Q_3->e7->aw = "No, they haven't tidied their room yet.";
$Q_3->e8->aw = "Yes, I've already checked the mailbox.";
$Q_3->e9->aw = "No, she hasn't marked the essays yet.";
$Q_3->e10->aw = "Yes, I've already heard the news.";

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
                    <p class="p-0 m-0"><b>e.g. </b>I've never eaten spaghetti before. </p>
                    <p class="p-0 m-0"><b>Answer: </b>This is the first time I've ever eaten spaghetti.</p>
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
                            <td class="pt-2" style="width: 80px;vertical-align:middle;"><b>Answer: </b></td>
                            <td class="pt-2">
                                <input type="text" class="form-control w-75 q-val1" show-aw="Q_1-{{$index}}"
                                    aw="{{$Q_1->aw}}">
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
                    <p class="p-0 m-0"><b>e.g. </b><span class="pr-4">Have you ever been to Japan?</span><b>(1986)</b></p>
                    <p class="p-0 m-0"><b>Answer: </b>Yes, I have. I went there in 1986.</p>
                    <p class="pt-2">Now you do it: </p>

                    <table class="w-100">
                        @foreach($Q_2 as $index => $Q_2)
                        <tr>
                            <td style="width: 23px;">{{$Q_2->n}}.</td>
                            <td colspan="2" style="width: 150px;">{{$Q_2->q}}</td>
                            <td><b>{{$Q_2->q2}}</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="pt-2" style="width: 80px;vertical-align:middle;"><b>Answer: </b></td>
                            <td colspan="2" class="pt-2">
                                <input type="text" class="form-control w-75 q-val2" show-aw="Q_2-{{$index}}"
                                    aw="{{$Q_2->aw}}">
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
                    <p class="p-0 m-0"><b>e.g. </b>Has Richard finished yet? (√)</p>
                    <p class="p-0 m-0"><b>Answer: </b>Yes, he's already finished. </p>
                    <p class="pt-2 m-0"><b>e.g. </b>Have you eaten yet? (X)</p>
                    <p class="p-0 m-0"><b>Answer: </b>No, I haven't eaten yet. </p>
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
                                <input type="text" class="form-control w-75 q-val3" show-aw="Q_3-{{$index}}"
                                    aw="{{$Q_3->aw}}">
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