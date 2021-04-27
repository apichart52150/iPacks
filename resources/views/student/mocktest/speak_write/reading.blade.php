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
						<div class="col-6">
							<h4 class="header-title">Speak Write : Reading</h4>
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

					<form action="{{ route('ans_reading') }}" method="POST" id="basic-form" class="mt-3" onsubmit="return confirm('Are you sure you want to finish?')">
						{{ csrf_field() }}

						<input type="hidden" name="std_id" value="{{session('std_id')}}">
            			<input type="hidden" name="classroom_id" value="{{ session('class_id') }}">
						<input type="hidden" name="set_exam" value="6">
						
						<div  id="sandbox">
							<h3>SECTION 1</h3>
							<section>
								<div class="row">
									<div class="col-6">
										<div class="card-box" id="section1">
											<h5 class="font-weight-bold">Questions 1-13</h5>
											<p>Read the following passage about fireflies and answer Questions 1-13 </p>

											<div class="d-flex text-justify">
												<b class="mr-2">A.</b>
												<p>Fireflies tend to be brown and soft-bodied, often with the elytra (front wings) more leathery than in other beetles. Although the females of some species are similar in appearance to males, larviform females are found in many other firefly species. These females can often be distinguished from the larvae only because they have compound eyes. The most commonly known fireflies are nocturnal, although there are numerous species that are diurnal. Most diurnal species are non-luminescent; however, some species that remain in shadowy areas may produce light.
												</p>
											</div>

											<div class="d-flex text-justify">
												<b class="mr-2">B.</b>
												<p>
												A few days after mating, a female lays her fertilized eggs on or just below the surface of the ground. The eggs hatch three to four weeks later, and the larvae feed until the end of the summer. The larvae are commonly called glowworms. The term glowworm is also used for both adults and larvae of species such as <i>Lampyris noctiluca</i>, the common European glowworm, in which only the nonflying adult females glow brightly and the flying males glow only weakly and intermittently.
												</p>
											</div>
											
											<div class="d-flex text-justify">
												<b class="mr-2">C.</b>
												<p>	
												Fireflies hibernate over winter during the larval stage, some species for several years. Some do this by burrowing underground, while others find places on or under the bark of trees. They emerge in the spring. After several weeks of feeding, they pupate for 1.0 to 2.5 weeks and emerge as adults. The larvae of most species are specialized predators and feed on other larvae, terrestrial snails, and slugs. Some are so specialized they have grooved mandibles that deliver digestive fluids directly to their prey. Adult diet varies. While most species are predatory, some feed on plant pollen or nectar.
												</p>
											</div>

											<div class="d-flex text-justify">
												<b class="mr-2">D.</b>
												<p>	
												 Most fireflies are quite distasteful to and sometimes poisonous to vertebrate predators. This is due at least in part to a group of steroid pyrones known as lucibufagins, which are similar to cardiotonic bufadienolides found in some poisonous toads. 
												</p>
											</div>

											<div class="d-flex text-justify">
												<b class="mr-2">E.</b>
												<p>
												Light production in fireflies is due to a type of chemical reaction called bioluminescence. This process occurs in specialised light-emitting organs, usually on a firefly's lower abdomen. All fireflies glow as larvae. Bioluminescence serves a different function in lampyrid larvae than it does in adults. It appears to be a warning signal to predators, since many firefly larvae contain chemicals that are distasteful or toxic. Light in adult beetles was originally thought to be used for similar warning purposes, but now its primary purpose is thought to be used in mate selection. Fireflies are a classic example of an organism that uses bioluminescence for sexual selection. They have a variety of ways to communicate with mates in courtships: steady glows, flashing, and the use of chemical signals unrelated to photic systems.  
												</p>
											</div>

											<div class="d-flex text-justify">
												<b class="mr-2">F.</b>
												<p>
												Some species, especially lightning bugs of the genera <i>Photinus, Photuris,</i> and <i>Pyractomena</i>, are distinguished by the unique courtship flash patterns emitted by flying males in search of females. In general, females of the Photinus genus do not fly, but do give a flash response to males of their own species. 	
												</p>
											</div>

											<div class="d-flex text-justify">
												<b class="mr-2">G.</b>
												<p>
												Tropical fireflies, in particular, in Southeast Asia, routinely synchronise their flashes among large groups. This phenomenon is explained as phase synchronization and spontaneous order. At night along river banks in the Malaysian jungles (the most notable ones found near Kuala Selangor), fireflies (<i>kelip-kelip</i> in the Malay language or Bahasa Malaysia) synchronise their light emissions precisely. Current hypotheses about the causes of this behavior involve diet, social interaction, and altitude. In the Philippines, thousands of fireflies can be seen all year-round in the town of Donsol. In the United States, one of the most famous sightings of fireflies blinking in unison occurs annually near Elkmont, Tennessee in the Great Smoky Mountains during the first weeks of June. Congaree National Park in South Carolina is another host to this phenomenon. 	
												</p>
											</div>

											<div class="d-flex text-justify">
												<b class="mr-2">H.</b>
												<p>
												Female Photuris fireflies are known for mimicking the mating flashes of other "lightning bugs" for the sole purpose of predation. Target males are attracted to what appears to be a suitable mate, and are then eaten. For this reason the Photuris species are sometimes referred to as "<i>femme fatale fireflies.</i>" 	
												</p>
											</div>

											<div class="d-flex text-justify">
												<b class="mr-2">I.</b>
												<p>
												Many fireflies do not produce light. Usually these species are diurnal, or dayflying, such as those in the genus <i>Ellychnia.</i> A few diurnal fireflies that inhabit primarily shadowy places, such as beneath tall plants or trees, are luminescent. One such genus is <i>Lucidota.</i> These fireflies use pheromones to signal mates. This is supported by the fact that some basal groups do not show bioluminescence and, rather, use chemical signaling. <i>Phosphaenus hemipterus</i> has photic organs, yet is a diurnal firefly and displays large antennae and small eyes. These traits strongly suggests pheromones are used for sexual selection, while photic organs are used for warning signals. In controlled experiments, males coming from downwind arrived at females first, thus male arrival was correlated with wind direction, indicating males' chemotaxis into a pheromone plume. Males were also found to be able to find females without the use of visual cues, when the sides of test Petri dishes were covered with black tape. This and the facts that females do not light up at night and males are diurnal point to the conclusion that sexual communication in <i>P. hemipterus</i> is entirely based on pheromones.  	
												</p>
											</div>
										</div>
									</div>

									<div class="col-6">
										<div class="card-box">
											<p class="mb-0 font-weight-bold">Questions 1-7</p>
											<p class="mb-0">Match the piece of information with the paragraph. In which paragraph can you find each piece of information?</p>
											<p>For Questions 1 to 7 select a letter <b>A-I</b></p>

											<table class="table table-sm table-bordered dt-responsive w-100">
												<tr>
													<th class="font-weight-bold text-center">Qu</th>
													<th class="font-weight-bold text-center">Piece of information </th>
													<th class="font-weight-bold text-center">Paragraph</th>
												</tr>
												<tr class="bg-light">
													<td>e.g.</td>
													<td>An example of a female species eating males from a different species. </td>
													<td>
														<select class="custom-select" disabled>
															<option selected>H</option>
														</select>
													</td>
												</tr>
												<tr>
													<td>1</td>
													<td>The length of time needed for eggs to hatch.</td>
													<td>
														<select name="q1" class="custom-select">
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
													</td>
												</tr>
												<tr>
													<td>2</td>
													<td>A similarity between fireflies and toads.</td>
													<td>
														<select name="q2" class="custom-select">
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
													</td>
												</tr>
												<tr>
													<td>3</td>
													<td>A description of research done on male and female fireflies.</td>
													<td>
														<select name="q3" class="custom-select">
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
													</td>
												</tr>
												<tr>
													<td>4</td>
													<td>A number of examples of places around the world where a similar phenomenon occurs. </td>
													<td>
														<select name="q4" class="custom-select">
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
													</td>
												</tr>
												<tr>
													<td>5</td>
													<td>What fireflies look like.</td>
													<td>
														<select name="q5" class="custom-select">
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
													</td>
												</tr>
												<tr>
													<td>6</td>
													<td>How fireflies produce light.</td>
													<td>
														<select name="q6" class="custom-select">
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
													</td>
												</tr>
												<tr>
													<td>7</td>
													<td>Preferred diet of fireflies.</td>
													<td>
														<select name="q7" class="custom-select">
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
													</td>
												</tr>
											</table>

											<hr>

											<p class="mb-0 font-weight-bold">Questions 8-13</p>
											<p class="mb-0">Match the species with the characteristic.</p>
											<p>For Questions 8 to 13 select a letter <b>A – F </b></p>

											<table class="table table-sm table-bordered dt-responsive w-100 fix-table">
												<tr>
													<th class="font-weight-bold text-center">Qu</th>
													<th class="font-weight-bold text-center">Species</th>
													<th class="font-weight-bold text-center">Characteristic</th>
												</tr>
												<tr>
													<td>8</td>
													<td>Photuris</td>
													<td>
														<select name="q8" class="custom-select w-auto">
															<option value="">Select Answer</option>
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
													<td>9</td>
													<td>Ellychnia</td>
													<td>
														<select name="q9" class="custom-select w-auto">
															<option value="">Select Answer</option>
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
													<td>10</td>
													<td>Photinus</td>
													<td>
														<select name="q10" class="custom-select w-auto">
															<option value="">Select Answer</option>
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
													<td>11</td>
													<td>Lampyris noctiluca</td>
													<td>
														<select name="q11" class="custom-select w-auto">
															<option value="">Select Answer</option>
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
													<td>12</td>
													<td>Lucidota</td>
													<td>
														<select name="q12" class="custom-select w-auto">
															<option value="">Select Answer</option>
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
													<td>13</td>
													<td>Phosphaenus hemipterus </td>
													<td>
														<select name="q13" class="custom-select w-auto">
															<option value="">Select Answer</option>
															<option value="A">A</option>
															<option value="B">B</option>
															<option value="C">C</option>
															<option value="D">D</option>
															<option value="E">E</option>
															<option value="F">F</option>
														</select>
													</td>
												</tr>
											</table>

											<div class="d-flex flex-column border mt-3">
												<p class="font-weight-bold text-center border-bottom py-2 mb-0">Characteristic</p>
												<p class="border-bottom mb-0 pb-2 px-2"><b>A.</b> Females do not fly but give a flash response to males of own species.</p>
												<p class="border-bottom mb-0 pb-2 px-2"><b>B.</b> Active by day only, lives in shady places, is luminescent.</p>
												<p class="border-bottom mb-0 pb-2 px-2"><b>C.</b> Females imitate flashes of other species to prey on target males.</p>
												<p class="border-bottom mb-0 pb-2 px-2"><b>D.</b> Active by day and does not produce any light.</p>
												<p class="border-bottom mb-0 pb-2 px-2"><b>E.</b> Relies entirely on pheromones for attracting a mate.</p>
												<p class="mb-0 px-2 pb-2"><b>F.</b>  Non-flying females glow brightly but flying males glow dimly and intermittently</p>
											</div>
										</div>
									</div>
								</div>
							</section>
							<!-- end section 1 -->

							<h3>SECTION 2</h3>
							<section>
								<p>You should spend about 20 minutes on Questions 14 - 27, which are based on Reading Passage 2.</p>
								<div class="row">
									<div class="col-6">
										<div class="card-box" id="section2">
											<h5 class="font-weight-bold">Palmyra</h5>

											<p>
												The Syrian desert is a rugged, hostile expanse of sharp rock, thorns and scrub grass.  There, baked by a merciless sun and chilled beneath the gaze of a poetry-inspiring moon, lies an oasis, Palmyra.  The bus from the Syrian capital, Damascus, takes roughly four hours to grind eastward through arid landscape to Palmyra.  It is still a relatively short journey, considering that camel caravans, which still make the trek today, count time in plodding days rather than mechanical minutes. 
											</p>
											<p>
												Palmyra is an essential halfway-house for desert travellers.  Here subterranean veins of water rise to bless the land with life: fertile pastures, drinking holes for fauna and groves of palm trees (from which the town takes its name) which offer shade.  For countless centuries, from ancient Greece to the present day, Palmyra‘s liquid asset, combined with her strategic location in the centre of the Middle East, has make it a critical staging post for trading routes between Persia, Africa and Europe.  And the civilization all this trading activity brought with it made Palmyra, if only briefly, the envy of nations. 
											</p>
											<p>
												Records of settled human habitation at Palmyra begin at around 3000 years ago when the oasis was established as an Assyrian caravan town of some size.  Two hundred years of Greek rule followed, leaving as its most enduring inheritance, the Acropolis-style Bel Temple.  It was not until 106AD, however, when annexed by the Roman Empire, that Palmyra‘s commercial potential was optimized.  For more than two centuries, Palmyra flourished as a cosmopolitan trading and transit center of phenomenal wealth.  Many of the town‘s most exquisite remains, like its almost perfectly preserved amphitheatre, were constructed during this period. 
											</p>
											<p>
												But of all the historical figures to leave an imprint in the sands of Palmyra, it was a woman — the fiery half-Greek, half-Arabian Queen Zenobia — who left the most enduring mark.  During the latter half of Rome‘s rule, Zenobia‘s husband, Odenathus, had been ruler of the oasis.  In 266AD Odenathus died in suspicious circumstances, some say with no small encouragement from Zenobia herself.  Claiming to be a descendant of Cleoplatra, Zenobia took control of the city.  And her short but turbulent reign saw both the best of times and the worst of times for the oasis. 
											</p>
											<p>
												Under Zenobia‘s influence Palmyra entered a Golden Age of riches and renown.  The great temples filled with gold, ornamental and adoring statues; huge civic monuments and grand avenues of marble columns were constructed.  The city took on an ebullient form, the grandeur of which can still easily be imagined on viewing the ruins today.  However, Zenobia allowed her mind to be glazed by expansionist ambitions, perhaps forgetting in her exuberance, the humble trading business her civilization was founded on.
											</p>
											<p>
												Spurred by news of a distracted and weakened Rome in 271AD, Zenobia gathered her forces and headed west, beginning an ill-fated military campaign against the still mighty empire. Zenobia‘s troops were no match for the battle-hardened legions of the Roman Emperor Aurelian who then took two years to reach Palmyra and put the city to the torch and its inhabitants to death.  The oasis thus fell into a length period of decline.  Muslims took it over in 634 and Palmyra remained in a state of relative peace and obscurity, until a massive earthquake in 1089 practically levelled it. 
											</p>
											<p>
												It would take days to explore fully the labyrinth of unearthed streets, courtyards, alleys and monuments.  Best preserved of all is the Bel Temple, dominating the eastern edge of the excavations.  Its walled courtyard occupies over 330 square metres and contains numerous procession ramps, ornamental doors, alcoves and sacrificial altar stones.  The temple is open from 8am until sunset and a small entrance fee is charged.   Opposite the Bel Temple stands a hilltop sentinel, the craggy 17th century Arabian fortress, Qalaat ibn Maan.  It is a good half-hour hike up to the castle‘s ramparts, but the reward is a tapestry of the entire Palmyra archeological site, the present-day town and, beyond that, the sparse yet dramatic Syrian desert. 
											</p>
											<p>
												Central to the old city is the Grand Colonnade, an unbroken avenue of 50-foot high marble pillars which stretches 300 metres, forming a spine along the whole of the excavated site.  At the top of this stands an ancient crossroads, marked out by an astoundingly intact tetrapylon — four sets of four columns — site of an ancient market place. At the other extreme of the colonnade lies the pristine Roman-era amphitheatre, with its semi-circular row of stone seating.  One can almost hear again the roar of lions and the cries of their unfortunate human bait.  The main artery through Palmyra ruins continues along the line of the colonnade, ending after a quarter of a mile at a soaring entrance archway, the keystone of which looks as though it is about to pop out.  But one can be reassured that a structure that has survived ages and disasters should, at least, hold out for the duration of the average day-trip. 
											</p>
											<p>
												Winding their way through the ruins, on foot, by bicycle and on donkey cart, the inhabitants of modern-day Palmyra go about their business hardly acknowledging the architecture around them.  The new town (marked on some maps as Tudmur) resides half a mile from the ruins.  Surrounding it are acres of date plantations, their luscious fruit being the mainstay of the area‘s economy.  Roadside stalls selling fresh dates are set up along the route to the excavations, the traders within inviting the weary traveler to bide a while, chat, drink some tea and sample their produce.
											</p>
										</div>
									</div>

									<div class="col-6">
										<div class="card-box">
											<p class="mb-0 font-weight-bold">Questions 14-18</p>
											<p class="mb-0">Find the numbers, date and dimensions for each answer. </p>
											<p>For <b>Questions 1-5</b> type <b><i>NO MORE THAN THREE WORDS AND/OR A NUMBER</i></b></p>

											<div class="row">
												<div class="col-1">14.</div>
												<div class="col-11">
													<p class="mb-1">The height of the marble pillars in the Grande Colonnade.</p>
													<p class="d-inline">Answer : </p>
													<input type="text" name="q14" class="d-inline">
												</div>
												<div class="w-100 mt-2"></div>
												<div class="col-1">15.</div>
												<div class="col-11">
													<p class="mb-1">The year when an earthquake destroyed most of Palmyra.</p>
													<p class="d-inline">Answer : </p>
													<input type="text" name="q15" class="d-inline">
												</div>
												<div class="w-100 mt-2"></div>
												<div class="col-1">16.</div>
												<div class="col-11">
													<p class="mb-1">The time it takes the bus to travel from Damascus to Palmyra. </p>
													<p class="d-inline">Answer : </p>
													<input type="text" name="q16" class="d-inline">
												</div>
												<div class="w-100 mt-2"></div>
												<div class="col-1">17.</div>
												<div class="col-11">
													<p class="mb-1">The time the Bel Temple opens in the morning. </p>
													<p class="d-inline">Answer : </p>
													<input type="text" name="q17" class="d-inline">
												</div>
												<div class="w-100 mt-2"></div>
												<div class="col-1">18.</div>
												<div class="col-11">
													<p class="mb-1">The area of the Bel Temple courtyard.</p>
													<p class="d-inline">Answer : </p>
													<input type="text" name="q18" class="d-inline">
												</div>
											</div>

											<hr>

											<p class="mb-0 font-weight-bold">Questions 19-23</p>
											<p class="mb-0">Do the following statements agree with the information given in the passage?</p>
											<p>For <b>Questions 6-10</b> select</p>

											<div class="d-flex justify-content-center">
												<div class="d-flex flex-column mr-3">
													<span><b>TRUE</b></span>
													<span><b>FALSE</b></span>
													<span><b>NOT GIVEN</b></span>
												</div>
												<div class="d-flex flex-column">
													<span>if the statement agrees with the information </span>
													<span>if the statement contradicts the information </span>
													<span>if there is not enough information on this </span>
												</div>
											</div>

											<div class="row mt-3">
												<div class="col-1">19.</div>
												<div class="col-11">
													<p class="mb-1"> The Syrian desert experiences a wide range of temperatures each day.</p>
													<select name="q19" class="custom-select w-auto">
														<option value="">Select Answer</option>
														<option value="TRUE">TRUE</option>
														<option value="FALSE">FALSE</option>
														<option value="NOT GIVEN">NOT GIVEN</option>
													</select>
												</div>
												<div class="w-100 mt-2"></div>
												<div class="col-1">20.</div>
												<div class="col-11">
													<p class="mb-1">  The name 'Palmyra' means 'palm trees'.</p>
													<select name="q20" class="custom-select w-auto">
														<option value="">Select Answer</option>
														<option value="TRUE">TRUE</option>
														<option value="FALSE">FALSE</option>
														<option value="NOT GIVEN">NOT GIVEN</option>
													</select>
												</div>
												<div class="w-100 mt-2"></div>
												<div class="col-1">21.</div>
												<div class="col-11">
													<p class="mb-1">Zeonobia‘s husband, Odenathus, was a citizen of Rome.</p>
													<select name="q21" class="custom-select w-auto">
														<option value="">Select Answer</option>
														<option value="TRUE">TRUE</option>
														<option value="FALSE">FALSE</option>
														<option value="NOT GIVEN">NOT GIVEN</option>
													</select>
												</div>
												<div class="w-100 mt-2"></div>
												<div class="col-1">22.</div>
												<div class="col-11">
													<p class="mb-1"> Palmyra has been ruled by a number of different civilizations.</p>
													<select name="q22" class="custom-select w-auto">
														<option value="">Select Answer</option>
														<option value="TRUE">TRUE</option>
														<option value="FALSE">FALSE</option>
														<option value="NOT GIVEN">NOT GIVEN</option>
													</select>
												</div>
												<div class="w-100 mt-2"></div>
												<div class="col-1">23.</div>
												<div class="col-11">
													<p class="mb-1">Shortly after Zenobia‘s rule, Palmyra experienced a period of prosperity. </p>
													<select name="q23" class="custom-select w-auto">
														<option value="">Select Answer</option>
														<option value="TRUE">TRUE</option>
														<option value="FALSE">FALSE</option>
														<option value="NOT GIVEN">NOT GIVEN</option>
													</select>
												</div>
											</div>

											<hr>

											<p class="mb-0 font-weight-bold">Questions 24-27</p>
											<p class="mb-0">Choose the correct answer for each question.</p>
											<p>For <b>Questions 11-14 </b>select a letter a, b, c, or d </p>

											<div class="row">
												<div class="col-1">24.</div>
												<div class="col-11">
													<p class="mb-1">Why was Palmyra an important trading post?</p>
													<div class="custom-control custom-radio">
														<input type="radio" name="q24" id="q24-1" class="custom-control-input" value="A">
														<label for="q24-1" class="custom-control-label mt-0">a. Because it was occupied by a number of different civilizations.</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q24" id="q24-2" class="custom-control-input" value="B">
														<label for="q24-2" class="custom-control-label mt-0">b. Because it had abundant water underground. </label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q24" id="q24-3" class="custom-control-input" value="C">
														<label for="q24-3" class="custom-control-label mt-0">c. Because there were plenty of animals drinking there. </label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q24" id="q24-4" class="custom-control-input" value="D">
														<label for="q24-4" class="custom-control-label mt-0">d. Because it was the envy of nations. </label>
													</div>
												</div>

												<div class="w-100 mt-2"></div>
												<div class="col-1">25.</div>
												<div class="col-11">
													<p class="mb-1">What do we know for sure about Zenobia? </p>
													<div class="custom-control custom-radio">
														<input type="radio" name="q25" id="q25-1" class="custom-control-input" value="A">
														<label for="q25-1" class="custom-control-label mt-0">a. She had a powerful impact on the fortunes of Palmyra. </label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q25" id="q25-2" class="custom-control-input" value="B">
														<label for="q25-2" class="custom-control-label mt-0">b. She killed her husband. </label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q25" id="q25-3" class="custom-control-input" value="C">
														<label for="q25-3" class="custom-control-label mt-0">c. She was a descendant of Cleopatra. </label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q25" id="q25-4" class="custom-control-input" value="D">
														<label for="q25-4" class="custom-control-label mt-0">d. Her troops took two years to reach Palmyra after defeating the Roman Emperor Aurelian. </label>
													</div>
												</div>

												<div class="w-100 mt-2"></div>
												<div class="col-1">26.</div>
												<div class="col-11">
													<p class="mb-1">Where was the ancient market place located? </p>
													<div class="custom-control custom-radio">
														<input type="radio" name="q26" id="q26-1" class="custom-control-input" value="A">
														<label for="q26-1" class="custom-control-label mt-0">a. In the centre of the city. </label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q26" id="q26-2" class="custom-control-input" value="B">
														<label for="q26-2" class="custom-control-label mt-0">b. At the top of the Grande Colonnade. </label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q26" id="q26-3" class="custom-control-input" value="C">
														<label for="q26-3" class="custom-control-label mt-0">c. Next to the Roman amphitheatre. </label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q26" id="q26-4" class="custom-control-input" value="D">
														<label for="q26-4" class="custom-control-label mt-0">d. Along the main artery of the city. </label>
													</div>
												</div>

												<div class="w-100 mt-2"></div>
												<div class="col-1">27.</div>
												<div class="col-11">
													<p class="mb-1">What do we know about Tudmur?</p>
													<div class="custom-control custom-radio">
														<input type="radio" name="q27" id="q27-1" class="custom-control-input" value="A">
														<label for="q27-1" class="custom-control-label mt-0">a. It is a busy town with traffic congestion.  </label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q27" id="q27-2" class="custom-control-input" value="B">
														<label for="q27-2" class="custom-control-label mt-0">b. Its inhabitants have a distinct awareness of its architectural heritage. </label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q27" id="q27-3" class="custom-control-input" value="C">
														<label for="q27-3" class="custom-control-label mt-0">c. It is located on the ruins of the old city. </label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" name="q27" id="q27-4" class="custom-control-input" value="D">
														<label for="q27-4" class="custom-control-label mt-0">d. Its residents rely on date cultivation for their living. </label>
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
									<div class="col-12">
										<b>SECTION 3 - Questions 28-40</b>
										<p>Read the following passage and answer Questions 28-40</p>
									</div>
									<div class="col-6">
										<div class="card-box" id="section3">
											<h5 class="font-weight-bold">Bollywood</h5>

											<p>
												For decades the short phrase "lights, camera, action!" would cause millions to picture the glamorous world of Hollywood. However, a new star is rising in the film making industry and casting its shadow over the business in the United States; that star is Bollywood. 
											</p>
											<p>
												India‘s film entertainment market has been growing at double digit rates for the past three years and it is no wonder why. The Indian film making industry has set itself apart from its Western competitors by enhancing visual stimulation with their decadent settings along with the expected audience participation. The differences between western films and those made in the Indian film making industry are immediately evident to the viewers, and can partially explain why the Mumbai-based industry's popularity is increasing. Other contributors to the raised interests are the industry's strategic financial plans and clever distribution methods. 
											</p>
											<p>
												Fourteen million Indians go to the movies on a daily basis (about 1.4% of the population of 1 billion) and pay the equivalent to the average Indian's day's wages (US $1-3) to see any of the over 800 films churned out by Bollywood each year. That's more than double the number of feature films produced in the United States. 
											</p>
											<p>
												And it is not only people in the Indian subcontinent who are obsessed with these movies. People from diverse backgrounds and ethnicity such as the Middle East, Africa and parts of South-east Asia count themselves among the billions of Bollywood fans around the globe. Part of their charm is the fact that audiences are not expected to take the role of passive viewers. When viewing a Bollywood film, audiences are encouraged to clap, boo, whistle, or even imitate the dancing actors on screen. Viewer interaction is important to what directors and producers want to convey to their audience.
											</p>
											<p>
												Not only is a Bollywood made movie different in its style but it is also different when it comes to settings. Luscious forestry and foliage typically create the background while costumes and props are made of bright, vibrant materials - all of which create a visual extravaganza and are enticing to most tastes. The way that the Indian film makers distribute their finances also attracts certain individuals. A Bollywood film costs a fraction of one from Hollywood: a small budget in India might be $200,000 to $1 million, and a big budget is not likely to exceed $4 million. Bollywood films rarely touch the $20 million mark, a figure which has long been the norm for Hollywood movies, where as much as fifty percent of production costs can go on fees for actors and directors.  Perhaps this is why many A-list actors from the west such as George Clooney and Brad Pitt are looking forward to creating some very beneficial deals with Indian production companies. Furthermore, producers such as Steven Spielberg may be looking towards the Bollywood scene for financing on an upcoming project.  
											</p>
											<p>
												Westerners must be so intrigued due to the intelligent spending methods practiced in the industry. Spending less money to make the film will most likely lead to a greater profit earned on the production as a whole which could then lead to a bigger pay share for the actors, directors and producers. Usually movies are seen on the ―big screen‖ first, followed by a television airing sometime after the release. Let‘s not forget about renting the movie as well via large chains of movie-hire companies. However, being able to download a movie on the internet the same day it was released in theaters would be taking distribution a huge step forward. In 2006 one production company premiered a brand new film, and at the same time of the showing in theatres a downloadable version was available for a small fee. This is a significant move because not only was this available to people in India but also to any individual around the world who may have been searching for the hard-to-find Bollywood films that are not available in theaters close to them. These productions at one point were only shown in churches or to the community, but now can be enjoyed after performing a few simple keystrokes on a computer. 
											</p>
											<p>
												Although American-made films have been edging into India, only the blockbuster Titanic has ever made India's top five list. One hundred and fifty U.S. films arrived in India in 1998. However, Indian films have become somewhat of an international obsession. Bollywood films are being shown in American and British theaters on a more and more frequent basis. These theatres have become community foci for the South Asian communities around the world. Though separated by a vast distance from home, South Asians have found Bollywood films to be a great way of staying in touch with their culture and their fellow South Asians. 
											</p>
										</div>
									</div>

									<div class="col-6">
										<div class="card-box">
											<p class="mb-0 font-weight-bold">Questions 28-31</p>
											<p class="mb-0">Find the numbers.</p>
											<p>For Questions 28 to 31 type a number.</p>

											<div class="row">
												<div class="col-1">28.</div>
												<div class="col-11">
													<p class="mb-1">The number of movies produced in Bollywood annually.</p>
													<p class="d-inline mr-2">Answer : </p>
													<input type="text" name="q28" class="d-inline">
												</div>
												<div class="w-100 mt-2"></div>
												<div class="col-1">29.</div>
												<div class="col-11">
													<p class="mb-1">The maximum expected cost of producing a movie in Bollywood.</p>
													<p class="d-inline mr-2">Answer : </p>
													<input type="text" name="q29" class="d-inline">
												</div>
												<div class="w-100 mt-2"></div>
												<div class="col-1">30.</div>
												<div class="col-11">
													<p class="mb-1">The number of western films which have featured in the top-five list in India. </p>
													<p class="d-inline mr-2">Answer : </p>
													<input type="text" name="q30" class="d-inline">
												</div>
												<div class="w-100 mt-2"></div>
												<div class="col-1">31.</div>
												<div class="col-11">
													<p class="mb-1">The first time a movie premiered at the same time as it was offered for distribution via the internet.</p>
													<p class="d-inline mr-2">Answer : </p>
													<input type="text" name="q31" class="d-inline">
												</div>

												
											</div>

											<hr>

											<p class="mb-0 font-weight-bold">Questions 32-35</p>
											<p>Decide if the following sentences are:</p>

											<div class="d-flex justify-content-center">
												<div class="d-flex flex-column mr-2">
													<span><b>TRUE</b></span>
													<span><b>FALSE</b></span>
													<span><b>NOT GIVEN</b></span>
												</div>
												<div class="d-flex flex-column">
													<span>If the statement agrees with the information in the passage. </span>
													<span>If the statement contradicts the information in the passage. </span>
													<span>If not enough information is given. </span>
												</div>
											</div>

											<div class="row mt-3">
												<div class="col-1">32.</div>
												<div class="col-11">
													<p class="mb-1">The Indian movie industry has grown during the last three years by over 9% annually.</p>
													<select name="q32" class="custom-select w-auto">
														<option value="">Select Answer</option>
														<option value="TRUE">TRUE</option>
														<option value="FALSE">FALSE</option>
														<option value="NOT GIVEN">NOT GIVEN</option>
													</select>
												</div>
												<div class="w-100 mt-2"></div>
												<div class="col-1">33.</div>
												<div class="col-11">
													<p class="mb-1">The price of a movie ticket in India is roughly the same amount as the average Indian earns in one day.</p>
													<select name="q33" class="custom-select w-auto">
														<option value="">Select Answer</option>
														<option value="TRUE">TRUE</option>
														<option value="FALSE">FALSE</option>
														<option value="NOT GIVEN">NOT GIVEN</option>
													</select>
												</div>
												<div class="w-100 mt-2"></div>
												<div class="col-1">34.</div>
												<div class="col-11">
													<p class="mb-1">Cinema attendance in India is more than double the attendance rate in the USA.</p>
													<select name="q34" class="custom-select w-auto">
														<option value="">Select Answer</option>
														<option value="TRUE">TRUE</option>
														<option value="FALSE">FALSE</option>
														<option value="NOT GIVEN">NOT GIVEN</option>
													</select>
												</div>
												<div class="w-100 mt-2"></div>
												<div class="col-1">35.</div>
												<div class="col-11">
													<p class="mb-1">Indian movie-makers do not expect their audience to participate actively during a performance.</p>
													<select name="q35" class="custom-select w-auto">
														<option value="">Select Answer</option>
														<option value="TRUE">TRUE</option>
														<option value="FALSE">FALSE</option>
														<option value="NOT GIVEN">NOT GIVEN</option>
													</select>
												</div>
											</div>

											<hr>

											<p class="mb-0 font-weight-bold">Questions 36-40</p>
											<p class="mb-0">Which movies do the statements refer to?</p>
											<p>For questions 36 to 40 select A, B, or C</p>

											<div class="d-flex justify-content-center">
												<div class="row border p-3 border-3">
													<div class="d-flex flex-column mr-2">
														<span>A.</span>
														<span>B.</span>
														<span>C.</span>
													</div>
													<div class="d-flex flex-column">
														<span>Bollywood</span>
														<span>Hollywood</span>
														<span>Both Hollywood and Bollywood</span>
													</div>
												</div>
											</div>

											<div class="row mt-3">
												<div class="col-1">36.</div>
												<div class="col-11">
													<p class="mb-1">Has a longer history of movie production. </p>
													<select name="q36" class="custom-select w-auto">
														<option value="">Select Answer</option>
														<option value="A">A</option>
														<option value="B">B</option>
														<option value="C">C</option>
													</select>
												</div>
												<div class="w-100 mt-3"></div>
												<div class="col-1">37.</div>
												<div class="col-11">
													<p class="mb-1">Originally not produced for screening in large cinemas.</p>
													<select name="q37" class="custom-select w-auto">
														<option value="">Select Answer</option>
														<option value="A">A</option>
														<option value="B">B</option>
														<option value="C">C</option>
													</select>
												</div>
												<div class="w-100 mt-3"></div>
												<div class="col-1">38.</div>
												<div class="col-11">
													<p class="mb-1">Popular with people from different cultures and language.</p>
													<select name="q38" class="custom-select w-auto">
														<option value="">Select Answer</option>
														<option value="A">A</option>
														<option value="B">B</option>
														<option value="C">C</option>
													</select>
												</div>
												<div class="w-100 mt-3"></div>
												<div class="col-1">39.</div>
												<div class="col-11">
													<p class="mb-1">Use extravagant settings and bright, vivid costumes. </p>
													<select name="q39" class="custom-select w-auto">
														<option value="">Select Answer</option>
														<option value="A">A</option>
														<option value="B">B</option>
														<option value="C">C</option>
													</select>
												</div>
												<div class="w-100 mt-3"></div>
												<div class="col-1">40.</div>
												<div class="col-11">
													<p class="mb-1">Movie stars and directors receive a high proportion of the film‘s  
													production costs.</p>
													<select name="q40" class="custom-select w-auto">
														<option value="">Select Answer</option>
														<option value="A">A</option>
														<option value="B">B</option>
														<option value="C">C</option>
													</select>
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
			'autocomplete': 'none',
			'onChange': 'this.value = this.value.toUpperCase();',
			'spellcheck': 'false'
		})
	});
</script>
@stop