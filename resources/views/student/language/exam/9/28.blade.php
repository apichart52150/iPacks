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
Q=["q1" => "With the advent of",
"q2" => ", a common language to",
"q3" => "trade and",
"q4" => "seems",
"q5" => ". Some oppose the development of a single language on the grounds that it may lead to",
"q6" => "",
"q7" => "and a loss of local linguistic knowledge. Yet, I am of the opinion that it is possible to use an official international language and still",
"q8" => "one's own language and",
"q9" => ". Firstly, many countries already use an official language or languages. For example, in India there are two official languages: Hindi and English. In a country such as India where there are many languages spoken, there is a need for official languages to",
"q10" => "",
"q11" => "between different",
"q12" => "of the population and the different states. In China, where different dialects are spoken, Mandarin, the official language,",
"q13" => "people from different provinces to comprehend each other. Secondly, in an age of rampant ",
"q14" => "there is no doubt that an international language is",
"q15" => ". How is an African businessman going to",
"q16" => "business in China when there are such differences between languages? In this sense, not only is an international language an",
"q17" => ", but also a necessity for trade, commerce and",
"q18" => "",
"q19" => "in the 21st century. The critics opposing the adoption of an international official language argue that it would lead to a loss of",
"q20" => "",
"q21" => ". However, the use of an international official language doesn't mean that local languages will die out. For example, English already",
"q22" => "as a kind of unofficial international language but this doesn't mean that people",
"q23" => "",
"q24" => "in English or they neglect their own language. English is used in",
"q25" => "",
"q26" => "(trade, business, etc) and native languages are used for everyday",
"q27" => ". In",
"q28" => ", as the world becomes smaller the need for an official international language seems unavoidable. English has already",
"q29" => "this",
"q30" => "although its",
"q31" => "is unofficial. In my view, the use of either an official or unofficial international language is necessary to",
"q32" => "",
"q33" => "in a time of rapid",];
$end = ".";
$A=[
"a1" => "assumed",
"a2" => "brief",
"a3" => "communication",
"a4" => "communication",
"a5" => "communication",
"a6" => "conduct",
"a7" => "contexts",
"a8" => "converse",
"a9" => "cultural",
"a10" => "cultural",
"a11" => "culture",
"a12" => "economic",
"a13" => "enables",
"a14" => "ensure",
"a15" => "erosion",
"a16" => "expansion",
"a17" => "facilitate",
"a18" => "facilitate",
"a19" => "functions",
"a20" => "globalization",
"a21" => "globalization",
"a22" => "globalization",
"a23" => "identity",
"a24" => "inevitability",
"a25" => "inevitable",
"a26" => "inevitable",
"a27" => "instruction",
"a28" => "retain",
"a29" => "role",
"a30" => "sections",
"a31" => "solely",
"a32" => "specific",
"a33" => "status",];
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
        $q1 = "<?php echo $A['a20'] ?>",
        $q2 = "<?php echo $A['a17'] ?>",
        $q3 = "<?php echo $A['a3'] ?>",
        $q4 = "<?php echo $A['a25'] ?>",
        $q5 = "<?php echo $A['a9'] ?>",
        $q6 = "<?php echo $A['a15'] ?>",
        $q7 = "<?php echo $A['a28'] ?>",
        $q8 = "<?php echo $A['a11'] ?>",
        $q9 = "<?php echo $A['a14'] ?>",
        $q10 = "<?php echo $A['a3'] ?>",
        $q11 = "<?php echo $A['a30'] ?>",
        $q12 = "<?php echo $A['a13'] ?>",
        $q13 = "<?php echo $A['a20'] ?>",
        $q14 = "<?php echo $A['a25'] ?>",
        $q15 = "<?php echo $A['a6'] ?>",
        $q16 = "<?php echo $A['a24'] ?>",
        $q17 = "<?php echo $A['a12'] ?>",
        $q18 = "<?php echo $A['a16'] ?>",
        $q19 = "<?php echo $A['a9'] ?>",
        $q20 = "<?php echo $A['a23'] ?>",
        $q21 = "<?php echo $A['a19'] ?>",
        $q22 = "<?php echo $A['a8'] ?>",
        $q23 = "<?php echo $A['a31'] ?>",
        $q24 = "<?php echo $A['a32'] ?>",
        $q25 = "<?php echo $A['a7'] ?>",
        $q26 = "<?php echo $A['a27'] ?>",
        $q27 = "<?php echo $A['a2'] ?>",
        $q28 = "<?php echo $A['a1'] ?>",
        $q29 = "<?php echo $A['a29'] ?>",
        $q30 = "<?php echo $A['a33'] ?>",
        $q31 = "<?php echo $A['a17'] ?>",
        $q32 = "<?php echo $A['a3'] ?>",
        $q33 = "<?php echo $A['a20'] ?>",
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