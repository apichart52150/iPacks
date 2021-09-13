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
        'q2' => "about the amount of money spent each year",
        'q3' => "defence and education by five different nations. Figures are given in millions of dollars. Overall, it can be seen that all countries, with the",
        'q4' => "of Japan, allocate more money to defence",
        'q5' => " to education. Starting with the defence budget, Russia spends the",
        'q6' => "amount of money on defending its borders. At 7000 million dollars, this is 500 million dollars",
        'q7' => "than the USA. Russia’s budget for defence is",
        'q8' => "as high as China’s, which amounts to 3500 million dollars. Australia allocates 4500 million dollars to defence, while Japan spends just 1000 million dollars, the",
        'q9' => "amount of all the countries. When it comes to education, there is a different trend. Both Australia and Japan spend 4000 million dollars on education,",
        'q10' => "than any of the other countries in the group. The USA spends 500 million",
        'q11' => "than this, at 3500 million dollars. Russia and China both allocate sums of 3000 million dollars for education. While most countries spend more money on defence than on education, Japan spends four",
    ];

    $endQuestion = "more money on education than on defence.";
    
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The table shows annual budget allocation for defence and education in a number of different countries.</h5>
                        <a href="{{ asset('public/img_lang/gap1/gap1_4.jpg') }}" class="image-popup" title="{{$pageTitle['topic']}}">
                            <img src="{{ asset('public/img_lang/gap1/gap1_4.jpg') }}" class="img-fluid" alt="work-thumbnail">
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
    answers[0]= ['details', 'information'];
    answers[1]= ['on'];
    answers[2]= ['exception'];
    answers[3]= ['than'];
    answers[4]= ['highest','greatest','biggest'];
    answers[5]= ['more','greater','higher'];
    answers[6]= ['twice'];
    answers[7]= ['smallest','least'];
    answers[8]= ['more'];
    answers[9] = ['less','lower'];
    answers[10] = ['times'];

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