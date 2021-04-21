@extends('layouts.main_admin')
@section('content')

   <!-- start page title -->
   <div class="row">
        <div class="col-xl-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Home Admin</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>     
	
	<div class="row">
		<div class="col-sm-12">
			<div class="card-box">
				<h4 class="header-title">Club Room</h4>
				<p class="sub-header">
					Add or remove Club.
				</p>

				<div class="mb-2">
					<div class="row">
						<div class="col-12 text-sm-center form-inline">
							<div class="form-group mr-2">
								<button data-toggle="modal" data-target="#con-close-modal" class="btn btn-primary"><i class="mdi mdi-plus-circle mr-2"></i> Add New Club</button>
							</div>
						</div>
					</div>
				</div>

				@php
					$rooms = $data['club_room']
				@endphp


				<table id="basic-datatable" class="table dt-responsive nowrap ">
					<thead>
						<tr>
							<th>Sub Title</th>
							<th>Amount</th>
							<th>Start Date</th>
							<th>End Date</th>
							<th>Status</th>
							<th>ยกเลิก Class</th>
							<th>&nbsp;</th>
						</tr>
					</thead>
				
					
					<tbody>
						@foreach ($rooms as $key => $row)

							@if ($row->status == 0)
								<?php  $class = 'success' ?>
							@elseif ($row->status == 1) 
								<?php $class = 'warning'	?>
							@elseif ($row->status == 2) 
								<?php $class = 'danger' ?>
							@elseif ($row->status == 3) 
								<?php $class = 'info' ?>
							@endif  

							<tr>
								<td>
        							<a href="{{ url('admin/club_register/'.$row->id) }}" target="_blank" class="btn btn-xs btn-{{ $class }} p-1">{!! '<b style="color:#000">'.$row->teacher.'<br>'.$row->title_type.'</b><br>'.$row->title !!}</a>
								</td>
								<td>System Architect</td>
								<td>{{ $row->start_date }}</td>
								<td>{{ $row->end_date }}</td>
								<td>
									@if ($row->status == 0)  <span class="badge badge-success p-2">Point</span> 
									@elseif ($row->status == 1)  <span class="badge badge-warning p-2">Bonus 1</span>
									@elseif ($row->status == 3)  <span class="badge badge-purple p-2">Bonus 2</span> 
									@elseif ($row->status == 2)  <span class="badge badge-secondary p-2">Cancle </span>
									@endif 
								</td>
								<td>
									@if ($row->status == 2)
										<button onclick="return confirm('ต้องการลบ Class ?!')" type="submit"  class="btn btn-xs btn-danger p-2">Delete</button>
									@else
										<form action="{{ url('admin/endclass') }}" name="action" method="POST">
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
											<input type="hidden" name="room_id" value="{{ $row->id }}">
											<input type="hidden" name="status" value="{{ $row->status }}">
											<input type="hidden" name="title_type" value="{{ $row->title_type.' '.$row->teacher }}">
											<input type="hidden" name="start_date" value="{{ $row->start_date }}">
											<button onclick="return confirm('ยกเลิก Class !!!')" type="submit"  class="btn btn-xs btn-danger p-2">Cancle</button>
										</form>
									@endif
								</td>
								<td>
									<button  type="submit"  class="btn btn-xs btn-info p-2">Edit</button>
									<button onclick="return confirm('ต้องการลบ Class ?!')" type="submit"  class="btn btn-xs btn-danger p-2">Delete</button>
								</td>
							</tr>

						@endforeach
					</tbody>
				</table>
			</div> <!-- end card -->
		</div><!-- end col-->
	</div>
	<!-- end row-->

	<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Add new club</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body p-4">

					<form action="{{route('addclub')}}" method="POST">

						@php
							$type_name = $data['club_type']
						@endphp

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="field-11" class="control-label">Sub Title*</label>
									<select id="field-11" class="form-control" name="subtitle_id" required>
										<option selected="" value="">เลือก Sub Title เพื่อสร้างห้องเรียน</option>
										@foreach ($type_name as $datas)
											<option value="{{ $datas->id }}">{{ $datas->title_type.' : '.$datas->title }}</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="field-1" class="control-label">Topic Club</label>
									<input type="text" name="topicClub" class="form-control" id="field-1" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="field-2" class="control-label">Teacher Name</label>
									<input type="text" name="teacher" class="form-control" id="field-2"  required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="field-2" class="control-label">Amount*</label>
									<input type="number" id="example-number" name="amount" class="form-control" id="field-2" required>
								</div>
							</div>
						</div>

						<!-- start date -->
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="field-4" class="control-label">Start Date*</label>
									<input type="date" name="start_date" class="form-control" id="field-4" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="field-5" class="control-label">End Date*</label>
									<input type="date" name="end_date" class="form-control" id="field-5" required>
								</div>
							</div>
						</div>

						<!-- show date -->
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="field-4" class="control-label">Start Show Date*</label>
									<input type="date" name="start_post_date" class="form-control" id="field-4" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="field-5" class="control-label">End Show Date*</label>
									<input type="date" name="end_post_date" class="form-control" id="field-5" required>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 mt-3">
								<div class="custom-control custom-radio">
									<input type="radio" id="customRadio1" name="status" value="0" class="custom-control-input" required>
									<label class="custom-control-label" for="customRadio1">1 Point</label>
								</div>
								<div class="custom-control custom-radio">
									<input type="radio" id="customRadio2" name="status" value="1" class="custom-control-input" required>
									<label class="custom-control-label" for="customRadio2">1 Bonus S.1 </label>
								</div>
								<div class="custom-control custom-radio">
									<input type="radio" id="customRadio3" name="status" value="3" class="custom-control-input" required>
									<label class="custom-control-label" for="customRadio3">1 Bonus S.2</label>
								</div>
							</div>
						</div>
					
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-info waves-effect waves-light">Add</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!-- /.modal -->

@endsection
