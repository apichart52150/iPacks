@extends('layouts.main_admin')

@section('topbar-menu')
    <div class="topbar-menu">
        <div class="container-fluid">
            <div id="navigation" class="bg-dark">
                <!-- Navigation Menu-->
                <ul class="navigation-menu  d-lg-flex justify-content-center">

					<li class="has-submenu">
                        <a href="{{ url('admin') }}" class="text-light">
                            <i class="fas fa-home"></i>Home
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ url('student') }}" class="text-light">
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
						<li class="breadcrumb-item active">User</li>
					</ol>
				</div>
				<h4 class="page-title">User</h4>
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

                <h4 class="header-title">User</h4>
                <p class="sub-header">
                    Manage User List
                </p>

                <div class="mb-2">
                    <div class="row">
                        <div class="col-12 text-sm-center form-inline">
                            <div class="form-group mr-2">
								<button data-toggle="modal" data-target=".bs-example-modal-xl" class="btn btn-primary"><i class="mdi mdi-plus-circle mr-2"></i> Add User</button>
                            </div>
                        </div>
                    </div>
                </div>

                <table id="basic-datatable" class="table dt-responsive nowrap ">
                    <thead>
                    <tr>
                        <th class="min-width">Id</th>
                        <th data-sort-initial="true" data-toggle="true">Username</th>
                        <th>Mobile</th>
                        <th>Manage : </th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($student as $key => $row)
                        <tr>
                            <td>{{$row->std_id}}</td>
                            <td><a href="#">{{$row->std_username}}</a></td>
                            <td>{{ $row->std_mobile }}</td>

                            <td>
                                <div class="d-flex flex-row">
                                    <a href="{{url('edit/'.$row->std_id)}}" class="btn btn-info btn-xs mr-1">Edit</a>

                                    <form method="POST" action="studentdelete/{{ $row->std_id }}" method="POST" >
                                            <button onclick="return confirm('ต้องการลบข้อมูลนักเรียน ?!')" type="submit" class="btn btn-danger btn-xs mr-1">Delete</button>
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
					<h4 class="modal-title">Add new User</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body p-4">

                <form class="form-horizontal" role="form" action="addstudent" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="std_username">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="std_username" name="std_username">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="std_mobile">Mobile</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="std_mobile" name="std_mobile">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Full Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="std_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nickname</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="std_nickname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">iSAC Writing</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="std_pointsac">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">iSAC Speaking</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="std_pointspeaking">
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <a href="{{url('clubs/student')}}" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancle</a>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Add</button>
                    </div>
                </form>
				</div>
			</div>
		</div>
	</div><!-- /.modal -->

@endsection