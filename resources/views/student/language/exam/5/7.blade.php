<style>
    .line-hight{
        line-height: 3;
    }
    </style>
    @php
        $question = [
            'q1' => "Life in large cities can put the ",
            'q2' => "under a great deal of pressure. Much of this stress is caused by so many people living together in one ",
            'q3' => "space. In addition, this pressure is also increased by modern lifestyles. This essay will identify some of the",
            'q4' => "of stress in Bangkok, and suggest some measures to help people relieve the stress. With a",
            'q5' => "of more than ten million people, Bangkok can be described as overcrowded. This overcrowding is apparent when we observe everyday life in the city. ",
            'q6' => "congestion is just one example of this. At rush ",
            'q7' => ", movement of cars, trucks and buses is reduced almost to a ",
            'q8' => "As people hurry to work or place of study, a large amount of pressure is applied to the city’s infrastructure, almost to the point of bursting. The noise and air ",
            'q9' => "created by traffic congestion only adds to the pressure which builds up. In the workplace and place of study, competition to do well increases stress. Achieving target outputs in industry and obtaining satisfactory ",
            'q10' => "in examinations can bring the pressure to a peak. Under all this pressure, people need to find outlets to let off ",
            'q11' => "and to relax so that the body and mind can recuperate. Physical exercise and outdoor ",
            'q12' => "can help reduce stress levels. Cycling and walking are ideal ways to reduce stress. If more people were willing to do such physical exercise, it may even help decrease traffic ",
            'q13' => ". People also need to take their minds ",
            'q14' => "work and study. Regular visits to the ",
            'q15' => "centre may be beneficial. For those people who are not inclined to take part in physical exercise, then other pursuits ",
            'q16' => "as watching movies, reading books for pleasure and listening to music all help to reduce stress levels. In",
        ];
    
        $endQuestion = ", a variety of leisure activities will help release the pressure of modern, urban lifestyles. It is important to find an activity which suits you, and to participate regularly.";
    
        $choice = [
            'c1' => "causes",    
            'c2' => "conclusion",  
            'c3' => "confined",     
            'c4' => "congestion", 
            'c5' => "fitness",     
            'c6' => "hours",   
            'c7' => "inhabitants",   
            'c8' => "off",
            'c9' => "pollution      ", 
            'c10' => "population",     
            'c11' => "pursuits",      
            'c12' => "results",      
            'c13' => "standstill",      
            'c14' => "steam",      
            'c15' => "such",      
            'c16' => "Traffic",      
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
                "inhabitants", //1
                "confined",//2
                "causes",//3
                "population",//4
                "Traffic",//5
                "hours",//6
                "standstill",//7
                "pollution",//8
                "results",//9
                "steam",//10
                "pursuits",//11
                "congestion",//12
                "off",//13
                "fitness",//14
                "such",//15
                "conclusion",//16
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