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
                            <li class="breadcrumb-item active">{{Session('name_type')}}</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Reading</h4>
                </div>
            </div>
        </div> 

		<div class="row">
			<div class="col-md-12">
				<div class="card-box">
					<h4 class="m-t-0 header-title"><b>IELTS Practice Reading Test</b></h4>
					<div class="row">

					<div class="col-md-6">
						<h5><span id="dplay"></span></h5>
					</div>

					<div class="col-md-6">

						<div class="row">
							<div class="col-md-8" align="right">
								Change highlighting color: <div class="color-picker" style="text-align: right;margin-top: 0;"></div>
							</div>
							<div class="col-md-4" align="right">
								Remove all highlights: <br><button class="btn btn-primary btn-sm" id="remove" style="margin-right: 40px;">Remove</button>
							</div>
						</div>  
					</div>
				</div>
			
				<form id="basic-form" action="{{ route('ans_reading') }}" method="post" onsubmit="return confirm('Are you sure you want to finish?');">
					{{ csrf_field() }}

					<input type="hidden" name="std_id" value="{{Session('std_id')}}">
					<input type="hidden" name="class_id" value="{{Session('class_id')}}">
					<input type="hidden" name="set_exam" value="2">
					<div>
						<h3>Passage 1</h3>
						<section>
							<div class="row" id="sandbox">
								<div class="col-md-6 col-lg-6 col-xs-6">
									<div class="card-box">
										<div class="box-content">
											<h4>Passage 1</h4>
											<p> <b>A.</b> One of the toughest parts of parenting is the seemingly endless series of   decisions you have to make. Breast-feeding or formula milk? Cloth nappies or disposables? Day care or baby-sitters? It is not as though there is an absolute right answer to any of these questions - yet parents feel that the wrong choice could be disastrous. </p>
											<p> <b>B.</b> This is especially true when it comes to spanking. Every parent has been in a situation where a whack on the backside seems the only solution to a tantrum. But the conventional wisdom put forward by parenting gurus during the last three decades has spoken against the use of corporal punishment. Physical punishment is an unspoken communication from parents to children that violence is an acceptable way to solve disputes. </p>
											<p> <b>C.</b> Now comes a scientific study that frames the issue in larger social terms. A New Hampshire sociologist and his colleagues report that 'when parents use corporal punishment to reduce anti-social behaviour, the long-term effect seems to be the opposite.'  Not only that, but the authors also suggest that if you refrain from physical punishment, you will help to reduce the overall level of violence in society. </p>
											<p> <b>D.</b> This report, however, which was first presented at a conference in 1994 and is now appearing in formal publication with a more detailed analysis of the data, is highly controversial. It may prove something, say the critics, but not what the authors think it does. The problem focuses on who was in the study. </p>
											<p> <b>E.</b> The authors collected their data from telephone interviews conducted by the United States Bureau of Statistics beginning in 1979 with 807 mothers of children aged between 6 and 9. They were asked how many times they had spanked their children in the past week and what the kids' behaviour was like:  did they lie, cheat, misbehave in school?  Then the Bureau polled the same group two years later. The kids who had been spanked had become increasingly anti-social. </p>
											<p> <b>F.</b> But when you look a little closer at the findings, they start to seem a bit shaky. To begin with, the mothers who had been polled ranged in age from 14 to 21. That is hardly a representative slice of American motherhood. Moreover, those who spanked did so on average twice a week. These factors, say critics, plus the fact that some kids were as old as nine, are markers of a dysfunctional family in the minds of psychologists and pediatricians. </p>
											<p> <b>G.</b> Critics also observe that limiting the research to 6-to-9 year-olds invalidated the results. At that age kids can understand the consequences of their actions. For them, frequent physical punishment is likely to be humiliating and traumatic, and might well lead to worse behaviour at a later time. On the other hand, it is plausible to argue that spanking a toddler will have a greater positive effect than it does on older kids because it occurs at a crucial developmental stage. According to experts, corporal punishment is more effective and not harmful to long-term development if it is confined to youngsters between the ages of 18 months and 6 years. If inappropriate behaviour gets out of hand - especially if it poses a danger to the child or to others - a smack on the bottom may be the only way to control it. </p>
											<p> <b>H.</b> Those in favour of spanking admit that they recommend physical punishment only as a last resort, when all else has failed. Even then, punishment should be limited to one or two mild slaps on the backside. These views are widely shared: more than two-thirds of pediatricians polled in a recent survey approved parental spanking in certain situations. As one expert explains, 'The usual example is when a kid races across the street in front of a car. The slap merely imprints on him the need for safety. No-one would consider that child abuse.' </p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-6 col-xs-6">
									<div class="card-box">
										<div class="box-content">
											<p class="font-16"><b>Questions 1 - 5</b><br>
											Read the text. Complete the sentences below by choosing the correct answer A, B, C or D. <br>
											For Questions 1 to 5, choose <b><u>ONE</u></b> answer (A, B, C or D) </p>
											<div class="container">
											<div class="mt-3">
												<label>1. For the past thirty years or so child specialists</label>
												<div class="custom-control custom-radio">
												<input type="radio" id="q1-1" name="q1" class="custom-control-input" value="A">
												<label class="custom-control-label" for="q1-1"><b>A.</b> have spoken in favour of physical punishment.</label>
												</div>
												<div class="custom-control custom-radio">
												<input type="radio" id="q1-2" name="q1" class="custom-control-input" value="B">
												<label class="custom-control-label" for="q1-2"><b>B.</b> believe that violence is an acceptable way to solve conflicts.</label>
												</div>
												<div class="custom-control custom-radio">
												<input type="radio" id="q1-3" name="q1" class="custom-control-input" value="C">
												<label class="custom-control-label" for="q1-3"><b>C.</b> suggest that spanking is the only solution to a tantrum.</label>
												</div>
												<div class="custom-control custom-radio">
												<input type="radio" id="q1-4" name="q1" class="custom-control-input" value="D">
												<label class="custom-control-label" for="q1-4"><b>D.</b> have declared themselves against the use of physical punishment.</label>
												</div>
											</div>
											<div class="mt-3">
												<label>2. The New Hampshire sociologist believes that</label>
												<div class="custom-control custom-radio">
												<input type="radio" id="q2-1" name="q2" class="custom-control-input" value="A">
												<label class="custom-control-label" for="q2-1"><b>A.</b> the use of corporal punishment has a beneficial long-term effect on children.</label>
												</div>
												<div class="custom-control custom-radio">
												<input type="radio" id="q2-2" name="q2" class="custom-control-input" value="B">
												<label class="custom-control-label" for="q2-2"><b>B.</b> physical punishment can increase the incidence of anti-social behaviour.</label>
												</div>
												<div class="custom-control custom-radio">
												<input type="radio" id="q2-3" name="q2" class="custom-control-input" value="C">
												<label class="custom-control-label" for="q2-3"><b>C.</b> parents who do not spank their children are creating problems for society.</label>
												</div>
												<div class="custom-control custom-radio">
												<input type="radio" id="q2-4" name="q2" class="custom-control-input" value="D">
												<label class="custom-control-label" for="q2-4"><b>D.</b> children who are spanked are not likely to behave badly when they get older.</label>
												</div>
											</div>
											<div class="mt-3">
												<label>3. What were the criticisms of the report when it was formally published?</label>
												<div class="custom-control custom-radio">
												<input type="radio" id="q3-1" name="q3" class="custom-control-input" value="A">
												<label class="custom-control-label" for="q3-1"><b>A.</b> The data was inconclusive because of the ages of the parents who were interviewed.</label>
												</div>
												<div class="custom-control custom-radio">
												<input type="radio" id="q3-2" name="q3" class="custom-control-input" value="B">
												<label class="custom-control-label" for="q3-2"><b>B.</b> The results were unreliable because of the ages of the children in the study.</label>
												</div>
												<div class="custom-control custom-radio">
												<input type="radio" id="q3-3" name="q3" class="custom-control-input" value="C">
												<label class="custom-control-label" for="q3-3"><b>C.</b> The group involved in the study was not representative of American society.</label>
												</div>
												<div class="custom-control custom-radio">
												<input type="radio" id="q3-4" name="q3" class="custom-control-input" value="D">
												<label class="custom-control-label" for="q3-4"><b>D.</b> All the above reasons.</label>
												</div>
											</div>
											<div class="mt-3">
												<label>4. Spanking may have a more positive effect on younger children because</label>
												<div class="custom-control custom-radio">
												<input type="radio" id="q4-1" name="q4" class="custom-control-input" value="A">
												<label class="custom-control-label" for="q4-1"><b>A.</b> at that age kids can understand the consequences of their actions.</label>
												</div>
												<div class="custom-control custom-radio">
												<input type="radio" id="q4-2" name="q4" class="custom-control-input" value="B">
												<label class="custom-control-label" for="q4-2"><b>B.</b> it is likely to have a traumatic effect on them.</label>
												</div>
												<div class="custom-control custom-radio">
												<input type="radio" id="q4-3" name="q4" class="custom-control-input" value="C">
												<label class="custom-control-label" for="q4-3"><b>C.</b> it occurs when the child's character is developing.</label>
												</div>
												<div class="custom-control custom-radio">
												<input type="radio" id="q4-4" name="q4" class="custom-control-input" value="D">
												<label class="custom-control-label" for="q4-4"><b>D.</b> at a younger age, it is the only way to control a child.</label>
												</div>
											</div>
											<div class="mt-3">
												<label>5. Most pediatricians would agree that</label>
												<div class="custom-control custom-radio">
												<input type="radio" id="q5-1" name="q5" class="custom-control-input" value="A">
												<label class="custom-control-label" for="q5-1"><b>A.</b> the limited use of physical punishment can have a positive impact on a child's development.</label>
												</div>
												<div class="custom-control custom-radio">
												<input type="radio" id="q5-2" name="q5" class="custom-control-input" value="B">
												<label class="custom-control-label" for="q5-2"><b>B.</b> children who are regularly punished turn out to be better citizens.</label>
												</div>
												<div class="custom-control custom-radio">
												<input type="radio" id="q5-3" name="q5" class="custom-control-input" value="C">
												<label class="custom-control-label" for="q5-3"><b>C.</b> parents should resort to mild physical punishment as soon as any misbehaviour occurs.</label>
												</div>
												<div class="custom-control custom-radio">
												<input type="radio" id="q5-4" name="q5" class="custom-control-input" value="D">
												<label class="custom-control-label" for="q5-4"><b>D.</b> no parent should ever spank their children.</label>
												</div>
											</div>
											<hr>
												<p class="font-16"><b>Questions 6 - 10</b><br>
												Which of the paragraphs contains the following information? Select the paragraph letter for each question.</p>
												<div class="container">
													<div class="row">
														<div class="col-md-12"> 6. It may be argued that spanking a younger child is more effective than spanking older children. </div>
														<div class="col-auto mt-2 col-md-5">
															<select class="custom-select" name="q6">
															<option selected="">Select Answer</option>
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
													<div class="row mt-2">
														<div class="col-md-12"> 7. A recent report that states that violence leads to further violence. </div>
														<div class="col-auto mt-2 col-md-5">
															<select class="custom-select" name="q7">
															<option selected="">Select Answer</option>
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
													<div class="row mt-2">
														<div class="col-md-12"> 8. Most pediatricians would now agree that mild physical punishment can be justified. </div>
														<div class="col-auto mt-2 col-md-5">
															<select class="custom-select" name="q8">
															<option selected="">Select Answer</option>
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
													<div class="row mt-2">
														<div class="col-md-12"> 9. Bringing up children can be problematic for a number of reasons. </div>
														<div class="col-auto mt-2 col-md-5">
															<select class="custom-select" name="q9">
															<option selected="">Select Answer</option>
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
													<div class="row mt-2">
														<div class="col-md-12"> 10. The age range of the mothers polled in the survey. </div>
														<div class="col-auto mt-2 col-md-5">
															<select class="custom-select" name="q10">
																<option selected="">Select Answer</option>
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
												</div>

												<hr>

												<p class="font-16"><b>Questions 11 - 13</b><br> Complete the paragraph using phrases from the box. Select the correct letter for each question.</p>
										
												<div class="row" style="line-height: 2;">
													<div class="col-md-12">
														Those in favour of spanking admit that they recommend physical punishment only as a <b>(11)</b> 
														<select class="custom-select col-md-4" name="q11">
															<option selected="">Select Answer</option>
															<option value="A">A.90%</option>
															<option value="B">B.65%</option>
															<option value="C">C.Given</option>
															<option value="D">D.final</option>
															<option value="E">E.child</option>
															<option value="F">F.specialist</option>
															<option value="G">G.a couple of</option>
															<option value="H">H.restricted</option>
														</select>  resort, when all else has failed. Even then, punishment should be <b>(12)</b>  
													</div>

													<div class="col-md-12">
														<select class="custom-select col-md-4" name="q12"> 
															<option selected="">Select Answer</option>
															<option value="A">A.90%</option>
															<option value="B">B.65%</option>
															<option value="C">C.Given</option>
															<option value="D">D.final</option>
															<option value="E">E.child</option>
															<option value="F">F.specialist</option>
															<option value="G">G.a couple of</option>
															<option value="H">H.restricted</option>
														</select>  to one or two mild slaps on the backside. These views are widely shared: more than
													</div>

													<div class="col-md-12">
														<b>(13)</b>  
														<select class="custom-select col-md-4" name="q13">
															<option selected="">Select Answer</option>
															<option value="A">A.90%</option>
															<option value="B">B.65%</option>
															<option value="C">C.Given</option>
															<option value="D">D.final</option>
															<option value="E">E.child</option>
															<option value="F">F.specialist</option>
															<option value="G">G.a couple of</option>
															<option value="H">H.restricted</option>
														</select>  of pediatricians polled in a recent survey approved parental spanking in certain situations. 
													</div>
												</div>
										
												<fieldset style="border: 1px solid" class="mt-3">
													<div class="container">
														<div class="row justify-content-around">
															<div class="col-lg-4"> A.  90% </div>
															<div class="col-lg-4"> B.  65% </div>
															<div class="col-lg-4"> C.  given </div>
														</div>
														<div class="row justify-content-around">
															<div class="col-lg-4"> D.  final </div>
															<div class="col-lg-4"> E.  child </div>
															<div class="col-lg-4"> F.  specialist </div>
														</div>
														<div class="row">
															<div class="col-lg-4"> G.  a couple of </div>
															<div class="col-lg-6"> H.  restricted </div>
														</div>
													</div>
												</fieldset>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>

						<h3>Passage 2</h3>
						<section>
							<div class="row">
							<div class="col-md-6 col-lg-6 col-xs-6">
								<div class="card-box">
								<div class="box-content">
									<h4>Passage 2</h4>
									<p> Most of our planet is covered by water. There is so much of it that if all the mountains of the world were levelled and their debris dumped into the oceans, then the surface of the globe would be entirely submerged beneath water to a depth of several thousand metres. The great basins between the continents, in which all this water lies, are themselves more varied, topographically, than the surface of the land. The highest terrestrial mountain, Mount Everest, would fit into the deepest part of the ocean with its peak a kilometre beneath the surface. On the other hand, the biggest mountains in the sea are so high that they rise above the surface of the waters to form chains of islands. Mauna Kea, the highest of the Hawaian volcanoes, measured from its base on the ocean floor, is more than 10,000 metres high and so can claim to be the highest mountain on the planet. </p>
									<p> The seas first formed when the earth began to cool soon after its birth and hot water vapour condensed on its surface. They were further fed by water gushing through volcanic vents from the interior of the earth. The water of these young seas was not pure, like rainwater, but contained significant quantities of chlorine, bromide, iodine and nitrogen, as well as traces of other substances. Since then, other ingredients have been added. As continental rocks weather and erode, they produce salts which are carried in solution down to the sea by the rivers.  So, over the millennia, the sea has been getting saltier and saltier. </p>
									<p> Life first appeared in this chemically rich water some 3,500 million years ago. We know from fossils that the first organisms were simple, single-cell bacteria and algae. Organisms like them still exist in the sea today. They are the basis of all marine life. Indeed, if it were not for these algae, the seas would still be completely sterile and the land uncolonised. The biggest of these creatures is about a millimetre across, the smallest about one-fiftieth that size. Their tiny bodies are encased in delicate shells, some of calcium carbonate, some of glassy silica. They have a multitude of exquisite shapes made up of prongs and spears with radiating spines and delicate lattices. They exist in immense numbers - a cubic metre of sea water may contain 200,000 - and since they do not propel themselves through the water but drift, they are called phytoplankton, a word which is derived from Greek meaning simply, wandering plants. </p>
									<p> Among them float vast numbers of small animals called zooplankton. A large proportion of these are single-celled, like the floating algae, and differ from them primarily in the fact that they lack chlorophyll and so cannot photosynthesise for themselves. Instead, they eat those that do. There are other bigger creatures too, of many different kinds - transparent worms studded with phosphorescent lights, small jellyfish, swimming crabs and vast numbers of small shrimps. All these creatures are permanent members of the community. Others are temporary visitors such as the larvae of crabs, starfish, worms and molluscs. These immature forms bear no resemblance to their adult forms but are merely </p>
									<p> transparent globes. All these varied creatures feed voraciously on the floating algae or on one another, and the entire group, known more commonly simply as plankton, forms a living soup which is the staple diet of a multitude of other bigger creatures. Plankton feeders in shallow waters can fix themselves to the sea floor and rely on the tides and currents to bring food to them. In mid-ocean, however, the floor is below the reach of the sunlight and so out beyond the domain of the plankton. Plankton feeders, therefore, cannot remain attached to the bottom here, but must be active swimmers. </p>
									<p> They need not, however, swim very fast. Indeed, speed may be a waste of energy since there is a limit to the rate at which a really large collecting net can profitably pass through the water. Faster than that, a pressure ridge builds up in front of the net which deflects the oncoming water. But though plankton feeders do not move very swiftly, their diet is so nourishing that they sometimes grow to enormous size. The manta-ray, for example, grows to a width of 6 metres. It has a pair of flipper-like wings on either side of its head which channel the water into its vast rectangular mouth. The water leaves its throat through slits on either side of its head. The slits are lined with combs which catch the plankton. A distant cousin of the ray, the basking shark, uses the same sort of apparatus to gather the same food. It grows even bigger than the manta, to a length of 12 metres and a weight of 4 tonnes, and it can process 1000 tonnes of water in an hour. Its top speed is around 5 kilometres an hour, so slow that people encountering it thought it was merely lazing in the sunlit waters, even though in reality it was just collecting its food. </p>
									<p> (Adapted from <b>'Life on Earth'</b> by David Attenborough) </p>
								</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6 col-xs-6">
								<div class="card-box">
								<div class="box-content">
									<p class="font-16"><b>Questions 14 - 18</b><br>
									Select TRUE, FALSE or NOT GIVEN for each question:</p>
									<div class="container">
									<div class="row">
										<div class="col-md-12"> 14. The greatest variety of landscapes on Earth can be found below the surface of the oceans. </div>
										<div class="col-auto mt-2 col-md-5">
										<select class="custom-select" name="q14">
											<option selected="">Select Answer</option>
											<option value="TRUE">TRUE</option>
											<option value="FALSE">FALSE</option>
											<option value="NOT GIVEN">NOT GIVEN</option>
										</select>
										</div>
									</div>
									<div class="row mt-2">
										<div class="col-md-12"> 15. The Earth was formed 3,500 million years ago. </div>
										<div class="col-auto mt-2 col-md-5">
										<select class="custom-select" name="q15">
											<option selected="">Select Answer</option>
											<option value="TRUE">TRUE</option>
											<option value="FALSE">FALSE</option>
											<option value="NOT GIVEN">NOT GIVEN</option>
										</select>
										</div>
									</div>
									<div class="row mt-2">
										<div class="col-md-12"> 16. The first life on Earth appeared in the pure rainwater pools. </div>
										<div class="col-auto mt-2 col-md-5">
										<select class="custom-select" name="q16">
											<option selected="">Select Answer</option>
											<option value="TRUE">TRUE</option>
											<option value="FALSE">FALSE</option>
											<option value="NOT GIVEN">NOT GIVEN</option>
										</select>
										</div>
									</div>
									<div class="row mt-2">
										<div class="col-md-12"> 17. The first living organisms were minute, multi-coloured creatures. </div>
										<div class="col-auto mt-2 col-md-5">
										<select class="custom-select" name="q17">
											<option selected="">Select Answer</option>
											<option value="TRUE">TRUE</option>
											<option value="FALSE">FALSE</option>
											<option value="NOT GIVEN">NOT GIVEN</option>
										</select>
										</div>
									</div>
									<div class="row mt-2">
										<div class="col-md-12"> 18. These organisms move from place to place with the ocean currents. </div>
										<div class="col-auto mt-2 col-md-5">
										<select class="custom-select" name="q18">
											<option selected="">Select Answer</option>
											<option value="TRUE">TRUE</option>
											<option value="FALSE">FALSE</option>
											<option value="NOT GIVEN">NOT GIVEN</option>
										</select>
										</div>
									</div>
									</div>
									<!-- end container-->
									<hr>
									<p class="font-16"><b>Questions 19 - 21</b><br>
									Choose the correct answer for each question:</p>
									<div class="container">
									<div class="mt-3">
										<label>19. What do we know about the first living organisms?</label>
										<div class="custom-control custom-radio">
										<input type="radio" id="q19-1" name="q19" class="custom-control-input" value="A">
										<label class="custom-control-label" for="q19-1"><b>A.</b> They were all about the same size.</label>
										</div>
										<div class="custom-control custom-radio">
										<input type="radio" id="q19-2" name="q19" class="custom-control-input" value="B">
										<label class="custom-control-label" for="q19-2"><b>B.</b> They had simple cell structures.</label>
										</div>
										<div class="custom-control custom-radio">
										<input type="radio" id="q19-3" name="q19" class="custom-control-input" value="C">
										<label class="custom-control-label" for="q19-3"><b>C.</b> They were all covered by calcium shells.</label>
										</div>
										<div class="custom-control custom-radio">
										<input type="radio" id="q19-4" name="q19" class="custom-control-input" value="D">
										<label class="custom-control-label" for="q19-4"><b>D.</b> They swam slowly through the water.</label>
										</div>
									</div>
									<div class="mt-4">
										<label>20.Why can plankton feeders which live in mid-ocean not fix themselves to the sea-bed?</label>
										<div class="custom-control custom-radio">
										<input type="radio" id="q20-1" name="q20" class="custom-control-input" value="A">
										<label class="custom-control-label" for="q20-1"><b>A.</b> Because the sea-bed is too deep for them to reach.</label>
										</div>
										<div class="custom-control custom-radio">
										<input type="radio" id="q20-2" name="q20" class="custom-control-input" value="B">
										<label class="custom-control-label" for="q20-2"><b>B.</b> Because they rely on the sea currents for their food.</label>
										</div>
										<div class="custom-control custom-radio">
										<input type="radio" id="q20-3" name="q20" class="custom-control-input" value="C">
										<label class="custom-control-label" for="q20-3"><b>C.</b> Because they are active swimmers.</label>
										</div>
										<div class="custom-control custom-radio">
										<input type="radio" id="q20-4" name="q20" class="custom-control-input" value="D">
										<label class="custom-control-label" for="q20-4"><b>D.</b> Because there is no food for them there.</label>
										</div>
									</div>
									<div class="mt-4">
										<label>21.What is the main difference between zooplankton and the floating algae?</label>
										<div class="custom-control custom-radio">
										<input type="radio" id="q21-1" name="q21" class="custom-control-input" value="A">
										<label class="custom-control-label" for="q21-1"><b>A.</b> They all have different cell structures.</label>
										</div>
										<div class="custom-control custom-radio">
										<input type="radio" id="q21-2" name="q21" class="custom-control-input" value="B">
										<label class="custom-control-label" for="q21-2"><b>B.</b> Zooplankton don’t contain the chemical needed to photosynthesise.</label>
										</div>
										<div class="custom-control custom-radio">
										<input type="radio" id="q21-3" name="q21" class="custom-control-input" value="C">
										<label class="custom-control-label" for="q21-3"><b>C.</b> Zooplankton are much larger than the floating algae.</label>
										</div>
										<div class="custom-control custom-radio">
										<input type="radio" id="q21-4" name="q21" class="custom-control-input" value="D">
										<label class="custom-control-label" for="q21-4"><b>D.</b> Floating algae eat zooplankton in order to photosynthesise.</label>
										</div>
									</div>
									</div>
									<hr>
									<p class="font-16"><b>Questions 22 - 26</b><br>
									Complete the paragraph with words from the box below:</p>
									
										<div class="row">
										<div class="col-md-12" style="line-height: 1.8;">
											Plankton feeders do not move very swiftly. The food they eat is so nourishing that they sometimes grow to <br><b>(22)</b>
										<input type="text" name="q22" autocomplete="off">
										proportions. The manta-ray, for example, grows to a width of 6 metres. It has a pair of flipper-like wings on both sides of its head which draw the water into its vast rectangular mouth. The water leaves its throat through <br><b>(23)</b>
										<input type="text" name="q23" autocomplete="off">
										on either side of its head. These are lined with combs which catch the plankton. A <br><b>(24)</b>
										<input type="text" name="q24" autocomplete="off">
										of the ray, the basking shark, catches its food in much the same way. It grows even bigger than the manta, to a length of 12 metres and a weight of 4 tonnes, and it can <br><b>(25)</b>
										<input type="text" name="q25" autocomplete="off">
										through1000 tonnes of water in an hour. Its top speed is around 5 kilometres an hour, so slow that for a long time people thought it was merely <br><b>(26)</b>
										<input type="text" name="q26" autocomplete="off">
										in the sunlit waters, even though in reality it was just taking in its food. Hence its name.
										</div>
										</div>
									<br>
									<fieldset style="border: 1px solid;">
										<div class="row justify-content-between">
										<div class="col-lg-2"> relative </div>
										<div class="col-lg-2"> family </div>
										<div class="col-lg-2"> collect </div>
										<div class="col-lg-2"> gigantic </div>
										<div class="col-lg-3"> consume </div>
										</div>
										<div class="row justify-content-between">
										<div class="col-lg-2"> minute </div>
										<div class="col-lg-2"> openings </div>
										<div class="col-lg-2"> relax </div>
										<div class="col-lg-2"> basking </div>
										<div class="col-lg-3"> sift </div>
										</div>
									</fieldset>
									<br>
								
								</div>
								</div>
							</div>
							</div>
						</section>

						<h3>Passage 3</h3>
						<section>
							<div class="row">
							<div class="col-md-6 col-lg-6 col-xs-6">
								<div class="card-box">
								<div class="box-content">
									<h4>Passage 2</h4>
									<h4>Face blindness</h4>
									<p> Prosopagnosia is a disorder of face perception where the ability to recognize faces is impaired, while the ability to recognize other objects may be relatively intact. The term originally referred to a condition following acute brain damage, but a congenital form of the disorder has been proposed, which may be inherited by about 2.5% of the population. </p>
									<p> Few successful therapies have so far been developed for affected people, although individuals often learn to use 'piecemeal' or 'feature by feature' recognition strategies. This may involve secondary clues such as clothing, posture, hair color, body shape, and voice. Because the face seems to function as an important identifying feature in memory, it can also be difficult for people with this condition to keep track of information about people, and socialize normally with others. </p>
									<p> The study of prosopagnosia has been crucial in the development of theories of face perception. Because prosopagnosia is not a unitary disorder (i.e. different people may show different types and levels of impairment), it has been argued that face perception involves a number of stages, each of which can be separately damaged. This is reflected not just in the amount of impairment displayed, but also in the qualitative differences in impairment that a person with prosopagnosia may exhibit. Prosopagnosia is usually acquired through extensive neurological damage. </p>
									<p> This sort of evidence has been crucial in supporting the theory that there may be a specific face perception system in the brain. This is counterintuitive to many people, as not everyone experiences faces as 'special' or perceived in a different way from other objects in the rest of the world. </p>
									<p> A recent case report described a closely related condition called prosopamnesia, in which the subject, from birth, could perceive faces normally, but had a severely impaired ability to remember them. </p>
									<p> Until late in the 20<sup>th</sup> century, prosopagnosia was thought to be quite rare and solely associated with brain injury or neurological illness affecting specific areas of the brain. However, recently a form of congenital prosopagnosia has been proposed, in which people are born with an impairment in recognizing and perceiving faces, as well as other objects and visual scenes. </p>
									<p> Dr Jane Whittaker, writing in 1999, described the case of a Mr. C. and referred to other similar cases. The reported cases suggest that this form of the disorder may be heritable and much more common than previously thought (about 2.5% of the population may be affected), although this congenital disorder is commonly accompanied by other forms of visual agnosia, and may not be "pure" prosopagnosia. It has been suggested that very mild cases of face blindness are much more common, perhaps affecting 10% of the population, although there have not been any studies confirming this. The inability to keep track of the identity of characters in movies is a common complaint. </p>
									<p> A classic case of a prosopagnosia is presented by "Dr. P." in Oliver Sacks' 1985 book The Man Who Mistook His Wife for a Hat, though this is more properly considered "agnosia." Although Dr. P. could not recognize his wife from her face, he was able to recognize her by her voice. His recognition of pictures of his family and friends appeared to be based on highly specific features, such as his brother's square jaw and big teeth. </p>
									<h5>Associative prosopagnosia</h5>
									<p> Associative prosopagnosia is thought to be an impairment to the links between early face perception processes and the semantic information we hold about people in our memories. People with this form of the disorder may be able to say whether photos of people's faces are the same or different and derive the age and gender from a face (suggesting they can make sense of some face information) but may not be able to subsequently identify the person or provide any information about them such as their name, occupation, or when they were last encountered. They may be able to recognize and produce such information based on non-face information such as voice, hair, or even particularly distinctive facial features (such as a distinctive moustache) that do not require the structure of the face to be understood. Typically such people do not report that 'faces make no sense' but simply that they do not look distinctive in any way. </p>
									<h5>Developmental prosopagnosia</h5>
									<p> Developmental prosopagnosia (DP) is a face-recognition deficit that is lifelong, manifesting in early childhood, and that cannot be attributed to acquired brain damage. However, a number of studies have found functional deficits in DP both on the basis of EEG measures and MRI. It has been suggested that a genetic factor is responsible for the condition. The term “hereditary prosopagnosia” was introduced if DP affected more than one family member, essentially accenting the possible genetic contribution of this condition. To examine this possible genetic factor, 689 randomly selected students were administered a survey in which seventeen developmental prosopagnosics were quantifiably identified. Family members of fourteen of the DP individuals were interviewed to determine prosopagnosia-like characteristics, and in all fourteen families, at least one other affected family member was found. </p>
									<p> There seem to be two categories of DP patients: first, patients who are impaired in basic face processing (age estimation, judgment of facial affect) and also show deficits on other forms of visual processing; and second, patients with pure face-recognition impairments in the presence of intact basic visual processing. The first group of patients fail to obtain view-centered descriptions. According to the Bruce and Young model of face recognition, these are precursors of the more abstract expression-independent descriptions. View-centered descriptions do not seem to be specific for faces, as the patients with impairments of processing the physical aspects of faces also show difficulties in non-facial tasks like object recognition or tests of visuo-spatial abilities. However, there is as yet only limited evidence for a classification into different subtypes. </p>
								</div>
								</div>
							</div>
						
							<div class="col-md-6 col-lg-6 col-xs-6">
							<div class="card-box">
							<div class="box-content">
							<p class="font-16"><b>Questions 27 - 32</b><br>
								Do the following statements agree with the information given in the passage?<br>
								For Questions 27-32 select</p>
								<div class="row">
									<div class="offset-md-1 col-md-3"><b>TRUE</b></div>
									<div class="col-md-8">if the statement agrees with the information</div>
									<div class="offset-md-1 col-md-3"><b>FALSE</b></div>
									<div class="col-md-8">if the statement contradicts the information</div>
									<div class="offset-md-1 col-md-3"><b>NOT GIVEN</b></div>
									<div class="col-md-8">if there is no information on this</div>
								</div>
								<div class="container">
								<div class="row mt-2">
									<div class="col-md-12"> 27. Prosopagnosia is the result of some brain injury. </div>
									<div class="col-auto mt-2 col-md-5">
									<select class="custom-select" name="q27">
										<option selected="">Select Answer</option>
										<option value="TRUE">TRUE</option>
										<option value="FALSE">FALSE</option>
										<option value="NOT GIVEN">NOT GIVEN</option>
									</select>
									</div>
								</div>
								<div class="row mt-2">
									<div class="col-md-12"> 28.  Once scientists realized this was a problem, they were able to develop a number of therapies for treating the condition. </div>
									<div class="col-auto mt-2 col-md-5">
									<select class="custom-select" name="q28">
										<option selected="">Select Answer</option>
										<option value="TRUE">TRUE</option>
										<option value="FALSE">FALSE</option>
										<option value="NOT GIVEN">NOT GIVEN</option>
									</select>
									</div>
								</div>
								<div class="row mt-2">
									<div class="col-md-12"> 29. People who suffer from this condition may have difficulty in their relationships with other people. </div>
									<div class="col-auto mt-2 col-md-5">
									<select class="custom-select" name="q29">
										<option selected="">Select Answer</option>
										<option value="TRUE">TRUE</option>
										<option value="FALSE">FALSE</option>
										<option value="NOT GIVEN">NOT GIVEN</option>
									</select>
									</div>
								</div>
								<div class="row mt-2">
									<div class="col-md-12"> 30. Studies have shown that one in ten people are affected by a mild form of the condition. </div>
									<div class="col-auto mt-2 col-md-5">
									<select class="custom-select" name="q30">
										<option selected="">Select Answer</option>
										<option value="TRUE">TRUE</option>
										<option value="FALSE">FALSE</option>
										<option value="NOT GIVEN">NOT GIVEN</option>
									</select>
									</div>
								</div>
								<div class="row mt-2">
									<div class="col-md-12"> 31. Not much was known about the condition until the end of the 20<sup>th</sup> century. </div>
									<div class="col-auto mt-2 col-md-5">
									<select class="custom-select" name="q31">
										<option selected="">Select Answer</option>
										<option value="TRUE">TRUE</option>
										<option value="FALSE">FALSE</option>
										<option value="NOT GIVEN">NOT GIVEN</option>
									</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-10"> 32. In the case of Dr P., the patient had recently had a brain injury, leading to the condition. </div>
									<div class="col-auto mt-2 col-md-5">
									<select class="custom-select" name="q32">
										<option selected="">Select Answer</option>
										<option value="TRUE">TRUE</option>
										<option value="FALSE">FALSE</option>
										<option value="NOT GIVEN">NOT GIVEN</option>
									</select>
									</div>
								</div>
								<hr>
								<p class="font-16"><b>Questions 33 - 37</b><br>
									Classify the following statements as referring to the medical condition.<br>
									For Questions 33 – 37 write a letter, A, B, or C, </p>
								<div class="row">
									<div class="offset-md-1 col-md-3" align="right"><b>A.</b></div>
									<div class="col-md-8">Associative prosopagnosia</div>
									<div class="offset-md-1 col-md-3" align="right"><b>B.</b></div>
									<div class="col-md-8">Developmental prosopagnosia</div>
									<div class="offset-md-1 col-md-3" align="right"><b>C.</b></div>
									<div class="col-md-8">Both A and B</div>
								</div>
								<div class="row mt-2">
									<div class="col-md-10"> 33. People show symptoms early in life. </div>
									<div class="col-auto mt-2 col-md-5">
									<select class="custom-select" name="q33">
										<option selected="">Select Answer</option>
										<option value="A">A</option>
										<option value="B">B</option>
										<option value="C">C</option>
									</select>
									</div>
								</div>
								<div class="row mt-2">
									<div class="col-md-10"> 34. May be passed on from family members. </div>
									<div class="col-auto mt-2 col-md-5">
									<select class="custom-select" name="q34">
										<option selected="">Select Answer</option>
										<option value="A">A</option>
										<option value="B">B</option>
										<option value="C">C</option>
									</select>
									</div>
								</div>
								<div class="row mt-2">
									<div class="col-md-10"> 35. Can identify certain characteristics from pictures of faces. </div>
									<div class="col-auto mt-2 col-md-5">
									<select class="custom-select" name="q35">
										<option selected="">Select Answer</option>
										<option value="A">A</option>
										<option value="B">B</option>
										<option value="C">C</option>
									</select>
									</div>
								</div>
								<div class="row mt-2">
									<div class="col-md-10"> 36. Not necessarily the result of brain damage. </div>
									<div class="col-auto mt-2 col-md-5">
									<select class="custom-select" name="q36">
										<option selected="">Select Answer</option>
										<option value="A">A</option>
										<option value="B">B</option>
										<option value="C">C</option>
									</select>
									</div>
								</div>
													<div class="row mt-2">
														<div class="col-md-10"> 37. Use aspects such as facial hair to identify people. </div>
														<div class="col-auto mt-2 col-md-5">
														<select class="custom-select" name="q37">
															<option selected="">Select Answer</option>
															<option value="A">A</option>
															<option value="B">B</option>
															<option value="C">C</option>
														</select>
														</div>
													</div>
													<hr>
													<p class="font-16"><b>Questions 38 - 40</b><br>
														Complete the sentences. Type <b>NO MORE THAN ONE WORD</b> for each answer</p>
													<div class="row">
														<div class="col-md-12"> 38. People suffering from prosopagnosia often manage to survive by adopting
														<input type="text" name="q38" autocomplete="off">
														strategies for recognizing people. </div>
													</div>
													<div class="row mt-2">
														<div class="col-md-12"> 39. The condition is not a
														<input type="text" name="q39" autocomplete="off">
														condition, which means that different people exhibit different types and level of impairment. </div>
													</div>
													<div class="row mt-2">
														<div class="col-md-12"> 40. People suffering from a related condition, known as
														<input type="text" name="q40" autocomplete="none">
														could see faces normally, but were unable to recall them. </div>
													</div>
												</div> 
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
@endsection 

@section('javascript') 
	<script src="{{asset('public/js/mocktest/timer_ieltsreading.js')}}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="{{asset('public/assets/assets/ColorPicker.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/assets/assets/rainbow-custom.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/assets/assets/src/TextHighlighter.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/assets/assets/src/TextHighlighter.min.js')}}"></script>
	
	<script type="text/javascript">
		$(document).ready(function() {
			$('input').attr('onChange','javascript:this.value=this.value.toUpperCase();')

			$('input[type="text"]').css('display','inline');
		});

		document.querySelector('body').addEventListener('load', begintimer());
	</script>
	
	<script type="text/javascript">
		(function () {
			var removeBtn = document.getElementById('remove');
			var sandbox = document.getElementById('sandbox');
			var colors = new ColorPicker(document.querySelector('.color-picker'));
			var hltr = new TextHighlighter(sandbox);

			var hltr = new TextHighlighter(document.body);

			colors.onColorChange(function (color) {
				hltr.setColor(color);
			});

			removeBtn.addEventListener('click', function () {
				hltr.removeHighlights();
			});
		})();   
	</script>
@stop
