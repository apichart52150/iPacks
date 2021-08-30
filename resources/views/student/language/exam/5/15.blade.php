<style>
    .line-hight{
        line-height: 3;
    }
    </style>
    @php
        $question = [
            'q1' => "Society nowadays is getting fatter.",
            'q2' => "is becoming one of the most dangerous consequences of our modern, sedentary life-style. This trend is particularly disturbing since it affects a large",
            'q3' => "of the younger generation. This essay will examine the reasons for this trend and suggest ways in which society can",
            'q4' => "this problem. There are a number of reasons why people are putting on",
            'q5' => "weight. The first reason is, of course,",
            'q6' => ". We are what we eat, and the simple fact is that people are eating the wrong sort of food.",
            'q7' => "food outlets have sprung up in every major city, even in the developing",
            'q8' => ". MacDonalds and KFC are in evidence in all major cities as their popularity continues to increase. Fast food is sometimes referred to as ‘junk food’ since it offers little",
            'q9' => " value. It is largely oily and high in carbo-hydrates, which can impact badly",
            'q10' => "health. It is certainly a major cause of obesity.",
            'q11' => "fast food is popular mostly with young people, they are the ones at the greatest risk. Another contributing factor to excessive weight is the lack of",
            'q12' => ". Research has shown that there has been a shift in hobbies and pastimes over the last few ",
            'q13' => ". While exercise and outdoor pursuits used to be the most popular form of leisure activity, nowadays the internet and computer games have taken over the number one spot, especially with the younger ",
            'q14' => ". So what can be done to address this issue? First of all, there needs to be greater awareness of the impact of fast food",
            'q15' => ". This can be done at school level as well as in the media. If this method does not succeed, then the",
            'q16' => "should seriously consider restricting the number of fast food outlets, or at least to pass legislation regarding the quality of the food served at these outlets. Secondly, people need to be encouraged to take part in physical activity, especially",
            'q17' => ". Local governments could provide better access to free sports facilities and schools should implement a compulsory physical education programme. To",
        ];
    
        $endQuestion = "up, obesity is a serious problem and action needs to be taken sooner rather than later if the consequences of excessive weight are to be prevented.";
    
        $choice = [
            'c1' => "adolescents",    
            'c2' => "consumption",  
            'c3' => "decades",     
            'c4' => "diet", 
            'c5' => "excessive",     
            'c6' => "exercise",   
            'c7' => "Fast",   
            'c8' => "generation",     
            'c9' => "government",     
            'c10' => "nations",      
            'c11' => "nutritional",      
            'c12' => "Obesity",      
            'c13' => "on",      
            'c14' => "percentage",      
            'c15' => "Since",    
            'c16' => "sum",
            'c17' => "tackle",  
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
                "Obesity", //1
                "percentage",//2
                "tackle",//3
                "excessive",//4
                "diet",//5
                "Fast",//6
                "nations",//7
                "nutritional",//8
                "on",//9
                "Since",//10
                "exercise",//11
                "decades",//12
                "generation",//13
                "consumption",//14
                "government",//15
                "adolescents",//16
                "sum",//17
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