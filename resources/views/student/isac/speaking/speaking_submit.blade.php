@extends('layouts.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10 col-xl-6">
        
        <div class="card">
            <div class="card-header bg-primary text-center p-2">
                <h3 class="text-white m-0">{{ $topics['title'] }}</h3>
            </div>
            <div class="card-body text-center p-2">
                <form action="{{ route('update_score_course') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="lastRow" value="{{ auth('web')->user()->std_id }}">
                    <div class="form-group row justify-content-center">
                        <label class="col-form-label">Expected Score</label>
                        <div class="col-auto">
                            <input type="text" name="expected_score" class="form-control" placeholder="Expected Score" required>
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <label class="col-form-label">Current Course</label>
                        <div class="col-auto">
                            <select name="current_course" class="form-control" required>
                                <option value="">Select Course</option>
                                <option value="-">-</option>
                                <option value="Foundation for IELTS">Foundation for IELTS</option>
                                <option value="Foundation Extension">Foundation Extension</option>
                                <option value="Key Skills">Key Skills</option>
                                <option value="Key Skills Extension">Key Skills Extension</option>
                                <option value="Speak Write">Speak Write</option>
                                <option value="IELTS Extension">IELTS Extension</option>
                            </select>
                        </div>
                    </div>
                    <input type="submit" value="Submit" class="btn btn-primary" disabled>
                </form>

                <div class="text-left text-dark mt-3">
                    <p>After you submit your test, an experienced IELTS teacher will listen to your recording and provide an NC Band Score as well as some feedback on how you can improve. </p>

                    <p class="mb-0">Please check the <b><i>Status</i></b> tab to track your test, which will be returned to you in 1 – 6 days.</p>
                </div>
            </div>
        </div>

    </div>
</div>

<div id="modal" class="modal fade-scale" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h4 class="text-center">Click to continue</h4>

                <button class="btn btn-success btn-sm mt-3" id="play">Continue</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<audio id="sound3">
    <source src="{{ asset('public/audio/audio_03.m4a') }}" type="audio/mpeg">
    <source src="{{ asset('public/audio/audio_03.m4a') }}" type="audio/mp4">
</audio>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('#sound3').on('ended', function() {
            this.currentTime = 0;

            $('input[type="submit"]').attr('disabled', false);
        })

        $('#modal').modal({
                backdrop: 'static',
                keyboard: false
            })
        $('#modal').modal('show');
    })

    document.getElementById('play').addEventListener('click', () => {
        let audio = document.getElementById('sound3');
        audio.play();
        $('#modal').modal('hide');
    });
        

    localStorage.clear();
</script>
@stop