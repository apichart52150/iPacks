<style>
    .line-hight{
        line-height: 3;
    }
    </style>
    @php
        $question = [
            'q1' => "Nowadays people generally have less money to spend on holidays in other countries. As a",
            'q2' => ", there will be a reduction in international travel in the future. Some people believe that a",
            'q3' => "in the number of foreign tourists is a good thing, while others believe that this would have damaging results. This essay will examine both points of view. The benefits of overseas travel are",
            'q4' => ". First of all, visiting foreign countries with diverse cultures helps people",
            'q5' => "their minds. It can give people fresh perspectives on life. It may also help them to learn a",
            'q6' => "language. In",
            'q7' => ", the income generated from international travel helps poorer nations to develop their economies. Take, for example, Thailand,",
            'q8' => "relies heavily on foreign tourists to pay for products and services provided by the tourism sector. Tourists spend a great deal of money on accommodation, travel, food and souvenirs, which all help the",
            'q9' => "people to earn a decent living.",
            'q10' => ", there are some negative impacts of international travel.",
            'q11' => "of all, a great amount of fuel is used to transport people from one continent to another.",
            'q12' => "gases emitted by long-distance airliners increase the risk of global",
            'q13' => ".  In addition, continuous development of hotels and resorts can degrade the environment and increase",
            'q14' => ". There is also the danger of ‘cultural pollution’, which can occur when local cultures are changed to",
            'q15' => "the bahaviour of foreigners. All in all, a reduction in the amount of foreign travel has",
            'q16' => "positive and negative aspects. In my",
            'q17' => ", a slowdown in the development of tourist destinations may be a good thing. It will give the environment a chance to recuperate and regenerate growth. In ",
            'q18' => ", it might help those developing nations to ‘think smart’ in terms of optimising the use of their resources.",
        ];
    
        $endQuestion = ", it may be an opportunity for local communities to become more self-sufficient in the future.";
    
        $choice = [
            'c1' => "addition",    
            'c2' => "both",  
            'c3' => "broaden",     
            'c4' => "fall", 
            'c5' => "First",     
            'c6' => "foreign",   
            'c7' => "Furthermore",   
            'c8' => "Greenhouse",     
            'c9' => "However",     
            'c10' => "imitate",      
            'c11' => "local",      
            'c12' => "numerous",      
            'c13' => "pollution",      
            'c14' => "result",      
            'c15' => "view",      
            'c16' => "warming",      
            'c17' => "which",      
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
                "result ", //1
                "fall  ",//2
                "numerous ",//3
                "broaden  ",//4
                "foreign  ",//5
                "addition",//6
                "which",//7
                "local",//8
                "However",//9
                "First",//10
                "Greenhouse",//11
                "warming",//12
                "pollution",//13
                "imitate",//14
                "both",//15
                "view",//16
                "addition",//17
                "Furthermore",//18
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