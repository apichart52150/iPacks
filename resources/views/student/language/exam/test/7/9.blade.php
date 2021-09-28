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
    $Q=["q1" => "The chart shows details of the number of men and women who shop at a department store, and the days they like to shop there. Overall, it is clear that",
    "q2" => "women than men shop there, and that the busiest days are at the",
    "q3" => "Not many people shop there at the beginning of the week. On Monday and Tuesday only around six thousand",
    "q4" => "shop there while the figures for men are one and two thousand",
    "q5" => ". For men, Wednesday is the same",
    "q6" => "Tuesday with a total of around 2,000 shoppers, while the",
    "q7" => "of female shoppers rises to around eight thousand. Thursday tends to be",
    "q8" => "busy than Wednesday, with around seven thousand women and just one thousand men. On Friday, however, figures show an",
    "q9" => "with 10,000 and 3,000 for women and men",
    "q10" => ". Weekends are the",
];
    $end = "time of the week. At the weekend, the store is filled with twenty thousand female shoppers and five thousand male shoppers.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The bar-chart below shows a breakdown of customers at a department store in terms of gender and preferred shopping days. Figures are given in thousands of customers.</h5>
                        <img src="{{ asset('public/img_lang/gap1/gap1_9.jpg') }}" class="img-fluid mb-2" alt="Responsive image">
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
    answers[0]= ['more'];
    answers[1] = ['weekend', 'weekends'];
    answers[2] = ['women', 'females'];
    answers[3] = ['respectively'];
    answers[4] = ['as'];
    answers[5] = ['number'];
    answers[6] = ['less'];
    answers[7] = ['increase'];
    answers[8] = ['respectively'];
    answers[9] = ['busiest'];

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