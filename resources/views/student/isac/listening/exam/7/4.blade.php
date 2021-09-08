<link rel="stylesheet" href="{{ asset('public/css/draggable.css') }}">
<style>
    table tr td {
        vertical-align: top;
    }

    .table tr td {
        vertical-align: middle;
        border: 1px solid black;
    }

    .table tr th {
        border: 1px solid black;
    }

    .input-con {
        display: inline-block;
        position: relative;
    }

    .input-con2 {
        width: 100px;
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
        min-width: 200px;
        min-height: 40px;
    }

    .dropbox .drag {
        margin: 0;
        vertical-align: middle;
    }

    .grid-5 {
        grid-template-columns: repeat(3, 1fr);
    }

    .grid-5-2 {
        grid-template-columns: repeat(5, 1fr);
    }

    .aw {
        display: none;
    }

    .input-text {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 3px;
        width: 100%;
        height: auto;
        min-width: 80px;
        min-height: 40px;
    }

    #caller-3 tr .col-3-500 {
        width: 500px;
        padding-left: 10px;
    }
    .event-click{
        cursor: pointer;
    }
</style>
@php


$Q31_40 = new stdClass();
$Q31_40->e1 = new stdClass();
$Q31_40->e2 = new stdClass();
$Q31_40->e3 = new stdClass();
$Q31_40->e4 = new stdClass();
$Q31_40->e5 = new stdClass();
$Q31_40->e6 = new stdClass();
$Q31_40->e7 = new stdClass();
$Q31_40->e8 = new stdClass();
$Q31_40->e9 = new stdClass();
$Q31_40->e10 = new stdClass();

$Q31_40->e1->n = "31";
$Q31_40->e2->n = "32";
$Q31_40->e3->n = "33";
$Q31_40->e4->n = "34";
$Q31_40->e5->n = "35";
$Q31_40->e6->n = "36";
$Q31_40->e7->n = "37";
$Q31_40->e8->n = "38";
$Q31_40->e9->n = "39";
$Q31_40->e10->n = "40";

$Q31_40->e1->q = "Which creature had to adapt in order to fit into a warmer environment?";
$Q31_40->e2->q = "The humans who first appeared on the earth";
$Q31_40->e3->q = "What happened 12,000 years ago?";
$Q31_40->e4->q = "Which statement best describes the initial relationship between the human hunters and the wolves?";
$Q31_40->e5->q = "The alliance between humans and wolves probably began when";
$Q31_40->e6->q = "What do we know about the wild sheep which humans and wolves hunted?";
$Q31_40->e7->q = "Why do the reindeer move from place to place?";
$Q31_40->e8->q = "Which of the following essentials do the Lapps NOT get from the reindeer?";
$Q31_40->e9->q = "What do we know about young male reindeer?";
$Q31_40->e10->q = "The result of the Lapps' selective breeding is that";

$Q31_40->e1->aw = "B. the wolf";
$Q31_40->e2->aw = "A. were able to change their appearance to suit their environment.";
$Q31_40->e3->aw = "D. Humans began to adapt their living environments.";
$Q31_40->e4->aw = "B. They competed for food but sometimes shared their prey.";
$Q31_40->e5->aw = "B. humans took baby wolves to live with them.";
$Q31_40->e6->aw = "B. They were small and had long legs.";
$Q31_40->e7->aw = "A. They move around looking for food.";
$Q31_40->e8->aw = "B. Cooking utensils";
$Q31_40->e9->aw = "A. They are born in spring.";
$Q31_40->e10->aw = "D. the Lapps are able to keep large herds of domestic reindeer.";

$Q31_40->e1->choice = new stdClass();
$Q31_40->e2->choice = new stdClass();
$Q31_40->e3->choice = new stdClass();
$Q31_40->e4->choice = new stdClass();
$Q31_40->e5->choice = new stdClass();
$Q31_40->e6->choice = new stdClass();
$Q31_40->e7->choice = new stdClass();
$Q31_40->e8->choice = new stdClass();
$Q31_40->e9->choice = new stdClass();
$Q31_40->e10->choice = new stdClass();

$Q31_40->e1->choice->a = "A. the owl";
$Q31_40->e1->choice->b = "B. the wolf";
$Q31_40->e1->choice->c = "C. the antelope";
$Q31_40->e1->choice->d = "D. humans";
$Q31_40->e2->choice->a = "A. were able to change their appearance to suit their environment.";
$Q31_40->e2->choice->b = "B. had to move around to find an environment which suited their bodies.";
$Q31_40->e2->choice->c = "C. had to find places where the sun was neither too hot nor too cool.";
$Q31_40->e2->choice->d = "D. copied the behaviour of the animals which they hunted.";
$Q31_40->e3->choice->a = "A. The surroundings in which humans lived became harsh.";
$Q31_40->e3->choice->b = "B. The human anatomy stopped changing.";
$Q31_40->e3->choice->c = "C. The human anatomy started chaning more rapidly.";
$Q31_40->e3->choice->d = "D. Humans began to adapt their living environments.";
$Q31_40->e4->choice->a = "A. They hunted together for food and shared their prey.";
$Q31_40->e4->choice->b = "B. They competed for food but sometimes shared their prey.";
$Q31_40->e4->choice->c = "C. They had little contact and hunted separately.";
$Q31_40->e4->choice->d = "D. They took turns to hunt for food.";
$Q31_40->e5->choice->a = "A. humans used them to guard their camps against enemies.";
$Q31_40->e5->choice->b = "B. humans took baby wolves to live with them.";
$Q31_40->e5->choice->c = "C. humans realised that the wolves' social organisation was similar to their own.";
$Q31_40->e5->choice->d = "D. baby wolves were left by their parents for humans to take care of.";
$Q31_40->e6->choice->a = "A. They had a woolly undercoat all year round.";
$Q31_40->e6->choice->b = "B. They were small and had long legs.";
$Q31_40->e6->choice->c = "C. They developed a relationship with humans in the same way as the wolves had done.";
$Q31_40->e6->choice->d = "D. They depended on humans to protect them from the wolves.";
$Q31_40->e7->choice->a = "A. They move around looking for food.";
$Q31_40->e7->choice->b = "B. They move around because the Lapps are hunting them.";
$Q31_40->e7->choice->c = "C. They migrated about 1000 years ago.";
$Q31_40->e7->choice->d = "D. They move because the Lapps are nomadic.";
$Q31_40->e8->choice->a = "A. Food and drink";
$Q31_40->e8->choice->b = "B. Cooking utensils";
$Q31_40->e8->choice->c = "C. Materials for building homes";
$Q31_40->e8->choice->d = "D. Material for making clothes";
$Q31_40->e9->choice->a = "A. They are born in spring.";
$Q31_40->e9->choice->b = "B. They are castrated by the dominant males.";
$Q31_40->e9->choice->c = "C. When they have been castrated they establish their own groups.";
$Q31_40->e9->choice->d = "D. They force the dominant males to leave the group.";
$Q31_40->e10->choice->a = "A. all male reindeer are castrated.";
$Q31_40->e10->choice->b = "B. the reindeer now have relations in North America.";
$Q31_40->e10->choice->c = "C. it has been taking place for many hundreds of years.";
$Q31_40->e10->choice->d = "D. the Lapps are able to keep large herds of domestic reindeer.";

@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['sub_menu_name']}}
            </p>
            <div class="row">
                <div class="col-lg-12">
                    <h5>(Questions 31–40)</h5>
                    <div class="w-100 d-flex justify-content-center">
                        <table class="w-100">
                            @foreach($Q31_40 as $index => $Q31_40)
                            <tr>
                                <td style="width: 20px;">{{$Q31_40->n}}. </td>
                                <td colspan="2">{{$Q31_40->q}}</td>
                            </tr>
                            @foreach($Q31_40->choice as $index2 => $choice)
                            <tr>
                                <td></td>
                                <td style="width: 20px;">
                                    <div class="form-check">
                                        <input class="form-check-input event-click position-static q-check Q31_40-{{$index}}-{{$index2}}" type="radio" name="Q31_40-{{$index}}" show-aw="Q31_40-{{$index}}" aw="{{$Q31_40->aw}}" value="{{$choice}}">
                                    </div>
                                </td>
                                <td>
                            <span class="event-click" onclick="checkRadio('Q31_40-{{$index}}-{{$index2}}')">{{$choice}}</span>
                            </td>
                            </tr>
                            @endforeach
                            <tr class="aw">
                                <td></td>
                                <td colspan="2" class="aw Q31_40-{{$index}} text-danger">{{$Q31_40->aw}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="sound-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-primary py-2">
                <h4 class="modal-title text-white mx-auto">Listening - 
 {{$pageTitle['sub_menu_name'] }}</h4>
            </div>
            <div class="modal-body text-center">
                <button id="sound-intro" class="btn btn-bordered-primary">Play Sound</button>
                <audio data-sound="sound-intro">
                    <source src="{{ asset('public/isac_listening/'.$pageTitle['sub_menu_type'] .'/' .$pageTitle['name_audio']) }}" type="audio/mp3">
                </audio>
            </div>
        </div>
    </div>
</div>


@section('button-control')
<button id="check-answer" class="btn btn-info">Check Answers</button>
<!-- <button id="show-answer" class="btn btn-success">Show Answers</button> -->
@endsection

@section('js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

<script>

    $('#check-answer').on('click', () => {
        $('#check-answer').prop('disabled',true)
        $('.q-val').each((idx, item) => {
            if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'), item)
            else
                show_error(item)
        })
        $('.q-check:checked').each((idx, item) => {
            if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'), item)
            else
                show_error(item)
        })
        $('.q-check-input:checked').each((idx, item) => {
            let aw = ""
            if ($(item).val() == "False")
                aw = $(item).val() + ": " + $('.' + $(item).attr('text')).val()
            else
                aw = $(item).val()
            if (aw.trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'), item)
            else
                show_error(item)
        })
        $('.aw').removeClass('aw')
    })

function show_aw(aw, item) {
    $(item).addClass('border border-success')
    $('.' + aw).addClass('text-success')
    $('.' + aw).removeClass('text-danger')
}

function show_error(item) {
    $(item).addClass('border border-danger')
}

    function checkRadio(x) {
        $('.' + x).prop("checked", true);
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