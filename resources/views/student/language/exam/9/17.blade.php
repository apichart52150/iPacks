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
"q1" => "These days, many people are afraid of",
"q2" => "",
"q3" => "because of the dangers associated with its use. In my opinion, although it is true that",
"q4" => "weapons",
"q5" => "the greatest threat to life, the use of",
"q6" => "",
"q7" => "for peaceful purposes also carries some serious risks.",
"q8" => "power stations provide an important",
"q9" => "of cheap power for many industrialised nations and some developing countries. However, there is always the danger of radiation leaking from these plants. Even though safety precautions are taken, there have been numerous disasters such as the explosion of a",
"q10" => "plant in Russia not long ago.",
"q11" => "",
"q12" => "is even used to help cure some diseases such as cancer. Radiation can be applied to the body to burn away cancerous cells. This is, however, a dangerous",
"q13" => ", and the application of radiation is almost always painful and not always successful. The most worrying",
"q14" => "of",
"q15" => "",
"q16" => ", though, is its use for",
"q17" => "purposes. Enough atomic bombs have already been built to completely destroy the planet, and the real danger is that one day some country will start a war with these weapons. Too many countries now have the",
"q18" => "",
"q19" => "to make such bombs, and there is currently much",
"q20" => "about how to control the situation. In",
"q21" => ",",
"q22" => "",
"q23" => "certainly has",
"q24" => "uses, but is,",
"q25" => ", dangerous. However, it would have been better if it had never been used to",
"q26" => "",
];

$end = "weapons. If life on Earth is to continue.";

$A = [
    "a1" => "aspect",
    "a2" => "conclusion",
    "a3" => "create",
    "a4" => "debate",
    "a5" => "military",
    "a6" => "nonetheless",
    "a7" => "nuclear",
    "a8" => "nuclear",
    "a9" => "nuclear",
    "a10" => "nuclear",
    "a11" => "nuclear",
    "a12" => "nuclear",
    "a13" => "nuclear",
    "a14" => "nuclear",
    "a15" => "nuclear",
    "a16" => "pose",
    "a17" => "positive",
    "a18" => "procedure",
    "a19" => "required",
    "a20" => "source",
    "a21" => "technology",
    "a22" => "technology",
    "a23" => "technology",
    "a24" => "technology",
    "a25" => "technology",
    "a26" => "technology",
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
        $q1 = "<?php echo $A['a7'] ?>",
        $q2 = "<?php echo $A['a21'] ?>",
        $q3 = "<?php echo $A['a7'] ?>",
        $q4 = "<?php echo $A['a16'] ?>",
        $q5 = "<?php echo $A['a7'] ?>",
        $q6 = "<?php echo $A['a21'] ?>",
        $q7 = "<?php echo $A['a7'] ?>",
        $q8 = "<?php echo $A['a20'] ?>",
        $q9 = "<?php echo $A['a7'] ?>",
        $q10 = "<?php echo $A['a7'] ?>",
        $q11 = "<?php echo $A['a21'] ?>",
        $q12 = "<?php echo $A['a18'] ?>",
        $q13 = "<?php echo $A['a1'] ?>",
        $q14 = "<?php echo $A['a7'] ?>",
        $q15 = "<?php echo $A['a21'] ?>",
        $q16 = "<?php echo $A['a5'] ?>",
        $q17 = "<?php echo $A['a21'] ?>",
        $q18 = "<?php echo $A['a19'] ?>",
        $q19 = "<?php echo $A['a4'] ?>",
        $q20 = "<?php echo $A['a2'] ?>",
        $q21 = "<?php echo $A['a7'] ?>",
        $q22 = "<?php echo $A['a21'] ?>",
        $q23 = "<?php echo $A['a17'] ?>",
        $q24 = "<?php echo $A['a6'] ?>",
        $q25 = "<?php echo $A['a3'] ?>",
        $q26 = "<?php echo $A['a7'] ?>",
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
        let text = "You got "+score + "/" + droppables.length + " points."
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