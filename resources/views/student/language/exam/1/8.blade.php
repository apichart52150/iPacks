<style>
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
        $q3 = "Once the weather forecast ";
        $q33 = "produced, the broadcast is prepared.";
        $q333 = array(
            'is being',
            'is been',
            'has been',
            'was'
        );
        $q4 = "It is clear that, while there are a few similarities between the two bicycles, there ";
        $q44 = "also significant differences in design";
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
        $q66 = "in the phenomenon known as ‘global warming’.";
        $q666 = array(
            'result',
            'results',
            'is resulting',
            'resulting'
        );
        $q7 = "Energy from the sun";
        $q77 = "the earth,";
        $q777 = "up the surface.";
        $q77_1 = array(
            'reach',
            'reaches',
            'heats',
            'heating'
        );
        $q77_2 = array(
            'heat',
            'heats',
            'reaches',
            'heating'
        );
        $q8 = "Trees absorb carbon dioxide, so if the number of trees";
        $q88 = ", the levels of carbon dioxide in the";
        $q888 = array(
            'reduce',
            'reduces',
            'is reducing',
            'is reduced'
        );
        $q9 = "Overall, it is apparent that human activity ";
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
                        <option value="{{$q77_1[0]}}">{{$q77_1[0]}}</option>
                        <option value="{{$q77_1[1]}}">{{$q77_1[1]}}</option>
                        <option value="{{$q77_1[2]}}">{{$q77_1[2]}}</option>
                        <option value="{{$q77_1[3]}}">{{$q77_1[3]}}</option>
                    </select>
                    {{$q77}}
                    <select class="form-control d-inline w-auto mx-2">
                        <option value="">-Select-</option>
                        <option value="{{$q77_2[0]}}">{{$q77_2[0]}}</option>
                        <option value="{{$q77_2[1]}}">{{$q77_2[1]}}</option>
                        <option value="{{$q77_2[2]}}">{{$q77_2[2]}}</option>
                        <option value="{{$q77_2[3]}}">{{$q77_2[3]}}</option>
                    </select>
                    {{$q777}}
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
        <button id="check-answer" class="btn btn-info">Check Answers</button>
    @endsection
    
    @section('js')
    <script>
         const answers = [
            'shows',  //1
            'are',  //2
            'has been',  //3
            'are',  //4
            'reflect',  //5
            'resulting',  //6
            'reaches',  //7.1
            'heating',  //7.2
            'is reduced',  //8
            'plays',  //9
            'was located'   //10
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