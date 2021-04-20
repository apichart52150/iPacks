@extends('layouts.main')

@section('css')
<style>
    .class-expire {
        display: flex;
        justify-content: center;
    }

    button {
        white-space: normal !important;
    }

    @media(max-width: 500px) {
        .panel-body {
            text-align: center !important;
        }
        .panel-body p {
            text-align: left;
        }

        .panel-body button {
            width: 100%;
            padding: 5px 0;
        }
    }
</style>
@stop

@section('topbar')
    <div class="topbar-menu">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li class="has-submenu">
                        <a href="#">
                            <i class="fas fa-calendar-check"></i>Club Registration
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="#">
                            <i class="fas fa-history"></i>History lists
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{route('user_profile')}}">
                            <i class="fas fa-user"></i>Profile
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{route('faqs')}}">
                            <i class="fas fa-question-circle"></i>FAQs
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


@section('content')
<div class="wrapper">
    <div class="container-fluid p-0">
          <!-- start page title -->
          <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{url('user_home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Club & Bonus</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Club & Bonus</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 
        <div class="row pt-2">
            <div class="col-md-12">
                
                @if(!$isCancel)

                    @if(session()->has('responses'))
                        @component('student.clubs.notification', ['responses' => session()->get('responses')])
                        @endcomponent
                    @else
                        @component('student.clubs.notification')
                        @endcomponent
                    @endif

                    @component('student.clubs.club_room', ['data' => $data])
                    @endcomponent
                    
                @else

                <div class="row d-flex class-expire">
                    <div class="col-md-6">
                        <div class="card card-warning">
                            <div class="card-block text-center">
                                <span class="ms-icon ms-icon-circle ms-icon-xxlg mb-4 color-warning">
                                    <i class="fa fa-bell"></i>
                                </span>
                                <h4 class="color-warning">ต้องขออภัยในความไม่สะดวก ทางเรามีเหตุจำเป็นต้อง Cancel Club หากท่านได้ลงทะเบียนเรียบร้อยแล้วระบบจะคืนแต้มที่หักไปและสามารถตรวจสอบ club ที่ถูกยกเลิกได้ที่เมนู History List</h4>
                                <form action="{{ route('cancel.submit') }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="std_id" value="{{ auth('student')->user()->std_id }}">
                                    <button type="submit" class="btn btn-warning btn-raised">Confirm</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                @endif
            </div>     
                  
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $('#notificationModal').modal('show');

    const checkClubs = document.getElementById('check-clubs');
    if(checkClubs !== null) {
        checkClubs.addEventListener('click', () => {
            localStorage.setItem('prev_home', true)
        }) 
    }
</script>
@stop