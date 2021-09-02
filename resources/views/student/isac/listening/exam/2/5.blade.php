<link rel="stylesheet" href="{{ asset('public/css/draggable.css') }}">
<style>
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
        min-height: 40px;
    }

    .dropbox .drag {
        margin: 0;
    }

    .grid-5 {
        grid-template-columns: repeat(4, 1fr);
    }

    .aw {
        display: none;
    }
</style>
@php

$caller_4_A = new stdClass();
$caller_4_A->e1 = new stdClass();
$caller_4_A->e2 = new stdClass();
$caller_4_A->e3 = new stdClass();
$caller_4_A->e4 = new stdClass();
$caller_4_A->e5 = new stdClass();

$caller_4_A->e1->q = "1. What is the current population of Australia?";
$caller_4_A->e2->q = "2. How many different nationalities live in Australia?";
$caller_4_A->e3->q = "3. Do the majority of migrants today speak English as their native language?";
$caller_4_A->e4->q = "4. What are the four most common languages spoken in Australia?";
$caller_4_A->e5->q = "5. What is the dominant second language in the Northern Territory?";

$caller_4_A->e1->aw = "18 million";
$caller_4_A->e2->aw = "over 100";
$caller_4_A->e3->aw = "No";
$caller_4_A->e4->aw = "English, Italian, Greek + Chinese";
$caller_4_A->e5->aw = "Aboriginal";

@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['sub_menu_name']}}
            </p>
            <div class="row">
                <div class="col-lg-12">
                    <h5>A. You are going to listen to a short talk about the population of Australia. As you listen, try to find the answers to the following questions:</h5>
                    <table class="w-100 mb-3">
                        @foreach($caller_4_A as $index => $caller_4_A)
                        <tr>
                            <td class="border-dark p-2">{{$caller_4_A->q}}</td>
                        </tr>
                        <tr>
                            <td class="border-dark p-2">
                                <b>Answer: </b>
                                <div class="input-con w-75">
                                    <input type="text" class="form-control q-text w-100" show-aw="caller_4_A-{{$index}}" aw="{{$caller_4_A->aw}}">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="aw caller_4_A-{{$index}} text-danger">
                                <span class="pl-5">{{$caller_4_A->aw}}</span>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <h5 class="mt-3">B. Listen to the talk again and take notes using the conventions available to you. </h5>
                    <!-- <textarea name="" class="w-100" style="resize: none;" id="" cols="30" rows="10"></textarea> -->
                    <h5 class="mt-3">C. Write a short summary of the talk, using your own words as far as possible. The summary should be between 80 - 100 words. </h5>
                    <textarea name="" class="form-control w-100" style="resize: none;" id="" cols="30" rows="10"></textarea>
                    <h5 class="mt-3 aw text-success">D. Summary (possible answer) </h5>
                    <span class="aw text-success">
                        The population of Australia is now eighteen million, consisting of over one hundred different
                        nationalities. In the past most migrants came from English speaking countries but nowadays most
                        migrants do not have English as their first language. This change of focus has resulted in other changes
                        in food, traditions and attitudes to learning foreign languages. In the past Australians chose not to learn
                        a foreign language but nowadays many people are learning foreign languages. The most common
                        languages in Australia are English, Italian, Greek and Chinese. Each state has a different second
                        language focus.
                    </span>
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