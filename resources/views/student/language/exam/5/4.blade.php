<style>
.line-hight{
    line-height: 3;
}
</style>
@php
    $question = [
        'q1' => "Every year, millions of animals undergo painful suffering or death as a result of",
        'q2' => "research into the effects of drugs, food additives, cosmetics and other chemical products. While most people think animal testing is  necessary, others are ",
        'q3' => "by what they see as needless suffering. This essay looks at some of the positive and negative aspects of animal testing. Many medical treatments and procedures have been",
        'q4' => "from experiments on animals. Since animals share many features with humans,",
        'q5' => "use animals to test the safety and effectiveness of newly developed drugs before pilot testing on small groups of patients. Medical teams practise new operating",
        'q6' => " such as transplants on animals. Without animal testing, many procedures or new drugs would be extremely",
        'q7' => "However, many people are",
        'q8' => "that animals are suffering unnecessarily and cruelly. They",
        'q9' => "believe that every new drug needs to be tested on animals, especially with the huge database of knowledge and modern computer models. They are also worried that many animal tests are ineffective, pointing out that many",
        'q10' => "have had to be withdrawn from the market despite extensive testing. They particularly feel that animal testing should not be used for non-essential ",
        'q11' => "such as cosmetics, shampoos, soaps, and cleaning products.",
        'q12' => ", some campaigners would like to see certain tests replaced and more humane methods used. We need to make sure that the millions of animals which are used for",
    ];

    $endQuestion = "new products are treated with the minimum of suffering. Although some animal testing may be unavoidable at present, treating our fellow creatures as mercifully as possible will demonstrate our humanity.";

    $choice = [
        'c1' => "concerned",    
        'c2' => "developed",  
        'c3' => "don’t",     
        'c4' => "drugs", 
        'c5' => "Furthermore",     
        'c6' => "products",   
        'c7' => "scientific",   
        'c8' => "scientists",     
        'c9' => "techniques",     
        'c10' => "testing",      
        'c11' => "unsafe",      
        'c12' => "upset",
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
            "scientific", //1
            "upset",//2
            "developed",//3
            "scientists",//4
            "techniques",//5
            "unsafe",//6
            "concerned",//7
            "don’t",//8
            "drugs",//9
            "products",//10
            "Furthermore",//11
            "testing",//12
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