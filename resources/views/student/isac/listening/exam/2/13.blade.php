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
            <h4 class="mt-0">{{$pageTitle['sub_menu_name']}}</h4>
            <div class="row">
                <div class="col-lg-12">
                    <table class="w-100">
                        <tr>
                            <td class="py-2">1.</td>
                            <td class="py-2" colspan="2">
                                You are going to hear two short talks about two famous Australians:
                                <br>
                                <b>Part 2:</b> Kerry Packer.
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2">2.</td>
                            <td class="py-2" colspan="2">
                                As you listen, focus primarily on the important events which happened during their
                                lives.(the chronological sequence)
                            </td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td colspan="2">
                                Write a short summary of the main events and achievements of each of the two people
                                <b>(roughly 150 words each)</b>. Use the discourse markers which you learnt earlier in this course to
                                give coherence to your summary.
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2"></td>
                            <td class="py-2" colspan="2">
                                <h5 class="pb-2">Part 2 Kerry Packer </h5>
                                <textarea name="" class="w-100 form-control" style="resize: none;" id="" cols="30" rows="10"></textarea>
                                <h5 class="mt-3 aw text-success">Summaries (possible answer)</h5>
                                <span class="aw text-success">
                                    Kerry Packer is Australia's richest person. His money comes from media interests. He inherited the
                                    media empire from his father, who had established the successful magazine Women's Weekly in 1933.
                                    In 1979, Kerry admitted that his father had been strict with him. Kerry's childhood was difficult. At the
                                    age of five he went to boarding school and a year later he caught poliomyelitis and spent nine months
                                    in an iron lung. He returned to school at the age of nine and focussed his energy on sport. At nineteen
                                    Kerry left school and worked for his father's newspapers. When Sir Frank died in 1974 Kerry took
                                    control of the business. In 1977 he started World Series Cricket. In 1979 he won the TV cricket rights.
                                    In 1978 he sold two TV stations for one billion dollars before buying them back three years later for
                                    two hundred and fifty million . In 1991 he failed to increase his media empire because parliament
                                    thought he already controlled too much. In 1990 he had a heart attack and almost died but survived.
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