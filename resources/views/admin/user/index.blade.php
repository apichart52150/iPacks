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
                <a href="{{ route('admin-add-user') }}" class="btn btn-primary"><i class="mdi mdi-plus-circle mr-2"></i>Add new User</a>
            </div>

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
</div>

<script>
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