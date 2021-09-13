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
$Q=[ "q1" => "The use of",
"q2" => "punishment for children is a contentious",
"q3" => "nowadays. It is also emotive, and most people have strong feelings on the matter. Some people oppose the use of corporal punishment while others believe it can have a",
"q4" => "effect on their children's behavior. This essay will outline some of these arguments for and against. There are various arguments put forward against smacking children. First of all,",
"q5" => "abuse of any sort is an",
"q6" => "of disapproval. If a parent smacks a child, it shows that the parent does not love the child. This feeling is",
"q7" => "each time the child is hit and the child develops a feeling of being unwanted. This can result in a feeling of",
"q8" => "and a loss of self-esteem and self-confidence. Secondly, the fact that a parent uses",
"q9" => "force to punish a child sends a clear message to the child that",
"q10" => "abuse is acceptable behaviour. The child is then",
"q11" => "likely to use force against other people, too. As the saying goes, 'violence breeds violence'. There are, however, arguments in favour of using smacking occasionally to remediate a child's misbehaviour. When a child's behavior is out of control, for example during a tantrum, a light smack may be just enough to bring the child back to",
"q12" => "behaviour. This does not mean",
"q13" => "brutalizing the child but a single slap may be what is needed. There is, after, all, a big difference between",
"q14" => "assault which puts the child's health and safety at risk, and a slap or smack to remediate behavior. There is also the argument that a parent who",
"q15" => "their child and does not attempt to manage the child's behaviour can be accused of negligence in terms of helping the child to develop social skills. In",
"q16" => ", it is important to",
"q17" => "between a smack and",
"q18" => "abuse. A smack may represent the concern of a loving parent to provide",
"q19" => "for the child's social development,",
"q20" => "",
"q21" => "assault may show",
"q22" => "psychotic tendencies in the parent. In the end, it boils down to the personal relationship which a parent develops with the child. Even parents who oppose corporal punishment will need to set",
"q23" => "remedial",];
$end = "in place so that the child learns the difference between acceptable and unacceptable social behaviour.";
$A=[
"a1" => "alternative",
"a2" => "conclusion",
"a3" => "differentiate",
"a4" => "guidelines",
"a5" => "ignores",
"a6" => "indication",
"a7" => "insecurity",
"a8" => "issue",
"a9" => "normal",
"a10" => "physical",
"a11" => "physical",
"a12" => "physical",
"a13" => "physical",
"a14" => "physical",
"a15" => "physical",
"a16" => "physical",
"a17" => "physically",
"a18" => "positive",
"a19" => "reinforced",
"a20" => "responses",
"a21" => "subsequently",
"a22" => "underlying",
"a23" => "whereas",];
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
        $q1 = "<?php echo $A['a10'] ?>",
        $q2 = "<?php echo $A['a8'] ?>",
        $q3 = "<?php echo $A['a18'] ?>",
        $q4 = "<?php echo $A['a10'] ?>",
        $q5 = "<?php echo $A['a6'] ?>",
        $q6 = "<?php echo $A['a19'] ?>",
        $q7 = "<?php echo $A['a7'] ?>",
        $q8 = "<?php echo $A['a10'] ?>",
        $q9 = "<?php echo $A['a10'] ?>",
        $q10 = "<?php echo $A['a21'] ?>",
        $q11 = "<?php echo $A['a9'] ?>",
        $q12 = "<?php echo $A['a17'] ?>",
        $q13 = "<?php echo $A['a10'] ?>",
        $q14 = "<?php echo $A['a5'] ?>",
        $q15 = "<?php echo $A['a2'] ?>",
        $q16 = "<?php echo $A['a3'] ?>",
        $q17 = "<?php echo $A['a10'] ?>",
        $q18 = "<?php echo $A['a4'] ?>",
        $q19 = "<?php echo $A['a23'] ?>",
        $q20 = "<?php echo $A['a10'] ?>",
        $q21 = "<?php echo $A['a22'] ?>",
        $q22 = "<?php echo $A['a1'] ?>",
        $q23 = "<?php echo $A['a20'] ?>",
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