@extends('layouts.app')
@section('title','Online IELTS Tips & Practice | REGISTER')

@section('content')
<link href="{{ asset('public/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 col-lg-6 col-xl-5">
			<div class="card">
				<div class="card-body p-4">
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
							<label for="email" class="col-md-4 control-label">E-Mail Address</label>
							<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
								required>

							@if ($errors->has('email'))
							<span class="help-block">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
							@endif
						</div>

						<div class="form-group mb-3">
							<label for="password" class="col-md-4 control-label">Password</label>
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
	</div>
</div>

<script src="{{ asset('public/assets/js/ajax.jquery.js') }}"></script>
<script src="{{ asset('public/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('public/assets/js/pages/sweet-alerts.init.js') }}"></script>

<script>
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