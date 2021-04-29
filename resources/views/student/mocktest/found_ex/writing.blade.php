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
                            <li class="breadcrumb-item active">Writing Test</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Writing</h4>
                </div>
            </div>
        </div> 
		<div class="row">
			<div class="col-md-12">
				<div class="card-box border border-primary">
					<div class="row">
						<div class="col-6"><h4 class="header-title"><b>Foundation Extension : Writing</b></h4></div>
						<div class="col-6 text-right">
							<h5><span id="dplay"></span></h5>
						</div>
					</div>
					<!-- end row title and timer -->

					<form action="{{ route('ans_writing') }}" id="basic-form" method="POST" class="mt-3" onsubmit="return confirm('Are you sure you want to finish?')">
						{{ csrf_field() }}

						<input type="hidden" name="std_id" value="{{auth('student')->user()->std_id}}">
						<input type="hidden" name="classroom_id" value="{{auth('student')->user()->coursetype}}">
						<input type="hidden" name="set_exam" value="4">
					
						<div>
							<h3>Writing Task 1</h3>
							<section>
								<div class="row">
									<div class="col-6">
										@include('student.mocktest.found_ex.task1')
									</div>

									<div class="col-6">
										<textarea name="text_answer_task1" id="elm1"></textarea>
									</div>
								</div>
							</section>
							<!-- end section 1 -->

							<h3>Writing Task 2</h3>
							<section>
								<div class="row">
									<div class="col-6 align-self-center">
										@include('student.mocktest.found_ex.task2_new')
									</div>

									<div class="col-6">
										<textarea name="text_answer_task2" id="elm2"></textarea>
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
@endsection

@section('javascript')
	<script src="{{ asset('public/js/mocktest/timer_ieltswriting.js') }}"></script>
	<script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
	<script>
		document.querySelector('body').addEventListener('load', begintimer());
	</script>
@stop