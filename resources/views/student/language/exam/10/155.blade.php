<style>
.mark, mark {
    padding: .2em;
    background-color: #ffc107;
}

.mark, mark {
    padding: .2em;
    background-color: #ffc107;
}
</style>
@php
    $q1 = "The diagram";
    $q11 = "how the Australian weather department gathers and processes information which it uses to predict the weather.";
    $q111 = array(
        'show',
        'shows',
        'showing',
        'showed'
    );
    $q2 = "Details of weather";
    $q22 = "gathered through the use of satellites in space, radar on land and buoys floating on the sea.";
    $q222 = array(
        'is',
        'is being',
        'are',
        'are being'
    );
    $q3 = "Once the weather forecast";
    $q33 = "produced, the broadcast is prepared.";
    $q333 = array(
        'is being',
        'have been',
        'has been',
        'was'
    );
    $q4 = "It is clear that, while there are a few similarities between the two bicycles, there";
    $q44 = "also significant differences in design.";
    $q444 = array(
        'is',
        'was',
        'are',
        'were'
    );
    $q5 = "Overall, the changes in design of the bicycle";
    $q55 = "the need for speed, safety and comfort.";
    $q555 = array(
        'reflect',
        'reflects',
        'reflecting',
        'are reflecting'
    );
    $q6 = "The diagram shows how the sun’s energy is trapped by greenhouse gases,";
    $q66 = "in the phenomenon known as 'global warming'.";
    $q666 = array(
        'result',
        'results',
        'is resulting',
        'resulting'
    );
    $q7 = "Energy from the sun";
    $q7_7 = "the earth,";
    $q77 = "up the surface.";
    $q777 = array(
        'reached',
        'reaches',
        'reach',
        'reaching'
    );
    $q77_7 = array(
        'heat',
        'heats',
        'heating',
        'heated'
    );
    $q8 = "Trees absorb carbon dioxide, so if the number of trees";
    $q88 = ", the levels of carbon dioxide in the atmosphere will increase.";
    $q888 = array(
        'reduce',
        'reduces',
        'is reducing',
        'is reduced'
    );
    $q9 = "Overall, it is apparent that human activity";
    $q99 = "an important role in this natural process.";
    $q999 = array(
        'play',
        'plays',
        'playing',
        'is played'
    );
    $q10 = "Between 1868 and 1883 the village was relatively small and";
    $q100 = "along the main road.";
    $q1000 = array(
        'is located',
        'locating',
        'was locating',
        'was located'
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
                {{$q7_7}}
                <select class="form-control w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q77_7[0]}}">{{$q77_7[0]}}</option>
                    <option value="{{$q77_7[1]}}">{{$q77_7[1]}}</option>
                    <option value="{{$q77_7[2]}}">{{$q77_7[2]}}</option>
                    <option value="{{$q77_7[3]}}">{{$q77_7[3]}}</option>
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
                                        <dd class="col-sm-10">singular / present simple
                                            <ul class="list-unstyled mark">
                                                <li>
                                                   <strong>clues:</strong>
                                                </li>
                                                <li>
                                                    <ul>
                                                        <li>
                                                        Subject + <strong><u>singular verb</u></strong>
                                                        </li>
                                                        <li>
                                                        The diagram + <strong><u>shows</u></strong>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </dd>
                                    
                                        <dt class="col-sm-2">{{$q111[0]}}</dt>
                                        <dd class="col-sm-10">plural/ present simple</dd>

                                        <dt class="col-sm-2">{{$q111[2]}}</dt>
                                        <dd class="col-sm-10">present participle of <em>"show"</em></dd>

                                        <dt class="col-sm-2">{{$q111[3]}}</dt>
                                        <dd class="col-sm-10">past simple and past participle of <em>"show"</em></dd>
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
                                    <dt class="col-sm-2"><i class="text-success mr-2">{{$q222[2]}}</i></dt>
                                    <dd class="col-sm-10">plural / present simple
                                        <ul class="list-unstyled mark">
                                            <li>
                                                <strong>clues:</strong>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li>
                                                    plural subject + <strong><u>plural verb</u></strong> (passive voice)
                                                    </li>
                                                    <li>
                                                    <strong><u>Details</u></strong> of weather + <strong><u>are</u></strong> gathered 
                                                    <br><em>The sentence talks about a fact and how something works.</em>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </dd>

                                    <dt class="col-sm-2">{{$q222[0]}}</dt>
                                    <dd class="col-sm-10">singular / present simple</dd>

                                    <dt class="col-sm-2">{{$q222[1]}}</dt>
                                    <dd class="col-sm-10">singular / present continuous</dd>

                                    <dt class="col-sm-2">{{$q222[3]}}</dt>
                                    <dd class="col-sm-10">plural / present continuous <em>(temporary events or prediction)</em></dd>
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
                                    <dt class="col-sm-2"><i class="text-success mr-2">{{$q333[2]}}</i></dt>
                                    <dd class="col-sm-10">singular / present perfect                               
                                        <ul class="list-unstyled mark">
                                            <li>
                                                <strong>clues:</strong>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li>
                                                    singular subject + <strong><u>singular verb</u></strong> (passive voice)
                                                    </li>
                                                    <li>
                                                    the weather forecast + <strong><u>has</u> been produced</strong> 
                                                    <br><em>Once + present perfect, present simple</em>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </dd>

                                    <dt class="col-sm-2">{{$q333[0]}}</dt>
                                    <dd class="col-sm-10">singular / present continuous</dd>

                                    <dt class="col-sm-2">{{$q333[1]}}</dt>
                                    <dd class="col-sm-10">plural / present perfect</dd>

                                    <dt class="col-sm-2">{{$q333[3]}}</dt>
                                    <dd class="col-sm-10">past simple</dd>
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
                                    <dd class="col-sm-10">plural / present simple
                                        <ul class="list-unstyled mark">
                                            <li>
                                                <strong>clues:</strong>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li>
                                                    there + <strong><u>plural verb</u></strong> + plural noun
                                                    </li>
                                                    <li>
                                                    there + <strong><u>are</u></strong> + significant differences
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </dd>

                                    <dt class="col-sm-2">{{$q444[0]}}</dt>
                                    <dd class="col-sm-10">singular / present simple</dd>

                                    <dt class="col-sm-2">{{$q444[1]}}</dt>
                                    <dd class="col-sm-10">singular / past simple</dd>

                                    <dt class="col-sm-2">{{$q444[3]}}</dt>
                                    <dd class="col-sm-10">plural / past simple</dd>
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
                                <dd class="col-sm-10">plural / present simple 
                                    <ul class="list-unstyled mark">
                                        <li>
                                            <strong>clues:</strong>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                plural subject + <strong><u>plural verb</u></strong>
                                                </li>
                                                <li>
                                                <strong>the changes</strong> in design of the bicycle + <strong><u></u></strong>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </dd>

                                <dt class="col-sm-2">{{$q555[1]}}</dt>
                                <dd class="col-sm-10">singular / present simple</dd>

                                <dt class="col-sm-2">{{$q555[2]}}</dt>
                                <dd class="col-sm-10">present participle of <em>"reflect"</em></dd>

                                <dt class="col-sm-2">{{$q555[3]}}</dt>
                                <dd class="col-sm-10">plural / past continuous</dd>
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
                                <dd class="col-sm-10">present participle
                                    <p class="mark"><strong>clues:</strong> Sentence, + <strong><u>participial phrase</u></strong></p>
                                </dd>

                                <dt class="col-sm-2">{{$q666[0]}}</dt>
                                <dd class="col-sm-10">infinitive</dd>

                                <dt class="col-sm-2">{{$q666[1]}}</dt>
                                <dd class="col-sm-10">present continuous</dd>

                                <dt class="col-sm-2">{{$q666[2]}}</dt>
                                <dd class="col-sm-10">singular / present simple</dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 6 -->

                <div class="card mb-1">
                    <div class="card-header" id="headingSeven">
                        <h5 class="my-0">
                            <a class="text-primary collapsed" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                7. {{$q7}} <u></u> {{$q7_7}} <u></u> {{$q77}}
                            </a>
                        </h5>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q777[1]}}, {{$q77_7[2]}}</i> </dt>
                                <dd class="col-sm-10">singular / present simple, present participle
                                    <ul class="list-unstyled mark">
                                        <li>
                                            <strong>clues:</strong>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                Sentence, + <strong><u>participial phrase</u></strong>
                                                </li>
                                                <li>
                                                <strong>Energy</strong> from the sun + <strong><u>singular verb</u></strong>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </dd>

                                <dt class="col-sm-2">{{$q777[2]}}, {{$q77_7[0]}}</dt>
                                <dd class="col-sm-10">initive, infinitive</dd>

                                <dt class="col-sm-2">{{$q777[1]}}, {{$q77_7[1]}}</dt>
                                <dd class="col-sm-10">singular / present simple, singular / present simple</dd>

                                <dt class="col-sm-2">{{$q777[2]}}, {{$q77_7[2]}}</dt>
                                <dd class="col-sm-10">plural / present simple, present participle</dd>
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
                                <dd class="col-sm-10">(vt) singular / present simple (passive voice)
                                    <ul class="list-unstyled mark">
                                        <li>
                                            <strong>clues:</strong>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                subject + is + <strong>vt past participle</strong> ------ passive voice
                                                </li>
                                                <li>
                                                <strong>the number</strong> of tress + <strong><u>is reduced</u></strong>
                                                </li>
                                                <li>
                                                subject + vt + object ------ active voice
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </dd>

                                <dt class="col-sm-2">{{$q888[0]}}</dt>
                                <dd class="col-sm-10">infinitive</dd>

                                <dt class="col-sm-2">{{$q888[1]}}</dt>
                                <dd class="col-sm-10">singular / present simple (active voice)</dd>

                                <dt class="col-sm-2">{{$q888[2]}}</dt>
                                <dd class="col-sm-10">singular / present continuous (active voice)</dd>
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
                                <dd class="col-sm-10">(vt) singular / present simple (active voice)
                                    <ul class="list-unstyled mark">
                                        <li>
                                            <strong>clues:</strong>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                subject+ <strong><u>vt</u></strong> + object ------ active voice
                                                </li>
                                                <li>
                                                human activity + <strong>plays</strong> + an important role
                                                </li>
                                                <li>
                                                subject + is + vt past participle ------ passive voice
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </dd>

                                <dt class="col-sm-2">{{$q999[0]}}</dt>
                                <dd class="col-sm-10">infinitive</dd>

                                <dt class="col-sm-2">{{$q999[2]}}</dt>
                                <dd class="col-sm-10">present participle of <em>"play"</em></dd>

                                <dt class="col-sm-2">{{$q999[3]}}</dt>
                                <dd class="col-sm-10">singular / present simple (passive voice)</dd>
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
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q1000[3]}}</i></dt>
                                <dd class="col-sm-10">(vt) singular / past simple (passive voice)
                                    <ul class="list-unstyled mark">
                                        <li>
                                            <strong>clues:</strong>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                subject + was + <strong><u>vt past participle</u></strong> ------ passive voice
                                                </li>
                                                <li>
                                                the village + <strong><u>was located</u></strong>
                                                </li>
                                                <li>
                                                subject + vt + object
                                                </li>
                                                <li>
                                                between 1868 and 1883 = past simple time expression
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </dd>

                                <dt class="col-sm-2">{{$q1000[0]}}</dt>
                                <dd class="col-sm-10">singular / present continuous (passive voice)</dd>

                                <dt class="col-sm-2">{{$q1000[1]}}</dt>
                                <dd class="col-sm-10">present participle of <em>"locate"</em></dd>

                                <dt class="col-sm-2">{{$q1000[2]}}</dt>
                                <dd class="col-sm-10">past continuous (active voice)</dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 10 -->
            </div>
            
        </div>  
    </div>
</div>

@section('button-control')
    <button id="check-answer" class="btn btn-info">Check Answers</button>
    <button id="show-answer" class="btn btn-success">Show Answer</button>
@endsection

@section('js')
<script>
    const answers = [
        'shows', 
        'are', 
        'has been', 
        'are', 
        'reflect', 
        'resulting', 
        'reaches',
        'heating', 
        'is reduced',
        'plays', 
        'was located'
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