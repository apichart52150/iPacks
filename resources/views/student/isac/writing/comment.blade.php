@extends('layouts.sac_w')

@section('css')
<style>
    .note-editable {
        border-bottom: 1px solid rgba(128, 137, 142, 0.8);
    }
</style>
@endsection

@section('page-title')
<div class="row">
	<div class="col-12">
		<div class="page-title-box">
			<div class="page-title-right">
				<ol class="breadcrumb m-0">
					<li class="breadcrumb-item"><i class="mdi mdi-keyboard-return"></i> <a href="{{ url('status_writing') }}">Back</a></li>
					<!-- <li class="breadcrumb-item"><a href="#">Topic </a></li> -->
					<li class="breadcrumb-item active">{{$data->header_test}}</li>
				</ol>
			</div>
			<h4 class="page-title">Status Writing</h4>
		</div>
	</div>
</div>     
@stop


@section('content')

<div class="card-box pt-0">
    <div class="row">
        <div class="col-md-6 card-body">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">{{ $data->header_test }}</div>
                <div class="card-body">
                    <img src="{{ asset($img_path) }}" alt="{{ $img_path }}" width="100%">
                </div>
            </div>    
        </div>

        <div class="col-md-6">
			<div class="card-body">
				<span class="d-flex justify-content-end"><span class="badge badge-success font-14 p-1">Teacher : {{ $data->th_name }}</span></span>
            </div>

            <img class="card-img-top img-fluid mb-3" src="{{asset('public/assets/images/sac-colorV4.jpg')}}" alt="SAC Color">

            <p class="mt-2 border border-3 p-2">
                <textarea id="elm1" contenteditable="false">
                    {!! str_replace('<p>&nbsp;</p>', '', $data->th_text) !!}
                </textarea>
            </p>

            <div class="mt-2 d-flex justify-content-between">
                <div class="d-flex">
                    <p class="font-15 mr-2 mb-0">NC Band Score : </p>
                    <h3 class="my-0">{{$data->score}}</h3>
                </div>
            </div>

            <div class="accordion mb-3 mt-3" id="accordionExample">
					<div class="card mb-1">
						<div class="card-header" id="headingOne">
							<h5 class="my-0">
								<a href="#collapseOne" class="text-primary" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
									Teacher Comment 
									<i class="fas fa-angle-down float-right"></i>
								</a>	
							</h5>
						</div>

						<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
							<div class="card-body">
								{{ $data->comment }}
							</div>
						</div>
					</div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script>
   tinymce.get('#elm1').getBody().setAttribute('contenteditable', false);
</script>
@stop

