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

@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <h4 class="mt-0">{{$pageTitle['sub_menu_name']}}</h4>
            <div class="row">
                <div class="col-lg-12">
                    <table>
                        <tr>
                            <td>1.</td>
                            <td>
                                You are going to hear two short talks about <b>two famous Australians</b>: <b>John Curtin</b>.
                            </td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>
                                What do you know about these two men, if anything?
                                <br>
                                Brainstorm around the group to find out as much as you can about them before you listen to
                                the recordings.
                            </td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>
                                As you listen, focus primarily on the important events which happened during their lives.
                                (the chronological sequence)
                            </td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>
                                Compare your notes with other people in the group.
                                <br>
                                Complete any gaps in your own notes.
                            </td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td class="pb-2">
                                Write a short summary of the main events and achievements of each of the two men
                                <b>(roughly 120 - 150 words each)</b>. Use the discourse markers which you learnt earlier
                                in this course to give coherence to your summary.
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <textarea name="" class="form-control w-100" style="resize: none;" id="" cols="30" rows="10"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <h5 class="mt-3 aw text-success">John Curtin (possible answer)</h5>
                                <span class="aw text-success">
                                    Born in New Zealand in 1929 to a religious family, Fred Hollows wanted to become a missionary but
                                    changed his mind and became an eye-specialist. In 1960 he got a job in Australia. In 1965 he became
                                    the head of the eye-department in a Sydney hospital. Fred was shocked by the number of Aborigines
                                    with eye problems and in 1970 helped launch a national program to improve this situation. His team
                                    treated over 30,000 people in three years. By 1980 Fred was helping people with eye problems abroad.
                                    He helped set up a lens factory in Eritrea. In 1989 Fred found out he was dying of cancer but continued
                                    his work. In 1993 he died surrounded by friends and family.
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
    $('#check-answer').on('click', () => {
        $('.q').each((idx, item) => {
            if ($(item).text().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'), item)
            else
                show_error(item)
        })
        $('.q-text').each((idx, item) => {
            console.log($(item).val().trim().toUpperCase())
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