<link rel="stylesheet" href="{{ asset('public/css/draggable.css') }}">
<style>
    table tr td {
        vertical-align: top;
    }

    .table tr td {
        border: 1px solid black;
    }

    .table tr th {
        border: 1px solid black;
        color: black;
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
        grid-template-columns: repeat(4, 1fr);
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

@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['sub_menu_name']}}
            </p>
            <div class="row">
                <div class="col-lg-12">
                    <table class="w-100">
                        <tr>
                            <td colspan="2">
                                <h3>(Note-Taking Practice)</h3>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="py-1">
                            As you listen to the talk entitled <b>Issues in Marketing</b> for the first time, complete the flow chart below:
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                ยังไม่เสร็จ
                            </td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>
                                Write a short summary of <b>about 120 words</b> describing the characteristics of a good marketing
                                orientated organization. You can use information in the flow chart above to help you.
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><textarea name="" class="w-100" style="resize: none;" id="" cols="30" rows="10"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <h5 class="mt-3 aw text-success">Summaries (possible answer)</h5>
                                <span class="aw text-success">
                                    A good marketing orientated company gathers information, communicates that information to
                                    all levels of the organisation and uses the information strategically. It also has a thorough
                                    knowledge of customers in terms of requirments and satisfaction levels. Satisfaction must be
                                    evaluated and action must be taken regarding adverse feedback. It must also understand the
                                    strengths and weaknesses of the competition as well as have a clear picture of its own staffing
                                    and financial constraints. In addition, it has to have a long-term vision which will assist in setting
                                    objectives. The achievement of these objectives is the desired outcome for the company.
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>
                                Write a short summary of <b>about 100 words</b> describing the characteristics of good management
                                practices in a marketing orientated organization.
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><textarea name="" class="w-100" style="resize: none;" id="" cols="30" rows="10"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <h5 class="mt-3 aw text-success">Summaries (possible answer)</h5>
                                <span class="aw text-success">
                                    Good managers have detailed knowledge of their competitors, their customers and their own
                                    staff. They need to take competitors and customers seriously since without customers there is
                                    no business. They also have to treat their staff as human beings rather than as expendable
                                    resources. Good managers motivate their staff to achieve good results through praise or
                                    rewards. Managers should represent the company's culture and, as role models, should not be
                                    afraid to take risks, even if this results in mistakes. A company which refuses to take risks by
                                    being innovative is not marketing orientated.
                                </span>
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
    $('.q-dot:contains("...")').each((idx, item) => {
        let text = $(item).html()
        console.log(text)
        let input = '<div class="input-con w-50">' +
            '<input type="text" class="w-100 q-text" show-aw="' + $(item).attr('show-aw') + '" aw="' + $(item).attr('aw') + '">' +
            '</div>'
        text = text.replace("...", input)
        $(item).html(text)
    })

    $('.q-dot-choice:contains("...")').each((idx, item) => {
        let text = $(item).html()
        console.log(text)
        let input = '<div class="input-con w-100">' +
            '<div class="dropbox q" show-aw="' + $(item).attr('show-aw') + '" aw="' + $(item).attr('aw') + '"></div>' +
            '</div>'
        text = text.replace("...", input)
        $(item).html(text)
    })

    $('#check-answer').on('click', () => {
        $('.q').each((idx, item) => {
            if ($(item).text().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'))
        })
        $('.q-text').each((idx, item) => {
            if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'))
        })
        $('.aw').removeClass('aw')
    })

    function show_aw(aw) {
        console.log("aw", aw)
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