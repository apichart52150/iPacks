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
$Q=["q1" => "Nowadays sports stars are paid very high salaries,",
"q2" => "other",
"q3" => "such as doctors and teachers receive far less money. This essay will present arguments for and against paying sports stars such high wages. People like Christiano Ronaldo and Lionel Messi earn very high salaries, in addition, their clubs are willing to pay huge",
"q4" => "of money to",
"q5" => "the players from one club to another. This is, in my opinion, a waste of money. The money could be spent on more useful things such as providing education and health-care for poor people. But these sports stars entertain the public with their skillful",
"q6" => "on the pitch. Millions of people around the world look forward to the weekend matches in the English Premier League, when they can watch their favourite",
"q7" => "and their favourite players in action: not only the spectators who attend the matches but also people who watch the matches on television. It's been argued that",
"q8" => "such as doctors, teachers and lawyers play a more important",
"q9" => "in society. They educate and take care of people. Surely, they should be more valued than people who simply play sports. And many sports players are not particularly good",
"q10" => "models. Their behaviour both on and off the pitch is sometimes quite disgraceful. Is this the kind of behaviour we want our young people to witness and imitate? Of course, people will say that sports players work long hours, train hard and are prone to",
"q11" => "because of their work, but other",
"q12" => "work hard and long hours, too. And policemen are in great danger throughout their working life. It seems, then, that society values entertainers more highly than",
"q13" => "who keep society",
"q14" => "effectively. But we mustn't forget that sports stars have a short career. Most soccer players have to retire when they are in their early 30's, although they've usually made enough money by then to build their own retail chain or sports centre. Also, it's important to remember that there are thousands of sports-people out there who do not earn large amounts of money, simply because they aren't the best at what they do. Perhaps we should just increase the pay scales for",
"q15" => "who take care of society such as doctors, teachers and law enforcers. The problem is, where will the extra money come from? People are prepared to hand over fifty pounds to watch a game of soccer, but are probably not happy to pay increased taxes to",
"q16" => "pay-rises for",];
    $end = ".";
$A=[
    "a1" => "displays",
    "a2" => "functioning",
    "a3" => "fund",
    "a4" => "injuries",
    "a5" => "professionals",
    "a6" => "professionals",
    "a7" => "professionals",
    "a8" => "professionals",
    "a9" => "professionals",
    "a10" => "professionals",
    "a11" => "role",
    "a12" => "role",
    "a13" => "sums",
    "a14" => "team",
    "a15" => "transfer",
    "a16" => "whereas",];
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
@endsection

@section('js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
<script src="{{ asset('public/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('public/assets/js/pages/sweet-alerts.init.js') }}"></script>
<script>
    $("#show-answer").prop("disabled", true);

    const answers = [
         $q1 = "<?php echo $A['a16'] ?>",
         $q2 = "<?php echo $A['a5'] ?>",
         $q3 = "<?php echo $A['a13'] ?>",
         $q4 = "<?php echo $A['a15'] ?>",
         $q5 = "<?php echo $A['a1'] ?>",
         $q6 = "<?php echo $A['a14'] ?>",
         $q7 = "<?php echo $A['a5'] ?>",
         $q8 = "<?php echo $A['a11'] ?>",
         $q9 = "<?php echo $A['a11'] ?>",
         $q10 = "<?php echo $A['a4'] ?>",
         $q11 = "<?php echo $A['a5'] ?>",
         $q12 = "<?php echo $A['a5'] ?>",
         $q13 = "<?php echo $A['a2'] ?>",
         $q14 = "<?php echo $A['a5'] ?>",
         $q15 = "<?php echo $A['a3'] ?>",
         $q16 = "<?php echo $A['a5'] ?>",
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
</script>
@stop