<style>
.mark, mark {
    padding: .2em;
    background-color: #ffc107;
}
</style>
@php
    $q1 = 'Studying a language in the country where the language is spoken has a';
    $q11 = 'range of benefits.';
    $q111 = array(
        'wide',
        'width',
        'widely'
    );
    $q2 = 'However, it is certainly not the only way to';
    $q22 = 'a foreign language.';
    $q222 = array(
        'learn',
        'learning',
        'learned'
    );
    $q3 = 'There are, of course, ovbious advantages of';
    $q33 = 'English in a country such as Britain or Australia.';
    $q333 = array(
        'learn',
        'learning',
        'learned'
    );
    $q4 = 'Continuous exposure to the target language will lead to greater';
    $q44 = 'than simply studying it in a classroom.';
    $q444 = array(
        'improve',
        'improving',
        'improvement'
    );
    $q5 = 'Although it is';
    $q55 = "to study English in an English-speaking country, a reasonable level of English can still be achieved in one's own country.";
    $q555 = array(
        'prefer',
        'preferable',
        'preference'
    );
    $q6 = 'Since many of the rainforest animals are';
    $q66 = ', it would make sense for governments to pass laws to protect them.';
    $q666 = array(
        'danger',
        'dangerous',
        'endangered'
    );
    $q7 = 'Although nuclear weapons pose a great threat to';
    $q77 = 'on earth, the use of such technology for peaceful purposes cannot be doubted.';
    $q777 = array(
        'live',
        'life',
        'alive'
    );
    $q8 = 'Telecommuting means that';
    $q88 = 'can carry out their work at home rather than in an office.';
    $q888 = array(
        'employees',
        'employed',
        'employment'
    );
    $q9 = 'Telecommuting refers to office staff';
    $q99 = 'from home rather than in a centralised office.';
    $q999 = array(
        'work',
        'working',
        'worked'
    );
    $q10 = 'Food is a';
    $q100 = 'part of life and so people should be very aware of what they are eating.';
    $q1000 = array(
        'basis',
        'basic',
        'basically'
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
                                    <dd class="col-sm-10">(adj): with many different types of things
                                    <br><strong><mark>clues: a + <u>adjective</u> + noun = a + <u>wide</u> + range</mark></strong></dd>
                                
                                    <dt class="col-sm-2">{{$q111[1]}}</dt>
                                    <dd class="col-sm-10">(n): the distance of something from one side to the other</dd>

                                    <dt class="col-sm-2">{{$q111[2]}}</dt>
                                    <dd class="col-sm-10">(adv): by many, including a lot of different things, people, or places</dd>
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
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q222[0]}}</i></dt>
                                <dd class="col-sm-10">(vt): to gain knowledge or experience
                                <br><mark><strong>clues: the way to + infinitive</strong></mark></dd>

                                <dt class="col-sm-2">{{$q222[1]}}</dt>
                                <dd class="col-sm-10">(vt): gerund of <em>"learn"</em></dd>

                                <dt class="col-sm-2">{{$q222[2]}}</dt>
                                <dd class="col-sm-10">(vt): past simple / past participle of <em>"learn"</em></dd>
                                
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
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q333[1]}}</i></dt>
                                <dd class="col-sm-10"> (vt): gerund of <em>"learn"</em>                                
                                <br><mark><strong>clues: of + <u>gerund</u></strong></mark></dd>

                                <dt class="col-sm-2">{{$q333[0]}}</dt>
                                <dd class="col-sm-10">(vt): to gain knowledge or experience</dd>

                                <dt class="col-sm-2">{{$q333[2]}}</dt>
                                <dd class="col-sm-10">(vt): past simple/ past participle of <em>"learn"</em></dd>
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
                                <dd class="col-sm-10">(nc): the process of getting better
                                <br><strong><mark>clues: adjective + <u>noun</u> = greater + <u>improvement</u></mark></strong></dd>

                                <dt class="col-sm-2">{{$q444[0]}}</dt>
                                <dd class="col-sm-10">(vt): to make something better</dd>

                                <dt class="col-sm-2">{{$q444[1]}}</dt>
                                <dd class="col-sm-10">(vt): present participle of <em>improve</em></dd>
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
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q555[1]}}</i> </dt>
                                <dd class="col-sm-10">(adj): better or more suitable
                                <br><mark><strong>clues: it is + <u>adjective</u> + to infinitive</strong></mark></dd>

                                <dt class="col-sm-2">{{$q555[0]}}</dt>
                                <dd class="col-sm-10">(vt): to choose one thing rather than another</dd>

                                <dt class="col-sm-2">{{$q555[2]}}</dt>
                                <dd class="col-sm-10">(nc): the fact that you like something more than another</dd>
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
                                <dd class="col-sm-10">(adj): in danger of being harmed or lost
                                 <br><mark><strong>clues: the rainforest animals / to pass laws to protect them</strong></mark></dd>

                                <dt class="col-sm-2">{{$q666[0]}}</dt>
                                <dd class="col-sm-10">(nc): the possibility of harm or death to someone</dd>

                                <dt class="col-sm-2">{{$q666[1]}}</dt>
                                <dd class="col-sm-10">(adj): likely to cause harm or death to someone </dd>
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
                                <dd class="col-sm-10">(nu): everything that is alive 
                                <br><mark><strong>clues: a great threat to + <u>noun</u></strong></mark></dd>

                                <dt class="col-sm-2">{{$q777[0]}}</dt>
                                <dd class="col-sm-10">(vi): to have life, to have home somewhere</dd>

                                <dt class="col-sm-2">{{$q777[2]}}</dt>
                                <dd class="col-sm-10">(adj): living, not dead</dd>
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
                                <dd class="col-sm-10">(nc): people who are paid to work for someone else
                                    <ul class="list-unstyled mark font-weight-bold">
                                        <li>
                                            clues:
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                    that + <u>subject pronoun</u> + v
                                                </li>
                                                <li>
                                                    that + <u>employees</u> + can carry out
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </dd>
                                <dt class="col-sm-2">{{$q888[1]}}</dt>
                                <dd class="col-sm-10">(vt): had someone do a job for you and paid them for it</dd>

                                <dt class="col-sm-2">{{$q888[2]}}</dt>
                                <dd class="col-sm-10">(nu): work that you are paid to do for a company</dd>

                                <dt class="col-sm-2">carry out</dt>
                                <dd class="col-sm-10">(phrasal verb): to conduct, to do a job</dd>
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
                                <dd class="col-sm-10">(vi): present participle for <em>"who work"</em> 
                                <br><mark><strong>clues: office staff + <u>present participle of <em>"work"</em></u> showing an active meaning</strong></mark></dd>

                                <dt class="col-sm-2">{{$q999[0]}}</dt>
                                <dd class="col-sm-10">(vi): to do a job</dd>

                                <dt class="col-sm-2">{{$q999[2]}}</dt>
                                <dd class="col-sm-10">(vi): past participle of <em>"work"</em></dd>
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
                                <dd class="col-sm-10">(adj): simple and not complicated 
                                <br><mark><strong>clues: a + <u>adjective</u> + noun = a + <u>basic</u> + part </strong></mark></dd>

                                <dt class="col-sm-2">{{$q1000[0]}}</dt>
                                <dd class="col-sm-10">(nc): a way or method of doing something</dd>

                                <dt class="col-sm-2">{{$q1000[2]}}</dt>
                                <dd class="col-sm-10">(adv): in a way that is simple</dd>
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
        'wide', 
        'learn', 
        'learning', 
        'improvement', 
        'preferable', 
        'endangered', 
        'life', 
        'employees',
        'working', 
        'basic'
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