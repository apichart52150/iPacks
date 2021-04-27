@foreach ($data as $key => $subtitles)
<div class="card">
        @php 
        if(strpos($key, 'Bonus') !== false) {
            $contentModal = 'เมื่อทำการยืนยันการจอง Bonus Tutorial แล้ว ไม่สามารถยกเลิกได้ไม่ว่าในกรณีใดๆ ถ้าหากทำการจอง Bonus Tutorial แล้วไม่ได้เดินทางมาเข้าเรียนทางเราขออนุญาตตัดสิทธิเพิ่ม 1 Bonus กรุณาตรวจสอบความถูกต้องก่อนทำการยืนยันการจอง Bonus Tutorial ทุกครั้ง';
        } else {
            $contentModal = 'เมื่อทำการยืนยันการจอง Club แล้ว ไม่สามารถยกเลิกได้ไม่ว่าใกรณีใดๆ ถ้าหากทำการจอง Club แล้วไม่ได้เดินทางมาเข้าเรียนทางเราขออนุญาตตัดสิทธิเพิ่ม 1 Point กรุณาตรวจสอบความถูกต้องก่อนทำการยืนยันการจอง Club ทุกครั้ง';
        }
    @endphp
    <div class="card-header bg-primary py-3 text-white">
        <h5 class="card-title mb-0 text-white">{{ $key }}</h5>
    </div>
    @foreach ($subtitles as $key => $clubs)
        <div class="card-body card-content pt-2">
            <p class="text-primary">{{ $key }}</p>
            @foreach($clubs as $club)

            @if($club['room_state'] == 'Available') 

                <button type="button" class="btn btn-success waves-effect waves-light mt-2" data-toggle="modal" data-target="#modalA{{ $club['room_id'] }}">
                    {!! $club['topic'] !!}
                </button>

                <div id="modalA{{ $club['room_id'] }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">จองวันที่ {{ $club['date_show'] }}</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <p>{{ $contentModal }}</p>
                            </div>
                            <div class="modal-footer">
                                <form action="{{ route('register.submit') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="room_id" value="{{ $club['room_id'] }}"/>
                                    <button type="button" class="btn btn-secondary waves-effect waves-light" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-success waves-effect waves-light">Confirm</button>
                                </form>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

            @elseif(in_array($club['room_state'], ['Cancel Class', 'Full']))
                <button class="btn btn-danger waves-effect waves-light">
                    {!! $club['topic'] !!}
                </button>
            @elseif($club['room_state'] == 'Open Soon')
                <button type="button" class="btn btn-secondary waves-effect waves-light" data-toggle="modal" data-target="#modal{{ $club['room_id'] }}">
                    {!! $club['topic'] !!}
                </button>

                <div id="modal{{ $club['room_id'] }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel"> เปิดให้จอง {{ date(' d M, Y H:i A', strtotime($club['start_post_date'])) }}</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <p>Club จะเริ่มเปิดให้จองได้ ในวันที่ {{ date(' d M, Y H:i A', strtotime($club['start_post_date'])) }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            @endif
            @endforeach
        </div>
    @endforeach
</div> <!-- end card-->
@endforeach
      

<p>*สถาบันนิวเคมบริดจ์ สงวนสิทธิ์ในการเปลี่ยนแปลงตาราง Club และ Bonus Tutorial ตามความเหมาะสม</p>