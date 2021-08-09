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
    $q1 = "The table gives information about how much money a small restaurant made in one week. Overall, it can be seen that dinner brought in more money than lunch every day and that";
    $q2 = " was the busiest day of the week. Figures are given in dollars. Lunch-time figures show that Friday was the busiest day with";
    $q3 = ". This was closely followed by Saturday, with $2650, and Sunday and Wednesday, which had the";
    $q4 = "total of $2550. This was followed by Tuesday, with $1950 and Monday, the";
    $q5 = "busy day of the week, with $1400. The totals for dinner were consistently";
    $q6 = "than the figures for lunch. Friday was the busiest day,";
    $q7 = "by Saturday, Thursday and Sunday, with figures of $3900, $3800 and $3750";
    $q8 = ". Next came Wednesday with $3445, and this was followed";
    $q9 = "Tuesday with $2850. Once again, Monday brought in the";
    $q10 = " money of all, with $1425, which is only";
    $end = "as much as Tuesday’s total.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-6">
                    <div class="border border-dark px-2 text-center">
                        <h5>The table below shows the sales at a small restaurant.</h5>
                        <img src="{{ asset('public/img_lang/gap1/gap1_5.jpg') }}" class="img-fluid mb-2" alt="Responsive image">
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

    const answer1 = ['Friday'];
    const answer2 = ['$2,700'];
    const answer3 = ['same'];
    const answer4 = ['least'];
    const answer5 = ['higher','greater','larger','larger'];
    const answer6 = ['followed'];
    const answer7 = ['respectively'];
    const answer8 = ['by'];
    const answer9 = ['least'];
    const answer10 = ['half'];

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