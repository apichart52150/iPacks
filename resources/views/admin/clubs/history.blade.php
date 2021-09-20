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
                        <i class="fas fa-address-card"></i>Staff
                    </a>
                </li>

                <li class="has-submenu">
                    <a href="{{ route('user') }}" class="text-light">
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
                    <li class="breadcrumb-item"><a href="{{ route('clubs-list')}}">Clubs</a></li>
                    <li class="breadcrumb-item active">User</li>
                </ol>
            </div>
            <h4 class="page-title">History</h4>
        </div>
    </div>
</div>
@endsection


@section('content')

<style>
    .user_name {
        font-size: 20px;
    }

    .input-con {
        display: inline-block;
        position: relative;
    }
</style>


<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <label for="">Date: </label>
            <div class="input-con pr-1">
                <div class="input-group">
                    <input type="text" class="date form-control" data-provide="datepicker" data-date-autoclose="true" id="date" required placeholder="mm/dd/yyyy">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="ti-calendar"></i></span>
                    </div>
                </div>
            </div>
            <label for="">Status: </label>
            <div class="input-con pr-1">
                <select name="" class="status form-control">
                    <option value="all">Show All</option>
                    <option value="1">Approval</option>
                    <option value="2">Disapproval</option>
                </select>
            </div>
            <div class="input-con">
                <button url="{{url('clubs/history')}}" class="search-data btn btn-primary">Search</button>
            </div>
            <div class="input-con">
                <button class="reset-data btn btn-danger">Reset</button>
            </div>
            <hr>
            <table class="table table-bordered">
                <thead>
                    <tr class="table-secondary">
                        <th class="">Club date</th>
                        <th>USER</th>
                        <th>Approval by</th>
                        <th>Status</th>
                        <th>Note</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($clubs)>0)
                    @foreach ($clubs as $club)
                    <tr>
                        <td>{{ date('d-m-Y', strtotime($club->club_date)) }}</td>
                        <td>{{ $club->first_name }} {{ $club->last_name }}</td>
                        <td>{{ $club->staff_username }}</td>
                        <td>
                            @if($club->status==1)
                            <span class="text-success">Approval</span>
                            @else
                            <span class="text-danger">Disapproval</span>
                            @endif
                        </td>
                        <td>{{ $club->note }}</td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="5" class="text-center">
                            <span>Don't have data</span>
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-12">
        <div class="d-flex justify-content-center">
            {!! $clubs->links('pagination::bootstrap-4') !!}
        </div>
    </div>
</div>
<!-- form-pickers js-->
<script src="{{ asset('public/assets/js/bootstrap-datepicker.min.js') }}"></script>

<script src="{{ asset('public/assets/js/ajax.jquery.js') }}"></script>
<script>
    let get_url = $(location).attr('href').split("history/")[1].split("?")[0]
    let url_date = get_url.split("/")[0]
    let url_status = get_url.split("/")[1]
    if (url_date == "all")
        url_date = null
    if (url_status == "all")
        url_status = "all"
    $('.date').val(url_date)
    $('.status').val(url_status)
    $('.search-data').on('click', () => {
        let date = $('.date').val()
        if (date == "")
            date = "all"
        let status = $('.status').val()
        let url = $('.search-data').attr('url') + '/' + date + '/' + status
        window.location.href = url
    })

    $('.reset-data').on('click', () => {
        $('.date').val(null)
        $('.status').val("all")
    })
</script>

@endsection