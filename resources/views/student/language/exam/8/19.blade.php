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
    $q1 = "The diagrams show the development of the television set over the last fifty years or so. It is clear that there have been significant changes in";
    $q2 = "and performance, with the state-of-the-art television offering many different services. To begin with physical aspects, the black and white analogue television set of the 1960s was quite large and had a shape like a";
    $q3 = "It weighed forty-five kilograms and was,";
    $q4 = ", difficult to move around. Much of this";
    $q5 = "came from the wooden cabinet which housed the component parts. In sharp contrast, the modern day high definition, digital ‘smart’ television set has a flat";
    $q6 = "and weighs just ten kilograms, which is considerably";
    $q7 = "han the oldfashioned model. In";
    $q8 = "of screen size, the old-fashioned set had a 12-inch screen while the ‘smart’ TV had a large 51-inch screen, giving a much larger picture. The picture is also much clearer than the older style TV because of the high";
    $q9 = "capability. Apart from the picture quality, the ‘smart’ TV also presents programs with a much better";
    $q10 = "quality because of the built-in stereo";
    $q11 = "and the fact that it can be connected to an auxiliary speaker system with hometheatre capability. By contrast, the television set of the 1960s had just a built-in mono speaker with no home-theatre capacity. As well as producing a clearer picture and better sound, the ‘smart’ TV ";
    $q12 = "offers a wide range of other facilities, including built-in";
    $q13 = "connectivity. As a result, the viewer can log on to the internet in much the same way as with a computer. Movies can be downloaded and viewed using the home-theatre capacity. By";
    $q14 = "the old-fashioned TV set can be used only as a television, with no additional applications. In terms of cost, both sets have the same price at one thousand, two hundred dollars each (relative to today’s cost of";
    $q15 = "). The reason for this is that the original prototype was an";
    $q16 = "in technology and the relatively high price reflected the research and";
    $q17 = "costs invested in it. Nowadays advanced technology gadgets are manufactured in mass quantities resulting in reduced prices (";
    $end = " of scale).";
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-15">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12">
                    <div class="border border-dark px-2 text-center">
                        <h5>The pictures below show how the television set has changed over time.</h5>
                        <h5>Summarize the information by selecting and reporting on the main features, and make comparisons where relevant.</h5>
                        <img src="{{ asset('public/img_lang/gap2/gap2_19.jpg') }}" class="img-fluid mb-2" alt="Responsive image">
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
    const answer1 = ['Appearance'];
    const answer2 = ['cube', 'box'];
    const answer3 = ['therefore'];
    const answer4 = ['weight'];
    const answer5 = ['screen'];
    const answer6 = ['less'];
    const answer7 = ['terms', 'respect'];
    const answer8 = ['definition', 'resolution'];
    const answer9 = ['audio', 'sound'];
    const answer10 = ['speakers'];
    const answer11 = ['also'];
    const answer12 = ['5', 'five'];
    const answer13 = ['contrast'];
    const answer14 = ['living'];
    const answer15 = ['innovation', 'advancement'];
    const answer16 = ['development'];
    const answer17 = ['economies'];

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
            }

            $(item).parent().find('.ans-con').remove();
            $(item).parent().append(`
                <div class="ans-con pr-2">
                    ${icon}
                </div>
            `)
        })

        if(score == 17){
            alert("you're awesome");
        }else{
            alert('Your score is ' + score);
        }
    }
</script>
@stop