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

$Q_1->e1->n = "1";
$Q_1->e2->n = "2";
$Q_1->e3->n = "3";
$Q_1->e4->n = "4";
$Q_1->e5->n = "5";
$Q_1->e6->n = "6";
$Q_1->e7->n = "7";
$Q_1->e8->n = "8";

$Q_1->e1->q = "The blanket is too small to cover the bed.";
$Q_1->e2->q = "Your car is too slow to win the race.";
$Q_1->e3->q = "The problem is too hard to work out without a calculator.";
$Q_1->e4->q = "He's too fat to get through the gate.";
$Q_1->e5->q = "The book's too boring for me to finish.";
$Q_1->e6->q = "The meat is too tough to eat.";
$Q_1->e7->q = "The case is too big to fit in the boot.";
$Q_1->e8->q = "The sea is too rough to go swimming.";

$Q_1->e1->aw = "The blanket isn't big enough to cover the bed";
$Q_1->e2->aw = "Your car isn't fast enough to win the race";
$Q_1->e3->aw = "The problem isn't easy enough to work out without a calculator";
$Q_1->e4->aw = "He isn't thin enough to get through the gate";
$Q_1->e5->aw = "The book isn't interesting enough for me to finish";
$Q_1->e6->aw = "The meat isn't tender enough to eat";
$Q_1->e7->aw = "The case isn't small enough to fit in the boot";
$Q_1->e8->aw = "The sea isn't calm enough to go swimming";

$Q_1->e1->aw2  = "(big)";
$Q_1->e2->aw2  = "(fast)";
$Q_1->e3->aw2  = "(easy)";
$Q_1->e4->aw2  = "(thin)";
$Q_1->e5->aw2  = "(interesting)";
$Q_1->e6->aw2  = "(tough)";
$Q_1->e7->aw2  = "(small)";
$Q_1->e8->aw2  = "(calm)";

@endphp


<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-16">
            <h4 class="mt-0">{{$pageTitle['sub_menu_name']}}</h4>

            <h3>Too....to.... </h3>
            <p>Listen to the example:</p>
            <p class="p-0 m-0"><b>e.g. </b>This cake is too stale to eat. </p>
            <p class="p-0 m-0"><b>Answer: </b><span class="pr-3">The cake isn't fresh enough to eat.</span><b>(fresh)</b></p>
            <p class="pt-2">Now you do it: </p>

            <table class="w-100">
                @foreach($Q_1 as $index => $Q_1)
                <tr>
                    <td style="width: 23px;">{{$Q_1->n}}.</td>
                    <td colspan="3">{{$Q_1->q}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 80px;"><b>Answer: </b></td>
                    <td class="pt-2">
                        <input type="text" class="form-control w-75 q-val1" show-aw="Q_1-{{$index}}" aw="{{$Q_1->aw}}">
                    </td>
                    <td class="pt-2"><b>{{$Q_1->aw2}}</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td colspan="2" class="pb-2">
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



    $(".drag").draggable({
        revert: "invalid",
        cursor: "move",
        opacity: 0.7,
        zIndex: 100,
        containment: ".card-box",
        stop: function(event, ui) {
            if ($("#choices").children().length == 0) {
                $("#check-answer").prop("disabled", false);
            }
        },
    })

    $(".dropbox").droppable({
        accept: ".drag",
        tolerance: "touch",
        zIndex: 100,
        over: function(event, ui) {
            $(this).css("border-color", "#777");
        },
        out: function(event, ui) {
            $(this).css("border-color", "#ccc");
        },
        drop: function(event, ui) {
            if ($(this).children().length > 0) {
                var move = $(this).children().detach();
                $(ui.draggable).css({
                    top: 0,
                    left: 0
                }).parent().append(move);
            }
            $(this).css("border-color", "#ccc");
            $(this).append($(ui.draggable).css({
                top: 0,
                left: 0
            }));
        },
    })
</script>
@stop