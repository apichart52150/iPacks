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
    $Q=["q1" => "The first chart gives details of how many cars were",
    "q2" => "in one country from 1995 to 2010 with",
    "q3" => "for 2020, while the second chart illustrates levels of air pollution in the",
    "q4" => "country during that period of time, again with estimates for the year 2020. Overall, it can be seen that there is a direct",
    "q5" => "between the number of new vehicles purchased and the incidence of air pollution. To begin with the number of new cars bought each",
    "q6" => ", we can see that at the beginning of the period around three million new vehicles appeared on the roads. There was a",
    "q7" => "increase over the next fifteen years, with figures of four million, five million and eight million respectively. It is expected that this",
    "q8" => ".trend will continue to the year 2020, when ten million new vehicles are expected to be",
    "q9" => "Turning to the figures for air pollution, the reading stood at around seventyfive micrograms per cubic metre in 1995. This figure was within ‘acceptable’ limits. In 2000 the figure had risen to just under 100 micrograms, which was still classified as ‘acceptable’. Following this,",
    "q10" => "the air pollution continued its upward trend. By the year 2005, the figure of just over 100 micrograms had ",
    "q11" => "safety limits and was classified as ‘unhealthy’. The quality of air continued to",
    "q12" => "in 2010 with a reading of almost 150 micrograms, an increase of around 50 per cent. The situation is not expected to",
];
    $end = " over the next decade with a high of around 170 micrograms predicted for 2020, making breathing conditions ‘hazardous’. All in all, it would seem necessary for tighter controls of new vehicle purchase to be put into place if the government wants to improve the quality of air.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The line-graph below shows the number of cars purchased annually in one particular country between 1995 and 2010, with predicted figures for the year 2020. Figures are given in millions. The bar-chart shows levels of air pollution in the same place during the same time-frame. Figures are given in micrograms per cubic metre.</h5>
                        <h5>Summarize the information by selecting and reporting on the main features, and make comparisons where relevant.</h5>
                        <a href="{{ asset('public/img_lang/gap2/gap2_12.jpg') }}" class="image-popup" title="{{$pageTitle['topic']}}">
                            <img src="{{ asset('public/img_lang/gap2/gap2_12.jpg') }}" class="img-fluid" alt="work-thumbnail">
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
    answers[0]= ['purchased', 'bought'];
    answers[1] = ['projections', 'predictions', 'forecasts', 'estimates'];
    answers[2] = ['same'];
    answers[3] = ['link', 'correlation'];
    answers[4] = ['year'];
    answers[5] = ['gradual', 'slight', 'steady'];
    answers[6] = ['upward', 'rising', 'growing', 'Increasing'];
    answers[7] = ['purchased', 'bought'];
    answers[8] = ['however', 'though'];
    answers[9] = ['exceeded', 'passed'];
    answers[10] = ['deteriorate'];
    answers[11] = ['improve'];

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