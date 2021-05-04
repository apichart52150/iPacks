
@extends('layouts.mocktest_admin')
@section('content')
<div class="content">
	<div class="row">
		<div class="col-12">
			<div class="card-box table-responsive">
				<h2 class="">Classroom Dashboard</h2>
				@if(session()->has('message'))
				{!!session()->get('message')!!}
				@endif 
								 
				<table id="dashboard-datatable" class="table dt-responsive nowrap">
					<thead>
						<tr>
							<th width="10px">#</th>
							<th>Coursename</th>
							<th>NC Code</th>
							<th>Teacher</th>
							<th>Expired date</th>
							<th>Status</th>
							<th>Class Password</th>
							<!-- <th>Edit</th> -->
						</tr>
					</thead>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- end content --> 

<div id="selectexam" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Modal Content is Responsive</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form  action="{{route('update_set_exam')}}" method="post">
                {{ csrf_field() }}
                <input type="hidden" id="class_id" name="class_id">
                <div class="row m-2">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="set_exam" class="control-label">CHOOSE SET EXAM</label>
                            <select class="custom-select" id="set_exam" name="set_exam">
                                <option value="1">Key Skills 1</option>
                                <option value="2">Key Skills 2</option>
                                <option value="3">Foundation 1</option>
                                <option value="4">Foundation Extension 1</option>
                                <option value="5">Key Skills Extension 1</option>
                                <option value="6">Speak Write</option>
                                <option value="7">Gateway to IELTS</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="classpass" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Modal Content is Responsive</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form  action="{{route('update_class_pass')}}" method="post">
                {{ csrf_field() }}
                <input type="hidden" id="class_id" name="class_id">
                <div class="row m-2">
                    <div class="col-md-12">
                        <div class="form-group">
                            <h5>Class: <text id="coursename" class="text-muted">secondary text</text></h5>
                            <h5>NC Code: <text id="nccode" class="text-muted"></text></h5>
                            <h5>Old Password: <text id="oldpass" class="text-muted"></text></h5>
                        </div>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="newpass" class="control-label">New Password Classroom</label>
                            <input type="text" class="form-control" id="newpass" name="class_pass" placeholder="New Password" required="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection

@section('javascript')
<script>
    $(function() {
        $('#dashboard-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('mocktest_dashboard') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'coursename', name: 'course.coursename' },
                { data: 'nccode', name: 'nccode' },
                { data: 'th_name', name: 'th_name' },
                { data: 'lastdate', name: 'lastdate' },
                { data: 'status', name: 'status', searchable:false },
                { data: 'class_pass', name: 'class_pass' }
            ]
        });
    });

    $('#selectexam').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var data = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        console.log(data.id)
        var modal = $(this)
        modal.find('.modal-title').text('Set Exam')
        modal.find('select').val(data.id)
        modal.find('#set_exam').val(data.set_exam)
        modal.find('#class_id').val(data.id)
    })

    $('#classpass').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var data = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        console.log(data.id)
        var modal = $(this)
        modal.find('.modal-title').text('Class Password')
        modal.find('#coursename').text(data.coursename)
        modal.find('#nccode').text(data.nccode)
        modal.find('#oldpass').text(data.class_pass)
        modal.find('#class_id').val(data.id)
    })
</script>
@endsection


