<style>
    .line-hight{
        line-height: 3;
    }
    </style>
    @php
        $question = [
            'q1' => "Recent developments in technology have had a positive effect on human lifestyles in the last few ",
            'q2' => ". These improvements have occurred in a number of ",
            'q3' => "including industry, medicine, transportation and telecommunications. This essay will outline some of these achievements. Technological innovation has",
            'q4' => "the need for human employees to do boring manual work. For example,",
            'q5' => "now carry out many of the tasks once done by humans. Apart from reducing the amount of boring work, the robots generally produce more quickly and effectively ",
            'q6' => "their human counterpart. There are improvements in medicine as well. One ",
            'q7' => "is in surgery, where computer technology has resulted in the development of a new surgical procedure called key-hole",
            'q8' => ". This new technique involves less danger and damage to the",
            'q9' => "body. A further example involves the use of computers to give access to medical treatment to people who live in",
            'q10' => "areas. They can contact doctors who live thousands of miles away via computer screen. Similarly, this same technique is useful for ",
            'q11' => "so that students who live away from cities can gain access to the cyber-classroom.",
            'q12' => "has also improved. One illustration is the development of supersonic flight, which considerably reduces the time needed to cross the globe. A",
            'q13' => "example is the invention of ‘bullet train’ which saves commuters time as they travel between cities. Perhaps the greatest benefits, though, have been seen in the field of tele-communications. Mobile phones and the Internet have resulted in easier and more",
            'q14' => "means of communicating with people anywhere in the world. These media have also changed the way in which people",
            'q15' => "business, and this has had a beneficial impact. In",
        ];
    
        $endQuestion = ", the list of improvements brought about by technological innovation is long and far-reaching. It seems likely that future developments will be accompanied by further benefits to all people around the globe.";
    
        $choice = [
            'c1' => "conclusion",    
            'c2' => "conduct",  
            'c3' => "convenient",     
            'c4' => "decades", 
            'c5' => "education",     
            'c6' => "example",   
            'c7' => "fields",
            'c8' => "further",     
            'c9' => "patient’s",     
            'c10' => "reduced",      
            'c11' => "remote",      
            'c12' => "robots",      
            'c13' => "surgery",      
            'c14' => "than",      
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
                "fields",//2
                "reduced",//3
                "robots ",//4
                "than",//5
                "example",//6
                "surgery",//7
                "patient’s",//8
                "remote",//9
                "education",//10
                "Transportation",//11
                "further",//12
                "convenient",//13
                "conduct",//14
                "conclusion",//15
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