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
<!-- start page title -->
<div class="row">
    <div class="col-xl-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Home Admin</li>
                </ol>
            </div>
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
    @foreach ($clubs as $club)
    <div class="col-md-4">
        <div class="card-box text-center">
            <h3>{{ $club->club_date }}</h3>
            <p class="user_name">{{ $club->first_name }} {{ $club->last_name }}</p>
            <div class="row">
                <div class="col-6">
                    <button class="approval btn btn-success w-100"
                        onclick="approval('{{ $club->id }}');">Approval</button>
                </div>
                <div class="col-6">
                    <button class="disapproval btn btn-danger w-100"
                        onclick="disapproval({{ $club->id }})">Disapproval</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>


<!-- sweet-alerts -->
<script src="{{ asset('public/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('public/assets/js/pages/sweet-alerts.init.js') }}"></script>

<script>
    function approval(id){
        swal({
  title: "Ajax request example",
  text: "Submit to run ajax request",
  type: "info",
  showCancelButton: true,
  closeOnConfirm: false,
  showLoaderOnConfirm: true
}, function () {
  setTimeout(function () {
    swal("Ajax request finished!");
  }, 2000);
});
    }

    function disapproval(id){}
</script>

@endsection