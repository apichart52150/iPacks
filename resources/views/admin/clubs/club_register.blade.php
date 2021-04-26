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
						<li class="breadcrumb-item"><i class="fas fa-home"></i> <a href="{{ url('clubs/dashboard') }}">Home</a></li>
						<!-- <li class="breadcrumb-item"><a href="#">Topic </a></li> -->
						<li class="breadcrumb-item active">Club Register</li>
					</ol>
				</div>
				<h4 class="page-title">Club Register</h4>
			</div>
		</div>
	</div>     
@endsection



@section('content')
@if ($club_register->count())
<script>
    function myFunction() {
        confirm("Press a button!");
    }
</script>

	<div class="row">
		<div class="col-sm-12">
			<div class="card-box">
				<h4 class="header-title">{{ $club_register[0]->title_type.' '.$club_register[0]->club_subtitle.' 
            : '.$club_register[0]->start_date.' ( '.$club_register[0]->teacher.' )' }}</h4>
				<p class="sub-header">
					Add or remove Club.
				</p>

                <div class="mb-2">
					<div class="row">
						<div class="col-12 text-sm-center form-inline">
							<div class="form-group mr-2">
                                <a href="{{ url('clubs/excel_club_register/'.$id['id']) }}" type="button" class="btn btn-success">Export Excel</a>
							</div>
						</div>
					</div>
				</div>

				<table id="basic-datatable" class="table dt-responsive nowrap ">
					<thead>
						<tr>
                            <th>Name</th>
                            <th>Tel.</th>
                            <th>NC-Code</th>
                            <th>Couse</th>
                            <th>Register</th>
                            <th></th>
						</tr>
					</thead>
					<tbody>
                    @foreach ($club_register as $row)
                    <tr>
                        <td><a href="{{ url('clubs/edit/'.$row->std_id) }}" class="btn btn-xs btn-success">{!! $row->std_name.' <b style="color:#000">( '.$row->std_nickname.' )</b>' !!}</a></td>
                        <td>{{ $row->std_mobile }}</td>
                        <td>{{ $row->nccode }}</td>
                        <td>{{ $row->coursename }}</td>
                        <td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($row->datecreate))->diffForHumans() }}</td>
                        
                        @if ($row->clubroom_st != 2)
                        
                        <td>
                            <form action="{{ url('clubs/club_check') }}" name="action" method="POST">
                                <input type="hidden" name="start_date" value="{{ $club_register[0]->start_date }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="std_id" value="{{ $row->std_id }}"  />
                                <input type="hidden" name="room_id" value="{{ $row->room_id }}"  />
                                <input type="hidden" name="clubroom_st" value="{{ $row->clubroom_st }}"  />
                                <input type="hidden" name="detail" value="{{ $row->title_type }}"  />
                                <input type="hidden" name="teacher" value="{{ $club_register[0]->teacher }}"  />
                                <input type="hidden" name="status" value="success"  />
                                <button onclick="return confirm('มาเรียน !!!')" type="submit" name="status" value="success" class="btn btn-xs btn-success">Attendance</button>
                                <button onclick="return confirm('ขาดเรียน !!!')"  type="submit" name="status" value="fail" class="btn btn-xs btn-danger">Absence</button>
                                <button onclick="return confirm('ยกเลิกการจอง !!!')"  type="submit" name="status" value="cancel" class="btn btn-xs btn-danger">Cancel</button>
                            </form>
                        </td>
                    
                        @elseif ($row->clubroom_st == 2)  
                        
                            <?php 
                            //print_r($status[$id]);die;ไม่มีค่า
                            @$std_id = $row->std_id;
                            //dd($row->std_id);
                            ?>
                
                            @if ($status[$std_id] == 0)  
                            <td> <button class="btn btn-success">รับทราบแล้ว</button></td>
                            @elseif ($status[$std_id]  == 1)  
                            <td> <button class="btn btn-danger">ยังไม่รับทราบ</button></td> 
                            @else
                            <td>dddd</td>
                            @endif
                        @endif 
                        </tr>
                    @endforeach
					</tbody>
				</table>
			</div> <!-- end card -->
		</div><!-- end col-->
	</div>

@else
    <div class="portlet box green">
        <div class="portlet-body">
            ไม่มีข้อมูล หรือไม่มีนักเรียนในคลับนี้ <a href="{{ url('admin/club_room') }}" class="btn btn-xs btn-success">กรุณาเลือก Club Room</a>
        </div>
	</div>
@endif

@endsection
