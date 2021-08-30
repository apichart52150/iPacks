<style>
.line-hight{
    line-height: 3;
}
</style>
@php
    $question = [
        'q1' => "There is no",
        'q2' => "that going to study in a foreign country, with its different language and culture, can be a stressful and sometimes painful experience. But while",
        'q3' => " study has its drawbacks, the difficulties are far outweighed by the advantages. Indeed, people who go abroad for study open themselves up to experiences that those who stay at home will never have. The most obvious advantage to overseas university study is real-life use of a foreign",
        'q4' => ". While a person can study a foreign language in his or her own country, it cannot compare with constant use of the language in academic and everyday life. There is no better ",
        'q5' => "to improve second-language skills than living in the country in which it is",
        'q6' => ". Moreover, having used the language during one's studies offers a distinct advantage when one is looking for",
        'q7' => "back home that require the language. On a university",
        'q8' => ", the foreign student is not alone in having come from far away. He or she will likely encounter many students from overseas and it is a good opportunity to make friends from all around the world. This is not only exciting on a social level, but could lead to important overseas contacts in later professional life. Finally, living and studying abroad offers one a new and different",
        'q9' => "of the world and, perhaps most important, of one's own country. After the",
        'q10' => "shock of being in a new culture, the student slowly begins. to get a meaningful understanding of the host society. On returning home, one inevitably sees one's own country in a new, often more appreciative, light. In conclusion, while any apprehension about going overseas for university study is certainly understandable, it is important to remember that the",
    ];

    $endQuestion = "offered by the experience make it";

    $choice = [
        'c1' => "benefits",    
        'c2' => "campus",  
        'c3' => "doubt",     
        'c4' => "initial", 
        'c5' => "jobs",     
        'c6' => "language",   
        'c7' => "opportunity",   
        'c8' => "overseas",     
        'c9' => "perspective",     
        'c10' => "spoken",      
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
            "doubt", //1
            "overseas",//2
            "language",//3
            "opportunity",//4
            "spoken",//5
            "jobs",//6
            "campus",//7
            "perspective",//8
            "initial",//9
            "benefits",//10
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