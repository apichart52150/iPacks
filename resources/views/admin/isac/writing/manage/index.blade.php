@extends('layouts.layout_admin_s')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card-box">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>NAME</th>
							<th>POINT</th>
							<th>ACTION</th>
						</tr>
					</thead>
					<tbody>
						@foreach($students as $student)
							<tr>
								<td>{{$student->std_id}}</td>
								<td>{{$student->std_name}}</td>
								<td>{{$student->std_pointsac}}</td>
								<td><a href="{{ route('all_writing', $student->std_id) }}" class="btn btn-danger disabled">View</a></td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>	
	</div>
</div>
@endsection

@php  
	$route = Route::current()->uri;
@endphp
@if($route == 'admin/god')
	@section('js')
	
	@stop
@endif