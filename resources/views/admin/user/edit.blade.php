@extends('layouts.main_admin')


@section('page-title')
<div class="row">
    <div class="col-12 m-0">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><i class="fas fa-address-card"></i> <a id="return-page"
                            href="{{ route('user') }}">Users</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Topic </a></li> -->
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div>
            <h4 class="page-title">Edit user</h4>
        </div>
    </div>
</div>
@endsection

@section('content')

<style>
    .day {
        cursor: pointer;
        text-align: center;
    }

    .date {
        cursor: pointer;
    }
</style>

<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
            </ul>
        </div>
        @endif
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 class="header-title">Edit user</h4>
            <div class="row">
                <div class="col-12">
                    <div class="p-2">

                        <form route="{{ route('user-edit-confirm') }}" id="form-update-users">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">ID</label>
                                <div class="col-sm-10">
                                    <input type="text" id="" name="id" class="form-control border border-primary"
                                        value="{{$users->id}}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="" name="email"
                                        value="{{$users->email}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Password</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" name="password"
                                        placeholder="Change new password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">First name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" name="first_name"
                                        value="{{$users->first_name}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Last name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" name="last_name"
                                        value="{{$users->last_name}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Remark</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="" name="remark">
                                        @if($users->remark=='idp')
                                        <option value="idp" selected>IDP</option>
                                        <option value="student">Student</option>
                                        <option value="other">Other</option>
                                        @elseif($users->remark=='student')
                                        <option value="idp">IDP</option>
                                        <option value="student" selected>Student</option>
                                        <option value="other">Other</option>
                                        @elseif($users->remark=='other')
                                        <option value="idp">IDP</option>
                                        <option value="student">Student</option>
                                        <option value="other" selected>Other</option>
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Status</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="" name="status">
                                        @if($users->status=='paid')
                                        <option value="wait">wait</option>
                                        <option value="paid" selected>paid</option>
                                        @else
                                        <option value="wait" selected>wait</option>
                                        <option value="paid">paid</option>
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row level">
                                <label class="col-sm-2 col-form-label" for="">Package</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="" name="level">
                                        @if($users->level=='gold')
                                        <option value="gold" selected>gold</option>
                                        <option value="platinum">platinum</option>
                                        @else
                                        <option value="gold">gold</option>
                                        <option value="platinum" selected>platinum</option>
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row pay_type">
                                <label class="col-sm-2 col-form-label" for="">Pay type</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="pay_type" name="pay_type">
                                        @if($users->status=='CC')
                                        <option value="CC" selected>CC</option>
                                        <option value="Airplay">Airplay</option>
                                        @else
                                        <option value="CC">CC</option>
                                        <option value="Airplay" selected>Airplay</option>
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Expire date</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        @if($users->expire_date != null)
                                        <input type="text" name="expire_date" value="{{ date('m/d/Y',strtotime($users->expire_date)) }}" class="form-control date" data-provide="datepicker" data-date-autoclose="true" readonly placeholder="mm/dd/yyyy">
                                        @else
                                        <input type="text" name="expire_date" value="" class="form-control date" data-provide="datepicker" data-date-autoclose="true" readonly placeholder="mm/dd/yyyy">
                                        @endif
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="ti-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Address</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="" name="address" cols="30"
                                        rows="10">{{$users->address}}</textarea>
                                </div>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" id="" class="btn btn-info waves-effect waves-light">Edit</button>
                                <a href="{{ route('user') }}" class="btn btn-secondary waves-effect"
                                    data-dismiss="modal">Cancle</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div> <!-- end card-box -->
    </div><!-- end col -->
</div>
<!-- end row -->
<script src="{{ asset('public/assets/js/vendor.min.js') }}"></script>

<!-- Plugins js-->
<script src="{{ asset('public/assets/js/bootstrap-datepicker.min.js') }}"></script>

<script src="{{ asset('public/assets/js/ajax.jquery.js') }}"></script>
<script>
    $('#form-update-users').on('submit',function(){
        let data = new FormData(this)
        $.ajax({
            type: 'POST',
            url: $(this).attr('route'),
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                console.log(response)
                if (response == "success") {
                    swal("Update success", "", "success").then(()=>{
                    window.location.href = $('#return-page').attr('href')
                    })
                    }
                else
                    swal("Update failed", "", "error")
            }
        })
        return false
    })
</script>

@endsection