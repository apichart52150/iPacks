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
    $q1 = "Western";
    $q2 = "has proved to be very popular over the last few";
    $q3 = "and has had a strong";
    $q4 = "on countries all around the world. American and European popular music and Hollywood movies have become the benchmark standard all around the";
    $q5 = ", and this has had a";
    $q6 = "";
    $q7 = "on local folk";
    $q8 = ". This essay will outline some of these ";
    $q9 = "";
    $q10 = "on";
    $q11 = "";
    $q12 = "and suggest ways in which this";
    $q13 = "can be";
    $q14 = ". Western";
    $q15 = "and behaviour has had a";
    $q16 = "effect all around the";
    $q17 = ". Since rock and roll music was first played in the USA after the First World War, its popularity has increased";
    $q18 = ". This music was also";
    $q19 = "with a sense of rebellion since it was so very different from the music enjoyed by the older";
    $q20 = ". With the advent of improved broadcasting, the music was heard in all corners of the world. A popular";
    $q21 = "of rebellion was also";
    $q22 = ", something which was largely";
    $q23 = "unknown in";
    $q24 = "";
    $q25 = "such as in Asian nations. The";
    $q26 = "continues until today. Movies, also, have had a great";
    $q27 = "on people's";
    $q28 = "and behaviour. The popular";
    $q29 = "of rebellion was portrayed on the big screen and idols such as James Dean became anti-heroic figures. Cinema content also became less censored and promiscuity was portrayed as a socially accepted";
    $q30 = ". Such";
    $q31 = "behaviour has had a detrimental effect on more";
    $q32 = "nations'";
    $q33 = ". What can be done to stem this";
    $q34 = "? Several nations have tried to censor or even ban such popular";
    $q35 = ". However,";
    $q36 = "rarely succeeds, and a more sophisticated";
    $q37 = "is needed. Governments should";
    $q38 = "money on educating young";
    $q39 = "about their own";
    $q40 = "heritage and";
    $q41 = ". Local musical instruments and other art-forms need to be singled out for conservation, and education programmes need to be";
    $q42 = "at schools.";
    $q43 = "models need to be";
    $q44 = "for the younger";
    $q45 = "to follow. For example local pop musicians can encourage young people to learn how to play";
    $q46 = "instruments. National movie stars could model";
    $q47 = "behaviour for youngsters to follow. By allowing both local";
    $q48 = "and western";
    $q49 = "to co-exist side by side, the national";
    $q50 = "";
    $q51 = "can be preserved for future";
    $end = "to enjoy.";

    $a1 = "approach";
    $a2 = "appropriate";
    $a3 = "attitudes";
    $a4 = "cultural";
    $a5 = "cultural";
    $a6 = "cultural";
    $a7 = "culture";
    $a8 = "culture";
    $a9 = "culture";
    $a10 = "culture";
    $a11 = "culture";
    $a12 = "culture";
    $a13 = "culture";
    $a14 = "cultures";
    $a15 = "cultures";
    $a16 = "cultures";
    $a17 = "decades";
    $a18 = "established";
    $a19 = "established";
    $a20 = "generation";
    $a21 = "generation";
    $a22 = "generations";
    $a23 = "generations";
    $a24 = "globe";
    $a25 = "globe";
    $a26 = "identified";
    $a27 = "identity";
    $a28 = "impact";
    $a29 = "impact";
    $a30 = "impact";
    $a31 = "impacts";
    $a32 = "invest";
    $a33 = "linked";
    $a34 = "negative";
    $a35 = "negative";
    $a36 = "norm";
    $a37 = "previously";
    $a38 = "prohibition";
    $a39 = "reversed";
    $a40 = "role";
    $a41 = "significantly";
    $a42 = "traditional";
    $a43 = "traditional";
    $a44 = "traditional";
    $a45 = "traditional";
    $a46 = "traditions";
    $a47 = "traditions";
    $a48 = "trend";
    $a49 = "trend";
    $a50 = "trend";
    $a51 = "widespread";
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
         $q2 = "<?php echo $a17 ?>",
         $q3 = "<?php echo $a28 ?>",
         $q4 = "<?php echo $a24 ?>",
         $q5 = "<?php echo $a34 ?>",
         $q6 = "<?php echo $a28 ?>",
         $q7 = "<?php echo $a46 ?>",
         $q8 = "<?php echo $a34 ?>",
         $q9 = "<?php echo $a31 ?>",
         $q10 = "<?php echo $a42 ?>",
         $q11 = "<?php echo $a14 ?>",
         $q12 = "<?php echo $a48 ?>",
         $q13 = "<?php echo $a39 ?>",
         $q14 = "<?php echo $a7 ?>",
         $q15 = "<?php echo $a51 ?>",
         $q16 = "<?php echo $a24 ?>",
         $q17 = "<?php echo $a41 ?>",
         $q18 = "<?php echo $a33 ?>",
         $q19 = "<?php echo $a20 ?>",
         $q20 = "<?php echo $a7 ?>",
         $q21 = "<?php echo $a18 ?>",
         $q22 = "<?php echo $a37 ?>",
         $q23 = "<?php echo $a42 ?>",
         $q24 = "<?php echo $a14 ?>",
         $q25 = "<?php echo $a48 ?>",
         $q26 = "<?php echo $a28 ?>",
         $q27 = "<?php echo $a3 ?>",
         $q28 = "<?php echo $a7 ?>",
         $q29 = "<?php echo $a36 ?>",
         $q30 = "<?php echo $a4 ?>",
         $q31 = "<?php echo $a42 ?>",
         $q32 = "<?php echo $a14 ?>",
         $q33 = "<?php echo $a48 ?>",
         $q34 = "<?php echo $a7 ?>",
         $q35 = "<?php echo $a38 ?>",
         $q36 = "<?php echo $a1 ?>",
         $q37 = "<?php echo $a32 ?>",
         $q38 = "<?php echo $a22 ?>",
         $q39 = "<?php echo $a4 ?>",
         $q40 = "<?php echo $a46 ?>",
         $q41 = "<?php echo $a18 ?>",
         $q42 = "<?php echo $a40 ?>",
         $q43 = "<?php echo $a26 ?>",
         $q44 = "<?php echo $a20 ?>",
         $q45 = "<?php echo $a42 ?>",
         $q46 = "<?php echo $a2 ?>",
         $q47 = "<?php echo $a7 ?>",
         $q48 = "<?php echo $a7 ?>",
         $q49 = "<?php echo $a4 ?>",
         $q50 = "<?php echo $a27 ?>",
         $q51 = "<?php echo $a22 ?>",
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