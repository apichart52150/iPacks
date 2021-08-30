<style>
    .line-hight{
        line-height: 3;
    }
    </style>
    @php
        $question = [
            'q1' => "Nowadays the world is at risk as a result of environmental dangers. Many of these problems are the result of man’s own behaviour. ",
            'q2' => ", part of the solution lies within man’s own grasp through modifying human behaviour. This essay will ",
            'q3' => "some of these dangers, and suggest ways in which we can ",
            'q4' => " some of these dangers. Many aspects of the environment are at risk. First of all, ",
            'q5' => "is a major threat to the earth’s survival. Air pollution caused by burning ",
            'q6' => "fuels makes the air that we breathe hazardous. Water polluted by chemical fertilizers and the dumping of",
            'q7' => "is threatening marine life on which we depend for food. Soil pollution caused by factory waste and garbage dumped at land-fill sites is contaminating land which could be used for",
            'q8' => " Second, the problem of global warming is increasing as we continue to saturate the atmosphere with carbon emissions. ",
            'q9' => ", many of the creatures with which we share this earth are endangered by activities such as poaching and cutting down",
            'q10' => "which are the natural habitat of these animals. The ",
            'q11' => "to these problems are relatively simple but require humans to change their habits. We need to review our use of fossil fuels and focus on ",
            'q12' => "clean power by using natural resources such as the sun, the wind and the movement of",
            'q13' => ". We need to become less dependent on motorized travel and reduce",
            'q14' => "emissions to avoid the danger of global warming. Riding bicycles and walking from place to place will help towards this. Finally we need to respect the other",
            'q15' => "which inhabit this earth by providing them with adequate space for them to live, and by stopping our incessant, senseless killing of these animals. The",
        ];
    
        $endQuestion = "belongs to us all. As such it is the responsibility of all of us to do whatever we can to ensure its, and our own, survival.";
    
        $choice = [
            'c1' => "carbon",    
            'c2' => "creatures",  
            'c3' => "earth",     
            'c4' => "eradicate", 
            'c5' => "farming",     
            'c6' => "forests",   
            'c7' => "fossil",   
            'c8' => "garbage",     
            'c9' => "generating",     
            'c10' => "outline",      
            'c11' => "pollution",      
            'c12' => "solutions",      
            'c13' => "Therefore",      
            'c14' => "Third",      
            'c15' => "water",      
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
                "Therefore", //1
                "outline",//2
                "eradicate",//3
                "pollution",//4
                "fossil",//5
                "garbage",//6
                "farming",//7
                "Third",//8
                "forests",//9
                "solutions",//10
                "generating",//11
                "water",//12
                "carbon",//13
                "creatures",//14
                "earth",//15
            ]
            
    
            let score = 0
    
            $("#show-answer").hide(true)
    
            $('#check-answer').on('click', function() {
                
                $('select').each((idx, item) => {
                    if($(item).val() == answers[idx]) {
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