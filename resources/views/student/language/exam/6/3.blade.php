<style>
.mark, mark {
    padding: .2em;
    background-color: #ffc107;
}
</style>
@php
    $q1 = "The phrase '";
    $q11 = "is thicker than water' means that family is more important than friends.";
    $q111 = array(
        'Nescafe',
        'Treacle',
        'Treacle',
        'Blood'
    );
    $q2 = 'A family in which many generations live together is known as an';
    $q22 = 'family.';
    $q222 = array(
        'extra big',
        'traditional',
        'extended',
        'infrastructure'
    );
    $q3 = 'A family consisting of just the parents and a couple of children is referred to as a';
    $q33 = 'family.';
    $q333 = array(
        'extended',
        'traditional',
        'nuclear',
        'small'
    );
    $q4 = 'A woman whose husband has died is called a';
    $q44 = '.';
    $q444 = array(
        'widow',
        'fiancee',
        'old-maid',
        'spinster'
    );
    $q5 = 'What do we call the money or gifts which one partner hands to the other party at the marriage.';
    $q555 = array(
        'duty',
        'dowry',
        'camels',
        'birthright'
    );
    $q6 = 'What do we call the man who is getting married ?';
    $q666 = array(
        'groom',
        'bridegroom',
        'best man',
        'bridesmaid'
    );
    $q7 = 'If your father marries a new wife (not your own mother), what is her relationship to you ?';
    $q777 = array(
        'aunty',
        'half-sister',
        'step-mother',
        'fairy godmother'
    );
    $q8 = 'What do we call a man who has two wives ?';
    $q888 = array(
        'A happy man',
        'misogynist',
        'bachelor',
        'bigamist'
    );
    $q9 = 'Having many wives is called';
    $q99 = ".";
    $q999 = array(
        'polyandry',
        'polygamy',
        'purgatory',
        'polygon'
    );
    $q10 = 'What do we call it when two people live together as husband and wife before they get married ?';
    $q1000 = array(
        'engagement',
        'betrothal',
        'separation',
        'trial marriage'
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
                            1. The phrase ' <span class="text-success"><u>Blood</u></span> is thicker than water' means that family is more important than friends.
                            </a>
                        </h2>
                    </div>
                
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <dl class="row">
                                    <dt class="col-sm-2"><i class="text-success mr-2">Blood</i> </dt>
                                    <dd class="col-sm-10">(nu): the red liquid that your heart pumps around your body</dd>

                                    <dt class="col-sm-2">Nescafe</dt>
                                    <dd class="col-sm-10">(nu): a type of instant coffee</dd>

                                    <dt class="col-sm-2">Treacle</dt>
                                    <dd class="col-sm-10">(nu): a thick sweet black liquid obtained from  raw sugar</dd>

                                    <dt class="col-sm-2">Mud</dt>
                                    <dd class="col-sm-10">(nu): wet earth that has becomes soft and sticky </dd>
                                </dl>
                            </div>
                    </div>
                </div><!-- 1 -->

                <div class="card mb-1" >
                    <div class="card-header" id="headingTwo">
                        <h5 class="my-0">
                            <a class="text-primary collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2. A family in which many generations live together is known as an <span class="text-success"><u>extended</u></span> family.
                            </a>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-2"><i class="text-success mr-2">extended</i> </dt>
                                <dd class="col-sm-10">(adj): made longer or bigger
                                <br><strong><mark>clues: an + adj + family / an + a word with a vowel-sound initial letter</mark></strong></dd>

                                <dt class="col-sm-2">traditional</dt>
                                <dd class="col-sm-10">(adj): following ideas or methods that have existed for a long time</dd>

                                <dt class="col-sm-2">infrastructure</dt>
                                <dd class="col-sm-10">(nu): the basic systems and structures that a country needs: roads, railways, banks etc.</dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 2 -->

                <div class="card mb-1" >
                    <div class="card-header" id="headingThree">
                        <h5 class="my-0">
                            <a class="text-primary collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                3. A family consisting of just the parents and a couple of children is referred to as a <span class="text-success"><u>nuclear</u></span> family.
                            </a>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-2"><i class="text-success mr-2">nuclear</i></dt>
                                <dd class="col-sm-10">(adj): single</dd>

                                <dt class="col-sm-2">extended</dt>
                                <dd class="col-sm-10">(adj): made longer or bigger</dd>

                                <dt class="col-sm-2">traditional</dt>
                                <dd class="col-sm-10"> (adj): following ideas or methods that have existed for a long time</dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 3 -->

                <div class="card mb-1" >
                    <div class="card-header" id="headingFour">
                        <h5 class="my-0">
                            <a class="text-primary collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                4. A woman whose husband has died is called a <span class="text-success"><u>widow</u></span>.
                            </a>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-2"><i class="text-success mr-2">widow</i></dt>
                                <dd class="col-sm-10">(nc): a woman whose husband has died and who has not married again </dd>

                                <dt class="col-sm-2">fiancee</dt>
                                <dd class="col-sm-10">(nc): the woman who a man is going to marry</dd>

                                <dt class="col-sm-2">old-maid</dt>
                                <dd class="col-sm-10">(nc): a woman who has never married and not young anymore <strong><em>(offensive)</em></strong></dd>

                                <dt class="col-sm-2">spinster</dt>
                                <dd class="col-sm-10"> (nc): an unmarried woman who is not young anymore and seems unlikely to marry <strong><em>(old-fashioned)</em></strong></dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 4 -->

                <div class="card mb-1" >
                    <div class="card-header" id="headingFive">
                        <h5 class="my-0">
                            <a class="text-primary collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            5.What do we call the money or gifts which one partner hands to the other party at the marriage. <span class="text-success"><u>dowry</u></span>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body">
                            <dl class="row">

                                <dt class="col-sm-2"><i class="text-success mr-2">dowry</i> </dt>
                                <dd class="col-sm-10">(nc): property and money a woman gives to her husband when they marry in some societies</dd>

                                <dt class="col-sm-2">duty</dt>
                                <dd class="col-sm-10">(nc): obligation</dd>

                                <dt class="col-sm-2">camel</dt>
                                <dd class="col-sm-10">(nc): a large desert animal with a long neck and either one or two humps</dd>

                                <dt class="col-sm-2">birthright</dt>
                                <dd class="col-sm-10"> (nc): right, property, money etc. that you should have because of the family or country you belong to</dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 5 -->

                <div class="card mb-1" >
                    <div class="card-header" id="headingSix">
                        <h5 class="my-0">
                            <a class="text-primary collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            6. What do we call the man who is getting married? <span class="text-success"><u>groom</u></span>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-2"><i class="text-success mr-2">groom</i> </dt>
                                <dd class="col-sm-10"> (nc): a man who is getting married</dd>

                                <dt class="col-sm-2">bridegroom</dt>
                                <dd class="col-sm-10">(nc): a woman who is getting married</dd>

                                <dt class="col-sm-2">best man</dt>
                                <dd class="col-sm-10">(nc): the man who helps the bridegroom at the wedding ceremony</dd>

                                <dt class="col-sm-2">bridesmaid</dt>
                                <dd class="col-sm-10">(nc): a girl or woman, usually unmarried, who helps a bride on her wedding day and is with her at her wedding </dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 6 -->

                <div class="card mb-1">
                    <div class="card-header" id="headingSeven">
                        <h5 class="my-0">
                            <a class="text-primary collapsed" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            7. If your father marries a new wife (not your own mother), what is her relationship to you? <span class="text-success"><u>step-mother</u></span> 
                            </a>
                        </h5>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-2"><i class="text-success mr-2">step-mother</i> </dt>
                                <dd class="col-sm-10">(nc): a woman who is married to your father, but who is not your mother</dd>

                                <dt class="col-sm-2">half-sister</dt>
                                <dd class="col-sm-10">(nc): a sister who is a daughter of only one of your parents</dd>

                                <dt class="col-sm-2">aunty</dt>
                                <dd class="col-sm-10">(nc): an aunt</dd>

                                <dt class="col-sm-2">fairy godmother</dt>
                                <dd class="col-sm-10">(nc): someone who helps people when they are in trouble</dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 7 -->

                <div class="card mb-1" >
                    <div class="card-header" id="headingEight">
                        <h5 class="my-0">
                            <a class="text-primary collapsed" data-toggle="collapse" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            8. What do we call a man who has two wives? <span class="text-success"><u>bigamist</u></span>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-2"><i class="text-success mr-2">bigamist</i> </dt>
                                <dd class="col-sm-10">(nc): a person who is married to two people at the same time</dd>

                                <dt class="col-sm-2">misogynist</dt>
                                <dd class="col-sm-10">(nc): a man who hates women</dd>

                                <dt class="col-sm-2">bachelor</dt>
                                <dd class="col-sm-10">(nc): a man who has never been married</dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 8 -->

                <div class="card mb-1" >
                    <div class="card-header" id="headingNine">
                        <h5 class="my-0">
                            <a class="text-primary collapsed" data-toggle="collapse" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            9.Having many wives is called <span class="text-success"><u>polygamy</u></span>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                        <div class="card-body">
                            <dl class="row">

                                <dt class="col-sm-2"><i class="text-success mr-2">polygamy</i> </dt>
                                <dd class="col-sm-10">(nu): the practice of being married to more than one person at the same time</dd>

                                <dt class="col-sm-2">polyandry</dt>
                                <dd class="col-sm-10">    (nu): the practice of having more than one husband or permanent male sexual partner at the same time</dd>

                                <dt class="col-sm-2">purgatory</dt>
                                <dd class="col-sm-10">(nu): something that makes you suffer---used humorously</dd>

                                <dt class="col-sm-2">polygon</dt>
                                <dd class="col-sm-10">(nc): a flat shape with three or more straight sides</dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 9 -->

                <div class="card mb-1" id="ansOne">
                    <div class="card-header" id="headingTen">
                        <h5 class="my-0">
                            <a class="text-primary collapsed" data-toggle="collapse" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            10.What do we call it when two people live together as husband and wife before they get married? <span class="text-success"><u>trial marriage</u></span>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                        <div class="card-body">
                            <dl class="row">

                                <dt class="col-sm-2"><i class="text-success mr-2">trial marriage</i></dt>
                                <dd class="col-sm-10">(nc): a test to discover how effective a marriage is</dd>

                                <dt class="col-sm-2">betrothal</dt>
                                <dd class="col-sm-10">(nc): a formal promise to marry someone</dd>

                                <dt class="col-sm-2">separation</dt>
                                <dd class="col-sm-10">(nc): when two married people stop living together as a couple</dd>

                                <dt class="col-sm-2">engagement</dt>
                                <dd class="col-sm-10">(nc): an agreement to marry someone </dd>
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
    <button id="show-answer" class="btn btn-success">Show Answers</button>
@endsection

@section('js')
<script>
     const answers = [
        'Blood', 
        'extended', 
        'nuclear', 
        'widow', 
        'dowry', 
        'groom', 
        'step-mother', 
        'bigamist',
        'polygamy', 
        'trial marriage'
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
            $("#show-answer").text('Show Answers');
            x.style.display = "none";
        }
        
    });
   
</script>
@stop