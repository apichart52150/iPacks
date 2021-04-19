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
				<div class="card-box">
					<h4 class="m-t-0 header-title"><b>IELTS Practice Writing Test</b></h4>
					<div class="row mb-3">
						<div class="col-md-6">
							<h5><span id="dplay"></span></h5>
						</div>
					</div>

					<form id="basic-form" action="{{ route('ans_writing') }}" method="post" onsubmit="return confirm('Are you sure you want to finish?');">
						{{ csrf_field() }}
						<input type="hidden" name="std_id" value="{{ Session('std_id') }}">
						<input type="hidden" name="class_id" value="{{ Session('class_id') }}">
						<input type="hidden" name="set_exam" value="2">
						
						<div>
							<h3>Task 1</h3>
							<section>
								<div class="row">
									<div class="col-md-6 col-lg-6 col-xs-6">
										<div class="card-box">
											<div class="box-content">
												<h4>Task 1</h4>
												<fieldset class="col col-lg-12">
													<p>You should spend about 20 minutes on this task.</p>
													<strong>
														<p><i>The tables show world population between 1950 and 2050 and the distribution of population by region.<br>
														</i></p>
													</strong> <strong>
														<p><i>Summarize the information by selecting and reporting on the main features, and make
														comparisons where relevant. <br>
														</i></p>
													</strong>
													<p>Write at least 150 words.</p>
												</fieldset>
												<div class="gal-box">
													<a href="{{ asset('public/assets/images/mocktest/writing_task1_part2-new.png') }}" class="image-popup" title="task-1">
														<img src="{{ asset('public/assets/images/mocktest/writing_task1_part2-new.png') }}" class="img-fluid" alt="work-thumbnail">
													</a>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-6 col-lg-6 col-xs-6">
										<div class="card-box">
												<textarea id="elm1" name="text_answer_task1"></textarea>   
										</div>
									</div>	
								</div>
							</section>


							<h3>Task 2</h3>
							<section>
								<div class="row">
									<div class="col-md-6 col-lg-6 col-xs-6">
										<div class="card-box">
											<div class="box-content">
												<h4>Task 2</h4>
												<fieldset class="col col-lg-12">  
													<p>You should spend about 40 minutes on this task.</p>
													<strong><i>Many people say that we now live in 'consumer societies' where money and possessions are given too much importance. Others believe that consumer culture has played a vital role in improving our lives.</i></strong>
													
													<p class="mt-2">Discuss both views and give your opinion.</p>

													Write at least 250 words. 
												</fieldset>
											</div>
										</div>
									</div>

									<div class="col-md-6 col-lg-6 col-xs-6">
										<div class="card-box">
											<textarea id="elm2" name="text_answer_task2"></textarea>   
										</div>
									</div>

								</div>
							</section>   
						</div>
					</form>
				</div>
			</div>
		</div>
  	</div>
</div>
@endsection


@section('javascript')
	<script src="{{ asset('public/js/mocktest/timer_ieltswriting.js') }}"></script>
	<script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
	<script>
		document.querySelector('body').addEventListener('load', begintimer());
	</script>
@stop