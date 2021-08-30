<style>
    .line-hight{
        line-height: 3;
    }
    </style>
    @php
        $question = [
            'q1' => "It has been said that ‘knowledge is power’. This is particularly true in today’s world of advanced technology and globalization. If this is the case, then it is the",
            'q2' => "duty to ‘empower’ each individual by providing free education until they reach",
            'q3' => ", i.e. the age of eighteen. If young people have access to free education, there will definitely be positive effects on society. ",
            'q4' => ", I believe that such a blanket policy is effective only part of the time, and this essay will ",
            'q5' => "some of the arguments for and against this proposal. Providing a good education to young people is a solid investment for any society. An",
            'q6' => "society suffers fewer problems in terms of health and general well-being. It is through education that people become aware of hygiene issues and correct bahaviour to protect them from illness and injury. What’s",
            'q7' => ", education is also a good investment for future",
            'q8' => "prospects. Someone who finishes",
            'q9' => "school is much more likely to find a good job than a person who drops out after primary level. A lack of education is one of the reasons why people in",
            'q10' => "nations find it hard to escape the mantle of poverty. It is important,",
            'q11' => ", to consider the kind of education which is appropriate for the individual and for society. Knowledge for the sake of knowledge may not be enough to equip individuals with the ",
            'q12' => "they need. If the individual is focused on finding employment, then vocational skills would seem appropriate. In addition, it is important to identify the kinds of skills which help the",
            'q13' => "to play a meaningful role in developing society.",
            'q14' => ", setting goals and creating a framework for development are necessary factors in planning an education system. In some nations where free education is provided for all young people, the results of that education can be described as less than effective. For ",
            'q15' => ", in Europe and the USA, many young people rebel against the education they receive There are frequent confrontations as teachers try to force the education on the ",
            'q16' => "Perhaps they  do not appreciate the benefits to be gained by their free education. Perhaps the notion of '",
        ];
    
        $endQuestion = "' devalues the concept of education. Perhaps if they had to pay for their education, they would value it more highly. All in all, then, while providing free education to all young people can have positive effects on individuals and on society, it is important to consider the content and relevance of what is being taught.";
    
        $choice = [
            'c1' => "adolescents",    
            'c2' => "adulthood",  
            'c3' => "developing",     
            'c4' => "educated", 
            'c5' => "employment",     
            'c6' => "example",   
            'c7' => "free",   
            'c8' => "government’s",     
            'c9' => "high",     
            'c10' => "However",      
            'c11' => "however",      
            'c12' => "individual",      
            'c13' => "more",      
            'c14' => "outline",      
            'c15' => "skills",      
            'c16' => "Therefore",      
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
                "government’s", //1
                "adulthood",//2
                "However",//3
                "outline",//4
                "educated",//5
                "more",//6
                "employment",//7
                "high ",//8
                "developing",//9
                "however",//10
                "skills",//11
                "individual",//12
                "Therefore",//13
                "example",//14
                "adolescents",//15
                "free",//16
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