<style>
    .mark, mark {
        padding: .2em;
        background-color: #ffc107;
    }
    </style>
    @php
        $q1 = "It doesn't cost as";
        $q11 = "to go by bus as it does by plane.";
        $q111 = array(
            'much',
            'many',
            'more',
            'most'
        );
        $q2 = "He's the";
        $q22 = "unpleasant person I have ever met!";
        $q222 = array(
            'much',
            'many',
            'more',
            'most'
        );
        $q3 = "There were";
        $q33 = "people on the bus than I had expected.";
        $q333 = array(
            'much',
            'many',
            'more',
            'most'
        );
        $q4 = "Speaking Thai is ";
        $q44 = "difficult than reading it.";
        $q444 = array(
            'much',
            'many',
            'more',
            'most'
        );
        $q5 = " ";
        $q55 = "more people live to be 100 years old than before.";
        $q555 = array(
            'Much',
            'Many',
            'More',
            'Most'
        );
        $q6 = "There are";
        $q66 = "more cars on the road now than 50 years ago.";
        $q666 = array(
            'much',
            'many',
            'more',
            'most'
        );
        $q7 = "It's";
        $q77 = "more difficult to find a job now than it was in the past.";
        $q777 = array(
            'much',
            'many',
            'more',
            'most'
        );
        $q8 = "There are increasingly ";
        $q88 = "cars on the road nowadays.";
        $q888 = array(
            'much',
            'many',
            'more',
            'most'
        );
        $q9 = "English language is the";
        $q99 = "popular subject among girls in the class.";
        $q999 = array(
            'much',
            'many',
            'more',
            'most'
        );
        $q10 = "The infant mortality rate is";
        $q100 = "lower now than it used to be.";
        $q1000 = array(
            'much',
            'many',
            'more',
            'most'
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
            'much',  //1
            'most',  //2
            'more',  //3
            'more',  //4
            'Many',  //5
            'many',  //6
            'much',  //7
            'more',  //8
            'most',  //9
            'much'   //10
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