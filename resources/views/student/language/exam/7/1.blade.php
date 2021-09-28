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

    .input-con {
        display: inline-block;
        position: relative;
    }
</style>
<?php
$Q=[
"q1"=>"The line-graphs give details of how many people got married and divorced in one city from 1950 to 2010. Figures are given in thousands. Overall, it can be seen that the number of marriages",
"q2"=>"over the period, while the number of divorces" ,
"q3"=>"At the",
"q4"=>"of the period there were 80,000 marriages. In the same year, only 20,000 couples decided to get divorced. The next decade saw a slight",
"q5"=>"in the number of marriages, while the number of divorces" ,
"q6"=>"to almost 30,000. In 1960 there was a" ,
"q7"=>"drop in marriages to just under 60,000. During that same period, the number of divorces continued its upward trend to stand",
"q8"=>"40,000. For the next three decades, the number of marriages", 
"q9"=>"again to reach around 65,000 before falling again. The number of divorces continued to rise until the mid 1980’s when it",
"q10"=>"slightly until the year 2000. By the end of the period the number of marriages stood",
"q11"=>"just over 50,000,",
"q12"=>"the number of divorces had risen to just under 50,000. To sum up, the",
];

$end = "of marriages had fallen by around 30,000, while the number of divorces had risen by a similar number.";

?>
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The graph below shows the number of marriages and divorces in a particular city between 1950
                            and 2010.</h5>
                        <a href="{{ asset('public/img_lang/gap1/gap1_1.jpg') }}" class="image-popup"
                            title="{{$pageTitle['topic']}}">
                            <img src="{{ asset('public/img_lang/gap1/gap1_1.jpg') }}" class="img-fluid"
                                alt="work-thumbnail">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="border border-dark p-2">
                        @for ($i = 1; $i <= count($Q); $i++) <div class="line-hight d-inline w-auto mb-2 ">
                            {{ $Q['q'.$i] }}
                            <!-- question -->
                    </div>
                    <div class="input-con">
                        <input type="text" class="form-control">
                    </div>
                    @endfor
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
    answers[0] = ['Decreased', 'fell', 'dropped', 'reduced'];
    answers[1] = ['increased', 'rose', 'grew'];
    answers[2] = ['beginning', 'start'];
    answers[3] = ['decrease', 'fall', 'drop', 'reduction'];
    answers[4] = ['increased', 'rose', 'grew'];
    answers[5] = ['dramatic', 'substantial', 'considerable', 'big', 'large'];
    answers[6] = ['at'];
    answers[7] = ['increased', 'rose', 'grew'];
    answers[8] = ['decreased', 'fell', 'dropped', 'reduced'];
    answers[9] = ['at'];
    answers[10] = ['while', 'whereas', 'but'];
    answers[11] = ['number'];

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