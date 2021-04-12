@extends('layouts.main')

@section('content')
	<div class="wrapper pt-5">
		<div class="container-fluid p-0" onload="LoadModal();">

			<!-- start page title -->
			<div class="row">
				<div class="col-12">
					<div class="page-title-box">
						<div class="page-title-right">
							<ol class="breadcrumb m-0">
								<li class="breadcrumb-item"><a href="{{url('user_home')}}">Home</a></li>
								<li class="breadcrumb-item active">Mocktest</li>
							</ol>
						</div>
						<h4 class="page-title">Mocktest</h4>
					</div>
				</div>
			</div>     
			<!-- end page title -->
		
			<div class="row">
				<div class="col-md-12">
					<div class="card-box">
						<h4 class="header-title mb-4">GATEWAY TO IELTS : Listening</h4>

						<form action="{{ route('ans_lis') }}" id="basic-form" method="POST" class="mt-3" onsubmit="return confirm('Are you sure you want to finish?')">
							{{ csrf_field() }}

							<input type="hidden" name="std_id" value="{{ session('std_id') }}">
							<input type="hidden" name="classroom_id" value="{{ session('class_id') }}">
							<input type="hidden" name="set_exam" value="7">
							
							<input type="hidden" name="q22" value="">
							<input type="hidden" name="q23" value="">
							<input type="hidden" name="q0" value="">

							<div id="progressbarwizard">

								<ul class="nav nav-pills nav-justified form-wizard-header mb-3">
									<li class="nav-item">
										<a href="#part1" data-toggle="tab" class="nav-link">
											<span class="number">1.</span>
											<span class="d-none d-sm-inline">PART 1</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#part2" data-toggle="tab" class="nav-link">
											<span class="number">2.</span>
											<span class="d-none d-sm-inline">PART 2</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#part3" data-toggle="tab" class="nav-link">
											<span class="number">3.</span>
											<span class="d-none d-sm-inline">PART 3</span>
										</a>
									</li>

									<li class="nav-item">
										<a href="#part4" data-toggle="tab" class="nav-link">
											<span class="number">5.</span>
											<span class="d-none d-sm-inline">PART 4</span>
										</a>
									</li>

								</ul>
						

								<div class="tab-content b-0 mb-0">

									<div id="bar" class="progress mb-3" style="height: 7px;">
										<div class="bar progress-bar progress-bar-striped progress-bar-animated bg-success"></div>
									</div>

									<div class="tab-pane" id="part1">
										<h3>PART 2</h3>
										<h6 class="font-weight-bold">PART 1 - Questions 1-10</h6>
										<div class="row">
											<div class="col-6">
												<p class="mb-0">Complete the form below.</p>
												<p>Type <i><b>ONE WORD AND/OR A NUMBER</b></i> for each answer.</p>

												<hr>
												
												<center>
												<b>THEATRE ROYAL PLYMOUTH
												<p>Booking Form</p></b>
												</center>

												<div class="container">
													<div class="row justify-content-center">
														<div class="col-12">
															<div class="d-flex flex-column font-weight-bold">
																<div class="bg-light border p-3">
																	<p>Example</p>
																	<div class="row">
																		<div class="col-11 pr-0">
																			<span>Performance: &nbsp The <input type="text" class="d-inline ml-2" readonly="readonly" value="Impostor" >.</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="row mt-5 ml-3">
													<div class="col-11 pl-0">
														<p>Date : &nbsp Saturday <b>1</b><input type="text" name="q1" class="d-inline ml-2">.</p>
													</div>
													<div class="w-100 mt-3"></div>
													<div class="col-11 pl-0">
														<p>Time : <b>2</b><input type="text" name="q2" class="d-inline ml-2">.</p>
													</div>
													<div class="w-100 mt-3"></div>
													<div class="col-11 pl-0">
														<p>Tickets : three adults and one child.</p>
													</div>
													<div class="w-100 mt-3"></div>
													<div class="col-11 pl-0">
														<p>Seats in : The<b>3</b><input type="text" name="q3" class="d-inline ml-2">.</p>
													</div>
													<div class="w-100 mt-3"></div>
													<div class="col-11 pl-0">
														<p>Seat row/number(s):  <b>4</b><input type="text" name="q4" class="d-inline ml-2">.</p>
													</div>
													<div class="w-100 mt-3"></div>
													<div class="col-11 pl-0">
														<p>Method of delivery:  post.</p>
													</div>
													<div class="w-100 mt-3"></div>
													<div class="col-11 pl-0">
														<p>Total payment:  ￡39.</p>
													</div>
												</div>
											</div>

											<hr>

											<div class="col-6">
												<p class="font-weight-bold">Card detail:</p>
												<div class="row mt-3 ml-3">
													<div class="col-11 pl-0">
														<p>Type : &nbsp <b>5</b><input type="text" name="q5" class="d-inline ml-2">.</p>
													</div>
													<div class="w-100 mt-3"></div>
													<div class="col-11 pl-0">
														<p>Number : &nbsp <b>6</b><input type="text" name="q6" class="d-inline ml-2">.</p>
													</div>
													<div class="w-100 mt-3"></div>
													<div class="col-11 pl-0">
														<p>Name : &nbsp Mr J. &nbsp <b>7</b><input type="text" name="q7" class="d-inline ml-2">.</p>
													</div>
												</div>

												<hr>

												<p class="font-weight-bold">Address: </p>
												<div class="row mt-3 ml-3">
													<div class="col-11 pl-0">
														<p><b>8</b><input type="text" name="q8" class="d-inline ml-2">&nbsp Street, London.</p>
													</div>
													<div class="w-100 mt-3"></div>
													<div class="col-11 pl-0">
														<p><b>9</b><input type="text" name="q9" class="d-inline ml-2">.</p>
													</div>
												</div>

												<hr>

												<p class="font-weight-bold">Additional requests: </p>
												<div class="row mt-3 ml-3">
													<div class="col-11 pl-0">
														<p>put on the mailing list.</p>
													</div>
													<div class="w-100 mt-3"></div>
													<div class="col-11 pl-0">
														<p>book &nbsp <b>10</b><input type="text" name="q10" class="d-inline ml-2">.</p>
													</div>
												</div>

											</div>
										</div>
									</div>

									<div class="tab-pane" id="part2">
										<h3>PART 2</h3>
										<h6 class="font-weight-bold">PART 2 - Questions 11-20</h6>
										<p class="mb-0">Label the plan of the rock festival site below.</p>
										<p class="mb-0">Choose <i><b>SEVEN</b></i> answers from the box and select the correct letter, <i><b>A-I</b></i>, next to questions 11-17. </p>

										<hr>

										<div class="row mt-3">
											<div class="col-6">
												<div class="container">
													<div class="bg-light border p-2">
														<div class="row p-2">
															<div class="col-4">
																<p><b>A.</b> Art exhibition</p>
																<p><b>B.</b> Band entrance</p>
																<p><b>C.</b> Car park </p>
															</div>
															<div class="col-4">
																<p><b>D.</b> Craft fair</p>
																<p><b>E.</b> Exhibitors'entrance</p>
																<p><b>F.</b> Fringe stage</p>
															</div>
															<div class="col-4">
																<p><b>G.</b> Lock-up garages<p>
																<p><b>H.</b> Main stage</p>
																<p><b>I.</b> Restaurant </p>
															</div>	
														</div>
													</div>
												</div>

												<div class="gal-detail text-center mt-1">
													<img src="{{ asset('public/assets/images/lis_15.png') }}" alt="work-thumbnail" width="80%">
												</div>
											</div>
											<div class="col-6">
												<p class="mb-0 font-weight-bold">Questions 11-17</p>
												<p class="mb-0">Select the correct letter <i><b>A-I.</b></i></p>
												<div class="container">
													<div class="row mt-3 ml-3">
														<div class="col-11 pl-0 pt-2">
															<b>11.</b>
															<select name="q11" class="custom-select w-auto">
																<option value="">Select Answer</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="C">C</option>
																<option value="D">D</option>
																<option value="E">E</option>
																<option value="F">F</option>
																<option value="G">G</option>
																<option value="H">H</option>
																<option value="I">I</option>
															</select>
														</div>
														<div class="w-100 mt-3"></div>
														<div class="col-11 pl-0 pt-2">
															<b>12.</b>
															<select name="q12" class="custom-select w-auto">
																<option value="">Select Answer</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="C">C</option>
																<option value="D">D</option>
																<option value="E">E</option>
																<option value="F">F</option>
																<option value="G">G</option>
																<option value="H">H</option>
																<option value="I">I</option>
															</select>
														</div>
														<div class="w-100 mt-3"></div>
														<div class="col-11 pl-0 pt-2">
															<b>13.</b>
															<select name="q13" class="custom-select w-auto">
																<option value="">Select Answer</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="C">C</option>
																<option value="D">D</option>
																<option value="E">E</option>
																<option value="F">F</option>
																<option value="G">G</option>
																<option value="H">H</option>
																<option value="I">I</option>
															</select>
														</div>
														<div class="w-100 mt-3"></div>
														<div class="col-11 pl-0 pt-2">
															<b>14.</b>
															<select name="q14" class="custom-select w-auto">
																<option value="">Select Answer</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="C">C</option>
																<option value="D">D</option>
																<option value="E">E</option>
																<option value="F">F</option>
																<option value="G">G</option>
																<option value="H">H</option>
																<option value="I">I</option>
															</select>
														</div>
														<div class="w-100 mt-3"></div>
														<div class="col-11 pl-0 pt-2">
															<b>15.</b>
															<select name="q15" class="custom-select w-auto">
																<option value="">Select Answer</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="C">C</option>
																<option value="D">D</option>
																<option value="E">E</option>
																<option value="F">F</option>
																<option value="G">G</option>
																<option value="H">H</option>
																<option value="I">I</option>
															</select>
														</div>
														<div class="w-100 mt-3"></div>
														<div class="col-11 pl-0 pt-2">
															<b>16.</b>
															<select name="q16" class="custom-select w-auto">
																<option value="">Select Answer</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="C">C</option>
																<option value="D">D</option>
																<option value="E">E</option>
																<option value="F">F</option>
																<option value="G">G</option>
																<option value="H">H</option>
																<option value="I">I</option>
															</select>
														</div>
														<div class="w-100 mt-3"></div>
														<div class="col-11 pl-0 pt-2">
															<b>17.</b>
															<select name="q17" class="custom-select w-auto">
																<option value="">Select Answer</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="C">C</option>
																<option value="D">D</option>
																<option value="E">E</option>
																<option value="F">F</option>
																<option value="G">G</option>
																<option value="H">H</option>
																<option value="I">I</option>
															</select>
														</div>
													</div>
												</div>
											</div>
										</div>

										<hr>

										<div class="row mt-3">
											<div class="col-12">
												<p class="mb-0 font-weight-bold">Questions 18-20</p>
												<p class="mb-0">Complete the sentences below.</p>
												<p class="mb-0">Type <i><b>NO MORE THAN TWO WORDS</b></i> for each answer.</p>
												<div class="container">
													<div class="row mt-3">
														<div class="col-11 pl-0">
															<p><b>18.</b> To show you are an official vivitor, you have to wear the<input type="text" name="q18" class="d-inline ml-2">provided.</p>
														</div>
														<div class="w-100 mt-3"></div>
														<div class="col-11 pl-0">
															<p><b>19.</b> Cars blocking paths could prevent access by<input type="text" name="q19" class="d-inline ml-2">in an emergency.</p>
														</div>
														<div class="w-100 mt-3"></div>
														<div class="col-11 pl-0">
															<p><b>20.</b> To reclaim items from storage, you must show your<input type="text" name="q20" class="d-inline ml-2">.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- end section 2 -->
									</div>

									<div class="tab-pane" id="part3">
										<h3>PART 3</h3>
										<h6 class="font-weight-bold">PART 3 - Questions 21-30</h6>
										<div class="row">
											<div class="col-md-5">
												<p class="mb-0 font-weight-bold">Questions 21-23</p>
												<p>Choose <i><b>THREE </b></i> letters, <i><b>A-G.</b></i></p>
												<div class="mt-3">
													<p><b>21-23 </b>Which <b>THREE</b> factors does Marco's tutor advise him to consider when selecting a course?</p>
													<div class="custom-control custom-checkbox mb-4">
														<input id="checkbox21-1" type="checkbox" class="custom-control-input" value="A" name="q21[]">
														<label for="checkbox21-1" class="custom-control-label" style="margin-top: 0px;">A. Possibility of specialisation</label>
													</div>
													<div class="custom-control custom-checkbox mb-4">
														<input id="checkbox21-2" type="checkbox" class="custom-control-input" value="B" name="q21[]">
														<label for="checkbox21-2" class="custom-control-label" style="margin-top: 0px;">B. Relevance to future career</label>
													</div>
													<div class="custom-control custom-checkbox mb-4">
														<input id="checkbox21-3" type="checkbox" class="custom-control-input" value="C" name="q21[]">
														<label for="checkbox21-3" class="custom-control-label" style="margin-top: 0px;">C. Personal interest</label>
													</div>
													<div class="custom-control custom-checkbox mb-4">
														<input id="checkbox21-4" type="checkbox" class="custom-control-input" value="D" name="q21[]">
														<label for="checkbox21-4" class="custom-control-label" style="margin-top: 0px;">D. Organisation of course</label>
													</div>
													<div class="custom-control custom-checkbox mb-4">
														<input id="checkbox21-5" type="checkbox" class="custom-control-input" value="E" name="q21[]">
														<label for="checkbox21-5" class="custom-control-label" style="margin-top: 0px;">E. Assessment methods</label>
													</div>
													<div class="custom-control custom-checkbox mb-4">
														<input id="checkbox21-6" type="checkbox" class="custom-control-input" value="F" name="q21[]">
														<label for="checkbox21-6" class="custom-control-label" style="margin-top: 0px;">F. Range of topics</label>
													</div>
													<div class="custom-control custom-checkbox mb-4">
														<input id="checkbox21-7" type="checkbox" class="custom-control-input" value="G" name="q21[]">
														<label for="checkbox21-7" class="custom-control-label" style="margin-top: 0px;">G. Reputation of lecturer</label>
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<p class="mb-0 font-weight-bold">Questions 24 - 27</p>
												<p>Choose the correct letter, <i><b>A</b></i>, <i><b>B</b></i> or <i><b>C</b></i>.<p>
												<div class="col-11">
													<p><b>24.</b> Why does Marco’s tutor advise him to avoid the Team Management course?</p>
													<div class="custom-control custom-radio">
														<input type="radio" id="q24-1" name="q24" class="custom-control-input" value="A"><b>A.</b>
														<label class="custom-control-label mt-0" for="q24-1">It will repeat work that Marco has already done.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" id="q24-2" name="q24" class="custom-control-input" value="B"><b>B.</b>
														<label class="custom-control-label mt-0" for="q24-2">It is intended for students at a lower level than Marco. </label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" id="q24-3" name="q24" class="custom-control-input" value="C"><b>C.</b>
														<label class="custom-control-label mt-0" for="q24-3">It may take too much time to do well.</label>
													</div>
												</div>

												<div class="col-11">
													<p><b>25.</b> Why does Marco want to do a dissertation?</p>
													<div class="custom-control custom-radio">
														<input type="radio" id="q25-1" name="q25" class="custom-control-input" value="A"><b>A.</b>
														<label class="custom-control-label mt-0" for="q25-1">He thinks it will help his future career.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" id="q25-2" name="q25" class="custom-control-input" value="B"><b>B.</b>
														<label class="custom-control-label mt-0" for="q25-2">He would like to do a detailed study.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" id="q25-3" name="q25" class="custom-control-input" value="C"><b>C.</b>
														<label class="custom-control-label mt-0" for="q25-3">He has already done some work for it.</label>
													</div>
												</div>

												<div class="col-11">
													<p><b>26.</b>What does Marco’s tutor think about the dissertation outline?</p>
													<div class="custom-control custom-radio">
														<input type="radio" id="q26-1" name="q26" class="custom-control-input" value="A"><b>A.</b>
														<label class="custom-control-label mt-0" for="q26-1">The topic is too narrow to be useful.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" id="q26-2" name="q26" class="custom-control-input" value="B"><b>B.</b>
														<label class="custom-control-label mt-0" for="q26-2">The available data may be unsuitable.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" id="q26-3" name="q26" class="custom-control-input" value="C"><b>C.</b>
														<label class="custom-control-label mt-0" for="q26-3">The research plan is too complicated.</label>
													</div>
												</div>

												<div class="col-11">
													<p><b>27.</b>What does Marco decide to do about his dissertation?</p>
													<div class="custom-control custom-radio">
														<input type="radio" id="q27-1" name="q27" class="custom-control-input" value="A"><b>A.</b>
														<label class="custom-control-label mt-0" for="q27-1">Contact potential interviewees.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" id="q27-2" name="q27" class="custom-control-input" value="B"><b>B.</b>
														<label class="custom-control-label mt-0" for="q27-2">Change to another topic.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" id="q27-3" name="q27" class="custom-control-input" value="C"><b>C.</b>
														<label class="custom-control-label mt-0" for="q27-3">Discuss it with Professor Briggs.</label>
													</div>
												</div>
											</div>
										</div>

										<hr>

										<div class="row">
											<div class="col-12">
												<p class="mb-0 font-weight-bold">Questions 28-30</p>
												<p class="mb-0">Complete the sentences below.</p>
												<p>Type <b><i>NO MORE THAN TWO WORDS</i></b> for each answer.</p>
												<div class="row mt-3 ml-3">
													<div class="col-11 pl-0">
														<p><b>28. &nbsp</b>A first draft of the dissertation should be completed by the end of<input type="text" name="q28" class="d-inline ml-2">.</p>
													</div>
													<div class="w-100 mt-3"></div>
													<div class="col-11 pl-0">
														<p><b>29. &nbsp</b>The dissertation should be registered with the <input type="text" name="q29" class="d-inline ml-2">of the department.</p>
													</div>
													<div class="w-100 mt-3"></div>
													<div class="col-11 pl-0">
														<p><b>30. &nbsp</b>Marco should get a copy of the statistics software from the<input type="text" name="q30" class="d-inline ml-2">.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end section 3 -->
									</div>

									<div class="tab-pane" id="part4">
										<h3>PART 4</h3>
											<h6 class="font-weight-bold">PART 4 - Questions 31-40</h6>
											<div class="row">
												<div class="col-12">
													<p class="mb-0 font-weight-bold">Questions 31-33</p>
													<p>Complete the notes below.</p>
													<p>Type <i><b>ONE WORD ONLY</b></i> for each answer.</p>

													<div class="container">
														<div class="row justify-content-center">
															<div class="col-11">
																<div class="d-flex flex-column">
																	<div class="bg-light border p-3">
																	<center>
																		<b>The Tiger Shark</b>
																	</center>
																		<div class="row">
																			<div class="col-11 pr-0">
																			<p><b>Origin of name:</b>&nbsp its dark bands</p>
																			<p><b>Size:</b>&nbsp 6.5 metres (maximum).</p>
																			<p><b>Preferred habitat: </b>&nbsp near to the <b>31</b><input type="text" name="q31" class="d-inline ml-2">.</p>
																			<p><b>Typical food:</b>&nbsp other sea creatures but also <b>32</b><input type="text" name="q32" class="d-inline ml-2">produced by humans.</p>
																			<p><b>Raine Island area:</b> &nbsp studies show tiger sharks are mainly found here during the <b>33</b><input type="text" name="q33" class="d-inline ml-2">(when turtles are nesting).</p>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<hr>

											<div class="row">
												<div class="col-7">
													<p class="mb-0 font-weight-bold">Questions 34-38</p>
													<p class="mb-0">Complete the flow-chart below.</p>
													<p>Type <b><i>ONE WORD ONLY</i></b> for each answer.</p>

													<div class="row">
														<div class="col-12">
															<h6 class="font-weight-bold text-center">Shark Tagging Process</h6>

															<div class="container mt-3 text-center">

																<div class="row border border-3 py-3">
																	<div class="col-12">
																		<p class="mb-0">Pieces of <b>34</b> <input type="text" name="q34" class="d-inline mx-2 auto-off">were attached to lines as bait.</p>
																	</div>
																</div>

																<i class="mdi mdi-arrow-down-bold avatar-title display-4 m-0"></i>

																<div class="row border border-3 py-3">
																	<div class="col-12">
																		<p class="mb-0">The lines were <b>35</b> <input type="text" name="q35" class="d-inline mx-2 auto-off">regularly.</p>
																	</div>
																</div>

																<i class="mdi mdi-arrow-down-bold avatar-title display-4 m-0"></i>

																<div class="row border border-3 py-3">
																	<div class="col-12">
																		<p class="mb-0">The hooked shark was brough to the <b>36</b> <input type="text" name="q36" class="d-inline mx-2 auto-off">and secured.</p>
																	</div>
																</div>

																<i class="mdi mdi-arrow-down-bold avatar-title display-4 m-0"></i>

																<div class="row border border-3 py-3">
																	<div class="col-12">
																		<p class="mb-0">The shark was measured and tagged, and tissue removed for research.</p>
																	</div>
																</div>

																<i class="mdi mdi-arrow-down-bold avatar-title display-4 m-0"></i>

																<div class="row border border-3 py-3">
																	<div class="col-12">
																		<p class="mb-0">Larger sharks: an acoustic tag was fitted or a<b>37</b> <input type="text" name="q37" class="d-inline mx-2 auto-off">was attached.</p>
																	</div>
																</div>

																<i class="mdi mdi-arrow-down-bold avatar-title display-4 m-0"></i>
																
																<div class="row border border-3 py-3">
																	<div class="col-12">
																		<p class="mb-0">The shark was<b>38</b> <input type="text" name="q38" class="d-inline mx-2 auto-off">and could be tracked.</p>
																	</div>
																</div>
															</div>
															
														</div>
													</div>
												</div>

												<div class="col-5">
													<p class="mb-0 font-weight-bold">Question 39-40</p>
													<p>Choose the correct letter, <i><b>A</b></i>, <i><b>B</b></i> or <i><b>C</b></i>.<p>
													<div class="row">
														<div class="col-1 pr-0">39.</div>
															<div class="col-11 pl-0">
															<p>The purpose of the research was to understand the tiger sharks.</p>
															<div class="custom-control custom-radio">
																<input type="radio" name="q39" id="q39-1" class="custom-control-input" value="A">
																<label for="q39-1" class="custom-control-label mt-0">A. Reproductive patterns.</label>
															</div>
															<div class="custom-control custom-radio">
																<input type="radio" name="q39" id="q39-2" class="custom-control-input" value="B">
																<label for="q39-2" class="custom-control-label mt-0">B.  Migration patterns.</label>
															</div>
															<div class="custom-control custom-radio">
																<input type="radio" name="q39" id="q39-3" class="custom-control-input" value="C">
																<label for="q39-3" class="custom-control-label mt-0">C. Feeding patterns.</label>
															</div>
														</div>

														<div class="col-1 pr-0">40.</div>
															<div class="col-11 pl-0">
															<p>Observations showed that, in general, tiger sharks.</p> 
															<div class="custom-control custom-radio">
																<input type="radio" name="q40" id="q40-1" class="custom-control-input" value="A">
																<label for="q40-1" class="custom-control-label mt-0">A. Change depths frequently.</label>
															</div>
															<div class="custom-control custom-radio">
																<input type="radio" name="q40" id="q40-2" class="custom-control-input" value="B">
																<label for="q40-2" class="custom-control-label mt-0">B.  Usually avoid the surface of the water.</label>
															</div>
															<div class="custom-control custom-radio">
																<input type="radio" name="q40" id="q40-3" class="custom-control-input" value="C">
																<label for="q40-3" class="custom-control-label mt-0">C. Often spend long periods on the ocean floor</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										<!-- end section 4 -->
									</div>

									<ul class="list-inline mb-0 wizard">
										<li class="previous list-inline-item">
											<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
										</li>
										<li class="next list-inline-item float-right">
											<a href="javascript: void(0);" class="btn btn-secondary">Next</a>
										</li>
									</ul>
								</div>
							</div>
						</form>
					<!-- end card-box -->
				</div>
				<!-- end col-md-12 -->
			</div>
			<!-- end row -->

			<div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="header-title mb-3"> Basic Wizard</h4>

                                <form>
                                    <div id="basicwizard">

                                        <ul class="nav nav-pills nav-justified form-wizard-header mb-4">
                                            <li class="nav-item">
                                                <a href="#basictab1" data-toggle="tab" class="nav-link"> 
                                                    <span class="number">1</span>
                                                    <span class="d-none d-sm-inline">Account</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#basictab2" data-toggle="tab" class="nav-link">
                                                    <span class="number">2</span>
                                                    <span class="d-none d-sm-inline">Profile</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#basictab3" data-toggle="tab" class="nav-link">
                                                    <span class="number">3</span>
                                                    <span class="d-none d-sm-inline">Finish</span>
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="tab-content b-0 mb-0">
                                            <div class="tab-pane" id="basictab1">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row mb-3">
                                                            <label class="col-md-3 col-form-label" for="userName">User name</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control" id="userName" name="userName" value="Coderthemes">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-3">
                                                            <label class="col-md-3 col-form-label" for="password"> Password</label>
                                                            <div class="col-md-9">
                                                                <input type="password" id="password" name="password" class="form-control" value="123456789">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group row mb-3">
                                                            <label class="col-md-3 col-form-label" for="confirm">Re Password</label>
                                                            <div class="col-md-9">
                                                                <input type="password" id="confirm" name="confirm" class="form-control" value="123456789">
                                                            </div>
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->
                                            </div>

                                            <div class="tab-pane" id="basictab2">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row mb-3">
                                                            <label class="col-md-3 col-form-label" for="name"> First name</label>
                                                            <div class="col-md-9">
                                                                <input type="text" id="name" name="name" class="form-control" value="Francis">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-3">
                                                            <label class="col-md-3 col-form-label" for="surname"> Last name</label>
                                                            <div class="col-md-9">
                                                                <input type="text" id="surname" name="surname" class="form-control" value="Brinkman">
                                                            </div>
                                                        </div>
                                
                                                        <div class="form-group row mb-3">
                                                            <label class="col-md-3 col-form-label" for="email">Email</label>
                                                            <div class="col-md-9">
                                                                <input type="email" id="email" name="email" class="form-control" value="cory1979@hotmail.com">
                                                            </div>
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->
                                            </div>

                                            <div class="tab-pane" id="basictab3">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="text-center">
                                                            <h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
                                                            <h3 class="mt-0">Thank you !</h3>

                                                            <p class="w-75 mb-2 mx-auto">Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam
                                                                mattis dictum aliquet.</p>

                                                            <div class="mb-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                    <label class="custom-control-label" for="customCheck1">I agree with the Terms and Conditions</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->
                                            </div>

                                            <ul class="list-inline wizard mb-0">
                                                <li class="previous list-inline-item">
                                                    <a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
                                                </li>
                                                <li class="next list-inline-item float-right">
                                                    <a href="javascript: void(0);" class="btn btn-secondary">Next</a>
                                                </li>
                                            </ul>

                                        </div> <!-- tab-content -->
                                    </div> <!-- end #basicwizard-->
                                </form>

                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="header-title mb-3"> Button Wizard</h4>

                                <div id="btnwizard">
                                    <ul class="nav nav-pills nav-justified form-wizard-header mb-4">
                                        <li class="nav-item">
                                            <a href="#tab12" data-toggle="tab" class="nav-link pt-2 pb-2">
                                                <i class="mdi mdi-account-circle mr-1"></i>
                                                <span class="d-none d-sm-inline">Account</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tab22" data-toggle="tab" class="nav-link pt-2 pb-2">
                                                <i class="mdi mdi-face-profile mr-1"></i>
                                                <span class="d-none d-sm-inline">Profile</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tab32" data-toggle="tab" class="nav-link pt-2 pb-2">
                                                <i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i>
                                                <span class="d-none d-sm-inline">Finish</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content mb-0 b-0">

                                        <div class="tab-pane fade" id="tab12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="userName2">User name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" id="userName2" name="userName2" value="Coderthemes">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="password2"> Password</label>
                                                        <div class="col-md-9">
                                                            <input type="password" id="password2" name="password2" class="form-control" value="123456789">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="confirm2">Re Password</label>
                                                        <div class="col-md-9">
                                                            <input type="password" id="confirm2" name="confirm2" class="form-control" value="123456789">
                                                        </div>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->
                                        </div>

                                        <div class="tab-pane fade" id="tab22">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="name2"> First name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="name2" name="name2" class="form-control" value="Francis">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="surname2"> Last name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="surname2" name="surname2" class="form-control" value="Brinkman">
                                                        </div>
                                                    </div>
                            
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="email2">Email</label>
                                                        <div class="col-md-9">
                                                            <input type="email" id="email2" name="email2" class="form-control" value="cory1979@hotmail.com">
                                                        </div>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->
                                        </div>

                                        <div class="tab-pane" id="tab32">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="text-center">
                                                        <h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
                                                        <h3 class="mt-0">Thank you !</h3>

                                                        <p class="w-75 mb-2 mx-auto">Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam
                                                            mattis dictum aliquet.</p>

                                                        <div class="mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                <label class="custom-control-label" for="customCheck2">I agree with the Terms and Conditions</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->
                                        </div>
                                    
                                        <div class="float-r-+ight">
                                            <input type='button' class='btn btn-secondary button-next' name='next' value='Next' />
                                            <input type='button' class='btn btn-secondary button-last' name='last' value='Last' />
                                        </div>
                                        <div class="float-left">
                                            <input type='button' class='btn btn-secondary button-first' name='first' value='First' />
                                            <input type='button' class='btn btn-secondary button-previous' name='previous' value='Previous' />
                                        </div>

                                        <div class="clearfix"></div>

                                    </div> <!-- tab-content -->
                                </div> <!-- end #btnwizard-->

                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
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
					<h4 class="modal-title" id="mySmallModalLabel">Gateway To IELTS </h4>
				</div>
				<div class="modal-body text-center">
					<h5 class="text-center mb-4">Click to play Sound</h5>
					<button type="button" class="btn btn-warning" id="Play">Play Audio <i class="fa fa-play-circle"></i></button>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('javascript')
	<script src="{{ asset('public/js/mocktest/timer_gateway_listening.js') }}"></script>
	<script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
 
	<script>

		$(document).ready(function(){
			$('input[name="q21[]"]').click(function(e){
				var min = 0;
				var Max = 3;
				var Checked = $('input[name="q21[]"]:checked').length;
				if(Checked==Max){
					$('input[name="q21[]"]').each(function(){
						if(!$(this).is(":checked")){
							$(this).prop("disabled", true); 
						}
					});
				}else{
					$('input[name="q21[]"]').each(function(){
						$(this).prop("disabled", false); 
					});
				}
			});

			$('.modal').modal({backdrop: 'static', keyboard: false}) 

			function LoadModal() {
				$('.modal').modal('show');
			}

			// var obj = document.createElement("audio");
			//  obj.src = "{{ asset('public/sound/UntitledProject.MP3') }}";
			//  obj.autoPlay = true;
			//  obj.preLoad = true;

		});

		$(function () {
			$('input[type="text"]').attr({
				'autocomplete': 'off',
				'onChange': 'this.value = this.value.toUpperCase();',
				'spellcheck': 'false'
			});

			$('.modal').modal({backdrop: 'static', keyboard: false}) 

			function LoadModal() {
				$('.modal').modal('show');
			}

			var obj = document.createElement("audio");
			obj.src = "{{ asset('public/sound/Gateway_listening_test.MP3') }}";
			obj.autoPlay = true;
			obj.preLoad = true;

			$('#Play').on('click', function() {
				obj.play();
				$('.modal').modal('hide');
				begintimer();
			})

			$('.auto-off').attr('autocomplete', 'off');

			
		});
		
	</script>
@stop