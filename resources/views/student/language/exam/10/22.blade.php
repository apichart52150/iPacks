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
 $Q=["q1" => "Western",
    "q2" => "has proved to be very popular over the last few",
    "q3" => "and has had a strong",
    "q4" => "on countries all around the world. American and European popular music and Hollywood movies have become the benchmark standard all around the",
    "q5" => ", and this has had a",
    "q6" => "",
    "q7" => "on local folk",
    "q8" => ". This essay will outline some of these ",
    "q9" => "",
    "q10" => "on",
    "q11" => "",
    "q12" => "and suggest ways in which this",
    "q13" => "can be",
    "q14" => ". Western",
    "q15" => "and behaviour has had a",
    "q16" => "effect all around the",
    "q17" => ". Since rock and roll music was first played in the USA after the First World War, its popularity has increased",
    "q18" => ". This music was also",
    "q19" => "with a sense of rebellion since it was so very different from the music enjoyed by the older",
    "q20" => ". With the advent of improved broadcasting, the music was heard in all corners of the world. A popular",
    "q21" => "of rebellion was also",
    "q22" => ", something which was largely",
    "q23" => "unknown in",
    "q24" => "",
    "q25" => "such as in Asian nations. The",
    "q26" => "continues until today. Movies, also, have had a great",
    "q27" => "on people's",
    "q28" => "and behaviour. The popular",
    "q29" => "of rebellion was portrayed on the big screen and idols such as James Dean became anti-heroic figures. Cinema content also became less censored and promiscuity was portrayed as a socially accepted",
    "q30" => ". Such",
    "q31" => "behaviour has had a detrimental effect on more",
    "q32" => "nations'",
    "q33" => ". What can be done to stem this",
    "q34" => "? Several nations have tried to censor or even ban such popular",
    "q35" => ". However,",
    "q36" => "rarely succeeds, and a more sophisticated",
    "q37" => "is needed. Governments should",
    "q38" => "money on educating young",
    "q39" => "about their own",
    "q40" => "heritage and",
    "q41" => ". Local musical instruments and other art-forms need to be singled out for conservation, and education programmes need to be",
    "q42" => "at schools.",
    "q43" => "models need to be",
    "q44" => "for the younger",
    "q45" => "to follow. For example local pop musicians can encourage young people to learn how to play",
    "q46" => "instruments. National movie stars could model",
    "q47" => "behaviour for youngsters to follow. By allowing both local",
    "q48" => "and western",
    "q49" => "to co-exist side by side, the national",
    "q50" => "",
    "q51" => "can be preserved for future",];
    $end = "to enjoy.";
$A=[
    "a1" => "approach",
    "a2" => "appropriate",
    "a3" => "attitudes",
    "a4" => "cultural",
    "a5" => "cultural",
    "a6" => "cultural",
    "a7" => "culture",
    "a8" => "culture",
    "a9" => "culture",
    "a10" => "culture",
    "a11" => "culture",
    "a12" => "culture",
    "a13" => "culture",
    "a14" => "cultures",
    "a15" => "cultures",
    "a16" => "cultures",
    "a17" => "decades",
    "a18" => "established",
    "a19" => "established",
    "a20" => "generation",
    "a21" => "generation",
    "a22" => "generations",
    "a23" => "generations",
    "a24" => "globe",
    "a25" => "globe",
    "a26" => "identified",
    "a27" => "identity",
    "a28" => "impact",
    "a29" => "impact",
    "a30" => "impact",
    "a31" => "impacts",
    "a32" => "invest",
    "a33" => "linked",
    "a34" => "negative",
    "a35" => "negative",
    "a36" => "norm",
    "a37" => "previously",
    "a38" => "prohibition",
    "a39" => "reversed",
    "a40" => "role",
    "a41" => "significantly",
    "a42" => "traditional",
    "a43" => "traditional",
    "a44" => "traditional",
    "a45" => "traditional",
    "a46" => "traditions",
    "a47" => "traditions",
    "a48" => "trend",
    "a49" => "trend",
    "a50" => "trend",
    "a51" => "widespread",];
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
         $q1 = "<?php echo $A['a7'] ?>",
         $q2 = "<?php echo $A['a17'] ?>",
         $q3 = "<?php echo $A['a28'] ?>",
         $q4 = "<?php echo $A['a24'] ?>",
         $q5 = "<?php echo $A['a34'] ?>",
         $q6 = "<?php echo $A['a28'] ?>",
         $q7 = "<?php echo $A['a46'] ?>",
         $q8 = "<?php echo $A['a34'] ?>",
         $q9 = "<?php echo $A['a31'] ?>",
         $q10 = "<?php echo $A['a42'] ?>",
         $q11 = "<?php echo $A['a14'] ?>",
         $q12 = "<?php echo $A['a48'] ?>",
         $q13 = "<?php echo $A['a39'] ?>",
         $q14 = "<?php echo $A['a7'] ?>",
         $q15 = "<?php echo $A['a51'] ?>",
         $q16 = "<?php echo $A['a24'] ?>",
         $q17 = "<?php echo $A['a41'] ?>",
         $q18 = "<?php echo $A['a33'] ?>",
         $q19 = "<?php echo $A['a20'] ?>",
         $q20 = "<?php echo $A['a7'] ?>",
         $q21 = "<?php echo $A['a18'] ?>",
         $q22 = "<?php echo $A['a37'] ?>",
         $q23 = "<?php echo $A['a42'] ?>",
         $q24 = "<?php echo $A['a14'] ?>",
         $q25 = "<?php echo $A['a48'] ?>",
         $q26 = "<?php echo $A['a28'] ?>",
         $q27 = "<?php echo $A['a3'] ?>",
         $q28 = "<?php echo $A['a7'] ?>",
         $q29 = "<?php echo $A['a36'] ?>",
         $q30 = "<?php echo $A['a4'] ?>",
         $q31 = "<?php echo $A['a42'] ?>",
         $q32 = "<?php echo $A['a14'] ?>",
         $q33 = "<?php echo $A['a48'] ?>",
         $q34 = "<?php echo $A['a7'] ?>",
         $q35 = "<?php echo $A['a38'] ?>",
         $q36 = "<?php echo $A['a1'] ?>",
         $q37 = "<?php echo $A['a32'] ?>",
         $q38 = "<?php echo $A['a22'] ?>",
         $q39 = "<?php echo $A['a4'] ?>",
         $q40 = "<?php echo $A['a46'] ?>",
         $q41 = "<?php echo $A['a18'] ?>",
         $q42 = "<?php echo $A['a40'] ?>",
         $q43 = "<?php echo $A['a26'] ?>",
         $q44 = "<?php echo $A['a20'] ?>",
         $q45 = "<?php echo $A['a42'] ?>",
         $q46 = "<?php echo $A['a2'] ?>",
         $q47 = "<?php echo $A['a7'] ?>",
         $q48 = "<?php echo $A['a7'] ?>",
         $q49 = "<?php echo $A['a4'] ?>",
         $q50 = "<?php echo $A['a27'] ?>",
         $q51 = "<?php echo $A['a22'] ?>",
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