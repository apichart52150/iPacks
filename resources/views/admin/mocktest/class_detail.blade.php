@extends('layouts.mocktest_admin')
@section('content')

<style>

	.bigbox{
		width: 300px; 
		font-size: 12px;
		word-wrap: break-word;
	}

	.mediumbox{
		width: 200px; 
		font-size: 12px;
		word-wrap: break-word;
	}
	.smallbox{ 
		font-size: 12px;
		width: 50px;
		word-wrap: break-word;
	}

	td{
		font-size: 14px;
	}


	td.aligntext{
		text-align: left;
		word-wrap: break-word;
		
	}
	tbody td{
	/*background-color: red;*/
	height: 10px;
	}
</style>
	
<div class="row">
	<div class="col-xl-12">
		<div class="card-box table-responsive">
			@if(session()->has('edit_score'))
			{!!session()->get('edit_score')!!}
			@endif 
			
			@if(count($get_class_id) == 0)
				<div class="form-group row">
					<label class="col-3 col-form-label"><h2 class="">Classroom Detail</h2> </label>
				</div>
				<table border="0">
					<tr>
						<td> Class :: </td>
					</tr>
					<tr>
						<td class="header-title">NC Code ::  </td>  
					</tr>
					<tr>
						<td class="header-title">Date Exam ::  </td>  
					</tr>
					<tr>
						<td class="header-title">Teacher ::  </td>  
					</tr>
					<tr>
						<td class="header-title">Pass class :: </td>  
					</tr>
				</table>
			@else
				<div class="form-group row">
					<label class="col-auto"><h2>Classroom Detail</h2> </label>
					<div class="col-4">
						<a href="{{ route('print_classdetail',$get_class_id['class_id'])}}" class="btn btn-primary waves-effect waves-light" target="_blank"><i class="mdi mdi-printer"></i></a>
					</div>
				</div>
				<table border="0">
					<tr>
						<td class="header-title pb-1"> Class :: {{$get_class_id['class_name']}} </td>
					</tr>
					<tr>
						<td class="header-title pb-1">NC Code :: {{$get_class_id['class_nccode']}} </td>  
					</tr>
					<tr>
						<td class="header-title pb-1">Date Exam :: {{date('d/m/Y',strtotime($get_class_id['class_date_exam']))}} </td>
					</tr>
					<tr>
						<td class="header-title">Teacher :: {{$get_class_id['teacher_name']}} </td>  
					</tr>
				</table>
			@endif
			<br> 

			<table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center;">
				<thead>
					<tr>
						<th rowspan="2" class="smallbox">No.</th>
						<th rowspan="2" class="mediumbox">Student Name</th>
						<th rowspan="2" class="smallbox">Nickname</th>
						<th rowspan="2" class="smallbox">Set Exam</th>
						<th colspan="6" class="smallbox">Exam</th>
						<th rowspan="2" class="smallbox">Overall band</th>
						<th rowspan="2" class="bigbox">Course Recommendation / Note</th>
						<th rowspan="2" class="smallbox">Expected Band</th>
						<th rowspan="2" class="smallbox">Edit</th>
						
					</tr>
					<tr>
						<th class="smallbox">Listening</th>
						<th class="smallbox">Reading</th>
						<th class="smallbox">Writing 1</th>
						<th class="smallbox">Writing 2</th> 
						<th class="smallbox">Overall writing score</th>
						<th class="smallbox border-right">Speaking</th>
					</tr>
				</thead>
				@if(count($get_class_id) == 0)
				@else  
				<tbody>
					<?php $i = 0;?>
					@if(empty($data))
					@else
					@foreach ($data as $class)

					<?php $i++;?>
					<tr>
						<td>{{$i}}</td>
						<td class="aligntext"><a href="{{ route('student_profile',$class['std_id'])}}">{{$class['std_name']}}</a></td>
						<td>{{$class['std_nickname']}}</td>
						<td>
							<span class="badge badge-success p-2">{{$class['set_exam']}}</span>
						</td>
						<td>{{$class['lis_score']}}</td>
						<td>{{$class['read_score']}}</td>
						<td>
							@if ($class['score_wri_1'] == 0)
								{{$class['score_wri_3']}}
							@else
								{{$class['score_wri_1']}}
							@endif
						</td>
						<td>{{$class['score_wri_2']}}</td>
						<td>{{$class['score_wri_overall']}}</td>
						<td>{{$class['score_speaking']}}</td>
						<td>{{$class['score_overall']}}</td>
						<td class="aligntext">{{$class['rec_course']}}</td>
						<td>{{$class['expectband']}}</td>
						<td><button type="submit" class="btn btn-success waves-effect waves-light btn-sm" data-toggle="modal" data-target="#edit_score{{$i}}"><i class="mdi mdi-grease-pencil"></i></button>
						</td>
					</tr>
					<div id="edit_score{{$i}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
						<div class="modal-dialog modal-full">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									<h4 class="modal-title" id="full-width-modalLabel">Update score</h4>
								</div>
								<form action="{{route('edit_score')}}" method="Post" class="form-horizontal" role="form"> 
									{!! csrf_field() !!}
									<input type="hidden" value="{{$class['std_id']}}" name="std_id">
									<input type="hidden" value="{{$class['classroom_id']}}" name="class_id">
									<div class="modal-body">
										<div class="form-group row">
											<label class="col-4 col-form-label">Writing 1</label>
											<div class="col-6">
												<input type="text" class="form-control" value="{{$class['score_wri_1']}}" name="score_writing1" onkeypress="return chkNumber(this)">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-4 col-form-label">Writing 2</label>
											<div class="col-6">
												<input type="text" class="form-control" value="{{$class['score_wri_2']}}" name="score_writing2" onkeypress="return chkNumber(this)">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-4 col-form-label">Speaking</label>
											<div class="col-6">
												<input type="text" class="form-control" value="{{$class['score_speaking']}}" name="score_speaking" onkeypress="return chkNumber(this)">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-12 col-form-label">Course Recommendation / Note</label>
											<div class="col-12">
												<textarea type="textarea" rows="5" class="form-control"  name="score_rec_course">{{$class['rec_course']}}</textarea> 
											</div>
										</div>
										<div class="form-group row">
											<label class="col-4 col-form-label">Expected Band</label>
											<div class="col-6">
												<input type="text" class="form-control" value="{{$class['expectband']}}" name="score_expectband" onkeypress="return chkNumber(this)">
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-primary waves-effect waves-light">Update score</button>
										<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					@endforeach
					@endif
				</tbody>
				@endif
			</table>
		</div>
	</div>
</div>
<!-- end row -->

<script language="JavaScript">
	function chkNumber(ele)
	{
	var vchar = String.fromCharCode(event.keyCode);
	if ((vchar<'0' || vchar>'9') && (vchar != '.')) return false;
	ele.onKeyPress=vchar;
	}
</script>
@endsection 