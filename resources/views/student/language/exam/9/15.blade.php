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

$Q = [
"q1" => "Nowadays, many children are",
"q2" => "in different types of",
"q3" => "to have some kind of",
"q4" => "",
"q5" => "for themselves. However, whether this is good for their development and personality is a",
"q6" => "",
"q7" => ". I personally believe that paid work is harmful for children for several reasons. It is said that children learn valuable experience in the work place. This may be true. However, I would argue that children are mainly employed in",
"q8" => "that",
"q9" => "",
"q10" => "work and are low paid. Recent",
"q11" => "",
"q12" => "the common",
"q13" => "to which children are",
"q14" => "include washing dishes, cleaning floors or serving food in restaurants. Meanwhile, these kinds of",
"q15" => "actually do not provide children with necessary and useful skills which they can apply in their future career. This brings me to the second point. People in fravour of children working argue that it is an effective",
"q16" => "of learning. The point is children should be able to apply knowledge taught to them in a real life working",
"q17" => ". Although this is undoubtedly true, it also means that children may neglect the classroom study and even fail the class. The worst thing is yet to come. They may become so",
"q18" => "with the",
"q19" => "which a small amount of money can bring, and leave school.",
"q20" => ", supporters claim that it helps them to build responsibility in the family. They will understand how difficult it is to earn money and, therefore, have a compassionate view with their parents. This is true to a certain extent, but may have a totally adverse effect on children. As children can make money at an early age, they would feel that it is",
"q21" => "to spend their own money on luxury",
"q22" => ". In",
"q23" => ", I think that parents should take measures to",
"q24" => "their child to work, otherwise it would have",
"q25" => "",
];

$end = "on their futures.";


$A = [
"a1" => "appropriate",
"a2" => "assigned",
"a3" => "assurance",
"a4" => "benefits",
"a5" => "conclusion",
"a6" => "consequences",
"a7" => "debatable",
"a8" => "environment",
"a9" => "finally",
"a10" => "financial",
"a11" => "involved",
"a12" => "issue",
"a13" => "items",
"a14" => "jobs",
"a15" => "jobs",
"a16" => "jobs",
"a17" => "manual",
"a18" => "method",
"a19" => "negative",
"a20" => "occupied",
"a21" => "require",
"a22" => "research",
"a23" => "restrict",
"a24" => "reveals",
"a25" => "tasks",
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
        $q1 = "<?php echo $A['a20'] ?>",
        $q2 = "<?php echo $A['a14'] ?>",
        $q3 = "<?php echo $A['a10'] ?>",
        $q4 = "<?php echo $A['a3'] ?>",
        $q5 = "<?php echo $A['a7'] ?>",
        $q6 = "<?php echo $A['a12'] ?>",
        $q7 = "<?php echo $A['a14'] ?>",
        $q8 = "<?php echo $A['a21'] ?>",
        $q9 = "<?php echo $A['a17'] ?>",
        $q10 = "<?php echo $A['a22'] ?>",
        $q11 = "<?php echo $A['a24'] ?>",
        $q12 = "<?php echo $A['a25'] ?>",
        $q13 = "<?php echo $A['a2'] ?>",
        $q14 = "<?php echo $A['a14'] ?>",
        $q15 = "<?php echo $A['a18'] ?>",
        $q16 = "<?php echo $A['a8'] ?>",
        $q17 = "<?php echo $A['a11'] ?>",
        $q18 = "<?php echo $A['a4'] ?>",
        $q19 = "<?php echo $A['a9'] ?>",
        $q20 = "<?php echo $A['a1'] ?>",
        $q21 = "<?php echo $A['a13'] ?>",
        $q22 = "<?php echo $A['a5'] ?>",
        $q23 = "<?php echo $A['a23'] ?>",
        $q24 = "<?php echo $A['a19'] ?>",
        $q25 = "<?php echo $A['a6'] ?>",
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
        Swal.fire({
            title: "Your score",
            text: score + "",
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