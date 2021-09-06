@extends('layouts.main')

@section('page-title')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><i class="fas fa-home"></i> <a href="{{ url('isac/listening') }}">Language Use</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('isac/listening/') }}">{{ $pageTitle['menu_name'] }}</a></li>
                    <li class="breadcrumb-item active">{{ $pageTitle['sub_menu_name'] }}</li>
                </ol>
            </div>
            <h4 class="page-title">{{ $pageTitle['menu_name'] }}</h4>
        </div>
    </div>
</div>     
@stop

@section('content')
    @include($view)
@endsection
