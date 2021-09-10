<style>
    .form-control {
        border: none;
        border-bottom: 1px solid #ccc;
        display: inline-block;
        height: auto;
        width: 140px;
        padding: 0 5px;
        margin: 10px 5px;
    }

    .input-con {
        display: inline-block;
        position: relative;
    }
</style>
@php
    $startQuestion = "The line-graphs give details of the percentage of adolescents who owned cd players, laptop computers and mobile phones during the period 1980 to 2010. Overall, it can be seen that the popularity of cd players";
    $question = [
        'q1' => "significantly, while ownership of mobile phones",
        'q2' => "dramatically over the period.",
        'q3' => "At the",
        'q4' => "of the period cd players were the",
        'q5' => "popular of all the three gadgets, with more than 80% ownership. Roughly one half of all teenagers had a laptop computer while only fewer",
        'q6' => "20% had a mobile phone. Over the next decade, mobile phones and laptops had a steady",
        'q7' => ", while the popularity of cd players experienced a",
        'q8' => "This trend continued over the next ten years. By the year 2000, only around 40% of young people owned a cd player, while laptop computers reached a peak to stand",
        'q9' => "80%. Mobile phones also saw a dramatic",
        'q10' => "to around 70%. By the end of the period, cd players had reached their",
        'q11' => "popularity, around 30%. Laptop computers also experienced a",
        'q12' => "during this decade to finish at around 60%. Mobile phones,",
    ];
    $endQuestion = ", continued to rise, with almost 100% ownership by 2010.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The graph below shows the percentage of teenagers who owned a number of electronic items between 1980 and 2010.</h5>
                        <img src="{{ asset('public/img_lang/gap1/gap1_2.jpg') }}" class="img-fluid mb-2" alt="Responsive image">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="border border-dark p-2">
                        {{$startQuestion}}
                        @for ($i = 1; $i <= count($question); $i++)
                            <div class="line-hight d-inline w-auto mb-2 ">
                                {{ $question['q'.$i] }} <!-- question -->
                            </div>
                            <div class="input-con">
                                <input type="text" class="form-control">
                            </div>
                        @endfor
                        {{$endQuestion}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@section('button-control')
    <button id="check-answer" class="btn btn-info">Check Answers</button>
@endsection

@section('js')
<script>

    const answers = []
    answers[0] = ['decreased', 'fell', 'dropped', 'reduced'];
    answers[1] = ['increased', 'rose', 'grew'];
    answers[2] = ['beginning', 'start'];
    answers[3] = ['most'];
    answers[4] = ['than'];
    answers[5] = ['rise','increase'];
    answers[6] = ['fall','decrease','reduction','drop'];
    answers[7] = ['at'];
    answers[8] = ['rise', 'increase'];
    answers[9] = ['lowest'];
    answers[10] = ['drop', 'fall', 'decrease'];
    answers[11] = ['however','though'];

    let score = 0;

    $('#check-answer').click(checkAnswers) 

    function checkAnswers() {
        let icon;
        $(':text').each((idx, item) => {
            answers[idx] = answers[idx].toString().trim().toLowerCase().split(",")

            $(item).removeClass('border-success');
            $(item).removeClass('border-danger');
            
            if(jQuery.inArray($(item).val().toLowerCase().trim(),  answers[idx]) != -1) {
                $(item).addClass('border border-success');
                score++
            } else {
                $(`<span class="text-success"><u>${answers[idx]}</u></span>`).insertAfter($(item));
                $(item).addClass('border border-danger');
            }
        })

        $('#check-answer').prop('disabled', true);
        
        
        let title = ""
        let text = "You got "+score + "/" + $(':text').length + " points."
        if (score == $(':text').length)
            title = "Congratulations!"
        else
            text = text + " Try again."

        Swal.fire({
            title: title,
            text: text,
            timer: 5000,
        }).then(() => {
            $(item).css({
                "font-weight": "bold",
                'color': '#2bc3a5'
            });
        });

    }
</script>
@stop