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
"q1" => "From my everyday experience and observation I can stand that the best way of learning about life is through personal experience. However, some people think that it is wiser to learn about life through listening to the advice of family and friends. It does not mean I totally disagree with this way of learning. Moreover, I think that it is wise for a person to take an",
"q2" => "position because each of these ways has its own advantages. Bellow I will give my reasons to support my point of view. From the one side, learning through one's personal experience brings many",
"q3" => ". First of all, scientists say that personal experience has greater",
"q4" => "on a person. I have to agree with this. Take for example children. They will not believe their parents that something can hurt them until they try it and make sure in it.",
"q5" => ", most likely they will remember this experience longer. Second of all, people learn how to",
"q6" => "their mistakes, make",
"q7" => "and next time try to avoid them. So, I think it is a great experience that makes people stronger, more self-confident and",
"q8" => ". They gain more knowledge and experience that will be very helpful and valuable in the future. From the other side, listening to the advice of family and friends brings many",
"q9" => "too. Parents with great patience pass down their knowledge and experience to their children. They teach them all they know and they want their children do not make the same mistakes. In addition to those practical",
"q10" => ", learning from someone's advice is painless. For example, parents nowadays very often talk to their children about drugs. I think it is a great example when one should not try drugs in order to gain new experience. I think it is a case when children must trust their parents. To",
"q11" => "up, I think it is wise to combine both of these ways to learn and try to",
];
$end = "personal mistakes as well as not personal. I think together they can greatly simplify one's life and make the way to success shorter.";
$A=[
"a1" => "analyze",
"a2" => "analyze",
"a3" => "benefits",
"a4" => "benefits",
"a5" => "benefits",
"a6" => "conclusions",
"a7" => "furthermore",
"a8" => "impact",
"a9" => "intermediate",
"a10" => "persistent",
"a11" => "sum",
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

<script>
    $("#show-answer").prop("disabled", true);

    const answers = [
        $q1 = "<?php echo $A['a9'] ?>",
        $q2 = "<?php echo $A['a3'] ?>",
        $q3 = "<?php echo $A['a8'] ?>",
        $q4 = "<?php echo $A['a7'] ?>",
        $q5 = "<?php echo $A['a1'] ?>",
        $q6 = "<?php echo $A['a6'] ?>",
        $q7 = "<?php echo $A['a10'] ?>",
        $q8 = "<?php echo $A['a3'] ?>",
        $q9 = "<?php echo $A['a3'] ?>",
        $q10 = "<?php echo $A['a11'] ?>",
        $q11 = "<?php echo $A['a1'] ?>",
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
</script>
@stop