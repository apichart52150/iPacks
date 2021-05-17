
@extends('layouts.main')

@section('fillter')
    <!-- Filter -->
    <div class="row">
        <div class="col-12">
            <div class="text-center filter-menu">
                <a href="javascript: void(0);" class="filter-menu-item active" data-rel="all">All</a>
                <a href="javascript: void(0);" class="filter-menu-item" data-rel="web">Web Design</a>
                <a href="javascript: void(0);" class="filter-menu-item" data-rel="graphic">Graphic Design</a>
                <a href="javascript: void(0);" class="filter-menu-item" data-rel="illustrator">Illustrator</a>
                <a href="javascript: void(0);" class="filter-menu-item" data-rel="photography">Photography</a>
            </div>
        </div>
    </div>
    <!-- end row-->
@endsection

@section('page-title')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ url('user_home')}}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active"> Listening </li>
                    </ol>
                </div>
                <h4 class="page-title">iSAC Listening</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 
@endsection

@section('content')
<style>
    .hover-scale i.fas {
        transform: scale(1);
        transition: transform .15s ease;
    }

    .hover-scale:hover i.fas {
        transform: scale(1.1);
    }

    .border-2 {
        border-width: 2px;
    }

</style>


<div class="row filterable-content">    
    
    @foreach ($menu as $id => $manu_name)
        @php
            if ($id == '1'){
                $color = 'info';
                $name =  'Challenges Practice';
            }elseif ($id == '2'){
                $color = 'warning';
                $name =  'NC Listening Test';
            }elseif ($id == '3'){
                $color = 'danger';
                $name =  'Active Listening';
            }else{
                $color = 'pink';
                $name =  'Language Drills Practice';
            }
        @endphp
        <div class="col-sm-6 col-xl-3">
            <div class="gal-box">
                <a href="#main{{$id}}" class="gal-like-btn"  data-animation="fadein" data-plugin="custommodal" data-overlayColor="#38414a">
                    <div class="widget-simple text-center w-100 p-3 bg-{{$color}}">
                        <i class="fas fa-headphones text-light fa-8x mb-2"></i>
                    </div>
                </a>
                <div class="gall-info"  id="headingOne">
                    <h4 class="font-16 mt-0 text-{{$color}}">{{$name}}</h4>
                    <a class="gal-like-btn"  data-toggle="modal" data-target="#pdf{{$id}}" data-plugin="custommodal">
                        <div class="hover-scale">
                            <div class="widget-simple">
                                <i class="fas fa-cloud-download-alt text-{{$color}} fa-2x"></i>
                            </div>
                        </div>
                    </a>
                    <img src="{{ asset('public/assets/images/file-icons/pdf.svg') }}" alt="user-img" class="rounded-circle" height="24" />
                    <span class="text-muted ml-1">Download PDF.file</span>
                </div> <!-- gallery info -->
            </div> <!-- end gal-box -->
        </div> <!-- end col -->
        @include('student.isac.listening.modal_listening')
    @endforeach
</div>
<!-- end row -->
@endsection


