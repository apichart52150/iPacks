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
    $q1 = "Education is a very important";
    $q2 = "around the";
    $q3 = ". A nation's development";
    $q4 = "on the government's";
    $q5 = "in quality education. Effective learning depends to a large extent on the";
    $q6 = "and teaching";
    $q7 = "used in schools. Some nations prefer a";
    $q8 = "learning";
    $q9 = ", where the teacher plays a central";
    $q10 = ". In other countries, a student-centred";
    $q11 = "is preferred. This essay will outline the strengths and weaknesses of both";
    $q12 = ". There are some advantages of a";
    $q13 = ", teacher-focused";
    $q14 = "to learning. In many countries, there is a heavy";
    $q15 = "on teacher";
    $q16 = ". A typical classroom";
    $q17 = "would";
    $q18 = "the teacher giving a";
    $q19 = "about the";
    $q20 = ", with the students copying notes and rote-learning the content for homework. While this";
    $q21 = "";
    $q22 = "the students only tangentially since they play a very";
    $q23 = "";
    $q24 = "in the learning";
    $q25 = ", many learners feel comfortable with this";
    $q26 = "and have developed strengths which suit this";
    $q27 = "of teaching. They enjoy the heavy";
    $q28 = "on teacher";
    $q29 = ". In addition, this";
    $q30 = "of teaching is relatively easy for the teacher. Lesson planning is simple and";
    $q31 = ", and the";
    $q32 = "amount of time can be spent on feeding the learners the information they need to pass the end of year examinations. There are, however, limitations to this";
    $q33 = "of teaching. In less";
    $q34 = "classrooms, the";
    $q35 = "is on learner autonomy. Learners are encouraged to take a more active";
    $q36 = "in their own learning";
    $q37 = ". In such a learning";
    $q38 = ", the end content is not as important as the learning";
    $q39 = "which";
    $q40 = "during the lesson. Skills such as the ability to";
    $q41 = ",";
    $q42 = "and question are more important than the ability to learn something by heart. Many people who prefer a student-centred";
    $q43 = "argue that today's society needs people who are able to";
    $q44 = "self-regulation and the ability to be proactive rather than people whose heads are simply filled with information. To";
    $q45 = "up, there are both strengths sand weaknesses to both";
    $q46 = ". Since learners have different preferences regarding learning";
    $q47 = ", it makes sense to";
    $q48 = "";
    $q49 = "of both teaching";
    $end = "in the classroom, so that all learners can make full use of their learning strengths.";

    $a1 = "analyse";
    $a2 = "approach";
    $a3 = "approach";
    $a4 = "approach";
    $a5 = "approach";
    $a6 = "demonstrate";
    $a7 = "elements";
    $a8 = "environment";
    $a9 = "evaluate";
    $a10 = "focus";
    $a11 = "focused";
    $a12 = "globe";
    $a13 = "incorporate";
    $a14 = "input";
    $a15 = "input";
    $a16 = "investment";
    $a17 = "involve";
    $a18 = "involves";
    $a19 = "issue";
    $a20 = "lecture";
    $a21 = "maximum";
    $a22 = "method";
    $a23 = "methodologies";
    $a24 = "methodologies";
    $a25 = "methodology";
    $a26 = "occur";
    $a27 = "passive";
    $a28 = "process";
    $a29 = "process";
    $a30 = "processes";
    $a31 = "reliance";
    $a32 = "reliance";
    $a33 = "relies";
    $a34 = "role";
    $a35 = "role";
    $a36 = "role";
    $a37 = "traditional";
    $a38 = "traditional";
    $a39 = "advantages";
    $a40 = "scenario";
    $a41 = "style";
    $a42 = "style";
    $a43 = "style";
    $a44 = "style";
    $a45 = "styles";
    $a46 = "styles";
    $a47 = "styles";
    $a48 = "sum";
    $a49 = "topic";
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
                                <div class="drag">{{ $a24 }}</div>
                                <div class="drag">{{ $a25 }}</div>
                                <div class="drag">{{ $a26 }}</div>
                                <div class="drag">{{ $a27 }}</div>
                                <div class="drag">{{ $a28 }}</div>
                                <div class="drag">{{ $a29 }}</div>
                                <div class="drag">{{ $a30 }}</div>
                                <div class="drag">{{ $a31 }}</div>
                                <div class="drag">{{ $a32 }}</div>
                                <div class="drag">{{ $a33 }}</div>
                                <div class="drag">{{ $a34 }}</div>
                                <div class="drag">{{ $a35 }}</div>
                                <div class="drag">{{ $a36 }}</div>
                                <div class="drag">{{ $a37 }}</div>
                                <div class="drag">{{ $a38 }}</div>
                                <div class="drag">{{ $a39 }}</div>
                                <div class="drag">{{ $a40 }}</div>
                                <div class="drag">{{ $a41 }}</div>
                                <div class="drag">{{ $a42 }}</div>
                                <div class="drag">{{ $a43 }}</div>
                                <div class="drag">{{ $a44 }}</div>
                                <div class="drag">{{ $a45 }}</div>
                                <div class="drag">{{ $a46 }}</div>
                                <div class="drag">{{ $a47 }}</div>
                                <div class="drag">{{ $a48 }}</div>
                                <div class="drag">{{ $a49 }}</div>
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
                            {{$q24}}
                            <span class="font-weight-bold">24.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q25}}
                            <span class="font-weight-bold">25.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q26}}
                            <span class="font-weight-bold">26.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q27}}
                            <span class="font-weight-bold">27.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q28}}
                            <span class="font-weight-bold">28.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q29}}
                            <span class="font-weight-bold">29.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q30}}
                            <span class="font-weight-bold">30.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q31}}
                            <span class="font-weight-bold">31.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q32}}
                            <span class="font-weight-bold">32.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q33}}
                            <span class="font-weight-bold">33.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q34}}
                            <span class="font-weight-bold">34.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q35}}
                            <span class="font-weight-bold">35.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q36}}
                            <span class="font-weight-bold">36.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q37}}
                            <span class="font-weight-bold">37.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q38}}
                            <span class="font-weight-bold">38.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q39}}
                            <span class="font-weight-bold">39.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q40}}
                            <span class="font-weight-bold">40.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q41}}
                            <span class="font-weight-bold">41.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q42}}
                            <span class="font-weight-bold">42.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q43}}
                            <span class="font-weight-bold">43.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q44}}
                            <span class="font-weight-bold">44.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q45}}
                            <span class="font-weight-bold">45.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q46}}
                            <span class="font-weight-bold">46.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q47}}
                            <span class="font-weight-bold">47.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q48}}
                            <span class="font-weight-bold">48.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q49}}
                            <span class="font-weight-bold">49.</span>
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


@section('button-control')
    <button id="check-answer" class="btn btn-info">Check Answers</button>
@endsection

@section('js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
<script>
    $("#show-answer").prop("disabled", true);

    const answers = [
         $q1 = "<?php echo $a19 ?>",
         $q2 = "<?php echo $a12 ?>",
         $q3 = "<?php echo $a33 ?>",
         $q4 = "<?php echo $a16 ?>",
         $q5 = "<?php echo $a25 ?>",
         $q6 = "<?php echo $a45 ?>",
         $q7 = "<?php echo $a37 ?>",
         $q8 = "<?php echo $a41 ?>",
         $q9 = "<?php echo $a34 ?>",
         $q10 = "<?php echo $a2 ?>",
         $q11 = "<?php echo $a23 ?>",
         $q12 = "<?php echo $a39 ?>",
         $q13 = "<?php echo $a2 ?>",
         $q14 = "<?php echo $a31 ?>",
         $q15 = "<?php echo $a14 ?>",
         $q16 = "<?php echo $a40 ?>",
         $q17 = "<?php echo $a17 ?>",
         $q18 = "<?php echo $a20 ?>",
         $q19 = "<?php echo $a49 ?>",
         $q20 = "<?php echo $a2 ?>",
         $q21 = "<?php echo $a18 ?>",
         $q22 = "<?php echo $a27 ?>",
         $q23 = "<?php echo $a34 ?>",
         $q24 = "<?php echo $a28 ?>",
         $q25 = "<?php echo $a22 ?>",
         $q26 = "<?php echo $a41 ?>",
         $q27 = "<?php echo $a31 ?>",
         $q28 = "<?php echo $a14 ?>",
         $q29 = "<?php echo $a41 ?>",
         $q30 = "<?php echo $a11 ?>",
         $q31 = "<?php echo $a21 ?>",
         $q32 = "<?php echo $a41 ?>",
         $q33 = "<?php echo $a37 ?>",
         $q34 = "<?php echo $a10 ?>",
         $q35 = "<?php echo $a34 ?>",
         $q36 = "<?php echo $a28 ?>",
         $q37 = "<?php echo $a8 ?>",
         $q38 = "<?php echo $a30 ?>",
         $q39 = "<?php echo $a26 ?>",
         $q40 = "<?php echo $a1 ?>",
         $q41 = "<?php echo $a9 ?>",
         $q42 = "<?php echo $a2 ?>",
         $q43 = "<?php echo $a6 ?>",
         $q44 = "<?php echo $a48 ?>",
         $q45 = "<?php echo $a23 ?>",
         $q46 = "<?php echo $a45 ?>",
         $q47 = "<?php echo $a13 ?>",
         $q48 = "<?php echo $a7 ?>",
         $q49 = "<?php echo $a45 ?>",
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