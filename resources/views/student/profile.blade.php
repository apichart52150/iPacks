<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-4 text-center">

                <img src="{{ asset('public/assets/images/user.png') }}" class="rounded-circle avatar-xl img-thumbnail" alt="profile-image">

                <div class="border border-primary border-top-0 border-right-0 border-left-0 mb-1" style="border-width: 3px !important;">
                    <h5 class="m-b-5 m-t-10 text-uppercase">{{Auth::user()->std_name}}</h5>
                </div>

                <div class="text-left mt-2 row">
                    <div class="col-md-6">
                        <p class="text-muted font-15"><strong>Full Name :</strong> <span class="m-l-15">{{Auth::user()->std_username}}</span></p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-muted font-15"><strong>Mobile :</strong><span class="m-l-15">{{Auth::user()->std_mobile}}</span></p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-muted font-15"><strong>Course :</strong> <span class="m-l-15">{{\App\Model\Profile::getProfile()->coursename}}</span></p>
                    </div>
                </div>

                <hr>

                <div class="text-left m-t-20 row">
            
                    <div class="col-md-6">
                        <p class="text-muted font-16"><strong>Writing Point :</strong> <span class="badge badge-primary p-1">{{Auth::user()->std_pointsac}} Point</span></p>
                    </div>

                    <div class="col-md-6">
                        <p class="text-muted font-16"><strong>Speaking Point :</strong> <span class="badge badge-success p-1">{{Auth::user()->std_pointspeaking}} Point</span></p>
                    </div>
                </div>

                <div class="text-left m-t-20 row">
            
                    <div class="col-md-6">
                        <p class="text-muted font-16"><strong>Bonus & Club :</strong> <span class="badge badge-info p-1">{{Auth::user()->std_point}} Point</span></p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-muted font-16"><strong>Expire Date :</strong> <span class="badge badge-danger p-1">{{\App\Model\Profile::getProfile()->lastdate}}</span></p>
                    </div>
                </div>

                <hr>
            </div>
        </div>
    </div>
</div><!-- /.modal -->  