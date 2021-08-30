<style>
    .line-hight{
        line-height: 3;
    }
    </style>
    @php
        $question = [
            'q1' => "An increase in the number of",
            'q2' => "breaking the law has become a cause for concern recently. This essay will consider some of the causes of this increase in juvenile crime and will offer some",
            'q3' => "about how the government should solve this problem. The breakdown of the family structure has",
            'q4' => "in a large number of young people moving away from home at an early age. On their ",
            'q5' => ", these youngsters tend to get into trouble. In the wrong company, these adolescents may take up habits such as drug ",
            'q6' => ". Many young people turn to crime to pay for the drugs. Another reason why juveniles ",
            'q7' => "crimes is because they feel bored. By breaking the law, they get a feeling of excitement. A",
            'q8' => "problem for increased crime is the increasing amount of",
            'q9' => "among young people. It has been proved that there is a close correlation between youths without work and juvenile crime. Some people say that stricter punishment is needed,",
            'q10' => "others prefer a focus on education. Although harsh punishment may",
            'q11' => "young people from committing crimes, it is not a long-term solution. The",
            'q12' => "needs to solve the social problems which are the cause of crime. For example, the government should ensure that all young people have access to jobs. Adequate training should be given to allow adolescents to contribute to society. In",
            'q13' => ", more needs to be done to eradicate drug abuse. In",
            'q14' => ", since the increase in juvenile crime seems to have its roots in social problems, it seems that the government’s focus should be on the eradication of these same social problems in order to help",
        ];
    
        $endQuestion = "the number of crimes committed by young people.";
    
        $choice = [
            'c1' => "abuse",    
            'c2' => "addition",  
            'c3' => "adolescents",     
            'c4' => "commit", 
            'c5' => "conclusion",     
            'c6' => "deter",   
            'c7' => "further",   
            'c8' => "government",     
            'c9' => "own",     
            'c10' => "reduce",      
            'c11' => "resulted",      
            'c12' => "suggestions",      
            'c13' => "unemployment",      
            'c14' => "while",      
        ];
       
    @endphp
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card-box text-dark font-16">
                <p class="lead">
                    {{$pageTitle['topic']}}
                </p>
                <div class="mb-2">
                    @for ($i = 1; $i <= count($question); $i++)
                        <div class="line-hight d-inline w-auto mb-2 ">
                            {{ $question['q'.$i] }}
                        </div>
                        <select class="form-control d-inline w-auto mx-2 mb-2 ">
                            <option value="">-Select-</option>
                            @foreach ($choice as $choices)
                                <option value="{{ $choices }}">{{ $choices }}</option>
                            @endforeach
                        </select>
                    @endfor
                    {{ $endQuestion }}
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
                "adolescents", //1
                "suggestions",//2
                "resulted",//3
                "own",//4
                "abuse",//5
                "commit",//6
                "further",//7
                "unemployment",//8
                "while",//9
                "deter",//10
                "government",//11
                "addition",//12
                "conclusion",//13
                "reduce",//14
            ]
            
    
            let score = 0
    
            $("#show-answer").hide(true)
    
            $('#check-answer').on('click', function() {
                
                $('select').each((idx, item) => {
                    if($(item).val().trim() == answers[idx].trim()) {
                        $(item).addClass('border border-success')
                        $('<i class="fas fa-check text-success mr-2"></i>').insertAfter($(item))
                        score++
                    } else {
                        $(item).addClass('border border-danger')
                        $(`<i class="fas fa-times text-danger mr-2"></i><span class="text-success mr-2">${Array.isArray(answers[idx]) ? answers[idx][1] : answers[idx]}</span>`).insertAfter($(item))
                    }
                })
    
                if(score == answers.length){
                    alert("you're awesome")
                }else{
                    alert('Your score is ' + score + '/' + answers.length)
                }
    
                $("#check-answer").prop('disabled','true')
            })
        </script>
    @stop