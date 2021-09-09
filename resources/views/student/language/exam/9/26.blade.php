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
    "q1" => "Capital punishment is always associated with",
    "q2" => "and intolerance. In fact, we must",
    "q3" => "that some people disagree with this kind of penalty but others are totally in favour. Portugal was the first European country to end this kind of penalty. Since the 19th century, tolerance and respect for life are important values. Moreover, we can affirm that all Europe remains under the same",
    "q4" => "of",
    "q5" => ". Maybe because of a religious view point, life respect is a typical value in the Old Catholic world. Those who are in favour of capital punishment live particularly in",
    "q6" => "countries. It is not surprising to watch some barbarian behaviours in certain countries such as public stoning to death. The population is invited to",
    "q7" => "in the trial and in the execution of the",
    "q8" => "sentence - death- itself. However, this is not just an",
    "q9" => "of third world countries. Actually, the USA is where this kind of punishment has its higher rates. The state of Texas, in particular, is at the top, supporting this measure against crime, especially those related to serial killers and those",
    "q10" => "children. In a society",
    "q11" => "by fear and government control, it is foreseen that this penalty will continue into the future. Maybe this is not a clear question. As we can see there are several values here and of course",
    "q12" => "behaviours. The roots of the question are religious,",
    "q13" => ",",
    "q14" => "and even geographical. The world is divided and the law systems show those divisions. The solutions, however, can lead us to other questions concerning revenge and justice. Is it better to kill a person because of his crimes? Can we admit that a life sentence in prison could be a much better punishment? In fact, rehabilitation is the right way especially with an",
    "q15" => "",
    "q16" => "",
    "q17" => "first. Some people are lost forever, and in my opinion some murderers and other perverted people will suffer more in jail. In this sense, capital punishment is a soft",
    ];
$end = ".";
$A=[
    "a1" => "accurate",
    "a2" => "acknowledge",
    "a3" => "codes",
    "a4" => "conduct",
    "a5" => "cultural",
    "a6" => "cultural",
    "a7" => "dominated",
    "a8" => "ethical",
    "a9" => "evaluation",
    "a10" => "final",
    "a11" => "ignorance",
    "a12" => "image",
    "a13" => "involving",
    "a14" => "participate",
    "a15" => "psychological",
    "a16" => "radical",
    "a17" => "release",
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
         $q1 = "<?php echo $A['a11'] ?>",
         $q2 = "<?php echo $A['a2'] ?>",
         $q3 = "<?php echo $A['a3'] ?>",
         $q4 = "<?php echo $A['a4'] ?>",
         $q5 = "<?php echo $A['a16'] ?>",
         $q6 = "<?php echo $A['a14'] ?>",
         $q7 = "<?php echo $A['a10'] ?>",
         $q8 = "<?php echo $A['a12'] ?>",
         $q9 = "<?php echo $A['a13'] ?>",
         $q10 = "<?php echo $A['a7'] ?>",
         $q11 = "<?php echo $A['a5'] ?>",
         $q12 = "<?php echo $A['a5'] ?>",
         $q13 = "<?php echo $A['a15'] ?>",
         $q14 = "<?php echo $A['a1'] ?>",
         $q15 = "<?php echo $A['a8'] ?>",
         $q16 = "<?php echo $A['a9'] ?>",
         $q17 = "<?php echo $A['a17'] ?>",
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