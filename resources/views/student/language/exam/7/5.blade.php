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
    $question = [
        'q1' => "The table gives information about how much money a small restaurant made in one week. Overall, it can be seen that dinner brought in more money than lunch every day and that",
        'q2' => " was the busiest day of the week. Figures are given in dollars. Lunch-time figures show that Friday was the busiest day with",
        'q3' => ". This was closely followed by Saturday, with $2650, and Sunday and Wednesday, which had the",
        'q4' => "total of $2550. This was followed by Tuesday, with $1950 and Monday, the",
        'q5' => "busy day of the week, with $1400. The totals for dinner were consistently",
        'q6' => "than the figures for lunch. Friday was the busiest day,",
        'q7' => "by Saturday, Thursday and Sunday, with figures of $3900, $3800 and $3750",
        'q8' => ". Next came Wednesday with $3445, and this was followed",
        'q9' => "Tuesday with $2850. Once again, Monday brought in the",
        'q10' => " money of all, with $1425, which is only",
    ];
    $endQuestion = "as much as Tuesday’s total.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The table below shows the sales at a small restaurant.</h5>
                        <a href="{{ asset('public/img_lang/gap1/gap1_5.jpg') }}" class="image-popup" title="{{$pageTitle['topic']}}">
                            <img src="{{ asset('public/img_lang/gap1/gap1_5.jpg') }}" class="img-fluid" alt="work-thumbnail">
                            </a>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="border border-dark p-2">
                        @for ($i = 1; $i <= count($question); $i++)
                            <div class="line-hight d-inline w-auto mb-2 ">
                                {{ $question['q'.$i] }} <!-- question -->
                            </div>
                            <div class="input-con">
                                <input type="text" class="form-control">
                            </div>
                        @endfor
                        {{$endQuestion}}
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
    answers[0] = ['Friday'];
    answers[1] = ['$2,700'];
    answers[2] = ['same'];
    answers[3] = ['least'];
    answers[4] = ['higher','greater','larger','bigger'];
    answers[5] = ['followed'];
    answers[6] = ['respectively'];
    answers[7] = ['by'];
    answers[8] = ['least'];
    answers[9] = ['half'];

    let score = 0;

    $('#check-answer').click(checkAnswers) 

    function checkAnswers() {
        let icon;
        $(':text').each((idx, item) => {
            answers[idx] = answers[idx].toString().trim().toLowerCase().split(",")

            $(item).removeClass('border-success');
            $(item).removeClass('border-danger');
            
            if(jQuery.inArray($(item).val().toLowerCase().trim(),  answers[idx]) != -1) {
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