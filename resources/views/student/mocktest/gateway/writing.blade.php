@extends('layouts.mocktest_layout')

@section('content')
<div class="wrapper pt-5">
    <div class="container-fluid p-0" onload="LoadModal();">

        <!-- start page title -->
        <div class="row pt-4">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">{{Session('name_type')}}</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Writing</h4>
                </div>
            </div>
        </div> 

		<div class="row">
			<div class="col-md-12">
				<div class="card-box noheight border border-primary">
					<div class="row">
						<div class="col-6">
							<h4 class="header-title">Gateway To IELTS : Writing</h4>
							<h5 class="font-weight-bold">Writing</h5>
							<p>You should write both Task 1 and Task 2 answers in ONE HOUR. For Task 1, choose <b>EITHER</b> Academic <b>OR</b> General Training</p>
							<h5><span id="dplay"></span></h5>
						</div>

						<form action="{{ route('ans_writing') }}" id="basic-form" method="POST" class="mt-3" onsubmit="return confirm('Are you sure you want to finish?')">
							{{ csrf_field() }}

							<input type="hidden" name="std_id" value="{{session('std_id')}}">
							<input type="hidden" name="classroom_id" value="{{session('class_id')}}">
							<input type="hidden" name="set_exam" value="7">
						
							<div>
								<h3>Task 1 Academic</h3>
								<section>
									<div class="row">
										<div class="col-md-6">
											<div class="row">
												<div class="col-md-12">
													
													<p  class="font-weight-bold">Task 1 Academic</p>

													<div class="container">
														<div class="row justify-content-center">
															<div class="col-12">
																<div class="d-flex flex-column font-weight-bold">
																	<div class="bg-light border p-3">
																		<p>The charts below give information about the favourite subjects for both boys and girls at a certain school.</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
													@include('student.mocktest.gateway.newtask1')
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<textarea name="text_answer_task1" id="elm1"></textarea>
										</div>
									</div>
								</section>
								<!-- end section 1.1 -->

								<h3>Task 1 General Training</h3>
								<section>
									<div class="row">
										<div class="col-md-6">
											<div class="row">
												<div class="col-md-12">
													@include('student.mocktest.gateway.newtask3')
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<textarea name="text_answer_task2" id="elm3"></textarea>

										</div>
									</div>
								</section>
								<!-- end section 1.2 -->

								<h3>Writing Task 2</h3>
								<section>
									<div class="row">
										<div class="col-md-6">
											<div class="row">
												<div class="col-md-12">
													@include('student.mocktest.gateway.newtask2')
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<textarea name="text_answer_task3" id="elm2"></textarea>
										</div>
									</div>
								</section>
								<!-- end section 2 -->
							</div>
							<!-- end tab section -->
						</form>
						<!-- end form -->
					</div>
					<!-- end card-box -->
				</div>
				<!-- end col-md-12 -->
			</div>
			<!-- end row -->
		</div>
		<!-- end container-fluid -->
	</div>
	<!-- end content -->
</div>
@endsection

@section('javascript')
	<script src="{{ asset('public/js/mocktest/timer_ieltswriting.js') }}"></script>
	<script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
	<script>
		document.querySelector('body').addEventListener('load', begintimer());
	</script>
@stop