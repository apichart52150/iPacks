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
    $q1 = "Since the development of advanced";
    $q2 = "towards the end of the last century, personal";
    $q3 = "have played an increasingly important";
    $q4 = "in our lives. One of the greatest";
    $q5 = "has been the use of";
    $q6 = "in school. This essay will examine some of the arguments for and against the increased use of";
    $q7 = "in education. There are a number of";
    $q8 = "";
    $q9 = "of using";
    $q10 = "in education. First of all, the";
    $q11 = "of the internet means that learners can";
    $q12 = "a wide";
    $q13 = "of knowledge at the click of a mouse. This";
    $q14 = "of information covers a variety of school subjects, from science to language studies. While in the past students had to search through";
    $q15 = "of encyclopaedias and reference books to broaden their knowledge, nowadays they can use one of the many search engines to find information more quickly and conveniently. Another improvement is the fact that students can now write their";
    $q16 = "using word";
    $q17 = "software, rather than writing everything by hand. This means that presentation is usually neater and better organized, and";
    $q18 = "can include";
    $q19 = "and diagrams which are also downloaded on-line. Not all changes, however, can be viewed in a";
    $q20 = "light. While internet connectivity provides a quicker, more convenient means of";
    $q21 = "information, there are risks and dangers";
    $q22 = "in using the internet without";
    $q23 = ". A number of";
    $q24 = "contain information which may be dangerous or";
    $q25 = "and so some sort of censorship is necessary to protect young people. This censorship is best provided by trained teachers. In addition, not all schools have";
    $q26 = "internet connectivity and so these schools are at a disadvantage. A further disadvantage is that the";
    $q27 = "in school need regular";
    $q28 = "and so the school needs to employ";
    $q29 = "staff for this. Not only this, but teachers also need proper training to";
    $q30 = "";
    $q31 = "into their school curriculum. In";
    $q32 = ", while";
    $q33 = "have certainly improved education, there are";
    $q34 = "to be considered in order to";
    $q35 = "their effectiveness.";
    $q36 = "";
    $q37 = "can";
    $q38 = "the learning";
    $q39 = "but it should be seen as just one more tool";
    $q40 = "to schools to provide a well-balanced education. Used sensibly and sensitively, and in conjunction with effective classroom teaching,";
    $q41 = "can have a";
    $q42 = "";
    $end = "on moulding young people's brains.";

    $a1 = "access";
    $a2 = "accessing";
    $a3 = "adequate";
    $a4 = "assignments";
    $a5 = "assignments";
    $a6 = "availability";
    $a7 = "available";
    $a8 = "beneficial";
    $a9 = "computer";
    $a10 = "computers";
    $a11 = "computers";
    $a12 = "computers";
    $a13 = "computers";
    $a14 = "computers";
    $a15 = "computers";
    $a16 = "computers";
    $a17 = "computers";
    $a18 = "conclusion";
    $a19 = "enhance";
    $a20 = "evaluate";
    $a21 = "illustrations";
    $a22 = "impact";
    $a23 = "impacts";
    $a24 = "impacts";
    $a25 = "inaccurate";
    $a26 = "integrate";
    $a27 = "involved";
    $a28 = "issues";
    $a29 = "maintenance";
    $a30 = "positive";
    $a31 = "positive";
    $a32 = "process";
    $a33 = "processing";
    $a34 = "range";
    $a35 = "range";
    $a36 = "restrictions";
    $a37 = "role";
    $a38 = "sites";
    $a39 = "technical";
    $a40 = "technology";
    $a41 = "technology";
    $a42 = "volumes";
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
         $q1 = "<?php echo $a40 ?>",
         $q2 = "<?php echo $a10 ?>",
         $q3 = "<?php echo $a37 ?>",
         $q4 = "<?php echo $a23 ?>",
         $q5 = "<?php echo $a10 ?>",
         $q6 = "<?php echo $a10 ?>",
         $q7 = "<?php echo $a30 ?>",
         $q8 = "<?php echo $a23 ?>",
         $q9 = "<?php echo $a10 ?>",
         $q10 = "<?php echo $a6 ?>",
         $q11 = "<?php echo $a1 ?>",
         $q12 = "<?php echo $a34 ?>",
         $q13 = "<?php echo $a34 ?>",
         $q14 = "<?php echo $a42 ?>",
         $q15 = "<?php echo $a4 ?>",
         $q16 = "<?php echo $a33 ?>",
         $q17 = "<?php echo $a4 ?>",
         $q18 = "<?php echo $a21 ?>",
         $q19 = "<?php echo $a30 ?>",
         $q20 = "<?php echo $a2 ?>",
         $q21 = "<?php echo $a27 ?>",
         $q22 = "<?php echo $a36 ?>",
         $q23 = "<?php echo $a38 ?>",
         $q24 = "<?php echo $a25 ?>",
         $q25 = "<?php echo $a3 ?>",
         $q26 = "<?php echo $a10 ?>",
         $q27 = "<?php echo $a29 ?>",
         $q28 = "<?php echo $a39 ?>",
         $q29 = "<?php echo $a26 ?>",
         $q30 = "<?php echo $a10 ?>",
         $q31 = "<?php echo $a18 ?>",
         $q32 = "<?php echo $a10 ?>",
         $q33 = "<?php echo $a28 ?>",
         $q34 = "<?php echo $a20 ?>",
         $q35 = "<?php echo $a9 ?>",
         $q36 = "<?php echo $a40 ?>",
         $q37 = "<?php echo $a19 ?>",
         $q38 = "<?php echo $a32 ?>",
         $q39 = "<?php echo $a7 ?>",
         $q40 = "<?php echo $a10 ?>",
         $q41 = "<?php echo $a8 ?>",
         $q42 = "<?php echo $a22 ?>",
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