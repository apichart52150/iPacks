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
$Q=["q1" => "Nowadays, in our competitive world, in order to succeed, knowledge from school and university is not enough. Therefore, the student who",
    "q2" => "from the school to university gets less",
    "q3" => "and",
    "q4" => "less too, than those who gain experience and skills before going to a tertiary",
    "q5" => ". There are two reasons to prove my opinion. I call the group of people who study from school to university group A and the other group is group B. Firstly, at school and university, what students in group A gain is mostly",
    "q6" => ". Of course, ",
    "q7" => "is very necessary, however, you can't do everything with",
    "q8" => ". You must have practical experience. This is what group A lack very much. After graduating, without experience, group A can't accomplish their work perfectly. On the other hand, it takes them time and money to keep up with other experienced students. Therefore, group A can",
    "q9" => "less than group B who have the most two important things: skills and experience. Secondly, as group A",
    "q10" => "less, they surely get less",
    "q11" => ". Moreover, many companies which employ people in group A have to train them from the beginning. Students in group B have useful experience and skills from the beginning of their employment. As a result, group B give more",
    "q12" => ". In",
    "q13" => ", I think student should go to travel or find a",
    "q14" => "before",
    "q15" => "to university.",
    "q16" => ", they will not only have basic knowledge but also skills and experience which are useful for them to get a good",];
    $end = "and a brilliant future.";
$A=[
    "a1" => "benefit",
    "a2" => "benefit",
    "a3" => "benefit",
    "a4" => "conclusion",
    "a5" => "contribute",
    "a6" => "contribute",
    "a7" => "contributes",
    "a8" => "institute",
    "a9" => "job",
    "a10" => "job",
    "a11" => "proceeding",
    "a12" => "proceeds",
    "a13" => "theory",
    "a14" => "theory",
    "a15" => "theory",
    "a16" => "thereby",];
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
         $q1 = "<?php echo $A['a12'] ?>",
         $q2 = "<?php echo $A['a1'] ?>",
         $q3 = "<?php echo $A['a7'] ?>",
         $q4 = "<?php echo $A['a8'] ?>",
         $q5 = "<?php echo $A['a13'] ?>",
         $q6 = "<?php echo $A['a13'] ?>",
         $q7 = "<?php echo $A['a13'] ?>",
         $q8 = "<?php echo $A['a5'] ?>",
         $q9 = "<?php echo $A['a5'] ?>",
         $q10 = "<?php echo $A['a1'] ?>",
         $q11 = "<?php echo $A['a1'] ?>",
         $q12 = "<?php echo $A['a4'] ?>",
         $q13 = "<?php echo $A['a9'] ?>",
         $q14 = "<?php echo $A['a11'] ?>",
         $q15 = "<?php echo $A['a16'] ?>",
         $q16 = "<?php echo $A['a9'] ?>",
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
$('#show-answer').addClass('d-block')
$('#show-answer').removeClass('d-none')
$('#check-answer').addClass('d-none')

        let droppables = $(".dropbox");
let score = 0
        droppables.each((idx, item) => {
            if($(item).children().text().trim() == answers[idx]) {
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