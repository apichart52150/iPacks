@extends('layouts.main')

@section('content')
<div class="col-md-12">
 
    <h2 class="faq-title"><img src="{{ asset('public/assets/img/faq.png') }}" alt=""> Frequently Asked Questions</h2>

    <div class="row faq">
        <!-- FAQs for Online -->
        <div class="card-block">
            <div class="col-md-6">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselecttable="true" class="m-b-20">
                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    1. เข้า Bonus Tutorial ได้ทั้งหมดกี่ครั้งต่อ 1 คอร์ส
                                </a>
                            </h4>
                        </div>

                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <ul>
                                    <li>Bonus Tutorial เข้าได้ 3 ครั้ง (ครั้งละ 20 นาที) จำกัดการเข้า 1 ครั้งต่อสัปดาห์</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    2. จอง Bonus Tutorial ตอนไหน
                                </a>
                            </h4>
                        </div>

                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>การจอง Bonus Tutorial ต้องทำการจองล่วงหน้า 1 สัปดาห์ เปิดจองทุกวันเสาร์ เวลา 13.15 น. เป็นต้นไป</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    3. ยกเลิก Bonus Tutorial ได้หรือไม่
                                </a>
                            </h4>
                        </div>

                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>ไม่สามารถยกเลิก Bonus Tutorial ได้ทุกกรณี ยกเว้นแจ้งยกเลิกกับเจ้าหน้าที่ Customer Service ด้านหน้าเคาน์เตอร์ภายในวันที่กดจองเท่านั้น</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    4. เข้า Bonus Tutorial ได้ถึงเมื่อไหร่
                                </a>
                            </h4>
                        </div>

                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                            <div class="panel-body">
                                <ul>
                                    <li>คลาสเรียนวันจันทร์-วันศุกร์ ต่ออายุเพิ่ม 30 วันทำการหลังจากจบคลาส</li>
                                    <li>คลาสเรียนวันเสาร์-อาทิตย์ ต่ออายุเพิ่ม 75 วันทำการหลังจากจบคลาส</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="panel-group" id="accordion2" role="tablist" aria-multiselecttable="true" class="m-b-20">

                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingSix">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                    5. ส่ง iSAC Writing อย่างไร
                                </a>
                            </h4>
                        </div>

                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                            <div class="panel-body">
                                <ul>
                                    <li>
                                        Online ผ่าน Website ของทางสถาบัน
                                        <a href="https://www.newcambridgethailand.com/sacwriting/logincustom" target="_blank" style="word-break: break-word;">www.newcambridgethailand.com/sacwriting/logincustom</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingSeven">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                    6. ใช้เวลาตรวจ iSAC Writing กี่วัน
                                </a>
                            </h4>
                        </div>

                        <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                            <div class="panel-body">
                                <ul>
                                    <li>ใช้เวลาตรวจประมาณ 7-10 วัน</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingEight">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                    7. iSAC Online คืออะไร
                                </a>
                            </h4>
                        </div>

                        <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                            <div class="panel-body">
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

                </div>
                <!-- End Accordion -->
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $('#accordion, #accordion2').collapse()
</script>
@stop