<link rel="stylesheet" href="{{ asset('public/css/draggable.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/bootstrap-tagsinput.css') }}">
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
    }

    .grid-5 {
        grid-template-columns: repeat(6, 1fr);
    }

    .aw {
        display: none;
    }
</style>
@php

$Q1_4 = new stdClass();
$Q1_4->e1 = new stdClass();
$Q1_4->e2 = new stdClass();
$Q1_4->e3 = new stdClass();
$Q1_4->e4 = new stdClass();

$Q1_4->e1->n = "1";
$Q1_4->e2->n = "2";
$Q1_4->e3->n = "3";
$Q1_4->e4->n = "4";

$Q1_4->e1->q = "Giving examples Listen to the short talks and note down ways in which the speakers give examples.";
$Q1_4->e2->q = "Giving contrasting information Listen to the short talks and note down ways in which the speakers give contrasting information:";
$Q1_4->e3->q = "Giving additional information Listen to the short talks and note ways in which the speakers give additional information:";
$Q1_4->e4->q = "Sequencing Listen to the short talks and note ways in which the speakers show correct sequence:";

$Q1_4->e1->q2 = new stdClass();
$Q1_4->e2->q2 = new stdClass();
$Q1_4->e3->q2 = new stdClass();
$Q1_4->e4->q2 = new stdClass();

$Q1_4->e1->q2->i = new stdClass();
$Q1_4->e1->q2->ii = new stdClass();
$Q1_4->e1->q2->iii = new stdClass();
$Q1_4->e2->q2->i = new stdClass();
$Q1_4->e2->q2->ii = new stdClass();
$Q1_4->e3->q2->i = new stdClass();
$Q1_4->e4->q2->i = new stdClass();
$Q1_4->e4->q2->ii = new stdClass();

$Q1_4->e1->q2->i->q = "Text 1:";
$Q1_4->e1->q2->ii->q = "Text 2:";
$Q1_4->e1->q2->iii->q = "Text 3:";
$Q1_4->e2->q2->i->q = "Text 1:";
$Q1_4->e2->q2->ii->q = "Text 2:";
$Q1_4->e3->q2->i->q = "Text 1:";
$Q1_4->e4->q2->i->q = "Text 1:";
$Q1_4->e4->q2->ii->q = "Text 2:";

$Q1_4->e1->q2->i->aw = "like atropine, An example is";
$Q1_4->e1->q2->ii->aw = "such as, like";
$Q1_4->e1->q2->iii->aw = "These include, including, An illustration of this is";
$Q1_4->e2->q2->i->aw = "Although, a few similarities, however, greater differences, while, less economical, whereas, by contrast";
$Q1_4->e2->q2->ii->aw = "although, whereas, Ironically";
$Q1_4->e3->q2->i->aw = "in addition, further problems, Furthermore";
$Q1_4->e4->q2->i->aw = "First of all, Second, Then, the third problem";
$Q1_4->e4->q2->ii->aw = "To begin with, Then, and then, Next, after which, before being placed, After this, Finally";

@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <h4 class="mt-0">{{$pageTitle['sub_menu_name']}}</h4>
            <div class="row">
                <div class="col-lg-12">
                    <h5>(Listening Skills) </h5>
                    <table>
                        @foreach($Q1_4 as $index => $Q1_4)
                        <tr>
                            <td style="width: 20px;">{{$Q1_4->n}}</td>
                            <td colspan="2">{{$Q1_4->q}}</td>
                        </tr>
                        @foreach($Q1_4->q2 as $index2 => $list_aw)
                        <tr class="pt-1">
                            <td></td>
                            <td style="width: 50px;vertical-align: middle;">{{$list_aw->q}}</td>
                            <td>
                                <div class="input-con w-75 {{$index}}-{{$index2}}">
                                    <input type="text" div="{{$index}}-{{$index2}}" show-aw="show-aw-Q1_4-{{$index}}-{{$index2}}" aw="{{$list_aw->aw}}" class="q-val form-control w-100 Q1_4-{{$index}}-{{$index2}}" data-role="tagsinput">
                                </div>
                            </td>
                        </tr>
                        <tr class="pb-1">
                            <td></td>
                            <td></td>
                            <td>
                                <span class="aw text-danger show-aw-Q1_4-{{$index}}-{{$index2}}">{{$list_aw->aw}}</span>
                            </td>
                        </tr>
                        @endforeach
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
<script src="{{ asset('public/js/bootstrap-tagsinput-angular.js') }}"></script>
<script src="{{ asset('public/js/bootstrap-tagsinput.min.js') }}"></script>

<script>
    $('#check-answer').on('click', () => {
        $('#check-answer').prop('disabled',true)
        $('.q-val').each((idx, item) => {
            let val = $(item).val().split(',')
            let aw = $(item).attr('aw').split(',')
            let index_val = val.length
            let index_aw = aw.length
            if (val.length == aw.length) {
                let count = 0
                for (let i = 0; i < index_val; i++) {
                    let check = 0
                    for (let j = 0; j < aw.length; j++) {
                        if (val[i].trim().toUpperCase() == aw[j].trim().toUpperCase()) {
                            aw.splice(j, 1)
                            check++
                        }
                    }
                    if (check > 0)
                        count++
                }
                if (count == index_aw)
                    show_aw($(item).attr('show-aw'), $(item).attr('div'))
                else
                    show_error($(item).attr('div'))
            } else
                show_error($(item).attr('div'))
        })
        $('.aw').removeClass('aw')
    })

    function show_aw(aw, item) {
        $('.' + item + ':first-child').addClass('border border-success rounded-3')
        $('.' + aw).addClass('text-success')
        $('.' + aw).removeClass('text-danger')
    }

    function show_error(item) {
        $('.' + item + ':first-child').addClass('border border-danger rounded-3')
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