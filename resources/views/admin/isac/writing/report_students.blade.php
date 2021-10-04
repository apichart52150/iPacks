@extends('layouts.layout_admin_w')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card-box">
			<h1>Report All</h1>

			<div class="row my-3">
				<div class="col-lg-10">
					<form role="form" method="post">
						{{ csrf_field() }}
		                <div class="form-group">
                            <label class="control-label d-block">Start date - End date</label>
                            <input class="form-control input-daterange-datepicker w-25 d-inline" type="text" name="date_search"  
                            value="{{ !empty($old_date) ? $old_date : ''}}" autocomplete="off" placeholder="Click to select...">
                            <input type="submit" value="Submit" class="btn btn-success d-inline ml-2" id="submit">   
                            <button class="btn btn-secondary" value="reset" id="reset">Reset</button>
                        </div>
		            </form>
				</div>
			</div>

			<div class="table-responsive">
				<table class="table table-bordered table-striped w-100 dt-responsive" id="reportWriting">
					<thead>
						<tr>
							<th>USER NAME</th>
							<th>TEST TYPE</th>
							<th>TEACHER NAME</th>
							<th>USER SENT</th>
							<th>TEACHER SENT</th>
							<th>Action</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection

@php 
 $route = Route::current()->uri;
@endphp

@if($route == 'writing/report/students')
	@section('js')
		<script>
			$(function () {
				$('input[name="date_search"]').val('');

				$('input[name="date_search"]').daterangepicker({
					autoUpdateInput: false,
					cancelButtonClasses: 'btn btn-secondary',
					locale: { cancelLabel: 'Cancel' }  
				})

				$('input[name="date_search"]').on('apply.daterangepicker', function(ev, picker) {
			      $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
			  	});

			  	$('input[name="date_search"]').on('cancel.daterangepicker', function(ev, picker) {
			      $(this).val('');
			  	});

				dataTable();
				
				function dataTable(startdate = '', enddate = '') {
					$('#reportWriting').DataTable({
						dom: 'Bfrtip',
						buttons: [
				            'excel', 'pdf'
				        ],
						'processing': true,
						'serverSide': true,
						'ajax': {
							'url': "{{ route('reportWriting') }}",
							'type': 'POST',
							'dataType': 'json',
							'data': { _token: "{{ csrf_token() }}", startdate: startdate, enddate: enddate}
						},
						'columns': [
							{'data': 'first_name'},
							{'data': 'last_name'},
							{'data': 'test_type'},
							{'data': 'th_name'},
							{'data': 'std_sent_date'},
							{'data': 'th_sent_date'},
							{'data': 'action'},
						],
						"order": [[4, "desc"]]
					});
				}

				$('#reportWriting_wrapper').removeClass('container-fluid');

				$('#submit').on('click', (e) => {
					e.preventDefault();

					let date = $('input[name="date_search"]').val().split(' - ');

					let start = date[0].split('/').reverse().join('-') + ' 00:00:00';
					let end = date[1].split('/').reverse().join('-') + ' 23:59:59';

					if(start != '' && end != '') {
						$('#reportWriting').DataTable().destroy();
						dataTable(start, end);
					}
					
				});

				$('#reset').on('click', (e) => {
					e.preventDefault();
					$('#reportWriting').DataTable().destroy();
					$('input[name="date_search"]').val('');
					dataTable();
				})	

			});

			function reStatus(data) {

				if(confirm(`Are you sure you want to ReStatus?\n ${data.test_type} \n ${data.std_name} `)) {
					$.ajax({
						url: `restatus_writing/${data.id}`,
						type: "get",
						dataType: 'json',
						success: function(response) {
							if(response.success) {
								alert('Restatus Sucessfully.')
								location.href = "{{ url('writing/dashboard') }}"
							}
						}
					})
				}
			}

			function deleteTopic(data) {
				if(confirm(`Are you sure you want to Delete?\n ${data.test_type} \n ${data.std_name} `)) {
					$.ajax({
						url: `delete_writing/${data.id}`,
						type: "get",
						dataType: 'json',
						success: function(response) {
							if(response.success) {
								alert('Delete Sucessfully.')
								location.reload();
							}
						}
					})
				}
			}
		</script>
	@stop
@endif