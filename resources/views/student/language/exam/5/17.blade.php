<style>
    .line-hight{
        line-height: 3;
    }
    </style>
    @php
        $question = [
            'q1' => "When Sir Walter Raleigh introduced tobacco to Europe after his travels to the New World, he probably had no idea of the huge ",
            'q2' => "his discovery would create so many years later. The issue of smoking in public places is a",
            'q3' => "of great debate nowadays and most people hold strong views on this. This essay will examine the arguments for and",
            'q4' => "banning smoking in public places. As the surgeon general’s warning quite clearly states: ‘Smoking can",
            'q5' => "your health’. This warning has been issued based on extensive medical",
            'q6' => "over a number of years. Some of the health problems associated with smoking include various forms of cancer, heart disease, respiratory problems and high blood pressure.",
            'q7' => ", it is not only the person who smokes who is at ",
            'q8' => ", but also anyone else who happens to be in the same place as the smoker. This danger to non-smokers is referred to as ‘",
            'q9' => "smoking’. As a result of these dangers to health, governments have taken action to",
            'q10' => "the incidence of smoking-related illnesses. Initially, these measures included a public awareness",
            'q11' => "to educate people about the dangers of smoking. This campaign involved media advertisements showing graphic evidence of health problems. It",
            'q12' => "involved displaying health warnings on all cigarette packets. Later on, the measures were intensified to prohibit all media tobacco advertising and to",
            'q13' => "smoking in the workplace,  education establishments, restaurants and entertainment venues. These measures were largely",
            'q14' => ", however, in reducing the number of smokers. Only when people became fully aware of the dangers of passive-smoking did governments take action to prevent smokers from putting",
            'q15' => "at risk. At that time, a ban on smoking in all public places was put into place.  Not everyone agrees with this blanket ban,",
            'q16' => ". Some people regard it as an infringement of human rights, the right to choose our own individual course of action. Smokers see themselves being branded as ‘second-class citizens’. However, since all other measures to",
        ];
    
        $endQuestion = "non-smokers from the dangers posed by the toxic effects of the smoke seem to have failed, is there really a viable alternative to this blanket ban? After all, non-smokers have rights, too.";
    
        $choice = [
            'c1' => "against",    
            'c2' => "also",  
            'c3' => "ban",     
            'c4' => "campaign", 
            'c5' => "controversy",     
            'c6' => "damage",   
            'c7' => "Furthermore",   
            'c8' => "however",     
            'c9' => "non-smokers",     
            'c10' => "passive",      
            'c11' => "protect",      
            'c12' => "reduce",      
            'c13' => "research",      
            'c14' => "risk",      
            'c15' => "topic",      
            'c16' => "unsuccessful",      
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
                "controversy", //1
                "topic",//2
                "against",//3
                "damage",//4
                "research",//5
                "Furthermore",//6
                "risk",//7
                "risk",//8
                "reduce",//9
                "campaign",//10
                "also",//11
                "ban",//12
                "unsuccessful",//13
                "non-smokers",//14
                "however",//15
                "protect",//16
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