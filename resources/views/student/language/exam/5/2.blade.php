<style>
.line-hight{
    line-height: 3;
}
</style>
@php
    $question = [
        'q1' => "In recent",
        'q2' => "there has been a changing trend in population. There has been a ",
        'q3' => "change in focus from a young population to a state in which the older generation has become the majority. This essay will examine some of the",
        'q4' => "for this trend. There are a number of reasons why people are living",
        'q5' => "today. The first of these is the improvement in ",
        'q6' => ". The number of well-equipped hospitals and clinics has grown, especially in developed nations. In",
        'q7' => ", the doctor-patient ratio has improved, resulting in a",
        'q8' => "workload for doctors, and enhanced health-care for",
        'q9' => ". Another reason is the fact that people nowadays are eating a healthier",
        'q10' => ". Campaigns to make people more aware of the need to eat nutritious food have been successful, as people move aware from their preference for fast, fatty foods high in",
        'q11' => ". Combined with this is the fact that people are tending to take part in more",
        'q12' => "exercise. This also prolongs longevity. Improved working conditions are",
        'q13' => "reason why people are living longer. In the past people had to work long hours under insanitary, even dangerous conditions. Now that",
        'q14' => "has reduced the need for manual labour, work has become less physically draining. Improved terms and conditions of service, such as longer weekends and periods of paid leave, have also had a",
        'q15' => "impact on working life. Ironically, the trend for an ageing population has resulted in a change of attitude regarding ",
        'q16' => ". Since people are living longer, it makes sense for the official retirement age to be raised so that the older generation can remain mobile and focused.",
        'q17' => ", there are a number of reasons why people are living longer. If the trend continues, governments and society as a whole may need to change their mindset concerning old people. The olde",
    ];

    $endQuestion = "may well have to become more productive in order to make up for the reduction in numbers of young people available to work.";

    $choice = [
        'c1' => "addition",    
        'c2' => "another",  
        'c3' => "automation",     
        'c4' => "beneficial", 
        'c5' => "cholesterol",     
        'c6' => "conclusion",   
        'c7' => "decades",   
        'c8' => "diet",     
        'c9' => "dramatic",     
        'c10' => "generation",      
        'c11' => "health-care",      
        'c12' => "longer",
        'c13' => "patients",
        'c14' => "physical",
        'c15' => "reasons",
        'c16' => "reduced",
        'c17' => "retirement",
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
            "dramatic",//2
            "reasons",//3
            "longer",//4
            "health-care",//5
            "addition",//6
            "reduced",//7
            "patients",//8
            "diet",//9
            "cholesterol",//10
            "physical",//11
            "another",//12
            "automation",//13
            "beneficial",//14
            "retirement",//15
            "conclusion",//16
            "generation",//17
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