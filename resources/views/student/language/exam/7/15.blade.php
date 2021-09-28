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
    $Q=["q1" => "The pictures show how a small town changed in the ten years between 1995 and 2005. It can be seen that a number of changes occurred in terms of accommodation, industry, access roads and also the environment. The most striking development was the building of a",
    "q2" => "power station next to the lake. All the ",
    "q3" => "in the forest reserve were cut down to make space for the power station. Since the power station employed a lot of workers, a lot of new",
    "q4" => "were built for the employees to live in. The new houses were built both to the right and to the",
    "q5" => "of the lake. In addition, a",
    "q6" => "was built to give easier access to the town. The population of the town was much",
    "q7" => "after the construction of the power plant. It",
    "q8" => " from just 360 in 1995 to 10,000 in 2005. As the population",
    "q9" => "so there was a need for more schools. In 1995 there was just one primary school but in 2005 there was a large",
    "q10" => " school as well so that children could continue their education in the town. In addition, a supermarket was",
    "q11" => " to provide food and other necessary items for the people. There was a lot of damage to the environment as a result of this development. The forest reserve was cleared and the lake was used for the waste water from the power plant. The lake became so",
    "q12" => "that all the wildlife died. The small town in 1995 was much",
];
$end = "pleasant than the large town in 2005.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The diagrams show the development of a small town over a ten-year period.</h5>
                        <a href="{{ asset('public/img_lang/gap1/gap1_15.jpg') }}" class="image-popup" title="{{$pageTitle['topic']}}">
                            <img src="{{ asset('public/img_lang/gap1/gap1_15.jpg') }}" class="img-fluid" alt="work-thumbnail">
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
    answers[0]= ['nuclear', 'large', 'new'];
    answers[1] = ['trees', 'plants'];
    answers[2] = ['houses', 'homes', 'apartments'];
    answers[3] = ['left'];
    answers[4] = ['motorway'];
    answers[5] = ['bigger', 'larger', 'higher'];
    answers[6] = ['grew', 'increased', 'rose'];
    answers[7] = ['grew', 'increased', 'rose'];
    answers[8] = ['secondary'];
    answers[9] = ['built', 'constructed', 'provided' , 'available'];
    answers[10] = ['polluted', 'dirty'];
    answers[11] = ['more'];

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