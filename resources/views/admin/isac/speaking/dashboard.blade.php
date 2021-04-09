<?php use Carbon\Carbon;

	$date = Carbon::now();

?>
@extends('layouts.layout_admin_s')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="card-box">
				<h1>Dashboard</h1>
				<p>Select up to 1 SACs at a time.</p>
				<div class="table-responsive mt-3">
					<table id="basic-datatable" class="table table-striped dt-responsive w-100">
						<thead>
							<tr>
								<th>#</th>
								<th>STUDENT NAME</th>
								<th>TOPIC</th>
								<th>SUBMITTED</th>
								<th>DUE DATE</th>
								<th>CHECK</th>
							</tr>
						</thead>
						<tbody>
							@php $i = 1; @endphp
							@if(!empty($speakings))
								@foreach($speakings as $speaking)
								<tr>
									<td>{{ $i++ }}</td>
									<td>{{ $speaking->std_name }}</td>
									<td>{{ $speaking->topic }}</td>

									<td><span class="badge badge-success p-1">{{ date('d-m-Y H:i:s', strtotime($speaking->created_at))}}</td>
									<td>
										<?php 
											$year = date('Y'); $month = date('m'); $day = date('d');
											$currentDate = Carbon::createMidnightDate($year, $month, $day);
											$dueDate = Carbon::createMidnightDate(date('Y', strtotime($speaking->due_date)), date('m', strtotime($speaking->due_date)), date('d', strtotime($speaking->due_date)));
										?>
										@if(!empty($speaking->due_date))
											@if(strtotime($speaking->due_date) >= strtotime($date) && $currentDate->diffInDays($dueDate) > 2)
												<span class="badge badge-warning p-1">
													{{ \Carbon\Carbon::createFromTimeStamp(strtotime($speaking->due_date))->diffForHumans() }}
												</span>
											@else
												<span class="badge badge-danger p-1">
													{{ \Carbon\Carbon::createFromTimeStamp(strtotime($speaking->due_date))->diffForHumans() }}
												</span>
											@endif
										@endif
									</td>
									<td>
										@if($pending >= 1)
										<button type="button" class="btn btn-primary waves-effect waves-light btn-sm" id="toast">SELECT</button>
										@else
										<a href="{{ route('receive',['id' => $speaking->id]) }}" class="btn btn-primary btn-sm">SELECT</a>
										@endif
									</td>
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

@section('javascript')
	<script>
		$('#toast').on('click', () => {
			$.toast({
				heading: "Heads up!",
				hideAfter: 3000,
				icon: "info",
				loaderBg: "#3b98b5",
				position: "top-right",
				stack: 1,
				text: "Select up to 1 SACs at a time. Please check your pending."
			})
		})
	</script>
@stop