@extends('layouts.main')
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('success') }}">back</a></li>
                        <li class="breadcrumb-item active">Payment - Standard</li>
                    </ol>
                </div>
                <h4 class="page-title">Payment - Standard</h4>
            </div>
        </div>
    </div>     
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="header-title">Input Types</h4>
                <p class="sub-header">
                    Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
                </p>

                @php
                    
                @endphp

                <div class="row">
                    <div class="col-12">
                        <div class="p-2">
                            <form action="{{ route('confirm_payment') }}" id="basic-form" method="POST" class="mt-3" onsubmit="return confirm('Are you sure you want to finish?')">
                                {{ csrf_field() }}
                                <input type="hidden" name="std_id" value="{{ auth('student')->user()->std_id }}">
                                <input type="hidden" name="std_level" value="{{ $status }}">
                                <input type="hidden" name="std_status" value="paid">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="simpleinput">Your Package</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="simpleinput" class="form-control" value="{{ $status }} 20,xxx ฿" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="std_first_name">First Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="std_first_name" name="std_first_name" class="form-control" placeholder="First Name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="std_last_name">Last Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="std_last_name" name="std_last_name" placeholder="Last Name" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Mobile</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="tel" name="std_mobile" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="email" name="std_email" required>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary mt-2">Next</button>

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