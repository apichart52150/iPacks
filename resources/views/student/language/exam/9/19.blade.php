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
"q1" => "When",
"q2" => "first made their way into the business",
"q3" => ", everyone believed that they would make people's",
"q4" => "easier. What was not expected was that",
"q5" => "would",
"q6" => "",
"q7" => ". Besides",
"q8" => "to unemployment, these",
"q9" => "workers often",
"q10" => "",
"q11" => "",
"q12" => "performance. A number of",
"q13" => "have been lost as a direct result of new",
"q14" => "",
"q15" => ". Ticket agents in various",
"q16" => "",
"q17" => ", from subway/underground stations to airports are",
"q18" => "nonexistent these days. Bank tellers have been greatly reduced due to",
"q19" => "bank machines. In addition, many call centres that have help lines are almost entirely computerised. A few years ago I worked as a helper in our local library. Today this position does not exist, because six new",
"q20" => "have been installed. The number of positions lost to",
"q21" => "grows exponentially, and unemployment continues to get worse. While a",
"q22" => "may easily",
"q23" => "the main",
"q24" => "of these",
"q25" => ", most",
"q26" => "fall short when customers have a",
"q27" => "request or problem. A pre-paid ticket booth does not have",
"q28" => "about the entertainment district and cannot offer friendly directions to a tourist.",
"q29" => ", an",
"q30" => "bank machine cannot provide",
"q31" => "and reassurance to a customer who has just had his",
"q32" => "card stolen. And, more often than not,",
"q33" => "telephone operators cannot answer the one question that we have, and we end up waiting on the line to speak with someone anyway. Every time I go into the library where I worked I notice elderly people who don't know how to use the",
"q34" => "and can't find anyone to help. In the future, I believe a new business",
"q35" => "will",
"q36" => ". As",
"q37" => "",
"q38" => "",
"q39" => ", new positions will have to be invented. More and more people will go into business for themselves, and hopefully put the personal touch back into business. I believe that the human workforce will",
"q40" => "that it is more valuable than",
];


$end = ".";

$A = [
"a1" => "achieve",
"a2" => "assistance",
"a3" => "automated",
"a4" => "automated",
"a5" => "automated",
"a6" => "automated",
"a7" => "computer",
"a8" => "computer",
"a9" => "computer",
"a10" => "computers",
"a11" => "computers",
"a12" => "computers",
"a13" => "computers",
"a14" => "computers",
"a15" => "computers",
"a16" => "computers",
"a17" => "contributing",
"a18" => "credit",
"a19" => "demonstrate",
"a20" => "eliminate",
"a21" => "eliminate",
"a22" => "evolve",
"a23" => "exhibit",
"a24" => "facilities",
"a25" => "inadequate",
"a26" => "insight",
"a27" => "job",
"a28" => "jobs",
"a29" => "jobs",
"a30" => "jobs",
"a31" => "jobs",
"a32" => "jobs",
"a33" => "sector",
"a34" => "similarly",
"a35" => "tasks",
"a36" => "technology",
"a37" => "transportation",
"a38" => "trend",
"a39" => "unique",
"a40" => "virtually",
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
<script src="{{ asset('public/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('public/assets/js/pages/sweet-alerts.init.js') }}"></script>
<script>
    $("#show-answer").prop("disabled", true);

    const answers = [
        $q1 = "<?php echo $A['a10'] ?>",
        $q2 = "<?php echo $A['a33'] ?>",
        $q3 = "<?php echo $A['a28'] ?>",
        $q4 = "<?php echo $A['a10'] ?>",
        $q5 = "<?php echo $A['a20'] ?>",
        $q6 = "<?php echo $A['a28'] ?>",
        $q7 = "<?php echo $A['a17'] ?>",
        $q8 = "<?php echo $A['a3'] ?>",
        $q9 = "<?php echo $A['a23'] ?>",
        $q10 = "<?php echo $A['a25'] ?>",
        $q11 = "<?php echo $A['a27'] ?>",
        $q12 = "<?php echo $A['a28'] ?>",
        $q13 = "<?php echo $A['a7'] ?>",
        $q14 = "<?php echo $A['a36'] ?>",
        $q15 = "<?php echo $A['a37'] ?>",
        $q16 = "<?php echo $A['a24'] ?>",
        $q17 = "<?php echo $A['a40'] ?>",
        $q18 = "<?php echo $A['a3'] ?>",
        $q19 = "<?php echo $A['a10'] ?>",
        $q20 = "<?php echo $A['a10'] ?>",
        $q21 = "<?php echo $A['a7'] ?>",
        $q22 = "<?php echo $A['a1'] ?>",
        $q23 = "<?php echo $A['a35'] ?>",
        $q24 = "<?php echo $A['a28'] ?>",
        $q25 = "<?php echo $A['a10'] ?>",
        $q26 = "<?php echo $A['a39'] ?>",
        $q27 = "<?php echo $A['a26'] ?>",
        $q28 = "<?php echo $A['a34'] ?>",
        $q29 = "<?php echo $A['a3'] ?>",
        $q30 = "<?php echo $A['a2'] ?>",
        $q31 = "<?php echo $A['a18'] ?>",
        $q32 = "<?php echo $A['a3'] ?>",
        $q33 = "<?php echo $A['a7'] ?>",
        $q34 = "<?php echo $A['a38'] ?>",
        $q35 = "<?php echo $A['a22'] ?>",
        $q36 = "<?php echo $A['a10'] ?>",
        $q37 = "<?php echo $A['a20'] ?>",
        $q38 = "<?php echo $A['a28'] ?>",
        $q39 = "<?php echo $A['a19'] ?>",
        $q40 = "<?php echo $A['a10'] ?>",
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