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

            <form id="payment-search">
                <div class="row">
                    <div class="col-md-3 mb-1">
                        <p class="p-0 m-0 text-left">Pay type</p>
                        <select class="form-control" id="search-pay_type">
                            <option value="all">Show all</option>
                            <option value="CC">Credit Card</option>
                            <option value="Alipay">Alipay</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-1">
                        <p class="p-0 m-0 text-left">Remark</p>
                        <select class="form-control" id="search-remark">
                            <option value="all">Show all</option>
                            <option value="idp">idp</option>
                            <option value="student">student</option>
                            <option value="other">other</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-1">
                        <p class="p-0 m-0 text-left">Status</p>
                        <select class="form-control" id="search-status">
                            <option value="all">Show all</option>
                            <option value="0">wait</option>
                            <option value="1">paid</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-1">
                        <p class="p-0 m-0 text-left">User data</p>
                        <input type="text" class="form-control" id="search-user_data" placeholder="First name">
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-6 mb-2">
                        <button class="btn btn-primary btn-block">Search</button>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </form>

            <table class="table table-bordered">
                <thead>
                    <tr class="table-secondary">
                        <th class="">#</th>
                        <th>Order ID</th>
                        <th>Receipt ID</th>
                        <th>User data</th>
                        <th>Status</th>
                        <th>Remark</th>
                        <th>Pay type</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="list-data"></tbody>
            </table>
            </>
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
        let form_data_search = "{{ $data_search }}".split('__')
        $('#search-pay_type').val(form_data_search[0])
        $('#search-remark').val(form_data_search[1])
        $('#search-status').val(form_data_search[2])
        if(form_data_search[3] == "all"){
            $('#search-user_data').val("")
        }else{
            $('#search-user_data').val(form_data_search[3])
        }

        $('#payment-search').on('submit',function(){
            let search_pay_type = $('#search-pay_type').val()
            let search_remark = $('#search-remark').val()
            let search_status = $('#search-status').val()
            let search_user_data = $('#search-user_data').val()
            if(search_user_data == ""){
                search_user_data = "all"
            }
            let data_search = search_pay_type+'__'+search_remark+'__'+search_status+'__'+search_user_data
            let url = "{{ route('admin-payment',':data') }}"
            url = url.replace(":data",data_search)
            window.location.href = url
            return false
        })

        let window_location = window.location.search.split("=")
        let window_location_length = window_location[window_location.length-1]
        if(window_location_length==""){
            window_location_length = 1
        }
        let table_tbody = ""
        let index_row_tbody = 1
        // console.log("{{ count($ktc) }}")
        if("{{ count($ktc) }}" > 0){
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
            table_tbody += '<td>{{ $ktc->remark }}</td>'
            table_tbody += '<td>{{ $ktc->pay_type }}</td>'
            table_tbody += '<td>'
            table_tbody += '<button onclick="edit('+"'{{ $ktc->id }}'"+','+"'{{ $ktc->order_id }}'"+','+"'{{ $ktc->order_ref }}'"+','+"'{{ $ktc->success_code }}'"+','+"'{{ $ktc->remark }}'"+','+"'{{ $ktc->pay_type }}'"+','+"'{{ $ktc->package }}'"+');" type="button" class="btn btn-info btn-xs mx-1">Edit</button>'
            // table_tbody += '<button onclick="delete('+"'{{ $ktc->id }}'"+');" type="button" class="btn btn-danger btn-xs mx-1">Delete</button>'
            table_tbody += '</td>'
            table_tbody += '</tr>'
            index_row_tbody++
            "@endforeach"
        }else{
            table_tbody += '<tr><td colspan="8">'+"Don't have data"+'</td></tr>'
        }
        $('#list-data').html(table_tbody)


        function edit(id, order_id, order_ref, status,remark,pay_type,package) {
            let input = ''
            input += '<div class="w-100 text-left"><label class="pt-3">Status</label></div>'
            input += '<select id="status-edit" class="swal2-input mt-0">'
            if (status == 1) {
                input += '<option value="1" selected>paid</option>'
                input += '<option value="0">wait</option>'
            } else if (status == 0) {
                input += '<option value="1">paid</option>'
                input += '<option value="0" selected>wait</option>'
            }
            input += '</select>'
            input += '<div class="w-100 text-left remark-edit"><label class="pt-3">Remark</label></div>'
            input += '<select id="remark-edit" class="swal2-input remark-edit mt-0">'
            if (remark == 1) {
                input += '<option value="idp">IDP</option>'
                input += '<option value="student" selected>Student</option>'
                input += '<option value="other">Other</option>'
            } else if (remark == 0) {
                input += '<option value="idp">IDP</option>'
                input += '<option value="student" >Student</option>'
                input += '<option value="other" selected>Other</option>'
            }else{
                input += '<option value="idp" selected>IDP</option>'
                input += '<option value="student" >Student</option>'
                input += '<option value="other">Other</option>'
            }
            input += '</select>'
            input += '<div class="w-100 text-left pay_type-edit"><label class="pt-3">Package</label></div>'
            input += '<select id="level-edit" class="swal2-input mt-0 pay_type-edit">'
            if (package == "gold") {
                input += '<option value="gold" selected>gold</option>'
                input += '<option value="platinum">platinum</option>'
            } else if (package == "platinum") {
                input += '<option value="gold">gold</option>'
                input += '<option value="platinum" selected>platinum</option>'
            }else{
                input += '<option value="gold" >gold</option>'
                input += '<option value="platinum">platinum</option>'
            }
            input += '</select>'
            input += '<div class="w-100 text-left pay_type-edit"><label class="pt-3">Pay type</label></div>'
            input += '<select id="pay_type-edit" class="swal2-input mt-0 pay_type-edit">'
            if (pay_type == "CC") {
                input += '<option value="CC" selected>Credit</option>'
                input += '<option value="Alipay">Alipay</option>'
            } else if (pay_type == "Alipay") {
                input += '<option value="CC">Credit</option>'
                input += '<option value="Alipay" selected>Alipay</option>'
            }else{
                input += '<option value="CC" >Credit</option>'
                input += '<option value="Alipay">Alipay</option>'
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
                    // let order_id = Swal.getPopup().querySelector('#order_id-edit').value
                    // let receipt_id = Swal.getPopup().querySelector('#receipt_id-edit').value
                    let level = Swal.getPopup().querySelector('#level-edit').value
                    let status = Swal.getPopup().querySelector('#status-edit').value
                    let remark = Swal.getPopup().querySelector('#remark-edit').value
                    let pay_type = Swal.getPopup().querySelector('#pay_type-edit').value
                    return {
                        // order_id: order_id,
                        // receipt_id: receipt_id,
                        level: level,
                        status: status,
                        remark: remark,
                        pay_type: pay_type,
                    }
                }
            }).then((result) => {
                if (result.value){
                    let data = new FormData()
                    data.append('_token',"{{ csrf_token() }}")
                    data.append('id',id)
                    // // data.append('order_id',result.value.order_id)
                    // // data.append('receipt_id',result.value.receipt_id)
                    data.append('level',result.value.level)
                    data.append('status',result.value.status)
                    data.append('remark',result.value.remark)
                    data.append('pay_type',result.value.pay_type)
                    console.log(result.value)
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes'
                    }).then((result) => {
                        if (result) {
                            update_data(data)
                        }
                    })
                }
            })
        }

        function update_data(data) {
            load_wait()
            $.ajax({
                type: 'POST',
                url: "{{ route('admin-payment-edit') }}",
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response)
                    if (response == "success") {
                        Swal.fire('Edit', "", 'success').then(()=>{
                            location.reload()
                        })
                    } else if (response == "failed") {
                        Swal.fire('Edit', '', 'error')
                    } else{

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