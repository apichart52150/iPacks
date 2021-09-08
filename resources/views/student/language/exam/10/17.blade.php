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
$Q=[    "q1" => "Some people find a",
    "q2" => "and work with the same company for many years. Others, however, prefer to stay with the same company for a short spell only and then move on to a different",
    "q3" => ". There are advantages and disadvantages about changing",
    "q4" => "frequently. People who stay in the same",
    "q5" => "for a long time do so for a number of reasons. First of all, they regard that",
    "q6" => "as part of a",
    "q7" => "career path, rather than simply as a means to earn a high salary. The terms and conditions which",
    "q8" => "the",
    "q9" => "are usually satisfactory and will improve incrementally the longer the person stays with the company. The longer the person does the same",
    "q10" => ", the more experience they",
    "q11" => "and the more proficiently they can perform their duties.",
    "q12" => "generally comes at regular",
    "q13" => ", and the employee may even work for just one company until it is time to retire. Such loyalty is usually rewarded by the company not only in",
    "q14" => "terms but also with",
    "q15" => "",
    "q16" => "and added perks and bonuses. In addition to this, the work practices and",
    "q17" => "",
    "q18" => "of the company is usually conducive to people staying a long time. In other words, there is not a",
    "q19" => "of competition and",
    "q20" => ". On the other hand, some people prefer to move from",
    "q21" => "to",
    "q22" => "on a regular basis in order to find improved terms and conditions of service. They may expect higher remuneration in return for showing a competitive spirit and by working longer hours to meet deadlines. Once an employee has reached a certain level, above which (s)he is unlikely to",
    "q23" => ", then it may be the time to search for new opportunities elsewhere. There are, of course, other reasons for moving on. If, for example, working conditions are unpleasant, or if the relationship with one's",
    "q24" => "is unbearable, then it is advisable to change",
    "q25" => ". One of the most common reasons for searching for a new",
    "q26" => "is if the boss makes too many demands on the employees.",
    "q27" => "",
    "q28" => "from one workplace to another, however, can result in a feeling of not belonging to any particular workplace, or even",
    "q29" => "",
    "q30" => "satisfaction. In",
    "q31" => ", there are arguments for and against changing employment frequently. It largely depends on the",
    "q32" => "and on the ambitions and expectations held by the",];
    $end = "employee.";
$A=[
    "a1" => "accompany",
    "a2" => "acquire",
    "a3" => "colleagues",
    "a4" => "conclusion",
    "a5" => "constant",
    "a6" => "corporate",
    "a7" => "culture",
    "a8" => "culture",
    "a9" => "diminished",
    "a10" => "financial",
    "a11" => "individual",
    "a12" => "individual",
    "a13" => "intervals",
    "a14" => "job",
    "a15" => "job",
    "a16" => "job",
    "a17" => "job",
    "a18" => "job",
    "a19" => "job",
    "a20" => "job",
    "a21" => "job",
    "a22" => "job",
    "a23" => "job",
    "a24" => "job",
    "a25" => "jobs",
    "a26" => "jobs",
    "a27" => "proceed",
    "a28" => "promotion",
    "a29" => "security",
    "a30" => "shifting",
    "a31" => "stress",
    "a32" => "structured",];
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
         $q2 = "<?php echo $A['a14'] ?>",
         $q3 = "<?php echo $A['a25'] ?>",
         $q4 = "<?php echo $A['a14'] ?>",
         $q5 = "<?php echo $A['a14'] ?>",
         $q6 = "<?php echo $A['a32'] ?>",
         $q7 = "<?php echo $A['a1'] ?>",
         $q8 = "<?php echo $A['a14'] ?>",
         $q9 = "<?php echo $A['a14'] ?>",
         $q10 = "<?php echo $A['a2'] ?>",
         $q11 = "<?php echo $A['a28'] ?>",
         $q12 = "<?php echo $A['a13'] ?>",
         $q13 = "<?php echo $A['a10'] ?>",
         $q14 = "<?php echo $A['a14'] ?>",
         $q15 = "<?php echo $A['a29'] ?>",
         $q16 = "<?php echo $A['a6'] ?>",
         $q17 = "<?php echo $A['a7'] ?>",
         $q18 = "<?php echo $A['a7'] ?>",
         $q19 = "<?php echo $A['a31'] ?>",
         $q20 = "<?php echo $A['a14'] ?>",
         $q21 = "<?php echo $A['a14'] ?>",
         $q22 = "<?php echo $A['a27'] ?>",
         $q23 = "<?php echo $A['a3'] ?>",
         $q24 = "<?php echo $A['a25'] ?>",
         $q25 = "<?php echo $A['a14'] ?>",
         $q26 = "<?php echo $A['a5'] ?>",
         $q27 = "<?php echo $A['a30'] ?>",
         $q28 = "<?php echo $A['a9'] ?>",
         $q29 = "<?php echo $A['a14'] ?>",
         $q30 = "<?php echo $A['a4'] ?>",
         $q31 = "<?php echo $A['a11'] ?>",
         $q32 = "<?php echo $A['a11'] ?>",
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