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
    $Q=["q1" => "There is an old saying that 'charity should begin at home', meaning that a nation should help its own citizens before it provides",
    "q2" => "to foreigners. While this may be true to a certain extent, there are",
    "q3" => "cases where this is",
    "q4" => "behaviour. This essay will outline the need for all countries to provide international",
    "q5" => "to less fortunate nations. There are a number of cases in which international",
    "q6" => "is called for. One example would be natural disasters such as tsunamis, earthquakes, floods, and famine caused by drought. These disasters can strike at",
    "q7" => "at any time. In addition, they often cause extensive damage and the losses are usually beyond the",
    "q8" => "of the local government to",
    "q9" => "cover. In these cases international",
    "q10" => "is a necessity. There can be no",
    "q11" => "reason for refusing to provide some degree of",
    "q12" => ". After all, all",
    "q13" => "on earth are prone to such disasters and all nations should offer",
    "q14" => "when asked. There are, in addition, man-made disasters such as warfare, when innocent victims suffer unmentionable crimes t the hands of the soldiers. International",
    "q15" => "is also needed to alleviate these effects of war. The",
    "q16" => ", however, must be",
    "q17" => ". It should include food, clean water and make-shift",
    "q18" => ". It should not include",
    "q19" => "",
    "q20" => "to extend the fighting. Some people believe that international",
    "q21" => "is a waste of",
    "q22" => ". They claim that the money could be better spent at home, improving living conditions for their own nationals. While this may be true in nations which themselves have a high level of poverty and deprivation, there is still a case for providing help to foreigners in need. An important",
    "q23" => "of providing international",
    "q24" => "is to",
    "q25" => "good-will among nations. If a nation sends",
    "q26" => "to a country which has suffered a natural disaster, then it is likely that relations between the countries will improve. A further argument for providing",
    "q27" => "is that if no",
    "q28" => "is",
    "q29" => ", then the country may turn to other",
    "q30" => "of",
    "q31" => ", such as terrorist groups. If the terrorist groups gain a foothold in the country, by whatever means, then the group has another base from which to operate. To",
    "q32" => "up, providing international",
    "q33" => "is a humanitarian",
    "q34" => "but is also has political side-effects. Refusing to offer",
    "q35" => "can back-fire and have a",
    "q36" => "",];
    $end = "on the country which neglects its human duty.";
$A=[
    "a1" => "accommodation",
    "a2" => "appropriate",
    "a3" => "available",
    "a4" => "capacity",
    "a5" => "impact",
    "a6" => "aid",
    "a7" => "aid",
    "a8" => "aid",
    "a9" => "aid",
    "a10" => "aid",
    "a11" => "aid",
    "a12" => "aid",
    "a13" => "aid",
    "a14" => "aid",
    "a15" => "aid",
    "a16" => "aid",
    "a17" => "aid",
    "a18" => "aid",
    "a19" => "aid",
    "a20" => "aid",
    "a21" => "adequately",
    "a22" => "assistance",
    "a23" => "assistance",
    "a24" => "definitely",
    "a25" => "generate",
    "a26" => "resources",
    "a27" => "inappropriate",
    "a28" => "aspect",
    "a29" => "negative",
    "a30" => "random",
    "a31" => "justifiable",
    "a32" => "locations",
    "a33" => "military",
    "a34" => "sources",
    "a35" => "issue",
    "a36" => "sum",];
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
         $q1 = "<?php echo $A['a6'] ?>",
         $q2 = "<?php echo $A['a24'] ?>",
         $q3 = "<?php echo $A['a27'] ?>",
         $q4 = "<?php echo $A['a6'] ?>",
         $q5 = "<?php echo $A['a6'] ?>",
         $q6 = "<?php echo $A['a30'] ?>",
         $q7 = "<?php echo $A['a4'] ?>",
         $q8 = "<?php echo $A['a21'] ?>",
         $q9 = "<?php echo $A['a6'] ?>",
         $q10 = "<?php echo $A['a31'] ?>",
         $q11 = "<?php echo $A['a6'] ?>",
         $q12 = "<?php echo $A['a32'] ?>",
         $q13 = "<?php echo $A['a22'] ?>",
         $q14 = "<?php echo $A['a6'] ?>",
         $q15 = "<?php echo $A['a6'] ?>",
         $q16 = "<?php echo $A['a2'] ?>",
         $q17 = "<?php echo $A['a1'] ?>",
         $q18 = "<?php echo $A['a33'] ?>",
         $q19 = "<?php echo $A['a6'] ?>",
         $q20 = "<?php echo $A['a6'] ?>",
         $q21 = "<?php echo $A['a26'] ?>",
         $q22 = "<?php echo $A['a28'] ?>",
         $q23 = "<?php echo $A['a6'] ?>",
         $q24 = "<?php echo $A['a25'] ?>",
         $q25 = "<?php echo $A['a22'] ?>",
         $q26 = "<?php echo $A['a6'] ?>",
         $q27 = "<?php echo $A['a6'] ?>",
         $q28 = "<?php echo $A['a3'] ?>",
         $q29 = "<?php echo $A['a34'] ?>",
         $q30 = "<?php echo $A['a6'] ?>",
         $q31 = "<?php echo $A['a36'] ?>",
         $q32 = "<?php echo $A['a6'] ?>",
         $q33 = "<?php echo $A['a35'] ?>",
         $q34 = "<?php echo $A['a6'] ?>",
         $q35 = "<?php echo $A['a29'] ?>",
         $q36 = "<?php echo $A['a5'] ?>",
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
</script>
@stop