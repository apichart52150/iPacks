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
    $Q=["q1" => "The table shows the average income each",
    "q2" => "for a selection of professions in Thailand and Australia in 2012. The professions can be",
    "q3" => "into graduate and non-graduate occupations. Overall it can be seen that the graduate salaries are consistently higher than the non-graduate salaries, and that salaries",
    "q4" => "to be higher in Australia than in Thailand, with the",
    "q5" => "of lawyers. The figures are given in Thai Baht. Both tables show that the average monthly",
    "q6" => "was much higher in the graduate group than the non-graduate group. In Thailand salaries ranged from 85,000 for accountants",
    "q7" => "242,000 for lawyers, and in Australia the range was from 125,500 for accountants up to 350,000 for surgeons. On the other hand,nongraduate jobs had much",
    "q8" => "incomes in both countries. For",
    "q9" => " , in Thailand salaries started at 3,500 for labourers and went up to 7,000 for bus drivers. Similarly in Australia, the range was from 50,000 for waiters to 75,000 for bus drivers. Salaries were higher in all professions in Australia than in Thailand in",
    "q10" => " graduate and non-graduate groups. For example, shop assistants and dentists earned 53,500 and 195,000",
];
$end = "in Australia, while, in Thailand they earned 5,500 and 187,000. The exception to this was lawyers, who earned 210,000 in Australia and 242,000 in Thailand.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The tables show average monthly salaries of workers in Thailand and Australia in 2012 (in Thai Baht).</h5>
                        <h5>Summarize the information by selecting and reporting on the main features, and make comparisons where relevant.</h5>
                        <a href="{{ asset('public/img_lang/gap2/gap2_10.jpg') }}" class="image-popup" title="{{$pageTitle['topic']}}">
                            <img src="{{ asset('public/img_lang/gap2/gap2_10.jpg') }}" class="img-fluid" alt="work-thumbnail">
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


@section('button-control')
    <button id="check-answer" class="btn btn-info">Check Answers</button>
@endsection

@section('js')
<script>
    // no space answer
    
    const answers = []
    answers[0]= ['Month'];
    answers[1] = ['split', 'categorized', 'divided', 'grouped'];
    answers[2] = ['tend'];
    answers[3] = ['exception'];
    answers[4] = ['salary', 'income', 'wage'];
    answers[5] = ['to'];
    answers[6] = ['lower'];
    answers[7] = ['example', 'instance'];
    answers[8] = ['both'];
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