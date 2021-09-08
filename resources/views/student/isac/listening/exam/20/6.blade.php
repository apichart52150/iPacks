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

$Q_1->e1->q = "I've never met such a lazy person in all my life.";
$Q_1->e2->q = "I've seldom tasted such delicious food.";
$Q_1->e3->q = "I've rarely experienced such fine hospitality.";
$Q_1->e4->q = "I've never seen such a beautiful painting.";
$Q_1->e5->q = "I've seldom met such friendly people.";
$Q_1->e6->q = "I've never been treated with such contempt.";
$Q_1->e7->q = "I've rarely had such a good time.";
$Q_1->e8->q = "I've seldom read such a moving book.";
$Q_1->e9->q = "I've never taken such a long time to finish a job.";
$Q_1->e10->q = "I've rarely had such pleasure in playing to an audience.";

$Q_1->e1->aw = "Never have I met such a lazy person";
$Q_1->e2->aw = "Seldom have I tasted such delicious food";
$Q_1->e3->aw = "Rarely have I experienced such fine hospitality";
$Q_1->e4->aw = "Never have I seen such a beautiful painting";
$Q_1->e5->aw = "Seldom have I met such friendly people";
$Q_1->e6->aw = "Never have I been treated with such contempt";
$Q_1->e7->aw = "Rarely have I had such a good time";
$Q_1->e8->aw = "Seldom have I read such a moving book";
$Q_1->e9->aw = "Never have I taken such a long time to finish a job";
$Q_1->e10->aw = "Rarely have I had such pleasure in playing to an audience";

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

$Q_2->e1->q = "As soon as I turned the computer on, a fuse blew.";
$Q_2->e2->q = "As soon as the plane landed, security guards surrounded the airport.";
$Q_2->e3->q = "As soon as the match began, spectators invaded the pitch.";
$Q_2->e4->q = "As soon as the programme finished, he switched off the TV.";
$Q_2->e5->q = "As soon as she finished reading one book, she started another.";
$Q_2->e6->q = "As soon as the bell rang, the teacher dismissed the students.";
$Q_2->e7->q = "As soon as I heard the news, I telephoned my family.";
$Q_2->e8->q = "As soon as the coastguard saw the shark, the beach was closed.";
$Q_2->e9->q = "As soon as the officer gave the order, the soldiers opened fire.";
$Q_2->e10->q = "As soon as he passed the driving test, his father bought him a new car.";

$Q_2->e1->aw = "No sooner had I turned the computer on than a fuse blew";
$Q_2->e2->aw = "No sooner had the plane landed than security guards surrounded the airport";
$Q_2->e3->aw = "No sooner had the match begun than spectators invaded the pitch";
$Q_2->e4->aw = "No sooner had the program finished than he switched off the TV";
$Q_2->e5->aw = "No sooner had she finished reading one book than she started another";
$Q_2->e6->aw = "No sooner had the bell rung than the teacher dismissed the students";
$Q_2->e7->aw = "No sooner had I heard the news than I telephoned my family";
$Q_2->e8->aw = "No sooner had the coastguard seen the shark than the beach was closed";
$Q_2->e9->aw = "No sooner had the officer given the order than the soldiers opened fire";
$Q_2->e10->aw = "No sooner had he passed the driving test than his father bought him a new car";

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

$Q_3->e1->q = "Whatever you do, don't arrive late.";
$Q_3->e2->q = "Whatever you do, don't open that door.";
$Q_3->e3->q = "Whatever you do, don't put your hand through the bars.";
$Q_3->e4->q = "Whatever you do, don't go too near the edge.";
$Q_3->e5->q = "Whatever you do, don't feed the animals.";
$Q_3->e6->q = "Whatever you do, don't drink and drive.";
$Q_3->e7->q = "Whatever you do, don't walk home alone at night.";
$Q_3->e8->q = "Whatever you do, don't overtake on a blind bend.";
$Q_3->e9->q = "Whatever you do, don't become over-confident.";
$Q_3->e10->q = "Whatever you do, don't swim in this lake.";

$Q_3->e1->aw = "On no account must you arrive late";
$Q_3->e2->aw = "On no account must you open that door";
$Q_3->e3->aw = "On no account must you put your hand through the bars";
$Q_3->e4->aw = "On no account must you go too near the edge";
$Q_3->e5->aw = "On no account must you feed the animals";
$Q_3->e6->aw = "On no account must you drink and drive";
$Q_3->e7->aw = "On no account must you walk home alone at night";
$Q_3->e8->aw = "On no account must you overtake on a blind bend";
$Q_3->e9->aw = "On no account must you become over-confident";
$Q_3->e10->aw = "On no account must you swim in this lake";

$Q_4 = new stdClass();
$Q_4->e1 = new stdClass();
$Q_4->e2 = new stdClass();
$Q_4->e3 = new stdClass();
$Q_4->e4 = new stdClass();
$Q_4->e5 = new stdClass();
$Q_4->e6 = new stdClass();
$Q_4->e7 = new stdClass();
$Q_4->e8 = new stdClass();

$Q_4->e1->n = "1";
$Q_4->e2->n = "2";
$Q_4->e3->n = "3";
$Q_4->e4->n = "4";
$Q_4->e5->n = "5";
$Q_4->e6->n = "6";
$Q_4->e7->n = "7";
$Q_4->e8->n = "8";

$Q_4->e1->q = "If you'd sent the application earlier, you might have got the job.";
$Q_4->e2->q = "If he had arrived on time, he wouldn't have missed the train.";
$Q_4->e3->q = "If you hear any news, please keep me informed.";
$Q_4->e4->q = "If it stops raining within the next hour, we'll set out immediately.";
$Q_4->e5->q = "If we won all the remaining games, we would still finish last.";
$Q_4->e6->q = "If I'd realised it was you, I would've opened the door.";
$Q_4->e7->q = "If you finished the project on time, the boss would be delighted.";
$Q_4->e8->q = "If the drought continues much longer, the crops will be ruined.";

$Q_4->e1->aw = "Had you sent the application earlier, you might have got the job";
$Q_4->e2->aw = "Had he arrived on time, he wouldn't have missed the train";
$Q_4->e3->aw = "Should you hear any news, please keep me informed";
$Q_4->e4->aw = "Should it stop raining within the next hour, we'll set out immediately";
$Q_4->e5->aw = "Were we to win all the remaining games, we would still finish last";
$Q_4->e6->aw = "Had I realised it was you, I would've opened the door";
$Q_4->e7->aw = "Were you to finish the project on time, the boss would be delighted";
$Q_4->e8->aw = "Should the drought continue much longer, the crops will be ruined";

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

$Q_5->e1->q = "They didn't have enough money for a house until they had saved for ten years.";
$Q_5->e2->q = "I didn't realise I'd lost my purse until I got home.";
$Q_5->e3->q = "The full extent of the damage wasn't known until the flood water went down.";
$Q_5->e4->q = "I wasn't able to close the account until all the cheques had been cleared.";
$Q_5->e5->q = "He didn't notice the roof had a leak until the ceiling collapsed.";
$Q_5->e6->q = "We couldn't fall asleep until the party ended.";
$Q_5->e7->q = "She didn't feel strong enough to continue until she had some food.";
$Q_5->e8->q = "The plane couldn't land until the runway was cleared.";
$Q_5->e9->q = "I won't forgive you until you beg for mercy.";
$Q_5->e10->q = "The temperature didn't drop until the sun went down.";

$Q_5->e1->aw = "Only when they had saved for ten years did they have enough money for a house";
$Q_5->e2->aw = "Only when I got home did I realise I'd lost my purse";
$Q_5->e3->aw = "Only when the flood water went down was the full extent of the damage known";
$Q_5->e4->aw = "Only when all the cheques had been cleared was I able to close the account";
$Q_5->e5->aw = "Only when the ceiling collapsed did he notice the roof had a leak";
$Q_5->e6->aw = "Only when the party ended could we fall asleep";
$Q_5->e7->aw = "Only when she had some food did she feel strong enough to continue";
$Q_5->e8->aw = "Only when the runway was cleared could the plane land";
$Q_5->e9->aw = "Only when you beg for mercy will I forgive you";
$Q_5->e10->aw = "Only when the sun went down did the temperature drop";

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

$Q_6->e1->q = "She plays netball and she swims well, too.";
$Q_6->e2->q = "The college offers degree courses and runs hobby courses, too.";
$Q_6->e3->q = "The woman owns the store and she manages it, too.";
$Q_6->e4->q = "He plays the piano and composes his own songs, too.";
$Q_6->e5->q = "The restaurant serves European dishes and sells Asian food, too.";
$Q_6->e6->q = "The bank makes loans to first-time buyers and offers mortgages to investors too.";
$Q_6->e7->q = "He holds the record in the 1500 metres and has broken the 100 metres, too.";
$Q_6->e8->q = "She has six children and works full-time, too.";
$Q_6->e9->q = "Your work is illegible and lacks cohesion, too.";
$Q_6->e10->q = "This donation will help many poor people and it will create new jobs, too.";

$Q_6->e1->aw = "Not only does she play netball but she also swims well";
$Q_6->e2->aw = "Not only does the college offer degree courses but it also runs hobby courses";
$Q_6->e3->aw = "Not only does the woman own the store but she also manages it";
$Q_6->e4->aw = "Not only does he play the piano but he also composes his own songs";
$Q_6->e5->aw = "Not only does the restaurant serve European dishes but it also sells Asian food";
$Q_6->e6->aw = "Not only does the bank make loans to first-time buyers but it also offers mortgages to investors";
$Q_6->e7->aw = "Not only does he hold the record in the 1500 metres but he has also broken the 100 metres";
$Q_6->e8->aw = "Not only does she have six children but she also works full-time";
$Q_6->e9->aw = "Not only is your work illegible but it also lacks cohesion";
$Q_6->e10->aw = "Not only will this donation help many poor people but it will also create new jobs";

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

                    <h3>rarely/ seldom/ never</h3>
                    <p>Listen to the example:</p>
                    <p class="p-0 m-0"><b>e.g. </b>I have never tasted such good coffee. </p>
                    <p class="p-0 m-0"><b>Answer: </b>Never have I tasted such good coffee.</p>
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

                    <h3>No sooner...than... </h3>
                    <p>Listen to the example:</p>
                    <p class="p-0 m-0"><b>e.g. </b>As soon as I arrived home, it started raining. </p>
                    <p class="p-0 m-0"><b>Answer: </b>No sooner had I arrived home than it started raining. </p>
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

                    <h3>On no account…</h3>
                    <p>Listen to the example:</p>
                    <p class="p-0 m-0"><b>e.g. </b>Whatever you do, don't pull that handle.</p>
                    <p class="p-0 m-0"><b>Answer: </b>On no account must you pull that handle.</p>
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

                <div class="tab-pane fade" id="exercise4">

                    <h3>Conditionals</h3>
                    <p>Listen to the example:</p>
                    <p class="p-0 m-0"><b>e.g. </b>If you see my sister, tell her to come home right away.</p>
                    <p class="p-0 m-0"><b>Answer: </b>Should you see my sister, tell her to come home right away</p>
                    <p class="pt-2 m-0"><b>e.g. </b>If you apologised personally, I still wouldn't forgive you.</p>
                    <p class="p-0 m-0"><b>Answer: </b>Were you to apologise personally, I still wouldn't forgive you. </p>
                    <p class="pt-2 m-0"><b>e.g. </b>If I had known you were busy, I wouldn't have interrupted. </p>
                    <p class="p-0 m-0"><b>Answer: </b>Had I known you were busy, I wouldn't have interrupted. </p>
                    <p class="pt-2">Now you do it: </p>

                    <table class="w-100">
                        @foreach($Q_4 as $index => $Q_4)
                        <tr>
                            <td style="width: 23px;">{{$Q_4->n}}.</td>
                            <td colspan="2">{{$Q_4->q}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="pt-2" style="width: 80px;vertical-align:middle;"><b>Answer: </b></td>
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

                    <h3>Only when …</h3>
                    <p>Listen to the example:</p>
                    <p class="p-0 m-0"><b>e.g. </b>He didn't know his wife was ill until he phoned home. </p>
                    <p class="p-0 m-0"><b>Answer: </b>Only when he phoned home did he know his wife was ill. </p>
                    <p class="pt-2">Now you do it: </p>

                    <table class="w-100">
                        @foreach($Q_5 as $index => $Q_5)
                        <tr>
                            <td style="width: 23px;">{{$Q_5->n}}.</td>
                            <td colspan="2">{{$Q_5->q}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="pt-2" style="width: 80px;vertical-align:middle;"><b>Answer: </b></td>
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

                    <h3>Not only…but … also</h3>
                    <p>Listen to the example:</p>
                    <p class="p-0 m-0"><b>e.g. </b>She breeds cattle and she grows wheat, too. </p>
                    <p class="p-0 m-0"><b>Answer: </b>Not only does she breed cattle but she also grows wheat.</p>
                    <p class="pt-2">Now you do it: </p>

                    <table class="w-100">
                        @foreach($Q_6 as $index => $Q_6)
                        <tr>
                            <td style="width: 23px;">{{$Q_6->n}}.</td>
                            <td colspan="2">{{$Q_6->q}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="pt-2" style="width: 80px;vertical-align:middle;"><b>Answer: </b></td>
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