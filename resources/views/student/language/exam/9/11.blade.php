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

$Q = ["q1" => "It is generally accepted that we all need leisure time to",
"q2" => "from the",
"q3" => "of work and everyday life. Personally, I prefer to be active during this time, as I think this suits me better. However, what we do with our leisure time is up to us and no one can say that any particular activity is the best. Some people",
"q4" => "by watching movies, reading or surfing the internet. People who have",
"q5" => "demanding",
"q6" => "may choose these types of activities. If you are a nurse or builder, you may feel that you don't want to do a five-kilometre run after work, because you are already",
"q7" => "tired. Other people do very sedentary",
"q8" => ".",
"q9" => "",
"q10" => ", for example, may spend all day sitting in front of a",
"q11" => "screen. At the end of the working day, they may be keen to stretch their limbs and improve their health by swimming or going to the gym. Another",
"q12" => "that influences our choice of leisure",
"q13" => "is where we work. People who work indoors often prefer outdoor hobbies,",
"q14" => "for people who work outdoors, the",
"q15" => "may be true. I am a student myself and this",
"q16" => "a lot of sitting in",
"q17" => ", so I need to get out into the fresh air afterwards. In any situation, the important thing is that people need to stay healthy by choosing what is best for them. The only wrong way to spend free time, in my view, is to have a sedentary",
];

$end = "and then go home and watch television.";

$A = [
"a1" => "analysts",
"a2" => "computer",
"a3" => "computer",
"a4" => "factor",
"a5" => "involves",
"a6" => "job",
"a7" => "jobs",
"a8" => "jobs",
"a9" => "lectures",
"a10" => "physically",
"a11" => "physically",
"a12" => "pursuit",
"a13" => "recover",
"a14" => "relax",
"a15" => "reverse",
"a16" => "stresses",
"a17" => "whereas",
];

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
        $q2 = "<?php echo $A['a16'] ?>",
        $q3 = "<?php echo $A['a14'] ?>",
        $q4 = "<?php echo $A['a10'] ?>",
        $q5 = "<?php echo $A['a7'] ?>",
        $q6 = "<?php echo $A['a10'] ?>",
        $q7 = "<?php echo $A['a7'] ?>",
        $q8 = "<?php echo $A['a2'] ?>",
        $q9 = "<?php echo $A['a1'] ?>",
        $q10 = "<?php echo $A['a2'] ?>",
        $q11 = "<?php echo $A['a4'] ?>",
        $q12 = "<?php echo $A['a12'] ?>",
        $q13 = "<?php echo $A['a17'] ?>",
        $q14 = "<?php echo $A['a15'] ?>",
        $q15 = "<?php echo $A['a5'] ?>",
        $q16 = "<?php echo $A['a9'] ?>",
        $q17 = "<?php echo $A['a6'] ?>",
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
        let score = 0
        let droppables = $(".dropbox");

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
</script>
@stop