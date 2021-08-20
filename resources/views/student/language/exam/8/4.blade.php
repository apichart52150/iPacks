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
    $q1 = "The line graph gives details of three fuel sources used by a certain country to";
    $q2 = "energy from the period 1990 until 2020:";
    $q3 = ", fossil fuels (coal, gas, oil), nuclear energy, and alternative energy sources (coal, gas, oil),nuclear energy, and alternative energy sources (e.g. solar energy, hydroelectricity,wind power).Overall, it can be seen that although fossil fuels were by far the most";
    $q4 = "source of energy at the beginning of the period, there has been a steady fall in the use of";
    $q5 = "fuels, and the future of energy production is";
    $q6 = "to rely on alternative energy sources. To begin with fossil fuels, these accounted for 70% of total energy";
    $q7 = "in 1990, while the remaining 30% was taken up by nuclear energy and alternative energy sources, with 20% and 10% respectively. By the";
    $q8 = "of the century, the dependence on coal, gas and oil had fallen 10";
    $q9 = "This decrease was absorbed by nuclear energy, which rose by ";
    $q10 = "the same amount, 10%. There was no change in the use of alternative energy sources at this time. The next fifteen years,";
    $q11 = "saw a dramatic rise in the use of alternatives for energy production,overtaking both fossil fuels, which";
    $q12 = "its downward trend, and nuclear power, which plateaued at 30%. Similar trends are projected to occur until 2020, with alternatives";
    $end = " for one half of all energy generation. Nuclear is expected to remain stable at 30%, while fossil fuels is likely to fall to an all-time low of just 20%.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The line graph below shows one country’s consumption of different fuel sources for its energy needs from 1990 until today, and projected figures until 2020. Figures are given as percentages of total energy produced.</h5>
                        <h5>Summarize the information by selecting and reporting on the main features, and make comparisons where relevant.</h5>
                        <img src="{{ asset('public/img_lang/gap2/gap2_4.jpg') }}" class="img-fluid mb-2" alt="Responsive image">
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
                        <span class="font-weight-bold">9. </span>
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
    const answer1 = ['generate', 'produce'];
    const answer2 = ['namely'];
    const answer3 = ['important'];
    const answer4 = ['such', 'these'];
    const answer5 = ['expected', 'likely', 'projected', 'forecast'];
    const answer6 = ['generation', 'production'];
    const answer7 = ['turn', 'end'];
    const answer8 = ['percent'];
    const answer9 = ['exactly'];
    const answer10 = ['however' ,'though'];
    const answer11 = ['continued'];
    const answer12 = ['accounting'];

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
            }

            $(item).parent().find('.ans-con').remove();
            $(item).parent().append(`
                <div class="ans-con pr-2">
                    ${icon}
                </div>
            `)
        })

        if(score == 12){
            alert("you're awesome");
        }else{
            alert('Your score is ' + score);
        }
    }
</script>
@stop