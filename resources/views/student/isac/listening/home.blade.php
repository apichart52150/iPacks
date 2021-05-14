
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
    @foreach ($data as $id => $manu_name)
    @php
        if ($id == '1'){
            $color = 'info';
        }elseif ($id == '2'){
            $color = 'warning';
        }elseif ($id == '3'){
            $color = 'danger';
        }else{
            $color = 'pink';
        }
        
    @endphp
       
        <div class="col-sm-6 col-xl-3 filter-item all web illustrator">
            <div class="gal-box">
                <a data-toggle="modal" data-target="#main{{$id}}"  class="hover-scale" id="general-english">
                    <div class="widget-simple text-center w-100 p-3 bg-{{$color}}">
                        <i class="fas fa-headphones text-light fa-8x mb-2"></i>
                    </div>
                </a>
                <div class="gall-info"  id="headingOne">
                    <h4 class="font-16 mt-0 text-{{$color}}">Challenge Practice</h4>
                    <div class="accordion" id="accordionExample-{{$id}}">
                        <a class="collapsed gal-like-btn" data-toggle="collapse" href="#collapse-{{$id}}" aria-expanded="false" aria-controls="collapse-{{$id}}">
                            <div class="hover-scale">
                                <div class="widget-simple">
                                    <i class="fas fa-angle-down text-{{$color}} fa-2x"></i>
                                </div>
                            </div>
                        </a>
                        <img src="{{ asset('public/assets/images/file-icons/pdf.svg') }}" alt="user-img" class="rounded-circle" height="24" />
                        <span class="text-muted ml-1">Download PDF.file</span>
                        
                    </div>
                </div> <!-- gallery info -->
            </div> <!-- end gal-box -->
        </div> <!-- end col -->
        @include('student.isac.listening.modal_listening')

  
    @endforeach

    <div id="collapse-1" class="collapse mt-2" aria-labelledby="heading1" data-parent="#accordionExample-1">
        <div class="row icons-list-demo">
            <div class="col-lg-12" >
                <a href="#"  class="text-info">
                    <i class="fas fa-download fa-2x" style="font-size: 18px"></i>
                    Challenges-Practice-Advanced
                </a>
            </div>
            <div class="col-lg-12">
                <a href="#"  class="text-info">
                    <i class="fas fa-download fa-2x" style="font-size: 18px"></i>
                    Challenges-Practice-Business
                </a>
            </div>
            <div class="col-lg-12">
                <a href="#"  class="text-info">
                    <i class="fas fa-download fa-2x" style="font-size: 18px"></i>
                    Challenges-Practice-Intermediate
                </a>
            </div>
        </div>
    
    </div>

   
</div>
<!-- end row -->

@endsection

