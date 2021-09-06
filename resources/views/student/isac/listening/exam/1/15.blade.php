<link rel="stylesheet" href="{{ asset('public/css/draggable.css') }}">
<style>
    table tr td {
        vertical-align: top;
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

$caller_1 = new stdClass();
$caller_1->e1 = new stdClass();
$caller_1->e2 = new stdClass();
$caller_1->e3 = new stdClass();
$caller_1->e4 = new stdClass();
$caller_1->e5 = new stdClass();
$caller_1->e6 = new stdClass();
$caller_1->e7 = new stdClass();
$caller_1->e8 = new stdClass();
$caller_1->e9 = new stdClass();
$caller_1->e10 = new stdClass();
$caller_1->e11 = new stdClass();
$caller_1->e12 = new stdClass();
$caller_1->e13 = new stdClass();
$caller_1->e14 = new stdClass();
$caller_1->e15 = new stdClass();
$caller_1->e16 = new stdClass();

$caller_1->e1->q = new stdClass();
$caller_1->e2->q = new stdClass();
$caller_1->e3->q = new stdClass();
$caller_1->e4->q = new stdClass();
$caller_1->e5->q = new stdClass();
$caller_1->e6->q = new stdClass();
$caller_1->e7->q = new stdClass();
$caller_1->e8->q = new stdClass();
$caller_1->e9->q = new stdClass();
$caller_1->e10->q = new stdClass();
$caller_1->e11->q = new stdClass();
$caller_1->e12->q = new stdClass();
$caller_1->e13->q = new stdClass();
$caller_1->e14->q = new stdClass();
$caller_1->e15->q = new stdClass();
$caller_1->e16->q = new stdClass();

$caller_1->e1->aw = new stdClass();
$caller_1->e2->aw = new stdClass();
$caller_1->e3->aw = new stdClass();
$caller_1->e4->aw = new stdClass();
$caller_1->e5->aw = new stdClass();
$caller_1->e6->aw = new stdClass();
$caller_1->e7->aw = new stdClass();
$caller_1->e8->aw = new stdClass();
$caller_1->e9->aw = new stdClass();
$caller_1->e10->aw = new stdClass();
$caller_1->e11->aw = new stdClass();
$caller_1->e12->aw = new stdClass();
$caller_1->e13->aw = new stdClass();
$caller_1->e14->aw = new stdClass();
$caller_1->e15->aw = new stdClass();
$caller_1->e16->aw = new stdClass();

$caller_1->e1->aw = new stdClass();
$caller_1->e2->aw = new stdClass();
$caller_1->e3->aw = new stdClass();
$caller_1->e4->aw = new stdClass();
$caller_1->e5->aw = new stdClass();
$caller_1->e6->aw = new stdClass();
$caller_1->e7->aw = new stdClass();
$caller_1->e8->aw = new stdClass();
$caller_1->e9->aw = new stdClass();
$caller_1->e10->aw = new stdClass();
$caller_1->e11->aw = new stdClass();
$caller_1->e12->aw = new stdClass();
$caller_1->e13->aw = new stdClass();
$caller_1->e14->aw = new stdClass();
$caller_1->e15->aw = new stdClass();
$caller_1->e16->aw = new stdClass();

$caller_1->e1->n = "1";
$caller_1->e2->n = "2";
$caller_1->e3->n = "3";
$caller_1->e4->n = "4";
$caller_1->e5->n = "5";
$caller_1->e6->n = "6";
$caller_1->e7->n = "7";
$caller_1->e8->n = "8";
$caller_1->e9->n = "9";
$caller_1->e10->n = "10";
$caller_1->e11->n = "11";
$caller_1->e12->n = "12";
$caller_1->e13->n = "13";
$caller_1->e14->n = "14";
$caller_1->e15->n = "15";
$caller_1->e16->n = "16";

$caller_1->e1->q->e1 = "Give 3 terms often used to refer to 'Third World' nations.";
$caller_1->e2->q->e1 = "Give a brief description of the old international division of labour.";
$caller_1->e3->q->e1 = " Describe the trade imbalance which resulted from a devaluation of raw materials and resources.";
$caller_1->e4->q->e1 = "What was the major change of focus represented by the new international division of labour?";
$caller_1->e5->q->e1 = "What were the main reasons for this change of focus?";
$caller_1->e6->q->e1 = "Which types of industries were typically relocated?";
$caller_1->e7->q->e1 = "Give examples of incentives offered by 'Third World' governments to encourage foreign investment.";
$caller_1->e8->q->e1 = "Explain briefly the 'gender division of labour'.";
$caller_1->e9->q->e1 = "What are the three clear roles covered by the gender division of labour? Give examples of duties included in each area.";
$caller_1->e10->q->e1 = "In which of the above areas were women involved?";
$caller_1->e10->q->e2 = "And men?";
$caller_1->e11->q->e1 = "What was the basic difference between the jobs performed by men and women in those areas in which both men and women were involved?";
$caller_1->e12->q->e1 = "What reasons are sometimes given for the predominance of women in the garment and electronics industries?";
$caller_1->e13->q->e1 = "Explain the term 'informal sector'.";
$caller_1->e14->q->e1 = "Explain the term 'lipstick money'.";
$caller_1->e15->q->e1 = "Why might a 'Third World' family choose to send its daughters out to work in the exportorientated industries instead of its sons?";
$caller_1->e16->q->e1 = "Briefly explain 'the final irony...' referred to towards the end of the talk.";

$caller_1->e1->aw->i = "Developing nations";
$caller_1->e1->aw->ii = "Less developed nations";
$caller_1->e1->aw->iii = "Under-developed nations";
$caller_1->e2->aw->i = "Third World supplied raw materials and resources to First World, who processed the raw materials for export";
$caller_1->e3->aw->i = "Third World ended up paying more for the imports from First World than the money they received for their own raw materials exports";
$caller_1->e4->aw->i = "The relocation of factories from First World to Third World";
$caller_1->e5->aw->i = "Costs of processing and manufacturing in developed countries increased. Third World is labour intensive and labour costs are lower";
$caller_1->e6->aw->i = "Light industries, e.g. garments and electronics";
$caller_1->e7->aw->i = "Large tax-free thresholds and heavily subsidised accommodation";
$caller_1->e8->aw->i = "A socially constructed definition of the different roles and responsibilities ascribed to men + women";
$caller_1->e9->aw->i = "Reproductive e.g. childbirth, subsistence crops, taking care of family";
$caller_1->e9->aw->ii = "Productive e.g. growing cash crops";
$caller_1->e9->aw->iii = "Community management e.g. 1.politics, leadership, religion, upholding tradition (men) 2.health care, education, clean water (women)";
$caller_1->e10->aw->i = "Women: reproductive + community management";
$caller_1->e10->aw->ii = "Men: productive + community management";
$caller_1->e11->aw->i = "A different perception of the value of the respective work carried out by men and women: men's activities seen as more important. Men's work paid; women's work generally unpaid";
$caller_1->e12->aw->i = "Women are pre-skilled in this type of work. They have nimble fingers for delicate work. Such work can be done in the informal sector";
$caller_1->e13->aw->i = "Informal sector = tendering out work to be done at home, not requiring expensive machinery or formal workplace conditions";
$caller_1->e14->aw->i = "Women were regarded as 'secondary' income earners i.e. their income supplemented the income earned by the men. So women's wages could be used for luxuries in life e.g. lipstick, rather than the basic necessities";
$caller_1->e15->aw->i = "Daughters are not seen as good investments for the future well-being of the parents since they get married and leave home. Sons take care of the parents even after marriage so they need better education than daughters to improve their wage-earning capabilities";
$caller_1->e16->aw->i = "The people most affected by relocation of factories from First to Third World are First World women who lose their jobs because of the relocation. These unemployed women then become the target of consumer marketing for products manufactured in the Third World";

@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <h4 class="mt-0">{{$pageTitle['sub_menu_name']}}</h4>
            <div class="row">
                <div class="col-lg-12">
                    <table class="w-100">
                        @foreach($caller_1 as $index => $caller_1)
                        <tr>
                            <td style="width: 25px;" class="pt-3">{{$caller_1->n}}.</td>
                            <td colspan="2" class="pt-3">
                                @foreach($caller_1->q as $index2 => $q)
                                {{$q}}
                                <br>
                                @endforeach
                            </td>
                        </tr>
                        @foreach($caller_1->aw as $index3 => $aw)
                        <tr>
                            <td></td>
                            <td style="width: 65px; vertical-align: middle;"><b>Answer: </b></td>
                            <td class="py-1">
                                <input type="text" class="w-75 form-control q-text" index="{{$index}}" show-aw="caller_1-{{$index}}-{{$index3}}" aw="{{$aw}}">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="width: 65px;"></td>
                            <td class="aw text-danger caller_1-{{$index}}-{{$index3}}">
                                {{$aw}}
                            </td>
                        </tr>
                        @endforeach
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
    $('#check-answer').on('click', () => {
        $('.q-text').each((idx, item) => {
            let aw = $(item).val().split("E.G.")[0]
            let aw2 = $(item).attr('aw').split("e.g.")[0]
            if (aw.trim().toUpperCase() == aw2.trim().toUpperCase())
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