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
    $q1 = "With advanced";
    $q2 = ", travelling from one continent to another is relatively easy nowadays and the number of foreign tourists is increasing. Although";
    $q3 = "from tourism is a much needed";
    $q4 = ",";
    $q5 = "tourists are not always welcome in the countries they visit. This essay will outline the advantages of tourism and will outline some of the reasons why";
    $q6 = "tourists are not always welcome. There are a number of reasons why foreign tourism is regarded in a";
    $q7 = "light. First of all, the";
    $q8 = "";
    $q9 = "by";
    $q10 = "visitors is substantial. In a country such as Thailand, for example, foreign";
    $q11 = "from tourism is essential in helping to develop the nation. It provides a living for hundreds of thousands of people: the hotel,";
    $q12 = "and retail";
    $q13 = "all";
    $q14 = "from";
    $q15 = "visitors. The nation's";
    $q16 = "is improved with new roads and railways as well as";
    $q17 = "";
    $q18 = ". Apart from the";
    $q19 = "and";
    $q20 = "development, foreign visitors also provide a fresh";
    $q21 = "for the local people.";
    $q22 = "such as foreign languages,";
    $q23 = "and";
    $q24 = "can help";
    $q25 = "the minds of local people. Ironically, these foreign";
    $q26 = "values may also have a";
    $q27 = "";
    $q28 = "on local";
    $q29 = ". The";
    $q30 = "of local";
    $q31 = "can result from the introduction of outside";
    $q32 = ". For example, popular music and Hollywood movies from the USA can undermine the Thai";
    $q33 = "";
    $q34 = ".";
    $q35 = ", foreign tourists are usually";
    $q36 = "of the correct social etiquette when it comes to visiting tourist";
    $q37 = ", especially temples, mosques and shrines. This";
    $q38 = "'pollution' is also";
    $q39 = "by";
    $q40 = "pollution, as more and more resorts are built to provide";
    $q41 = "for the";
    $q42 = "tourists. The";
    $q43 = "destroys the natural beauty of the";
    $q44 = ". In addition, waste";
    $q45 = "systems pollute both the waterways and the soil around the resorts. All in all, then, while foreign tourists can help";
    $q46 = "and";
    $q47 = "a nation's";
    $q48 = ", people should also be";
    $q49 = "that";
    $q50 = "and";
    $q51 = "pollution can have a";
    $q52 = "";
    $end = "on the tourist destinations.";

    $a1 = "accommodation";
    $a2 = "accompanied";
    $a3 = "aspects";
    $a4 = "aware";
    $a5 = "benefit";
    $a6 = "communications";
    $a7 = "cultural";
    $a8 = "cultural";
    $a9 = "cultural";
    $a10 = "culture";
    $a11 = "culture";
    $a12 = "cultures";
    $a13 = "environmental";
    $a14 = "environmental";
    $a15 = "erosion";
    $a16 = "expand";
    $a17 = "expand";
    $a18 = "financial";
    $a19 = "impact";
    $a20 = "impact";
    $a21 = "location";
    $a22 = "income";
    $a23 = "income";
    $a24 = "infrastructure";
    $a25 = "infrastructure";
    $a26 = "negative";
    $a27 = "negative";
    $a28 = "networks";
    $a29 = "overseas";
    $a30 = "overseas";
    $a31 = "overseas";
    $a32 = "overseas";
    $a33 = "overseas";
    $a34 = "perspective";
    $a35 = "positive";
    $a36 = "resource";
    $a37 = "revenue";
    $a38 = "sectors";
    $a39 = "sites";
    $a40 = "traditional";
    $a41 = "traditions";
    $a42 = "traditions";
    $a43 = "transport";
    $a44 = "unaware";
    $a45 = "construction";
    $a46 = "disposal";
    $a47 = "economy";
    $a48 = "furthermore";
    $a49 = "generated";
    $a50 = "communities";
    $a51 = "sustain";
    $a52 = "technology";
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
         $q1 = "<?php echo $a52 ?>",
         $q2 = "<?php echo $a37 ?>",
         $q3 = "<?php echo $a36 ?>",
         $q4 = "<?php echo $a29 ?>",
         $q5 = "<?php echo $a29 ?>",
         $q6 = "<?php echo $a35 ?>",
         $q7 = "<?php echo $a22 ?>",
         $q8 = "<?php echo $a49?>",
         $q9 = "<?php echo $a29 ?>",
         $q10 = "<?php echo $a22 ?>",
         $q11 = "<?php echo $a43 ?>",
         $q12 = "<?php echo $a38 ?>",
         $q13 = "<?php echo $a5 ?>",
         $q14 = "<?php echo $a29 ?>",
         $q15 = "<?php echo $a24 ?>",
         $q16 = "<?php echo $a6 ?>",
         $q17 = "<?php echo $a28 ?>",
         $q18 = "<?php echo $a18 ?>",
         $q19 = "<?php echo $a24 ?>",
         $q20 = "<?php echo $a34 ?>",
         $q21 = "<?php echo $a3 ?>",
         $q22 = "<?php echo $a10 ?>",
         $q23 = "<?php echo $a41 ?>",
         $q24 = "<?php echo $a16 ?>",
         $q25 = "<?php echo $a7 ?>",
         $q26 = "<?php echo $a26 ?>",
         $q27 = "<?php echo $a19 ?>",
         $q28 = "<?php echo $a50 ?>",
         $q29 = "<?php echo $a15 ?>",
         $q30 = "<?php echo $a41 ?>",
         $q31 = "<?php echo $a12 ?>",
         $q32 = "<?php echo $a40 ?>",
         $q33 = "<?php echo $a10 ?>",
         $q34 = "<?php echo $a48 ?>",
         $q35 = "<?php echo $a44 ?>",
         $q36 = "<?php echo $a39 ?>",
         $q37 = "<?php echo $a7 ?>",
         $q38 = "<?php echo $a2 ?>",
         $q39 = "<?php echo $a13 ?>",
         $q40 = "<?php echo $a1 ?>",
         $q41 = "<?php echo $a29 ?>",
         $q42 = "<?php echo $a45 ?>",
         $q43 = "<?php echo $a21 ?>",
         $q44 = "<?php echo $a46 ?>",
         $q45 = "<?php echo $a51 ?>",
         $q46 = "<?php echo $a16 ?>",
         $q47 = "<?php echo $a47 ?>",
         $q48 = "<?php echo $a4 ?>",
         $q49 = "<?php echo $a7 ?>",
         $q50 = "<?php echo $a13 ?>",
         $q51 = "<?php echo $a26 ?>",
         $q52 = "<?php echo $a19 ?>",
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