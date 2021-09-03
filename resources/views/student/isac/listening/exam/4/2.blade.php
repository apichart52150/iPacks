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

    .event-click {
        cursor: pointer;
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

$aw->e11 = "A";
$aw->e12 = "H";
$aw->e13 = "J";
$aw->e14 = "B";
$aw->e15 = "I";
$aw->e16 = "G";

$Q17_20 = new stdClass();
$Q17_20->e1 = new stdClass();
$Q17_20->e2 = new stdClass();
$Q17_20->e3 = new stdClass();
$Q17_20->e4 = new stdClass();

$Q17_20->e1->n = "17";
$Q17_20->e2->n = "18";
$Q17_20->e3->n = "19";
$Q17_20->e4->n = "20";

$Q17_20->e1->q = "There are two buses to Freetown.";
$Q17_20->e2->q = "The University bus leaves every hour.";
$Q17_20->e3->q = "The buses take the same amount of time to reach Freetown.";
$Q17_20->e4->q = "Larnie goes to Freetown on the University bus.";

$Q17_20->e1->aw = "True";
$Q17_20->e2->aw = "False";
$Q17_20->e3->aw = "False";
$Q17_20->e4->aw = "False";


@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['sub_menu_name']}}
            </p>
            <div class="row">
                <div class="col-lg-12">
                    <h5> Match the letter from the map to the location.</h5>
                    <div class="w-100 d-flex justify-content-center">
                        <table class="w-75 mb-4">
                            <tr>
                                <td class="text-center pb-3">
                                    <img src="{{ asset('public/img_lang/listening/1-1.PNG') }}" alt="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="w-100 d-flex justify-content-center">
                                        <table>
                                            <tr>
                                                <td class="pb-2">
                                                    (11)
                                                    <div class="input-con w-50">
                                                        <input type="text" class="q-val w-100 form-control" show-aw="q-11" aw="{{$aw->e11}}">
                                                    </div>
                                                    <span class="aw text-danger q-11 px-2">{{$aw->e11}}</span>
                                                </td>
                                                <td style="vertical-align: middle;" class="pl-2 pr-4">Main Library </td>
                                                <td class="pb-2">
                                                    (12)
                                                    <div class="input-con w-50">
                                                        <input type="text" class="q-val w-100 form-control" show-aw="q-12" aw="{{$aw->e12}}">
                                                    </div>
                                                    <span class="aw text-danger q-12 px-2">{{$aw->e12}}</span>
                                                </td>
                                                <td style="vertical-align: middle;" class="pl-2 pr-4">Faculty of Medicine</td>
                                            </tr>
                                            <tr>
                                                <td class="pb-2">
                                                    (13)
                                                    <div class="input-con w-50">
                                                        <input type="text" class="q-val w-100 form-control" show-aw="q-13" aw="{{$aw->e13}}">
                                                    </div>
                                                    <span class="aw text-danger q-13 px-2">{{$aw->e13}}</span>
                                                </td>
                                                <td style="vertical-align: middle;" class="pl-2 pr-4">Church </td>
                                                <td class="pb-2">
                                                    (14)
                                                    <div class="input-con w-50">
                                                        <input type="text" class="q-val w-100 form-control" show-aw="q-14" aw="{{$aw->e14}}">
                                                    </div>
                                                    <span class="aw text-danger q-14 px-2">{{$aw->e14}}</span>
                                                </td>
                                                <td style="vertical-align: middle;" class="pl-2 pr-4">Sports Ground</td>
                                            </tr>
                                            <tr>
                                                <td class="pb-2">
                                                    (15)
                                                    <div class="input-con w-50">
                                                        <input type="text" class="q-val w-100 form-control" show-aw="q-15" aw="{{$aw->e15}}">
                                                    </div>
                                                    <span class="aw text-danger q-15 px-2">{{$aw->e15}}</span>
                                                </td>
                                                <td style="vertical-align: middle;" class="pl-2 pr-4">Concert Hall</td>
                                                <td class="pb-2">
                                                    (16)
                                                    <div class="input-con w-50">
                                                        <input type="text" class="q-val w-100 form-control" show-aw="q-16" aw="{{$aw->e16}}">
                                                    </div>
                                                    <span class="aw text-danger q-16 px-2">{{$aw->e16}}</span>
                                                </td>
                                                <td style="vertical-align: middle;" class="pl-2 pr-4">Student Union</td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-lg-12">
                    <h5>Choose TRUE or FALSE</h5>
                    <table>
                        <tr>
                            <td>
                                <table>
                                    @foreach($Q17_20 as $index => $Q17_20)
                                    <tr>
                                        <td>{{$Q17_20->n}}.</td>
                                        <td colspan="2">{{$Q17_20->q}}</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td style="width: 20px;">
                                            <div class="form-check">
                                                <input class="form-check-input event-click position-static q-check Q17_20-{{$index}}-1" type="radio" name="Q17_20-{{$index}}" show-aw="Q17_20-{{$index}}" aw="{{$Q17_20->aw}}" value="True">
                                            </div>
                                        </td>
                                        <td>
                                            <span class="event-click" onclick="checkRadio('Q17_20-{{$index}}-1')">True</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td style="width: 20px;">
                                            <div class="form-check">
                                                <input class="form-check-input event-click position-static q-check Q17_20-{{$index}}-2" type="radio" name="Q17_20-{{$index}}" show-aw="Q17_20-{{$index}}" aw="{{$Q17_20->aw}}" value="False">
                                            </div>
                                        </td>
                                        <td>
                                            <span class="event-click" onclick="checkRadio('Q17_20-{{$index}}-2')">False</span>
                                        </td>
                                    </tr>
                                    <tr class="aw">
                                        <td></td>
                                        <td colspan="2" class="aw Q17_20-{{$index}} text-danger">{{$Q17_20->aw}}</td>
                                    </tr>
                                    @endforeach
                                </table>
                            </td>
                        </tr>
                    </table>
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