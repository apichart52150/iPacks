<!-------------------------------------------------- Start wri1---------------------------------------------------->
	<div class="tab-pane" id="writing1">
		@if(count($std_profile_wri1_part) == 0)
		@else   
		<table class="table table-bordered">
			<?php $i=0;?>
				@foreach ($std_profile_wri1_part as $value3)
			<?php $i++; ?>
			<tr colspan="12">
				<th class="ans_title">Writing 1 Academic Answer::Round {{$i}} | Set Exam :: {{$value3->set_exam}} | Date Exam :: {{date('d/m/Y H:i:s',strtotime($value3->create_date))}} </th>
				<th class="ans_title"><p align="right">
					<button class="btn btn-info waves-effect waves-light btn-sm" data-toggle="modal" data-target="#task1{{$value3->id}}"> Task 1 Academic pic</button>
					<button class="btn btn-success waves-effect waves-light btn-sm" data-toggle="modal" data-target="#update_score{{$value3->id}}">Score</button>
					<button class="btn btn-danger waves-effect waves-light btn-sm px-3" data-toggle="modal" data-target="#del_answer_wri1{{$value3->id}}">Delete</button></p></th> 
			</tr>
			<tr>  
				<td colspan="12">{!!@$value3->text_answer!!} <span class="badge badge-success w-auto text-right float-right">Word : {{ count(explode(' ', html_entity_decode(strip_tags($value3->text_answer), ENT_QUOTES)))}}</span></td>
			</tr>

			<div id="task1{{$value3->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog modal-full">
					<div class="modal-content">
						<div class="modal-body">
								@include('gateway.newtask1') 		 
						</div>
					</div>
				</div>
			</div>

			<div id="update_score{{$value3->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog modal-full">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="full-width-modalLabel">Update Score</h4>
						</div>
						<form action="{{ route('update_writing') }}" method="POST">
							{{ csrf_field() }}

							<input type="hidden" name="row_id" value="{{ $value3->id }}">
							<input type="hidden" name="class_id" value="{{ $value3->classroom_id}}">

							<div class="modal-body">
								<div class="form-group row justify-content-center">
									<label class="col-auto col-form-label">Writing 1 Academic</label>
									<div class="col-auto">
										<input type="text" class="form-control p-0 my-0" name="score_writing1" onkeypress="return chkNumber(this)">
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
								<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- end modal update Score -->

			<div id="del_answer_wri1{{$value3->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog modal-full">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="full-width-modalLabel">Delete Writing 1 Academic Answer !</h4>
						</div>
						<div class="modal-body">
							<label>Are you sure want to delete !</label>
						</div>
						<div class="modal-footer">
							<a href="{{ route('del_ans_wri',['del_ans_wri' => $value3->id,'std_id' => $value3->std_id]) }}" class="btn btn-primary waves-effect waves-light">Yes</a>
							<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">No</button>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</table> 
		<a href="{{ route('print_G1', ['std_id'=>$value3->std_id])}}" class="btn btn-primary btn-rounded w-md waves-effect waves-light m-b-5" target="_blank">Print Answer</a> 
		@endif
	</div>
	<!-------------------------------------------------- End wri1--------------------------------------------------->
	<!-------------------------------------------------- Start wri2---------------------------------------------------->

	<div class="tab-pane" id="writing2">
		@if(count($std_profile_wri2_part) == 0)
		@else   
		<table class="table table-bordered">
			<?php $i=0;?>
				@foreach ($std_profile_wri2_part as $value4)
			<?php $i++;?>
			<tr colspan="12">
				<th class="ans_title">Writing 1 General Training Answer::Round {{$i}} / Set Exam :: {{$value4->set_exam}} / Date Exam :: {{date('d/m/Y H:i:s',strtotime($value4->create_date))}} </th>
				<th class="ans_title"><p align="right">
					<button class="btn btn-info waves-effect waves-light btn-sm" data-toggle="modal" data-target="#task2{{$value4->id}}"><i class="fa fa-file-image-o" aria-hidden="true"></i> Task 1 General Training pic</button>
					<button class="btn btn-success waves-effect waves-light btn-sm" data-toggle="modal" data-target="#update_score{{$value4->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Score</button>
					<button class="btn btn-danger waves-effect waves-light btn-sm px-3" data-toggle="modal" data-target="#del_answer_wri2{{$value4->id}}"><i class="mdi mdi-delete" aria-hidden="true"></i></button></p>
				</th> 
			</tr>
			<tr>  
				<td colspan="12">{!!$value4->text_answer!!} <span class="badge badge-success w-auto text-right float-right">Word : {{ count(explode(' ', html_entity_decode(strip_tags($value4->text_answer), ENT_QUOTES)))}}</span></td>
			</tr>

			<div id="update_score{{$value4->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog modal-full">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="full-width-modalLabel">Update Score</h4>
						</div>
						<form action="{{ route('update_writing') }}" method="POST">
							{{ csrf_field() }}

							<input type="hidden" name="row_id" value="{{ $value4->id }}">
							<input type="hidden" name="class_id" value="{{ $value4->classroom_id}}">

							<div class="modal-body">
								<div class="form-group row justify-content-center">
									<label class="col-auto col-form-label">Writing 1 General Training</label>
									<div class="col-auto">
										<input type="text" class="form-control p-0 my-0" name="score_writing2" onkeypress="return chkNumber(this)">
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
								<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- end modal update Score -->

			<div id="del_answer_wri2{{$value4->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog modal-full">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="full-width-modalLabel">Delete Writing 1 General Training Answer !</h4>
						</div>
						<div class="modal-body">
							<label>Are you sure want to delete !</label>
						</div>
						<div class="modal-footer">
							<a href="{{ route('del_ans_wri',['del_ans_wri'=>$value4->id,'std_id'=>$value4->std_id]) }}" class="btn btn-primary waves-effect waves-light">Yes</a>
							<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">No</button>
						</div>
					</div>
				</div>
			</div>
			<div id="task2{{$value4->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-body">
								@include('gateway.newtask2')
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</table> 
		<a href="{{ route('print_G2', ['std_id'=>$value4->std_id])}}" class="btn btn-primary btn-rounded w-md waves-effect waves-light m-b-5" target="_blank">Print Answer</a> 
		@endif
	</div>
	<!-------------------------------------------------- End wri2--------------------------------------------------->

	<div class="tab-pane" id="writing3">
		@if(count($std_profile_wri3_part) == 0)
		@else   
		<table class="table table-bordered">
			<?php $i=0;?>
			@foreach ($std_profile_wri3_part as $value5)
			<?php $i++;?>
			<tr colspan="12">
				<th class="ans_title">Writing 2 Answer::Round {{$i}} / Set Exam :: {{$value5->set_exam}} / Date Exam :: {{date('d/m/Y H:i:s',strtotime($value5->create_date))}} </th>
				<th class="ans_title"><p align="right">
					<button class="btn btn-info waves-effect waves-light btn-sm" data-toggle="modal" data-target="#task3{{$value5->id}}"><i class="fa fa-file-image-o" aria-hidden="true"></i> Task 2 pic</button>
					<button class="btn btn-success waves-effect waves-light btn-sm" data-toggle="modal" data-target="#update_score{{$value5->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Score</button>
					<button class="btn btn-danger waves-effect waves-light btn-sm px-3" data-toggle="modal" data-target="#del_answer_wri3{{$value5->id}}"><i class="mdi mdi-delete" aria-hidden="true"></i></button></p>
				</th> 
			</tr>
			<tr>  
				<td colspan="12">{!!$value5->text_answer!!} <span class="badge badge-success w-auto text-right float-right">Word : {{ count(explode(' ', html_entity_decode(strip_tags($value5->text_answer), ENT_QUOTES)))}}</span></td>
			</tr>

			<div id="update_score{{$value5->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog modal-full">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="full-width-modalLabel">Update Score</h4>
						</div>
						<form action="{{ route('update_writing') }}" method="POST">
							{{ csrf_field() }}

							<input type="hidden" name="row_id" value="{{ $value5->id }}">
							<input type="hidden" name="class_id" value="{{ $value5->classroom_id}}">

							<div class="modal-body">
								<div class="form-group row justify-content-center">
									<label class="col-auto col-form-label">Writing 2</label>
									<div class="col-auto">
										<input type="text" class="form-control p-0 my-0" name="score_writing3" onkeypress="return chkNumber(this)">
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
								<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- end modal update Score -->

			<div id="del_answer_wri3{{$value5->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog modal-full">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="full-width-modalLabel">Delete Writing Task 2 Answer !</h4>
						</div>
						<div class="modal-body">
							<label>Are you sure want to delete !</label>
						</div>
						<div class="modal-footer">
							<a href="{{ route('del_ans_wri',['del_ans_wri'=>$value5->id,'std_id'=>$value5->std_id]) }}" class="btn btn-primary waves-effect waves-light">Yes</a>
							<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">No</button>
						</div>
					</div>
				</div>
			</div>
			
			<div id="task3{{$value5->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-body">
								@include('gateway.newtask3')
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</table> 
		<a href="{{ route('print_G3', ['std_id'=>$value5->std_id])}}" class="btn btn-primary btn-rounded w-md waves-effect waves-light m-b-5" target="_blank">Print Answer</a> 
		@endif
	</div>
<!-------------------------------------------------- End wri3--------------------------------------------------->