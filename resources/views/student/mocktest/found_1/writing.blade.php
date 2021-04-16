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
					<div class="row">
						<div class="col-6">
							<h4 class="header-title"><b>Foundation for IELTS : Writing</b></h4>
						</div>
						<div class="col-6 text-right">
							<h5><span id="dplay"></span></h5>
						</div>
					</div>
					<!-- end row title and timer -->

					<form action="{{ route('ans_writing') }}" id="basic-form" method="POST" class="mt-3" onsubmit="return confirm('Are you sure you want to finish?');">
						{{ csrf_field() }}

						<input type="hidden" name="std_id" value="{{session('std_id')}}">
						<input type="hidden" name="classroom_id" value="{{session('class_id')}}">
						<input type="hidden" name="set_exam" value="3">

						<div>
							<h3>Writing Task 1</h3>
							<section>
								<div class="row">
									<div class="col-6">
										<div class="row">
											@include('student.mocktest.found_1.task1')
										</div>

									</div>

									<div class="col-6">
										<textarea name="text_answer_task1" id="elm1"></textarea>
									</div>
								</div>
							</section>
							<!-- end writing task 1 -->

							<h3>Writing Task 2</h3>
							<section>
								<div class="row">
									<div class="col-6 align-self-center">
										@include('student.mocktest.found_1.task2')
									</div>
									<div class="col-6">
										<textarea name="text_answer_task2" id="elm2"></textarea>
									</div>
								</div>
							</section>
							<!-- end writing task 2 -->
						</div>
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
@endsection

@section('javascript')
	<script src="{{ asset('public/js/mocktest/timer_ieltswriting.js') }}"></script>
	<script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
	<script>
		document.querySelector('body').addEventListener('load', begintimer());
	</script>
@stop