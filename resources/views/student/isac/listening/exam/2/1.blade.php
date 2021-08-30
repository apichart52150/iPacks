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



@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <h4 class="mt-0">{{$pageTitle['sub_menu_name']}}</h4>
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="font-italic">Caller 1</h4>
                    <h5>Circle the numbers you hear: </h5>
                    <div class="row">
                        @foreach($caller_1 as $caller_1)
                        <div class="col-md-4">
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
                        </div>
                        @endforeach
                    </div>
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