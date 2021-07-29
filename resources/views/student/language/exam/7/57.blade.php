<style>
    .form-control {
        border: none;
        border-bottom: 1px solid #ccc;
        display: inline-block;
        height: auto;
        width: 200px;
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
    $q1 = array(
        'decreased',
        'fell',
        'dropped',
        'reduced'
    );
@endphp

<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-6">
                    <div class="border border-dark px-2 text-center">
                        <h5>The graph below shows the number of marriages and divorces in a particular city between 1950 and 2010.</h5>
                        <img src="{{ asset('public/img_lang/p_11.jpg') }}" class="m-2">
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
    <div class="col-xl-12 col-md-12 col-sm-12" id="ans" style="display: none;">
        <div class="card-box text-dark font-16">
            <p class="lead">
                Task 1.1
            </p>
            <div class="row">
                <div class="col-6">
                    <p>1. decreased; fell; dropped; reduced</p>
                    <p>2. increased; rose; grew</p>
                    <p>3. beginning; start</p>
                    <p>4. decrease; fall; drop; reduction</p>
                    <p>5. increased; rose; grew</p>
                    <p>6. dramatic; substantial; considerable; big; large </p>
                </div>
                <div class="col-6">
                    <p>7. at</p>
                    <p>8. increased; rose; grew</p>
                    <p>9. decreased; fell; dropped; reduced</p>
                    <p>10. at</p>
                    <p>11. while; whereas; but</p>
                    <p>12. number </p>
                </div>
            </div>
        </div>  
    </div>
</div>


@section('button-control')
    <button id="check-answer" class="btn btn-info">Check Answers</button>
    <button id="show-answer" class="btn btn-success">Show Answer</button>
@endsection

@section('js')
<script>

    const answer0 = ['decreased', 'fell', 'dropped', 'reduced'];
    const answer1 = ['increased', 'rose', 'grew'];
    const answer2 = ['beginning', 'start'];
    const answer3 = ['decrease', 'fall', 'drop', 'reduction'];
    const answer4 = ['increased', 'rose', 'grew'];
    const answer5 = ['dramatic', 'substantial', 'considerable', 'big', 'large'];
    const answer6 = ['at'];
    const answer7 = ['increased', 'rose', 'grew'];
    const answer8 = ['decreased', 'fell', 'dropped', 'reduced'];
    const answer9 = ['at'];
    const answer10 = ['while', 'whereas', 'but'];
    const answer11 = ['number'];

    let score = 0;

    $("#show-answer").hide(true);

    $('#show-answer').click(showAnswers) 
    $('#check-answer').click(checkAnswers) 

    function checkAnswers() {
        let icon;
        $(':text').each((idx, item) => {
            switch(idx) {
                case 0:
                    if(jQuery.inArray($(item).val().toLowerCase(),  answer0) != -1) {
                        icon = '<i class="fas fa-check text-success"></i>';
                         score++;
                    } else {
                        icon = '<i class="fas fa-times text-danger"></i>';
                    }
                    break;
                case 1:
                    if(jQuery.inArray($(item).val().toLowerCase(),  answer1) != -1) {
                        icon = '<i class="fas fa-check text-success"></i>';
                         score++;
                    } else {
                        icon = '<i class="fas fa-times text-danger"></i>';
                    }
                    break;
                case 2:
                    if(jQuery.inArray($(item).val().toLowerCase(),  answer2) != -1) {
                        icon = '<i class="fas fa-check text-success"></i>';
                         score++;
                    } else {
                        icon = '<i class="fas fa-times text-danger"></i>';
                    }
                    break;
                case 3:
                    if(jQuery.inArray($(item).val().toLowerCase(),  answer3) != -1) {
                        icon = '<i class="fas fa-check text-success"></i>';
                         score++;
                    } else {
                        icon = '<i class="fas fa-times text-danger"></i>';
                    }
                    break;
                case 4:
                    if(jQuery.inArray($(item).val().toLowerCase(),  answer4) != -1) {
                        icon = '<i class="fas fa-check text-success"></i>';
                         score++;
                    } else {
                        icon = '<i class="fas fa-times text-danger"></i>';
                    }
                    break;
                case 5:
                    if(jQuery.inArray($(item).val().toLowerCase(),  answer5) != -1) {
                        icon = '<i class="fas fa-check text-success"></i>';
                         score++;
                    } else {
                        icon = '<i class="fas fa-times text-danger"></i>';
                    }
                    break;
                case 6:
                    if(jQuery.inArray($(item).val().toLowerCase(),  answer6) != -1) {
                        icon = '<i class="fas fa-check text-success"></i>';
                         score++;
                    } else {
                        icon = '<i class="fas fa-times text-danger"></i>';
                    }
                    break;
                case 7:
                    if(jQuery.inArray($(item).val().toLowerCase(),  answer7) != -1) {
                        icon = '<i class="fas fa-check text-success"></i>';
                         score++;
                    } else {
                        icon = '<i class="fas fa-times text-danger"></i>';
                    }
                    break;
                case 8:
                    if(jQuery.inArray($(item).val().toLowerCase(),  answer8) != -1) {
                        icon = '<i class="fas fa-check text-success"></i>';
                         score++;
                    } else {
                        icon = '<i class="fas fa-times text-danger"></i>';
                    }
                    break;
                case 9:
                    if(jQuery.inArray($(item).val().toLowerCase(),  answer9) != -1) {
                        icon = '<i class="fas fa-check text-success"></i>';
                         score++;
                    } else {
                        icon = '<i class="fas fa-times text-danger"></i>';
                    }
                    break;
                case 10:
                    if(jQuery.inArray($(item).val().toLowerCase(),  answer10) != -1) {
                        icon = '<i class="fas fa-check text-success"></i>';
                         score++;
                    } else {
                        icon = '<i class="fas fa-times text-danger"></i>';
                    }
                    break;
                case 11:
                    if(jQuery.inArray($(item).val().toLowerCase(),  answer11) != -1) {
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
            alert('Your score is ' + score + '/12');
        }

        $("#show-answer").show(true);
        $("#check-answer").hide(true);
    }

    function showAnswers() {
        var x = document.getElementById("ans");
        if (x.style.display == "none") {
            $("#show-answer").text('close');
            x.style.display = "block";
        }else {
            $("#show-answer").text('Show Answer');
            x.style.display = "none";
        }
    }
</script>
@stop