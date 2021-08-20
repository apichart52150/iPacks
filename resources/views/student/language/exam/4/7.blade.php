<style>
    .mark, mark {
        padding: .2em;
        background-color: #ffc107;
    }
    </style>
    @php
        $q1 = "'Tourism brings additional income to developing nations.";
        $q11 = ", it creates jobs for the local population.' Which of the following answers is NOT suitable?";
        $q111 = array(
            'Moreover',
            'In addition',
            'Furthermore',
            'Too'
        );
        $q2 = " ";
        $q22 = "creating new jobs for locals, tourism also helps develop the local craft industry.";
        $q222 = array(
            'Apart from',
            'As well',
            'In addition',
            'Moreover'
        );
        $q3 = "Tourism can create environmental pollution.";
        $q33 = ", it can cause cultural pollution.";
        $q333 = array(
            'However',
            'Although',
            'Furthermore',
            'Too'
        );
        $q4 = "It is important to plan your trip carefully:";
        $q44 = "an up-to-date passport, you may require an entry visa.";
        $q444 = array(
            'in addition',
            'as well as',
            'additionally',
            'apart'
        );
        $q5 = "You should quit smoking, stop drinking alcohol, avoid drugs and eat a healthy diet.";
        $q55 = ", you should live a more healthy life-style.";
        $q555 = array(
            'Furthermore',
            'However',
            'In short',
            'As a result'
        );
        $q6 = "You've been eating a lot of junk food recently.";
        $q66 = "you have gained around ten kilos.";
        $q666 = array(
            'Moreover',
            'To conclude',
            'However',
            'As a result'
        );
        $q7 = "She didn't get a good night's sleep before the exam.";
        $q77 = ", she didn't do very well.";
        $q777 = array(
            'In addition',
            'Consequently',
            'In short',
            'To sum up'
        );
        $q8 = "The ozone layer is becoming depleted, the air in urban areas is too dirty to breathe and our waterways are no longer safe to swim in.";
        $q88 = ", pollution is slowly killing our planet.";
        $q888 = array(
            'However',
            'Moreover',
            'To sum up',
            'Therefore'
        );
        $q9 = "You are not allowed to take liquids on board a flight.";
        $q99 = ", weapons of all descriptions are prohibited.";
        $q999 = array(
            'Therefore',
            'As well as',
            "In short",
            'In addition'
        );
        $q10 = " ";
        $q100 = "passive smoking can damage the health of people who come into contact with smokers, smoking in public places should be banned.";
        $q1000 = array(
            'Because of',
            'Since',
            'Although',
            'As a result'
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
                    {{$q55}}
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
                    {{$q66}}
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
                    {{$q77}}
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
                    {{$q88}}
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
                    {{$q100}}
                </div>
            </div>
        </div>
    </div>
    
    @section('button-control')
        <button id="check-answer" class="btn btn-info">Check Answersss</button>
    @endsection
    
    @section('js')
    <script>
         const answers = [
            'Too',  //1
            'Apart from',  //2
            'Furthermore',  //3
            'as well as',  //4
            'In short',  //5
            'As a result',  //6
            'Consequently',  //7
            'To sum up',  //8
            "In addition",  //9
            'Since'   //10
        ];
        let score = 0;
    
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
    
            $("#check-answer").hide(true);
        });
    
    </script>
    @stop