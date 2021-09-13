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
$Q=["q1" => "The given bar-chart shows",
"q2" => "profits earned by 4 companies between2000 and 2016. The table gives information about what",
"q3" => "of these profits was invested in Research and Development in 2000 and 2010. Overall, it can be seen that
Company C, while showing the",
"q4" => "profit at the start of the period, ended up with by",
"q5" => "the largest earnings by 2016. The fact that this company’s",
"q6" => "for R&D was far higher than the other three companies may show a",
"q7" => "between R&D investment and annual profits. To begin with the data in the bar-chart, it can be seen that all
companies experienced a",
"q8" => "in annual profits from the start of the period until the end, with the",
"q9" => "of Company B, which showed a",
"q10" => "fall in earnings in each of the three years. Company A earned just over 20 million dollars profit in 2010,",
"q11" => "gradually to around 28 million by 2016. As stated earlier, Company C started the period with around 15 million
dollars profit before showing",
"q12" => "increases in both 2010 and 2016, with 35 and 65 million dollars respectively. Company D started with 20
million and almost",
"q13" => "its profit margin to just under 40 million in 2010 before dipping back",
"q14" => "to end the period at around 38 million dollars. By",
"q15" => "Company B showed profits of almost 50 million in 2000 before",
"q16" => "a steady decline to end at 40 million dollars by 2016. The data seem to give support to the claim that
investment in R&D really doespay dividends. As stated previously, Company C was the",
"q17" => "one to show real commitment to R&D funding with an increase from 30% to 40% in 2000 and 2010",
"q18" => "Company A’s budget for R&D stayed steady at 20% in both years, but experienced a slight rise in profits. Both
Company B and Company D",
];
$end = "their R&D budgets, resulting in a steady fall for Company B and a slight decrease in profits for Company D at
the end of the period.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The bar-chart below shows the annual profits (in millions of dollars) for 4 different
                            companies in 3 years. The table gives details of Research and Development spending by each
                            company in 2000 and 2010, expressed in terms of percentage of total profits.</h5>
                        <h5>Summarize the information by selecting and reporting on the main features, and make
                            comparisons where relevant.</h5>
                        <a href="{{ asset('public/img_lang/gap2/gap2_1.jpg') }}" class="image-popup"
                            title="{{$pageTitle['topic']}}">
                            <img src="{{ asset('public/img_lang/gap2/gap2_1.jpg') }}" class="img-fluid"
                                alt="work-thumbnail">
                        </a>
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
    answers[0]= ['yearly'];
    answers[1] = ['proportion'];
    answers[2] = ['smallest' , 'lowest'];
    answers[3] = ['far'];
    answers[4] = ['funding', 'budget'];
    answers[5] = ['correlation', 'link'];
    answers[6] = ['rise'];
    answers[7] = ['exception'];
    answers[8] = ['steady', 'gradual'];
    answers[9] = ['rising', 'increasing'];
    answers[10] = ['substantial', 'dramatic', 'huge', 'large', 'major'];
    answers[11] = ['doubled'];
    answers[12] = ['slightly'];
    answers[13] = ['contrast'];
    answers[14] = ['experiencing', 'recording'];
    answers[15] = ['only'];
    answers[16] = ['respectively'];
    answers[17] = ['reduced', 'decreased'];

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