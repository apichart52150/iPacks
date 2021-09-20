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
            <h4 class="page-title">Home</h4>
        </div>
    </div>
</div>
<!-- end page title -->
@endsection

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css"
    integrity="sha512-P9vJUXK+LyvAzj8otTOKzdfF1F3UYVl13+F8Fof8/2QNb8Twd6Vb+VD52I7+87tex9UXxnzPgWA3rH96RExA7A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

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
    @if($points->club_point > 0)
    <form route="{{ route('clubs-book') }}" id="form-club">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-2 mt-2">
                <label for="">Club date</label>
            </div>
            <div class="col-md-10 mt-2">
                <input type="date" name="date" id="date" class="form-control" id="" placeholder="">
            </div>
            <div class="col-md-2 mt-2">
                <label for="">Time</label>
            </div>
            <div class="col-md-10 mt-2">
                <input type="text" name="time" class="form-control" value="60 mins." readonly>
            </div>
            <div class="col-md-12 mt-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary w-25">Book.</button>
            </div>
        </div>
    </form>
    @else
    <div class="alert alert-danger text-center" role="alert">
        <h2>Available points.</h2>
        <br>
        <h4>0</h4>
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
            <tr class="{{ $club->id }}">
                <th scope="row">{{ date('d-m-Y', strtotime($club->club_date)) }}</th>
                <td>
                    @if($club->status == 0)
                    <span class="text-primary">Pending</span>
                    @elseif ($club->status == 1)
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

<script>
    swal("Avalable points.", "{{ $points->club_point }}")

    $('#form-club').on('submit', function() {
        $.ajax({
            type: 'POST',
            url: $(this).attr('route'),
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response == "success") {
                    swal("Book", "Success", "success")
                    let tr = '<tr class="' + $('#date').val() + '"><td>' + $('#date').val() + '</td><td><span class="text-primary">Pending</span></td><td></td></tr>'
                    $('.' + $('#history tbody tr:first').attr('class')).before(tr)
                }
            }
        })
        return false
    })
</script>

@endsection