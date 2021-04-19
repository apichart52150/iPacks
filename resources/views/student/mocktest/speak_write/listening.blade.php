@extends('layouts.mocktest_layout')

@section('content')
<style>
	.mid {
		margin-left: 40%;
	}
	.border-3 {
		border-width: 3px !important;
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
                            <li class="breadcrumb-item active">{{Session('name_type')}}</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Listening</h4>
                </div>
            </div>
        </div> 

		<div class="row">
			<div class="col-md-12">
				<div class="card-box">
					<h4 class="header-title">Speak Write : Listening</h4>
					<h5><span id="dplay"></span></h5>
 
					<form action="{{ route('ans_lis') }}" id="basic-form" method="POST" class="mt-3" onsubmit="return confirm('Are you sure you want to finish?')">
						{{ csrf_field() }}

						<input type="hidden" name="std_id" value="{{ session('std_id') }}">
						<input type="hidden" name="classroom_id" value="{{ session('class_id') }}">
						<input type="hidden" name="set_exam" value="6">
						
						<input type="hidden" name="q1" value="">
						<input type="hidden" name="q2" value="">
						<input type="hidden" name="q3" value="">
						<input type="hidden" name="q4" value="">
						<input type="hidden" name="q5" value="">
						<input type="hidden" name="q11" value="">
						<input type="hidden" name="q12" value="">
						<input type="hidden" name="q13" value="">
						<input type="hidden" name="q14" value="">

						<div>
							<h3>SECTION 1</h3>
							<section>
								<h6 class="font-weight-bold">SECTION 1 - Questions 1-10</h6>
								<div class="row">
									<div class="col-6">
										<p class="mb-0">Questions 1-5</p>
										<p>Select the appropriate letters A-D.</p>

										<div class="container">
											<div class="row justify-content-center">
												<div class="col-6">
													<div class="d-flex flex-column font-weight-bold">
													<div class="bg-light border p-3">
													<p>Example</p>
													<p class="mb-0">Hannah's Dad</p>
													<div class="custom-radio custom-control">
														<input type="radio" class="custom-control-input" disabled="">
														<label class="custom-control-label mt-0 font-weight-bold">A. can hear her very well.</label>
													</div>
													<div class="custom-radio custom-control">
														<input type="radio" class="custom-control-input" checked="" disabled>
														<label class="custom-control-label mt-0 font-weight-bold">B. cannot hear her very well.</label>
													</div>
													<div class="custom-radio custom-control">
														<input type="radio" class="custom-control-input" disabled>
														<label class="custom-control-label mt-0 font-weight-bold">C. wants her to move.</label>
													</div>
													<div class="custom-radio custom-control">
														<input type="radio" class="custom-control-input" disabled>
														<label class="custom-control-label mt-0 font-weight-bold">D. says the line is clear.</label>
													</div>
													</div>
												</div>
												</div>
											</div>
										</div>

										<div class="row mt-3">
											<div class="col-1 pr-0">1.</div>
											<div class="col-11 pl-0">
												<p>How long did Hannah think it would take her to find a place to live?</p>
												<div class="custom-radio custom-control">
													<input type="radio" name="q1" id="q1-1" class="custom-control-input" value="A">
													<label for="q1-1" class="custom-control-label mt-0">A. three weeks</label>
												</div>
												<div class="custom-radio custom-control">
													<input type="radio" name="q1" id="q1-2" class="custom-control-input" value="B">
													<label for="q1-2" class="custom-control-label mt-0">B. less than three weeks</label>
												</div>
												<div class="custom-radio custom-control">
													<input type="radio" name="q1" id="q1-3" class="custom-control-input" value="C">
													<label for="q1-3" class="custom-control-label mt-0">C. more than three weeks</label>
												</div>
												<div class="custom-radio custom-control">
													<input type="radio" name="q1" id="q1-4" class="custom-control-input" value="D">
													<label for="q1-4" class="custom-control-label mt-0">D. more than four weeks</label>
												</div>
											</div>

											<div class="w-100 mt-2"></div>
											<div class="col-1 pr-0">2.</div>
											<div class="col-11 pl-0">
												<p>There is not enough accommodation to rent because</p>
												<div class="custom-radio custom-control">
													<input type="radio" name="q2" id="q2-1" class="custom-control-input" value="A">
													<label for="q2-1" class="custom-control-label mt-0">A. it is the end of the academic year.</label>
												</div>
												<div class="custom-radio custom-control">
													<input type="radio" name="q2" id="q2-2" class="custom-control-input" value="B">
													<label for="q2-2" class="custom-control-label mt-0">B. Hannah is a new student.</label>
												</div>
												<div class="custom-radio custom-control">
													<input type="radio" name="q2" id="q2-3" class="custom-control-input" value="C">
													<label for="q2-3" class="custom-control-label mt-0">C. the area has lots of new technology companies.</label>
												</div>
												<div class="custom-radio custom-control">
													<input type="radio" name="q2" id="q2-4" class="custom-control-input" value="D">
													<label for="q2-4" class="custom-control-label mt-0">D. the town is small.</label>
												</div>
											</div>

											<div class="w-100 mt-2"></div>
											<div class="col-1 pr-0">3.</div>
											<div class="col-11 pl-0">
												<p>£400 a month for rent is</p>
												<div class="custom-radio custom-control">
													<input type="radio" name="q3" id="q3-1" class="custom-control-input" value="A">
													<label for="q3-1" class="custom-control-label mt-0">A. higher than Hannah has paid before. </label>
												</div>
												<div class="custom-radio custom-control">
													<input type="radio" name="q3" id="q3-2" class="custom-control-input" value="B">
													<label for="q3-2" class="custom-control-label mt-0">B. lower than Hannah has paid before.</label>
												</div>
												<div class="custom-radio custom-control">
													<input type="radio" name="q3" id="q3-3" class="custom-control-input" value="C">
													<label for="q3-3" class="custom-control-label mt-0">C. not cheap for the area.</label>
												</div>
												<div class="custom-radio custom-control">
													<input type="radio" name="q3" id="q3-4" class="custom-control-input" value="D">
													<label for="q3-4" class="custom-control-label mt-0">D. cheap for the area.</label>
												</div>
											</div>

											<div class="w-100 mt-2"></div>
											<div class="col-1 pr-0">4.</div>
											<div class="col-11 pl-0">
												<p>At the moment Hannah is living </p>
												<div class="custom-radio custom-control">
													<input type="radio" name="q4" id="q4-1" class="custom-control-input" value="A">
													<label for="q4-1" class="custom-control-label mt-0">A. in a hostel.</label>
												</div>
												<div class="custom-radio custom-control">
													<input type="radio" name="q4" id="q4-2" class="custom-control-input" value="B">
													<label for="q4-2" class="custom-control-label mt-0">B. in a suitcase.</label>
												</div>
												<div class="custom-radio custom-control">
													<input type="radio" name="q4" id="q4-3" class="custom-control-input" value="C">
													<label for="q4-3" class="custom-control-label mt-0">C. in a hotel.</label>
												</div>
												<div class="custom-radio custom-control">
													<input type="radio" name="q4" id="q4-4" class="custom-control-input" value="D">
													<label for="q4-4" class="custom-control-label mt-0">D. in a flat.</label>
												</div>
											</div>

											<div class="w-100 mt-2"></div>
											<div class="col-1 pr-0">5.</div>
											<div class="col-11 pl-0">
												<p>Hannah's new flat</p>
												<div class="custom-radio custom-control">
													<input type="radio" name="q5" id="q5-1" class="custom-control-input" value="A">
													<label for="q5-1" class="custom-control-label mt-0">A. is a bit noisy.</label>
												</div>
												<div class="custom-radio custom-control">
													<input type="radio" name="q5" id="q5-2" class="custom-control-input" value="B">
													<label for="q5-2" class="custom-control-label mt-0">B. is on the second floor.</label>
												</div>
												<div class="custom-radio custom-control">
													<input type="radio" name="q5" id="q5-3" class="custom-control-input" value="C">
													<label for="q5-3" class="custom-control-label mt-0">C. has two bedrooms.</label>
												</div>
												<div class="custom-radio custom-control">
													<input type="radio" name="q5" id="q5-4" class="custom-control-input" value="D">
													<label for="q5-4" class="custom-control-label mt-0">D. has a large roof terrace.</label>
												</div>
											</div>
										</div>
									</div>

									<div class="col-6">
										<p class="mb-0">Questions 6-7</p>
										<p>Complete Dad's note.</p>

										<div class="container mb-4">
											<div class="row justify-content-center">
												<div class="col-auto">
													<h5 class="font-weight-bold">Hannah's address :</h5>

													<div class="d-flex flex-column mt-3">
														<div class="d-flex">
															<span>6</span>
															<input type="text" name="q6" class="mx-2">
															<span>Whitehart Road</span>
														</div>
														<div class="d-flex mt-4">
															<span>7</span>
															<input type="text" name="q7" class="mx-2">
															<span>9RJ</span>
														</div>
													</div>
												</div>
											</div>
										</div>

										<hr>

										<p class="mb-0">Questions 8-10</p>
										<p>Use <b><i>NO MORE THAN THREE WORDS</i></b> to complete each space.</p>

										<div class="row">
											<div class="col-1 pr-0">8.</div>
											<div class="col-11 pl-0">
												<p>Hannah plans to travel to her parents' house on Friday</p>
												<span>Answer : <input type="text" name="q8" class="d-inline ml-2"></span>
											</div>
											
											<div class="w-100 mt-3"></div>

											<div class="col-1 pr-0">9.</div>
											<div class="col-11 pl-0">
												<p>Hannah's Dad will return the van on</p>
												<span>Answer : <input type="text" name="q9" class="d-inline ml-2"></span>
											</div>
											
											<div class="w-100 mt-3"></div>

											<div class="col-1 pr-0">10.</div>
											<div class="col-11 pl-0">
												<p>The journey time is about</p>
												<span>Answer : <input type="text" name="q10" class="d-inline ml-2"></span>
											</div>
										</div>
									</div>
								</div>
							</section>
							<!-- end section 1 -->

							<h3>SECTION 2</h3>
							<section>
								<h6 class="font-weight-bold">SECTION 2 - Questions 11-20</h6>
								<div class="row">
									<div class="col-12">
										<p class="mb-0">Questions 11-14</p>
										<p class="mb-0">Select <b>FOUR</b> letters <b>A-H.</b></p>
										<p class="mb-0">Which <b>FOUR</b> planned developments are mentioned?</p>

										<div class="row">
											<div class="col-auto">
												<div class="mt-3">
	                                                <div class="custom-control custom-checkbox">
	                                                    <input type="checkbox" class="custom-control-input" id="q11-1" name="q11[]" value="A">
	                                                    <label class="custom-control-label mt-0" for="q11-1"><span class="mr-2">A.</span> a village town hall</label>
	                                                </div>
	                                                <div class="custom-control custom-checkbox">
	                                                    <input type="checkbox" class="custom-control-input" id="q11-2" name="q11[]" value="B">
	                                                    <label class="custom-control-label mt-0" for="q11-2"><span class="mr-2">B.</span> a leisure centre</label>
	                                                </div>
	                                                <div class="custom-control custom-checkbox">
	                                                    <input type="checkbox" class="custom-control-input" id="q11-3" name="q11[]" value="C">
	                                                    <label class="custom-control-label mt-0" for="q11-3"><span class="mr-2">C.</span> a play area for children</label>
	                                                </div>
	                                                <div class="custom-control custom-checkbox">
	                                                    <input type="checkbox" class="custom-control-input" id="q11-4" name="q11[]" value="D">
	                                                    <label class="custom-control-label mt-0" for="q11-4"><span class="mr-2">D.</span> a hospital</label>
	                                                </div>
	                                                <div class="custom-control custom-checkbox">
	                                                    <input type="checkbox" class="custom-control-input" id="q11-5" name="q11[]" value="E">
	                                                    <label class="custom-control-label mt-0" for="q11-5"><span class="mr-2">E.</span> an industrial development</label>
	                                                </div>
	                                                <div class="custom-control custom-checkbox">
	                                                    <input type="checkbox" class="custom-control-input" id="q11-6" name="q11[]" value="F">
	                                                    <label class="custom-control-label mt-0" for="q11-6"><span class="mr-2">F.</span> extra houses</label>
	                                                </div>
	                                                <div class="custom-control custom-checkbox">
	                                                    <input type="checkbox" class="custom-control-input" id="q11-7" name="q11[]" value="G">
	                                                    <label class="custom-control-label mt-0" for="q11-7"><span class="mr-2">G.</span> a steel works</label>
	                                                </div>
	                                                <div class="custom-control custom-checkbox">
	                                                    <input type="checkbox" class="custom-control-input" id="q11-8" name="q11[]" value="H">
	                                                    <label class="custom-control-label mt-0" for="q11-8"><span class="mr-2">H.</span> a motorway</label>
	                                                </div>
                                            	</div>
											</div>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-6">
										<p class="mb-0">Questions 15-18</p>
										<p class="mb-0">Select Column <b>A</b> if the individual is in favour of the proposals. </p>
										<p>Select Column <b>B</b> if the individual is against the proposals.</p>
										<table class="table table-bordered">
											<tr>
												<th></th>
												<th class="text-center">A</th>
												<th class="text-center">B</th>
											</tr>
											<tr class="bg-light">
												<td class="font-weight-bold">Example <br> The local farmer</td>
												<td class="align-middle">
													<div class="custom-control custom-radio mid">
	                                                    <input type="radio" class="custom-control-input">
	                                                    <label class="custom-control-label"></label>
                                               	 	</div>
												</td>
												<td class="align-middle">
													<div class="custom-control custom-radio mid">
	                                                    <input type="radio" class="custom-control-input" checked>
	                                                    <label class="custom-control-label"></label>
                                               	 	</div>
												</td>
											</tr>
											<tr>
												<td>
													<b>15</b> The Mayor
												</td>
												<td class="align-middle">
													<div class="custom-control custom-radio mid">
	                                                    <input type="radio" id="q15-1" name="q15" class="custom-control-input" value="A">
	                                                    <label class="custom-control-label" for="q15-1"></label>
                                                	</div>
												</td>
												<td class="align-middle">
													<div class="custom-control custom-radio mid">
	                                                    <input type="radio" id="q15-2" name="q15" class="custom-control-input" value="B">
	                                                    <label class="custom-control-label" for="q15-2"></label>
                                                	</div>
												</td>
											</tr>
											<tr>
												<td>
													<b>16</b> The conservation group spokesman
												</td>
												<td class="align-middle">
													<div class="custom-control custom-radio mid">
	                                                    <input type="radio" id="q16-1" name="q16" class="custom-control-input" value="A">
	                                                    <label class="custom-control-label" for="q16-1"></label>
                                                	</div>
												</td>
												<td class="align-middle">
													<div class="custom-control custom-radio mid">
	                                                    <input type="radio" id="q16-2" name="q16" class="custom-control-input" value="B">
	                                                    <label class="custom-control-label" for="q16-2"></label>
                                                	</div>
												</td>
											</tr>
											<tr>
												<td>
													<b>17</b> The local MP
												</td>
												<td class="align-middle">
													<div class="custom-control custom-radio mid">
	                                                    <input type="radio" id="q17-1" name="q17" class="custom-control-input" value="A">
	                                                    <label class="custom-control-label" for="q17-1"></label>
                                                	</div>
												</td>
												<td class="align-middle">
													<div class="custom-control custom-radio mid">
	                                                    <input type="radio" id="q17-2" name="q17" class="custom-control-input" value="B">
	                                                    <label class="custom-control-label" for="q17-2"></label>
                                                	</div>
												</td>
											</tr>
											<tr>
												<td>
													<b>18</b> The local shopkeeper
												</td>
												<td class="align-middle">
													<div class="custom-control custom-radio mid">
	                                                    <input type="radio" id="q18-1" name="q18" class="custom-control-input" value="A">
	                                                    <label class="custom-control-label" for="q18-1"></label>
                                                	</div>
												</td>
												<td class="align-middle">
													<div class="custom-control custom-radio mid">
	                                                    <input type="radio" id="q18-2" name="q18" class="custom-control-input" value="B">
	                                                    <label class="custom-control-label" for="q18-2"></label>
                                                	</div>
												</td>
											</tr>
										</table>
									</div>

									<div class="col-6">
										<p class="mb-0">Questions 19-20</p>
										<p>Select the correct letter <b>A-D.</b></p>

										<div class="container">
											<div class="row">
												<div class="col-1">19.</div>
												<div class="col-11">
													<p>Upton is</p>
													<div class="custom-control custom-radio">
	                                                    <input type="radio" id="q19-1" name="q19" class="custom-control-input" value="A">
	                                                    <label class="custom-control-label mt-0" for="q19-1">A. close to Tartlesbury.</label>
	                                                </div>
	                                                <div class="custom-control custom-radio">
	                                                    <input type="radio" id="q19-2" name="q19" class="custom-control-input" value="B">
	                                                    <label class="custom-control-label mt-0" for="q19-2">B. far from Tartlesbury.</label>
	                                                </div>
	                                                <div class="custom-control custom-radio">
	                                                    <input type="radio" id="q19-3" name="q19" class="custom-control-input" value="C">
	                                                    <label class="custom-control-label mt-0" for="q19-3">C.  connected by rail to Tartlesbury.</label>
	                                                </div>
	                                                <div class="custom-control custom-radio">
	                                                    <input type="radio" id="q19-4" name="q19" class="custom-control-input" value="D">
	                                                    <label class="custom-control-label mt-0" for="q19-4">D. a town with a university.</label>
	                                                </div>
												</div>
												<div class="w-100 mt-2"></div>
												<div class="col-1">20.</div>
												<div class="col-11">
													<p>The College has </p>
													<div class="custom-control custom-radio">
	                                                    <input type="radio" id="q20-1" name="q20" class="custom-control-input" value="A">
	                                                    <label class="custom-control-label mt-0" for="q20-1">A. never had a 100% success rate. </label>
	                                                </div>
	                                                <div class="custom-control custom-radio">
	                                                    <input type="radio" id="q20-2" name="q20" class="custom-control-input" value="B">
	                                                    <label class="custom-control-label mt-0" for="q20-2">B. had a 100% success rate this year.</label>
	                                                </div>
	                                                <div class="custom-control custom-radio">
	                                                    <input type="radio" id="q20-3" name="q20" class="custom-control-input" value="C">
	                                                    <label class="custom-control-label mt-0" for="q20-3">C. always been very successful. </label>
	                                                </div>
	                                                <div class="custom-control custom-radio">
	                                                    <input type="radio" id="q20-4" name="q20" class="custom-control-input" value="D">
	                                                    <label class="custom-control-label mt-0" for="q20-4">D. never been successful.</label>
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
								<h6 class="font-weight-bold">SECTION 3 - Questions 21-30</h6>

								<div class="row">
									<div class="col-12 mb-3">
										<p class="mb-0">Questions 21-25</p>
										<p>Type <b><i>NO MORE THAN FOUR WORDS</i></b> or <b><i>A NUMBER</i></b> for each answer.</p>

										<div class="d-flex">
											<p class="mb-0">21. How many essays do the students have to write?</p>
											<input type="text" name="q21" class="ml-3 w-50">
										</div>
										<div class="d-flex mt-3">
											<p class="mb-0">22. What percentage does the written exam account for?</p>
											<input type="text" name="q22" class="ml-3 w-50">
										</div>
										<div class="d-flex mt-3">
											<p class="mb-0">23. How many marks did Carl get for his latest essay?</p>
											<input type="text" name="q23" class="ml-3 w-50">
										</div>
										<div class="d-flex mt-3">
											<p class="mb-0">24. How many marks did Pamela get for her latest essay?</p>
											<input type="text" name="q24" class="ml-3 w-50">
										</div>
										<div class="d-flex mt-3">
											<p class="mb-0">25. When was the marking system explained before?</p>
											<input type="text" name="q25" class="ml-3 w-50">
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-12">
										<p class="mb-0">Questions 26-30</p>
										<p class="mb-0">Complete the table below</p>
										<p>Type <b><i>NO MORE THAN THREE WORDS</i></b> for each answer.</p>

										<div class="container">
											<div class="row justify-content-center">
												<div class="col-8">
													<table class="table table-bordered w-100 dt-responsive">
														<tr>
															<th></th>
															<th class="font-weight-bold">Carl</th>
															<th class="font-weight-bold">Pamela</th>
														</tr>
														<tr>
															<td class="font-weight-bold">Research</td>
															<td>
																<p class="mb-0">Very good, lots of</p>
																<p class="mb-0 d-inline"><b>26</b> <input type="text" name="q26" class="d-inline"> examples</p>
															</td>
															<td>Very good</td>
														</tr>
														<tr>
															<td class="font-weight-bold">Sources</td>
															<td>Very sound</td>
															<td>Very good</td>
														</tr>
														<tr>
															<td class="font-weight-bold">Organization</td>
															<td>Very good</td>
															<td>
																<p class="mb-0"><b>29</b> <input type="text" name="q29" class="d-inline auto-off"></p>
															</td>
														</tr>
														<tr>
															<td class="font-weight-bold">Writing style</td>
															<td><p class="mb-0"><b>27</b> <input type="text" name="q27" class="d-inline"></p></td>
															<td>Slightly too informal in some places</td>
														</tr>
														<tr>
															<td class="font-weight-bold">Previous essay</td>
															<td>
																<p class="mb-0">Disappointing, but rewrite</p>
																<p class="mb-0 d-inline"><b>28</b> <input type="text" name="q28" class="d-inline auto-off"></p>
															</td>
															<td><p class="mb-0"><b>30</b><input type="text" name="q30" class="d-inline auto-off"></p> </td>
														</tr>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<!-- end section 3 -->

							<h3>SECTION 4</h3>
							<section>
								<h6 class="font-weight-bold">SECTION 4 - Questions 31-40</h6>
								<div class="row">
									<div class="col-12">
										<p class="mb-0">Questions 31-35</p>
										<p>Select the correct letters <b>A-D.</b></p>
									</div>
									<div class="col-6">
										<div class="row">
											<div class="col-1">31.</div>
											<div class="col-11">
												<p>The total number of lectures mentioned by the lecturer is</p>
												<div class="custom-control custom-radio">
                                                    <input type="radio" id="q31-1" name="q31" class="custom-control-input" value="A">
                                                    <label class="custom-control-label mt-0" for="q31-1">A. ten.</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="q31-2" name="q31" class="custom-control-input" value="B">
                                                    <label class="custom-control-label mt-0" for="q31-2">B. thirteen.</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="q31-3" name="q31" class="custom-control-input" value="C">
                                                    <label class="custom-control-label mt-0" for="q31-3">C. six.</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="q31-4" name="q31" class="custom-control-input" value="D">
                                                    <label class="custom-control-label mt-0" for="q31-4">D. eight.</label>
                                                </div>
											</div>

											<div class="col-1">32.</div>
											<div class="col-11">
												<p>The lunch break of the average British worker is </p>
												<div class="custom-control custom-radio">
                                                    <input type="radio" id="q32-1" name="q32" class="custom-control-input" value="A">
                                                    <label class="custom-control-label mt-0" for="q32-1">A. on the increase.</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="q32-2" name="q32" class="custom-control-input" value="B">
                                                    <label class="custom-control-label mt-0" for="q32-2">B. shorter than it used to be.</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="q32-3" name="q32" class="custom-control-input" value="C">
                                                    <label class="custom-control-label mt-0" for="q32-3">C.  36 minutes.</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="q32-4" name="q32" class="custom-control-input" value="D">
                                                    <label class="custom-control-label mt-0" for="q32-4">D. precisely 30 minutes.</label>
                                                </div>
											</div>

											<div class="col-1">33.</div>
											<div class="col-11">
												<p>Which graph shows the change as regards sick leave?</p>
												<div class="d-flex">
													<div class="custom-control custom-radio mr-2">
                                                    <input type="radio" id="q33-1" name="q33" class="custom-control-input" value="A">
                                                    <label class="custom-control-label mt-0" for="q33-1">
                                                    	<img src="{{ asset('public/assets/images/mocktest/33-1.jpg') }}" alt="" width="240">
                                                    </label>
	                                                </div>
	                                                <div class="custom-control custom-radio">
	                                                    <input type="radio" id="q33-2" name="q33" class="custom-control-input" value="B">
	                                                    <label class="custom-control-label mt-0" for="q33-2">
	                                                    	<img src="{{ asset('public/assets/images/mocktest/33-2.jpg') }}" alt="" width="240">
	                                                    </label>
	                                                </div>
												</div>
                                                <div class="d-flex mt-2">
                                                	<div class="custom-control custom-radio mr-2">
                                                    <input type="radio" id="q33-3" name="q33" class="custom-control-input" value="C">
                                                    <label class="custom-control-label mt-0" for="q33-3">
                                                    	<img src="{{ asset('public/assets/images/mocktest/33-3.jpg') }}" alt="" width="240">
                                                    </label>
	                                                </div>
	                                                <div class="custom-control custom-radio">
	                                                    <input type="radio" id="q33-4" name="q33" class="custom-control-input" value="D">
	                                                    <label class="custom-control-label mt-0" for="q33-4">
	                                                    	<img src="{{ asset('public/assets/images/mocktest/33-4.jpg') }}" alt="" width="240">
	                                                    </label>
	                                                </div>
                                                </div>
											</div>

											
										</div>
									</div>
									<div class="col-6">
										<div class="row">
											<div class="col-1">34.</div>
											<div class="col-11">
												<p>There will be another lecture on stress in work and study </p>
												<div class="custom-control custom-radio">
                                                    <input type="radio" id="q34-1" name="q34" class="custom-control-input" value="A">
                                                    <label class="custom-control-label mt-0" for="q34-1">A.  given by Professor Butt. </label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="q34-2" name="q34" class="custom-control-input" value="B">
                                                    <label class="custom-control-label mt-0" for="q34-2">B.  on the calendar. </label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="q34-3" name="q34" class="custom-control-input" value="C">
                                                    <label class="custom-control-label mt-0" for="q34-3">C.  in about a fortnight. </label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="q34-4" name="q34" class="custom-control-input" value="D">
                                                    <label class="custom-control-label mt-0" for="q34-4">D. in a week's time. </label>
                                                </div>
											</div>

											<div class="col-1">35.</div>
											<div class="col-11">
												<p>Which of the following is mentioned?</p>
												<div class="custom-control custom-radio">
                                                    <input type="radio" id="q35-1" name="q35" class="custom-control-input" value="A">
                                                    <label class="custom-control-label mt-0" for="q35-1">A. Most workers say they do not take all their holidays. </label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="q35-2" name="q35" class="custom-control-input" value="B">
                                                    <label class="custom-control-label mt-0" for="q35-2">B. Under half of the workers say they do not take all their holidays. </label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="q35-3" name="q35" class="custom-control-input" value="C">
                                                    <label class="custom-control-label mt-0" for="q35-3">C. Employers do not believe workers.</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="q35-4" name="q35" class="custom-control-input" value="D">
                                                    <label class="custom-control-label mt-0" for="q35-4">D. About a third of healthy workers take days off sick. </label>
                                                </div>
											</div>
										</div>
									</div>
								</div>

								<hr>

								<div class="row">
									<div class="col-7">
										<p class="mb-0">Questions 36-39</p>
										<p class="mb-0">Complete the table below</p>
										<p>Type <b><i>NO MORE THAN THREE WORDS</i></b> for each answer.</p>

										<div class="row">
											<div class="col-12">
												<h6 class="font-weight-bold">Student's Notes</h6>

												<div class="container mt-3">
													<div class="row border-top border-bottom border-3 py-3">
														<div class="col-3">Employees</div>
														<div class="col-9">
															<p class="mb-0">now working <b>36</b> <input type="text" name="q36" class="d-inline mx-2 auto-off"> physically and mentally
															</p>
														</div>
													</div>

													<div class="row py-3 border-bottom  border-3">
														<div class="col-3">Productivity</div>
														<div class="col-9">
															<p class="mb-0">up in many <b>37</b> <input type="text" name="q37" class="d-inline mx-2 auto-off"></p>
														</div>
													</div>

													<div class="row py-3 border-bottom border-3">
														<div class="col-3">In 2002, local car plant</div>
														<div class="col-9">
															<p class="mb-0">vehicles per employee on rise to <b>38</b> <input type="text" name="q38" class="d-inline mx-2 auto-off"></p>
														</div>
													</div>

													<div class="row border-bottom py-3 border-3">
														<div class="col-3">Car industry</div>
														<div class="col-9">
															<p class="mb-0">once thought to be <b>39</b> <input type="text" name="q39" class="d-inline mx-2 auto-off"></p>
														</div>
													</div>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-5">
										<p class="mb-0">Question 40</p>
										<p>Choose the correct letter <b>A-D.</b></p>

										<div class="row">
											<div class="col-1 pr-0">40.</div>
											<div class="col-11 pl-0">
												Dr Butt asks those students to see him who 
												<div class="custom-control custom-radio">
													<input type="radio" name="q40" id="q40-1" class="custom-control-input" value="A">
													<label for="q40-1" class="custom-control-label mt-0">A. want to work at the plant.</label>
												</div>
												<div class="custom-control custom-radio">
													<input type="radio" name="q40" id="q40-2" class="custom-control-input" value="B">
													<label for="q40-2" class="custom-control-label mt-0">B.  have chosen to do the project.</label>
												</div>
												<div class="custom-control custom-radio">
													<input type="radio" name="q40" id="q40-3" class="custom-control-input" value="C">
													<label for="q40-3" class="custom-control-label mt-0">C. want to write extra essays.</label>
												</div>
												<div class="custom-control custom-radio">
													<input type="radio" name="q40" id="q40-4" class="custom-control-input" value="D">
													<label for="q40-4" class="custom-control-label mt-0">D. are new.</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<!-- end section 4 -->
						</div>
						<!-- end tab section -->
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
                <h4 class="modal-title" id="mySmallModalLabel">Speak Write</h4>
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
<script src="{{ asset('public/js/mocktest/timer_fx_listening.js') }}"></script>
<script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
 
<script>
	$(function () {
		$('input[type="text"]').attr({
			'autocomplete': 'none',
			'onChange': 'this.value = this.value.toUpperCase();',
			'spellcheck': 'false'
		});

		$('.modal').modal({backdrop: 'static', keyboard: false}) 

		function LoadModal() {
			$('.modal').modal('show');
		}

		 var obj = document.createElement("audio");
		  obj.src = "{{ asset('public/sound/FX_Listening_Mock_Test.MP3') }}";
		  obj.autoPlay = true;
		  obj.preLoad = true;

		$('#Play').on('click', function() {
			obj.play();
			$('.modal').modal('hide');
			begintimer();
		})

		$('.auto-off').attr('autocomplete', 'off');

		$('input[name="q11[]"]').click(function(e){
	     var Max = 4;
	     var Checked = $('input[name="q11[]"]:checked').length;
	     if(Checked==Max){
	      $('input[name="q11[]"]').each(function(){
	        if(!$(this).is(":checked")){
	          $(this).prop("disabled", true); 
	        }
	      });
	    }else{
	      $('input[name="q11[]"]').each(function(){
	        $(this).prop("disabled", false); 
	      });
	    }
	  });
	});
</script>
@stop