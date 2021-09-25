@extends('layouts.main_admin')

@section('topbar-menu')
<div class="topbar-menu">
    <div class="container-fluid">
        <div id="navigation" class="bg-dark">
            <!-- Navigation Menu-->
            <ul class="navigation-menu  d-lg-flex justify-content-center">

                <li class="has-submenu">
                    <a href="{{ route('writing_dashboard') }}" class="text-light">
                        <i class="fas fa-highlighter"></i>IELTS Practice Writing
                    </a>
                </li>

                <li class="has-submenu">
                    <a href="{{ route('speaking_dashboard') }}" class="text-light">
                        <i class="fas fa-comments"></i>IELTS Practice Speaking
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

<link rel="stylesheet" href="{{ asset('public/evo-calendar/css/evo-calendar.midnight-blue.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/evo-calendar/css/evo-calendar.min.css') }}">

<link rel="stylesheet" href="{{ asset('public/evo-calendar/css/evo-calendar.css') }}">
<link rel="stylesheet" href="{{ asset('public/evo-calendar/css/evo-calendar.midnight-blue.css') }}">
<link rel="stylesheet" href="{{ asset('public/evo-calendar/css/evo-calendar.orange-coral.css') }}">
<link rel="stylesheet" href="{{ asset('public/evo-calendar/css/evo-calendar.orange-coral.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/evo-calendar/css/evo-calendar.royal-navy.css') }}">
<link rel="stylesheet" href="{{ asset('public/evo-calendar/css/evo-calendar.royal-navy.min.css') }}">

<div class="row">
    <div class="col-12 m-0">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><i class="fas fa-home"></i> <a href="{{ route('admin_home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Tutorial</li>
                </ol>
            </div>
            <h4 class="page-title">Tutorial</h4>
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
        <div class="card-box text-center">
            <a class="btn btn-info w-25" href="{{url('tutorial/history',['all','all'])}}">
                <span>History</span>
            </a>
        </div>
    </div>
    @if(count($tutorial)>0)
    @foreach ($tutorial as $tutorial)
    <div class="col-md-4 id-{{$tutorial->tutorial_id}}">
        <div class="card-box text-center">
            <h3>{{ date('d-m-Y', strtotime($tutorial->tutorial_date)) }}</h3>
            <p class="user_name pb-0 mb-0">{{ $tutorial->first_name }} {{ $tutorial->last_name }}</p>
            <p class="user_name pt-0 mt-0">{{ $tutorial->email }}</p>
            <div class="row">
                <div class="col-6">
                    <button class="approval btn btn-success w-100"
                        onclick="approval('{{ $tutorial->tutorial_id }}','{{ $tutorial->user_create }}','{{ $tutorial->tutorial_date }}','{{ $tutorial->first_name }} {{ $tutorial->last_name }}');">Approval</button>
                </div>
                <div class="col-6">
                    <button class="disapproval btn btn-danger w-100"
                        onclick="disapproval('{{ $tutorial->tutorial_id }}','{{ $tutorial->user_create }}')">Disapproval</button>
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
    <div id="route" route="{{route('tutorial-confirm')}}"></div>
</div>

<script src="{{ asset('public/assets/js/ajax.jquery.js') }}"></script>
<script src="{{ asset('public/evo-calendar/js/evo-calendar.min.js') }}"></script>


<script>
    
    $('.menubar-dark').css('font-family','"Roboto", sans-serif')
    
    let event = []

    "@foreach ($approval as $tutorial)"
    event.push({
        id: "{{ $tutorial->tutorial_id }}",
        name: "{{ $tutorial->first_name }} {{ $tutorial->last_name }}",
        description: "{{ $tutorial->email }}",
        date: "{{ $tutorial->tutorial_date }}",
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
            title: 'Please write a note',
            text: "",
            html: '<input type="text" id="note" class="swal2-input" placeholder="Note">',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'OK',
            preConfirm: () => {
                let note = Swal.getPopup().querySelector('#note').value
                if (!note) {
                    Swal.showValidationMessage(`Please enter note.`)
                }
                return {
                    note: note,
                }
            }
        }).then((result) => {
            update_data(id, date, student_id, student_name, 1, result.value.note, "Approval")
        })
    }

    function disapproval(id, student_id) {

        Swal.fire({
            title: 'Please write a note',
            text: "",
            html: '<input type="text" id="note" class="swal2-input" placeholder="Note">',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'OK',
            preConfirm: () => {
                let note = Swal.getPopup().querySelector('#note').value
                if (!note) {
                    Swal.showValidationMessage(`Please enter note.`)
                }
                return {
                    note: note,
                }
            }
        }).then((result) => {
            update_data(id, "", student_id, "", 2, result.value.note, "Disapproval")
        })
    }

    function update_data(id, date, student_id, student_name, value, note, title) {
        load_wait()
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
                    Swal.fire(title, "Successfully", 'success').then(()=>{
                        location.reload()
                    })
                    // $('.id-' + id).remove()
                    // if (value == 1)
                    //     event.push({
                    //         id: id,
                    //         name: student_name,
                    //         description: "",
                    //         date: date,
                    //         type: "birthday",
                    //         everyYear: !0
                    //     })
                } else if (response == "failed") {
                    Swal.fire(title, "Failed", 'error')
                } else {
                    Swal.fire(title, 'The item has been done. Please click "refresh" to make the pending items visible.', 'error').then(()=>{
                        location.reload()
                    })
                }
            }
        })
    }

    function load_wait() {
        Swal.fire({
            title: 'Please Wait !',
            html: 'data uploading',
            allowOutsideClick: false,
            onBeforeOpen: () => {
                Swal.showLoading()
            },
        })
    }
</script>

@endsection