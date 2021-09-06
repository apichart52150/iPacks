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
    $q1 = "When";
    $q2 = "first made their way into the business";
    $q3 = ", everyone believed that they would make people's";
    $q4 = "easier. What was not expected was that";
    $q5 = "would";
    $q6 = "";
    $q7 = ". Besides";
    $q8 = "to unemployment, these";
    $q9 = "workers often";
    $q10 = "";
    $q11 = "";
    $q12 = "performance. A number of";
    $q13 = "have been lost as a direct result of new";
    $q14 = "";
    $q15 = ". Ticket agents in various";
    $q16 = "";
    $q17 = ", from subway/underground stations to airports are";
    $q18 = "nonexistent these days. Bank tellers have been greatly reduced due to";
    $q19 = "bank machines. In addition, many call centres that have help lines are almost entirely computerised. A few years ago I worked as a helper in our local library. Today this position does not exist, because six new";
    $q20 = "have been installed. The number of positions lost to";
    $q21 = "grows exponentially, and unemployment continues to get worse. While a";
    $q22 = "may easily";
    $q23 = "the main";
    $q24 = "of these";
    $q25 = ", most";
    $q26 = "fall short when customers have a";
    $q27 = "request or problem. A pre-paid ticket booth does not have";
    $q28 = "about the entertainment district and cannot offer friendly directions to a tourist.";
    $q29 = ", an";
    $q30 = "bank machine cannot provide";
    $q31 = "and reassurance to a customer who has just had his";
    $q32 = "card stolen. And, more often than not,";
    $q33 = "telephone operators cannot answer the one question that we have, and we end up waiting on the line to speak with someone anyway. Every time I go into the library where I worked I notice elderly people who don't know how to use the";
    $q34 = "and can't find anyone to help. In the future, I believe a new business";
    $q35 = "will";
    $q36 = ". As";
    $q37 = "";
    $q38 = "";
    $q39 = ", new positions will have to be invented. More and more people will go into business for themselves, and hopefully put the personal touch back into business. I believe that the human workforce will";
    $q40 = "that it is more valuable than";
    $end = ".";

    $a1 = "achieve";
    $a2 = "assistance";
    $a3 = "automated";
    $a4 = "automated";
    $a5 = "automated";
    $a6 = "automated";
    $a7 = "computer";
    $a8 = "computer";
    $a9 = "computer";
    $a10 = "computers";
    $a11 = "computers";
    $a12 = "computers";
    $a13 = "computers";
    $a14 = "computers";
    $a15 = "computers";
    $a16 = "computers";
    $a17 = "contributing";
    $a18 = "credit";
    $a19 = "demonstrate";
    $a20 = "eliminate";
    $a21 = "eliminate";
    $a22 = "evolve";
    $a23 = "exhibit";
    $a24 = "facilities";
    $a25 = "inadequate";
    $a26 = "insight";
    $a27 = "job";
    $a28 = "jobs";
    $a29 = "jobs";
    $a30 = "jobs";
    $a31 = "jobs";
    $a32 = "jobs";
    $a33 = "sector";
    $a34 = "similarly";
    $a35 = "tasks";
    $a36 = "technology";
    $a37 = "transportation";
    $a38 = "trend";
    $a39 = "unique";
    $a40 = "virtually";
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
         $q1 = "<?php echo $a10 ?>",
         $q2 = "<?php echo $a33 ?>",
         $q3 = "<?php echo $a28 ?>",
         $q4 = "<?php echo $a10 ?>",
         $q5 = "<?php echo $a20 ?>",
         $q6 = "<?php echo $a28 ?>",
         $q7 = "<?php echo $a17 ?>",
         $q8 = "<?php echo $a3 ?>",
         $q9 = "<?php echo $a23 ?>",
         $q10 = "<?php echo $a25 ?>",
         $q11 = "<?php echo $a27 ?>",
         $q12 = "<?php echo $a28 ?>",
         $q13 = "<?php echo $a7 ?>",
         $q14 = "<?php echo $a36 ?>",
         $q15 = "<?php echo $a37 ?>",
         $q16 = "<?php echo $a24 ?>",
         $q17 = "<?php echo $a40 ?>",
         $q18 = "<?php echo $a3 ?>",
         $q19 = "<?php echo $a10 ?>",
         $q20 = "<?php echo $a10 ?>",
         $q21 = "<?php echo $a7 ?>",
         $q22 = "<?php echo $a1 ?>",
         $q23 = "<?php echo $a35 ?>",
         $q24 = "<?php echo $a28 ?>",
         $q25 = "<?php echo $a10 ?>",
         $q26 = "<?php echo $a39 ?>",
         $q27 = "<?php echo $a26 ?>",
         $q28 = "<?php echo $a34 ?>",
         $q29 = "<?php echo $a3 ?>",
         $q30 = "<?php echo $a2 ?>",
         $q31 = "<?php echo $a18 ?>",
         $q32 = "<?php echo $a3 ?>",
         $q33 = "<?php echo $a7 ?>",
         $q34 = "<?php echo $a38 ?>",
         $q35 = "<?php echo $a22 ?>",
         $q36 = "<?php echo $a10 ?>",
         $q37 = "<?php echo $a20 ?>",
         $q38 = "<?php echo $a28 ?>",
         $q39 = "<?php echo $a19 ?>",
         $q40 = "<?php echo $a10 ?>",
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