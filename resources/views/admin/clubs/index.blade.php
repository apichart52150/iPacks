@extends('layouts.main_admin')

@section('topbar-menu')
<div class="topbar-menu">
    <div class="container-fluid">
        <div id="navigation" class="bg-dark">
            <!-- Navigation Menu-->
            <ul class="navigation-menu  d-lg-flex justify-content-center">

                <li class="has-submenu">
                    <a href="{{ route('writing_dashboard') }}" class="text-light">
                        <i class="fas fa-highlighter"></i>iSAC Writing
                    </a>
                </li>

                <li class="has-submenu">
                    <a href="{{ route('speaking_dashboard') }}" class="text-light">
                        <i class="fas fa-comments"></i>iSAC Speaking
                    </a>
                </li>

                <li class="has-submenu">
                    <a href="{{ route('staff') }}" class="text-light">
                        <i class="fas fa-address-card"></i>User
                    </a>
                </li>
            </ul>
            <!-- End navigation menu -->

            <div class="clearfix"></div>
        </div>
        <!-- end #navigation -->
    </div>
    <!-- end container -->
</div>
@endsection

@section('page-title')
<div class="row">
    <div class="col-12 m-0">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><i class="fas fa-home"></i> <a href="{{ route('admin_home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Clubs</li>
                </ol>
            </div>
            <h4 class="page-title">Clubs</h4>
        </div>
    </div>
</div>
@endsection


@section('content')

<style>
    .user_name {
        font-size: 20px;
    }
</style>

<div class="row">
    <div class="col-md-12">
        <div class="card-box text-right">
            <a href="{{url('clubs/history',['all','all'])}}">
                <span>History</span>
            </a>
        </div>
    </div>
    @if(count($clubs)>0)
    @foreach ($clubs as $club)
    <div class="col-md-4 id-{{$club->id}}">
        <div class="card-box text-center">
            <h3>{{ $club->club_date }}</h3>
            <p class="user_name">{{ $club->first_name }} {{ $club->last_name }}</p>
            <div class="row">
                <div class="col-6">
                    <button class="approval btn btn-success w-100" onclick="approval('{{ $club->id }}','{{ $club->user_create }}');">Approval</button>
                </div>
                <div class="col-6">
                    <button class="disapproval btn btn-danger w-100" onclick="disapproval('{{ $club->id }}')">Disapproval</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @else
    <div class="col-md-12 text-center">
        <span>Don't have data</span>
    </div>
    @endif
    <div id="route" route="{{route('clubs-confirm')}}"></div>
</div>

<script>
    function approval(id, student) {
        Swal.fire({
            title: 'Are you sure?',
            text: "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'OK',
        }).then((result) => {
            if (result.value) {
                update_data(id, student, 1, "", "Successfully")
            }
        })
    }

    function disapproval(id) {
        Swal.fire({
            title: 'Please write a note',
            text: "",
            input: 'text',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'OK',
        }).then((result) => {
            if (result.value) {
                update_data(id, 0, 2, result.value, "Successfully")
            }
        })
    }

    function update_data(id, student, value, note, text) {
        console.log(student)
        let data = new FormData()
        data.append('_token', "{{ csrf_token() }}")
        data.append('id', id)
        data.append('student', student)
        data.append('value', value)
        data.append('note', note)
        $.ajax({
            type: 'POST',
            url: $('#route').attr('route'),
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                console.log(response)
                if (response == "success") {
                    Swal.fire(text, '', 'success')
                    $('.id-' + id).remove()
                } else
                    Swal.fire('Failed', '', 'error')
            }
        })
    }
</script>

@endsection