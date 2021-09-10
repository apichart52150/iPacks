@extends('layouts.layout_admin_s')

@section('content')

<div class="card-box pt-0">
	<div class="row">
		<div class="col-md-6 card-body">
				
			<div class="card">
				<div class="card-header bg-primary text-white text-center">{{ $check['topic'] }}</div>
				<input type="hidden" name="std_id" value="{{ $check['std_id'] }}">
				<div class="card-body">
					<img src="{{ asset('public/topics') }}/{{ $check['img'] }}.jpg" alt="{{ $check['img'] }}" width="100%">
				</div>
			</div>
		</div>

		<div class="col-md-6 card-body">
			<div class="col-md-12">
				<div class="media mb-2 mt-1">
                    <img class="d-flex mr-2 rounded-circle avatar-sm" src="{{ asset('public/assets/images/user.png') }}" alt="Generic placeholder image">
                    <div class="media-body">
                        <span class="float-right font-weight-bold">{{ date('d-m-Y H:i', strtotime($check['created_at'])) }}</span>
                        <h6 class="m-0 font-15 text-primary">{{ $check['std_name'] }}</h6>
                        <small class="text-dark font-14"><b><u>Course</u></b> : {{ $check['coursename'] }} <b class="ml-1"><u>Teacher</u></b> : {{ $check['th_inClass'] }}</small>

                        <p class="text-dark">
                        	<span class="mr-2"><b><u>Expected Score</u></b> : {{ $check['expected_score'] }}</span>
                        	<span><b><u>Current Course</u></b> : {{ $check['current_course'] }}</span>
                        </p>
                    </div>
                </div>

				<h3>Play</h3>
				<audio class="w-100" preload="auto" controls="controls" controlsList="nodownload">
					<source src="{{ asset('public/file_record')}}/{{ $check['path'] }}" type="audio/wav">
				</audio>
				
				<div class="form-group mt-2 text-center mb-0">
					<a id="download" class="btn btn-primary btn-sm text-white text-center">Download</a>
				</div>

				<form action="{{ route('check_submit') }}" method="post" class="mt-2">
					{{ csrf_field() }}

					<input type="hidden" name="id" value="{{ $check['id'] }}">

					<div class="form-group">
						<label>NC Band Score</label>
						<input type="text" name="score" class="form-control" placeholder="Score" required>
					</div>

					<div class="form-group">
						<label>Fluency and coherence</label>
						<textarea name="fluency" class="form-control" placeholder="Fluency and coherence"></textarea>
					</div>

					<div class="form-group">
						<label>Lexical resource</label>
						<textarea name="lexical" class="form-control" placeholder="Lexical resource"></textarea>
					</div>

					<div class="form-group">
						<label>Grammatical range and accuracy</label>
						<textarea name="grammatical" class="form-control" placeholder="Grammatical range and accuracy"></textarea>
					</div>

					<div class="form-group">
						<label>Pronunciation</label>
						<textarea name="pronunciation" class="form-control" placeholder="Pronunciation"></textarea>
					</div>

					<div class="form-group text-right">
						<button type="submit" class="btn btn-success">SEND</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

@section('js')
<script>
	$('#download').on('click', loadToExternal);

	function loadToExternal() {

		var file = $('audio source').attr('src');
		var a = $(this);
		var filename = $('.card-header').text() + '_' + $('input[name="std_id"]').val();

		a.attr('href', file);
		a.attr('download', filename + '.mp3');
	}

</script>
@stop