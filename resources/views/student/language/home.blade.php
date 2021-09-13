
@extends('layouts.main')


@section('page-title')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('user_home')}}"><i class="fas fa-home"></i> Home</a></li>
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
    .hovered i.fas {
        transition: .3s ease-in-out;
    }

    .hovered:hover i.fas {
        transform: scale(1.1);
    }
</style>

<div class="row">   
    
    @foreach ($menu as $id => $manu_name)
        @php
            if ($id == '1'){
                $color = 'success';
                $name =  'Grammar and Vocabulary';
                $sub_name = 'Intermediate';
                $icon = 'fas fa-check';
            }elseif ($id == '2'){
                $color = 'danger';
                $name =  'Grammar and Vocabulary';
                $sub_name = 'Advanced';
                $icon = 'fas fa-check-double';
            }elseif ($id == '3'){
                $color = 'info';
                $name =  'IELTS Task 1';
                $sub_name = 'Report';
                $icon = 'fas fa-paragraph';
            }else{
                $color = 'primary';
                $name =  'IELTS Task 2';
                $sub_name = 'Essays';
                $icon = 'fas fa-quote-left';
            }
        @endphp
 
            <div class="col-xl-6 col-sm-12">
                <a href="{{url('language/'.$sub_name)}}" class="gal-like-btn">
                    <div class="card-box d-flex justify-content-between bg-{{$color}} text-white">
                        <div>
                            <h2 class="mt-0 text-white font-weight-bold">{{$name}}</h2>
                            <span>{{$sub_name}}</span>
                        </div>
                        <div>
                            <i class="{{$icon}} fa-4x"></i>
                        </div>
                    </div>
                </a>
            </div>
        
    @endforeach
</div>
<!-- end row -->
@endsection


