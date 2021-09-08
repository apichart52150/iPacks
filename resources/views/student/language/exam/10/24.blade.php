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
$Q=["q1" => "The",
"q2" => "of people from rural to urban",
"q3" => "has been going on for many years. Most of these people go in search of a new, improved life. However, many of them find that their dream of a new start turns out to be a nightmare in reality. This essay will examine why people move from the countryside to the city, and also will outline some of the problems which face these people. People move from rural to urban",
"q4" => "for a number of reasons. First of all, they hope to find better",
"q5" => "opportunities. In rural",
"q6" => ", people tend to",
"q7" => "on agriculture as a means of earning a living. In times of bad weather and poor harvests, they can find themselves with little",
"q8" => "support. The second reason is the lack of public services and",
"q9" => "in the countryside. Limited health and education services mean that people in rural",
"q10" => "are disadvantaged. Hospitals in the countryside are few and far between, and the",
"q11" => "between doctor and patients may be quite high, meaning that rural folks may not get",
"q12" => "to",
"q13" => "treatment as easily as urban counterparts. In addition, some people feel that life in the countryside is boring and they yearn for a more exciting life in the city, where there are cinemas, theatres and huge shopping malls offering all kinds of products. These are some of the reasons why people",
"q14" => "to large towns. This",
"q15" => ", however, does not always have a happy ending. As soon as people arrive in the city, they are faced with many problems. One of these problems is the lack of decent",
"q16" => ". Many find they have to sleep in the open air. Another reality is that there are not enough",
"q17" => "",
"q18" => "and many people find themselves begging for money to",
"q19" => ". As a result, some of them turn to crime and prostitution. Drug abuse is a further danger confronting them. So, all in all,",];
    $end = "to the city may not be the best move for everyone. So, all in all, the dream of a better life in the city rarely turns out to be the reality. For many of these people, remaining in the countryside may be a better choice in spite of all the problems facing rural folks.";
$A=[
    "a1" => "access",
    "a2" => "accommodation",
    "a3" => "areas",
    "a4" => "areas",
    "a5" => "areas",
    "a6" => "areas",
    "a7" => "available",
    "a8" => "facilities",
    "a9" => "financial",
    "a10" => "job",
    "a11" => "jobs",
    "a12" => "medical",
    "a13" => "migrate",
    "a14" => "migration",
    "a15" => "migration",
    "a16" => "migration",
    "a17" => "ratio",
    "a18" => "rely",
    "a19" => "survive",];
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
         $q1 = "<?php echo $A['a14'] ?>",
         $q2 = "<?php echo $A['a3'] ?>",
         $q3 = "<?php echo $A['a3'] ?>",
         $q4 = "<?php echo $A['a10'] ?>",
         $q5 = "<?php echo $A['a3'] ?>",
         $q6 = "<?php echo $A['a18'] ?>",
         $q7 = "<?php echo $A['a9'] ?>",
         $q8 = "<?php echo $A['a8'] ?>",
         $q9 = "<?php echo $A['a3'] ?>",
         $q10 = "<?php echo $A['a17'] ?>",
         $q11 = "<?php echo $A['a1'] ?>",
         $q12 = "<?php echo $A['a12'] ?>",
         $q13 = "<?php echo $A['a13'] ?>",
         $q14 = "<?php echo $A['a14'] ?>",
         $q15 = "<?php echo $A['a2'] ?>",
         $q16 = "<?php echo $A['a11'] ?>",
         $q17 = "<?php echo $A['a7'] ?>",
         $q18 = "<?php echo $A['a19'] ?>",
         $q19 = "<?php echo $A['a14'] ?>",
    ];

    console.log(answers);

    $(".drag").draggable({
        revert: "invalid",
        cursor: "move",
        opacity: 0.7,
        zIndex: 100,
        containment: ".card-box",
        stop: function (event, ui) {
          if ($("#choices").children().length == 0) {
            $("#check-answer").prop("disabled", false);
          }
        },
    });

    $(".dropbox").droppable({
        accept: ".drag",
        tolerance: "touch",
        zIndex: 100,
        over: function (event, ui) {
            $(this).css("border-color", "#777");
        },
        out: function (event, ui) {
            $(this).css("border-color", "#ccc");
        },
        drop: function (event, ui) {
            if ($(this).children().length > 0) {
                var move = $(this).children().detach();
                $(ui.draggable).css({ top: 0, left: 0 }).parent().append(move);
            }
            $(this).css("border-color", "#ccc");
            $(this).append($(ui.draggable).css({ top: 0, left: 0 }));
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