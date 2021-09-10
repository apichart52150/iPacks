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
$Q=["q1" => "Society nowadays is getting fatter. Obesity is becoming one of the most dangerous",
    "q2" => "of our modern, sedentary life-style. This",
    "q3" => "is particularly disturbing since it",
    "q4" => "a large",
    "q5" => "of the younger",
    "q6" => ". This essay will examine the reasons for this",
    "q7" => "and suggest ways in which society can tackle this problem. There are a number of reasons why people are putting on excessive weight. The first reason is, of course, diet. We are what we eat, and the simple fact is that people are eating the wrong sort of food. Fast food outlets have sprung up in every",
    "q8" => "city, even in the developing nations. MacDonalds and KFC are in",
    "q9" => "in all",
    "q10" => "cities as their popularity continues to increase. Fast food is sometimes referred to as %91junk food' since it offers little nutritional value. It is largely oily and high in carbo-hydrates, which can",
    "q11" => "badly on health. It is certainly a",
    "q12" => "cause of obesity. Since fast food is popular mostly with young people, they are the ones at the greatest risk. Another",
    "q13" => "",
    "q14" => "to excessive weight is the lack of exercise.",
    "q15" => "has shown that there has been a",
    "q16" => "in hobbies and pastimes over the last few",
    "q17" => ". While exercise and outdoor",
    "q18" => "used to be the most popular form of leisure activity, nowadays the internet and",
    "q19" => "games have taken over the number one spot, especially with the younger",
    "q20" => ". So what can be done to address this",
    "q21" => ". First of all, there needs to be greater",
    "q22" => "of the",
    "q23" => "of fast food",
    "q24" => ". This can be done at school level as well as in the",
    "q25" => ". If this",
    "q26" => "does not succeed, then the government should seriously consider",
    "q27" => "the number of fast food outlets, or at least to pass",
    "q28" => "regarding the quality of the food served at these outlets. Secondly, people need to be encouraged to take part in",
    "q29" => "activity, especially adolescents. Local governments could provide better",
    "q30" => "to free sports",
    "q31" => "and schools should",
    "q32" => "a compulsory",
    "q33" => "education programme. To",
    "q34" => "up, obesity is a serious problem and action needs to be taken sooner rather than later if the",];
    $end = "of excessive weight are to be prevented.";
$A=[
    "a1" => "access",
    "a2" => "affects",
    "a3" => "awareness",
    "a4" => "computer",
    "a5" => "consequences",
    "a6" => "consequences",
    "a7" => "consumption",
    "a8" => "contributing",
    "a9" => "decades",
    "a10" => "evidence",
    "a11" => "facilities",
    "a12" => "factor",
    "a13" => "generation",
    "a14" => "generation",
    "a15" => "impact",
    "a16" => "impact",
    "a17" => "implement",
    "a18" => "issue",
    "a19" => "legislation",
    "a20" => "major",
    "a21" => "major",
    "a22" => "major",
    "a23" => "media",
    "a24" => "method",
    "a25" => "physical",
    "a26" => "physical",
    "a27" => "proportion",
    "a28" => "pursuits",
    "a29" => "research",
    "a30" => "restricting",
    "a31" => "shift",
    "a32" => "sum",
    "a33" => "trend",
    "a34" => "trend",];
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
         $q1 = "<?php echo $A['a5'] ?>",
         $q2 = "<?php echo $A['a33'] ?>",
         $q3 = "<?php echo $A['a2'] ?>",
         $q4 = "<?php echo $A['a27'] ?>",
         $q5 = "<?php echo $A['a13'] ?>",
         $q6 = "<?php echo $A['a33'] ?>",
         $q7 = "<?php echo $A['a20'] ?>",
         $q8 = "<?php echo $A['a10'] ?>",
         $q9 = "<?php echo $A['a20'] ?>",
         $q10 = "<?php echo $A['a15'] ?>",
         $q11 = "<?php echo $A['a20'] ?>",
         $q12 = "<?php echo $A['a8'] ?>",
         $q13 = "<?php echo $A['a12'] ?>",
         $q14 = "<?php echo $A['a29'] ?>",
         $q15 = "<?php echo $A['a31'] ?>",
         $q16 = "<?php echo $A['a9'] ?>",
         $q17 = "<?php echo $A['a28'] ?>",
         $q18 = "<?php echo $A['a4'] ?>",
         $q19 = "<?php echo $A['a13'] ?>",
         $q20 = "<?php echo $A['a18'] ?>",
         $q21 = "<?php echo $A['a3'] ?>",
         $q22 = "<?php echo $A['a15'] ?>",
         $q23 = "<?php echo $A['a7'] ?>",
         $q24 = "<?php echo $A['a23'] ?>",
         $q25 = "<?php echo $A['a24'] ?>",
         $q26 = "<?php echo $A['a30'] ?>",
         $q27 = "<?php echo $A['a19'] ?>",
         $q28 = "<?php echo $A['a25'] ?>",
         $q29 = "<?php echo $A['a1'] ?>",
         $q30 = "<?php echo $A['a11'] ?>",
         $q31 = "<?php echo $A['a17'] ?>",
         $q32 = "<?php echo $A['a25'] ?>",
         $q33 = "<?php echo $A['a32'] ?>",
         $q34 = "<?php echo $A['a5'] ?>",
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