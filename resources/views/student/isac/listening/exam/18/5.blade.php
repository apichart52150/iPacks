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
$Q_1->e13 = new stdClass();
$Q_1->e14 = new stdClass();
$Q_1->e15 = new stdClass();
$Q_1->e16 = new stdClass();
$Q_1->e17 = new stdClass();
$Q_1->e18 = new stdClass();
$Q_1->e19 = new stdClass();
$Q_1->e20 = new stdClass();

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
$Q_1->e13->n = "13";
$Q_1->e14->n = "14";
$Q_1->e15->n = "15";
$Q_1->e16->n = "16";
$Q_1->e17->n = "17";
$Q_1->e18->n = "18";
$Q_1->e19->n = "19";
$Q_1->e20->n = "20";

$Q_1->e1->q = "I hate doing the washing-up.";
$Q_1->e2->q = "I must go now.";
$Q_1->e3->q = "I haven't got a watch.";
$Q_1->e4->q = "I'm going to the zoo tomorrow.";
$Q_1->e5->q = "I won't be long.";
$Q_1->e6->q = "I feel good today.";
$Q_1->e7->q = "I should be early tomorrow.";
$Q_1->e8->q = "I would like a coffee.";
$Q_1->e9->q = "I can't understand this book.";
$Q_1->e10->q = "I wouldn't like to be in his shoes.";
$Q_1->e11->q = "I've already seen that film.";
$Q_1->e12->q = "I didn't kill him.";
$Q_1->e13->q = "I remembered to bring my dictionary.";
$Q_1->e14->q = "I hadn't received my results.";
$Q_1->e15->q = "I ought to leave now.";
$Q_1->e16->q = "I hadn't any idea who did it.";
$Q_1->e17->q = "I used to know a lot of people.";
$Q_1->e18->q = "I really enjoy going to parties.";
$Q_1->e19->q = "I haven't got any money left.";
$Q_1->e20->q = "I couldn't remember his name.";

$Q_1->e1->aw = "So do I";
$Q_1->e2->aw = "So must I";
$Q_1->e3->aw = "Neither have I";
$Q_1->e4->aw = "So am I";
$Q_1->e5->aw = "Neither will I";
$Q_1->e6->aw = "So do I";
$Q_1->e7->aw = "So should I";
$Q_1->e8->aw = "So would I";
$Q_1->e9->aw = "Neither can I";
$Q_1->e10->aw = "Neither would I";
$Q_1->e11->aw = "So have I";
$Q_1->e12->aw = "Neither did I";
$Q_1->e13->aw = "So did I";
$Q_1->e14->aw = "Neither had I";
$Q_1->e15->aw = "So ought I";
$Q_1->e16->aw = "Neither had I";
$Q_1->e17->aw = "So did I";
$Q_1->e18->aw = "So do I";
$Q_1->e19->aw = "Neither have I";
$Q_1->e20->aw = "Neither could I";

@endphp


<div class="row">
    <div class="col-md-12">
        <div class="card-box text-dark font-16">
            <h4 class="mt-0">{{$pageTitle['sub_menu_name']}}</h4>

            <p>Listen to the example:</p>
            <p class="p-0 m-0"><b>e.g. </b>I like swimming.</p>
            <p class="p-0 m-0"><b>Answer: </b>So do I</p>
            <p class="pt-2 m-0"><b>e.g. </b>I can't swim.</p>
            <p class="p-0 m-0"><b>Answer: </b>Neither can I</p>
            <p class="pt-2">Now you do it: </p>

            <table class="w-100">
                @foreach($Q_1 as $index => $Q_1)
                <tr>
                    <td style="width: 23px;">{{$Q_1->n}}.</td>
                    <td colspan="2">{{$Q_1->q}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="pt-2" style="width: 80px;vertical-align:middle;"><b>Answer: </b></td>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

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