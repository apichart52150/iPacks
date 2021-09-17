@section('css')
<style>


.aw1,.aw2,.aw3,.aw4 {
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


$Q1_10 = new stdClass();
$Q1_10->e1 = new stdClass();
$Q1_10->e2 = new stdClass();
$Q1_10->e3 = new stdClass();
$Q1_10->e4 = new stdClass();
$Q1_10->e5 = new stdClass();
$Q1_10->e6 = new stdClass();
$Q1_10->e7 = new stdClass();
$Q1_10->e8 = new stdClass();
$Q1_10->e9 = new stdClass();
$Q1_10->e10 = new stdClass();

$Q1_10->e1->n = "1";
$Q1_10->e2->n = "2";
$Q1_10->e3->n = "3";
$Q1_10->e4->n = "4";
$Q1_10->e5->n = "5";
$Q1_10->e6->n = "6";
$Q1_10->e7->n = "7";
$Q1_10->e8->n = "8";
$Q1_10->e9->n = "9";
$Q1_10->e10->n = "10";

$Q1_10->e1->q = "She's always nagging her children.";
$Q1_10->e2->q = "You're always changing your mind.";
$Q1_10->e3->q = "He's always complaining about the food.";
$Q1_10->e4->q = "They're always playing loud music.";
$Q1_10->e5->q = "The kids are always phoning their friends.";
$Q1_10->e6->q = "You're always using my toothbrush.";
$Q1_10->e7->q = "He's always borrowing other people's things.";
$Q1_10->e8->q = "She's always losing her key.";
$Q1_10->e9->q = "You're always leaving the door open.";
$Q1_10->e10->q = "They're always watching video.";

$Q1_10->e1->aw = "I wish she wouldn't nag her children so often.";
$Q1_10->e2->aw = "I wish you wouldn't change your mind so often.";
$Q1_10->e3->aw = "I wish he wouldn't complain about the food so often.";
$Q1_10->e4->aw = "I wish they wouldn't play loud music so often.";
$Q1_10->e5->aw = "I wish the kids wouldn't phone their friends so often.";
$Q1_10->e6->aw = "I wish you wouldn't use my toothbrush so often.";
$Q1_10->e7->aw = "I wish he wouldn't borrow other people's things so often.";
$Q1_10->e8->aw = "I wish she wouldn't lose her key so often.";
$Q1_10->e9->aw = "I wish you wouldn't leave the door open so often.";
$Q1_10->e10->aw = "I wish they wouldn't watch video so often.";

$Q11_20 = new stdClass();
$Q11_20->e1 = new stdClass();
$Q11_20->e2 = new stdClass();
$Q11_20->e3 = new stdClass();
$Q11_20->e4 = new stdClass();
$Q11_20->e5 = new stdClass();
$Q11_20->e6 = new stdClass();
$Q11_20->e7 = new stdClass();
$Q11_20->e8 = new stdClass();
$Q11_20->e9 = new stdClass();
$Q11_20->e10 = new stdClass();

$Q11_20->e1->n = "1";
$Q11_20->e2->n = "2";
$Q11_20->e3->n = "3";
$Q11_20->e4->n = "4";
$Q11_20->e5->n = "5";
$Q11_20->e6->n = "6";
$Q11_20->e7->n = "7";
$Q11_20->e8->n = "8";
$Q11_20->e9->n = "9";
$Q11_20->e10->n = "10";

$Q11_20->e1->q = "You never wash your hands before eating.";
$Q11_20->e2->q = "He never tidies up his own room.";
$Q11_20->e3->q = "She never remembers to bring a towel with her.";
$Q11_20->e4->q = "They never hand in their work on time.";
$Q11_20->e5->q = "You never lock up before going to bed.";
$Q11_20->e6->q = "He never answers my letters.";
$Q11_20->e7->q = "She never indicates before turning right.";
$Q11_20->e8->q = "They never arrive on time.";
$Q11_20->e9->q = "My husband never tells me how beautiful I am.";
$Q11_20->e10->q = "You never buy me flowers.";

$Q11_20->e1->aw = "I wish you would wash your hands before eating.";
$Q11_20->e2->aw = "I wish he would tidy up his own room.";
$Q11_20->e3->aw = "I wish she would remember to bring a towel with her.";
$Q11_20->e4->aw = "I wish they would hand in their work on time.";
$Q11_20->e5->aw = "I wish you would lock up before going to bed.";
$Q11_20->e6->aw = "I wish he would answer my letters.";
$Q11_20->e7->aw = "I wish she would indicate before turning right.";
$Q11_20->e8->aw = "I wish they would arrive on time.";
$Q11_20->e9->aw = "I wish my husband would tell me how beautiful I am.";
$Q11_20->e10->aw = "I wish you would buy me flowers.";


$Q21_30 = new stdClass();
$Q21_30->e1 = new stdClass();
$Q21_30->e2 = new stdClass();
$Q21_30->e3 = new stdClass();
$Q21_30->e4 = new stdClass();
$Q21_30->e5 = new stdClass();
$Q21_30->e6 = new stdClass();
$Q21_30->e7 = new stdClass();
$Q21_30->e8 = new stdClass();
$Q21_30->e9 = new stdClass();
$Q21_30->e10 = new stdClass();

$Q21_30->e1->n = "1";
$Q21_30->e2->n = "2";
$Q21_30->e3->n = "3";
$Q21_30->e4->n = "4";
$Q21_30->e5->n = "5";
$Q21_30->e6->n = "6";
$Q21_30->e7->n = "7";
$Q21_30->e8->n = "8";
$Q21_30->e9->n = "9";
$Q21_30->e10->n = "10";

$Q21_30->e1->q = "Sophie doesn't have a lot of money but would like to.";
$Q21_30->e2->q = "I can't swim but I would like to be able.";
$Q21_30->e3->q = "Fred doesn't speak Japanese but would like to be able.";
$Q21_30->e4->q = "Damien has a lot of spots on his face and doesn't want them.";
$Q21_30->e5->q = "Paul isn't rich but would like to be.";
$Q21_30->e6->q = "The girls can't go swimming but they'd like to.";
$Q21_30->e7->q = "I don't know the answer but I'd like to.";
$Q21_30->e8->q = "Brenda drives an old, worn-out car.";
$Q21_30->e9->q = "I'm not as confident as you are but I'd like to be.";
$Q21_30->e10->q = "You have to leave soon but I don't want you to.";

$Q21_30->e1->aw = "Sophie wishes she had a lot of money.";
$Q21_30->e2->aw = "I wish I could swim.";
$Q21_30->e3->aw = "Fred wishes he spoke Japanese.";
$Q21_30->e4->aw = "Damien wishes he didn't have a lot of spots on his face.";
$Q21_30->e5->aw = "Paul wishes he were rich.";
$Q21_30->e6->aw = "The girls wish they could go swimming.";
$Q21_30->e7->aw = "I wish I knew the answer.";
$Q21_30->e8->aw = "Brenda wishes she didn't drive an old, worn-out car.";
$Q21_30->e9->aw = "I wish I were as confident as you are.";
$Q21_30->e10->aw = "I wish you didn't have to leave soon.";

$Q31_40 = new stdClass();
$Q31_40->e1 = new stdClass();
$Q31_40->e2 = new stdClass();
$Q31_40->e3 = new stdClass();
$Q31_40->e4 = new stdClass();
$Q31_40->e5 = new stdClass();
$Q31_40->e6 = new stdClass();
$Q31_40->e7 = new stdClass();
$Q31_40->e8 = new stdClass();
$Q31_40->e9 = new stdClass();
$Q31_40->e10 = new stdClass();

$Q31_40->e1->n = "1";
$Q31_40->e2->n = "2";
$Q31_40->e3->n = "3";
$Q31_40->e4->n = "4";
$Q31_40->e5->n = "5";
$Q31_40->e6->n = "6";
$Q31_40->e7->n = "7";
$Q31_40->e8->n = "8";
$Q31_40->e9->n = "9";
$Q31_40->e10->n = "10";

$Q31_40->e1->q = "Karen didn't apply for the job and regrets it now.";
$Q31_40->e2->q = "I didn't take the man's phone number and regret it now.";
$Q31_40->e3->q = "She chose heads and regrets it now.";
$Q31_40->e4->q = "He joined the army and regrets it now.";
$Q31_40->e5->q = "She married John and regrets it now.";
$Q31_40->e6->q = "They didn't go to Singapore for a holiday and regret it now.";
$Q31_40->e7->q = "Simon finished off the bottle and regrets it now.";
$Q31_40->e8->q = "Anna didn't have breakfast and regrets it now.";
$Q31_40->e9->q = "John majored in politics and regrets it now.";
$Q31_40->e10->q = "Paul didn't take his parents' advice and regrets it now.";

$Q31_40->e1->aw = "Karen wishes she had applied for the job.";
$Q31_40->e2->aw = "I wish I had taken the man's phone number.";
$Q31_40->e3->aw = "She wishes she hadn't chosen heads.";
$Q31_40->e4->aw = "He wishes he hadn't joined the army.";
$Q31_40->e5->aw = "She wishes she hadn't married John.";
$Q31_40->e6->aw = "They wish they had gone to Singapore for a holiday.";
$Q31_40->e7->aw = "Simon wishes he hadn't finished off the bottle.";
$Q31_40->e8->aw = "Anna wishes she had had breakfast.";
$Q31_40->e9->aw = "John wishes he hadn't majored in politics.";
$Q31_40->e10->aw = "Paul wishes he had taken his parents' advice.";

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
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="exercise1">

                    <p>Listen to the example:</p>
                    <p class="p-0 m-0"><b>e.g. </b>He's always interrupting. </p>
                    <p class="p-0 m-0"><b>Answer: </b>I wish he wouldn't interrupt so often.</p>
                    <p class="pt-2">Now you do it: </p>

                    <table class="w-100">
                        @foreach($Q1_10 as $index => $Q1_10)
                        <tr>
                            <td style="width: 23px;">{{$Q1_10->n}}.</td>
                            <td colspan="2">{{$Q1_10->q}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="pt-2" style="width: 80px;vertical-align:middle;"><b>Answer: </b></td>
                            <td class="pt-2">
                                <input type="text" class="form-control w-75 q-val1" show-aw="Q1_10-{{$index}}" aw="{{$Q1_10->aw}}">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="pb-2">
                                <span class="text-danger Q1_10-{{$index}} aw1">{{$Q1_10->aw}}</span>
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
                    <p class="p-0 m-0"><b>e.g. </b>You never close the door after you.</p>
                    <p class="p-0 m-0"><b>Answer: </b>I wish you would close the door after you</p>
                    <p class="pt-2">Now you do it: </p>

                    <table class="w-100">
                        @foreach($Q11_20 as $index => $Q11_20)
                        <tr>
                            <td style="width: 23px;">{{$Q11_20->n}}.</td>
                            <td colspan="2">{{$Q11_20->q}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="pt-2" style="width: 80px;vertical-align:middle;"><b>Answer: </b></td>
                            <td class="pt-2">
                                <input type="text" class="form-control w-75 q-val2" show-aw="Q11_20-{{$index}}" aw="{{$Q11_20->aw}}">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="pb-2">
                                <span class="text-danger Q11_20-{{$index}} aw2">{{$Q11_20->aw}}</span>
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
                    <p class="p-0 m-0"><b>e.g. </b>John doesn't live in Perth but would like to. </p>
                    <p class="p-0 m-0"><b>Answer: </b>John wishes he lived in Perth. </p>
                    <p class="pt-2 m-0"><b>e.g. </b>I have to go to work but I don't want to. </p>
                    <p class="p-0 m-0"><b>Answer: </b>I wish I didn't have to go to work. </p>
                    <p class="pt-2">Now you do it: </p>

                    <table class="w-100">
                        @foreach($Q21_30 as $index => $Q21_30)
                        <tr>
                            <td style="width: 23px;">{{$Q21_30->n}}.</td>
                            <td colspan="2">{{$Q21_30->q}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="pt-2" style="width: 80px;vertical-align:middle;"><b>Answer: </b></td>
                            <td class="pt-2">
                                <input type="text" class="form-control w-75 q-val3" show-aw="Q21_30-{{$index}}" aw="{{$Q21_30->aw}}">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="pb-2">
                                <span class="text-danger Q21_30-{{$index}} aw3">{{$Q21_30->aw}}</span>
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
                    <p class="p-0 m-0"><b>e.g. </b>Peter didn't work hard for the exam and regrets it now</p>
                    <p class="p-0 m-0"><b>Answer: </b>Peter wishes he had worked hard for the exam. </p>
                    <p class="pt-2 m-0"><b>e.g. </b>I bought the red dress and regret it now. </p>
                    <p class="p-0 m-0"><b>Answer: </b>I wish I hadn't bought the red dress.</p>
                    <p class="pt-2">Now you do it: </p>

                    <table class="w-100">
                        @foreach($Q31_40 as $index => $Q31_40)
                        <tr>
                            <td style="width: 23px;">{{$Q31_40->n}}.</td>
                            <td colspan="2">{{$Q31_40->q}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="pt-2" style="width: 80px;vertical-align:middle;"><b>Answer: </b></td>
                            <td class="pt-2">
                                <input type="text" class="form-control w-75 q-val4" show-aw="Q31_40-{{$index}}" aw="{{$Q31_40->aw}}">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="pb-2">
                                <span class="text-danger Q31_40-{{$index}} aw4">{{$Q31_40->aw}}</span>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    <div class="mt-3 d-flex justify-content-center">
                        <button id="check-answer4" class="btn btn-info">Check Answers</button>
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