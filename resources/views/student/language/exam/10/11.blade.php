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
$Q=[ "q1" => "Marriage is one of the oldest",
"q2" => "in society. Marriage is the formal",
"q3" => "of two people who choose to stay together 'until death us do part'. Choosing the correct",
"q4" => "in marriage, then, is very important and",
"q5" => "a great deal of consideration and skill. For this reason in many",
"q6" => "the choice of marriage",
"q7" => "is the responsibility of the parents. There are arguments both in favour and against this. There are some",
"q8" => "advantages in letting your parents",
"q9" => "your",
"q10" => ". First of all, they have experience in this matter, since they have already been through the",
"q11" => "themselves and they are",
"q12" => "of any unforeseen risks that may",
"q13" => "choosing a marriage",
"q14" => ". If a relationship is to last for a long time, then it should be based on reason rather than on emotions such as love and passion. Emotions of this sort can fade quite quickly and when they disappear, there may be no basis for the relationship to",
"q15" => ". For that reason, parents are able to make a more sensible, reasoned decision. Many people would disagree with this, however. They would argue that marriage should be based first and foremost on love. If the",
"q16" => "love each other, it is more than likely that they will be able to overcome any",
"q17" => "which may face them in the future. They will stay together 'in sickness and in health'. A marriage based on a business relationship may bring",
"q18" => "",
"q19" => "but there may be no real love in the relationship, and it is love which is the essential ingredient of a happy marriage. In",
"q20" => ", there are strong arguments both in favour and against allowing your parents to choose your marriage",
"q21" => ". As the saying goes, 'different",
"q22" => ", different customs', and it is probably this",
"q23" => "",
"q24" => "which determines whether young people should permit more experienced people to choose your",
"q25" => "for life. So long as the end result is a happy",];
$end = "of two people, it does not really matter who makes the decision.";
$A=[
"a1" => "accompany",
"a2" => "aspect",
"a3" => "aware",
"a4" => "bonding",
"a5" => "bonding",
"a6" => "challenges",
"a7" => "conclusion",
"a8" => "couple",
"a9" => "cultural",
"a10" => "cultures",
"a11" => "financial",
"a12" => "institutions",
"a13" => "obvious",
"a14" => "partner",
"a15" => "partner",
"a16" => "partner",
"a17" => "partner",
"a18" => "partner",
"a19" => "partner",
"a20" => "cultures",
"a21" => "process",
"a22" => "requires",
"a23" => "security",
"a24" => "select",
"a25" => "survive",];
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
        $q1 = "<?php echo $A['a12'] ?>",
        $q2 = "<?php echo $A['a4'] ?>",
        $q3 = "<?php echo $A['a14'] ?>",
        $q4 = "<?php echo $A['a22'] ?>",
        $q5 = "<?php echo $A['a10'] ?>",
        $q6 = "<?php echo $A['a14'] ?>",
        $q7 = "<?php echo $A['a13'] ?>",
        $q8 = "<?php echo $A['a24'] ?>",
        $q9 = "<?php echo $A['a14'] ?>",
        $q10 = "<?php echo $A['a21'] ?>",
        $q11 = "<?php echo $A['a3'] ?>",
        $q12 = "<?php echo $A['a1'] ?>",
        $q13 = "<?php echo $A['a14'] ?>",
        $q14 = "<?php echo $A['a25'] ?>",
        $q15 = "<?php echo $A['a8'] ?>",
        $q16 = "<?php echo $A['a6'] ?>",
        $q17 = "<?php echo $A['a11'] ?>",
        $q18 = "<?php echo $A['a23'] ?>",
        $q19 = "<?php echo $A['a7'] ?>",
        $q20 = "<?php echo $A['a14'] ?>",
        $q21 = "<?php echo $A['a20'] ?>",
        $q22 = "<?php echo $A['a9'] ?>",
        $q23 = "<?php echo $A['a2'] ?>",
        $q24 = "<?php echo $A['a14'] ?>",
        $q25 = "<?php echo $A['a4'] ?>",
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

    function checkAnswer(ele, status) {
        let bgColor;

        status == 'correct' ? (bgColor = 'color-success') : (bgColor = 'color-danger')

        ele.addClass(bgColor)
    }
</script>
@stop