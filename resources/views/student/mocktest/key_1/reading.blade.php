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
							<li class="breadcrumb-item active">{{Session('name_type')}}</li>
						</ol>
					</div>
					<h4 class="page-title">Reading</h4>
				</div>
			</div>
		</div> 

		<div class="row" >
			<div class="col-md-12">
				<div class="card-box border border-primary">
					<h4 class="m-t-0 header-title"><b>READING</b></h4>
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
	
					<form id="basic-form" action="{{ route('ans_reading') }}" method="Post" autocomplete="off" onsubmit="return confirm('Are you sure you want to finish?');">
						{{ csrf_field() }}
						<input type="hidden" name="std_id" value="{{session('std_id')}}">
						<input type="hidden" name="classroom_id" value="{{ session('class_id') }}">
						<input type="hidden" name="set_exam" value="1">
						<input type="hidden" name="check20" value="">
						<input type="hidden" name="check21" value="">
						<input type="hidden" name="check22" value="">

						<div>
							<h3>Passage 1</h3>
							<section>

								<div class="row" id="sandbox">

									<div class="col-md-6">
										<div class="card-box widget-user">
											<div class="bigBox">
												<div  class="box-content">

													<h4>Zheng He</h4>
													<h6>The Chinese admiral-explorer of the 15th century</h6>
													<p><strong>[A] </strong>Zheng He was born around 1371, to a Muslim family in China's
														southern Yunan Province, just north of Laos. When he was ten
														years old, he, along with other children, was captured by the army,
														and three years later he became a servant in the household of the
														Chinese emperor's fourth son, Prince Zhu Di.<br>
														<br>
														<strong>[B] </strong>He proved himself to be an exceptional servant, becoming skilled
														in the arts of war and diplomacy and serving as an officer of the
														prince. Zhu Di became emperor in 1402, and a year later, he
														appointed Zheng He to the high military position of admiral and
														ordered him to oversee the construction of a Treasure Fleet to
														explore the seas surrounding China.<br>
														<br>
														<strong>[C] </strong> The first Treasure Fleet comprised 62 ships. The four flagships were
														huge wooden boats, some of the largest ever built in history: they
														were approximately 120 metres long and 50 metres wide. The fleet
														assembled at the capital, Nanjing, on the Yangtze River, and
														included 100-metre-long horse ships that carried nothing but
														horses, water ships that carried fresh water for the crew, troop
														transports, supply ships and war ships for offensive and defensive
														needs. The ships were filled with thousands of tons of goods to
														trade with others during the voyage. In the autumn of 1405, the
														fleet set sail with 27,800 men.<br>
														<br>
														<strong>[D] </strong>The fleet used the compass - invented in China in the 11th
														century - for navigation. Marked sticks of incense were burned to
														measure time. Latitude was determined by monitoring the North
														Star in the Northern Hemisphere or the Southern Cross in the
														Southern Hemisphere. The ships of the Treasure Fleet
														communicated with one another through the use of flags, lanterns,
														bells, carrier pigeons, gongs and banners.<br>
														<br>
														<strong>[E] </strong>The destination of the first voyage of the Treasure Fleet was Calicut,
														known as a major trading centre on the south-western coast of
														India. The fleet reached Sri Lanka and India in 1406, and stayed
														there for several months, carrying on barter and trade. The following
														spring, the seasonal change in direction of the monsoon winds
														enabled the ships to sail towards home. On the return voyage, the
														Treasure Fleet was forced to battle with pirates near Sumatra for
														several months. Eventually Zheng He's men managed to capture the
														pirate leader and take him to the Chinese capital Nanjing, where
														they arrived in 1407.<br>
														<br>
														<strong>[F] </strong> A succession of other voyages followed, back to India and Sri Lanka,
														to the rich city of Hormuz on the Persian Gulf, and along the east
														coast of Africa, almost as far south as Mozambique. During each of
														Zheng He's voyages, he encouraged diplomats from other countries
														to travel to China, either aboard his ships or on their own vessels.<br>
														<br>
														<strong>[G] </strong> Emperor Zhu Di died in 1424 and was succeeded by his son Zhu
														Gaozhi. The new emperor cancelled the voyages of the Treasure
														Fleets and ordered shipbuilders and sailors to stop their work and
														return home. Zheng He was appointed military commander of
														Nanjing.<br>
														<br>
														<strong>[H] </strong> The leadership of Zhu Gaozhi did not last long, as he died in 1426 at
														the age of 26. His son - and Zhu Di's grandson - Zhu Zhanji became
														emperor. Zhu Zhanji was much more like his grandfather than his father
														was, and in 1430, he restarted the Treasure Fleet voyages by ordering
														Zheng He to resume his duties as admiral and make a seventh voyage
														in an attempt to restore peaceful relations with the kingdoms of
														Malacca and Siam. It took a year to gear up for the voyage, which
														departed as a large expedition with 100 ships and 27,500 men.<br>
														<br>
														<strong>[I] </strong> Zheng He is believed to have died in 1433, on the return trip,
														although others claim that he died in 1435 after the return to China.
														Nonetheless, the era of exploration for China was soon over, as the
														following emperors prohibited trade with foreign countries and even
														the construction of ocean-going vessels, thus ending an era of trade
														and exploration.<br>
														<br>
														<strong>[J] </strong> It seems likely that a detachment of one of Zheng He's fleets, though
														not the admiral himself, sailed to northern Australia during one of the
														seven voyages. The evidence lies both in the Chinese artefacts found
														there and in the oral history of the native Australians.
													</p>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="card-box">
											<div class="bigBox">
												<div class="box-content">
													<h4 class="m-t-0 header-title">Questions 1-5</h4>
													
													<p class="text-muted m-b-20 font-13"> Reading Passage 1 has ten paragraphs labelled <strong>A-J.</strong> 
														Which paragraph<br />
														contains the following information?<br />
														Choose the correct letter <strong>A-J</strong>
													</p>


													<table class="table table-bordered table-striped">
														<tbody>
															<tr>
																<td style="width:70%"><strong>1</strong>.a summary of journeys to various places</td>
																<td><select class="form-control" name="question1">
																	<option value="">Select</option>
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
																</select></td>
															</tr>
															<tr>

																<td><strong>2</strong>.examples of equipment used during voyages</td>
																<td><select class="form-control" name="question2">
																	<option value="">Select</option>
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
																</select></td>
															</tr>
															<tr>
																<td><strong>3</strong>.speculation concerning a possible destination</td>
																<td><select class="form-control" name="question3">
																	<option value="">Select</option>
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
																</select></td>
															</tr>
															<tr>
																<td><strong>4</strong>.details of the composition of a fleet of ships</td>
																<td><select class="form-control" name="question4">
																	<option value="">Select</option>
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
																</select></td>
															</tr>
															<tr>
																<td><strong>5</strong>.how the weather affected the timing of a voyage</td>
																<td><select class="form-control" name="question5">
																	<option value="">Select</option>
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
																</select></td>
															</tr>
														</tbody>
													</table>

													<hr>

													<h4 class="m-t-0 header-title">Questions 6-9</h4>
													<p class="text-muted m-b-20 font-13"> Complete the sentences below with words taken from Reading Passage 1.<br />
														Use <strong> NO MORE THAN TWO WORDS</strong> for each answer.
													</p>
													<div class="container">
														<div class="row"><strong>6</strong>.The ships carried a large quantity of
															<div class="col col-lg-6" align ="left">
																<input type="text" class="form-control" name="question6" onChange="javascript:this.value=this.value.toUpperCase();">
															</div>
														which were to be sold.</div>
														<div class="row"><strong>7</strong>.The sailors used the night sky to calculate the ships
															<div class="col col-lg-6" align ="left">
																<input type="text" class="form-control" name="question7" onChange="javascript:this.value=this.value.toUpperCase();">
															</div>
														.</div>
														<div class="row"><strong>8</strong>.The fleet sailed to an important
															<div class="col col-lg-6" align ="left">
																<input type="text" class="form-control" name="question8" onChange="javascript:this.value=this.value.toUpperCase();">
															</div>
														in India.</div>
														<div class="row"><strong>9</strong>.While returning to China, the fleet was attacked by
															<div class="col col-lg-6" align ="left">
																<input type="text" class="form-control" name="question9" onChange="javascript:this.value=this.value.toUpperCase();">
															</div>
														.</div>
													</div>

													<hr>

													<h4 class="m-t-0   header-title">Questions 10-13</h4>
													<p class="text-muted m-b-20 font-13">Complete each sentence with the correct ending <strong>A-G</strong> from the box below.<br />
														Select the correct letter <strong>A-G</strong> in boxes 10-13 on your answer sheet.
													</p>
															
													<table class="table table-bordered table-striped">
														<tr>
															<td><strong>10</strong>.Zhu Di</td>
															<td><select class="form-control" name="question10">
																<option value="">Select</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="C">C</option>
																<option value="D">D</option>
																<option value="E">E</option>
																<option value="F">F</option>
																<option value="G">G</option>
															</select></td>
														</tr>
														<tr>
															<td><strong>11</strong>.Zheng He</td>
															<td><select class="form-control" name="question11">
																<option value="">Select</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="C">C</option>
																<option value="D">D</option>
																<option value="E">E</option>
																<option value="F">F</option>
																<option value="G">G</option>
															</select></td>
														</tr>
														<tr>
															<td><strong>12</strong>.Zhu Gaozhi</td>
															<td><select class="form-control" name="question12">
																<option value="">Select</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="C">C</option>
																<option value="D">D</option>
																<option value="E">E</option>
																<option value="F">F</option>
																<option value="G">G</option>
															</select></td>
														</tr>
														<tr>
															<td><strong>13</strong>.Zhu Zhanji</td>
															<td><select class="form-control" name="question13">
																<option value="">Select</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="C">C</option>
																<option value="D">D</option>
																<option value="E">E</option>
																<option value="F">F</option>
																<option value="G">G</option>
															</select></td>
														</tr>
													</table>
													<p>
														<fieldset class="col col-lg-12">
															<strong>[A]</strong> travelled to Australia.<br />
															<strong>[B]</strong> ended trade with other countries.<br />
															<strong>[C]</strong> ended the construction of ships.<br />
															<strong>[D]</strong> took children away from their homes.<br />
															<strong>[E]</strong> wished to end hostilities between China and certain other countries.<br />
															<strong>[F]</strong> made contact with foreign diplomats.<br />
															<strong>[G]</strong> ordered ships to be built.
														</fieldset>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>

							<h3>Passage 2</h3>
							<section>
								<p class="text-muted m-b-30 font-13"> You should spend 20 minutes on <strong>Questions 14-27</strong> which are based on Reading Passage below.</p>
								<div class="row">
									<div class="col-sm-6">
										<div class="card-box">
											<div class="bigBox">
												<div class="box-content">
													<h4>The evacuation of St Kilda</h4>
													<p><b>[A]</b> St Kilda is a tiny archipelago at the mercy of the
														storms of the North Atlantic Ocean. The islands are
														among the most spectacular in Scotland. But the
														greatest fascination is that, for over a thousand
														years, people lived there. Cut off from the mainland
														for most of their history, the islanders had a distinct
														way of living their lives, mainly eating the tens of
														thousands of seabirds that returned year after year
														to breed on the rocks. Their self-sufficiency meant
														that throughout their history, they possessed a
														sense of community that was rare in the modern
														world.<br>
														<br>
														<b>[B]</b> The St Kildans led a lonely life. They had more in
														common with the people of other isolated islands,
														like Tristan da Cunha, than they ever had with
														fellow Scots living in the cities of Edinburgh or
														Glasgow. Isolation had a big effect upon their
														attitudes and ideas. The people sacrificed
														themselves year in and year out, in a constant
														battle to secure a livelihood for themselves and the
														rest of the community. In such harsh conditions, life
														was only possible because the whole community
														worked together. <br>
														<br>
														<b>[C]</b> For centuries, the world outside ignored the people
														of St Kilda. They were content on the mainland to
														allow such a remote community to go its own way.
														As long as the people of St Kilda were so isolated,
														they were insulated from the forces that wished
														them to conform. This changed in the 19th century,
														when St Kilda was subject to pressures from the rest
														of the country. Education, organised religion and
														tourism all attempted to throw into doubt the St
														Kildans' way of life. Help, as interpreted by the
														articulate spokesmen of the richer and more
														advanced society on the mainland, was best given
														by persuading the islanders to give up the struggle. <br>
														<br>
														<b>[D]</b> In the early 20th century, the strength of the
														community became weakened as contact with the
														rest of Britain increased. When disease decimated
														their numbers, and wind and sea made it difficult
														to get adequate supplies of food, the St Kildans
														were forced to turn to the mainland for assistance.
														However, many on the British mainland, including
														the government, believed that agreeing to the St 
														Kildans' requests for a nurse and a postal service
														would be a waste of money. More fundamentally, it
														was thought that if the St Kildans could not adapt
														and accept the values of the dominant society, the
														only solution was to evacuate the islands. <br>
														<br>
														<b>[E]</b> In 1930, the St Kildans finally agreed to abandon
														their homes. They settled on the Scottish mainland,
														not realising that it meant throwing themselves into
														the 20th century. As adults, they had to accept
														those values that most Scots are taught to believe
														in from birth. For instance, the islanders found it
														difficult to base their existence upon money. They
														had never lived in a world in which they bought
														goods and services from each other. They had, of
														course, accepted gladly the opportunity of making a 
														little money for themselves at the expense of
														tourists, but that intrusion had never altered the
														basic relationship one St Kildan had had with
														another. <br>
														<br>
														<b>[F]</b> The islanders showed themselves indifferent to the
														jobs they were given on the mainland. The labours
														asked of them were unskilled contrasted with the
														spectacular feats they had once performed in order
														to kill seabirds. Moreover, while they had been 
														living on the islands, killing birds had directly
														provided the community with food to survive. On
														the mainland, on the other hand, the tasks that
														they were asked to perform did not provide them
														immediately with what was needed to keep them
														fed and warm. There was an intermediate step:
														employment provided money, which in turn made it
														possible to purchase the necessities of life. <br>
														<br>
														<b>[G]</b> The history of the St Kildans after the evacuation, of
														their inability and lack of resolution to fit into urban
														society, makes sad reading. If St Kilda had been an
														isolated home, the islanders were to discover that
														the remote district of Scotland in which they were
														settled was even more alien. On St Kilda, at least
														they had formed a tightly-knit community with a
														common purpose. When they were resettled on the
														mainland, the St Kildans were forced to live in
														homes far apart in a society whose values were
														unacceptable, if not incomprehensible, to the
													majority of them. For many, the move was a tragedy. </p>
												</div>
											</div>
										</div>
									</div>

									<div class="col-sm-6">
										<div class="card-box">
											<div class="bigBox">
												<div class="box-content">
													<h4 class="m-t-0 header-title">Questions 14-19</h4>
													<p class="text-muted m-b-20 font-13">Reading Passage 2 has seven paragraphs <strong>A-G</strong>.<br>
														Choose the correct heading for each paragraph from the list of headings below.<br>
														Choose the correct number <strong>i--x</strong></p>
														<fieldset class="col col-lg-12">
															<p align="center"><strong>List of Headings</strong></p>
															<ul>
																<li><strong>i </strong>    -  The problem of finding jobs</li>
																<li><strong>ii</strong>    -  Outsides begin to interfere</li>
																<li><strong>iii</strong>   -  A lack of homes</li>
																<li><strong>iv</strong>    -  Setting off for a new life</li>
																<li><strong>v </strong>    -  The community is broken up</li>
																<li><strong>vi</strong>    -    A long period of isolation</li>
																<li><strong>vii</strong>   -    The impact of tourism on island life</li>
																<li><strong>viii</strong>  -   A struggle to survive</li>
																<li><strong>ix</strong>    -   Work has a different function</li>
																<li><strong>x </strong>    -    Asking for help</li>
															</ul>
														</fieldset><br>
														<fieldset style="background:#f3f3f3;">
															<p align="left"><i>Example</i> : Paragraph <strong>A</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>Answer</i>&nbsp; vi</p>
														</fieldset>
														<br>
														<table class="table table-bordered table-striped">
															<tbody>
																<tr>
																	<td><strong>14</strong>. Paragraph <b>B</b></td>
																	<td><select class="form-control" name="question14">
																		<option value="">Select</option>
																		<option value="I">i</option>
																		<option value="II">ii</option>
																		<option value="III">iii</option>
																		<option value="IV">iv</option>
																		<option value="V">v</option>
																		<option value="VI">vi</option>
																		<option value="VII">vii</option>
																		<option value="VIII">viii</option>
																		<option value="IX">ix</option>
																		<option value="X">x</option>
																	</select> 
																</td>
															</tr>
															<tr>
																<td><strong>15</strong>. Paragraph <b>C</b></td>
																<td><select class="form-control" name="question15">
																	<option value="">Select</option>
																	<option value="I">i</option>
																	<option value="II">ii</option>
																	<option value="III">iii</option>
																	<option value="IV">iv</option>
																	<option value="V">v</option>
																	<option value="VI">vi</option>
																	<option value="VII">vii</option>
																	<option value="VIII">viii</option>
																	<option value="IX">ix</option>
																	<option value="X">x</option>
																</select></td>
															</tr>
															<tr>
																<td><strong>16</strong>. Paragraph <b>D</b></td>
																<td><select class="form-control" name="question16">
																	<option value="">Select</option>
																	<option value="I">i</option>
																	<option value="II">ii</option>
																	<option value="III">iii</option>
																	<option value="IV">iv</option>
																	<option value="V">v</option>
																	<option value="VI">vi</option>
																	<option value="VII">vii</option>
																	<option value="VIII">viii</option>
																	<option value="IX">ix</option>
																	<option value="X">x</option>
																</select></td>
															</tr>
															<tr>
																<td><strong>17</strong>. Paragraph <b>E</b></td>
																<td><select class="form-control" name="question17">
																	<option value="">Select</option>
																	<option value="I">i</option>
																	<option value="II">ii</option>
																	<option value="III">iii</option>
																	<option value="IV">iv</option>
																	<option value="V">v</option>
																	<option value="VI">vi</option>
																	<option value="VII">vii</option>
																	<option value="VIII">viii</option>
																	<option value="IX">ix</option>
																	<option value="X">x</option>
																</select></td>
															</tr>
															<tr>
																<td><strong>18</strong>. Paragraph <b>F</b></td>
																<td><select class="form-control" name="question18">
																	<option value="">Select</option>
																	<option value="I">i</option>
																	<option value="II">ii</option>
																	<option value="III">iii</option>
																	<option value="IV">iv</option>
																	<option value="V">v</option>
																	<option value="VI">vi</option>
																	<option value="VII">vii</option>
																	<option value="VIII">viii</option>
																	<option value="IX">ix</option>
																	<option value="X">x</option>
																</select></td>
															</tr>
															<tr>
																<td><strong>19</strong>. Paragraph <b>G</b></td>
																<td><select class="form-control" name="question19">
																	<option value="">Select</option>
																	<option value="I">i</option>
																	<option value="II">ii</option>
																	<option value="III">iii</option>
																	<option value="IV">iv</option>
																	<option value="V">v</option>
																	<option value="VI">vi</option>
																	<option value="VII">vii</option>
																	<option value="VIII">viii</option>
																	<option value="IX">ix</option>
																	<option value="X">x</option>
																</select></td>
															</tr>
														</tbody>
													</table>

													<hr>
													<h4 class="m-t-0 header-title">Questions 20-22</h4>
													<p class="text-muted m-b-20 font-13">Choose <strong>THREE</strong> letters <strong>A-H.</strong><br>
														Which <strong>THREE</strong>  points are made about how people used to live on St Kilda?
													</p>

													<div class="mt-3">
														<div class="custom-control custom-checkbox mb-4">
															<input id="checkbox0" type="checkbox" class="custom-control-input" value="A" name="check20[]">
															<label for="checkbox0" class="custom-control-label" style="margin-top: 0px;">
																<strong>[A]</strong> The chief source of food was found locally
															</label>
														</div>

														<div class="custom-control custom-checkbox mb-4">
															<input id="checkbox1" type="checkbox" class="custom-control-input" value="B" name="check20[]" >
															<label for="checkbox1" class="custom-control-label" style="margin-top: 0px;">
																<strong>[B]</strong> It was essential for people to help each other
															</label>
														</div>
												
														<div class="custom-control custom-checkbox mb-4">
															<input id="checkbox2" type="checkbox" class="custom-control-input" value="C" name="check20[]" >
															<label for="checkbox2" class="custom-control-label" style="margin-top: 0px;">
																<strong>[C]</strong> Very few people had visited mainland Scotland
															</label>
														</div>

														<div class="custom-control custom-checkbox mb-4">
															<input id="checkbox3" type="checkbox" class="custom-control-input" value="D" name="check20[]" >
															<label for="checkbox3" class="custom-control-label" style="margin-top: 0px;">
																<strong>[D]</strong> The people had a different religion from the majority of Scottish people.
															</label>
														</div>

														<div class="custom-control custom-checkbox mb-4">
															<input id="checkbox4" type="checkbox" class="custom-control-input" value="E" name="check20[]" >
															<label for="checkbox4" class="custom-control-label" style="margin-top: 0px;">
																<strong>[E]</strong> The people wanted a more advanced way of life
															</label>
														</div>

														<div class="custom-control custom-checkbox mb-4">
															<input id="checkbox5" type="checkbox" class="custom-control-input" value="G" name="check20[]">
															<label for="checkbox5" class="custom-control-label" style="margin-top: 0px;">
																<strong>[G]</strong> Money played an insignificant role in life.
															</label>
														</div>

														<div class="custom-control custom-checkbox mb-4">
															<input id="checkbox6" type="checkbox" class="custom-control-input" value="H" name="check20[]">
															<label for="checkbox6" class="custom-control-label" style="margin-top: 0px;">
																<strong>[H]</strong> The people disliked visits by tourists.
															</label>
														</div>
													</div>

													<div class="container">

														<hr>

														<h4 class="m-t-0 header-title">Questions 23-26</h4>
														<p class="text-muted m-b-20 font-13">Complete the summary below.<br />
															Choose <strong>NO MORE THAN ONE WORD</strong> from the passage for each answer<br />
															Type your answers in boxes 23-26 on your answer sheet.<br>
														</p>
														
														<p align="center"><b>The twentieth century</b></p>
														<div class="container">
															<div class="row"> 
																In the early 20th century, the islanders had more <strong> [23]</strong>
																<div class="col col-lg-6">
																	<input type="text" class="form-control" name="question23" onChange="javascript:this.value=this.value.toUpperCase();" autocomplete="rutjfkde">
																</div>
																with the rest of Scotland. The number of inhabitants fell because of <strong> [24]</strong>
																<div class="col col-lg-6">
																	<input type="text" class="form-control" name="question24" onChange="javascript:this.value=this.value.toUpperCase();" autocomplete="rutjfkde">
																</div>
																and bad weather led to shortages of <strong> [25]</strong>
																<div class="col col-lg-6" aling ="left">
																	
																	<input type="text" class="form-control" name="question25" onChange="javascript:this.value=this.value.toUpperCase();" autocomplete="rutjfkde">
																</div>
																Many people on the mainland were unwilling to spend money on a <strong> [26]</strong>
																<div class="col col-lg-6" aling ="left">
																	<input type="text" class="form-control" name="question26" onChange="javascript:this.value=this.value.toUpperCase();" autocomplete="rutjfkde">
																</div>or other services for St Kilda. 
															</div>
														</div>
														
													</div>

													<hr>

													<h4 class="m-t-0 header-title">Question 27</h4>
													<p class="text-muted m-b-20 font-13">Choose the correct letter,<strong> A, B, C </strong> or <strong>D</strong><br /> 
														Which of the following is the most suitable subtitle for Reading Passage 2?
													</p>
													<p> <b>[A]</b> The role of money in modern communities<br />
														<b>[B]</b> How a community adapted to a different form of life<br />
														<b>[C]</b> The destruction of an old-fashioned community<br />
														<b>[D]</b> How a small community resisted government plans 
													</p>

													<div class="row">
														<div class="col-sm-5">
															<table class="table table-bordered table-striped">
																<tbody>
																	<tr>
																		<td><strong>27</strong>.</td>
																		<td><select class="form-control" name="question27">
																			<option value="">Select</option>
																			<option value="A">A</option>
																			<option value="B">B</option>
																			<option value="C">C</option>
																			<option value="D">D</option>
																		</select></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>

							<h3>Passage 3</h3>
							<section>
								<p class="text-muted m-b-30 font-13"> You should spend 20 minutes on <strong>Questions 28-40</strong> which are based on Reading Passage below.</p>
								<div class="row">
									<div class="col-sm-6">
										<div class="card-box">
											<div class="bigBox">
												<div class="box-content"> 
													<h4>The Nature of Language</h4>
													<p>Language is an extraordinary institution, standing in as much need
														of explanation as any other aspect of human life, possibly more.
														But to explain it, one has to stop taking it for granted. Virtually all
														of us are pretty fluent employers of language; we grow up with it
														as we grow up with the ability to walk or run, and using it seems
														as easy as those activities. To see how truly remarkable language
														is, we must, as the psychologist Wolfgang Köhler put it, retreat to a
														'psychic distance' from the subject.<br />
														<br />
														Language is the most complex and sophisticated of our
														possessions. Only very recently, for instance, have grammarians
														begun to uncover the enormously complicated rules of grammar
														which underlie our languages, and they still have a long way to
														go. Computers can be marvellous at dealing with mathematics
														and playing chess. Yet, at least at present, no computer is at all
														close to the reproduction of human verbal abilities. Computers
														are, at best, second-rate users of language, while animals are not
														users of language at all.<br />
														<br />
														Talking might be seen as the defining characteristic of human
														beings. No doubt we are also the only creatures who laugh, and
														have two legs and no feathers - but that is not too interesting. We
														may be the only creatures who use tools and who organise
														politically - and this is more interesting. Still, amongst many
														peoples, political organisation and the use of tools are extremely
														rudimentary, whereas all known communities have possessed
														sophisticated languages. Further, it is probably easier to find
														analogies in the animal world to tools and politics than it is to
														language.<br />
														<br />
														Many animals, of course, are capable of producing noises which
														cause their friends or enemies to respond in certain ways, but
														these noises are so different in kind from human speech that it is,
														at best, a misleading analogy to speak of such noises being part of
														a language. First, animals are incapable of organising their noises
														into sequences beyond the most primitive level, whereas the most
														salient characteristic of human talkers is their ability to form an
														infinite number of sequences from a limited stock of noises. As
														the poet and critic Herbert Read once remarked, 'no difference
														between man and beast is more important than syntax'. Second,
														animals produce their noises in direct response to stimuli in their
														environment, as when a bird squawks at the approach of a cat. Such
														noises are analogous to human cries of pain or alarm, not to the
														sentences we produce. Nothing in my environment 'stimulated' me
														to write down the sentence I just wrote down. In the light of this, it
														is easier to understand those followers of the French philosopher
														René Descartes who found it impossible to suppose that animals
														could be capable of any mental activity. 'If beasts reasoned,' said one
														of them, 'they would be capable of true speech with its infinite
														variety.' We might not want to go as far as that, but at least we must
														admit that speech is one, if not <I>the</I>, salient feature of human nature
														which distinguishes it from any other sort of nature.<br />
														<br />
														Not only is language our most sophisticated, important and unique
														possession, it is also, remarkably enough, an almost universal human
														possession. As already mentioned, all known human societies have
														possessed a language, whatever else each of them may have lacked.
														Not only that, but whereas there are mathematical geniuses and
														chess-playing geniuses, when it comes to language, nearly all of us
														are capable of producing and understanding an infinite number of
														sentences.<br />
														<br />
														Language is also remarkable in its versatility. By uttering the
														appropriate noises, in the right circumstances, a single person in a
														single day can easily do each of the following: inform others of
														what is happening, ask them to do something, command them,
														excite them, promise them, insult them, express anger and get
														married. As some of these examples show, we do not in general
														utter noises as an activity separate from other activities. We perform
														actions with words, actions which it would be difficult,
														inconvenient or even impossible to perform without words. The
														number of such possible actions is indefinitely large.
													</p>
												</div>
											</div>
										</div>
									</div>

									<div class="col-sm-6">
										<div class="card-box">
											<div class="bigBox">
												<div class="box-content"> 
													<h4 class="m-t-0 header-title">Questions 28-33</h4>
													<p class="text-muted m-b-20 font-13">Do the following statements reflect the claims of the writer in Reading Passage 3?<br />
														In boxes 28-33 choose
													</p>
													<fieldset  class="col-md-12">
														<b style="color:#000">YES</b> if the statement reflects the claims of the writer<br />
														<b style="color:#000">NO</b> if the statement contradicts the claims of the writer<br />
														<b style="color:#000">NOT GIVEN</b> if it is impossible to say what the writer thinks about this
													</fieldset>
													</br>
												
													<table class="table table-bordered table-striped">
														<tbody>
															<tr>
																<td style="width: 300px;"><strong>28</strong>. Grammarians now have a thorough understanding of their subject.</td>
																<td>
																	<select class="form-control" name="question28">
																		<option value="">Select</option>
																		<option value="YES">YES</option>
																		<option value="NO">NO</option>
																		<option value="NOT GIVEN">NOT GIVEN</option>
																	</select>
																</td>
															</tr>
															<tr>
																<td><strong>29</strong>. Even the least developed communities have complex languages.</td>
																<td>
																	<select class="form-control" name="question29">
																		<option value="">Select</option>
																		<option value="YES">YES</option>
																		<option value="NO">NO</option>
																		<option value="NOT GIVEN">NOT GIVEN</option>
																	</select>
																</td>
															</tr>
															<tr>
																<td><strong>30</strong>. Certain noises that animals make can be classified as language.</td>
																<td>
																	<select class="form-control" name="question30">
																		<option value="">Select</option>
																		<option value="YES">YES</option>
																		<option value="NO">NO</option>
																		<option value="NOT GIVEN">NOT GIVEN</option>
																	</select>
																</td>
															</tr>
															<tr>
																<td><strong>31</strong>.Certain human cries have something in common with animal communication.</td>
																<td>
																	<select class="form-control" name="question31">
																		<option value="">Select</option>
																		<option value="YES">YES</option>
																		<option value="NO">NO</option>
																		<option value="NOT GIVEN">NOT GIVEN</option>
																	</select>
																</td>
															</tr>
															<tr>
																<td><strong>32</strong>.People who are good mathematicians are likely to be good at chess.</td>
																<td>
																	<select class="form-control" name="question32">
																		<option value="">Select</option>
																		<option value="YES">YES</option>
																		<option value="NO">NO</option>
																		<option value="NOT GIVEN">NOT GIVEN</option>
																	</select>
																</td>
															</tr>
															<tr>
																<td><strong>33</strong>.Talking usually forms part of a wider activity.</td>
																<td>
																	<select class="form-control" name="question33">
																		<option value="">Select</option>
																		<option value="YES">YES</option>
																		<option value="NO">NO</option>
																		<option value="NOT GIVEN">NOT GIVEN</option>
																	</select>
																</td>
															</tr>
														</tbody>
													</table>

													<hr>

													<h4 class="m-t-0 header-title">Questions 34-37</h4>
													<p class="text-muted m-b-20 font-13">Complete the notes below.<br />
														Choose <strong>NO MORE THAN ONE WORD</strong> from the passage for each answer.<br />
													</p>
													<div class="container">
														<div class="row">
															<p><strong>Characteristics of human beings :</strong></p>
															• unlike animals, able to use language and to <strong>[34]</strong>
															<div class="col col-lg-6" aling ="left">
																<input type="text" class="form-control" name="question34" onChange="javascript:this.value=this.value.toUpperCase();" >
															</div>
															• far more capable than animals of manipulating <strong>[35]</strong>
															<div class="col col-lg-6" aling ="left">
																<input type="text" class="form-control" name="question35" onChange="javascript:this.value=this.value.toUpperCase();">
															</div>
															and organising politically
														</div>
												</div>

												<br>

												<div class="container">
													<div class="row"><p><strong>Characteristics of animals:</strong></p></div>
													<div class="row">
														• cannot create <strong>[36]</strong>
														<div class="col col-lg-6" aling ="left">
															<input type="text" class="form-control" name="question36" onChange="javascript:this.value=this.value.toUpperCase();">
														</div>of noises
													</div>
													<div class="row">  
														• only make sounds in reaction to <strong>[37]</strong>
														<div class="col col-lg-6" aling ="left">
															<input type="text" class="form-control" name="question37" onChange="javascript:this.value=this.value.toUpperCase();" autocomplete="rutjfkde">
														</div>
													</div>


													<hr>
													<h4 class="m-t-0 header-title">Questions 38-40</h4>
													<p class="text-muted m-b-20 font-13">Look at the following people (Questions 38-40) and the list of claims below.<br />
														Match each person with the claim credited to them.<br />
														Choose the correct letter <strong>A-F</strong>.
													</p>
													<fieldset class="col col-lg-12">
														<p align="center"><strong>List of Claims</strong><br></p>
														<p>
															<b>[A]</b> Attempts to understand the nature of language require objectivity.<br />
															<b>[B]</b> Computers will soon use language as skilfully as human beings.<br />
															<b>[C]</b> More than anything else, grammar distinguishes human beings from animals.<br />
															<b>[D]</b> Speaking can be compared with physical activities such as walking.<br />
															<b>[E]</b> The inability of animals to speak shows that they are unable to think.<br />
															<b>[F]</b> There is no limit to what human beings can say.
														</p>
													</fieldset>

													<br>

														<table class="table table-bordered table-striped">
															<tbody>
																<tr>
																	<td><strong>38</strong>. Herbert Read</td>
																	<td>
																		<select class="form-control" name="question38">
																			<option value="">Select</option>
																			<option value="A">A</option>
																			<option value="B">B</option>
																			<option value="C">C</option>
																			<option value="D">D</option>
																			<option value="E">E</option>
																			<option value="F">F</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td><strong>39</strong>. Wolfgang Kohler</td>
																	<td>
																		<select class="form-control" name="question39">
																			<option value="">Select</option>
																			<option value="A">A</option>
																			<option value="B">B</option>
																			<option value="C">C</option>
																			<option value="D">D</option>
																			<option value="E">E</option>
																			<option value="F">F</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td><strong>40</strong>. a follower of Descartes</td>
																	<td>
																		<select class="form-control" name="question40">
																			<option value="">Select</option>
																			<option value="A">A</option>
																			<option value="B">B</option>
																			<option value="C">C</option>
																			<option value="D">D</option>
																			<option value="E">E</option>
																			<option value="F">F</option>
																		</select>
																	</td>
															
																</tr>
															</tbody>
														</table>
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

		$(document).ready(function(){
			$('input[type="checkbox"]').click(function(e){
				var Max = 3;
				var Checked = $('input[type="checkbox"]:checked').length;
				if(Checked==Max){
					$('input[type="checkbox"]').each(function(){
						if(!$(this).is(":checked")){
							$(this).prop("disabled", true); 
						}
					});
				}else{
					$('input[type="checkbox"]').each(function(){
						$(this).prop("disabled", false); 
					});
				}
			});
		});

		$( document ).ready(function() {
			$('input').attr('spellcheck','false');

			document.querySelector('body').addEventListener('load', begintimer());
		});

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