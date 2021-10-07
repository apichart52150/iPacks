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
            <h4 class="page-title">Edit</h4>
        </div>
    </div>
</div>
@endsection

@section('content')
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
            <h4 class="header-title">Edit</h4>
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
                                <label class="col-sm-2 col-form-label" for="">Level</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" name="level" value="{{$users->level}}"
                                        readonly>
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