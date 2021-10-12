@extends('layouts.app')
@section('title','Online IELTS Tips & Practice | REGISTER')

@section('content')
<link href="{{ asset('public/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

<style>
	.video-container {
		position: relative;
		padding-bottom: 56.25%;
		height: 0;
		overflow: hidden;
		max-width: 100%;
	}

	.video-container iframe {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
	}

	.text-h3{
		font-size: 23px;
	}
	.text-{
		font-size: 17px;
	}

	
</style>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-8 mb-3" style="vertical-align: middle">
			<div class="video-container">
				<iframe class="" src="https://www.youtube.com/embed/asukoInl0ek" title="YouTube video player"
					frameborder="0"
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
					allowfullscreen></iframe>
			</div>
		</div>

		<div class="col-md-4 mb-3">
			<div class="card">
				<div class="card-body p-3">
					<div class="text-center">
						<div class="text-center mb-3">
							<h3 class="font-weight-bold text-primary"> Online IELTS Tips & Practice </h3>
							<span class="text-dark h3">Create user only</span>
						</div>
						<p class="text-muted mb-4 mt-3">Don't have an account? Create your own account, it takes less
							than a minute</p>
					</div>
					@if(session()->has('status'))
					<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show my-2"
						role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
						{{ session()->get('status') }}
					</div>
					@endif
					<form class="form-horizontal">
						{{ csrf_field() }}

						<div class="form-group mb-3">
							<label for="email" class="mr-1 w-100 control-label">E-Mail Address</label>
							<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
								required>

							@if ($errors->has('email'))
							<span class="help-block">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
							@endif
						</div>

						<div class="form-group mb-3">
							<label for="password" class="w-100 control-label">Password</label>
							<input id="password" type="password" class="form-control" name="password" required>

							@if ($errors->has('password'))
							<span class="help-block">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
							@endif
						</div>

						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="checkbox-signup" required>
								<label class="custom-control-label" for="checkbox-signup">I accept <a
										href="{{asset('public/assets/pdf/Terms-and-Conditions-Online-Practice.pdf')}}"
										target="_blank" class="text-dark">Terms and Conditions</a></label>
								<!-- <label class="custom-control-label" for="checkbox-signup">I accept <a href="#" class="text-dark"  data-toggle="modal" data-target="#con-close-modal">Terms and Conditions</a></label> -->
							</div>
						</div>

						<div class="form-group mb-0 text-center">
							<button class="btn btn-primary btn-block" type="submit"> Register </button>
						</div>

					</form>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-12 text-center">
					<p class="text-muted">Already have account? <a href="{{ route('login') }}"
							class="text-white font-weight-medium ml-1">Log In</a></p>
				</div> <!-- end col -->
			</div>
		</div>

		<div class="col-md-12 mb-3">
			<div class="card">
				<div class="card-body">
					<div class="text-center">
						<img class="w-50 pb-3" src="{{ asset('public/assets/images/register/159614.jpg') }}" alt="">
						<img class="w-100 pb-3"
							src="{{ asset('public/assets/images/register/Online-Tips-03-1536x1086.jpg') }}" alt="">
					</div>

					<h3 class="text-h3">
						<i class="fas fa-thumbs-up text-primary pr-1"></i>
						Online IELTS Tips & Practice กับ New Cambridge ดียังไง?
					</h3>
					<div class="text-center pb-3 text-">
						Online IELTS Tips & Practice is an online self-access service exclusively suitable for those who
						are mastering their
						English language skills, both academically and professionally, and are preparing for the IELTS
						examinations
					</div>

					<h3 class="text-h3">
						<i class="far fa-comment-alt text-primary pr-1"></i>
						คำอธิบาย Online IELTS Tips & Practice
					</h3>
					<div class="text-left pb-3 text-">
						The Online IELTS Tips & Practice services consist of a wide selection of practices on essential
						skills for effective
						communications: listening, speaking, reading and writing. Moreover, the services provide
						users with Language Use, Topic Packs, Strategy Packs.
					</div>

					<div class="text-center pb-3">
						<img class="w-100" src="{{ asset('public/assets/images/register/1-1536x107.png') }}" alt="">
					</div>


					<h3 class="text-h3">
						<i class="far fa-comment-alt text-primary pr-1"></i>
						How to improve your English with the Online IELTS Tips & Practice services
					</h3>
					<div class="text-left pb-3 text-">
						You can choose the package to match your goal. (Platinum is recommended because LIVE 1 on 1
						Tutorial is very useful.)
					</div>

					<div class="card pb-3">
						<div class="card-body text-dark">
							<div class="text-center text-h3 pb-1">
								<strong>The Online IELTS Tips & Practice package</strong>
							</div>
							<table class="table table-bordered text-">
								<thead>
									<tr>
										<th scope="col"></th>
										<th scope="col" class="text-center" style="width: 100px;">Gold</th>
										<th scope="col" class="text-center" style="width: 100px;">Platinum</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="text-align: left;">Strategies on 4 Skills Listening, Reading,
											Writing, Speaking</td>
										<td style="text-align: center;">/</td>
										<td style="text-align: center;">/</td>
									</tr>
									<tr>
										<td style="text-align: left;">4-Skill Practices</td>
										<td style="text-align: center;">/</td>
										<td style="text-align: center;">/</td>
									</tr>
									<tr>
										<td style="text-align: left;">Over 1,400 questions on focused grammar &amp;
											vocabulary</td>
										<td style="text-align: center;">/</td>
										<td style="text-align: center;">/</td>
									</tr>
									<tr>
										<td style="text-align: left;">Writing Tasks marked with comments</td>
										<td style="text-align: center;">3 Times</td>
										<td style="text-align: center;">5 Times</td>
									</tr>
									<tr>
										<td style="text-align: left;">Speaking (15 mins.) marked with comments</td>
										<td style="text-align: center;">2 Times</td>
										<td style="text-align: center;">3 Times</td>
									</tr>
									<tr>
										<td style="text-align: left;">Reading passages with practice and test modes</td>
										<td style="text-align: center;">/</td>
										<td style="text-align: center;">/</td>
									</tr>
									<tr>
										<td style="text-align: left;">Clubs to Upskill (60 mins.) with Native IELTS
											Specialist</td>
										<td style="text-align: center;">x</td>
										<td style="text-align: center;">/</td>
									</tr>
									<tr>
										<td style="text-align: left;">1 on 1 Tutorial (30 mins.) with Native IELTS
											Specialist</td>
										<td style="text-align: center;">x</td>
										<td style="text-align: center;">/</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

					<div class="text-center pb-3">
						<img class="w-100" src="{{ asset('public/assets/images/register/2-1536x486.png') }}" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="{{ asset('public/assets/js/ajax.jquery.js') }}"></script>
<script src="{{ asset('public/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('public/assets/js/pages/sweet-alerts.init.js') }}"></script>

<script>
	// $('.account-pages').removeClass('mt-5')
	$('.form-horizontal').on('submit',function(){
		load_wait()
		$.ajax({
			type:'POST',
			url:"{{ route('create-user-only-upload-data') }}",
			data:new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
					console.log(response)
				if(response=='success'){
                	window.location.href = "{{ route('success') }}"
				}else if(response=='failed'){
					Swal.fire('Create account error', '', 'error')
				}else{
					Swal.fire('The email has already been taken.', '', 'warning')
				}
            }
		})
		return false
	})

	function load_wait() {
		Swal.fire({
			title: 'Please Wait',
			html: 'Data uploading in progress',
			allowOutsideClick: false,
			onBeforeOpen: () => {
				Swal.showLoading()
			},
		})
	}
</script>

@endsection