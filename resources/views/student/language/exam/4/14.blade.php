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
    $q1 = "In countries which carry out the death sentence there is no perceived reduction in the number of serious crimes.";
    $q11 = ", it seems that capital punishment is not a deterrent to serious crime.";
    $q111 = array(
        'Even though',
        'While',
        'Since',
        'Therefore'
    );
    $q2 = "There is ice on the runway ";
    $q22 = "it looks like the flight will be delayed.";
    $q222 = array(
        'therefore',
        'as a result',
        'so',
        'consequently'
    );
    $q3 = "There are two reasons for choosing to study abroad:";
    $q33 = ", value for money and quality education.";
    $q333 = array(
        'namely',
        'for example',
        'one illustration',
        'both'
    );
    $q4 = "Better communication is one reason for choosing to migrate to urban areas.";
    $q44 = "reason is better education possibilities.";
    $q444 = array(
        'Other',
        'Another',
        'Further',
        'One'
    );
    $q5 = "There are a number of causes of global warming.";
    $q55 = "illegal logging reduces the earth's capacity to absorb carbon dioxide.";
    $q555 = array(
        'First of all',
        'Example',
        'One reason',
        'Such as'
    );
    $q6 = "There are many causes of juvenile crime";
    $q66 = "boredom, poverty and drug abuse.";
    $q666 = array(
        'examples',
        'such as',
        'like',
        'such'
    );
    $q7 = "One reason for urban migration is improved public transportation facilities. ";
    $q77 = "better schooling and more job opportunities attract poor people to the city areas.";
    $q777 = array(
        'Also',
        "What's more,",
        'In addition,',
        'Too,'
    );
    $q8 = " ";
    $q88 = "all the above reasons show that banning the sale of alcohol does not result in fewer alcohol-related problems.";
    $q888 = array(
        'In conclusion,',
        'In conclude,',
        'To conclusion,',
        'To summary,'
    );
    $q9 = "Smoking in public should be prohibited";
    $q99 = "even passive smoking can damage people's health.";
    $q999 = array(
        'because of',
        'since',
        'while',
        'so'
    );
    $q10 = "Too much fast food can lead to obesity.";
    $q100 = "it can cause a number of health problems.";
    $q1000 = array(
        'So',
        'Furthermore,',
        'Since,',
        'While,'
    );
@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['topic']}}
            </p>

            <table class="table table-sm table-bordered text-dark">
                <thead>
                    <tr class="text-center">
                        <th class="font-weight-bold">Qustions</th>
                        <th class="font-weight-bold w-25">Answers</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                        <span class="font-weight-bold mr-2">1.</span>
                        {{$q1}} ___<u></u>___ {{$q11}}</td>
                        <td>
                            <select class="form-control w-100">
                                <option value="">-Select-</option>
                                <option value="{{$q111[0]}}">{{$q111[0]}}</option>
                                <option value="{{$q111[1]}}">{{$q111[1]}}</option>
                                <option value="{{$q111[2]}}">{{$q111[2]}}</option>
                                <option value="{{$q111[3]}}">{{$q111[3]}}</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="font-weight-bold mr-2">2.</span>
                            {{$q2}} ___<u></u>___ {{$q22}}
                        </td>
                        <td>
                            <select class="form-control w-100">
                                <option value="">-Select-</option>
                                <option value="{{$q222[0]}}">{{$q222[0]}}</option>
                                <option value="{{$q222[1]}}">{{$q222[1]}}</option>
                                <option value="{{$q222[2]}}">{{$q222[2]}}</option>
                                <option value="{{$q222[3]}}">{{$q222[3]}}</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="font-weight-bold mr-2">3.</span>
                            {{$q3}} ___<u></u>___ {{$q33}}
                        </td>
                        <td>
                            <select class="form-control w-100">
                                <option value="">-Select-</option>
                                <option value="{{$q333[0]}}">{{$q333[0]}}</option>
                                <option value="{{$q333[1]}}">{{$q333[1]}}</option>
                                <option value="{{$q333[2]}}">{{$q333[2]}}</option>
                                <option value="{{$q333[3]}}">{{$q333[3]}}</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="font-weight-bold mr-2">4.</span>
                            {{$q4}} ___<u></u>___ {{$q44}}
                        </td>
                        <td>
                            <select class="form-control w-100">
                                <option value="">-Select-</option>
                                <option value="{{$q444[0]}}">{{$q444[0]}}</option>
                                <option value="{{$q444[1]}}">{{$q444[1]}}</option>
                                <option value="{{$q444[2]}}">{{$q444[2]}}</option>
                                <option value="{{$q444[3]}}">{{$q444[3]}}</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="font-weight-bold mr-2">5.</span>
                            {{$q5}} ___<u></u>___ {{$q55}}
                        </td>
                        <td>
                            <select class="form-control w-100">
                                <option value="">-Select-</option>
                                <option value="{{$q555[0]}}">{{$q555[0]}}</option>
                                <option value="{{$q555[1]}}">{{$q555[1]}}</option>
                                <option value="{{$q555[2]}}">{{$q555[2]}}</option>
                                <option value="{{$q555[3]}}">{{$q555[3]}}</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span class="font-weight-bold mr-2">6.</span>
                            {{$q6}} ___<u></u>___ {{$q66}}
                        </td>
                        <td>
                            <select class="form-control w-100">
                                <option value="">-Select-</option>
                                <option value="{{$q666[0]}}">{{$q666[0]}}</option>
                                <option value="{{$q666[1]}}">{{$q666[1]}}</option>
                                <option value="{{$q666[2]}}">{{$q666[2]}}</option>
                                <option value="{{$q666[3]}}">{{$q666[3]}}</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span class="font-weight-bold mr-2">7.</span>
                            {{$q7}} ___<u></u>___ {{$q77}}
                        </td>
                        <td>
                            <select class="form-control w-100">
                                <option value="">-Select-</option>
                                <option value="{{$q777[0]}}">{{$q777[0]}}</option>
                                <option value="{{$q777[1]}}">{{$q777[1]}}</option>
                                <option value="{{$q777[2]}}">{{$q777[2]}}</option>
                                <option value="{{$q777[3]}}">{{$q777[3]}}</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span class="font-weight-bold mr-2">8.</span>
                            {{$q8}} ___<u></u>___ {{$q88}}
                        </td>
                        <td>
                            <select class="form-control w-100">
                                <option value="">-Select-</option>
                                <option value="{{$q888[0]}}">{{$q888[0]}}</option>
                                <option value="{{$q888[1]}}">{{$q888[1]}}</option>
                                <option value="{{$q888[2]}}">{{$q888[2]}}</option>
                                <option value="{{$q888[3]}}">{{$q888[3]}}</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span class="font-weight-bold mr-2">9.</span>
                            {{$q9}} ___<u></u>___ {{$q99}}
                        </td>
                        <td>
                            <select class="form-control w-100">
                                <option value="">-Select-</option>
                                <option value="{{$q999[0]}}">{{$q999[0]}}</option>
                                <option value="{{$q999[1]}}">{{$q999[1]}}</option>
                                <option value="{{$q999[2]}}">{{$q999[2]}}</option>
                                <option value="{{$q999[3]}}">{{$q999[3]}}</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span class="font-weight-bold mr-2">10.</span>
                            {{$q10}} ___<u></u>___ {{$q100}}
                        </td>
                        <td>
                            <select class="form-control w-100">
                                <option value="">-Select-</option>
                                <option value="{{$q1000[0]}}">{{$q1000[0]}}</option>
                                <option value="{{$q1000[1]}}">{{$q1000[1]}}</option>
                                <option value="{{$q1000[2]}}">{{$q1000[2]}}</option>
                                <option value="{{$q1000[3]}}">{{$q1000[3]}}</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
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
                                        <dd class="col-sm-10">(adverb): result
                                            <ul class="list-unstyled mark font-weight-bold">
                                                <li>
                                                    clues:
                                                </li>
                                                <li>
                                                    <ul>
                                                        <li>
                                                            death sentence = no perceived reduction
                                                        </li>
                                                        <li>
                                                            capital punishment = not a deterrent to serious crime
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </dd>
                                    
                                        <dt class="col-sm-2">{{$q111[0]}}</dt>
                                        <dd class="col-sm-10">(adverb): contrast</dd>

                                        <dt class="col-sm-2">{{$q111[1]}}</dt>
                                        <dd class="col-sm-10">(subordinate conjunction): time and contrast 
                                            <p class="font-weight-bold text-primary">clause + while + clause</p>
                                        </dd>

                                        <dt class="col-sm-2">{{$q111[2]}}</dt>
                                        <dd class="col-sm-10">(subordinate conjunction): cause
                                            <p class="font-weight-bold text-primary">clause + since + clause</p>
                                        </dd>
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
                                    <dd class="col-sm-10">(coordinate conjunction): result for compound sentences
                                        <p class="font-weight-bold mark">clues: <u>s+v</u> + so + <u>s+v</u>.</p>
                                    </dd>

                                    <dt class="col-sm-2">{{$q222[0]}}</dt>
                                    <dd class="col-sm-10">(adverb): result 
                                        <p class="font-weight-bold text-primary">s+v. Therefore, s+v.</p>
                                    </dd>

                                    <dt class="col-sm-2">{{$q222[1]}}</dt>
                                    <dd class="col-sm-10">(adverb): result
                                        <p class="font-weight-bold text-primary">s+v. As a result, s+v.</p>
                                    </dd>

                                    <dt class="col-sm-2">{{$q222[3]}}</dt>
                                    <dd class="col-sm-10">(adverb): result
                                        <p class="font-weight-bold text-primary">s+v. Consequently, s+v.</p>
                                    </dd>
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
                                    <dd class="col-sm-10">(adv) used when saying the names of things you are referring to                               
                                        <p class="font-weight-bold mark">clues:  value for money / quality education</p>
                                    </dd>

                                    <dt class="col-sm-2">{{$q333[1]}}</dt>
                                    <dd class="col-sm-10">For example, s+v.</dd>

                                    <dt class="col-sm-2">{{$q333[2]}}</dt>
                                    <dd class="col-sm-10">The noun phrase doesn’t link the words.</dd>

                                    <dt class="col-sm-2">{{$q333[3]}}</dt>
                                    <dd class="col-sm-10">The conjunction doesn’t come after a colon (:).</dd>
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
                                    <dd class="col-sm-10">(determiner) Another thing
                                        <p class="font-weight-bold mark">clues: reason (singular nc)</p>
                                    </dd>

                                    <dt class="col-sm-2">{{$q444[0]}}</dt>
                                    <dd class="col-sm-10">Other + nu / plural nc</dd>

                                    <dt class="col-sm-2">{{$q444[2]}}</dt>
                                    <dd class="col-sm-10">Further + nu / plural nc</dd>

                                    <dt class="col-sm-2">{{$q444[3]}}</dt>
                                    <dd class="col-sm-10">One + the first noun</dd>
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
                                <dd class="col-sm-10">(adv)  
                                <p class="font-weight-bold mark">clues: First of all + s+v.</p>
                                </dd>

                                <dt class="col-sm-2">{{$q555[1]}}</dt>
                                <dd class="col-sm-10">(noun)</dd>

                                <dt class="col-sm-2">{{$q555[2]}}</dt>
                                <dd class="col-sm-10">(noun phrase)</dd>

                                <dt class="col-sm-2">{{$q555[3]}}</dt>
                                <dd class="col-sm-10">such as + noun phrase</dd>
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
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q666[1]}}</i></dt>
                                <dd class="col-sm-10">used when giving an example of something
                                    <p class="font-weight-bold mark">clues: such as + noun 1, noun 2 and noun 3 </p>
                                </dd>

                                <dt class="col-sm-2">{{$q666[0]}}</dt>
                                <dd class="col-sm-10">(noun)</dd>

                                <dt class="col-sm-2">{{$q666[2]}}</dt>
                                <dd class="col-sm-10">(preposition) --- <em>informal</em></dd>

                                <dt class="col-sm-2">{{$q666[3]}}</dt>
                                <dd class="col-sm-10">(determiner) of the same kind as the thing or a person which has already been mentioned </dd>
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
                                <dd class="col-sm-10">: Additionally,
                                </dd>

                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q777[2]}}</i></dt>
                                <dd class="col-sm-10">: Additionally,
                                <p class="font-weight-bold mark">clues: urban migration / attract poor people to the city areas</p>
                                </dd>

                                <dt class="col-sm-2">{{$q777[0]}}</dt>
                                <dd class="col-sm-10">Ok but not the best answer --- <em>informal</em></dd>

                                <dt class="col-sm-2">{{$q777[3]}}</dt>
                                <dd class="col-sm-10">- used at the end of the sentence or clause 
                                <br>- used after the subject or adverb  --- <em>formal</em></dd>
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
                                <dd class="col-sm-10">
                                    <p class="font-weight-bold mark">clues: In + noun</p>
                                </dd>

                                <dt class="col-sm-2">{{$q888[1]}}</dt>
                                <dd class="col-sm-10">Ungrammatical (To conclude / In conclusion) </dd>

                                <dt class="col-sm-2">{{$q888[2]}}</dt>
                                <dd class="col-sm-10">Ungrammatical (To conclude / In conclusion)</dd>

                                <dt class="col-sm-2">{{$q888[3]}}</dt>
                                <dd class="col-sm-10">Ungrammatical (To summarise / To summarize / In conclusion)  </dd>
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
                                <dd class="col-sm-10">used to suggest a reason (clause)
                                    <p class="font-weight-bold mark">clues: should be prohibited / damage people’s health</p>
                                </dd>

                                <dt class="col-sm-2">{{$q999[0]}}</dt>
                                <dd class="col-sm-10">used to suggest a reason <em>(noun phrase)</em></dd>

                                <dt class="col-sm-2">{{$q999[2]}}</dt>
                                <dd class="col-sm-10">used to suggest contrasting idea (clause)</dd>

                                <dt class="col-sm-2">{{$q999[3]}}</dt>
                                <dd class="col-sm-10">used to suggest a result (dependent clause)</dd>
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
                                <dd class="col-sm-10"><strong>Additionally</strong>, s+v. 
                                    <p class="font-weight-bold mark">clues: obesity / health problems</p>
                                </dd>

                                <dt class="col-sm-2">{{$q1000[0]}}</dt>
                                <dd class="col-sm-10">s+v <strong>so</strong> s+v.</dd>

                                <dt class="col-sm-2">{{$q1000[2]}}</dt>
                                <dd class="col-sm-10"><strong>Since</strong> s+v, s+v.</dd>

                                <dt class="col-sm-2">{{$q1000[3]}}</dt>
                                <dd class="col-sm-10"><strong>While</strong> s+v, s+v.</dd>
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
    var answer7 = ["What's more,", "In addition,"];
    const answers = [
        'Therefore', 
        'so', 
        'namely', 
        'Another', 
        'First of all', 
        'such as', 
        answer7, 
        'In conclusion,',
        'since', 
        'Furthermore,'
    ];
    
    let score = 0;

    $("#show-answer").hide(true);

    $('#check-answer').on('click', function() {
  
        $('select').each((idx, item) => {
            $(item).parent().find('i').remove();
            $(item).removeClass('border-success');
            $(item).removeClass('border-danger');

            if(idx == 6){
                if($(item).val() == answer7[0] || $(item).val() == answer7[1]) {
                    $(item).addClass('border border-success');
                    score++;
                } else {
                    $(item).addClass('border border-danger');
                }
                
            }else{
                if($(item).val() == answers[idx]) {
                    $(item).addClass('border border-success');
                    score++;
                } else {
                    $(item).addClass('border border-danger');
                }
            }
        })

        $('a u').each((idx, item) => {
            if(idx == 6){
                $(`<span class="text-success"><u>${answer7[0]} / ${answer7[1]}</u></span>`).insertAfter($(item));
            }else{
                $(`<span class="text-success"><u>${Array.isArray(answers[idx]) ? answers[idx][1] : answers[idx]}</u></span>`).insertAfter($(item));
            }
        })

              
        $('td u').each((idx, item) => {
            if(idx == 6){
                $(`<span class="text-success mr-2 ml-2">${answer7[0]} / ${answer7[1]}</span>`).insertAfter($(item));
            }else{
                $(`<span class="text-success mr-2 ml-2">${Array.isArray(answers[idx]) ? answers[idx][1] : answers[idx]}</span>`).insertAfter($(item));
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