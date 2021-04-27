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
						<li class="breadcrumb-item"><i class="fas fa-address-card"></i> <a href="{{ url('clubs/student') }}">Student</a></li>
						<!-- <li class="breadcrumb-item"><a href="#">Topic </a></li> -->
						<li class="breadcrumb-item active">History</li>
					</ol>
				</div>
				<h4 class="page-title">History</h4>
			</div>
		</div>
	</div>     
@endsection
@section('content')
<div class="row">
	<div class="col-12">
		<div class="card-box">
			<div class="col-md-12 mt-2">
				<p class=""><b>Name :</b> {{ $std_info[0]->std_name }}</p>
				<p class=""><b>Username :</b> {{ $std_info[0]->std_username }}</p>
				<p class=""><b>Mobile :</b> {{ $std_info[0]->std_mobile }}</p>
			</div>

			<div class="mb-2">
				<div class="row">
					<div class="col-12 text-sm-center form-inline">
						<div class="form-group mr-2">
							<select id="demo-foo-filter-status" class="custom-select custom-select-sm">
								<option value="">Show all</option>
								<option value="Registered">Registered</option>
								<option value="Cancel">Cancellation</option>
								<option value="Checking">Status</option>
								<option value="SAC Online">iSAC Online</option>
								<option value="iSAC Speaking">iSAC Speaking</option>
							</select>
						</div>
						<div class="form-group">
							<input id="demo-foo-search" type="text" placeholder="Search" class="form-control form-control-sm" autocomplete="on">
						</div>
					</div>
				</div>
			</div>

			<div class="table-responsive">

				<table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="20">
                    <thead>
                    <tr>
						<th>#</th>
			        	<th>Title</th>
			        	<th>Content</th>
			        	<th>Point</th>
			        	<th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
						<?php $i = 1; ?>
						@if(count($logs) != 0)
							@foreach($logs as $log)
							<tr>
								<td>{{$i}}</td>
								<td>{{$log->tab}}</td>
								<td>{{$log->content}}</td>
								<td>{{$log->score}}</td>
								<td>{{ date('d/m/Y H:i:s', strtotime($log->datecreate))}}</td>
							</tr>
							<?php $i++; ?>
							@endforeach
						@endif
      				</tbody> 

					  <tfoot>
						<tr class="active">
							<td colspan="5">
								<div class="text-right">
									<ul class="pagination pagination-rounded justify-content-end footable-pagination m-t-10 mb-0"></ul>
								</div>
							</td>
						</tr>
					</tfoot>    

                </table>
			</div>
		</div> <!-- end card-box -->
	</div> <!-- end col -->
</div>
<!-- end row -->


@endsection