@extends('layouts.layout_admin_s')

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
							<th>TOPIC</th>
							<th>STUDENT SENT</th>
							<th>Action</th>
						</tr>
					</thead>
                    <tbody>
                        @foreach ($pendings as $pending)
                            <tr>
                                <td>{{ $pending->std_name }}</td>
                                <td>{{ $pending->topic }}</td>
                                <td><span class="badge badge-dark">{{ date('d-m-Y H:i:s', strtotime($pending->created_at)) }}</span></td>
                                <td>
                                    @php
                                        $dataJson = json_encode($pending);
                                        $url_restatus = json_encode(route('restatus', $pending->id));
                                        $url_delete = json_encode(route('delete.pending', $pending->id));
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

@section('javascript')
    <script>
        function reStatus(data, url) {
            if(confirm(`Are you sure you want to ReStatus?\n ${data.topic} \n ${data.std_name} `)) {
                $.ajax({
                    url: url,
                    type: "get",
                    dataType: 'json',
                    success: function(response) {
                        if(response.success) {
                            alert('Restatus Sucessfully.')
                            location.href = "{{ url('admin/dashboard') }}"
                        }
                    }
                })
            }
        }

        function deleteTopic(data, url) {
            if(confirm(`Are you sure you want to Delete?\n ${data.topic} \n ${data.std_name} `)) {
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