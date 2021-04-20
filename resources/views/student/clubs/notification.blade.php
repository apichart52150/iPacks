@if(isset($responses)) 
    @php 
        if(($responses['status'] == 'success')) {
            $icon = "<i class='fas fa-check-circle fa-6x color-success mb-3'></i>";
            $color = 'success';
            $text = $responses['msg'];
        } else {
            $icon = "<i class='fas fa-times-circle fa-6x color-danger mb-3'></i>";
            $color = 'danger';
            $text = $responses['msg'];
        }
    @endphp

    <div class="modal" id="notificationModal" tabindex="-1" role="dialog" >
        <div class="modal-dialog modal-md animated zoomIn animated-3x" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    {!! $icon !!}
                    <p style="font-size: 18px;">
                    {!! $text !!}
                    </p>
                    <a href="{{ url('profile') }}" id="check-clubs"><i class="fas fa-list-alt"></i> Check clubs</a>
                </div>
                <div class="modal-footer" style="text-align: center;">
                    <button type="button" class="btn btn-{{ $color }} btn-raised" data-dismiss="modal" id="accept">OK</button>
                </div>
            </div>
        </div>
    </div> 
@endif

