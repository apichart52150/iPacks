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
    $q1 = "The given bar-chart shows";
    $q2 = "profits earned by 4 companies between2000 and 2016. The table gives information about what";
    $q3 = "of these profits was invested in Research and Development in 2000 and 2010. Overall, it can be seen that Company C, while showing the";
    $q4 = "profit at the start of the period, ended up with by";
    $q5 = "the largest earnings by 2016. The fact that this company’s";
    $q6 = "for R&D was far higher than the other three companies may show a";
    $q7 = "between R&D investment and annual profits. To begin with the data in the bar-chart, it can be seen that all companies experienced a";
    $q8 = "in annual profits from the start of the period until the end, with the";
    $q9 = "of Company B, which showed a";
    $q10 = "fall in earnings in each of the three years. Company A earned just over 20 million dollars profit in 2010,";
    $q11 = "gradually to around 28 million by 2016. As stated earlier, Company C started the period with around 15 million dollars profit before showing";
    $q12 = "increases in both 2010 and 2016, with 35 and 65 million dollars respectively. Company D started with 20 million and almost";
    $q13 = "its profit margin to just under 40 million in 2010 before dipping back";
    $q14 = "to end the period at around 38 million dollars. By";
    $q15 = "Company B showed profits of almost 50 million in 2000 before";
    $q16 = "a steady decline to end at 40 million dollars by 2016. The data seem to give support to the claim that investment in R&D really doespay dividends. As stated previously, Company C was the";
    $q17 = "one to show real commitment to R&D funding with an increase from 30% to 40% in 2000 and 2010";
    $q18 = "Company A’s budget for R&D stayed steady at 20% in both years, but experienced a slight rise in profits. Both Company B and Company D";
    $end = "their R&D budgets, resulting in a steady fall for Company B and a slight decrease in profits for Company D at the end of the period.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The bar-chart below shows the annual profits (in millions of dollars) for 4 different companies in 3 years. The table gives details of Research and Development spending by each company in 2000 and 2010, expressed in terms of percentage of total profits.</h5>
                        <h5>Summarize the information by selecting and reporting on the main features, and make comparisons where relevant.</h5>
                        <img src="{{ asset('public/img_lang/gap2/gap2_1.jpg') }}" class="img-fluid mb-2" alt="Responsive image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark p-2">
                            {{$q1}}
                            <span class="font-weight-bold">1.</span> 
                            <div class="input-con">
                                <input type="text" class="form-control">
                            </div>
                            {{$q2}}
                            <span class="font-weight-bold">2.</span> 
                            <div class="input-con">
                                <input type="text" class="form-control">
                            </div>
                            {{$q3}}
                            <span class="font-weight-bold">3.</span> 
                            <div class="input-con">
                                <input type="text" class="form-control">
                            </div>
                            {{$q4}}
                            <span class="font-weight-bold">4.</span> 
                            <div class="input-con">
                                <input type="text" class="form-control">
                            </div>
                            {{$q5}}
                            <span class="font-weight-bold">5.</span>
                            <div class="input-con">
                                <input type="text" class="form-control">
                            </div>
                            {{$q6}}
                            <span class="font-weight-bold">6.</span>
                            <div class="input-con">
                                <input type="text" class="form-control">
                            </div>
                            {{$q7}}
                            <span class="font-weight-bold">7.</span>
                            <div class="input-con">
                                <input type="text" class="form-control">
                            </div>
                            {{$q8}}
                            <span class="font-weight-bold">8.</span>
                            <div class="input-con">
                                <input type="text" class="form-control">
                            </div>
                            {{$q9}}
                            <span class="font-weight-bold">9.</span>
                            <div class="input-con">
                                <input type="text" class="form-control">
                            </div>
                            {{$q10}}
                            <span class="font-weight-bold">10.</span>
                            <div class="input-con">
                                <input type="text" class="form-control">
                            </div>
                            {{$q11}}
                            <span class="font-weight-bold">11.</span>
                            <div class="input-con">
                                <input type="text" class="form-control">
                            </div>
                            {{$q12}}
                            <span class="font-weight-bold">12.</span>
                            <div class="input-con">
                                <input type="text" class="form-control">
                            </div>
                            {{$q13}}
                            <span class="font-weight-bold">13.</span>
                            <div class="input-con">
                                <input type="text" class="form-control">
                            </div>
                            {{$q14}}
                            <span class="font-weight-bold">14.</span>
                            <div class="input-con">
                                <input type="text" class="form-control">
                            </div>
                            {{$q15}}
                            <span class="font-weight-bold">15.</span>
                            <div class="input-con">
                                <input type="text" class="form-control">
                            </div>
                            {{$q16}}
                            <span class="font-weight-bold">16.</span>
                            <div class="input-con">
                                <input type="text" class="form-control">
                            </div>
                            {{$q17}}
                            <span class="font-weight-bold">17.</span>
                            <div class="input-con">
                                <input type="text" class="form-control">
                            </div>
                            {{$q18}}
                            <span class="font-weight-bold">18.</span>
                            <div class="input-con">
                                <input type="text" class="form-control">
                            </div>
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
    // no space answer
    const answer1 = ['yearly'];
    const answer2 = ['proportion'];
    const answer3 = ['smallest' , 'lowest'];
    const answer4 = ['far'];
    const answer5 = ['funding', 'budget'];
    const answer6 = ['correlation', 'link'];
    const answer7 = ['rise'];
    const answer8 = ['exception'];
    const answer9 = ['steady', 'gradual'];
    const answer10 = ['rising', 'increasing'];
    const answer11 = ['substantial', 'dramatic', 'huge', 'large', 'major'];
    const answer12 = ['doubled'];
    const answer13 = ['slightly'];
    const answer14 = ['contrast'];
    const answer15 = ['experiencing', 'recording'];
    const answer16 = ['only'];
    const answer17 = ['respectively'];
    const answer18 = ['reduced', 'decreased'];

    let score = 0;

    $('#check-answer').click(checkAnswers) 

    function checkAnswers() {
        let icon;
        $(':text').each((idx, item) => {
            switch(idx) {
                case 0:
                    if(jQuery.inArray($(item).val().toLowerCase().replace(/ /g,''),  answer1) != -1) {
                        icon = '<i class="fas fa-check text-success"></i>';
                         score++;
                    } else {
                        icon = '<i class="fas fa-times text-danger"></i>';
                    }
                    break;
                case 1:
                    if(jQuery.inArray($(item).val().toLowerCase().replace(/ /g,''),  answer2) != -1) {
                        icon = '<i class="fas fa-check text-success"></i>';
                         score++;
                    } else {
                        icon = '<i class="fas fa-times text-danger"></i>';
                    }
                    break;
                case 2:
                    if(jQuery.inArray($(item).val().toLowerCase().replace(/ /g,''),  answer3) != -1) {
                        icon = '<i class="fas fa-check text-success"></i>';
                         score++;
                    } else {
                        icon = '<i class="fas fa-times text-danger"></i>';
                    }
                    break;
                case 3:
                    if(jQuery.inArray($(item).val().toLowerCase().replace(/ /g,''),  answer4) != -1) {
                        icon = '<i class="fas fa-check text-success"></i>';
                         score++;
                    } else {
                        icon = '<i class="fas fa-times text-danger"></i>';
                    }
                    break;
                case 4:
                    if(jQuery.inArray($(item).val().toLowerCase().replace(/ /g,''),  answer5) != -1) {
                        icon = '<i class="fas fa-check text-success"></i>';
                         score++;
                    } else {
                        icon = '<i class="fas fa-times text-danger"></i>';
                    }
                    break;
                case 5:
                    if(jQuery.inArray($(item).val().toLowerCase().replace(/ /g,''),  answer6) != -1) {
                        icon = '<i class="fas fa-check text-success"></i>';
                         score++;
                    } else {
                        icon = '<i class="fas fa-times text-danger"></i>';
                    }
                    break;
                case 6:
                    if(jQuery.inArray($(item).val().toLowerCase().replace(/ /g,''),  answer7) != -1) {
                        icon = '<i class="fas fa-check text-success"></i>';
                         score++;
                    } else {
                        icon = '<i class="fas fa-times text-danger"></i>';
                    }
                    break;
                case 7:
                    if(jQuery.inArray($(item).val().toLowerCase().replace(/ /g,''),  answer8) != -1) {
                        icon = '<i class="fas fa-check text-success"></i>';
                         score++;
                    } else {
                        icon = '<i class="fas fa-times text-danger"></i>';
                    }
                    break;
                case 8:
                    if(jQuery.inArray($(item).val().toLowerCase().replace(/ /g,''),  answer9) != -1) {
                        icon = '<i class="fas fa-check text-success"></i>';
                         score++;
                    } else {
                        icon = '<i class="fas fa-times text-danger"></i>';
                    }
                    break;
                case 9:
                    if(jQuery.inArray($(item).val().toLowerCase().replace(/ /g,''),  answer10) != -1) {
                        icon = '<i class="fas fa-check text-success"></i>';
                         score++;
                    } else {
                        icon = '<i class="fas fa-times text-danger"></i>';
                    }
                    break;
                case 10:
                    if(jQuery.inArray($(item).val().toLowerCase().replace(/ /g,''),  answer11) != -1) {
                        icon = '<i class="fas fa-check text-success"></i>';
                         score++;
                    } else {
                        icon = '<i class="fas fa-times text-danger"></i>';
                    }
                    break;
                case 11:
                    if(jQuery.inArray($(item).val().toLowerCase().replace(/ /g,''),  answer12) != -1) {
                        icon = '<i class="fas fa-check text-success"></i>';
                         score++;
                    } else {
                        icon = '<i class="fas fa-times text-danger"></i>';
                    }
                    break;
                case 12:
                    if(jQuery.inArray($(item).val().toLowerCase().replace(/ /g,''),  answer13) != -1) {
                        icon = '<i class="fas fa-check text-success"></i>';
                            score++;
                    } else {
                        icon = '<i class="fas fa-times text-danger"></i>';
                    }
                    break;
                case 13:
                    if(jQuery.inArray($(item).val().toLowerCase().replace(/ /g,''),  answer14) != -1) {
                        icon = '<i class="fas fa-check text-success"></i>';
                            score++;
                    } else {
                        icon = '<i class="fas fa-times text-danger"></i>';
                    }
                    break;
                case 14:
                    if(jQuery.inArray($(item).val().toLowerCase().replace(/ /g,''),  answer15) != -1) {
                        icon = '<i class="fas fa-check text-success"></i>';
                            score++;
                    } else {
                        icon = '<i class="fas fa-times text-danger"></i>';
                    }
                    break;
                case 15:
                    if(jQuery.inArray($(item).val().toLowerCase().replace(/ /g,''),  answer16) != -1) {
                        icon = '<i class="fas fa-check text-success"></i>';
                            score++;
                    } else {
                        icon = '<i class="fas fa-times text-danger"></i>';
                    }
                    break;
                case 16:
                    if(jQuery.inArray($(item).val().toLowerCase().replace(/ /g,''),  answer17) != -1) {
                        icon = '<i class="fas fa-check text-success"></i>';
                            score++;
                    } else {
                        icon = '<i class="fas fa-times text-danger"></i>';
                    }
                    break;
                case 17:
                    if(jQuery.inArray($(item).val().toLowerCase().replace(/ /g,''),  answer18) != -1) {
                        icon = '<i class="fas fa-check text-success"></i>';
                            score++;
                    } else {
                        icon = '<i class="fas fa-times text-danger"></i>';
                    }
                    break;
            }

            $(item).parent().find('.ans-con').remove();
            $(item).parent().append(`
                <div class="ans-con pr-2">
                    ${icon}
                </div>
            `)
        })

        if(score == 18){
            alert("you're awesome");
        }else{
            alert('Your score is ' + score);
        }
    }
</script>
@stop