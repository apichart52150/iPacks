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
$Q=["q1" => "In recent",
"q2" => "there has been a changing",
"q3" => "in population. There has been a",
"q4" => "change in",
"q5" => "from a young population to a state in which the older",
"q6" => "has become the",
"q7" => ". This essay will examine some of the reasons for this",
"q8" => ". There are a number of reasons why people are living longer today. The first of these is the improvement in health-care. The number of well-equipped hospitals and clinics has grown, especially in developed nations. In addition, the doctor-patient",
"q9" => "has improved, resulting in a reduced workload for doctors, and",
"q10" => "health-care for patients. Another reason is the fact that people nowadays are eating a healthier diet. Campaigns to make people more",
"q11" => "of the need to eat nutritious food have been successful, as people move",
"q12" => "from their preference for fast, fatty foods high in cholesterol. Combined with this is the fact that people are tending to take part in more",
"q13" => "exercise. This also prolongs longevity. Improved working conditions are another reason why people are living longer. In the past people had to work long hours under insanitary, even dangerous conditions. Now that ",
"q14" => "has reduced the need for",
"q15" => "",
"q16" => ", work has become less",
"q17" => "draining. Improved terms and conditions of service, such as longer weekends and",
"q18" => "of paid leave, have also had a",
"q19" => "",
"q20" => "on working life. Ironically, the",
"q21" => "for an ageing population has resulted in a change of",
"q22" => "regarding retirement. Since people are living longer, it makes sense for the official retirement age to be raised so that the older",
"q23" => "can remain mobile and",
"q24" => ". In",
"q25" => ", there are a number of reasons why people are living longer. If the",
"q26" => "continues, governments and society as a whole may need to change their mindset concerning old people. The older",
"q27" => "may well have to become more productive in order to make up for the reduction in numbers of young people",];
$end = "to work.";
$A=[
"a1" => "attitude",
"a2" => "automation",
"a3" => "available",
"a4" => "aware",
"a5" => "aware",
"a6" => "beneficial",
"a7" => "conclusion",
"a8" => "decades",
"a9" => "dramatic",
"a10" => "enhanced",
"a11" => "focus",
"a12" => "focused",
"a13" => "generation",
"a14" => "generation",
"a15" => "generation",
"a16" => "impact",
"a17" => "labour",
"a18" => "majority",
"a19" => "manual",
"a20" => "periods",
"a21" => "physical",
"a22" => "physically",
"a23" => "ratio",
"a24" => "trend",
"a25" => "trend",
"a26" => "trend",
"a27" => "trend",];
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
<script src="{{ asset('public/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('public/assets/js/pages/sweet-alerts.init.js') }}"></script>
<script>
    $("#show-answer").prop("disabled", true);

    const answers = [
        $q1 = "<?php echo $A['a8'] ?>",
        $q2 = "<?php echo $A['a24'] ?>",
        $q3 = "<?php echo $A['a9'] ?>",
        $q4 = "<?php echo $A['a11'] ?>",
        $q5 = "<?php echo $A['a13'] ?>",
        $q6 = "<?php echo $A['a18'] ?>",
        $q7 = "<?php echo $A['a24'] ?>",
        $q8 = "<?php echo $A['a23'] ?>",
        $q9 = "<?php echo $A['a10'] ?>",
        $q10 = "<?php echo $A['a4'] ?>",
        $q11 = "<?php echo $A['a4'] ?>",
        $q12 = "<?php echo $A['a21'] ?>",
        $q13 = "<?php echo $A['a2'] ?>",
        $q14 = "<?php echo $A['a19'] ?>",
        $q15 = "<?php echo $A['a17'] ?>",
        $q16 = "<?php echo $A['a22'] ?>",
        $q17 = "<?php echo $A['a20'] ?>",
        $q18 = "<?php echo $A['a6'] ?>",
        $q19 = "<?php echo $A['a16'] ?>",
        $q20 = "<?php echo $A['a24'] ?>",
        $q21 = "<?php echo $A['a1'] ?>",
        $q22 = "<?php echo $A['a13'] ?>",
        $q23 = "<?php echo $A['a12'] ?>",
        $q24 = "<?php echo $A['a7'] ?>",
        $q25 = "<?php echo $A['a24'] ?>",
        $q26 = "<?php echo $A['a13'] ?>",
        $q27 = "<?php echo $A['a3'] ?>",
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

    function checkAnswer(ele, status) {
        let bgColor;

        status == 'correct' ? (bgColor = 'color-success') : (bgColor = 'color-danger')

        ele.addClass(bgColor)
    }
</script>
@stop