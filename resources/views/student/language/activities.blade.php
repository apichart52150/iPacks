@extends('layouts.main')

@section('page-title')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><i class="fas fa-home"></i> <a href="{{ url('/') }}"> Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('language/'.$activities['category']) }}">{{ $activities['category'] }}</a></li>
                        <li class="breadcrumb-item active">{{$activities['topicName']}}</li>
                    </ol>
                </div>
                <h4 class="page-title">{{$activities['topicName']}}</h4>
            </div>
        </div>
    </div>     
@stop

@section('content')
    <!-- Filter -->
    <div class="row">
        <div class="col-12">
            <div class="text-center filter-menu">
                <a href="{{url('/language/'.$activities['category'])}}" class="filter-menu-item"><i class="fas fa-reply"></i></a>
                @foreach($activities['topicNo'] as $key => $name)
                    @if ($name->menu_id == $activities['topicLink'])
                        <a href="{{ url('language/'.$activities['category'].'/'.$name->menu_id )}}" class="filter-menu-item active" data-rel="{{$name->menu_name}}">{{$name->menu_name}}</a>
                    @else
                        <a href="{{ url('language/'.$activities['category'].'/'.$name->menu_id )}}" class="filter-menu-item" data-rel="{{$name->menu_name}}">{{$name->menu_name}}</a>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- end row-->

    <div class="row filterable-content">
        <div class="col-md-12 filter-item $activities['topicLink']">
            <div class="card-box border border-{{ $activities['color'] }}">
                <div class="d-flex justify-content-center align-items-center flex-wrap">
                @foreach($activities['activities'] as $key => $activity)
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <a href="{{ url('language/'.$activities['category'].'/'.$activity->sub_menu_id.'/'.$activity->sub_menu_id) }}">
                            <div class="card card-body text-center bg-{{ $activities['color'] }}">
                                <h4 class="card-text text-white">{{ $activity->sub_menu_name }}</h4>
                            </div>
                        </a>  
                    </div>
                    @endforeach  
                </div>
            </div>
        </div>
    </div>
@endsection