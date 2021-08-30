<style>
    .line-hight{
        line-height: 3;
    }
    </style>
    @php
        $question = [
            'q1' => "Recent developments in technology have had a positive effect on human lifestyles in the last few",
            'q2' => ". These improvements have occurred in a number of fields, including industry, medicine, transportation and telecommunications. This essay will ",
            'q3' => "some of these achievements. Technological innovation has",
            'q4' => "the need for human employees to do boring manual work. For example, ",
            'q5' => "now carry out many of the tasks once done by humans. Apart from reducing the amount of boring work, these robots generally produce more quickly and effectively than their human counterpart. There are improvements in",
            'q6' => "as well. One example is in surgery, where computer technology has resulted in the development of a new surgical procedure called key-hole surgery. This new technique involves less danger and damage to the patient’s body. A",
            'q7' => "example involves the use of computers to give access to medical treatment to people who live in",
            'q8' => "areas. They can contact doctors who live thousands of miles away via computer screen. ",
            'q9' => ", this same technique is useful for education so that students who live away from cities can gain access to the cyber-classroom.",
            'q10' => "has also improved. One illustration is the development of supersonic flight, which considerably reduces the time needed to cross the globe. A further example is the invention of ‘bullet train’ which saves ",
            'q11' => "time as they travel from home to their place of work. Perhaps the greatest",
            'q12' => ", though, have been seen in the field of tele-communications. Mobile phones and the",
            'q13' => " have resulted in easier and more convenient means of communicating with people anywhere in the world. These media have also changed the way in which people conduct",
            'q14' => ", and this has had a beneficial impact in the workplace. In ",
            'q15' => ", the list of improvements brought about by technological innovation is long and far-reaching. It seems likely that future developments will be accompanied by further benefits to all people around the",
        ];
    
        $endQuestion = ".";
    
        $choice = [
            'c1' => "benefits",    
            'c2' => "business",  
            'c3' => "commuters",     
            'c4' => "conclusion", 
            'c5' => "decades",     
            'c6' => "further",   
            'c7' => "globe",   
            'c8' => "Internet",     
            'c9' => "medicine",     
            'c10' => "outline",      
            'c11' => "reduced",      
            'c12' => "remote",      
            'c13' => "robots",      
            'c14' => "Similarly",      
            'c15' => "Transportation",      
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
                "decades", //1
                "outline",//2
                "reduced",//3
                "robots",//4
                "medicine",//5
                "further",//6
                "remote",//7
                "Similarly",//8
                "Transportation",//9
                "commuters",//10
                "benefits",//11
                "Internet",//12
                "business",//13
                "conclusion",//14
                "globe",//15
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