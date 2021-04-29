@extends('layouts.mocktest_layout')

@section('content')
<style>
	.height {
		height: 90px;
	}
	.lastparagraph {
		line-height: 2.5;
	}
	.lastparagraph input {
		line-height: 0;
	}
</style>
<div class="wrapper pt-5">
    <div class="container-fluid p-0" onload="LoadModal();">

		<!-- start page title -->
		<div class="row pt-4">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Listening Test</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Listening</h4>
                </div>
            </div>
        </div> 
		<div class="row">
			<div class="col-md-12">
				<div class="card-box border border-primary">
					<div class="row mb-3">
						<div class="col-md-6">
							<h4 class="header-title">Foundation for IELTS : Listening</h4>
						</div>
					</div>
					<!-- end row time and title -->
					<h5><span id="dplay"></span></h5>

					<form id="basic-form" action="{{ route('ans_lis') }}" method="post" onsubmit="return confirm('Are you sure you want to finish?');">
						{{ csrf_field() }}

						<input type="hidden" name="std_id" value="{{auth('student')->user()->std_id}}">
						<input type="hidden" name="classroom_id" value="{{auth('student')->user()->coursetype}}">
						<input type="hidden" name="set_exam" value="3">
						
						<div>
							<h3>SECTION 1</h3>
							<section>
								<div class="row">
									<div class="col-md-12 border-bottom mb-3 pb-4">
										<p class="lead mb-0">Questions 1-7</p>
										<p class="mb-0">Complete the notes below.</p>
										<p>Type <b><i>NO MORE THAN THREE WORDS AND / OR A NUMBER</i></b> for each answer.</p>

										<div class="container">
											<p class="font-16 font-weight-bold text-center">New House</p>
											<div class="row justify-content-center">
												<div class="col-md-6">
													<div class="row">
														<div class="col-md-auto pr-0">
															<i class="fa fa-chevron-circle-right"></i>
														</div>
														<div class="col-md-auto">
															rent doesn't include <b>1</b>
														</div>
														<div class="col-md-6">
															<input type="text" name="q1">
														</div>
													</div>
													<div class="row mt-3">
														<div class="col-md-auto pr-0">
															<i class="fa fa-chevron-circle-right"></i>
														</div>
														<div class="col-md-auto">
															send reference to :
														</div>
														<div class="col-md-6">
															<div class="row">
																<div class="col-md-auto">
																	Mr Crawley <b>2</b>
																</div>
																<div class="col-md-6">
																	<input type="text" name="q2">
																</div>
																<div class="w-100 mt-2"></div>	
																<div class="col-md-auto">
																	Exford <b>3</b>
																</div>
																<div class="col-md-6">
																	<input type="text" name="q3">
																</div>
															</div>
														</div>
													</div>
													<div class="row mt-3">
														<div class="col-md-auto pr-0">
															<i class="fa fa-chevron-circle-right"></i>
														</div>
														<div class="col-md-auto">
															need to buy a <b>4</b>
														</div>
														<div class="col-md-6">
															<input type="text" name="q4">
														</div>
													</div>
													<div class="row mt-3">
														<div class="col-md-auto pr-0">
															<i class="fa fa-chevron-circle-right"></i>
														</div>
														<div class="col-md-auto">
															no music in living room after <b>5</b>
														</div>
														<div class="col-md-6">
															<input type="text" name="q5">
														</div>
													</div>
													<div class="row mt-3">
														<div class="col-md-auto pr-0">
															<i class="fa fa-chevron-circle-right"></i>
														</div>
														<div class="col-md-auto">
															put bicycle in the <b>6</b>
														</div>
														<div class="col-md-6">
															<input type="text" name="q6">
														</div>
													</div>
													<div class="row mt-3">
														<div class="col-md-auto pr-0">
															<i class="fa fa-chevron-circle-right"></i>
														</div>
														<div class="col-md-auto">
															barbecue every <b>7</b>
														</div>
														<div class="col-md-6">
															<input type="text" name="q7">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-12">
										<p class="lead mb-0">Questions 8-10</p>
										<p class="mb-0">Label the map below.</p>
										<p class="mb-0">Select the correct letter <b><i>A-G.</i></b></p>

										<div class="container">
											<div class="row align-items-center">
												<div class="col-md-6 text-center align-items-center">
													<img src="{{ asset('public/assets/images/mocktest/picfi8-10.jpg') }}" alt="8-10" width="90%">
												</div>
												<div class="col-md-6">
													<div class="row">
														<div class="col-md-4">
															<b>8. bank</b>
														</div>
														<div class="col-md-5">
															<select name="q8" class="custom-select">
																<option value="">Select Answer</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="C">C</option>
																<option value="D">D</option>
																<option value="E">E</option>
																<option value="F">F</option>
																<option value="G">G</option>
															</select>
														</div>
														<div class="w-100 mt-3"></div>
														<div class="col-md-4">
															<b>9. internet café</b>
														</div>
														<div class="col-md-5">
															<select name="q9" class="custom-select">
																<option value="">Select Answer</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="C">C</option>
																<option value="D">D</option>
																<option value="E">E</option>
																<option value="F">F</option>
																<option value="G">G</option>
															</select>
														</div>
														<div class="w-100 mt-3"></div>
														<div class="col-md-4">
															<b>10. post office</b>
														</div>
														<div class="col-md-5">
															<select name="q10" class="custom-select">
																<option value="">Select Answer</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="C">C</option>
																<option value="D">D</option>
																<option value="E">E</option>
																<option value="F">F</option>
																<option value="G">G</option>
															</select>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<!-- end section 1 -->

							<h3>SECTION 2</h3>
							<section>
								<div class="row">
									<div class="col-md-12 border-bottom mb-3 pb-4">
										<p class="lead mb-0">Questions 11-16</p>
										<p>Select the correct letter <b>A, B, </b>or <b>C</b></p>

										<div class="row">
											<div class="col-md-6">
												<div class="row">
													<div class="col-md-1">
														<b>11.</b>
													</div>
													<div class="col-md-11">
														<p>The Apollo Leisure Centre  opened in</p>
														<div class="custom-control custom-radio">
	                                                    <input type="radio" id="q11-1" name="q11" class="custom-control-input" value="A">
	                                                    <label class="custom-control-label mt-0 ml-2" for="q11-1">A. 2000</label>
	                                                	</div>
		                                                <div class="custom-control custom-radio">
		                                                    <input type="radio" id="q11-2" name="q11" class="custom-control-input" value="B">
		                                                    <label class="custom-control-label mt-0 ml-2" for="q11-2">B. 2001</label>
		                                                </div>
		                                                <div class="custom-control custom-radio">
		                                                    <input type="radio" id="q11-3" name="q11" class="custom-control-input" value="C">
		                                                    <label class="custom-control-label mt-0 ml-2" for="q11-3">C. 2002</label>
		                                                </div>
													</div>
												</div>

												<div class="row mt-2">
													<div class="col-md-1">
														<b>12.</b>
													</div>
													<div class="col-md-11">
														<p>Which chart shows the different types of members currently?</p>
														<div class="custom-control custom-radio">
	                                                    <input type="radio" id="q12-1" name="q12" class="custom-control-input" value="A">
	                                                    <label class="custom-control-label mt-0 ml-2" for="q12-1"><img src="{{ asset('public/assets/images/mocktest/12a.jpg')}}" alt="" width="160"></label>
	                                                	</div>
		                                                <div class="custom-control custom-radio">
		                                                    <input type="radio" id="q12-2" name="q12" class="custom-control-input" value="B">
		                                                    <label class="custom-control-label mt-0 ml-2" for="q12-2"><img src="{{ asset('public/assets/images/mocktest/12b.jpg')}}" alt="" width="160"></label>
		                                                </div>
		                                                <div class="custom-control custom-radio">
		                                                    <input type="radio" id="q12-3" name="q12" class="custom-control-input" value="C">
		                                                    <label class="custom-control-label mt-0 ml-2" for="q12-3"><img src="{{ asset('public/assets/images/mocktest/12c.jpg')}}" alt="" width="160"></label>
		                                                </div>
													</div>
												</div>	                                                
											</div>
											<div class="col-md-6">
												<div class="row">
													<div class="col-md-1">
														<b>13.</b>
													</div>
													<div class="col-md-11">
														<p>Which facility is planned for next year?</p>
														<div class="custom-control custom-radio">
	                                                    <input type="radio" id="q13-1" name="q13" class="custom-control-input" value="A">
	                                                    <label class="custom-control-label mt-0 ml-2" for="q13-1">A. swimming pool </label>
	                                                	</div>
		                                                <div class="custom-control custom-radio">
		                                                    <input type="radio" id="q13-2" name="q13" class="custom-control-input" value="B">
		                                                    <label class="custom-control-label mt-0 ml-2" for="q13-2">B. rock climbing wall </label>
		                                                </div>
		                                                <div class="custom-control custom-radio">
		                                                    <input type="radio" id="q13-3" name="q13" class="custom-control-input" value="C">
		                                                    <label class="custom-control-label mt-0 ml-2" for="q13-3">C. massage room </label>
		                                                </div>
													</div>
												</div>

												<div class="row mt-2">
													<div class="col-md-1">
														<b>14.</b>
													</div>
													<div class="col-md-11">
														<p>Which type of membership is the best value for money ?</p>
														<div class="custom-control custom-radio">
	                                                    <input type="radio" id="q14-1" name="q14" class="custom-control-input" value="A">
	                                                    <label class="custom-control-label mt-0 ml-2" for="q14-1">A. red</label>
	                                                	</div>
		                                                <div class="custom-control custom-radio">
		                                                    <input type="radio" id="q14-2" name="q14" class="custom-control-input" value="B">
		                                                    <label class="custom-control-label mt-0 ml-2" for="q14-2">B. green</label>
		                                                </div>
		                                                <div class="custom-control custom-radio">
		                                                    <input type="radio" id="q14-3" name="q14" class="custom-control-input" value="C">
		                                                    <label class="custom-control-label mt-0 ml-2" for="q14-3">C. blue</label>
		                                                </div>
													</div>
												</div>

												<div class="row mt-2">
													<div class="col-md-1">
														<b>15.</b>
													</div>
													<div class="col-md-11">
														<p>When does the café close?</p>
														<div class="custom-control custom-radio">
	                                                    <input type="radio" id="q15-1" name="q15" class="custom-control-input" value="A">
	                                                    <label class="custom-control-label mt-0 ml-2" for="q15-1">A. 8.00</label>
	                                                	</div>
		                                                <div class="custom-control custom-radio">
		                                                    <input type="radio" id="q15-2" name="q15" class="custom-control-input" value="B">
		                                                    <label class="custom-control-label mt-0 ml-2" for="q15-2">B. 8.30</label>
		                                                </div>
		                                                <div class="custom-control custom-radio">
		                                                    <input type="radio" id="q15-3" name="q15" class="custom-control-input" value="C">
		                                                    <label class="custom-control-label mt-0 ml-2" for="q15-3">C. 9.00</label>
		                                                </div>
													</div>
												</div>

												<div class="row mt-2">
													<div class="col-md-1">
														<b>16.</b>
													</div>
													<div class="col-md-11">
														<p>How long is a typical consultation with the personal trainer?</p>
														<div class="custom-control custom-radio">
	                                                    <input type="radio" id="q16-1" name="q16" class="custom-control-input" value="A">
	                                                    <label class="custom-control-label mt-0 ml-2" for="q16-1">A. 45 minutes </label>
	                                                	</div>
		                                                <div class="custom-control custom-radio">
		                                                    <input type="radio" id="q16-2" name="q16" class="custom-control-input" value="B">
		                                                    <label class="custom-control-label mt-0 ml-2" for="q16-2">B. 1 hour</label>
		                                                </div>
		                                                <div class="custom-control custom-radio">
		                                                    <input type="radio" id="q16-3" name="q16" class="custom-control-input" value="C">
		                                                    <label class="custom-control-label mt-0 ml-2" for="q16-3">C. 1 hour 15 minutes</label>
		                                                </div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-12">
										<p class="lead mb-0">Questions 17-20</p>
										<p>Complete the timetable below.</p>

										<div class="row justify-content-center">
											<div class="col-md-2 font-weight-bold">
												<div class="p-2 bg-dark text-white">
													Monday
												</div>
												<div class="p-2 bg-light">
													<p>4.00 - 5.00</p>
													<p>5.00 - 6.00</p>
													<p>6.15 - 7.30</p>
													<p>7.45 - 9.15</p>
												</div>
											</div>
											<div class="col-md-5 font-weight-bold">
												<div class="p-2 bg-dark text-white">
													Class title
												</div>
												<div class="p-2 bg-light">
													<div class="row justify-content-center">
														<div class="col-md-1">
															<p>17.</p>
														</div>
														<div class="col-md-10">
															<input type="text" name="q17" class="bg-light w-100">
														</div>
														<div class="w-100"></div>
														<div class="col-md-1">
															<p>18.</p>
														</div>
														<div class="col-md-10">
															<input type="text" name="q18" class="bg-light w-100">
														</div>
														<div class="w-100"></div>
														<div class="col-md-1">
															<p>19.</p>
														</div>
														<div class="col-md-10">
															<input type="text" name="q19" class="bg-light w-100">
														</div>
														<div class="w-100"></div>
														<div class="col-md-1">
															<p>20.</p>
														</div>
														<div class="col-md-10">
															<input type="text" name="q20" class="bg-light w-100">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<!-- end section 2 -->

							<h3>SECTION 3</h3>
							<section>
								<div class="row pb-3">
									<div class="col-md-6">
										<p class="lead mb-0">Questions 21-23</p>
										<p class="mb-0">Complete the sentences below.</p>
										<p>Type <b><i>NO MORE THAN TWO WORDS</i></b> for each answer.</p>

										<div class="row">
											<div class="col-md-1">
												<b>21.</b>
											</div>
											<div class="col-md-11">
												<p class="mb-1">Interviewing people was sometimes difficult because of the</p>
												<p class="d-inline mr-2">Answer : </p>
												<input type="text" name="q21" class="d-inline" autofocus>
											</div>
											<div class="w-100 my-2"></div>
											<div class="col-md-1">
												<b>22.</b>
											</div>
											<div class="col-md-11">
												<p class="mb-1">Aldo needs to talk to more </p>
												<p class="d-inline mr-2">Answer : </p>
												<input type="text" name="q22" class="d-inline">
											</div>
											<div class="w-100 my-2"></div>
											<div class="col-md-1">
												<b>23.</b>
											</div>
											<div class="col-md-11">
												<p class="mb-1">Dr. Hurst advises Aldo to go to a</p>
												<p class="d-inline mr-2">Answer : </p>
												<input type="text" name="q23" class="d-inline">
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<p class="lead mb-0">Questions 24 and 25</p>
										<p class="mb-0">Select <b>TWO</b> letters <b>A-F</b></p>
										<p>Which <b>TWO</b> things do local people like in the area?</p>

										<div class="row justify-content-center h-75">
											<div class="col-md-6 align-self-center">
												<div class="row border p-2 justify-content-center">
													<div class="col-md-1">
														<b>A</b>
													</div>
													<div class="col-md-9">
														<b>cleaning services</b>
													</div>
													<div class="w-100"></div>
													<div class="col-md-1">
														<b>B</b>
													</div>
													<div class="col-md-9">
														<b>colleges</b>
													</div>
													<div class="w-100"></div>
													<div class="col-md-1">
														<b>C</b>
													</div>
													<div class="col-md-9">
														<b>parks</b>
													</div>
													<div class="w-100"></div>
													<div class="col-md-1">
														<b>D</b>
													</div>
													<div class="col-md-9">
														<b>primary schools</b>
													</div>
													<div class="w-100"></div>
													<div class="col-md-1">
														<b>E</b>
													</div>
													<div class="col-md-9">
														<b>sports facilities</b>
													</div>
													<div class="w-100"></div>
													<div class="col-md-1">
														<b>F</b>
													</div>
													<div class="col-md-9">
														<b>street lighting</b>
													</div>
												</div>
											</div>

											<div class="col-md-6 align-self-center">
												<div class="row justify-content-center">
													<div class="col-md-1 font-weight-bold align-self-center mr-2">
														24
													</div>
													<div class="col-md-9">
														<select name="q24" class="custom-select w-auto">
															<option value="">Select Answer</option>
															<option value="A">A</option>
															<option value="B">B</option>
															<option value="C">C</option>
															<option value="D">D</option>
															<option value="E">E</option>
															<option value="F">F</option>
														</select>
													</div>
													<div class="w-100 my-2"></div>
													<div class="col-md-1 font-weight-bold align-self-center mr-2">
														25
													</div>
													<div class="col-md-9">
														<select name="q25" class="custom-select w-auto">
															<option value="">Select Answer</option>
															<option value="A">A</option>
															<option value="B">B</option>
															<option value="C">C</option>
															<option value="D">D</option>
															<option value="E">E</option>
															<option value="F">F</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-12">
										<p class="lead mb-0">Questions 26-30</p>
										<p class="mb-0">Complete the table below.</p>
										<p>Type <b><i>NO MORE THAN THREE WORDS</i></b> for each answer.</p>

										<p class="font-weight-bold font-18 text-center">Local festival</p>
										

										<div class="container">
											<div class="row font-weight-bold">
												<div class="col-md-4">
													<div class="bg-dark text-white p-2">
														Event
													</div>
													<div class="bg-light p-3 height">
														Dance show
													</div>
												</div>
												<div class="col-md-4">
													<div class="bg-dark text-white p-2">
														Location
													</div>
													<div class="bg-light p-3 height">
														<span>26</span>
														<input type="text" name="q26" class="bg-light d-inline py-0 w-75">
													</div>
												</div>
												<div class="col-md-4">
													<div class="bg-dark text-white p-2">
														Opportunity
													</div>
													<div class="bg-light p-3 height">
														<span class="d-block">to observe different</span>
														<span class="d-inline">27</span>
														<input type="text" name="q27" class="bg-light d-inline py-0 w-75">
													</div>
												</div>

												<div class="col-md-4 mt-2">
													<div class="bg-light p-3 height">
														<span>28</span>
														<input type="text" name="q28" class="bg-light d-inline py-0 w-75">
													</div>
												</div>
												<div class="col-md-4 mt-2">
													<div class="bg-light p-3 height">
														<span>29</span>
														<input type="text" name="q29" class="bg-light d-inline py-0 w-75">
													</div>
												</div>
												<div class="col-md-4 mt-2">
													<div class="bg-light p-3 height">
														to learn about different cultures
													</div>
												</div>

												<div class="col-md-4 mt-2">
													<div class="bg-light p-3 height">
														Courses fair
													</div>
												</div>
												<div class="col-md-4 mt-2">
													<div class="bg-light height p-3">
														Langtree Theatre
													</div>
												</div>
												<div class="col-md-4 mt-2">
													<div class="bg-light height p-3">
														<span class="d-block">to interview the</span>
														<span class="d-inline">30</span>
														<input type="text" name="q30" class="bg-light d-inline py-0 w-75">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<!-- end section 3 -->

							<h3>SECTION 4</h3>
							<section>
								<div class="row">
									<div class="col-md-12">
										<p class="lead mb-0">Questions 31-34</p>
										<p>Select the correct letter <b>A, B, </b>or <b>C</b></p>

										<div class="row">
											<div class="col-md-6">
												<div class="row">
													<div class="col-md-auto">
														<b>31.</b>
													</div>
													<div class="col-md-11">
														<p>The speaker agrees that cars are helpful for </p>
														<div class="custom-control custom-radio">
			                                                <input type="radio" id="q31-1" name="q31" class="custom-control-input" value="A">
			                                                <label class="custom-control-label mt-0 ml-2" for="q31-1">A. going to remote places</label>
		                                            	</div>
		                                            	<div class="custom-control custom-radio">
			                                                <input type="radio" id="q31-2" name="q31" class="custom-control-input" value="B">
			                                                <label class="custom-control-label mt-0 ml-2" for="q31-2">B. carrying large items</label>
		                                            	</div>
		                                            	<div class="custom-control custom-radio">
			                                                <input type="radio" id="q31-3" name="q31" class="custom-control-input" value="C">
			                                                <label class="custom-control-label mt-0 ml-2" for="q31-3">C. families travelling together</label>
		                                            	</div>
													</div>	
												</div>

												<div class="row mt-2">
													<div class="col-md-auto">
														<b>32.</b>
													</div>
													<div class="col-md-11">
														<p>According to the speaker, what advantage does road freight have over rail freight?</p>
														<div class="custom-control custom-radio">
			                                                <input type="radio" id="q32-1" name="q32" class="custom-control-input" value="A">
			                                                <label class="custom-control-label mt-0 ml-2" for="q32-1">A. It is more flexible.</label>
		                                            	</div>
		                                            	<div class="custom-control custom-radio">
			                                                <input type="radio" id="q32-2" name="q32" class="custom-control-input" value="B">
			                                                <label class="custom-control-label mt-0 ml-2" for="q32-2">B. It is cheaper.</label>
		                                            	</div>
		                                            	<div class="custom-control custom-radio">
			                                                <input type="radio" id="q32-3" name="q32" class="custom-control-input" value="C">
			                                                <label class="custom-control-label mt-0 ml-2" for="q32-3">C. It is more reliable.</label>
		                                            	</div>
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="row mt-2">
													<div class="col-md-auto">
														<b>33.</b>
													</div>
													<div class="col-md-11">
														<p>Vehicle density is highest in </p>
														<div class="custom-control custom-radio">
			                                                <input type="radio" id="q33-1" name="q33" class="custom-control-input" value="A">
			                                                <label class="custom-control-label mt-0 ml-2" for="q33-1">A. Germany</label>
		                                            	</div>
		                                            	<div class="custom-control custom-radio">
			                                                <input type="radio" id="q33-2" name="q33" class="custom-control-input" value="B">
			                                                <label class="custom-control-label mt-0 ml-2" for="q33-2">B. the Netherlands</label>
		                                            	</div>
		                                            	<div class="custom-control custom-radio">
			                                                <input type="radio" id="q33-3" name="q33" class="custom-control-input" value="C">
			                                                <label class="custom-control-label mt-0 ml-2" for="q33-3">C. the UK</label>
		                                            	</div>
													</div>
												</div>

												<div class="row mt-2">
													<div class="col-md-auto">
														<b>34.</b>
													</div>
													<div class="col-md-11">
														<p> A recent survey of bus passengers showed that the most common complaints concerned</p>
														<div class="custom-control custom-radio">
			                                                <input type="radio" id="q34-1" name="q34" class="custom-control-input" value="A">
			                                                <label class="custom-control-label mt-0 ml-2" for="q34-1">A. security</label>
		                                            	</div>
		                                            	<div class="custom-control custom-radio">
			                                                <input type="radio" id="q34-2" name="q34" class="custom-control-input" value="B">
			                                                <label class="custom-control-label mt-0 ml-2" for="q34-2">B. prices</label>
		                                            	</div>
		                                            	<div class="custom-control custom-radio">
			                                                <input type="radio" id="q34-3" name="q34" class="custom-control-input" value="C">
			                                                <label class="custom-control-label mt-0 ml-2" for="q34-3">C. timetabling</label>
		                                            	</div>
													</div>
												</div>
											</div>
										</div>
									</div>		
								</div>
								<hr>
								<div class="row">
									<div class="col-md-12">
										<p class="lead mb-0">Questions 35-40</p>
										<p class="mb-0">Complete the summary below.</p>
										<p>Type <b><i>NO MORE THAN TWO WORDS</i></b> for each answer.</p>

										<p class="font-weight-bold text-center font-18">Developments in public transport</p>

										<div class="container">
											<div class="row justify-content-center">
												<div class="col-md-12 align-content-center">
													<p class="lastparagraph">
														Several steps are making public transport more attractive for users. These include
														introducing <b>35</b> <input type="text" name="q35" class="d-inline py-0"> , which reduce the need for queueing. Schedules are being controlled with <b>36</b> <input type="text" name="q36" class="d-inline py-0"> to increase efficiency. Also, buses are being made more <b>37</b> <input type="text" name="q37" class="d-inline py-0"> , and passengers are being given more <b>38</b> <input type="text" name="q38" class="d-inline py-0 mt-2 mt-sm-2 mt-xl-0">. Measures are being 
														taken to create move flexibility for <b>39</b> <input type="text" name="q39" class="d-inline py-0">
														travel. Transit companies have also benefited from different attitudes to <b>40</b> <input type="text" name="q40" class="d-inline py-0">. Together, these steps should increase public transport use.
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<!-- end section 4 -->
						</div>
					</form>
					<!-- end form -->
				</div>
				<!-- end card-box -->
			</div>
			<!-- end col-md-12 -->
		</div>
		<!-- end row -->
	</div>
	<!-- end container-fluid -->
</div>
<!-- end content -->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="mySmallModalLabel">Foundation for IELTS</h4>
            </div>
            <div class="modal-body text-center">
                <h5 class="text-center mb-4">Click to play Sound</h5>
                <button type="button" class="btn btn-warning" id="Play">Play Audio <i class="fa fa-play-circle"></i></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<audio id="audio_fi" preload="auto">
	<source src="{{ asset('public/sound/FI_Listening_Mock_Test.MP3') }}" type="audio/ogg">
  	<source src="{{ asset('public/sound/FI_Listening_Mock_Test.MP3') }}" type="audio/mpeg">
</audio>
@endsection

@section('javascript')
<script src="{{ asset('public/js/mocktest/timer_fi_listening.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
	$(function () {
		$('input').attr({
			'autocomplete': 'none',
			'onChange' : 'javascript: this.value = this.value.toUpperCase();',
			'spellcheck': 'false'
		});

		$('.modal').modal({backdrop: 'static', keyboard: false}) 

		function LoadModal() {
			$('.modal').modal('show');
		}

		var audio_fi = document.getElementById('audio_fi');

		$('#Play').on('click', function() {
			audio_fi.play();
			$('.modal').modal('hide');
			begintimer();
		})
	});
</script>
<script src="{{ asset('public/js/mocktest/checkaudio.js') }}"></script>
@stop