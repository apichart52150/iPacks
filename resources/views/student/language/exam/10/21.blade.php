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
    "q1" => "Currently, a lot of third world countries receive",
    "q2" => "from the more developed ones. This",
    "q3" => "can take the form of",
    "q4" => "for new",
    "q5" => "to improve the standard of living. Sometimes the",
    "q6" => "is",
    "q7" => "to",
    "q8" => "purposes, for example to help nations fight",
    "q9" => "terrorism. Donating",
    "q10" => "to poorer nations has both",
    "q11" => "and",
    "q12" => "",
    "q13" => ". To begin with, humanitarian support is vital for Africa and some other continents where climatic conditions make it difficult to lead a healthy life. As a result of extremely low standards of living, people in such countries experience a great lack of food and medicine. Therefore, the need for international",
    "q14" => "is undoubted.",
    "q15" => ", this support usually comes with education, which helps to prevent",
    "q16" => "and other social diseases. Also, international",
    "q17" => "is necessary after natural disasters such as earthquakes and hurricanes when certain",
    "q18" => "suffer from lack of drinking water and",
    "q19" => "health-care. However, there are some serious disadvantages of supporting poor countries. Firstly, most governments in such",
    "q20" => "do not make much effort to deal with social problems by themselves. Instead, they accept the",
    "q21" => "and use it for their own agendas. Worse still, they come to depend on this",
    "q22" => "",
    "q23" => ", which can make the situation even worse. Secondly, some recipient countries",
    "q24" => "money in weapons and food for their armies.",
    "q25" => ", there does not seem any clear future",
    "q26" => "and improvement. In other words, there is no",
    "q27" => "that this situation will ever end. In",
    "q28" => ", international",
    "q29" => "must have long-term",
    "q30" => "for poor countries. The",
    "q31" => "must be used to improve the living standards of the people living there.",
    "q32" => "any",
    "q33" => "which is donated by wealthier nations should be made without any strings",
    "q34" => ". Developed nations should not offer",
    "q35" => "simply as an",
    "q36" => "in their own",
    "q37" => "development, but with the real",
    "q38" => "of",];
    $end = "people who need the help.";
$A=[
    "a1" => "adequate",
    "a2" => "aid",
    "a3" => "aid",
    "a4" => "aid",
    "a5" => "aid",
    "a6" => "aid",
    "a7" => "aid",
    "a8" => "aid",
    "a9" => "aid",
    "a10" => "aid",
    "a11" => "aid",
    "a12" => "aid",
    "a13" => "aid",
    "a14" => "aids",
    "a15" => "aspects",
    "a16" => "assisting",
    "a17" => "attached",
    "a18" => "benefit",
    "a19" => "conclusion",
    "a20" => "economic",
    "a21" => "evidence",
    "a22" => "finally",
    "a23" => "finally",
    "a24" => "funding",
    "a25" => "furthermore",
    "a26" => "internal",
    "a27" => "invest",
    "a28" => "investment",
    "a29" => "linked",
    "a30" => "military",
    "a31" => "motive",
    "a32" => "negative",
    "a33" => "overseas",
    "a34" => "positive",
    "a35" => "projects",
    "a36" => "prospects",
    "a37" => "regions",
    "a38" => "regions",];
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
         $q1 = "<?php echo $A['a2'] ?>",
         $q2 = "<?php echo $A['a2'] ?>",
         $q3 = "<?php echo $A['a24'] ?>",
         $q4 = "<?php echo $A['a35'] ?>",
         $q5 = "<?php echo $A['a2'] ?>",
         $q6 = "<?php echo $A['a29'] ?>",
         $q7 = "<?php echo $A['a30'] ?>",
         $q8 = "<?php echo $A['a26'] ?>",
         $q9 = "<?php echo $A['a2'] ?>",
         $q10 = "<?php echo $A['a34'] ?>",
         $q11 = "<?php echo $A['a32'] ?>",
         $q12 = "<?php echo $A['a15'] ?>",
         $q13 = "<?php echo $A['a2'] ?>",
         $q14 = "<?php echo $A['a25'] ?>",
         $q15 = "<?php echo $A['a14'] ?>",
         $q16 = "<?php echo $A['a2'] ?>",
         $q17 = "<?php echo $A['a37'] ?>",
         $q18 = "<?php echo $A['a1'] ?>",
         $q19 = "<?php echo $A['a37'] ?>",
         $q20 = "<?php echo $A['a2'] ?>",
         $q21 = "<?php echo $A['a33'] ?>",
         $q22 = "<?php echo $A['a2'] ?>",
         $q23 = "<?php echo $A['a27'] ?>",
         $q24 = "<?php echo $A['a22'] ?>",
         $q25 = "<?php echo $A['a36'] ?>",
         $q26 = "<?php echo $A['a21'] ?>",
         $q27 = "<?php echo $A['a19'] ?>",
         $q28 = "<?php echo $A['a2'] ?>",
         $q29 = "<?php echo $A['a18'] ?>",
         $q30 = "<?php echo $A['a2'] ?>",
         $q31 = "<?php echo $A['a22'] ?>",
         $q32 = "<?php echo $A['a2'] ?>",
         $q33 = "<?php echo $A['a17'] ?>",
         $q34 = "<?php echo $A['a2'] ?>",
         $q35 = "<?php echo $A['a28'] ?>",
         $q36 = "<?php echo $A['a20'] ?>",
         $q37 = "<?php echo $A['a31'] ?>",
         $q38 = "<?php echo $A['a16'] ?>",
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