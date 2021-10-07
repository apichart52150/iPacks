@extends('layouts.main_admin')


@section('page-title')

<div class="row">
    <div class="col-12 m-0">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><i class="fas fa-home"></i> <a href="{{ route('admin_home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Payment</li>
                </ol>
            </div>
            <h4 class="page-title">Payment</h4>
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
            <table class="table table-bordered">
                <thead>
                    <tr class="table-secondary">
                        <th class="">#</th>
                        <th>Order ID</th>
                        <th>Receipt ID</th>
                        <th>User data</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="list-data"></tbody>
            </table>
        </div>
    </div>
    <div class="col-md-12">
        <div class="d-flex justify-content-center">
            {!! $ktc->links('pagination::bootstrap-4') !!}
        </div>
    </div>
</div>

<script src="{{ asset('public/assets/js/ajax.jquery.js') }}"></script>
<script src="{{ asset('public/assets/js/moment.min.js') }}"></script>

<script>
    let window_location = window.location.search.split("=")
    let window_location_length = window_location[window_location.length-1]
    let table_tbody = ""
    let index_row_tbody = 1
    "@foreach ($ktc as $ktc)"
    table_tbody += '<tr>'
    table_tbody += '<th>'+(((window_location_length-1)*"{{ $pag }}")+index_row_tbody)+'</th>'
    table_tbody += '<td>{{ $ktc->order_id }}</td>'
    table_tbody += '<td>{{ $ktc->order_ref }}</td>'
    table_tbody += '<td class="text-left">'
    table_tbody += '<strong>First name: </strong>' + "{{ $ktc->first_name }}" + '<br>'
    table_tbody += '<strong>Last name: </strong>' + "{{ $ktc->last_name }}" + '<br>'
    table_tbody += '<strong>Email: </strong>' + "{{ $ktc->email }}" + '<br>'
    table_tbody += '<strong>Address: </strong>' + "{{ $ktc->address }}"
    table_tbody += '</td>'
    if("{{ $ktc->success_code }}" == 1){
        table_tbody += '<td><span class="badge badge-success p-2">paid</span></span></td>'
    }else{
        table_tbody += '<td><span class="badge badge-secondary p-2">wait</span></span></td>'
    }
    table_tbody += '<td>'
    table_tbody += '<button onclick="edit('+"'{{ $ktc->id }}'"+','+"'{{ $ktc->order_id }}'"+','+"'{{ $ktc->order_ref }}'"+','+"'{{ $ktc->success_code }}'"+');" type="button" class="btn btn-info btn-xs mx-1">Edit</button>'
    table_tbody += '<button onclick="edit('+"'{{ $ktc->id }}'"+');" type="button" class="btn btn-danger btn-xs mx-1">Delete</button>'
    table_tbody += '</td>'
    table_tbody += '</tr>'
    index_row_tbody++
    "@endforeach"
    $('#list-data').html(table_tbody)


    function edit(id, order_id, order_ref, status) {
        let input = '<input type="text" id="order_id-edit" class="swal2-input" value="'+order_id+'" placeholder="Order ID">'
        input += '<input type="text" id="receipt_id-edit" class="swal2-input" value="'+order_ref+'" placeholder="Receipt ID">'
        input += '<select id="status-edit" class="swal2-input mt-0">'
        if (status == 1) {
            input += '<option value="1" selected>Approval</option>'
            input += '<option value="2">Disapproval</option>'
        } else if (status == 2) {
            input += '<option value="1">Approval</option>'
            input += '<option value="2" selected>Disapproval</option>'
        }
        input += '</select>'
        Swal.fire({
            title: "Edit",
            text: "",
            html: input,
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'OK',
            preConfirm: () => {
                let note = Swal.getPopup().querySelector('#note').value
                if (!note) {
                    Swal.showValidationMessage(`Please tell us your reasons.`)
                }
                return {
                    note: note,
                }
            }
        }).then((result) => {
            let data = ""
            // update_data(data)
        })
    }

    function update_data(data) {
        load_wait()
        $.ajax({
            type: 'POST',
            url: $('#route').attr('route'),
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response == "success") {
                    Swal.fire(title, "", 'success').then(()=>{
                        location.reload()
                    })
                } else if (response == "failed") {
                    Swal.fire(title, '', 'error')
                } 
            }
        })
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