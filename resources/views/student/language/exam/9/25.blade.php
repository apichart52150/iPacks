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

$Q=[
"q1" => "Most of the firms, organization and companies as well as government agencies have introduced",
"q2" => "on smoking in work places and public amenities respectively. It has become fashionable in the world today to blame smoking. However, although I feel that smoking can be harmful, I don't think it should be banned completely. I would also argue that people should have the right whether they smoke or not. Let me deal with the three",
"q3" => "sides of smoking. Firstly, smoking certainly helps many people to",
"q4" => ". For some, it even improves",
"q5" => ". If someone is upset owing to debt or they have an exam, they like to smoke to reduce the pressure or",
"q6" => ". Most people like to smoke when they are",
"q7" => "with friends. Secondly, governments throughout the world make huge profits from taxes on cigarettes. The",
"q8" => "",
"q9" => "from taxes provides",
"q10" => "which are used for building schools, hospitals and public places such as parks, gardens, sports ground and foot paths. Thirdly, the tobacco industry also employs tens of thousands of people all over the world, particularly in poorer countries like Zimbabwe or India. Without cigarettes, these people would have no",
"q11" => ".",
"q12" => "these",
"q13" => "effects there are lots of",
"q14" => "effects of smoking too.",
"q15" => ", smoking has been proven to be dangerous for health. As one cigarette contain more than 4000",
"q16" => "substances, it causes many diseases like heart attacks, asthma, bronchitis, lung cancer and cough. According to recent",
"q17" => ", in Britain about 3,500 people are killed each year in road accidents and 120,000 are killed by smoking.",
"q18" => ", smoking costs the government millions of dollars because of the large number of people who need treatment in hospitals for smoking-related problems. Moreover, there is also concern today about",
"q19" => "smoking. Recent",
"q20" => "shows that non-smokers can suffer health problems if they spend long",
"q21" => "of time among people who do smoke. In the UK children whose parents smoke are three times as likely to start smoking themselves. In short, I think the world would be a better place without cigarettes. However, the decision as to whether to smoke or not should be for each",

];
$end = "to make. I suggest people should not smoke in a room or place where there are non-smokers but surely they should be free to smoke elsewhere.";
$A=[
"a1" => "chemical",
"a2" => "concentration",
"a3" => "despite",
"a4" => "funds",
"a5" => "furthermore",
"a6" => "income",
"a7" => "individual",
"a8" => "initially",
"a9" => "jobs",
"a10" => "negative",
"a11" => "obtained",
"a12" => "passive",
"a13" => "period",
"a14" => "positive",
"a15" => "positive",
"a16" => "relax",
"a17" => "relaxing",
"a18" => "research",
"a19" => "research",
"a20" => "restrictions",
"a21" => "tension",
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
        $q1 = "<?php echo $A['a20'] ?>",
        $q2 = "<?php echo $A['a14'] ?>",
        $q3 = "<?php echo $A['a16'] ?>",
        $q4 = "<?php echo $A['a2'] ?>",
        $q5 = "<?php echo $A['a21'] ?>",
        $q6 = "<?php echo $A['a17'] ?>",
        $q7 = "<?php echo $A['a6'] ?>",
        $q8 = "<?php echo $A['a11'] ?>",
        $q9 = "<?php echo $A['a4'] ?>",
        $q10 = "<?php echo $A['a9'] ?>",
        $q11 = "<?php echo $A['a3'] ?>",
        $q12 = "<?php echo $A['a14'] ?>",
        $q13 = "<?php echo $A['a10'] ?>",
        $q14 = "<?php echo $A['a8'] ?>",
        $q15 = "<?php echo $A['a1'] ?>",
        $q16 = "<?php echo $A['a18'] ?>",
        $q17 = "<?php echo $A['a5'] ?>",
        $q18 = "<?php echo $A['a12'] ?>",
        $q19 = "<?php echo $A['a18'] ?>",
        $q20 = "<?php echo $A['a13'] ?>",
        $q21 = "<?php echo $A['a7'] ?>",
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