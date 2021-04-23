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
						<li class="breadcrumb-item active">Student</li>
					</ol>
				</div>
				<h4 class="page-title">Student</h4>
			</div>
		</div>
	</div>     
@endsection

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <h4 class="header-title">Student</h4>
                <p class="sub-header">
                    Manage Student List
                </p>

                <div class="mb-2">
                    <div class="row">
                        <div class="col-12 text-sm-center form-inline">
                            <div class="form-group mr-2">
								<button data-toggle="modal" data-target=".bs-example-modal-xl" class="btn btn-primary"><i class="mdi mdi-plus-circle mr-2"></i> Add Student</button>
                            </div>
                        </div>
                    </div>
                </div>

                <table id="basic-datatable" class="table dt-responsive nowrap ">
                    <thead>
                    <tr>
                        <th data-sort-initial="true" class="min-width">Id</th>
                        <th data-sort-initial="true" data-toggle="true">Username</th>
                        <th data-sort-initial="true">Tel</th>
                        <th data-sort-initial="true" class="min-width">Point</th>
                        <th data-sort-initial="true" class="min-width">Bonus</th>
                        <th data-sort-initial="true" class="min-width">iSAC_W</th>
                        <th data-sort-initial="true" class="min-width">iSAC_P</th>
                        <th data-sort-initial="true" class="min-width">iSAC_S</th>
                        <th data-sort-initial="true" class="min-width">Code</th>
                        <th data-sort-initial="true" class="min-width">Course</th>
                        <th data-sort-initial="true" class="min-width">Status</th>
                        <th data-sort-initial="true" class="min-width">Manage Club : </th>
                    </tr>
                    </thead>
                    <tbody>

                    @php
                        $student = $data['student']
                    @endphp

                    @foreach($student as $key => $row)

                        @if (!empty($row->crm_std_id))
                            <tr>
                                <td>{{$row->crm_std_id}}</td>
                                <td><a href="{{ url('clubs/logs/'.$row->std_id) }}">{{$row->std_username}}</a></td>
                                <td>{{ $row->std_mobile }}</td>
                                <td>{{ $row->std_point }}</td>
                                <td>{{ $row->std_bonus }}</td>
                                <td>{{ $row->std_pointsac }}</td><!-- iSAC_W -->
                                <td>{{$row->std_sacpaper}}</td><!-- SAC_P -->
                                <td>{{ $row->std_pointspeaking }}</td><!-- SAC_S -->
                                <td>{{ $row->nccode }}</td><!-- iSAC_S -->
                                <td>{{ $row->coursename }}</td><!-- iSAC_W -->

                                <?php $lastdate=$row->lastdate.'23:59:59';?>
                                @if( strtotime($lastdate) >= strtotime(Carbon\Carbon::now()) )
                                    <td><span class="badge label-table badge-success p-1">ใช้งาน</span></td>
                                @else
                                    <td><span class="badge label-table badge-danger p-1">หมดอายุ</span></td>
                                @endif
                                
                                <td>
                                    <div class="d-flex flex-row">
                                        <a href="{{url('clubs/edit/'.$row->std_id)}}" class="btn btn-info btn-xs mr-1">Edit</a>

                                        <form method="POST" action="studentdelete/{{ $row->std_id }}" method="POST" >
                                                <button onclick="return confirm('ต้องการลบข้อมูลนักเรียน ?!')" type="submit" class="btn btn-danger btn-xs mr-1">Delete</button>
                                        </form>

                                        <button data-toggle="modal" data-target="#add-club{{$row->std_id}}" class="btn btn-info btn-xs mr-1"><i class="mdi mdi-plus-circle mr-2"></i> Add Club</button>

                                        
                                    </div>
                                </td>
                            </tr>
                        @endif
                        <div id="add-club{{$row->std_id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Club</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body p-4">
                                        <p class="font-weight-bold">Name : {{$row->std_name}}</p>
                                        <p class="font-weight-bold">Username : {{$row->std_username}}</p>
                                        <p class="font-weight-bold">Mobile : {{$row->std_mobile}}</p>
                                        <p class="font-weight-bold">Point : {{$row->std_point}}</p>
                                        <p class="font-weight-bold">Bonus : {{$row->std_bonus}}</p>

                                        <form action="{{ url('clubs/add_clubstudent') }}" method="POST">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="std_id" value="{{ $row->std_id }}"  />
                                            <input type="hidden" name="point" value="{{ $row->std_point }}"  />
                                            <input type="hidden" name="bonus" value="{{ $row->std_bonus }}"  />
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="room_id" class="control-label">Add Club*</label>
                                                        <select id="room_id" class="form-control" name="room_id" required>
                                                            <option selected="" value="">เลือก Club Room</option>
                                                            @foreach ($data['club_type'] as $datas)
                                                                <option value="{{ $datas->id }}">{!! $datas->title_type.' :<b>'.$datas->teacher.' </b>'.date('j F, Y h:i:s',strtotime($datas->start_date)).' '.$datas->title !!}</option>
                                                            @endforeach
                                                        </select>
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
					<h4 class="modal-title">Add new club</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body p-4">

                    <div class="row">
                        <div class="col-sm-5 col-sm-offset-2">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                                    </ul>
                                </div>
                            @endif

                            @if (@$_GET['status'] == 'er-01')
                            <div class="alert alert-danger">
                            <strong> Create Error </strong>  Username* นี้มีในระบบแล้ว ไม่สามารถสร้างซ้อนทับได้
                            </div>
                            @endif
                        </div>
                    </div>

                <form class="form-horizontal" role="form" action="addstudent" method="POST">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="simpleinput">Class || Course</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="course" required="">
								<option select="" value="">เลือก Course ที่เรียน</option>
                                @foreach ($data['course'] as $datas)
                                    <option value="{{ $datas->nccode }}">{{ $datas->coursename.' '.$datas->nccode }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
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
                        <label class="col-sm-2 col-form-label" for="std_password">Password</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="std_password" id="std_password">
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
                        <label class="col-sm-2 col-form-label">Club</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="std_point">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Bonus</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="std_bonus">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">SAC Paper</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="std_sacpaper">
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