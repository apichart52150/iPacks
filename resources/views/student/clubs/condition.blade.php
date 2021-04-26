@extends('layouts.main')
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

                    <!-- <li class="has-submenu">
                        <a href="{{route('faqs')}}">
                            <i class="fas fa-question-circle"></i>FAQs
                        </a>
                    </li> -->

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

@section('page-title')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{url('user_home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Condition</li>
                </ol>
            </div>
            <h4 class="page-title">Condition</h4>
        </div>
    </div>
</div>
@endsection


@section('content')

<style>
   .bg-warning {
        background-color: #FF9800 !important;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <!-- Portlet card -->
        <div class="card">
            <div class="card-header bg-primary py-3 text-white">
                <div class="card-widgets">
                    <a href="{{ url('user_home') }}"><i class="mdi mdi-close"></i></a>
                </div>
                <h5 class="card-title mb-0 text-white">เงื่อนไขการจอง Bonus Tutorial</h5>
            </div>
            <div class="card-body card-content">
                <ol>
                    <li>เมื่อกดจอง Club หรือ Bonus Tutorial แล้ว ระบบจะทำการหัก 1 point ทันที</li>
                    <ul>
                        <li>กรุณาตรวจสอบรายละเอียดวัน เวลา ก่อนการจอง Club และ Bonus Tutorial ทุกครั้ง</li>
                        <li>Point ที่ใช้จอง Club หรือ Bonus Tutorial ไปแล้ว ไม่สามารถขอคืนได้ทุกกรณี</li>
                    </ul>
                    <li>เมื่อจอง Club หรือ Bonus Tutorial แล้ว ไม่สามารถยกเลิกได้ทุกกรณี</li>
                    <ul>
                        <li>
                            หากไม่มาเข้า Club หรือ Bonus Tutorial ทุกกรณี ระบบจะหัก point เพิ่มอีก 1 point (รวมถูกหัก 2 points หากไม่มาเข้า Club หรือ Bonus Tutorial)
                        </li>
                        <li>
                            กรณีป่วยกระทันหันจะต้องมี “ใบรับรองแพทย์” มาแสดง เจ้าหน้าที่จะคืน point ที่ถูกหักเพิ่มให้ 1 point (ไม่คืน point ที่ใช้จอง รวมถูกหัก 1 point)
                        </li>
                        <li>
                            กรณีมาสายเกิน 5 นาที เจ้าหน้าที่จะไม่อนุญาตให้เข้า Club หรือ Bonus Tutorial (ไม่คืน point ที่ใช้จอง รวมถูกหัก 1 point)
                        </li>
                    </ul>
                    <li>วันหมดอายุของ Club Card ไม่สามารถขยายระยะเวลาได้ทุกกรณี</li>
                    <li>ตาราง Club, Bonus Tutorial และอาจารย์ผู้สอน อาจมีการเปลี่ยนแปลงตามความเหมาะสม</li>
                </ol>
                <p class="font-weight-bold">Conditions of reserving Clubs and Bonus Tutorials</p>
                <ol>
                    <li>When you’ve already reserved a Club or a Bonus Tutorial, your point will be deducted immediately.</li>
                    <ul>
                        <li>Please accurately check the detail of date and time before reserving a Club or a Bonus Tutorial.</li>
                        <li>After you submit your reservation of Club or a Bonus Tutorial, your point can not be refunded at all.</li>
                    </ul>
                    <li>After you submit your reservation Club or a Bonus Tutorial, you can not cancel in any circumstance.</li>
                    <ul>
                        <li>
                            If you do not come to the Club or the Bonus Tutorial in all cases, the system will deduct one more point. (2 points deducted in total)
                        </li>
                        <li>
                            A sudden illness requires a "Medical certificate" shown to the institute, the CS officer will return 1 point that you’re deducted.
                        </li>
                        <li>
                            If you are late by more than 5 minutes, you will not be allowed to attend the Club or the Bonus Tutorial. (1 point will be deducted)
                        </li>
                    </ul>
                    <li>The Club card expiration cannot be extended in any circumstance.</li>
                    <li>The Club or the Bonus Tutorial Schedule and teacher may be changed as appropriate.</li>
                </ol>
                <div class="text-center">
                <div class="btn-group mb-1">
                    <form action="{{ route('condition.submit') }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="condition" value="true">
                        <button type="submit" class="btn btn-raised btn-success">Agree</button>
                    </form>
                </div>

                <div class="btn-group mb-1 ">
                    <a href="{{ url('user_home') }}" class="btn btn-raised btn-danger">Disagree</a>
                </div>
                </div>
            </div>
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
@endsection