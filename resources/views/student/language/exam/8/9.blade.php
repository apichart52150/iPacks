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
    $Q=["q1" => "The table shows the number of miles which the average",
    "q2" => "person covered in 1985 and 2000 using a",
    "q3" => "of transportation methods. The data can be grouped into those modes of transport which increased in",
    "q4" => "and those which showed a decrease. Overall, it can be seen that, on",
    "q5" => "English people tended to travel substantially more in 2000 than in 1985, and cars were the number one choice of travel. To begin with the group which showed a decreasing",
    "q6" => ", the nonmotorised forms of transport, walking and bicycle,showed",
    "q7" => "falls. Walking fell from 255 miles in 1985 to 237 miles in 2000. The",
    "q8" => "covered by bicycle fell from 51 miles to 41 miles. The",
    "q9" => "form of motor vehicle which showed a similar decrease was the local bus, which fell from 429 miles to 274 miles in 2000. All",
    "q10" => "forms of motorized vehicles,",
    "q11" => "car, long distance bus, train and taxi recorded increases. The car was the most popular mode of transport, ",
    "q12" => "from 3199 to 4806 miles by 2000. The train showed a rise from 289 miles to 366, and the taxi was the least popular form of transport, rising from 13 miles to 42 miles by 2000. The category ‘other modes of transport’ also rose from 450 miles to 585,",
];
    $end = "there is no indication exactly which modes of transport are included in this group.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The table below gives details of the total distance travelled (in miles) by Britons in 2 different years, and the modes of transport used to travel these distances.</h5>
                        <h5>Summarize the information by selecting and reporting on the main features, and make comparisons where relevant.</h5>
                        <a href="{{ asset('public/img_lang/gap2/gap2_9.jpg') }}" class="image-popup" title="{{$pageTitle['topic']}}">
                            <img src="{{ asset('public/img_lang/gap2/gap2_9.jpg') }}" class="img-fluid" alt="work-thumbnail">
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
    answers[0]= ['British'];
    answers[1] = ['number', 'variety', 'range'];
    answers[2] = ['popularity', 'frequency', 'choice'];
    answers[3] = ['average'];
    answers[4] = ['trend', 'tendency', 'pattern'];
    answers[5] = ['moderate', 'slight', 'modest'];
    answers[6] = ['distance'];
    answers[7] = ['only', 'sole', 'single'];
    answers[8] = ['other'];
    answers[9] = ['namely'];
    answers[10] = ['increasing', 'rising', 'growing'];
    answers[11] = ['although', 'but'];

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