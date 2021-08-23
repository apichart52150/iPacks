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
    $q1 = "The chart shows details of the differences";
    $q2 = "people living in wealthy countries and those in less developed nations. Overall it can be seen that while the South has a";
    $q3 = "population than the North, the people there use a much";
    $q4 = " proportion of the resources. With only 25% of the global population, the developed world earns 80% of the world’s";
    $q5 = "This greater wealth means that they have";
    $q6 = "opportunities in terms of education. The majority of people in rich countries finish their secondary schooling,";
    $q7 = "only 50% of people in poor countries receive any formal schooling. More money also means more";
    $q8 = ", with most people having enough to eat. In the developing nations,";
    $q9 = ", 20% of the people do not have enough to eat. The North consumes 80% of total global food resources, while people in the South eat just";
    $q10 = ".The difference also shows in fuel consumption. One quarter of the world’s";
    $q11 = "who live in the North uses seven-eighths of global fossil fuels, whereas the three-quarters in the South uses just one eighth. As a result of these differences, people in the North can expect to live much";
    $q12 = "than the people in the south. Life expectancy is around 70 years in developed nations, whereas it is only around 50 years in";
    $end = "wealthy countries.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-6">
                    <div class="border border-dark px-2 text-center">
                        <h5>The table below gives information about the distribution of resources between people living in the developed world (North) and the developing nations (South).</h5>
                        <img src="{{ asset('public/img_lang/gap1/gap1_12.jpg') }}" class="img-fluid mb-2" alt="Responsive image">
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

    const answer1 = ['between'];
    const answer2 = ['bigger', 'larger', 'higher'];
    const answer3 = ['smaller'];
    const answer4 = ['income', 'money'];
    const answer5 = ['more', 'better', 'greater'];
    const answer6 = ['while','whereas', 'but'];
    const answer7 = ['food','nutrition'];
    const answer8 = ['however','though'];
    const answer9 = ['one-fifth', '20%'];
    const answer10 = ['population'];
    const answer11 = ['longer'];
    const answer12 = ['less'];

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