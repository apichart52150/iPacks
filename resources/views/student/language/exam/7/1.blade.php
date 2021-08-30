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
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-6">
                    <div class="border border-dark px-2 text-center">
                        <h5>The graph below shows the number of marriages and divorces in a particular city between 1950 and 2010.</h5>
                        <img src="{{ asset('public/img_lang/gap1/gap1_1.jpg') }}" class="img-fluid mb-2" alt="Responsive image">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="border border-dark p-2">
                        The line-graphs give details of how many people got married and divorced in one city from 1950 to 2010. Figures are given in thousands. Overall, it can be seen that the number of marriages
                        <span class="font-weight-bold">1.</span> 
                        <div class="input-con">
                            <input type="text" class="form-control">
                        </div>
                        over the period, while the number of divorces 
                        <span class="font-weight-bold">2.</span> 
                        <div class="input-con">
                            <input type="text" class="form-control">
                        </div>
                        At the 
                        <span class="font-weight-bold">3.</span> 
                        <div class="input-con">
                            <input type="text" class="form-control">
                        </div>
                        of the period there were 80,000 marriages. In the same year, only 20,000 couples decided to get divorced. The next decade saw a slight
                        <span class="font-weight-bold">4.</span> 
                        <div class="input-con">
                            <input type="text" class="form-control">
                        </div>
                        in the number of marriages, while the number of divorces 
                        <span class="font-weight-bold">5.</span>
                        <div class="input-con">
                            <input type="text" class="form-control">
                        </div>
                        to almost 30,000. In 1960 there was a 
                        <span class="font-weight-bold">6.</span>
                        <div class="input-con">
                            <input type="text" class="form-control">
                        </div>
                        drop in marriages to just under 60,000. During that same period, the number of divorces continued its upward trend to stand 
                        <span class="font-weight-bold">7.</span>
                        <div class="input-con">
                            <input type="text" class="form-control">
                        </div>
                        40,000. For the next three decades, the number of marriages 
                        <span class="font-weight-bold">8.</span>
                        <div class="input-con">
                            <input type="text" class="form-control">
                        </div>
                        again to reach around 65,000 before falling again. The number of divorces continued to rise until the mid 1980’s when it
                        <span class="font-weight-bold">9.</span>
                        <div class="input-con">
                            <input type="text" class="form-control">
                        </div>
                        slightly until the year 2000. By the end of the period the number of marriages stood
                        <span class="font-weight-bold">10.</span>
                        <div class="input-con">
                            <input type="text" class="form-control">
                        </div>
                        just over 50,000,
                        <span class="font-weight-bold">11.</span>
                        <div class="input-con">
                            <input type="text" class="form-control">
                        </div>
                        the number of divorces had risen to just under 50,000. To sum up, the 
                        <span class="font-weight-bold">12.</span>
                        <div class="input-con">
                            <input type="text" class="form-control">
                        </div>
                        of marriages had fallen by around 30,000, while the number of divorces had risen by a similar number.
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
    answers[0] = ['decreased', 'fell', 'dropped', 'reduced'];
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
            
            if(jQuery.inArray($(item).val().toLowerCase(),  answers[idx]) != -1) {
                icon = '<i class="fas fa-check text-success"></i>';
                score++
            } else {
                icon = '<i class="fas fa-times text-danger"></i>';
            }

            $(item).parent().find('.ans-con').remove();
            $(item).parent().append(`
                <div class="ans-con pr-2">
                    ${icon}
                </div>
            `)
        })

        alert('Your score is ' + score);
    }
</script>
@stop