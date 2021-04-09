@extends('layouts.main')

@section('content')

<style>

    .ribbon-box .ribbon-two-silver span {
        background: #C0C0C0 !important;
    }


    .ribbon-box .ribbon-two-platinum span {
        background: #81C1BD !important;
    }


    .ribbon-box .ribbon-two-diamond span {
        background: #70d1f4  !important;
    }

    @media(max-width: 450px) {
		.row img {
			width: 100%;
		}
	}

	@media(max-width: 768px) {
		.row img {
			width: 80%;
		}
	}

	.col-md-6 p {
		margin: 30px 0;
		font-size: 19px;
	}

	.row:nth-child(even) p {
		margin-top: 0;
	}
</style>

<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-xl-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Home</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>     
    <!-- end page title -->

        <div class="row">
           
            <div class="col-xl-3 col-md-6">
                <a href="#">
                    <div class="card-box widget-icon ribbon-box bg-danger">
                        <!-- <div class="ribbon-two ribbon-two-success avatar-title display-6 m-0 "><span>Free</span></div> -->
                        <div class="avatar-lg float-left">
                            <i class="mdi mdi-volume-high avatar-title display-6 m-0 " style="font-size: 5em;"></i>
                        </div>
                        <div class="wid-icon-info text-right">
                            <h2 class="mb-1 text-light"> iSac  </h2>
                            <h4 class="text-light mb-1">Listening</h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-md-6">
                <a href="#">
                    <div class="card-box widget-icon ribbon-box bg-info">
                        <!-- <div class="ribbon-two ribbon-two-success avatar-title display-6 m-0 "><span>Free</span></div> -->
                        <div class="avatar-lg float-left">
                        <i class="mdi mdi-eye avatar-title display-6 m-0 " style="font-size: 5em;"></i>
                        </div>
                        <div class="text-right">
                            <h2 class="mb-1 text-light"> iSac  </h2>
                            <h4 class="text-light mb-1">Reading</h4>
                        </div>
                    </div>
                </a>
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <a href="{{url('/isac_writing_home')}}">
                    <div class="card-box widget-icon ribbon-box bg-primary">
                        <div class="ribbon-two ribbon-two-silver"><span>Silver</span></div>
                        <div class="avatar-lg float-left">
                            <i class="mdi mdi-lead-pencil  avatar-title display-6 m-0 " style="font-size: 5em;"></i>
                        </div>
                        <div class="text-right">
                            <h2 class="mb-1 text-light"> iSac  </h2>
                            <p class="text-light mb-1">Writing</p>
                        </div>
                    </div>
                </a>
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <a href="{{url('/browser-settings')}}">
                    <div class="card-box widget-icon ribbon-box bg-success">
                        <div class="ribbon-two ribbon-two-platinum avatar-title display-6 m-0 "><span>Platinum</span></div>
                        <div class="avatar-lg float-left">
                            <i class="mdi mdi-voice avatar-title display-6 m-0 " style="font-size: 5em;"></i>
                        </div>
                        <div class="text-right">
                            <h2 class="mb-1 text-light"> iSac </h2>
                            <p class="text-light mb-1">Speaking</p>
                        </div>
                    </div>
                </a>
            </div><!-- end col -->

        </div>
        <!-- end row -->
            
    
        <!-- end isac -->


        <div class="row">
           
            <div class="col-xl-6 col-md-6">
                <div class="card-box widget-icon ribbon-box bg-primary">
                    <!-- <div class="ribbon-two ribbon-two-success avatar-title display-6 m-0 "><span>Free</span></div> -->
                    <div class="avatar-lg float-left">
                        <i class="mdi mdi-view-compact avatar-title display-6 m-0 " style="font-size: 5em;"></i>
                    </div>
                    <div class="text-center">
                        <h2 class="mb-3 text-light "> Strategies Packs</h2>
                    </div>
                </div>
            </div><!-- end col -->

            <div class="col-xl-6 col-md-6">
               <div class="card-box widget-icon ribbon-box bg-primary">
                   <div class="ribbon-two ribbon-two-diamond avatar-title display-6 m-0 "><span>Diamond</span></div>
                   <div class="avatar-lg float-left">
                       <i class=" mdi mdi-alphabetical avatar-title display-6 m-0 " style="font-size: 5em;"></i>
                   </div>
                   <div class="text-center">
                       <h2 class="mb-3 text-light"> Mocktest </h2>
                   </div>
               </div>
           </div><!-- end col -->

        </div>
        <!-- end row -->

        <div class="row">

            <div class="col-xl-6 col-md-6">
                <div class="card-box widget-icon ribbon-box bg-primary">
                    <!-- <div class="ribbon-two ribbon-two-success avatar-title display-6 m-0 "><span>Free</span></div> -->
                    <div class="avatar-lg float-left">
                        <i class="mdi mdi-animation avatar-title display-6 m-0 " style="font-size: 5em;"></i>
                    </div>
                    <div class="text-center">
                        <h2 class="mb-3 text-light"> Topic Packs</h2>
                    </div>
                </div>
            </div><!-- end col -->
           
           

           <div class="col-xl-6 col-md-6">
               <div class="card-box widget-icon ribbon-box bg-primary">
                   <div class="ribbon-two ribbon-two-secondary avatar-title display-6 m-0 "><span>Premium</span></div>
                   <div class="avatar-lg float-left">
                       <i class="mdi mdi-account-group avatar-title display-6 m-0 " style="font-size: 5em;"></i>
                   </div>
                   <div class="text-center">
                       <h2 class="mb-3 text-light"> Club </h2>
                   </div>
               </div>
           </div><!-- end col -->

        </div>
        <!-- end row -->
    
    </div> <!-- end container -->
@endsection

