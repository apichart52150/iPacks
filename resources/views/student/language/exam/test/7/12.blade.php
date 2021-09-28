<style>
    .form-control {
        border: none;
        border-bottom: 1px solid #ccc;
        display: inline-block;
        height: auto;
        width: 130px;
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
    $Q=["q1" => "The chart shows details of the differences",
    "q2" => "people living in wealthy countries and those in less developed nations. Overall it can be seen that while the South has a",
    "q3" => "population than the North, the people there use a much",
    "q4" => " proportion of the resources. With only 25% of the global population, the developed world earns 80% of the world’s",
    "q5" => "This greater wealth means that they have",
    "q6" => "opportunities in terms of education. The majority of people in rich countries finish their secondary schooling,",
    "q7" => "only 50% of people in poor countries receive any formal schooling. More money also means more",
    "q8" => ", with most people having enough to eat. In the developing nations,",
    "q9" => ", 20% of the people do not have enough to eat. The North consumes 80% of total global food resources, while people in the South eat just",
    "q10" => ".The difference also shows in fuel consumption. One quarter of the world’s",
    "q11" => "who live in the North uses seven-eighths of global fossil fuels, whereas the three-quarters in the South uses just one eighth. As a result of these differences, people in the North can expect to live much",
    "q12" => "than the people in the south. Life expectancy is around 70 years in developed nations, whereas it is only around 50 years in",
];
$end = "wealthy countries.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The table below gives information about the distribution of resources between people living in the developed world (North) and the developing nations (South).</h5>
                        <img src="{{ asset('public/img_lang/gap1/gap1_12.jpg') }}" class="img-fluid mb-2" alt="Responsive image">
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

    
    const answers = []
    answers[0]= ['between'];
    answers[1] = ['bigger', 'larger', 'higher'];
    answers[2] = ['smaller'];
    answers[3] = ['income', 'money'];
    answers[4] = ['more', 'better', 'greater'];
    answers[5] = ['while','whereas', 'but'];
    answers[6] = ['food','nutrition'];
    answers[7] = ['however','though'];
    answers[8] = ['one-fifth', '20%'];
    answers[9] = ['population'];
    answers[10] = ['longer'];
    answers[11] = ['less'];

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