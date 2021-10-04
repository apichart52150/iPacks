@extends('layouts.main')

@section('page-title')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><i class="fas fa-home"></i> <a href="{{ route('user_home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Clubs</li>
                </ol>
            </div>
            <h4 class="page-title">Home</h4>
        </div>
    </div>
</div>
<!-- end page title -->
@endsection

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css" integrity="sha512-P9vJUXK+LyvAzj8otTOKzdfF1F3UYVl13+F8Fof8/2QNb8Twd6Vb+VD52I7+87tex9UXxnzPgWA3rH96RExA7A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    .card-box,
    table thead tr th,
    table tbody tr td {
        color: black;
    }

    form label {
        font-size: 20px;
    }

    .day {
        cursor: pointer;
        text-align: center;
    }

    .date {
        cursor: pointer;
    }
</style>

<div class="card-box">
    @if($points->club_point > 0)
    <form class="have-point" route="{{ route('clubs-book') }}" id="form-club">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-date d-none alert-danger" role="alert">
                    Please select club date.
                </div>
            </div>
            <div class="col-md-2 mt-2">
                <label for="">Club date</label>
            </div>
            <div class="col-md-10 mt-2">
                <div class="input-group">
                    <input type="text" class="form-control date" data-provide="datepicker" data-date-autoclose="true" id="date" name="date" readonly placeholder="mm/dd/yyyy">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="ti-calendar"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mt-2">
                <label for="">Time</label>
            </div>
            <div class="col-md-10 mt-2">
                <input type="text" name="time" class="form-control" value="60 mins." readonly>
            </div>
            <div class="col-md-12 mt-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary w-25">Book</button>
            </div>
        </div>
    </form>
    <div class="dont-have-point d-none alert alert-danger text-center" role="alert">
        <h2>Available points</h2>
        <br>
        <h3>0</h3>
    </div>
    @else
    <form class="d-none" route="{{ route('clubs-book') }}" id="form-club">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-12">
                <div class="alert d-none alert-danger" role="alert">
                    Please select club date.
                </div>
            </div>
            <div class="col-md-2 mt-2">
                <label for="">Club date</label>
            </div>
            <div class="col-md-10 mt-2">
                <div class="input-group">
                    <input type="text" class="form-control" data-provide="datepicker" data-date-autoclose="true" id="date" name="date" readonly placeholder="mm/dd/yyyy">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="ti-calendar"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mt-2">
                <label for="">Time</label>
            </div>
            <div class="col-md-10 mt-2">
                <input type="text" name="time" class="form-control" value="60 mins." readonly>
            </div>
            <div class="col-md-12 mt-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary w-25">Book</button>
            </div>
        </div>
    </form>
    <div class="alert alert-danger text-center" role="alert">
        <h2>Available points</h2>
        <br>
        <h2>0</h2>
    </div>
    @endif
</div>

<div class="card-box text-dark">
    <h3>History</h3>
    <table id="history" class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Club date</th>
                <th scope="col">Status</th>
                <th scope="col">Note</th>
            </tr>
        </thead>
        <tbody>
            @if(count($clubs) > 0)
            @foreach ( $clubs as $club )
            <tr class="{{ date('d-m-Y', strtotime($club->club_date)) }}">
                <th class="align-middle" scope="row">{{ date('d-m-Y', strtotime($club->club_date)) }}</th>
                <td class="align-middle">
                    @if($club->status == 0)
                    <span class="text-primary">Pending</span>
                    @elseif ($club->status == 1)
                    <span class="text-success">Approval</span>
                    @else
                    <span class="text-danger">Disapproval</span>
                    @endif
                </td>
                <td class="align-middle">{{ $club->note }}</td>
                {{-- @if($club->status == 2)
                <td>
                    <button class="btn btn-danger" onclick="delete_clubs('{{ route('delete-club',[$club->clubs_id]) }}','{{ date('d-m-Y', strtotime($club->club_date)) }}');">
                        Delete
                    </button>
                </td>
                @else
                <td>
                    <button class="btn btn-danger" disabled>
                        Delete
                    </button>
                </td>
                @endif --}}
            </tr>
            @endforeach
            @else
            <tr class="dont-have-data">
                <td colspan="3" class="text-center">
                    <span>Don't have data</span>
                </td>
            </tr>
            @endif
        </tbody>
    </table>
</div>


@endsection

@section('js')
<!-- Sweet Alerts js -->
<script src="{{ asset('public/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- Sweet alert init js-->
<script src="{{ asset('public/assets/js/pages/sweet-alerts.init.js') }}"></script>
<!-- form-pickers js-->
<script src="{{ asset('public/assets/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('public/assets/js/moment.min.js') }}"></script>


<script>
    $('#user-point-all').html("You have {{$points->club_point}} point.")
    $('#user-point-all').addClass('badge badge-success px-2 py-1')
    let count_clubs = "{{count($clubs)}}"
    let points_clubs = "{{$points->club_point}}"

    $('#form-club').on('submit', function() {
        if ($('#date').val() == "") {
            $('.alert-date').removeClass('d-none')
        } else {
            $('.alert-date').addClass('d-none')
            let date = moment($('#date').val()).format('DD-MM-YYYY')
            var get_data = $('.' + date).html()
            if (get_data == null) {
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
                        load_wait()
                        let data = new FormData(this)
                        data.append('point', points_clubs)
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
                                    let tr = '<tr class="' + date + '"><td class="align-middle">' + date + '</td><td class="align-middle"><span class="text-primary">Pending</span></td><td></td><td><button class="btn btn-danger" disabled>Delete</button></td></tr>'
                                    if (count_clubs == 0) {
                                        $('.dont-have-data').after(tr)
                                        $('.dont-have-data').remove()
                                        count_clubs++
                                    } else {
                                        $('.' + $('#history tbody tr:first').attr('class')).before(tr)
                                    }
                                    points_clubs--
                                    point_0(points_clubs)
                                    Swal.fire("Book", "", "success")
                                } else if (response == "failed") {
                                    Swal.fire("Something went wrong!", "", "error")
                                } else {
                                    point_0(response)
                                    Swal.fire("Available points", "0", "error")
                                }
                            }
                        })
                    }
                })
            } else {
                Swal.fire("Please try again.", "The date has already been reserved or token.", "error")
            }
        }
        return false
    })

    function point_0(point) {
        if (point == 0) {
            $('.have-point').addClass('d-none')
            $('.dont-have-point').removeClass('d-none')
        }
        $('#user-point-all').html("You have " + point + " point.")
    }

    function delete_clubs(url, row) {
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
                load_wait()
                $.get(url, function(response) {
                    if (response == "success") {
                        $('.' + row).remove()
                        Swal.fire("Delete", "", "success")
                    } else {
                        Swal.fire("Something went wrong!", "", "error")
                    }
                })
            }
        })
        // let data = new FormData()
        // data.append('_token',$('input[name="_token"]').val())
        // data.append('id',id)
        // console.log(data)
        // $.ajax({
        //     type: 'POST',
        //     url: $('#delete').attr('route'),
        //     data: data,
        //     cache: false,
        //     contentType: false,
        //     processData: false,
        //     success: function(response) {
        //         console.log(response)
        //     }
        // })
    }


    function load_wait() {
        Swal.fire({
            title: 'Please Wait',
            html: 'Data uploading in progress',
            allowOutsideClick: false,
            onBeforeOpen: () => {
                Swal.showLoading()
            },
        })
    }
</script>

@endsection