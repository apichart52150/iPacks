@extends('layouts.sac_w')

@section('title','Status')

@section('content')

<style>
	.page-item.active .page-link {
    background-color: #3F51B5 !important;
}
</style>

@section('page-title')
<div class="row">
	<div class="col-12">
		<div class="page-title-box">
			<div class="page-title-right">
				<ol class="breadcrumb m-0">
					<li class="breadcrumb-item"><i class="fas fa-home"></i> <a href="{{ url('/') }}">Home</a></li>
					<!-- <li class="breadcrumb-item"><a href="#">Topic </a></li> -->
					<li class="breadcrumb-item active">Status Writing</li>
				</ol>
			</div>
			<h4 class="page-title">Status Writing</h4>
		</div>
	</div>
</div>     
@stop

<div class="row">
	<div class="col-md-12">
		<div class="card card-body border-top border-info border border-1">
			<h3 class="mb-3">Status</h3>
			<table id="basic-datatable" class="table table-borderless table-hover dt-responsive nowrap w-100">
				<thead class="thead-light">
					<tr>
						<th>#</th>
						<th>SAC TEST</th>
						<th>SAC TYPE</th>
						<th>SUBMITTED</th>
						<th>TEACHER</th>
						<th>STATUS</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					@if(!empty($writing))
						@foreach($writing as $writings)
						<tr>
							<td>{{ $i++ }}</td>

							@if($writings->status == 'Y')
							<td>
								<a href="{{ route('commented',['id' => $writings->id]) }}" class="btn btn-outline-info btn-sm waves-effect waves-light"> {{ $writings->header_test }}</a>
							</td>
							@elseif($writings->status == 'ST_S')
							<td>
								<a href="{{ route('saved',['id' => $writings->id]) }}" class="btn btn-outline-info btn-sm waves-effect waves-light"> {{ $writings->header_test }} <i class=" mdi mdi-content-save"></i></a>
							</td>
							@else
							<td>
								{{ $writings->header_test }}
							</td>
							@endif

							<td>{{ $writings->test_type }}</td>

							<td><span class="badge badge-dark p-1">{{ date('d-m-Y H:i:s', strtotime($writings->sent_date)) }}</span></td>
							
							@if(empty($writings->th_name))
							<td class="text-capitalize"> - </td>
							@else
							<td class="text-capitalize"> {{ $writings->th_name }} </td>
							@endif
							<td>
								<!-- 
									// N = Sent
									// Y = Success
									// W | TH_S = Pending
									// ST_S = Work in progress 
								-->

								@if ($writings->status == 'N')
									<span class='badge badge-warning p-1'>Sent</span>
								@elseif ($writings->status == 'W' || $writings->status == 'TH_S')
									<span class='badge badge-purple p-1'>Pending</span>
								@elseif($writings->status == 'Y')
									<span class='badge badge-success p-1'>Success</span>
								@elseif($writings->status == 'ST_S') 
									<span class='badge badge-secondary p-1'>Saved</span>
								@endif
										
							</td>
						</tr>
						@endforeach
					@endif
				</tbody>
			</table>
			<!-- end table -->
		</div>
		<!-- end card card-body -->
	</div>
	<!-- ecn col-md-12 -->
</div>
<!-- end row -->
@endsection