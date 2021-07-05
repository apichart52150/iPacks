<style>
.mark, mark {
    padding: .2em;
    background-color: #ffc107;
}
</style>
@php
    $q1 = "Most teenagers tend to spend their money";
    $q11 = "clothes and music.";
    $q111 = array(
        'for',
        'on',
        'by',
        'at'
    );
    $q2 = "There was a sharp decrease in the birth rate";
    $q22 = "2007.";
    $q222 = array(
        'at',
        'on',
        'with',
        'in'
    );
    $q3 = "The number of cars sold fluctuated";
    $q33 = "2000 and 2009.";
    $q333 = array(
        'between',
        'from',
        'within',
        'at'
    );
    $q4 = "The number of tourists entering the Kingdom rose";
    $q44 = " 12 million to 13 million in that year.";
    $q444 = array(
        'between',
        'from',
        'at',
        'within'
    );
    $q5 = "The unemployment rate remained";
    $q55 = "6% for the next few years.";
    $q555 = array(
        'at',
        'in',
        'with',
        'for'
    );
    $q6 = "There was a significant fall";
    $q6_6 = "the sales";
    $q66 = "new cars during the recession.";
    $q666 = array(
        'off',
        'in',
        'on',
        'of'
    );
    $q66_6 = array(
        'in',
        'from',
        'of',
        'off'
    );
    $q7 = "The number of foreign tourists arriving in Thailand depends";
    $q77 = "the political situation.";
    $q777 = array(
        'of',
        'on',
        'with',
        'for'
    );
    $q8 = "The recession prevented the company";
    $q88 = "reaching its targets.";
    $q888 = array(
        'by',
        'for',
        'to',
        'from'
    );
    $q9 = "There was a substantial growth";
    $q9_9 = "the number";
    $q99 = "new-born babies during the period.";
    $q999 = array(
        'of',
        'in',
        'for',
        'at'
    );

    $q99_9 = array(
        'of',
        'from',
        'for',
        'at'
    );
    $q10 = "The vast majority";
    $q10_0 = "young people have never experienced the difficulties";
    $q100 = "'snail-mail'.";
    $q1000 = array(
        'of',
        'with',
        'by',
        'in'
    );

    $q10_00 = array(
        'for',
        'by',
        'of',
        'in'
    );
@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['topic']}}
            </p>
            
            <div class="mb-2">
                <span class="font-weight-bold mr-2">1.</span>
                {{$q1}}
                <select class="form-control d-inline w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q111[0]}}">{{$q111[0]}}</option>
                    <option value="{{$q111[1]}}">{{$q111[1]}}</option>
                    <option value="{{$q111[2]}}">{{$q111[2]}}</option>
                    <option value="{{$q111[3]}}">{{$q111[3]}}</option>
                </select>
                {{$q11}}
            </div>
            
            <div class="mb-2">
                <span class="font-weight-bold mr-2">2.</span>
                {{$q2}}
                <select class="form-control d-inline w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q222[0]}}">{{$q222[0]}}</option>
                    <option value="{{$q222[1]}}">{{$q222[1]}}</option>
                    <option value="{{$q222[2]}}">{{$q222[2]}}</option>
                    <option value="{{$q222[3]}}">{{$q222[3]}}</option>
                </select>
                {{$q22}}
            </div>
            
            <div class="mb-2">
                <span class="font-weight-bold mr-2">3.</span>
                {{$q3}}
                <select class="form-control d-inline w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q333[0]}}">{{$q333[0]}}</option>
                    <option value="{{$q333[1]}}">{{$q333[1]}}</option>
                    <option value="{{$q333[2]}}">{{$q333[2]}}</option>
                    <option value="{{$q333[3]}}">{{$q333[3]}}</option>
                </select>
                {{$q33}}
            </div>

            <div class="mb-2">
                <span class="font-weight-bold mr-2">4.</span>
                {{$q4}}
                <select class="form-control d-inline w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q444[0]}}">{{$q444[0]}}</option>
                    <option value="{{$q444[1]}}">{{$q444[1]}}</option>
                    <option value="{{$q444[2]}}">{{$q444[2]}}</option>
                    <option value="{{$q444[3]}}">{{$q444[3]}}</option>
                </select>
                {{$q44}}
            </div>

            <div class="mb-2">
                <span class="font-weight-bold mr-2">5.</span>
                {{$q5}}
                <select class="form-control d-inline w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q555[0]}}">{{$q555[0]}}</option>
                    <option value="{{$q555[1]}}">{{$q555[1]}}</option>
                    <option value="{{$q555[2]}}">{{$q555[2]}}</option>
                    <option value="{{$q555[3]}}">{{$q555[3]}}</option>
                </select>
                {{$q55}}
            </div>

            <div class="mb-2">
                <span class="font-weight-bold mr-2">6.</span>
                {{$q6}}
                <select class="form-control d-inline w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q666[0]}}">{{$q666[0]}}</option>
                    <option value="{{$q666[1]}}">{{$q666[1]}}</option>
                    <option value="{{$q666[2]}}">{{$q666[2]}}</option>
                    <option value="{{$q666[3]}}">{{$q666[3]}}</option>
                </select>
                {{$q6_6}}
                <select class="form-control d-inline w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q66_6[0]}}">{{$q66_6[0]}}</option>
                    <option value="{{$q66_6[1]}}">{{$q66_6[1]}}</option>
                    <option value="{{$q66_6[2]}}">{{$q66_6[2]}}</option>
                    <option value="{{$q66_6[3]}}">{{$q66_6[3]}}</option>
                </select>
                {{$q66}}
            </div>

            <div class="mb-2">
                <span class="font-weight-bold mr-2">7.</span>
                {{$q7}}
                <select class="form-control d-inline w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q777[0]}}">{{$q777[0]}}</option>
                    <option value="{{$q777[1]}}">{{$q777[1]}}</option>
                    <option value="{{$q777[2]}}">{{$q777[2]}}</option>
                    <option value="{{$q777[3]}}">{{$q777[3]}}</option>
                </select>
                {{$q77}}
            </div>

            <div class="mb-2">
                <span class="font-weight-bold mr-2">8.</span>
                {{$q8}}
                <select class="form-control d-inline w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q888[0]}}">{{$q888[0]}}</option>
                    <option value="{{$q888[1]}}">{{$q888[1]}}</option>
                    <option value="{{$q888[2]}}">{{$q888[2]}}</option>
                    <option value="{{$q888[3]}}">{{$q888[3]}}</option>
                </select>
                {{$q88}}
            </div>

            <div class="mb-2">
                <span class="font-weight-bold mr-2">9.</span>
                {{$q9}}
                <select class="form-control d-inline w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q999[0]}}">{{$q999[0]}}</option>
                    <option value="{{$q999[1]}}">{{$q999[1]}}</option>
                    <option value="{{$q999[2]}}">{{$q999[2]}}</option>
                    <option value="{{$q999[3]}}">{{$q999[3]}}</option>
                </select>
                {{$q9_9}}
                <select class="form-control d-inline w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q99_9[0]}}">{{$q99_9[0]}}</option>
                    <option value="{{$q99_9[1]}}">{{$q99_9[1]}}</option>
                    <option value="{{$q99_9[2]}}">{{$q99_9[2]}}</option>
                    <option value="{{$q99_9[3]}}">{{$q99_9[3]}}</option>
                </select>
                {{$q99}}
            </div>

            <div class="mb-2">
                <span class="font-weight-bold mr-2">10.</span>
                {{$q10}}
                <select class="form-control d-inline w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q1000[0]}}">{{$q1000[0]}}</option>
                    <option value="{{$q1000[1]}}">{{$q1000[1]}}</option>
                    <option value="{{$q1000[2]}}">{{$q1000[2]}}</option>
                    <option value="{{$q1000[3]}}">{{$q1000[3]}}</option>
                </select>
                {{$q10_0}}
                <select class="form-control d-inline w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q10_00[0]}}">{{$q10_00[0]}}</option>
                    <option value="{{$q10_00[1]}}">{{$q10_00[1]}}</option>
                    <option value="{{$q10_00[2]}}">{{$q10_00[2]}}</option>
                    <option value="{{$q10_00[3]}}">{{$q10_00[3]}}</option>
                </select>
                {{$q100}}
            </div>
        </div>
    </div>

    <div class="col-xl-12 col-md-12 col-sm-12" id="ans" style="display: none;">
        <div class="card-box text-dark font-16">
            <p class="lead">
                Answers
            </p>
            <div class="accordion mb-3" id="accordionExample">
                <!-- 1 -->
                    <div class="card mb-1" >
                        <div class="card-header" id="headingOne">
                            <h5 class="my-0">
                                <a class="text-primary" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    1. {{$q1}} <u></u> {{$q11}}
                                </a>
                            </h2>
                        </div>
                    
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <dl class="row">
                                        <dt class="col-sm-2"><i class="text-success mr-2">{{$q111[1]}}</i></dt>
                                        <dd class="col-sm-10"><p class="font-weight-bold mark">clues: clues: spend + money + on something</p></dd>
                                    </dl>
                                </div>
                        </div>
                    </div>
                <!-- 1 -->
                
                <!-- 2 -->
                    <div class="card mb-1" >
                        <div class="card-header" id="headingTwo">
                            <h5 class="my-0">
                                <a class="text-primary collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. {{$q2}} <u></u> {{$q22}}
                                </a>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <dl class="row">
                                    <dt class="col-sm-2"><i class="text-success mr-2">{{$q222[3]}}</i></dt>
                                    <dd class="col-sm-10"><p class="font-weight-bold mark">clues: clues: in + year</p></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                <!-- 2 -->

                <!-- 3 -->
                    <div class="card mb-1" >
                        <div class="card-header" id="headingThree">
                            <h5 class="my-0">
                                <a class="text-primary collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. {{$q3}} <u></u> {{$q33}}
                                </a>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <dl class="row">
                                    <dt class="col-sm-2"><i class="text-success mr-2">{{$q333[0]}}</i></dt>
                                    <dd class="col-sm-10"><p class="font-weight-bold mark">clues: <u>between</u> year1 <u>and</u> year2 </p></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                <!-- 3 -->

                <!-- 4 -->
                    <div class="card mb-1" >
                        <div class="card-header" id="headingFour">
                            <h5 class="my-0">
                                <a class="text-primary collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    4.{{$q4}} <u></u> {{$q44}}
                                </a>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                                <dl class="row">
                                    <dt class="col-sm-2"><i class="text-success mr-2">{{$q444[1]}}</i></dt>
                                    <dd class="col-sm-10"><p class="font-weight-bold mark">clues: <u>from</u> something <u>to</u> another </p></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                <!-- 4 -->

                <div class="card mb-1" >
                    <div class="card-header" id="headingFive">
                        <h5 class="my-0">
                            <a class="text-primary collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                5. {{$q5}} <u></u> {{$q55}}
                            </a>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q555[0]}}</i> </dt>
                                <dd class="col-sm-10"><p class="font-weight-bold mark">clues: <u>at</u> + 6%</p></dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 5 -->

                <div class="card mb-1" >
                    <div class="card-header" id="headingSix">
                        <h5 class="my-0">
                            <a class="text-primary collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                6. {{$q6}} <u></u> {{$q6_6}} <u></u> {{$q66}}
                            </a>
                        </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q666[1]}},{{$q66_6[2]}}</i></dt>
                                <dd class="col-sm-10">
                                    <ul class="list-unstyled mark">
                                        <li>
                                            <strong>clues:</strong>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                    <strong><u>a</u></strong> significant <strong><u>fall</u></strong> + <strong><u>in</u></strong>
                                                </li>
                                                <li>
                                                    the sales + <strong><u>of</u></strong> + new cars
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </dd>

                                <dt class="col-sm-2">Vocabulary</dt>
                                <dd class="col-sm-10"></dd>

                                <dt class="col-sm-2">recession</dt>
                                <dd class="col-sm-10">(n) a difficult time when there is less trade than</dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 6 -->

                <div class="card mb-1">
                    <div class="card-header" id="headingSeven">
                        <h5 class="my-0">
                            <a class="text-primary collapsed" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                7. {{$q7}} <u></u> {{$q77}}
                            </a>
                        </h5>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q777[1]}}</i> </dt>
                                <dd class="col-sm-10"><p class="font-weight-bold mark">clues: depends + <u>on</u></p></dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 7 -->

                <div class="card mb-1" >
                    <div class="card-header" id="headingEight">
                        <h5 class="my-0">
                            <a class="text-primary collapsed" data-toggle="collapse" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                8. {{$q8}} <u></u> {{$q88}}
                            </a>
                        </h5>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q888[3]}}</i> </dt>
                                <dd class="col-sm-10"><p class="font-weight-bold mark">clues: <u>prevented</u> someone + <u>from</u> doing something</p></dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 8 -->

                <div class="card mb-1" >
                    <div class="card-header" id="headingNine">
                        <h5 class="my-0">
                            <a class="text-primary collapsed" data-toggle="collapse" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                9. {{$q9}} <u></u> {{$q9_9}} <u></u> {{$q99}}
                            </a>
                        </h5>
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q999[1]}},{{$q99_9[0]}}</i> </dt>
                                <dd class="col-sm-10">
                                    <ul class="list-unstyled mark">
                                        <li>
                                            <strong>clues:</strong>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                    a substantial <strong><u>growth</u></strong> + <strong><u>in</u></strong>
                                                </li>
                                                <li>
                                                    the number <strong><u>of</u></strong> something
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 9 -->

                <div class="card mb-1" id="ansOne">
                    <div class="card-header" id="headingTen">
                        <h5 class="my-0">
                            <a class="text-primary collapsed" data-toggle="collapse" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            10. {{$q10}} <u></u> {{$q10_0}} <u></u> {{$q100}}
                            </a>
                        </h5>
                    </div>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q1000[0]}},{{$q10_00[2]}}</i></dt>
                                <dd class="col-sm-10">
                                    <ul class="list-unstyled mark">
                                        <li>
                                            <strong>clues:</strong>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                    <strong>the vast majority</strong> + <strong><u>of</u></strong> something
                                                </li>
                                                <li>
                                                    the difficulties <strong><u>of</u></strong> something
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </dd>

                                <dt class="col-sm-2">Vocabulary</dt>
                                <dd class="col-sm-10"></dd>

                                <dt class="col-sm-2">snail mail</dt>
                                <dd class="col-sm-10">(n) the system of sending letters by post, as opposed to using email --- <em>used humorously</em></dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 10 -->
            </div>
            
        </div>  
    </div>
</div>

@section('button-control')
    <button id="check-answer" class="btn btn-info">Check Answerss</button>
    <button id="show-answer" class="btn btn-success">Show Answer</button>
@endsection

@section('js')
<script>
    const answers = [
        'on', 
        'in', 
        'between', 
        'from', 
        'at', 
        'in',
        'of',
        'on', 
        'from',
        'in',
        'of', 
        'of',
        'of'
    ];
    let score = 0;
    $("#show-answer").hide(true);
    $('#check-answer').on('click', function() {
        $('select').each((idx, item) => {
            if($(item).val() == answers[idx]) {
                $(item).addClass('border border-success');
                $('<i class="fas fa-check text-success mr-2"></i>').insertAfter($(item));
                score++;
            } else {
                $(item).addClass('border border-danger');
                $(`<i class="fas fa-times text-danger mr-2"></i><span class="text-success mr-2">${Array.isArray(answers[idx]) ? answers[idx][1] : answers[idx]}</span>`).insertAfter($(item));
            }
        })

        $('a u').each((idx, item) => {
            if($(item).val() == answers[idx]) {
                $(`<span class="text-success"><u>${Array.isArray(answers[idx]) ? answers[idx][1] : answers[idx]}</u></span>`).insertAfter($(item));
            } else {
                $(`<span class="text-success"><u>${Array.isArray(answers[idx]) ? answers[idx][1] : answers[idx]}</u></span>`).insertAfter($(item));
            }
        })

        if(score == 10){
            alert("you're awesome");
        }else{
            alert('Your score is ' + score + '/10');
        }

        $("#show-answer").show(true);
        $("#check-answer").hide(true);
    });

    $('#show-answer').on('click', function() {
        var x = document.getElementById("ans");
        if (x.style.display == "none") {
            $("#show-answer").text('close');
            x.style.display = "block";
        }else {
            $("#show-answer").text('Show Answer');
            x.style.display = "none";
        }
    });
   
</script>
@stop