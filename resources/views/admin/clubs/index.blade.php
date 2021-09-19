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

<!-- <link rel="stylesheet" href="{{ asset('public/evo-calendar/css/evo-calendar.css') }}"> -->
<!-- <link rel="stylesheet" href="{{ asset('public/evo-calendar/css/evo-calendar.midnight-blue.css') }}"> -->
<link rel="stylesheet" href="{{ asset('public/evo-calendar/css/evo-calendar.midnight-blue.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/evo-calendar/css/evo-calendar.min.css') }}">
<!-- <link rel="stylesheet" href="{{ asset('public/evo-calendar/css/evo-calendar.orange-coral.css') }}"> -->
<!-- <link rel="stylesheet" href="{{ asset('public/evo-calendar/css/evo-calendar.orange-coral.min.css') }}"> -->
<!-- <link rel="stylesheet" href="{{ asset('public/evo-calendar/css/evo-calendar.royal-navy.css') }}"> -->
<!-- <link rel="stylesheet" href="{{ asset('public/evo-calendar/css/evo-calendar.royal-navy.min.css') }}"> -->

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
    <div class="col-md-12 mb-2">
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
                    <button class="approval btn btn-success w-100" onclick="approval('{{ $club->id }}','{{ $club->user_create }}','{{ $club->club_date }}','{{ $club->first_name }} {{ $club->last_name }}');">Approval</button>
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
    <div class="col-md-12 mt-4 mb-5 pb-5">
        <div id="calendar"></div>
    </div>
    <div id="route" route="{{route('clubs-confirm')}}"></div>
</div>

<script src="{{ asset('public/assets/js/ajax.jquery.js') }}"></script>
<script src="{{ asset('public/evo-calendar/js/evo-calendar.min.js') }}"></script>


<script>
    let event = []

    "@foreach ($approval as $club)"
    event.push({
        id: "{{ $club->id }}",
        name: "{{ $club->first_name }} {{ $club->last_name }}",
        description: "{{ $club->email }}",
        date: "{{ $club->club_date }}",
        type: "birthday",
        everyYear: !0
    })
    "@endforeach"

    $("#calendar").evoCalendar({
        theme: 'Royal Navy',
        eventHeaderFormat: 'dd MM yyyy',
        calendarEvents: event,
    })

    function approval(id, student_id, date, student_name) {
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
                update_data(id, date, student_id, student_name, 1, "", "Successfully")
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
                update_data(id, "", 0, "", 2, result.value, "Successfully")
            }
        })
    }

    function update_data(id, date, student_id, student_name, value, note, text) {
        let data = new FormData()
        data.append('_token', "{{ csrf_token() }}")
        data.append('id', id)
        data.append('student', student_id)
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
                if (response == "success") {
                    Swal.fire(text, '', 'success')
                    $('.id-' + id).remove()
                    if (value == 1)
                        event.push({
                            id: id,
                            name: student_name,
                            description: "",
                            date: date,
                            type: "birthday",
                            everyYear: !0
                        })
                } else if (response == "failed") {
                    Swal.fire('Failed', '', 'error')
                } else {
                    Swal.fire('Failed', 'User has point ' + response, 'error')
                }
            }
        })
    }
</script>

@endsection