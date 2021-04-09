@extends('layouts.app')
@section('title', 'iSAC | Teacher');


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card">

                <div class="card-body p-4">
                 
                    <div class="text-center mb-3">
                        <h3 class="font-weight-bold text-primary"><i class="mdi mdi-radar"></i> iSAC | <span class="text-dark">Teacher</span> </h3>
                    </div>

                    <form class="form-horizontal m-t-20" method="post" action="{{route('login')}}">
	                {!! csrf_field() !!}

	                @if ($errors->has('email'))
                        <div class="alert alert-danger">
                        	<strong>{{ $errors->first('email') }}</strong>
                        </div>
                    @endif

	                <div class="form-group">
						<label for="username">Username</label>
						<input id="email" type="text" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
					</div>

					<div class="form-group">
						<label for="password">Password</label>
						<input id="password" type="password" class="form-control" name="password" placeholder="password" value="{{ old('password') }}" required autofocus>
					</div>
	          
	                <div class="form-group text-right m-t-20">
	                    <div class="col-xs-12">
	                        <button class="btn btn-primary btn-custom waves-effect waves-light w-md" type="submit">Login</button>
	                    </div>
	                </div>
	            </form>

                </div> <!-- end card-body -->
            </div>
            <!-- end card -->

        </div> <!-- end col -->
    </div>
    <!-- end row -->
</div>
<!-- end container -->
@endsection
