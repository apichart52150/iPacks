<style>
.mark, mark {
    padding: .2em;
    background-color: #ffc107;
}
</style>
@php
    $q1 = 'Nowadays many people have expressed their concerns over nuclear technology because of the associated';
    $q11 = '.';
    $q111 = array(
        'endanger',
        'dangerous',
        'dangers'
    );
    $q2 = 'Anyone who';
    $q22 = 'in a city is aware of the increasing number of cars on the roads.';
    $q222 = array(
        'lives',
        'living',
        'live'
    );
    $q3 = 'There are a number of ways of';
    $q33 = 'people to use public transport in cities.';
    $q333 = array(
        'encourage',
        'encouraging',
        'encouraged'
    );
    $q4 = 'A large number of';
    $q44 = 'now have the technological expertise required to produce nuclear weapons.';
    $q444 = array(
        'nation',
        'nations',
        'national'
    );
    $q5 = 'One way to encourage people to use public transport is to make private vehicles more expensive and';
    $q55 = '.';
    $q555 = array(
        'inconvenience',
        'inconvenient',
        'inconveniently'
    );
    $q6 = 'The age of retirement';
    $q66 = 'from country to country.';
    $q666 = array(
        'variety',
        'various',
        'varies'
    );
    $q7 = 'As people live longer they are able to contribute more to';
    $q77 = '.';
    $q777 = array(
        'society',
        'social',
        'socialise'
    );
    $q8 = 'The problem of air pollution is';
    $q88 = 'one which affects us all.';
    $q888 = array(
        'clarity',
        'clear',
        'clearly'
    );
    $q9 = "Learning a foreign language in one's own country cannot";
    $q99 = 'to learning the language in the country where it is spoken.';
    $q999 = array(
        'comparison',
        'compared',
        'compare'
    );
    $q10 = 'Recycling can make a huge';
    $q100 = 'to pollution both on land and at sea.';
    $q1000 = array(
        'differ',
        'different',
        'difference'
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
                                    <dt class="col-sm-2"><i class="text-success mr-2">{{$q111[2]}}</i></dt>
                                    <dd class="col-sm-10">(nc): the possibility of harms or death to someone 
                                    <br><strong><mark>clues: the + adjective + noun = the associated dangers</mark></strong></dd>
                                
                                    <dt class="col-sm-2">{{$q111[0]}}</dt>
                                    <dd class="col-sm-10">(vt): to put someone or something at risk</dd>

                                    <dt class="col-sm-2">{{$q111[1]}}</dt>
                                    <dd class="col-sm-10">(adj): harmful</dd>
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
                                <dd class="col-sm-10">(vi): has home somewhere
                                <br><strong><mark>clues: Anyone + who + <u>v singular</u></mark></strong></dd>

                                <dt class="col-sm-2">{{$q222[1]}}</dt>
                                <dd class="col-sm-10">(vi): present participle / gerund: having home somewhere</dd>

                                <dt class="col-sm-2">{{$q222[2]}}</dt>
                                <dd class="col-sm-10">(vi): to have home somewhere</dd>
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
                                <dd class="col-sm-10">(vt): gerund: making someone more likely to do something                                
                                <br><mark><strong>clues: of + <u>gerund</u> + object = of <u>encouraging</u> people</strong></mark></dd>

                                <dt class="col-sm-2">{{$q333[0]}}</dt>
                                <dd class="col-sm-10">(vt): to make someone more likely to do something</dd>

                                <dt class="col-sm-2">{{$q333[2]}}</dt>
                                <dd class="col-sm-10">vt): past simple / past participle of "encourage"</dd>
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
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q444[1]}}</i></dt>
                                <dd class="col-sm-10">(nc): countries
                                <br><strong><mark>clues:  a large number of + <u>plural noun</u></mark></strong></dd>

                                <dt class="col-sm-2">{{$q444[0]}}</dt>
                                <dd class="col-sm-10">(nc): a country</dd>

                                <dt class="col-sm-2">{{$q444[2]}}</dt>
                                <dd class="col-sm-10">(adj): typical of a whole country and its people</dd>
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
                                <dd class="col-sm-10">(adj): causing problems or difficulties
                                <br><mark><strong>clues: (parallel structure) make + sth + <u>adj and adj</u> make + private vehicles + <u>more expensive and inconvenient</u></strong></mark></dd>

                                <dt class="col-sm-2">{{$q555[0]}}</dt>
                                <dd class="col-sm-10">(nu): problems or difficulties</dd>

                                <dt class="col-sm-2">{{$q555[2]}}</dt>
                                <dd class="col-sm-10">(adv): in a way that causes problems or difficulties</dd>
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
                                <dd class="col-sm-10">(vi): changes in some way
                                <br><mark><strong>clues: subject + v = The age of retirement + <u>varies</u></strong></mark></dd>

                                <dt class="col-sm-2">{{$q666[0]}}</dt>
                                <dd class="col-sm-10">(nc): a different type of something</dd>

                                <dt class="col-sm-2">{{$q666[1]}}</dt>
                                <dd class="col-sm-10">(adj): many different</dd>
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
                                <dd class="col-sm-10">(vi): a large group of people living together in an organized way 
                                <br><mark><strong>clues: contribute more to + <u>noun</u> = contribute more to + <u>society</u></strong></mark></dd>

                                <dt class="col-sm-2">{{$q777[1]}}</dt>
                                <dd class="col-sm-10">(adj): relating to society</dd>

                                <dt class="col-sm-2">{{$q777[2]}}</dt>
                                <dd class="col-sm-10">(vi): to spend time with other people for pleasure</dd>
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
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q888[2]}}</i> </dt>
                                <dd class="col-sm-10">(vt): to look for the difference between two or more things
                                <br><mark><strong>clues: is + <u>adv</u> + pronoun = is + <u>clearly</u> + one</strong></mark></dd>

                                <dt class="col-sm-2">{{$q888[0]}}</dt>
                                <dd class="col-sm-10">(nu): the quality of being clear and easy to understand</dd>

                                <dt class="col-sm-2">{{$q888[1]}}</dt>
                                <dd class="col-sm-10">(adj): easy to see </dd>
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
                                <br><mark><strong>clues: is + <u>adv</u> + pronoun = is + <u>clearly</u> + one</strong></mark></dd>

                                <dt class="col-sm-2">{{$q999[1]}}</dt>
                                <dd class="col-sm-10">(n): the act of comparing two or more things</dd>

                                <dt class="col-sm-2">{{$q999[0]}}</dt>
                                <dd class="col-sm-10">(vt): past simple / past participle of "compare"</dd>
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
                                <dd class="col-sm-10">(nc): the fact of not being the same 
                                <br><mark><strong>clues: make a difference = to improve a situation</strong></mark></dd>

                                <dt class="col-sm-2">{{$q1000[0]}}</dt>
                                <dd class="col-sm-10">(vi): to be not like something or someone else</dd>

                                <dt class="col-sm-2">{{$q1000[1]}}</dt>
                                <dd class="col-sm-10">(adj): not the same</dd>
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
        'dangers', 
        'lives', 
        'encouraging', 
        'nations', 
        'inconvenient', 
        'varies', 
        'society', 
        'clearly',
        'compare', 
        'difference'
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