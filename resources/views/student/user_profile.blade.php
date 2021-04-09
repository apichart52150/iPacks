@extends('layouts.main')

@section('content')
<div class="row justify-content-center">
	<div class="col-lg-6">
        <div class="card-box text-center">
            <img src="{{ asset('public/assets/images/users/user_std.png') }}" class="rounded-circle avatar-xl img-thumbnail" alt="profile-image">

                <div class="border border-primary border-top-0 border-right-0 border-left-0 mb-1" style="border-width: 3px !important;">
                    <h5 class="m-b-5 m-t-10 text-uppercase">{{ $profile->std_name }} ( {{ $profile->std_nickname }} )</h5>
                </div>

                <div class="text-left mt-2 row">
                    <div class="col-md-6">
                        <p class="text-muted font-15"><strong>Full Name :</strong> <span class="m-l-15">{{ $profile->std_name }}</span></p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-muted font-15"><strong>Mobile :</strong><span class="m-l-15">{{ $profile->std_mobile }}</span></p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-muted font-15"><strong>Teacher :</strong> <span class="m-l-15">{{ $profile->th_name }}</span></p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-muted font-15"><strong>Course :</strong> <span class="m-l-15">{{ $profile->coursename }}</span></p>
                    </div>
                    <div class="col-md-12">
                        <p class="text-muted font-15"><strong>Email :</strong><span class="m-l-15">{{ $profile->std_email }}</span></p>
                    </div>
                </div>

                <hr>

                <div class="text-left m-t-20 row">
            
                    <div class="col-md-6">
                        <p class="text-muted font-16"><strong>Writing Point :</strong> <span class="badge badge-warning p-1">{{ \App\Model\PointsWriting::checkPoint() }} Point</span></p>

                        <p class="text-muted font-16"><strong>Expire Date :</strong> <span class="badge badge-danger p-1">{{ date('d-m-Y', strtotime($profile->lastdate)) }}</span></p>
                    </div>

                    <div class="col-md-6">
                        <p class="text-muted font-16"><strong>Speaking Point :</strong> <span class="badge badge-success p-1">{{ \App\Model\Points::checkPoint() }} Point</span></p>

                        <p class="text-muted font-16"><strong>Expire Date :</strong> <span class="badge badge-danger p-1">{{ date('d-m-Y', strtotime($profile->lastdate)) }}</span></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection