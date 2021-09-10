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
    $Q=["q1" => "The table shows how many organ transplants were",
    "q2" => "in 3 countries over 3 different years, plus forecasts for 2020. The pie-chart shows the",
    "q3" => "for 2020, while the second chart illustrates levels of air pollution in the",
    "q4" => "incidence of organ transplants, and the major organ involved in",
    "q5" => "was the liver.",
    "q6" => "we start with the number of organ transplants we can see that both Australia and South Africa showed increasing trends for transplant frequency,",
    "q7" => "the trend in France was downward. South Africa started the period at just over 8,000 transplants. Although this figure shrank to around 7,000 in the ",
    "q8" => "decade, it increased again to finish at 8,900 transplants in 2010. In Australia, 4,200 transplants",
    "q9" => "place in both 1990 and 2000 before",
    "q10" => "to 5,500 ten years later. France is the only country to record a",
    "q11" => " in the number of organ transplants over the period. The figure started at 3,200 in 1990 and, although it rose to 3,800 by 2000, the figure then shrank over the next",
    "q12" => "to stand at 2,800, a reduction of one thousand. Moving on to projected figures, the same trends continue for each country. Australia is expected to experience a growth of five hundred to stand at 6,000 transplants. South Africa is projected to increase",
];
$end = "less than Australia, with a rise of 300 transplants to stand at 9,200. France is likely to experience a fall of 300 transplants to stand at 2,500 operations, the lowest figure of all these three countries.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The table shows the number of transplants which were carried out in 3 countries over 3 different years, plus projections for the year 2020. The pie-chart shows the proportion of organs used in the transplants in one particular year in Australia.</h5>
                        <h5>Summarize the information by selecting and reporting on the main features, and make comparisons where relevant.</h5>
                        <img src="{{ asset('public/img_lang/gap2/gap2_14.jpg') }}" class="img-fluid mb-2" alt="Responsive image">
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
    answers[0]= ['conducted'];
    answers[1] = ['percentage', 'proportion'];
    answers[2] = ['highest'];
    answers[3] = ['transplantation', 'transplants'];
    answers[4] = ['If'];
    answers[5] = ['while', 'but', 'although', 'whereas'];
    answers[6] = ['next', 'following', 'subsequent'];
    answers[7] = ['took'];
    answers[8] = ['Increasing', 'rising', 'growing', 'rising'];
    answers[9] = ['fall', 'decrease', 'reduction'];
    answers[10] = ['decade'];
    answers[11] = ['Slightly', 'just', 'moderately'];

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