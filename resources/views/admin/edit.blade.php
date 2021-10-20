@extends('layouts.main_admin')


@section('page-title')
	<div class="row">
		<div class="col-12 m-0">
			<div class="page-title-box">
				<div class="page-title-right">
					<ol class="breadcrumb m-0">
						<li class="breadcrumb-item"><i class="fas fa-address-card"></i> <a href="{{ route('staff') }}">Staff</a></li>
						<!-- <li class="breadcrumb-item"><a href="#">Topic </a></li> -->
						<li class="breadcrumb-item active">Edit</li>
					</ol>
				</div>
				<h4 class="page-title">Edit</h4>
			</div>
		</div>
	</div>     
@endsection

@section('content')
<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 class="header-title">Edit</h4>
            <div class="row">
                <div class="col-12">
                    <div class="p-2">
                    @foreach ($staff as $staff)

                        <form class="form-horizontal" role="form" action="staffupdate/{{ $staff->staff_id }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="staff_id">ID</label>
                                <div class="col-sm-10">
                                    <input type="text" id="staff_id" name="staff_id" class="form-control border border-primary" value="{{$staff->staff_id}}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="staff_username">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="staff_username" name="staff_username" value="{{$staff->staff_username}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="staff_password">Password</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="staff_password" name="staff_password" placeholder="Change new password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Level</label>
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

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="staff_status" name="staff_status" required>
                                        <option value="active">Active</option>
                                        <option value="disabled">Disabled</option>
                                    </select>
                                </div>
                            </div>
            
                            <div class="form-group text-center">
							    <button type="submit" class="btn btn-info waves-effect waves-light">Edit</button>
                                <a href="{{ route('staff') }}" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</a>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div> <!-- end card-box -->
    </div><!-- end col -->
</div>
<!-- end row -->

@endsection