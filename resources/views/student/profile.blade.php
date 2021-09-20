<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-4 text-center">

                <img src="{{ asset('public/assets/images/user.png') }}" class="rounded-circle avatar-xl img-thumbnail" alt="profile-image">

                <div class="border border-primary border-top-0 border-right-0 border-left-0 mb-1" style="border-width: 3px !important;">
                    <h5 class="m-b-5 m-t-10 text-uppercase">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h5>
                </div>

                <div class="text-left mt-2 row">
                    <div class="col-md-12">
                        <p class="font-15"><strong>Email: </strong> <span class="m-l-15">{{Auth::user()->email}}</span></p>
                    </div>
                </div>

                <hr>

                <div class="text-left m-t-20 row">
                    <div class="col-md-12">
                        <p class="font-16"><strong>Package: </strong> <span class="badge badge-warning p-1">{{Auth::user()->level}}</span></p>
                        <p class="font-16"><strong>Status: </strong> <span class="badge badge-secondary p-1">{{Auth::user()->status}}</span></p>
                        <p class="font-16"><strong>Expire Date: </strong> <span class="badge badge-danger p-1"> {{Auth::user()->expire_date}} </span></p>
                    </div>
                </div>

                <hr>

                <div class="text-left m-t-20 row">
                    <div class="col-md-12">
                        <p class="font-16"><strong>Speaking Point: </strong> <span class="badge badge-success p-1">1 Point</span></p>
                        <p class="font-16"><strong>Writing Point: </strong> <span class="badge badge-info p-1">2 Point</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.modal -->  