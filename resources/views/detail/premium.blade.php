@extends('layouts.detail')

@section('content')
<div class="row mt-4">
    <div class="col-md-12 d-flex justify-content-center">
        <h1>Premium</h1>
    </div>
    <div class="col-md-12 d-flex justify-content-center">
        <img class="w-50" src="http://ent.md.chula.ac.th/wp-content/themes/ent-chula/assets/images/no-thumbnail.png"
            alt="">
    </div>
    <div class="col-md-12 mt-3 d-flex justify-content-center">
        <div class="w-50 d-flex justify-content-center">
            <a class="w-50" href="{{ route('user_register') }}">
                <button class="w-100 btn btn-warning">Purchase</button>
            </a>
        </div>
    </div>
    <div class="mt-5 col-md-12">
        <div class="card-box text-dark w-100 text-center">
            <h1>Detail</h1>
            <hr>

        </div>
    </div>
</div>
@endsection