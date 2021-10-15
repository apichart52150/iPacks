@extends('layouts.main_admin')



@section('page-title')
<div class="row">
    <div class="col-12 m-0">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><i class="fas fa-home"></i> <a href="{{ route('admin_home') }}">Home</a>
                    </li>
                    <!-- <li class="breadcrumb-item"><a href="#">Topic </a></li> -->
                    <li class="breadcrumb-item active">User</li>
                </ol>
            </div>
            <h4 class="page-title">User</h4>
        </div>
    </div>
</div>
@endsection

@section('content')

<style>
    .click {
        cursor: pointer;
    }
</style>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            @if(session()->has('success_ans'))
            {!!session()->get('success_ans')!!}
            @endif

            @if(session()->has('error_ans'))
            {!!session()->get('error_ans')!!}
            @endif

            {{-- <h4 class="header-title">User</h4> --}}
            <p class="sub-header">
                Manage User List
            </p>

            <div class="mb-2">
                <a href="{{ route('admin-add-user') }}" class="btn btn-primary"><i
                        class="mdi mdi-plus-circle mr-2"></i>Add new User</a>
            </div>

            <form id="user-search">
                <div class="row">
                    <div class="col-md-3 mb-1">
                        <p class="p-0 m-0 text-left">Email</p>
                        <input type="text" class="form-control" id="search-email" placeholder="Email">
                    </div>
                    <div class="col-md-3 mb-1">
                        <p class="p-0 m-0 text-left">First name</p>
                        <input type="text" class="form-control" id="search-first_name" placeholder="First name">
                    </div>
                    <div class="col-md-3 mb-1">
                        <p class="p-0 m-0 text-left">Status</p>
                        <select class="form-control" id="search-status">
                            <option value="all">Show all</option>
                            <option value="wait">wait</option>
                            <option value="paid">paid</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-2">
                        <p class="p-0 m-0 text-left">&nbsp;</p>
                        <button class="btn btn-primary btn-block">Search</button>
                    </div>
                </div>
            </form>

            <table id="basic-datatable" class="table dt-responsive nowrap">
                <thead>
                    <tr>
                        <th class="min-width">Id</th>
                        <th data-sort-initial="true" data-toggle="true">Email</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Expire date</th>
                        <th>Status</th>
                        <th>Manage : </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($users as $key => $row)
                    <tr class="row-{{$row->id}}">
                        <td>{{$row->id}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->first_name}} {{$row->last_name}}</td>
                        <td>{{ $row->address }}</td>
                        @if($row->expire_date != null)
                        <td>{{ date('d-M-Y',strtotime($row->expire_date)) }}</td>
                        @else
                        <td></td>
                        @endif
                        <td>

                            @if ($row->status == 'paid')
                            <span class="badge badge-success p-2">{{$row->status}}</span>
                            @else
                            <span class="badge badge-secondary p-2">wait</span>
                            @endif
                        </td>
                        <td>
                            <div class="d-flex flex-row">
                                <a href="{{ url('user/edit',[$row->id]) }}"
                                    class="btn btn-info text-white click btn-xs mr-1">Edit</a>

                                <form class="delete-user"
                                    onsubmit="return delete_user('{{ csrf_token() }}','{{$row->id}}','{{ route('remove-user') }}')">
                                    <button type="submit" class="btn btn-danger btn-xs mr-1">Delete</button>
                                </form>

                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div> <!-- end card-box -->
    </div> <!-- end col -->

    <div class="col-md-12">
        <div class="d-flex justify-content-center">
            {!! $users->links('pagination::bootstrap-4') !!}
        </div>
    </div>
</div>

<script src="{{ asset('public/assets/js/ajax.jquery.js') }}"></script>
<script>
    
    let form_data_search = "{{ $data_search }}".split('__')
    $('#search-email').val(form_data_search[0])
    $('#search-first_name').val(form_data_search[1])
    $('#search-status').val(form_data_search[2])
    if(form_data_search[3] == "all"){
        $('#search-user_data').val("")
    }else{
        $('#search-user_data').val(form_data_search[3])
    }

    $('#user-search').on('submit',function(){
        let search_email = $('#search-email').val()
        let search_first_name = $('#search-first_name').val()
        let search_status = $('#search-status').val()
        if(search_email == ""){
            search_email = "all"
        }
        if(search_first_name == ""){
            search_first_name = "all"
        }
        let data_search = search_email+'__'+search_first_name+'__'+search_status
        let url = "{{ route('user',':data') }}"
        url = url.replace(":data",data_search)
        // console.log(data_search)
        window.location.href = url
        return false
    })


    function delete_user(token ,id, url){ 
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
                let data = new FormData()
                data.append('_token', "{{ csrf_token() }}")
                data.append('id', id)
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response == "success") {
                            swal("Delete", "", "success").then(()=>{
                                $('.row-'+id).remove()
                            })
                            }
                        else
                            swal("Delete", "", "error")
                            }
                })
            }
        })
        return false
    }
</script>

@endsection