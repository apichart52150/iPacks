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
                    <span>If your listening skills are not as well-developed as you might wish, and you have difficulty
                        understanding lectures and taking notes, there are one or two things you can do to prepare for a
                        listening activity. </span>
                    <table class="w-100 py-2">
                        <tr>
                            <td>1.</td>
                            <td colspan="2">Assuming you know the title or topic of the lecture, you can predict the sort of vocabulary
                                which you might expect to hear in the lecture.
                                For example, imagine you are going to hear a talk entitled:
                                <b>'Alcohol Abuse'</b>
                                - the first thing you can do is <b>brainstorm</b> the topic. Write down how much you already know
                                about the topic.
                            </td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td colspan="2">Take a piece of paper and write down the <b>content words</b> from the title: </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2" class="text-center">
                                <b>risks - alcohol - abuse</b>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2">Now, write a list of words or phrases which you associate with these words.
                                You could write synonyms
                                <br>
                                e.g. <b>risks</b> = dangers, hazards....
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2">You could write words which naturally concern the topic: </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>e.g.</td>
                            <td><b>alcohol:</b> drink, consume, consumption, intake.....
                                <br>
                                <b>abuse:</b> misuse, excess, drunkenness,............
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td colspan="2"> Look at the whole title and try to predict the kind of information associated with the topic:</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2" class="text-center"><b>The Risks of Alcohol Abuse</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><b>Risks:</b></td>
                            <td>diseases such as .............................................................................
                                <br>
                                emotional problems such as...........................................................
                                <br>
                                financial problems...........................................................................
                                <br>
                                accidents..........................................................................................
                                <br>
                                and so on……………………………………………………………………………………..
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td colspan="2"> When you've done this there are other things you can do if you wish:</td>
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
                            <td>you can also take a cassette recorder into the lecture
                                (provided the lecturer doesn't mind being recorded).</td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-12">
                    <h5 class="mt-3 pb-2">Now, listen to the lecture The Risks of Alcohol Abuse. Write a summary of the lecture in approximately 150 words.</h5>
                    <textarea name="" class="form-control w-100" style="resize: none;" id="" cols="30" rows="10"></textarea>
                    <h5 class="mt-3 aw text-success">Summary of lecture (possible answer) </h5>
                    <span class="aw text-success">
                        A lot of research has been conducted into alcoholism but not much into social drinking since social
                        drinking is harder to define. There are many physiological, psychological and sociological problems
                        associated with alcohol abuse. Alcohol affects all parts of the body and its damaging effects are only
                        partially reversible. A person who drinks large amounts of alcohol in a short time is at greater risk than
                        someone who drinks the same amount over a longer period of time. There are many serious diseases
                        which affect the alcoholic. Pregnant women who consume alcohol also put the unborn baby at risk.
                        Although alcohol can create a sense of happiness, it also causes depression and a loss of self-esteem. It
                        can lead to family breakdowns and unemployment. It is also a major cause of industrial and road
                        accidents. Because of all these problems, we should all be concerned. Perhaps greater control is
                        needed with regard to the availability of alcohol.
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