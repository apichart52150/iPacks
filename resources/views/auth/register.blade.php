@extends('layouts.app')
@section('title','Online IELTS Tips & Practice | REGISTER')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 col-lg-6 col-xl-5">
			<div class="card">
				<div class="card-body p-4">
					<div class="text-center">
						<div class="text-center mb-3">
							<h3 class="font-weight-bold text-primary"> Online IELTS Tips & Practice </h3> 
							<span class="text-dark h3">REGISTER</span> 
	                    </div>
						<p class="text-muted mb-4 mt-3">Don’t have an account? Creat your own by just adding your email & creating your own password. It takes less than a minute.</p>
					</div>
					@if(session()->has('status'))
					<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show my-2"
						role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
						{{ session()->get('status') }}
					</div>
					@endif
					<form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        
						<div class="form-group mb-3">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
						</div>
						
						<div class="form-group mb-3">
                            <label for="password" class="col-md-4 control-label">Password</label>
							<input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
						</div>

						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" name="condition_checked" id="checkbox-signup"required>
								<label class="custom-control-label" for="checkbox-signup">I accept <a class="text-primary d-inline" data-toggle="modal" data-target="#full-width-modal">Terms and Conditions</a></label>
								<!-- <label class="custom-control-label" for="checkbox-signup">I accept <a href="#" class="text-dark"  data-toggle="modal" data-target="#con-close-modal">Terms and Conditions</a></label> -->
							</div>
						</div>

						<div class="form-group mb-0 text-center">
							<button class="btn btn-primary btn-block" type="submit"> Register </button>
						</div>

					</form>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-12 text-center">
					<p class="text-muted">Already have account?  <a href="{{ route('login') }}" class="text-white font-weight-medium ml-1">Log In</a></p>
				</div> <!-- end col -->
			</div>
		</div>
	</div>
</div>

<div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" data-animation="blur" aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-full modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="d-flex justify-content-start">
					<img src="{{ asset('public/assets/images/logo-nc-color.png') }}" alt="">
					<img src="{{ asset('public/assets/images/logo_ielte_practice.svg') }}" height="70" alt="">
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
			<p class="modal-title" id="full-width-modalLabel" style=" font-size: 23px;">Terms and Conditions</p>
			<p class="header-title">Please read terms and conditions for <strong>Online IELTS Tips & Practice (OTP)</strong> carefully. By clicking on the registration or payment, you have agreed.</p>

			<!-- Condition ENG version -->
			<ol class="text-muted" style="line-height: 2em;">
				<!-- 1 -->
				<li>
				Your registration will only be considered complete once all monies are paid. For international bank
				transfers, please consult your bank with regard to any charges in your country that may be applicable.
				We shall not cover the bank charges from your country.
				</li>
				<!-- 2 -->
				<li>
				Full payment must be made prior to starting the course.
				</li>
				<!-- 3 -->
				<li>
				Should a student change any of their course details, we reserve the right to charge a further 500-baht 
				administrative charge.
				</li>
				<!-- 4 -->
				<li>
				Payments are made through a secure payment system either by credit card, paypal or bank transfer. Credit card payments are organised and administered jointly by KTC Bank, Thailand. 
				</li>
				<!-- 5 -->
				<li>
				You are required to provide your contact details and email.
				</li>
				<!-- 6 -->
				<li>
				You will be provided with a Username, Password or some other information for our on-line courses. You 
				must treat such information as confidential. You must not disclose it to any third party. If you do so, then
				your account may be disabled.
				</li>
				<!-- 7 -->
				<li>
				We have the right to disable any user identification codes or passwords, whether chosen by you or
				allocated by us, at any time, if, under our reasonable consideration, you have failed to comply with any
				of the provisions of these terms and conditions. 
				</li>
				<!-- 8 -->
				<li>
				If you know or suspect that anyone other than you know your user identification code or password, you
				must promptly notify us at otp@newcambridge.com. 
				</li>
				<!-- 9 -->
				<li>
				You will be held responsible for any loss or damage resulting from the use of your password by any third
				party.s 
				</li>
				<!-- 10 -->
				<li>
				A refund cannot be made. However, if we have technical problems, we will compensate certain extra
				days to your account. 
				</li>
				<!-- 11 -->
				<li>
				Club to Upskill are available twice a month. We reserve the right to change teachers, times of Club and
				on-line platforms and to combine Club if: 
				<ul>
					<li>
					numbers for any Club are low by any reason.
					</li>
					<li>
					we have technical issues or find more suitable learning tools.
					</li>
					<li>
					the teacher is sick. 
					</li>
				</ul>
				</li>
				<!-- 12 -->
				<li>
				Once your account is activated, the provided courses cannot be requested to prematurely terminated or
				postponed. 
				</li>
				<!-- 13 -->
				<li>
				The maximum Club size is 18. There may be occasions when Club temporarily exceeds this number
				prior to students being re-allocated. 
				</li>
				<!-- 14 -->
				<li>
				The timetable and structure of the course may be changed whilst the course is running. The institute will
				keep disruption to a minimum. For the most up-to-date information on the timetable, please visit our
				website and Facebook Fan Page.  
				</li>
				<!-- 15 -->
				<li>
				We reserve the right to terminate your enrolment in the event of conduct or behaviour which, under our
				consideration, diminishes (or may diminish) the reputation of the institute, even if such conduct is not in
				breach of these terms and conditions. The institute’s decision is final. 
				</li>
				<!-- 16 -->
				<li>
				If you fail to be connected to the system within the first 15 minutes of a scheduled Club, you may not be
				permitted to join it. 
				</li>
				<!-- 17 -->
				<li>
				The intellectual properties pertaining to our course hand outs as well as other teaching materials are
				owned by us, and are not allowed to be copied or reproduced for commercial purposes. You are not
				allowed to illegally access all copied and stored versions of any published materials, and to do so may
				put you in jeopardy of the place on the course. 
				</li>
				<!-- 18 -->
				<li>
				You must: 
				<ul>
					<li>
					only speak English.
					</li>
					<li>
					keep the camera and microphone on.
					</li>
					<li>
					comply with reasonable requests made by institute staff.
					</li>
				</ul>
				</li>
				<!-- 19 -->
				<li>
				The following equipment is strongly recommended for you to maximize your learning experience: 
					<ul>
						<li>
						a minimum of 3 megabytes per second download speed broadband internet connection,
						</li>
						<li>
						a desktop computer / laptop / tablet,
						</li>
						<li>
						a headset and
						</li>
						<li>
						a 5 Megapixel web camera.
						</li>
					</ul>
				</li>
				<!-- 20 -->
				<li>
				You agree that you will not: 
				<ul>
					<li>
					use any robot, spider, scraper, deep link or other similar automated data gathering or extraction tools,
					program, algorithm or methodology to access, acquire, record, copy or monitor the lessons without our
					express written consent, which may be withheld in our sole discretion.
					</li>
					<li>
					post or transmit any file which contains viruses, worms, Trojan horses or any other contaminating or
					destructive features, or that otherwise interfere with the proper working of our on-line courses. We are not
					responsible for any documents shared during the lesson that may contain bugs or viruses. You are
					responsible for configuring your information technology and using your own virus protection software. 
					</li>
				</ul>
				</li>
				<!-- 21 -->
				<li>
				Activities undertaken by a student are strictly at the student’s own risk and we take no responsibility. 
				</li>
				<!-- 22 -->
				<li>
				We shall take all responsible steps to fulfill student expectations regarding the courses, but we 
				completely reserve the right to alter services to at least an equivalent standard at no additional cost.
				</li>
				<!-- 23 -->
				<li>
				While we take all reasonable steps to ensure the information contained in our publicity is accurate, we 
				reserve the right to alter this, substitute or withdraw any amenity without further notice.
				</li>
				<!-- 24 -->
				<li>
				We shall not be liable to provide further services should any of the following events occur: strikes, 
				industrial actions, fire, civil unrest, legal actions, withdrawal or regulatory consents, lockout or
				interruption or failure of electricity, and acts of God (including flooding, earthquakes, storms, hurricanes,
				infectious diseases or pandemics or other natural disasters that are beyond the reasonable control of the
				parties) 
				</li>
				<!-- 25 -->
				<li>
				Our teachers will be held directly liable should the tone or content of their communications with you be
				deemed offensive in any way. The institute holds no responsibility for this, although we shall be
				determined to investigate and discipline the offender if necessary, including, but not limited to,
				suspending or terminating their contract with us or reporting their conduct to the relevant government
				authorities. 
				</li>
				<!-- 26 -->
				<li>
				You understand that clubs/lessons will be audio and video recorded for monitoring, quality control and
				educational purposes. We do this in our legitimate interest. 
				</li>
				<!-- 27 -->
				<li>
				Sometimes the institute may record clubs/lessons for promotional purposes. Please advise us at the
				time of booking if you do not wish to appear in any promotional activities.
				</li>
				<!-- 28 -->
				<li>
				These terms of business represent the entire agreement reached by the parties and excluding any
				fraudulent misrepresentation. No other statements, whether verbally or in writing, will be regarded as a
				contractual term of these terms of business.
				</li>
				<!-- 29 -->
				<li>
				If you have any difficulty with any of the services or wish to contact us, please email: 
				otp@newcambridge.com 
				</li>
			</ol>

			<!-- Condition THAI version -->
			<hr>
			<p class="modal-title" id="full-width-modalLabel" style=" font-size: 23px;">ข้อตกลง Online IELTS Tips & Practice </p>
			<p class="header-title">กรุณาอ่านและทำความเข้าใจข้อตกลงว่าด้วยเรื่อง <strong>Online IELTS Tips & Practice (โอทีพี)</strong> โดยละเอียด ถ้าท่านยอมรับข้อตกลง โปรดคลิกปุ่ม ลงทะเบียน หรือ ชำระเงิน</p>
			<ol class="text-muted" style="line-height: 2em;">
				<!-- 1 -->
				<li>
				การลงทะเบียนจะถือว่าสมบูรณ์ต่อเมื่อมีการชำระเงินแล้ว สำหรับการโอนเงินระหว่างประเทศ โปรดติดต่อสาขาธนาคารในประเทศของท่าน กรณีที่มีค่าธรรมเนียม สถาบันนิวเคมบริดจ์ (หรือ สถาบัน) ไม่รับผิดชอบค่าธรรมเนียมธนาคารในประเทศของท่าน
				</li>
				<!-- 2 -->
				<li>
				ผู้เรียนต้องชำระเงินให้เรียบร้อยก่อนการเริ่มเรียนทุกครั้ง
				</li>
				<!-- 3 -->
				<li>
				ในกรณีที่ผู้เรียนเปลี่ยนแปลงรายการลงทะเบียนใดๆ ในคอร์ส ทางสถาบันจะคิดค่าดำเนินการเป็นเงินจำนวน 500 บาท
				</li>
				<!-- 4 -->
				<li>
				สถาบัน รับชำระเงินด้วยระบบบัตรเครดิต หรือ เพย์พาล หรือ การโอนเงิน อย่างใดอย่างหนึ่ง สถาบันรับชำระเงินด้วยบัตรเครดิตซึ่งร่วมกับธนาคารกสิกรไทย ประเทศไทย
				</li>
				<!-- 5 -->
				<li>
				ผู้เรียนต้องแจ้งข้อมูลการติดต่อและอีเมลแก่ทางสถาบัน
				</li>
				<!-- 6 -->
				<li>
				ทางสถาบันจะออกชื่อผู้ใช้ รหัสผ่าน หรือข้อมูลอื่นใดสำหรับคอร์สออนไลน์ของสถาบัน ห้ามเปิดเผยข้อมูลซึ่งเป็นความลับเฉพาะดังกล่าวต่อบุคคลอื่นเด็ดขาด ถ้าผู้เรียนละเมิดเงื่อนไขนี้ บัญชีออนไลน์ของท่านอาจถูกระงับ 
				</li>
				<!-- 7 -->
				<li>
				ทางสถาบันมีสิทธิ์ระงับรหัสผู้ใช้ หรือ รหัสผ่านใด ๆ ทุกเมื่อ ไม่ว่ารหัสเหล่านั้นจะถูกกำหนดโดยผู้เรียนหรือโดยสถาบัน ในกรณีที่ทางสถาบันพิจารณาแล้วว่าผู้เรียนได้ละเมิดเงื่อนไขและข้อตกลงเหล่านี้
				</li>
				<!-- 8 -->
				<li>
				ถ้าหากผู้เรียนทราบหรือสงสัยว่าบุคคลอื่นใด (นอกจากทางสถาบันและผู้เรียน) ทราบรหัสผู้ใช้ หรือ รหัสผ่านของท่าน ผู้เรียนต้องแจ้งทางสถาบันทันทีที่อีเมล otp@newcambridge.com
				</li>
				<!-- 9 -->
				<li>
				ผู้เรียนจะรับผิดชอบการสูญเสีย หรือ ความเสียหายที่เกิดจากการที่บุคคลที่สามใช้รหัสผ่านของผู้เรียน
				</li>
				<!-- 10 -->
				<li>
				ทางสถาบันขอสงวนสิทธิ์ในการคืนเงิน อย่างไรก็ตาม ถ้าหากผู้เรียนประสบปัญหาทางเทคนิคอันเกิดจากทางสถาบัน ทางสถาบันยินดีชดเชยด้วยการขยายเวลาเป็นจำนวนวันแล้วแต่กรณี ให้แก่บัญชีออนไลน์ของผู้เรียนนั้น
				</li>
				<!-- 11 -->
				<li>
				คลับทูอัพสกิล (Clup to Upskil)l เปิดบริการ 2 ครั้งต่อเดือน สถาบันขอสงวนสิทธิ์ในการเปลี่ยนแปลงอาจารย์ เวลา และช่องทางออนไลน์ และรวมคลับ ถ้า
				<ul>
					<li>
					จำนวนนักเรียนในห้องใดห้องหนึ่งน้อยกว่ากำหนดไม่ว่าด้วยเหตุผลใด ๆ
					</li>
					<li>
					ทางสถาบันประสบปัญหาทางเทคนิค หรือ พบเครื่องมือการเรียนรู้ที่เหมาะสมกว่า
					</li>
					<li>
					อาจารย์ประจำคอร์สนั้นป่วย
					</li>
				</ul>
				</li>
				<!-- 12 -->
				<li>
				ทันทีที่บัญชีออนไลน์ของท่านถูกเปิดใช้งาน คอร์สที่ท่านลงทะเบียนไว้โดยสมบูรณ์แล้วจะไม่สามารถยุติก่อนกำหนด หรือ เลื่อนเวลาเริ่มเรียนได้
				</li>
				<!-- 13 -->
				<li>
				ผู้เรียนต่อคลับมีจำนวนมากที่สุดไม่เกิน 18 ท่าน ในบางโอกาสมีอาจจำนวนผู้เรียนต่อคลับมากกว่ากำหนดเป็นการชั่วคราว ก่อนที่จะมีการจัดสรรผู้เรียนครั้งใหม่
				</li>
				<!-- 14 -->
				<li>
				ตารางเรียนและโครงสร้างคอร์สอาจเปลี่ยนแปลงได้ในขณะที่คอร์สยังดำเนินอยู่ ทางสถาบันจะพยายามป้องกันความขัดข้องให้สุดความสามารถ ถ้าผู้เรียนต้องการทราบข้อมูลข่าวสารที่เป็นปัจจุบันจากทางสถาบัน กรุณาเยี่ยมชมเว็บไซต์ และ เฟซบุ๊กแฟนเพจ ของสถาบัน
				<!-- 15 -->
				<li>
				สถาบันขอสงวนสิทธิ์ในการยุติการลงทะเบียนของผู้เรียน ในกรณีที่มีการกระทำ หรือ พฤติกรรมที่ส่อการบ่อนทำลายชื่อเสียงของสถาบัน ถึงแม้ว่าการกระทำดังกล่าวมิใช่การละเมิดข้อตกลงนี้ และคำตัดสินของทางสถาบันถือเป็นที่สิ้นสุด
				</li>
				<!-- 16 -->
				<li>
				ถ้าหากผู้เรียนไม่สามารถเข้าเรียนออนไลน์ภายในเวลา 15 นาทีตามกำหนดในครั้งใด ๆ ท่านอาจไม่ได้รับอนุญาตให้เข้าเรียนในครั้งนั้น
				</li>
				<!-- 17 -->
				<li>
				ทรัพย์สินทางปัญญาใด ๆ ที่เกี่ยวข้องกับเอกสารคำสอนของสถาบันและสื่อการสอนล้วนเป็นของสถาบันทั้งสิ้น และสถาบันไม่อนุญาตให้คัดลอก ทำสำเนา หรือ ผลิตซ้ำเพื่อวัตถุประสงค์ด้านพาณิชย์ ทางสถาบันไม่อนุญาตให้เข้าถึงข้อมูลของสื่อสิ่งพิมพ์ใด ๆ ที่เก็บไว้ในระบบของสถาบันโดยมิชอบด้วยกฎหมาย และการละเมิดข้อตกลงนี้อาจทำให้ท่านได้รับโทษในคอร์สนั้น ๆ
				</li>
				<!-- 18 -->
				<li>
				ผู้เรียนต้อง
				<ul>
					<li>
					พูดภาษาอังกฤษเท่านั้นในชั้นเรียน	
					</li>
					<li>
					เปิดกล้องและไมโครโฟน
					</li>
					<li>
					ปฏิบัติตามคำร้องขอซี่งสมเหตุสมผลของเจ้าหน้าที่สถาบัน
					</li>
				</ul>
				</li>
				<!-- 19 -->
				<li>
				ทางสถาบันแนะนำว่าผู้เรียนควรใช้อุปกรณ์ดังต่อไปนี้ เพื่อให้ได้รับประสบการณ์การเรียนรู้ที่ดีที่สุด
					<ul>
						<li>
						เครือข่ายอินเทอร์เน็ตความเร็วสูงที่มีระดับการดาวน์โหลดที่ 3 เมกะไบต์ต่อวินาที เป็นอย่างน้อย
						</li>
						<li>
						คอมพิวเตอร์ตั้งโต๊ะ (desktop) คอมพิวเตอร์แบบพกพา (laptop/ notebook) หรือ แท็บเล็ต (Tablet)
						</li>
						<li>
						ชุดหูฟัง(ที่ประกอบด้วยไมโครโฟน)
						</li>
						<li>
						กล้องความละเอียด 5 ล้านพิกเซล
						</li>
					</ul>
				</li>
				<!-- 20 -->
				<li>
				ผู้เรียนยินยอมว่าจะไม่
				<ul>
					<li>
					ใช้หุ่นยนต์ สไปเดอร์ สเกรเพอร์ ดีพลิงก์ หรือ เครื่องมือ ชุดคำสั่ง อัลกอริทึม หรือ วิธีเก็บข้อมูลอื่นใดที่คล้ายคลึงกันนี้ เพื่อเข้าถึง ได้มา บันทึก คัดลอก หรือ ควบคุมบทเรียนโดยปราศจากความยินยอมที่เป็นลายลักษณ์อักษรจากสถาบันซึ่งอาจเก็บไว้เป็นความลับที่สถาบันแต่เพียงฝ่ายเดียว
					</li>
					<li>
					โพส หรือ เผยแพร่ไฟล์ใด ๆ ที่มีไวรัส หนอนคอมพิวเตอร์ (worm) หรือ โทรจันฮอสต่าง ๆ หรือ ไฟล์ใด ๆ ที่มีลักษณะอันเป็นอันตราย หรือ ไฟล์ใด ๆ ที่ขัดขวางการทำงานตามปกติของคอร์สออนไลน์ สถาบันไม่รับผิดชอบต่อเอกสารที่ถูกแบ่งปันระหว่างการเรียนการสอนซึ่งอาจมีความผิดพลาดในการทำงานของชุดคำสั่ง (bug) หรือไวรัสต่าง ๆ โดยผู้เรียนมีหน้าที่ตรวจสอบเทคโนโลยีสารสนเทศของท่าน และใช้ส่วนชุดคำสั่ง (software) ป้องกันไวรัสของท่านเอง
					</li>
				</ul>
				</li>
				<!-- 21 -->
				<li>
				กิจกรรมใด ๆ ที่นักเรียนกระทำขึ้นถือเป็นความเสี่ยงของผู้เรียนอย่างเคร่งครัด โดยสถาบันไม่ต้องรับผิดชอบต่อการกระทำใด ๆ ทั้งสิ้น
				</li>
				<!-- 22 -->
				<li>
				ทางสถาบันจะให้บริการอย่างเต็มที่ให้บรรลุความคาดหวังของผู้เรียนว่าด้วยเรื่องคอร์ส แต่ทางสถาบันขอสงวนสิทธิ์ในการเปลี่ยนแปลงบริการใด ๆ ให้เท่าเทียมกันกับบริการที่ได้ลงทะเบียนไว้โดยไม่คิดค่าใช้จ่ายเพิ่มเติม
				</li>
				<!-- 23 -->
				<li>
				ในขณะที่ทางสถาบันยึดมั่นการตรวจสอบความถูกต้องของข้อมูลที่เผยแพร่ สถาบันขอสงวนสิทธิ์ในการเปลี่ยนแปลง ทดแทน หรือ ถอนสิ่งอำนวยความสะดวกโดยไม่ต้องแจ้งล่วงหน้า
				</li>
				<!-- 24 -->
				<li>
				สถาบันจะไม่ต้องจัดหาบริการเพิ่มเติมใด ๆ ถ้าหากเกิดเหตุดังต่อไปนี้ ได้แก่ การหยุดงานประท้วง การยุติการทำการชั่วคราว เพลิงไหม้ เหตุความไม่สงบในกรุงเทพมหานคร กิจกรรมทางกฎหมาย การถอดถอนบริการ ข้อบังคับจากหน่วยงานราชการ การปิดกั้นสถานที่ทำงาน การขัดขวางการทำงาน หรือไฟฟ้าขัดข้อง และเหตุสุดวิสัย ได้แก่ น้ำท่วม แผ่นดินไหว พายุ เช่น เฮอริเคน ฯลฯ โรคติดต่อ หรือ โรคระบาด หรือ ภัยพิบัติทางธรรมชาติอื่น ๆ ซึ่งอยู่นอกเหนือการควบคุมของทุกฝ่าย
				</li>
				<!-- 25 -->
				<li>
				อาจารย์ของสถาบันจะรับผิดชอบโดยตรงต่อน้ำเสียง หรือ เนื้อหาของการสื่อสารกับผู้เรียนที่เป็นการละเมิดสิทธิเสรีภาพของผู้เรียน สถาบันไม่ต้องรับผิดชอบต่อการกระทำ ถึงแม้ว่าทางสถาบันจะมุ่งมั่นสอบสวนและดำเนินการทางวินัยต่อผู้ละเมิดตามความจำเป็น โดยครอบคลุมการพักงาน การยุติสัญญาว่าจ้าง หรือการแจ้งความต่อหน่วยงานราชการที่เกี่ยวข้อง เป็นอาทิ
				</li>
				<!-- 26 -->
				<li>
				ผู้เรียนเข้าใจดีว่าคลับและชั้นเรียนต่าง ๆ จะถูกบันทึกภาพและเสียงเพื่อวัตถุประสงค์ด้านการควบคุมดูแล การควบคุมคุณภาพ และด้านการศึกษา ภายใต้ความตระหนักด้านกฎหมาย
				</li>
				<!-- 27 -->
				<li>
				การถ่ายภาพ บางครั้งสถาบันหรือผู้แทนของสถาบันอาจบันทึกการเรียนการสอนเพื่อการประชาสัมพันธ์ ในกรณีที่ท่านไม่ประสงค์ปรากฏในภาพกิจกรรมเพื่อการประชาสัมพันธ์ต่าง ๆ โปรดแจ้งทางสถาบันเมื่อท่านจองคอร์ส 
				</li>
				<!-- 28 -->
				<li>
				เงื่อนไขทางธุรกิจเหล่านี้แสดงถึงข้อตกลงทั้งหมดซึ่งทุกฝ่ายรับทราบดี โดยรับรองว่าปราศจากข้อความอันเป็นเท็จ หรือบิดเบือนความเป็นจริง ข้อความอื่นใดทั้งทางวาจาและทางลายลักษณ์อักษรนอกเหนือจากข้อตกลงนี้ไม่ถือเป็นเงื่อนไขตามข้อตกลงฉบับนี้
				</li>
				<!-- 29 -->
				<li>
				ถ้าหากผู้เรียนประสบปัญหาเกี่ยวกับการให้บริการของสถาบัน หรือ ประสงค์ติดต่อสถาบัน โปรดส่งอีเมลมาที่ otp@newcambridge.com
				</li>
			</ol>

			<hr>	
			<form class="form-horizontal"  method="POST">
				<div class="form-group text-center">
					<div class="custom-control custom-checkbox mb-2">
						<input type="checkbox" class="custom-control-input" id="checkbox-signup-modal" required>
						<label class="custom-control-label" for="checkbox-signup-modal">I accept <div class="text-primary d-inline">Terms and Conditions</div></label>
					</div>
				</div>
				<div class="form-group text-center">
					<button type="button" class="btn btn-secondary waves-effect" onclick="uncheck()" data-dismiss="modal">Close</button>
					<button type="submit" id="confirm" class="btn btn-primary waves-effect waves-light" onclick="check()"  data-dismiss="modal">Confirm</button>
				</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

	<script>
		
		function check() {
			document.getElementById("checkbox-signup-modal").checked = true;
			document.getElementById("checkbox-signup").checked = true;
		}

		function uncheck() {
			document.getElementById("checkbox-signup").checked = false;
			document.getElementById("checkbox-signup-modal").checked = false;
		}
	</script>
@endsection

