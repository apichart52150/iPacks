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
$Q=["q1" => "Education is a very important",
"q2" => "around the",
"q3" => ". A nation's development",
"q4" => "on the government's",
"q5" => "in quality education. Effective learning depends to a large extent on the",
"q6" => "and teaching",
"q7" => "used in schools. Some nations prefer a",
"q8" => "learning",
"q9" => ", where the teacher plays a central",
"q10" => ". In other countries, a student-centred",
"q11" => "is preferred. This essay will outline the strengths and weaknesses of both",
"q12" => ". There are some advantages of a",
"q13" => ", teacher-focused",
"q14" => "to learning. In many countries, there is a heavy",
"q15" => "on teacher",
"q16" => ". A typical classroom",
"q17" => "would",
"q18" => "the teacher giving a",
"q19" => "about the",
"q20" => ", with the students copying notes and rote-learning the content for homework. While this",
"q21" => "",
"q22" => "the students only tangentially since they play a very",
"q23" => "",
"q24" => "in the learning",
"q25" => ", many learners feel comfortable with this",
"q26" => "and have developed strengths which suit this",
"q27" => "of teaching. They enjoy the heavy",
"q28" => "on teacher",
"q29" => ". In addition, this",
"q30" => "of teaching is relatively easy for the teacher. Lesson planning is simple and",
"q31" => ", and the",
"q32" => "amount of time can be spent on feeding the learners the information they need to pass the end of year examinations. There are, however, limitations to this",
"q33" => "of teaching. In less",
"q34" => "classrooms, the",
"q35" => "is on learner autonomy. Learners are encouraged to take a more active",
"q36" => "in their own learning",
"q37" => ". In such a learning",
"q38" => ", the end content is not as important as the learning",
"q39" => "which",
"q40" => "during the lesson. Skills such as the ability to",
"q41" => ",",
"q42" => "and question are more important than the ability to learn something by heart. Many people who prefer a student-centred",
"q43" => "argue that today's society needs people who are able to",
"q44" => "self-regulation and the ability to be proactive rather than people whose heads are simply filled with information. To",
"q45" => "up, there are both strengths sand weaknesses to both",
"q46" => ". Since learners have different preferences regarding learning",
"q47" => ", it makes sense to",
"q48" => "",
"q49" => "of both teaching",];
$end = "in the classroom, so that all learners can make full use of their learning strengths.";
$A=[
"a1" => "analyse",
"a2" => "approach",
"a3" => "approach",
"a4" => "approach",
"a5" => "approach",
"a6" => "demonstrate",
"a7" => "elements",
"a8" => "environment",
"a9" => "evaluate",
"a10" => "focus",
"a11" => "focused",
"a12" => "globe",
"a13" => "incorporate",
"a14" => "input",
"a15" => "input",
"a16" => "investment",
"a17" => "involve",
"a18" => "involves",
"a19" => "issue",
"a20" => "lecture",
"a21" => "maximum",
"a22" => "method",
"a23" => "methodologies",
"a24" => "methodologies",
"a25" => "methodology",
"a26" => "occur",
"a27" => "passive",
"a28" => "process",
"a29" => "process",
"a30" => "processes",
"a31" => "reliance",
"a32" => "reliance",
"a33" => "relies",
"a34" => "role",
"a35" => "role",
"a36" => "role",
"a37" => "traditional",
"a38" => "traditional",
"a39" => "advantages",
"a40" => "scenario",
"a41" => "style",
"a42" => "style",
"a43" => "style",
"a44" => "style",
"a45" => "styles",
"a46" => "styles",
"a47" => "styles",
"a48" => "sum",
"a49" => "topic",];
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
        $q1 = "<?php echo $A['a19'] ?>",
        $q2 = "<?php echo $A['a12'] ?>",
        $q3 = "<?php echo $A['a33'] ?>",
        $q4 = "<?php echo $A['a16'] ?>",
        $q5 = "<?php echo $A['a25'] ?>",
        $q6 = "<?php echo $A['a45'] ?>",
        $q7 = "<?php echo $A['a37'] ?>",
        $q8 = "<?php echo $A['a41'] ?>",
        $q9 = "<?php echo $A['a34'] ?>",
        $q10 = "<?php echo $A['a2'] ?>",
        $q11 = "<?php echo $A['a23'] ?>",
        $q12 = "<?php echo $A['a39'] ?>",
        $q13 = "<?php echo $A['a2'] ?>",
        $q14 = "<?php echo $A['a31'] ?>",
        $q15 = "<?php echo $A['a14'] ?>",
        $q16 = "<?php echo $A['a40'] ?>",
        $q17 = "<?php echo $A['a17'] ?>",
        $q18 = "<?php echo $A['a20'] ?>",
        $q19 = "<?php echo $A['a49'] ?>",
        $q20 = "<?php echo $A['a2'] ?>",
        $q21 = "<?php echo $A['a18'] ?>",
        $q22 = "<?php echo $A['a27'] ?>",
        $q23 = "<?php echo $A['a34'] ?>",
        $q24 = "<?php echo $A['a28'] ?>",
        $q25 = "<?php echo $A['a22'] ?>",
        $q26 = "<?php echo $A['a41'] ?>",
        $q27 = "<?php echo $A['a31'] ?>",
        $q28 = "<?php echo $A['a14'] ?>",
        $q29 = "<?php echo $A['a41'] ?>",
        $q30 = "<?php echo $A['a11'] ?>",
        $q31 = "<?php echo $A['a21'] ?>",
        $q32 = "<?php echo $A['a41'] ?>",
        $q33 = "<?php echo $A['a37'] ?>",
        $q34 = "<?php echo $A['a10'] ?>",
        $q35 = "<?php echo $A['a34'] ?>",
        $q36 = "<?php echo $A['a28'] ?>",
        $q37 = "<?php echo $A['a8'] ?>",
        $q38 = "<?php echo $A['a30'] ?>",
        $q39 = "<?php echo $A['a26'] ?>",
        $q40 = "<?php echo $A['a1'] ?>",
        $q41 = "<?php echo $A['a9'] ?>",
        $q42 = "<?php echo $A['a2'] ?>",
        $q43 = "<?php echo $A['a6'] ?>",
        $q44 = "<?php echo $A['a48'] ?>",
        $q45 = "<?php echo $A['a23'] ?>",
        $q46 = "<?php echo $A['a45'] ?>",
        $q47 = "<?php echo $A['a13'] ?>",
        $q48 = "<?php echo $A['a7'] ?>",
        $q49 = "<?php echo $A['a45'] ?>",
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

    function checkAnswer(ele, status) {
        let bgColor;

        status == 'correct' ? (bgColor = 'color-success') : (bgColor = 'color-danger')

        ele.addClass(bgColor)
    }
</script>
@stop