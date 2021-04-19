<!-------------------------------------------------- Start reading------------------------------------------------->
	<div class="tab-pane" id="reading">
		@if(count(@$std_profile_read_part) == 0)
		@else   
		<table class="table table-bordered">
			<?php $i=0;?>
			@foreach ($std_profile_read_part as $value2)
			<?php $i++; ?>
			<tr>
				<th colspan="7" class="ans_title">Reading Answer::Round {{$i}} | Set Exam :: {{$value2->set_exam}} | Date Exam :: {{date('d/m/Y H:i:s',strtotime($value2->update_date))}}</th>
				<th colspan="3" class="ans_title text-center">Total Score : {{$value2->read_score_total}}</th>
				<th colspan="3" class="ans_title text-right"><button class="btn btn-danger waves-effect waves-light btn-sm" data-toggle="modal" data-target="#del_answer_read{{$value2->id}}">Del Answer</button></th>
			</tr> 
			<tr>
				@for($i = 1; $i <= 40; $i++)
				<?php $data = 'q'.($i); 
				$as = 'as'.($i);?>
				@if($i == 6 || $i == 12 || $i == 18 || $i == 24 || $i == 30 || $i == 36)
				<td class="ans_label">{{ $i }}</td>
				<td class="ans_ans">@if($value2->$as == 1)
					<i class="mdi mdi-check text-success"></i>
					@else
					<i class="mdi mdi-close text-danger"></i>@endif{{$value2->$data}}
				</td>
			</tr>
			<tr>
				@else
				<td class="ans_label">{{ $i }}</td><td class="ans_ans">@if($value2->$as == 1)
					<i class="mdi mdi-check text-success"></i>
					@else
					<i class="mdi mdi-close text-danger"></i>@endif{{$value2->$data}}
				</td>
				@endif
				@endfor
			</tr>
			<div id="del_answer_read{{$value2->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog modal-full">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="full-width-modalLabel">Delete Answer !</h4>
						</div>
						<div class="modal-body">
							<label>Are you sure want to delete !</label>
						</div>
						<div class="modal-footer">
							<a href="{{ route('del_ans',['del_ans'=>$value2->id,'std_id'=>$value2->std_id]) }}" class="btn btn-primary waves-effect waves-light">Yes</a>
							<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">No</button>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</table>    
		<a href="{{ route('print_R', ['std_id'=>$value2->std_id])}}" class="btn btn-primary btn-rounded w-md waves-effect waves-light m-b-5" target="_blank">Print Answer</a>            
		@endif
	</div>
<!-------------------------------------------------- End reading--------------------------------------------------->