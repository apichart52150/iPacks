@extends('layouts.main')

@section('css')
<style>
	@media(max-width: 450px) {
		.row img {
			width: 100%;
		}
	}

	@media(max-width: 768px) {
		.row img {
			width: 80%;
		}
	}

	.col-md-6 p {
		margin: 30px 0;
		font-size: 19px;
	}

	.row:nth-child(even) p {
		margin-top: 0;
	}
</style>
@stop


@section('content')

@section('page-title')
<div class="row">
	<div class="col-12 m-0">
		<div class="page-title-box">
			<div class="page-title-right">
				<ol class="breadcrumb m-0">
					<li class="breadcrumb-item"><i class="fas fa-home"></i> <a href="{{ url('/') }}">Home</a></li>
					<!-- <li class="breadcrumb-item"><a href="#">Topic </a></li> -->
					<li class="breadcrumb-item active">iSAC Speaking Manual</li>
				</ol>
			</div>
			<h4 class="page-title">Speaking Manual</h4>
		</div>
	</div>
</div>     
@stop

<div class="row">
	<div class="col-xl-12">
		<div class="card-box border border-success scroll">
			<h3 class="text-center">Browser settings</h3>
			<p class="lead text-center">The New Cambridge iSAC speaking system works best with the Safari and Chrome browsers. To set up your system, please follow the steps below to ensure your recording is successful.</p>
			
			<h4><i class="fab fa-safari"></i> Safari browser</h4>
			<div class="row text-dark text-center font-17">
				<div class="col-md-6">
					<p>Step 1 : Tap the <strong><small class="font-weight-bold">A</small>A icon</strong></p>
					<img src="{{ asset('public/assets/images/safari_step1.jpg') }}" alt="Safari 1">
				</div>
				<div class="col-md-6 mt-3 mt-md-0">
					<p>Step 2 : Tap <strong>Website Settings</strong></p>
					<img src="{{ asset('public/assets/images/safari_step2.jpg') }}" alt="Safari 2">
				</div>
			</div>		
			<div class="row text-dark mt-4 text-center font-17">
				<div class="col-md-6">
					<p>Step 3 : Toggle <strong>Request Desktop Website</strong> to <strong>on</strong></p>
					<img src="{{ asset('public/assets/images/safari_step3.jpg') }}" alt="Safari 3">
				</div>
				<div class="col-md-6 mt-3 mt-md-0">
					<p>Step 4 : Select <strong>'Ask'</strong> or <strong>'Allow'</strong> microphone</p>
					<img src="{{ asset('public/assets/images/safari_step4.jpg') }}" alt="Safari 4">
				</div>
			</div>

			<div class="mt-5">
				<h4><i class="fab fa-chrome"></i> Chrome browser</h4>
				<div class="row text-dark text-center font-17">
					<div class="col-md-6">
						<p>Step 1 : Tab the <i class="fas fa-ellipsis-v"></i> icon in the top right corner and navigate to <b>Settings</b></p>
						<img src="{{ asset('public/assets/images/chrome_step1.jpg') }}" alt="Chrome 1">
					</div>
					<div class="col-md-6 mt-3 mt-md-0">
						<p>Step 2 : Tap <b>Site Settings</b></p>
						<img src="{{ asset('public/assets/images/chrome_step2.jpg') }}" alt="Chrome 2">
					</div>
				</div>

				<div class="row text-dark mt-4 text-center font-17">
					<div class="col-md-6">
						<p>Step 3 : Tap <b>Microphone</b></p>
						<img src="{{ asset('public/assets/images/chrome_step3.jpg') }}" alt="Chrome 3">
					</div>
					<div class="col-md-6 mt-3 mt-md-0">
						<p>Step 4 : Toggle the button to <b>"ask first"</b> to allow sites to use your microphone.</p>
						<img src="{{ asset('public/assets/images/chrome_step4.jpg') }}" alt="Chrome 4">
					</div>
				</div>
			</div>
			
			<div class="row mt-4">
				<div class="col-md-12 text-center">
					<h4><i class="fas fa-info-circle font-20"></i> All bluetooth devices are not supported</h4>
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-md-12 text-center">
					<a href="{{ route('isac_speaking_home') }}" class="btn btn-outline-success waves-effect waves-light width-lg">Next</a>
				</div>
			</div>	
		</div>
	</div>
</div>
@endsection