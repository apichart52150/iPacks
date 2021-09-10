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
    $Q=["q1" => "The bar-chart gives information about how many crimes were committed by both males and females in a certain country from 1995 to 2010. Figures are given in thousands. The pie-chart shows percentages of the four most",
    "q2" => "crimes carried out in one particular year, as well as the percentage of other crimes committed. Overall, it can be seen that",
    "q3" => "the number of crimes committed by men",
    "q4" => "females",
    "q5" => "to be more involved in crime as the period progressed. In addition, the most common type of crime involved driving offences. To begin with the bar-chart, we can see that at the start of the",
    "q6" => "in 1995, there were fifty thousand crimes committed by men with only fifteen thousand committed by women. Five years later, the",
    "q7" => "for men had reduced to forty thousand, while the number for women had",
    "q8" => "to eighteen thousand. These trends continued into the new",
    "q9" => ", with figures of thirty thousand and twenty-five thousand crimes for men and women",
    "q10" => ". By the end of the period the number of crimes by males and females had reached parity with twenty-eight thousand for both. With",
    "q11" => "to the types of crime committed in a certain year, we can see that driving offences accounted for almost one",
    "q12" => "of all crimes, at thirty percent. Theft, in the form of burglary and shoplifting took up the next two",
];
    $end = "with 25 and 20 percent respectively, while the more serious crime of murder accounted for only five percent of the total. The remaining twenty percent of crimes was given over to ‘other crimes’, which were not specified.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The bar-chart below shows details of the number of crimes committed by men and women in one particular country between 1995 and 2010. Figures are given in thousands. The pie-chart shows the proportion of each kind of kind committed in one particular year.</h5>
                        <h5>Summarize the information by selecting and reporting on the main features, and make comparisons where relevant.</h5>
                        <img src="{{ asset('public/img_lang/gap2/gap2_6.jpg') }}" class="img-fluid mb-2" alt="Responsive image">
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
    answers[0]= ['common', 'frequent'];
    answers[1] = ['while', 'although'];
    answers[2] = ['decreased', 'fell'];
    answers[3] = ['tended'];
    answers[4] = ['period'];
    answers[5] = ['rate', 'number'];
    answers[6] = ['risen', 'increased'];
    answers[7] = ['millennium', 'century'];
    answers[8] = ['respectively'];
    answers[9] = ['regard', 'reference'];
    answers[10] = ['third'];
    answers[11] = ['places', 'rankings', 'spots'];

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