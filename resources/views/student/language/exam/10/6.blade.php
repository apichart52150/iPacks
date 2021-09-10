<link rel="stylesheet" href="{{ asset('public/css/draggable.css') }}">
<style>
    .drag-container {
        margin-bottom: 25px;
    }


    .answers-container .dropbox {
        display: inline-block;
    }

    .dropbox {
        border: 2px dashed #ccc;
        border-radius: 5px;
        padding: 3px;
        margin: 5px;
        min-width: 150px;
        min-height: 40px;
        vertical-align: middle;
    }

    .dropbox .drag {
        margin: 0;
    }

    .grid-5 {
        grid-template-columns: repeat(6, 1fr);
    }
</style>
@php
$Q=["q1" => "There can be no doubt that drug abuse has become a",
"q2" => "problem around the",
"q3" => ". While law",
"q4" => "agencies struggle to keep the problem under control, drug barons make huge profits from trafficking drugs around the world. Some governments deal severely with drug users, often",
"q5" => "the death sentence for possession of drugs. Other countries, however, choose to more lenient in their treatment of drug offenders. This essay will examine some of the pros and cons of punishing drug offenders harshly. There are a number of arguments in favour of handing out harsh punishments for drug abuse. First of all, many believe that if enough drug users are put behind bars, then the problem will decrease in size. Others take a stronger position and suggest that drug offenders should be sentenced to death. They believe that harsh punishments will deter drug addicts from using drugs. A number of countries in South-east Asia have adopted this position. However, there are strong arguments against the use of harsh penalties against drug users. First of all, it is not the users who are doing the harm. Those who traffic the drugs as a business are the real criminals, for example the drug barons in South America, Africa and Asia. They are the ones who should be hunted down and punished, not the users, who are merely victims themselves. In",
"q6" => "to those countries which",
"q7" => "the death sentence for drug abuse, it can be argued that putting people to death does not in any way reduce the problem. If it did, then there would not be an increase in drug abuse in those countries.",
"q8" => "show, however, that drug abuse is on the increase even in those countries which use the death penalty. In",
"q9" => ", while the drug problem is an emotive",
"q10" => "since it",
"q11" => "the breakdown of society and family life in particular, it must be dealt with effectively. That means striking at the",
"q12" => "of the problem i.e. the drug barons, rather than the users. Effective law",
"q13" => "is more likely to result in a reduction of drug",
"q14" => ". The question is, though, can law",
"q15" => "officers remain detached from the corruption which surrounds the drug",];
$end = "business?";
$A=[
"a1" => "availability",
"a2" => "conclusion",
"a3" => "core",
"a4" => "distribution",
"a5" => "enforcement",
"a6" => "enforcement",
"a7" => "enforcement",
"a8" => "globe",
"a9" => "impose",
"a10" => "imposing",
"a11" => "involves",
"a12" => "issue",
"a13" => "major",
"a14" => "response",
"a15" => "statistics",];
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The table shows annual budget allocation for defence and education in a number of different countries.</h5>
                        <div class="drag-container">
                            <div class="d-grid grid-5" id="choices">
                                @foreach ($A as $choices)
                                <div class="drag">{{ $choices }}</div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark p-2" style="line-height: 35px;">
                        <div class="answers-container">
                            @foreach($Q as $q)
                            {{ $q }}
                            <div class="dropbox"></div>
                            @endforeach
                            {{ $end }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@section('button-control')
<button id="check-answer" class="btn btn-info">Check Answers</button>
<button id="show-answer" class="d-none btn btn-info">Show Answers</button>
@endsection

@section('js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

<script>
    $("#show-answer").prop("disabled", true);

    const answers = [
        $q1 = "<?php echo $A['a13'] ?>",
        $q2 = "<?php echo $A['a8'] ?>",
        $q3 = "<?php echo $A['a5'] ?>",
        $q4 = "<?php echo $A['a10'] ?>",
        $q5 = "<?php echo $A['a14'] ?>",
        $q6 = "<?php echo $A['a9'] ?>",
        $q7 = "<?php echo $A['a15'] ?>",
        $q8 = "<?php echo $A['a2'] ?>",
        $q9 = "<?php echo $A['a12'] ?>",
        $q10 = "<?php echo $A['a11'] ?>",
        $q11 = "<?php echo $A['a3'] ?>",
        $q12 = "<?php echo $A['a5'] ?>",
        $q13 = "<?php echo $A['a1'] ?>",
        $q14 = "<?php echo $A['a5'] ?>",
        $q15 = "<?php echo $A['a4'] ?>",
    ];

    console.log(answers);

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

    $("#check-answer").on("click", () => {
$('#show-answer').addClass('d-block')
$('#show-answer').removeClass('d-none')
$('#check-answer').addClass('d-none')

        let droppables = $(".dropbox");
let score = 0
        droppables.each((idx, item) => {
            if ($(item).children().text().trim() == answers[idx]) {
                checkAnswer($(item).children(), 'correct');
                score++
            } else {
                checkAnswer($(item).children(), 'incorrect');
            }
        });

        $(".drag").draggable({
            disabled: true,
        });

        let title = ""
        let text = score + "/" + droppables.length + " points."
        if (score == droppables.length)
            title = "Congratulations!"
        else
            text = text + " Try again."

        Swal.fire({
            title: title,
            text: text,
            timer: 5000,
        }).then(() => {
            $(item).css({
                "font-weight": "bold",
                'color': '#2bc3a5'
            });
        });
        $("#check-answer").prop("disabled", true);
        $("#show-answer").prop("disabled", false);
    });

    $('#show-answer').on('click', () => {

        $('.dropbox').each((idx, item) => {

            if ($(item).children().length == 1) {
                if ($(item).children().hasClass('color-danger')) {
                    if ($(item).children().text(answers[idx])) {
                        $(item).children().removeClass('color-danger')
                    }
                }
            } else {
                $(item).append(`<div class="drag">${ answers[idx] }</div>`)
            }

            $('.drag-container .drag').remove();
        })
    });

    function checkAnswer(ele, status) {
        let bgColor;

        status == 'correct' ? (bgColor = 'color-success') : (bgColor = 'color-danger')

        ele.addClass(bgColor)
    }
$('#show-answer').on('click', function() {
        $('check-answer').addClass('d-none')
        $('.dropbox').each((idx, item) => {

            if($(item).children().length == 1) {
                if($(item).children().hasClass('color-danger')) {
                    if($(item).children().text(answers[idx])) {
                        $(item).children().removeClass('color-danger')
                    }
                }
            } else {
                $(item).append(`<div class="drag">${ answers[idx] }</div>`)
            }

            $('.drag-container .drag').remove();
        })
        $("#show-answer").hide();
    });

    function checkAnswer(ele, status) {
        let bgColor;

        status == 'correct' ? (bgColor = 'color-success') : (bgColor = 'color-danger')

        ele.addClass(bgColor)
    }
</script>
@stop