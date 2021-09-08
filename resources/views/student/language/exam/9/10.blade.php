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

$Q = [
"q1" => "A much",
"q2" => "",
"q3" => "these days is whether citizens should take out private health insurance or not. The cost of providing free",
"q4" => "care for both the wealthy and the poor is far too great for any government, and most people agree that if you can pay for insurance, you should. In this essay, I will argue that all who can afford it should be insured, but free",
"q5" => "care must be made",
"q6" => "for those too poor to do so. The most important reason for encouraging people to take out private health insurance is the cost to the government of",
"q7" => "health care. Free health cover for people who are able to pay for it is a waste of public money. Of course, people will only pay health insurance premiums if they know that they are getting good value for their money. If they get sick, they should pay very little or nothing at all. In addition, the privately insured are entitled to special",
"q8" => "such as having the choice of their own doctors, and being able to avoid long waiting lists for hospital beds. On the other hand, those who really cannot afford to pay private insurance premiums, which are often very high, are still entitled as citizens to the best",
"q9" => "care",
"q10" => ": they cannot be expected to pay their own",
"q11" => "bills. However, if they are working, they should still pay a",
"q12" => 'of their wage (say 1% to 2%) as a tax which goes towards the cost of providing "free"',
"q13" => "services. In",
];

$end = ", most people should privately insure their health, but it is unreasonable to suppose that all citizens can afford it. Therefore, a safety net in the form of a basic free health care system must exist for the very poor and the unemployed.";
$A = [
"a1" => "available",
"a2" => "available",
"a3" => "benefits",
"a4" => "conclusion",
"a5" => "debated",
"a6" => "issue",
"a7" => "medical",
"a8" => "medical",
"a9" => "medical",
"a10" => "medical",
"a11" => "medical",
"a12" => "percentage",
"a13" => "subsidized",
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
@endsection

@section('js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
<script src="{{ asset('public/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('public/assets/js/pages/sweet-alerts.init.js') }}"></script>
<script>
    $("#show-answer").prop("disabled", true);

    const answers = [
        $q1 = "<?php echo $A['a5'] ?>",
        $q2 = "<?php echo $A['a6'] ?>",
        $q3 = "<?php echo $A['a7'] ?>",
        $q4 = "<?php echo $A['a7'] ?>",
        $q5 = "<?php echo $A['a1'] ?>",
        $q6 = "<?php echo $A['a13'] ?>",
        $q7 = "<?php echo $A['a3'] ?>",
        $q8 = "<?php echo $A['a7'] ?>",
        $q9 = "<?php echo $A['a1'] ?>",
        $q10 = "<?php echo $A['a7'] ?>",
        $q11 = "<?php echo $A['a12'] ?>",
        $q12 = "<?php echo $A['a7'] ?>",
        $q13 = "<?php echo $A['a4'] ?>",
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