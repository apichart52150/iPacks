<link rel="stylesheet" href="{{ asset('public/css/draggable.css') }}">
<style>
    table tr td {
        vertical-align: top;
    }

    .table tr td {
        vertical-align: middle;
        border: 1px solid black;
    }

    .table tr th {
        border: 1px solid black;
    }

    .input-con {
        display: inline-block;
        position: relative;
    }

    .input-con2 {
        width: 100px;
    }

    .drag-container {
        margin-bottom: 25px;
    }

    .answers-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 10px 0;
    }

    .answers-container p {
        font-size: 16px;
    }

    .dropbox {
        border: 1px dashed #ccc;
        border-radius: 5px;
        padding: 3px;
        width: 100%;
        height: auto;
        min-width: 200px;
        min-height: 40px;
    }

    .dropbox .drag {
        margin: 0;
        vertical-align: middle;
    }

    .grid-5 {
        grid-template-columns: repeat(3, 1fr);
    }

    .grid-5-2 {
        grid-template-columns: repeat(5, 1fr);
    }

    .aw {
        display: none;
    }

    .input-text {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 3px;
        width: 100%;
        height: auto;
        min-width: 80px;
        min-height: 40px;
    }

    #caller-3 tr .col-3-500 {
        width: 500px;
        padding-left: 10px;
    }

    .event-click {
        cursor: pointer;
    }
</style>
@php



$E1_1_5 = new stdClass();
$E1_1_5->e1 = new stdClass();
$E1_1_5->e2 = new stdClass();
$E1_1_5->e3 = new stdClass();
$E1_1_5->e4 = new stdClass();
$E1_1_5->e5 = new stdClass();

$E1_1_5->e1->n = "1";
$E1_1_5->e2->n = "2";
$E1_1_5->e3->n = "3";
$E1_1_5->e4->n = "4";
$E1_1_5->e5->n = "5";

$E1_1_5->e1->q = "Which of these do the students at Summerhill NOT do?";
$E1_1_5->e2->q = "One important difference between Summerhill and government schools is that…";
$E1_1_5->e3->q = "The students who go to Summerhill are usually those who…";
$E1_1_5->e4->q = "If classes are large, …..";
$E1_1_5->e5->q = "The school Principal believes that…";

$E1_1_5->e1->aw = "B. Teach the lessons.";
$E1_1_5->e2->aw = "C. Summerhill is a small private school.";
$E1_1_5->e3->aw = "C. don’t do very well at government schools.";
$E1_1_5->e4->aw = "A. the teachers has less time for each student.";
$E1_1_5->e5->aw = "A. it’s important to give students control over their own learning.";

$E1_1_5->e1->choice = new stdClass();
$E1_1_5->e2->choice = new stdClass();
$E1_1_5->e3->choice = new stdClass();
$E1_1_5->e4->choice = new stdClass();
$E1_1_5->e5->choice = new stdClass();

$E1_1_5->e1->choice->a = "A. Choose which lessons to go to.";
$E1_1_5->e1->choice->b = "B. Teach the lessons.";
$E1_1_5->e1->choice->c = "C. Set the school rules";
$E1_1_5->e2->choice->a = "A. Summerhill is in England.";
$E1_1_5->e2->choice->b = "B. Summerhill has a Principal.";
$E1_1_5->e2->choice->c = "C. Summerhill is a small private school.";
$E1_1_5->e3->choice->a = "A. score top grades at government schools.";
$E1_1_5->e3->choice->b = "B. spend a lot of time with teachers at government schools.";
$E1_1_5->e3->choice->c = "C. don’t do very well at government schools.";
$E1_1_5->e4->choice->a = "A. the teachers has less time for each student.";
$E1_1_5->e4->choice->b = "B. students will not score good grades.";
$E1_1_5->e4->choice->c = "C. the teacher has to set the rules.";
$E1_1_5->e5->choice->a = "A. it’s important to give students control over their own learning.";
$E1_1_5->e5->choice->b = "B. it’s important to make students work harder at school.";
$E1_1_5->e5->choice->c = "C. it’s important to make sure the students score top grades in exams.";

$E2_1_5 = new stdClass();
$E2_1_5->e1 = new stdClass();
$E2_1_5->e2 = new stdClass();
$E2_1_5->e3 = new stdClass();
$E2_1_5->e4 = new stdClass();
$E2_1_5->e5 = new stdClass();

$E2_1_5->e1->n = "1";
$E2_1_5->e2->n = "2";
$E2_1_5->e3->n = "3";
$E2_1_5->e4->n = "4";
$E2_1_5->e5->n = "5";

$E2_1_5->e1->q = "Where is Summerhill School?";
$E2_1_5->e2->q = "How many students study there?";
$E2_1_5->e3->q = "Who sets the rules at Summerhill?";
$E2_1_5->e4->q = "Who makes sure the students follow the rules?";
$E2_1_5->e5->q = "Do the students get good results at the school?";

$E2_1_5->e1->aw = "in England";
$E2_1_5->e2->aw = "around seventy";
$E2_1_5->e3->aw = "the students";
$E2_1_5->e4->aw = "a small group made up of mostly students and one or two teachers";
$E2_1_5->e5->aw = "Yes, they score top grades in national exams";

@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['sub_menu_name']}}
            </p>
            <div class="row">
                <div class="col-lg-12">
                    <h5>Choose the best answer to each question.</h5>
                    <div class="w-100 d-flex justify-content-center">
                        <table class="w-100">
                            @foreach($E1_1_5 as $index => $E1_1_5)
                            <tr>
                                <td style="width: 20px;">{{$E1_1_5->n}}. </td>
                                <td colspan="2">{{$E1_1_5->q}}</td>
                            </tr>
                            @foreach($E1_1_5->choice as $index2 => $choice)
                            <tr>
                                <td></td>
                                <td style="width: 20px;">
                                    <div class="form-check">
                                        <input class="form-check-input event-click position-static q-check E1_1_5-{{$index}}-{{$index2}}" type="radio" name="E1_1_5-{{$index}}" show-aw="E1_1_5-{{$index}}" aw="{{$E1_1_5->aw}}" value="{{$choice}}">
                                    </div>
                                </td>
                                <td>
                                    <span class="event-click" onclick="checkRadio('E1_1_5-{{$index}}-{{$index2}}')">{{$choice}}</span>
                                </td>
                            </tr>
                            @endforeach
                            <tr class="aw">
                                <td></td>
                                <td colspan="2" class="aw E1_1_5-{{$index}} text-danger">{{$E1_1_5->aw}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="mt-4 col-lg-12">
                    <h5>Write a short answer to each question.</h5>
                    <div class="w-100 d-flex justify-content-center">
                        <table class="w-100">
                            @foreach($E2_1_5 as $index => $E2_1_5)
                            <tr>
                                <td style="width: 20px;">{{$E2_1_5->n}}. </td>
                                <td>{{$E2_1_5->q}}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="pt-2">
                                    <b>Answer: </b>
                                    <div class="input-con w-75">
                                        <input type="text" class="q-val form-control w-100" show-aw="E2_1_5-{{$index}}" aw="{{$E2_1_5->aw}}">
                                    </div>
                                </td>
                            </tr>
                            <tr class="">
                                <td class="pb-2"></td>
                                <td class="pb-2 aw E2_1_5-{{$index}} E2_1_5-{{$index}} text-danger">{{$E2_1_5->aw}}</td>
                            </tr>
                            @endforeach
                        </table>
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
                    <source src="{{ asset('public/isac_listening/'.$pageTitle['sub_menu_type'] .'/' .$pageTitle['name_audio']) }}" type="audio/mp3">
                </audio>
            </div>
        </div>
    </div>
</div>


@section('button-control')
<button id="check-answer" class="btn btn-info">Check Answers</button>
<!-- <button id="show-answer" class="btn btn-success">Show Answers</button> -->
@endsection

@section('js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

<script>
    $('#check-answer').on('click', () => {
        $('.q-val').each((idx, item) => {
            if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'), item)
            else
                show_error(item)
        })
        $('.q-check:checked').each((idx, item) => {
            if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'), item)
            else
                show_error(item)
        })
        $('.q-check-input:checked').each((idx, item) => {
            let aw = ""
            if ($(item).val() == "False")
                aw = $(item).val() + ": " + $('.' + $(item).attr('text')).val()
            else
                aw = $(item).val()
            if (aw.trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'), item)
            else
                show_error(item)
        })
        $('.aw').removeClass('aw')
    })

    function show_aw(aw, item) {
        $(item).addClass('border border-success')
        $('.' + aw).addClass('text-success')
        $('.' + aw).removeClass('text-danger')
    }

    function show_error(item) {
        $(item).addClass('border border-danger')
    }

    function checkRadio(x) {
        $('.' + x).prop("checked", true);
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
    });

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
    });
</script>

@stop