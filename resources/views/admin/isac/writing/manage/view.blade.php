@extends('layouts.layout_admin_s')

@section('css')

@stop

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card-box">
			<div class="table-responsive">
				<h4>Student : {{ $std_name->std_name }}</h4>
                <table class="table table-sm table-centered mb-0 mt-2 text-center">
                    <thead class="font-13 bg-light text-muted">

                        <tr>
                            <th class="font-weight-medium">File Name</th>
                            <th class="font-weight-medium">Sound</th>
                            <th class="font-weight-medium">Status</th>
                            <th class="font-weight-medium">Teacher</th>
                            <th class="font-weight-medium">Date Create</th>
                            <th class="font-weight-medium text-center" style="width: 125px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	@if(!empty($data))
                    	@foreach($data as $value)
                        <tr>
                            <td>
                                <img src="{{ asset('public/assets/images/file-icons/wav.svg') }}" height="30" alt="icon" class="mr-2">
                                <a href="javascript:void(0);" class="text-dark">{{ $value->path }}</a>
                            </td>
                            <td class="text-muted font-13">
                            	<audio controls preload="none" controlsList="nodownload" height="30px">
                            		<source src="{{ asset('public/file_record/'.$value->path) }}" type="audio/wav">
                            	</audio>
                            </td>
                            <td>
                            	@php 
									if($value->status == 'success') {
										$status = 'success';
									}else if($value->status == 'pending') {
										$status = 'purple';
									} else {	
										$status = 'warning';
									}
                            	@endphp
                            	<span class="badge badge-{{$status}}">{{ $value->status }}</span>
                            </td>
 							<td>
 								{{ App\Model\AdminSpeaking::getTeacherName($value->th_id) }}
 							</td>
                            <td>
                            	{{ date('d-m-Y H:i:s', strtotime($value->created_at)) }}
                            </td>
                            <td>
                            	<form action="{{ route('delete') }}" method="post" onsubmit="return deleteInfo()">
                            		{{ csrf_field() }}
                            		<input type="hidden" name="id" value="{{ $value->id }}">

                            		<button type="submit" class="btn btn-danger text-white btn-sm"><i class="mdi mdi-close"></i></button>
                            	</form>
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
	function deleteInfo() {

		if(confirm('Are you sure you want to delete ?')) {
			alert('delete success')
			return true;
		} else {
			return false;
		}
	}
</script>
@stop
