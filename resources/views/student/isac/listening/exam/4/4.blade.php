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
        min-width: 250px;
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
</style>
@php

$aw = new stdClass();

$aw->e31 = "wildlife";
$aw->e32 = "evaporate";
$aw->e33 = "windbreaks";
$aw->e34 = "shrubs";
$aw->e35 = "integrated landscape";
$aw->e36 = "prevailing";
$aw->e37 = "east and west";
$aw->e38 = "fire";
$aw->e39 = "15 degrees C";
$aw->e40 = "perfume";

@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['sub_menu_name']}}
            </p>
            <div class="row">
                <div class="col-lg-12">
                    <h5>Write NO MORE THAN THREE WORDS.</h5>
                    <div class="w-100 d-flex justify-content-center">
                        <table class="w-75">
                            <tr>
                                <td class="pt-4"></td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black;">
                                    <div class="p-3">
                                        <div class="w-100 d-flex justify-content-center">
                                            <table class="w-75">
                                                <tr>
                                                    <td colspan="3">
                                                        <b>Importance of correct landscaping:</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>*</td>
                                                    <td>
                                                        Prevent homes from becoming over-heated
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>*</td>
                                                    <td>
                                                        Provide cleaner fresher air
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>*</td>
                                                    <td>
                                                        Provide shelter for (31)
                                                        <div class="input-con py-1">
                                                            <input type="text" class="q-val form-control" show-aw="q-31" aw="{{$aw->e31}}">
                                                        </div>
                                                        <span class="aw text-danger q-31 px-2">{{$aw->e31}}</span>
                                                        around the house
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" class="pt-2">
                                                        <b>How does it work?</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>*</td>
                                                    <td>
                                                        Allows summer breezes to be co oled as they pass over plants and (32)
                                                        <div class="input-con py-1">
                                                            <input type="text" class="q-val form-control" show-aw="q-32" aw="{{$aw->e32}}">
                                                        </div>
                                                        <span class="aw text-danger q-32 px-2">{{$aw->e32}}</span>
                                                        moisture from plants
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>*</td>
                                                    <td>
                                                        Well-placed (33)
                                                        <div class="input-con py-1">
                                                            <input type="text" class="q-val form-control" show-aw="q-33" aw="{{$aw->e33}}">
                                                        </div>
                                                        <span class="aw text-danger q-33 px-2">{{$aw->e33}}</span>
                                                        can help deflect away hot breezes as well as attract cool breezes through the home.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>*</td>
                                                    <td>
                                                        Trees and (34)
                                                        <div class="input-con py-1">
                                                            <input type="text" class="q-val form-control" show-aw="q-34" aw="{{$aw->e34}}">
                                                        </div>
                                                        <span class="aw text-danger q-34 px-2">{{$aw->e34}}</span>
                                                        can provide shade from the direct sun in the hot summer months. This is sometimes referred to as
                                                        (35)
                                                        <div class="input-con py-1">
                                                            <input type="text" class="q-val form-control" show-aw="q-35" aw="{{$aw->e35}}">
                                                        </div>
                                                        <span class="aw px-2 text-danger q-35">{{$aw->e35}}, </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pt-4" colspan="3">
                                                        <b>Steps to be taken:</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        1.
                                                    </td>
                                                    <td>
                                                        Draw up a land-use map
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        2.
                                                    </td>
                                                    <td>
                                                        Show direction of (36)
                                                        <div class="input-con py-1">
                                                            <input type="text" class="q-val form-control" show-aw="q-36" aw="{{$aw->e36}}">
                                                        </div>
                                                        <span class="aw text-danger q-36 px-2">{{$aw->e36}}</span>
                                                        winds
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        3.
                                                    </td>
                                                    <td>
                                                        Plant shade trees and bushes on sides facing both (37)
                                                        <div class="input-con py-1">
                                                            <input type="text" class="q-val form-control" show-aw="q-37" aw="{{$aw->e37}}">
                                                        </div>
                                                        <span class="aw text-danger q-37 px-2">{{$aw->e37}}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pt-4" colspan="3">
                                                        <b>Precaution to be taken</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>*</td>
                                                    <td>
                                                        In the hill areas, need to take into account the risk of (38)
                                                        <div class="input-con py-1">
                                                            <input type="text" class="q-val form-control" show-aw="q-38" aw="{{$aw->e38}}">
                                                        </div>
                                                        <span class="aw text-danger q-38 px-2">{{$aw->e38}}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pt-4" colspan="3">
                                                        <b>Effects</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>*</td>
                                                    <td>
                                                        Can reduce temperatures by as much as (39)
                                                        <div class="input-con py-1">
                                                            <input type="text" class="q-val form-control" show-aw="q-39" aw="{{$aw->e39}}">
                                                        </div>
                                                        <span class="aw text-danger q-39 px-2">{{$aw->e39}}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>*</td>
                                                    <td>
                                                        Reduce power bills
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>*</td>
                                                    <td>
                                                        Add beauty and (40)
                                                        <div class="input-con py-1">
                                                            <input type="text" class="q-val form-control" show-aw="q-40" aw="{{$aw->e40}}">
                                                        </div>
                                                        <span class="aw text-danger q-40 px-2">{{$aw->e40}}</span>
                                                        to the area around the home.
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </td>
                            </tr>
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
<button id="check-answer" class="btn btn-info">Check Answers</button>
<!-- <button id="show-answer" class="btn btn-success">Show Answers</button> -->
@endsection

@section('js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

<script>
    $('.q-caller_2').each((idx, item) => {
        let input = '<div class="input-con py-1">' +
            '<div class="dropbox q" show-aw="' + $(item).attr('show-aw') + '" aw="' + $(item).attr('aw') + '"></div>' +
            '</div><br>' +
            '<span class="aw ' + $(item).attr('show-aw') + ' text-danger">' + $(item).attr('aw') + '</span>'
        $(item).html(input)
    })

    $('#check-answer').on('click', () => {
        $('.q-val').each((idx, item) => {
            console.log("AW",$(item).attr('aw').trim().toUpperCase())
            if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
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