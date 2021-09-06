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

$Q_1->e1->q = "The ship couldn't sail because of the rough sea.";
$Q_1->e2->q = "The plane couldn't land because of the ice on the runway.";
$Q_1->e3->q = "We couldn't import the food because of quarantine restrictions.";
$Q_1->e4->q = "I couldn't hear the speaker because of the traffic noise.";
$Q_1->e5->q = "He couldn't finish the essay because of the power cut.";
$Q_1->e6->q = "We couldn't have the barbecue because of the rain.";
$Q_1->e7->q = "He couldn't finish his studies because of the war.";
$Q_1->e8->q = "The burglar couldn't break into the house because of the window locks.";
$Q_1->e9->q = "The crops couldn't grow because of the lack of rain.";
$Q_1->e10->q = "He couldn't set up business because of a lack of funds.";

$Q_1->e1->aw = "The rough sea prevented the ship from sailing";
$Q_1->e2->aw = "The ice on the runway prevented the plane from landing";
$Q_1->e3->aw = "Quarantine restrictions prevented us from importing the food";
$Q_1->e4->aw = "The traffic noise prevented me from hearing the speaker";
$Q_1->e5->aw = "The power cut prevented him from finishing the essay";
$Q_1->e6->aw = "The rain prevented us from having the barbecue";
$Q_1->e7->aw = "The war prevented him from finishing his studies";
$Q_1->e8->aw = "The window locks prevented the burglar from breaking into the house";
$Q_1->e9->aw = "The lack of rain prevented the crops from growing";
$Q_1->e10->aw = "A lack of funds prevented him from setting up business";

@endphp


<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-16">
            <h4 class="mt-0">{{$pageTitle['sub_menu_name']}}</h4>

            <p>Listen to the example:</p>
            <p class="p-0 m-0"><b>e.g. </b>We couldn't drive because of the fog.</p>
            <p class="p-0 m-0"><b>Answer: </b>The fog prevented us from driving. </p>
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