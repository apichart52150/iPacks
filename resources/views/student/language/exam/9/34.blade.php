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
    "q1" => "The main",
    "q2" => "is that all",
    "q3" => "including kindergarten increased every year. Kindergarten started highest at 2.4 and ended highest at 2.9",
    "q4" => "with a",
    "q5" => "increase. But",
    "q6" => "1-2 and",
    "q7" => "5-6 shows a slightly different",
    "q8" => ": both started at 1.5",
    "q9" => "in 1999 and",
    "q10" => "slightly in 2000. Both of them increased slowly in 2002 and both held that course to 2004 where",
    "q11" => "1-2 ended at 2.1",
    "q12" => "and",
    "q13" => "5-6 ended at 2.6",
    "q14" => ".",
    "q15" => "3-4 had a slow but steady growth through all six years. It started at 1.6",
    "q16" => "in 1999 and increased 0.1 every year except in 2003 when it peaked up 0.2",
    "q17" => ".",
    "q18" => "7-8 started at 1.6",
    "q19" => "and stayed there for three years until it rapidly rose to 2.2 and peaked at 2.5 in 2004.",
    "q20" => ", all",
    "q21" => "including kindergarten experienced a rise of",
    "q22" => "",
    "q23" => "1",];
    $end = "and more in 6 years.";
$A=[
    "a1" => "approximately",
    "a2" => "constant",
    "a3" => "declined",
    "a4" => "grades",
    "a5" => "grades",
    "a6" => "grades",
    "a7" => "grades",
    "a8" => "grades",
    "a9" => "grades",
    "a10" => "grades",
    "a11" => "grades",
    "a12" => "minimum",
    "a13" => "overall",
    "a14" => "percent",
    "a15" => "percent",
    "a16" => "percent",
    "a17" => "percent",
    "a18" => "percent",
    "a19" => "percent",
    "a20" => "percent",
    "a21" => "percent",
    "a22" => "trend",
    "a23" => "trend",];
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
         $q1 = "<?php echo $A['a22'] ?>",
         $q2 = "<?php echo $A['a4'] ?>",
         $q3 = "<?php echo $A['a14'] ?>",
         $q4 = "<?php echo $A['a2'] ?>",
         $q5 = "<?php echo $A['a4'] ?>",
         $q6 = "<?php echo $A['a4'] ?>",
         $q7 = "<?php echo $A['a22'] ?>",
         $q8 = "<?php echo $A['a14'] ?>",
         $q9 = "<?php echo $A['a3'] ?>",
         $q10 = "<?php echo $A['a4'] ?>",
         $q11 = "<?php echo $A['a14'] ?>",
         $q12 = "<?php echo $A['a4'] ?>",
         $q13 = "<?php echo $A['a14'] ?>",
         $q14 = "<?php echo $A['a4'] ?>",
         $q15 = "<?php echo $A['a14'] ?>",
         $q16 = "<?php echo $A['a14'] ?>",
         $q17 = "<?php echo $A['a4'] ?>",
         $q18 = "<?php echo $A['a14'] ?>",
         $q19 = "<?php echo $A['a13'] ?>",
         $q20 = "<?php echo $A['a4'] ?>",
         $q21 = "<?php echo $A['a1'] ?>",
         $q22 = "<?php echo $A['a12'] ?>",
         $q23 = "<?php echo $A['a14'] ?>",
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
            if($(item).children().text().trim() == answers[idx]) {
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
</script>
@stop