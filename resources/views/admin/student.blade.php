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
                        <th class="min-width">Tel</th>
                        <th class="min-width">iSAC_W</th>
                        <th class="min-width">iSAC_S</th>
                        <th class="min-width">Status</th>
                        <th class="min-width">Manage : </th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($data['student'] as $key => $row)
                        <tr>
                            <td>{{$row->std_id}}</td>
                            <td><a href="#">{{$row->std_username}}</a></td>
                            <td>{{ $row->std_mobile }}</td>
                            <td>{{ $row->std_pointsac }}</td><!-- iSAC_W -->
                            <td>{{ $row->std_pointspeaking }}</td><!-- SAC_S -->

                            <?php $lastdate=$row->lastdate.'23:59:59';?>
                            @if( strtotime($lastdate) >= strtotime(Carbon\Carbon::now()) )
                                <td><span class="badge label-table badge-success p-1">ใช้งาน</span></td>
                            @else
                                <td><span class="badge label-table badge-danger p-1">หมดอายุ</span></td>
                            @endif
                            
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

@endsection