@section('css')
<style>
    table tbody tr td {
        vertical-align: middle !important;
    }

    table thead tr th:first-of-type {
      width: 20%;
    }
    table thead tr th:nth-child(2) {
        width: 20%;
    }
</style>
@stop
@php
    $q1 = "This cake's delicious; give me one more like this one, please.";
    $q2 = "This bag's too small; give me a different one.";
    $q3 = "We've got guests coming; give me an extra two kilos of rice.";
    $q4 = "I need more time to finish the exercise; give me ten more minutes, please.";
    $q5 = "This shirt is creased; give me a different one.";
    $q6 = "I'd like a pay-rise; give me an extra thirty dollars a week or I'll find a different job.";
    $q7 = "These biscuits are yummy; give me one more, please";
    $q8 = "This pie is yukky! Don't give me one more like this one!";
    $q9 = "The plug is faulty; give me a different one.";
    $q10 = "I can do this if I try; give me one more chance, please.";
@endphp
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card-box text-dark font-16">
                <p class="lead">
                    {{$pageTitle['sub_menu_name']}}
                </p>
               
                <table class="table table-sm table-bordered nowrap text-dark mt-3">
                    <thead>
                        <tr>
                            <th class="font-weight-bold">QUESTION</th>
                            <th class="font-weight-bold">ANSWER</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>e.g.</strong> 1 Give me five more books.</td>
                            <td>
                                <div class="position-relative">
                                    <input type="email" class="form-control" value="Give me another five books." disabled>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td><strong>e.g.</strong> 2 This pencil's broken; give me a different one, please.</td>
                            <td>
                                <div class="position-relative">
                                    <input type="email" class="form-control" value="Give me another pencil, please." disabled>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>{{ $q1 }}</td>
                            <td>
                                <div class="position-relative">
                                    <input type="text" class="form-control">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>{{ $q2 }}</td>
                            <td>
                                <div class="position-relative">
                                    <input type="text" class="form-control">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>{{ $q3 }}</td>
                            <td>
                                <div class="position-relative">
                                    <input type="text" class="form-control">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>{{ $q4 }}</td>
                            <td>
                                <div class="position-relative">
                                    <input type="text" class="form-control">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>{{ $q5 }}</td>
                            <td>
                                <div class="position-relative">
                                    <input type="text" class="form-control">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>{{ $q6 }}</td>
                            <td>
                                <div class="position-relative">
                                    <input type="text" class="form-control">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>{{ $q7 }}</td>
                            <td>
                                <div class="position-relative">
                                    <input type="text" class="form-control">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>{{ $q8 }}</td>
                            <td>
                                <div class="position-relative">
                                    <input type="text" class="form-control">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>{{ $q9 }}</td>
                            <td>
                                <div class="position-relative">
                                    <input type="text" class="form-control">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>{{ $q10 }}</td>
                            <td>
                                <div class="position-relative">
                                    <input type="text" class="form-control">
                                </div>
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
                if (selectAnswer[index] == $(item).val()) {
                    item.className = 'form-control border-success'
                } else {
                    item.className = 'form-control border-danger'
                }
                $(`<span class="text-success position-absolute" style="top: 50%; right: 10px; transform: translateY(-50%);">${selectAnswer[index]}</span>`).insertAfter($(item));
            });
        });
    </script>
@stop