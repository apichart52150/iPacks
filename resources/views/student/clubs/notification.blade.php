@if(isset($responses)) 
    @php 
        if(($responses['status'] == 'success')) {
            $icon = "<i class='fas fa-check-circle fa-6x text-success mb-3'></i>";
            $color = 'success';
            $text = $responses['msg'];
        } else {
            $icon = "<i class='fas fa-times-circle fa-6x text-danger mb-3'></i>";
            $color = 'danger';
            $text = $responses['msg'];
        }
    @endphp

    <div id="notificationModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
            <center>
				<div class="modal-body p-4">
                    {!! $icon !!}
                    <p style="font-size: 18px;">
                    {!! $text !!}
                    </p>
                    <a href="{{ url('clubs/status_clubs') }}" id="check-clubs"><i class=" fas fa-list-ul"></i> Check clubs</a>
				</div>
			</div>
            </center>
		</div>
	</div><!-- /.modal -->
@endif

