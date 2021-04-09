@extends('layouts.layout_admin_s')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card-box">
			<h1>Report</h1>
			
			<div class="row my-3">
				<div class="col-lg-10">
					<form role="form" action="{{ route('report_teachers') }}" method="post">
						{{ csrf_field() }}
		                <div class="form-group">
                            <label class="control-label d-block">Start date - End date</label>
                            <input class="form-control input-daterange-datepicker w-25 d-inline" type="text" name="date_search" placeholder="Search..." 
                            value="{{ !empty($old_date) ? $old_date : ''}}">
                            <input type="submit" value="Submit" class="btn btn-success d-inline ml-2">   
                            <button type="submit" class="btn btn-secondary" value="reset" name="reset">Reset</button>
                        </div>
		            </form>
				</div>
			</div>

			<table class="table table-bordered table-striped" id="report">
				<thead>
					<tr>
						<th>#</th>
						<th>TEACHER NAME</th>
						<th>PENDING</th>
						<th>SUCCESS</th>
					</tr>
				</thead>
				<tbody class="font-16">
					@if(!empty($reports))
					@php $i = 1; @endphp
					@foreach($reports as $key => $value)
						<tr>
							<td>{{ $i++ }}</td>
							<td>{{ $key }}</td>
							<td>
								@if($value['pending'] != 0)
								<b class="badge badge-pill badge-warning">
									<a href="{{ route('teacher.pending', [$value['user_id']]) }}">{{ $value['pending'] }}</a>
								</b>
								@else
								<span class="badge badge-pill badge-secondary">{{ $value['pending'] }}</span>
								@endif
							</td>
							<td>
								@if($value['success'] != 0)
								<b class="badge badge-pill badge-success">{{ $value['success'] }}</b>
								@else
								<span class="badge badge-pill badge-secondary">{{ $value['success'] }}</span>
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
@endsection

@php
	$route = Route::current()->uri;
@endphp

@if($route == 'speaking/report/teachers')
	@section('javascript')
	<script>
		$(function () {
			$('#report').DataTable({
				dom: 'Bfrtip',
		        buttons: [
            'excel', 'pdf'
        ]
			});

			$('#report_wrapper').removeClass('container-fluid');

			$('input[name="date_search"]').daterangepicker({
				cancelButtonClasses: 'btn-secondary'	
			});

			$('#reset').on('click', () => {
				$('#report').destroy();
			})
			
		});
	</script>
	@stop
@endif