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
$Q=["q1" => "The World Cup football matches and the Olympics are held worldwide with great national support and expectations. As a fan of those competitions, I agree with the idea that sporting events can help international relations and national unity. In this essay, I will think about the effects of these popular sporting events. First of all, the World Cup, Olympics and other international games work for easing",
"q2" => "among different nations. For example, South and North Korea have football games regularly which give two nations a chance to understand each other deeply. In the mid 1990s, hundreds of North Korean supporters came to South Korea with the footballers and they were very excited during the sporting events. Even if it sounds ridiculous, many South Koreans were quite surprised at that moment when North Koreans shouted and cried during the match. We all realized that they were very",
"q3" => "sports fans even though they were occasionally very secretive. Through the sports, two divided nations could reduce their political and",
"q4" => "",
"q5" => "and could feel the patriotic unity. On the other hand, some sports matches can make international relations worse. For",
"q6" => ", football or baseball games between Korea and Japan are always big matches in two countries where",
"q7" => "overflow. Sometimes, after the matches, the two rivals blame each other and their patriotic emotions explode in an aggressive way. A much worse",
"q8" => "is that the troubles caused by losing games",
"q9" => "the players directly. As far as I know, a",
"q10" => "of Korean players in Japan suffered from",
"q11" => "",
"q12" => "after the match between the two countries. In",
"q13" => ", I think that international sporting occasions can be one of the good ways to ease",
"q14" => "or to",
"q15" => "patriotism safely. However, I believe that games cannot be the",];
$end = "way for sound patriotism or peaceful international relations.";
$A=[
"a1" => "affect",
"a2" => "conclusion",
"a3" => "couple",
"a4" => "discrimination",
"a5" => "fundamental",
"a6" => "ideological",
"a7" => "instance",
"a8" => "invisible",
"a9" => "normal",
"a10" => "release",
"a11" => "scenario",
"a12" => "tensions",
"a13" => "tensions",
"a14" => "tensions",
"a15" => "tensions",];
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
        $q1 = "<?php echo $A['a12'] ?>",
        $q2 = "<?php echo $A['a9'] ?>",
        $q3 = "<?php echo $A['a6'] ?>",
        $q4 = "<?php echo $A['a12'] ?>",
        $q5 = "<?php echo $A['a7'] ?>",
        $q6 = "<?php echo $A['a12'] ?>",
        $q7 = "<?php echo $A['a11'] ?>",
        $q8 = "<?php echo $A['a1'] ?>",
        $q9 = "<?php echo $A['a3'] ?>",
        $q10 = "<?php echo $A['a8'] ?>",
        $q11 = "<?php echo $A['a4'] ?>",
        $q12 = "<?php echo $A['a2'] ?>",
        $q13 = "<?php echo $A['a12'] ?>",
        $q14 = "<?php echo $A['a10'] ?>",
        $q15 = "<?php echo $A['a5'] ?>",
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
</script>
@stop