@extends('layouts.sac_s')

@section('title','Status')

@section('content')

<style>
	.page-item.active .page-link {
    background-color: #009688 !important;
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
					<li class="breadcrumb-item active">Status Speaking</li>
				</ol>
			</div>
			<h4 class="page-title">Status Speaking</h4>
		</div>
	</div>
</div>     
@stop

<div class="row">
	<div class="col-md-12">
		<div class="card card-body">
			<h3 class="mb-3">Status</h3>

			<table id="basic-datatable" class="table table-borderless table-hover dt-responsive nowrap w-100">
				<thead class="thead-light">
					<tr>
						<th>#</th>
						<th>TOPIC</th>
						<th>SUBMITTED</th>
						<th>TEACHER</th>
						<th>STATUS</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					@if(!empty($speakings))
						@foreach($speakings as $speaking)
						<tr>
							<td>{{ $i++ }}</td>
							<td>
								@if($speaking->status == 'success')
									<a href="{{ url('status_speaking',['id' => $speaking->id]) }}" class="btn btn-outline-success btn-sm waves-effect waves-light">{{ $speaking->topic }}</a>
								@else
									{{ $speaking->topic }}
								@endif
							</td>
							<td><span class="badge badge-dark p-1">{{ date('d-m-Y H:i:s', strtotime($speaking->created_at)) }}</span></td>
							<td class="text-capitalize">{{ $speaking->th_name }}</td>
							@php 
								if($speaking->status == 'sent') {
									$status_speaking = "<span class='badge badge-warning p-1'>Sent</span>";
								}elseif($speaking->status == 'pending') {
									$status_speaking = "<span class='badge badge-purple p-1'>Pending</span>";
								}elseif($speaking->status == 'success') {
									$status_speaking = "<span class='badge badge-success p-1'>Success</span>";
								}
							@endphp
							<td>{!! $status_speaking !!}</td>
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
