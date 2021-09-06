@section('css')
<style>
    table tr .awswer {
        vertical-align: middle;
    }


    .aw1,
    .aw2,
    .aw3,
    .aw4,
    .aw5,
    .aw6 {
        display: none;
    }
</style>
@stop
@php

$Q_1 = new stdClass();
$Q_1->e1 = new stdClass();
$Q_1->e2 = new stdClass();
$Q_1->e3 = new stdClass();
$Q_1->e4 = new stdClass();
$Q_1->e5 = new stdClass();
$Q_1->e6 = new stdClass();
$Q_1->e7 = new stdClass();
$Q_1->e8 = new stdClass();
$Q_1->e9 = new stdClass();
$Q_1->e10 = new stdClass();
$Q_1->e11 = new stdClass();
$Q_1->e12 = new stdClass();

$Q_1->e1->n = "1";
$Q_1->e2->n = "2";
$Q_1->e3->n = "3";
$Q_1->e4->n = "4";
$Q_1->e5->n = "5";
$Q_1->e6->n = "6";
$Q_1->e7->n = "7";
$Q_1->e8->n = "8";
$Q_1->e9->n = "9";
$Q_1->e10->n = "10";
$Q_1->e11->n = "11";
$Q_1->e12->n = "12";

$Q_1->e1->q = "The bridge was so low that the bus wouldn't go under.";
$Q_1->e2->q = "The food was so hot that we couldn't eat it.";
$Q_1->e3->q = "The typewriter was so old that we got rid of it.";
$Q_1->e4->q = "The book was so interesting that I couldn't put it down.";
$Q_1->e5->q = "The film was so boring that I left in the middle.";
$Q_1->e6->q = "The people were so nice that I wanted to meet them again.";
$Q_1->e7->q = "The summer was so dry that all the plants died.";
$Q_1->e8->q = "The man was so generous that he gave all his money to charity.";
$Q_1->e9->q = "The girl was so beautiful that I fell in love with her.";
$Q_1->e10->q = "The heroin was so pure that a lot of addicts became ill.";
$Q_1->e11->q = "The day was so hot that we went to the beach.";
$Q_1->e12->q = "The water was so polluted that no-one was allowed to swim in it.";

$Q_1->e1->aw = "It was such a low bridge the bus wouldn't go under";
$Q_1->e2->aw = "It was such hot food we couldn't eat it";
$Q_1->e3->aw = "It was such an old typewriter we got rid of it";
$Q_1->e4->aw = "It was such an interesting book I couldn't put it down";
$Q_1->e5->aw = "It was such a boring film I left in the middle";
$Q_1->e6->aw = "They were such nice people I wanted to meet them again";
$Q_1->e7->aw = "It was such a dry summer all the plants died";
$Q_1->e8->aw = "He was such a generous man he gave all his money to charity";
$Q_1->e9->aw = "She was such a beautiful girl I fell in love with her";
$Q_1->e10->aw = "It was such pure heroin a lot of addicts became ill";
$Q_1->e11->aw = "It was such a hot day we went to the beach";
$Q_1->e12->aw = "It was such polluted water no-one was allowed to swim in it";

@endphp


<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-16">
            <h4 class="mt-0">{{$pageTitle['sub_menu_name']}}</h4>

            <p>Listen to the example:</p>
            <p class="p-0 m-0"><b>e.g. </b>The furniture was so old that it wasn't worth keeping.</p>
            <p class="p-0 m-0"><b>Answer: </b>It was such old furniture it wasn't worth keeping.</p>
            <p class="pt-2 m-0"><b>e.g. </b>The room was so big that everyone could fit inside.</p>
            <p class="p-0 m-0"><b>Answer: </b>It was such a big room everyone could fit inside.</p>
            <p class="pt-2">Now you do it: </p>

            <table class="w-100">
                @foreach($Q_1 as $index => $Q_1)
                <tr>
                    <td style="width: 23px;">{{$Q_1->n}}.</td>
                    <td colspan="2">{{$Q_1->q}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 80px;"><b>Answer: </b></td>
                    <td class="pt-2">
                        <input type="text" class="form-control w-75 q-val1" show-aw="Q_1-{{$index}}" aw="{{$Q_1->aw}}">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="pb-2">
                        <span class="text-danger Q_1-{{$index}} aw1">{{$Q_1->aw}}</span>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@section('button-control')

<button id="check-answer1" class="btn btn-info">Check Answers</button>

@endsection

@section('js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js">
</script>

<script>
    $('#check-answer1').on('click', () => {
        $('#check-answer1').prop('disabled', true)
        $('.q-val1').each((idx, item) => {
            if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'), item)
            else
                show_error(item)
        })
        $('.aw1').removeClass('aw1')
    })

    function show_aw(aw, item) {
        $(item).addClass('border border-success')
        $('.' + aw).addClass('text-success')
        $('.' + aw).removeClass('text-danger')
    }

    function show_error(item) {
        $(item).addClass('border border-danger')
    }


    // $('#sound-modal').modal({
    //     'show': true,
    //     'backdrop': "static",
    //     'keyboard': false
    // })
    $('#sound-intro').on('click', (e) => {
        $('#sound-modal').modal('hide')
        const audio = document.querySelector('audio[data-sound="sound-intro"]');
        audio.play()
    })
</script>
@stop