<link rel="stylesheet" href="{{ asset('public/css/draggable.css') }}">
<style>
    table tr td {
        vertical-align: top;
        padding-top: 10px;
    }

    .input-con {
        display: inline-block;
        position: relative;
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
        min-width: 250px;
    }

    .dropbox .drag {
        margin: 0;
    }

    .grid-5 {
        grid-template-columns: repeat(6, 1fr);
    }

    .aw {
        display: none;
    }
</style>
@php

$caller_2 = new stdClass();
$caller_2->e1 = new stdClass();
$caller_2->e2 = new stdClass();
$caller_2->e3 = new stdClass();
$caller_2->e4 = new stdClass();
$caller_2->e5 = new stdClass();
$caller_2->e6 = new stdClass();
$caller_2->e7 = new stdClass();
$caller_2->e8 = new stdClass();

$caller_2->e1->n = "1";
$caller_2->e2->n = "2";
$caller_2->e3->n = "3";
$caller_2->e4->n = "4";
$caller_2->e5->n = "5";
$caller_2->e6->n = "6";
$caller_2->e7->n = "7";
$caller_2->e8->n = "8";

$caller_2->e1->q = "Although significant numbers still come from English-speaking countries";
$caller_2->e2->q = "The term 'drinking' refers to the consumption of alcoholic drinks such as";
$caller_2->e3->q = "Excessive alcohol consumption can lead not only to physiological problems";
$caller_2->e4->q = "There are both financial and environmental costs associated with landfill sites; not only are they a waste of potentially valuable land,";
$caller_2->e5->q = "In spite of these negative effects on the human body";
$caller_2->e6->q = "The two most important factors in developing a good study ethos are, first of all, a positive attitude,";
$caller_2->e7->q = "As attitudes in society change, one would expect language to develop at the same rate; however,";
$caller_2->e8->q = "He socially constructed gender division of labour restricts the employment possibilities for both men and women; an illustration of this";

$caller_2->e1->aw = "Although significant numbers still come from English-speaking countries, an even larger number come from non-English-speaking countries.";
$caller_2->e2->aw = "The term 'drinking' refers to the consumption of alcoholic drinks such as beer, wine and spirits.";
$caller_2->e3->aw = "Excessive alcohol consumption can lead not only to physiological problems, but also to psychological problems.";
$caller_2->e4->aw = "There are both financial and environmental costs associated with landfill sites; not only are they a waste of potentially valuable land, but they also present pollution problems.";
$caller_2->e5->aw = "In spite of these negative effects on the human body, there are, however, some beneficial aspects.";
$caller_2->e6->aw = "The two most important factors in developing a good study ethos are, first of all, a positive attitude, and, second, a healthy life-style.";
$caller_2->e7->aw = "As attitudes in society change, one would expect language to develop at the same rate; however, it doesn't.";
$caller_2->e8->aw = "The socially constructed gender division of labour restricts the employment possibilities for both men and women; an illustration of this is the small number of women in executive management positions.";

@endphp
<div class="row card-box">
    <div class="col-xl-12 col-md-12">
        <div class=" text-dark font-16">
            <p class="lead">
                {{$pageTitle['sub_menu_name']}}
            </p>
            <div class="row">
                <div class="col-lg-12">
                    <table class="w-100">
                        <tr>
                            <td colspan="3">Listen to the sentences.
                                <br>
                                They are not complete (how do you know this, just by listening?).
                                <br>
                                Complete the sentences with suitable endings, depending on the speech markers contained in each sentence.
                                <br><br>
                                e.g. The Silver Spur is heavier than the Silver Ghost. The former weighs two and a half tonnes whereas
                                the latter weighs only two tonnes. (or any weight less than two and a half tonnes.)
                            </td>
                        </tr>
                        @foreach($caller_2 as $caller_2)
                        <tr>
                            <td style="width: 20px;">{{$caller_2->n}}</td>
                            <td colspan="2">{{$caller_2->q}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="width: 80px;"><b>Answer: </b></td>
                            <td>
                                <input type="text" class="form-control w-75">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2" class="aw text-success"><b>Possible answers:</b> {{$caller_2->aw}}</td>
                        </tr>
                        @endforeach
                    </table>
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
    $('.q-caller-2').each((idx, item) => {
        let text = $(item).html()
        if (text == "...") {
            let input = '<div class="input-con">' +
                '<div class="dropbox q" show-aw="' + $(item).attr('show-aw') + '" aw="' + $(item).attr('aw') + '"></div>' +
                '</div>'
            text = text.replace("...", input)
            $(item).html(input)
        }
    })

    $('#check-answer').on('click', () => {
        $('.q').each((idx, item) => {
            if ($(item).text().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'), item)
            else
                show_error(item)
        })
        $('.q-text').each((idx, item) => {
            if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
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