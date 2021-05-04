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
	<div class="col-sm-12">
		<div class="card-box">

			@if(session()->has('edit_score'))
			{!!session()->get('edit_score')!!}
			@endif 
			
			@if(count($get_class_id) == 0)
				<h4 class="header-title">Class :: {{$get_class_id['class_name']}}</h4>
				<p class="sub-header">
					NC Code :: {{$get_class_id['class_nccode']}}<br>
					Date Exam :: {{date('d/m/Y',strtotime($get_class_id['class_date_exam']))}}<br> 
					Teacher :: {{$get_class_id['teacher_name']}}<br>
				</p>
			@else
				<div class="form-group row">
					<div class="col-4">
						<a href="{{ route('print_classdetail',$get_class_id['class_id'])}}" class="btn btn-primary waves-effect waves-light" target="_blank"><i class="mdi mdi-printer"></i></a>
					</div>
				</div>
				<h4 class="header-title">Class :: {{$get_class_id['class_name']}}</h4>
				<p class="sub-header">
					NC Code :: {{$get_class_id['class_nccode']}}<br>
					Date Exam :: {{date('d/m/Y',strtotime($get_class_id['class_date_exam']))}}<br> 
					Teacher :: {{$get_class_id['teacher_name']}}<br>
				</p>
			@endif
			<br>
			@if(empty($data))
				<p>No data show!</p>
			@else
				<table id="demo-foo-row-toggler" class="table table-bordered toggle-circle mb-0">
					<thead>
						<tr>
							<th data-toggle="true">No.</th>
							<th data-toggle="true">Student Name</th>
							<th data-toggle="true">Nickname</th>
							<th data-toggle="true">Set Exam</th>
							<th data-toggle="true">Edit</th>
						</tr>
					</thead>
					@if(count($get_class_id) == 0)
						<p>No data show!</p>>
					@else  
						<tbody>
							<?php $i = 0;?>
								@foreach ($data as $class)
									<?php $i++;?>
									<tr>
										<td>{{$i}}</td>
										<td><a href="{{ route('student_profile',$class['std_id'])}}">{{$class['std_name']}}</a></td>
										<td>{{$class['std_nickname']}}</td>
										<td>
											<span class="badge badge-success p-1">{{$class['set_exam']}}</span>
										</td>
										<td>
											<button type="submit" class="btn btn-success waves-effect waves-light btn-sm" data-toggle="modal" data-target="#edit-modal{{$i}}">Edit</button>
											<button type="submit" class="btn btn-info waves-effect waves-light btn-sm" data-toggle="modal" data-target="#view-modal{{$i}}">View</button>
										</td>
									</tr>

									<div id="edit-modal{{$i}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h4 class="modal-title">{{$class['std_name']}}</h4>
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												</div>
												<form action="{{route('edit_score')}}" method="post" class="form-horizontal" role="form"> 
													{!! csrf_field() !!}
													<input type="hidden" value="{{ $class['std_id'] }}" name="std_id">
													<input type="hidden" value="{{ $class['classroom_id'] }}" name="class_id">
													<div class="modal-body">
														<div class="form-group row">
															<label class="col-4 col-form-label">Writing 1:</label>
															<div class="col-6">
																<input type="text" class="form-control" value="{{$class['score_wri_1']}}" name="score_writing1" onkeypress="return chkNumber(this)">
															</div>
														</div>
														<div class="form-group row">
															<label class="col-4 col-form-label">Writing 2:</label>
															<div class="col-6">
																<input type="text" class="form-control" value="{{$class['score_wri_2']}}" name="score_writing2" onkeypress="return chkNumber(this)">
															</div>
														</div>
														<div class="form-group row">
															<label class="col-4 col-form-label">Speaking:</label>
															<div class="col-6">
																<input type="text" class="form-control" value="{{$class['score_speaking']}}" name="score_speaking" onkeypress="return chkNumber(this)">
															</div>
														</div>
														<div class="form-group row">
															<label class="col-12 col-form-label">Course Recommendation / Note:</label>
															<div class="col-12">
																<textarea type="textarea" rows="5" class="form-control"  name="score_rec_course">{{$class['rec_course']}}</textarea> 
															</div>
														</div>
														<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<label for="field-3" class="control-label">Expected Band:</label>
																<input type="text" class="form-control" id="field-3" value="{{$class['expectband']}}" name="score_expectband" onkeypress="return chkNumber(this)">
															</div>
														</div>
													</div>
													</div>
													<div class="modal-footer">
														<button type="submit" class="btn btn-success waves-effect waves-light">Update score</button>
														<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
													</div>
												</form>
											</div>
										</div>
									</div>

									<div id="view-modal{{$i}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h4 class="modal-title">{{$class['std_name']}}</h4>
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												</div>
												<div class="modal-body p-4">
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
															@if ($class['score_wri_1'] == 0)
																<label for="field-1" class="control-label">Writing 1</label>
																<input type="text" class="form-control" id="field-1" value="{{$class['score_wri_3']}}" readonly="readonly">
															@else
																<label for="field-1" class="control-label">Writing 1</label>
																<input type="text" class="form-control" id="field-1" value="{{$class['score_wri_1']}}" readonly="readonly">
															@endif
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label for="field-2" class="control-label">Writing 2</label>
																<input type="text" class="form-control" id="field-2" value="{{$class['score_wri_2']}}" readonly="readonly">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<label for="field-3" class="control-label">Overall writing score:</label>
																<input type="text" class="form-control" id="field-3" value="{{$class['score_wri_overall']}}" readonly="readonly">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-4">
															<div class="form-group">
																<label for="field-4" class="control-label">Listening:</label>
																<input type="text" class="form-control" id="field-4" value="{{$class['lis_score']}}" readonly="readonly">
															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label for="field-5" class="control-label">Reading:</label>
																<input type="text" class="form-control" id="field-5" value="{{$class['read_score']}}" readonly="readonly">
															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label for="field-6" class="control-label">Speaking</label>
																<input type="text" class="form-control" id="field-6" value="{{$class['score_speaking']}}" readonly="readonly">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<div class="form-group no-margin">
																<label for="field-7" class="control-label">Course Recommendation / Note:</label>
																<textarea class="form-control" id="field-7" placeholder="Write something about Course Recommendation" readonly="readonly"> {{$class['rec_course']}}</textarea>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label for="field-1" class="control-label">Overall band</label>
																<input type="text" class="form-control" id="field-1" value="{{$class['score_overall']}}" readonly="readonly">
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label for="field-2" class="control-label">Expected Band</label>
																<input type="text" class="form-control" id="field-2" value="{{$class['expectband']}}" readonly="readonly">
															</div>
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div><!-- /.modal -->

								@endforeach
							
						</tbody>
					@endif
				</table>
			@endif
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