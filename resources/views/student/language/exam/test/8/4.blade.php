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
    $Q=["q1" => "The line graph gives details of three fuel sources used by a certain country to",
    "q2" => "energy from the period 1990 until 2020:",
    "q3" => ", fossil fuels (coal, gas, oil), nuclear energy, and alternative energy sources (coal, gas, oil),nuclear energy, and alternative energy sources (e.g. solar energy, hydroelectricity,wind power).Overall, it can be seen that although fossil fuels were by far the most",
    "q4" => "source of energy at the beginning of the period, there has been a steady fall in the use of",
    "q5" => "fuels, and the future of energy production is",
    "q6" => "to rely on alternative energy sources. To begin with fossil fuels, these accounted for 70% of total energy",
    "q7" => "in 1990, while the remaining 30% was taken up by nuclear energy and alternative energy sources, with 20% and 10% respectively. By the",
    "q8" => "of the century, the dependence on coal, gas and oil had fallen 10",
    "q9" => "This decrease was absorbed by nuclear energy, which rose by ",
    "q10" => "the same amount, 10%. There was no change in the use of alternative energy sources at this time. The next fifteen years,",
    "q11" => "saw a dramatic rise in the use of alternatives for energy production,overtaking both fossil fuels, which",
    "q12" => "its downward trend, and nuclear power, which plateaued at 30%. Similar trends are projected to occur until 2020, with alternatives",
];
$end = " for one half of all energy generation. Nuclear is expected to remain stable at 30%, while fossil fuels is likely to fall to an all-time low of just 20%.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The line graph below shows one country’s consumption of different fuel sources for its energy needs from 1990 until today, and projected figures until 2020. Figures are given as percentages of total energy produced.</h5>
                        <h5>Summarize the information by selecting and reporting on the main features, and make comparisons where relevant.</h5>
                        <img src="{{ asset('public/img_lang/gap2/gap2_4.jpg') }}" class="img-fluid mb-2" alt="Responsive image">
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
    answers[0]= ['generate', 'produce'];
    answers[1] = ['namely'];
    answers[2] = ['important'];
    answers[3] = ['such', 'these'];
    answers[4] = ['expected', 'likely', 'projected', 'forecast'];
    answers[5] = ['generation', 'production'];
    answers[6] = ['turn', 'end'];
    answers[7] = ['percent'];
    answers[8] = ['exactly'];
    answers[9] = ['however' ,'though'];
    answers[10] = ['continued'];
    answers[11] = ['accounting'];

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