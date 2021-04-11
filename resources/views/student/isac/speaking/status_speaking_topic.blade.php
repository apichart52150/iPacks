@extends('layouts.sac_s')

@section('title', 'status')

@section('css')
<style>
	i.fa-angle-down {
		font-size: 21px;
	}
</style>
@stop

@section('page-title')
<div class="row">
	<div class="col-12">
		<div class="page-title-box">
			<div class="page-title-right">
				<ol class="breadcrumb m-0">
					<li class="breadcrumb-item"><i class="mdi mdi-keyboard-return"></i> <a href="{{ url('status_speaking') }}">Back</a></li>
					<!-- <li class="breadcrumb-item"><a href="#">Topic </a></li> -->
					<li class="breadcrumb-item active">{{$topic[0]->topic}}</li>
				</ol>
			</div>
			<h4 class="page-title">Status Writing</h4>
		</div>
	</div>
</div>     
@stop

@section('content')
<div class="card">
	<div class="row">
		<div class="col-md-6">
			<div class="card-body">
				<div class="card">
					<div class="card-header bg-primary text-white text-center p-0 py-2 topic">{{ $topic[0]->topic }}</div>
					<div class="card-body">
						@php 
							
							if(strlen($topic[0]->topic) == 7) {
								$path_img = str_replace(' ', '0', $topic[0]->topic);
							} else {
								$path_img = str_replace(' ', '', $topic[0]->topic);
							}

						@endphp
                        <a href="{{ asset('public/topics') }}/{{ $path_img }}.jpg" class="image-popup" title="{{ $topic[0]->topic }}">
                            <img src="{{ asset('public/topics') }}/{{ $path_img }}.jpg" class="img-fluid" alt="work-thumbnail">
                        </a>
					</div>
				</div>
				<h4 class="text-primary">Play</h4>

				<div class="row">
					<div class="col-lg-9">
						<audio class="w-100" preload="auto" controls controlsList="nodownload">
							<source src="{{ asset('public/file_record')}}/{{$topic[0]->path}}" type="audio/wav">
						</audio>
					</div>
					<div class="col-lg-3 align-self-center text-center">
						<a class="btn btn-primary text-white" id="download">Download</a>
					</div>
				</div>

			</div>
		</div>
		<!-- end col-md-6 -->

		<div class="col-md-6">
			<div class="card-body">
				<span class="d-flex justify-content-end"><span class="badge badge-success font-14">Teacher : {{ $topic[0]->th_name }}</span></span>
				
				<p class="mt-2 border border-3 p-2">The scores awarded reflect your performance in <b><i>this</i></b> Part 2 Speaking Test only and do not anticipate an IELTS band score. They relate to the scores set out in
				<a href="{{ asset('public/assets/pdf/speaking-band-descriptors.pdf') }}" download="">the IELTS Band Descriptors.</a>
				</p>

				<div class="mt-2 d-flex justify-content-between">
					<div class="d-flex">
						<p class="font-15 mr-2 mb-0">NC Band Score : </p>
                    	<h3 class="my-0">{{$topic[0]->score}}</h3>
					</div>
					<div class="d-flex">
						<span class="mr-2"><b>Expected Score</b> : {{ $topic[0]->expected_score }}</span>
					</div>
                </div>

				<div class="accordion mb-3 mt-3" id="accordionExample">
					<div class="card mb-1">
						<div class="card-header" id="headingOne">
							<h5 class="my-0">
								<a href="#collapseOne" class="text-primary" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
									Fluency and coherence

									<i class="fas fa-angle-down float-right"></i>
								</a>	
							</h5>
						</div>

						<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
							<div class="card-body">
								{{ $topic[0]->fluency_and_coherence }}
							</div>
						</div>
					</div>

					<div class="card mb-1">
						<div class="card-header" id="headingTwo">
							<h5 class="my-0">
								<a href="#collapseTwo" class="text-primary" data-toggle="collapse" aria-expanded="true" aria-controls="collapseTwo">
									Lexical resource

									<i class="fas fa-angle-down float-right"></i>
								</a>
							</h5>
						</div>

						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
							<div class="card-body">
								{{ $topic[0]->lexical_resource }}
							</div>
						</div>
					</div>

					<div class="card mb-1">
						<div class="card-header" id="headingThree">
							<h5 class="my-0">
								<a href="#collapseThree" class="text-primary" data-toggle="collapse" aria-expanded="true" aria-controls="collapseThree">
									Grammatical range and accuracy

									<i class="fas fa-angle-down float-right"></i>
								</a>
							</h5>
						</div>

						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
							<div class="card-body">
								{{ $topic[0]->grammar_range_and_acc }}
							</div>
						</div>
					</div>

					<div class="card mb-1">
						<div class="card-header" id="headingFour">
							<h5 class="my-0">
								<a href="#collapseFour" class="text-primary" data-toggle="collapse" aria-expanded="true" aria-controls="collapseFour">
									Pronunciation

									<i class="fas fa-angle-down float-right"></i>
								</a>
							</h5>
						</div>

						<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
							<div class="card-body">
								{{ $topic[0]->pronunciation }}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end col-md-6 -->
	</div>
	<!-- end row -->
</div>
<!-- end card -->
@endsection

@section('javascript')
<script>
	$('#download').on('click', loadToExternal);

	function loadToExternal() {
		let file = $('audio source').attr('src');
		let a = $(this);
		let filename = $('.topic').text();
		
		a.attr('href', file);
		a.attr('download', filename + '.wav');
	}
</script>
@stop