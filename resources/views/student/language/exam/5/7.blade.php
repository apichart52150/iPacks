<style>
    .line-hight{
        line-height: 3;
    }
    </style>
    @php
        $question = [
            'q1' => "Life in large cities can put the",
            'q2' => ". Their citizens believe that the death",
            'q3' => "is not a suitable punishment for a free, democratic nation. Some nations,",
            'q4' => ", persist in its use for serious crimes such as murder, rape and hi-jacking, regarding it as a necessary deterrent to serious crime.",
            'q5' => " I agree strongly that there is no place for capital punishment in a modern-day society and will outline reasons for this below. The Biblical saying, ‘an eye for an eye’, has been quoted for centuries as justification for the execution of criminals who",
            'q6' => " serious crimes. However, the belief that the person who commits a crime should receive a similar fate to that of the victim, can also be regarded as little more than a case of government approved murder, or an act of vengeance to satisfy the family of the",
            'q7' => ". Instead of exacting revenge for the crime, the government should find out the reason why the crime was committed and take measures to eradicate causes of serious crime. As they say, '",
            'q8' => "is better than the cure'. In a perfect world, with a flawless judicial system, there may be grounds for carrying out the death penalty for ",
            'q9' => "crimes. However, the fact is that the world is not perfect and we all make ",
            'q10' => "in judgement. Often our judgement is impaired by emotions, especially prejudice and bias. What happens then in the case when someone is",
            'q11' => ", only to be proved innocent at some later date? After the sentence has been carried out, it is irreversible. What form of compensation can possibly be adequate for such a miscarriage of justice? For all the above",
            'q12' => " the death penalty is not an appropriate punishment in today’s flawed society. Many serious crimes such as murder, rape and political events such as hi-jacking tend to arouse strong ",
        ];
    
        $endQuestion = "which prevent clear vision, and compromise the sense of justice.";
    
        $choice = [
            'c1' => "abolished",    
            'c2' => "committed",  
            'c3' => "emotions",     
            'c4' => "executed", 
            'c5' => "however",     
            'c6' => "mistakes",   
            'c7' => "penalty",   
            'c8' => "Personally",     
            'c9' => "prevention",     
            'c10' => "reasons",      
            'c10' => "serious",      
            'c10' => "victim",      
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
                "abolished", //1
                "penalty",//2
                "however",//3
                "Personally",//4
                "committed",//5
                "victim",//6
                "prevention",//7
                "serious",//8
                "mistakes",//9
                "executed",//10
                "reasons",//11
                "emotions",//12
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