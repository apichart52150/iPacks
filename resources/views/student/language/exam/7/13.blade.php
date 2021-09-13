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
    $Q=["q1" => "The bar charts",
    "q2" => "how many people lived in six different cities in three years:",
    "q3" => "in1970, in 1990, and predictions for the year 2015.",
    "q4" => "are given in millions. It is clear that all cities experienced substantial population growth with the",
    "q5" => "of New York, which showed only moderate increases.",
    "q6" => "was consistently more heavily-populated than any of the other cities. In 1970 Tokyo had a population",
    "q7" => "around 16 million. New York was the next largest population with just over 15 million inhabitants. Then came Shanghai followed",
    "q8" => ". There was a similar pattern in 1990. Tokyo was first with around 24 million people, an",
    "q9" => ", 20% of the people do not have enough to eat. The North consumes 80% of total global food resources, while people in the South eat just",
    "q10" => "of around 9 million. New York's growth was less dramatic, at around 2 million but it still retained its second place. Shanghai also showed a modest rise of around 2 million to stand",
    "q11" => "13 million. Both Bombay and Jakarta recorded quite substantial increases of around 6 million each. In the year 2015, the pattern may change. Tokyo is expected to maintain a healthy growth. The figure is",
    "q12" => "to reach 29 million. The second most heavily populated city, however, is expected to be Bombay, with a total of 27",
];
$end = "inhabitants. Shanghai is predicted to grow to around 20 million, with Jakarta around 19 million. With an increase of just around 1 million people, New York is expected to complete the group with a total of around 12 million people.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The chart shows the population of 5 cities in three different years.</h5>
                        <a href="{{ asset('public/img_lang/gap1/gap1_13.jpg') }}" class="image-popup" title="{{$pageTitle['topic']}}">
                            <img src="{{ asset('public/img_lang/gap1/gap1_13.jpg') }}" class="img-fluid" alt="work-thumbnail">
                            </a></div>
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
    answers[0]= ['show', 'illustrate'];
    answers[1] = ['namely'];
    answers[2] = ['figures'];
    answers[3] = ['exception'];
    answers[4] = ['Tokyo'];
    answers[5] = ['of'];
    answers[6] = ['by'];
    answers[7] = ['respectively'];
    answers[8] = ['increase'];
    answers[9] = ['at'];
    answers[10] = ['expected', 'projected', 'forecast', 'likely', 'predicted'];
    answers[11] = ['million'];

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