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
 $Q=["q1" => "Developing a nation's",
    "q2" => "is",
    "q3" => "a key",
    "q4" => "in improving the nation's we''-being. If a country has a wide",
    "q5" => "of",
    "q6" => "",
    "q7" => "",
    "q8" => ", it can develop its",
    "q9" => "so that everyone",
    "q10" => ". However, the",
    "q11" => "on the %91bottom line' should not mean that important social",
    "q12" => "are",
    "q13" => ". This essay will outline the need for a healthy balance between",
    "q14" => "development and a",
    "q15" => "on social",
    "q16" => ".",
    "q17" => "development is important for a number of reasons. First of all, a country with a healthy budget surplus can",
    "q18" => "heavily in its",
    "q19" => ". This includes services and",
    "q20" => "such as public",
    "q21" => ", health-care, education and",
    "q22" => "",
    "q23" => ". If the nation's",
    "q24" => "is",
    "q25" => "developed, everyone in society",
    "q26" => ". Developing the",
    "q27" => "will also",
    "q28" => "employment opportunities as it will attract foreign",
    "q29" => ". More",
    "q30" => "means more money for people to spend in the retail",
    "q31" => ". A",
    "q32" => "upward spiral of affluence and material comfort can result. However, there are a number of social",
    "q33" => "which should not be",
    "q34" => "at the expense of wealth",
    "q35" => ". If the nation's",
    "q36" => "",
    "q37" => "is on industry and",
    "q38" => "",
    "q39" => "",
    "q40" => ", there is a danger that corners will be cut in terms of safety and health",
    "q41" => ". Take, for example, the industrial development",
    "q42" => "of Map Ta Phut in the Rayong district of Thailand. A number of foreign",
    "q43" => "have been encouraged to set up industrial activities there. However,",
    "q44" => "",
    "q45" => "for health and safety of the",
    "q46" => "in the",
    "q47" => "have resulted in many people becoming sick from the industrial pollution caused by the factories. The government is unwilling to take preventive action to protect the local population from the effects of the industrial activities because it may lose the foreign",
    "q48" => ". The detrimental effects on people's health and on the",
    "q49" => "at large should not be",
    "q50" => "on the grounds of",
    "q51" => "development. To",
    "q52" => "up, while industrial activity is important for a nation's",
    "q53" => "development, the government needs to have",
    "q54" => "in place to safeguard the",
    "q55" => "and to",
    "q56" => "pollution of the fragile",];
    $end = ".";
$A=[
    "a1" => "adequately",
    "a2" => "area",
    "a3" => "available",
    "a4" => "benefits",
    "a5" => "benefits",
    "a6" => "communication",
    "a7" => "create",
    "a8" => "economic",
    "a9" => "economic",
    "a10" => "economic",
    "a11" => "economic",
    "a12" => "transportation",
    "a13" => "economy",
    "a14" => "economy",
    "a15" => "environment",
    "a16" => "environment",
    "a17" => "exploiting",
    "a18" => "facilities",
    "a19" => "factor",
    "a20" => "factors",
    "a21" => "financial",
    "a22" => "focus",
    "a23" => "focus",
    "a24" => "focus",
    "a25" => "ignored",
    "a26" => "ignored",
    "a27" => "ignored",
    "a28" => "infrastructure",
    "a29" => "infrastructure",
    "a30" => "infrastructure",
    "a31" => "invest",
    "a32" => "investment",
    "a33" => "investors",
    "a34" => "investors",
    "a35" => "issues",
    "a36" => "issues",
    "a37" => "issues",
    "a38" => "creation",
    "a39" => "insufficient",
    "a40" => "jobs",
    "a41" => "regulations",
    "a42" => "regulations",
    "a43" => "technology",
    "a44" => "minimize",
    "a45" => "obviously",
    "a46" => "positive",
    "a47" => "primary",
    "a48" => "primary",
    "a49" => "range",
    "a50" => "residents",
    "a51" => "residents",
    "a52" => "resources",
    "a53" => "resources",
    "a54" => "sector",
    "a55" => "site",
    "a56" => "sum",];
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
         $q1 = "<?php echo $A['a13'] ?>",
         $q2 = "<?php echo $A['a45'] ?>",
         $q3 = "<?php echo $A['a19'] ?>",
         $q4 = "<?php echo $A['a49'] ?>",
         $q5 = "<?php echo $A['a21'] ?>",
         $q6 = "<?php echo $A['a52'] ?>",
         $q7 = "<?php echo $A['a3'] ?>",
         $q8 = "<?php echo $A['a28'] ?>",
         $q9 = "<?php echo $A['a4'] ?>",
         $q10 = "<?php echo $A['a22'] ?>",
         $q11 = "<?php echo $A['a20'] ?>",
         $q12 = "<?php echo $A['a25'] ?>",
         $q13 = "<?php echo $A['a8'] ?>",
         $q14 = "<?php echo $A['a22'] ?>",
         $q15 = "<?php echo $A['a35'] ?>",
         $q16 = "<?php echo $A['a8'] ?>",
         $q17 = "<?php echo $A['a31'] ?>",
         $q18 = "<?php echo $A['a28'] ?>",
         $q19 = "<?php echo $A['a18'] ?>",
         $q20 = "<?php echo $A['a12'] ?>",
         $q21 = "<?php echo $A['a6'] ?>",
         $q22 = "<?php echo $A['a43'] ?>",
         $q23 = "<?php echo $A['a28'] ?>",
         $q24 = "<?php echo $A['a1'] ?>",
         $q25 = "<?php echo $A['a4'] ?>",
         $q26 = "<?php echo $A['a13'] ?>",
         $q27 = "<?php echo $A['a7'] ?>",
         $q28 = "<?php echo $A['a33'] ?>",
         $q29 = "<?php echo $A['a40'] ?>",
         $q30 = "<?php echo $A['a54'] ?>",
         $q31 = "<?php echo $A['a46'] ?>",
         $q32 = "<?php echo $A['a35'] ?>",
         $q33 = "<?php echo $A['a25'] ?>",
         $q34 = "<?php echo $A['a38'] ?>",
         $q35 = "<?php echo $A['a47'] ?>",
         $q36 = "<?php echo $A['a22'] ?>",
         $q37 = "<?php echo $A['a17'] ?>",
         $q38 = "<?php echo $A['a47'] ?>",
         $q39 = "<?php echo $A['a52'] ?>",
         $q40 = "<?php echo $A['a35'] ?>",
         $q41 = "<?php echo $A['a55'] ?>",
         $q42 = "<?php echo $A['a33'] ?>",
         $q43 = "<?php echo $A['a39'] ?>",
         $q44 = "<?php echo $A['a41'] ?>",
         $q45 = "<?php echo $A['a50'] ?>",
         $q46 = "<?php echo $A['a2'] ?>",
         $q47 = "<?php echo $A['a32'] ?>",
         $q48 = "<?php echo $A['a15'] ?>",
         $q49 = "<?php echo $A['a25'] ?>",
         $q50 = "<?php echo $A['a8'] ?>",
         $q51 = "<?php echo $A['a56'] ?>",
         $q52 = "<?php echo $A['a8'] ?>",
         $q53 = "<?php echo $A['a41'] ?>",
         $q54 = "<?php echo $A['a50'] ?>",
         $q55 = "<?php echo $A['a44'] ?>",
         $q56 = "<?php echo $A['a15'] ?>",
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

        let droppables = $(".dropbox");
let score = 0
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

    function checkAnswer(ele, status) {
        let bgColor;

        status == 'correct' ? (bgColor = 'color-success') : (bgColor = 'color-danger')

        ele.addClass(bgColor)
    }
</script>
@stop