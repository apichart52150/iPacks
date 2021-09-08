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
        border: 2px dashed #ccc;
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
        grid-template-columns: repeat(2, 1fr);
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

$caller_2 = new stdClass();
$caller_2->e1 = new stdClass();
$caller_2->e2 = new stdClass();
$caller_2->e3 = new stdClass();
$caller_2->e4 = new stdClass();

$caller_2->e1->n = "2.1";
$caller_2->e2->n = "2.2";
$caller_2->e3->n = "2.3";
$caller_2->e4->n = "2.4";

$caller_2->e1->q = "What were the problems experienced by the wealthier nations in the 1960s? ";
$caller_2->e2->q = "What were the problems faced by the poorer nations at that time? ";
$caller_2->e3->q = "The New International Division of Labour (NIDL) can be defined as: ";
$caller_2->e4->q = "Complete the list of elements in the auto industry production chain: ";

$caller_2->e1->aw = new stdClass();
$caller_2->e2->aw = new stdClass();
$caller_2->e3->aw = new stdClass();
$caller_2->e4->aw = new stdClass();

$caller_2->e1->aw->i = new stdClass();
$caller_2->e1->aw->ii = new stdClass();
$caller_2->e1->aw->iii = new stdClass();
$caller_2->e1->aw->iv = new stdClass();
$caller_2->e1->aw->v = new stdClass();
$caller_2->e2->aw->i = new stdClass();
$caller_2->e2->aw->ii = new stdClass();
$caller_2->e3->aw->i = new stdClass();
$caller_2->e3->aw->ii = new stdClass();
$caller_2->e3->aw->iii = new stdClass();
$caller_2->e4->aw->i = new stdClass();
$caller_2->e4->aw->ii = new stdClass();
$caller_2->e4->aw->iii = new stdClass();
$caller_2->e4->aw->iv = new stdClass();
$caller_2->e4->aw->v = new stdClass();
$caller_2->e4->aw->vi = new stdClass();
$caller_2->e4->aw->vii = new stdClass();
$caller_2->e4->aw->viii = new stdClass();

$caller_2->e1->aw->i->q= "...";
$caller_2->e1->aw->i->aw = "structural unemployment";
$caller_2->e1->aw->ii->q= "...";
$caller_2->e1->aw->ii->aw = "under-utilized plant capacity";
$caller_2->e1->aw->iii->q= "...";
$caller_2->e1->aw->iii->aw = "stagnating domestic investment";
$caller_2->e1->aw->iv->q= "...";
$caller_2->e1->aw->iv->aw = "capital flight abroad";
$caller_2->e1->aw->v->q= "...";
$caller_2->e1->aw->v->aw = "fiscal crises of the state";
$caller_2->e2->aw->i->q= "...";
$caller_2->e2->aw->i->aw = "worsening rural poverty";
$caller_2->e2->aw->ii->q= "...";
$caller_2->e2->aw->ii->aw = "expanding urban slums";
$caller_2->e3->aw->i->q= "the relocation of ...";
$caller_2->e3->aw->i->aw = "industrial production";
$caller_2->e3->aw->ii->q= "from ...";
$caller_2->e3->aw->ii->aw = " high-wage sites in wealthier nations";
$caller_2->e3->aw->iii->q= "to ...";
$caller_2->e3->aw->iii->aw = "low-wage sites in poorer ones";
$caller_2->e4->aw->i->q= "raw materials";
$caller_2->e4->aw->i->aw = "";
$caller_2->e4->aw->ii->q= "... (15,000 in all)";
$caller_2->e4->aw->ii->aw = "production of parts";
$caller_2->e4->aw->iii->q= "assembly";
$caller_2->e4->aw->iii->aw = "";
$caller_2->e4->aw->iv->q= "...";
$caller_2->e4->aw->iv->aw = "distribution";
$caller_2->e4->aw->v->q= "design";
$caller_2->e4->aw->v->aw = "";
$caller_2->e4->aw->vi->q= "...";
$caller_2->e4->aw->vi->aw = "engineering";
$caller_2->e4->aw->vii->q= "...";
$caller_2->e4->aw->vii->aw = "finance";
$caller_2->e4->aw->viii->q= "control";
$caller_2->e4->aw->viii->aw = "";


$caller_2_5 = new stdClass();
$caller_2_5->e1 = new stdClass();
$caller_2_5->e2 = new stdClass();
$caller_2_5->e3 = new stdClass();
$caller_2_5->e4 = new stdClass();

$caller_2_5->e1->n = "1";
$caller_2_5->e2->n = "2";
$caller_2_5->e3->n = "3";
$caller_2_5->e4->n = "4";

$caller_2_5->e1->c = new stdClass();
$caller_2_5->e2->c = new stdClass();
$caller_2_5->e3->c = new stdClass();
$caller_2_5->e4->c = new stdClass();

$caller_2_5->e1->c->i = new stdClass();
$caller_2_5->e1->c->ii = new stdClass();
$caller_2_5->e1->c->iii = new stdClass();
$caller_2_5->e2->c->i = new stdClass();
$caller_2_5->e2->c->ii = new stdClass();
$caller_2_5->e2->c->iii = new stdClass();
$caller_2_5->e3->c->i = new stdClass();
$caller_2_5->e3->c->ii = new stdClass();
$caller_2_5->e3->c->iii = new stdClass();
$caller_2_5->e4->c->i = new stdClass();
$caller_2_5->e4->c->ii = new stdClass();
$caller_2_5->e4->c->iii = new stdClass();

$caller_2_5->e1->c->i->q = "Major mechanicals";
$caller_2_5->e1->c->ii->q = "...";
$caller_2_5->e1->c->iii->q = "...";
$caller_2_5->e2->c->i->q = "...";
$caller_2_5->e2->c->ii->q = "...";
$caller_2_5->e2->c->iii->q = "e.g. Bendix, Bosch Nippondenso";
$caller_2_5->e3->c->i->q = "...";
$caller_2_5->e3->c->ii->q = "seats, dashboards, major stampings";
$caller_2_5->e3->c->iii->q = "...";
$caller_2_5->e4->c->i->q = "...";
$caller_2_5->e4->c->ii->q = "fasteners, trim, glass, tyres";
$caller_2_5->e4->c->iii->q = "...";

$caller_2_5->e1->c->i->aw = "";
$caller_2_5->e1->c->ii->aw = "Engine + drive chain";
$caller_2_5->e1->c->iii->aw = "Major assemblers";
$caller_2_5->e2->c->i->aw = "vehicle systems";
$caller_2_5->e2->c->ii->aw = "Lighting, braking, suspension, steering + instrumentation";
$caller_2_5->e2->c->iii->aw = "";
$caller_2_5->e3->c->i->aw = "finished parts";
$caller_2_5->e3->c->ii->aw = "";
$caller_2_5->e3->c->iii->aw = "Major assemblers or in collaboration with suppliers";
$caller_2_5->e4->c->i->aw = "minor parts";
$caller_2_5->e4->c->ii->aw = "";
$caller_2_5->e4->c->iii->aw = "Outside suppliers";

$caller_2_5_choice = new stdClass();
$caller_2_5_choice->ch1 = "Major assemblers";
$caller_2_5_choice->ch2 = "finished parts";
$caller_2_5_choice->ch3 = "Lighting, braking, suspension, steering + instrumentation";
$caller_2_5_choice->ch4 = "Engine + drive chain";
$caller_2_5_choice->ch5 = "Major assemblers or in collaboration with suppliers";
$caller_2_5_choice->ch6 = "vehicle systems";
$caller_2_5_choice->ch7 = "Outside suppliers";
$caller_2_5_choice->ch8 = "minor parts";

@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <h4 class="mt-0">{{$pageTitle['sub_menu_name']}}</h4>
            <div class="row">
                <div class="col-lg-12">
                    <table class="w-100">
                        @foreach($caller_2 as $index => $caller_2)
                        <tr>
                            <td style="width: 30px;" class="pt-3">{{$caller_2->n}}.</td>
                            <td colspan="2" class="pt-3">
                                {{$caller_2->q}}
                            </td>
                        </tr>
                        @foreach($caller_2->aw as $index2 => $aw)
                        <tr>
                            <td></td>
                            @if($caller_2->n == "2.3")
                            <td colspan="2" class="q-dot" show-aw="caller_2-{{$index}}-{{$index2}}" aw="{{$aw->aw}}">{{$aw->q}}</td>
                            @else
                            <td style="width: 20px;vertical-align:middle;">{{$index2}}.</td>
                            <td class="q-dot" show-aw="caller_2-{{$index}}-{{$index2}}" aw="{{$aw->aw}}">{{$aw->q}}</td>
                            @endif
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2" class="text-danger caller_2-{{$index}}-{{$index2}} aw" show-aw="" aw="">{{$aw->aw}}</td>
                        </tr>
                        @endforeach
                        @endforeach
                        <tr>
                            <td class="pt-2">2.5</td>
                            <td colspan="2" class="pt-2">Complete the following table giving a more detailed description of this chain:</td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div class="row justify-content-center mb-2">
                                    <div class="col-md-12">
                                        <div class="border border-dark px-2 text-center">
                                            <div class="drag-container">
                                                <div class="d-grid grid-5" id="choices">
                                                    @foreach($caller_2_5_choice as $choice)
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
                                                <th class="text-center">Basic element </th>
                                                <th class="text-center">Example</th>
                                                <th class="text-center">Produced by...</th>
                                            </tr>
                                            @foreach($caller_2_5 as $index => $caller_2_5)
                                            <tr>
                                                @foreach($caller_2_5->c as $index2 => $c)
                                                <td class="q-dot-choice" show-aw="caller_2_5-{{$index}}-{{$index2}}" aw="{{$c->aw}}">
                                                    {{$c->q}}
                                                    <br>
                                                    <span class=" aw text-danger caller_2_5-{{$index}}-{{$index2}}">{{$c->aw}}</span>
                                                </td>
                                                @endforeach
                                            </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2.6</td>
                            <td colspan="2" class="pb-3">Write a summary of the talk in <b>about 100 - 150 words</b>.</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2"><textarea name="" class="w-100 form-control" style="resize: none;" id="" cols="30" rows="10"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2">
                                <h5 class="mt-3 aw text-success">Summary (possible answer) </h5>
                                <span class="aw text-success">
                                    As a response to global economic problems, the new international division of labour relocated
                                    manufacturing industries from high-wage sites in developed countries to low-wage sites in the
                                    Third World. The international car industry provides an example of this shift. Because of its size
                                    and importance, the car industry has been the prime mover in industrial reorganisation. The
                                    industry is highly complex, consisting of a number of manufacturing processes requiring coordination between major assemblers, suppliers, distributors and financing sources.
                                    <br>
                                    Since the 1970s, major changes have been effected, impacting not only on other industries
                                    involved in car production but also on whole communities and even national economies. The
                                    global reorganisation of the auto industry is a key concern for all parties and effective
                                    management of these changes has become a very important issue for many national
                                    governments.
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
        let input = '<div class="input-con py-1 w-75">' +
            '<input type="text" class="w-100 form-control q-text" show-aw="' + $(item).attr('show-aw') + '" aw="' + $(item).attr('aw') + '">' +
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
        $('#check-answer').prop('disabled',true)
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