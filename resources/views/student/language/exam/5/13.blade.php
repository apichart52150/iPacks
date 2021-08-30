<style>
    .line-hight{
        line-height: 3;
    }
    </style>
    @php
        $question = [
            'q1' => "In the last",
            'q2' => ", researchers have discovered that surfing the internet has become the most popular leisure activity for",
            'q3' => ". Prior to this, young people spent more time on sporting activities and outdoor activities. This essay will outline some of the impacts this new pastime is having on young people. Sitting in front of a computer screen for hours on end has a number of",
            'q4' => "on young people. The wealth of information available on-line means that youngsters can quickly and easily",
            'q5' => "information on any given topic. This helps with their school assignments, and also",
            'q6' => "an opportunity to keep up with current events. In",
            'q7' => ", they can communicate with their friends through email and chat rooms at any time of the day. For these reasons, the internet has had a",
            'q8' => "impact on young people.",
            'q9' => ", there are also risks involved with this pastime. From the physical point of view, it is not healthy to remain seated in one position for so long. Many youngsters",
            'q10' => "from cramps in the arms and legs, stiff necks and deteriorating eyesight. ",
            'q11' => ", although they communicate easily with friends via email and chat rooms, they enjoy less personal, physical contact, such as they would get through playing sports and face-to-face contact. In addition, the",
            'q12' => "which the adolescents visit, and the people with whom they chat, may not be suitable for young people. In",
            'q13' => ", although the internet provides a wealth of information, and a huge capacity for on-line communication, the",
            'q14' => "which accompany this solitary pursuit need to be recognized. A combination of physical activity and internet surfing is more beneficial than over-reliance on technology.  Finally, some guidance from",
        ];
    
        $endQuestion = "may be required to reduce the risks presented by web content and criminal elements in search of easy prey on-line.";
    
        $choice = [
            'c1' => "access",    
            'c2' => "addition",  
            'c3' => "adolescents",     
            'c4' => "decade", 
            'c5' => "effects",     
            'c6' => "Furthermore",   
            'c7' => "However",   
            'c8' => "parents",     
            'c9' => "positive",     
            'c10' => "provides",      
            'c11' => "risks",      
            'c12' => "suffer",      
            'c13' => "summary",      
            'c14' => "websites",      
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
                "decade", //1
                "adolescent",//2
                "effects",//3
                "access",//4
                "provides",//5
                "addition",//6
                "positive",//7
                "However",//8
                "suffer",//9
                "Furthermore",//10
                "websites",//11
                "summary",//12
                "risks",//13
                "parents",//14
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