@extends('layouts.payment')
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Sent Email</h4>
            </div>
        </div>
    </div>     
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="header-title">Sent Email</h4>
                @php
                    
                @endphp

                <div class="row">
                    <div class="col-12">
                        <div class="p-2">
                            <form action="{{ route('send_email_payment') }}" id="basic-form" method="POST" class="mt-3" onsubmit="return confirm('Are you sure you want to finish?')">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="email" name="std_email"  placeholder="Email" value="{{ $user->email }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="std_email"  placeholder="Password" value="{{ $user->password }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="std_email"  placeholder="Username" value="{{ $user->username }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Expire</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="std_email"  placeholder="Expire" value="{{ $user->expire_date }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Package</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="std_email"  placeholder="Package" value="{{ $user->level }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Created At</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="std_email"  placeholder="Created At" value="{{ $user->created_at }}" disabled>
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary mt-2">Sent</button>

                            </form>
                        </div>
                    </div>

                </div>
                <!-- end row -->

            </div> <!-- end card-box -->
        </div><!-- end col -->
    </div>
    <!-- end row -->
</div> <!-- end container -->
@endsection