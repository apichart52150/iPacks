@section('css')
<style>
    table tbody tr td {
        vertical-align: middle !important;
    }

    table thead tr th:first-of-type {
      width: 20%;
    }
    table thead tr th:nth-child(2) {
        width: 15%;
    }

    .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
        color: #ffffff;
        background-color: #e74856;
        border-color: #dee2e6 #dee2e6 #fff;
    }
</style>
@stop
@php
    $question = [
        'q1' => "This cake's delicious; give me one more like this one, please.",
        'q2' => "This bag's too small; give me a different one.",
        'q3' => "We've got guests coming; give me an extra two kilos of rice.",
        'q4' => "I need more time to finish the exercise; give me ten more minutes, please.",
        'q5' => "This shirt is creased; give me a different one.",
        'q6' => "I'd like a pay-rise; give me an extra thirty dollars a week or I'll find a different job.",
        'q7' => "These biscuits are yummy; give me one more, please",
        'q8' => "This pie is yukky! Don't give me one more like this one!",
        'q9' => "The plug is faulty; give me a different one.",
        'q10' => "I can do this if I try; give me one more chance, please.",
    ];
    
@endphp
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card-box text-dark font-16">
                <h4 class="mt-0">{{$pageTitle['sub_menu_name']}}</h4>
               
                <table class="table table-sm table-bordered nowrap text-dark mt-3">
                    <thead>
                        <p><u>Listen to the example:</u></p>
                            
                        <strong>e.g. 1 </strong>Give me five more books
                        <p><strong>Answer: </strong>Give me <u>another</u> five books.</p>

                        <strong>e.g. 2 </strong>This pencil's broken; give me a different one, please.
                        <p><strong>Answer: </strong>Give me <u>another</u> pencil, please.</p>

                        <p><u>Now you do it: </u></p>

                        <tr>
                            <th class="font-weight-bold">QUESTION</th>
                            <th class="font-weight-bold">ANSWER</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 1; $i <= count($question); $i++)
                            <tr>
                                <td>{{ $question['q'.$i] }}</td>
                                <td>
                                    <div class="position-relative">
                                        <input type="text" class="form-control">
                                    </div>
                                </td>
                            </tr>
                        @endfor
                        
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

        const selectAnswer = [
            "Give me another cake like this one, please.", 
            "Give me another bag.", 
            "Give me another 2 kilos of rice.", 
            "Give me another ten minutes, please.", 
            "Give me another shirt.", 
            "Give me another 30 dollars a week or I'll find another job.", 
            "Give me another biscuit, please.", 
            "Don't give me another pie like this one", 
            "Give me another plug.", 
            "Give me another chance, please.",
        ];

        $('#check-answer').on('click', () => {
            $('input[type="text"]').each((index, item) => {
                if (selectAnswer[index].toLowerCase() == $(item).val().toLowerCase()) {
                    item.className = 'form-control border-success'
                } else {
                    $(`<span class="text-success mt-2">${selectAnswer[index]}</span>`).insertAfter($(item));
                }
            });
        });
    </script>
@stop