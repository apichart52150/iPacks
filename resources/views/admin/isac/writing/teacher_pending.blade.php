@extends('layouts.layout_admin_w')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card-box">
			<div class="d-flex justify-content-between mb-2">
                <h1>Teacher Pending</h1>
                <h2>
                    {{ $teacher->name }}
                </h2>
            </div>

			<div class="table-responsive">
				<table class="table table-bordered table-striped w-100 dt-responsive" id="reportAll">
					<thead>
						<tr>
							<th>STUDENT NAME</th>
							<th>SAC TYPE</th>
							<th>STUDENT SENT</th>
							<th>Action</th>
						</tr>
					</thead>
                    <tbody>
                        @foreach ($pendings as $pending)
                            <tr>
                                <td>{{ $pending->std_name }}</td>
                                <td>{{ $pending->test_type }}</td>
                                <td><span class="badge badge-dark">{{ date('d-m-Y H:i:s', strtotime($pending->sent_date)) }}</span></td>
                                <td>
                                    @php
                                        $dataJson = json_encode($pending);
                                        $url_restatus = json_encode(route('restatus_writing', $pending->id));
                                        $url_delete = json_encode(route('delete_writing.pending', $pending->id));
                                    @endphp
                                    <button class="btn btn-warning btn-sm" onclick="reStatus({{ $dataJson }}, {{ $url_restatus }})">
                                        <i class="fas fa-history"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteTopic({{ $dataJson }}, {{ $url_delete }})">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection

@section('js')
    <script>
        function reStatus(data, url) {
            if(confirm(`Are you sure you want to ReStatus?\n ${data.test_type} \n ${data.std_name} `)) {
                $.ajax({
                    url: url,
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

        function deleteTopic(data, url) {
            if(confirm(`Are you sure you want to Delete?\n ${data.test_type} \n ${data.std_name} `)) {
                $.ajax({
                    url: url,
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