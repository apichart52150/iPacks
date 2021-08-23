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
    $q1 = "There is an old saying that 'charity should begin at home', meaning that a nation should help its own citizens before it provides";
    $q2 = "to foreigners. While this may be true to a certain extent, there are";
    $q3 = "cases where this is";
    $q4 = "behaviour. This essay will outline the need for all countries to provide international";
    $q5 = "to less fortunate nations. There are a number of cases in which international";
    $q6 = "is called for. One example would be natural disasters such as tsunamis, earthquakes, floods, and famine caused by drought. These disasters can strike at";
    $q7 = "at any time. In addition, they often cause extensive damage and the losses are usually beyond the";
    $q8 = "of the local government to";
    $q9 = "cover. In these cases international";
    $q10 = "is a necessity. There can be no";
    $q11 = "reason for refusing to provide some degree of";
    $q12 = ". After all, all";
    $q13 = "on earth are prone to such disasters and all nations should offer";
    $q14 = "when asked. There are, in addition, man-made disasters such as warfare, when innocent victims suffer unmentionable crimes t the hands of the soldiers. International";
    $q15 = "is also needed to alleviate these effects of war. The";
    $q16 = ", however, must be";
    $q17 = ". It should include food, clean water and make-shift";
    $q18 = ". It should not include";
    $q19 = "";
    $q20 = "to extend the fighting. Some people believe that international";
    $q21 = "is a waste of";
    $q22 = ". They claim that the money could be better spent at home, improving living conditions for their own nationals. While this may be true in nations which themselves have a high level of poverty and deprivation, there is still a case for providing help to foreigners in need. An important";
    $q23 = "of providing international";
    $q24 = "is to";
    $q25 = "good-will among nations. If a nation sends";
    $q26 = "to a country which has suffered a natural disaster, then it is likely that relations between the countries will improve. A further argument for providing";
    $q27 = "is that if no";
    $q28 = "is";
    $q29 = ", then the country may turn to other";
    $q30 = "of";
    $q31 = ", such as terrorist groups. If the terrorist groups gain a foothold in the country, by whatever means, then the group has another base from which to operate. To";
    $q32 = "up, providing international";
    $q33 = "is a humanitarian";
    $q34 = "but is also has political side-effects. Refusing to offer";
    $q35 = "can back-fire and have a";
    $q36 = "";
    $end = "on the country which neglects its human duty.";

    $a1 = "accommodation";
    $a2 = "appropriate";
    $a3 = "available";
    $a4 = "capacity";
    $a5 = "impact";
    $a6 = "aid";
    $a7 = "aid";
    $a8 = "aid";
    $a9 = "aid";
    $a10 = "aid";
    $a11 = "aid";
    $a12 = "aid";
    $a13 = "aid";
    $a14 = "aid";
    $a15 = "aid";
    $a16 = "aid";
    $a17 = "aid";
    $a18 = "aid";
    $a19 = "aid";
    $a20 = "aid";
    $a21 = "adequately";
    $a22 = "assistance";
    $a23 = "assistance";
    $a24 = "definitely";
    $a25 = "generate";
    $a26 = "resources";
    $a27 = "inappropriate";
    $a28 = "aspect";
    $a29 = "negative";
    $a30 = "random";
    $a31 = "justifiable";
    $a32 = "locations";
    $a33 = "military";
    $a34 = "sources";
    $a35 = "issue";
    $a36 = "sum";
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
         $q1 = "<?php echo $a6 ?>",
         $q2 = "<?php echo $a24 ?>",
         $q3 = "<?php echo $a27 ?>",
         $q4 = "<?php echo $a6 ?>",
         $q5 = "<?php echo $a6 ?>",
         $q6 = "<?php echo $a30 ?>",
         $q7 = "<?php echo $a4 ?>",
         $q8 = "<?php echo $a21 ?>",
         $q9 = "<?php echo $a6 ?>",
         $q10 = "<?php echo $a31 ?>",
         $q11 = "<?php echo $a6 ?>",
         $q12 = "<?php echo $a32 ?>",
         $q13 = "<?php echo $a22 ?>",
         $q14 = "<?php echo $a6 ?>",
         $q15 = "<?php echo $a6 ?>",
         $q16 = "<?php echo $a2 ?>",
         $q17 = "<?php echo $a1 ?>",
         $q18 = "<?php echo $a33 ?>",
         $q19 = "<?php echo $a6 ?>",
         $q20 = "<?php echo $a6 ?>",
         $q21 = "<?php echo $a26 ?>",
         $q22 = "<?php echo $a28 ?>",
         $q23 = "<?php echo $a6 ?>",
         $q24 = "<?php echo $a25 ?>",
         $q25 = "<?php echo $a22 ?>",
         $q26 = "<?php echo $a6 ?>",
         $q27 = "<?php echo $a6 ?>",
         $q28 = "<?php echo $a3 ?>",
         $q29 = "<?php echo $a34 ?>",
         $q30 = "<?php echo $a6 ?>",
         $q31 = "<?php echo $a36 ?>",
         $q32 = "<?php echo $a6 ?>",
         $q33 = "<?php echo $a35 ?>",
         $q34 = "<?php echo $a6 ?>",
         $q35 = "<?php echo $a29 ?>",
         $q36 = "<?php echo $a5 ?>",
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