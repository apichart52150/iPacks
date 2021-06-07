<style>
.mark, mark {
    padding: .2em;
    background-color: #ffc107;
}
</style>
@php
    $q1 = "Your exams start next week. You'll need to";
    $q11 = "some serious revision.";
    $q111 = array(
        'make up',
        'get down to',
        'do away with',
        'put by'
    );
    $q2 = "I wanted to buy a new car so I";
    $q22 = "some money every month.";
    $q222 = array(
        'put up with',
        'do away with',
        'make up for',
        'put by'
    );
    $q3 = "Most countries have";
    $q33 = "capital punishment.";
    $q333 = array(
        'done away with',
        'put up with',
        'got down to',
        'got through'
    );
    $q4 = "You've";
    $q44 = "the worst of the weather. Things should improve from now on.";
    $q444 = array(
        'got down to',
        'done up',
        'got through',
        'got along'
    );
    $q5 = "The twins seem to";
    $q55 = "with each other far better now than in the past.";
    $q555 = array(
        'get along',
        'make out',
        'make up',
        'do up'
    );
    $q6 = "The house is starting to look shabby. Time to";
    $q66 = "!";
    $q666 = array(
        'make up for it',
        'make it out',
        'put it by',
        'do it up'
    );
    $q7 = "In spite of the fog, it was possible to";
    $q77 = "a shape in the distance.";
    $q777 = array(
        'make up',
        'make out',
        'do up',
        'put up with'
    );
    $q8 = "The noise from the renovations is awful but I'm afraid we'll just have to";
    $q88 = "it.";
    $q888 = array(
        'put it by',
        'make it out',
        'do away with it',
        'put up with'
    );
    $q9 = "The school had to close during the floods so the students had to";
    $q99 = "the lost time during their holidays.";
    $q999 = array(
        'do away with',
        'make up for',
        'put by',
        'put up with'
    );
    $q10 = "The boy was lying. Everyone knew he was";
    $q100 = "a story to blame someone else.";
    $q1000 = array(
        'making up',
        'doing up',
        'getting through',
        'putting by'
    );
@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['topic']}}
            </p>
            
            <div class="d-flex align-items-center mb-2">
                <span class="font-weight-bold mr-2">1.</span>
                {{$q1}}
                <select class="form-control w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q111[0]}}">{{$q111[0]}}</option>
                    <option value="{{$q111[1]}}">{{$q111[1]}}</option>
                    <option value="{{$q111[2]}}">{{$q111[2]}}</option>
                    <option value="{{$q111[3]}}">{{$q111[3]}}</option>
                </select>
                {{$q11}}
            </div>
            
            <div class="d-flex align-items-center mb-2">
                <span class="font-weight-bold mr-2">2.</span>
                {{$q2}}
                <select class="form-control w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q222[0]}}">{{$q222[0]}}</option>
                    <option value="{{$q222[1]}}">{{$q222[1]}}</option>
                    <option value="{{$q222[2]}}">{{$q222[2]}}</option>
                    <option value="{{$q222[3]}}">{{$q222[3]}}</option>
                </select>
                {{$q22}}
            </div>
            
            <div class="d-flex align-items-center mb-2">
                <span class="font-weight-bold mr-2">3.</span>
                {{$q3}}
                <select class="form-control w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q333[0]}}">{{$q333[0]}}</option>
                    <option value="{{$q333[1]}}">{{$q333[1]}}</option>
                    <option value="{{$q333[2]}}">{{$q333[2]}}</option>
                    <option value="{{$q333[3]}}">{{$q333[3]}}</option>
                </select>
                {{$q33}}
            </div>

            <div class="d-flex align-items-center mb-2">
                <span class="font-weight-bold mr-2">4.</span>
                {{$q4}}
                <select class="form-control w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q444[0]}}">{{$q444[0]}}</option>
                    <option value="{{$q444[1]}}">{{$q444[1]}}</option>
                    <option value="{{$q444[2]}}">{{$q444[2]}}</option>
                    <option value="{{$q444[3]}}">{{$q444[3]}}</option>
                </select>
                {{$q44}}
            </div>

            <div class="d-flex align-items-center mb-2">
                <span class="font-weight-bold mr-2">5.</span>
                {{$q5}}
                <select class="form-control w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q555[0]}}">{{$q555[0]}}</option>
                    <option value="{{$q555[1]}}">{{$q555[1]}}</option>
                    <option value="{{$q555[2]}}">{{$q555[2]}}</option>
                    <option value="{{$q555[3]}}">{{$q555[3]}}</option>
                </select>
                {{$q55}}
            </div>

            <div class="d-flex align-items-center mb-2">
                <span class="font-weight-bold mr-2">6.</span>
                {{$q6}}
                <select class="form-control w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q666[0]}}">{{$q666[0]}}</option>
                    <option value="{{$q666[1]}}">{{$q666[1]}}</option>
                    <option value="{{$q666[2]}}">{{$q666[2]}}</option>
                    <option value="{{$q666[3]}}">{{$q666[3]}}</option>
                </select>
                {{$q66}}
            </div>

            <div class="d-flex align-items-center mb-2">
                <span class="font-weight-bold mr-2">7.</span>
                {{$q7}}
                <select class="form-control w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q777[0]}}">{{$q777[0]}}</option>
                    <option value="{{$q777[1]}}">{{$q777[1]}}</option>
                    <option value="{{$q777[2]}}">{{$q777[2]}}</option>
                    <option value="{{$q777[3]}}">{{$q777[3]}}</option>
                </select>
                {{$q77}}
            </div>

            <div class="d-flex align-items-center mb-2">
                <span class="font-weight-bold mr-2">8.</span>
                {{$q8}}
                <select class="form-control w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q888[0]}}">{{$q888[0]}}</option>
                    <option value="{{$q888[1]}}">{{$q888[1]}}</option>
                    <option value="{{$q888[2]}}">{{$q888[2]}}</option>
                    <option value="{{$q888[3]}}">{{$q888[3]}}</option>
                </select>
                {{$q88}}
            </div>

            <div class="d-flex align-items-center mb-2">
                <span class="font-weight-bold mr-2">9.</span>
                {{$q9}}
                <select class="form-control w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q999[0]}}">{{$q999[0]}}</option>
                    <option value="{{$q999[1]}}">{{$q999[1]}}</option>
                    <option value="{{$q999[2]}}">{{$q999[2]}}</option>
                    <option value="{{$q999[3]}}">{{$q999[3]}}</option>
                </select>
                {{$q99}}
            </div>

            <div class="d-flex align-items-center mb-2">
                <span class="font-weight-bold mr-2">10.</span>
                {{$q10}}
                <select class="form-control w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q1000[0]}}">{{$q1000[0]}}</option>
                    <option value="{{$q1000[1]}}">{{$q1000[1]}}</option>
                    <option value="{{$q1000[2]}}">{{$q1000[2]}}</option>
                    <option value="{{$q1000[3]}}">{{$q1000[3]}}</option>
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
                                        <dd class="col-sm-10">to start doing something that is difficult or needs a lot of time
                                            <p class="font-weight-bold mark">clues: exam / revision</p>
                                        </dd>
                                    
                                        <dt class="col-sm-2">{{$q111[0]}}</dt>
                                        <dd class="col-sm-10">to combine together to form something/ to add to an amount</dd>

                                        <dt class="col-sm-2">{{$q111[2]}}</dt>
                                        <dd class="col-sm-10">to get rid of something, to stop using it</dd>

                                        <dt class="col-sm-2">{{$q111[3]}}</dt>
                                        <dd class="col-sm-10">to save money regularly in order to use it later</dd>
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
                                    <dd class="col-sm-10">to save money regularly in order to use it later
                                        <p class="font-weight-bold mark">clues: some money every month</p>
                                    </dd>

                                    <dt class="col-sm-2">{{$q222[0]}}</dt>
                                    <dd class="col-sm-10">to tolerate, to be patient with</dd>

                                    <dt class="col-sm-2">{{$q222[1]}}</dt>
                                    <dd class="col-sm-10">to get rid of something, to stop using it</dd>

                                    <dt class="col-sm-2">{{$q222[2]}}</dt>
                                    <dd class="col-sm-10">to make bad situations better</dd>
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
                                    <dd class="col-sm-10">got rid of something, stopped using it                              
                                        <p class="font-weight-bold mark">clues: capital punishment</p>
                                    </dd>

                                    <dt class="col-sm-2">{{$q333[1]}}</dt>
                                    <dd class="col-sm-10">tolerated someone or something, been patient with</dd>

                                    <dt class="col-sm-2">{{$q333[2]}}</dt>
                                    <dd class="col-sm-10">started doing something that is difficult or needs a lot of time </dd>

                                    <dt class="col-sm-2">{{$q333[3]}}</dt>
                                    <dd class="col-sm-10">done an amount of work </dd>
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
                                    <dt class="col-sm-2"><i class="text-success mr-2">{{$q444[2]}}</i></dt>
                                    <dd class="col-sm-10">managed to come to the end of a difficult experience
                                        <p class="font-weight-bold mark">clues: the worst / improve from now on</p>
                                    </dd>

                                    <dt class="col-sm-2">{{$q444[0]}}</dt>
                                    <dd class="col-sm-10">started doing something that is difficult or needs a lot of time</dd>

                                    <dt class="col-sm-2">{{$q444[1]}}</dt>
                                    <dd class="col-sm-10">to fasten / to repair or decorate / to wrap </dd>

                                    <dt class="col-sm-2">{{$q444[3]}}</dt>
                                    <dd class="col-sm-10">had a friendly relationship / made progress </dd>
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
                                <dd class="col-sm-10">to like and be friendly to each other 
                                <p class="font-weight-bold mark">clues: with each other</p>
                                </dd>

                                <dt class="col-sm-2">{{$q555[1]}}</dt>
                                <dd class="col-sm-10">to continue or succeed in life or in business</dd>

                                <dt class="col-sm-2">{{$q555[2]}}</dt>
                                <dd class="col-sm-10">started doing something that is difficult or needs a lot of time</dd>

                                <dt class="col-sm-2">{{$q555[3]}}</dt>
                                <dd class="col-sm-10">to fasten / to repair or decorate / to wrap</dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 5 -->

                <div class="card mb-1" >
                    <div class="card-header" id="headingSix">
                        <h5 class="my-0">
                            <a class="text-primary collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                6. {{$q6}} <u></u> {{$q66}}
                            </a>
                        </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q666[3]}}</i></dt>
                                <dd class="col-sm-10">to repair or decorate / to fasten / to wrap
                                    <p class="font-weight-bold mark">clues: my time at school</p>
                                </dd>

                                <dt class="col-sm-2">{{$q666[0]}}</dt>
                                <dd class="col-sm-10">shabby</dd>

                                <dt class="col-sm-2">{{$q666[1]}}</dt>
                                <dd class="col-sm-10">to compensate for something bad with something good</dd>

                                <dt class="col-sm-2">{{$q666[2]}}</dt>
                                <dd class="col-sm-10">to write all the necessary information on an official document</dd>
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
                                <dd class="col-sm-10">to see, hear or understand something with difficulty  
                                    <p class="font-weight-bold mark">clues: in spite of the fog / a shape</p>
                                </dd>

                                <dt class="col-sm-2">{{$q777[0]}}</dt>
                                <dd class="col-sm-10">to tolerate, to be patient with</dd>

                                <dt class="col-sm-2">{{$q777[2]}}</dt>
                                <dd class="col-sm-10">to form a particular thing, amount or number as a whole</dd>

                                <dt class="col-sm-2">{{$q777[3]}}</dt>
                                <dd class="col-sm-10">to repair or decorate / to fasten / to wrap</dd>
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
                                <dd class="col-sm-10">to tolerate, to be patient with
                                    <p class="font-weight-bold mark">clues: noise / awful / afraid</p>
                                </dd>

                                <dt class="col-sm-2">{{$q888[0]}}</dt>
                                <dd class="col-sm-10">to save an amount of money to use later</dd>

                                <dt class="col-sm-2">{{$q888[1]}}</dt>
                                <dd class="col-sm-10">to write all the necessary information on an official document</dd>

                                <dt class="col-sm-2">{{$q888[2]}}</dt>
                                <dd class="col-sm-10"> to destroy something</dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 8 -->

                <div class="card mb-1" >
                    <div class="card-header" id="headingNine">
                        <h5 class="my-0">
                            <a class="text-primary collapsed" data-toggle="collapse" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                9. {{$q9}} <u></u> {{$q99}}
                            </a>
                        </h5>
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q999[1]}}</i> </dt>
                                <dd class="col-sm-10">to compensate for something bad with something good 
                                    <p class="font-weight-bold mark">clues: noise / awful / afraid</p>
                                </dd>

                                <dt class="col-sm-2">{{$q999[0]}}</dt>
                                <dd class="col-sm-10">to destroy something</dd>

                                <dt class="col-sm-2">{{$q999[2]}}</dt>
                                <dd class="col-sm-10"> to save an amount of money to use later</dd>

                                <dt class="col-sm-2">{{$q999[3]}}</dt>
                                <dd class="col-sm-10">to tolerate, to be patient with</dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 9 -->

                <div class="card mb-1" id="ansOne">
                    <div class="card-header" id="headingTen">
                        <h5 class="my-0">
                            <a class="text-primary collapsed" data-toggle="collapse" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            10. {{$q10}} <u></u> {{$q100}}
                            </a>
                        </h5>
                    </div>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q1000[0]}}</i></dt>
                                <dd class="col-sm-10">pretending something is true in order to deceive people   
                                    <p class="font-weight-bold mark">clues: was lying / a story</p>
                                </dd>

                                <dt class="col-sm-2">{{$q1000[1]}}</dt>
                                <dd class="col-sm-10">repairing or decorating / fastening / wrapping</dd>

                                <dt class="col-sm-2">{{$q1000[2]}}</dt>
                                <dd class="col-sm-10">saving an amount of money to use later</dd>

                                <dt class="col-sm-2">{{$q1000[3]}}</dt>
                                <dd class="col-sm-10">managing to come to the end of a difficult experience</dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 10 -->
            </div>
            
        </div>  
    </div>
</div>

@section('button-control')
    <button id="check-answer" class="btn btn-info">Check Answer</button>
    <button id="show-answer" class="btn btn-success">Show Answer</button>
@endsection

@section('js')
<script>
     const answers = [
        'get down to', 
        'put by', 
        'done away with', 
        'got through', 
        'get along', 
        'do it up', 
        'make out', 
        'put up with',
        'make up for', 
        'making up'
    ];
    let score = 0;
    $("#show-answer").hide(true);

    $('#check-answer').on('click', function() {
        
        $('select').each((idx, item) => {
            $(item).parent().find('i').remove();
            $(item).removeClass('border-success');
            $(item).removeClass('border-danger');

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