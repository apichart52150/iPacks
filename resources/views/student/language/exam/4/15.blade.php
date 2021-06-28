<style>
.mark, mark {
    padding: .2em;
    background-color: #ffc107;
}
</style>
@php
    $q1 = " ";
    $q11 = "I agree that the punishment should fit the crime, I don't agree that the death penalty is an effective deterrent to serious crime.";
    $q111 = array(
        'However',
        'Whereas',
        'Yet',
        'While'
    );
    $q2 = "I don't like cats ";
    $q22 = "I don't think that people should be cruel to them.";
    $q222 = array(
        'however',
        'although',
        'while',
        'even though'
    );
    $q3 = "There was a steady rise until 1990;";
    $q33 = ", after that the trend was downward.";
    $q333 = array(
        'however',
        'while',
        'whereas',
        'but'
    );
    $q4 = " ";
    $q44 = "the general trend was positive, there were some periods of instability.";
    $q444 = array(
        'Even',
        'Whereas',
        'Although',
        'But'
    );
    $q5 = "In 2005 there were serious floods.";
    $q55 = ", the following year saw a terrible drought.";
    $q555 = array(
        'Although',
        'While',
        'In contrast',
        'Whereas'
    );
    $q6 = "Last year's figures showed a decrease";
    $q66 = "the figures for this year have so far been in positive territory.";
    $q666 = array(
        'whereas',
        'however',
        'in contrast',
        'since'
    );
    $q7 = " ";
    $q77 = "the total revenue grew by more than 10%, the total number of vehicles sold dropped by 5%.";
    $q777 = array(
        'Even',
        'Although',
        'But',
        'However'
    );
    $q8 = " ";
    $q88 = "he learnt to speak French very well, he didn't enjoy his time studying in Paris.";
    $q888 = array(
        'Even though',
        'Even',
        'However',
        'But'
    );
    $q9 = "He's been living in the same apartment for twenty years";
    $q99 = "he doesn't particularly like the area.";
    $q999 = array(
        'while',
        'however',
        'whereas',
        'yet'
    );
    $q10 = "I wouldn't do your job ";
    $q100 = "you gave me a million dollars.";
    $q1000 = array(
        'although',
        'even though',
        'even if',
        'while'
    );
@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['topic']}} (Contrast)
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
                                        <dt class="col-sm-2"><i class="text-success mr-2">{{$q111[3]}}</i></dt>
                                        <dd class="col-sm-10"><strong>While</strong> + s+v, s+v.</dd>
                                    
                                        <dt class="col-sm-2"><i class="text-success mr-2">{{$q111[1]}}</i></dt>
                                        <dd class="col-sm-10"><strong>Whereas</strong> + s+v, s+v.
                                            <p class="font-weight-bold mark">clues: I agree..., I don't agree...</p>
                                        </dd>

                                        <dt class="col-sm-2">{{$q111[2]}}</dt>
                                        <dd class="col-sm-10">s+v <strong>yet</strong> s+v.</dd>

                                        <dt class="col-sm-2">{{$q111[0]}}</dt>
                                        <dd class="col-sm-10">s+v. <strong>However</strong>, s+v.</dd>
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
                                    <dt class="col-sm-2"><i class="text-success mr-2">{{$q222[1]}}</i></dt>
                                    <dd class="col-sm-10">- used to introduce a statement that makes the main statement seem surprising
                                    <br> -  used to add a statement that balances or reduces the effect of what you have just said
                                        <ul class="list-unstyled mark">
                                            <li>
                                                <strong>clues:</strong>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li>
                                                    s+v <strong>although</strong> s+v.
                                                    </li>
                                                    <li>
                                                    I don't like cats... .I don't think...
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </dd>

                                    <dt class="col-sm-2">{{$q222[0]}}</dt>
                                    <dd class="col-sm-10">s+v. <strong>However</strong>, s+v.</dd>

                                    <dt class="col-sm-2">{{$q222[2]}}</dt>
                                    <dd class="col-sm-10">s+v <strong>while</strong> s+v.</dd>

                                    <dt class="col-sm-2">{{$q222[3]}}</dt>
                                    <dd class="col-sm-10">s+v, <strong>even though</strong> s+v.
                                    <br>- used to emphasize that something is true although something else has happened or is true </dd>
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
                                    <dd class="col-sm-10">used to add a different piece of information                               
                                        <ul class="list-unstyled mark">
                                            <li>
                                                <strong>clues:</strong>
                                            </li>
                                            <li>
                                            <ul>
                                                <li>
                                                    s+v; <strong>however</strong>, s+v.
                                                </li>
                                                <li>
                                                    a steady rise / downward
                                                </li>
                                            </ul>
                                        </ul>
                                    </dd>

                                    <dt class="col-sm-2">{{$q333[1]}}</dt>
                                    <dd class="col-sm-10">s+v <strong>while</strong> s+v.</dd>

                                    <dt class="col-sm-2">{{$q333[2]}}</dt>
                                    <dd class="col-sm-10">s+v <strong>whereas</strong> s+v.
                                    <br>used to contrast two different things or people which are supposed to be the same</dd>

                                    <dt class="col-sm-2">{{$q333[3]}}</dt>
                                    <dd class="col-sm-10">s+v <strong>but</strong> s+v.</dd>
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
                                    <dd class="col-sm-10">used to introduce a statement that makes the main statement seem surprising 
                                        <p class="font-weight-bold mark">clues: <strong>Although</strong> s+v, s+v.</p>
                                    </dd>

                                    <dt class="col-sm-2">{{$q444[0]}}</dt>
                                    <dd class="col-sm-10">(adv) used to emphasize something surprising. It doesn’t link two clauses.</dd>

                                    <dt class="col-sm-2">{{$q444[1]}}</dt>
                                    <dd class="col-sm-10">Used to say that although something is true of one thing, it is not true of another <br><strong>Whereas</strong> s+v, s+v.</dd>

                                    <dt class="col-sm-2">{{$q444[3]}}</dt>
                                    <dd class="col-sm-10">: s+v <strong>but</strong> s+v.</dd>
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

                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q555[2]}}</i> </dt>
                                <dd class="col-sm-10">used to say that something is different from another 
                                <p class="font-weight-bold mark">clues: s+v. <strong>In contrast</strong>, s+v.</p>
                                </dd>

                                <dt class="col-sm-2">{{$q555[0]}}</dt>
                                <dd class="col-sm-10">s+v <strong>although</strong> s+v.</dd>

                                <dt class="col-sm-2">{{$q555[1]}}</dt>
                                <dd class="col-sm-10">s+v <strong>while</strong> s+v. </dd>

                                <dt class="col-sm-2">{{$q555[3]}}</dt>
                                <dd class="col-sm-10">used to say that although something is true of one thing, it is not true of another <br><strong>Whereas</strong> s+v, s+v. </dd>
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
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q666[0]}}</i></dt>
                                <dd class="col-sm-10">used to say that although something is true of one thing, it is not true of another
                                    <ul class="list-unstyled mark">
                                        <li>
                                            <strong>clues:</strong>
                                        </li>
                                        <li>
                                        <ul>
                                            <li>
                                                s+v <strong>whereas</strong> s+v. 
                                            </li>
                                            <li>
                                                a decrease / positive territory
                                            </li>
                                            <li>
                                                Last year’s figures / the figures for this year
                                            </li>
                                        </ul>
                                    </ul>
                                </dd>

                                <dt class="col-sm-2">{{$q666[1]}}</dt>
                                <dd class="col-sm-10">s+v. <strong>However</strong>, s+v.</dd>

                                <dt class="col-sm-2">{{$q666[2]}}</dt>
                                <dd class="col-sm-10">s+v. <strong>In contrast</strong>, s+v.</dd>

                                <dt class="col-sm-2">{{$q666[3]}}</dt>
                                <dd class="col-sm-10">used to suggest a reason <br>s+v <strong>since</strong> s+v.</dd>
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
                                <dd class="col-sm-10">used to introduce a statement that makes another statement seem surprising 
                                    <p class="font-weight-bold mark">clues: <strong>Although</strong> s+v, s+v.</p>
                                </dd>

                                <dt class="col-sm-2">{{$q777[0]}}</dt>
                                <dd class="col-sm-10">(adv) used to emphasize something surprising. It doesn’t link two clauses.</dd>

                                <dt class="col-sm-2">{{$q777[2]}}</dt>
                                <dd class="col-sm-10">s+v. <strong>However</strong>, s+v.</dd>

                                <dt class="col-sm-2">{{$q777[3]}}</dt>
                                <dd class="col-sm-10">s+v <strong>but</strong> s+v.</dd>
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
                                <dd class="col-sm-10">used to emphasize that something is true although something else is true
                                    <p class="font-weight-bold mark">clues: <strong>Even though </strong> s+v, s+v.</p>
                                </dd>

                                <dt class="col-sm-2">{{$q888[1]}}</dt>
                                <dd class="col-sm-10">(adv) used to emphasize something surprising. It doesn’t link  two clauses.</dd>

                                <dt class="col-sm-2">{{$q888[2]}}</dt>
                                <dd class="col-sm-10">s+v. <strong>However</strong>, s+v.</dd>

                                <dt class="col-sm-2">{{$q888[3]}}</dt>
                                <dd class="col-sm-10">s+v <strong>but</strong> s+v.</dd>
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
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q999[3]}}</i> </dt>
                                <dd class="col-sm-10">used to introduce a surprising fact after what you have just said  
                                    <ul class="list-unstyled mark">
                                        <li>
                                            <strong>clues:</strong>
                                        </li>
                                        <li>
                                        <ul>
                                            <li>
                                                s+v <strong>yet</strong> s+v.
                                            </li>
                                            <li>
                                                twenty years / doesn't particularly like
                                            </li>
                                        </ul>
                                    </ul>
                                </dd>

                                <dt class="col-sm-2">{{$q999[0]}}</dt>
                                <dd class="col-sm-10">used to emphasize the difference between two situations</dd>

                                <dt class="col-sm-2">{{$q999[1]}}</dt>
                                <dd class="col-sm-10">s+v. <strong>However</strong>, s+v.</dd>

                                <dt class="col-sm-2">{{$q999[2]}}</dt>
                                <dd class="col-sm-10">- used to say that although something is true of one thing, it is not true of another 
                                <br>- used to contrast two different things or people which are supposed to be the same</dd>
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
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q1000[2]}}</i></dt>
                                <dd class="col-sm-10">used to emphasize that something is still true although another thing happens  
                                    <ul class="list-unstyled mark">
                                        <li>
                                            <strong>clues:</strong>
                                        </li>
                                        <li>
                                        <ul>
                                            <li>
                                                s+v <strong>even if</strong> s+v.
                                            </li>
                                            <li>
                                                s + wouldn't + v infinitive + <strong>even if</strong> + s +v past simple <br> I + wouldn’t + do... <strong>even</strong> if + you + gave... .
                                            </li>
                                        </ul>
                                    </ul>
                                </dd>

                                <dt class="col-sm-2">{{$q1000[0]}}</dt>
                                <dd class="col-sm-10">used to introduce a statement that makes another statement seem surprising</dd>

                                <dt class="col-sm-2">{{$q1000[1]}}</dt>
                                <dd class="col-sm-10">used to emphasize that something is true although something else has happened or is true</dd>

                                <dt class="col-sm-2">{{$q1000[3]}}</dt>
                                <dd class="col-sm-10">used to emphasize the difference between two situations</dd>
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
    var answer1 = ['While', 'Whereas'];
    const answers = [
        answer1, 
        'although', 
        'however', 
        'Although', 
        'In contrast', 
        'whereas', 
        'Although', 
        'Even though',
        'yet', 
        'even if'
    ];
    let score = 0;
    $("#show-answer").hide(true);

    $('#check-answer').on('click', function() {
        
        $('select').each((idx, item) => {
            $(item).parent().find('i').remove();
            $(item).removeClass('border-success');
            $(item).removeClass('border-danger');

            if(idx == 0){
                if($(item).val() == answer1[0] || $(item).val() == answer1[1]) {
                    $(item).addClass('border border-success');
                    $('<i class="fas fa-check text-success mr-2"></i>').insertAfter($(item));
                    score++;
                } else {
                    $(item).addClass('border border-danger');
                    $(`<span class="text-success mr-2 ml-2">${answer1[0]} / ${answer1[1]}</span>`).insertAfter($(item));
                }
            }else{
                if($(item).val() == answers[idx]) {
                    $(item).addClass('border border-success');
                    $('<i class="fas fa-check text-success mr-2"></i>').insertAfter($(item));
                    score++;
                } else {
                    $(item).addClass('border border-danger');
                    $(`<i class="fas fa-times text-danger mr-2"></i><span class="text-success mr-2">${Array.isArray(answers[idx]) ? answers[idx][1] : answers[idx]}</span>`).insertAfter($(item));
                }
            }
        })

        $('a u').each((idx, item) => {
            if(idx == 0){
                $(`<span class="text-success"><u>${answer1[0]} / ${answer1[1]}</u></span>`).insertAfter($(item));
            }else{
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