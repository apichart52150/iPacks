@extends('layouts.app')
@section('title','iSAC Speaking | Student')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 col-lg-6 col-xl-5">
			<div class="card">
				<div class="card-body p-4">
					<div class="text-center">
						<div class="text-center mb-3">
	                        <h3 class="font-weight-bold text-primary"><i class="fas fa-microphone mr-1"></i> iSAC SPEAKING <span class="d-none d-sm-inline">|</span> <span class="text-dark">Student</span> </h3>
	                    </div>
					</div>
					<div id="overlay">
                    	<div class="cv-spinner">
                    		<div class="spinner-grow avatar-lg text-light m-2" role="status"></div>
                    	</div>
                    </div>
					<form>
						{{ csrf_field() }}
						<div id="errorInput"></div>
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" class="form-control" name="username" placeholder="Enter your Username" autofocus="">
							<div class="invalid-feedback"></div>
						</div>

						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" placeholder="Enter your password">
							<div class="invalid-feedback"></div>
						</div>

						<p class="text-left mt-3">
							New Cambridge may use the audio from you Part 2 Speaking Practice for teaching or promotional purposes. In all instances, the identity of the speaker is never revealed. By logging in to this website, you understand and agree to these terms.
						</p>
						<div class="form-group mt-3 text-center">
							<button id="login" class="btn btn-bordered-primary btn-block">Log In</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content border-0">
      <div class="modal-header bg-warning p-1 align-items-baseline">
        <h3 class="modal-title text-white" id="exampleModalLabel"><i class="fa fa-bullhorn font-17" aria-hidden="true"></i> Announcement</h3>
        <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <div class="modal-body font-weight-bold text-dark text-center">
      	<p class="mb-0">สถาบันจะปิดปรับปรุงระบบ iSAC Speaking</p>
      	<p class="mb-0">วันพฤหัสบดีที่ 22 ตุลาคม 2020 จนถึง วันจันทร์ที่ 26 ตุลาคม 2020 <br>	ขออภัยในความไม่สะดวกมา ณ ที่นี้</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning m-auto" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('javascript')
<script>
	$(document).ready(function () {

		$('#exampleModal').modal('show');
		$('#exampleModal').modal({
			backdrop: 'static', 
			keyboard: false
		})

		$('#login').on('click', function(e) {
			e.preventDefault();

			let username = $.trim($('input[name="username"]').val());
			let password = $('input[name="password"]').val();

			$.ajax({
				url: "{{ route('fn_login') }}",
				type: 'post',
				data: {_token: "{{ csrf_token() }}", username: username, password: password},
				beforeSend: function() {
					$('#overlay').fadeIn(300);
				},
				complete: function() {
					$('#overlay').fadeOut(100);
				},
				success: function(data) {

					if(data == "Login success" || data == "user_end_date") {
						location.href = "{{ route('browser-settings') }}";
					} else if(data == "Incorrect Username or Password") {
						$('input').removeClass('is-invalid');
						$('#errorInput').addClass('alert alert-danger').html("<i class='mdi mdi-block-helper mr-2'></i>" + data);
					} else {
						$('#errorInput').html("").removeClass('alert alert-danger');
						inputRequired(data);
					}

				}
			})
		})

		function inputRequired(data) {
			
			for(let key in data) {
				if(key == "username") {
					$('input[name="username"]').addClass('is-invalid').focus();
					$('input[name="username"] + div').text(data[key]);
				}else{
					$('input[name="password"]').addClass('is-invalid');
					$('input[name="password"] + div').text(data[key]);
				}
			}
		}
	});
</script>
@stop