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

$aw->e1 = "Castilla";
$aw->e2 = "13 September 1990";
$aw->e3 = "Ashfield";
$aw->e4 = "0875462503";
$aw->e5 = "9502103";
$aw->e6 = "31 December 2018";
$aw->e7 = "30 pounds";
$aw->e8 = "960350401";
$aw->e9 = "before the weekend";
$aw->e10 = "PIN";

@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['sub_menu_name']}}
            </p>
            <div class="row">
                <div class="col-lg-12">

                    As you listen complete the following information table.
                    <br>
                    Write <b>NO MORE THAN THREE WORDS OR A DATE OR NUMBER</b>
                    <div class="w-100 d-flex justify-content-center">
                        <table class="w-75">
                            <tr>
                                <td style="border: 1px solid black;">
                                    <div class="p-3">
                                        <div class="w-100 text-center">
                                            <b>BARCLAYS BANK</b>
                                            <br>
                                            <b>STUDENT ACCOUNT APPLICATION FORM</b>
                                        </div>
                                        <div class="w-100 d-flex justify-content-center">
                                            <table>
                                                <tr>
                                                    <td class="pr-2">Account holder:</td>
                                                    <td>
                                                        Sofia (1)
                                                        <div class="input-con">
                                                            <input type="text" class="q-val form-control" show-aw="q-1" aw="{{$aw->e1}}">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-2"></td>
                                                    <td><span class="aw text-danger q-1">{{$aw->e1}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-2">University:</td>
                                                    <td>Oxford University</td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-2">Date of Birth:</td>
                                                    <td>
                                                        (2)
                                                        <div class="input-con">
                                                            <input type="text" class="q-val form-control" show-aw="q-2" aw="{{$aw->e2}}">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-2"></td>
                                                    <td><span class="aw text-danger q-2">{{$aw->e2}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-2">Address:</td>
                                                    <td>11 Rosewood Lane </td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-2"></td>
                                                    <td>
                                                        (3)
                                                        <div class="input-con">
                                                            <input type="text" class="q-val form-control" show-aw="q-3" aw="{{$aw->e3}}">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-2"></td>
                                                    <td><span class="aw text-danger q-3">{{$aw->e3}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-2"></td>
                                                    <td>Near Bristol, Avon. </td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-2">Contact No:</td>
                                                    <td>
                                                        (4)
                                                        <div class="input-con">
                                                            <input type="text" class="q-val form-control" show-aw="q-4" aw="{{$aw->e4}}">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-2"></td>
                                                    <td><span class="aw text-danger q-4">{{$aw->e4}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-2">Student Number:</td>
                                                    <td>
                                                        (5)
                                                        <div class="input-con">
                                                            <input type="text" class="q-val form-control" show-aw="q-5" aw="{{$aw->e5}}">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-2"></td>
                                                    <td><span class="aw text-danger q-5">{{$aw->e5}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-2">Passport Number:</td>
                                                    <td>NJ 124 356</td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-2">Issue date:</td>
                                                    <td>21 – 09 – 1999</td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-2">Expiry date: </td>
                                                    <td>
                                                        (6)
                                                        <div class="input-con">
                                                            <input type="text" class="q-val form-control" show-aw="q-6" aw="{{$aw->e6}}">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-2"></td>
                                                    <td><span class="aw text-danger q-6">{{$aw->e6}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-2" colspan="2">Do you hold an account at another bank? YES </td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-2">Name of bank: </td>
                                                    <td>HSBC </td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-2">Amount deposited: </td>
                                                    <td>
                                                        (7)
                                                        <div class="input-con">
                                                            <input type="text" class="q-val form-control" show-aw="q-7" aw="{{$aw->e7}}">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-2"></td>
                                                    <td><span class="aw text-danger q-7">{{$aw->e7}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-2">Account number:</td>
                                                    <td>
                                                        (8)
                                                        <div class="input-con">
                                                            <input type="text" class="q-val form-control" show-aw="q-8" aw="{{$aw->e8}}">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-2"></td>
                                                    <td><span class="aw text-danger q-8">{{$aw->e8}}</span></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="pt-4">
                                    The bank clerk says the ATM card will be sent (9)
                                    <div class="input-con">
                                        <input type="text" class="q-val form-control" show-aw="q-9" aw="{{$aw->e9}}">
                                    </div>
                                    <span class="aw text-danger q-9 px-2">{{$aw->e9}}</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="pt-1">
                                    The bank clerk suggests that she change the (10)
                                    <div class="input-con">
                                        <input type="text" class="q-val form-control" show-aw="q-10" aw="{{$aw->e10}}">
                                    </div>
                                    <span class="px-2 aw text-danger q-10">{{$aw->e10}}</span>
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
            if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'))
        })
        $('.q-check:checked').each((idx, item) => {
            if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'))
        })
        $('.q-check-input:checked').each((idx, item) => {
            let aw = ""
            if ($(item).val() == "False")
                aw = $(item).val() + ": " + $('.' + $(item).attr('text')).val()
            else
                aw = $(item).val()
            if (aw.trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'))
        })
        $('.aw').removeClass('aw')
    })

    function show_aw(aw) {
        $('.' + aw).addClass('text-success')
        $('.' + aw).removeClass('text-danger')
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