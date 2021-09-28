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
    .event-click{
        cursor: pointer;
    }
</style>
@php

$aw = new stdClass();

$aw->e11 = "D. Newspapers and magazines";
$aw->e12 = "B. Fiction";
$aw->e13 = "E. Photocopiers";
$aw->e14 = "A. Computers";
$aw->e15 = "C. Non-fiction";

$choice_11_15 = new stdClass();
$choice_11_15->ch1 = "A. Computers";
$choice_11_15->ch2 = "B. Fiction";
$choice_11_15->ch3 = "C. Non-fiction";
$choice_11_15->ch4 = "D. Newspapers and magazines";
$choice_11_15->ch5 = "E. Photocopiers";
$choice_11_15->ch6 = "F. Listening centre";
$choice_11_15->ch7 = "G. Study area";
$choice_11_15->ch8 = "H. Reference books";

$Q31_35 = new stdClass();
$Q31_35->e1 = new stdClass();
$Q31_35->e2 = new stdClass();
$Q31_35->e3 = new stdClass();
$Q31_35->e4 = new stdClass();
$Q31_35->e5 = new stdClass();

$Q31_35->e1->n = "31";
$Q31_35->e2->n = "32";
$Q31_35->e3->n = "33";
$Q31_35->e4->n = "34";
$Q31_35->e5->n = "35";

$Q31_35->e1->q = "Why had Caroline Chisholm migrated to Australia?";
$Q31_35->e2->q = "What happened to many of these women who migrated to Australia from Britain?";
$Q31_35->e3->q = "What did Caroline do to help these women migrants?";
$Q31_35->e4->q = "Even when married, Caroline was able to continue her work. She spent most of her time";
$Q31_35->e5->q = "Which of the following did Caroline NOT ask the British government to do?";

$Q31_35->e1->aw = "C Because the British government wanted young women to migrate there";
$Q31_35->e2->aw = "B They were faced with a number of problems";
$Q31_35->e3->aw = "C She arranged for them to be sent to the countryside to settle.";
$Q31_35->e4->aw = "D getting people in the local community to support her work.";
$Q31_35->e5->aw = "B To let convicts’ families join them in prison.";

$Q31_35->e1->choice = new stdClass;
$Q31_35->e2->choice = new stdClass;
$Q31_35->e3->choice = new stdClass;
$Q31_35->e4->choice = new stdClass;
$Q31_35->e5->choice = new stdClass;

$Q31_35->e1->choice->a = "A Because she had few personal possessions ";
$Q31_35->e1->choice->b = "B Because she was looking for a husband";
$Q31_35->e1->choice->c = "C Because the British government wanted young women to migrate there";
$Q31_35->e1->choice->d = "D Because there were not many other women living in Australia";
$Q31_35->e2->choice->a = "A They were given help by the government to settle down";
$Q31_35->e2->choice->b = "B They were faced with a number of problems";
$Q31_35->e2->choice->c = "C They became rich settlers";
$Q31_35->e2->choice->d = "D They found work in the prisons where the convicts were sent";
$Q31_35->e3->choice->a = "A She found husbands for them in the city.";
$Q31_35->e3->choice->b = "B She found them a nice place to stay in a good area of Sydney.";
$Q31_35->e3->choice->c = "C She arranged for them to be sent to the countryside to settle.";
$Q31_35->e3->choice->d = "D She brought large numbers of young men to Sydney.";
$Q31_35->e4->choice->a = "A having six children of her own.";
$Q31_35->e4->choice->b = "B meeting arriving ships.";
$Q31_35->e4->choice->c = "C organizing the distribution of the newly arrived women.";
$Q31_35->e4->choice->d = "D getting people in the local community to support her work.";
$Q31_35->e5->choice->a = "A To change its immigration policy.";
$Q31_35->e5->choice->b = "B To let convicts’ families join them in prison.";
$Q31_35->e5->choice->c = "C To make life on transport ships better.";
$Q31_35->e5->choice->d = "D To encourage farmers and their families to migrate.";

$Q36_40 = new stdClass();
$Q36_40->e1 = new stdClass();
$Q36_40->e2 = new stdClass();
$Q36_40->e3 = new stdClass();
$Q36_40->e4 = new stdClass();
$Q36_40->e5 = new stdClass();

$Q36_40->e1->n = "36";
$Q36_40->e2->n = "37";
$Q36_40->e3->n = "38";
$Q36_40->e4->n = "39";
$Q36_40->e5->n = "40";

$Q36_40->e1->q = "The government thought that Caroline’s ___ were useful and, although they spent some time thinking about them, they took no immediate action.";
$Q36_40->e2->q = "Caroline was frustrated by this delay, so she asked influential people for their ___.";
$Q36_40->e3->q = "With the help of these powerful people, Caroline was able to get the government to ___ and in the end they did as she had suggested.";
$Q36_40->e4->q = "After this, migrants to Australia found the experience far less ___ than before.";
$Q36_40->e5->q = "To commemorate all the hard work and efforts to help establish Australia as a modern nation, a picture of Caroline can be found on the ___ bank-note.";

$Q36_40->e1->aw = "proposals";
$Q36_40->e2->aw = "support";
$Q36_40->e3->aw = "reconsider its decision";
$Q36_40->e4->aw = "painful";
$Q36_40->e5->aw = "five-dollar/5 dollar/$5";

@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['sub_menu_name']}}
            </p>
            <div class="row">
                <div class="col-lg-12">
                    <h5>Choose the best answer for each question from the given options. Write A, B, C, or D.</h5>
                    <table>
                        <tr>
                            <td>
                                <table>
                                    @foreach($Q31_35 as $index => $Q31_35)
                                    <tr>
                                        <td>{{$Q31_35->n}}. </td>
                                        <td colspan="2">{{$Q31_35->q}}</td>
                                    </tr>
                                    @foreach($Q31_35->choice as $index2 => $choice)
                                    <tr>
                                        <td></td>
                                        <td style="width: 20px;">
                                            <div class="form-check">
                                                <input class="form-check-input event-click position-static q-check Q31_35-{{$index}}-{{$index2}}" type="radio" name="Q31_35-{{$index}}" show-aw="Q31_35-{{$index}}" aw="{{$Q31_35->aw}}" value="{{$choice}}">
                                            </div>
                                        </td>
                                        <td>
                                    <span class="event-click" onclick="checkRadio('Q31_35-{{$index}}-{{$index2}}')">{{$choice}}</span>
                                    </td>
                                    </tr>
                                    @endforeach
                                    <tr class="aw">
                                        <td></td>
                                        <td colspan="2" class="aw Q31_35-{{$index}} text-danger">{{$Q31_35->aw}}</td>
                                    </tr>
                                    @endforeach
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-12">
                    <h5 class="pt-4">Complete the following sentences. </h5>
                    Write <b>NO MORE THAN THREE WORDS AND/OR A NUMBER</b> for each answer
                    <table>
                        @foreach($Q36_40 as $index => $Q36_40)
                        <tr>
                            <td class="Q36_40 replace_Q36_40-{{$index}}" replace="replace_Q36_40-{{$index}}" show-aw="Q36_40-{{$index}}" aw="{{$Q36_40->aw}}">{{$Q36_40->n}}. {{$Q36_40->q}}</td>
                        </tr>
                        @endforeach
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
    $('.Q36_40').each((idx, item) => {
        let text = $(item).html()
        let input = '<div class="input-con py-1">' +
            '<input type="text" class="q-val form-control" show-aw="' + $(item).attr('show-aw') + '" aw="' + $(item).attr('aw') + '">' +
            '</div>' +
            '<span class="aw text-danger ' + $(item).attr('show-aw') + ' px-2">' + $(item).attr('aw') + '</span>'
        text = text.replace("___", input)
        $('.' + $(item).attr('replace')).html(text)
    })

    $('#check-answer').on('click', () => {
        $('#check-answer').prop('disabled',true)
        $('.q').each((idx, item) => {
            if ($(item).text().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'), item)
            else
                show_error(item)
        })
        $('.q-val').each((idx, item) => {
            let aw = $(item).attr('aw').toString().trim().toUpperCase().split("/")
            if(jQuery.inArray($(item).val().trim().toUpperCase(),  aw) != -1) 
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