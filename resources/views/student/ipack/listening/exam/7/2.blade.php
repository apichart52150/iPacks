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
        min-width: 200px;
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

$Q11_17 = new stdClass();
$Q11_17->e1 = new stdClass();
$Q11_17->e2 = new stdClass();
$Q11_17->e3 = new stdClass();
$Q11_17->e4 = new stdClass();
$Q11_17->e5 = new stdClass();

$Q11_17->e1->q = "(11) ___";
$Q11_17->e2->q = "Late 1990s";
$Q11_17->e3->q = "(14) ___";
$Q11_17->e4->q = "2010";
$Q11_17->e5->q = "Today";

$Q11_17->e1->q2 = "6";
$Q11_17->e2->q2 = "(13) ___";
$Q11_17->e3->q2 = "Over 50";
$Q11_17->e4->q2 = "100";
$Q11_17->e5->q2 = "(17) ___";

$Q11_17->e1->q3 = "Huddersfield";
$Q11_17->e2->q3 = "North of England";
$Q11_17->e3->q3 = "Scotland";
$Q11_17->e4->q3 = "(16) ___";
$Q11_17->e5->q3 = "UK and EU";

$Q11_17->e1->q4 = "(12) ___";
$Q11_17->e2->q4 = "Ladies’ fashion garments";
$Q11_17->e3->q4 = "Ladies’ fashion garments and (15) ___";
$Q11_17->e4->q4 = "Smart phones";
$Q11_17->e5->q4 = "Mobile phones and accessories";

$Q11_17->e1->aw = "1973";
$Q11_17->e2->aw = "";
$Q11_17->e3->aw = "2001";
$Q11_17->e4->aw = "";
$Q11_17->e5->aw = "";

$Q11_17->e1->aw2 = "";
$Q11_17->e2->aw2 = "22/twenty-two";
$Q11_17->e3->aw2 = "";
$Q11_17->e4->aw2 = "";
$Q11_17->e5->aw2 = "almost 200";

$Q11_17->e1->aw3 = "";
$Q11_17->e2->aw3 = "";
$Q11_17->e3->aw3 = "";
$Q11_17->e4->aw3 = "Germany";
$Q11_17->e5->aw3 = "";

$Q11_17->e1->aw4 = "Textiles";
$Q11_17->e2->aw4 = "";
$Q11_17->e3->aw4 = "Perfumes";
$Q11_17->e4->aw4 = "";
$Q11_17->e5->aw4 = "";


$Q18_20 = new stdClass();
$Q18_20->e1 = new stdClass();
$Q18_20->e2 = new stdClass();
$Q18_20->e3 = new stdClass();

$Q18_20->e1->n = "18";
$Q18_20->e2->n = "19";
$Q18_20->e3->n = "20";

$Q18_20->e1->q = "Where does the company hope to develop its business operations?";
$Q18_20->e2->q = "What is the reason for the decision to invest there?";
$Q18_20->e3->q = "How many people does the company currently employ?";

$Q18_20->e1->aw = "D. South-East Asia";
$Q18_20->e2->aw = "D. Because many people now have money to buy luxury items";
$Q18_20->e3->aw = "C. 400";

$Q18_20->e1->choice = new stdClass;
$Q18_20->e2->choice = new stdClass;
$Q18_20->e3->choice = new stdClass;

$Q18_20->e1->choice->a = "A. North Asia";
$Q18_20->e1->choice->b = "B. Japan";
$Q18_20->e1->choice->c = "C. Korea";
$Q18_20->e1->choice->d = "D. South-East Asia";
$Q18_20->e2->choice->a = "A. Because competition is fierce there";
$Q18_20->e2->choice->b = "B. Because the population is increasing there";
$Q18_20->e2->choice->c = "C. Because there are plenty of mineral resources available";
$Q18_20->e2->choice->d = "D. Because many people now have money to buy luxury items";
$Q18_20->e3->choice->a = "A. 150";
$Q18_20->e3->choice->b = "B. 250";
$Q18_20->e3->choice->c = "C. 400";
$Q18_20->e3->choice->d = "D. 800";

@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['sub_menu_name']}}
            </p>
            <div class="row">
                <div class="col-lg-12">
                    Write <b>NO MORE THAN TWO WORDS AND/OR A DATE OR A NUMBER</b> for each answer..
                    <div class="w-100 d-flex justify-content-center">
                        <table class="text-center table w-100">
                            <tr>
                                <th>Date</th>
                                <th>No. of Outlets</th>
                                <th>Where?</th>
                                <th>Specialised in</th>
                            </tr>
                            @foreach($Q11_17 as $index => $Q11_17)
                            <tr>
                                <td class="Q11_17-{{$index}}-1 Q11_17" show-aw="show_aw_Q11_17-{{$index}}-1" aw="{{$Q11_17->aw}}" replace="Q11_17-{{$index}}-1">{{$Q11_17->q}}</td>
                                <td class="Q11_17-{{$index}}-2 Q11_17" show-aw="show_aw_Q11_17-{{$index}}-2" aw="{{$Q11_17->aw2}}" replace="Q11_17-{{$index}}-2">{{$Q11_17->q2}}</td>
                                <td class="Q11_17-{{$index}}-3 Q11_17" show-aw="show_aw_Q11_17-{{$index}}-3" aw="{{$Q11_17->aw3}}" replace="Q11_17-{{$index}}-3">{{$Q11_17->q3}}</td>
                                <td class="Q11_17-{{$index}}-4 Q11_17" show-aw="show_aw_Q11_17-{{$index}}-4" aw="{{$Q11_17->aw4}}" replace="Q11_17-{{$index}}-4">{{$Q11_17->q4}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="col-lg-12">
                    Choose the best answer from the given options. Write <b>A</b>, <b>B</b>, <b>C</b> or <b>D</b> for each answer.
                    <div class="w-100 d-flex justify-content-center">
                        <table class="w-100">
                            @foreach($Q18_20 as $index => $Q18_20)
                            <tr>
                                <td style="width: 20px;">{{$Q18_20->n}}. </td>
                                <td colspan="2">{{$Q18_20->q}}</td>
                            </tr>
                            @foreach($Q18_20->choice as $index2 => $choice)
                            <tr>
                                <td></td>
                                <td style="width: 20px;">
                                    <div class="form-check">
                                        <input class="form-check-input event-click position-static q-check Q18_20-{{$index}}-{{$index2}}" type="radio" name="Q18_20-{{$index}}" show-aw="Q18_20-{{$index}}" aw="{{$Q18_20->aw}}" value="{{$choice}}">
                                    </div>
                                </td>
                                <td>
                            <span class="event-click" onclick="checkRadio('Q18_20-{{$index}}-{{$index2}}')">{{$choice}}</span>
                            </td>
                            </tr>
                            @endforeach
                            <tr class="aw">
                                <td></td>
                                <td colspan="2" class="aw Q18_20-{{$index}} text-danger">{{$Q18_20->aw}}</td>
                            </tr>
                            @endforeach
                        </table>
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
    $('.Q11_17').each((idx, item) => {
        let text = $(item).html()
        let input = '<div class="input-con input-con2 py-1">' +
            '<input class="q-val form-control" show-aw="' + $(item).attr('show-aw') + '" aw="' + $(item).attr('aw') + '">' +
            '</div>' +
            '<span class="px-2 aw text-danger ' + $(item).attr('show-aw') + '">' + $(item).attr('aw') + '</span>'
        text = text.replace("___", input)
        $(item).html(text)
    })

    $('#check-answer').on('click', () => {
        $('#check-answer').prop('disabled',true)
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