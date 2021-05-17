@extends('layouts.main')

@section('css')
<style>
    .border-3 {
        border-width: 3px !important;
        border-left: 0 !important; 
        border-right: 0 !important; 
        border-bottom: 0 !important; 
    }
</style>
@stop

@section('page-title')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><i class="fas fa-home"></i> <a href="{{ url('/') }}"> Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('language/'.$activities['topicName']) }}">{{ $activities['category'].' - '.$activities['topicName']}}</a></li>
                    <li class="breadcrumb-item active">{{ $activities['topicNo'] }}</li>
                </ol>
            </div>
            <h4 class="page-title">{{ $activities['topicNo'] }}</h4>
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
    <div class="col-md-12">
        <div class="card-box border border-{{ $activities['color'] }} border-3 rounded-0 pt-0">
            <div class="d-flex justify-content-center align-items-center flex-wrap">
                @foreach($activities['activities'] as $key => $activity)
                    <div class="col-xl-6 col-sm-12 text-center">
                        <a href="{{ url($activities['topicNo'].'/'.substr($activities['category'], 0, 1).'/'.$key) }}" class="btn btn-block btn-{{ $activities['color'] }} d-inline-flex flex-column align-items-center justify-content-between mr-2 mt-2">
                            <span class="mt-1">{{ $activity->sub_menu_name }}</span>
                        </a>  
                    </div>
                @endforeach  
                
            </div>
        </div>
    </div>
</div>
@endsection