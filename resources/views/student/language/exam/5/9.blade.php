<style>
    .line-hight{
        line-height: 3;
    }
    </style>
    @php
        $question = [
            'q1' => "Ever since life began on our ",
            'q2' => ", the survival of all species has hung in the balance. Charles Darwin was the first to coin the expression ‘the survival of the fittest’, and it is this ability to adapt to change which is crucial for all living ",
            'q3' => ". Even when creatures have been able to adapt to their surroundings, ",
            'q4' => ", there is still one more threat to their existence. That threat comes in human form. Human activities pose a threat to the",
            'q5' => "of many different creatures. A number of animals and birds, including the dodo, have already been hunted out of existence. Man’s insatiable appetite is also the",
            'q6' => "for many creatures currently being on the endangered species list. These creatures include many kinds of whales and some of the larger land",
            'q7' => "such as the rhino and the tiger. These animals are hunted for their food or for special properties such as their horn or their skin, which are highly valued by ",
            'q8' => ".  Even if an animal does not feature directly on the human menu, it may still be at risk. As human numbers grow, so does the need for space to build ",
            'q9' => " and grow crops. As humans encroach upon forests and savannahs, the natural ",
            'q10' => "of many species are destroyed, leaving the animals with nowhere to go and no food to eat. What action can we take to",
            'q11' => "other living species? Some governments have already placed bans on hunting certain animals, but ",
            'q12' => "operate outside the law and continue to slaughter endangered species. Stricter",
            'q13' => "of the laws by the police is needed with harsher punishments for ",
            'q14' => ". There also needs to be greater legislation against destroying forests and polluting waterways. Education and awareness are also keys to help address the issue. It is crucial that humans understand the nature of the relationship between animals and people. It is a mutual, symbiotic relationship. We need",
            'q15' => "to ensure our own survival on this planet. Will we learn to stop slaughtering them before it’s too",
        ];
    
        $endQuestion = "?";
    
        $choice = [
            'c1' => "animals",    
            'c2' => "creatures",  
            'c3' => "enforcement",     
            'c4' => "existence", 
            'c5' => "habitats",     
            'c6' => "houses",   
            'c7' => "however",   
            'c8' => "humans",     
            'c9' => "late",     
            'c10' => "mammals",      
            'c11' => "offenders",      
            'c12' => "planet",      
            'c13' => "poachers",      
            'c14' => "protect"     ,      
            'c15' => "reason",      
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
                "planet",//1
                "creatures",//2
                "however",//3
                "existence",//4
                "reason",//5
                "mammals",//6
                "humans",//7
                "houses",//8
                "habitats",//9
                "protect",//10
                "poachers",//11
                "enforcement",//12
                "offenders",//13
                "animals",//14
                "late",//15
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