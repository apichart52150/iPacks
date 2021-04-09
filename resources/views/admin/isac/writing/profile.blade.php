@extends('layouts.layout_admin_w')
@section('content')
<div class="row pt-4 justify-content-center">
    <div class="col-md-6 col-xl-4">
        <div class="card-box">
            <div class="member-card">
                <div class="thumb-lg member-thumb m-b-10 center-page">
                    <img src="{{ asset('public/assets/images/user.png') }}" class="rounded-circle img-thumbnail" alt="profile-image">
                </div>

                <div class="text-center">
                    <?php 
                        use App\Notification;

                        $notification = Notification::notification()[0];
                    ?>
                    <h5 class="m-b-5 m-t-10">{{ auth()->user()->name }}</h5>
                    <span class="badge badge-pink">Pending {{ $notification->Pending }}</span>
                    <span class="badge badge-success">Completed {{ $notification->Success }}</span>
                </div>

                <div class="text-left m-t-40">
                    <p class="text-muted font-16"><strong>Name :</strong> <span class="m-l-15">{{ auth()->user()->name }}</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()