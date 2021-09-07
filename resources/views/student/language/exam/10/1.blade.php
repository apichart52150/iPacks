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
$Q=["q1" => "In every country in the world the police force is an important",
"q2" => "in preserving law and order so that society can",
"q3" => "effectively. In industrialized nations, police officers are generally paid decent salaries and can enjoy a comfortable life-style. They are highly regarded by the population. In some developing countries, however, police officers receive low salaries and enjoy low",
"q4" => "among society. This latter",
"q5" => "can lead to serious problems. This essay will outline some of these problems. The",
"q6" => "of law and order is important for a number of reasons. First of all, citizens need to feel safe and protected as they carry on their daily lives. If life is routinely",
"q7" => "by criminal activity, society",
"q8" => "less effectively. An",
"q9" => "of this is the existence of mafia gangs who intimidate business people and extort %91protection money'. While it is",
"q10" => "impossible to eradicate all forms of mafia activity, it is important to",
"q11" => "these gangs' activities by",
"q12" => "laws to reduce such intimidation. If",
"q13" => "gangs gain the upper hand, then society is at risk of disintegration, and anarchy can follow. One way to",
"q14" => "a healthy balance in the fight against crime is to",
"q15" => "that police officers are",
"q16" => "rewarded for their hard work. If the police force",
"q17" => "of under-paid officers with commensurately little education and training, then there is a great risk that officers will try to",
"q18" => "their salaries in other ways. One such way would be to accept bribes from criminals. If this happens, then criminal",
"q19" => "would have no fear of being brought to justice. Crime would, as a result, thrive.",
"q20" => ", the police force would become a de-facto part of the mafia underworld itself,",
"q21" => "increasing the level of organized crime. A society in which ordinary citizens feared police officers rather than respected them would find itself in a downward spiral of",
];
$end = "activities. To avoid such a situation, then, it is of the greatest importance that the nation's police force should be well-paid, effectively trained, and as a result highly respected, in order to avoid a society governed by bribery and corruption.";
$A=[
"a1" => "adeqately",
"a2" => "affected",
"a3" => "consists",
"a4" => "element",
"a5" => "elements",
"a6" => "enforcing",
"a7" => "ensure",
"a8" => "function",
"a9" => "functions",
"a10" => "furthermore",
"a11" => "illegal",
"a12" => "illegal",
"a13" => "illustration",
"a14" => "maintain",
"a15" => "maintenance",
"a16" => "restrict",
"a17" => "scenario",
"a18" => "status",
"a19" => "supplement",
"a20" => "thereby",
"a21" => "virtually",];
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
        $q1 = "<?php echo $A['a4'] ?>",
        $q2 = "<?php echo $A['a8'] ?>",
        $q3 = "<?php echo $A['a18'] ?>",
        $q4 = "<?php echo $A['a17'] ?>",
        $q5 = "<?php echo $A['a15'] ?>",
        $q6 = "<?php echo $A['a2'] ?>",
        $q7 = "<?php echo $A['a9'] ?>",
        $q8 = "<?php echo $A['a13'] ?>",
        $q9 = "<?php echo $A['a21'] ?>",
        $q10 = "<?php echo $A['a16'] ?>",
        $q11 = "<?php echo $A['a6'] ?>",
        $q12 = "<?php echo $A['a11'] ?>",
        $q13 = "<?php echo $A['a14'] ?>",
        $q14 = "<?php echo $A['a7'] ?>",
        $q15 = "<?php echo $A['a1'] ?>",
        $q16 = "<?php echo $A['a3'] ?>",
        $q17 = "<?php echo $A['a19'] ?>",
        $q18 = "<?php echo $A['a5'] ?>",
        $q19 = "<?php echo $A['a10'] ?>",
        $q20 = "<?php echo $A['a20'] ?>",
        $q21 = "<?php echo $A['a11'] ?>",
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
</script>
@stop