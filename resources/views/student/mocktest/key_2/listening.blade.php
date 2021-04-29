@extends('layouts.mocktest_layout')

@section('content')

<style type="text/css">
	body {
		color: black;
		font-size: 17px;
	}
	/*section1*/
	.col-auto{
		margin:0px -15px 0px 0px;
	}

	/*section2*/
	.wizard .content .body label{
		margin-top:0px; 	
	}

	label{
		font-weight: 100;	
	}

	b{
		font-weight: 700;	
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
					<h4 class="m-t-0 header-title"><b>IELTS Listening : Practice Test Version 2</b></h4>
					
					<h5><span id="dplay"></span></h5>
					<form id="basic-form" action="{{ route('ans_lis') }}" method="post" onsubmit="return confirm('Are you sure you want to finish?');">
						{{ csrf_field() }}
					
						<input type="hidden" name="std_id" value="{{auth('student')->user()->std_id}}">
						<input type="hidden" name="classroom_id" value="{{auth('student')->user()->coursetype}}">
						<input type="hidden" name="set_exam" value="2">
						<div>
							<h3>SECTION 1 </h3>
							<section>
								<div class="col-md-12">
									<div class="card-box" id='s1'> <span class="fa fa-assistive-listening-systems"></span> <strong>SECTION 1</strong> <br>
										<br>
										<div class="container">
											<div class="row">
												<p class="font-16">As you listen complete the following information table.<br>
													Type <b>NO MORE THAN TWO WORDS and/or a date or number:</b>
												</p>
												<div class="container-fluid">
													<fieldset style="border: 1px solid; width: 700px; margin: auto;">
														<h4 align="center">Global Travel: Booking form</h4>
														<br>
														<div class="container">
															<div class="form-group row mb-3">
																<label class="col-auto" for="q1"><b>No. of people:</b></label>
																<div class="col-auto">
																	<input type="text" name="q1" autocomplete="off">
																</div>
																(1)
															</div>

															<div class="form-group row mb-3">
																<label class="col-auto"><b>Destination:</b></label>
																<div class="col-auto"> Mediterranean Coast </div>
															</div>

															<div class="form-group row mb-3">
																<label class="col-auto"><b>Name of Tour:</b></label>
																<div class="col-auto"> Mediterranean Paradise </div>
															</div>

															<div class="form-group row mb-3">
																<label class="col-auto" for="q2"><b>Countries:</b></label>
																<div class="col-auto">Spain, France  and </div>
																<div class="col-auto">
																	<input type="text" name="q2" autocomplete="none">
																</div>

																<div class="col-auto">(2)</div> 
															</div>

															<div class="form-group row mb-3">
																<label class="col-auto" for="q3"><b>Length of tour:</b></label>
																<div class="col-auto">
																	<input type="text" name="q3" autocomplete="off">
																</div>
																<div class="col-auto"> (3) days</div> 
															</div>

															<div class="form-group row mb-3">
																<label class="col-auto" for="q4"><b>Departure date:</b></label>
																<div class="col-auto">
																	<input type="text" name="q4" autocomplete="off">
																</div>
																(4) 
															</div>

															<div class="form-group row mb-3">
																<label class="col-auto"><b>Accommodation:</b></label>
																<div class="col-auto"> Standard double </div>
															</div>

															<div class="form-group row mb-3">
																<label class="col-auto" for="q5"><b>Total package cost:</b></label>
																<div class="col-auto">
																	<input type="text" name="q5" autocomplete="off">
																</div>
																<div class="col-auto">(5) per person.</div>
															</div>

															<div class="form-group row mb-3">
																<label class="col-auto"><b>Insurance required:</b></label>
																<div class="col-auto"> NO </div>
															</div>

															<div class="form-group row mb-3">
																<label class="col-auto" for="q6"><b>Meals included:</b></label>
																<div class="col-auto">
																	<input type="text"  name="q6[]" autocomplete="off">
																</div>
																<div class="col-auto">and</div> 
																<div class="col-auto">
																	<input type="text"  name="q6[]" autocomplete="off">
																</div>
																(6) 
															</div>
															<div class="form-group row mb-3">
																<label class="col-auto" for="q7"><b>Payment will be made using:</b></label>
																<div class="col-auto">
																	<input type="text"  name="q7" autocomplete="off">
																</div>
																(7) 
															</div>
															<div class="form-group row mb-3">
																<label class="col-auto" for="q8"><b>Name:</b></label>
																<div class="col-auto"><b>Charles Arthur</b></div>
																<div class="col-auto">
																	<input type="text"  name="q8" autocomplete="off">
																</div>
																(8) 
															</div>
															<div class="form-group row mb-3">
																<label class="col-auto" for="q9"><b>Phone:</b></label>
																<div class="col-auto">
																	<input type="text"  name="q9" autocomplete="off">
																</div>
																(9) 
															</div>

															<div class="form-group row mb-3">
																<label class="col-auto"><b>Full payment required:</b></label>
																<div class="col-auto"> One week before departure. </div>
															</div>

															<div class="form-group row mb-3">
																<label class="col-auto" for="q10"><b>Deposit:</b></label>
																<div class="col-auto">
																	<input type="text" name="q10" autocomplete="off">
																</div>
																<div class="col-auto">(10) of total cost</div>
															</div>
														</div>
													</fieldset>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>

							<h3>SECTION 2</h3>
							<section>
								<div class="col-md-12">
									<div class="card-box">
										<span class="fa fa-assistive-listening-systems"></span><b>SECTION 2</b> <br>
										<br>
										<div class="row">
											<div class="col-md-6">
												<p class="font-16"><b>Questions 11 – 15</b><br>
													Choose the best answer from the options given. <br>
													For <b>Questions 11 – 15</b> select A, B, C, or D
												</p>
												<div class="container">
													<div class="mt-3">
														<label>11. Where are the man and his family staying?</label>
														<div class="custom-control custom-radio">
															<input type="radio" id="q11-1" name="q11" class="custom-control-input" value="A" >
															<label class="custom-control-label" for="q11-1"><b>A.</b> In a caravan</label>
														</div>

														<div class="custom-control custom-radio">
															<input type="radio" id="q11-2" name="q11" class="custom-control-input" value="B">
															<label class="custom-control-label" for="q11-2"><b>B.</b> In a hotel</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q11-3" name="q11" class="custom-control-input" value="C">
															<label class="custom-control-label" for="q11-3"><b>C.</b> In a guest house</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q11-4" name="q11" class="custom-control-input" value="D">
															<label class="custom-control-label" for="q11-4"><b>D.</b> On the beach</label>
														</div>
													</div>
													<div class="mt-3">
														<label>12. What does the woman say about the place where the man is staying?</label>
														<div class="custom-control custom-radio">
															<input type="radio" id="q12-1" name="q12" class="custom-control-input" value="A">
															<label class="custom-control-label" for="q12-1"><b>A.</b> A lot of tourists stay there.</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q12-2" name="q12" class="custom-control-input" value="B">
															<label class="custom-control-label" for="q12-2"><b>B.</b> The manager cooks delicious food.</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q12-3" name="q12" class="custom-control-input" value="C">
															<label class="custom-control-label" for="q12-3"><b>C.</b> It’s located on a quiet street.</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q12-4" name="q12" class="custom-control-input" value="D">
															<label class="custom-control-label" for="q12-4"><b>D.</b> It’s on the beach.</label>
														</div>
													</div>
													<div class="mt-3">
														<label>13. Which of the following about the bus is <b>NOT TRUE?</b></label>
														<div class="custom-control custom-radio">
															<input type="radio" id="q13-1" name="q13" class="custom-control-input" value="A">
															<label class="custom-control-label" for="q13-1"><b>A.</b> There’s a bus stop near the guest house.</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q13-2" name="q13" class="custom-control-input" value="B">
															<label class="custom-control-label" for="q13-2"><b>B.</b> The bus is more frequent at the weekends.</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q13-3" name="q13" class="custom-control-input" value="C">
															<label class="custom-control-label" for="q13-3"><b>C.</b> The bus travels in both directions.</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q13-4" name="q13" class="custom-control-input" value="D">
															<label class="custom-control-label" for="q13-4"><b>D.</b> The bus trip is free.</label>
														</div>
													</div>
													<div class="mt-3">
														<label>14. How do most visitors to the town get around?</label>
														<div class="custom-control custom-radio">
															<input type="radio" id="q14-1" name="q14" class="custom-control-input" value="A">
															<label class="custom-control-label" for="q14-1"><b>A.</b> By bus</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q14-2" name="q14" class="custom-control-input" value="B">
															<label class="custom-control-label" for="q14-2"><b>B.</b> By taxi</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q14-3" name="q14" class="custom-control-input" value="C">
															<label class="custom-control-label" for="q14-3"><b>C.</b> By bicycle</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q14-4" name="q14" class="custom-control-input" value="D">
															<label class="custom-control-label" for="q14-4"><b>D.</b> On foot</label>
														</div>
													</div>
													<div class="mt-3">
														<label>15. How do the children in the man’s family usually travel around?</label>
														<div class="custom-control custom-radio">
															<input type="radio" id="q15-1" name="q15" class="custom-control-input" value="A">
															<label class="custom-control-label" for="q15-1"><b>A.</b> They cycle most places.</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q15-2" name="q15" class="custom-control-input" value="B">
															<label class="custom-control-label" for="q15-2"><b>B.</b> They get a lift with their parents.</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q15-3" name="q15" class="custom-control-input" value="C">
															<label class="custom-control-label" for="q15-3"><b>C.</b> They use taxis.</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q15-4" name="q15" class="custom-control-input" value="D">
															<label class="custom-control-label" for="q15-4"><b>D.</b> They walk everywhere.</label>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<p class="font-16"><b>Questions 16 - 20</b><br>
													Look at the activities below. Choose 5 activities the man and his family are interested in doing during their holiday. <br>
												For questions 16 to 20 select the letters A – J</p>
												<div class="container paragraph2-2">
													<fieldset style="border: 1px solid; width: 100%; margin: 0 auto;">
														<div class="row">
															<label class="col-auto">A.</label>
															<div class="col-md-10 px-0"> Swim in a beautiful place. </div>
														</div>
														<div class="row">
															<label class="col-auto">B.</label>
															<div class="col-md-10 px-0"> Watch a movie about the transportation system. </div>
														</div>
														<div class="row">
															<label class="col-auto">C.</label>
															<div class="col-md-10 px-0"> Visit the house where the town mayor used to live. </div>
														</div>
														<div class="row">
															<label class="col-auto">D.</label>
															<div class="col-md-10 px-0"> Play with toy trains. </div>
														</div>
														<div class="row">
															<label class="col-auto">E.</label>
															<div class="col-md-10 px-0"> Tour the place where people used to watch films. </div>
														</div>
														<div class="row">
															<label class="col-auto">F.</label>
															<div class="col-md-10 px-0"> Take in a hilltop view. </div>
														</div>
														<div class="row">
															<label class="col-auto">G.</label>
															<div class="col-md-10 px-0"> Observe some of the local wildlife. </div>
														</div>
														<div class="row">
															<label class="col-auto">H.</label>
															<div class="col-md-10 px-0"> Visit the place where they used to make cars. </div>
														</div>
														<div class="row">
															<label class="col-auto">I.</label>
															<div class="col-md-10 px-0"> Have a cycle ride. </div>
														</div>
														<div class="row">
															<label class="col-auto">J.</label>
															<div class="col-md-10 px-0"> Explore an area on foot. </div>
														</div>
													</fieldset>
													<div class="row mt-3">
														<div class="col-auto"><b>16.</b></div>
														<div class="col-auto">
															<select class="custom-select" name="q16">
																<option selected="">Select Answer</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="C">C</option>
																<option value="D">D</option>
																<option value="E">E</option>
																<option value="F">F</option>
																<option value="G">G</option>
																<option value="H">H</option>
																<option value="I">I</option>
																<option value="J">J</option>
															</select>
														</div>
													</div>
													<div class="row mt-1">
														<div class="col-auto"><b>17.</b></div>
														<div class="col-auto">
															<select class="custom-select" name="q17">
																<option selected="">Select Answer</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="C">C</option>
																<option value="D">D</option>
																<option value="E">E</option>
																<option value="F">F</option>
																<option value="G">G</option>
																<option value="H">H</option>
																<option value="I">I</option>
																<option value="J">J</option>
															</select>
														</div>
													</div>
													<div class="row mt-1">
														<div class="col-auto"><b>18.</b></div>
														<div class="col-auto">
															<select class="custom-select" name="q18">
																<option selected="">Select Answer</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="C">C</option>
																<option value="D">D</option>
																<option value="E">E</option>
																<option value="F">F</option>
																<option value="G">G</option>
																<option value="H">H</option>
																<option value="I">I</option>
																<option value="J">J</option>
															</select>
														</div>
													</div>
													<div class="row mt-1">
														<div class="col-auto"><b>19.</b></div>
														<div class="col-auto">
															<select class="custom-select" name="q19">
																<option selected="">Select Answer</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="C">C</option>
																<option value="D">D</option>
																<option value="E">E</option>
																<option value="F">F</option>
																<option value="G">G</option>
																<option value="H">H</option>
																<option value="I">I</option>
																<option value="J">J</option>
															</select>
														</div>
													</div>
													<div class="row mt-1">
														<div class="col-auto"><b>20.</b></div>
														<div class="col-auto">
															<select class="custom-select" name="q20">
																<option selected="">Select Answer</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="C">C</option>
																<option value="D">D</option>
																<option value="E">E</option>
																<option value="F">F</option>
																<option value="G">G</option>
																<option value="H">H</option>
																<option value="I">I</option>
																<option value="J">J</option>
															</select>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>

							<h3>SECTION 3 </h3>
							<section>
								<div class="col-md-12">
									<div class="card-box"> <span class="fa fa-assistive-listening-systems"></span> <b>SECTION 3</b> <br>
										<br>
										<div class="row">
											<div class="col-md-6">
												<p class="font-16"><b>Questions 21 – 26</b><br>
													Choose the best option from the options given.<br>
												For Questions 21 – 26 choose A, B, C, or D</p>
												<div class="container">
													<div class="mt-3">
														<label>21. What was the main reason for Steve and Gitta’s choice of project topic?</label>
														<div class="custom-control custom-radio">
															<input type="radio" id="q21-1" name="q21" class="custom-control-input" value="A">
															<label class="custom-control-label" for="q21-1"><b>A.</b> They both live in housing estates.</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q21-2" name="q21" class="custom-control-input" value="B">
															<label class="custom-control-label" for="q21-2"><b>B.</b> There have been a lot of changes in the housing estates recently.</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q21-3" name="q21" class="custom-control-input" value="C">
															<label class="custom-control-label" for="q21-3"><b>C.</b> There is a strong sense of community in the estates.</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q21-4" name="q21" class="custom-control-input" value="D">
															<label class="custom-control-label" for="q21-4"><b>D.</b> There has been a reduction in community activity in recent years.</label>
														</div>
													</div>
													<div class="mt-3">
														<label>22. What has been one reason for the growth in housing estates?</label>
														<div class="custom-control custom-radio">
															<input type="radio" id="q22-1" name="q22" class="custom-control-input" value="A">
															<label class="custom-control-label" for="q22-1"><b>A.</b> Urban migration from the city to the estates has increased.</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q22-2" name="q22" class="custom-control-input" value="B">
															<label class="custom-control-label" for="q22-2"><b>B.</b> People have left other areas to set up home there.</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q22-3" name="q22" class="custom-control-input" value="C">
															<label class="custom-control-label" for="q22-3"><b>C.</b> People have chosen to live in inner city areas rather than on the estates.</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q22-4" name="q22" class="custom-control-input" value="D">
															<label class="custom-control-label" for="q22-4"><b>D.</b> The council has made improvements in infrastructure.</label>
														</div>
													</div>
													<div class="mt-3">
														<label>23. What changes have been made to public transportation?</label>
														<div class="custom-control custom-radio">
															<input type="radio" id="q23-1" name="q23" class="custom-control-input" value="A">
															<label class="custom-control-label" for="q23-1"><b>A.</b> There are more buses now than there used to be.</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q23-2" name="q23" class="custom-control-input" value="B">
															<label class="custom-control-label" for="q23-2"><b>B.</b> An underground rail system has been developed.</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q23-3" name="q23" class="custom-control-input" value="C">
															<label class="custom-control-label" for="q23-3"><b>C.</b> A mono-rail link links part of the inner city.</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q23-4" name="q23" class="custom-control-input" value="D">
															<label class="custom-control-label" for="q23-4"><b>D.</b> There are more cars on the road now.</label>
														</div>
													</div>
													<div class="mt-3">
														<label>24. What impact has the five pounds inner city road tax had?</label>
														<div class="custom-control custom-radio">
															<input type="radio" id="q24-1" name="q24" class="custom-control-input" value="A">
															<label class="custom-control-label" for="q24-1"><b>A.</b> Fewer cars now enter the city centre.</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q24-2" name="q24" class="custom-control-input" value="B">
															<label class="custom-control-label" for="q24-2"><b>B.</b> More people use the pedestrian precincts.</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q24-3" name="q24" class="custom-control-input" value="C">
															<label class="custom-control-label" for="q24-3"><b>C.</b> There is now more money available for infrastructure development.</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q24-4" name="q24" class="custom-control-input" value="D">
															<label class="custom-control-label" for="q24-4"><b>D.</b> People tend to leave their cars at home.</label>
														</div>
													</div>
													<div class="mt-3">
														<label>25. Which facility has the council recently opened?</label>
														<div class="custom-control custom-radio">
															<input type="radio" id="q25-1" name="q25" class="custom-control-input" value="A">
															<label class="custom-control-label" for="q25-1"><b>A.</b> Areas to play football and badminton in the parks.</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q25-2" name="q25" class="custom-control-input" value="B">
															<label class="custom-control-label" for="q25-2"><b>B.</b> Multi-purpose sports hall in the suburbs.</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q25-3" name="q25" class="custom-control-input" value="C">
															<label class="custom-control-label" for="q25-3"><b>C.</b> Community education centres.</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q25-4" name="q25" class="custom-control-input" value="D">
															<label class="custom-control-label" for="q25-4"><b>D.</b> A sports centre in the centre of town.</label>
														</div>
													</div>
													<div class="mt-3">
														<label>26. What will be the main focus of Steve and Gitta’s project?</label>
														<div class="custom-control custom-radio">
															<input type="radio" id="q26-1" name="q26" class="custom-control-input" value="A">
															<label class="custom-control-label" for="q26-1"><b>A.</b> The incidence of crime in other parts of the country.</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q26-2" name="q26" class="custom-control-input" value="B">
															<label class="custom-control-label" for="q26-2"><b>B.</b> The correlation between crime in the city and crime in the housing  estates.</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q26-3" name="q26" class="custom-control-input" value="C">
															<label class="custom-control-label" for="q26-3"><b>C.</b> The link between improved community spirit and falling crime rates.</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="q26-4" name="q26" class="custom-control-input" value="D">
															<label class="custom-control-label" for="q26-4"><b>D.</b> The impact of juvenile crime on housing estates.</label>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<p class="font-16"><b>Questions 27 – 30</b><br>
													Match the parts of the project proposal with the tutor’s comments in the box below.<br>
												For questions 27 – 30 select a letter, A, B, or C</p>
												<fieldset style="border: 1px solid; width: 400px; margin: auto;">
													<div class="container">
														<div class="row">
															<label class="col-auto">A.</label>
															<div class="col-md-10 px-0"> Good </div>
														</div>
														<div class="row">
															<label class="col-auto">B.</label>
															<div class="col-md-10 px-0"> Satisfactory </div>
														</div>
														<div class="row">
															<label class="col-auto">C.</label>
															<div class="col-auto px-0"> Not so good </div>
														</div>
													</div>
												</fieldset>
												<div class="container mt-3">
													<div class="row">
														<div class="col-auto"><b>27.</b></div>
														<div class="col-auto">
															<select class="custom-select" name="q27">
																<option selected="">Select Answer</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="C">C</option>
															</select>
														</div>
														<div class="col-auto"> Review of the literature </div>
													</div>
													<div class="row mt-2">
														<div class="col-auto"><b>28.</b></div>
														<div class="col-auto">
															<select class="custom-select" name="q28">
																<option selected="">Select Answer</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="C">C</option>
															</select>
														</div>
														<div class="col-auto"> Questionnaire </div>
													</div>
													<div class="row mt-2">
														<div class="col-auto"><b>29.</b></div>
														<div class="col-auto">
															<select class="custom-select" name="q29">
																<option selected="">Select Answer</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="C">C</option>
															</select>
														</div>
														<div class="col-auto"> Follow-up action: case study proposals </div>
													</div>
													<div class="row mt-2">
														<div class="col-auto"><b>30.</b></div>
														<div class="col-auto">
															<select class="custom-select" name="q30">
																<option selected="">Select Answer</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="C">C</option>
															</select>
														</div>
														<div class="col-auto"> Presentation methodology </div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>

							<h3>SECTION 4</h3>
							<section>
								<div class="col-md-12">
									<div class="card-box"> <span class="fa fa-assistive-listening-systems"></span> <b>SECTION 4</b> <br>
										<br>
										<div class="row">
											<div class="col-md-12">
												<p class="font-16"><b>Questions 31 - 40</b><br>
													Type <b>ONE WORD</b> for each answer
												</p>
												<fieldset style="border: 1px solid; width: 85%; margin: auto;">
													<div class="container" style="margin: auto; width: 100%">
														<h3 align="center">Salt</h3>
														<h4>History</h4>
														<div class="row">
															<div class="col-auto px-0">
																<label class="col col-form-group">Greece:</label>
															</div>
															<p class="col-auto">Salt in exchange for <b>(31)</b></p>
															<div class="col-auto">
																<input type="text" name="q31" autocomplete="off">
															</div>
														</div>
														<div class="row">
															<div class="col-auto px-0">
																<label class="col col-form-group">Rome:</label>
															</div>
															<p class="col-auto">Soldiers paid in salt: hence the English word <b>(32)</b></p>
															<div class="col-auto">
																<input type="text" name="q32" autocomplete="off">
															</div>
														</div>
														<div class="row">
															<div class="col-auto px-0">
																<label class="col col-form-group">China:</label>
															</div>
															<p class="col-auto">First written evidence of salt: over 40 kinds of salt </p>
														</div>
														<div class="row">
															<div class="col-auto">
															<label style="margin-left: 60px;"></label>
															</div>
															<p class="col-auto">Government income generated through salt <b>(33)</b></p>
															<div class="col-auto">
																<input type="text" name="q33" autocomplete="off">
															</div>
														</div>

																
														<h4 class="my-0 pt-3 pb-2">Development</h4>
														<div class="row">
															<div class="col-auto">
																<label>New cities:   e.g. Salzburg = city of salt</label>
															</div>
														</div>
														<div class="row">
															<div class="col-auto">
																<label>New roads:   e.g. Via Salaria in Italy</label>
															</div>
														</div>
														<h4 class="my-0 pt-3 pb-2">Military use</h4>
														<div class="row">
															<div class="col-auto px-0">
																<label class="col col-form-group">Retreat from Moscow:</label>
															</div>
															<p class="col-auto">Napoleon's army was depleted because no salt available to heal soldiers'</p>
														</div>

														<div class="row">
															<div class="col-auto">
															<label style="margin-left: 75px;"></label>
															</div>
															<div class="col-auto"><label style="margin-left: 75px;"><b>(34)</b></label></div>
															<div class="col-auto">
																<input type="text" name="q34" autocomplete="off">
															</div>
														</div>
														<div class="row">
															<div class="col-auto px-0">
																<label class="col col-form-group">American War of independence:</label>
															</div>
															<p class="col-auto">Lord Howe captured George Washington’s salt supply (1777) </p>
														</div>

														<h4 class="my-0 pt-3 pb-2">Culinary use</h4>
														<div class="row">
															<div class="col-auto px-0">
																<label class="col col-form-group">Seasoning food:</label>
															</div>
															<p class="col-auto">adds flavor </p>
														</div>
														<div class="row">
															<div class="col-auto px-0">
																<label class="col col-form-group">Important element of diet:</label>
															</div>
															<p class="col-auto">humans, animals and plants</p>
														</div>
														<div class="row">
															<div class="col-auto"> 
																<b>(35)</b>
															</div>
															<div class="col-auto"> 
																<input type="text" name="q35" autocomplete="off">
															</div>
															<label>food:</label>
															<p class="col-auto">salt keeps food fresher for a longer time. </p>
														</div>
														<h4 class="my-0 pt-3 pb-2">Cleaning purposes</h4>
														<div class="row">
															<div class="col-auto px-0">
																<label class="col col-form-group">Bathroom and toilet:</label>
															</div>
															<p class="col-auto">e.g. turpentine and salt solution restores bath tubs and toilets </p>
														</div>
														<div class="row">
															<div class="col-auto px-0">
																<label class="col col-form-group">Kitchen:</label>
															</div>
															<p class="col-auto">e.g. brine solution prevents collection of grease and gets rid of bad <b>(36)</b> </p>
															<div class="col-auto">
																<input type="text" name="q36" autocomplete="off">
															</div>
														</div>
														<h4 class="my-0 pt-3 pb-2">Other household use</h4>
														<div class="row">
															<label class="col-auto">Insects:</label>
															<p class="col-auto">drives moths and ants away</p>
														</div>
														<div class="row">
															<label class="col-auto">Laundry:</label>
															<p class="col-auto">prevents iron from sticking</p>
														</div>
														<div class="row">
															<label class="col-auto">Furniture:</label>
															<p class="col-auto">removes stains from wooden tables</p>
														</div>
														<div class="row">
															<div class="col-auto px-0">
																<label class="col col-form-group">Hygiene:</label>
															</div>
															<p class="col-auto">useful as a useful as a <b>(37)</b></p>
															<div class="col-auto">
																<input type="text" name="q37" autocomplete="off">
															</div>
														</div>
														<div class="row">
															<div class="col-auto">
																<label style="margin-left: 75px;"> gargling agent or eye-wash; keeps teeth clean and healthy; kills bacteria and germs; </label>
															</div>
															<p class="col-auto">
																<label style="margin-left: 75px;"> used as a massage element for better condition of the <b>(38)</b></label>
															</p>
															<div class="col-auto">
																<input type="text" name="q38" autocomplete="off">
															</div>
														</div>
														<h4 class="my-0 pt-3 pb-2">Folklore</h4>
														<div class="row mb-3">
															<label class="col-auto">Superstition:</label>
															<p class="col-auto">Pouring salt on spilled <b>(39)</b></p>
															<div class="col-auto">
																<input type="text" name="q39" autocomplete="off">
															</div>
															will keep away evil spirits
															<div class="col-auto" style="margin-left: 117px;"> Dropping salt on the floor will result in bad luck </div>
															<div class="col-auto" style="margin-left: 117px;"> In Europe people throw salt into a dead person's <b>(40)</b> </div>
															<div class="col-auto">
																<input type="text" name="q40" autocomplete="none">
															</div>
															<div class="col-auto">prior to burial.</div>
														</div>
													</div>
												</fieldset>
											</div>
										</div>
									</div> 
								</div>
							</section>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>	
</div>
 						
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="mySmallModalLabel">Key Skills 2</h4>
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
	<script src="{{asset('public/js/mocktest/timer_ieltslistening2.js')}}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('input').attr('onChange','javascript:this.value=this.value.toUpperCase();');

			$('.modal').modal({backdrop: 'static', keyboard: false}) 

			function LoadModal() {
				$('.modal').modal('show');
			}

			var obj = document.createElement("audio");
			obj.src = "{{ asset('public/sound/mocktest2_lis.MP3') }}";
			obj.autoPlay = true;
			obj.preLoad = true;

			$('#Play').on('click', function() {
				obj.play();
				$('.modal').modal('hide');
				begintimer();
			})
		});
	</script>
@stop
	