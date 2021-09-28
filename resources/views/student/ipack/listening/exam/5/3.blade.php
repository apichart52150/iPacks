<link rel="stylesheet" href="{{ asset('public/css/draggable.css') }}">
<style>
    table tr td {
        vertical-align: middle;
    }

    table tr th {
        vertical-align: middle;
    }

    .table tr td {
        vertical-align: top;
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

$aw->e21 = "Spanish";
$aw->e22 = "West Africa";
$aw->e23 = "November 2010";
$aw->e24 = "under 8’s/under 8s/under eights";
$aw->e25 = "Poetry/poetry";
$aw->e26 = "English Club/English club";
$aw->e27 = "South America/S America";
$aw->e28 = "dormitory";
$aw->e29 = "end April/end of April";
$aw->e30 = "by ship/sea/by sea";

@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['sub_menu_name']}}
            </p>
            <div class="row">
                <div class="col-lg-12">
                    Write <b>NO MORE THAN TWO WORDS AND/OR A NUMBER</b>.
                    <div class="w-100 d-flex justify-content-center">
                        <table class="w-100">
                            <tr>
                                <td class="pt-4"></td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black;">
                                    <div class="p-3">
                                        <div class="w-100 d-flex justify-content-center">
                                            <table class="w-auto">
                                                <tr>
                                                    <td colspan="2" class="text-center pb-2">
                                                        <h3>Application for the Position of Teacher’s Assistant</h3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1"></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>Name: </th>
                                                    <td>
                                                        Sarah Wyse
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1"></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>Degree:</th>
                                                    <td>
                                                        Major: Linguistics Minor: (21)
                                                        <div class="input-con">
                                                            <input type="text" class="q-val form-control" show-aw="q-21" aw="{{$aw->e21}}">
                                                        </div>
                                                        <span class="aw text-danger q-21 px-2">{{$aw->e21}}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1"></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>Teaching experience:</th>
                                                    <td>
                                                        Volunteer teacher
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1"></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>Location: </th>
                                                    <td>
                                                        (22)
                                                        <div class="input-con py-1">
                                                            <input type="text" class="q-val form-control" show-aw="q-22" aw="{{$aw->e22}}">
                                                        </div>
                                                        <span class="aw text-danger q-22 px-2">{{$aw->e22}}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Dates: </th>
                                                    <td>
                                                        January 2009 - (23)
                                                        <div class="input-con py-1">
                                                            <input type="text" class="q-val form-control" show-aw="q-23" aw="{{$aw->e23}}">
                                                        </div>
                                                        <span class="aw text-danger q-23 px-2">{{$aw->e23}}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1"></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>Type of school: </th>
                                                    <td>
                                                        Rural Primary School
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1"></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>Ages taught: </th>
                                                    <td>
                                                        (24)
                                                        <div class="input-con py-1">
                                                            <input type="text" class="q-val form-control" show-aw="q-24" aw="{{$aw->e24}}">
                                                        </div>
                                                        <span class="aw text-danger q-24 px-2">{{$aw->e24}}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Subjects taught: </th>
                                                    <td>
                                                        Music and (25)
                                                        <div class="input-con py-1">
                                                            <input type="text" class="q-val form-control" show-aw="q-25" aw="{{$aw->e25}}">
                                                        </div>
                                                        <span class="aw text-danger q-25 px-2">{{$aw->e25}}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1"></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1"></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>Other responsibilities:</th>
                                                    <td>
                                                        In charge of school choir
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1"></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        (26)
                                                        <div class="input-con py-1">
                                                            <input type="text" class="q-val form-control" show-aw="q-26" aw="{{$aw->e26}}">
                                                        </div>
                                                        <span class="aw text-danger q-26 px-2">{{$aw->e26}}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1"></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>Preferences: </th>
                                                    <td>
                                                        Secondary School
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1"></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        (27)
                                                        <div class="input-con py-1">
                                                            <input type="text" class="q-val form-control" show-aw="q-27" aw="{{$aw->e27}}">
                                                        </div>
                                                        <span class="aw text-danger q-27 px-2">{{$aw->e27}}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        Shared accommodation or (28)
                                                        <div class="input-con py-1">
                                                            <input type="text" class="q-val form-control" show-aw="q-28" aw="{{$aw->e28}}">
                                                        </div>
                                                        <span class="aw text-danger q-28 px-2">{{$aw->e28}}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        Departure date: (29)
                                                        <div class="input-con py-1">
                                                            <input type="text" class="q-val form-control" show-aw="q-29" aw="{{$aw->e29}}">
                                                        </div>
                                                        <span class="aw text-danger q-29 px-2">{{$aw->e29}}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        Travel preference: (30)
                                                        <div class="input-con py-1">
                                                            <input type="text" class="q-val form-control" show-aw="q-30" aw="{{$aw->e30}}">
                                                        </div>
                                                        <span class="aw text-danger q-30 px-2">{{$aw->e30}}</span>
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
                <h4 class="modal-title text-white mx-auto">Listening -
                    {{$pageTitle['sub_menu_name'] }}
                </h4>
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
            
            let aw = $(item).attr('aw').toString().trim().toUpperCase().split("/")
            if(jQuery.inArray($(item).val().trim().toUpperCase(),  aw) != -1) 
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