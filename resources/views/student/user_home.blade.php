@extends('layouts.main')

@section('page-title')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active"><i class="fas fa-home"></i> Home</li>
                </ol>
            </div>
            <h4 class="page-title">Home</h4>
        </div>
    </div>
</div>
<!-- end page title -->
@endsection

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css"
    integrity="sha512-P9vJUXK+LyvAzj8otTOKzdfF1F3UYVl13+F8Fof8/2QNb8Twd6Vb+VD52I7+87tex9UXxnzPgWA3rH96RExA7A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    .hover-scale i.fas,
    .hover-scale i.fab {
        transform: scale(1);
        transition: transform .15s ease;
    }

    .hover-scale:hover i.fas,
    .hover-scale:hover i.fab {
        transform: scale(1.1);
    }

    .border-2 {
        border-width: 2px;
    }

    .ribbon-box .ribbon-two-secondary span {
        background: #C5B358 !important;
    }
</style>

@if(Auth::user()->level == 'platinum')

@include('student.componants.platinum')

@else

@include('student.componants.gold')

@endif

<div class="row my-3 text-white">
    <div id="guide-book" class="col-md-2">
        <button class="btn btn-primary w-100">
            <i class="fas fa-book"></i>
            Guide Book
        </button>
    </div>
    <div class="col-md-2">
        <a href="mailto:metre80.x@gmail.com" target="_blank">
            <button id="inbox-mail" class="btn btn-primary w-100">
                <i class="far fa-envelope"></i>
                Email
            </button>
        </a>
    </div>
    <div class="col-md-2">
        <button id="inbox-facebook" class="btn btn-primary w-100">
            <i class="fab fa-facebook-square"></i>
            Facebook
        </button>
    </div>
    <div class="col-md-2">
        <button id="inbox-line" class="btn btn-primary w-100">
            <i class="fab fa-line"></i>
            Line
        </button>
    </div>
</div>


@endsection