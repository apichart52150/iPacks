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

$caller_1_1 = new stdClass();
$caller_1_1->e1 = new stdClass();
$caller_1_1->e2 = new stdClass();
$caller_1_1->e3 = new stdClass();
$caller_1_1->e4 = new stdClass();
$caller_1_1->e5 = new stdClass();

$caller_1_1->e1->q = "Indonesia";
$caller_1_1->e2->q = "Thailand";
$caller_1_1->e3->q = "Malaysia";
$caller_1_1->e4->q = "Singapore";
$caller_1_1->e5->q = "Korea";

$caller_1_1->e1->aw = "Rupiah";
$caller_1_1->e2->aw = "Baht";
$caller_1_1->e3->aw = "Ringgit";
$caller_1_1->e4->aw = "S/pore dollar";
$caller_1_1->e5->aw = "Won";

$caller_1_2 = new stdClass();
$caller_1_2->e1 = new stdClass();
$caller_1_2->e2 = new stdClass();
$caller_1_2->e3 = new stdClass();
$caller_1_2->e4 = new stdClass();
$caller_1_2->e5 = new stdClass();

$caller_1_2->e1->q = "Japan";
$caller_1_2->e2->q = "Hong Kong";
$caller_1_2->e3->q = "U.S.A.";
$caller_1_2->e4->q = "England";
$caller_1_2->e5->q = "Australia";

$caller_1_2->e1->aw = "Nikkei Index";
$caller_1_2->e2->aw = "Hang Seng Index";
$caller_1_2->e3->aw = "Dow Jones Index";
$caller_1_2->e4->aw = "Financial Times 100";
$caller_1_2->e5->aw = "The All Ordinaries";

$caller_1_choice = new stdClass();
$caller_1_choice->ch1 = "Ringgit";
$caller_1_choice->ch2 = "Financial Times 100";
$caller_1_choice->ch3 = "S/pore dollar";
$caller_1_choice->ch4 = "Rupiah";
$caller_1_choice->ch5 = "Dow Jones Index";
$caller_1_choice->ch6 = "Baht";
$caller_1_choice->ch7 = "Hang Seng Index";
$caller_1_choice->ch8 = "Nikkei Index";
$caller_1_choice->ch9 = "The All Ordinaries";
$caller_1_choice->ch10 = "Won";

$caller_2 = new stdClass();
$caller_2->e1 = new stdClass();
$caller_2->e2 = new stdClass();
$caller_2->e3 = new stdClass();
$caller_2->e4 = new stdClass();
$caller_2->e5 = new stdClass();
$caller_2->e6 = new stdClass();
$caller_2->e7 = new stdClass();
$caller_2->e8 = new stdClass();
$caller_2->e9 = new stdClass();
$caller_2->e10 = new stdClass();
$caller_2->e11 = new stdClass();
$caller_2->e12 = new stdClass();

$caller_2->e1->n = "1";
$caller_2->e2->n = "2";
$caller_2->e3->n = "3";
$caller_2->e4->n = "4";
$caller_2->e5->n = "5";
$caller_2->e6->n = "6";
$caller_2->e7->n = "7";
$caller_2->e8->n = "8";
$caller_2->e9->n = "9";
$caller_2->e10->n = "10";
$caller_2->e11->n = "11";
$caller_2->e12->n = "12";

$caller_2->e1->aw = "This is thought to be the result of brighter prospects for the Korean economy as a whole";
$caller_2->e2->aw = "Share market confidence is believed to have been fuelled by Wall Street's massive gains";
$caller_2->e3->aw = "The Bank of England is believed to be considering dropping its prime lending rate";
$caller_2->e4->aw = "and the U.S. is expected to announce a one-percent cut in rates later this week.";
$caller_2->e5->aw = "The region's share markets are also expected to follow suit";
$caller_2->e6->aw = "The global resurgence of gold is expected to continue";
$caller_2->e7->aw = "This trend is expected to continue with the creation of jobs";
$caller_2->e8->aw = "Work on the submarines is expected to get under way later this month";
$caller_2->e9->aw = "However, criminal charges are not expected to be made against the trader.";
$caller_2->e10->aw = "the new version is expected to cost around $16,000.";
$caller_2->e11->aw = "And the cold spell....is expected to continue for the next few days.";
$caller_2->e12->aw = "and two people are believed to have been drowned by the worst weather in over a decade.";

@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <h4 class="mt-0">{{$pageTitle['sub_menu_name']}}</h4>
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="font-italic m-0 pt-3">Caller 1</h4>
                    <table class="w-100">
                        <tr>
                            <td>1.</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="row justify-content-center mb-2">
                                    <div class="col-md-12">
                                        <div class="border border-dark px-2 text-center">
                                            <div class="drag-container">
                                                <div class="d-grid grid-5" id="choices">
                                                    @foreach($caller_1_choice as $choice)
                                                    <div class="drag">{{$choice}}</div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center mb-2">
                                    <div class="col-md-12">
                                        <table class="w-100 mb-3 table">
                                            <tr>
                                                <th class="text-center">COUNTRY</th>
                                                <th class="text-center">CURRENCY</th>
                                            </tr>
                                            @foreach($caller_1_1 as $index => $caller_1_1)
                                            <tr>
                                                <td>{{$caller_1_1->q}}</td>
                                                <td>
                                                    <div class="input-con">
                                                        <div class="dropbox q" show-aw="caller_1_1-{{$index}}" aw="{{$caller_1_1->aw}}"></div>
                                                    </div>
                                                    <br>
                                                    <span class=" aw text-danger caller_1_1-{{$index}}">{{$caller_1_1->aw}}</span>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="2" class="py-3"></td>
                                            </tr>
                                            <tr>
                                                <th class="text-center">COUNTRY</th>
                                                <th class="text-center">SHARE MARKET INDEX</th>
                                            </tr>
                                            @foreach($caller_1_2 as $index => $caller_1_2)
                                            <tr>
                                                <td>{{$caller_1_2->q}}</td>
                                                <td>
                                                    <div class="input-con">
                                                        <div class="dropbox q" show-aw="caller_1_2-{{$index}}" aw="{{$caller_1_2->aw}}"></div>
                                                    </div>
                                                    <br>
                                                    <span class="aw text-danger caller_1_2-{{$index}}">{{$caller_1_2->aw}}</span>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>As you listen to the report again, identify sentences using the <b>Passive + Infinitive</b> construction.
                                <br>
                                e.g. These falls are believed to have been caused by massive selling.....
                            </td>
                        </tr>
                        @foreach($caller_2 as $index => $caller_2)
                        <tr>
                            <td></td>
                            <td>
                                <span>{{$caller_2->n}}.</span>
                                <input type="text" class="w-75" show-aw="caller_2-{{$index}}" aw="{{$caller_2->aw}}">
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td class="pt-3">3. </td>
                            <td class="pt-3">As you listen again to the news, take notes and write a summary of about 150 words about the
                                Asian currency crisis and its impact on share markets. </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><textarea name="" class="w-100" style="resize: none;" id="" cols="30" rows="10"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <h5 class="mt-3 aw text-success">Summary (possible answer) </h5>
                                <span class="aw text-success">
                                    Most Asian currencies fell again. The Indonesian Rupiah, the Thai Baht, The Malaysian Ringgit and the
                                    Singapore dollar all ended significantly lower. Malaysia's Prime Minister blamed overseas speculators
                                    and threatened to take action to prevent future currency manipulation.
                                    <br>
                                    The Korean Won, on the other hand, was stronger, believed to be the result of a stronger economy
                                    triggered by automobile exports.
                                    <br>
                                    Although most currencies ended lower, share markets performed well. The Nikkei and Hang Seng were
                                    stronger due to gains by the Dow Jones and FT-100, caused by speculated interest rate cuts. This
                                    region's share markets are also expected to make gains because of the IMF's rescue packages.
                                    CHALLENGES LISTENING: BUSINESS
                                    In Australia, rises in resource prices boosted the All-Ordinaries and the economy is expected to remain
                                    buoyant in spite of the Asian crisis. In addition, employment figures are encouraging with the creation
                                    of new jobs.
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