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
$Q=["q1" => "The chart shows the amount of money which a large company spent on advertising in various media formats
from 1990 to 2010. Figures are given in millions of dollars.",
"q2" => ", it is clear that television is the most popular medium for advertising. In 1990, the company spent 45 million
dollars",
"q3" => "TV advertising. This was 20 million dollars",
"q4" => "than the total for newspapers. In the same year, the advertising budget for the internet was just",
"q5" => "million dollars. Ten years later, the",
"q6" => "of money for television advertising",
"q7" => "by five million dollars to stand at 40 million. There was also a",
"q8" => "in the newspaper budget, of ten million dollars. The internet was the only one which saw an",
"q9" => ", up to 15 million dollars, the same figure",
"q10" => "for newspapers. By 2010, the budget for television had dropped a further ten million dollars to stand",
"q11" => "thirty million dollars. The budget for newspapers also continued to",
"q12" => ", reaching a low of just ten million dollars. In stark",
];
$end = ", internet spending continued to rise, finishing at 25 million dollars. To sum up, while the television budget
remained higher than the other two media forms, it experienced a significant drop in overall spending, while the
internet experienced growth throughout the period.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The bar-chart below shows the advertising budget in millions of dollars for a major company
                            during a twenty-year period.</h5>
                        <a href="{{ asset('public/img_lang/gap1/gap1_11.jpg') }}" class="image-popup" title="{{$pageTitle['topic']}}">
                                <img src="{{ asset('public/img_lang/gap1/gap1_11.jpg') }}" class="img-fluid" alt="work-thumbnail">
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
</div>


@section('button-control')
<button id="check-answer" class="btn btn-info">Check Answers</button>
@endsection

@section('js')
<script>
    const answers = []
    answers[0]= ['Overall'];
    answers[1] = ['on'];
    answers[2] = ['more', 'greater', 'higher'];
    answers[3] = ['5', 'five'];
    answers[4] = ['amount', 'sum'];
    answers[5] = ['decreased','fell', 'dropped' ,'reduced'];
    answers[6] = ['fall','drop', 'decrease', 'reduction'];
    answers[7] = ['increase','improvement'];
    answers[8] = ['as'];
    answers[9] = ['at'];
    answers[10] = ['fall', 'drop', 'decrease', 'reduce'];
    answers[11] = ['contrast'];

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