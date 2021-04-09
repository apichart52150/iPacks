@extends('layouts.layout_admin_s')
@section('css')

@stop
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card-box">
			<h1>Completed</h1>
			<div class="table-responsive mt-3">
				<table id="custom-datatable" class="table table-striped dt-responsive w-100">
					<thead>
						<tr>
							<th>#</th>
							<th>STUDENT NAME</th>
							<th>TOPIC</th>
							<th>SUBMITTED</th>
							<th>CHECKED</th>
							<th>VIEW</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection

@section('javascript')
<script>
	$(document).ready(function(){
		$('#custom-datatable').DataTable({
			"processing": true,
			"serverSide": true,
			"ajax": {
				"url": "{{ route('completeAjax') }}",
				"dataType": "json",
				"type": "POST",
				"data": {_token: "{{ csrf_token() }}"} 
			},
			"columns": [
				{"data": "id"},
				{"data": "std_name"},
				{"data": "topic"},
				{"data": "created_at"},
				{"data": "th_sent_date"},
				{"data": "action"}
			],
			"order": [['4','desc']]
		});

		$('#custom-datatable_wrapper').removeClass('container-fluid');

	});
</script>
@stop