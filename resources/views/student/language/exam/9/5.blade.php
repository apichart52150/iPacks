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
"q1" => "I would have to completely disagree with the statement above. In the following",
"q2" => "I will outline the basic",
"q3" => "of my position. First of all, I will list the",
"q4" => "disadvantages for employers. In today's market a company must be very",
"q5" => "in order to compete with other firms. So, imagine the situation when a company cannot fire its employees to stay in the market. It will lead to losing not only profit, but the clients, market share and competitive ability. Now, imagine the situation when a company is growing fast, everything is good and the next few years are going to be excellent. So, employers need more people to expand the production. However, nobody can tell what will happen in a few years. In this case, employers will be afraid to hire new people and extend their business because they will not be able to fire them if something goes wrong. Another important",
"q6" => "of this is that a company cannot have the best employees. It cannot hire the better ones without dismissing other employees. What kind of disadvantages will an employee have in exchange for this kind of",
"q7" => "",
"q8" => "? First of all, it will be very difficult to find a",
"q9" => "if one is not the best, because an employer does not want to spend money on employees’ education. Besides, employers will not have a chance to fire someone if he does not do his",
"q10" => "well. Second of all, employees with this kind of",
"q11" => "tend not to perfect themselves because after they are hired they can not lose their",
"q12" => ". In",
"q13" => ", I would like to add that this statement has some",
"q14" => "",
"q15" => "too such as",
"q16" => ", a strong spirit of the company, etc. This system takes place in Japan and some companies succeeded in it. But I think that the reason of it subsists in the Japanese",
"q17" => ", the particular",
"q18" => "",
];
$end = ", habits and customs. However, on today's market here in the United States a company can not afford to hire employees for their entire life.";
$A=[
"a1" => "aspect",
"a2" => "aspects",
"a3" => "concepts",
"a4" => "conclusion",
"a5" => "constancy",
"a6" => "cultural",
"a7" => "features",
"a8" => "flexible",
"a9" => "job",
"a10" => "job",
"a11" => "job",
"a12" => "job",
"a13" => "major",
"a14" => "paragraphs",
"a15" => "positive",
"a16" => "security",
"a17" => "security",
"a18" => "traditions",
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
        $q1 = "<?php echo $A['a14'] ?>",
        $q2 = "<?php echo $A['a3'] ?>",
        $q3 = "<?php echo $A['a13'] ?>",
        $q4 = "<?php echo $A['a8'] ?>",
        $q5 = "<?php echo $A['a1'] ?>",
        $q6 = "<?php echo $A['a9'] ?>",
        $q7 = "<?php echo $A['a16'] ?>",
        $q8 = "<?php echo $A['a9'] ?>",
        $q9 = "<?php echo $A['a9'] ?>",
        $q10 = "<?php echo $A['a16'] ?>",
        $q11 = "<?php echo $A['a9'] ?>",
        $q12 = "<?php echo $A['a4'] ?>",
        $q13 = "<?php echo $A['a15'] ?>",
        $q14 = "<?php echo $A['a2'] ?>",
        $q15 = "<?php echo $A['a5'] ?>",
        $q16 = "<?php echo $A['a18'] ?>",
        $q17 = "<?php echo $A['a6'] ?>",
        $q18 = "<?php echo $A['a7'] ?>",
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