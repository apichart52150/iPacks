<div id="main{{$id}}" class="modal-demo">
    <div class="modal-content">
        <div class="modal-body text-center">
            <form action="{{route('sub_menu')}}" method="POST">
                <input type="hidden" name="type" value="{{$id}}">
                <h5 class="m-b-5 m-t-10 text-uppercase">{{$name}}</h5>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <select class="form-control" name="main_menu" id="select_main" required>
                                <option value="" selected>-- Please select --</option>
                                @foreach ($manu_name as $menu)
                                    <option value="{{$menu['menu_id']}}">{{$menu['menu_name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-{{$color}} waves-effect waves-light">Next</button>
                </div>
            </form>
        </div>
    </div>
</div><!-- /.modal --> 

<!-- Custom Modal -->
<div id="pdf{{$id}}" class="modal-demo">
    <div class="modal-content">
        <div class="modal-body text-center">
        <h5 class="m-b-5 m-t-10 text-uppercase">{{$name}}</h5>
        <div class="button-list">
            @foreach ($manu_name as $menu)
            <div class="row">
                <div class="col-12">
                    <a download href ="{{ asset('public/isac_listening/pdf/'.$menu['pdf_file']) }}" class="btn btn-icon waves-effect waves-light btn-{{$color}} mt-2"> <i class="fe-download"></i> {{$menu['pdf_file']}} </a>
                </div>
            </div>
            @endforeach
        </div>
           
        </div>
    </div>
</div>  



