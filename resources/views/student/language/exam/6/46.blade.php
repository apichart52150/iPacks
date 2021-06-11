<style>
.mark, mark {
    padding: .2em;
    background-color: #ffc107;
}
</style>
@php
    $q1 = "Concerned with the high level of corruption, the people decided to";
    $q11 = "the government.";
    $q111 = array(
        'bring up',
        'bring down',
        'hand out',
        'hand over'
    );
    $q2 = "The police were urged to";
    $q22 = "the business transaction because of fears of bribery.";
    $q222 = array(
        'look down on',
        'look up',
        'look out',
        'look into'
    );
    $q3 = "People from a higher social status tend to";
    $q33 = "working class people.";
    $q333 = array(
        'look up',
        'look down on',
        'look into',
        'look out'
    );
    $q4 = "The company tried to";
    $q44 = "its main rival but its offer was rejected.";
    $q444 = array(
        'take over',
        'hand out',
        'bring down',
        'look up'
    );
    $q5 = "The teacher asked the class to";
    $q55 = "the homework before the next lesson.";
    $q555 = array(
        'hand out',
        'hand in',
        'look up',
        'bring up'
    );
    $q6 = "The government has decided to";
    $q66 = "new legislation to control illegal deforestation.";
    $q666 = array(
        'look up',
        'look down on',
        'bring in',
        'bring down'
    );
    $q7 = "I strongly feel schools should educate young people on the correct way to";
    $q77 = "children.";
    $q777 = array(
        'bring up',
        'bring down',
        'take over',
        'look out'
    );
    $q8 = "Before leaving the class, the teacher";
    $q88 = "the homework task.";
    $q888 = array(
        'handed in',
        'looked up',
        'looked out',
        'handed out'
    );
    $q9 = "If you don't know the meaning of a word,";
    $q99 = "on the internet.";
    $q999 = array(
        'take it over',
        'bring it in',
        'look it up',
        'look down on it'
    );
    $q10 = " ";
    $q100 = "! That wall is going to collapse soon.";
    $q1000 = array(
        'Look out',
        'Take over',
        'Bring up',
        'Hand out'
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
                                        <dd class="col-sm-10">to cause someone to lose power
                                            <p class="font-weight-bold mark">clues: concerned / corruption / the people / the government</p>
                                        </dd>
                                    
                                        <dt class="col-sm-2">{{$q111[0]}}</dt>
                                        <dd class="col-sm-10">to start to talk about a particular subject</dd>

                                        <dt class="col-sm-2">{{$q111[2]}}</dt>
                                        <dd class="col-sm-10">to give something to each person in a group or place</dd>

                                        <dt class="col-sm-2">{{$q111[3]}}</dt>
                                        <dd class="col-sm-10">to give something to someone else</dd>
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
                                    <dd class="col-sm-10">to try to find out about a problem in order to solve it
                                        <p class="font-weight-bold mark">clues: police / transaction / bribery</p>
                                    </dd>

                                    <dt class="col-sm-2">{{$q222[0]}}</dt>
                                    <dd class="col-sm-10">to think that you are better than someone else</dd>

                                    <dt class="col-sm-2">{{$q222[1]}}</dt>
                                    <dd class="col-sm-10">to find something</dd>

                                    <dt class="col-sm-2">{{$q222[2]}}</dt>
                                    <dd class="col-sm-10">to search for and find a particular thing among your possessions / to beware of something</dd>
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
                                    <dt class="col-sm-2"><i class="text-success mr-2">{{$q333[1]}}</i></dt>
                                    <dd class="col-sm-10"> to think that you are better than someone else                              
                                        <p class="font-weight-bold mark">clues: higher social status / working class people</p>
                                    </dd>

                                    <dt class="col-sm-2">{{$q333[0]}}</dt>
                                    <dd class="col-sm-10">to find something</dd>

                                    <dt class="col-sm-2">{{$q333[2]}}</dt>
                                    <dd class="col-sm-10">to try to find out about a problem in order to solve it</dd>

                                    <dt class="col-sm-2">{{$q333[3]}}</dt>
                                    <dd class="col-sm-10">to search for and find a particular thing among your possessions / to beware of something</dd>
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
                                    <dt class="col-sm-2"><i class="text-success mr-2">{{$q444[0]}}</i></dt>
                                    <dd class="col-sm-10">to replace someone or something
                                        <p class="font-weight-bold mark">clues: rival</p>
                                    </dd>

                                    <dt class="col-sm-2">{{$q444[1]}}</dt>
                                    <dd class="col-sm-10">to give something to each person in a group or place</dd>

                                    <dt class="col-sm-2">{{$q444[2]}}</dt>
                                    <dd class="col-sm-10">to cause someone to lose power</dd>

                                    <dt class="col-sm-2">{{$q444[3]}}</dt>
                                    <dd class="col-sm-10">to find something</dd>
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

                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q555[1]}}</i> </dt>
                                <dd class="col-sm-10">to submit something 
                                    <p class="font-weight-bold mark">clues: the homework before the next lesson</p>
                                </dd>

                                <dt class="col-sm-2">{{$q555[0]}}</dt>
                                <dd class="col-sm-10">to give something to each person in a group or place</dd>

                                <dt class="col-sm-2">{{$q555[2]}}</dt>
                                <dd class="col-sm-10">to find something</dd>

                                <dt class="col-sm-2">{{$q555[3]}}</dt>
                                <dd class="col-sm-10">to start to talk about a particular subject</dd>
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
                                <dd class="col-sm-10">to introduce a new law
                                    <p class="font-weight-bold mark">clues: new legislation</p>
                                </dd>

                                <dt class="col-sm-2">{{$q666[0]}}</dt>
                                <dd class="col-sm-10">to find something</dd>

                                <dt class="col-sm-2">{{$q666[1]}}</dt>
                                <dd class="col-sm-10">to think that you are better than someone else</dd>

                                <dt class="col-sm-2">{{$q666[3]}}</dt>
                                <dd class="col-sm-10">to cause someone to lose power</dd>
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
                                <dd class="col-sm-10">to raise someone  
                                    <p class="font-weight-bold mark">clues: way to / children</p>
                                </dd>

                                <dt class="col-sm-2">{{$q777[1]}}</dt>
                                <dd class="col-sm-10">to cause someone to lose power</dd>

                                <dt class="col-sm-2">{{$q777[2]}}</dt>
                                <dd class="col-sm-10">to replace someone or something</dd>

                                <dt class="col-sm-2">{{$q777[3]}}</dt>
                                <dd class="col-sm-10">to search for and find a particular thing among your possessions / to beware of something</dd>
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
                                <dd class="col-sm-10">gave something to each person in a place
                                    <p class="font-weight-bold mark">clues: homework task</p>
                                </dd>

                                <dt class="col-sm-2">{{$q888[0]}}</dt>
                                <dd class="col-sm-10">submitted something</dd>

                                <dt class="col-sm-2">{{$q888[1]}}</dt>
                                <dd class="col-sm-10">found something</dd>

                                <dt class="col-sm-2">{{$q888[2]}}</dt>
                                <dd class="col-sm-10">searched for and find a particular thing among your possessions / bewared of something</dd>
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
                                <dd class="col-sm-10">find it 
                                    <p class="font-weight-bold mark">clues:  the meaning / on the internet</p>
                                </dd>

                                <dt class="col-sm-2">{{$q999[0]}}</dt>
                                <dd class="col-sm-10">take control of it</dd>

                                <dt class="col-sm-2">{{$q999[1]}}</dt>
                                <dd class="col-sm-10">introduce it</dd>

                                <dt class="col-sm-2">{{$q999[3]}}</dt>
                                <dd class="col-sm-10">think you are better than it</dd>
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
                                <dd class="col-sm-10">beware of something   
                                    <p class="font-weight-bold mark">clues: collapse soon</p>
                                </dd>

                                <dt class="col-sm-2">{{$q1000[1]}}</dt>
                                <dd class="col-sm-10">take control of something</dd>

                                <dt class="col-sm-2">{{$q1000[2]}}</dt>
                                <dd class="col-sm-10">start to talk about a particular subject</dd>

                                <dt class="col-sm-2">{{$q1000[3]}}</dt>
                                <dd class="col-sm-10">give something each person in a group</dd>
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
        'bring down', 
        'look into', 
        'look down on', 
        'take over', 
        'hand in', 
        'bring in', 
        'bring up', 
        'handed out',
        'look it up', 
        'Look out'
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