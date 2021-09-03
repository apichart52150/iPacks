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
    .event-click{
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

$E1_1_5->e1->q = "Why do the ghosts come back to earth?";
$E1_1_5->e2->q = "Why are some ghosts unfriendly?";
$E1_1_5->e3->q = "Which of these gifts are not made of paper?";
$E1_1_5->e4->q = "Who eats the food?";
$E1_1_5->e5->q = "Why is it dangerous for children to stay out late at this time?";

$E1_1_5->e1->aw = "B. They want to visit their family.";
$E1_1_5->e2->aw = "B. They don’t have any relatives of their own.";
$E1_1_5->e3->aw = "A. Food";
$E1_1_5->e4->aw = "C. The family";
$E1_1_5->e5->aw = "C. They might meet some unfriendly ghosts.";

$E1_1_5->e1->choice = new stdClass();
$E1_1_5->e2->choice = new stdClass();
$E1_1_5->e3->choice = new stdClass();
$E1_1_5->e4->choice = new stdClass();
$E1_1_5->e5->choice = new stdClass();

$E1_1_5->e1->choice->a = "A. They want some food.";
$E1_1_5->e1->choice->b = "B. They want to visit their family.";
$E1_1_5->e1->choice->c = "C. They are unfriendly.";
$E1_1_5->e2->choice->a = "A. They don’t have any clothes.";
$E1_1_5->e2->choice->b = "B. They don’t have any relatives of their own.";
$E1_1_5->e2->choice->c = "C. They don’t like the food which people cook for them.";
$E1_1_5->e3->choice->a = "A. Food";
$E1_1_5->e3->choice->b = "B. Clothes";
$E1_1_5->e3->choice->c = "C. Cars";
$E1_1_5->e4->choice->a = "A. The friendly ghosts";
$E1_1_5->e4->choice->b = "B. The unfriendly ghosts";
$E1_1_5->e4->choice->c = "C. The family";
$E1_1_5->e5->choice->a = "A. They might meet some friendly ghosts.";
$E1_1_5->e5->choice->b = "B. They might not be able to eat the food.";
$E1_1_5->e5->choice->c = "C. They might meet some unfriendly ghosts.";

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

$E2_1_5->e1->q = "When is the Hungry Ghosts Festival?";
$E2_1_5->e2->q = "What kind of gifts do people give the ghosts?";
$E2_1_5->e3->q = "What happens to the gifts?";
$E2_1_5->e4->q = "Why do people put the food outside the house?";
$E2_1_5->e5->q = "What do the ghosts eat?";

$E2_1_5->e1->aw = "during the seventh lunar month";
$E2_1_5->e2->aw = "money, clothes, televisions and cars";
$E2_1_5->e3->aw = "The ghosts burn them";
$E2_1_5->e4->aw = "To stop the ghosts from coming inside the house";
$E2_1_5->e5->aw = "The ‘spirit’ of the food";

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
                <h4 class="modal-title text-white mx-auto">Activity 1 - Intro</h4>
            </div>
            <div class="modal-body text-center">
                <button id="sound-intro" class="btn btn-bordered-primary">Play Sound</button>
                <audio data-sound="sound-intro">
                    <source src="{{ asset('public/isac_listening/'.$pageTitle['sub_menu_id'] .'/' .$pageTitle['name_audio']) }}" type="audio/mp3">
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