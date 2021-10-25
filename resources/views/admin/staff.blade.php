@extends('layouts.main_admin')

@section('page-title')
	<div class="row">
		<div class="col-12 m-0">
			<div class="page-title-box">
				<div class="page-title-right">
					<ol class="breadcrumb m-0">
						<li class="breadcrumb-item"><i class="fas fa-home"></i> <a href="{{ route('admin_home') }}">Home</a></li>
						<!-- <li class="breadcrumb-item"><a href="#">Topic </a></li> -->
						<li class="breadcrumb-item active">Staff</li>
					</ol>
				</div>
				<h4 class="page-title">Staff</h4>
			</div>
		</div>
	</div>     
@endsection

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                @if(session()->has('success_ans'))
				{!!session()->get('success_ans')!!}
				@endif 

                @if(session()->has('error_ans'))
				{!!session()->get('error_ans')!!}
				@endif 

                {{-- <h4 class="header-title">User</h4> --}}
                <p class="sub-header">
                    Manage Staff List
                </p>

                <div class="mb-2">
                    <div class="row">
                        <div class="col-12 text-sm-center form-inline">
                            <div class="form-group mr-2">
								<button data-toggle="modal" data-target=".bs-example-modal-xl" class="btn btn-primary"><i class="mdi mdi-plus-circle mr-2"></i>Add new Staff</button>
                            </div>
                        </div>
                    </div>
                </div>

                <table id="basic-datatable" class="table dt-responsive nowrap">
                    <thead>
                    <tr>
                        <th class="min-width">Id</th>
                        <th data-sort-initial="true" data-toggle="true">Username</th>
                        <th>Level</th>
                        <th>Status</th>
                        <th>Manage : </th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($staff as $key => $row)
                        <tr>
                            <td>{{$row->staff_id}}</td>
                            <td>{{$row->staff_username}}</td>
                            <td>{{$row->staff_level}}</td>
                            <td><span class="badge badge-success p-2">{{$row->staff_status}}</span></td>

                            <td>
                                <div class="d-flex flex-row">
                                    <a href="{{url('edit/'.$row->staff_id)}}" class="btn btn-info btn-xs mr-1">Edit</a>

                                    <form method="POST" action="staffdelete/{{ $row->staff_id }}" method="POST" >
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button onclick="return confirm('Confirm delete staff ?!')" type="submit" class="btn btn-danger btn-xs mr-1">Delete</button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div> <!-- end card-box -->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
    <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Add new Staff</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body p-4">

                <form class="form-horizontal" role="form" action="addstaff" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="staff_status" value="active">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="staff_username">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="staff_username" name="staff_username" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="staff_password">Password</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="staff_password" name="staff_password" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="staff_username">Level</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="staff_level" name="staff_level" required>
                                <option value="admin">Admin</option>
                                <option value="cs">CS</option>
                                <option value="teacher">Teacher</option>
                                <option value="sale">Sale</option>
                                <option value="customer">Customer</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-info waves-effect waves-light">Add</button>
                        <a href="#" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</a>
                    </div>
                </form>
				</div>
			</div>
		</div>
	</div><!-- /.modal -->

@endsection