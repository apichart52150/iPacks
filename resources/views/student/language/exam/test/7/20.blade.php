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
    $Q=["q1" => "The bar-chart gives details of how",
    "q2" => "rain fell in one city from 2005 until 2011. Figures are given in millimetres. The line-graph shows the average temperature during those years. Overall, it can be",
    "q3" => "that there is a link between rainfall and temperature: the higher the rainfall, the",
    "q4" => " the average temperature. To begin with the rainfall, at the",
    "q5" => "of the period the total rainfall was around 850 mm. The following year, there was a",
    "q6" => "to around 750 mm. The downward trend continued over the next 2 years, with figures of approximately 600 and 450 mm",
    "q7" => ". In 2009 the total",
    "q8" => "to 500 mm. The total in 2010 was",
    "q9" => "than in the previous year, reaching roughly 800 mm. By the end of the period, 2011, the city received",
    "q10" => "highest amount of rain, at around 900 mm. With regard to temperature, the figure stood",
    "q11" => "26 degrees Celsius in both 2005 and 2011. In between those years, the average temperatures were",
    "q12" => "than this, fluctuating from 27 degrees in 2006 and 2007, up to 29 degrees in 2008, which was the",
    "q13" => "temperature of all. There was a",
    "q14" => "of one degree in 2009, followed",
];
    $end = "a slight increase to 28.5 degrees in 2010.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The bar-chart shows the rainfall in a particular city over a 6-year period (measured in mm), and the line-graph shows the average temperature over the same period (in degrees Celsius).</h5>
                        <img src="{{ asset('public/img_lang/gap1/gap1_20.jpg') }}" class="img-fluid mb-2" alt="Responsive image">
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
</div>


@section('button-control')
    <button id="check-answer" class="btn btn-info">Check Answers</button>
@endsection

@section('js')
<script>
    // no space answer
    
    const answers = []
    answers[0]= ['much'];
    answers[1] = ['seen'];
    answers[2] = ['lower' , 'cooler'];
    answers[3] = ['beginning'];
    answers[4] = ['fell', 'drop', 'decrease', 'reduction'];
    answers[5] = ['respectively'];
    answers[6] = ['fell', 'dropped', 'decreased'];
    answers[7] = ['higher', 'greater', 'more', 'bigger'];
    answers[8] = ['the'];
    answers[9] = ['at'];
    answers[10] = ['higher', 'greater', 'more', 'bigger'];
    answers[11] = ['highest', 'warmest', 'hottest'];
    answers[12] = ['fall', 'drop', 'decrease', 'reduction'];
    answers[13] = ['by'];

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