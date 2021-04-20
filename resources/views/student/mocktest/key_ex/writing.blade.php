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
					<div class="row">
						<div class="col-md-6">
							<h4 class="header-title"><b>Key Skills Extension : Writing</b></h4>
						</div>
						<div class="col-md-6 text-right">
							<h5><span id="dplay"></span></h5>
						</div>
					</div>
					<!-- end row title and time -->
					
					<form id="basic-form" action="{{ route('ans_writing') }}" method="post" onsubmit="return confirm('Are you sure you want to finish?');">
						{{ csrf_field() }}

						<input type="hidden" name="std_id" value="{{session('std_id')}}">
						<input type="hidden" name="classroom_id" value="{{session('class_id')}}">
						<input type="hidden" name="set_exam" value="5">

						<div>
							<h3>Writing Task 1</h3>
							<section>
								<div class="row font-16">
									<div class="col-md-6 align-self-center">
										@include('student.mocktest.key_ex.task1')
									</div>

									<div class="col-md-6">
										<textarea id="elm1" name="text_answer_task1"></textarea>
									</div>
								</div>
							</section>
							<!-- end section writing 1 -->

							<h3>Writing Task 2</h3>
							<section>
								<div class="row font-16">
									<div class="col-md-6 align-self-center">
										<div class="row justify-content-center px-2">
											@include('student.mocktest.key_ex.task2')
										</div>
									</div>

									<div class="col-md-6">
										<textarea id="elm2" name="text_answer_task2"></textarea>
									</div>
								</div>
							</section>
							<!-- end section writing 2 -->
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