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
 $Q=["q1" => "With budget airlines travelling",
    "q2" => "has become easier and cheaper than ever before. Visiting foreign destinations, once the dream of many people, has now become reality. The reality of travelling, however, is not always as pleasant as one expects, and the dream sometimes turns into a nightmare. Modern",
    "q3" => "such as the internet means that we can now",
    "q4" => "Places",
    "q5" => ", and even take part in",
    "q6" => "tours of those places,",
    "q7" => "us to experience those places without having to actually travel there. This",
    "q8" => "has its",
    "q9" => "",
    "q10" => "but there are also drawbacks to",
    "q11" => "tourism. There can be no doubt that travelling to different countries allows us to experience",
    "q12" => "",
    "q13" => "at first-hand. Each country has its own",
    "q14" => "atmosphere,",
    "q15" => "by a mixture of smells, tastes, climate and",
    "q16" => ". In addition, the country's",
    "q17" => "heritage",
    "q18" => ", folklore and",
    "q19" => "provide an",
    "q20" => "into the nation's history and give an",
    "q21" => "of the people's character. The language, also, can be heard as it is spoken in its natural",
    "q22" => ", and continued",
    "q23" => " to the language is likely to result in some learning of that language. This real-life experience is likely to have a long-lasting effect. However, the effect may not always be a pleasant one as there are many problems which can",
    "q24" => "",
    "q25" => "travel. The practicalities of",
    "q26" => "visas and other bureaucratic",
    "q27" => "can take the edge off the trip even before you set off. Travel logistics such as making flight connections, being stranded at airports or docks due to bad weather or strikes also add to the frustration of the reality. In addition,",
    "q28" => "of '",
    "q29" => "shock' can seriously reduce the novelty value of being in a foreign country. For example, different food, strange customs, unfamiliar",
    "q30" => "and homesickness can all make your ideal holiday abroad a nightmare. In",
    "q31" => ",",
    "q32" => "travel can give valuable",
    "q33" => "into alien",
    "q34" => "but the practicalities",
    "q35" => "in travelling may not suit everyone. Fortunately, with advanced",
    "q36" => "it is now possible to experience visits to foreign places in the comfort of",
    "q37" => "tourism. At the end of the day, it is up to each",
    "q38" => "to choose the",];
    $end = "which best fits their personality.";
$A=[
    "a1" => "accompany",
    "a2" => "aspects",
    "a3" => "aspects",
    "a4" => "concept",
    "a5" => "conclusion",
    "a6" => "context",
    "a7" => "created",
    "a8" => "cultural",
    "a9" => "cultural",
    "a10" => "culture",
    "a11" => "culture",
    "a12" => "cultures",
    "a13" => "currency",
    "a14" => "distinct",
    "a15" => "diversity",
    "a16" => "documents",
    "a17" => "enabling",
    "a18" => "exposure",
    "a19" => "indication",
    "a20" => "individual",
    "a21" => "insight",
    "a22" => "insights",
    "a23" => "involved",
    "a24" => "obtaining",
    "a25" => "option",
    "a26" => "overseas",
    "a27" => "overseas",
    "a28" => "overseas",
    "a29" => "overseas",
    "a30" => "positive",
    "a31" => "research",
    "a32" => "sites",
    "a33" => "technology",
    "a34" => "technology",
    "a35" => "traditions",
    "a36" => "virtual",
    "a37" => "virtual",
    "a38" => "virtual",];
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
         $q1 = "<?php echo $A['a26'] ?>",
         $q2 = "<?php echo $A['a33'] ?>",
         $q3 = "<?php echo $A['a31'] ?>",
         $q4 = "<?php echo $A['a26'] ?>",
         $q5 = "<?php echo $A['a36'] ?>",
         $q6 = "<?php echo $A['a17'] ?>",
         $q7 = "<?php echo $A['a4'] ?>",
         $q8 = "<?php echo $A['a30'] ?>",
         $q9 = "<?php echo $A['a2'] ?>",
         $q10 = "<?php echo $A['a36'] ?>",
         $q11 = "<?php echo $A['a8'] ?>",
         $q12 = "<?php echo $A['a15'] ?>",
         $q13 = "<?php echo $A['a14'] ?>",
         $q14 = "<?php echo $A['a7'] ?>",
         $q15 = "<?php echo $A['a10'] ?>",
         $q16 = "<?php echo $A['a8'] ?>",
         $q17 = "<?php echo $A['a32'] ?>",
         $q18 = "<?php echo $A['a35'] ?>",
         $q19 = "<?php echo $A['a21'] ?>",
         $q20 = "<?php echo $A['a19'] ?>",
         $q21 = "<?php echo $A['a6'] ?>",
         $q22 = "<?php echo $A['a18'] ?>",
         $q23 = "<?php echo $A['a1'] ?>",
         $q24 = "<?php echo $A['a26'] ?>",
         $q25 = "<?php echo $A['a24'] ?>",
         $q26 = "<?php echo $A['a16'] ?>",
         $q27 = "<?php echo $A['a2'] ?>",
         $q28 = "<?php echo $A['a10'] ?>",
         $q29 = "<?php echo $A['a13'] ?>",
         $q30 = "<?php echo $A['a5'] ?>",
         $q31 = "<?php echo $A['a26'] ?>",
         $q32 = "<?php echo $A['a22'] ?>",
         $q33 = "<?php echo $A['a12'] ?>",
         $q34 = "<?php echo $A['a23'] ?>",
         $q35 = "<?php echo $A['a33'] ?>",
         $q36 = "<?php echo $A['a36'] ?>",
         $q37 = "<?php echo $A['a20'] ?>",
         $q38 = "<?php echo $A['a25'] ?>",
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