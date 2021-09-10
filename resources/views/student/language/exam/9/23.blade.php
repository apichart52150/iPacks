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
$Q=["q1" => "An essential problem of the 21st century is world pollution. Currently the",
"q2" => "is so contaminated that urgent measures should be taken. The single",
"q3" => "cannot be blamed for the world pollution; however every person should take care of his or her habitat. In addition, it is vital that",
"q4" => "",
"q5" => "should be treated internationally. Lately, many presentations,",
"q6" => "and international summits have been held regarding waste treatment, recycling, soil and water contamination. For sure joint efforts and consolidation can only help in the",
"q7" => "war against the",
"q8" => "disaster which is going on. For",
"q9" => ", governments should offer support to companies and organizations",
"q10" => "in manufacturing, industry or agriculture in order to find",
"q11" => "friendly",
"q12" => ". These could be special",
"q13" => ", recycling programs,",
"q14" => "education programmes and so on. However, the influence of",
"q15" => "over",
"q16" => "should not be",
"q17" => ". If we do not confess that our planet is our home, we will never be able to take",
"q18" => "care of it. We have to",
"q19" => "every day to the preservation of nature and the",
"q20" => ". For example, always remember to save",
"q21" => "by switching off lights,",
"q22" => "and everything that we do not use. Our next obligation is to separate waste and throw",
"q23" => "only in the designated",
"q24" => ". Driving",
"q25" => "can also be",
"q26" => "friendly. For example, we have to avoid accelerating too rapidly or using the air conditioner in the country, where it will be better to save",
"q27" => "by simply opening the windows. To",
"q28" => "up,",
"q29" => "problems should be handled by local and international",
"q30" => "also. Every single person should take care of the",
];
$end = "and moreover we have to bring up our children to be conscious citizens of a clean and preserved planet.";
$A=[
"a1" => "adequate",
"a2" => "approaches",
"a3" => "areas",
"a4" => "authorities",
"a5" => "bulk",
"a6" => "computers",
"a7" => "conferences",
"a8" => "contribute",
"a9" => "energy",
"a10" => "energy",
"a11" => "environment",
"a12" => "environment",
"a13" => "environment",
"a14" => "environment",
"a15" => "environment",
"a16" => "environmental",
"a17" => "environmental",
"a18" => "environmental",
"a19" => "environmental",
"a20" => "environmentally",
"a21" => "ignored",
"a22" => "individual",
"a23" => "individuals",
"a24" => "instance",
"a25" => "involved",
"a26" => "issues",
"a27" => "mutual",
"a28" => "regulations",
"a29" => "sum",
"a30" => "vehicles",
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
        $q2 = "<?php echo $A['a22'] ?>",
        $q3 = "<?php echo $A['a16'] ?>",
        $q4 = "<?php echo $A['a26'] ?>",
        $q5 = "<?php echo $A['a7'] ?>",
        $q6 = "<?php echo $A['a27'] ?>",
        $q7 = "<?php echo $A['a16'] ?>",
        $q8 = "<?php echo $A['a24'] ?>",
        $q9 = "<?php echo $A['a25'] ?>",
        $q10 = "<?php echo $A['a20'] ?>",
        $q11 = "<?php echo $A['a2'] ?>",
        $q12 = "<?php echo $A['a28'] ?>",
        $q13 = "<?php echo $A['a16'] ?>",
        $q14 = "<?php echo $A['a23'] ?>",
        $q15 = "<?php echo $A['a11'] ?>",
        $q16 = "<?php echo $A['a21'] ?>",
        $q17 = "<?php echo $A['a1'] ?>",
        $q18 = "<?php echo $A['a8'] ?>",
        $q19 = "<?php echo $A['a11'] ?>",
        $q20 = "<?php echo $A['a9'] ?>",
        $q21 = "<?php echo $A['a6'] ?>",
        $q22 = "<?php echo $A['a5'] ?>",
        $q23 = "<?php echo $A['a3'] ?>",
        $q24 = "<?php echo $A['a30'] ?>",
        $q25 = "<?php echo $A['a11'] ?>",
        $q26 = "<?php echo $A['a9'] ?>",
        $q27 = "<?php echo $A['a29'] ?>",
        $q28 = "<?php echo $A['a16'] ?>",
        $q29 = "<?php echo $A['a4'] ?>",
        $q30 = "<?php echo $A['a11'] ?>",
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
        let text = "You got "+score + "/" + droppables.length + " points."
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