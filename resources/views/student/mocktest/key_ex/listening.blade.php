@extends('layouts.mocktest_layout')

@section('content')
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

		<div class="row font-16 text-custom">
			<div class="col-md-12">
				<div class="card-box border border-primary">
					<h4 class="header-title">Key Skills Extension : Listening</h4>
					<h5><span id="dplay"></span></h5>

					<form id="basic-form" action="{{ route('ans_lis') }}" method="post" class="mt-3" onsubmit="return confirm('Are you sure you want to finish?');">
						{{ csrf_field() }}
						
						<input type="hidden" name="std_id" value="{{auth('student')->user()->std_id}}">
						<input type="hidden" name="classroom_id" value="{{auth('student')->user()->coursetype}}">
						<input type="hidden" name="set_exam" value="5">
						<input type="hidden" name="q21" value="">
						<input type="hidden" name="q22" value="">
						<input type="hidden" name="q23" value="">
						<input type="hidden" name="q24" value="">

						<div>
							<h3>SECTION 1</h3>
							<section>
								<div class="col-md-12">
									<div class="card-box" id="section1">
										<b class="text-uppercase mb-3 lead">Section 1</b>

										<p><i class="fa fa-headphones mr-2"></i>Questions 1-10 <br> Complete the notes below. <br> 
											Type <b><i>NO MORE THAN TWO WORDS AND/OR A NUMBER</i></b> for each answer.
										</p>

										<div class="row justify-content-center">
											<div class="col-md-8">
												<h3 class="text-center">Costwise Car Hire</h3>
												<div class="row justify-content-center mt-3 mb-4">
													<div class="border pt-3 d-flex col-md-8 justify-content-around">
														<div class="d-flex flex-column">
															<p>Example</p>
															<p>Number of offices in Sydney:</p>
														</div>
														<div class="d-flex flex-column">
															<p>Answer</p>
															<p class="text-center w-100 border-bottom">3</p>
														</div>
													</div>
												</div>

												<div class="d-flex mt-4">
													<span>Booking reference number : <b>1</b></span>
													<input type="text" name="q1" class="ml-3">
												</div>	

												<div class="d-flex mt-4">
													<span>Office just by <b>2</b></span>
													<input type="text" name="q2" class="mx-3">
													<span>terminal.</span>
												</div>

												<div class="d-flex mt-4">
													<span>Opening hours : <b>3</b></span>
													<input type="text" name="q3[]" class="mx-3">
													<span>to</span>
													<input type="text" name="q3[]" class="mx-3">
												</div>

												<div class="d-flex mt-3">
													<span>After-hours charge : <b>4</b> $</span>
													<input type="text" name="q4" class="ml-3">
												</div>

												<div class="d-flex mt-3">
													<span>Cheapest model of car available : <b>5</b></span>
													<input type="text" name="q5" class="ml-3">
												</div>

												<div class="d-flex mt-3">
													<span>Information needed when booking : <b>6</b></span>
													<input type="text" name="q6" class="mx-3">
													<span>number</span>
												</div>

												<div class="d-flex mt-3">
													<span>Length of hire period : <b>7</b></span>
													<input type="text" name="q7" class="ml-3">
												</div>

												<div class="d-flex mt-3">
													<span>Reduce cost by driving under <b>8</b></span>
													<input type="text" name="q8" class="mx-3">
													<span>km per week.</span>
												</div>

												<div class="d-flex mt-3">
													<span>Insurance does not cover : <b>9</b></span>
													<input type="text" name="q9" class="ml-3">
												</div>

												<div class="d-flex mt-3">
													<span>After hours put keys in box near the office on the <b>10</b></span>
													<input type="text" name="q10" class="ml-3">
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<!-- end section 1 -->

							<h3>SECTION 2</h3>
							<section>
								<div class="card-box" id="section2">
									<b class="text-uppercase mb-3 lead">Section 2</b>

									<div class="row">
										<div class="col-md-6">
											<p><i class="fa fa-headphones mr-2"></i>Questions 11-15 <br> The following are essential requirements for which jobs? <br>
												Select the correct letter, <b>A, B</b> or <b>C.</b>
											</p>

											<div class="row justify-content-center">
												<div class="border p-2 d-flex flex-column col-md-8">
													<h6 class="text-center font-weight-bold">Essential requirements</h6>
													<div class="d-flex">
														<p class="mb-0"><b>A</b></p>
														<p class="ml-3 mb-0">foreign languages</p>
													</div>
													<div class="d-flex">
														<p class="mb-0"><b>B</b></p>
														<p class="ml-3 mb-0">willingness to travel abroad</p>
													</div>
													<div class="d-flex">
														<p class="mb-0"><b>C</b></p>
														<p class="ml-3 mb-0">professional qualification</p>
													</div>
												</div>
											</div>

											<div class="d-flex mt-3">
												<b>11</b>
												<p class="mb-0 mx-3">conference organiser</p>
												<select name="q11" class="custom-select w-auto">
													<option value="">Select Answer</option>	
													<option value="A">A</option>
													<option value="B">B</option>
													<option value="C">C</option>
												</select>
											</div>

											<div class="d-flex mt-3">
												<b>12</b>
												<p class="mb-0 mx-3">catering manager</p>
												<select name="q12" class="custom-select w-auto">
													<option value="">Select Answer</option>	
													<option value="A">A</option>
													<option value="B">B</option>
													<option value="C">C</option>
												</select>
											</div>

											<div class="d-flex mt-3">
												<b>13</b>
												<p class="mb-0 mx-3">housekeeper</p>
												<select name="q13" class="custom-select w-auto">
													<option value="">Select Answer</option>	
													<option value="A">A</option>
													<option value="B">B</option>
													<option value="C">C</option>
												</select>
											</div>

											<div class="d-flex mt-3">
												<b>14</b>
												<p class="mb-0 mx-3">fitness centre staff</p>
												<select name="q14" class="custom-select w-auto">
													<option value="">Select Answer</option>	
													<option value="A">A</option>
													<option value="B">B</option>
													<option value="C">C</option>
												</select>
											</div>

											<div class="d-flex mt-3">
												<b>15</b>
												<p class="mb-0 mx-3">reservations assistant</p>
												<select name="q15" class="custom-select w-auto">
													<option value="">Select Answer</option>	
													<option value="A">A</option>
													<option value="B">B</option>
													<option value="C">C</option>
												</select>
											</div>
										</div>

										<div class="col-md-6">
											<p><i class="fa fa-headphones mr-2"></i>Questions 16-20 <br>
												Select <b>FIVE</b> answers from the box and write the correct letter, <b>A-G</b>.
											</p>

											<div class="row justify-content-center mb-3">
												<div class="col-md-7 border p-2">
													<div class="d-flex">
														<span class="mr-3"><b>A</b></span>
														<span>CV</span>
													</div>
													
													<div class="d-flex">
														<span class="mr-3"><b>B</b></span>
														<span>names of referees</span>
													</div>

													<div class="d-flex">
														<span class="mr-3"><b>C</b></span>
														<span>work permit</span>
													</div>

													<div class="d-flex">
														<span class="mr-3"><b>D</b></span>
														<span>recruitment seminar</span>
													</div>

													<div class="d-flex">
														<span class="mr-3"><b>E</b></span>
														<span>evidence of qualifications</span>
													</div>

													<div class="d-flex">
														<span class="mr-3"><b>F</b></span>
														<span>conditions of employment</span>
													</div>

													<div class="d-flex">
														<span class="mr-3"><b>G</b></span>
														<span>initial interview</span>
													</div>
												</div>
											</div>

											<h5 class="text-uppercase text-center font-weight-bold">International finest group</h5>
											<h6 class="text-uppercase text-center font-weight-bold">Recruitment Procedures</h6>

											<div class="row justify-content-center mt-3">
												<div class="col-md-auto border p-2">
													<p>register interest in working for international Finest Group</p>
												</div>
												<div class="w-100"></div>
												<i class="fa fa-arrow-down fa-2x"></i>
												<div class="w-100"></div>
												<div class="col-md-auto border p-3">
													<div class="d-flex justify-content-center">
														<span>receive personal code and check <b>16</b></span>
														<select name="q16" class="custom-select w-auto ml-3">
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
												<div class="w-100"></div>
												<i class="fa fa-arrow-down fa-2x"></i>
												<div class="w-100"></div>
												<div class="col-md-auto border p-2">
													<p>download application form</p>
												</div>
												<div class="w-100"></div>
												<i class="fa fa-arrow-down fa-2x"></i>
												<div class="w-100"></div>
												<div class="col-md-auto border p-3">
													<div class="d-flex justify-content-center">
														<span>send in form and attach <b>17</b></span>
														<select name="q17" class="custom-select ml-3 w-auto">
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
												<div class="w-100"></div>
												<i class="fa fa-arrow-down fa-2x"></i>
												<div class="w-100"></div>
												<div class="col-md-auto border p-3">
													<div class="d-flex justify-content-center">
														<span>receive reply and confirm <b>18</b></span>
														<select name="q18" class="custom-select ml-3 w-auto">
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
												<div class="w-100"></div>
												<i class="fa fa-arrow-down fa-2x"></i>
												<div class="w-100"></div>
												<div class="col-md-auto border p-3">
													<div class="d-flex">
														<span>send in <b>19</b></span>
														<select name="q19" class="custom-select ml-3 w-auto">
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
												<div class="w-100"></div>
												<i class="fa fa-arrow-down fa-2x"></i>
												<div class="w-100"></div>
												<div class="col-md-auto border p-3">
													<div class="d-flex">
														<span>attend <b>20</b></span>
														<select name="q20" class="custom-select ml-3 w-auto">
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
							</section>
							<!-- end section 2 -->

							<h3>SECTION 3</h3>
							<section>
								<div class="card-box" id="section3">
									<b class="text-uppercase mb-3 lead">Section 3</b>
									
									<div class="row">
										<div class="col-md-6">
											<p><i class="fa fa-headphones mr-2"></i>Questions 21 and 22 <br>
												Select <b>TWO</b> letters, <b>A-E</b>. <br>
												Which <b>TWO</b> possible objections to a roof garden are discussed?
											</p>
											
											<div class="mt-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="check1-1" name="q21[]" value="A">
                                                    <label class="custom-control-label mt-0" for="check1-1"><b class="mx-2">A</b> problems of access</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="check1-2" name="q21[]" value="B">
                                                    <label class="custom-control-label mt-0" for="check1-2"><b class="mx-2">B</b> the cost of construction</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="check1-3" name="q21[]" value="C">
                                                    <label class="custom-control-label mt-0" for="check1-3"><b class="mx-2">C</b> the time needed to install it</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="check1-4" name="q21[]" value="D">
                                                    <label class="custom-control-label mt-0" for="check1-4"><b class="mx-2">D</b> who will look after it</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="check1-5" name="q21[]" value="E">
                                                    <label class="custom-control-label mt-0" for="check1-5"><b class="mx-2">E</b> how to support the weight of it</label>
                                                </div>
                                            </div>
										</div>
					
										<div class="col-md-6">
											<p><i class="fa fa-headphones mr-2"></i>Questions 23 and 24 <br>
												Select <b>TWO</b> letters, <b>A-E</b>. <br>
												Which <b>TWO</b> recent developments in roof-garden building are mentioned?
											</p>
											<div class="mt-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="check2-1" name="q23[]" value="A">
                                                    <label class="custom-control-label mt-0" for="check2-1"><b class="mx-2">A</b> waterproof barrier materials</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="check2-2" name="q23[]" value="B">
                                                    <label class="custom-control-label mt-0" for="check2-2"><b class="mx-2">B</b> drainage systems</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="check2-3" name="q23[]" value="C">
                                                    <label class="custom-control-label mt-0" for="check2-3"><b class="mx-2">C</b> tank designs</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="check2-4" name="q23[]" value="D">
                                                    <label class="custom-control-label mt-0" for="check2-4"><b class="mx-2">D</b> lightweight construction materials</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="check2-5" name="q23[]" value="E">
                                                    <label class="custom-control-label mt-0" for="check2-5"><b class="mx-2">E</b> watering systems</label>
                                                </div>
                                            </div>
										</div>
				
										<div class="col-md-12 border-top pt-2 mt-3">
											
											<div class="row mt-3">
												<div class="col-md-6">
													<p><i class="fa fa-headphones mr-2"></i>Questions 25-30 <br>
													Label the diagram below.<br>
													Select the correct letter, <b>A-H</b>.
													</p>
													<div class="d-flex">
														<div class="col-md-5">
															<span><b>25</b></span>
															<span class="mx-3">wall</span>
														</div>
														<select name="q25" class="custom-select w-auto">
															<option value="">Select Answer</option>
															<option value="A">A</option>
															<option value="B">B</option>
															<option value="C">C</option>
															<option value="D">D</option>
															<option value="E">E</option>
															<option value="F">F</option>
															<option value="G">G</option>
															<option value="H">H</option>
														</select>
													</div>
													<div class="d-flex mt-3">
														<div class="col-md-5">
															<span><b>26</b></span>
															<span class="mx-3">electric wire</span>
														</div>
														<select name="q26" class="custom-select w-auto">
															<option value="">Select Answer</option>
															<option value="A">A</option>
															<option value="B">B</option>
															<option value="C">C</option>
															<option value="D">D</option>
															<option value="E">E</option>
															<option value="F">F</option>
															<option value="G">G</option>
															<option value="H">H</option>
														</select>
													</div>
													<div class="d-flex mt-3">
														<div class="col-md-5">
															<span><b>27</b></span>
															<span class="mx-3">fibre optic cable</span>
														</div>
														<select name="q27" class="custom-select w-auto">
															<option value="">Select Answer</option>
															<option value="A">A</option>
															<option value="B">B</option>
															<option value="C">C</option>
															<option value="D">D</option>
															<option value="E">E</option>
															<option value="F">F</option>
															<option value="G">G</option>
															<option value="H">H</option>
														</select>
													</div>
													<div class="d-flex mt-3">
														<div class="col-md-5">
															<span><b>28</b></span>
															<span class="mx-3">wooden post</span>
														</div>
														<select name="q28" class="custom-select w-auto">
															<option value="">Select Answer</option>
															<option value="A">A</option>
															<option value="B">B</option>
															<option value="C">C</option>
															<option value="D">D</option>
															<option value="E">E</option>
															<option value="F">F</option>
															<option value="G">G</option>
															<option value="H">H</option>
														</select>
													</div>
													<div class="d-flex mt-3">
														<div class="col-md-5">
															<span><b>29</b></span>
															<span class="mx-3">glass cap</span>
														</div>
														<select name="q29" class="custom-select w-auto">
															<option value="">Select Answer</option>
															<option value="A">A</option>
															<option value="B">B</option>
															<option value="C">C</option>
															<option value="D">D</option>
															<option value="E">E</option>
															<option value="F">F</option>
															<option value="G">G</option>
															<option value="H">H</option>
														</select>
													</div>
													<div class="d-flex mt-3">
														<div class="col-md-5">
															<span><b>30</b></span>
															<span class="mx-3">acrylic rod</span>
														</div>
														<select name="q30" class="custom-select w-auto">
															<option value="">Select Answer</option>
															<option value="A">A</option>
															<option value="B">B</option>
															<option value="C">C</option>
															<option value="D">D</option>
															<option value="E">E</option>
															<option value="F">F</option>
															<option value="G">G</option>
															<option value="H">H</option>
														</select>
													</div>
												</div>

												<div class="col-md-6 align-self-center">
													<img src="{{ asset('public/assets/images/mocktest/ksx-sec3.jpg')}}" alt="25-30" width="100%">
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<!-- end section 3 -->

							<h3>SECTION 4</h3>
							<section>
								<div class="card-box" id="section4">
									<b class="text-uppercase mb-3 lead">Section 4</b>
									<p><i class="fa fa-headphones mr-2"></i>Questions 31-36 <br>
										Complete the notes below. <br>
										Type <b>NO MORE THAN TWO WORDS</b> for each answer.
									</p>

									<div class="row justify-content-center mt-3 pb-2">
										<div class="col-md-8 border p-3">
											<h5 class="text-center">The Argus system</h5>
											<div class="d-flex flex-column mt-3">
												<p>Developed by Rob Holman in N. Carolina with other researchers.</p>
												<div class="d-flex">
													<p class="mb-0">Research is vital for understanding of <b>31</b></p>
													<input type="text" name="q31" class="ml-3">
												</div>
											</div>
											<p class="mt-3">Matches information from under the water with information from a</p>
											<div class="d-flex mt-3">
												<span><b>32</b></span>
												<input type="text" name="q32" class="mx-3">
												<span>According to S. Jeffress Williams, useful because can make</span>
											</div>
											<div class="d-flex mt-3">
												<span>observations during a <b>33</b></span>
												<input type="text" name="q33" class="ml-3">
											</div>
										</div>
										<div class="w-100"></div>
										<div class="col-md-8 border p-3 mt-3">
											<h5 class="text-center">Dr Holman's sand collection</h5>
											<div class="d-flex mt-3">
												<span>Dr H. has samples from every <b>34</b></span>
												<input type="text" name="q34" class="ml-3">
											</div>
											<div class="d-flex mt-3">
												<span>Used in teaching students of <b>35</b></span>
												<input type="text" name="q35" class="ml-3">
											</div>
											<div class="ml-3 mt-3">
												<span>e.g. US East Coast display :</span>
												<div class="d-flex mt-3">
													<span>grains from south are small, light-coloured and <b>36</b></span>
													<input type="text" name="q36" class="mx-3">
													<span>in shape</span>
												</div>
											</div>
										</div>
									</div>

									<hr>

									<p><i class="fa fa-headphones mr-2"></i>Questions 37-40 <br>
									Complete the flow-chart below. <br>
									Type <b>NO MORE THAN THREE WORDS</b> for each answer. 
									</p>

									<div class="row">
										<div class="col-md-12">
											<div class="mt-3">
												<h5 class="text-center font-weight-bold">Taking samples when travelling</h5>

												<div class="d-flex mt-3 justify-content-center">
													<div class="border p-3 d-flex flex-column">
														<span>to dig sand, a plastic or metal</span>
														<div class="d-flex">
															<span><b>37</b></span>
															<input type="text" name="q37" class="mx-3">
															<span>is ideal</span>
														</div>
													</div>
													<i class="fa fa-arrow-right fa-2x mt-3"></i>
													<div class="border p-3">
														store in plastic bags
													</div>
													<i class="fa fa-arrow-right fa-2x mt-3"></i>
													<div class="border p-3 d-flex flex-column">
														<span>write date and place, using</span>
														<div class="d-flex">
															<span>a <b>38</b></span>
															<input type="text" name="q38" class="ml-3">
														</div>
													</div>
												</div>

												<h5 class="text-center font-weight-bold mt-3">After reaching home</h5>
												<div class="d-flex mt-3 justify-content-center">
													<div class="border p-2 d-flex flex-column">
														<p>log samples, noting location, <br>
														including which part of beach
														</p>

													</div>
													<i class="fa fa-arrow-right fa-2x mt-3"></i>
													<div class="border p-3">
														<p class="mb-0">dry sample on</p>
														<div class="d-flex">
															<span><b>39</b></span>
															<input type="text" name="q39" class="ml-3">
														</div>
													</div>
													<i class="fa fa-arrow-right fa-2x mt-3"></i>
													<div class="border p-3">
														<p>transfer to <br> container</p>
													</div>
													<i class="fa fa-arrow-right fa-2x mt-3"></i>
													<div class="border p-3">
														<span>add at lease one</span>
														<div class="d-flex my-2">
															<span><b>40</b></span>
															<input type="text" name="q40" class="ml-3">
														</div>
														<span>immediately</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<!-- end section 4 -->
						</div>
						<!-- end div tab -->
					</form>
					<!-- end form -->
				</div>
				<!-- end card-box -->
			</div>
			<!-- end col-md-12 -->
		</div>
		<!-- end row -->
	</div>
	<!-- end container-fluid  -->
</div>
<!-- end content -->
 <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="mySmallModalLabel">Key Skills IELTS Extension</h4>
            </div>
            <div class="modal-body text-center">
                <h5 class="text-center mb-4">Click to play Sound</h5>
                <button type="button" class="btn btn-warning" id="Play">Play Audio <i class="fa fa-play-circle"></i></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection

@section('javascript')
<script src="{{asset('public/js/mocktest/timer_ksx_listening.js')}}"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script>
	$(document).ready(function() {
		$('input[type="text"]').attr({
			'autocomplete': 'none',
			'onChange': 'javascript:this.value=this.value.toUpperCase();',
			'spellcheck': 'false'
		});

		$('.modal').modal({backdrop: 'static', keyboard: false}) 

		function LoadModal() {
			$('.modal').modal('show');
		}

		 var obj = document.createElement("audio");
		  obj.src = "{{ asset('public/sound/KSX_Listening_Mock_Test.MP3') }}";
		  obj.autoPlay = true;
		  obj.preLoad = true;

		$('#Play').on('click', function() {
			obj.play();
			$('.modal').modal('hide');
			begintimer();
		})


		$('input[name="q21[]"]').click(function (e) {
			var max = 2;
			var checked = $('input[name="q21[]"]:checked').length;

			if (checked == max) {
				$('input[name="q21[]"]').each(function(){
			        if(!$(this).is(":checked")){
			          $(this).prop("disabled", true); 
			        }
			     });
			} else {
				$('input[name="q21[]"]').each(function(){
			        $(this).prop("disabled", false); 
			    });
			}
		});

		$('input[name="q23[]"]').click(function (e) {
			var max = 2;
			var checked = $('input[name="q23[]"]:checked').length;

			if (checked == max) {
				$('input[name="q23[]"]').each(function(){
			        if(!$(this).is(":checked")){
			          $(this).prop("disabled", true); 
			        }
			     });
			} else {
				$('input[name="q23[]"]').each(function(){
			        $(this).prop("disabled", false); 
			    });
			}
		});
	});
</script>
 
@stop