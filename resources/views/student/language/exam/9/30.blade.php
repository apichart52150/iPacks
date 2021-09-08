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

$Q=["q1" => "Improvements in health, education and trade are essential for the development of poorer nations. However, the governments of richer nations should take more responsibility for helping the poorer nations in such",
"q2" => ". Today's world has been divided into developing and industrialised countries. The main difference between them is the amount of money that governments apply in important",
"q3" => "such as education, health and commerce. Most of the poorer nations are buried in debts as a result of their unbalanced",
"q4" => "which are reflected in failed health care, an",
"q5" => "education system and a weak international trade. This vicious",
"q6" => "will continue",
"q7" => "unless wealthier nations show interest in",
"q8" => "the worldwide",
"q9" => "differences, as well as taking more responsibility for",
"q10" => "unfortunate countries. Most of the African countries live in sub-human conditions because of the extreme poverty, upheaval, hunger, disease, unemployment, lack of education and both inexperienced and corrupt",
"q11" => ". The devastating",
"q12" => "of the",
"q13" => "epidemic in those countries could improve if the infected populations receive free drugs to control the disease, have",
"q14" => "to health",
"q15" => "and get information on how to prevent its spread. But this can only be",
"q16" => "through international",
"q17" => "programs in which leaders of the world's richest countries donate medicine and also send doctors and nurses to treat and educate those in need. Moreover, most of the poor countries",
"q18" => "on selling agricultural products and raw material to rich nations and buying industrialized products from them resulting in a huge",
"q19" => "deficit.",
"q20" => ", they borrow a",
"q21" => "amount of money from the World Bank to try to improve their broken",
"q22" => ", but sometimes the money disappears with no",
"q23" => "changes and they cannot even pay the interest to the bank. Regarding this",
"q24" => ", last year the G8, which is",
"q25" => "of leaders of the eight richest nations, decided to forgive billions of dollars worth of debt owed by the world's poorest nations. In addition, they developed",
"q26" => "loan programs to",
"q27" => "",
"q28" => "those countries. In",
"q29" => ", leaders of the industrialised countries play an indispensable",
"q30" => "in",
"q31" => "developing nations deal with essential",
"q32" => "such as health, education and trade. Also, their",
"q33" => "is the key to breaking the vicious",];
$end = ", which results in poverty and death.";
$A=[
"a1" => "access",
"a2" => "achieved",
"a3" => "adequate",
"a4" => "administrations",
"a5" => "aid",
"a6" => "aid",
"a7" => "AIDS",
"a8" => "areas",
"a9" => "areas",
"a10" => "assist",
"a11" => "assisting",
"a12" => "assisting",
"a13" => "comprised",
"a14" => "conclusion",
"a15" => "consequences",
"a16" => "consequently",
"a17" => "cycle",
"a18" => "cycle",
"a19" => "economic",
"a20" => "economies",
"a21" => "economies",
"a22" => "financial",
"a23" => "financially",
"a24" => "indefinitely",
"a25" => "issue",
"a26" => "minimizing",
"a27" => "professionals",
"a28" => "rely",
"a29" => "role",
"a30" => "sectors",
"a31" => "significant",
"a32" => "significant",
"a33" => "unstructured",];
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
        $q1 = "<?php echo $A['a8'] ?>",
        $q2 = "<?php echo $A['a8'] ?>",
        $q3 = "<?php echo $A['a20'] ?>",
        $q4 = "<?php echo $A['a33'] ?>",
        $q5 = "<?php echo $A['a17'] ?>",
        $q6 = "<?php echo $A['a24'] ?>",
        $q7 = "<?php echo $A['a26'] ?>",
        $q8 = "<?php echo $A['a19'] ?>",
        $q9 = "<?php echo $A['a11'] ?>",
        $q10 = "<?php echo $A['a4'] ?>",
        $q11 = "<?php echo $A['a15'] ?>",
        $q12 = "<?php echo $A['a7'] ?>",
        $q13 = "<?php echo $A['a1'] ?>",
        $q14 = "<?php echo $A['a27'] ?>",
        $q15 = "<?php echo $A['a2'] ?>",
        $q16 = "<?php echo $A['a5'] ?>",
        $q17 = "<?php echo $A['a28'] ?>",
        $q18 = "<?php echo $A['a22'] ?>",
        $q19 = "<?php echo $A['a16'] ?>",
        $q20 = "<?php echo $A['a31'] ?>",
        $q21 = "<?php echo $A['a20'] ?>",
        $q22 = "<?php echo $A['a31'] ?>",
        $q23 = "<?php echo $A['a25'] ?>",
        $q24 = "<?php echo $A['a13'] ?>",
        $q25 = "<?php echo $A['a3'] ?>",
        $q26 = "<?php echo $A['a23'] ?>",
        $q27 = "<?php echo $A['a10'] ?>",
        $q28 = "<?php echo $A['a14'] ?>",
        $q29 = "<?php echo $A['a29'] ?>",
        $q30 = "<?php echo $A['a11'] ?>",
        $q31 = "<?php echo $A['a30'] ?>",
        $q32 = "<?php echo $A['a5'] ?>",
        $q33 = "<?php echo $A['a17'] ?>",
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
</script>
@stop