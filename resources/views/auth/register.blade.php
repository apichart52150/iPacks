@extends('layouts.app')
@section('title','Online IELTS Tips & Practice | REGISTER')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 col-lg-6 col-xl-5">
			<div class="card">
				<div class="card-body p-4">
					<div class="text-center">
						<div class="text-center mb-3">
							<h3 class="font-weight-bold text-primary"> Online IELTS Tips & Practice </h3> 
							<span class="text-dark h3">REGISTER</span> 
	                    </div>
						<p class="text-muted mb-4 mt-3">Don’t have an account? Creat your own by just adding your email & creating your own password. It takes less than a minute.</p>
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
					<form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        
						<div class="form-group mb-3">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
								<input type="checkbox" class="custom-control-input" name="condition_checked" id="checkbox-signup"required>
								<label class="custom-control-label" for="checkbox-signup">I accept <a class="text-primary d-inline" data-toggle="modal" data-target="#full-width-modal">Terms and Conditions</a></label>
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
					<p class="text-muted">Already have account?  <a href="{{ route('login') }}" class="text-white font-weight-medium ml-1">Log In</a></p>
				</div> <!-- end col -->
			</div>
		</div>
	</div>
</div>

	<script>
		
		function check() {
			document.getElementById("checkbox-signup-modal").checked = true;
			document.getElementById("checkbox-signup").checked = true;
		}

		function uncheck() {
			document.getElementById("checkbox-signup").checked = false;
			document.getElementById("checkbox-signup-modal").checked = false;
		}
	</script>
@endsection

