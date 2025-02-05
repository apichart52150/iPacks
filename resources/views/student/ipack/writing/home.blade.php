@extends('layouts.main')

@section('page-title')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><i class="fas fa-home"></i> <a href="{{ url('/') }}">Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Topic </a></li> -->
                        <li class="breadcrumb-item active">IELTS Practice Writing</li>
                    </ol>
                </div>
                <h4 class="page-title">IELTS Practice Writing</h4>
            </div>
        </div>
    </div>     
@endsection


@section('content')
    <style>
        .nav-bordered a.active {
            border-bottom: 2px solid #00BCD4 !important;
        }
            
        .icons-list-demo .col-md-4:hover, .icons-list-demo .col-md-4:hover i {
            color: #00BCD4 !important;
        }
    </style>

<!--  -->
@if ($Task == 1)
<div class="row" id ="Writting1">
    <div class="col-lg-12">
        <div class="card-box border-top border-info border border-1">
            <h4 class="header-title">IELTS Practice Writing Task 1</h4>
            <p class="sub-header mb-4">Each essay will deduct one point from your account</p>

            <ul class="nav nav-tabs nav-bordered">
                @foreach($task1['tab'] as $key => $value)
                    <li class="nav-item">
                        <a href="#task1_{{ $key }}" data-toggle="tab" aria-expanded="false"  class="nav-link {{ $key == 1 ? 'active' : '' }}">
                            {{ $value }}
                        </a>
                    </li>
                @endforeach
            </ul>

            <div class="tab-content" align="center">
                @foreach(collect($task1['task1'])->chunk(20) as $tabKey => $tabValue)
                    <div class="tab-pane fade {{ ($tabKey+1) == 1 ? 'show active' : '' }}" id="task1_{{ ($tabKey+1) }}">
                        @foreach($tabValue as $key => $value)
                            @php 
                                $imgNo = "1_".$key;
                                $header = "Writing 1-".$key;
                                $type = $value['type'];
                                $task = '1';
                                
                                $data = ['task' => $task, 'imgNo' => $imgNo, 'header' => $header, 'type' => $type];
                            @endphp

                            <button type="button" class="btn btn-info waves-effect waves-light mt-2 task" data-toggle="modal" data-target="#task1{{$key}}">Writing {{ $value['number'] }} {!! $value['icon'] !!}</button>

                            <!-- modal -->
                            <div id="task1{{$key}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">{{$data['header']}}</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <h5>{{$data['header']}}</h5>
                                            <p>Each essay will deduct one point from your account</p>
                                            <hr>
                                            <img src="{{ asset('public/assets/images/ks-ix/'.$data['imgNo'].'.jpg') }}" class="w-100 mt-1">
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('writing_test') }}" method="POST">
                                                {{ csrf_field() }}
                                                
                                                <input type="hidden" name="task" value="{{$data['task']}}"> 
                                                <input type="hidden" name="imgPath" value="public/assets/images/ks-ix/{{$data['imgNo']}}.jpg">
                                                <input type="hidden" name="code_sac" value="{{$data['imgNo']}}"> 
                                                <input type="hidden" name="test_type" value="{{$data['type']}}"> 
                                                <input type="hidden" name="header_test" value="{{$data['header']}}"> 
                                                <input type="hidden" name="level" value="1"> 

                                                <button type="submit" class="btn btn-outline-info waves-effect waves-light" name="mode" value="practice">Practice Mode</button>
                                                <button type="submit" class="btn btn-info waves-effect waves-light" name="mode" value="test">Test Mode</button>
                                            </form>
                                            
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div> <!-- end col -->


</div>
@else
<div class="row" id ="Writting2">
    <!-- end row -->
    <div class="col-lg-12">
        <div class="card-box border-top border-info border border-1">
            <h4 class="header-title">IELTS Practice Writing Task 2</h4>
            <p class="sub-header mb-4">Each essay will deduct one point from your account</p>

            <ul class="nav nav-tabs nav-bordered">
                @foreach($task2['tab'] as $key => $value)
                    <li class="nav-item">
                        <a href="#task2_{{ $key }}" data-toggle="tab" aria-expanded="false"  class="nav-link {{ $key == 1 ? 'active' : '' }}">
                            {{ $value }}
                        </a>
                    </li>
                @endforeach
            </ul>

            <div class="tab-content" align="center">
                @foreach(collect($task2['task2'])->chunk(20) as $tabKey => $tabValue)
                    <div class="tab-pane fade {{ ($tabKey+1) == 1 ? 'show active' : '' }}" id="task2_{{ ($tabKey+1) }}">
                        @foreach($tabValue as $key => $value)
                            @php 
                                $imgNo = "2_".$key;
                                $header = "Writing 2-".$key;
                                $type = $value['type'];
                                $task = '2';

                                $data = ['task' => $task, 'imgNo' => $imgNo, 'header' => $header, 'type' => $type];
                            @endphp

                            <!-- button -->
                            <button type="button"class="btn btn-info btn-rounded width-md waves-effect waves-light mt-2 task" data-toggle="modal" data-target="#task2{{$key}}">Writing {{ $value['number'] }} {!! $value['icon'] !!}</button>
                            
                            <!-- modal -->
                            <div id="task2{{$key}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog ">
                                    <div class="modal-content border border-info">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">{{$data['header']}}</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <h5>{{$data['header']}}</h5>
                                            <p>Each essay will deduct one point from your account</p>
                                            <hr>
                                            <img src="{{ asset('public/assets/images/ks-ix/'.$data['imgNo'].'.jpg') }}" class="w-100 mt-1">
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('writing_test') }}" method="POST">
                                                {{ csrf_field() }}
                                                
                                                <input type="hidden" name="task" value="{{$data['task']}}"> 
                                                <input type="hidden" name="imgPath" value="public/assets/images/ks-ix/{{$data['imgNo']}}.jpg">
                                                <input type="hidden" name="code_sac" value="{{$data['imgNo']}}"> 
                                                <input type="hidden" name="test_type" value="{{$data['type']}}"> 
                                                <input type="hidden" name="header_test" value="{{$data['header']}}"> 
                                                <input type="hidden" name="level" value="1"> 

                                                <button type="submit" class="btn btn-outline-info waves-effect" name="mode" value="practice">Practice Mode</button>
                                                <button type="submit" class="btn btn-info waves-effect waves-light" name="mode" value="test">Test Mode</button>
                                            </form>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div> <!-- end col -->
</div>    
@endif
@if ($Task == 1)
    <div class="row">
        <div class="col-md-12">
            <div class="card-box border-top border-info border border-1">
                <h4 class="m-t-0 m-b-10 header-title">Report Type</h4>
                <div class="row icons-list-demo">
                    <div class="col-6 col-md-4 col-3">
                        <i class="mdi mdi-chart-arc"></i> Pie Chart
                    </div>
                    <div class="col-6 col-md-4 col-3">
                        <i class=" mdi mdi-chart-line"></i> Line Graph
                    </div>
                    <div class="col-6 col-md-4 col-3">
                        <i class="mdi mdi-chart-bar-stacked"></i> Bar Chart
                    </div>
                    <div class="col-6 col-md-4 col-3">
                        <i class="mdi mdi-table"></i> Table
                    </div>
                    <div class="col-6 col-md-4 col-3">
                        <i class="mdi mdi-view-module"></i> Mixed
                    </div>
                    <div class="col-6 col-md-4 col-3">
                        <i class="mdi mdi-comment-question-outline"></i> Process
                    </div>
                    <div class="col-6 col-md-4 col-3">
                        <i class=" mdi mdi-recycle"></i> Cycle
                    </div>
                    <div class="col-6 col-md-4 col-3">
                        <i class="mdi mdi-image"></i> Picture
                    </div>
                    <div class="col-6 col-md-4 col-3">
                        <i class="mdi mdi-google-maps"></i> Map
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    @else
    <div class="row">
        <div class="col-md-12">
            <div class="card-box border-top border-info border border-1">
                <h4 class="m-t-0 m-b-10 header-title">Essay Type</h4>
                <div class="row icons-list-demo">
                    <div class="col-6 col-md-4 col-md-6">
                        <i class="mdi mdi-format-list-bulleted"></i> Listing
                    </div>
                    <div class="col-6 col-md-4 col-md-6">
                        <i class="mdi mdi-check-circle-outline"></i> Agree/Disagree
                    </div>
                    <div class="col-6 col-md-4 col-md-6">
                        <i class="mdi mdi-book-multiple-variant"></i> Causes/Solutions
                    </div>
                    <div class="col-6 col-md-4 col-md-6">
                        <i class="mdi mdi-alert-decagram"></i> Causes/Effects
                    </div>
                    <div class="col-6  col-md-4 col-md-6">
                        <i class="mdi mdi-gesture-two-double-tap"></i> Two-Part
                    </div>
                    <div class="col-6  col-md-4 col-md-6">
                        <i class="mdi mdi-settings"></i>Advantages/Disadvantages
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    @endif
@endsection

@section('js')
@php 
    use App\Model\Points;
    $point = Points::getPoint(Auth::user('web')->id);
@endphp

<script>
    var writing = {{ $point->writing_point }};
    if(writing == 0){
        swal({
            title: 'Access denied',
            text: "You dont't have point",
            type: 'warning',
            showConfirmButton: false,
            footer:'<a href="{{ url("payment/platinum") }}">Buy Point</a>',
        }).then(function() {
            window.location.href ="{{ route('user_home')}}"
        });
    }




</script>

@stop

