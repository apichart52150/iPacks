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
    $Q=["q1" => "The bar-chart and table both give details of how long men and women in a range of regions can expect to live, benchmarked against the global average. According to the chart women tend to enjoy",
    "q2" => "lives than men in all regions except",
    "q3" => "The global average life expectancyis four years higher for women",
    "q4" => "for men, with figures of 68 and 64",
    "q5" => "Of the five regions only 2 of them exceed the global average. These are",
    "q6" => "and",
    "q7" => "n the",
    "q8" => "women can expect to reach the age of 81 with men living four years",
    "q9" => "than this, with 77 years, while in the",
    "q10" => "females generally live",
    "q11" => "years longer than men with figures of 73 and 70 respectively. Of the three regions whose average life expectancy is",
    "q12" => "han the global average, the discrepancy between males and females is similar in Asia and South America with a difference of",
    "q13" => "years. Asian men can expect to live until the age of 57 while their counterparts in South America generally live two years less ",
    "q14" => "this, with figures of 57 and 55 years. Females in those regions reach the average age of",
    "q15" => "and",
    "q16" => "respectively. Finally, Africa has the",
    "q17" => "life expectancy of all the regions. It is also the",
    "q18" => "region where men outlive women,",
    "q19" => "figures of",
    "q20" => "six and",
];
$end = "respectively.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The bar-chart and table below show the average life expectancy for both males and females in a range of different regions.</h5>
                        <h5>Summarize the information by selecting and reporting on the main features, and make comparisons where relevant.</h5>
                        <a href="{{ asset('public/img_lang/gap2/gap2_13.jpg') }}" class="image-popup" title="{{$pageTitle['topic']}}">
                            <img src="{{ asset('public/img_lang/gap2/gap2_13.jpg') }}" class="img-fluid" alt="work-thumbnail">
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
    answers[0]= ['longer'];
    answers[1] = ['Africa'];
    answers[2] = ['than'];
    answers[3] = ['far'];
    answers[4] = ['Europe'];
    answers[5] = ['NorthAmerica'];
    answers[6] = ['former'];
    answers[7] = ['less', 'shorter'];
    answers[8] = ['latter'];
    answers[9] = ['three', '3'];
    answers[10] = ['less', 'shorter'];
    answers[11] = ['5', 'five'];
    answers[12] = ['than'];
    answers[13] = ['62', 'sixty-two'];
    answers[14] = ['60', 'sixty'];
    answers[15] = ['lowest', 'shortest'];
    answers[16] = ['only', 'one', 'sole'];
    answers[17] = ['with', 'decreased'];
    answers[18] = ['56', 'fifty-six'];
    answers[19] = ['53', 'fifty-three'];

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