
@extends('layouts.mocktest_admin')
@section('content')
<div class="content">
	<div class="row">
		<div class="col-12">
			<div class="card-box table-responsive">
				<h2 class="">Classroom Dashboard</h2>
				@if(session()->has('message'))
				{!!session()->get('message')!!}
				@endif 
								 
				
				<table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
					<thead>
						<tr>
							<th width="10px">#</th>
							<th>Class</th>
							<th>NC Code</th>
							<th>Teacher</th>
							<th>Expired date</th>
							<th>Status</th>
							<th>Class Password</th>
							
							 
							<!-- <th>Edit</th> -->
						</tr>
					</thead>
					<tbody>

                        <?php $i = 0;?>
                        @foreach ($data as $result)
                        <?php $i++; ?>
                            <tr>
                                <td>{{$i++}}</td>
                                <td><a href="{{route('class_detail',[$result->id]) }}">{{$result->coursename}}</a></td>
                                <td>{{$result->nccode}}</td>
                                <td>{{$result->th_name}}</td>
                                <td><span>{{date('d/m/Y',strtotime($result->lastdate))}}</span></td>
                                    <?php $lastdate=$result->lastdate.'23:59:59'?>
                                @if( strtotime($lastdate) >= strtotime(Carbon\Carbon::now()) )
                                <td><p class="badge badge-success">Active</p></td>
                                @else
                                <td><p class="badge badge-danger">Expire</p></td>
                                @endif
                            
                                <td>
                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#CenterModal{{$i}}"><i class="mdi mdi-lock"></i></button>
                                    <button type="button" class="btn {{ $result->name == null ? 'btn-secondary' : 'btn-warning' }} waves-effect waves-light" data-toggle="modal" data-target="#selectexam{{$i}}">{{ $result->name == null ? 'Add Class' : $result->name}}</button>
                                </td>
                            </tr>

                            <div id="selectexam{{$i}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="CenterModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <form action="{{route('update_set_exam')}}" method="post"> 
                                            {{ csrf_field() }}
                                            <input type="hidden" name="class_id" value="{{ $result->id }}">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Set Exam</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <h4 class="header-title text-center">Choose Set Exam</h4>
                                                <div class="row justify-content-center">
                                                    <div class="col-md-4">
                                                        <select class="custom-select mt-3" name="set_exam">
                                                            <option value="1" <?php if ($result->set_exam == '1') { echo 'selected'; } ?>>Key Skills 1</option>
                                                            <option value="2" <?php if ($result->set_exam == '2') { echo 'selected'; } ?>>Key Skills 2</option>
                                                            <option value="3" <?php if ($result->set_exam == '3') { echo 'selected'; } ?>>Foundation 1</option>
                                                            <option value="4" <?php if ($result->set_exam == '4') { echo 'selected'; } ?>>Foundation Extension 1</option>
                                                            <option value="5" <?php if ($result->set_exam == '5') { echo 'selected'; } ?>>Key Skills Extension 1</option>
                                                            <option value="6" <?php if ($result->set_exam == '6') { echo 'selected'; } ?>>Speak Write</option>
                                                            <option value="7" <?php if ($result->set_exam == '7') { echo 'selected'; } ?>>Gateway to IELTS</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                                            </div>
                                        </form>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                            <div id="CenterModal{{$i}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="CenterModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <form action="{{route('update_class_pass')}}" method="post"> 
                                            {{ csrf_field() }}
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Class Password</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>
                                                    <b>Class :</b> {{$result->coursename}} <br>
                                                    <b>NC Code :</b> {{$result->nccode}} 
                                                    <br><b>Old password :</b> <b class="badge badge-primary">{{$result->class_pass}}</b>
                                                </p>

                                                <hr>

                                                <div class="form-group">
                                                    <label for="field-6" class="control-label">New Password Classroom</label>
                                                    <input type="hidden" name="class_id" value="{{$result->id}}">
                                                    <input type="text" class="form-control" name="class_pass" placeholder="Password" required="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </form>
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        @endforeach
            
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- end content --> 



@endsection 