<link rel="stylesheet" href="{{ asset('public/css/draggable.css') }}">
<style>
    table tr td {
        vertical-align: text-top;
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
            <h4 class="mt-0">{{$pageTitle['sub_menu_name']}}</h4>
            <div class="row">
                <div class="col-lg-12">
                    <h2>Planning for a Lecture </h2>
                    <span>If your listening skills are not as well-developed as you might wish and you have difficulty
                        understanding lectures and taking notes, there are one or two things you can do to prepare for a
                        listening activity. </span>
                    <table class="w-100 py-2">
                        <tr>
                            <td>1.</td>
                            <td colspan="2">Assuming you know the title or topic of the lecture, you can predict the sort of
                                vocabulary which you might expect to hear in the lecture.
                                For example, imagine you are going to hear a talk entitled:
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2" class="py-2"><b>'Tips for Business Travellers'</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2" class="py-2">- the first thing you can do is <b>brainstorm</b> the topic. Write down how much you already know
                                about the topic.</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td colspan="2">
                                Take a piece of paper and write down the <b>content words</b> from the title:
                                <br>
                                <b>tips - business - travellers</b>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2" class="py-2">
                                Now, write a list of words or phrases which you associate with these words.
                                You could write synonyms
                                <br>
                                e.g. <b>tips:</b> advice...recommendations...suggestions............
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2" class="py-2">
                                You could write words which naturally concern the topic:
                                <br>
                                e.g. <b>travellers:</b> trip...hotel...restaurant...accommodation..............
                            </td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td colspan="2">
                                Look at the whole title and try to predict the kind of information associated with the topic:
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-center py-2" colspan="2">
                                <b>Tips for Business Travellers </b>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="py-2">
                                <b>Tips: </b>
                            </td>
                            <td>
                                immunisation against.........................................
                                <br>
                                travel insurance..................................................
                                <br>
                                emergency contact numbers..............................
                                <br>
                                prophylactic drugs such as.................................
                                <br>
                                and so on……………………………………………………......
                            </td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td colspan="2">
                                When you've done this there are other things you can do if you wish:
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>*</td>
                            <td>discuss the topic with friends to broaden your scope of thinking.</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>*</td>
                            <td>use library resources to broaden your knowledge of the topic area.</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>*</td>
                            <td> you can also take a cassette recorder into the lecture (provided the lecturer doesn't mind being recorded). </td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-12">
                    <p class="pb-2">
                        6. Write a summary of the lecture in <b>approximately 150 words</b>
                                </p>
                    <textarea name="" class="form-control w-100" style="resize: none;" id="" cols="30" rows="10"></textarea>
                    <h5 class="mt-3 aw text-success">Summary of Lecture (possible answer) </h5>
                    <span class="aw text-success">
                        There are a number of risks facing the business traveller but these risks can be minimised by careful
                        planning. Although most people believe that hotel food is clean and safe, health experts believe the
                        food available at market stalls may be safer. Business travellers should always avoid local water
                        since many diseases are carried by water. Cholera is endemic in Asia. It is advisable not to travel to
                        areas affected by cholera.
                        <br>
                        Dengue fever and malaria are spread by mosquitos. Preventive measures are necessary even for
                        short stays. Hepatitis A is widespread. Travellers should avoid local water and raw food. Hepatitis B
                        is spread by body fluids. Vaccination is recommended for both. There is no vaccine available for the
                        AIDS virus. Strict precautions are necessary. Hookworm, a parasite, can be avoided by wearing shoes
                        on grass or soil.
                        <br>
                        Despite all the risks, travelling can be fun, especially if travellers follow some basic rules.
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
        $('.aw').removeClass('aw')
    })


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