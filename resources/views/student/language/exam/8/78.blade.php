<style>
.mark, mark {
    padding: .2em;
    background-color: #ffc107;
}
</style>
@php
    $q1 = "There";
    $q11 = "a lot of developments in technology in the last few decades.";
    $q111 = array(
        'has been',
        'have been',
        'was',
        'were'
    );
    $q2 = "In Singapore";
    $q22 = "many skyscrapers and condominiums because there is not much space available.";
    $q222 = array(
        'has',
        'have',
        'there is',
        'there are'
    );
    $q3 = "Thailand";
    $q33 = "a large number of places of historical interest.";
    $q333 = array(
        'has',
        'have',
        'is',
        'are'
    );
    $q4 = "Between 2000 and 2005 there";
    $q44 = "a sharp decrease in the number of new homes constructed.";
    $q444 = array(
        'is',
        'are',
        'was',
        'were'
    );
    $q5 = "In my opinion, cannabis should";
    $q55 = "decriminalized.";
    $q555 = array(
        'be',
        'being',
        'have',
        'been'
    );
    $q6 = "In the next 20 years the sales of new vehicles is";
    $q66 = "to fall significantly.";
    $q666 = array(
        'expecting',
        'might',
        'having',
        'expected'
    );
    $q7 = "During the final decade, the birth-rate";
    $q77 = "significantly.";
    $q777 = array(
        'fell',
        'was falling',
        'fall',
        'felt'
    );
    $q8 = "With the exception of Asia, investment";
    $q88 = "in all regions in the last few months.";
    $q888 = array(
        'was decreasing',
        'decreases',
        'decreased',
        'has decreased'
    );
    $q9 = "Statistics";
    $q99 = "that the mortality rate slowed during the final quarter of last year.";
    $q999 = array(
        'show',
        'shows',
        'is showing',
        'are showing'
    );
    $q10 = "By the end of last century, smallpox ";
    $q100 = "eradicated from the world.";
    $q1000 = array(
        'was being',
        'has been',
        'had been',
        'have been'
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
                                        <dd class="col-sm-10"> plural / present perfect
                                            <ul class="list-unstyled mark">
                                                <li>
                                                    clues:
                                                </li>
                                                <li>
                                                    <ul>
                                                        <li>
                                                        present perfect tense + <strong>in the last</strong> few = decades
                                                        </li>
                                                        <li>
                                                        There + <strong><u>have been</u></strong> + plural noun
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </dd>
                                    
                                        <dt class="col-sm-2">{{$q111[0]}}</dt>
                                        <dd class="col-sm-10"> singular / present perfect </dd>

                                        <dt class="col-sm-2">{{$q111[2]}}</dt>
                                        <dd class="col-sm-10"> singular / past simple</dd>

                                        <dt class="col-sm-2">{{$q111[3]}}</dt>
                                        <dd class="col-sm-10"> plural / past simple</dd>
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
                                    <dd class="col-sm-10"> plural / present simple
                                        <p class="mark">clues: <strong>there are</strong> + plural noun</p>
                                    </dd>

                                    <dt class="col-sm-2">{{$q222[0]}}</dt>
                                    <dd class="col-sm-10"> Singular subject + has</dd>

                                    <dt class="col-sm-2">{{$q222[1]}}</dt>
                                    <dd class="col-sm-10"> Plural subject + have</dd>

                                    <dt class="col-sm-2">{{$q222[2]}}</dt>
                                    <dd class="col-sm-10"> there is + singular noun</dd>
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
                                    <dd class="col-sm-10"> singular / present simple                             
                                        <p class="mark">clues:  <strong>Thailand</strong> + singular verb</p>
                                    </dd>

                                    <dt class="col-sm-2">{{$q333[1]}}</dt>
                                    <dd class="col-sm-10"> plural subject + have</dd>

                                    <dt class="col-sm-2">{{$q333[2]}}</dt>
                                    <dd class="col-sm-10"> plural subject + are</dd>

                                    <dt class="col-sm-2">{{$q333[3]}}</dt>
                                    <dd class="col-sm-10"> singular subject + is</dd>
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
                                    <dt class="col-sm-2"><i class="text-success mr-2">{{$q444[3]}}</i></dt>
                                    <dd class="col-sm-10"> plural / past simple
                                        <p class="mark">clues: between 2000 and 2005</p>
                                    </dd>

                                    <dt class="col-sm-2">{{$q444[0]}}</dt>
                                    <dd class="col-sm-10"> singular subject + is</dd>

                                    <dt class="col-sm-2">{{$q444[1]}}</dt>
                                    <dd class="col-sm-10"> plural subject + are</dd>

                                    <dt class="col-sm-2">{{$q444[2]}}</dt>
                                    <dd class="col-sm-10"> singular subject + was</dd>
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
                                <dd class="col-sm-10"> infinitive  
                                    <ul class="list-unstyled mark">
                                        <li>
                                            clues:
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                should + <strong>be</strong> + v past participle (passive voice) 
                                                </li>
                                                <li>
                                                should + <strong>be</strong> + decriminalized   
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </dd>

                                <dt class="col-sm-2">{{$q555[1]}}</dt>
                                <dd class="col-sm-10"> present participle</dd>

                                <dt class="col-sm-2">{{$q555[2]}}</dt>
                                <dd class="col-sm-10"> infinitive</dd>

                                <dt class="col-sm-2">{{$q555[3]}}</dt>
                                <dd class="col-sm-10"> past participle of <em>"be"</em></dd>
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
                                <dd class="col-sm-10"> (vt) past participle of <em>"expect"</em>
                                    <ul class="list-unstyled mark">
                                        <li>
                                            clues:
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                subject + is + <strong>vt past participle</strong> (passive voice)
                                                </li>
                                                <li>
                                                the sales of new vehicles + is + <strong>expected</strong>
                                                </li>
                                                <li>
                                                subject + vt + object (active voice)  
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </dd>

                                <dt class="col-sm-2">{{$q666[0]}}</dt>
                                <dd class="col-sm-10"> past participle of <em>"expect"</em></dd>

                                <dt class="col-sm-2">{{$q666[1]}}</dt>
                                <dd class="col-sm-10"> modal verb</dd>
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
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q777[0]}}</i> </dt>
                                <dd class="col-sm-10"> (vt) past simple <em>"fall"</em> 
                                    <p class="mark">clues: during the final decade + <strong>subject + past simple verb</strong></p>
                                </dd>

                                <dt class="col-sm-2">{{$q777[1]}}</dt>
                                <dd class="col-sm-10">past continuous of <em>"fall"</em> </dd>

                                <dt class="col-sm-2">{{$q777[2]}}</dt>
                                <dd class="col-sm-10">infinitive</dd>

                                <dt class="col-sm-2">{{$q777[3]}}</dt>
                                <dd class="col-sm-10">past simple and past participle of <em>"feel"</em></dd>
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
                                <dd class="col-sm-10">singular / present perfect 
                                    <p class="mark">clues: present perfect + <strong><u>in the last</u></strong> few months</p>
                                </dd>

                                <dt class="col-sm-2">{{$q888[0]}}</dt>
                                <dd class="col-sm-10">past continuous</dd>

                                <dt class="col-sm-2">{{$q888[1]}}</dt>
                                <dd class="col-sm-10">present simple</dd>

                                <dt class="col-sm-2">{{$q888[2]}}</dt>
                                <dd class="col-sm-10">past simple</dd>
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
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q999[0]}}</i> </dt>
                                <dd class="col-sm-10">plural / present simple 
                                    <p class="mark">clues: Statistics + <strong><u>plural verb</u></strong></p>
                                </dd>

                                <dt class="col-sm-2">{{$q999[1]}}</dt>
                                <dd class="col-sm-10">singular / present simple</dd>

                                <dt class="col-sm-2">{{$q999[2]}}</dt>
                                <dd class="col-sm-10">singular / present continuous</dd>

                                <dt class="col-sm-2">{{$q999[3]}}</dt>
                                <dd class="col-sm-10">plural / present continuous</dd>
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
                                <dd class="col-sm-10">past perfect /passive voice 
                                    <ul class="list-unstyled mark">
                                        <li>
                                            clues:
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                had been + <strong><u>v past participle</u></strong> = had been + <strong><u>eradicated</u></strong>
                                                </li>
                                                <li>
                                                by the end of last century = past perfect time expression
                                                </li>
                                                <li>
                                                subject + vt + object (active voice)  
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </dd>

                                <dt class="col-sm-2">{{$q1000[0]}}</dt>
                                <dd class="col-sm-10">singular / past continuous</dd>

                                <dt class="col-sm-2">{{$q1000[1]}}</dt>
                                <dd class="col-sm-10">singular / present perfect</dd>

                                <dt class="col-sm-2">{{$q1000[3]}}</dt>
                                <dd class="col-sm-10">plural / present perfect</dd>
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
        'have been', 
        'there are', 
        'has', 
        'were', 
        'be', 
        'expected', 
        'fell', 
        'has decreased',
        'show', 
        'had been'
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