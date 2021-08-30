<style>
    .mark,
    mark {
        padding: .2em;
        background-color: #ffc107;
    }

    #show-answer {
        display: none;
    }

    .box-shadow {
        box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.2);
    }

    .aw {
        display: none;
    }

    .input-con {
        display: inline-block;
        position: relative;
    }

    .input-con2 {
        width: 100px;
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

    .input-container {
        position: relative;
        height: 40px;
        width: 80px;
        margin: 0;
    }

    .radio-button {
        opacity: 0;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        margin: 0;
        cursor: pointer;
    }

    .radio-tile {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
        border: 2px solid #079ad9;
        border-radius: 5px;
        padding: 1rem;
        transition: transform 300ms ease;
    }

    .icon svg {
        fill: #079ad9;
        width: 3rem;
        height: 3rem;
    }

    .radio-tile-label {
        text-align: center;
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #079ad9;
    }

    .radio-button:checked+.radio-tile {
        background-color: #079ad9;
        border: 2px solid #079ad9;
        color: white;
        transform: scale(1.1, 1.1);
    }

    .icon svg {
        fill: white;
        background-color: #079ad9;
    }

    .radio-tile-label {
        color: white;
        background-color: #079ad9;
    }
</style>
@php

$caller_1 = new stdClass();
$caller_1->a = new stdClass();
$caller_1->a->q = "A";
$caller_1->a->aw = "13";
$caller_1->a->choice = ["13","30"];
$caller_1->b = new stdClass();
$caller_1->b->q = "B";
$caller_1->b->aw = "230";
$caller_1->b->choice = ["213","230"];
$caller_1->c = new stdClass();
$caller_1->c->q = "C";
$caller_1->c->aw = "50";
$caller_1->c->choice = ["15","50"];
$caller_1->d = new stdClass();
$caller_1->d->q = "D";
$caller_1->d->aw = "19,000";
$caller_1->d->choice = ["19,000","90,000"];
$caller_1->e = new stdClass();
$caller_1->e->q = "E";
$caller_1->e->aw = "218";
$caller_1->e->choice = ["280","218"];
$caller_1->f = new stdClass();
$caller_1->f->q = "F";
$caller_1->f->aw = "6,360";
$caller_1->f->choice = ["6,316","6,360"];
$caller_1->g = new stdClass();
$caller_1->g->q = "G";
$caller_1->g->aw = "323";
$caller_1->g->choice = ["323","333"];
$caller_1->h = new stdClass();
$caller_1->h->q = "H";
$caller_1->h->aw = "840";
$caller_1->h->choice = ["814","840"];
$caller_1->i = new stdClass();
$caller_1->i->q = "I";
$caller_1->i->aw = "1,117";
$caller_1->i->choice = ["1,170","1,117"];
$caller_1->j = new stdClass();
$caller_1->j->q = "J";
$caller_1->j->aw = "80.8";
$caller_1->j->choice = ["18.8","80.8"];


$caller_2 = new stdClass();
$caller_2->e1 = new stdClass();
$caller_2->e1->q = "Poland";
$caller_2->e1->aw = "4.01";
$caller_2->e2 = new stdClass();
$caller_2->e2->q = "Belgium";
$caller_2->e2->aw = "3.31";
$caller_2->e3 = new stdClass();
$caller_2->e3->q = "Finland";
$caller_2->e3->aw = "0.6";
$caller_2->e4 = new stdClass();
$caller_2->e4->q = "Britain";
$caller_2->e4->aw = "2.61";
$caller_2->e5 = new stdClass();
$caller_2->e5->q = "Austria";
$caller_2->e5->aw = "1.93";
$caller_2->e6 = new stdClass();
$caller_2->e6->q = "Spain";
$caller_2->e6->aw = "1.17";
$caller_2->e7 = new stdClass();
$caller_2->e7->q = "Portugal";
$caller_2->e7->aw = "0.73";
$caller_2->e8 = new stdClass();
$caller_2->e8->q = "Germany";
$caller_2->e8->aw = "7.32";
$caller_2->e9 = new stdClass();
$caller_2->e9->q = "Netherlands";
$caller_2->e9->aw = "2.98";


$caller_3 = new stdClass();
$caller_3->e1 = new stdClass();
$caller_3->e1->q = "1. In ... the area yielded an average ... tons per acre resulting in an increase of almost ... over the figures for ... .";
$caller_3->e1->aw = "1989;***1.2***tons;***12%;***1988";
$caller_3->e2 = new stdClass();
$caller_3->e2->q = "2. In ..., ... Australian children were living in households whose income was less than ... per annum.";
$caller_3->e2->aw = "1986;***552,000;***$12,500***p.a.";
$caller_3->e3 = new stdClass();
$caller_3->e3->q = "3. A study of ... countries around the world in ... showed that women working in the manufacturing industry earned an average of only ... for every dollar earned by a man.";
$caller_3->e3->aw = "24;***1982;***73***cents";
$caller_3->e4 = new stdClass();
$caller_3->e4->q = "4. In Bangladesh in ... , ... of the population were living in the cities. By ... , this figure had risen to ..., an average annual increase of ... . ";
$caller_3->e4->aw = "1960;***5%;***1986;***16%;***7.8%";
$caller_3->e5 = new stdClass();
$caller_3->e5->q = "5. In a recent survey held in Adelaide among a group of ... schoolchildren, the following figures were noted: ... of the children owned bicycles; the families of ... of the children had boats; more than ... had a TV set in their own room, while ... of them had access to a computer. The average pocket money received by each child was a staggering ... per week.";
$caller_3->e5->aw = "28;***90%;***12;***50%;***three-quarters;***$80";


$caller_4 = new stdClass();
$caller_4->e1 = new stdClass();
$caller_4->e1->q = "Population (m)";
$caller_4->e1->aw = ["16.5 m.","3.7 m."];
$caller_4->e2 = new stdClass();
$caller_4->e2->q = "GNP per capita ("."$"."US)";
$caller_4->e2->aw = ["US$11,910","US$ 690"];
$caller_4->e3 = new stdClass();
$caller_4->e3->q = "Life expectancy";
$caller_4->e3->aw = ["76 years","54 years"];
$caller_4->e4 = new stdClass();
$caller_4->e4->q = "Literacy rate: m.";
$caller_4->e4->aw = ["100% ","55%"];
$caller_4->e5 = new stdClass();
$caller_4->e5->q = "f.";
$caller_4->e5->aw = ["100%","35%"];
$caller_4->e6 = new stdClass();
$caller_4->e6->q = "Kilojoules per day (% of total required)";
$caller_4->e6->aw = ["114%","79%"];

@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['sub_menu_name']}}
            </p>
            <div class="row">
                <div class="col-lg-6">
                    <h5>Circle the numbers you hear: </h5>
                    @foreach($caller_1 as $caller_1)
                    <div class="form-group d-flex align-items-center">
                        <span class="pr-3">{{$caller_1->q}}.</span>

                        @foreach($caller_1->choice as $choice)
                        <div class="pr-1 input-container">
                            <input id="walk" class="radio-button caller_1" type="radio" name="radio1-{{$caller_1->q}}" aw="{{$caller_1->aw}}" show-aw="caller_1-{{$caller_1->q}}" value="{{$choice}}" />
                            <div class="radio-tile">
                                <div class="icon walk-icon">
                                    {{$choice}}
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <span class="pl-2 aw caller_1-{{$caller_1->q}} text-danger">{{$caller_1->aw}}</span>

                    </div>
                    @endforeach
                </div>
                <div class="col-lg-6">
                    <h5>Listen to the information and complete the following chart about acid rain in Europe: </h5>
                    @foreach($caller_2 as $caller_2)
                    <div class="row">
                        <div class="py-1 col-md-4">
                            <span class="">{{$caller_2->q}}.</span>
                        </div>
                        <div class="py-1 col-md-4">
                            <input type="text" class="form-control caller_2" aw="{{$caller_2->aw}}" show-aw="caller_2-{{$caller_2->q}}" autocomplete="off">
                        </div>
                        <div class="py-1 col-md-4">
                            <span class="pl-2 aw caller_2-{{$caller_2->q}} text-danger">{{$caller_2->aw}}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-lg-12">
                    <h5>Listen to the tape and complete the following sentences: </h5>
                    @foreach($caller_3 as $index => $caller_3)
                    <p class="pr-3 q-caller-3 q-caller-3-{{$index}}" q="caller-3-{{$index}}" aw="{{$caller_3->aw}}">{{$caller_3->q}}</p>
                    @endforeach
                </div>
                <div class="col-lg-12">
                    <h5>Listen to the tape and then complete the table below: </h5>
                    <table>
                        <tr class="text-center">
                            <td></td>
                            <td>Australia</td>
                            <td></td>
                            <td>PNG</td>
                            <td></td>
                        </tr>
                        @foreach($caller_4 as $index => $caller_4)
                        <tr>
                            <td class="pr-3">{{$caller_4->q}}</td>

                            @foreach($caller_4->aw as $index2 => $aw)
                            <td>
                                <input type="text" class="form-control caller_4" aw="{{$aw}}" show-aw="caller_4-{{$index}}-{{$index2}}" autocomplete="off">
                            </td>
                            <td>
                                <span class="pl-2 px-0 aw caller_4-{{$index}}-{{$index2}} text-danger">{{$aw}}</span>
                            </td>
                            @endforeach
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
                <h4 class="modal-title text-white mx-auto">Activity 1 - Intro</h4>
            </div>
            <div class="modal-body text-center">
                <button id="sound-intro" class="btn btn-bordered-primary">Play Sound</button>
                <audio data-sound="sound-intro">
                    <source src="{{asset('public/isac_listening/'.$pageTitle['sub_menu_id'].'/'.$pageTitle['name_audio'])}}" type="audio/mp3">
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

<script>
    $('.q-caller-3').each((idx, item) => {
        let text = $(item).html()
        let new_text = $(item).html()
        let aw = $(item).attr('aw').split("***")
        for (let i = 0; i < text.split("...").length - 1; i++) {
            let input = '<div class="input-con input-con2 caller_3 pb-1 "><input type="text" class="input-text caller_3" aw="' + aw[i] + '" show-aw="caller_3-' + idx + '-' + i + '" autocomplete="off"></div>' +
                '<labal class="w-100 px-2 aw caller_3-' + idx + '-' + i + ' text-danger">' + aw[i] + '</labal>'
            new_text = new_text.replace("...", input)
        }
        $('.q-caller-3-e' + (idx + 1)).html(new_text)
    })

    $('#check-answer').on('click', () => {
        $('.caller_1:checked').each((idx, item) => {
            if ($(item).val() == $(item).attr('aw'))
                show_aw($(item).attr('show-aw'))
        })
        $('.caller_2').each((idx, item) => {
            if ($(item).val() == $(item).attr('aw'))
                show_aw($(item).attr('show-aw'))
        })
        $('.caller_3').each((idx, item) => {
            if ($(item).val() == $(item).attr('aw'))
                show_aw($(item).attr('show-aw'))
        })
        $('.caller_4').each((idx, item) => {
            if ($(item).val() == $(item).attr('aw').toUpperCase())
                show_aw($(item).attr('show-aw'))
        })
        $('.aw').removeClass('aw')
    })

    function show_aw(aw) {
        $('.' + aw).addClass('text-success')
        $('.' + aw).removeClass('text-danger')
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
</script>

@stop