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
    $q1 = "What would the world be like without Shakespeare or the Olympics? While";
    $q2 = "care and education are perhaps the highest causes to which money can be";
    $q3 = ", the arts and athletics are in some ways just as valuable. So, to ask the government to not extend support to these two";
    $q4 = "could be just as detrimental to the";
    $q5 = "of society as the lack of";
    $q6 = 'health care and education. The Romans believed in "mens sana in corpore sano". In short, that there is indeed a correlation between a healthy body and healthy mind. When we are healthy, we feel better and so are more likely to be productive';
    $q7 = ".";
    $q8 = ", the practice of sports can also teach us the very same discipline we need for our studies. Even a brisk walk or watching an exciting athletic match can refresh the mind for greater work. Moreover, sports can serve to";
    $q9 = 'healthier bodies, which in turn would serve as a form of "preventive medicine"';
    $q10 = "cutting down on";
    $q11 = "costs. In the same vein, the arts are known to";
    $q12 = "a sense of well-being in performers and audience alike, reducing";
    $q13 = "problems and their associated";
    $q14 = "manifestations and again,";
    $q15 = "costs. As such, building theatres and stadiums, which spur interest in the arts and sports respectively, actually would be practically";
    $q16 = "to spending money on";
    $q17 = "care and education. Now I realize the question";
    $q18 = "addresses the building of theatres and sports stadiums by government. Some people would contend athletics and the arts can still be enjoyed and practised without such";
    $q19 = ". I would hazard that these buildings stand as the altars to the sports and arts worlds, inspiring would-be athletes and performers. Without such venues where would sports spectators and music aficionados be able to enjoy these events? Now some other people would also say business could support their";
    $q20 = ", but we know the avarice of business could very likely jeopardize the lofty spirit of athletics and the arts just as well. Therefore, allowing government to";
    $q21 = "some say in the matter on";
    $q22 = "of the people would, I believe, be in the best interest of the people. In short, as long as the government does not go overboard in its expenditure on these buildings and uses such venues for the";
    $q23 = "of all, then, as mentioned above, people will";
    $q24 = "in terms of both";
    $q25 = "care and education as well. This is not to say the government should neglect";
    $end = "care and education, but rather to think of this not as an either-or choice but as a win-win situation for all.";

    $a1 = "academically";
    $a2 = "areas";
    $a3 = "behalf";
    $a4 = "benefit";
    $a5 = "benefit";
    $a6 = "construction";
    $a7 = "constructions";
    $a8 = "contributed";
    $a9 = "create";
    $a10 = "identical";
    $a11 = "induce";
    $a12 = "medical";
    $a13 = "medical";
    $a14 = "medical";
    $a15 = "medical";
    $a16 = "medical";
    $a17 = "medical";
    $a18 = "mental";
    $a19 = "physical";
    $a20 = "plus";
    $a21 = "retain";
    $a22 = "specifically";
    $a23 = "sufficient";
    $a24 = "thereby";
    $a25 = "welfare";
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
         $q1 = "<?php echo $a12 ?>",
         $q2 = "<?php echo $a8 ?>",
         $q3 = "<?php echo $a2 ?>",
         $q4 = "<?php echo $a25 ?>",
         $q5 = "<?php echo $a23 ?>",
         $q6 = "<?php echo $a1 ?>",
         $q7 = "<?php echo $a20 ?>",
         $q8 = "<?php echo $a9 ?>",
         $q9 = "<?php echo $a24 ?>",
         $q10 = "<?php echo $a12 ?>",
         $q11 = "<?php echo $a11 ?>",
         $q12 = "<?php echo $a18 ?>",
         $q13 = "<?php echo $a19 ?>",
         $q14 = "<?php echo $a12 ?>",
         $q15 = "<?php echo $a10 ?>",
         $q16 = "<?php echo $a12 ?>",
         $q17 = "<?php echo $a22 ?>",
         $q18 = "<?php echo $a7 ?>",
         $q19 = "<?php echo $a6 ?>",
         $q20 = "<?php echo $a21 ?>",
         $q21 = "<?php echo $a3 ?>",
         $q22 = "<?php echo $a4 ?>",
         $q23 = "<?php echo $a5 ?>",
         $q24 = "<?php echo $a12 ?>",
         $q25 = "<?php echo $a12 ?>",
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