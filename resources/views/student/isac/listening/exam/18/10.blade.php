@section('css')
<style>
    table tr .awswer {
        vertical-align: middle;
    }
    .input-con {
        display: inline-block;
        position: relative;
    }

    img {
        width: 100px;
    }

    .aw1,
    .aw2,
    .aw3,
    .aw4,
    .aw5,
    .aw6 {
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

$Q_1->e1->q = "We go shopping every Thursday.";
$Q_1->e2->q = "The boys fly their kites in the park. ";
$Q_1->e3->q = "The girls go to school on their bikes.";
$Q_1->e4->q = "Richard does his best at school.";
$Q_1->e5->q = "You speak English well.";
$Q_1->e6->q = "The bus driver needs glasses.";
$Q_1->e7->q = "Dave and Simon drive red cars.";
$Q_1->e8->q = "I know the answer.";
$Q_1->e9->q = "We water the garden every evening.";
$Q_1->e10->q = "The children go to bed at eight o'clock in the evening.";

$Q_1->e1->q2 = "(They)";
$Q_1->e2->q2 = "(The girls)";
$Q_1->e3->q2 = "(The boys)";
$Q_1->e4->q2 = "(Tony)";
$Q_1->e5->q2 = "(I)";
$Q_1->e6->q2 = "(The taxi driver)";
$Q_1->e7->q2 = "(Jill)";
$Q_1->e8->q2 = "(You)";
$Q_1->e9->q2 = "(Some people)";
$Q_1->e10->q2 = "(We)";

$Q_1->e1->aw = "They don't go shopping every Thursday";
$Q_1->e2->aw = "The girls don't fly their kites in the park";
$Q_1->e3->aw = "The boys don't go to school on their bikes";
$Q_1->e4->aw = "Tony doesn't do his best at school";
$Q_1->e5->aw = "I don't speak English well";
$Q_1->e6->aw = "The taxi driver doesn't need glasses";
$Q_1->e7->aw = "Jill doesn't drive a red car";
$Q_1->e8->aw = "You don't know the answer";
$Q_1->e9->aw = "Some people don't water the garden every evening";
$Q_1->e10->aw = "We don't go to bed at eight o'clock in the evening";

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

$Q_2->e1->q = "They play football in the park.";
$Q_2->e2->q = "I feed the cat at 7 o'clock.";
$Q_2->e3->q = "The teachers mark the books in the evening.";
$Q_2->e4->q = "The young child likes to drink milk.";
$Q_2->e5->q = "I get up at half past six.";
$Q_2->e6->q = "The girls do their work in the library.";
$Q_2->e7->q = "The boys watch television in the afternoon.";
$Q_2->e8->q = "Toby writes the answers in his book.";
$Q_2->e9->q = "We keep our money in a secret box.";
$Q_2->e10->q = "Dan reads a newspaper every day.";

$Q_2->e1->aw = "Where do they play footie?";
$Q_2->e2->aw = "When do you feed the cat?";
$Q_2->e3->aw = "When do the teachers mark the books?";
$Q_2->e4->aw = "What does the young child like to drink?";
$Q_2->e5->aw = "What time do you get up?";
$Q_2->e6->aw = "Where do the girls do their work?";
$Q_2->e7->aw = "When do the boys watch television?";
$Q_2->e8->aw = "Where does Toby write the answers?";
$Q_2->e9->aw = "Where do you keep your money?";
$Q_2->e10->aw = "What does Dan read every day?";

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

$Q_3->e1->q = "They wash their hands before dinner.";
$Q_3->e2->q = "We watch the early news.";
$Q_3->e3->q = "The children catch the 8 o'clock bus.";
$Q_3->e4->q = "I clean my teeth after breakfast.";
$Q_3->e5->q = "Harry reads a magazine in the morning.";
$Q_3->e6->q = "It rains a lot in August. ";
$Q_3->e7->q = "I can do the homework on time.";
$Q_3->e8->q = "David is hungry when he arrives home.";
$Q_3->e9->q = "I eat fish on Fridays.";
$Q_3->e10->q = "We play chess before bedtime.";

$Q_3->e1->q2 = "(never)";
$Q_3->e2->q2 = "(always)";
$Q_3->e3->q2 = " (usually)";
$Q_3->e4->q2 = "(usually)";
$Q_3->e5->q2 = "(often)";
$Q_3->e6->q2 = "(sometimes)";
$Q_3->e7->q2 = "(usually)";
$Q_3->e8->q2 = "(always)";
$Q_3->e9->q2 = "(never)";
$Q_3->e10->q2 = "(sometimes)";

$Q_3->e1->aw = "They never wash their hands before dinner";
$Q_3->e2->aw = "We always watch the early news";
$Q_3->e3->aw = "The children usually catch the 8 o'clock bus";
$Q_3->e4->aw = "I usually clean my teeth after breakfast";
$Q_3->e5->aw = "Harry often reads a magazine in the morning";
$Q_3->e6->aw = "It sometimes rains a lot in August";
$Q_3->e7->aw = "I can usually do the homework on time";
$Q_3->e8->aw = "David is always hungry when he arrives home";
$Q_3->e9->aw = "I never eat fish on Fridays";
$Q_3->e10->aw = "We sometimes play chess before bedtime";

$Q_4 = new stdClass();
$Q_4->e1 = new stdClass();
$Q_4->e2 = new stdClass();
$Q_4->e3 = new stdClass();
$Q_4->e4 = new stdClass();
$Q_4->e5 = new stdClass();
$Q_4->e6 = new stdClass();

$Q_4->e1->n = "1";
$Q_4->e2->n = "2";
$Q_4->e3->n = "3";
$Q_4->e4->n = "4";
$Q_4->e5->n = "5";
$Q_4->e6->n = "6";

$Q_4->e1->q = "Sally ";
$Q_4->e2->q = "Peter ";
$Q_4->e3->q = "Richard ";
$Q_4->e4->q = "Penny ";
$Q_4->e5->q = "Sandra ";
$Q_4->e6->q = "Anna ";

$Q_4->e1->aw = "likes netball but she doesn't like soccer";
$Q_4->e2->aw = "likes cars but he doesn't like motorbikes";
$Q_4->e3->aw = "likes beer but he doesn't like whisky";
$Q_4->e4->aw = "likes Perth but she doesn't like Melbourne";
$Q_4->e5->aw = "likes sunshine but she doesn't like rain";
$Q_4->e6->aw = "likes dogs but she doesn't like cats";

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

                    <h3>Negatives</h3>
                    <p>Listen to the example:</p>
                    <p class="p-0 m-0"><b>e.g. 1</b><span class="pr-3">I get up early every morning.</span><b>(Jim)</b>
                    </p>
                    <p class="p-0 m-0"><b>Answer: </b>Jim doesn't get up early every morning.</p>
                    <p class="pt-2 m-0"><b>e.g. </b><span class="pr-3">Sarah plays footie on
                            Saturdays.</span><b>(Sandra)</b></p>
                    <p class="p-0 m-0"><b>Answer: </b>Sandra doesn't play footie on Saturdays.</p>
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

                    <h3>Asking questions</h3>
                    <p>Listen to the example:</p>
                    <p class="p-0 m-0"><b>e.g. 1 </b>He leaves the house at 6 o'clock.</p>
                    <p class="p-0 m-0"><b>Answer: </b>When does he leave the house?</p>
                    <p class="pt-2 m-0"><b>e.g. 2 </b>She lives in Perth.</p>
                    <p class="p-0 m-0"><b>Answer: </b>Where does she live?</p>
                    <p class="pt-2 m-0"><b>e.g. 3 </b>I eat eggs for breakfast.</p>
                    <p class="p-0 m-0"><b>Answer: </b>What do you eat for breakfast?</p>
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

                <div class="tab-pane fade" id="exercise3">

                    <p>Listen to the example:</p>
                    <p class="p-0 m-0"><b>e.g. 1 </b><span class="pr-3">He is late. </span><b>(always)</b></p>
                    <p class="p-0 m-0"><b>Answer: </b>He is always late.</p>
                    <p class="p-0 m-0"><b>e.g. 2 </b><span class="pr-3">She arrives early.</span><b>(usually)</b></p>
                    <p class="p-0 m-0"><b>Answer: </b>She usually arrives early.</p>
                    <p class="pt-2">Now you do it: </p>

                    <table class="w-100">
                        @foreach($Q_3 as $index => $Q_3)
                        <tr>
                            <td style="width: 23px;">{{$Q_3->n}}.</td>
                            <td colspan="2" style="width: 150px;">>{{$Q_3->q}}</td>
                            <td><b>{{$Q_3->q2}}</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="pt-2" style="width: 80px;vertical-align:middle;"><b>Answer: </b></td>
                            <td colspan="2" class="pt-2">
                                <input type="text" class="form-control w-75 q-val3" show-aw="Q_3-{{$index}}"
                                    aw="{{$Q_3->aw}}">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td colspan="2" class="pb-2">
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

                    <p>Look at the table below and then listen to the example:</p>
                    <div class="d-flex justify-content-center">
                        <table class="text-dark text-center w-75 table table-bordered">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">
                                    <img src="{{ asset('public/img_lang/listening/18-10-1.PNG') }}" alt="">
                                </th>
                                <th scope="col">
                                    <img src="{{ asset('public/img_lang/listening/18-10-2.PNG') }}" alt="">
                                </th>
                            </tr>
                            <tr>
                                <th scope="row">Harry</th>
                                <td>chicken</td>
                                <td>beef</td>
                            </tr>
                            <tr>
                                <th scope="row">Sally</th>
                                <td>netball</td>
                                <td>soccer</td>
                            </tr>
                            <tr>
                                <th scope="row">Peter</th>
                                <td>cars</td>
                                <td>motorbikes</td>
                            </tr>
                            <tr>
                                <th scope="row">Richard</th>
                                <td>beer</td>
                                <td>whiskey</td>
                            </tr>
                            <tr>
                                <th scope="row">Penny</th>
                                <td>Perth</td>
                                <td>Melbourne</td>
                            </tr>
                            <tr>
                                <th scope="row">Sandra</th>
                                <td>sunshine</td>
                                <td>rain</td>
                            </tr>
                            <tr>
                                <th scope="row">Anna</th>
                                <td>dogs</td>
                                <td>cats</td>
                            </tr>
                        </table>
                    </div>
                    <p class="p-0 m-0"><b>e.g. 1 </b>Harry likes chicken but he doesn't like beef.</p>
                    <p class="pt-2">Now you do it: </p>

                    <table class="w-100">
                        @foreach($Q_4 as $index => $Q_4)
                        <tr>
                            <td style="width: 23px;">{{$Q_4->n}}.</td>
                            <td>
                                {{$Q_4->q}}
                                <div class="input-con py-1">
                                    <input type="text" class="form-control w-100 q-val4" show-aw="Q_4-{{$index}}"
                                        aw="{{$Q_4->aw}}">
                                </div>
                                <span class="px-1 text-danger Q_4-{{$index}} aw4">{{$Q_4->aw}}</span>
                                .
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