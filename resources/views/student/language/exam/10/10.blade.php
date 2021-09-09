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
$Q=[ "q1" => "The number of obese youngsters has increased",
"q2" => "recently. One",
"q3" => "reason for this",
"q4" => "is the",
"q5" => "of fast food, sometimes referred to as '91junk' food since it contains little nutritional value. Since fast food is popular mostly among the younger",
"q6" => ", it has been suggested that advertisements for fast food should be banned. There are good reasons why the government should",
"q7" => "fast food advertising. First of all, the fast food producers tend to",
"q8" => "young people since they are the",
"q9" => "",
"q10" => "of their products. They buy television air-time to",
"q11" => "with peak viewing time for children. While youngsters watch their favourite programmes, they are bombarded with commercials advertising fast food products which are",
"q12" => "risks to their health. In addition, the fast food products are also",
"q13" => "by free gifts for children who",
"q14" => "the fast food. These free gifts may encourage the youngsters to buy the food, even if the food itself is not particularly tasty. For these reasons some people argue that advertising should be controlled or even banned. There are a number of considerations, however, when it comes to banning commercial advertising. First of all, the television companies depend on advertising",
"q15" => "to",
"q16" => "the costs of showing television programmes. If the advertising",
"q17" => "is decreased, the quality of programmes may also be reduced. Secondly, if the government",
"q18" => "advertising for fast food, then surely it will have to control advertising for a wide",
"q19" => "of other products which can also be harmful to children: for example, cosmetics and other body enhancers, which may also be dangerous for the health.",
"q20" => ", when it comes to watching television, it should be the parents who control what their children view. Children should be supervised while they spend time in front of the television screen so that their parents can educate them how to",
"q21" => "what they see on television. All in all, while there may be a case for government",
"q22" => "of television advertising, at the end of the day it is really the parents' responsibility to supervise and",];
$end = "their children's viewing.";
$A=[
"a1" => "accompanied",
"a2" => "availability",
"a3" => "coincide",
"a4" => "consume",
"a5" => "consumers",
"a6" => "evaluate",
"a7" => "finally",
"a8" => "generation",
"a9" => "major",
"a10" => "monitor",
"a11" => "potentially",
"a12" => "principal",
"a13" => "range",
"a14" => "regulate",
"a15" => "regulation",
"a16" => "restricts",
"a17" => "revenue",
"a18" => "revenue",
"a19" => "significantly",
"a20" => "subsidise",
"a21" => "target",
"a22" => "trend",];
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
        $q1 = "<?php echo $A['a19'] ?>",
        $q2 = "<?php echo $A['a9'] ?>",
        $q3 = "<?php echo $A['a22'] ?>",
        $q4 = "<?php echo $A['a2'] ?>",
        $q5 = "<?php echo $A['a8'] ?>",
        $q6 = "<?php echo $A['a14'] ?>",
        $q7 = "<?php echo $A['a21'] ?>",
        $q8 = "<?php echo $A['a12'] ?>",
        $q9 = "<?php echo $A['a5'] ?>",
        $q10 = "<?php echo $A['a3'] ?>",
        $q11 = "<?php echo $A['a11'] ?>",
        $q12 = "<?php echo $A['a1'] ?>",
        $q13 = "<?php echo $A['a4'] ?>",
        $q14 = "<?php echo $A['a17'] ?>",
        $q15 = "<?php echo $A['a20'] ?>",
        $q16 = "<?php echo $A['a17'] ?>",
        $q17 = "<?php echo $A['a16'] ?>",
        $q18 = "<?php echo $A['a13'] ?>",
        $q19 = "<?php echo $A['a7'] ?>",
        $q20 = "<?php echo $A['a6'] ?>",
        $q21 = "<?php echo $A['a15'] ?>",
        $q22 = "<?php echo $A['a10'] ?>",
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

    function checkAnswer(ele, status) {
        let bgColor;

        status == 'correct' ? (bgColor = 'color-success') : (bgColor = 'color-danger')

        ele.addClass(bgColor)
    }
</script>
@stop