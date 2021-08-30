<link rel="stylesheet" href="{{ asset('public/css/draggable.css') }}">
<style>
    table tr td {
        vertical-align: top;
        padding-top: 10px;
    }

    .input-con {
        display: inline-block;
        position: relative;
    }

    .drag-container {
        margin-bottom: 25px;
    }

    .answers-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 10px 0;
    }

    .answers-container p {
        font-size: 16px;
    }

    .dropbox {
        border: 1px dashed #ccc;
        border-radius: 5px;
        padding: 3px;
        width: 100%;
        height: auto;
        min-width: 250px;
    }

    .dropbox .drag {
        margin: 0;
        vertical-align: middle;
    }

    .grid-5 {
        grid-template-columns: repeat(6, 1fr);
    }

    .aw {
        display: none;
    }
</style>
@php


$caller_2 = new stdClass();
$caller_2->e1 = new stdClass();
$caller_2->e2 = new stdClass();
$caller_2->e3 = new stdClass();

$caller_2->e1->n = "1";
$caller_2->e2->n = "2";
$caller_2->e3->n = "3";

$caller_2->e1->q = "Why do many homes in Perth face west?";
$caller_2->e2->q = "Why must people living in the hills be careful when planning landscaping for their blocks?";
$caller_2->e3->q = "What range of summer temperature reductions is possible by using effective landscaping?";

$caller_2->e1->aw = "To take full advantage of views.";
$caller_2->e2->aw = "To avoid the risk of fire.";
$caller_2->e3->aw = "Between 10 and 15 degrees Celsius.";

@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['sub_menu_name']}}
            </p>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card-box text-dark font-16">
            <table class="w-100">
                <tr>
                    <td colspan="3">
                        <h5>As you listen to the recording for the first time, find the following information: </h5>
                    </td>
                </tr>
                @foreach($caller_2 as $index => $caller_2)
                <tr>
                    <td>{{$caller_2->n}}.</td>
                    <td colspan="2">{{$caller_2->q}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 60px;"><b>Answer: </b></td>
                    <td>
                        <input type="text" class="q-text w-75" show-aw="caller_2-{{$index}}" aw="{{$caller_2->aw}}">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="aw caller_2-{{$index}} text-danger">{{$caller_2->aw}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card-box text-dark font-16">
            <h5>As you listen to the recording a second time, take notes.
                Put your notes away for a while; then write a summary of the lecture in <b>about 150 words</b>.</h5>
            <textarea name="" class="w-100" style="resize: none;" id="" cols="30" rows="10"></textarea>
            <h5 class="mt-3 aw text-success">Landscaping for Climatic Conditions (possible answer)</h5>
            <span class="aw text-success">
                Planting bushes and trees around homes can prevent houses from over-heating.It can also provide
                cooler, cleaner air around the home. Hot summer winds are cooled as they pass over the plants in a
                process called evapotranspiration. In addition, trees deflect hot winds in summer and cold winds in
                winter. Trees and bushes also provide shade in summer.
                <br>
                Effective landscaping is effective when designing new homes but also has application for existing
                homes. Careful planning is necessary to avoid overshading. Trees and shrubs should be chosen
                according to their intended use. Factors such as growth rate, size and shape, and amount of foliage
                need to be considered. In the hills, care is needed to prevent the risk of fire in the summer months.
                Appropriate landscaping is the cheapest, most effective way of controlling climatic conditions around
                the home. It is also environmentally friendly.
            </span>
        </div>
    </div>
</div>

<div id="sound-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-primary py-2">
                <h4 class="modal-title text-white mx-auto">Activity 1 - Intro</h4>
            </div>
            <div class="modal-body text-center">
                <button id="sound-intro" class="btn btn-bordered-primary">Play Sound</button>
                <audio data-sound="sound-intro">
                    <source src="{{ asset('public/audio/exam/listen/unit-i-nmbers.mp3') }}" type="audio/mp3">
                </audio>
            </div>
        </div>
    </div>
</div>


@section('button-control')
<button id="check-answer" class="btn btn-info">Check Answersss</button>
<!-- <button id="show-answer" class="btn btn-success">Show Answer</button> -->
@endsection

@section('js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

<script>
    // $('.q-caller-2').each((idx, item) => {
    //     let text = $(item).html()
    //     if (text == "...") {
    //         let input = '<div class="input-con">' +
    //             '<div class="dropbox q" show-aw="' + $(item).attr('show-aw') + '" aw="' + $(item).attr('aw') + '"></div>' +
    //             '</div>'
    //         text = text.replace("...", input)
    //         $(item).html(input)
    //     }
    // })

    $('#check-answer').on('click', () => {
        $('.q').each((idx, item) => {
            if ($(item).text().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'))
        })
        $('.q-text').each((idx, item) => {
            console.log($(item).val().trim().toUpperCase())
            if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'))
        })
        $('.aw').removeClass('aw')
    })

    function show_aw(aw) {
        $('.' + aw).addClass('text-success')
        $('.' + aw).removeClass('text-danger')
    }


    $('#sound-modal').modal({
        'show': true,
        'backdrop': "static",
        'keyboard': false
    })
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
    });

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
    });
</script>

@stop