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

@section('page-title')
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
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="accordion mb-3" id="accordionExample">
            <div class="card mb-1">
                <div class="card-header" id="headingOne">
                    <h5 class="my-0">
                        <a class="text-primary" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            1. เข้า Club และ Bonus Tutorial ได้ทั้งหมดกี่ครั้งต่อ 1 คอร์ส
                        </a>
                    </h2>
                </div>
            
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            <li>Club เข้าได้ 9 ครั้ง (ครั้งละ 1 ชั่วโมง) แบ่งเป็น Speaking, Writing, Reading, Listening</li>
                            <li>Bonus Tutorial เข้าได้ 3 ครั้ง (ครั้งละ 20 นาที) จำกัดการเข้า 1 ครั้งต่อสัปดาห์</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card mb-1">
                <div class="card-header" id="headingTwo">
                    <h5 class="my-0">
                        <a class="text-primary collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2. จอง Club และ Bonus Tutorial ตอนไหน
                        </a>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>การจอง Club และ Bonus Tutorial ต้องทำการจองล่วงหน้า 1 สัปดาห์ ทุกวันเสาร์ เวลา 13.15 น. เป็นต้นไป</p>
                    </div>
                </div>
            </div>
            <div class="card mb-1">
                <div class="card-header" id="headingThree">
                    <h5 class="my-0">
                        <a class="text-primary collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            3. ยกเลิก Club และ Bonus Tutorial ได้หรือไม่
                        </a>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>ไม่สามารถยกเลิก Club และ Bonus Tutorial ได้ทุกกรณี ยกเว้นแจ้งยกเลิกกับเจ้าหน้าที่ Customer Service ด้านหน้าเคาน์เตอร์ภายในวันที่กดจองเท่านั้น</p>
                </div>
                </div>
            </div>

            <div class="card mb-1">
                <div class="card-header" id="headingfour">
                    <h5 class="my-0">
                        <a class="text-primary collapsed" data-toggle="collapse" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                            4. เข้า Club และ Bonus Tutorial ได้ถึงเมื่อไหร่
                        </a>
                    </h5>
                </div>
                <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            <li>คลาสเรียนวันจันทร์-วันศุกร์ ต่ออายุเพิ่ม 30 วันทำการหลังจากจบคลาส</li>
                            <li>คลาสเรียนวันเสาร์-อาทิตย์ ต่ออายุเพิ่ม 75 วันทำการหลังจากจบคลาส</li>
                        </ul>
                </div>
                </div>
            </div>

            <div class="card mb-1">
                <div class="card-header" id="headingfive">
                    <h5 class="my-0">
                        <a class="text-primary collapsed" data-toggle="collapse" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                            5. หากต้องการเขียน iSAC Writing สามารถหาโจทย์ได้จากช่องทางใดบ้าง
                        </a>
                    </h5>
                </div>
                <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            <li>ซื้อจากทางสถาบันกับเจ้าหน้าที่ด้านหน้าเคาน์เตอร์</li>
                            <li>นักเรียนนำโจทย์มาเอง</li>
                        </ul>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="accordion mb-3" id="accordionExample">
            <div class="card mb-1">
                <div class="card-header" id="headingsix">
                    <h5 class="my-0">
                        <a class="text-primary" data-toggle="collapse" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                            6. ส่ง iSAC Writing อย่างไร
                        </a>
                    </h2>
                </div>
            
                <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            <li>แบบ Paper ส่งกับเจ้าหน้าที่ Customer Service ด้านหน้าเคาน์เตอร์ โดยส่งพร้อม Student Card ทุกครั้ง</li>
                            <li>
                                แบบ Online ผ่าน Website ของทางสถาบัน
                                <a href="https://www.newcambridgethailand.com/sacwriting/logincustom" target="_blank" style="word-break: break-word;">www.newcambridgethailand.com/sacwriting/logincustom</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card mb-1">
                <div class="card-header" id="headingseven">
                    <h5 class="my-0">
                        <a class="text-primary collapsed" data-toggle="collapse" href="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                            7. ใช้เวลาตรวจ iSAC Writing กี่วัน
                        </a>
                    </h5>
                </div>
                <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            <li>iSAC Writing ทั้งรูปแบบ paper และ online ใช้เวลาตรวจประมาณ 7-10 วัน</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card mb-1">
                <div class="card-header" id="headingeight">
                    <h5 class="my-0">
                        <a class="text-primary collapsed" data-toggle="collapse" href="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                            8. iSAC Online คืออะไร
                        </a>
                    </h5>
                </div>
                <div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>
                            iSAC เป็นส่วนหนึ่งของ Self Access Centre ที่สถาบันนิวเคมบริดจ์ได้จัดทำขึ้นเพื่อให้ได้ผู้เรียนได้ฝึกฝนทักษะทางภาษาอังกฤษ โดยผู้เรียนสามารถฝึกฝนได้ด้วยตัวเองผ่านทาง Internet ไม่ว่าจะเป็นจากที่บ้าน ที่ทำงาน หรือมหาวิทยาลัย ซึ่งทำให้สะดวกสำหรับผู้เรียนที่จะสามารถฝึกฝนได้ทุกที่ทุกเวลา เพื่อให้เกิดประโยชน์สูงสุด โดยแบ่งเป็น
                        </p>
                        <ul>
                            <li>iSAC Listening Online</li>
                            <li>iSAC Writing Online</li>
                            <li>iSAC Speaking Online</li>
                            <li>iSAC Reading Online</li>
                            <li>IELTS Topic Packs</li>
                            <li>Strategies Packs</li>
                        </ul>
                </div>
                </div>
            </div>

            <div class="card mb-1">
                <div class="card-header" id="headingnine">
                    <h5 class="my-0">
                        <a class="text-primary collapsed" data-toggle="collapse" href="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                            9. มีค่าใช้จ่ายในการยืมหนังสือหรือไม่
                        </a>
                    </h5>
                </div>
                <div id="collapsenine" class="collapse" aria-labelledby="headingnine" data-parent="#accordionExample">
                    <div class="card-body">
                        มีค่ามัดจำ 600 บาท (เงินสด) และจะได้รับเงินสดคืน เมื่อนำหนังสือมาคืน สามารถยืมหนังสือได้ 7 วัน กรณียืมหนังสือเกินกำหนด มีค่าปรับวันละ 100 บาทและห้ามขีดเขียนลงบนหนังสือ ฝ่าฝืนปรับ 600 บาท
                </div>
                </div>
            </div>

            <div class="card mb-1">
                <div class="card-header" id="headingten">
                    <h5 class="my-0">
                        <a class="text-primary collapsed" data-toggle="collapse" href="#collapseten" aria-expanded="false" aria-controls="collapseten">
                            10. สามารถต่ออายุ Student Card ได้หรือไม่
                        </a>
                    </h5>
                </div>
                <div id="collapseten" class="collapse" aria-labelledby="headingten" data-parent="#accordionExample">
                    <div class="card-body">
                    ไม่สามารถขยายระยะเวลาวันหมดอายุของ  Student Card ได้ทุกกรณี
                </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- end row -->
@endsection

@section('js')
<script>
    $('#accordion, #accordion2').collapse()
</script>
@stop