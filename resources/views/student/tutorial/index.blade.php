@extends('layouts.main')

@section('page-title')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active"><i class="fas fa-home"></i> Home</li>
                </ol>
            </div>
            <h4 class="page-title">Tutorial</h4>
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
</style>

<div class="card-box">
    @if($points->tutorial_point > 0)
    <form class="have-point" route="{{ route('tutorial-book') }}" id="form-tutorial">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-12">
                <div class="alert d-none alert-danger" role="alert">
                    Please select tutorial date.
                </div>
            </div>
            <div class="col-md-2 mt-2">
                <label for="">Tutorial date</label>
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
    <div class="dont-have-point d-none alert alert-danger text-center" role="alert">
        <h2>Available points.</h2>
        <br>
        <h3>0</h3>
    </div>
    @else
    <form class="have-point d-none" route="{{ route('tutorial-book') }}" id="form-tutorial">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-12">
                <div class="alert d-none alert-danger" role="alert">
                    Please select tutorial date.
                </div>
            </div>
            <div class="col-md-2 mt-2">
                <label for="">Tutorial date</label>
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
    <div class="dont-have-point alert alert-danger text-center" role="alert">
        <h2>Available points.</h2>
        <br>
        <h3>0</h3>
    </div>
    @endif
</div>

<div class="card-box text-dark">
    <h3>History</h3>
    <table id="history" class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Tutorial date</th>
                <th scope="col">Status</th>
                <th scope="col">Note</th>
            </tr>
        </thead>
        <tbody>
            @if(count($tutorials) > 0)
            @foreach ( $tutorials as $tutorial )
            <tr class="{{ date('d-m-Y', strtotime($tutorial->tutorial_date)) }}">
                <th scope="row">{{ date('d-m-Y', strtotime($tutorial->tutorial_date)) }}</th>
                <td>
                    @if($tutorial->status == 0)
                    <span class="text-primary">Pending</span>
                    @elseif ($tutorial->status == 1)
                    <span class="text-success">Approval</span>
                    @else
                    <span class="text-danger">Disapproval</span>
                    @endif
                </td>
                <td>{{ $tutorial->note }}</td>
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
    $('#user-point-all').html("You have {{$points->tutorial_point}} point.")
    let count_tutorial = "{{count($tutorials)}}"
    let points_tutorial = "{{$points->tutorial_point}}"

    $('#form-tutorial').on('submit', function() {
        if ($('#date').val() == "") {
            $('.alert').removeClass('d-none')
        } else {
            $('.alert').addClass('d-none')
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
                        $.ajax({
                            type: 'POST',
                            url: $(this).attr('route'),
                            data: new FormData(this),
                            cache: false,
                            contentType: false,
                            processData: false,
                            success: function(response) {
                                if (response == "success") {
                                    let tr = '<tr class="' + date + '"><td>' + date + '</td><td><span class="text-primary">Pending</span></td><td></td></tr>'
                                    if (count_tutorial == 0) {
                                        $('.dont-have-data').after(tr)
                                        $('.dont-have-data').remove()
                                        count_tutorial++
                                    } else {
                                        $('.' + $('#history tbody tr:first').attr('class')).before(tr)
                                    }
                                    points_tutorial--
                                    point_0(points_tutorial)
                                    Swal.fire("Book", "Successfully", "success")
                                } else if (response == "failed") {
                                    Swal.fire("Book", "Failed", "error")
                                } else {
                                    point_0(response)
                                    Swal.fire("Point", response, "error")
                                }
                            }
                        })
                    }
                })
            } else {
                Swal.fire("Point", "response", "error")
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