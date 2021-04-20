@extends('layouts.mocktest_layout')

@section('content')
<style>
	.card-box:not(.noheight) {
		height: 650px;
		overflow: auto;
	}
	.wizard > .content {
		padding: 0;
	}
	.lineheight {
		line-height: 2;
	}
	#section1 p , #section2 p, #section3 p {
		letter-spacing: .15px;
		line-height: 1.6;
		font-size: 16px;
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
                    <h4 class="page-title">Reading</h4>
                </div>
            </div>
        </div> 

		<div class="row">
			<div class="col-md-12">
				<div class="card-box noheight border border-primary">
					<div class="row">
						<div class="col-md-6">
							<h4 class="header-title">Foundation for IELTS : Reading</h4>
							<h5><span id="dplay"></span></h5>
						</div>
						<div class="col-md-6 text-right">
							<div class="d-inline-flex flex-column align-items-center mr-3">
								<span class="font-weight-bold">Change highlighting color:</span>
								<div class="color-picker mt-0"></div>
							</div>
							<div class="d-inline-flex flex-column align-items-center">
								<span class="font-weight-bold">Remove all highlights:</span>
								<button class="btn btn-primary btn-sm" id="remove">Remove</button>
							</div>
						</div>
					</div>
					<!-- end row title and timer -->

					<form action="{{ route('ans_reading') }}" id="basic-form" method="post" class="mt-3" onsubmit="return confirm('Are you sure you want to finish?');">
						{{ csrf_field() }}
						<input type="hidden" name="std_id" value="{{session('std_id')}}">
            			<input type="hidden" name="classroom_id" value="{{ session('class_id') }}">
						<input type="hidden" name="set_exam" value="3">

						<div id="sandbox">
							<h3>SECTION 1</h3>
							<section>

								<div class="row">
									<div class="col-md-12">
										<h5 class="font-weight-bold">SECTION 1 : Questions 1-13</h5>
										<p>Read the following passage and answer Questions 1-13</p>
									</div>
									<div class="col-md-6">
										<div class="card-box widget-user" id="section1">
											<h6 class="font-weight-bold">Polar bears</h6>

											<p>
												With the recent news of global warming, and the statements that the polar bear is the first animal to become endangered because of global warming many people are wondering how many polar bears are still in existence. Researchers are still scratching their heads on that one. No one really knows how many polar bears there are because, first of all they are hard to count, and at times hard to find. However, it is estimated that there may be between 22,000 and 40,000 polar bears in the world. 
											</p>
											<p>
												The polar bear habitat encompasses the entire circumpolar Arctic region. The majority of them inhabit the Arctic and around the North Pole (not including polar bears that are captive). The countries that encompass the Arctic include Canada, Russia, Norway, Denmark (Greenland) and Alaska (United States). Polar bears thrive in these Arctic conditions because this is where their food sources are, and their bodies are made to handle the harsh Arctic conditions, even the long, cold, dark winter. The temperatures that the polar bears have to endure in the winter can range from minus 40°C to as cold as minus 90°C. The summer months can be much warmer for the polar bears with temperatures reaching as high as 25°C. Polar bears have to be able to handle these wide differences in temperature between the seasons. 
											</p>
											<p>											
												 Polar bears have adapted to be able to live in the water and on land. Unlike other bear species, the polar bear are excellent swimmers, and have been spotted more than 150 kilometres away from land or ice. Polar bears spend a great deal of their time in the Arctic Ocean hunting and searching for food. In the winter months they walk on the ice and look for seals, their preferred diet, and in the summer months they wait on the shore for them. Polar bears know how to use the climate and the land conditions to their benefit when hunting for seals. They will walk on an ice floe and look for hole or cracks in the ice. Since seals have to breathe at some time they wait there for a seal to come up for breath. There are also other areas of the Arctic Ocean that do not freeze, polynyas, which are also great areas for the polar bear to find seals. Polar bears can eat up to 100 kilos of meat at a time. They eat the skin and blubber first, then the meat. They need to eat an average of 1 seal every 4 to 5 days, but can go for 11 days without meat. 
											</p>
											<p>
												The polar bears whose habitat happens to be in the southern most part of the polar region, in Manitoba, Canada, on the Hudson Bay, find it difficult to follow the retreating ice and are forced to remain on the land. These polar bears live off fat deposits that they have gained from eating well in the winter. As with the polar bears in the northern region, when the ice pack forms again in the fall, the polar bears return to the frozen sea, to the ice packs. 
											</p>
											<p>
												Polar bears are the kings and queens of the north. They live in peace, searching for food and swimming in the ocean. Polar bears have no real enemies to speak of. They are the top of the food chain and, therefore, have no natural predators as such. Polar bears are occasionally hunted by people, but not very often. 
											</p>
											<p>
												Although polar bears have no natural predators, their main enemy is Man. People are the cause of climate change, and therefore are the cause of polar bears now being on the threatened species list, and soon the endangered species list. Among the threats for the polar bears climate change is on the top, along with chemicals and pollutants in the air. Even though there are no factories up in the far north, the polar bears still suffer the effects of pollution. Wind and rain will bring harmful chemicals to the polar region, as well as the ocean currents. One of the most harmful types of these chemicals is persistent organic pollutants (POP). These persistent organic pollutants do not go away. They accumulate in the food chain. If they start in a small animal say a small fish, then a bigger fish eats the smaller one. The bigger fish not only gets the nutrients and vitamins from the smaller fish, it also gets the POP chemicals. Then when that fish is eaten the chemicals do not go away. Instead, the chemical compound remains in the food chain. By the time the persistent organic chemicals work their way up to the top, to the polar bear, the concentration of them is so large that the toxic components in them are no match even for the large and strong polar bear. These chemicals not only have adverse affect on adult polar bears, but some cases have been found where young, baby polar bears are being born with both male and female sex organs. This may be a result of the adult polar bear's immune system beginning to fail.
											</p>
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="card-box">
											<p class="lead mb-0">Questions 1-5</p>
											<p>Find a number for each answer.</p>
											
											<div class="row">
												<div class="col-1 pr-0">1.</div>
												<div class="col-11 pl-0">
													The estimated maximum number of polar bears living in the wild.
													<p>Answer : <input type="text" name="q1" class="d-inline ml-2"></p>
												</div>

												<div class="col-1 pr-0">2.</div>
												<div class="col-11 pl-0">
													The maximum temperature in the Arctic in the summer months.
													<p>Answer : <input type="text" name="q2" class="d-inline ml-2"></p>
												</div>

												<div class="col-1 pr-0">3.</div>
												<div class="col-11 pl-0">
													The amount of meat a polar bear can eat at a time.
													<p>Answer : <input type="text" name="q3" class="d-inline ml-2"></p>
												</div>

												<div class="col-1 pr-0">4.</div>
												<div class="col-11 pl-0">
													The maximum recorded distance a polar bear has swum out to sea.
													<p>Answer : <input type="text" name="q4" class="d-inline ml-2"></p>
												</div>

												<div class="col-1 pr-0">5.</div>
												<div class="col-11 pl-0">
													How many days a polar bear in the northern region can survive without a seal.
													<p>Answer : <input type="text" name="q5" class="d-inline ml-2"></p>
												</div>
											</div>

											<hr>

											<p class="lead mb-0">Questions 6-10</p>
											<p>Decide if the following sentences are:</p>


											<div class="d-flex">
												<div class="d-flex flex-column mr-3">
													<b>TRUE</b>
													<b>FALSE</b>
													<b>NOT GIVEN</b>
												</div>
												<div class="d-flex flex-column">
													<span>If the statement agrees with the information in the passage.</span>
													<span>If the statement contradicts the information in the passage.</span>
													<span>If not enough information is given.</span>
												</div>
											</div>	
			
											<div class="row mt-3">
												<div class="col-1 pr-0">6.</div>
												<div class="col-11 pl-0">
													<p class="mb-1">The polar bear is the latest of a string of animals to become endangered by global warming.</p>
													<select name="q6" class="custom-select w-auto">
														<option value="">Select Answer</option>
														<option value="TRUE">TRUE</option>
														<option value="FALSE">FALSE</option>
														<option value="NOT GIVEN">NOT GIVEN</option>
													</select>
												</div>
												<div class="w-100 mt-2"></div>	
												<div class="col-1 pr-0">7.</div>
												<div class="col-11 pl-0">
													<p class="mb-1">There are more polar bears in captivity than in the wild.</p>
													<select name="q7" class="custom-select w-auto">
														<option value="">Select Answer</option>
														<option value="TRUE">TRUE</option>
														<option value="FALSE">FALSE</option>
														<option value="NOT GIVEN">NOT GIVEN</option>
													</select>
												</div>
												<div class="w-100 mt-2"></div>	
												<div class="col-1 pr-0">8.</div>
												<div class="col-11 pl-0">
													<p class="mb-1">In some parts of the Arctic, polar bears do not eat during the summer months.</p>
													<select name="q8" class="custom-select w-auto">
														<option value="">Select Answer</option>
														<option value="TRUE">TRUE</option>
														<option value="FALSE">FALSE</option>
														<option value="NOT GIVEN">NOT GIVEN</option>
													</select>
												</div>
												<div class="w-100 mt-2"></div>	
												<div class="col-1 pr-0">9.</div>
												<div class="col-11 pl-0">
													<p class="mb-1">Seals can survive under water without coming up for air.</p>
													<select name="q9" class="custom-select w-auto">
														<option value="">Select Answer</option>
														<option value="TRUE">TRUE</option>
														<option value="FALSE">FALSE</option>
														<option value="NOT GIVEN">NOT GIVEN</option>
													</select>
												</div>
												<div class="w-100 mt-2"></div>	
												<div class="col-1 pr-0">10.</div>
												<div class="col-11 pl-0">
													<p class="mb-1">People who live in the Arctic tend to hunt polar bears when there are not enough seals to hunt.</p>
													<select name="q10" class="custom-select w-auto">
														<option value="">Select Answer</option>
														<option value="TRUE">TRUE</option>
														<option value="FALSE">FALSE</option>
														<option value="NOT GIVEN">NOT GIVEN</option>
													</select>
												</div>
											</div>

											<hr>

											<p class="lead mb-0">Questions 11-13</p>
											<p class="mb-0">Select the best answer from the given options.</p>

											<div class="row mt-3">
												<div class="col-1 pr-0">11.</div>
												<div class="col-11 pl-0">
													<p>In what way can Man be considered to be the polar bear’s main threat?</p>
													<div class="custom-control custom-radio">
	                                                    <input type="radio" id="q11-1" name="q11" class="custom-control-input" value="A">
	                                                    <label class="custom-control-label mt-0" for="q11-1">A. People hunt polar bears for food.</label>
                                                	</div>
                                                	<div class="custom-control custom-radio">
	                                                    <input type="radio" id="q11-2" name="q11" class="custom-control-input" value="B">
	                                                    <label class="custom-control-label mt-0" for="q11-2">B. People hunt the seals and leave the bears without enough food.</label>
                                                	</div>
                                                	<div class="custom-control custom-radio">
	                                                    <input type="radio" id="q11-3" name="q11" class="custom-control-input" value="C">
	                                                    <label class="custom-control-label mt-0" for="q11-3">C. Human activities are putting the bears’ survival at risk.</label>
                                                	</div>
                                                	<div class="custom-control custom-radio">
	                                                    <input type="radio" id="q11-4" name="q11" class="custom-control-input" value="D">
	                                                    <label class="custom-control-label mt-0" for="q11-4">D. Humans are building factories in the bears’ natural habitat.</label>
                                                	</div>
												</div>
												<div class="w-100 mt-2"></div>
												<div class="col-1 pr-0">12.</div>
												<div class="col-11 pl-0">
													<p>Why are persistent organic pollutants such a problem?</p>
													<div class="custom-control custom-radio">
	                                                    <input type="radio" id="q11-1" name="q12" class="custom-control-input" value="A">
	                                                    <label class="custom-control-label mt-0" for="q11-1">A. They kill smaller animals which bears like to eat.</label>
                                                	</div>
                                                	<div class="custom-control custom-radio">
	                                                    <input type="radio" id="q12-2" name="q12" class="custom-control-input" value="B">
	                                                    <label class="custom-control-label mt-0" for="q12-2">B. They reduce the amount of nutrients and vitamins in an animal.</label>
                                                	</div>
                                                	<div class="custom-control custom-radio">
	                                                    <input type="radio" id="q12-3" name="q12" class="custom-control-input" value="C">
	                                                    <label class="custom-control-label mt-0" for="q12-3">C. They are no match for a strong polar bear.</label>
                                                	</div>
                                                	<div class="custom-control custom-radio">
	                                                    <input type="radio" id="q12-4" name="q12" class="custom-control-input" value="D">
	                                                    <label class="custom-control-label mt-0" for="q12-4">D. They accumulate in strength towards the top of the food chain.</label>
                                                	</div>
												</div>

												<div class="w-100 mt-2"></div>
												<div class="col-1 pr-0">13.</div>
												<div class="col-11 pl-0">
													<p>What effect is this having on baby polar bears?</p>
													<div class="custom-control custom-radio">
	                                                    <input type="radio" id="q13-1" name="q13" class="custom-control-input" value="A">
	                                                    <label class="custom-control-label mt-0" for="q13-1">A. They are dying before they are born..</label>
                                                	</div>
                                                	<div class="custom-control custom-radio">
	                                                    <input type="radio" id="q13-2" name="q13" class="custom-control-input" value="B">
	                                                    <label class="custom-control-label mt-0" for="q13-2">B. They are being born with physical abnormalities.</label>
                                                	</div>
                                                	<div class="custom-control custom-radio">
	                                                    <input type="radio" id="q13-3" name="q13" class="custom-control-input" value="C">
	                                                    <label class="custom-control-label mt-0" for="q13-3">C. Their immune systems are damaged.</label>
                                                	</div>
                                                	<div class="custom-control custom-radio">
	                                                    <input type="radio" id="q13-4" name="q13" class="custom-control-input" value="D">
	                                                    <label class="custom-control-label mt-0" for="q13-4">D. There are more male baby bears being born than female babies. </label>
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
									<div class="col-md-12">
										<h5 class="font-weight-bold">SECTION 2 : Questions 14-27</h5>
										<p>Read the following passage and then answer Questions 14 to 27</p>
									</div>

									<div class="col-md-6">
										<div class="card-box" id="section2">	
											<h6 class="font-weight-bold">Bilingual education</h6>

											<div class="d-flex">
												<p class="mr-2"><b>A.</b></p>
												<p>Passions run high in the debate on bilingual education. Unfortunately, political static has often blocked the lines of communication between researchers and educators. Such confusion persists over both the phenomenon of bilingualism itself and the goals and methods of bilingual education. Until the terms of the debate are clarified, the political debate will continue to be dominated by political rhetoric and folk notions.</p>
											</div>

											<div class="d-flex">
												<p class="mr-2"><b>B.</b></p>
												<p>Contrary to popular perceptions, the term bilingual education encompasses a broad range of programs. To begin with, there is a great variety in the extent to which the first language (L1) is used in the classroom. In some cases, the first few years of instruction are conducted in the native language with English introduced only gradually. In other cases, language-minority / limited-English proficient (LM / LEP) children are placed immediately in all English classrooms (an approach usuaIly called submersion). This tremendous variation in programs can be witnessed in a study done by Development Associates for the U.S. Department of Education, which classified programs for LM / LEP students in the first grade by the amount of time they used the first language. The results show that ninety-three percent of LM / LEP first-graders receive at least a substantial proportion of their instruction in English; 26 percent receive only English instruction.</p>
											</div>

											<div class="d-flex">
												<p class="mr-2"><b>C.</b></p>
												<p>While these programs differ substantially in the role of the first language, they differ significantly less in terms of their goals. In the Development Associates study, every district surveyed listed as a goal the development of the students’ English to the level of participation in all-English classrooms. Ninety-one percent listed as a goal the development of other academic skills concurrently with the students’ language development. Only fifteen percent listed as a goal the maintenance of the students’ first language.</p>
											</div>

											<div class="d-flex">
												<p class="mr-2"><b>D.</b></p>
												<p>In addition to these broad programmatic variations, there are great differences in teaching methodology. McLaughlin discusses the range of second-language instructional practices used with non-English-speaking students. English as a Second Language (ESL) programs often run as a support for submersion programs; they traditionally emphasize dialogues and drills on grammatical structures (although most teachers do expand on  these methods). Following the example of certain fairly successful Canadian efforts to teach French to children from the majority English-speaking backgrounds, through a total immersion approach, some programs for language- minority students in the U.S. have developed their own version.</p>
											</div>

											<div class="d-flex">
												<p class="mr-2"><b>E.</b></p>
												<p>
													Like submersion, immersion programs give instruction only in English. An immersion classroom, however, is composed of only LM/LEP students. Unlike the Canadian programs that introduce instruction in the native language after several years of Page immersion, however, the U.S. immersion programs do not include a native language component.  
												</p>
											</div>

											<div class="d-flex">
												<p class="mr-2"><b>F.</b></p>
												<p>
													Recently, researchers and educators have begun to emphasize individualized instruction, in view of the heterogeneous array of English levels in the typical bilingual classroom. Some teachers have experimented with a total physical response technique, designed to develop English comprehension ability through physical activity. Others have tried the natural approach, trying to create a non-pressured environment, to help students “absorb” English much as they absorbed their first language. Still others have taken a functional approach, helping students to develop specifically those English skills that are necessary for success in an academic setting.   
												</p>
											</div>

											<div class="d-flex">
												<p class="mr-2"><b>G.</b></p>
												<p>
													Although some small attempts have been made to evaluate these methodologies in general, no systematic review has embraced the entire range of programmatic or instructional variations. Several attempts have been made to evaluate the effectiveness of bilingual education programs, comparing them in most cases to submersion programs (possibly with a few hours of pull-out ESL). Most notable are the often-cited large-scale study by the American Institutes for Research and Baker and de Kanter’s synthesis of smaller evaluation studies. Many researchers have criticized these studies, which have generally concluded that bilingual programs are no more effective in promoting English language and other school skills than alternative programs. These evaluations typically compared bilingual programs with submersion programs (which included, perhaps, a few hours a week of ESL help). As we have already seen, however, an extreme diversity of instructional methodology exists within programs that are labeled “bilingual.”    
												</p>
											</div>

											<div class="d-flex">
												<p class="mr-2"><b>H.</b></p>
												<p>
													Some classrooms in “bilingual programs” looked very similar to some “submersion” classrooms. Without actual classroom observation and description of the instructional characteristics of the various programs, we do not really know what was being compared with what. Quite possibly, the negative results reflect weaknesses in the studies themselves, rather than in the bilingual education programs they sought to evaluate.   
												</p>
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="card-box">
											<p class="lead mb-0">Questions 14-20</p>
											<p class="mb-0">Match the headings with the paragraphs.</p>
											<p>Select a letter <b>A-H</b></p>
											
											<div class="row">
												<div class="col-1">
													<span class="mr-2">14.</span>
												</div>
												<div class="col-11">
													<p>Different programs, similar goals.</p>
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
													</select>
												</div>

												<div class="w-100 mt-3"></div>
												<div class="col-1">
													<span class="mr-2">15.</span>
												</div>
												<div class="col-11">
													<p>Criticism of research studies.</p>
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
													</select>
												</div>

												<div class="w-100 mt-3"></div>
												<div class="col-1">
													<span class="mr-2">16.</span>
												</div>
												<div class="col-11">
													<p>A controversial issue. </p>
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
													</select>
												</div>

												<div class="w-100 mt-3"></div>
												<div class="col-1">
													<span class="mr-2">17.</span>
												</div>
												<div class="col-11">
													<p>A variety of teaching approaches in the classroom.</p>
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
													</select>
												</div>

												<div class="w-100 mt-3"></div>
												<div class="col-1">
													<span class="mr-2">18.</span>
												</div>
												<div class="col-11">
													<p>Varying use of L1 in bilingual classrooms. </p>
													<select name="q18" class="custom-select w-auto">
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

												<div class="w-100 mt-3"></div>
												<div class="col-1">
													<span class="mr-2">19.</span>
												</div>
												<div class="col-11">
													<p>Similarities and differences of 2 distinct programs. </p>
													<select name="q19" class="custom-select w-auto">
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

												<div class="w-100 mt-3"></div>
												<div class="col-1">
													<span class="mr-2">20.</span>
												</div>
												<div class="col-11">
													<p>Inconclusive outcomes. </p>
													<select name="q20" class="custom-select w-auto">
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

											<hr>

											<p class="lead mb-0">Questions 21-24</p>

											<div class="d-flex mt-3">
												<div class="d-flex flex-column mr-2">
												<b>TRUE</b>
												<b>FALSE</b>
												<b>NOT GIVEN</b>
												</div>
												<div class="d-flex flex-column">
													<span>If the statement agrees with the information in the passage.</span>
													<span>If the statement contradicts the information in the passage. </span>
													<span>If not enough information is given. </span>
												</div>
											</div>

											<div class="row mt-3">
												<div class="col-1">
													<span>21.</span>
												</div>
												<div class="col-11">
													<p>In general, researchers and educators agree on the principles of bilingual education.</p>
													<select name="q21" class="custom-select w-auto">
														<option value="">Select Answer</option>
														<option value="TRUE">TRUE</option>	
														<option value="FALSE">FALSE</option>	
														<option value="NOT GIVEN">NOT GIVEN</option>	
													</select>
												</div>
												<div class="w-100 mt-2"></div>
												<div class="col-1">
													<span>22.</span>
												</div>
												<div class="col-11">
													<p>Most people believe that the term ‘bilingual education’ has a limited definition.</p>
													<select name="q22" class="custom-select w-auto">
														<option value="">Select Answer</option>
														<option value="TRUE">TRUE</option>	
														<option value="FALSE">FALSE</option>	
														<option value="NOT GIVEN">NOT GIVEN</option>	
													</select>
												</div>

												<div class="w-100 mt-2"></div>
												<div class="col-1">
													<span>23.</span>
												</div>
												<div class="col-11">
													<p>According to the study carried out by the US Department of Education, most students were satisfied with the level of instruction provided. </p>
													<select name="q23" class="custom-select w-auto">
														<option value="">Select Answer</option>
														<option value="TRUE">TRUE</option>	
														<option value="FALSE">FALSE</option>	
														<option value="NOT GIVEN">NOT GIVEN</option>	
													</select>
												</div>

												<div class="w-100 mt-2"></div>
												<div class="col-1">
													<span>24.</span>
												</div>
												<div class="col-11">
													<p>Bilingual programs use the same classrooms as submersion programs.</p>
													<select name="q24" class="custom-select w-auto">
														<option value="">Select Answer</option>
														<option value="TRUE">TRUE</option>	
														<option value="FALSE">FALSE</option>	
														<option value="NOT GIVEN">NOT GIVEN</option>	
													</select>
												</div>
											</div>

											<hr>

											<p class="lead mb-0">Questions 25-27</p>
											<p class="mb-0">Choose the correct answer from the given options.</p>
											<p>For Questions 38 to 40 write a letter, <b>A, B, C</b> or <b>D</b></p>

											<div class="row mt-3">
												<div class="col-1">25.</div>
												<div class="col-11 pl-0">
													<p>What is the main difference between Canadian and US immersion programs?</p>
													<div class="custom-control custom-radio">
														<input type="radio" name="q25" id="q25-1" class="custom-control-input" value="A">
														<label for="q25-1" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">A.</span>
																<span>The Canadian programs include an ESL component while the US programs do not.</span>
															</span>
														</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q25" id="q25-2" class="custom-control-input" value="B">
														<label for="q25-2" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">B.</span>
																<span>The Canadian programs give instruction only in English while the US programs do not. </span>
															</span>
														</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q25" id="q25-3" class="custom-control-input" value="C">
														<label for="q25-3" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">C.</span>
																<span>The Canadian programs include instruction in L1 after a few years while the US programs do not. </span>
															</span>
														</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q25" id="q25-4" class="custom-control-input" value="D">
														<label for="q25-4" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">D.</span>
																<span>The Canadian classroom is composed only of LM / LEP students while the US classroom is not. </span>
															</span>
														</label>
													</div>
												</div>

												<div class="col-1">26.</div>
												<div class="col-11 pl-0">
													<p>Why do some teachers use a ‘functional approach’? </p>
													<div class="custom-control custom-radio">
														<input type="radio" name="q26" id="q26-1" class="custom-control-input" value="A">
														<label for="q26-1" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">A.</span>
																<span>This approach improves language ability through movement around the classroom.</span>
															</span>
														</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q26" id="q26-2" class="custom-control-input" value="B">
														<label for="q26-2" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">B.</span>
																<span>This approach takes away unnecessary stress in the language learning environment. </span>
															</span>
														</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q26" id="q26-3" class="custom-control-input" value="C">
														<label for="q26-3" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">C.</span>
																<span>This approach helps learners absorb the target language in the same way as they learnt their first language.</span>
															</span>
														</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q26" id="q26-4" class="custom-control-input" value="D">
														<label for="q26-4" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">D.</span>
																<span>This approach allows learners to focus specifically on those skills necessary for them to succeed in an academic environment.</span>
															</span>
														</label>
													</div>
												</div>

												<div class="col-1">27.</div>
												<div class="col-11 pl-0">
													<p>Which of the following best describes bilingual programs in North America? </p>
													<div class="custom-control custom-radio">
														<input type="radio" name="q27" id="q27-1" class="custom-control-input" value="A">
														<label for="q27-1" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">A.</span>
																<span>These programs are generally more successful in developing English language skills than other programs. </span>
															</span>
														</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q27" id="q27-2" class="custom-control-input" value="B">
														<label for="q27-2" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">B.</span>
																<span>A wide variation of instructional methods is used on these programs. </span>
															</span>
														</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q27" id="q27-3" class="custom-control-input" value="C">
														<label for="q27-3" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">C.</span>
																<span>There is a widespread belief that these programs have failed to develop learners’ language skills. </span>
															</span>
														</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q27" id="q27-4" class="custom-control-input" value="D">
														<label for="q27-4" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">D.</span>
																<span>These programs tend to be more successful when a few hours of ESL instruction are included. </span>
															</span>
														</label>
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
								<div class="row">
									<div class="col-md-12">
										<h5 class="font-weight-bold">SECTION 3 - Questions 28-40</h5>
										<p>are based on the passage below.</p>
									</div>
									<div class="col-md-6">
										<div class="card-box" id="section3">
											<h6 class="font-weight-bold">Marianne’s Visions </h6>

											<p><b class="pr-2">A</b> Marianne North was an artist who travelled the world and visited Sarawak in the late 19th century, to paint plants and flowers as part of a global record of flora — a project she dedicated half her life to.  Her work, consisting of 832 paintings at the Marianne North Gallery at the Royal Botanic Gardens, Kew in London, is a unique collection and a fascinating historical curiosity.</p>

											<p><b class="pr-2">B</b> Being a solo world traveller was very unusual for a middle-aged 19th century English woman, but Marianne North was no ordinary woman.  Nor has she left an ordinary legacy.  For 15 years, between 1871 and 1886, she toured the Americas, Australia, Africa and Asia, visited Borneo twice and devoted herself to painting the world’s exotic plants and flowers in their natural settings.  It became a quest and a life’s work, in an age and society when the horizons of most English women were determined by the home, the family and the restrictive notions of social respectability that did not include adventure. </p>

											<p><b class="pr-2">C</b> North designed the building herself, in the style of an ancient Greek temple, and the pictures are still mounted floor-to-ceiling where she first hung them in 1882.  The effect is of a huge botanical postage-stamp album, a blaze of dazzling colours. </p>

											<p><b class="pr-2">D</b> The collection is a testament to the peculiar life of an eccentric.  But in 1882, with photography only in its infancy and recreational travel the preserve of the privileged few, the gallery gave tens of thousand of visitors their first chance to appreciate exotic flora in ‘living’ colour.  In this way, Londoners were introduced to the durian, rambutan, nipah palm and pitcher plants.  For the first time those who had read of the ‘mystic east’ could put colourful images to writers’ words.</p>

											<p><b class="pr-2">E</b> All this colour and beauty came about through grief.  North never married and devoted her life to caring for her father.  When he died, she was nearly 40 years old, reasonably wealthy and heartbroken.  To assuage her grief she travelled and painted. </p>

											<p><b class="pr-2">F</b> Her journeys brought her to Kuching, the capital of Sarawak on the north coast of Borneo, a country where until relatively recently, head-hunting had been common. She stayed in the Astana (palace) as a guest of the White Raja.  She was also an avid diarist, and wrote in a laconic style that made light of the difficulties of travelling alone in some of the world’s wildest corners. </p>

											<p><b class="pr-2">G</b> Most of what she wrote is a straightforward, businesslike record of what she saw and discovered.  On several trips to the interior of Sarawak, she experienced the dangers and discomfort of the rainforest, but thought only of its beauty and diversity.  At a loss for where to start, she first concentrated on painting the two forms of flora still strongly associated in the visitor’s mind with Borneo — orchids and pitcher plants. </p>

											<p><b class="pr-2">H</b> Eventually, relentless travelling ruined her health.  In 1883, in the Seychelles, she had what appears to have been a nervous breakdown.  She made one more major trip to Chile but by then travel had become a self-imposed duty.  Her quest had become a chore rather than a delight.  Weak and ill, she retired to England in 1886 and died of a liver disorder four years later, at the age of sixty.</p>

											<p><b class="pr-2">I</b> Marianne North lived in voluntary exile from a Victorian society which was convention-bound and, for a free-spirited woman, restrictive and repressive.  She hated the hypocrisy of so-called ‘polite’ society, and took pleasure in meeting people who were considered unorthodox or outrageous by the standards of the day.  When a diplomatic mission came to visit her in Kuching, she fled into the jungle to paint, preferring leeches and humidity to the inevitable rounds of gossip and socializing. </p>

											<p><b class="pr-2">J</b> Brought up in an intellectual environment, she was self-taught in both art and botany but good enough at the latter to have five species of plants named after her (including the pitcher plant nepenthes northiana).  Although her paintings are colourful and vibrant, she was not a great artist in the accepted sense of the term.  But to view her collected works on their artistic merit alone is to miss the point.  Rather, they serve as a visible record of the exceptional life of a woman born ahead of her time, and who refused to conform to the stultifying norms of Victorian English society.  Her gallery occupies two rooms in a small building at Kew, but to visit it is to appreciate her global vision.  It stands as a tribute to a woman of remarkable energy, character and dedication.</p>
										</div>
									</div>

									<div class="col-md-6">
										<div class="card-box">
											<p class="lead mb-0">Questions 28-32</p>
											<p>Choose the best answer for each question from the given options.</p>

											<div class="row">
												<div class="col-1 pr-0"><b>28.</b></div>
												<div class="col-11 pl-0">
													<p><b>In what way was Marianne North unlike most 19th century Englishwomen? </b></p>
													<div class="custom-control custom-radio">
														<input type="radio" name="q28" id="q28-1" class="custom-control-input" value="A">
														<label for="q28-1" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">A.</span>
																<span>She painted many pictures of flowers, while other women preferred pictures of people.</span>
															</span>
														</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q28" id="q28-2" class="custom-control-input" value="B">
														<label for="q28-2" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">B.</span>
																<span>She travelled on her own, whereas most women travelled in groups. </span>
															</span>
														</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q28" id="q28-3" class="custom-control-input" value="C">
														<label for="q28-3" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">C.</span>
																<span>She travelled in a group, whereas most women travelled on their own.</span>
															</span>
														</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q28" id="q28-4" class="custom-control-input" value="D">
														<label for="q28-4" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">D.</span>
																<span>She did not stay at home and have children like most other women.</span>
															</span>
														</label>
													</div>
												</div>

												<div class="col-1 pr-0"><b>29.</b></div>
												<div class="col-11 pl-0">
													<p><b>What is Marianne North’s ‘legacy’? </b></p>
													<div class="custom-control custom-radio">
														<input type="radio" name="q29" id="q29-1" class="custom-control-input" value="A">
														<label for="q29-1" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">A.</span>
																<span>New ideas on travel. </span>
															</span>
														</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q29" id="q29-2" class="custom-control-input" value="B">
														<label for="q29-2" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">B.</span>
																<span>A breaking of tradition among English women. </span>
															</span>
														</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q29" id="q29-3" class="custom-control-input" value="C">
														<label for="q29-3" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">C.</span>
																<span>A large collection of paintings of flowers. </span>
															</span>
														</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q29" id="q29-4" class="custom-control-input" value="D">
														<label for="q29-4" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">D.</span>
																<span>An interest in Asian flowers in England. </span>
															</span>
														</label>
													</div>
												</div>

												<div class="col-1 pr-0"><b>30.</b></div>
												<div class="col-11 pl-0">
													<p><b>Why, according to the text, would no one in London have seen durians, rambutans and nipah palms before? </b></p>
													<div class="custom-control custom-radio">
														<input type="radio" name="q30" id="q30-1" class="custom-control-input" value="A">
														<label for="q30-1" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">A.</span>
																<span>People were not generally interested in travelling to countries where these plants grew. </span>
															</span>
														</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q30" id="q30-2" class="custom-control-input" value="B">
														<label for="q30-2" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">B.</span>
																<span>There was no refrigeration to transport such plants and fruit to Europe.  </span>
															</span>
														</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q30" id="q30-3" class="custom-control-input" value="C">
														<label for="q30-3" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">C.</span>
																<span>Few people could afford to travel to S E Asia and photographs were very rare. </span>
															</span>
														</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q30" id="q30-4" class="custom-control-input" value="D">
														<label for="q30-4" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">D.</span>
																<span>English people preferred to read about these exotic plants in books. </span>
															</span>
														</label>
													</div>
												</div>

												<div class="col-1 pr-0"><b>31.</b></div>
												<div class="col-11 pl-0">
													<p><b>North’s paintings ‘came about through grief’ because </b></p>
													<div class="custom-control custom-radio">
														<input type="radio" name="q31" id="q31-1" class="custom-control-input" value="A">
														<label for="q31-1" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">A.</span>
																<span>She was sad because she could not paint well in England. </span>
															</span>
														</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q31" id="q31-2" class="custom-control-input" value="B">
														<label for="q31-2" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">B.</span>
																<span>She was sad because she had no husband or children.  </span>
															</span>
														</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q31" id="q31-3" class="custom-control-input" value="C">
														<label for="q31-3" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">C.</span>
																<span>She travelled and painted to take away the sadness of her father’s death. </span>
															</span>
														</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q31" id="q31-4" class="custom-control-input" value="D">
														<label for="q31-4" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">D.</span>
																<span>She felt guilty for not looking after her father. </span>
															</span>
														</label>
													</div>
												</div>

												<div class="col-1 pr-0"><b>32.</b></div>
												<div class="col-11 pl-0">
													<p><b>How do we know about where North travelled and what she thought?</b></p>
													<div class="custom-control custom-radio">
														<input type="radio" name="q32" id="q32-1" class="custom-control-input" value="A">
														<label for="q32-1" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">A.</span>
																<span>She wrote a book about her experiences. </span>
															</span>
														</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q32" id="q32-2" class="custom-control-input" value="B">
														<label for="q32-2" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">B.</span>
																<span>She wrote a daily account of her travels. </span>
															</span>
														</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q32" id="q32-3" class="custom-control-input" value="C">
														<label for="q32-3" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">C.</span>
																<span>She wrote articles for newspapers in England. </span>
															</span>
														</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q32" id="q32-4" class="custom-control-input" value="D">
														<label for="q32-4" class="custom-control-label mt-0">
															<span class="d-flex">
																<span class="mr-2">D.</span>
																<span>Her friend wrote a book about her travels. </span>
															</span>
														</label>
													</div>
												</div>
											</div>
											<hr>
											<p class="lead mb-0">Questions 33-37</p>
											<p class="mb-0">Identify the paragraphs which contain the following information.</p>
											<p>Select the letters <b>A-J</b></p>

											<table class="table table-bordered table-sm">
												<tr>
													<th></th>
													<th></th>
													<th>Paragraph</th>
												</tr>
												<tr>
													<td>33</td>
													<td>A number of places around the world which she visited.</td>
													<td>
														<select name="q33" class="custom-select">
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
															<option value="J">J</option>
														</select>
													</td>
												</tr>
												<tr>
													<td>34</td>
													<td>An evaluation of Marianne North’s painting skills.</td>
													<td>
														<select name="q34" class="custom-select">
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
															<option value="J">J</option>
														</select>
													</td>
												</tr>
												<tr>
													<td>35 </td>
													<td>A negative impact of her travels. </td>
													<td>
														<select name="q35" class="custom-select">
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
															<option value="J">J</option>
														</select>
													</td>
												</tr>
												<tr>
													<td>36</td>
													<td>The time when she stayed in a ruler’s palace. </td>
													<td>
														<select name="q36" class="custom-select">
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
															<option value="J">J</option>
														</select>
													</td>
												</tr>
												<tr>
													<td>37</td>
													<td>Two plants which are generally associated with the rainforest. </td>
													<td>
														<select name="q37" class="custom-select">
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
															<option value="J">J</option>
														</select>
													</td>
												</tr>
											</table>

											<hr>	

											<p class="lead mb-0">Questions 38-40</p>
											<p class="mb-0">Complete the following passage using words from the box</p>
											<p>For Questions 38-40, write the letters A - H</p>

											<div class="container">
												<div class="row">
													<div class="col-12 lineheight">
														<p class="d-inline">Brought up in an intellectual environment, she taught herself all about art and botany. She </p>
														<p class="d-inline">
															excelled in <b>38</b> 
															<select name="q38" class="custom-select d-inline w-auto">
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
															to such an extent that she had five species of plants named after 
														</p>
														<p class="d-inline">
															her.  Although her paintings are colourful and vibrant, she was not a great artist in the 
														</p>
														<p class="d-inline">
															accepted sense of the term.  But to <b>39</b>
															<select name="q39" class="custom-select d-inline w-auto">
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
															her work in terms of the art alone is to 
														</p>
														<p class="d-inline">
															miss the point.  Rather, it serves as a visible record of the extraordinary life of a woman 
														</p>
														<p class="d-inline">
															who refused to conform to the <b>40</b>
															<select name="q40" class="custom-select d-inline w-auto">
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
															of Victorian English society. 
														</p>
													</div>

													<div class="row mt-3 border justify-content-center">
														<div class="col-4">a. displayed</div>
														<div class="col-4">b. restrictions</div>
														<div class="col-4">c. monument</div>
														<div class="col-4">d. art</div>
														<div class="col-4">e. botany</div>
														<div class="col-4">f. floral</div>
														<div class="col-4">g. paint</div>
														<div class="col-8">h. evaluate</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<!-- end section 3 -->
						</div>
						<!-- end div tab -->
					</form>
					<!-- end form -->
				</div>
				<!-- end card -->
			</div>
			<!-- end col-md-12 -->
		</div>
		<!-- end row -->
	</div>
	<!-- end container fluid -->
</div>
<!-- end content -->
@endsection

@section('javascript')
<script src="{{ asset('public/js/mocktest/timer_ieltsreading.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('public/assets/assets/ColorPicker.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/assets/rainbow-custom.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/assets/src/TextHighlighter.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/assets/src/TextHighlighter.min.js')}}"></script>
<script type="text/javascript">
	document.querySelector('body').addEventListener('load', begintimer());
	$(function() {

		var removeBtn = document.getElementById('remove');
        var sandbox = document.getElementById('sandbox');
        var colors = new ColorPicker(document.querySelector('.color-picker'));
        var hltr = new TextHighlighter(sandbox);

        colors.onColorChange(function (color) {
            hltr.setColor(color);
        });

        removeBtn.addEventListener('click', function () {
            hltr.removeHighlights();
        });

		$('input[type="text"]').attr({
			'autocomplete': 'none',
			'onChange': 'this.value = this.value.toUpperCase();'
		});
	});
</script>
@stop