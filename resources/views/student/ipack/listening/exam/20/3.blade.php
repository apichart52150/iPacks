@section('css')
<style>
    table tr .awswer {
        vertical-align: middle;
    }

    .aw1,.aw2,.aw3 {
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

$Q1_10->e1->q = "This is a photo of our friends. We went on holiday with them.";
$Q1_10->e2->q = "I've just bought some books on astronomy. I'm very interested in astronomy.";
$Q1_10->e3->q = "The girl in the photo works for the government. I used to go out with her.";
$Q1_10->e4->q = "The play was criticised badly. I starred in that play.";
$Q1_10->e5->q = "Justin Small became a famous artist. I went to school with him.";
$Q1_10->e6->q = "John Smith didn't win the election. I voted for John Smith.";
$Q1_10->e7->q = "Sarah Jones is the new President of the club. I had dinner with her last night.";
$Q1_10->e8->q = "The use of electro-shock treatment is increasing. Doctors know very little about it.";
$Q1_10->e9->q = "The man is the project engineer. You should write to this man.";
$Q1_10->e10->q = "The aorta is the principal artery. Blood flows to the brain through this artery.";

$Q1_10->e1->aw = "This is a photo of our friends, with whom we went on holiday.";
$Q1_10->e2->aw = "I've just bought some books on astronomy, in which I'm very interested.";
$Q1_10->e3->aw = "The girl in the photo, with whom I used to go out, works for the government.";
$Q1_10->e4->aw = "The play in which I starred was criticised badly.";
$Q1_10->e5->aw = "Justin Small, with whom I went to school, became a famous artist.";
$Q1_10->e6->aw = "John Smith, for whom I voted, didn't win the election.";
$Q1_10->e7->aw = "Sarah Jones, with whom I had dinner last night, is the new president of the club.";
$Q1_10->e8->aw = "The use of electro-shock treatment, about which doctors know very little, is increasing.";
$Q1_10->e9->aw = "The man to whom you should write is the project engineer.";
$Q1_10->e10->aw = "The aorta is the principal artery through which blood flows to the brain.";

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

$Q11_20->e1->q = "The actress has played in countless films. I can't remember her name right now.";
$Q11_20->e2->q = "Perth has a pollution problem. Perth's air should be very clean.";
$Q11_20->e3->q = "Jeremy Baker is a very modest person. His book has sold a million copies.";
$Q11_20->e4->q = "Dr Jones has just been promoted. His contribution to the college is minimal.";
$Q11_20->e5->q = "Millions of dollars are being spent on the program. The program's popularity is increasing rapidly.";
$Q11_20->e6->q = "The people were evacuated. Their homes were swept away.";
$Q11_20->e7->q = "Senator Jones has been posted to Cambodia. His daughter has just got married.";
$Q11_20->e8->q = "Julie Andrews is promoting a new restaurant. Her name is famous for indigestion relief.";
$Q11_20->e9->q = "The Indian python is a species of snake. The existence of this snake is under threat.";
$Q11_20->e10->q = "The scientist received the Nobel Prize. His research led to a cure for cancer.";

$Q11_20->e1->aw = "The actress, whose name I can't remember right now, has played in countless films.";
$Q11_20->e2->aw = "Perth, whose air should be very clean, has a pollution problem.";
$Q11_20->e3->aw = "Jeremy Baker, whose book has sold a million copies, is a very modest person.";
$Q11_20->e4->aw = "Dr Jones, whose contribution to the college is minimal, has just been promoted.";
$Q11_20->e5->aw = "Millions of dollars are being spent on the program, whose popularity is increasing rapidly.";
$Q11_20->e6->aw = "The people whose homes were swept away were evacuated.";
$Q11_20->e7->aw = "Senator Jones, whose daughter has just got married, has been posted to Cambodia.";
$Q11_20->e8->aw = "Julie Andrews, whose name is famous for indigestion relief, is promoting a new restaurant.";
$Q11_20->e9->aw = "The Indian python is a species of snake whose existence is under threat.";
$Q11_20->e10->aw = "The scientist, whose research led to a cure for cancer, received the Nobel Prize.";

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

$Q21_30->e1->q = "The tenants wrote a letter of complaint. Most of them had been subjected to harassment.";
$Q21_30->e2->q = "The books on the shelf belong to me. Some of them are antique.";
$Q21_30->e3->q = "They gave us a lot of information. Most of it was useless.";
$Q21_30->e4->q = "Norman won a million dollars on Lotto. He gave half of it to his parents.";
$Q21_30->e5->q = "There were a lot of people at the party. I had met only a few of them before.";
$Q21_30->e6->q = "Ten people applied for the job. None of them was suitable.";
$Q21_30->e7->q = "Tom made a number of suggestions. Most of them were very helpful.";
$Q21_30->e8->q = "I have sent him two letters. Neither of them has arrived.";
$Q21_30->e9->q = "I tried a lot of new dishes at the party. I hadn't tasted most of them before.";
$Q21_30->e10->q = "Dozens of people entered the race. Almost all of them failed to finish.";

$Q21_30->e1->aw = "The tenants, most of whom had been subjected to harassment, wrote a letter of complaint.";
$Q21_30->e2->aw = "The books on the shelf, some of which are antique, belong to me.";
$Q21_30->e3->aw = "They gave us a lot of information, most of which was useless.";
$Q21_30->e4->aw = "Norman won a million dollars on Lotto, half of which he gave to his parents.";
$Q21_30->e5->aw = "There were a lot of people at the party, only a few of whom I had met before.";
$Q21_30->e6->aw = "Ten people, none of whom was suitable, applied for the job.";
$Q21_30->e7->aw = "Tom made a number of suggestions, most of which were very helpful.";
$Q21_30->e8->aw = "I have sent him two letters, neither of which has arrived.";
$Q21_30->e9->aw = "I tried a lot of new dishes at the party, most of which I hadn't tasted before.";
$Q21_30->e10->aw = "Dozens of people, almost all of whom failed to finish, entered the race.";

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
                    <p class="p-0 m-0"><b>e.g. </b>Mr Carter is very interested in our plan. I spoke to him late last night. </p>
                    <p class="p-0 m-0"><b>Answer: </b>Mr Carter, to whom I spoke late last night, is very interested in our plan.</p>
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
                    <table>
                        <tr>
                            <td><b>e.g.</b></td>
                            <td>The King of Xanadu was deposed by a popular revolution. </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>The United States had supported his government. </td>
                        </tr>
                    </table>
                    <p class="p-0 m-0"><b>Answer: </b>I'd rather you brought your own book.</p>
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
                    <p class="p-0 m-0"><b>e.g. </b>The line-up consisted of eight different men. One of them was the chief suspect. </p>
                    <p class="p-0 m-0"><b>Answer: </b>The line-up consisted of 8 different men, one of whom was the chief suspect.</p>
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