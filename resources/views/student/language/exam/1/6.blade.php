<style>
    .mark, mark {
        padding: .2em;
        background-color: #ffc107;
    }
    </style>
    @php
        $q1 = "Most teenagers tend to spend their money";
        $q11 = "clothes and music.";
        $q111 = array(
            'for',
            'on',
            'by',
            'at'
        );

        $q2 = "There was a sharp decrease in the birth rate";
        $q22 = "2007.";
        $q222 = array(
            'at',
            'on',
            'with',
            'in'
        );

        $q3 = "The number of cars sold fluctuated";
        $q33 = "2000 and 2009.";
        $q333 = array(
            'between',
            'from',
            'within',
            'at'
        );

        $q4 = "The number of tourists entering the Kingdom rose";
        $q44 = "12 million to 13 million in that year.";
        $q444 = array(
            'much',
            'many',
            'more',
            'most'
        );

        $q5 = "The unemployment rate remained";
        $q55 = "6% for the next few years.";
        $q555 = array(
            'at',
            'in',
            'with',
            'for'
        );

        $q6 = "There was a significant fall";
        $q66 = "the sales";
        $q666 = "new cars during the recession.";
        $q66_1 = array(
            'off',
            'in',
            'on',
            'in'
        );
        $q66_2 = array(
            'in',
            'from',
            'of',
            'of'
        );

        $q7 = "The number of foreign tourists arriving in Thailand depends";
        $q77 = "the political situation.";
        $q777 = array(
            'of',
            'on',
            'with',
            'for'
        );

        $q8 = "The recession prevented the company";
        $q88 = "reaching its targets.";
        $q888 = array(
            'by',
            'for',
            'to',
            'from'
        );

        $q9 = "There was a substantial growth";
        $q99 = "the number";
        $q999 = "new-born babies during the period.";
        $q99_1 = array(
            'in',
            'from',
            'for',
            'at'
        );
        $q99_2 = array(
            'for',
            'from',
            'in',
            'of'
        );

        $q10 = "The vast majority";
        $q100 = "young people have never experienced the difficulties";
        $q1000 = "'snail-mail'";
        $q100_1 = array(
            'for',
            'with',
            'of',
            'in'
        );
        $q100_2 = array(
            'for',
            'by',
            'of',
            'in'
        );
    @endphp
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card-box text-dark font-16">
                <p class="lead">
                    {{$pageTitle['topic']}}
                </p>
                
                <div class="mb-2">
                    <span class="font-weight-bold mr-2">1.</span>
                    {{$q1}}
                    <select class="form-control d-inline w-auto mx-2">
                        <option value="">-Select-</option>
                        <option value="{{$q111[0]}}">{{$q111[0]}}</option>
                        <option value="{{$q111[1]}}">{{$q111[1]}}</option>
                        <option value="{{$q111[2]}}">{{$q111[2]}}</option>
                        <option value="{{$q111[3]}}">{{$q111[3]}}</option>
                    </select>
                    {{$q11}}
                </div>
                
                <div class="mb-2">
                    <span class="font-weight-bold mr-2">2.</span>
                    {{$q2}}
                    <select class="form-control d-inline w-auto mx-2">
                        <option value="">-Select-</option>
                        <option value="{{$q222[0]}}">{{$q222[0]}}</option>
                        <option value="{{$q222[1]}}">{{$q222[1]}}</option>
                        <option value="{{$q222[2]}}">{{$q222[2]}}</option>
                        <option value="{{$q222[3]}}">{{$q222[3]}}</option>
                    </select>
                    {{$q22}}
                </div>
                
                <div class="mb-2">
                    <span class="font-weight-bold mr-2">3.</span>
                    {{$q3}}
                    <select class="form-control d-inline w-auto mx-2">
                        <option value="">-Select-</option>
                        <option value="{{$q333[0]}}">{{$q333[0]}}</option>
                        <option value="{{$q333[1]}}">{{$q333[1]}}</option>
                        <option value="{{$q333[2]}}">{{$q333[2]}}</option>
                        <option value="{{$q333[3]}}">{{$q333[3]}}</option>
                    </select>
                    {{$q33}}
                </div>
    
                <div class="mb-2">
                    <span class="font-weight-bold mr-2">4.</span>
                    {{$q4}}
                    <select class="form-control d-inline w-auto mx-2">
                        <option value="">-Select-</option>
                        <option value="{{$q444[0]}}">{{$q444[0]}}</option>
                        <option value="{{$q444[1]}}">{{$q444[1]}}</option>
                        <option value="{{$q444[2]}}">{{$q444[2]}}</option>
                        <option value="{{$q444[3]}}">{{$q444[3]}}</option>
                    </select>
                    {{$q44}}
                </div>
    
                <div class="mb-2">
                    <span class="font-weight-bold mr-2">5.</span>
                    {{$q5}}
                    <select class="form-control d-inline w-auto mx-2">
                        <option value="">-Select-</option>
                        <option value="{{$q555[0]}}">{{$q555[0]}}</option>
                        <option value="{{$q555[1]}}">{{$q555[1]}}</option>
                        <option value="{{$q555[2]}}">{{$q555[2]}}</option>
                        <option value="{{$q555[3]}}">{{$q555[3]}}</option>
                    </select>
                    {{$q55}}
                </div>
    
                <div class="mb-2">
                    <span class="font-weight-bold mr-2">6.</span>
                    {{$q6}}
                    <select class="form-control d-inline w-auto mx-2">
                        <option value="">-Select-</option>
                        <option value="{{$q66_1[0]}}">{{$q66_1[0]}}</option>
                        <option value="{{$q66_1[1]}}">{{$q66_1[1]}}</option>
                        <option value="{{$q66_1[2]}}">{{$q66_1[2]}}</option>
                        <option value="{{$q66_1[3]}}">{{$q66_1[3]}}</option>
                    </select>
                    {{$q66}}
                    <select class="form-control d-inline w-auto mx-2">
                        <option value="">-Select-</option>
                        <option value="{{$q66_2[0]}}">{{$q66_2[0]}}</option>
                        <option value="{{$q66_2[1]}}">{{$q66_2[1]}}</option>
                        <option value="{{$q66_2[2]}}">{{$q66_2[2]}}</option>
                        <option value="{{$q66_2[3]}}">{{$q66_2[3]}}</option>
                    </select>
                    {{$q666}}
                </div>
    
                <div class="mb-2">
                    <span class="font-weight-bold mr-2">7.</span>
                    {{$q7}}
                    <select class="form-control d-inline w-auto mx-2">
                        <option value="">-Select-</option>
                        <option value="{{$q777[0]}}">{{$q777[0]}}</option>
                        <option value="{{$q777[1]}}">{{$q777[1]}}</option>
                        <option value="{{$q777[2]}}">{{$q777[2]}}</option>
                        <option value="{{$q777[3]}}">{{$q777[3]}}</option>
                    </select>
                    {{$q77}}
                </div>
    
                <div class="mb-2">
                    <span class="font-weight-bold mr-2">8.</span>
                    {{$q8}}
                    <select class="form-control d-inline w-auto mx-2">
                        <option value="">-Select-</option>
                        <option value="{{$q888[0]}}">{{$q888[0]}}</option>
                        <option value="{{$q888[1]}}">{{$q888[1]}}</option>
                        <option value="{{$q888[2]}}">{{$q888[2]}}</option>
                        <option value="{{$q888[3]}}">{{$q888[3]}}</option>
                    </select>
                    {{$q88}}
                </div>
    
                <div class="mb-2">
                    <span class="font-weight-bold mr-2">9.</span>
                    {{$q9}}
                    <select class="form-control d-inline w-auto mx-2">
                        <option value="">-Select-</option>
                        <option value="{{$q99_1[0]}}">{{$q99_1[0]}}</option>
                        <option value="{{$q99_1[1]}}">{{$q99_1[1]}}</option>
                        <option value="{{$q99_1[2]}}">{{$q99_1[2]}}</option>
                        <option value="{{$q99_1[3]}}">{{$q99_1[3]}}</option>
                    </select>
                    {{$q99}}
                    <select class="form-control d-inline w-auto mx-2">
                        <option value="">-Select-</option>
                        <option value="{{$q99_2[0]}}">{{$q99_2[0]}}</option>
                        <option value="{{$q99_2[1]}}">{{$q99_2[1]}}</option>
                        <option value="{{$q99_2[2]}}">{{$q99_2[2]}}</option>
                        <option value="{{$q99_2[3]}}">{{$q99_2[3]}}</option>
                    </select>
                    {{$q999}}
                </div>
    
                <div class="mb-2">
                    <span class="font-weight-bold mr-2">10.</span>
                    {{$q10}}
                    <select class="form-control d-inline w-auto mx-2">
                        <option value="">-Select-</option>
                        <option value="{{$q100_1[0]}}">{{$q100_1[0]}}</option>
                        <option value="{{$q100_1[1]}}">{{$q100_1[1]}}</option>
                        <option value="{{$q100_1[2]}}">{{$q100_1[2]}}</option>
                        <option value="{{$q100_1[3]}}">{{$q100_1[3]}}</option>
                    </select>
                    {{$q100}}
                    <select class="form-control d-inline w-auto mx-2">
                        <option value="">-Select-</option>
                        <option value="{{$q100_2[0]}}">{{$q100_2[0]}}</option>
                        <option value="{{$q100_2[1]}}">{{$q100_2[1]}}</option>
                        <option value="{{$q100_2[2]}}">{{$q100_2[2]}}</option>
                        <option value="{{$q100_2[3]}}">{{$q100_2[3]}}</option>
                    </select>
                    {{$q1000}}
                </div>
            </div>
        </div>
    </div>
    
    @section('button-control')
        <button id="check-answer" class="btn btn-info">Check Answersss</button>
    @endsection
    
    @section('js')
    <script>
         const answers = [
            'on',  //1
            'in',  //2
            'between',  //3
            'from',  //4
            'at',  //5
            'in',  //6.1
            'of',  //6.2
            'on',  //7
            'from',  //8
            'in',  //9.1
            'of',  //9.2
            'of',   //10.1
            'of',   //10.2
        ];
        let score = 0;
    
        $('#check-answer').on('click', function() {
            
            $('select').each((idx, item) => {
                console.log(idx);
                $(item).parent().find('i').remove();
                $(item).removeClass('border-success');
                $(item).removeClass('border-danger');
    
                if($(item).val() == answers[idx]) {
                    $(item).addClass('border border-success');
                    $('<i class="fas fa-check text-success mr-2"></i>').insertAfter($(item));
                    score++;
                } else {
                    $(item).addClass('border border-danger');
                    $(`<i class="fas fa-times text-danger mr-2"></i><span class="text-success mr-2">${Array.isArray(answers[idx]) ? answers[idx][1] : answers[idx]}</span>`).insertAfter($(item));
                }
            })
    
            if(score == 10){
                alert("you're awesome");
            }else{
                alert('Your score is ' + score + '/10');
            }
    
            $("#check-answer").hide(true);
        });
    
    </script>
    @stop