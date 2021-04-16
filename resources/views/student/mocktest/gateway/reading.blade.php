@extends('layouts.mocktest_layout')

@section('content')

<style>
	.card-box:not(.noheight) {
		height: 650px;
		overflow: auto;
	}
	.fix-table tr td:last-child {
		width: 50px;
	}
	tr.bg-light td:last-child{
		width: 120px;
	}
	.border-3 {
		border-width: 3px !important;
	}
	#section1 p , #section2 p, #section3 p {
		letter-spacing: .15px;
		line-height: 1.6;
		font-size: 16px;
	}
	.wizard .content{
		padding:20px 0;
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
				<div class="card-box noheight">
					<div class="row">
						<div class="col-6">
							<h4 class="header-title">Gateway To IELTS : Reading</h4>
							<h5><span id="dplay"></span></h5>
						</div>
						<div class="col-6 text-right">
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
					<!-- end row titile and timer -->

					<form action="{{ route('ans_reading') }}" method="POST" id="basic-form" class="mt-3" onsubmit="return confirm('Are you sure you want to finish?')" autocomplete="off">
						{{ csrf_field() }}

						<input type="hidden" name="std_id" value="{{session('std_id')}}">
            			<input type="hidden" name="classroom_id" value="{{ session('class_id') }}">
						<input type="hidden" name="set_exam" value="7">
						
						<div id="sandbox">
							<h3>PASSAGE 1</h3>
							<section>
								<div class="row">
									<div class="col-6">
										<div class="card-box pl-0" id="section1">
											<h5 class="font-weight-bold">Questions 1-13</h5>
											<p>Read the following passage and answer  1-13 </p>

											<h5 class="font-weight-bold">The Dreamtime</h5>

											<div class="d-flex text-justify">
												<p>&nbsp According to Australian Aboriginal belief, all life as we know it today, human, bird, animal and fish, is part of one unchanging, related network whose origin goes back to what the Aborigines refer to as the Dreamtime.</p>
											</div>

											<div class="d-flex text-justify">
												<p>&nbsp Many years ago, the world was just a huge flat disc moving around in space.  On this disc, there were no mountains and no rivers, no trees waving their branches in the wind. There was no wind, no bird calls, nothing to break the dead silence. No life existed on the surface of this disc, but beneath the surface there were mysterious creatures moving around. Then, over a long period of time, these mysterious beings started to appear on the surface of the disc. Some of them broke through the surface of the plain, pushing the earth up as they came. Others came down from the sky, or from distant places across the sea. They took the shape of large animals or birds, but they behaved like human beings. They hunted, they fought each other, they lit fires and went on long journeys. The main difference between these creatures and humans was that wherever they stopped, wherever they camped, whatever event took place in their lives, they left behind them features of the landscape which still remain today.</p>
											</div>

											<div class="d-flex text-justify">
												<p>This was the creation time.</p>
											</div>

											<div class="d-flex text-justify">
												<p>&nbsp As these creatures hunted for food and dug for water, they created the great mountain ranges, the great rivers, the trees, and they brought night and day to the earth. These creatures made the whole world that the Aboriginal people could see. They sent animals wandering over the plain and birds flying in the sky. They introduced fire to the world.</p>
											</div>

											<div class="d-flex text-justify">
												<p>&nbsp Then one day, when the period of creation was over and the world was a beautiful place, man wandered onto the earth. The mysterious creatures returned to their Eternal Dreamtime, taking up places in rocks, trees, waterholes and also in the unborn spirits of all the animals and of the Aboriginal people. Therefore, the spirit of the Aborigine exists even before birth. It leaves the rock, tree or waterhole to enter the body of a woman, where it takes on human form. Since these spirits could also take the form of animals or plants, each human is brought into a relationship with an animal or plant species (called the 'totem') through their own spirit. An individual Aborigine will not normally injure or eat this totem creature since it provides a means of communication with the Ancestors.</p>
											</div>

											<div class="d-flex text-justify">
												<p>&nbsp The Dreamtime is not only the ancient time of creation as happened many years ago. It continues as the 'Dreaming' in the spiritual lives of Aboriginal people today.  Ceremonies which involve dancing, singing and wearing costumes also help to maintain this communication with the Ancestors in order to guarantee the continuation of normal, everyday life: the seasons, the weather, enough food and water, and the prevention of disasters.</p>
											</div>

											<div class="d-flex text-justify">
												<p>&nbsp Art is also closely linked to such beliefs. For example, the Wandjina paintings in the Kimberleys in Western Australia, are large drawings on rock. They are 5 metres in length and symbolize rain, thunder and lightning (the blood of life). The paintings have been kept in good condition ('alive') for thousands of years. If the Aborigines did not do this, then the paintings would disappear, taking with them the rain and fertility.</p>
											</div>

											<div class="d-flex text-justify">
												<p>&nbsp Rock drawings also had a different function. Aborigines would draw the outline of an animal they wanted to hunt. Then they would beat the drawing with bushes in order to chase out the spirit, which would then take on animal form. The Aborigines could then capture the animal for food. In addition, by drawing the outline of an enemy, the Aborigine could inflict pain or even death on the enemy by chanting a special song. But not all art is linked to religion or magic. Some drawings were specifically for decoration; others were made for record-keeping or for story-telling. However, many of the drawings did not have a clear form and it was difficult to understand what the drawing was meant to be. This is because it was not the image in the drawing which was important so much as the meaning behind the drawing.</p>
											</div>

										</div>
									</div>

									<div class="col-6">
										<div class="card-box">
											<p class="mb-0 font-weight-bold">Questions 1-5</p>
											<p class="mb-0">Decide if the following sentences are agree with the information given in Reading Passage 1?</p>
											<p class="mt-1">For Questions 1-5 choose</p>
											<div class="d-flex justify-content-center">
												<div class="d-flex flex-column mr-3">
													<span><b>TRUE</b></span>
													<span><b>FALSE</b></span>
													<span><b>NOT GIVEN</b></span>
												</div>
												<div class="d-flex flex-column">
													<span>If the statement agrees with the information in the passage.</span>
													<span>If the statement contradicts the information in the passage.</span>
													<span>If not enough information is given.</span>
												</div>
											</div>

											<div class="row mt-3">
												<div class="col-1">1.</div>
												<div class="col-11">
													<p class="mb-1">Before the Dreamtime there was no life on the surface of the earth. </p>
													<select name="q1" class="custom-select w-auto">
														<option value="">Select Answer</option>
														<option value="T">TRUE</option>
														<option value="F">FALSE</option>
														<option value="N">NOT GIVEN</option>
													</select>
												</div>
												<div class="w-100 mt-2"></div>
												<div class="col-1">2.</div>
												<div class="col-11">
													<p class="mb-1">The mysterious creatures appeared within a short space of time. </p>
													<select name="q2" class="custom-select w-auto">
														<option value="">Select Answer</option>
														<option value="T">TRUE</option>
														<option value="F">FALSE</option>
														<option value="N">NOT GIVEN</option>
													</select>
												</div>
												<div class="w-100 mt-2"></div>
												<div class="col-1">3.</div>
												<div class="col-11">
													<p class="mb-1">Some of these mysterious creatures travelled in large ships.</p>
													<select name="q3" class="custom-select w-auto">
														<option value="">Select Answer</option>
														<option value="T">TRUE</option>
														<option value="F">FALSE</option>
														<option value="N">NOT GIVEN</option>
													</select>
												</div>
												<div class="w-100 mt-2"></div>
												<div class="col-1">4.</div>
												<div class="col-11">
													<p class="mb-1"> The mysterious creatures changed themselves into human beings when the creation of the world was complete.</p>
													<select name="q4" class="custom-select w-auto">
														<option value="">Select Answer</option>
														<option value="T">TRUE</option>
														<option value="F">FALSE</option>
														<option value="N">NOT GIVEN</option>
													</select>
												</div>
												<div class="w-100 mt-2"></div>
												<div class="col-1">5.</div>
												<div class="col-11">
													<p class="mb-1">It is forbidden for Aboriginal people to eat or injure any animal or plant.</p>
													<select name="q5" class="custom-select w-auto">
														<option value="">Select Answer</option>
														<option value="T">TRUE</option>
														<option value="F">FALSE</option>
														<option value="N">NOT GIVEN</option>
													</select>
												</div>
											</div>

											<hr>

											<p class="mb-0 font-weight-bold">Questions 6-10</p>
											<p class="mb-0">Choose the best answer from the given options.</p>
											<!-- <p>For Questions 8 to 13 select a letter <b>A – F </b></p> -->

											<div class="row mt-3">
												<div class="col-1">6.</div>
												<div class="col-11">
													<p class="mb-1">What was the direct result of the creatures pushing their way through the surface of the earth?</p>
													<div class="custom-control custom-radio">
														<input type="radio" name="q6" id="q6-1" class="custom-control-input" value="A" autocomplete="off">
														<label for="q6-1" class="custom-control-label mt-0">A. The mountain ranges appeared.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q6" id="q6-2" class="custom-control-input" value="B">
														<label for="q6-2" class="custom-control-label mt-0">B. The winds started blowing.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q6" id="q6-3" class="custom-control-input" value="C">
														<label for="q6-3" class="custom-control-label mt-0">C. The creatures behaved like human beings.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q6" id="q6-4" class="custom-control-input" value="D">
														<label for="q6-4" class="custom-control-label mt-0">D. Some others came down from the sky.</label>
													</div>
												</div>

												<div class="w-100 mt-2"></div>
												<div class="col-1">7.</div>
												<div class="col-11">
													<p class="mb-1">What was the main difference between human beings and these creatures?</p>
													<div class="custom-control custom-radio">
														<input type="radio" name="q7" id="q7-1" class="custom-control-input" value="A">
														<label for="q7-1" class="custom-control-label mt-0">A. Humans fought each other and hunted for food.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q7" id="q7-2" class="custom-control-input" value="B">
														<label for="q7-2" class="custom-control-label mt-0">B. Humans travelled around from place to place.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q7" id="q7-3" class="custom-control-input" value="C">
														<label for="q7-3" class="custom-control-label mt-0">C. The creatures made campsites at night.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q7" id="q7-4" class="custom-control-input" value="D">
														<label for="q7-4" class="custom-control-label mt-0">D. The creatures left behind features on the landscape.</label>
													</div>
												</div>

												<div class="w-100 mt-2"></div>
												<div class="col-1">8.</div>
												<div class="col-11">
													<p class="mb-1">Which of the following is true?</p>
													<div class="custom-control custom-radio">
														<input type="radio" name="q8" id="q8-1" class="custom-control-input" value="A">
														<label for="q8-1" class="custom-control-label mt-0">A. The creatures change into human form and them enter the woman's body.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q8" id="q8-2" class="custom-control-input" value="B">
														<label for="q8-2" class="custom-control-label mt-0">B. The creatures change into animal form and them the woman's body</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q8" id="q8-3" class="custom-control-input" value="C">
														<label for="q8-3" class="custom-control-label mt-0">C. The creatures enter the woman's body and them change into a human.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q8" id="q8-4" class="custom-control-input" value="D">
														<label for="q8-4" class="custom-control-label mt-0">D. The creatures enter the woman's body and them change into an animal.</label>
													</div>
												</div>

												<div class="w-100 mt-2"></div>
												<div class="col-1">9.</div>
												<div class="col-11">
													<p class="mb-1">Why did Aborigines draw an outline of an animal on the rock face?</p>
													<div class="custom-control custom-radio">
														<input type="radio" name="q9" id="q9-1" class="custom-control-input" value="A">
														<label for="q9-1" class="custom-control-label mt-0">A. They wanted to protect thet animal to ensure their own survival.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q9" id="q9-2" class="custom-control-input" value="B">
														<label for="q9-2" class="custom-control-label mt-0">B. The believed they could make the animal become alive and eat it.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q9" id="q9-3" class="custom-control-input" value="C">
														<label for="q9-3" class="custom-control-label mt-0">C. They wanted to capture the spirit of the animal.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q9" id="q9-4" class="custom-control-input" value="D">
														<label for="q9-4" class="custom-control-label mt-0">D. They wanted to inflict pain and suffering on that animal.</label>
													</div>
												</div>

												<div class="w-100 mt-2"></div>
												<div class="col-1">10.</div>
												<div class="col-11">
													<p class="mb-1">Some of the rock drawings did not have a clear form because.</p>
													<div class="custom-control custom-radio">
														<input type="radio" name="q10" id="q10-1" class="custom-control-input" value="A">
														<label for="q10-1" class="custom-control-label mt-0">A. They were specifically for decoration.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q10" id="q10-2" class="custom-control-input" value="B">
														<label for="q10-2" class="custom-control-label mt-0">B. They were used mainly for record-keeping.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q10" id="q10-3" class="custom-control-input" value="C">
														<label for="q10-3" class="custom-control-label mt-0">C. Their image was not as important as the meaning in the artist's mind</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q10" id="q10-4" class="custom-control-input" value="D">
														<label for="q10-4" class="custom-control-label mt-0">D. They became faded and less clear as result of years of story-telling.</label>
													</div>
												</div>
											</div>

											<hr>

											<p class="mb-0 font-weight-bold">Questions 11-13</p>
											<p class="mb-0">TYPE <b>NO MORE THAN THREE WORDS</b> FOR EACH ANSWER.</p>
											<!-- <p>For Questions 8 to 13 select a letter <b>A – F </b></p> -->

											<div class="d-flex text-justify mt-3" >
												<p  style="line-height:27px">&nbsp According to the Dreamtime belief, all Aborigines have a relationship with an animal or a plant species. This animal or plant is known as the person’s </span>
												<br><span><b>11</b><input type="text" name="q11" class="d-inline w-25">. The relationship with this creature helps the Aborigine to keep in contact with people who lived many years ago, known as the </span>
												<br><span><b>12</b><input type="text" name="q12" class="d-inline w-25">.  This communication takes the form of dancing, singing and wearing traditional costumes. But art also plays its part and the Wandjina rock paintings in Western Australia form part of this tradition. These large drawings represent rain, thunder and lightning, referred to as the </span>
												<br><span><b>13</b><input type="text" name="q13" class="d-inline w-25"> . As long as the Aborigines take care of these paintings, they are ensured rain and fertility for future generations.</span>
												</p>
											</div>
										</div>
									</div>
								</div>
							</section>
							<!-- end section 1 -->

							<h3>PASSAGE 2</h3>
							<section>
								<p>Read the following passage and answer <b>Questions 14 – 27</b></p>
								<div class="row">
									<div class="col-6">
										<div class="card-box pl-0" id="section2">
											<h5 class="font-weight-bold">The driest place on earth</h5>
											<div class="d-flex text-justify">
												<p>
													&nbsp The Atacama Desert eco-region, as defined by the World Wide Fund for Nature (WWF), extends from a few kilometers south of the Peru-Chile border to about 30° south latitude. To the north lies the Peruvian Sechura Desert eco-region, whilst to the south is the Chilean Matorral eco-region.The National Geographic Society, by contrast, considers the coastal area of southern Peru to be part of the Atacama Desert. It includes in this definition the deserts south of the Ica Region in Peru.
												</p>
											</div>
											<div class="d-flex text-justify">
												<p>
													&nbsp Atacama Desert is commonly known as the driest place in the world. The average rainfall in the Chilean region of Antofagasta is just 1 millimetre per year. Some weather stations in the Atacama have never received rain. Evidence suggests that the Atacama may not have had any significant rainfall from 1570 to 1971. It is so arid that mountains that reach as high as 6,885 metres are completely free of glaciers and, in the southern part from 25°S to 27°S, may have been glacier-free throughout the Quaternary, though permafrost extends down to an altitude of 4,400 metres and is continuous above 5,600 metres. Studies by a group of British scientists have suggested that some river beds have been dry for 120,000 years. However, some locations in the Atacama receive a marine fog known locally as the camanchaca, providing sufficient moisture for algae, lichens and even some cacti – the genus Copiapoa is notable among these. Geographically, the aridity can be explained by the following reasons:
												</p>
											</div>
											<div class="d-flex text-justify">
												<p class="m-3">
													•	The desert is located on the leeward side of the Chilean Coast Range, so little moisture from the Pacific Ocean can reach the desert.
												</p>
											</div>	
											<div class="d-flex text-justify">
												<p class="m-3">
													•	The Andes are so high that they block convective clouds, which may bring precipitation, formed above the Amazon Basin from entering the desert from the east.
												</p>
											</div>	
											<div class="d-flex text-justify">
												<p class="m-3">
													•	An inversion layer is created by the cold Humboldt current and the South Pacific High.
												</p>
											</div>
											<div class="d-flex text-justify">
												<p>
													&nbsp In July 2011, an extreme Antarctic cold front broke through the rain shadow, bringing 80 cm of snow to the plateau, stranding residents across the region, particularly in Bolivia, where many drivers became stuck in snow drifts and emergency crews became overtaxed with a large number of rescue calls. The total rainfall for the winter of 2011 was sufficient for wildflowers to bloom in the Atacama. 
												</p>
											</div>
											<div class="d-flex text-justify">
												<p>
													&nbsp The Atacama is sparsely populated, with most cities located along the Pacific coast. Towards Ataca, near the deserted coast, you see a land without men, where there is not a bird, not a beast, nor a tree, nor any vegetation. In interior areas, oases and some valleys have been populated for millennia, being the seat of the most advanced Pre-Columbian societies found in Chile. These oases have had little population growth and urban development, and have, since the 20th century, faced conflicts over water resources that are needed for the coastal cities and the mining industry. San Pedro de Atacama, at about 2,000 metres elevation, is a typical example. Its church was built by the Spanish in 1577. In pre-Hispanic times, before the Inca empire, the extremely arid interior was inhabited mainly by the Atacameño tribe. The tribe is noted for the construction of fortified towns called pucarás, one of which can be seen a few kilometers from San Pedro de Atacama.
												</p>
											</div>
											<div class="d-flex text-justify">
												<p>
													&nbsp The coastal cities originated in the 16th, 17th, and 18th centuries during the time of the Spanish Empire, when they emerged as shipping ports for silver produced in Potosí and other mines. During the 19th century the desert came under control of Bolivia, Chile, and Peru, and soon became a zone of conflict due to unclear borders and the discovery of sodium nitrate deposits. After the War of the Pacific, in which Chile annexed most of the desert, cities along the coast developed into international ports, and many Chilean workers migrated there. With the guano and saltpeter booms of the 19th century the population grew immensely, mostly due to immigration from central Chile.
												</p>
											</div>
											<div class="d-flex text-justify">
												<p>
													&nbsp The Atacama desert again became a source of wealth from the 1950s onwards due to copper mining. The Escondida and Chuquicamata copper mines are located within the Atacama Desert. The desert has rich deposits of copper and other minerals, and the world's largest natural supply of sodium nitrate, which was mined on a large scale until the early 1940s. The Atacama border dispute over these resources between Chile and Bolivia began in the 19th century.  In the 20th century the nitrate industry declined and at the same time the largely male population of the desert became increasingly problematic for the Chilean state. Mineworkers and mining companies came into conflict, and protests spread throughout the region. Now the desert is littered with approximately 170 abandoned nitrate (or "saltpetre") mining towns, almost all of which were shut down decades after the invention of synthetic nitrate in Germany at the turn of the 20th century.
												</p>
											</div>
										</div>
									</div>

									<div class="col-6">
										<div class="card-box">
											<p class="mb-0 font-weight-bold">Questions 14-18</p>
											<p class="mb-0">Find a number for each answer.</p>
											<!-- <p>For <b>Questions 1-5</b> type <b><i>NO MORE THAN THREE WORDS AND/OR A NUMBER</i></b></p> -->

											<div class="row mt-3">
												<div class="col-1">14.</div>
												<div class="col-11">
													<p class="mb-1">The number of years some river beds may have been dry.</p>
													<p class="d-inline">Answer : </p>
													<input type="text" name="q14" class="d-inline">
												</div>
												<div class="w-100 mt-2"></div>
												<div class="col-1">15.</div>
												<div class="col-11">
													<p class="mb-1">The average annual rainfall in the Antofagasta region.</p>
													<p class="d-inline">Answer : </p>
													<input type="text" name="q15" class="d-inline">
												</div>
												<div class="w-100 mt-2"></div>
												<div class="col-1">16.</div>
												<div class="col-11">
													<p class="mb-1">The amount of snowfall which fell one year in Bolivia.</p>
													<p class="d-inline">Answer : </p>
													<input type="text" name="q16" class="d-inline">
												</div>
												<div class="w-100 mt-2"></div>
												<div class="col-1">17.</div>
												<div class="col-11">
													<p class="mb-1">The altitude of San Pedro de Atacama.</p>
													<p class="d-inline">Answer : </p>
													<input type="text" name="q17" class="d-inline">
												</div>
												<div class="w-100 mt-2"></div>
												<div class="col-1">18.</div>
												<div class="col-11">
													<p class="mb-1">The decade when copper mining brought wealth to the region.</p>
													<p class="d-inline">Answer : </p>
													<input type="text" name="q18" class="d-inline">
												</div>
											</div>

											<hr>

											<p class="mb-0 font-weight-bold">Questions 19-23</p>
											<p class="mb-0">Choose the best answer from the given options.</p>
											<!-- <p>For <b>Questions 11-14 </b>select a letter a, b, c, or d </p> -->

											<div class="row mt-3">
												<div class="col-1">19.</div>
												<div class="col-11">
													<p class="mb-1">Why does some vegetation manage to survive there?</p>
													<div class="custom-control custom-radio">
														<input type="radio" name="q19" id="q19-1" class="custom-control-input" value="A">
														<label for="q19-1" class="custom-control-label mt-0">A. Because of the permafrost above 5,600 metres.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q19" id="q19-2" class="custom-control-input" value="B">
														<label for="q19-2" class="custom-control-label mt-0">B. Because of a fog blown in from the sea.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q19" id="q19-3" class="custom-control-input" value="C">
														<label for="q19-3" class="custom-control-label mt-0">c. Because some rain falls in the lower regions of the desert.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q19" id="q19-4" class="custom-control-input" value="D">
														<label for="q19-4" class="custom-control-label mt-0">D. Because the mountains are glacier-free.</label>
													</div>
												</div>

												<div class="w-100 mt-2"></div>
												<div class="col-1">20.</div>
												<div class="col-11">
													<p class="mb-1">Which of the following did NOT occur in the year of 2011?</p>
													<div class="custom-control custom-radio">
														<input type="radio" name="q20" id="q20-1" class="custom-control-input" value="A">
														<label for="q20-1" class="custom-control-label mt-0">A. A cold front from the Antarctic brought a large amount of snowfall to the area.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q20" id="q20-2" class="custom-control-input" value="B">
														<label for="q20-2" class="custom-control-label mt-0">B. Car drivers in Bolivia were faced with roads blocked by snow.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q20" id="q20-3" class="custom-control-input" value="C">
														<label for="q20-3" class="custom-control-label mt-0">C. Many people had to be rescued from their vehicles.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q20" id="q20-4" class="custom-control-input" value="D">
														<label for="q20-4" class="custom-control-label mt-0">D. The snow killed all the wildflowers in the region.</label>
													</div>
												</div>

												<div class="w-100 mt-2"></div>
												<div class="col-1">21.</div>
												<div class="col-11">
													<p class="mb-1">What do we know about the oases areas?</p>
													<div class="custom-control custom-radio">
														<input type="radio" name="q21" id="q21-1" class="custom-control-input" value="A">
														<label for="q21-1" class="custom-control-label mt-0">A. Nothing will grow there.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q21" id="q21-2" class="custom-control-input" value="B">
														<label for="q21-2" class="custom-control-label mt-0">B. They have been inhabited for many years.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q21" id="q21-3" class="custom-control-input" value="C">
														<label for="q21-3" class="custom-control-label mt-0">C. They continue to grow in size even today.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q21" id="q21-4" class="custom-control-input" value="D">
														<label for="q21-4" class="custom-control-label mt-0">D. There is plenty of water for everyone in those areas.</label>
													</div>
												</div>

												<div class="w-100 mt-2"></div>
												<div class="col-1">22.</div>
												<div class="col-11">
													<p class="mb-1">Why did the area become a zone of conflict in the 19th century?</p>
													<div class="custom-control custom-radio">
														<input type="radio" name="q22" id="q22-1" class="custom-control-input" value="A">
														<label for="q22-1" class="custom-control-label mt-0">A. Because a number of countries disputed the border demarcations.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q22" id="q22-2" class="custom-control-input" value="B">
														<label for="q22-2" class="custom-control-label mt-0">B. Because mineral resources were discovered there.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q22" id="q22-3" class="custom-control-input" value="C">
														<label for="q22-3" class="custom-control-label mt-0">C. Because Chile took control of the desert region.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q22" id="q22-4" class="custom-control-input" value="D">
														<label for="q22-4" class="custom-control-label mt-0">D. Because a large number of migrant workers moved to the region.</label>
													</div>
												</div>
												<div class="w-100 mt-2"></div>
												<div class="col-1">23.</div>
												<div class="col-11">
													<p class="mb-1">Why did most of the nitrate mining towns disappear?</p>
													<div class="custom-control custom-radio">
														<input type="radio" name="q23" id="q23-1" class="custom-control-input" value="A">
														<label for="q23-1" class="custom-control-label mt-0">A. Because of the border dispute between Chile and Bolivia.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q23" id="q23-2" class="custom-control-input" value="B">
														<label for="q23-2" class="custom-control-label mt-0">B. Because of the harsh conditions there.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q23" id="q23-3" class="custom-control-input" value="C">
														<label for="q23-3" class="custom-control-label mt-0">C. Because there was no longer a demand for natural nitrate.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q23" id="q23-4" class="custom-control-input" value="D">
														<label for="q23-4" class="custom-control-label mt-0">D. Because they gave way to copper mining towns.</label>
													</div>
												</div>
											</div>

											<hr>

											<p class="mb-0 font-weight-bold">Questions 24-26</p>
											<p class="mb-0">TYPE <b>NO MORE THAN TWO WORDS</b> FOR EACH ANSWER.</p>

											<div class="row mt-3">
												<div class="col-1">24.</div>
												<div class="col-11">
													<p class="mb-1">First of all, the desert lies on the
													<input type="text" name="q24" class="d-inline w-50">of the Chilean Coast Range, so it does not receive any moisture from the sea.</p>
												</div>
												<div class="w-100 mt-2"></div>
												<div class="col-1">25.</div>
												<div class="col-11">
													<p class="mb-1">Second, although plenty of rainfall is formed above the 
													<input type="text" name="q25" class="d-inline w-50">none of this is able to reach the desert from the east because it is blocked by the high Andes mountains.</p>
												</div>
												<div class="w-100 mt-2"></div>
												<div class="col-1">26.</div>
												<div class="col-11">
													<p class="mb-1">Third, a meteorological phenomenon known as an <br>
													<input type="text" name="q26" class="d-inline w-50">forms as a result of the cold Humboldt current and the South Pacific High.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<!-- end section 2 -->

							<h3>PASSAGE 3</h3>
							<section>
								<div class="row">
									<div class="col-12">
										<p>Read the following passage and answer <b>Questions 27 – 40</b></p>
									</div>
									<div class="col-6">
										<div class="card-box pl-0" id="section3">
											<h5 class="font-weight-bold">Dubai</h5> 

											<div class="d-flex text-justify">
												<b class="mr-2">A.</b>
												<p>
													&nbsp On a hot dusty afternoon, we parked the jeep in a flurry of sand in front of a steel and glass bank.  Even in areas of downtown Dubai, skyscrapers soar out of the desert like hi-tech islands in a sea of sand.  With little in the way of landscaping or pavements linking one multi-national high-rise to another, we squelched through the sand to our destination.  No one walks much in Dubai.  It’s too hot, and anyway, the roads are excellent.  Nevertheless, that afternoon we plunged on foot down narrow alleys only just wide enough to permit the passage of a single donkey into Bastakiya, the heart of old Dubai.
												</p>
											</div>

											<div class="d-flex text-justify">
												<b class="mr-2">B.</b>
												<p>
													&nbsp What’s left of Dubai’s heritage?  Precious little, you might think.  But determined sightseers can still find ways to experience the rhythms of old Arabia — a goal that is a great deal more addictive and subtle than the usual business, beach and shopping pursuits.  Bastakiya was once an extensive enclave of square courtyard houses in the Bur Dubai area of the city on the bank of Dubai Creek.  What remains of the old coral-built homes originally owned by merchants who traded in spices, incense, gold and textiles is still suffused with an ethereal, riveting ambience.  As recently as the 1950’s, a visitor arriving at Dubai by sea described the city as a forest of skyscrapers, so numerous were the graceful wind-towers of Bastakiya.  Elegant and elegiac they still look today, crowning flat-roofed homes of faded splendour.
												</p>
											</div>

											<div class="d-flex text-justify">
												<b class="mr-2">C.</b>
												<p>
													&nbsp Rising some 15 metres above the rooftops, wind-towers work by trapping the breezes that stray into vents which face in four directions.  The vents channel the moving air down into the building from where it is circulated through the living areas.  As in so many of the Gulf’s traditional seashore towns, the houses of Bastakiya were built from blocks of coral.  In Dubai, the mortar used is called sarooj, a mixture of red clay, manure and water that washes the walls with a peachy glow.  Date palms provided the beams, and heavy carved wooden doors still bar the way from the street.  These homes do not divulge much to the outside world.  Their windows open onto tree shaded courtyards that allow privacy, security and thermal insulation.  Incised stucco panels, pierced window screens, crenellations and columns topped with lotus-shaped capitals are decorative features which also contribute to the basic structure of the house.
												</p>
											</div>

											<div class="d-flex text-justify">
												<b class="mr-2">D.</b>
												<p>
													&nbsp Trudging along the twisting, sandy lanes between the wind-towered houses, we reached the Majlis Gallery, a sensitively restored example of the old architectural style.  The former merchant’s home now houses some of the finest examples of Dubai’s arts and crafts.  Visiting the gallery also provides an ideal opportunity to experience the interior of a traditional wind-towered house — with its high ceilings and cool, narrow rooms.  The width of a room was restricted by the mangrove poles used as ceiling beams none of which, it seems could have been longer than about 3.5 metres.  Traditionally, there would be a male majlis (reception room) as well as a female majlis with separate entrances.  In some of the larger mercantile homes, another public majlis, situated near the main door, would be used to extend hospitality to visiting traders.
												</p>
											</div>

											<div class="d-flex text-justify">
												<b class="mr-2">E.</b>
												<p>
													&nbsp Not for nothing was Dubai once called the City of Merchants.  Like so many other ports of the Gulf, it operated as a highly successful entrepot for thousands of years, importing and exporting goods as far afield as China in the same type of magnificent wooden dhows (a kind of boat) that are still constructed along the coastline.  The region itself has been blessed with three raw materials that have brought continued prosperity to the area.  In antiquity, it was copper, then pearls and now oil.
												</p>
											</div>

											<div class="d-flex text-justify">
												<b class="mr-2">F.</b>
												<p>
													&nbsp	Meanwhile the local coastal people subsist, as non-mercantile classes always have, on the basics of life — boat building, fishing and harvesting dates.  Their rural counterparts, the Bedouin, herded camels, sheep and goats, and still do.  The camels are often bred nowadays for racing — with untold urban wealth up for prize money. The goats may be barbequed under the stars for tourists on a desert safari.  These days the sand dunes echo to the roar of jeeps on ‘wadi-bashing’ expeditions or the swish of the latest craze — sand skiing.
												</p>
											</div>

											<div class="d-flex text-justify">
												<b class="mr-2">G.</b>
												<p>
													&nbsp Cutting a soft, gleaming swathe through Dubai is The Creek, the highway of a civilisation built on trade. It is one of the few safe anchorages along the region’s southern coast and was a traditional haven for the dhows that plied the waters of the Persian Gulf and beyond. From one of the metal bridges that now span The Creek, one can watch the dhow building trade continuing as it has gone for centuries. Hundreds of these sturdy wooden boats add colour to the Dhow Wharfage. As recently as the 1970’s, dhows carried two-thirds of Dubai’s import/export business. Today, the dhows transport only a fraction of the Emirate’s trade but the sight of the Arabs dressed in their flowing robes is a tangible reminder of the past. Only the goods being loaded have changed, it seems. Gone are the pearls and, of course, the slaves.  Nowadays one dodges around electrical goods and building materials on the wharfs. In family-owned boatyards, dhows are still built in the time-honoured way, with keels of teak and ribs and flanks of acacia wood.
												</p>
											</div>

											<div class="d-flex text-justify">
												<b class="mr-2">H.</b>
												<p>
													&nbsp The Creek was the nexus of the pearling expeditions on which Dubai’s early fame was built. Now it’s gold that lures visitors to the souks — the traditional market places. During the early part of the century, were made through the astute trading of gold from Dubai to the Asian subcontinent, and to this day, many of the souk’s customers are from that region.  In glittering shop after glittering shop, three genres of jewellery are marketed.  The first type is aimed at Asians, who tend to buy real gold.  The second caters to the European bargain hunter and the third offers traditional Bedouin-style jewellery.  Unfortunately, virtually none of the latter is antique because Bedouin custom dictates that jewellery which was part of a woman’s dowry must be melted down upon her death.  In any case, genuine Bedouin jewellery was crafted in silver, the taste for gold being relatively recent.
												</p>
											</div>

										</div>
									</div>

									<div class="col-6">
										<div class="card-box">
											<p class="mb-0 font-weight-bold">Questions 27-31</p>
											<p class="mb-0">Choose the best answer for each question from the given options.</p>
											<!-- <p>For Questions 28 to 31 type a number.</p> -->

											<div class="row mt-3">
												<div class="col-1">27.</div>
												<div class="col-11">
													<p class="mb-1">Why don’t many people walk around in Dubai?</p>
													<div class="custom-control custom-radio">
														<input type="radio" name="q27" id="q27-1" class="custom-control-input" value="A">
														<label for="q27-1" class="custom-control-label mt-0">A. The pavements aren’t very good for walking.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q27" id="q27-2" class="custom-control-input" value="B">
														<label for="q27-2" class="custom-control-label mt-0">B. The weather makes walking uncomfortable.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q27" id="q27-3" class="custom-control-input" value="C">
														<label for="q27-3" class="custom-control-label mt-0">C. The quality of the roads makes driving a better option.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q27" id="q27-4" class="custom-control-input" value="D">
														<label for="q27-4" class="custom-control-label mt-0">D. All the above reasons.</label>
													</div>
												</div>

												<div class="w-100 mt-2"></div>
												<div class="col-1">28.</div>
												<div class="col-11">
													<p class="mb-1">What is referred to as the "rhythms of old Arabia" ?</p>
													<div class="custom-control custom-radio">
														<input type="radio" name="q28" id="q28-1" class="custom-control-input" value="A">
														<label for="q28-1" class="custom-control-label mt-0">A. Popular pursuits such as shopping and going to the beach.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q28" id="q28-2" class="custom-control-input" value="B">
														<label for="q28-2" class="custom-control-label mt-0">B. The usual business activities of ancient Dubai.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q28" id="q28-3" class="custom-control-input" value="C">
														<label for="q28-3" class="custom-control-label mt-0">C. The sights and sounds of historic Dubai.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q28" id="q28-4" class="custom-control-input" value="D">
														<label for="q28-4" class="custom-control-label mt-0">D. The music played in the streets of Dubai.</label>
													</div>
												</div>

												<div class="w-100 mt-2"></div>
												<div class="col-1">29.</div>
												<div class="col-11">
													<p class="mb-1">How are the “wind-tower” houses cooled?</p>
													<div class="custom-control custom-radio">
														<input type="radio" name="q29" id="q29-1" class="custom-control-input" value="A">
														<label for="q29-1" class="custom-control-label mt-0">A. The heat inside the house is released through vents in the tower.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q29" id="q29-2" class="custom-control-input" value="B">
														<label for="q29-2" class="custom-control-label mt-0">B. Any wind is caught and directed down to the living areas. </label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q29" id="q29-3" class="custom-control-input" value="C">
														<label for="q29-3" class="custom-control-label mt-0">C. By catching the cool wind from the direction of the sea.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q29" id="q29-4" class="custom-control-input" value="D">
														<label for="q29-4" class="custom-control-label mt-0">D. By using coral to build the houses.</label>
													</div>
												</div>

												<div class="w-100 mt-2"></div>
												<div class="col-1">30.</div>
												<div class="col-11">
													<p class="mb-1">What do we know about the Majlis Gallery?</p>
													<div class="custom-control custom-radio">
														<input type="radio" name="q30" id="q30-1" class="custom-control-input" value="A">
														<label for="q30-1" class="custom-control-label mt-0">A. A local merchant lives there.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q30" id="q30-2" class="custom-control-input" value="B">
														<label for="q30-2" class="custom-control-label mt-0">B. It serves as an exhibition centre for local arts and crafts.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q30" id="q30-3" class="custom-control-input" value="C">
														<label for="q30-3" class="custom-control-label mt-0">C. The rooms are wide, cool and spacious.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q30" id="q30-4" class="custom-control-input" value="D">
														<label for="q30-4" class="custom-control-label mt-0">D. The height of the ceiling is restricted by the use of mangrove beams.</label>
													</div>
												</div>
												<div class="w-100 mt-2"></div>
												<div class="col-1">31.</div>
												<div class="col-11">
													<p class="mb-1">Which of the following was not a raw material for increasing Dubai’s economic status?</p>
													<div class="custom-control custom-radio">
														<input type="radio" name="q31" id="q31-1" class="custom-control-input" value="A">
														<label for="q31-1" class="custom-control-label mt-0">A. dhows.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q31" id="q31-2" class="custom-control-input" value="B">
														<label for="q31-2" class="custom-control-label mt-0">B. oil.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q31" id="q31-3" class="custom-control-input" value="C">
														<label for="q31-3" class="custom-control-label mt-0">C. copper.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q31" id="q31-4" class="custom-control-input" value="D">
														<label for="q31-4" class="custom-control-label mt-0">D. pearls.</label>
													</div>
												</div>
											</div>
												
											<hr>

											<p class="mb-0 font-weight-bold">Questions 32-36</p>
											<p class="mb-0">Identify the paragraphs which contain the following information. For questions 32 to 36 select the letters <i><b>A – H</b></i></p>

											<table class="table table-sm table-bordered dt-responsive w-100">
												<tr>
													<th class="font-weight-bold text-center"></th>
													<th class="font-weight-bold text-center"></th>
													<th class="font-weight-bold text-center">Paragraph</th>
												</tr>
												<!-- <tr class="bg-light">
													<td>e.g.</td>
													<td>An example of a female species eating males from a different species. </td>
													<td>
														<select class="custom-select" disabled>
															<option selected>H</option>
														</select>
													</td>
												</tr> -->
												<tr>
													<td>32</td>
													<td>The preferred metal for Bedouin jewellery.</td>
													<td>
														<select name="q32" class="custom-select">
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
													</td>
												</tr>
												<tr>
													<td>33</td>
													<td>An impression of the Dubai sky-line when arriving by boat.</td>
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
														</select>
													</td>
												</tr>
												<tr>
													<td>34</td>
													<td>A comparison of occupations between city and countryside folk.</td>
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
														</select>
													</td>
												</tr>
												<tr>
													<td>35</td>
													<td>Why houses in Dubai have a slightly orange appearance.</td>
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
														</select>
													</td>
												</tr>
												<tr>
													<td>36</td>
													<td>Different rooms for welcoming men and women into the home.</td>
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
														</select>
													</td>
												</tr>
											</table>

											<hr>

											<p class="mb-0 font-weight-bold">Questions 37-40</p>
											<p class="mb-0">Complete the following passage using words from the box. For questions 37 to 40, select the letters <i><b>A – H</b></i></p>

											<div class="d-flex justify-content-center">
												<div class="row border p-3 border-3">
													<div class="d-flex flex-column mr-2">
														<span>A.</span>
														<span>B.</span>
														<span>C.</span>
														<span>D.</span>
														<span>E.</span>
														<span>F.</span>
														<span>G.</span>
														<span>H.</span>
													</div>
													<div class="d-flex flex-column">
														<span>fortunes</span>
														<span>shopping</span>
														<span>bargain</span>
														<span>business</span>
														<span>souvenir</span>
														<span>attracted</span>
														<span>journey</span>
														<span>kinds</span>
													</div>
												</div>
											</div>

											<div class="row mt-3">
												<div class="col-1">37.</div>
												<div class="col-11">
													<p class="mb-1">The Creek was the central feature of the pearling trade on which Dubai’s early fame was built.  Nowadays visitors are 
													<select name="q37" class="custom-select w-auto">
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
													to the traditional market places in search of gold.</p>
												</div>
												<div class="w-100 mt-3"></div>
												<div class="col-1">38.</div>
												<div class="col-11">
													<p class="mb-1">At the turn of the century, people made their
													<select name="q38" class="custom-select w-auto">
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
													through the skillful trading of gold from Dubai to India, Pakistan and Sri Lanka, and even today, many of the souk’s customers are from that region.</p>
												</div>
												<div class="w-100 mt-3"></div>
												<div class="col-1">39.</div>
												<div class="col-11">
													<p class="mb-1">In the market stalls, three 
													<select name="q39" class="custom-select w-auto">
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
													of jewellery are marketed.  The first is aimed at Asians, who tend to buy real gold.  </p>
												</div>
												<div class="w-100 mt-3"></div>
												<div class="col-1">40.</div>
												<div class="col-11">
													<p class="mb-1">The second caters to the Europeans looking for a 
													<select name="q40" class="custom-select w-auto">
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
													and the third offers traditional Bedouin-style jewellery.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<!-- end section 3 -->
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
@endsection


@section('javascript')
	<script src="{{ asset('public/js/mocktest/timer_ieltsreading.js') }}"></script>
	<script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('public/assets/assets/ColorPicker.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/assets/assets/rainbow-custom.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/assets/assets/src/TextHighlighter.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/assets/assets/src/TextHighlighter.min.js')}}"></script>
	<script>
		document.querySelector('body').addEventListener('load', begintimer());
		$(function () {
			var removeBtn = document.getElementById('remove');
			var sandbox = document.getElementById('sandbox');
			var colors = new ColorPicker(document.querySelector('.color-picker'));
			var hltr = new TextHighlighter(sandbox);

			var a = $('#sandbox');

			colors.onColorChange(function (color) {
				hltr.setColor(color);
			});

			removeBtn.addEventListener('click', function () {
				hltr.removeHighlights();
			});

			$('input[type="text"]').attr({
				'autocomplete': 'off',
				'onChange': 'this.value = this.value.toUpperCase();',
				'spellcheck': 'false'
			})
		});
	</script>
@stop