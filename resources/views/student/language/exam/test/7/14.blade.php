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
$Q=["q1" => "The first table gives",
"q2" => "about the total number of people living in the world in 1950 and 2000 and the",
"q3" => "figures for 2050. The second table shows where those people lived. Overall it can be",
"q4" => "that the population is expected to continue to rise, and that most people live in",
"q5" => "In 1950 the global population stood",
"q6" => "two and a half million and by 2000 the figure had more than",
"q7" => "to reach 6 million inhabitants. It is estimated to rise to 9 billion by 2050, an",
"q8" => "of 50% in the 50 year period. In terms of population percentages, Asia topped the group in 1950 with 56% and
continued to dominate in 2000 with a rise of",
"q9" => "percent to stand at 60%. Other regions which experienced growth include Africa and Latin America. In 1950
Africa accounted for 9%",
"q10" => "total population with Latin America at 6%. By 2000 the figures were 13% and 9%",
"q11" => "Oceania also showed moderate growth from less than 1% in 1950 to just 1% in 2000. Two regions, namely Europe
and North America, however, showed a",
"q12" => "in population proportions. Europe stood",
"q13" => "22% in 1950 but fell to 12% fifty years later. Figures for North America were 7% and 5% for the two periods.
By 2050 Africa is the only region which is",
"q14" => "to show an increase, rising to 20%. While Oceania and Latin America maintain 2000 level, all other regions are
expected to show a",
];
$end = "in population percentage.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The tables show world population between 1950 and 2050 and the distribution of population by
                            region.</h5>
                        <img src="{{ asset('public/img_lang/gap1/gap1_14.jpg') }}" class="img-fluid mb-2"
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
</div>


@section('button-control')
<button id="check-answer" class="btn btn-info">Check Answers</button>
@endsection

@section('js')
<script>
    const answers = []
    answers[0]= ['details', 'information'];
    answers[1] = ['projected', 'predicted', 'expected', 'likely', 'possible', 'probable'];
    answers[2] = ['seen'];
    answers[3] = ['Asia'];
    answers[4] = ['at'];
    answers[5] = ['doubled'];
    answers[6] = ['increase'];
    answers[7] = ['four', '4'];
    answers[8] = ['of'];
    answers[9] = ['respectively'];
    answers[10] = ['fall', 'decrease', 'reduction', 'drop'];
    answers[11] = ['at'];
    answers[12] = ['expected','projected', 'forecast', 'likely', 'predicted'];
    answers[13] = ['fall','decrease','reduction', 'drop'];

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