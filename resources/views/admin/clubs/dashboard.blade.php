@extends('layouts.main_admin')

@section('topbar-menu')
    <div class="topbar-menu">
        <div class="container-fluid">
            <div id="navigation" class="bg-dark">
                <!-- Navigation Menu-->
                <ul class="navigation-menu  d-lg-flex justify-content-center">

					<li class="has-submenu">
                        <a href="{{ url('/admin') }}" class="text-light">
                            <i class="fas fa-home"></i>Home
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ url('clubs/dashboard') }}" class="text-light">
                            <i class="fas fa-users"></i>Club Room
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ url('clubs/student') }}" class="text-light">
                            <i class="fas fa-address-card"></i>Student
                        </a>
                    </li>

                </ul>
                <!-- End navigation menu -->

                <div class="clearfix"></div>
            </div>
            <!-- end #navigation -->
        </div>
        <!-- end container -->
    </div>
@endsection

@section('page-title')
	<div class="row">
		<div class="col-12 m-0">
			<div class="page-title-box">
				<div class="page-title-right">
					<ol class="breadcrumb m-0">
						<li class="breadcrumb-item"><i class="fas fa-home"></i> <a href="{{ url('admin') }}">Home</a></li>
						<!-- <li class="breadcrumb-item"><a href="#">Topic </a></li> -->
						<li class="breadcrumb-item active">Club Room</li>
					</ol>
				</div>
				<h4 class="page-title">Club Room</h4>
			</div>
		</div>
	</div>     
@endsection

@section('content')

	<div class="row">
		<div class="col-sm-12">
			<div class="card-box">

				@if(session()->has('del_ans'))
				{!!session()->get('del_ans')!!}
				@endif 

				@if(session()->has('edit_ans'))
				{!!session()->get('edit_ans')!!}
				@endif 

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
        							<a href="{{ url('clubs/club_register/'.$row->id) }}" class="btn btn-xs btn-{{ $class }} p-1">{!! '<b style="color:#000">'.$row->teacher.'<br>'.$row->title_type.'</b><br>'.$row->title !!}</a>
								</td>
								<td>{{App\Clubregister::countSTD($row->id)}}/{{ $row->amount }}</td>
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
									<form  action="clubdelete/{{ $row->id }}" method="POST" onsubmit="return confirm('Are you sure?');">
										<input class="btn btn-xs btn-danger p-2" type="submit" value="Delete">
									</form>
									@else
										<form action="{{route('endclub')}}" method="POST">
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
									<div class="d-flex flex-row">
										<button data-toggle="modal" data-target="#edit-modal{{$row->id}}" class="btn btn-xs btn-info p-2">Edit</button>
										
										<div id="edit-modal{{$row->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title">Add new club</h4>
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
													</div>
													<div class="modal-body p-4">

														<form method="POST" action="clubupdate/{{ $row->id }}">
															<div class="row">
																<div class="col-md-12">
																	<div class="form-group">
																		<label for="subtitle_id" class="control-label">Sub Title*</label>
																		<select id="subtitle_id" class="form-control" name="subtitle_id" required>
																			<option selected="" value="{{$row->subtitle_id}}">{{ $row->title_type.' : '.$row->title }}</option>
																			@foreach (($data['club_type']) as $datas)
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
																		<input type="text" name="topicClub" class="form-control" id="field-1" value="{{$row->title_type}}">
																	</div>
																</div>
																<div class="col-md-4">
																	<div class="form-group">
																		<label for="field-2" class="control-label">Teacher Name</label>
																		<input type="text" name="teacher" class="form-control" id="field-2" value="{{$row->teacher}}">
																	</div>
																</div>
																<div class="col-md-4">
																	<div class="form-group">
																		<label for="field-2" class="control-label">Amount*</label>
																		<input type="number" id="example-number" name="amount" class="form-control" id="field-2" value="{{$row->amount}}">
																	</div>
																</div>
															</div>

															<!-- start date -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label for="field-4" class="control-label">Start Date*</label>
																		<input type="text" name="start_date" class="form-control" id="field-4" value="{{$row->start_date}}">
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label for="field-5" class="control-label">End Date*</label>
																		<input type="text" name="end_date" class="form-control" id="field-5" value="{{$row->end_date}}">
																	</div>
																</div>
															</div>


															<!-- show date -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label for="field-4" class="control-label">Start Show Date*</label>
																		<input type="text" name="start_post_date" class="form-control" id="field-4" value="{{$row->start_post_date}}">
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label for="field-5" class="control-label">End Show Date*</label>
																		<input type="text" name="end_post_date" class="form-control" id="field-5" value="{{$row->end_post_date}}">
																	</div>
																</div>
															</div>

															<div class="row">
																<div class="col-md-12 mt-3">
																	<div class="form-group">
																		@if ($row->status == 0)
																			<label class="radio-inline m-1">
																			<input type="radio" name="status" value="0" checked=""> 1 Point</label>
																			<label class="radio-inline m-1">
																			<input type="radio" name="status" value="1"> 1 Bonus</label>
																			<label class="radio-inline m-1">
																			<input type="radio" name="status" value="2"> ยกเลิกคลาส</label>
																		@elseif ($row->status == 1)
																			<label class="radio-inline m-1">
																			<input type="radio" name="status" value="0" > 1 Point</label>
																			<label class="radio-inline m-1">
																			<input type="radio" name="status" value="1" checked=""> 1 Bonus</label>
																			<label class="radio-inline m-1">
																			<input type="radio" name="status" value="3"> 1 Bonus S.2</label> 
																			<label class="radio-inline m-1">
																			<input type="radio" name="status" value="2"> ยกเลิกคลาส</label> 
																		@elseif ($row->status == 3)
																			<label class="radio-inline m-1">
																			<input type="radio" name="status" value="0" > 1 Point</label>
																			<label class="radio-inline m-1">
																			<input type="radio" name="status" value="1"> 1 Bonus</label>
																			<label class="radio-inline m-1">
																			<input type="radio" name="status" value="3" checked=""> 1 Bonus S.2</label> 
																			<label class="radio-inline m-1">
																			<input type="radio" name="status" value="2"> ยกเลิกคลาส</label>
																		@elseif ($row->status == 2)
																			<label class="radio-inline">
																			<input type="radio" name="status" value="2" checked=""> ยกเลิกคลาส</label> 
																		@endif
																	</div>
																</div>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
																<button type="submit" class="btn btn-info waves-effect waves-light">Edit</button>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div><!-- modal -->

										<p>&nbsp</p>

										<form method="POST" action="clubdelete/{{ $row->id }}" method="POST" >
											<button onclick="return confirm('ต้องการลบ Class ?!')" type="submit"  class="btn btn-xs btn-danger p-2" onsubmit="return confirm('Are you sure?');">Delete</button>
										</form>
									</div>
									
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
									<label for="subtitle_id" class="control-label">Sub Title*</label>
									<select id="subtitle_id" class="form-control" name="subtitle_id" required>
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

						<!-- start date -->
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="start_time" class="control-label">Start Time*</label>
									<select id="start_time" class="form-control" name="start_time" required>
										<option selected="" value="">เลือกเวลาเริ่มคลับ</option>
										<option value="13:15:00">13:15 น.</option>
										<option value="14:00:00">14:00 น.</option>
										<option value="15:00:00">15:00 น.</option>
										<option value="17:00:00">17:00 น.</option>
										<option value="17:30:00">17:30 น.</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="end_time" class="control-label">End Time*</label>
									<select id="end_time" class="form-control" name="end_time" required>
										<option selected="" value="">เลือกเวลาจบคลับ</option>
										<option value="15:00:00">15:00 น.</option>
										<option value="16:00:00">16:00 น.</option>
										<option value="18:00:00">18:00 น.</option>
										<option value="18:30:00">18:30 น.</option>
									</select>
								</div>
							</div>
						</div>

						<hr>

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
