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
    "q1" => "These days with increasing urban populations, there are",
    "q2" => "MAJOR problems with congestion and not only the price, but also",
    "q3" => "of",
    "q4" => "in large cities of the world. It seems that one possible solution could be to",
    "q5" => "large companies and factories as well as their respective employees out of these urban",
    "q6" => "and into more rural ones. In my opinion, I strongly agree that this would have a desired effect in making cities more livable. To begin with, the traffic problem in cities doesn't only exist from commuting employees, but also the general public travelling around the city. While this may be a fact, if the number of workers’",
    "q7" => "is reduced on city streets, a large",
    "q8" => "of traffic will",
    "q9" => "",
    "q10" => "in rush hours. For example, peak hour traffic is undoubtedly made up largely of staff from companies going to and from home. Secondly, with regards to housing problems, populations will always continue to grow in cities and therefore inadvertently reduce the number of cheap and",
    "q11" => "apartments. This is certainly",
    "q12" => ": however, a large",
    "q13" => "of these apartments are",
    "q14" => "by employees from large firms and their families. If this workforce is",
    "q15" => "to housing",
    "q16" => "in the country, city apartment blocks will fall in price and certainly increase in",
    "q17" => ". In",
    "q18" => ", by",
    "q19" => "workers to rural",
    "q20" => "to work and",
    "q21" => ", heavy traffic conditions and lack of",
    "q22" => "",
    "q23" => "in city centres will",
    "q24" => "change for the better. As far as I'm concerned, I agree that the government should",
    ];
    $end = "such a law in order to increase our standard of living in our hectic city life.";
    $A=[
    "a1" => "accommodation",
    "a2" => "accommodation",
    "a3" => "adequate",
    "a4" => "areas",
    "a5" => "areas",
    "a6" => "availability",
    "a7" => "availability",
    "a8" => "available",
    "a9" => "conclusion",
    "a10" => "decline",
    "a11" => "enforce",
    "a12" => "estates",
    "a13" => "major",
    "a14" => "obvious",
    "a15" => "obviously",
    "a16" => "obviously",
    "a17" => "occupied",
    "a18" => "percentage",
    "a19" => "proportion",
    "a20" => "relocate",
    "a21" => "relocated",
    "a22" => "relocating",
    "a23" => "reside",
    "a24" => "vehicles",
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
@endsection

@section('js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
<script src="{{ asset('public/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('public/assets/js/pages/sweet-alerts.init.js') }}"></script>
<script>
    $("#show-answer").prop("disabled", true);

    const answers = [
         $q1 = "<?php echo $A['a13'] ?>",
         $q2 = "<?php echo $A['a6'] ?>",
         $q3 = "<?php echo $A['a1'] ?>",
         $q4 = "<?php echo $A['a20'] ?>",
         $q5 = "<?php echo $A['a4'] ?>",
         $q6 = "<?php echo $A['a24'] ?>",
         $q7 = "<?php echo $A['a18'] ?>",
         $q8 = "<?php echo $A['a15'] ?>",
         $q9 = "<?php echo $A['a10'] ?>",
         $q10 = "<?php echo $A['a8'] ?>",
         $q11 = "<?php echo $A['a14'] ?>",
         $q12 = "<?php echo $A['a19'] ?>",
         $q13 = "<?php echo $A['a17'] ?>",
         $q14 = "<?php echo $A['a21'] ?>",
         $q15 = "<?php echo $A['a12'] ?>",
         $q16 = "<?php echo $A['a6'] ?>",
         $q17 = "<?php echo $A['a9'] ?>",
         $q18 = "<?php echo $A['a22'] ?>",
         $q19 = "<?php echo $A['a4'] ?>",
         $q20 = "<?php echo $A['a23'] ?>",
         $q21 = "<?php echo $A['a3'] ?>",
         $q22 = "<?php echo $A['a1'] ?>",
         $q23 = "<?php echo $A['a15'] ?>",
         $q24 = "<?php echo $A['a11'] ?>",
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

        Swal.fire({
            title: "Your score",
            text: score+"",
            timer: 5000,
          }).then(() => {
            $(item).css({ "font-weight": "bold", 'color': '#2bc3a5' });
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