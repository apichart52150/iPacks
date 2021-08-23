<link rel="stylesheet" href="{{ asset('public/css/draggable.css') }}">
<style>
    .input-con {
        display: inline-block;
        position: relative;
    }

    .drag-container {
        margin-bottom: 25px;
    }

    .answers-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 10px 0;
    }

    .answers-container p {
        font-size: 16px;
    }

    .dropbox {
        border: 1px dashed #ccc;
        border-radius: 5px;
        padding: 3px;
        width: 100%;
        height: auto;
        min-width: 80px;
    }

    .dropbox .drag {margin: 0;
    }

    .grid-5 {
        grid-template-columns: repeat(6, 1fr);
    }

</style>
@php
    $q1 = "Many people have to work under somebody's supervision. In most cases an employee does not choose his or her boss, unless a supervisor is elected. In the following";
    $q2 = 'I will list the most important qualities of my "ideal boss". First of all, he must be impartial. I believe that it is very important to make a';
    $q3 = "decision, think about somebody's";
    $q4 = ", impartially. For";
    $q5 = ", my friend is a supervisor in a dairy mill. It is his family's business so a lot of his relatives work there. But he never";
    $q6 = "someone because he or she is his family. I think it is a good quality for a boss. Second of all, my " .'"ideal boss"' ." must be honest, patient and attentive. He should pay attention to people's feelings, encourage them by increasing their salary, listen to their suggestions about improving";
    $q7 = "conditions and productivity. For";
    $q8 = ", if he is not satisfied with the result he should understand the origin of the problem and explain to people how to fix it. In addition, he must know how to solve";
    $q9 = "that can arise between employees. Another important quality of a boss is the ability to make the right decisions and to learn from other people's mistakes.";
    $q10 = ", I think a good boss must value his or her employees because the profit directly depends on the people who work there. In";
    $end = ", I think a good boss should be able to make his people enjoy the work they are doing and encourage their diligence.";

    $a1 = "conclusion";
    $a2 = "conflicts";
    $a3 = "finally";
    $a4 = "instance";
    $a5 = "instance";
    $a6 = "labour";
    $a7 = "paragraphs";
    $a8 = "promotes";
    $a9 = "promotion";
    $a10 = "technical";
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
                                <div class="drag">{{ $a1 }}</div>
                                <div class="drag">{{ $a2 }}</div>
                                <div class="drag">{{ $a3 }}</div>
                                <div class="drag">{{ $a4 }}</div>
                                <div class="drag">{{ $a5 }}</div>
                                <div class="drag">{{ $a6 }}</div>
                                <div class="drag">{{ $a7 }}</div>
                                <div class="drag">{{ $a8 }}</div>
                                <div class="drag">{{ $a9 }}</div>
                                <div class="drag">{{ $a10 }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark p-2" style="line-height: 35px;">
                            {{$q1}}
                            <span class="font-weight-bold">1.</span> 
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q2}}
                            <span class="font-weight-bold">2.</span> 
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q3}}
                            <span class="font-weight-bold">3.</span> 
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q4}}
                            <span class="font-weight-bold">4.</span> 
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q5}}
                            <span class="font-weight-bold">5.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q6}}
                            <span class="font-weight-bold">6.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q7}}
                            <span class="font-weight-bold">7.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q8}}
                            <span class="font-weight-bold">8.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q9}}
                            <span class="font-weight-bold">9.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q10}}
                            <span class="font-weight-bold">10.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$end}}
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
    $("#show-answer").prop("disabled", true);

    const answers = [
         $q1 = "<?php echo $a7 ?>",
         $q2 = "<?php echo $a10 ?>",
         $q3 = "<?php echo $a9 ?>",
         $q4 = "<?php echo $a4 ?>",
         $q5 = "<?php echo $a8 ?>",
         $q6 = "<?php echo $a6 ?>",
         $q7 = "<?php echo $a4 ?>",
         $q8 = "<?php echo $a2 ?>",
         $q9 = "<?php echo $a3 ?>",
         $q10 = "<?php echo $a1 ?>",
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

        let droppables = $(".dropbox");

        droppables.each((idx, item) => {
            if($(item).children().text().trim() == answers[idx]) {
                checkAnswer($(item).children(), 'correct');
            } else {
                checkAnswer($(item).children(), 'incorrect');
            }
        });

        $(".drag").draggable({
            disabled: true,
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