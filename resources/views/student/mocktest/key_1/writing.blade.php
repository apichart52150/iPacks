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
				<div class="card-box border border-primary">
					<h4 class="header-title float-left"><b>WRITING</b></h4>
					<h5 class="float-right mt-0"><span id="dplay"></span></h5>

					<form id="basic-form" action="{{route('ans_writing')}}" method="post" onsubmit="return confirm('Are you sure you want to finish?');">
						{{ csrf_field() }}
						<input type="hidden" name="std_id" value="{{session('std_id')}}">
						<input type="hidden" name="classroom_id" value="{{session('class_id')}}">
						<input type="hidden" name="set_exam" value="1">

						<div>
							<h3>Writing 1</h3>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="col-md-12">
											<strong><p>TASK 1</p></strong>
											<fieldset class="col col-lg-12">												
												<p>You should spend about 20 minutes on this task.</p>
												<strong><p><i>The bar-chart below shows the advertising budget for a major company using a number of
													dlfferent types of media in millions of dollars during a twenty-year period, with projections for
													the future.
													<br></i></p>
												</strong>

												<strong><p><i>Summarize the information by selecting and reporting on the main features, and make
													comparisons where relevant.
													<br></i></p></strong>
													<p>Write at least 150 words.</p>
											</fieldset><br>
										</div>
										<div class="col-md-12">
											<div class="card-box">
												<div class="gal-detail thumb">
													<a href="{{ asset('public/assets/images/mocktest/task1.jpg') }}" class="image-popup" title="">
														<img src="{{ asset('public/assets/images/mocktest/task1.jpg') }}" class="thumb-img" alt="work-thumbnail">
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="card-box">           
											<textarea id="elm1" name="text_answer_task1"></textarea>                  
										</div>
									</div>
								</div>
							</section>

							<h3>Writing 2</h3>
							<section>
								<div class="row">
									<div class="col-sm-6">
										<div class="col-md-12">
											<strong><p>TASK 2</p></strong>
											<fieldset class="col col-lg-12">	
												<p>You should spend about 40 minutes on this task.</p>
												<strong><p><i>The increasing number of tourists in the world is bringing benefits to both individuals and
												society.
												<br></i></p></strong>
												<strong><p><i>What benefits does tourism bring and are there any drawbacks?<br></i></p></strong>

												<p>Give reasons for your answer and include relevant examples from your own knowledge and experience.</p>

												Write at least 250 words.	
											</fieldset><br>
										</div>
									</div>
									
									<div class="col-sm-6">
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