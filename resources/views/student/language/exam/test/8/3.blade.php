<style>
    .form-control {
        border: none;
        border-bottom: 1px solid #ccc;
        display: inline-block;
        height: auto;
        width: 135px;
        padding: 0 5px;
        margin: 10px 5px;
    }

    ul.questions li {
        margin: 20px 0;
        line-height: 2rem;
    }

    .input-con {
        display: inline-block;
        position: relative;
    }

    .ans-con {
        position: absolute;
        top: 50%;
        right: 5px;
        transform: translateY(-50%);
    }
</style>
@php
    //$question -> input
    $Q=["q1" => "The bar-chart above shows how many crimes were committed in three countries from 2005 to 2015. It can be seen that the crime",
    "q2" => "experienced a steady decrease in Country A while Country B showed a",
    "q3" => "trend with a slight increase in each period. The number of crimes committed in Country C showed an",
    "q4" => "drop over the period but with a slight increase in 2010 over the figure five years earlier. The pie-charts show the percentage breakdown for different types of crime committed in",
    "q5" => "Country A and Country B. Country A showed the highes",
    "q6" => "of theft, while assault was the most",
    "q7" => "crime in Country B. To start with the number of crimes, it can be seen that,",
    "q8" => "Country A topped the group consistently throughout the period, the incidence of crime fell from the",
    "q9" => "point of just under 6,000 crimes committed in 2005 to just over 4,000 crimes ten years later. This decreasing trend is in contrast to",
    "q10" => "of Country B, which recorded a slight increase from around 2,000 crimes in 2005 to around 2,200 crimes a",
    "q11" => "later. Country C started out at around 3,800 crimes in 2005,",
    "q12" => "by a small rise to around 3,900 crimes, before dropping back to approximately 3,700 incidences of crime. When it",
    "q13" => "to the kinds of crime committed, theft",
    "q14" => "for 40% of all crimes in Country A, with drug offences and assault taking 10% and 20%",
    "q15" => " ‘Other’ crimes accounted for the remaining 30%. In Country B, however, assault was the leading crime with 40% of all crimes committed. Thirty per cent of all crimes were drug offences, followed by theft (20%) and ‘other’ (the",
];
$end = "10%).";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The bar-chart below shows the number of crimes committed in 3 different countries between 2005 and 2015. The pie-chart gives a breakdown (in percentages) of the different sorts of crimes committed in 2 of these countries in 2015.</h5>
                        <h5>Summarize the information by selecting and reporting on the main features, and make comparisons where relevant.</h5>
                        <img src="{{ asset('public/img_lang/gap2/gap2_3.jpg') }}" class="img-fluid mb-2" alt="Responsive image">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="border border-dark p-2">
                        @foreach ($Q as $Q)
                        <div class="line-hight d-inline w-auto mb-2 ">
                            {{ $Q }}
                            <!-- question -->
                        </div>
                        <div class="input-con">
                            <input type="text" class="form-control">
                        </div>
                        @endforeach
                        {{$end}}
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
    // no space answer
    
    const answers = []
    answers[0]= ['rate'];
    answers[1] = ['reverse', 'different'];
    answers[2] = ['overall'];
    answers[3] = ['both'];
    answers[4] = ['incidence', 'rate'];
    answers[5] = ['common', 'frequent'];
    answers[6] = ['although'];
    answers[7] = ['starting'];
    answers[8] = ['that'];
    answers[9] = ['decade'];
    answers[10] = ['followed'];
    answers[11] = ['comes'];
    answers[12] = ['accounted'];
    answers[13] = ['respectively'];
    answers[14] = ['final', 'remaining', 'other'];

    let score = 0;

    $('#check-answer').click(checkAnswers) 

    function checkAnswers() {
        let icon;
        $(':text').each((idx, item) => {
            answers[idx] = answers[idx].toString().trim().toLowerCase().split(",")
            $(item).removeClass('border-success');
            $(item).removeClass('border-danger');
            
            if(jQuery.inArray($(item).val().toLowerCase(),  answers[idx]) != -1) {
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