@extends('layouts.mocktest_admin')

@section('content')
	<style type="text/css">
		.table td{
			padding: 3px 3px;
		}

		.table th.ans_title{
			padding: 5px 5px;
			background-color: #DDDDDD;
			font-color: #000000;
		}

		.ans_label{
			width: 20px;
		}

		.ans_ans{
			width: 150px;
		}

	</style>
	
	<div class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card-box">

					@if(session()->has('del_ans'))
					{!!session()->get('del_ans')!!}
					@endif 

					@foreach ($std_profile_by_id as $std_name)
					<table border="0">
						<tr>
							<td class="header-title m-t-0 m-b-30">Student name : {{ $std_name->std_name}}</td>  
						</tr>
					</table>
					@endforeach

					<p><strong>Exam history</strong></p> 
					<div class="tabs-vertical-env">
						<ul class="nav tabs-vertical">
							<li class="nav-item">
								<a href="#listening" class="nav-link active" data-toggle="tab" aria-expanded="false">Listening</a>
							</li>
							<li class="nav-item">
								<a href="#reading" class="nav-link" data-toggle="tab" aria-expanded="true">Reading</a>
							</li>
							
							@if($check_exam[0]->set_exam == 7)
								
								<li class="nav-item">
									<a href="#writing1" class="nav-link" data-toggle="tab" aria-expanded="false">Writing 1 Academic</a>
								</li>

								<li class="nav-item">
									<a href="#writing2" class="nav-link" data-toggle="tab" aria-expanded="false">Writing 1 General Training</a>
								</li>

								<li class="nav-item">
									<a href="#writing3" class="nav-link" data-toggle="tab" aria-expanded="false">Writing2</a>
								</li> 

							@else

								<li class="nav-item">
									<a href="#writing1" class="nav-link" data-toggle="tab" aria-expanded="false">Writing1</a>
								</li>

								<li class="nav-item">
									<a href="#writing2" class="nav-link" data-toggle="tab" aria-expanded="false">Writing2</a>
								</li> 

							@endif

						</ul>

						<div class="tab-content">

							@include('admin.mocktest.type_exam.answer_listening')
							@include('admin.mocktest.type_exam.answer_reading') 

							@if($check_exam[0]->set_exam == 7)
								@include('admin.mocktest.type_exam.answer_gateway')
							@else
								@include('admin.mocktest.type_exam.answer_writing')
							@endif
							
						</div>  
					</div>

				</div>

			</div>

		</div>

	</div>

	<script>
		function chkNumber(ele)
		{
			var vchar = String.fromCharCode(event.keyCode);
			if ((vchar<'0' || vchar>'9') && (vchar != '.')) return false;
			ele.onKeyPress=vchar;
		}
	</script> 


@endsection 