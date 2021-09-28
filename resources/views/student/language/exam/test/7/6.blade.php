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
$Q=["q1" => "The pictures show two aircraft, the Boeing 787 and the Airbus 380, and the table gives",
"q2" => "about specifications for the two airplanes. Overall, it can be seen that there are significant differences
between the two aircraft in terms of physical appearance and performance. Starting with appearance, the Airbus 380 is
longer than the Dreamliner, the former is 73 metres",
"q3" => "while the latter is 57 metres in",
"q4" => ". The wing span of the Airbus is also wider than the Dreamliner. The Airbus wing span is 80 metres wide, while
the Dreamliner is 60 metres in",
"q5" => ". The Airbus is also higher than the Dreamliner. The former is 24 metres high, while the",
"q6" => "has a",
"q7" => "of just 17 metres. With regard to performance, there are also a number of differences. The most significant
difference is the passenger capacity. The",
"q8" => "can carry 250 passengers, whereas the",
"q9" => "carries more than twice that number, at 525. The large size of the Airbus also means that it can carry almost",
"q10" => "times more cargo than the Boeing 787.When it comes to distance, the range of the Dreamliner is slightly less",
"q11" => "that of the Airbus, with ranges of 15,200 and 15,400 kilometres respectively. In addition, when it comes to
speed, both aircraft can travel at similar speeds of 900 kilometres per",
"q12" => ". The final difference is the number of engines of each aircraft. The Dreamliner has just two engines,",
];
$end = "the Airbus has four, two under each wing.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5></h5>
                        <img src="{{ asset('public/img_lang/gap1/gap1_6.jpg') }}" class="img-fluid mb-2"
                            alt="Responsive image">
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
    const answers = []
    answers[0]= ['details', 'information'];
    answers[1] = ['long'];
    answers[2] = ['length'];
    answers[3] = ['width','size'];
    answers[4] = ['Dreamliner','Boeing','latter'];
    answers[5] = ['height'];
    answers[6] = ['Dreamliner','Boeing'];
    answers[7] = ['Airbus'];
    answers[8] = ['4', 'four'];
    answers[9] = ['than'];
    answers[10] = ['hour'];
    answers[11] = ['while','whereas','but'];

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