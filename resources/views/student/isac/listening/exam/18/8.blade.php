@section('css')
<style>
    .table tbody tr td {
        font-size: 18px;
        text-align: center;
    }
</style>
@stop
@php
    $list = 1;
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-16">
            <h4 class="mt-0">{{$pageTitle['sub_menu_name']}}</h4>
            <p class="lead mb-1"><strong>Exercise 1 What are these people doing?</strong></p>

            <table class="table table-sm table-bordered text-dark mt-3">
                <tbody>

                    @for ($i = 0; $i < 3; $i++)
                        <tr>
                            @for ($j = 0; $j < 4; $j++)
                                <td>
                                    <div class="position-relative">
                                        <span>{{ $list++ }}</span>
                                        <input type="text" class="form-control">
                                    </div>
                                </td>
                            @endfor
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>

@section('button-control')
    <button id="check-answer" class="btn btn-info">Check Answersss</button>
@stop

@section('js')
<script>
     const selectAnswer = [
            "He is swimming", 
            "She is listening to the radio.", 
            "He is eating.", 
            "They are dancing.", 
            "He is fishing.", 
            "He is watching TV.", 
            "She is riding a bike.", 
            "They are writing letters.", 
            "He is singing.", 
            "He is painting.",
            "He is shaving.",
            "He is shaving.",
        ];

        $('#check-answer').on('click', () => {
            $('input[type="text"]').each((index, item) => {
                if (selectAnswer[index].toLowerCase() == $(item).val().toLowerCase()) {
                    item.className = 'form-control border-success'
                } else {
                    $(`<span class="text-success mt-2">${selectAnswer[index]}</span>`).insertAfter($(item));
                }
            });
            $('#check-answer').prop('disabled',true)
        });
</script>
@stop