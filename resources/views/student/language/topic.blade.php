@extends('layouts.main')

@section('page-title')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><i class="fas fa-home"></i> <a href="{{ url('/language/home') }}"> Home</a></li>
                    <li class="breadcrumb-item active">{{ $topic['title'] }}</li>
                </ol>
            </div>
            <h4 class="page-title">{{ $topic['title'] }}</h4>
        </div>
    </div>
</div>     
@stop

@section('content')
    <!-- Filter -->
    <div class="row">
        <div class="col-12">
            <div class="text-center filter-menu">
                <a href="{{url('/language/home')}}" class="filter-menu-item"><i class="fas fa-home"></i></a>
                @foreach ($topicInfo as $id => $name)
                @if ($id == $topic['topicName'])
                    <a href="{{url('language/'.$id)}}" class="filter-menu-item active" data-rel="{{$id}}">{{$id}}</a>
                @else
                    <a href="{{url('language/'.$id)}}" class="filter-menu-item" data-rel="{{$id}}">{{$id}}</a>
                @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- end row-->

    <div class="row filterable-content">
        @foreach ($topic['submenu'] as $id => $manu_name)
            <div class="col-sm-6 col-xl-3 mb-3 filter-item {{$topic['topicName']}}">
                <div class="card-box p-0 d-flex h-100">
                    <div class="bg-{{$topic['topicColor']}} d-flex justify-content-center align-items-center px-3">
                        <i class="fas fa-list text-white" style="font-size: 3em;"></i>
                    </div>
                    <div class="text-center flex-fill d-flex flex-column justify-content-between align-items-center p-1">
                        <h4 class="mt-0">{{$manu_name->menu_name}}</h4>
                        <a href="{{ url('language/'.$topic['topicName'].'/'.$manu_name->menu_id) }}" class="btn btn-bordered-{{$topic['topicColor']}} btn-sm">Next</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection