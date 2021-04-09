@extends('layouts.app')

@section('content')
<div class="row justify-content-center pt-4">
    <div class="col-md-6 col-xl-5">
        <div class="card-box text-center">
            <h5 class="text-success mb-4">Use the <b>“iSAC STATUS”</b> menu to check the progress of your essay. </h5>
            <a href="{{ url('isac_writing_home') }}" class="btn btn-primary waves-effect w-md waves-light">CONTINUE</a>
        </div>
    </div>
</div>
@endsection