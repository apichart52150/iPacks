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
$Q=["q1" => "Many old people work well into their 70s and 80s, running families, countries or",
"q2" => ". Other people, however,",
"q3" => "being fit and highly talented, are forced to retire in their or even earlier because of company or national",
"q4" => ". This essay will examine whether people should be allowed to continue working for as long as they want or whether they should be encouraged to retire at a particular stage. There are several arguments for allowing older people to continue working as long as they are able. First of all, older employees have an immense amount of knowledge and experience which can be lost to a business or organization if they are made to retire. A second point is that older employees are often extremely loyal employees and are more willing to",
"q5" => "company",
"q6" => "than younger less",
"q7" => "staff. However, a more important point is regarding the",
"q8" => "in society to old people. To force someone to resign or retire at 60 or 65",
"q9" => "that the society does not value the",
"q10" => "of these people and that effectively their useful life is over. Allowing older people to work",
"q11" => ", however, is not always a good",
"q12" => ". Age alone is no",
"q13" => "of ability. Many younger employees have more experience or skills than older staff, who may have been stuck in one",
"q14" => "or unit for most of their working lives. Having compulsory retirement allows new ideas in an organization. In addition, without age limits, however",
"q15" => ", many people would continue to work purely because they did not have any other plans or",
"q16" => ". A third point of view is that older people should be rewarded by society for their life's",
"q17" => "by being given generous pensions and the freedom to enjoy their leisure. With many young people unemployed or frustrated in low-level positions, there are often calls to compulsorily retire older workers. However, this can",
"q18" => "the older",
"q19" => "' freedom - and right - to work and can deprive society of valuable experience and",
"q20" => ". I feel that giving workers more",
"q21" => "and choice over their retirement age will",
"q22" => "society and the",];
    $end = ".";
$A=[
    "a1" => "affect",
    "a2" => "arbitrary",
    "a3" => "area",
    "a4" => "attitudes",
    "a5" => "benefit",
    "a6" => "committed",
    "a7" => "corporations",
    "a8" => "despite",
    "a9" => "flexibility",
    "a10" => "guarantee",
    "a11" => "implement",
    "a12" => "indefinitely",
    "a13" => "indicates",
    "a14" => "individual",
    "a15" => "individuals",
    "a16" => "input",
    "a17" => "insights",
    "a18" => "labor",
    "a19" => "policies",
    "a20" => "policy",
    "a21" => "regulations",
    "a22" => "roles",];
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
         $q1 = "<?php echo $A['a7'] ?>",
         $q2 = "<?php echo $A['a8'] ?>",
         $q3 = "<?php echo $A['a21'] ?>",
         $q4 = "<?php echo $A['a11'] ?>",
         $q5 = "<?php echo $A['a19'] ?>",
         $q6 = "<?php echo $A['a6'] ?>",
         $q7 = "<?php echo $A['a4'] ?>",
         $q8 = "<?php echo $A['a13'] ?>",
         $q9 = "<?php echo $A['a16'] ?>",
         $q10 = "<?php echo $A['a12'] ?>",
         $q11 = "<?php echo $A['a20'] ?>",
         $q12 = "<?php echo $A['a10'] ?>",
         $q13 = "<?php echo $A['a3'] ?>",
         $q14 = "<?php echo $A['a2'] ?>",
         $q15 = "<?php echo $A['a22'] ?>",
         $q16 = "<?php echo $A['a18'] ?>",
         $q17 = "<?php echo $A['a1'] ?>",
         $q18 = "<?php echo $A['a15'] ?>",
         $q19 = "<?php echo $A['a17'] ?>",
         $q20 = "<?php echo $A['a9'] ?>",
         $q21 = "<?php echo $A['a5'] ?>",
         $q22 = "<?php echo $A['a14'] ?>",
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