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
    $question = [
        'q1' => "The table gives",
        'q2' => "of the age men and women can expect to live in a number of different countries. The data can be grouped according to economic factors: those countries which are quite wealthy, and those nations which are quite",
        'q3' => ". Overall, it can be seen that in all countries, with the",
        'q4' => "of Rwanda, women tend to live",
        'q5' => "than men. To begin with the wealthy nations, Japan is the country with the",
        'q6' => "life expectancy. Men can expect to live to the age of 77 years, while women live 4 years",
        'q7' => "than men, reaching the age of 81. After Japan comes Australia. Australian men are expected to reach 75 years old,",
        'q8' => "women can expect to live until 79 years of age. Next comes the USA, where men and women can expect to live until 71 and 73 years",
        'q9' => ". The remaining three countries have a much",
        'q10' => "life expectancy than the wealthy developed nations. In both Nepal and Rwanda males can expect to reach 58 years old. Women in Nepal generally live one year",
        'q11' => "than men, whereas females in Rwanda tend to live one year",
        'q12' => "than males. Benin has the",
        'q13' => "life expectancy of all the countries. Males can expect to reach just 47 years, while their female counterparts live seven years",
        'q14' => ", to the age of 54. To sum up, it is clear that people in",
        'q15' => "countries have a longer life expectancy than those in the poorer nations. It is less clear,",
    ];

    $endQuestion = ", why women tend to live longer than men.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The table shows life expectancy for males and females in 6 different countries.</h5>
                        <a href="{{ asset('public/img_lang/gap1/gap1_3.jpg') }}" class="image-popup" title="{{$pageTitle['topic']}}">
                            <img src="{{ asset('public/img_lang/gap1/gap1_3.jpg') }}" class="img-fluid" alt="work-thumbnail">
                            </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="border border-dark p-2">
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
    answers[0] = ['details', 'information'];
    answers[1] = ['poor'];
    answers[2] = ['exception'];
    answers[3] = ['longer'];
    answers[4] = ['longest','highest','greatest'];
    answers[5] = ['more','longer'];
    answers[6] = ['while','whereas','but'];
    answers[7] = ['respectively'];
    answers[8] = ['shorter', 'lower'];
    answers[9] = ['longer','more'];
    answers[10] = ['shorter', 'less'];
    answers[11] = ['shortest','least','worst'];
    answers[12] = ['longer','more'];
    answers[13] = ['wealthy','rich','developed'];
    answers[14] = ['hoWever','though'];

    let score = 0;

    $('#check-answer').click(checkAnswers) 

    function checkAnswers() {
        
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