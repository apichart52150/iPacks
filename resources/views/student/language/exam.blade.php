@extends('layouts.main')

@section('page-title')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><i class="fas fa-home"></i> <a href="{{ route('ipack_language') }}">Language Use</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('language/'.$pageTitle['topicType']) }}">{{ $pageTitle['topicType'] }}</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('language/'.$pageTitle['topicType'].'/'.$pageTitle['sub_menu_id']) }}">{{ $pageTitle['category'] }}</a></li>
                    <li class="breadcrumb-item active">{{$pageTitle['topic']}}</li>
                </ol>
            </div>
            <h4 class="page-title">{{$pageTitle['topic']}}</h4>
        </div>
    </div>
</div>     
@stop

@section('content')
    @include($view)
@endsection
