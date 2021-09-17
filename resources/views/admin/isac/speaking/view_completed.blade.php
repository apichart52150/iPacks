@extends('layouts.layout_admin_s')

@section('content')

<div class="card-box pt-0">
	<div class="row justify-content-center">
		<div class="col-md-6 card-body">
				
			<div class="card">
				<div class="card-header bg-primary text-white text-center">{{ $check['topic'] }}</div>
				<input type="hidden" name="id" value="{{ $check['id']}}">
				<div class="card-body">
					<img src="{{ asset('public/topics') }}/{{ $check['img'] }}.jpg" alt="{{ $check['img'] }}" width="100%">
				</div>
			</div>
			
			<h3>Play</h3>
			<audio class="w-100" preload="auto" controls="controls" controlsList="nodownload">
				<source src="{{ asset('public/file_record')}}/{{ $check['path'] }}" type="audio/wav">
			</audio>
			
			<div class="form-group mt-2 text-center mb-0">
				<a id="download" class="btn btn-primary text-white text-center">Download</a>
			</div>
		</div>

		<div class="col-md-6 card-body">
			<div class="col-md-12">
				<div class="media mb-4 mt-1">
                    <img class="d-flex mr-2 rounded-circle avatar-sm" src="{{ asset('public/assets/images/user.png') }}" alt="Generic placeholder image">
                    <div class="media-body">
                        <span class="float-right font-weight-bold">{{ date('d-m-Y H:i', strtotime($check['th_sent_date'])) }}</span>
                        <h6 class="m-0 font-15 text-primary">{{ $check['username'] }}</h6>
                        <div class="text-dark">
                        	<p class="mr-2"><b><u>Expected Score</u> :</b> {{ $check['expected_score'] }}</p>
                        	<p><b><u>Current Course</u> :</b> {{ $check['current_course'] }}</p>
                        </div>
                    </div>
                </div>
			</div>


			<h4>NC Band Score : {{ $check['score']}}</h4>

			<div class="form-group border-bottom">
				<h4 class="bg-light p-1">Fluency and coherence</h4>
				<p class="lead text-break">{{ $check['fluency'] }}</p>
			</div>

			<div class="form-group border-bottom">
				<h4 class="bg-light p-1">Lexical resource</h4>
				<p class="lead text-break">{{ $check['lexical'] }}</p>
			</div>

			<div class="form-group border-bottom">
				<h4 class="bg-light p-1">Grammatical range and accuracy </h4>
				<p class="lead text-break">{{ $check['grammatical'] }}</p>
			</div>

			<div class="form-group border-bottom">
				<h4 class="bg-light p-1">Pronunciation</h4>
				<p class="lead text-break">{{ $check['pronunciation'] }}</p>
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
		var filename = "{{ $check['img'] }}"+ '_' + "{{ $check['id'] }}";

		a.attr('href', file);
		a.attr('download', filename + '.mp3');
	}

	$('textarea').attr('disabled', 'disabled');

	
</script>
@stop