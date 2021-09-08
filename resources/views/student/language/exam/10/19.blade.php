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
$Q=["q1" => "It has become common practice recently for young people to delay entry into university so that they have the opportunity to travel around the world or get some work experience before they start their tertiary education course. Taking a breather before university can have",
    "q2" => "results but there are also some disadvantages to this, too. There are a number of advantages of postponing university entrance. First of all, the year off will give young people the chance to",
    "q3" => "their mind and broaden their horizons in terms of career opportunities. After finishing high school, many students have had little hands-on experience of real life situations. By travelling around the world they will have to confront a variety of different situations. What's more they will be faced with these problems without the",
    "q4" => "and support of their family, which is likely to result in greater independence and an increase in self-confidence. As the year goes by, the",
    "q5" => "and",
    "q6" => "of the young person may",
    "q7" => "and career preferences may change. It is important that young people make these discoveries before it is too late. There are, though, a number of arguments against taking a year off before university. First of all, the",
    "q8" => "",
    "q9" => "must be considered. By delaying university entrance, the young person may find that the",
    "q10" => "' tuition",
    "q11" => "may have risen",
    "q12" => "by the time (s)he is ready to start studying. Evan a modest rise of 5%25 can lead to",
    "q13" => "",
    "q14" => "increases over a four year study",
    "q15" => ". In addition, the cost of the gap year is likely to be substantial, too. Travelling around is not cheap, even if there is the possibility to do some part-time work along the way. Another consideration is the fact that the young person may enjoy the time off studying so much that (s)he decides not to go to university after all. Once the momentum of studying at school has gone, it may be difficult to find the",
    "q16" => "for further study. This may well",
    "q17" => "badly on future career",
    "q18" => ". In",
    "q19" => ", while there are certain",
    "q20" => "of taking a gap year, the experience is not without risk. It is important to understand the reasons for postponing university entrance and to be",
    "q21" => "of the",
    "q22" => "dangers of such an",
    "q23" => ". With careful planning, however, the experience can certainly",
    "q24" => "future",
    "q25" => "",];
    $end = ".";
$A = [
    "a1" => "aspects",
    "a2" => "aware",
    "a3" => "benefits",
    "a4" => "compounded",
    "a5" => "conclusion",
    "a6" => "considerably",
    "a7" => "enhance",
    "a8" => "evolve",
    "a9" => "expand",
    "a10" => "fee",
    "a11" => "fees",
    "a12" => "financial",
    "a13" => "impact",
    "a14" => "institutions",
    "a15" => "job",
    "a16" => "motivation",
    "a17" => "notions",
    "a18" => "options",
    "a19" => "period",
    "a20" => "perspectives",
    "a21" => "positive",
    "a22" => "potential",
    "a23" => "prospects",
    "a24" => "security",
    "a25" => "undertaking",];
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
        $q1 = "<?php echo $A['a21'] ?>",
         $q2 = "<?php echo $A['a9'] ?>",
         $q3 = "<?php echo $A['a24'] ?>",
         $q4 = "<?php echo $A['a17'] ?>",
         $q5 = "<?php echo $A['a20'] ?>",
         $q6 = "<?php echo $A['a8'] ?>",
         $q7 = "<?php echo $A['a12'] ?>",
         $q8 = "<?php echo $A['a1'] ?>",
         $q9 = "<?php echo $A['a14'] ?>",
         $q10 = "<?php echo $A['a11'] ?>",
         $q11 = "<?php echo $A['a6'] ?>",
         $q12 = "<?php echo $A['a4'] ?>",
         $q13 = "<?php echo $A['a10'] ?>",
         $q14 = "<?php echo $A['a19'] ?>",
         $q15 = "<?php echo $A['a16'] ?>",
         $q16 = "<?php echo $A['a13'] ?>",
         $q17 = "<?php echo $A['a18'] ?>",
         $q18 = "<?php echo $A['a5'] ?>",
         $q19 = "<?php echo $A['a3'] ?>",
         $q20 = "<?php echo $A['a2'] ?>",
         $q21 = "<?php echo $A['a22'] ?>",
         $q22 = "<?php echo $A['a25'] ?>",
         $q23 = "<?php echo $A['a7'] ?>",
         $q24 = "<?php echo $A['a15'] ?>",
         $q25 = "<?php echo $A['a23'] ?>",
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