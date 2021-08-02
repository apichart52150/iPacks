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
    $q1 = "The chart shows how people of different ages find out about the news. Overall, it can be seen that newspapers are popular with all age groups except the young people aged under 20. For adolescents, the internet is the";
    $q2 = "popular way of finding out what’s happening in the world. Half of all teenagers use the internet for this. The other fifty percent rely on television and newspapers, with 30% and 20%";
    $q3 = ". People aged between 20 and 40 use both newspapers and the television equally to access the news, at 40% each. Only (3)";
    $q4 = "of them use the internet for this.";
    $q5 = "of the people in the 40 to 60 group prefer to read the news in newspapers while 40% choose to find out news on television. Only";
    $q6 = "of them use the internet. People in the oldest age group, the over 60s, prefer to watch the news on television. This is ten percent";
    $q7 = "than those who like to read newspapers. Only 5 per cent of the over 60s choose the internet to access news, the";
    $q8 = "of all the groups. To sum";
    $q9 = ", it seems that the";
    $q10 = "people get, the";
    $end = "they like to use the internet for getting news.";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-6">
                    <div class="border border-dark px-2 text-center">
                        <h5>The bar-chart below shows how four groups of people access the news.</h5>
                        <img src="{{ asset('public/img_lang/gap1/gap1_10.jpg') }}" class="img-fluid mb-2" alt="Responsive image">
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

    const answer1 = ['most'];
    const answer2 = ['respectively'];
    const answer3 = ['20%','one-fifth'];
    const answer4 = ['Half'];
    const answer5 = ['10%','one-tenth'];
    const answer6 = ['more','greater', 'higher'];
    const answer7 = ['least'];
    const answer8 = ['up'];
    const answer9 = ['older'];
    const answer10 = ['less'];

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