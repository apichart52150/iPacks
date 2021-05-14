
   
            <div id="main{{$id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body p-4 text-center">

                            <img src="{{ asset('public/assets/images/isac_listening/sac1.png') }}" class="rounded-circle avatar-xl img-thumbnail" alt="profile-image">

                            <div class="border border-primary border-top-0 border-right-0 border-left-0 mb-1" style="border-width: 3px !important;">
                                <h5 class="m-b-5 m-t-10 text-uppercase">name</h5>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-3" class="control-label">Address</label>
                                       
                                        <select class="form-control" id="select_main">
                                            @foreach ($manu_name as $name)
                                                <option>{{$name}}</option>
                                            @endforeach

                                        </select>
                                        
                                    </div>
                                </div>
                            </div>
                                
                        </div>
                    </div>
                </div>
            </div><!-- /.modal -->  
