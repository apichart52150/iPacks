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
    $q1 = "";
    $q2 = "";
    $q3 = "";
    $q4 = "";
    $q5 = "";
    $q6 = "";
    $q7 = "";
    $q8 = "";
    $q9 = "";
    $q10 = "";
    $q11 = "";
    $q12 = "";
    $q13 = "";
    $q14 = "";
    $q15 = "";
    $q16 = "";
    $q17 = "";
    $q18 = "";
    $q19 = "";
    $q20 = "";
    $q21 = "";
    $q22 = "";
    $q23 = "";
    $q24 = "";
    $q25 = "";
    $q26 = "";
    $q27 = "";
    $q28 = "";
    $q29 = "";
    $q30 = "";
    $q31 = "";
    $q32 = "";
    $q33 = "";
    $q34 = "";
    $q35 = "";
    $q36 = "";
    $q37 = "";
    $q38 = "";
    $q39 = "";
    $q40 = "";
    $q41 = "";
    $q42 = "";
    $q43 = "";
    $q44 = "";
    $q45 = "";
    $q46 = "";
    $q47 = "";
    $q48 = "";
    $q49 = "";
    $q50 = "";
    $q51 = "";
    $q52 = "";
    $q53 = "";
    $q54 = "";
    $q55 = "";
    $q56 = "";
    $q57 = "";
    $q58 = "";
    $q59 = "";
    $q60 = "";
    $end = "";

    $a1 = "";
    $a2 = "";
    $a3 = "";
    $a4 = "";
    $a5 = "";
    $a6 = "";
    $a7 = "";
    $a8 = "";
    $a9 = "";
    $a10 = "";
    $a11 = "";
    $a12 = "";
    $a13 = "";
    $a14 = "";
    $a15 = "";
    $a16 = "";
    $a17 = "";
    $a18 = "";
    $a19 = "";
    $a20 = "";
    $a21 = "";
    $a22 = "";
    $a23 = "";
    $a24 = "";
    $a25 = "";
    $a26 = "";
    $a27 = "";
    $a28 = "";
    $a29 = "";
    $a30 = "";
    $a31 = "";
    $a32 = "";
    $a33 = "";
    $a34 = "";
    $a35 = "";
    $a36 = "";
    $a37 = "";
    $a38 = "";
    $a39 = "";
    $a40 = "";
    $a41 = "";
    $a42 = "";
    $a43 = "";
    $a44 = "";
    $a45 = "";
    $a46 = "";
    $a47 = "";
    $a48 = "";
    $a49 = "";
    $a50 = "";
    $a51 = "";
    $a52 = "";
    $a53 = "";
    $a54 = "";
    $a55 = "";
    $a56 = "";
    $a57 = "";
    $a58 = "";
    $a59 = "";
    $a60 = "";
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
                                <div class="drag">{{ $a57 }}</div>
                                <div class="drag">{{ $a58 }}</div>
                                <div class="drag">{{ $a59 }}</div>
                                <div class="drag">{{ $a60 }}</div>
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
                            {{$q57}}
                            <span class="font-weight-bold">57.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q58}}
                            <span class="font-weight-bold">58.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q59}}
                            <span class="font-weight-bold">59.</span>
                            <div class="input-con">
                                <div class="dropbox"></div>
                            </div>
                            {{$q60}}
                            <span class="font-weight-bold">60.</span>
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
         $q1 = "<?php echo $a ?>",
         $q2 = "<?php echo $a ?>",
         $q3 = "<?php echo $a ?>",
         $q4 = "<?php echo $a ?>",
         $q5 = "<?php echo $a ?>",
         $q6 = "<?php echo $a ?>",
         $q7 = "<?php echo $a ?>",
         $q8 = "<?php echo $a ?>",
         $q9 = "<?php echo $a ?>",
         $q10 = "<?php echo $a ?>",
         $q11 = "<?php echo $a ?>",
         $q12 = "<?php echo $a ?>",
         $q13 = "<?php echo $a ?>",
         $q14 = "<?php echo $a ?>",
         $q15 = "<?php echo $a ?>",
         $q16 = "<?php echo $a ?>",
         $q17 = "<?php echo $a ?>",
         $q18 = "<?php echo $a ?>",
         $q19 = "<?php echo $a ?>",
         $q20 = "<?php echo $a ?>",
         $q21 = "<?php echo $a ?>",
         $q22 = "<?php echo $a ?>",
         $q23 = "<?php echo $a ?>",
         $q24 = "<?php echo $a ?>",
         $q25 = "<?php echo $a ?>",
         $q26 = "<?php echo $a ?>",
         $q27 = "<?php echo $a ?>",
         $q28 = "<?php echo $a ?>",
         $q29 = "<?php echo $a ?>",
         $q30 = "<?php echo $a ?>",
         $q31 = "<?php echo $a ?>",
         $q32 = "<?php echo $a ?>",
         $q33 = "<?php echo $a ?>",
         $q34 = "<?php echo $a ?>",
         $q35 = "<?php echo $a ?>",
         $q36 = "<?php echo $a ?>",
         $q37 = "<?php echo $a ?>",
         $q38 = "<?php echo $a ?>",
         $q39 = "<?php echo $a ?>",
         $q40 = "<?php echo $a ?>",
         $q41 = "<?php echo $a ?>",
         $q42 = "<?php echo $a ?>",
         $q43 = "<?php echo $a ?>",
         $q44 = "<?php echo $a ?>",
         $q45 = "<?php echo $a ?>",
         $q46 = "<?php echo $a ?>",
         $q47 = "<?php echo $a ?>",
         $q48 = "<?php echo $a ?>",
         $q49 = "<?php echo $a ?>",
         $q50 = "<?php echo $a ?>",
         $q51 = "<?php echo $a ?>",
         $q52 = "<?php echo $a ?>",
         $q53 = "<?php echo $a ?>",
         $q54 = "<?php echo $a ?>",
         $q55 = "<?php echo $a ?>",
         $q56 = "<?php echo $a ?>",
         $q57 = "<?php echo $a ?>",
         $q58 = "<?php echo $a ?>",
         $q59 = "<?php echo $a ?>",
         $q60 = "<?php echo $a ?>",
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