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
    $q1 = "The use of";
    $q2 = "punishment for children is a contentious";
    $q3 = "nowadays. It is also emotive, and most people have strong feelings on the matter. Some people oppose the use of corporal punishment while others believe it can have a";
    $q4 = "effect on their children's behavior. This essay will outline some of these arguments for and against. There are various arguments put forward against smacking children. First of all,";
    $q5 = "abuse of any sort is an";
    $q6 = "of disapproval. If a parent smacks a child, it shows that the parent does not love the child. This feeling is";
    $q7 = "each time the child is hit and the child develops a feeling of being unwanted. This can result in a feeling of";
    $q8 = "and a loss of self-esteem and self-confidence. Secondly, the fact that a parent uses";
    $q9 = "force to punish a child sends a clear message to the child that";
    $q10 = "abuse is acceptable behaviour. The child is then";
    $q11 = "likely to use force against other people, too. As the saying goes, 'violence breeds violence'. There are, however, arguments in favour of using smacking occasionally to remediate a child's misbehaviour. When a child's behavior is out of control, for example during a tantrum, a light smack may be just enough to bring the child back to";
    $q12 = "behaviour. This does not mean";
    $q13 = "brutalizing the child but a single slap may be what is needed. There is, after, all, a big difference between";
    $q14 = "assault which puts the child's health and safety at risk, and a slap or smack to remediate behavior. There is also the argument that a parent who";
    $q15 = "their child and does not attempt to manage the child's behaviour can be accused of negligence in terms of helping the child to develop social skills. In";
    $q16 = ", it is important to";
    $q17 = "between a smack and";
    $q18 = "abuse. A smack may represent the concern of a loving parent to provide";
    $q19 = "for the child's social development,";
    $q20 = "";
    $q21 = "assault may show";
    $q22 = "psychotic tendencies in the parent. In the end, it boils down to the personal relationship which a parent develops with the child. Even parents who oppose corporal punishment will need to set";
    $q23 = "remedial";
    $end = "in place so that the child learns the difference between acceptable and unacceptable social behaviour.";

    $a1 = "alternative";
    $a2 = "conclusion";
    $a3 = "differentiate";
    $a4 = "guidelines";
    $a5 = "ignores";
    $a6 = "indication";
    $a7 = "insecurity";
    $a8 = "issue";
    $a9 = "normal";
    $a10 = "physical";
    $a11 = "physical";
    $a12 = "physical";
    $a13 = "physical";
    $a14 = "physical";
    $a15 = "physical";
    $a16 = "physical";
    $a17 = "physically";
    $a18 = "positive";
    $a19 = "reinforced";
    $a20 = "responses";
    $a21 = "subsequently";
    $a22 = "underlying";
    $a23 = "whereas";
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
                                <div class="drag">{{ $a11 }}</div>
                                <div class="drag">{{ $a12 }}</div>
                                <div class="drag">{{ $a13 }}</div>
                                <div class="drag">{{ $a14 }}</div>
                                <div class="drag">{{ $a15 }}</div>
                                <div class="drag">{{ $a16 }}</div>
                                <div class="drag">{{ $a17 }}</div>
                                <div class="drag">{{ $a18 }}</div>
                                <div class="drag">{{ $a19 }}</div>
                                <div class="drag">{{ $a20 }}</div>
                                <div class="drag">{{ $a21 }}</div>
                                <div class="drag">{{ $a22 }}</div>
                                <div class="drag">{{ $a23 }}</div>
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
                            {{$q11}}
                            <span class="font-weight-bold">11.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q12}}
                            <span class="font-weight-bold">12.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q13}}
                            <span class="font-weight-bold">13.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q14}}
                            <span class="font-weight-bold">14.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q15}}
                            <span class="font-weight-bold">15.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q16}}
                            <span class="font-weight-bold">16.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q17}}
                            <span class="font-weight-bold">17.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q18}}
                            <span class="font-weight-bold">18.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q19}}
                            <span class="font-weight-bold">19.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q20}}
                            <span class="font-weight-bold">20.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q21}}
                            <span class="font-weight-bold">21.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q22}}
                            <span class="font-weight-bold">22.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q23}}
                            <span class="font-weight-bold">23.</span>
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
         $q1 = "<?php echo $a10 ?>",
         $q2 = "<?php echo $a8 ?>",
         $q3 = "<?php echo $a18 ?>",
         $q4 = "<?php echo $a10 ?>",
         $q5 = "<?php echo $a6 ?>",
         $q6 = "<?php echo $a19 ?>",
         $q7 = "<?php echo $a7 ?>",
         $q8 = "<?php echo $a10 ?>",
         $q9 = "<?php echo $a10 ?>",
         $q10 = "<?php echo $a21 ?>",
         $q11 = "<?php echo $a9 ?>",
         $q12 = "<?php echo $a17 ?>",
         $q13 = "<?php echo $a10 ?>",
         $q14 = "<?php echo $a5 ?>",
         $q15 = "<?php echo $a2 ?>",
         $q16 = "<?php echo $a3 ?>",
         $q17 = "<?php echo $a10 ?>",
         $q18 = "<?php echo $a4 ?>",
         $q19 = "<?php echo $a23 ?>",
         $q20 = "<?php echo $a10 ?>",
         $q21 = "<?php echo $a22 ?>",
         $q22 = "<?php echo $a1 ?>",
         $q23 = "<?php echo $a20 ?>",
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