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
    $q1 = "The first table gives";
    $q2 = "about the total number of people living in the world in 1950 and 2000 and the";
    $q3 = "figures for 2050. The second table shows where those people lived. Overall it can be";
    $q4 = "that the population is expected to continue to rise, and that most people live in";
    $q5 = "In 1950 the global population stood";
    $q6 = "two and a half million and by 2000 the figure had more than";
    $q7 = "to reach 6 million inhabitants. It is estimated to rise to 9 billion by 2050, an";
    $q8 = "of 50% in the 50 year period. In terms of population percentages, Asia topped the group in 1950 with 56% and continued to dominate in 2000 with a rise of";
    $q9 = "percent to stand at 60%. Other regions which experienced growth include Africa and Latin America. In 1950 Africa accounted for 9%";
    $q10 = "total population with Latin America at 6%. By 2000 the figures were 13% and 9%";
    $q11 = "Oceania also showed moderate growth from less than 1% in 1950 to just 1% in 2000. Two regions, namely Europe and North America, however, showed a";
    $q12 = "in population proportions. Europe stood";
    $q13 = "22% in 1950 but fell to 12% fifty years later. Figures for North America were 7% and 5% for the two periods. By 2050 Africa is the only region which is";
    $q14 = "to show an increase, rising to 20%. While Oceania and Latin America maintain 2000 level, all other regions are expected to show a";
    $end = "in population percentage.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The tables show world population between 1950 and 2050 and the distribution of population by region.</h5>
                        <img src="{{ asset('public/img_lang/gap1/gap1_14.jpg') }}" class="img-fluid mb-2" alt="Responsive image">
                    </div>
                </div>
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

    const answer1 = ['details', 'information'];
    const answer2 = ['projected', 'predicted', 'expected', 'likely', 'possible', 'probable'];
    const answer3 = ['seen'];
    const answer4 = ['Asia'];
    const answer5 = ['at'];
    const answer6 = ['doubled'];
    const answer7 = ['increase'];
    const answer8 = ['four', '4'];
    const answer9 = ['of'];
    const answer10 = ['respectively'];
    const answer11 = ['fall', 'decrease', 'reduction', 'drop'];
    const answer12 = ['at'];
    const answer13 = ['expected','projected', 'forecast', 'likely', 'predicted'];
    const answer14 = ['fall','decrease','reduction', 'drop'];

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
            }

            $(item).parent().find('.ans-con').remove();
            $(item).parent().append(`
                <div class="ans-con pr-2">
                    ${icon}
                </div>
            `)
        })

        if(score == 14){
            alert("you're awesome");
        }else{
            alert('Your score is ' + score);
        }
    }
</script>
@stop