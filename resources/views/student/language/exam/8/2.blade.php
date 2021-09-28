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
    $Q=["q1" => "The chart above shows",
    "q2" => "details of 4 countries in terms of distribution in 4 given age-groups:",
    "q3" => "young people to the age of 20, people aged 21 to 40,those between the ages of 41 and 60, and finally those seniors aged over 60 years. It can be seen that Country A has the largest",
    "q4" => "of citizens in the 0-20 years group,while Country D has the largest proportion of seniors. Countries B and C both show majorities in the over 40-year-old groups. The pie-charts give details of welfare",
    "q5" => "in 2 of these countries, namely, Country A and Country D, showing the proportion of money spent in various fields each year. It is evident that Country A spends the highest percentage on",
    "q6" => "while Country D invests strongly in health-care for its citizens. To begin with the demographics, Country A has 40% of its citizens in the",
    "q7" => "21 years group, while a mere 10 per cent of its population are over 60 years of age. The",
    "q8" => "fifty per cent is split equally between the other 2 groups. Country B and Country C have similarly small percentages of young people with 10 per cent each. The large",
    "q9" => "of people living in Country B",
    "q10" => "for 70%) fall in the middle aged groups (30% aged 21-40 and 40% in the age group 41-60), with just one",
    "q11" => " of the population aged over 60. In Country C the",
    "q12" => " for those 3 groups are 25%, 35% and 30% respectively, showing a majority of 65 % of the population",
    "q13" => "over 41 years old. As mentioned previously, Country D can be classed as an ‘ageing society’ with a mere 8 per cent of the population below the age of 21. The figure",
    "q14" => "for each of the subsequent age groups, with 20%, 32% and 40% respectively. The data in the pie-charts regarding welfare expenditure shows that Country A, with its high percentage of young citizens, spends 40% of the annual budget on education. The remaining 60% is split",
    "q15" => "between health-care, housing and ‘other’. By contrast, almost",
    "q16" => "of the welfare budget in Country D goes on health-care, a reflection perhaps of the ‘ageing society. Education receives just one",
];
$end = "of the budget while housing and ‘other’ account for 25% and 20% respectively.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The bar-chart below shows details of populations in 3 different countries divided into age groups, expressed as percentages of total populations. The pie-charts show percentages spent on education, health-care and housing allowances from the total annual welfare budget for 2 of these countries.</h5>
                        <h5>Summarize the information by selecting and reporting on the main features, and make comparisons where relevant.</h5>
                        <a href="{{ asset('public/img_lang/gap2/gap2_2.jpg') }}" class="image-popup" title="{{$pageTitle['topic']}}">
                            <img src="{{ asset('public/img_lang/gap2/gap2_2.jpg') }}" class="img-fluid" alt="work-thumbnail">
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
    answers[0]= ['demographic', 'population'];
    answers[1] = ['namely'];
    answers[2] = ['percentage' , 'proportion'];
    answers[3] = ['funding', 'budget', 'budgets'];
    answers[4] = ['education'];
    answers[5] = ['below', 'under'];
    answers[6] = ['remaining'];
    answers[7] = ['exception'];
    answers[8] = ['accounting'];
    answers[9] = ['fifth'];
    answers[10] = ['figures', 'data', 'numbers'];
    answers[11] = ['being'];
    answers[12] = ['increases', 'rises', 'grows'];
    answers[13] = ['equally'];
    answers[14] = ['half'];
    answers[15] = ['tenth'];

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