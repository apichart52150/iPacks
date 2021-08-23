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
    $q1 = "Developing a nation's";
    $q2 = "is";
    $q3 = "a key";
    $q4 = "in improving the nation's we''-being. If a country has a wide";
    $q5 = "of";
    $q6 = "";
    $q7 = "";
    $q8 = ", it can develop its";
    $q9 = "so that everyone";
    $q10 = ". However, the";
    $q11 = "on the %91bottom line' should not mean that important social";
    $q12 = "are";
    $q13 = ". This essay will outline the need for a healthy balance between";
    $q14 = "development and a";
    $q15 = "on social";
    $q16 = ".";
    $q17 = "development is important for a number of reasons. First of all, a country with a healthy budget surplus can";
    $q18 = "heavily in its";
    $q19 = ". This includes services and";
    $q20 = "such as public";
    $q21 = ", health-care, education and";
    $q22 = "";
    $q23 = ". If the nation's";
    $q24 = "is";
    $q25 = "developed, everyone in society";
    $q26 = ". Developing the";
    $q27 = "will also";
    $q28 = "employment opportunities as it will attract foreign";
    $q29 = ". More";
    $q30 = "means more money for people to spend in the retail";
    $q31 = ". A";
    $q32 = "upward spiral of affluence and material comfort can result. However, there are a number of social";
    $q33 = "which should not be";
    $q34 = "at the expense of wealth";
    $q35 = ". If the nation's";
    $q36 = "";
    $q37 = "is on industry and";
    $q38 = "";
    $q39 = "";
    $q40 = ", there is a danger that corners will be cut in terms of safety and health";
    $q41 = ". Take, for example, the industrial development";
    $q42 = "of Map Ta Phut in the Rayong district of Thailand. A number of foreign";
    $q43 = "have been encouraged to set up industrial activities there. However,";
    $q44 = "";
    $q45 = "for health and safety of the";
    $q46 = "in the";
    $q47 = "have resulted in many people becoming sick from the industrial pollution caused by the factories. The government is unwilling to take preventive action to protect the local population from the effects of the industrial activities because it may lose the foreign";
    $q48 = ". The detrimental effects on people's health and on the";
    $q49 = "at large should not be";
    $q50 = "on the grounds of";
    $q51 = "development. To";
    $q52 = "up, while industrial activity is important for a nation's";
    $q53 = "development, the government needs to have";
    $q54 = "in place to safeguard the";
    $q55 = "and to";
    $q56 = "pollution of the fragile";
    $end = ".";

    $a1 = "adequately";
    $a2 = "area";
    $a3 = "available";
    $a4 = "benefits";
    $a5 = "benefits";
    $a6 = "communication";
    $a7 = "create";
    $a8 = "economic";
    $a9 = "economic";
    $a10 = "economic";
    $a11 = "economic";
    $a12 = "transportation";
    $a13 = "economy";
    $a14 = "economy";
    $a15 = "environment";
    $a16 = "environment";
    $a17 = "exploiting";
    $a18 = "facilities";
    $a19 = "factor";
    $a20 = "factors";
    $a21 = "financial";
    $a22 = "focus";
    $a23 = "focus";
    $a24 = "focus";
    $a25 = "ignored";
    $a26 = "ignored";
    $a27 = "ignored";
    $a28 = "infrastructure";
    $a29 = "infrastructure";
    $a30 = "infrastructure";
    $a31 = "invest";
    $a32 = "investment";
    $a33 = "investors";
    $a34 = "investors";
    $a35 = "issues";
    $a36 = "issues";
    $a37 = "issues";
    $a38 = "creation";
    $a39 = "insufficient";
    $a40 = "jobs";
    $a41 = "regulations";
    $a42 = "regulations";
    $a43 = "technology";
    $a44 = "minimize";
    $a45 = "obviously";
    $a46 = "positive";
    $a47 = "primary";
    $a48 = "primary";
    $a49 = "range";
    $a50 = "residents";
    $a51 = "residents";
    $a52 = "resources";
    $a53 = "resources";
    $a54 = "sector";
    $a55 = "site";
    $a56 = "sum";
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
                                <div class="drag">{{ $a50 }}</div>
                                <div class="drag">{{ $a51 }}</div>
                                <div class="drag">{{ $a52 }}</div>
                                <div class="drag">{{ $a53 }}</div>
                                <div class="drag">{{ $a54 }}</div>
                                <div class="drag">{{ $a55 }}</div>
                                <div class="drag">{{ $a56 }}</div>
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
                            {{$q50}}
                            <span class="font-weight-bold">50.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q51}}
                            <span class="font-weight-bold">51.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q52}}
                            <span class="font-weight-bold">52.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q53}}
                            <span class="font-weight-bold">53.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q54}}
                            <span class="font-weight-bold">54.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q55}}
                            <span class="font-weight-bold">55.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q56}}
                            <span class="font-weight-bold">56.</span>
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
         $q1 = "<?php echo $a13 ?>",
         $q2 = "<?php echo $a45 ?>",
         $q3 = "<?php echo $a19 ?>",
         $q4 = "<?php echo $a49 ?>",
         $q5 = "<?php echo $a21 ?>",
         $q6 = "<?php echo $a52 ?>",
         $q7 = "<?php echo $a3 ?>",
         $q8 = "<?php echo $a28 ?>",
         $q9 = "<?php echo $a4 ?>",
         $q10 = "<?php echo $a22 ?>",
         $q11 = "<?php echo $a20 ?>",
         $q12 = "<?php echo $a25 ?>",
         $q13 = "<?php echo $a8 ?>",
         $q14 = "<?php echo $a22 ?>",
         $q15 = "<?php echo $a35 ?>",
         $q16 = "<?php echo $a8 ?>",
         $q17 = "<?php echo $a31 ?>",
         $q18 = "<?php echo $a28 ?>",
         $q19 = "<?php echo $a18 ?>",
         $q20 = "<?php echo $a12 ?>",
         $q21 = "<?php echo $a6 ?>",
         $q22 = "<?php echo $a43 ?>",
         $q23 = "<?php echo $a28 ?>",
         $q24 = "<?php echo $a1 ?>",
         $q25 = "<?php echo $a4 ?>",
         $q26 = "<?php echo $a13 ?>",
         $q27 = "<?php echo $a7 ?>",
         $q28 = "<?php echo $a33 ?>",
         $q29 = "<?php echo $a40 ?>",
         $q30 = "<?php echo $a54 ?>",
         $q31 = "<?php echo $a46 ?>",
         $q32 = "<?php echo $a35 ?>",
         $q33 = "<?php echo $a25 ?>",
         $q34 = "<?php echo $a38 ?>",
         $q35 = "<?php echo $a47 ?>",
         $q36 = "<?php echo $a22 ?>",
         $q37 = "<?php echo $a17 ?>",
         $q38 = "<?php echo $a47 ?>",
         $q39 = "<?php echo $a52 ?>",
         $q40 = "<?php echo $a35 ?>",
         $q41 = "<?php echo $a55 ?>",
         $q42 = "<?php echo $a33 ?>",
         $q43 = "<?php echo $a39 ?>",
         $q44 = "<?php echo $a41 ?>",
         $q45 = "<?php echo $a50 ?>",
         $q46 = "<?php echo $a2 ?>",
         $q47 = "<?php echo $a32 ?>",
         $q48 = "<?php echo $a15 ?>",
         $q49 = "<?php echo $a25 ?>",
         $q50 = "<?php echo $a8 ?>",
         $q51 = "<?php echo $a56 ?>",
         $q52 = "<?php echo $a8 ?>",
         $q53 = "<?php echo $a41 ?>",
         $q54 = "<?php echo $a50 ?>",
         $q55 = "<?php echo $a44 ?>",
         $q56 = "<?php echo $a15 ?>",
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