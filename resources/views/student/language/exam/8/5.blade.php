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
    $Q=["q1" => "The bar-chart gives details of the incidence of road accidents in three South- east Asian countries: namely, Malaysia, Thailand and Indonesia, in the first",
    "q2" => "of this century. There are three obvious trends shown in the bar-chart: an increasing trend",
    "q3" => "by Thailand, a decreasing trend in Malaysia, and a",
    "q4" => "pattern in Indonesia. The pie-chart features the four different types of road vehicles involved in accidents in Thailand in 2010. It is clear that motorcyclists were by far the most",
    "q5" => "of all road-users to be involved in accidents. To begin with the number of individual accidents, it can be seen that just under ten thousand road accidents were",
    "q6" => "in the three countries in 2010. Of these, Malaysia and Thailand occupied joint first place with 4,000 accidents",
    "q7" => "Indonesia accounted for the remaining two thousand or so accidents. Five years later, Malaysia had managed to",
    "q8" => "its number of accidents, standing at just 2,000. However, Thailand’s figure rose 25% to",
    "q9" => "at around 5,000 recorded accidents. Indonesia’s total remained steady at just under two thousand. By the end of the",
    "q10" => ", Malaysia was able to sustain its downward trend,",
    "q11" => "its total by a further 500 or so accidents. Thailand, on the other hand, continued to rise, closing at six thousand accidents by 2010. There was no change in Indonesia’s",
    "q12" => "figure. Of the 6,000 recorded accident which occurred in Thailand in 2010, a total of 3,600, or 60%, involved motorcycles. Trucks accounted for a further 20% while the remaining 20% was ",
];
    $end = "between cars and buses, with 15% and 5% respectively.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The bar-chart below shows the number of road accidents which occurred in three countries between 2000 and 2010.The pie-chart shows the kinds of vehicles which were involved in road accidents in Thailand in 2010.</h5>
                        <h5>Summarize the information by selecting and reporting on the main features, and make comparisons where relevant.</h5>
                        <a href="{{ asset('public/img_lang/gap2/gap2_5.jpg') }}" class="image-popup" title="{{$pageTitle['topic']}}">
                            <img src="{{ asset('public/img_lang/gap2/gap2_5.jpg') }}" class="img-fluid" alt="work-thumbnail">
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
    answers[0]= ['decade'];
    answers[1] = ['experienced', 'shown'];
    answers[2] = ['steady', 'stable'];
    answers[3] = ['likely', 'probable'];
    answers[4] = ['recorded', 'witnessed', 'seen'];
    answers[5] = ['each'];
    answers[6] = ['halve', 'reduce', 'decrease'];
    answers[7] = ['stand'];
    answers[8] = ['period'];
    answers[9] = ['reducing'];
    answers[10] = ['recorded'];
    answers[11] = ['split', 'divided', 'shared'];

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