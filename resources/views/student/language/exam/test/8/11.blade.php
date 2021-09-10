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
    $Q=["q1" => "The charts give information about the use of water",
    "q2" => "in the year 2012. The pie-chart shows the proportion of total water uses for domestic, industrial and agricultural purposes. The bar-chart gives specific details of this water use in four countries:",
    "q3" => "Germany, New Zealand, India and China. Overall, it can be seen that the",
    "q4" => "of water was used for farming purposes, and this is reflected in the water usage in three of the 4 given nations. The ",
    "q5" => "to this was Germany. Moving on to details, the vast majority of water used globally was for agriculture, accounting for a massive seventy percent of total water",
    "q6" => "Industrial use accounted for just 20%, with domestic use only half that of industry, with one",
    "q7" => " of global consumption. An examination of the water use in the four countries",
    "q8" => "above shows that both India and China used large",
    "q9" => "for farming, with figures of around 95 and 70 percent",
    "q10" => "China used just over one fifth for its developing industries, and just under one tenth of all water for household purposes. By",
    "q11" => "China used just over one fifth for its developing industries, and just under one tenth of all water for household purposes. By",
    "q12" => "mounts for both farming and domestic use, with figures of around 48% and 45% respectively. The",
    "q13" => "7% was consumed by industrial activity. Germany seems to be the exception in this group of 4 nations. Four",
    "q14" => "of all water consumption was taken by industry. Of the remaining",
];
    $end = "percent, around twelve percent was used by households, and just eight percent for agriculture.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>‘The pie-chart below shows how water was used in 2012 by three sectors: namely, farming, the manufacturing industry, and for household use. Figures are shown as percentages. The bar-chart shows proportions of water used for the three sectors in 4 different countries.’</h5>
                        <h5>Summarize the information by selecting and reporting on the main features, and make comparisons where relevant.</h5>
                        <img src="{{ asset('public/img_lang/gap2/gap2_11.jpg') }}" class="img-fluid mb-2" alt="Responsive image">
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
    answers[0]= ['worldwide', 'globally'];
    answers[1] = ['namely'];
    answers[2] = ['majority'];
    answers[3] = ['exception'];
    answers[4] = ['consumed', 'used'];
    answers[5] = ['tenth'];
    answers[6] = ['mentioned', 'given'];
    answers[7] = ['amounts', 'quantities'];
    answers[8] = ['respectively'];
    answers[9] = ['contrast'];
    answers[10] = ['similar'];
    answers[11] = ['remaining', 'other'];
    answers[12] = ['fifths'];
    answers[13] = ['twenty'];

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