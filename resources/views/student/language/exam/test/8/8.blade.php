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
    $Q=["q1" => "The bar-chart gives information about the number of serious crimes such as murder, rape and violent theft, which took",
    "q2" => " in a four different countries, namely, France, the USA, the UK and Australia, between 1990 and 2005. It can be seen that the USA",
    "q3" => "the group in",
    "q4" => "of the frequency of serious crimes in all years, and the trend is",
    "q5" => "To begin with those countries which",
    "q6" => "an increasing trend, we can see that the United States started with around 1000 serious crimes at the beginning of the period in 1995. This",
    "q7" => "grew steadily over the years to end the period at 2,000, a 100% increase. France",
    "q8" => "experienced an increasing trend,",
    "q9" => " the period at around 7,000 and increasing steadily until 2000 when it reached 12,000. It remained at this figure in 2005.",
    "q10" => "to the countries which showed a decreasing trend, we can see that the United Kingdom started the period at 9,000, the",
    "q11" => "number of all the countries, and this",
    "q12" => "steadily in stages over the years to finish at 6,000. Australia, similarly, experienced a decrease over the years. It started at 7,000 in 1995 and fell steadily to a",
];
$end = " of 5,000 in 2000. The following year, however, saw a slight rise to end the period at 6,000.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The chart below shows how many serious crimes were committed in 4 countries from 1990 to 2005.</h5>
                        <h5>Summarize the information by selecting and reporting on the main features, and make comparisons where relevant.</h5>
                        <img src="{{ asset('public/img_lang/gap2/gap2_8.jpg') }}" class="img-fluid mb-2" alt="Responsive image">
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
    answers[0]= ['place'];
    answers[1] = ['leads', 'tops'];
    answers[2] = ['terms'];
    answers[3] = ['increasing', 'growing'];
    answers[4] = ['experienced', 'showed'];
    answers[5] = ['number', 'figure'];
    answers[6] = ['also'];
    answers[7] = ['starting'];
    answers[8] = ['Moving'];
    answers[9] = ['largest', 'highest', 'biggest'];
    answers[10] = ['dropped', 'fell', 'decreased'];
    answers[11] = ['low'];

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