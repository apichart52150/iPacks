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
    $q1 = "With budget airlines travelling";
    $q2 = "has become easier and cheaper than ever before. Visiting foreign destinations, once the dream of many people, has now become reality. The reality of travelling, however, is not always as pleasant as one expects, and the dream sometimes turns into a nightmare. Modern";
    $q3 = "such as the internet means that we can now";
    $q4 = "Places";
    $q5 = ", and even take part in";
    $q6 = "tours of those places,";
    $q7 = "us to experience those places without having to actually travel there. This";
    $q8 = "has its";
    $q9 = "";
    $q10 = "but there are also drawbacks to";
    $q11 = "tourism. There can be no doubt that travelling to different countries allows us to experience";
    $q12 = "";
    $q13 = "at first-hand. Each country has its own";
    $q14 = "atmosphere,";
    $q15 = "by a mixture of smells, tastes, climate and";
    $q16 = ". In addition, the country's";
    $q17 = "heritage";
    $q18 = ", folklore and";
    $q19 = "provide an";
    $q20 = "into the nation's history and give an";
    $q21 = "of the people's character. The language, also, can be heard as it is spoken in its natural";
    $q22 = ", and continued";
    $q23 = " to the language is likely to result in some learning of that language. This real-life experience is likely to have a long-lasting effect. However, the effect may not always be a pleasant one as there are many problems which can";
    $q24 = "";
    $q25 = "travel. The practicalities of";
    $q26 = "visas and other bureaucratic";
    $q27 = "can take the edge off the trip even before you set off. Travel logistics such as making flight connections, being stranded at airports or docks due to bad weather or strikes also add to the frustration of the reality. In addition,";
    $q28 = "of '";
    $q29 = "shock' can seriously reduce the novelty value of being in a foreign country. For example, different food, strange customs, unfamiliar";
    $q30 = "and homesickness can all make your ideal holiday abroad a nightmare. In";
    $q31 = ",";
    $q32 = "travel can give valuable";
    $q33 = "into alien";
    $q34 = "but the practicalities";
    $q35 = "in travelling may not suit everyone. Fortunately, with advanced";
    $q36 = "it is now possible to experience visits to foreign places in the comfort of";
    $q37 = "tourism. At the end of the day, it is up to each";
    $q38 = "to choose the";
    $end = "which best fits their personality.";

    $a1 = "accompany";
    $a2 = "aspects";
    $a3 = "aspects";
    $a4 = "concept";
    $a5 = "conclusion";
    $a6 = "context";
    $a7 = "created";
    $a8 = "cultural";
    $a9 = "cultural";
    $a10 = "culture";
    $a11 = "culture";
    $a12 = "cultures";
    $a13 = "currency";
    $a14 = "distinct";
    $a15 = "diversity";
    $a16 = "documents";
    $a17 = "enabling";
    $a18 = "exposure";
    $a19 = "indication";
    $a20 = "individual";
    $a21 = "insight";
    $a22 = "insights";
    $a23 = "involved";
    $a24 = "obtaining";
    $a25 = "option";
    $a26 = "overseas";
    $a27 = "overseas";
    $a28 = "overseas";
    $a29 = "overseas";
    $a30 = "positive";
    $a31 = "research";
    $a32 = "sites";
    $a33 = "technology";
    $a34 = "technology";
    $a35 = "traditions";
    $a36 = "virtual";
    $a37 = "virtual";
    $a38 = "virtual";
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
         $q1 = "<?php echo $a26 ?>",
         $q2 = "<?php echo $a33 ?>",
         $q3 = "<?php echo $a31 ?>",
         $q4 = "<?php echo $a26 ?>",
         $q5 = "<?php echo $a36 ?>",
         $q6 = "<?php echo $a17 ?>",
         $q7 = "<?php echo $a4 ?>",
         $q8 = "<?php echo $a30 ?>",
         $q9 = "<?php echo $a2 ?>",
         $q10 = "<?php echo $a36 ?>",
         $q11 = "<?php echo $a8 ?>",
         $q12 = "<?php echo $a15 ?>",
         $q13 = "<?php echo $a14 ?>",
         $q14 = "<?php echo $a7 ?>",
         $q15 = "<?php echo $a10 ?>",
         $q16 = "<?php echo $a8 ?>",
         $q17 = "<?php echo $a32 ?>",
         $q18 = "<?php echo $a35 ?>",
         $q19 = "<?php echo $a21 ?>",
         $q20 = "<?php echo $a19 ?>",
         $q21 = "<?php echo $a6 ?>",
         $q22 = "<?php echo $a18 ?>",
         $q23 = "<?php echo $a1 ?>",
         $q24 = "<?php echo $a26 ?>",
         $q25 = "<?php echo $a24 ?>",
         $q26 = "<?php echo $a16 ?>",
         $q27 = "<?php echo $a2 ?>",
         $q28 = "<?php echo $a10 ?>",
         $q29 = "<?php echo $a13 ?>",
         $q30 = "<?php echo $a5 ?>",
         $q31 = "<?php echo $a26 ?>",
         $q32 = "<?php echo $a22 ?>",
         $q33 = "<?php echo $a12 ?>",
         $q34 = "<?php echo $a23 ?>",
         $q35 = "<?php echo $a33 ?>",
         $q36 = "<?php echo $a36 ?>",
         $q37 = "<?php echo $a20 ?>",
         $q38 = "<?php echo $a25 ?>",
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