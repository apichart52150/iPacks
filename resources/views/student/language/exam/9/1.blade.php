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

    .dropbox .drag {margin: 0;
    }

    .grid-5 {
        grid-template-columns: repeat(6, 1fr);
    }

</style>
@php
    $question = [
        'q1' => "From my everyday experience and observation I think that artists as well as scientists bring many",
        'q2' => "to society. It is a",
        'q3' => "question whether the",
        'q4' => "of artists are more or less than the",
        'q5' => "of scientists to society. For several reasons, which I will mention below, I think that both types are valuable for every society. The",
        'q6' => "of artists to the society are very essential. Art can form a person's spiritual sense, their views and personalities. People learn history, the",
        'q7' => "of their country through art. We also watch movies that entertain and at the same time extend our",
        'q8' => "of interests. Another important",
        'q9' => "of this is that art is an ancient means of",
        'q10' => ". In old times people depicted the herds of wild animals on the walls of their caves. They performed different rituals around the fireplace asking their gods for health, good harvest and weather. Our language is a result of people's need to",
        'q11' => ". On the other side, the",
        'q12' => "of scientists could not be exaggerated. All humankind is indebted to the scientists because of their work and",
        'q13' => ". Scientists make our life easier. We have cars and airplanes to move fast from one place to another. We have microwaves and a host of preprocessed food to make the cooking much easier. We have different ",
        'q14' => "that simplify all we do.",
        'q15' => ", scientists are making great",
        'q16' => "in medicine that make our life longer and happier. Nowadays people have a great opportunity to do many things faster by use of",
        'q17' => ". To sum up, I believe that artists nourish our souls when scientists and",
        'q18' => "feed our minds. So we cannot",
        'q19' => "or",
    ];

    $endQuestion = "one of them.";

    $choice = [
        'c1' => "achievements",
        'c2' => "achievements",
        'c3' => "aspect",
        'c4' => "benefits",
        'c5' => "communicate",
        'c6' => "communication",
        'c7' => "computers",
        'c8' => "contribution",
        'c9' => "contributions",
        'c10' => "contributions",
        'c11' => "contributions",
        'c12' => "controversial",
        'c13' => "devices",
        'c14' => "eliminate",
        'c15' => "finally",
        'c16' => "range",
        'c17' => "technology",
        'c18' => "traditions",
        'c19' => "underestimate",
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
                                @foreach ($choice as $choices)
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
                            @for ($i = 1; $i <= count($question); $i++)
                                {{ $question['q'.$i] }}
                                <div class="dropbox"></div>
                            @endfor
                            {{ $endQuestion }}
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
<script>

    const answers = [
         $q1 = "BENEFITS",
         $q2 = "CONTROVERSIAL",
         $q3 = "CONTRIBUTIONS",
         $q4 = "CONTRIBUTIONS",
         $q5 = "CONTRIBUTIONS",
         $q6 = "TRADITIONS",
         $q7 = "RANGE",
         $q8 = "ASPECT",
         $q9 = "COMMUNICATION",
         $q10 = "COMMUNICATE",
         $q11 = "CONTRIBUTION",
         $q12 = "ACHIEVEMENTS",
         $q13 = "DEVICES",
         $q14 = "FINALLY",
         $q15 = "ACHIEVEMENTS",
         $q16 = "COMPUTERS",
         $q17 = "TECHNOLOGY",
         $q18 = "ELIMINATE",
         $q19 = "UNDERESTIMATE",
    ];

    let score = 0

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

        let droppables = $(".dropbox");

        droppables.each((idx, item) => {
            if($(item).children().text().trim() == answers[idx].toLowerCase()) {
                checkAnswer($(item).children(), 'correct');
                score++
            } else {
                checkAnswer($(item).children(), 'incorrect');
            }
        });

        $(".drag").draggable({
            disabled: true,
        });

        alert("Your score is " + score)
        $("#check-answer").prop("disabled", true);
    });

    function checkAnswer(ele, status) {
        let bgColor;

        status == 'correct' ? (bgColor = 'color-success') : (bgColor = 'color-danger')

        ele.addClass(bgColor)
    }
</script>
@stop