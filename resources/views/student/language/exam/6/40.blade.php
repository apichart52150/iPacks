<style>
.mark, mark {
    padding: .2em;
    background-color: #ffc107;
}
</style>
@php
    $q1 = 'Microwave ovens have made it';
    $q11 = 'to prepare food quickly.';
    $q111 = array(
        'possible',
        'possibility',
        'possibly'
    );
    $q2 = 'Nowadays we can prepare food much';
    $q22 = 'than in the past.';
    $q222 = array(
        'fast',
        'faster',
        'fastest'
    );
    $q3 = 'Modern methods of';
    $q33 = 'food have made it posible to enjoy a wide range of food.';
    $q333 = array(
        'preserve',
        'preservation',
        'preserving'
    );
    $q4 = 'People tend to eat much more';
    $q44 = 'than in the past.';
    $q444 = array(
        'health',
        'healthy',
        'healthily'
    );
    $q5 = 'Modern appliances make it easier to prepare food for ';
    $q55 = '.';
    $q555 = array(
        'cooking',
        'cook',
        'cookery'
    );
    $q6 = 'We have far more';
    $q66 = 'when it comes to diet than ever before.';
    $q666 = array(
        'choose',
        'choosy',
        'choice'
    );
    $q7 = 'Globalisation has resulted in a greater';
    $q77 = 'of food available throughout the year.';
    $q777 = array(
        'vary',
        'variety',
        'various'
    );
    $q8 = 'Because of refrigerated containers we can';
    $q88 = 'fruits and vegetables from exotic places.';
    $q888 = array(
        'eat',
        'eating',
        'eaten'
    );
    $q9 = 'We can eat fresh, healthy food every day because modern methods of food preparation and preservation have made life ';
    $q99 = '.';
    $q999 = array(
        'easily',
        'easiest',
        'easier'
    );
    $q10 = 'Fast food can lead to a number of';
    $q100 = 'problems.';
    $q1000 = array(
        'healthy',
        'health',
        'healthily'
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
                                    <dt class="col-sm-2"><i class="text-success mr-2">{{$q111[0]}}</i></dt>
                                    <dd class="col-sm-10">(adj): If something is possible, it can be achieved.
                                    <br><strong><mark>clues: have made + it + adj + to infinitive</mark></strong></dd>
                                
                                    <dt class="col-sm-2">{{$q111[1]}}</dt>
                                    <dd class="col-sm-10">(nc): the fact that something might be true</dd>

                                    <dt class="col-sm-2">{{$q111[2]}}</dt>
                                    <dd class="col-sm-10">(adv): used when saying that something might be true</dd>
                                </dl>
                            </div>
                    </div>
                </div><!-- 1 -->

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
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q222[1]}}</i></dt>
                                <dd class="col-sm-10">(vt): gerund: saving something from being destroyed
                                <br><strong><mark>clues: vt + object + much + <u>comparative adv</u> + than prepare + food + much + faster + than</mark></strong></dd>

                                <dt class="col-sm-2">{{$q222[0]}}</dt>
                                <dd class="col-sm-10">(adv): quickly</dd>

                                <dt class="col-sm-2">{{$q222[2]}}</dt>
                                <dd class="col-sm-10">(adv): superlative adverb of “fast”</dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 2 -->

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
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q333[2]}}</i></dt>
                                <dd class="col-sm-10">(vt): gerund: saving something from being destroyed                                
                                <br><mark><strong>clues: of + <u>gerund</u> + noun</strong></mark></dd>

                                <dt class="col-sm-2">{{$q333[0]}}</dt>
                                <dd class="col-sm-10">(vt): to save something from being destroyed</dd>

                                <dt class="col-sm-2">{{$q333[1]}}</dt>
                                <dd class="col-sm-10">(nu): keeping something in a good condition</dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 3 -->

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
                                <dd class="col-sm-10">(adv): in a way that is good for your body
                                <br><strong><mark>clues:  to eat + <u>adv phrase</u> = to eat + <u>much more healthily</u></mark></strong></dd>

                                <dt class="col-sm-2">{{$q444[0]}}</dt>
                                <dd class="col-sm-10">(adj): good for your body</dd>

                                <dt class="col-sm-2">{{$q444[1]}}</dt>
                                <dd class="col-sm-10">(nu): the general condition of your body</dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 4 -->

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
                                <dd class="col-sm-10">(vi): gerund: preparing food for eating
                                <br><mark><strong>clues: for + <u>gerund</u></strong></mark></dd>

                                <dt class="col-sm-2">{{$q555[1]}}</dt>
                                <dd class="col-sm-10">(vi): preparing food for eatin</dd>

                                <dt class="col-sm-2">{{$q555[2]}}</dt>
                                <dd class="col-sm-10">(nu): the art of cooking</dd>
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
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q666[2]}}</i></dt>
                                <dd class="col-sm-10">(nu): the rage of things that you can choose from
                                <br><mark><strong>clues: have + adv + adj + <u>noun</u> <br>  have + far + more + <u>choice</u></strong></mark></dd>

                                <dt class="col-sm-2">{{$q666[0]}}</dt>
                                <dd class="col-sm-10">(v): to select</dd>

                                <dt class="col-sm-2">{{$q666[1]}}</dt>
                                <dd class="col-sm-10">(adj): difficult to please because you are very exact about what you like</dd>
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
                                <dd class="col-sm-10">(nc): a different type of something 
                                <br><mark><strong>clues: a greater + <u>noun</u></strong></mark></dd>

                                <dt class="col-sm-2">{{$q777[0]}}</dt>
                                <dd class="col-sm-10">(vi): to cause similar things to differ</dd>

                                <dt class="col-sm-2">{{$q777[2]}}</dt>
                                <dd class="col-sm-10">(adj): many different</dd>
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
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q888[0]}}</i> </dt>
                                <dd class="col-sm-10">(vt): to take food into the mouth
                                <br><mark><strong>clues: can + <u>v infinitive</u></strong></mark></dd>

                                <dt class="col-sm-2">{{$q888[1]}}</dt>
                                <dd class="col-sm-10">(v): gerund of “eat”</dd>

                                <dt class="col-sm-2">{{$q888[2]}}</dt>
                                <dd class="col-sm-10">(v): past participle of “eat”</dd>
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
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q999[2]}}</i> </dt>
                                <dd class="col-sm-10">(adj): comparative: needing less effort 
                                <br><mark><strong>clues: have made + noun + <u>adj</u> <br> have made + life + easier</strong></mark></dd>

                                <dt class="col-sm-2">{{$q999[1]}}</dt>
                                <dd class="col-sm-10">(adv): in a way that needs little effort</dd>

                                <dt class="col-sm-2">{{$q999[0]}}</dt>
                                <dd class="col-sm-10">(adj): superlative: needing the least effort
                                We use the superlative degree to compare more than two things. 
                                The sentence compares the life at present and in the past.</dd>
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
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q1000[1]}}</i></dt>
                                <dd class="col-sm-10">(nu): the general condition of your body 
                                <br><mark><strong>clues: compound noun = <u>noun</u> + noun <u>health</u> + problems</strong></mark></dd>

                                <dt class="col-sm-2">{{$q1000[0]}}</dt>
                                <dd class="col-sm-10">(adj): good for your body</dd>

                                <dt class="col-sm-2">{{$q1000[2]}}</dt>
                                <dd class="col-sm-10">(adv): in a way that is good for your body</dd>
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
        'possible', 
        'faster', 
        'preserving', 
        'healthily', 
        'cooking', 
        'choice', 
        'variety', 
        'eat',
        'easier', 
        'health'
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
        } else {
            $("#show-answer").text('Show Answer');
            x.style.display = "none";
        }
    });
   
</script>
@stop