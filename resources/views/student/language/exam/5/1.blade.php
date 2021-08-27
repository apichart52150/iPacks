<style>
.mark, mark {
    padding: .2em;
    background-color: #ffc107;
}
</style>
@php
    $question = [
        'q1' => "An",
        'q2' => "eader should have a combination of skills to cope with a variety of situations which are likely to arise on an everyday basis. Perhaps the most important skill is the ability to deal with the company's",
        'q3' => "resources: ‘people-skills’. It has often been said that a company’s greatest assets are its workforce. If this is so, then it is important to retain",
        'q4' => ". A company with a high turnover of staff is not likely to be as successful as one which constantly ‘hires and",
        'q5' => "’. Continuity is an important part of a firm’s culture. In order to retain staff, a good leader should demonstrate a sense of fairness, honesty and an ability to listen. An ‘open-door’ policy is",
        'q6' => "to a culture of secrecy. A good leader should provide a role",
        'q7' => "for the rest of the staff. If the leader wants his staff to work hard, (s)he must set a good",
        'q8' => "by working hard too. If the leader wants to develop a spirit of team-work and",
        'q9' => ", then (s)he must behave in ways which promote such a culture. Sharing responsibilities and ideas with other members of the team will lead to positive results. A good leader should not",
        'q10' => "the authority which accompanies the position. This means not bullying subordinates, not using threats and warnings to achieve goals and targets. Such authoritarian behaviour is likely to have negative",
        'q11' => ". To",
        'q12' => "up, a good leader makes full use of the human resources available, without exploiting employees in any way. A sense of justice and understanding are essential qualities. Consensual management techniques are far more effective than relationships based on antiquated",
    ];
    $choice = [
        ''abuse      
        ''authoritarian      
        ''collaboration      effective      employees      example      fires      human      model      outcomes      preferable      sum
    ];
    $end = "principles.";
@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['topic']}}
            </p>
            <div class="mb-2">



                @for ($i = 1; $i <= count($question); $i++)
                    {{ $question['q'.$i] }}

                    <select class="form-control d-inline w-auto mx-2 mb-2">
                        <option value="">-Select-</option>
                    </select>
                
                @endfor

                {{ $end }}
                
            </div>
        </div>
    </div>
</div>

@section('button-control')
    <button id="check-answer" class="btn btn-info">Check Answers</button>
@endsection

@section('js')
<script>
     const answers = [
        'have been', 
        'there are', 
        'has', 
        'were', 
        'be', 
        'expected', 
        'fell', 
        'has decreased',
        'show', 
        'had been'
    ];
    let score = 0;
    $("#show-answer").hide(true);

    $('#check-answer').on('click', function() {
        
        $('select').each((idx, item) => {
            if($(item).val() == answers[idx]) {
                $(item).addClass('border border-success');
                $('<i class="fas fa-check text-success mr-2"></i>').insertAfter($(item));
                score++;
            } else {
                $(item).addClass('border border-danger');
                $(`<i class="fas fa-times text-danger mr-2"></i><span class="text-success mr-2">${Array.isArray(answers[idx]) ? answers[idx][1] : answers[idx]}</span>`).insertAfter($(item));
            }
        })

        $('a u').each((idx, item) => {
            if($(item).val() == answers[idx]) {
                $(`<span class="text-success"><u>${Array.isArray(answers[idx]) ? answers[idx][1] : answers[idx]}</u></span>`).insertAfter($(item));
            } else {
                $(`<span class="text-success"><u>${Array.isArray(answers[idx]) ? answers[idx][1] : answers[idx]}</u></span>`).insertAfter($(item));
            }
        })

        if(score == 10){
            alert("you're awesome");
        }else{
            alert('Your score is ' + score + '/10');
        }

        $("#show-answer").show(true);
        $("#check-answer").hide(true);
    });

    $('#show-answer').on('click', function() {
        var x = document.getElementById("ans");
        if (x.style.display == "none") {
            $("#show-answer").text('close');
            x.style.display = "block";
        }else {
            $("#show-answer").text('Show Answer');
            x.style.display = "none";
        }
    });
   
</script>
@stop