<?php 
	use Carbon\Carbon; 
	$date = Carbon::now(); 
?>
@extends('layouts.layout_admin_s')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card-box">
			<h1>Pending</h1>

			<div class="table-responsive mt-3">
				<table class="table table-striped dt-responsive w-100" id="basic-datatable">
					<thead>
						<tr>
							<th>#</th>
							<th>USER NAME</th>
							<th>TOPIC</th>
							<th>SUBMITTED</th>
							<th>DUE DATE</th>
							<th>CHECK</th>
						</tr>
					</thead>
					<tbody>
						@php $i = 1; @endphp
						@if(!empty($pendings))
							@foreach($pendings as $pending)
							<tr>
								<td>{{ $i++ }}</td>
								<td>{{ $pending->first_name }} {{ $pending->last_name }}</td>
								<td>{{ $pending->topic }}</td>
								<td><span class="badge badge-success p-1">{{ date('d-m-Y H:i:s', strtotime($pending->created_at)) }}</span></td>
								<td>
									@if(!empty($pending->due_date))
										@if(strtotime($pending->due_date) >= strtotime($date))
	                                  	<span class="badge badge-warning p-1">
	                                  		{{ \Carbon\Carbon::createFromTimeStamp(strtotime($pending->due_date))->diffForHumans() }}
	                                    </span>
	                                    @else
	                                    <span class="badge badge-danger p-1">
	                                        {{ \Carbon\Carbon::createFromTimeStamp(strtotime($pending->due_date))->diffForHumans() }}
	                                    </span>
	                                    @endif
									@endif
								</td>
								<td><a href="{{ route('check',['id' => $pending->id]) }}" class="btn btn-primary btn-sm">CHECK</a></td>
							</tr>
							@endforeach
						@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection