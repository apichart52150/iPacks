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
$Q=[
"q1" => "The linegraph describes the growth of wages in Somecountry from 1993 to 2003. The growth started at two",
"q2" => "in 1993, but it did not stay there very long, it rapidly doubled in 1994. Further on, the figure",
"q3" => "to three",
"q4" => "in 1995, stayed steady for a year, before it",
"q5" => "to rise slowly ending up at just under four",
"q6" => "in 1997. 1998 was the best year, when the wages peaked at six",
"q7" => ". However, after 1998 the wages",
"q8" => "nearly every year. Only a year after, the",
"q9" => "dropped to well under three",
"q10" => ", and stayed there on",
"q11" => "three",
"q12" => "till 2000. In 2002 the wages reached the trough of just one",
"q13" => "growth. Fortunately the growth rose in 2003 to just under two",
"q14" => ".",
"q15" => ", the growth rate in wages in Somecountry",];
$end = "striking changes through the ten years.";
$A=[
"a1" => "approximately",
"a2" => "declined",
"a3" => "declined",
"a4" => "demonstrated",
"a5" => "overall",
"a6" => "percent",
"a7" => "percent",
"a8" => "percent",
"a9" => "percent",
"a10" => "percent",
"a11" => "percent",
"a12" => "percent",
"a13" => "percent",
"a14" => "percentage",
"a15" => "proceeded",];
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
        $q1 = "<?php echo $A['a6'] ?>",
        $q2 = "<?php echo $A['a2'] ?>",
        $q3 = "<?php echo $A['a6'] ?>",
        $q4 = "<?php echo $A['a15'] ?>",
        $q5 = "<?php echo $A['a6'] ?>",
        $q6 = "<?php echo $A['a6'] ?>",
        $q7 = "<?php echo $A['a2'] ?>",
        $q8 = "<?php echo $A['a14'] ?>",
        $q9 = "<?php echo $A['a6'] ?>",
        $q10 = "<?php echo $A['a1'] ?>",
        $q11 = "<?php echo $A['a6'] ?>",
        $q12 = "<?php echo $A['a6'] ?>",
        $q13 = "<?php echo $A['a6'] ?>",
        $q14 = "<?php echo $A['a5'] ?>",
        $q15 = "<?php echo $A['a4'] ?>",
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