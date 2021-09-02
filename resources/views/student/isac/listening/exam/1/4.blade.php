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
            <p class="lead">
                {{$pageTitle['sub_menu_name']}}
            </p>
            <div class="row">

                <div class="col-lg-12">
                    <table class="w-100">
                        <tr>
                            <td>1.</td>
                            <td>You are going to hear a talk entitled: 'The Meaning of Development'.
                                Make predictions about what you think you might hear. Write down any words which you
                                associate with this topic. Make sure you understand the concept: 'development'.</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Brainstorm some of these ideas with a small group of people in your class.</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Now you are ready to listen to the talk. As you listen to the talk, make notes using
                                any conventions which will help you.
                            </td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Listen to the recording twice only.</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td> After listening to the recording twice, compare your notes with those of the person sitting next
                                to you. Are your notes similar? Did either of you miss out chunks from the recording? If so, help
                                each other to complete the notes.</td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td> Now, write a short summary of the talk in about 50 - 80 words.</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <textarea name="" class="w-100 form-control" style="resize: none;" id="" cols="30" rows="10"></textarea>
                                <h5 class="mt-3 aw text-success">Summary (possible answer)</h5>
                                <span class="aw text-success">
                                    The word 'develop' can mean 'unwrap' or 'uncover'. It also means to allow a picture to show from a
                                    negative image. In the context of growing vegetables, it means providing an environment which
                                    allows growth to occur. True development means allowing people to develop in their own way by
                                    removing obstacles which prevent growth. This means integrating people into their own
                                    development to make it meaningful.
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
<button id="check-answer" class="btn btn-info">Check Answers</button>
<!-- <button id="show-answer" class="btn btn-success">Show Answers</button> -->
@endsection

@section('js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

<script>
    $('.q-caller-2').each((idx, item) => {
        let text = $(item).html()
        if (text == "...") {
            let input = '<div class="input-con">' +
                '<div class="dropbox q" show-aw="' + $(item).attr('show-aw') + '" aw="' + $(item).attr('aw') + '"></div>' +
                '</div>'
            text = text.replace("...", input)
            $(item).html(input)
        }
    })

    $('#check-answer').on('click', () => {
        $('.q').each((idx, item) => {
            if ($(item).text().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'), item)
            else
                show_error(item)
        })
        $('.q-text').each((idx, item) => {
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