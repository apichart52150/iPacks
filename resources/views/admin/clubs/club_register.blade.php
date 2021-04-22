@extends('layouts.main_admin')

@section('topbar-menu')
    <div class="topbar-menu">
        <div class="container-fluid">
            <div id="navigation" class="bg-dark">
                <!-- Navigation Menu-->
                <ul class="navigation-menu  d-lg-flex justify-content-center">

                    <li class="has-submenu">
                        <a href="{{ url('writing/dashboard') }}" class="text-light">
                            <i class="mdi mdi-grease-pencil"></i>iSAC Writing
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ url('speaking/dashboard') }}" class="text-light">
                            <i class="mdi mdi-voice"></i>iSAC Speaking
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ url('mocktest/dashboard') }}" class="text-light">
                            <i class="mdi mdi-format-list-bulleted"></i>Mocktest 
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ url('clubs/dashboard') }}" class="text-light">
                            <i class="mdi mdi-format-list-bulleted"></i>Club & Bonus 
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
    <!-- start page title -->
    <div class="row">
        <div class="col-xl-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Home Admin</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>     
@endsection




@section('content')

    @if ($club_register->count())
        <script>
            function myFunction() {
                confirm("Press a button!");
            }
        </script>
        <?php //dd($id); ?>
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">{{ $club_register[0]->title_type.' '.$club_register[0]->club_subtitle.' 
                : '.$club_register[0]->start_date.' ( '.$club_register[0]->teacher.' )' }}</div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-hover table-responsive datatable" id="datatable">

        <thead>
            <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Tel.</th>
            <th>NC-Code</th>
            <th>Couse</th>
            <th>Register</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
        
        @foreach ($club_register as $row)
        <tr>
            <td><a href="{{ url('admin/student/'.$row->std_id.'/edit') }}" class="btn btn-xs btn-success">{!! $row->std_name.' <b style="color:#000">( '.$row->std_nickname.' )</b>' !!}</a></td>
            <td>{{ $row->coursetype == 'online' ? 'Online' : 'Live' }}</td>
            <td>{{ $row->std_mobile }}</td>
            <td>{{ $row->nccode }}</td>
            <td>{{ $row->coursename }}</td>
            <td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($row->datecreate))->diffForHumans() }}</td>
            
            @if ($row->clubroom_st != 2)
            
            <td><form action="{{ url('admin/club_check') }}" name="action" method="POST">
            <input type="hidden" name="start_date" value="{{ $club_register[0]->start_date }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="std_id" value="{{ $row->std_id }}"  />
            <input type="hidden" name="room_id" value="{{ $row->room_id }}"  />
            <input type="hidden" name="clubroom_st" value="{{ $row->clubroom_st }}"  />
            <input type="hidden" name="detail" value="{{ $row->title_type }}"  />
            <input type="hidden" name="teacher" value="{{ $club_register[0]->teacher }}"  />
            <input type="hidden" name="status" value="success"  />
            <button onclick="return confirm('มาเรียน !!!')" type="submit" name="status" value="success" class="btn btn-xs btn-success">Attendance</button>
            <button onclick="return confirm('ขาดเรียน !!!')"  type="submit" name="status" value="fail" class="btn btn-xs btn-danger">Absence</button>
            <button onclick="return confirm('ยกเลิกการจอง !!!')"  type="submit" name="status" value="cancel" class="btn btn-xs btn-danger">Cancel</button>
            </form>
            </td>
        
            @elseif ($row->clubroom_st == 2)  
            
            <?php 
            //print_r($status[$id]);die;ไม่มีค่า
            @$std_id = $row->std_id;
            //dd($row->std_id);
            ?>
    
            @if ($status[$std_id] == 0)  
            <td> <button class="btn btn-success">รับทราบแล้ว</button></td>
            @elseif ($status[$std_id]  == 1)  
            <td> <button class="btn btn-danger">ยังไม่รับทราบ</button></td> 
            @else
            <td>dddd</td>
            @endif
            @endif 
            </tr>
            @endforeach
            </tbody>
            </table>
            
            </div>
        </div>
        <div class="btn-group">
            <a href="{{ url('admin/excel_club_register/'.$id['id']) }}" type="button" class="btn btn-danger">Export Excel</a>
        </div>
    @else
        <?php //dd($club_register); ?>
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">{{ trans('quickadmin::templates.templates-customView_index-list') }}</div>
            </div>
            <div class="portlet-body">
                ไม่มีข้อมูล หรือไม่มีนักเรียนในคลับนี้ <a href="{{ url('admin/club_room') }}" class="btn btn-xs btn-success">กรุณาเลือก Club Room</a>
            </div>
        </div>
    @endif

@endsection