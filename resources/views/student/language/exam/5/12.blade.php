<style>
    .line-hight{
        line-height: 3;
    }
    </style>
    @php
        $question = [
            'q1' => "With the increase in global",
            'q2' => ", the world is likely to face a food shortage within the next few ",
            'q3' => ". In response to this, scientists have experimented with food crops by",
            'q4' => "their genetic structure to make them more productive, as well as more resistant to crop diseases. While some people see this genetic modification as one solution to the imminent",
            'q5' => "of food, others feel that interfering with nature can only lead to unforeseen problems in the",
            'q6' => ". This essay will examine arguments for and against the use of genetic modification in food crops. Changing the genetic structure of crops can result in a number of ",
            'q7' => "First of all, plants can be made to produce more food. Second, the food can be more",
            'q8' => "with extra vitamins and minerals, without needing to use fertilizers. In addition, the plants can be more resistant to",
            'q9' => ", without the need to use pesticides. Furthermore, the crops can be made to grow more quickly, thereby increasing the number of crops per year.",
            'q10' => ", there are a number of arguments against the use of genetic modification in crops. First of all, since this research is still relatively new, the results of such modification are as yet",
            'q11' => ". We cannot predict the impact of changing plant structure on consumers’ health and well-being. What’s more, we have no clear ",
            'q12' => "how such tampering will affect the crops themselves. Will we create super weeds which destroy all other plant-life? The",
            'q13' => "major argument involves commercial activity surrounding crop modification. It is quite",
            'q14' => "that the technology required for crop gene re-structuring will belong to wealthy multinational companies which can then",
            'q15' => "the farming industry. This will result in a further imbalance in the economic situation of",
            'q16' => ",nations, who will most likely be dependent on wealthier nations for this new technology. In conclusion, then",
        ];
    
        $endQuestion = "genetic modification of crops can lead to a number of positive results, there is the danger that such re-structuring can impact badly on both the people who consume the modified crops, as well as on the economies of the nations which will grow the crops.";
    
        $choice = [
            'c1' => "although",    
            'c2' => "benefits",  
            'c3' => "changing",     
            'c4' => "decades", 
            'c5' => "developing",     
            'c6' => "disease",   
            'c7' => "future",   
            'c8' => "However",     
            'c9' => "idea",     
            'c10' => "lack",      
            'c11' => "monopolize",      
            'c12' => "nutritious",      
            'c13' => "population",      
            'c14' => "possible",      
            'c15' => "second",      
            'c16' => "unknown",      
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
                "population", //1
                "decades",//2
                "changing",//3
                "lack",//4
                "future",//5
                "benefits",//6
                "nutritious",//7
                "disease",//8
                "However",//9
                "unknown",//10
                "idea",//11
                "second",//12
                "possible",//13
                "monopolize",//14
                "developing",//15
                "although",//16
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