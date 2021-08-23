<style>
    .mark, mark {
        padding: .2em;
        background-color: #ffc107;
    }
    
    .mark, mark {
        padding: .2em;
        background-color: #ffc107;
    }
    </style>
    @php
        $q1 = "There is a lot of";
        $q11 = "oil deep under";
        $q111 = "ground.";
        $a1 = array(
            "the, the",
            "an, the",
            "No article, a",
            "No article, the"
        );
        $q2 = "David is one of ";
        $q22 = " best workers in";
        $q222 = " best workers in";
        $a2 = array(
            "the, the",
            "the, a",
            "a, the",
            "a, a"
        );
        $q3 = "Earth is";
        $q33 = "planet which gets its heat and light from";
        $q333 = "Sun.";
        $a3 = array(
            "the, the",
            "a, a",
            "a, the",
            "the, a"
        );
        $q4 = "cheetah is";
        $q44 = "fastest animal in";
        $q444 = "world.";
        $a4 = array(
            "The, the, the",
            "A, the, a",
            "No article, the, the",
            "The, the, a"
        );
        $q5 = "My sister works as";
        $q55 = "doctor in";
        $q555 = "Australia.";
        $a5 = array(
            "the, the",
            "a, the",
            "a, no article",
            "no article, no article"
        );
        $q6 = "lot of people choose to move away from";
        $q66 = "countryside.";
        $a6 = array(
            "No article, the",
            "A, a",
            "A, the",
            "The, the"
        );
        $q7 = "poverty is";
        $q77 = "biggest problem nowadays.";
        $a7 = array(
            "The, the",
            "No article, the",
            "No article, a",
            "No article, no article"
        );
        $q8 = "Most of";
        $q88 = "people in";
        $q888 = "United States are migrants.";
        $a8 = array(
            "the, the",
            "no article, the",
            "the, no article",
            "no article, no article"
        );
        $q9 = "Most of";
        $q99 = "Science teachers in my school are";
        $q999 = "men.";
        $a9 = array(
            "the, the",
            "no article, no article",
            "no article, the",
            "the, no article"
        );
        $q10 = "people who work with my mother are";
        $q100 = "French.";
        $a10 = array(
            "A, the",
            "No article, the",
            "The, the",
            "The, no article"
        );
    @endphp
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card-box text-dark font-16">
                <p class="lead">
                    {{$pageTitle['topic']}}
                </p>
    
                <table class="table table-sm table-bordered text-dark">
                    <thead>
                        <tr class="text-center">
                            <th class="font-weight-bold">Qustions</th>
                            <th class="font-weight-bold w-25">Answers</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <span class="font-weight-bold mr-2">1.</span>
                                {{$q1}} ______ {{$q11}} ______ {{$q111}} <p></p>
                            </td>
                            <td>
                                <select class="form-control w-100">
                                    <option value="">-Select-</option>
                                    <option value="{{$a1[0]}}">{{$a1[0]}}</option>
                                    <option value="{{$a1[1]}}">{{$a1[1]}}</option>
                                    <option value="{{$a1[2]}}">{{$a1[2]}}</option>
                                    <option value="{{$a1[3]}}">{{$a1[3]}}</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-weight-bold mr-2">2.</span>
                                {{$q2}} ______ {{$q22}} ______ {{$q222}} <p></p>
                            </td>
                            <td>
                                <select class="form-control w-100">
                                    <option value="">-Select-</option>
                                    <option value="{{$a2[0]}}">{{$a2[0]}}</option>
                                    <option value="{{$a2[1]}}">{{$a2[1]}}</option>
                                    <option value="{{$a2[2]}}">{{$a2[2]}}</option>
                                    <option value="{{$a2[3]}}">{{$a2[3]}}</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-weight-bold mr-2">3.</span>
                                {{$q3}} ______ {{$q33}} ______ {{$q333}} <p></p>
                            </td>
                            <td>
                                <select class="form-control w-100">
                                    <option value="">-Select-</option>
                                    <option value="{{$a3[0]}}">{{$a3[0]}}</option>
                                    <option value="{{$a3[1]}}">{{$a3[1]}}</option>
                                    <option value="{{$a3[2]}}">{{$a3[2]}}</option>
                                    <option value="{{$a3[3]}}">{{$a3[3]}}</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-weight-bold mr-2">4.</span>
                                ______ {{$q4}} ______ {{$q44}} ______ {{$q444}} <p></p>
                            </td>
                            <td>
                                <select class="form-control w-100">
                                    <option value="">-Select-</option>
                                    <option value="{{$a4[0]}}">{{$a4[0]}}</option>
                                    <option value="{{$a4[1]}}">{{$a4[1]}}</option>
                                    <option value="{{$a4[2]}}">{{$a4[2]}}</option>
                                    <option value="{{$a4[3]}}">{{$a4[3]}}</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-weight-bold mr-2">5.</span>
                                {{$q5}} ______ {{$q55}} ______ {{$q555}} <p></p>
                            </td>
                            <td>
                                <select class="form-control w-100">
                                    <option value="">-Select-</option>
                                    <option value="{{$a5[0]}}">{{$a5[0]}}</option>
                                    <option value="{{$a5[1]}}">{{$a5[1]}}</option>
                                    <option value="{{$a5[2]}}">{{$a5[2]}}</option>
                                    <option value="{{$a5[3]}}">{{$a5[3]}}</option>
                                </select>
                            </td>
                        </tr>
    
                        <tr>
                            <td>
                                <span class="font-weight-bold mr-2">6.</span>
                                ______ {{$q6}} ______ {{$q66}} <p></p>
                            </td>
                            <td>
                                <select class="form-control w-100">
                                    <option value="">-Select-</option>
                                    <option value="{{$a6[0]}}">{{$a6[0]}}</option>
                                    <option value="{{$a6[1]}}">{{$a6[1]}}</option>
                                    <option value="{{$a6[2]}}">{{$a6[2]}}</option>
                                    <option value="{{$a6[3]}}">{{$a6[3]}}</option>
                                </select>
                            </td>
                        </tr>
    
                        <tr>
                            <td>
                                <span class="font-weight-bold mr-2">7.</span>
                                ______ {{$q7}} ______ {{$q77}} <p></p>
                            </td>
                            <td>
                                <select class="form-control w-100">
                                    <option value="">-Select-</option>
                                    <option value="{{$a7[0]}}">{{$a7[0]}}</option>
                                    <option value="{{$a7[1]}}">{{$a7[1]}}</option>
                                    <option value="{{$a7[2]}}">{{$a7[2]}}</option>
                                    <option value="{{$a7[3]}}">{{$a7[3]}}</option>
                                </select>
                            </td>
                        </tr>
    
                        <tr>
                            <td>
                                <span class="font-weight-bold mr-2">8.</span>
                                {{$q8}} ______ {{$q88}} ______ {{$q888}} <p></p>
                            </td> 
                            <td>
                                <select class="form-control w-100">
                                    <option value="">-Select-</option>
                                    <option value="{{$a8[0]}}">{{$a8[0]}}</option>
                                    <option value="{{$a8[1]}}">{{$a8[1]}}</option>
                                    <option value="{{$a8[2]}}">{{$a8[2]}}</option>
                                    <option value="{{$a8[3]}}">{{$a8[3]}}</option>
                                </select>
                            </td>
                        </tr>
    
                        <tr>
                            <td>
                                <span class="font-weight-bold mr-2">9.</span>
                                {{$q9}} ______ {{$q99}} ______ {{$q999}} <p></p>
                            </td>
                            <td>
                                <select class="form-control w-100">
                                    <option value="">-Select-</option>
                                    <option value="{{$a9[0]}}">{{$a9[0]}}</option>
                                    <option value="{{$a9[1]}}">{{$a9[1]}}</option>
                                    <option value="{{$a9[2]}}">{{$a9[2]}}</option>
                                    <option value="{{$a9[3]}}">{{$a9[3]}}</option>
                                </select>
                            </td>
                        </tr>
    
                        <tr>
                            <td>
                                <span class="font-weight-bold mr-2">10.</span>
                                ______ {{$q10}} ______ {{$q100}} <p></p>
                            </td>
                            <td>
                                <select class="form-control w-100">
                                    <option value="">-Select-</option>
                                    <option value="{{$a10[0]}}">{{$a10[0]}}</option>
                                    <option value="{{$a10[1]}}">{{$a10[1]}}</option>
                                    <option value="{{$a10[2]}}">{{$a10[2]}}</option>
                                    <option value="{{$a10[3]}}">{{$a10[3]}}</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    @section('button-control')
        <button id="check-answer" class="btn btn-info">Check Answers</button>
    @endsection
    
    @section('js')
    <script>
        const answers = [
            'No article, the', //1
            'the, the', //2
            'a, the', //3
            'The, the, the', //4
            'a, no article', //5
            'A, the', //6
            'No article, the', //7
            'the, the',//8
            'the, no article', //9
            'The, no article'//10
        ];
        
        let score = 0;
    
        $('#check-answer').on('click', function() {
      
            $('select').each((idx, item) => {
                $(item).parent().find('i').remove();
                $(item).removeClass('border-success');
                $(item).removeClass('border-danger');
    
                if($(item).val() == answers[idx]) {
                    $(item).addClass('border border-success');
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