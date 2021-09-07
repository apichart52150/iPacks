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
$Q=["q1" => "News",
"q2" => "decide what to broadcast on television and what to print in newspapers. There are two",
"q3" => "that influence their decisions. The first is the kind of customers they cater to. Each group of reader and viewer has their own",
"q4" => ". For example, if your customers are mostly teenagers, you have to",
"q5" => "on something attracting them such as stories, photographs about pop stars, film stars, funny tales, and young fashion. It will be very silly if you try to provide teenagers with",
"q6" => ", political news. On the",
"q7" => ", businessmen and politicians may never read news about James Blunt or Keira Knightley. Therefore, what influences news",
"q8" => "’' decisions the most is the taste of their customers. The second is the attraction of news. Who will read or watch your news if it happened one year, one month, even one week ago? The answer is nobody, absolutely no one. In the",
"q9" => "and competitive world nowadays, people always ask for really current news. In order to satisfy customers, there is a pressure on all",
"q10" => "to find continually what has already happened not only yesterday but even an hour ago. Or else, they will lose their customers. No",
"q11" => "wants that to happen. On television or in newspaper, we seem to become used to bad news. It is a little difficult for us to receive a piece of good news. We can't",
"q12" => "that bad things",
"q13" => "on the earth day by day. However, news",
"q14" => "try to gain more and more customers, which means more and more money, by",
"q15" => "bad news. This is because bad news makes us curious. We want to know why it is bad, what it is about, whether it influences us or not. As a result, we will buy newspapers or watch television to find out. And the happiest people are, of course, news",
"q16" => ". I think it would be better if more good news was reported. Bad news makes us worry and feel sad,",
"q17" => "good news makes us happy. However much bad news there is, there should be the same amount of good news. So we can give something bad a lot of thought while still be joyful with good news. Any inequalities between good news and bad news should be avoided. That is the best solution. Now, we can't live without news.",
"q18" => ", the",
"q19" => "of news",];
$end = "is very important. We should support them. And what they have to do is try their best to provide us with useful news, both good and bad.";
$A=[
"a1" => "concentrate",
"a2" => "contrary",
"a3" => "deny",
"a4" => "economic",
"a5" => "editor",
"a6" => "editors",
"a7" => "editors",
"a8" => "editors",
"a9" => "editors",
"a10" => "editors",
"a11" => "editors",
"a12" => "energetic",
"a13" => "factors",
"a14" => "features",
"a15" => "occur",
"a16" => "publishing",
"a17" => "role",
"a18" => "Therefore",
"a19" => "whereas",];
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
        $q1 = "<?php echo $A['a6'] ?>",
        $q2 = "<?php echo $A['a13'] ?>",
        $q3 = "<?php echo $A['a14'] ?>",
        $q4 = "<?php echo $A['a1'] ?>",
        $q5 = "<?php echo $A['a4'] ?>",
        $q6 = "<?php echo $A['a2'] ?>",
        $q7 = "<?php echo $A['a6'] ?>",
        $q8 = "<?php echo $A['a12'] ?>",
        $q9 = "<?php echo $A['a6'] ?>",
        $q10 = "<?php echo $A['a5'] ?>",
        $q11 = "<?php echo $A['a3'] ?>",
        $q12 = "<?php echo $A['a15'] ?>",
        $q13 = "<?php echo $A['a6'] ?>",
        $q14 = "<?php echo $A['a16'] ?>",
        $q15 = "<?php echo $A['a6'] ?>",
        $q16 = "<?php echo $A['a19'] ?>",
        $q17 = "<?php echo $A['a18'] ?>",
        $q18 = "<?php echo $A['a17'] ?>",
        $q19 = "<?php echo $A['a6'] ?>",
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

        let droppables = $(".dropbox");
        let score = 0
        droppables.each((idx, item) => {
            if ($(item).children().text().trim() == answers[idx]) {
                score++
                checkAnswer($(item).children(), 'correct');
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
</script>
@stop