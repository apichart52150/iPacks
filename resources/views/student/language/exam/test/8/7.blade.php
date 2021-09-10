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
    $q1 = "The pie-chart gives";
    $q2 = "of a survey in which 100 students were asked to name their favourite subject at school. It can be seen that English was the";
    $q3 = "popular subject, while history was the";
    $q4 = "favourite subject. If we divide the subjects into two categories,";
    $q5 = "the arts and science subjects, we can see that Science, Maths and Computer Studies";
    $q6 = "for a total of 50%, or half of all students surveyed. Of the science subjects, Science was the most popular with 25%, Maths the ";
    $q7 = "most popular with 15% and Computer Science the next most popular with 10%. Of the ";
    $q8 = ".subjects, English was the most popular with 28% of the votes. The next most popular subject was Art, accounting for 12%, and History was the";
    $q9 = "most popular, taking up just 2% of student preferences: in total a total of 42% for Arts subjects. This shows that arts subjects were actually";
    $q10 = "popular than the technical subjects, even though English was the single most preferred subject. The final subject which received votes was Physical education, which accounted for 8% of the votes, making it less popular than all the other subjects, with the";
    $end = "of History.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The chart below shows the results of a survey conducted with 100 students about their favourite school subjects.</h5>
                        <h5>Summarize the information by selecting and reporting on the main features, and make comparisons where relevant.</h5>
                        <img src="{{ asset('public/img_lang/gap2/gap2_7.jpg') }}" class="img-fluid mb-2" alt="Responsive image">
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
    answers[0]= ['details'];
    answers[1] = ['most'];
    answers[2] = ['Least'];
    answers[3] = ['namely'];
    answers[4] = ['accounted'];
    answers[5] = ['second', 'next'];
    answers[6] = ['arts'];
    answers[7] = ['next', 'third'];
    answers[8] = ['less'];
    answers[9] = ['exception'];

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