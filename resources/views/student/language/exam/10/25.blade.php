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
$Q=["q1" => "In recent years an increasing number of people are choosing to study",
"q2" => "rather than at home. In spite of the increased costs",
"q3" => "on",
"q4" => "students, parents are prepared to pay for their children's education ",
"q5" => ". There are a variety of reasons for taking this",
"q6" => ", which can be divided into educational and personal development",
"q7" => ". This essay will examine the reasons why so many students are taking courses",
"q8" => ". From an educational point of view, there are many reasons for choosing to study abroad. First of all, many people believe that the standard of education provided",
"q9" => "",
"q10" => "the quality offered at education",
"q11" => "at home. In addition, courses",
"q12" => "are usually",
"q13" => "in a foreign language, usually English, which will help develop the learner's own skills in that foreign language. In many countries, the ability to speak a foreign language fluently increased the chances of",
"q14" => "a good",
"q15" => ".",
"q16" => "in many learning",
"q17" => "",
"q18" => ", there is less",
"q19" => "on a teacher-based",
"q20" => ". Students are encouraged to develop learner-autonomy, which will provide the basis for lifelong learning. There are, however, other reasons for choosing a course of study abroad. A main",
"q21" => "of sending children to a different country to study is to develop personal skills. One of the most important of these skills is the ability to",
"q22" => "independently without the",
"q23" => "support of close family. Such independence is likely to help the learner to",
"q24" => "earlier than if the student remains tied to his parents' apron strings. A further development is the ability of the learner to embrace a foreign",
"q25" => "with greater ease. By living in an 'alien'",
"q26" => ", the learner will be able to broaden their",
"q27" => "horizons. To",
"q28" => "up, in spite of the high costs of sending children to study",
"q29" => ", the",
"q30" => "are numerous. For the above reasons, it is likely that people will continue to opt for",];
    $end = "study in the future.";
$A=[
    "a1" => "benefits",
    "a2" => "conducted",
    "a3" => "constant",
    "a4" => "cultural",
    "a5" => "culture",
    "a6" => "culture",
    "a7" => "environments",
    "a8" => "exceeds",
    "a9" => "focus",
    "a10" => "function",
    "a11" => "furthermore",
    "a12" => "imposed",
    "a13" => "institutions",
    "a14" => "issues",
    "a15" => "job",
    "a16" => "mature",
    "a17" => "methodology",
    "a18" => "objective",
    "a19" => "obtaining",
    "a20" => "option",
    "a21" => "overseas",
    "a22" => "overseas",
    "a23" => "overseas",
    "a24" => "overseas",
    "a25" => "overseas",
    "a26" => "overseas",
    "a27" => "overseas",
    "a28" => "overseas",
    "a29" => "overseas",
    "a30" => "sum",];
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
         $q1 = "<?php echo $A['a21'] ?>",
         $q2 = "<?php echo $A['a12'] ?>",
         $q3 = "<?php echo $A['a21'] ?>",
         $q4 = "<?php echo $A['a21'] ?>",
         $q5 = "<?php echo $A['a20'] ?>",
         $q6 = "<?php echo $A['a14'] ?>",
         $q7 = "<?php echo $A['a21'] ?>",
         $q8 = "<?php echo $A['a21'] ?>",
         $q9 = "<?php echo $A['a8'] ?>",
         $q10 = "<?php echo $A['a13'] ?>",
         $q11 = "<?php echo $A['a21'] ?>",
         $q12 = "<?php echo $A['a2'] ?>",
         $q13 = "<?php echo $A['a19'] ?>",
         $q14 = "<?php echo $A['a15'] ?>",
         $q15 = "<?php echo $A['a11'] ?>",
         $q16 = "<?php echo $A['a7'] ?>",
         $q17 = "<?php echo $A['a21'] ?>",
         $q18 = "<?php echo $A['a9'] ?>",
         $q19 = "<?php echo $A['a17'] ?>",
         $q20 = "<?php echo $A['a18'] ?>",
         $q21 = "<?php echo $A['a10'] ?>",
         $q22 = "<?php echo $A['a3'] ?>",
         $q23 = "<?php echo $A['a16'] ?>",
         $q24 = "<?php echo $A['a5'] ?>",
         $q25 = "<?php echo $A['a5'] ?>",
         $q26 = "<?php echo $A['a4'] ?>",
         $q27 = "<?php echo $A['a30'] ?>",
         $q28 = "<?php echo $A['a21'] ?>",
         $q29 = "<?php echo $A['a1'] ?>",
         $q30 = "<?php echo $A['a21'] ?>",
    ];

    console.log(answers);

    $(".drag").draggable({
        revert: "invalid",
        cursor: "move",
        opacity: 0.7,
        zIndex: 100,
        containment: ".card-box",
        stop: function (event, ui) {
          if ($("#choices").children().length == 0) {
            $("#check-answer").prop("disabled", false);
          }
        },
    });

    $(".dropbox").droppable({
        accept: ".drag",
        tolerance: "touch",
        zIndex: 100,
        over: function (event, ui) {
            $(this).css("border-color", "#777");
        },
        out: function (event, ui) {
            $(this).css("border-color", "#ccc");
        },
        drop: function (event, ui) {
            if ($(this).children().length > 0) {
                var move = $(this).children().detach();
                $(ui.draggable).css({ top: 0, left: 0 }).parent().append(move);
            }
            $(this).css("border-color", "#ccc");
            $(this).append($(ui.draggable).css({ top: 0, left: 0 }));
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
    });

    function checkAnswer(ele, status) {
        let bgColor;

        status == 'correct' ? (bgColor = 'color-success') : (bgColor = 'color-danger')

        ele.addClass(bgColor)
    }
</script>
@stop