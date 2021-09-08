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
$Q=["q1" => "In recent times there has been much",
"q2" => "about which subjects should be included on the school curriculum. Some people believe that the introduction of more modern subjects such as IT in place of more",
"q3" => "subjects such as art and music would be more",
"q4" => "for modern-day pupils, and a better",
"q5" => "for future employment needs. This essay will outline some of the pros and cons of giving more",
"q6" => "to science and maths over arts subjects. There is one",
"q7" => "argument in favour of replacing art, music and sport on the curriculum with subjects like IT. This is that the purpose of school is to prepare children for their working life after school, so the subjects on the curriculum should be",
"q8" => "to their",
"q9" => "careers. From this point of view, IT is much more",
"q10" => "to schoolchildren as they need to be",
"q11" => "literate if they want to",
"q12" => "in the workplace. For example, it is easy to see that word",
"q13" => "and programming skills will impress employers more than the ability to run fast or draw well. There are also, however, strong arguments for",
"q14" => "the more",
"q15" => "subjects as part of the curriculum. One",
"q16" => "counter-argument is that the purpose of education is not just to prepare children for later careers, but also to develop their all round" .'" ',
"q17" => '". It is important that children leave school with some knowledge of art, music and sport as all these are all help develop',
"q18" => "of young people's personalities. My own personal point of view is that there is merit in both sides of the",
"q19" => "and that all children should study some IT, art, music and sport at least at",];
$end = "school. At secondary school, however, children should be offered a choice between these subjects so that they can continue to study them if they wish.";
$A =[
"a1" => "appropriate",
"a2" => "aspects",
"a3" => "computer",
"a4" => "culture",
"a5" => "debate",
"a6" => "debate",
"a7" => "emphasis",
"a8" => "investment",
"a9" => "major",
"a10" => "potential",
"a11" => "primary",
"a12" => "processing",
"a13" => "relevant",
"a14" => "relevant",
"a15" => "retaining",
"a16" => "significant",
"a17" => "survive",
"a18" => "traditional",
"a19" => "traditional",];
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
        $q1 = "<?php echo $A['a5'] ?>",
        $q2 = "<?php echo $A['a18'] ?>",
        $q3 = "<?php echo $A['a1'] ?>",
        $q4 = "<?php echo $A['a8'] ?>",
        $q5 = "<?php echo $A['a7'] ?>",
        $q6 = "<?php echo $A['a9'] ?>",
        $q7 = "<?php echo $A['a13'] ?>",
        $q8 = "<?php echo $A['a10'] ?>",
        $q9 = "<?php echo $A['a13'] ?>",
        $q10 = "<?php echo $A['a3'] ?>",
        $q11 = "<?php echo $A['a17'] ?>",
        $q12 = "<?php echo $A['a12'] ?>",
        $q13 = "<?php echo $A['a15'] ?>",
        $q14 = "<?php echo $A['a18'] ?>",
        $q15 = "<?php echo $A['a16'] ?>",
        $q16 = "<?php echo $A['a4'] ?>",
        $q17 = "<?php echo $A['a2'] ?>",
        $q18 = "<?php echo $A['a5'] ?>",
        $q19 = "<?php echo $A['a11'] ?>",
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

    function checkAnswer(ele, status) {
        let bgColor;

        status == 'correct' ? (bgColor = 'color-success') : (bgColor = 'color-danger')

        ele.addClass(bgColor)
    }
</script>
@stop