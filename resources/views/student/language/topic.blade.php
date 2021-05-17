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
            <a href="{{ url('language/home') }}" class="filter-menu-item" data-rel="all">All</a>
            <a href="{{ url('language/Intermediate') }}" class="filter-menu-item" data-rel="web">Grammar and Vocabulary - Intermediate</a>
            <a href="{{ url('language/Advanced') }}" class="filter-menu-item" data-rel="graphic">Grammar and Vocabulary - Advanced</a>
            <a href="{{ url('language/Report') }}" class="filter-menu-item" data-rel="illustrator">IELTS Task 1 - Report</a>
            <a href="{{ url('language/Essays') }}" class="filter-menu-item" data-rel="photography">IELTS Task 2 - Essays</a>
        </div>
    </div>
</div>
<!-- end row-->

<div class="row">

    @foreach ($topic['submenu'] as $id => $manu_name)

        <div class="col-sm-6 col-xl-3 mb-3">
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