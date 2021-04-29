@extends('layouts.main')

@section('topbar')
    <div class="topbar-menu">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li class="has-submenu">
                        <a href="{{url('clubs/home')}}">
                            <i class="fas fa-calendar-check"></i>Club Registration
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{url('clubs/history')}}">
                            <i class="fas fa-history"></i>History lists
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{url('clubs/status_clubs')}}">
                            <i class="fas fa-question-circle"></i>Status Club
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
    <!-- end navbar-custom -->
@endsection

@section('page-title')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{url('user_home')}}">Home</a></li>
                        <li class="breadcrumb-item active">History</li>
                    </ol>
                </div>
                <h4 class="page-title">History</h4>
            </div>
        </div>
    </div>     
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <ul class="nav nav-pills navtab-bg nav-justified">
                @foreach ($tabs as $tab)
                    @php
                        $icon = ['Registration' => 'fas fa-registered', 'Status' => 'fas fa-history','Cancellation' => 'fas fa-calendar-times'];
                    @endphp

                    <li class="nav-item">
                        <a href="#{{ str_replace(' ', '', $tab) }}" data-toggle="tab" aria-expanded="true" class="nav-link {{ $loop->first ? 'active' : ''}}">
                            <span class="d-inline-block d-sm-none"> <i class="{{ $icon[$tab] }}"></i></span>
                            <span class="hidden-xs">{{ $tab }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content">
                @foreach($tabs as $tab)
                    <div class="tab-pane fade {{ $loop->first ? 'show active' : ''}}" id="{{ str_replace(' ', '', $tab) }}">
                        
                        <div class="row">
                            <div class="col-12">
                                <ul class="list-unstyled timeline-sm">
                                    @forelse (collect($data[$tab])->sortByDesc('datecreate') as $value)
                                        <li class="timeline-sm-item">

                                            @php
                                                if(strpos($value->score, '+') !== false) {
                                                    $labelColor = 'success';
                                                } else if (strpos($value->score, '-') !== false) {
                                                    $labelColor = 'danger';
                                                } else {
                                                    $labelColor = 'primary';
                                                }
                                            @endphp

                                            <span class="timeline-sm-date">
                                                @if(!empty($value->score))
                                                    <span class="badge badge-{{ $labelColor }} p-2">
                                                        {{ $value->score }}
                                                    </span>
                                                @endif
                                            </span>

                                            <h5 class="mt-0 mb-1">{{ date('d F, Y H:i:s', strtotime($value->datecreate)) }}</h5>
                                            <h5>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($value->datecreate))->diffForHumans() }}</h5>
                                            <h5 class="mt-0 mb-1 text-muted"> 
                                                {{ $value->content }}
                                            </h5>
                                        </li>
                                    @empty
                                        <h2 class="pb-4">{{ $tab }} not found.</h2>
                                    @endforelse
                                <ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection