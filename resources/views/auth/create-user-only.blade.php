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

<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
	aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Terms and Conditions Online IELTS Tips & Practice </h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body p-4">
				<div class="row">
					<div class="col-md-12">
						1. Your registration will only be considered complete once all monies are paid. For
						international bank transfers, please consult your bank with regards to any charges in your
						country that may be applicable. We will not cover the bank charges from your country.
						2. Full payment must be made prior to starting the course.
						3. Should a student change any of their course details, we reserve the right to charge a further
						Baht 500 administration charge.
						4. Payments are made through a secure payment system either by CREDIT CARD PAYMENT, PAYPAL, or
						BANK TRANSFER. Credit card payments are organised and administered jointly by KTC Bank,
						Thailand.
						5. You are required to provide your contact details and email.
						6. You will be provided with a Username, Password or some other information for our on-line
						courses. You must treat such information as confidential. You must not disclose it to any third
						party. If you do then your account may be disabled
						7. We have the right to disable any user identification code or password, whether chosen by you
						or allocated by us, at any time, if in our reasonable opinion you have failed to comply with any
						of the provisions of these terms and conditions.
						8. If you know or suspect that anyone other than you know your user identification code or
						password, you must promptly notify us at info@newcambridge.com
						9. You will be held responsible for any loss or damage resulting from use of your password by
						any third party.
						10. A refund cannot be made. However, if we have technical problems, we will compensate certain
						extra days to your account.
						11. We reserve the right to change teachers, times of lessons and on-line platforms and to
						combine classes if:
						a. Numbers for any class are low, whatever the reason.
						b. We have technical issues or find more suitable learning tools.
						c. A teacher is sick.
						12. Once you have started your course, the course cannot be stopped or postponed.
						13. The maximum class size is 18. There may be occasions when classes temporarily exceed this
						number before students are re-allocated.
						14. The timetable and structure of the course may be changed whilst the course is running. The
						institute will keep disruption to a minimum. For the most up-to-date information on the
						timetable please look at our website and facebook.
						15. We reserve the right to terminate your enrolment in the event of conduct or behaviour which
						in our opinion diminishes (or may diminish) the reputation of the institute, even if such
						conduct is not in breach of these terms and conditions. The institute’s decision is final.
						16. If you connect more than 15 minutes late for a class, then you may not permitted to join the
						class.
						17. The intellectual property pertaining to our course hand outs and other teaching materials is
						owned by us and you cannot copy or reproduce the materials for commercial benefit. You also are
						no allowed to access illegally copied and stored versions of any published material and to do so
						may put in jeopardy your place on the course.
						18. You must:
						a. Only speak English in your class.
						b. Keep camera and microphone on
						c. Inform us if you cannot attend a class for any reason – the production of official
						documentation to substantiate any such absence will be required.
						d. Comply with reasonable requests made by institute staff.
						19. The following equipment is strongly recommended for you to maximize your learning
						experience:
						a. Minimum of 3 megabytes per second download speed broadband internet connection (Download
						speed: >3 Mbps // Upload speed: >1 Mbps)
						b. Desktop / laptop / tablet Recommended
						Processor : 2 Ghz or higher (Intel i3/i5/i7 or AMD equivalent)
						RAM : 4 Gb or higher
						Notes: Dual and single-core laptops have a reduced frame rate when screen sharing (around 5
						frames per second). For optimum screen-sharing performance on laptops, we recommend a quad-core
						processor or higher.
						c. Headset
						d. 5 Megapixel web camera
						e. Web browsers Google Chrome ,Mozilla Firefox
						f. Club & Bonus Tutorial will be conducted over Zoom. For further information please read Zoom’s
						system requirements.

						20. You agree that you will not:
						a. Use any robot, spider, scraper, deep link or other similar automated data gathering or
						extraction tools, program, algorithm or methodology to access, acquire, record, copy or monitor
						the lessons without our express written consent, which may be withheld in our sole discretion.
						b. Post or transmit any file which contains viruses, worms, Trojan horses or any other
						contaminating or destructive features, or that otherwise interfere with the proper working of
						our on-line courses. We are not responsible for any documents shared during the lesson that may
						contain bugs or viruses. You are responsible for configuring your information technology and
						using your own virus protection software.
						21. Activity undertaken by a student is strictly at the student’s own risk and we take no
						responsibility.
						22. We shall take all responsible steps to fulfil student expectations regarding the course, but
						we do reserve the right to alter services to at least an equivalent standard at no additional
						cost.
						23. While we take all reasonable steps to ensure the information contained in our publicity is
						accurate, we reserve the right to alter this, substitute or withdraw any amenity without further
						notice.
						24. Should any of the following events occur then we will not be liable to provide further
						services: strikes, industrial action, fire, civil unrest, legal action, withdrawal or regulatory
						consents, lockout or interruption or failure of electricity, and acts of God (including flood,
						earthquake, storm, hurricane, infectious diseases or pandemics or other natural disasters that
						are beyond the reasonable control of the parties)
						25. Our teachers will be held directly liable should the tone or content of their communications
						with you be deemed offensive in any way. We hold no responsibility for this, although we will be
						sure to investigate and discipline the offender if necessary, including, but not limited to,
						suspending or terminating their contract with us or reporting their conduct to the relevant
						government authorities.
						26. Photography – Sometimes the College or our representatives may record the lesson for
						promotional purposes. Please advise us at the time of booking if you do not wish to appear in
						any promotional activity.
						27. These terms of business represent the entire agreement reached by the parties and excluding
						any fraudulent misrepresentation, no other statement, whether oral or in writing, will be
						regarded as a contractual term of these terms of business.
						28. If you have any difficulty with any of the services or wish to contact us, please email:
						info@newcambridge.com.
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-info waves-effect waves-light">Save changes</button>
			</div>
		</div>
	</div>
</div><!-- /.modal -->

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
					swal("Create account success", "", "success").then(()=>{
                    	window.location.href = "{{ route('success') }}"
                    })
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