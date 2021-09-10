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
$Q=["q1" => "",
"q2" => "is a",
"q3" => "of advancement and increase in",
"q4" => "between the worlds' countries and people. It",
"q5" => "",
"q6" => ", knowledge and skills. GlobalIzation is gaining speed over the entire world. It has attracted enough world attention needed from international organizations in",
"q7" => "and encouraging human rights and freedom , opportunities for",
"q8" => ", social and",
"q9" => "rights. However, there are some countries that are missing out on the opportunities that are offered and it's taken as a big problem for their country. They are the poorer countries that are not connected to the people",
"q10" => "and their people are unskilled due to the lack of knowledge and",
"q11" => ". They are also unable to trade with the other countries which are richer and larger as they are unable to meet the demands",
"q12" => "on them. They also will not have the opportunities and the",
"q13" => "that are",
"q14" => ".",
"q15" => "has also encouraged crime, like the",
"q16" => "trade in drug trafficking around the world by air, sea and land. This has",
"q17" => "human smuggling. This has brought about a lot of problems to the country and the family of the drug addicts. This will also lead to other crimes like robbery and violence in the country. Another",
"q18" => "side of",
"q19" => "is the dumping of the dangerous waste into the river, sea or the ocean. This will Affect the aquatic creatures, contaminate the water and cause harm to the people too. To",
"q20" => ",",
"q21" => "has played an",
"q22" => "part in the world's economics but the international organization should also not forget the poorer countries and the developed countries should also tackle the other",
"q23" => "side that",];
$end = "the world.";
$A=[
"a1" => "affects",
"a2" => "challenges",
"a3" => "communication",
"a4" => "conclude",
"a5" => "cultural",
"a6" => "economic",
"a7" => "enormous",
"a8" => "globalization",
"a9" => "globalization",
"a10" => "globalization",
"a11" => "globalization",
"a12" => "globally",
"a13" => "illegal",
"a14" => "imposed",
"a15" => "interaction",
"a16" => "involved",
"a17" => "involves",
"a18" => "negative",
"a19" => "negative",
"a20" => "process",
"a21" => "promoting",
"a22" => "required",
"a23" => "technology",];
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
        $q1 = "<?php echo $A['a8'] ?>",
        $q2 = "<?php echo $A['a20'] ?>",
        $q3 = "<?php echo $A['a15'] ?>",
        $q4 = "<?php echo $A['a17'] ?>",
        $q5 = "<?php echo $A['a3'] ?>",
        $q6 = "<?php echo $A['a21'] ?>",
        $q7 = "<?php echo $A['a6'] ?>",
        $q8 = "<?php echo $A['a5'] ?>",
        $q9 = "<?php echo $A['a12'] ?>",
        $q10 = "<?php echo $A['a23'] ?>",
        $q11 = "<?php echo $A['a14'] ?>",
        $q12 = "<?php echo $A['a2'] ?>",
        $q13 = "<?php echo $A['a22'] ?>",
        $q14 = "<?php echo $A['a8'] ?>",
        $q15 = "<?php echo $A['a13'] ?>",
        $q16 = "<?php echo $A['a16'] ?>",
        $q17 = "<?php echo $A['a18'] ?>",
        $q18 = "<?php echo $A['a8'] ?>",
        $q19 = "<?php echo $A['a4'] ?>",
        $q20 = "<?php echo $A['a8'] ?>",
        $q21 = "<?php echo $A['a7'] ?>",
        $q22 = "<?php echo $A['a18'] ?>",
        $q23 = "<?php echo $A['a1'] ?>",
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