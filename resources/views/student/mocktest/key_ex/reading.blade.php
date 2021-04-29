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
                            <li class="breadcrumb-item active">Reading</li>
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
							<h4 class="header-title">Key Skills Extension : Reading</h4>
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

					<form action="{{ route('ans_reading') }}" method="post" id="basic-form" class="mt-3" onsubmit="return confirm('Are you sure you want to finish?');">
						{{ csrf_field() }}

						<input type="hidden" name="std_id" value="{{auth('student')->user()->std_id}}">
						<input type="hidden" name="classroom_id" value="{{auth('student')->user()->coursetype}}">
						<input type="hidden" name="set_exam" value="5">
						<input type="hidden" name="q1" value="">
						<input type="hidden" name="q2" value="">
						<input type="hidden" name="q3" value="">
						<input type="hidden" name="q27" value="">
						<input type="hidden" name="q28" value="">
						<input type="hidden" name="q29" value="">
						<input type="hidden" name="q30" value="">
						<input type="hidden" name="q31" value="">

						<div id="sandbox">
							<h3>Passage 1</h3>
							<section class="mt-3">
								<div class="row">
									<div class="col-md-6">
										<div class="card-box widget-user" id="section1">
											<h5 class="font-weight-bold">Passage 1 : Indian Marriages</h5>

											<div class="mt-3 font-16">
												<p><b>A</b> - Marriage is one of the oldest human institutions and this is as true in Indian culture as anywhere else. In India, a wedding, called “Kanyadana or “donating a virgin”, is thought of as the greatest sacrifice that a father can make and for the groom as an obligation to perpetuate his bloodline. Many people believe that a marriage is still binding after death.</p>

												<p><b>B</b> - In early times girls were thought to be ready for marriage after puberty and later even children could be married. Divorce and remarriage were not always possible. By Medieval times Marriage was compulsory for girls, who very often married between the ages of eight and nine. Among those able to afford it, polygamy was common and rulers would often have one wife from their own region and other minor wives from other areas. Now, divorce and remarriage is possible and non-Muslim Indian men can have only one wife.</p>

												<p><b>C</b> - Although there are many regional variations, some features of the Indian wedding ceremony are similar throughout the country. In general weddings are very complicated events and involve long negotiations about dowry payments prior to the event. After this has been decided, a day is chosen by asking an astrologer to find a lucky day. Preparations begin early because a marriage is not only one of the highlights of a person’s life, but it is also a large and complex social gathering that needs to be organized. The night before, the bride, her friends and female relatives gather together for a party called a “mehendi”. Here, they paint each other’s hands and feet with Henna and dance and listen to music. Her guests often give the bride advice about married life and tease her about her future husband.</p>

												<p><b>D</b> - Weddings are traditionally held at the bride’s home or in a temple, but parks, hotels and marriage halls are becoming increasingly popular. On the day, a wedding altar or “mandapa” is built and covered in flowers. All of the wedding ceremony will be held in the altar. The clothing a couple wears on their wedding day varies between regions and ethnic groups. Women most commonly wear a sari. The bride wears a lot of jewelry as this symbolizes the prosperity she will bring to her new family. In the South wearing flowers is common. The groom wears traditional costume or a suit. Turbans are also popular headgear.</p>

												<p><b>E</b> - The ceremony begins with a mixture of tumeric, sandalwood paste and oils being applied to the couples face and arms. In the past this was done to the whole body, but now it is only symbolic, with only a little being rubbed on. Then they are showered in flowers. After this, they perform the rituals that will make them man and wife. First they garland each other and then take seven symbolic steps together representing seven gifts and seven promises. Finally they say the vows and then they are legally married. The bride’s father or guardian takes her hands and puts them in her husband’s giving her to him. Now she is no longer a member of her father’s family, but a member of her husband’s. They then touch the feet of their elders for luck.</p>

												<p><b>F</b> - After the wedding ceremony, the couple goes to the groom’s house. The bride should be careful to enter the house right foot first for luck. In the evening and late into the night the families and their guests celebrate with dancing, music and food. </p>
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="card-box font-16">
											<p class="font-weight-bold mb-0">Questions 1-3 </p>
											<p class="mb-0">Select the correct answers <b>A - D</b>.</p>
			
											<div class="d-flex flex-column">
												<div class="mt-3">
													<p class="font-16 lead">1. In India weddings are ....</p>
	                                                <div class="custom-control custom-radio">
	                                                    <input type="radio" id="q1-1" name="q1" class="custom-control-input" value="A">
	                                                    <label class="custom-control-label mt-0" for="q1-1"><b class="mx-2">A </b> a duty to continue the family.</label>
	                                                </div>
	                                                <div class="custom-control custom-radio">
	                                                    <input type="radio" id="q1-2" name="q1" class="custom-control-input" value="B">
	                                                    <label class="custom-control-label mt-0" for="q1-2"><b class="mx-2">B</b> thought to end at death.</label>
	                                                </div>
	                                                <div class="custom-control custom-radio">
	                                                    <input type="radio" id="q1-3" name="q1" class="custom-control-input" value="C">
	                                                    <label class="custom-control-label mt-0" for="q1-3"><b class="mx-2">C</b> a duty for the father.</label>
	                                                </div>
	                                                <div class="custom-control custom-radio">
	                                                    <input type="radio" id="q1-4" name="q1" class="custom-control-input" value="D">
	                                                    <label class="custom-control-label mt-0" for="q1-4"><b class="mx-2">D</b> seen as a benefit for the father.</label>
	                                                </div>
                                            	</div>

	                                            <div class="mt-3">
													<p class="font-16 lead">2. Divorce and remarriage ....</p>
	                                                <div class="custom-control custom-radio">
	                                                    <input type="radio" id="q2-1" name="q2" class="custom-control-input" value="A">
	                                                    <label class="custom-control-label mt-0" for="q2-1"><b class="mx-2">A </b> are only possible for non-Muslims.</label>
	                                                </div>
	                                                <div class="custom-control custom-radio">
	                                                    <input type="radio" id="q2-2" name="q2" class="custom-control-input" value="B">
	                                                    <label class="custom-control-label mt-0" for="q2-2"><b class="mx-2">B</b> were sometimes not possible in the past.</label>
	                                                </div>
	                                                <div class="custom-control custom-radio">
	                                                    <input type="radio" id="q2-3" name="q2" class="custom-control-input" value="C">
	                                                    <label class="custom-control-label mt-0" for="q2-3"><b class="mx-2">C</b> have always been possible.</label>
	                                                </div>
	                                                <div class="custom-control custom-radio">
	                                                    <input type="radio" id="q2-4" name="q2" class="custom-control-input" value="D">
	                                                    <label class="custom-control-label mt-0" for="q2-4"><b class="mx-2">D</b> have only become possible in modern times.</label>
	                                                </div>
	                                            </div>

	                                            <div class="mt-3">
													<p class="font-16 lead">3. Indian weddings ....</p>
	                                                <div class="custom-control custom-radio">
	                                                    <input type="radio" id="q3-1" name="q3" class="custom-control-input" value="A">
	                                                    <label class="custom-control-label mt-0" for="q3-1"><b class="mx-2">A </b> are straightforward and brief.</label>
	                                                </div>
	                                                <div class="custom-control custom-radio">
	                                                    <input type="radio" id="q3-2" name="q3" class="custom-control-input" value="B">
	                                                    <label class="custom-control-label mt-0" for="q3-2"><b class="mx-2">B</b> are thought to be lucky.</label>
	                                                </div>
	                                                <div class="custom-control custom-radio">
	                                                    <input type="radio" id="q3-3" name="q3" class="custom-control-input" value="C">
	                                                    <label class="custom-control-label mt-0" for="q3-3"><b class="mx-2">C</b> are intricate and time consuming.</label>
	                                                </div>
	                                                <div class="custom-control custom-radio">
	                                                    <input type="radio" id="q3-4" name="q3" class="custom-control-input" value="D">
	                                                    <label class="custom-control-label mt-0" for="q3-4"><b class="mx-2">D</b> involve only the immediate family.</label>
	                                                </div>
	                                            </div>
											</div>
											<hr>

											<p class="font-weight-bold mb-0">Questions 4-9</p>
											<p>Complete the statements below. <b><i>Use NO MORE THAN THREE WORDS.</i></b></p>
											
											<div class="d-inline-block">
												<span><b>4.</b> Before the wedding, the wife-to-be is given recommendations about</span>
												<input type="text" name="q4" class="ml-3 d-inline">
											</div>

											<div class="d-inline-block mt-3">
												<span><b>5.</b> The wedding ceremony is conducted in a special</span>
												<input type="text" name="q5" class="ml-3 d-inline">
											</div>

											<div class="d-inline-block mt-3">
												<span><b>6.</b> The gold and jewels the bride wears represent</span>
												<input type="text" name="q6" class="ml-3 d-inline">
											</div>

											<div class="d-inline-block mt-3">
												<span><b>7.</b> The materials applied prior to the ceremony have only a</span>
												<input type="text" name="q7" class="ml-3 d-inline">
												<span class="ml-2 d-inline">purpose.</span>
											</div>

											<div class="d-inline-block mt-3">
												<span><b>8.</b> After the wedding, the bride has left</span>
												<input type="text" name="q8" class="ml-3 d-inline">
												<span class="ml-3 d-inline">and belongs to her husband’s.</span>
											</div>

											<div class="d-inline-block mt-3 pb-2">
												<span><b>9.</b> The new bride should go into her new house</span>
												<input type="text" name="q9" class="ml-3 d-inline">
												<span class="ml-2 d-inline">and belongs to her husband’s.</span>
											</div>

											<hr>
											
											<p class="font-weight-bold mb-0">Questions 10-13</p>
											<p>Match the paragraphs <b>A – F</b> with the information below. In which paragraph can each piece of information be found?</p>
											
											<div class="d-inline-block">
												<span class="d-inline"><b>10.</b> The venue for the marriage ceremony</span>
												<select name="q10" class="custom-select w-auto d-inline">
													<option value="">Select Answer</option>
													<option value="A">A</option>
													<option value="B">B</option>
													<option value="C">C</option>
													<option value="D">D</option>
													<option value="E">E</option>
													<option value="F">F</option>
												</select>
											</div>
											<div class="d-inline-block mt-3">
												<span class="d-inline"><b>11.</b> A superstitious ritual involving only the bride</span>
												<select name="q11" class="custom-select w-auto d-inline">
													<option value="">Select Answer</option>
													<option value="A">A</option>
													<option value="B">B</option>
													<option value="C">C</option>
													<option value="D">D</option>
													<option value="E">E</option>
													<option value="F">F</option>
												</select>
											</div>
											<div class="d-inline-block mt-3">
												<span class="d-inline"><b>12.</b> Choosing an auspicious day for the wedding</span>
												<select name="q12" class="custom-select w-auto d-inline">
													<option value="">Select Answer</option>
													<option value="A">A</option>
													<option value="B">B</option>
													<option value="C">C</option>
													<option value="D">D</option>
													<option value="E">E</option>
													<option value="F">F</option>
												</select>
											</div>
											<div class="d-inline-block mt-3">
												<span class="d-inline"><b>13.</b> Body painting for the couple</span>
												<select name="q13" class="custom-select w-auto d-inline">
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
							</section>
							<!-- end passage 1 -->

							<h3>Passage 2</h3>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="card-box font-16" id="section2">
											<h5 class="font-weight-bold">Passage 2 : The importance of frogs</h5>

											<div class="mt-3">
												<p><b>A</b> - More than 5 billion humans live on the earth today, and for centuries mankind has believed that the environment was there for them to use. But today, you hear frequently about how man’s lifestyle is harming the earth. Man is not alone; we share this earth with 80 million other species. The relationship between these species is connected in a complex web of interaction.</p>

												<p><b>B</b> - Water is the most important non-living component of an ecosystem. The availability of water determines the diversity of animals in an ecosystem. Plants play an important role in the water cycle. 90 percent of the moisture that enters the ecosystem passes through plants and evaporates from their leaves in a process called transpiration. Water also evaporates from water bodies like oceans, rivers and lakes, returning to the environment. Water returns to the earth during precipitation (rain, sleet and snow), and all the water is connected in one huge water cycle. All the water in the world including all the water in our bodies (which is 95% water) is connected.</p>

												<p><b>C</b> - One animal that is closely connected to the water is the humble and adorable frog. Frogs live in water their whole lives and the health of frogs can be used to partially determine the health of the water system. Frogs have been disappearing worldwide at unprecedented rates, and currently one-third of the world's 6,485 amphibian species are threatened with extinction. This should come as no surprise since frog populations are being assaulted from many directions at once - global warming, pollution, habitat destruction, infectious diseases, over-harvesting and invasive species being the greatest menaces. Despite this onslaught, there’s a lot you can do to reverse this disturbing trend. First let's look at why frogs are so important to the environment—and to our very survival.</p>

												<p><b>D</b> - Stopping the current wave of frog extinctions is important for several reasons. First of all, frogs eat mosquitoes, ticks and flies that carry vector-borne diseases such as malaria, West Nile virus, and dengue fever. Second, tadpoles eat algae and therefore act as a natural filtration system that keeps our drinking water clean. Frogs serve as food to a diverse array of predators including birds, reptiles, fish and monkeys, and the loss of frogs from the ecosystem would therefore negatively affect these species, as well as upsetting the precarious balance which currently exists. </p>

												<p><b>E</b> - Furthermore, due to their permeable skin that absorbs chemicals and pollutants, frogs are accurate bio-indicators, providing us with an early-response system that can tell us when something is wrong in the environment. In medical research, too, frogs are important in human medicine: 10% of the Nobel Prizes in Medicine have come from research that depended on frogs. A number of frogs which have provided scientists with research data and subsequent medical treatments include Whites tree frog, which helps block HIV transmission, the African clawed frog, which is used for treating diabetic foot ulcers. The fire-bellied toad helps reduce high blood pressure, and the waxy monkey frog produces dermaseptin, a drug to treat antibiotic resistance.  When a frog species disappears, so does any chance of that species improving human well-being.</p>

												<p><b>F</b> - There are a number of threats to frog survival. The first of these is global warming & climate. Frogs need moist conditions to survive. But rising temperatures mean rising cloud levels, and for frogs in tropical cloud forests, this means that time is running out, as their habitats literally dry up. In North America, Yellowstone National Park, which is the world’s oldest protected area, has experienced persistent droughts in recent decades which have affected the water table and caused 25% of the park’s ponds to become permanently dry. The frogs that once inhabited them are now gone. </p>

												<p><b>G</b> - A further danger is posed by pesticides and pollutants, which can be carried by the wind to locations hundreds of miles from their origin, and then are eventually brought by gravity to the waterways in which frogs live and breed. Frogs’ permeable skin absorbs these chemicals, which can cause limb deformities (missing or extra limbs), hermaphroditism, when babies are born with both male and female reproductive organs, delayed metamorphosis and deformed mouthparts.</p>

												<p><b>H</b> - Probably the greatest threat, though, is habitat destruction. Urban expansion is transforming once-vibrant wetlands and forests into shopping malls and housing developments. New roads serve as deathtraps to slow-moving amphibians trying to move through an inhospitable landscape. In developing countries, species-rich rainforests are quickly being converted into oil palm plantations, sugarcane fields and ranchland.</p>

												<p><b>I</b> - In addition, infectious diseases are decimating frog populations. Tens of millions of frogs are shipped around the world each year for use in the frog pet, food, bait and laboratory trades. Very few of these frogs undergo disease testing, and sick frogs (or the water in which they were held) inevitably escape into their new environment, where native frogs have no evolved defenses against the new pathogens. One such disease, chytridiomycosis, has driven an estimated 100 frog species to complete extinction. Human activity is facilitating the spread of chytridiomycosis and threatening frog species worldwide.</p>

												<p><b>J</b> - Over-harvesting for the pet and food trades kills tens of millions of frogs from the wild each year. These frogs are destined for dinner plates throughout the world, and for American, European and Japanese pet shops. This harvest is unsustainable, and threatens some of the world’s most appreciated frogs: brightly colored species such as poison dart frogs used by native Indians in South America for hunting prey, red-eyed tree-frogs, and large frogs, such as the Goliath frog, which could be hunted to extinction for the meat on their legs.</p>

												<p><b>K</b> - Invasive species are a further threat. Trout have been introduced to naturally fishless mountain lakes and streams worldwide, from the Sierra Nevada range to Patagonia and the Southern Alps. Trout are voracious predators of tadpoles, and have completely decimated many montane frog populations, as is the case with the Sierra Nevada Yellow-Legged frog, formerly one of the most abundant amphibians in California.</p>
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="card-box font-16">
											<p class="font-weight-bold mb-0">Questions 14-17</p>
											<p>Find a number for each answer.</p>

											<div class="d-flex flex-column">
												<span><b>14.</b> The proportion of Nobel Prizes in medicine which have come as a result of research using frogs.</span>
												<span class="d-inline">Answer : <input type="text" name="q14" class="d-inline mb-2"></span>
											</div>
											<div class="d-flex flex-column">
												<span><b>15.</b> The proportion of the human body which is made up of water.</span>
												<span class="d-inline">Answer : <input type="text" name="q15" class="d-inline mb-2"></span>
											</div>
											<div class="d-flex flex-column">
												<span><b>16.</b> The fraction of the world’s amphibian species which are endangered.</span>
												<span class="d-inline">Answer : <input type="text" name="q16" class="d-inline mb-2"></span>
											</div>
											<div class="d-flex flex-column">
												<span><b>17.</b> The estimated number of frog species made extinct by chytridiomycosis.</span>
												<span class="d-inline">Answer : <input type="text" name="q17" class="d-inline"></span>
											</div>
											<hr>

											<p class="font-weight-bold mb-0">Questions 18-21</p>
											<p>Decide if the following sentences are :</p>

											<div class="col-md-12">
												<div class="d-flex">
													<span class="font-weight-bold mr-3 col-md-3">TRUE : </span>
													<span>If the statement agrees with the information in the passage.</span>
												</div>
												<div class="d-flex">
													<span class="font-weight-bold mr-3 col-md-3">FALSE : </span>
													<span>If the statement contradicts the information in the passage.</span>
												</div>
												<div class="d-flex">
													<span class="font-weight-bold mr-3 col-md-3">NOT GIVEN : </span>
													<span>If not enough information is given.</span>
												</div>
											</div>

											<div class="d-block mt-3">
												<span class="d-inline"><b>18.</b> </span>
												<span class="d-inline">Frogs help keep rivers clean by filtering out the pollution through their permeable skin.</span>
												<select name="q18" class="custom-select w-auto mt-2 d-block">
													<option value="">Select Answer</option>
													<option value="TRUE">TRUE</option>
													<option value="FALSE">FALSE</option>
													<option value="NOT GIVEN">NOT GIVEN</option>
												</select>
											</div>
											<div class="d-block mt-3">
												<span><b>19.</b></span>
												<span class="d-inline">Some species of frogs are eaten by a variety of other creatures such as mammals, reptiles, birds and fish.</span>
												<select name="q19" class="custom-select w-auto mt-2 d-block">
													<option value="">Select Answer</option>
													<option value="TRUE">TRUE</option>
													<option value="FALSE">FALSE</option>
													<option value="NOT GIVEN">NOT GIVEN</option>
												</select>
											</div>
											<div class="d-block mt-3">
												<span><b>20.</b></span>
												<span class="d-inline">There are no frogs living in Yellowstone National Park today.</span>
												<select name="q20" class="custom-select w-auto mt-2 d-block">
													<option value="">Select Answer</option>
													<option value="TRUE">TRUE</option>
													<option value="FALSE">FALSE</option>
													<option value="NOT GIVEN">NOT GIVEN</option>
												</select>
											</div>
											<div class="d-block mt-3">
												<span><b>21.</b></span>
												<span class="d-inline">Many species of frogs have disappeared as a result of urban and rural expansion in both developing and developed countries.</span>
												<select name="q21" class="custom-select w-auto mt-2 d-block">
													<option value="">Select Answer</option>
													<option value="TRUE">TRUE</option>
													<option value="FALSE">FALSE</option>
													<option value="NOT GIVEN">NOT GIVEN</option>
												</select>
											</div>

											<hr>

											<p class="font-weight-bold mb-0">Questions 22-26</p>
											<p class="mb-0">Match the frog with the statement.</p>
											<p>Select 5 of the species in the box and match them with the statements below. <br>For questions 9 to 13 select a letter <b>A-G</b></p>

											<div class="row justify-content-center">
												<div class="col-md-auto border px-4 py-2">
													<p class="mb-0">A. Goliath frog</p>
													<p class="mb-0">B. Whites tree frog</p>
													<p class="mb-0">C. Poison dart frog</p>
													<p class="mb-0">D. Yellow-legged frog</p>
													<p class="mb-0">E. Waxy monkey frog</p>
													<p class="mb-0">F. African clawed frog</p>
													<p class="mb-0">G. Fire-bellied toad</p>
													<p class="mb-0">H. Red-eyed tree frog</p>
												</div>
											</div>

											<div class="mt-3">
												<span class="d-block"><b>22.</b> Useful for catching animals.</span>
												<select name="q22" class="custom-select w-auto mt-2">
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

											<div class="mt-3">
												<span><b>23.</b> Can help prevent the spread of a particular disease.</span>
												<select name="q23" class="custom-select w-auto d-block mt-2">
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

											<div class="mt-3">
												<span><b>24.</b> A culinary delight.</span>
												<select name="q24" class="custom-select w-auto mt-2 d-block">
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

											<div class="mt-3">
												<span><b>25.</b> Useful for treating problems caused by diabetes.</span>
												<select name="q25" class="custom-select w-auto d-block mt-2">
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

											<div class=" mt-3">
												<span><b>26.</b> People with blood pressure problems may benefit from this.</span>
												<select name="q26" class="custom-select w-auto d-block mt-2">
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
									</div>
								</div>
							</section>
							<!-- end passage 2 -->

							<h3>Passage 3</h3>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="card-box font-16" id="section3">
											<h5 class="font-weight-bold">Passage 3 : Hot Air Ballooning</h5>

											<p><b>A</b> - Rising before the alarm clock (set at an unfriendly 5:00 a.m.) was activated, we washed and dressed, listening in silent anticipation to the awakening forest.  Our torch beams probed the darkness as we walked from our tent to the balloon launch site.  Extreme caution was required on the short journey because the path we were following was often used by hippos returning from a night’s foraging and the odd Cape Buffalo out for a nocturnal stroll.</p>
											
											<p><b>B</b> - Finally we emerged into a huge, mist shrouded clearing and there before us lay three gigantic balloons.  Dawn brushed the treetops with the first light of day and our sense of expectation and excitement climbed with the morning sun. Suddenly the clatter of petrol engines obliterated the early hush.  The engines were necessary to power the huge fans used to force large amounts of air into the balloons’ envelopes.  This was just the first stage in the balloon-inflation process and while the fans were running, the ground crews and pilots meticulously checked all the lines and rigging — a reassuring sight for us prospective passengers!</p>

											<p><b>C</b> - After about 10 minutes of inflation, the balloons began to take shape.  The welcome silence following the fans being shut down was suddenly filled by a whoosh of gas.  Then came a glorious burst of flame as the gas was ignited. Adrenaline shot through my body.  I had chosen to position myself inside one of the balloons’ envelopes in order to capture on film the dramatic colours of the burner’s incoming flame. After a few quick shots, I indicated to the pilot my desire not to be barbecued and made a quick exit.  By this time, the balloon was approaching its classical vertical position.</p>

											<p><b>D</b> - At last!  The moment we’d all been waiting for!  The pilot instructed the excited passengers — congregated here from every corner of the globe — to climb into the balloon’s wicker basket. Part of a group of ten passengers, we listened intently to our pilot’s briefing.  There was no seat belt and no-smoking sign to observe, and the operation of mobile phones and CD players would not affect the technology of this particular aircraft.  Landing was to be the big thing.  We were instructed, quite sternly, that as the balloon descended, we must crouch down facing backwards — and HANG ON.  We were obliged to actually practise this procedure so that those who understood little or no English would be left in no doubt as to what was required.  At that stage, none of us could foresee just how exciting our landing would be.</p>

											<p><b>E</b> - A few final bursts of colourful flame brought the balloon — and us — to the point of lift-off.  Our hearts thumped with excitement at the spectacular sight of the other balloons rising — and then it was our turn.  The wicker basket scuffed along the ground until suddenly we were drawn upward towards the waiting heavens. There are no words to describe the feeling of those first few moments of flight.  As we rose into the warmth of the sun, we were gently gathered up by the wind and carried towards the romance of the vast African Plains.</p>

											<p><b>F</b> - Only an intermittent burst of flame interrupted the profound silence as the pilot adjusted the temperature of the air inside the balloon.   The basics of balloon flight are easy — hotter air to climb, cooler air to descend.  It takes great skill and practice, however, to anticipate what is required.  Wind alone was our propulsion, and we were fortunate to be wafting along with a gentle current that allowed us time to absorb all the magnificence around us.  The Serengeti and Masai Masai ecological systems are fascinating enough to behold from a car, but from a balloon’s vantage point, they are truly awe-inspiring.</p>

											<p><b>G</b> - Little could escape the eagle-eyed onslaught of ten pairs of eyes.  We had already seen elephants, buffaloes, giraffes and various antelopes, and even a pack of Branded Mongooses was pointed out when we were not so high up. Lions!  Yes!  There they were below, moving in our direction towards the forest.  We glided over the meandering Mara River, home to the greatest concentration of hippopotamus in the world.  Viewed from above, the thick riverine forest was a stunning sight, and we watched colourful canopy-dwelling birds rarely seen from ground level dart from cover to cover.</p>

											<p><b>H</b> - Eventually all things come to an end — alas, even good things.  Up ahead loomed the plains where we would make our touchdown. Skillfully manoeuvring the balloon only a metre above the ground, its huge shadow cast westwards, the pilot instructed us to prepare for the landing.  The wind had picked up since early morning and we were now travelling at a fast jogging pace.  The pilot rounded off the order to prepare for landing as instructed with a warning that we may well bounce a few times before finally coming to rest. </p>

											<p><b>I</b> - We did as we had been told.  We crouched down, we hung on ... and we bounced several times.  Lying on my back, taking photos upside down, I watched the pilot determinedly pull the ripcord to release the hot air.  The balloon envelope collapsed.  A mix of grass, dust and the odd stone flew into the basket as we were dragged across the ground.  Eventually we slowed down and came to a halt.  The tension of those last few moments was suddenly released in a torrent of cheering and laughter.</p>
										</div>
									</div>
									<div class="col-md-6">
										<div class="card-box dont-16">
											<p class="font-weight-bold d-inline">Questions 27-31 - </p>
											<p class="d-inline">Select the best answer for each question from the given options.</p>
											<p>For <b>Question 1-5</b> select the letter a, b, c, or d</p>

											<div class="mt-3">
												<p><b>27.</b> What possible dangers were there on the way to the balloon site?</p>
												<div class="custom-control custom-radio">
		                                            <input type="radio" id="q27-1" name="q27" class="custom-control-input" value="A">
		                                            <label class="custom-control-label mt-0" for="q27-1">A. The fact they needed torches to find their way.</label>
	                                        	</div>
	                                            
	                                            <div class="custom-control custom-radio">
	                                                <input type="radio" id="q27-2" name="q27" class="custom-control-input" value="B">
	                                                <label class="custom-control-label mt-0" for="q27-2">B. It was very early in the morning and they hadn’t had enough sleep.</label>
	                                            </div>
	                                            <div class="custom-control custom-radio">
	                                                <input type="radio" id="q27-3" name="q27" class="custom-control-input" value="C">
	                                                <label class="custom-control-label mt-0" for="q27-3">C. The fact they were staying in a tent.</label>
	                                            </div>
	                                            <div class="custom-control custom-radio">
	                                                <input type="radio" id="q27-4" name="q27" class="custom-control-input" value="D">
	                                                <label class="custom-control-label mt-0" for="q27-4">D. The risk of meeting wild animals.</label>
	                                            </div>
											</div>

											<div class="mt-3">
												<p><b>28.</b> Why do you think the passengers needed to be reassured?</p>
												<div class="custom-control custom-radio">
		                                            <input type="radio" id="q28-1" name="q28" class="custom-control-input" value="A">
		                                            <label class="custom-control-label mt-0" for="q28-1">A. They were worried that something might go wrong with the equipment on the balloon.</label>
	                                        	</div>
	                                            
	                                            <div class="custom-control custom-radio">
	                                                <input type="radio" id="q28-2" name="q28" class="custom-control-input" value="B">
	                                                <label class="custom-control-label mt-0" for="q28-2">B. They were worried about the balloon-inflation process.</label>
	                                            </div>
	                                            <div class="custom-control custom-radio">
	                                                <input type="radio" id="q28-3" name="q28" class="custom-control-input" value="C">
	                                                <label class="custom-control-label mt-0" for="q28-3">C. They were worried about the weather.</label>
	                                            </div>
	                                            <div class="custom-control custom-radio">
	                                                <input type="radio" id="q28-4" name="q28" class="custom-control-input" value="D">
	                                                <label class="custom-control-label mt-0" for="q28-4">D. They were worried about the gas.</label>
	                                            </div>
											</div>

											<div class="mt-3">
												<p><b>29.</b> Why did they light the gas?</p>
												<div class="custom-control custom-radio">
		                                            <input type="radio" id="q29-1" name="q29" class="custom-control-input" value="A">
		                                            <label class="custom-control-label mt-0" for="q29-1">A. It was for a barbecue breakfast after the flight.</label>
	                                        	</div>
	                                            
	                                            <div class="custom-control custom-radio">
	                                                <input type="radio" id="q29-2" name="q29" class="custom-control-input" value="B">
	                                                <label class="custom-control-label mt-0" for="q29-2">B. Gas was used to heat the air and so raise the balloon</label>
	                                            </div>
	                                            <div class="custom-control custom-radio">
	                                                <input type="radio" id="q29-3" name="q29" class="custom-control-input" value="C">
	                                                <label class="custom-control-label mt-0" for="q29-3">C. The morning was cold and so it kept them warm.</label>
	                                            </div>
	                                            <div class="custom-control custom-radio">
	                                                <input type="radio" id="q29-4" name="q29" class="custom-control-input" value="D">
	                                                <label class="custom-control-label mt-0" for="q29-4">D. So that they had more light in order to take photographs.</label>
	                                            </div>
											</div>

											<div class="mt-3">
												<p><b>30.</b> Explain what the writer means by 'after a few quick shots' ?</p>
												<div class="custom-control custom-radio">
		                                            <input type="radio" id="q30-1" name="q30" class="custom-control-input" value="A">
		                                            <label class="custom-control-label mt-0" for="q30-1">A. After shooting some of the wildlife.</label>
	                                        	</div>
	                                            
	                                            <div class="custom-control custom-radio">
	                                                <input type="radio" id="q30-2" name="q30" class="custom-control-input" value="B">
	                                                <label class="custom-control-label mt-0" for="q30-2">B. After a few bursts of flame from the gas.</label>
	                                            </div>
	                                            <div class="custom-control custom-radio">
	                                                <input type="radio" id="q30-3" name="q30" class="custom-control-input" value="C">
	                                                <label class="custom-control-label mt-0" for="q30-3">C. After throwing something onto the gas fire.</label>
	                                            </div>
	                                            <div class="custom-control custom-radio">
	                                                <input type="radio" id="q30-4" name="q30" class="custom-control-input" value="D">
	                                                <label class="custom-control-label mt-0" for="q30-4">D. After quickly taking some photographs.</label>
	                                            </div>
											</div>

											<div class="mt-3">
												<p><b>31.</b> What do we know about the passengers?</p>
												<div class="custom-control custom-radio">
		                                            <input type="radio" id="q31-1" name="q31" class="custom-control-input" value="A">
		                                            <label class="custom-control-label mt-0" for="q31-1">A. They all spoke English well.</label>
	                                        	</div>
	                                            
	                                            <div class="custom-control custom-radio">
	                                                <input type="radio" id="q31-2" name="q31" class="custom-control-input" value="B">
	                                                <label class="custom-control-label mt-0" for="q31-2">B. There was a mix of nationalities.</label>
	                                            </div>
	                                            <div class="custom-control custom-radio">
	                                                <input type="radio" id="q31-3" name="q31" class="custom-control-input" value="C">
	                                                <label class="custom-control-label mt-0" for="q31-3">C. Some of them listened to the pilot’s briefing.</label>
	                                            </div>
	                                            <div class="custom-control custom-radio">
	                                                <input type="radio" id="q31-4" name="q31" class="custom-control-input" value="D">
	                                                <label class="custom-control-label mt-0" for="q31-4">D. They all knew each other.</label>
	                                            </div>
											</div>
											<hr>

											<p class="font-weight-bold mb-0">Questions 32-36</p>
											<p>Identify the paragraphs which contain the following information. For Questions 6 to 10 select the letters <b>A – I</b></p>

											<div class="row justify-content-center">
												<div class="col-md-10">
													<table class="table table-bordered">
														<tr>
															<th></th>
															<th></th>
															<th>Paragraph</th>
														</tr>
														<tr>
															<td>32.</td>
															<td>To contrast a flight in an aeroplane.</td>
															<td>
																<select name="q32" class="custom-select w-auto">
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
															<td>33.</td>
															<td>Examples of animals they saw.</td>
															<td>
																<select name="q33" class="custom-select w-auto">
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
															<td>34.</td>
															<td>The emotions of the passengers as they left the ground.</td>
															<td>
																<select name="q34" class="custom-select w-auto">
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
															<td>35.</td>
															<td>A bumpy landing.</td>
															<td>
																<select name="q35" class="custom-select w-auto">
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
															<td>36.</td>
															<td>People making preparations for the flight.</td>
															<td>
																<select name="q36" class="custom-select w-auto">
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
													<!-- end table -->
												</div>
												<!-- end col table -->
											</div>
											<!-- end row table -->
											<hr>

											<p class="font-weight-bold mb-0">Questions 37-40</p>
											<p>Complete the following passage using words from the box, selecting the letters <b>a – h</b></p>

											<div style="line-height: 1.5;">
												<p>Eventually all things come to an end.  In front of us we saw the flat area where we 
												would make our <b>37</b> 
												<select name="q37" class="d-inline custom-select w-auto">
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
												.With the balloon hovering just one metre above the ground, the pilot instructed us to get <b>38</b> 
												<select name="q38" class="d-inline custom-select w-auto">
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
												for the landing.  The wind had <b>39</b>
												<select name="q39" class="d-inline custom-select w-auto my-2">
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
												since early morning and we were now travelling at a fast running pace.  Just before we landed, the pilot <b>40</b> 
												<select name="q40" class="d-inline custom-select w-auto my-2">
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
												 the passengers that we may well bounce a few times before finally coming to rest. He wasn’t wrong!
												</p>
											</div>

											<div class="row border p-2">
												<div class="col-md-4">
													<p>a. stopped</p>
												</div>
												<div class="col-md-4">
													<p>b. worried</p>
												</div>
												<div class="col-md-4">
													<p>c. landing</p>
												</div>
												<div class="col-md-4">
													<p>d. disappeared</p>
												</div>
												<div class="col-md-4">
													<p>e. ready</p>
												</div>
												<div class="col-md-4">
													<p>f. warned</p>
												</div>
												<div class="col-md-4">
													<p>g. increased</p>
												</div>
												<div class="col-md-4">
													<p>h. grounding</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<!-- end passage 3 -->
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
	<!-- end container-fliud -->
</div>
<!-- end content -->
@endsection

@section('javascript')
<script src="{{asset('public/js/mocktest/timer_ieltsreading.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('public/assets/assets/ColorPicker.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/assets/rainbow-custom.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/assets/src/TextHighlighter.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/assets/src/TextHighlighter.min.js')}}"></script>
<script type="text/javascript">
	document.querySelector('body').addEventListener('load', begintimer());
    $(function () {
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
        	'onChange': 'javascript:this.value=this.value.toUpperCase();',
        	'spellcheck': 'false'
        });
    }); 	
</script>
@stop