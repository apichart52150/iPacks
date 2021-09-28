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
    $Q=["q1" => "The graph gives details of how",
    "q2" => "patients visited a doctor’s surgery on weekdays and weekends. The pie-chart shows how",
    "q3" => "they felt with the service. Overall, it can be seen that Monday was the",
    "q4" => "day of the week, and that",
    "q5" => "people were happy with the service. At the start of the week, a total of 1500 patients went to see the doctor. On Tuesday this figure",
    "q6" => "by around 300 to stand",
    "q7" => "1200. The downward",
    "q8" => "continued on Wednesday with just over 500 patients. The figure",
    "q9" => "again on Thursday to around one thousand visitors to the surgery. By Friday, the total had",
    "q10" => "to just 200 people, the",
    "q11" => "number of the whole week. Weekends experienced a",
    "q12" => "rise to three hundred patients. In terms of satisfaction levels, fifty percent, or",
    "q13" => "of all patients surveyed felt satisfied with the service provided. A",
    "q14" => "30 percent were very satisfied, while only",
];
$end = "percent, or one-fifth of all patients, were not satisfied. Overall, the doctor seems to be providing quality service to most patients.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The line-graph below shows the number of visits to a doctor on each day of the week, and the pie-chart shows the level of patient satisfaction.</h5>
                        <a href="{{ asset('public/img_lang/gap1/gap1_18.jpg') }}" class="image-popup" title="{{$pageTitle['topic']}}">
                            <img src="{{ asset('public/img_lang/gap1/gap1_18.jpg') }}" class="img-fluid" alt="work-thumbnail">
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
    answers[0]= ['many'];
    answers[1] = ['satisfied', 'happy'];
    answers[2] = ['busiest' , 'mostpopular'];
    answers[3] = ['most', 'many'];
    answers[4] = ['fell', 'dropped', 'decreased', 'reduced'];
    answers[5] = ['at'];
    answers[6] = ['trend'];
    answers[7] = ['grew', 'increased', 'rose'];
    answers[8] = ['dropped', 'fallen', 'decrease', 'reduced', 'shrunk'];
    answers[9] = ['lowest', 'smallest'];
    answers[10] = ['slight', 'marginal', 'small', 'modest'];
    answers[11] = ['half'];
    answers[12] = ['further'];
    answers[13] = ['20', 'twenty'];

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