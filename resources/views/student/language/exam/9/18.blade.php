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
"q1" => "There have been immense advances in",
"q2" => "in most",
"q3" => "of people's lives, especially in the field of education. Nowadays, an increasing number of students",
"q4" => "on",
"q5" => "for",
"q6" => "and to produce a perfect paper for school",
"q7" => ". Others have decided to leave the original way of learning and to get knowledge through online schools. These changes in the learning",
"q8" => "have brought a special concern regarding the possible decrease of importance of teachers in the classroom. Some people believe the",
"q9" => "of teachers started to fade because",
"q10" => "have been helping some students to progress in their studies more quickly than when compared with a",
"q11" => "classroom. For example, in the same classroom, students have different intellectual",
"q12" => ", thus some would be tied to a slow advance in their studies because of others' incapacity of understanding. In this way, pupils could progress in their",
"q13" => "of knowledge at their own pace using",
"q14" => "instead of learning from teachers. However, the presence of a teacher is essential for students because the human",
"q15" => "influences them in",
"q16" => "ways. Firstly, students realize that they are not dealing with a machine but with a human being who deserves attention and respect. They also learn the importance of studying in group and respect other students, which helps them to improve their social skills. Moreover, teachers are",
"q17" => "in the learning",
"q18" => "because they",
"q19" => "some student's deficiencies and help them to solve their problems by repeating the same explanation, giving extra exercises or even suggesting a private tutor.",
"q20" => ", students can have a bigger chance not to fail in a subject. In",
"q21" => ", the",
"q22" => "for teachers in the learning",
"q23" => "is still very important and it will continue to be in the future because no machine can replace the human",
"q24" => "and its",
];


$end = ".";

$A = ["a1" => "acknowledge",
"a2" => "acquisition",
"a3" => "aspects",
"a4" => "capacities",
"a5" => "computers",
"a6" => "computers",
"a7" => "computers",
"a8" => "conclusion",
"a9" => "consequences",
"a10" => "contact",
"a11" => "positive",
"a12" => "hence",
"a13" => "interaction",
"a14" => "process",
"a15" => "process",
"a16" => "process",
"a17" => "projects",
"a18" => "rely",
"a19" => "required",
"a20" => "research",
"a21" => "role",
"a22" => "role",
"a23" => "technology",
"a24" => "traditional",
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
        $q1 = "<?php echo $A['a23'] ?>",
        $q2 = "<?php echo $A['a3'] ?>",
        $q3 = "<?php echo $A['a18'] ?>",
        $q4 = "<?php echo $A['a5'] ?>",
        $q5 = "<?php echo $A['a20'] ?>",
        $q6 = "<?php echo $A['a17'] ?>",
        $q7 = "<?php echo $A['a14'] ?>",
        $q8 = "<?php echo $A['a21'] ?>",
        $q9 = "<?php echo $A['a5'] ?>",
        $q10 = "<?php echo $A['a24'] ?>",
        $q11 = "<?php echo $A['a4'] ?>",
        $q12 = "<?php echo $A['a2'] ?>",
        $q13 = "<?php echo $A['a5'] ?>",
        $q14 = "<?php echo $A['a10'] ?>",
        $q15 = "<?php echo $A['a11'] ?>",
        $q16 = "<?php echo $A['a19'] ?>",
        $q17 = "<?php echo $A['a14'] ?>",
        $q18 = "<?php echo $A['a1'] ?>",
        $q19 = "<?php echo $A['a12'] ?>",
        $q20 = "<?php echo $A['a8'] ?>",
        $q21 = "<?php echo $A['a21'] ?>",
        $q22 = "<?php echo $A['a14'] ?>",
        $q23 = "<?php echo $A['a13'] ?>",
        $q24 = "<?php echo $A['a9'] ?>",
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