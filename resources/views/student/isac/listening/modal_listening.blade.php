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
                    <button type="submit" class="btn btn-{{$color}} waves-effect waves-light">Next</button>
                </div>
            </form>
        </div>
    </div>
</div><!-- /.modal --> 


<div class="modal fade" id="pdf{{$id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalScrollableTitle">{{$name}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="row">
            @foreach ($manu_name as $menu)
                <div class="col-12">
                    <a download href ="{{ asset('public/isac_listening/pdf/'.$menu['pdf_file']) }}">
                        <div class="card text-white bg-{{$color}}">
                            <div class="card-body">
                                <blockquote class="card-bodyquote mb-0">
                                    {{$menu['pdf_file']}} 
                                    <footer class="blockquote-footer text-white-50">Can download document  in <cite title="Source Title">PDF File</cite>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    </div>



