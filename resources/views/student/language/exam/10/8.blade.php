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
   $Q=["q1" => "Ever since life began on our planet, the",
    "q2" => "of all species has hung in the balance. Charles Darwin was the first to coin the expression 'the",
    "q3" => "of the fittest', and it is this ability to",
    "q4" => "to change which is",
    "q5" => "for all living creatures. Even when creatures have been able to",
    "q6" => "to their surroundings, however, there is still one more threat to their existence. That threat comes in human form. Human activities",
    "q7" => "a threat to the existence of many different creatures. A number of animals and birds, including the dodo, have already been hunted out of existence. Man's insatiable appetite is also the reason for many creatures currently being on the endangered species list. These creatures include many kinds of whales and some of the larger land mammals such as the rhino and the tiger. These animals are hunted for their food or for special properties such as their horn or their skin, which are highly valued by humans. Even if an animal does not",
    "q8" => "directly on the human menu, it may still be at risk. As human numbers grow, so does the need for space to build houses and grow crops. As humans encroach upon forests and savannahs, the natural habitats of many species are destroyed, leaving the animals with nowhere to go and no food to eat. What action can we take to protect other living species? Some governments have already placed bans on hunting certain animals, but poachers operate outside the law and continue to slaughter endangered species. Stricter",
    "q9" => "of the laws is needed with harsher punishments for offenders. There also needs to be greater",
    "q10" => "against destroying forests and polluting waterways. Education and",
    "q11" => "are also keys to help address the",
    "q12" => ". It is",
    "q13" => "that humans understand the nature of the relationship between animals and people. It is a",
    "q14" => ", symbiotic relationship. We need animals to",
    "q15" => "our own",];
    $end = "on this planet. Will we learn to stop slaughtering them before it's too late?";
$A=[
    "a1" => "adapt",
    "a2" => "adapt",
    "a3" => "awareness",
    "a4" => "crucial",
    "a5" => "crucial",
    "a6" => "enforcement",
    "a7" => "ensure",
    "a8" => "feature",
    "a9" => "issue",
    "a10" => "legislation",
    "a11" => "mutual",
    "a12" => "pose",
    "a13" => "survival",
    "a14" => "survival",
    "a15" => "survival",];
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
         $q1 = "<?php echo $A['a13'] ?>",
         $q2 = "<?php echo $A['a13'] ?>",
         $q3 = "<?php echo $A['a1'] ?>",
         $q4 = "<?php echo $A['a4'] ?>",
         $q5 = "<?php echo $A['a1'] ?>",
         $q6 = "<?php echo $A['a12'] ?>",
         $q7 = "<?php echo $A['a8'] ?>",
         $q8 = "<?php echo $A['a6'] ?>",
         $q9 = "<?php echo $A['a10'] ?>",
         $q10 = "<?php echo $A['a3'] ?>",
         $q11 = "<?php echo $A['a9'] ?>",
         $q12 = "<?php echo $A['a4'] ?>",
         $q13 = "<?php echo $A['a11'] ?>",
         $q14 = "<?php echo $A['a7'] ?>",
         $q15 = "<?php echo $A['a13'] ?>",
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