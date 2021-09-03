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

$aw->e1 = "50 dollars";
$aw->e2 = "4";
$aw->e3 = "TV";
$aw->e4 = "6";
$aw->e5 = "75 dollars";
$aw->e6 = "Luxor";
$aw->e7 = "Stokes";
$aw->e8 = "047698831";
$aw->e9 = "26";
$aw->e10 = "Cash";

@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['sub_menu_name']}}
            </p>
            <div class="row">
                <div class="col-lg-12">
                    Write <b>N0 MORE THAN THREE WORDS AND/OR A NUMBER.</b>
                    <div class="w-100 d-flex justify-content-center">
                        <table class="w-100">
                            <tr>
                                <td style="border: 1px solid black;">
                                    <div class="p-3">
                                        <div class="w-100 text-center">
                                            <b>MAXWELL CAMPERVANS</b>
                                        </div>
                                        <div class="w-100 d-flex justify-content-center">
                                            <table class="w-100">
                                                <tr>
                                                    <td>
                                                        <table class="table w-100">
                                                            <tr class="text-center">
                                                                <th>Vehicle</th>
                                                                <th>No. of people</th>
                                                                <th>Other facilities</th>
                                                                <th>Cost</th>
                                                            </tr>
                                                            <tr>
                                                                <td>Explorer</td>
                                                                <td>2</td>
                                                                <td>- small fridge</td>
                                                                <td>
                                                                    (1)
                                                                    <div class="input-con w-50 py-1">
                                                                        <input type="text" class="q-val w-100 form-control" show-aw="q-1" aw="{{$aw->e1}}">
                                                                    </div>
                                                                    <span class="aw text-danger q-1 px-2">{{$aw->e1}}</span>
                                                                    a day
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Discovery</td>
                                                                <td>
                                                                    (2)
                                                                    <div class="input-con w-50 py-1">
                                                                        <input type="text" class="q-val w-100 form-control" show-aw="q-2" aw="{{$aw->e2}}">
                                                                    </div>
                                                                    <span class="aw text-danger q-2 px-2">{{$aw->e2}}</span>
                                                                </td>
                                                                <td>
                                                                    - small fridge
                                                                    <br>
                                                                    - built-in (3)
                                                                    <div class="input-con w-50 py-1">
                                                                        <input type="text" class="q-val w-100 form-control" show-aw="q-3" aw="{{$aw->e3}}">
                                                                    </div>
                                                                    <span class="aw text-danger q-3 px-2">{{$aw->e3}}</span>
                                                                </td>
                                                                <td>$70 a day</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Luxor</td>
                                                                <td>
                                                                    (4)
                                                                    <div class="input-con w-50 py-1">
                                                                        <input type="text" class="q-val w-100 form-control" show-aw="q-4" aw="{{$aw->e4}}">
                                                                    </div>
                                                                    <span class="aw text-danger q-4 px-2">{{$aw->e4}}</span>
                                                                </td>
                                                                <td>
                                                                    - large fridge
                                                                    <br>
                                                                    -cooking facilities
                                                                </td>
                                                                <td>
                                                                    (5)
                                                                    <div class="input-con w-50 py-1">
                                                                        <input type="text" class="q-val w-100 form-control" show-aw="q-5" aw="{{$aw->e5}}">
                                                                    </div>
                                                                    <span class="aw text-danger q-5 px-2">{{$aw->e5}}</span>
                                                                    a day
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <b>Preferred vehicle: </b>
                                                        (6)
                                                        <div class="input-con py-1">
                                                            <input type="text" class="q-val form-control" show-aw="q-6" aw="{{$aw->e6}}">
                                                        </div>
                                                        <span class="aw text-danger q-6 px-2">{{$aw->e6}}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <b>Personal details:</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <b>Name:</b>
                                                        Richard John (7)
                                                        <div class="input-con py-1">
                                                            <input type="text" class="q-val form-control" show-aw="q-7" aw="{{$aw->e7}}">
                                                        </div>
                                                        <span class="aw text-danger q-7 px-2">{{$aw->e7}}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <b>Address: </b>41 Bush Way, Wagga Wagga
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <b>Contact number: </b>
                                                        (8)
                                                        <div class="input-con py-1">
                                                            <input type="text" class="q-val form-control" show-aw="q-8" aw="{{$aw->e8}}">
                                                        </div>
                                                        <span class="aw text-danger q-8 px-2">{{$aw->e8}}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <b>Drivers: </b>
                                                        Self + wife
                                                        <b> Age of youngest driver: </b>
                                                        (9)
                                                        <div class="input-con py-1">
                                                            <input type="text" class="q-val form-control" show-aw="q-9" aw="{{$aw->e9}}">
                                                        </div>
                                                        <span class="aw text-danger q-9 px-2">{{$aw->e9}}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <b>Payment details: </b>
                                                        (10)
                                                        <div class="input-con py-1">
                                                            <input type="text" class="q-val form-control" show-aw="q-10" aw="{{$aw->e10}}">
                                                        </div>
                                                        <span class="aw text-danger q-10 px-2">{{$aw->e10}}</span>
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
                    <source src="{{ asset('public/isac_listening/'.$pageTitle['sub_menu_id'] .'/' .$pageTitle['name_audio']) }}" type="audio/mp3">
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