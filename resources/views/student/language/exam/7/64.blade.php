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
    $q1 = "The bar-chart gives details of how";
    $q2 = "oil was produced and used in 2011 by 5 regions: namely, Africa, the Middle East, Europe, Asia and";
    $q3 = "United States. Overall, it can be seen that the Middle East produced the";
    $q4 = "amount of oil, while the USA used";
    $q5 = "than any other region. To begin with oil production, the Middle East produced 2000 million barrels of oil in 2011. This was more than";
    $q6 = "as much as any other region. Asia and the USA both produced 900 million barrels with Africa producing slightly";
    $q7 = "oil at around 750 million barrels. Europe produced the";
    $q8 = " oil of all the regions with a total of 500 million barrels. Moving on to oil consumption, the USA consumed far more oil";
    $q9 = "the other regions, at around 1800 million barrels. Next came Europe, with 1500 million barrels. The other three regions all used considerably";
    $q10 = "than this. Asia used 500 million barrels, while Africa and the Middle East used 300 and 200 million barrels";
    $end = ". To sum up, it seems that the developed regions use more oil than they produce.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-6">
                    <div class="border border-dark px-2 text-center">
                        <h5>The bar-chart shows oil production and consumption in a number of regions in 2011. Figures are given in millions of barrels.</h5>
                        <img src="{{ asset('public/img_lang/gap1/gap1_8.jpg') }}" class="img-fluid mb-2" alt="Responsive image">
                    </div>
                </div>
                <div class="col-md-6">
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

    const answer1 = ['much'];
    const answer2 = ['the'];
    const answer3 = ['largest', 'greatest', 'biggest'];
    const answer4 = ['more'];
    const answer5 = ['twice'];
    const answer6 = ['less'];
    const answer7 = ['least'];
    const answer8 = ['than'];
    const answer9 = ['less'];
    const answer10 = ['respectively'];

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
            }

            $(item).parent().find('.ans-con').remove();
            $(item).parent().append(`
                <div class="ans-con pr-2">
                    ${icon}
                </div>
            `)
        })

        if(score == 10){
            alert("you're awesome");
        }else{
            alert('Your score is ' + score);
        }
    }
</script>
@stop