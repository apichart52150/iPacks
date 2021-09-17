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

    $Q_1->e1->q = "I'm sorry. I didn't mean to offend you.";
    $Q_1->e2->q = "I'm sorry. I didn't mean to be rude.";
    $Q_1->e3->q = "I'm sorry. I didn't mean to spoil the surprise.";
    $Q_1->e4->q = "I'm sorry. I didn't mean to hurt your feelings.";
    $Q_1->e5->q = "I'm sorry. I didn't mean to let the side down.";
    $Q_1->e6->q = "I'm sorry. I didn't mean to cause any problems.";
    $Q_1->e7->q = "I'm sorry. I didn't mean to disturb you.";
    $Q_1->e8->q = "I'm sorry. I didn't mean to wake the children.";
    $Q_1->e9->q = "I'm sorry. I didn't mean to interrupt your work.";
    $Q_1->e10->q = "I'm sorry. I didn't mean to make too much noise.";

    $Q_1->e1->aw = "I apologize for offending you";
    $Q_1->e2->aw = "I apologize for being rude";
    $Q_1->e3->aw = "I apologize for spoiling the surprise";
    $Q_1->e4->aw = "I apologize for hurting your feelings";
    $Q_1->e5->aw = "I apologize for letting the side down";
    $Q_1->e6->aw = "I apologize for causing any problems";
    $Q_1->e7->aw = "I apologize for disturbing you";
    $Q_1->e8->aw = "I apologize for waking the children";
    $Q_1->e9->aw = "I apologize for interrupting your work";
    $Q_1->e10->aw = "I apologize for making too much noise";

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

    $Q_2->e1->q = "She walked by me. She didn't say 'hello'.";
    $Q_2->e2->q = "John completed the race. He didn't feel tired.";
    $Q_2->e3->q = "They got down to work. They didn't waste any time.";
    $Q_2->e4->q = "The team finished the season. They didn't lose a game.";
    $Q_2->e5->q = "The woman rescued the baby. She didn't think about the danger.";
    $Q_2->e6->q = "The driver went through the red light. He didn't stop.";
    $Q_2->e7->q = "The prisoner survived ten weeks. He didn't eat.";
    $Q_2->e8->q = "The girl got on the bus. She didn't queue.";
    $Q_2->e9->q = "The police officer dived into the icy water. He didn't think about the danger.";
    $Q_2->e10->q = "Paul left the house. He didn't eat any breakfast.";

    $Q_2->e1->aw = "She walked by me without saying 'hello'";
    $Q_2->e2->aw = "John completed the race without feeling tired";
    $Q_2->e3->aw = "They got down to work without wasting any time";
    $Q_2->e4->aw = "The team finished the season without losing a game";
    $Q_2->e5->aw = "The woman rescued the baby without thinking about the danger";
    $Q_2->e6->aw = "The driver went through the red light without stopping";
    $Q_2->e7->aw = "The prisoner survived ten weeks without eating";
    $Q_2->e8->aw = "The girl got on the bus without queuing";
    $Q_2->e9->aw = "The police officer dived into the icy water without thinking about the danger";
    $Q_2->e10->aw = "Paul left the house without eating any breakfast";

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

    $Q_3->e1->q = "I like going to discos but I like going to parties more. ";
    $Q_3->e2->q = "Joe likes long-jumping but he likes high-jumping more. ";
    $Q_3->e3->q = "Jenny likes cooking but she enjoys eating out more. ";
    $Q_3->e4->q = "Anna likes painting but she likes sculpting more. ";
    $Q_3->e5->q = "I like taking part but I enjoy winning more. ";
    $Q_3->e6->q = "Linda likes horse-riding but she likes cycling more. ";
    $Q_3->e7->q = "I like swimming in the pool but I like swimming in the sea more. ";
    $Q_3->e8->q = "Fred enjoys snorkelling but he likes scuba-diving more. ";
    $Q_3->e9->q = "Tanya likes watching videos but she enjoys going to the cinema more.";
    $Q_3->e10->q = "I like baking cakes but I enjoy eating them more. ";

    $Q_3->e1->aw = "I prefer going to parties to going to discos";
    $Q_3->e2->aw = "Joe prefers high-jumping to long-jumping";
    $Q_3->e3->aw = "Jenny prefers eating out to cooking";
    $Q_3->e4->aw = "Anna prefers sculpting to painting";
    $Q_3->e5->aw = "I prefer winning to taking part";
    $Q_3->e6->aw = "Linda prefers cycling to horse-riding";
    $Q_3->e7->aw = "I prefer swimming in the sea to swimming in the pool";
    $Q_3->e8->aw = "Fred prefers scuba-diving to snorkelling";
    $Q_3->e9->aw = "Tanya prefers going to the cinema to watching videos";
    $Q_3->e10->aw = "I prefer eating cakes to baking them";

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

    $Q_4->e1->q = "He did the washing-up. Then he watched football on TV.";
    $Q_4->e2->q = "She wrote two letters. Then she went out.";
    $Q_4->e3->q = "The plane took off. Then it climbed to 30,000 feet.";
    $Q_4->e4->q = "I finished the book. Then I went to bed.";
    $Q_4->e5->q = "She phoned for a taxi. Then she waited in the hallway.";
    $Q_4->e6->q = "He bought a blank video tape. Then he recorded the film.";
    $Q_4->e7->q = "She discovered the body. Then she called the police.";
    $Q_4->e8->q = "The boss dictated a letter. Then she attended a meeting.";
    $Q_4->e9->q = "I said 'goodbye' to the last guest. Then I locked the door.";
    $Q_4->e10->q = "He turned on the ignition. Then he put the car into gear.";

    $Q_4->e1->aw = "After doing the washing-up, he watched football on TV";
    $Q_4->e2->aw = "After writing 2 letters, she went out";
    $Q_4->e3->aw = "After taking off, the plane climbed to 30,000 feet";
    $Q_4->e4->aw = "After finishing the book, I went to bed";
    $Q_4->e5->aw = "After phoning for a taxi, she waited in the hallway";
    $Q_4->e6->aw = "After buying a blank video tape, he recorded the film";
    $Q_4->e7->aw = "After discovering the body, she called the police";
    $Q_4->e8->aw = "After dictating a letter, the boss attended a meeting";
    $Q_4->e9->aw = "After saying 'goodbye' to the last guest, I locked the door";
    $Q_4->e10->aw = "After turning on the ignition, he put the car into gear";

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

    $Q_5->e1->q = "She felt ill but she came to school.";
    $Q_5->e2->q = "They were poor but they gave some money to charity.";
    $Q_5->e3->q = "He can't swim but he enjoys playing in the sea.";
    $Q_5->e4->q = "She didn't work very hard but she passed the exam.";
    $Q_5->e5->q = "He had to walk to work every day but he was never late.";
    $Q_5->e6->q = "They lost the game but they still won the championship.";
    $Q_5->e7->q = "I can't speak Japanese but I spend all my holidays in Tokyo.";
    $Q_5->e8->q = "I don't like windy weather but I enjoy living in Perth.";
    $Q_5->e9->q = "We were tired but we decided to go dancing.";
    $Q_5->e10->q = "She could read and write French but she couldn't speak it.";

    $Q_5->e1->aw = "Despite feeling ill, she came to school";
    $Q_5->e2->aw = "Despite being poor, they gave some money to charity";
    $Q_5->e3->aw = "Despite not being able to swim, he enjoys playing in the sea";
    $Q_5->e4->aw = "Despite not working very hard, she passed the exam";
    $Q_5->e5->aw = "Despite having to walk to work every day, he was never late";
    $Q_5->e6->aw = "Despite losing the game, they still won the championship";
    $Q_5->e7->aw = "Despite not being able to speak Japanese, I spend all my holidays in Tokyo";
    $Q_5->e8->aw = "Despite not liking windy weather, I enjoy living in Perth";
    $Q_5->e9->aw = "Despite being tired, we decided to go dancing";
    $Q_5->e10->aw = "Despite being able to read and write French, she couldn't speak it";

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

    $Q_6->e1->q = "He put the cat out. Then he went to bed";
    $Q_6->e2->q = "She turned the television off. Then she had a shower";
    $Q_6->e3->q = "The program finished. Then she turned the TV off";
    $Q_6->e4->q = "Tommy did his homework. Then he went out to play";
    $Q_6->e5->q = "They completed the exercise but they still didn't understand it";
    $Q_6->e6->q = "He had his car serviced but it still didn't run smoothly";
    $Q_6->e7->q = "Mary checked her baggage in and went through immigration control";
    $Q_6->e8->q = "The referee blew his whistle and the game started";
    $Q_6->e9->q = "The athlete broke his leg and had to retire from athletics";
    $Q_6->e10->q = "The secretary typed the letter and then the boss signed it";

    $Q_6->e1->aw = "After putting the cat out, he went to bed";
    $Q_6->e2->aw = "After turning the television off, she had a shower";
    $Q_6->e3->aw = "After the program had finished, she turned the TV off";
    $Q_6->e4->aw = "After doing his homework, Tommy went out to play";
    $Q_6->e5->aw = "After completing the exercise, they still didn't understand it";
    $Q_6->e6->aw = "After he had had his car serviced, it still didn't run smoothly";
    $Q_6->e7->aw = "After checking her baggage in, Mary went through immigration control";
    $Q_6->e8->aw = "After the refereee had blown his whistle, the game started";
    $Q_6->e9->aw = "After breaking his leg, the athlete had to retire from athletics";
    $Q_6->e10->aw = "After the secretary had typed the letter, the boss signed it";

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

                    <h3>apologise for …ing</h3>
                    <p>Listen to the example:</p>
                    <p class="p-0 m-0"><b>e.g. </b>I'm sorry. I didn't mean to hurt you.</p>
                    <p class="p-0 m-0"><b>Answer: </b>I apologize for hurting you. </p>
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

                    <h3>without …ing</h3>
                    <p>Listen to the example:</p>
                    <p class="p-0 m-0"><b>e.g. </b>He crossed the road. He didn't look.</p>
                    <p class="p-0 m-0"><b>Answer: </b>He crossed the road without looking.</p>
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

                    <h3>prefer …ing</h3>
                    <p>Listen to the example:</p>
                    <p class="p-0 m-0"><b>e.g. </b>I like swimming but I like jogging more. </p>
                    <p class="p-0 m-0"><b>Answer: </b>I prefer jogging to swimming. </p>
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

                    <h3>after …ing</h3>
                    <p>Listen to the example:</p>
                    <p class="p-0 m-0"><b>e.g. </b>He put the cat out. Then he went to bed. </p>
                    <p class="p-0 m-0"><b>Answer: </b>After putting the cat out, he went to bed. </p>
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

                    <h3>Despite / In spite of …ing</h3>
                    <p>Listen to the example:</p>
                    <p class="p-0 m-0"><b>e.g. </b>He hurt his knee but he finished the race. </p>
                    <p class="p-0 m-0"><b>Answer: </b>Despite hurting his knee, he finished the race. </p>
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

                    <h3>Gerunds V Past Perfect </h3>
                    <p>Listen to the example:</p>
                    <p class="p-0 m-0"><b>e.g. </b>The plane took off. Then it crashed. </p>
                    <p class="p-0 m-0"><b>Answer: </b>After taking off, the plane crashed.</p>
                    <p class="pt-2 m-0"><b>e.g. </b>The sun went down. Then we had a drink.</p>
                    <p class="p-0 m-0"><b>Answer: </b>After the sun had gone down, we had a drink.</p>
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