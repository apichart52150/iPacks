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
$Q=["q1" => "Almost ten per cent of the earth's surface is covered by tropical rainforests. These forests contain a wide variety of natural",
"q2" => ". Many people suggest that these",
"q3" => "should be",
"q4" => "to make life more comfortable and convenient for humans. Other people, however, are not in favour of such development. This essay will consider arguments from both points of view. The rainforests of the world contain a vast amount of natural",
"q5" => "which could be",
"q6" => "for the development of mankind. These",
"q7" => "include deposits of fossil fuels such as coal, gas and oil, as well as large amounts of valuable minerals such as gold. Since the world is running out of fossil fuels, it seems sensible to make use of these",
"q8" => "hidden deep inside the jungle. Getting",
"q9" => "to these",
"q10" => "would mean cutting down all the trees, which would be very expensive but the cost of this could be",
"q11" => "by making use of the forest timber. Clearing the forests would result in a number of",
"q12" => ". Firstly, the cleared land could be used to develop",
"q13" => "and settlements for people. This could prevent over-crowding in cities. In addition, the dangerous creatures that live in the forests could be eradicated. A further",
"q14" => "would be the possibility of planting crops for food and bio-fuel such as palm oil, which has been done in countries such as Malaysia and Indonesia. There are, however, some very strong arguments in favour of preserving the rainforests. First of all, the jungles provide a home for millions of indigenous people who",
"q15" => "on the forest for their food and shelter. These people have lived in the rainforests for many millions of years and help",
"q16" => "a healthy balance between humans and plants and animals that live there. In addition, many of the plants that grow there are important for their medicinal value or for use in industrial products. Probably the most important argument, however, is the fact that rainforests protect the world from natural disasters as a result of climate change. The forests help",
"q17" => "a healthy balance by absorbing carbon dioxide in the atmosphere and by producing oxygen for people to breathe. The trees also hold soil together and prevent soil",
"q18" => "which can result in land-slides and flooding. All in all, then, it seems that the conservation of the rainforests is very important for the",
"q19" => "future of mankind. Clearing rainforests for short-term",
"q20" => "",
"q21" => "will lead to the extinction of humans, flora and fauna that live there, and possibly even to the destruction of the",
"q22" => "",];
    $end = "itself.";
    $A=["a1" => "access",
"a2" => "benefit",
"a3" => "benefits",
"a4" => "benefits",
"a5" => "communities",
"a6" => "economic",
"a7" => "environment",
"a8" => "erosion",
"a9" => "exploited",
"a10" => "exploited",
"a11" => "global",
"a12" => "maintain",
"a13" => "maintain",
"a14" => "minimized",
"a15" => "rely",
"a16" => "resources",
"a17" => "resources",
"a18" => "resources",
"a19" => "resources",
"a20" => "resources",
"a21" => "resources",
"a22" => "sustainable",];


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
         $q1 = "<?php echo $A['a16'] ?>",
         $q2 = "<?php echo $A['a16'] ?>",
         $q3 = "<?php echo $A['a9'] ?>",
         $q4 = "<?php echo $A['a16'] ?>",
         $q5 = "<?php echo $A['a9'] ?>",
         $q6 = "<?php echo $A['a16'] ?>",
         $q7 = "<?php echo $A['a16'] ?>",
         $q8 = "<?php echo $A['a1'] ?>",
         $q9 = "<?php echo $A['a16'] ?>",
         $q10 = "<?php echo $A['a14'] ?>",
         $q11 = "<?php echo $A['a3'] ?>",
         $q12 = "<?php echo $A['a5'] ?>",
         $q13 = "<?php echo $A['a2'] ?>",
         $q14 = "<?php echo $A['a15'] ?>",
         $q15 = "<?php echo $A['a12'] ?>",
         $q16 = "<?php echo $A['a12'] ?>",
         $q17 = "<?php echo $A['a8'] ?>",
         $q18 = "<?php echo $A['a22'] ?>",
         $q19 = "<?php echo $A['a6'] ?>",
         $q20 = "<?php echo $A['a3'] ?>",
         $q21 = "<?php echo $A['a11'] ?>",
         $q22 = "<?php echo $A['a7'] ?>",
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