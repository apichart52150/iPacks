@extends('layouts.app')
@section('title','iPACKS | Student')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 col-lg-6 col-xl-5">
			<div class="card">
				<div class="card-body p-4">
					<div class="text-center">
						<div class="text-center mb-3">
	                        <h3 class="font-weight-bold text-primary"><i class="fas fa-info"></i> PACKS LOGIN <span class="d-none d-sm-inline">|</span> <span class="text-dark">Student</span> </h3>
	                    </div>
					</div>
					<div id="overlay">
                    	<div class="cv-spinner">
                    		<div class="spinner-grow avatar-lg text-light m-2" role="status"></div>
                    	</div>
                    </div>
					<form action="{{ route('fn_login') }}" method="POST" novalidate>
						{{ csrf_field() }}
						<div class="form-group mb-3">
							<label for="username">Username</label>
							<input class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}" type="text" id="username" name="username" required="" placeholder="Enter your username" value="{{ old('username') }}">
							<span class="invalid-feedback">
								{{ $errors->first('username') }}
							</span>
						</div>

						<div class="form-group mb-3">
							<label for="password">Password</label>
							<input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password" required="" id="password" placeholder="Enter your password">
							<span class="invalid-feedback">
								{{ $errors->first('password') }}
							</span>
						</div>

						<div class="form-group mb-0 text-center">
							<button class="btn btn-primary btn-block" type="submit"> Log In </button>
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
      	<!-- <p class="mb-0">นักเรียนที่ลงทะเบียนเรียน Club และ Bonus Tutorial </p>
        <p class="mb-0">รอบวันที่ 4 - 8 November กรุณาโทรยืนยันการลงทะเบียนเรียนที่เบอร์</p>
        <p><a href="tel:026131177">02-6131177</a> และ <a href="tel:0811053333">081-1053333</a> ขออภัยในความไม่สะดวก</p> -->
        <p>วันจันทร์ที่ 9 พฤศจิกายน 2563 เวลา 15:00 - 16:00 น.<br>

ทางสถาบันฯ ขอแจ้งปิดปรับปรุงระบบ iSAC Speaking <br>  

ขออภัยในความไม่สะดวก</p>
       <!--  <p>
        	ขณะนี้อุปกรณ์ของระบบปฏิบัติการ iOS (iPhone, iPad, Macbook) <br> ไม่สามารถใช้งาน iSAC Speaking ได้ <br> ขออภัยในความไม่สะดวก
        </p> -->
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


		$('#exampleModal').modal({
			'show': false,
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
						location.href = "{{ route('user_home') }}";
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