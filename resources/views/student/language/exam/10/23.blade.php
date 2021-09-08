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
$Q=["q1" => "With advanced",
    "q2" => ", travelling from one continent to another is relatively easy nowadays and the number of foreign tourists is increasing. Although",
    "q3" => "from tourism is a much needed",
    "q4" => ",",
    "q5" => "tourists are not always welcome in the countries they visit. This essay will outline the advantages of tourism and will outline some of the reasons why",
    "q6" => "tourists are not always welcome. There are a number of reasons why foreign tourism is regarded in a",
    "q7" => "light. First of all, the",
    "q8" => "",
    "q9" => "by",
    "q10" => "visitors is substantial. In a country such as Thailand, for example, foreign",
    "q11" => "from tourism is essential in helping to develop the nation. It provides a living for hundreds of thousands of people: the hotel,",
    "q12" => "and retail",
    "q13" => "all",
    "q14" => "from",
    "q15" => "visitors. The nation's",
    "q16" => "is improved with new roads and railways as well as",
    "q17" => "",
    "q18" => ". Apart from the",
    "q19" => "and",
    "q20" => "development, foreign visitors also provide a fresh",
    "q21" => "for the local people.",
    "q22" => "such as foreign languages,",
    "q23" => "and",
    "q24" => "can help",
    "q25" => "the minds of local people. Ironically, these foreign",
    "q26" => "values may also have a",
    "q27" => "",
    "q28" => "on local",
    "q29" => ". The",
    "q30" => "of local",
    "q31" => "can result from the introduction of outside",
    "q32" => ". For example, popular music and Hollywood movies from the USA can undermine the Thai",
    "q33" => "",
    "q34" => ".",
    "q35" => ", foreign tourists are usually",
    "q36" => "of the correct social etiquette when it comes to visiting tourist",
    "q37" => ", especially temples, mosques and shrines. This",
    "q38" => "'pollution' is also",
    "q39" => "by",
    "q40" => "pollution, as more and more resorts are built to provide",
    "q41" => "for the",
    "q42" => "tourists. The",
    "q43" => "destroys the natural beauty of the",
    "q44" => ". In addition, waste",
    "q45" => "systems pollute both the waterways and the soil around the resorts. All in all, then, while foreign tourists can help",
    "q46" => "and",
    "q47" => "a nation's",
    "q48" => ", people should also be",
    "q49" => "that",
    "q50" => "and",
    "q51" => "pollution can have a",
    "q52" => "",];
    $end = "on the tourist destinations.";
$A=[
    "a1" => "accommodation",
    "a2" => "accompanied",
    "a3" => "aspects",
    "a4" => "aware",
    "a5" => "benefit",
    "a6" => "communications",
    "a7" => "cultural",
    "a8" => "cultural",
    "a9" => "cultural",
    "a10" => "culture",
    "a11" => "culture",
    "a12" => "cultures",
    "a13" => "environmental",
    "a14" => "environmental",
    "a15" => "erosion",
    "a16" => "expand",
    "a17" => "expand",
    "a18" => "financial",
    "a19" => "impact",
    "a20" => "impact",
    "a21" => "location",
    "a22" => "income",
    "a23" => "income",
    "a24" => "infrastructure",
    "a25" => "infrastructure",
    "a26" => "negative",
    "a27" => "negative",
    "a28" => "networks",
    "a29" => "overseas",
    "a30" => "overseas",
    "a31" => "overseas",
    "a32" => "overseas",
    "a33" => "overseas",
    "a34" => "perspective",
    "a35" => "positive",
    "a36" => "resource",
    "a37" => "revenue",
    "a38" => "sectors",
    "a39" => "sites",
    "a40" => "traditional",
    "a41" => "traditions",
    "a42" => "traditions",
    "a43" => "transport",
    "a44" => "unaware",
    "a45" => "construction",
    "a46" => "disposal",
    "a47" => "economy",
    "a48" => "furthermore",
    "a49" => "generated",
    "a50" => "communities",
    "a51" => "sustain",
    "a52" => "technology",];
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
         $q1 = "<?php echo $A['a52'] ?>",
         $q2 = "<?php echo $A['a37'] ?>",
         $q3 = "<?php echo $A['a36'] ?>",
         $q4 = "<?php echo $A['a29'] ?>",
         $q5 = "<?php echo $A['a29'] ?>",
         $q6 = "<?php echo $A['a35'] ?>",
         $q7 = "<?php echo $A['a22'] ?>",
         $q8 = "<?php echo $A['a49'] ?>",
         $q9 = "<?php echo $A['a29'] ?>",
         $q10 = "<?php echo $A['a22'] ?>",
         $q11 = "<?php echo $A['a43'] ?>",
         $q12 = "<?php echo $A['a38'] ?>",
         $q13 = "<?php echo $A['a5'] ?>",
         $q14 = "<?php echo $A['a29'] ?>",
         $q15 = "<?php echo $A['a24'] ?>",
         $q16 = "<?php echo $A['a6'] ?>",
         $q17 = "<?php echo $A['a28'] ?>",
         $q18 = "<?php echo $A['a18'] ?>",
         $q19 = "<?php echo $A['a24'] ?>",
         $q20 = "<?php echo $A['a34'] ?>",
         $q21 = "<?php echo $A['a3'] ?>",
         $q22 = "<?php echo $A['a10'] ?>",
         $q23 = "<?php echo $A['a41'] ?>",
         $q24 = "<?php echo $A['a16'] ?>",
         $q25 = "<?php echo $A['a7'] ?>",
         $q26 = "<?php echo $A['a26'] ?>",
         $q27 = "<?php echo $A['a19'] ?>",
         $q28 = "<?php echo $A['a50'] ?>",
         $q29 = "<?php echo $A['a15'] ?>",
         $q30 = "<?php echo $A['a41'] ?>",
         $q31 = "<?php echo $A['a12'] ?>",
         $q32 = "<?php echo $A['a40'] ?>",
         $q33 = "<?php echo $A['a10'] ?>",
         $q34 = "<?php echo $A['a48'] ?>",
         $q35 = "<?php echo $A['a44'] ?>",
         $q36 = "<?php echo $A['a39'] ?>",
         $q37 = "<?php echo $A['a7'] ?>",
         $q38 = "<?php echo $A['a2'] ?>",
         $q39 = "<?php echo $A['a13'] ?>",
         $q40 = "<?php echo $A['a1'] ?>",
         $q41 = "<?php echo $A['a29'] ?>",
         $q42 = "<?php echo $A['a45'] ?>",
         $q43 = "<?php echo $A['a21'] ?>",
         $q44 = "<?php echo $A['a46'] ?>",
         $q45 = "<?php echo $A['a51'] ?>",
         $q46 = "<?php echo $A['a16'] ?>",
         $q47 = "<?php echo $A['a47'] ?>",
         $q48 = "<?php echo $A['a4'] ?>",
         $q49 = "<?php echo $A['a7'] ?>",
         $q50 = "<?php echo $A['a13'] ?>",
         $q51 = "<?php echo $A['a26'] ?>",
         $q52 = "<?php echo $A['a19'] ?>",
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