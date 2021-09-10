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
    $Q=["q1" => "The bar-chart gives details of how",
    "q2" => "oil was produced and used in 2011 by 5 regions: namely, Africa, the Middle East, Europe, Asia and",
    "q3" => "United States. Overall, it can be seen that the Middle East produced the",
    "q4" => "amount of oil, while the USA used",
    "q5" => "than any other region. To begin with oil production, the Middle East produced 2000 million barrels of oil in 2011. This was more than",
    "q6" => "as much as any other region. Asia and the USA both produced 900 million barrels with Africa producing slightly",
    "q7" => "oil at around 750 million barrels. Europe produced the",
    "q8" => " oil of all the regions with a total of 500 million barrels. Moving on to oil consumption, the USA consumed far more oil",
    "q9" => "the other regions, at around 1800 million barrels. Next came Europe, with 1500 million barrels. The other three regions all used considerably",
    "q10" => "than this. Asia used 500 million barrels, while Africa and the Middle East used 300 and 200 million barrels",
    ];
    $end = ". To sum up, it seems that the developed regions use more oil than they produce.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The bar-chart shows oil production and consumption in a number of regions in 2011. Figures are given in millions of barrels.</h5>
                        <img src="{{ asset('public/img_lang/gap1/gap1_8.jpg') }}" class="img-fluid mb-2" alt="Responsive image">
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
    answers[0]= ['much'];
    answers[1] = ['the'];
    answers[2] = ['largest', 'greatest', 'biggest'];
    answers[3] = ['more'];
    answers[4] = ['twice'];
    answers[5] = ['less'];
    answers[6] = ['least'];
    answers[7] = ['than'];
    answers[8] = ['less'];
    answers[9] = ['respectively'];

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