<!-------------------------------------------------- Start wri1---------------------------------------------------->
	<div class="tab-pane" id="writing1">
		@if(count($std_profile_wri1_part) == 0)
		@else   
		<table class="table table-bordered">
			<?php $i=0;?>
				@foreach ($std_profile_wri1_part as $value3)
			<?php $i++; ?>
			<tr colspan="12">
				<th class="ans_title">Writing1 Answer::Round {{$i}} | Set Exam :: {{$value3->set_exam}} | Date Exam :: {{date('d/m/Y H:i:s',strtotime($value3->create_date))}} </th>
				<th class="ans_title"><p align="right">
					<button class="btn btn-info waves-effect waves-light btn-sm" data-toggle="modal" data-target="#task1{{$value3->id}}"> Task1 pic</button>
					<button class="btn btn-success waves-effect waves-light btn-sm" data-toggle="modal" data-target="#update_score{{$value3->id}}"> Score</button>
					<button class="btn btn-danger waves-effect waves-light btn-sm px-3" data-toggle="modal" data-target="#del_answer_wri1{{$value3->id}}">Delete</button></p></th> 
			</tr>
			<tr>  
				<td colspan="12">{!!@$value3->text_answer!!} <span class="badge badge-success w-auto text-right float-right">Word : {{ count(explode(' ', html_entity_decode(strip_tags($value3->text_answer), ENT_QUOTES)))}}</span></td>
			</tr>

			<div id="task1{{$value3->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog modal-full">
					<div class="modal-content">
						<div class="modal-body">

							@if($value3->set_exam == '1')

							<p>You should spend about 20 minutes on this task.</p>

							<strong><p><i>The bar-chart below shows the advertising budget for a major company using a number of different types of media in millions of dollars during a twenty-year period, with projections for the future.<br></i></p></strong>

							<strong><p><i>Summarize the information by selecting and reporting on the main features, and make comparisons where relevant.<br></i></p></strong>

							<p>Write at least 150 words.</p>
							<img src="{{ asset('public/assets/images/task1.jpg') }}" style="width: 100%;">
							
							@elseif($value3->set_exam == '2')

							<p>You should spend about 20 minutes on this task.</p>

							<strong><p><i>The tables show world population between 1950 and 2050 and the distribution of population by region.<br></i></p></strong>
							<strong><p><i>Summarize the information by selecting and reporting on the main features, and make comparisons where relevant.<br></i></p></strong>

							<p>Write at least 150 words.</p>

							<img src="{{ asset('public/assets/images/writing_task1_part2-new.png') }}" style="width: 100%;">

							@elseif($value3->set_exam == '3')
								@include('student.mocktest.found_1.task1')
							@elseif($value3->set_exam == '4')
								@include('student.mocktest.found_ex.task1')
							@elseif($value3->set_exam == '5')
								@include('student.mocktest.key_ex.task1')
							@elseif($value3->set_exam == '6')
								@include('student.mocktest.speak_write.newtask1') 
							@endif
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
									<label class="col-auto col-form-label">Writing 1</label>
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
							<h4 class="modal-title" id="full-width-modalLabel">Delete Writing Task 1 Answer !</h4>
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
		<a href="{{ route('print_W1', ['std_id'=>$value3->std_id])}}" class="btn btn-primary btn-rounded w-md waves-effect waves-light m-b-5" target="_blank">Print Answer</a> 
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
				<th class="ans_title">Writing2 Answer::Round {{$i}} / Set Exam :: {{$value4->set_exam}} / Date Exam :: {{date('d/m/Y H:i:s',strtotime($value4->create_date))}} </th>
				<th class="ans_title"><p align="right">
					<button class="btn btn-info waves-effect waves-light btn-sm" data-toggle="modal" data-target="#task2{{$value4->id}}">Task2 pic</button>
					<button class="btn btn-success waves-effect waves-light btn-sm" data-toggle="modal" data-target="#update_score{{$value4->id}}">Score</button>
					<button class="btn btn-danger waves-effect waves-light btn-sm px-3" data-toggle="modal" data-target="#del_answer_wri2{{$value4->id}}">Delete</button></p>
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
									<label class="col-auto col-form-label">Writing 2</label>
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
							<h4 class="modal-title" id="full-width-modalLabel">Delete Writing Task 2 Answer !</h4>
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
							@if($value4->set_exam == '1')

								<p>You should spend about 40 minutes on this task.</p>

								<strong><p><i>The increasing number of tourists in the world is bringing benefits to both individuals and society.<br></i></p></strong>
								<strong><p><i>What benefits does tourism bring and are there any drawbacks?<br></i></p></strong>

								<p>Give reasons for your answer and include relevant examples from your own knowledge and experience.</p>

								Write at least 250 words.
								
							@elseif($value4->set_exam == '2')
								
								<p>You should spend about 40 minutes on this task.</p>
								<strong><p><i>Many people say that we now live in 'consumer societies' where money and possessions are given too much importance. Others believe that consumer culture has played a vital role in improving our lives.<br></i></p></strong>

								<strong><p><i>Discuss both views and give your opinion.<br></i></p></strong>

								Write at least 250 words.
							
							@elseif($value4->set_exam == '3')
								@include('student.mocktest.found_1.task2')
							@elseif($value4->set_exam == '4')
								@include('student.mocktest.found_ex.task2_new')
							@elseif($value4->set_exam == '5')
								@include('student.mocktest.key_ex.task2')
							@elseif($value4->set_exam == '6')
								@include('student.mocktest.speak_write.newtask2')
							@endif
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</table> 
		<a href="{{ route('print_W2', ['std_id'=>$value4->std_id])}}" class="btn btn-primary btn-rounded w-md waves-effect waves-light m-b-5" target="_blank">Print Answer</a> 
		@endif
	</div>
<!-------------------------------------------------- End wri2--------------------------------------------------->
