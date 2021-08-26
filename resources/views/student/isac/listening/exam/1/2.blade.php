<link rel="stylesheet" href="{{ asset('public/css/draggable.css') }}">
<style>
    .input-con {
        display: inline-block;
        position: relative;
    }

    .drag-container {
        margin-bottom: 25px;
    }

    .answers-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 10px 0;
    }

    .answers-container p {
        font-size: 16px;
    }

    .dropbox {
        border: 1px dashed #ccc;
        border-radius: 5px;
        padding: 3px;
        width: 100%;
        height: auto;
        min-width: 250px;
    }

    .dropbox .drag {
        margin: 0;
    }

    .grid-5 {
        grid-template-columns: repeat(6, 1fr);
    }

    .aw {
        display: none;
    }
</style>
@php

$caller_1_1 = new stdClass();
$caller_1_1->e1 = new stdClass();
$caller_1_1->e1->q = "1. e.g.";
$caller_1_1->e1->aw = "for example";
$caller_1_1->e2 = new stdClass();
$caller_1_1->e2->q = "2. et al.";
$caller_1_1->e2->aw = "and others";
$caller_1_1->e3 = new stdClass();
$caller_1_1->e3->q = "3. ca.";
$caller_1_1->e3->aw = "circa / approximately";
$caller_1_1->e4 = new stdClass();
$caller_1_1->e4->q = "4. i.e.";
$caller_1_1->e4->aw = "that is; that means;";
$caller_1_1->e5 = new stdClass();
$caller_1_1->e5->q = "5. N.B.";
$caller_1_1->e5->aw = "note well (what follows)";
$caller_1_1->e6 = new stdClass();
$caller_1_1->e6->q = "6. Cf";
$caller_1_1->e6->aw = "compare";
$caller_1_1->e7 = new stdClass();
$caller_1_1->e7->q = "7. Etc.";
$caller_1_1->e7->aw = "and so on / etcetera";
$caller_1_1->e8 = new stdClass();
$caller_1_1->e8->q = "8. 1066 A.D";
$caller_1_1->e8->aw = "1066 anno domini";
$caller_1_1->e9 = new stdClass();
$caller_1_1->e9->q = "9. 33 B.C.";
$caller_1_1->e9->aw = "33 before (the birth of) Christ";
$caller_1_1->e10 = new stdClass();
$caller_1_1->e10->q = "10. p.a.";
$caller_1_1->e10->aw = "per annum / each year";

$caller_1_1_choice = new stdClass();
$caller_1_1_choice->aw1 = "1066 anno domini";
$caller_1_1_choice->aw2 = "that is; that means;";
$caller_1_1_choice->aw3 = "and so on / etcetera";
$caller_1_1_choice->aw4 = "33 before (the birth of) Christ";
$caller_1_1_choice->aw5 = "circa / approximately";
$caller_1_1_choice->aw6 = "per annum / each year";
$caller_1_1_choice->aw7 = "and others";
$caller_1_1_choice->aw8 = "note well (what follows)";
$caller_1_1_choice->aw9 = "for example";
$caller_1_1_choice->aw10 = "compare";



$caller_1_2 = new stdClass();
$caller_1_2->e1 = new stdClass();
$caller_1_2->e1->q = "1. b. 1898";
$caller_1_2->e1->aw = "born in";
$caller_1_2->e2 = new stdClass();
$caller_1_2->e2->q = "2. incl.";
$caller_1_2->e2->aw = "including";
$caller_1_2->e3 = new stdClass();
$caller_1_2->e3->q = "3. km.p.h.";
$caller_1_2->e3->aw = "kilometres per hour";
$caller_1_2->e4 = new stdClass();
$caller_1_2->e4->q = "4. Mt. (Everest)";
$caller_1_2->e4->aw = "Mount";
$caller_1_2->e5 = new stdClass();
$caller_1_2->e5->q = "5. no.";
$caller_1_2->e5->aw = "number";
$caller_1_2->e6 = new stdClass();
$caller_1_2->e6->q = "6. d. 1976";
$caller_1_2->e6->aw = "died in";
$caller_1_2->e7 = new stdClass();
$caller_1_2->e7->q = "7. ed.";
$caller_1_2->e7->aw = "editor / edited";
$caller_1_2->e8 = new stdClass();
$caller_1_2->e8->q = "8. dept.";
$caller_1_2->e8->aw = "department";
$caller_1_2->e9 = new stdClass();
$caller_1_2->e9->q = "9. bldg. ";
$caller_1_2->e9->aw = "building";
$caller_1_2->e10 = new stdClass();
$caller_1_2->e10->q = "10. WHO.";
$caller_1_2->e10->aw = "World Health Organisation";
$caller_1_2->e11 = new stdClass();
$caller_1_2->e11->q = "11. Cm";
$caller_1_2->e11->aw = "centimetres";
$caller_1_2->e12 = new stdClass();
$caller_1_2->e12->q = "12. kW";
$caller_1_2->e12->aw = "kilowatts";
$caller_1_2->e13 = new stdClass();
$caller_1_2->e13->q = "13. mm";
$caller_1_2->e13->aw = "millimetres";
$caller_1_2->e14 = new stdClass();
$caller_1_2->e14->q = "14. kg";
$caller_1_2->e14->aw = "kilograms";
$caller_1_2->e15 = new stdClass();
$caller_1_2->e15->q = "15. cc";
$caller_1_2->e15->aw = "cubic centilitres";

$caller_1_2_choice = new stdClass();
$caller_1_2_choice->aw1 = "centimetres";
$caller_1_2_choice->aw2 = "World Health Organisation";
$caller_1_2_choice->aw3 = "Mount ";
$caller_1_2_choice->aw4 = "number";
$caller_1_2_choice->aw5 = "born in";
$caller_1_2_choice->aw6 = "building";
$caller_1_2_choice->aw7 = "kilometres per hour";
$caller_1_2_choice->aw8 = "including";
$caller_1_2_choice->aw9 = "kilowatts";
$caller_1_2_choice->aw10 = "cubic centilitres";
$caller_1_2_choice->aw11 = "died in";
$caller_1_2_choice->aw12 = "department";
$caller_1_2_choice->aw13 = "millimetres";
$caller_1_2_choice->aw14 = "editor / edited";
$caller_1_2_choice->aw15 = "kilograms";



$caller_2 = new stdClass();
$caller_2->e1 = new stdClass();
$caller_2->e1->n = "1";
$caller_2->e1->q = "...";
$caller_2->e1->q2 = "is the same as, is equal to";
$caller_2->e1->aw = "=";
$caller_2->e2 = new stdClass();
$caller_2->e2->n = "2";
$caller_2->e2->q = "≠";
$caller_2->e2->q2 = "...";
$caller_2->e2->aw = "is not the same as; is not equal to..";
$caller_2->e3 = new stdClass();
$caller_2->e3->n = "3";
$caller_2->e3->q = "----->";
$caller_2->e3->q2 = "...";
$caller_2->e3->aw = "leads to, results in";
$caller_2->e4 = new stdClass();
$caller_2->e4->n = "4";
$caller_2->e4->q = "...";
$caller_2->e4->q2 = "therefore";
$caller_2->e4->aw = "∴";
$caller_2->e5 = new stdClass();
$caller_2->e5->n = "5";
$caller_2->e5->q = "≤";
$caller_2->e5->q2 = "...";
$caller_2->e5->aw = "is less than or equal to..";
$caller_2->e6 = new stdClass();
$caller_2->e6->n = "6";
$caller_2->e6->q = "...";
$caller_2->e6->q2 = "is greater than, or equal to";
$caller_2->e6->aw = "≥";
$caller_2->e7 = new stdClass();
$caller_2->e7->n = "7";
$caller_2->e7->q = "...";
$caller_2->e7->q2 = "because";
$caller_2->e7->aw = "∵";
$caller_2->e8 = new stdClass();
$caller_2->e8->n = "8";
$caller_2->e8->q = "...";
$caller_2->e8->q2 = "increases, increasing";
$caller_2->e8->aw = "⬈";
$caller_2->e9 = new stdClass();
$caller_2->e9->n = "9";
$caller_2->e9->q = "...";
$caller_2->e9->q2 = "decreases, decreasing";
$caller_2->e9->aw = "⬊";
$caller_2->e10 = new stdClass();
$caller_2->e10->n = "10";
$caller_2->e10->q = "<------"; $caller_2->e10->q2 = "...";
    $caller_2->e10->aw = "results from, is caused by..";

    $caller_2_choice = new stdClass();
    $caller_2_choice->aw1 = "leads to, results in";
    $caller_2_choice->aw2 = "results from, is caused by..";
    $caller_2_choice->aw3 = "is not the same as; is not equal to..";
    $caller_2_choice->aw4 = "⬈";
    $caller_2_choice->aw5 = "=";
    $caller_2_choice->aw6 = "∵";
    $caller_2_choice->aw7 = "is less than or equal to..";
    $caller_2_choice->aw8 = "⬊";
    $caller_2_choice->aw9 = "≥";
    $caller_2_choice->aw10 = "∴";


    $caller_3 = new stdClass();
    $caller_3->e1 = new stdClass();
    $caller_3->e1->q = "1. Increased levels of alcohol consumption lead to dependence or even addiction.";
    $caller_3->e1->aw = "⬈alc. consumpt. dependce. / addict.";
    $caller_3->e2 = new stdClass();
    $caller_3->e2->q = "2. Einstein was a famous German scientist who was born in 1879.";
    $caller_3->e2->aw = "Einst. - fam. Germ. sc. b. 1879";
    $caller_3->e3 = new stdClass();
    $caller_3->e3->q = "3. Chemistry may be defined as the branch of science which studies the composition and reaction of different elements and substances.";
    $caller_3->e3->aw = "Chem = sc. studies compositn. + reactn. of diff. elem. + subst.";
    $caller_3->e4 = new stdClass();
    $caller_3->e4->q = "4. It has been forecast that we can look forward to fewer working hours in the future.";
    $caller_3->e4->aw = "Future: work hours⬊";
    $caller_3->e5 = new stdClass();
    $caller_3->e5->q = "5. The slavery issue was one of the reasons why the northern and southern states fought against each other in the American Civil War.";
    $caller_3->e5->aw = "Slavery (inter al.) --> Am civ. war";

    $caller_3_choice = new stdClass();
    $caller_3_choice->aw1 = "Slavery (inter al.) --> Am civ. war";
    $caller_3_choice->aw2 = "⬈alc. consumpt. dependce. / addict.";
    $caller_3_choice->aw3 = "Chem = sc. studies compositn. + reactn. of diff. elem. + subst";
    $caller_3_choice->aw4 = "Einst. - fam. Germ. sc. b. 1879";
    $caller_3_choice->aw5 = "Future: work hours⬊";



    $caller_4_A = new stdClass();
    $caller_4_A->e1 = new stdClass();
    $caller_4_A->e2 = new stdClass();
    $caller_4_A->e3 = new stdClass();
    $caller_4_A->e4 = new stdClass();
    $caller_4_A->e5 = new stdClass();

    $caller_4_A->e1->q = "1. What is the current population of Australia?";
    $caller_4_A->e2->q = "2. How many different nationalities live in Australia?";
    $caller_4_A->e3->q = "3. Do the majority of migrants today speak English as their native language?";
    $caller_4_A->e4->q = "4. What are the four most common languages spoken in Australia?";
    $caller_4_A->e5->q = "5. What is the dominant second language in the Northern Territory?";

    $caller_4_A->e1->aw = "18 million";
    $caller_4_A->e2->aw = "over 100";
    $caller_4_A->e3->aw = "No";
    $caller_4_A->e4->aw = "English, Italian, Greek + Chinese";
    $caller_4_A->e5->aw = "Aboriginal";

    @endphp
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card-box text-dark font-16">
                <p class="lead">
                    {{$pageTitle['sub_menu_name']}}
                </p>
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Part 1 (Note-Taking Conventions) </h2>
                        <span>People take / make notes for a variety of reasons: </span>
                        <table class="w-100 pt-2">
                            <tr>
                                <td>1.</td>
                                <td>Time:</td>
                                <td>they don't have enough time to write everything in full.
                                    e.g. in a lecture; from a phone message. </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Space:</td>
                                <td>they don't have enough space to write down everything in full.
                                    e.g. when you're running out of paper. </td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Planning:</td>
                                <td>they write notes to help them plan a formal piece of writing.
                                    e.g. planning an essay; organising ideas.</td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Memory: t</td>
                                <td>they write notes to help them remember certain things.
                                    e.g. in a lecture; from textbooks; key words for a presentation. </td>
                            </tr>
                        </table>
                        <span class="pt-2">Although people usually make notes at speed, it is important to write as clearly as possible so that you
                            can read the notes at some time in the future, when you need them again. </span>
                        <h3 class="pt-2">What can you do to save time?</h3>
                        <table class="w-100">
                            <tr>
                                <td>1.</td>
                                <td colspan="2">You can use <b>abbreviations.</b> e.g. WW2 = World War 2</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td colspan="2"> You can use <b>signs / symbols</b>.</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td colspan="2">
                                    You can leave out the grammar words and focus just on the content words
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    Here are some of the types of grammar words you can leave out.
                                    Can you complete the table? </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <table>
                                        <tr>
                                            <td class="px-3"><b>Categories</b></td>
                                            <td class="px-3"><b>Examples</b></td>
                                        </tr>
                                        <tr>
                                            <td class="px-3">1. Articles</td>
                                            <td class="px-3">A/an/the........... </td>
                                        </tr>
                                        <tr>
                                            <td class="px-3">2. Certain verbs</td>
                                            <td class="px-3">is/are................ </td>
                                        </tr>
                                        <tr>
                                            <td class="px-3">3. .......................</td>
                                            <td class="px-3">.......................... </td>
                                        </tr>
                                        <tr>
                                            <td class="px-3">.......................... </td>
                                            <td class="px-3">.......................... </td>
                                        </tr>
                                        <tr>
                                            <td class="px-3">.......................... </td>
                                            <td class="px-3">.......................... </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-12">
                        <h4 class="font-italic">Caller 1</h4>
                        <div class="card-box box-shadow" id="">
                            <h5>Find out the meaning of these common abbreviations from Latin:</h5>
                            <div class="row justify-content-center mb-2">
                                <div class="col-md-12">
                                    <div class="border border-dark px-2 text-center">
                                        <div class="drag-container">
                                            <div class="d-grid grid-5" id="choices">
                                                @foreach($caller_1_1_choice as $choice)
                                                <div class="drag">{{$choice}}</div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center mb-2">
                                <div class="col-md-12">
                                    <table class="w-100 mb-3">
                                        @foreach($caller_1_1 as $index => $caller_1_1)
                                        <tr>
                                            <td class="border border-dark p-2">{{$caller_1_1->q}}</td>
                                            <td class="border border-dark p-2">
                                                <div class="input-con">
                                                    <div class="dropbox q" show-aw="caller_1_1-{{$index}}" aw="{{$caller_1_1->aw}}"></div>
                                                </div>
                                            </td>
                                            <td class="aw caller_1_1-{{$index}} text-danger">
                                                {{$caller_1_1->aw}}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            <h5>Here are some more common abbreviations. What do they mean?</h5>
                            <div class="row justify-content-center mb-2">
                                <div class="col-md-12">
                                    <div class="border border-dark px-2 text-center">
                                        <div class="drag-container">
                                            <div class="d-grid grid-5" id="choices">
                                                @foreach($caller_1_2_choice as $choice)
                                                <div class="drag">{{$choice}}</div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center mb-2">
                                <div class="col-md-12">
                                    <table class="w-100 mb-3">
                                        @foreach($caller_1_2 as $index => $caller_1_2)
                                        <tr>
                                            <td class="border border-dark p-2">{{$caller_1_2->q}}</td>
                                            <td class="border border-dark p-2">
                                                <div class="input-con">
                                                    <div class="dropbox q" show-aw="caller_1_2-{{$index}}" aw="{{$caller_1_2->aw}}"></div>
                                                </div>
                                            </td>
                                            <td class="aw caller_1_2-{{$index}} text-danger">
                                                {{$caller_1_2->aw}}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <h4 class="font-italic">Caller 2</h4>
                        <div class="card-box box-shadow" id="">
                            <h5>Complete the table of commonly used signs and symbols: </h5>
                            <div class="row justify-content-center mb-2">
                                <div class="col-md-12">
                                    <div class="border border-dark px-2 text-center">
                                        <div class="drag-container">
                                            <div class="d-grid grid-5" id="choices">
                                                @foreach($caller_2_choice as $choice)
                                                <div class="drag">{{$choice}}</div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center mb-2">
                                <div class="col-md-12">
                                    <table class="w-100 mb-3">
                                        <tr>
                                            <td class="border border-dark p-2">No.</td>
                                            <td class="border border-dark p-2">Symbol</td>
                                            <td class="border border-dark p-2">Meaning</td>
                                            <td class=""></td>
                                        </tr>
                                        @foreach($caller_2 as $index => $caller_2)
                                        <tr>
                                            <td class="border border-dark p-2">{{$caller_2->n}}</td>
                                            <td class="border border-dark p-2 q-caller-2" show-aw="caller_2-{{$index}}" aw="{{$caller_2->aw}}">{{$caller_2->q}}</td>
                                            <td class="border border-dark p-2 q-caller-2" show-aw="caller_2-{{$index}}" aw="{{$caller_2->aw}}">{{$caller_2->q2}}</td>
                                            <td class="aw caller_2-{{$index}} text-danger">
                                                {{$caller_2->aw}}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <h4 class="font-italic">Caller 3</h4>
                        <div class="card-box box-shadow" id="">
                            <h5>Write the following sentences in note form, using abbreviations, signs, symbols or anything else which will help you. Focus only on the content words. </h5>
                            <div class="row justify-content-center mb-2">
                                <div class="col-md-12">
                                    <div class="border border-dark px-2 text-center">
                                        <div class="drag-container">
                                            <div class="d-grid grid-5" id="choices">
                                                @foreach($caller_3_choice as $choice)
                                                <div class="drag">{{$choice}}</div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center mb-2">
                                <div class="col-md-12">
                                    <table class="w-100 mb-3">
                                        @foreach($caller_3 as $index => $caller_3)
                                        <tr>
                                            <td class="border-dark p-2">{{$caller_3->q}}</td>
                                        </tr>
                                        <tr>
                                            <td class="border-dark p-2">
                                                <b>Answer: </b>
                                                <div class="input-con w-75">
                                                    <div class="dropbox w-75 q" show-aw="caller_3-{{$index}}" aw="{{$caller_3->aw}}"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="aw caller_3-{{$index}} text-danger">
                                                {{$caller_3->aw}}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <span>Read through the following passage and make notes. </span>
                        <br>
                        <h5>Remember, though, that you must be able to understand the notes later. </h5>
                        <span>
                            Skin cancer is caused by constant exposure to the sun. In Australia doctors discover 140,000 new cases
                            of skin cancer every year, approximately one thousand of which result in death. There are three sorts of
                            skin cancer. The most dangerous skin cancer is melanoma. The other two types are not as serious but
                            must be treated early to be sure of a complete cure. According to medical research ultra-violet radiation
                            is responsible for causing skin cancer. There are three types of ultra-violet rays: UVA, UVB and UVC. Of
                            these three, UVB is the most dangerous and causes the most damage to the skin. UVA has a slower
                            effect on skin cells and is responsible for the aging process which makes skin wrinkled and leathery. UVC
                            rays never reach earth and are, therefore, not an issue. The greater the exposure to the sun, the
                            greater the risk of getting skin cancer. The most dangerous time to sunbathe is between 11 in the
                            morning and 3 in the afternoon. People with fair skin are the most susceptible to the effects of sunburn
                            but everyone, with the exception of Australian Aborigines, are prone to skin cancer. There are a number
                            of things we can do to help prevent skin cancer: wearing a T-shirt, putting on a hat and using sun-cream
                            are just three ways to protect ourselves from the harmful effects of sun. 
                        </span>
                    </div>
                    <div class="col-lg-12">
                        <h4 class="font-italic">Caller 4</h4>
                        <div class="card-box box-shadow" id="">
                            <h5>A. You are going to listen to a short talk about the population of Australia. As you listen, try to find the answers to the following questions:</h5>
                            <table class="w-100 mb-3">
                                @foreach($caller_4_A as $index => $caller_4_A)
                                <tr>
                                    <td class="border-dark p-2">{{$caller_4_A->q}}</td>
                                </tr>
                                <tr>
                                    <td class="border-dark p-2">
                                        <b>Answer: </b>
                                        <div class="input-con w-75">
                                            <input type="text" class="q-text w-100" show-aw="caller_4_A-{{$index}}" aw="{{$caller_4_A->aw}}">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="aw caller_4_A-{{$index}} text-danger">
                                        <span class="pl-5">{{$caller_4_A->aw}}</span>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            <h5 class="mt-3">B. Listen to the talk again and take notes using the conventions available to you. </h5>
                            <textarea name="" class="w-100" style="resize: none;" id="" cols="30" rows="10"></textarea>
                            <h5 class="mt-3">C. Write a short summary of the talk, using your own words as far as possible. The summary should be between 80 - 100 words. </h5>
                            <textarea name="" class="w-100" style="resize: none;" id="" cols="30" rows="10"></textarea>
                            <h5 class="mt-3 aw text-success">D. Summary (possible answer) </h5>
                            <span class="aw text-success">
                                The population of Australia is now eighteen million, consisting of over one hundred different
                                nationalities. In the past most migrants came from English speaking countries but nowadays most
                                migrants do not have English as their first language. This change of focus has resulted in other changes
                                in food, traditions and attitudes to learning foreign languages. In the past Australians chose not to learn
                                a foreign language but nowadays many people are learning foreign languages. The most common
                                languages in Australia are English, Italian, Greek and Chinese. Each state has a different second
                                language focus.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div id="sound-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header bg-primary py-2">
                    <h4 class="modal-title text-white mx-auto">Activity 1 - Intro</h4>
                </div>
                <div class="modal-body text-center">
                    <button id="sound-intro" class="btn btn-bordered-primary">Play Sound</button>
                    <audio data-sound="sound-intro">
                        <source src="{{ asset('public/audio/exam/listen/unit-i-nmbers.mp3') }}" type="audio/mp3">
                    </audio>
                </div>
            </div>
        </div>
    </div>


    @section('button-control')
    <button id="check-answer" class="btn btn-info">Check Answersss</button>
    <!-- <button id="show-answer" class="btn btn-success">Show Answer</button> -->
    @endsection

    @section('js')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

    <script>
        $('.q-caller-2').each((idx, item) => {
            let text = $(item).html()
            if (text == "...") {
                let input = '<div class="input-con">' +
                    '<div class="dropbox q" show-aw="' + $(item).attr('show-aw') + '" aw="' + $(item).attr('aw') + '"></div>' +
                    '</div>'
                text = text.replace("...", input)
                $(item).html(input)
            }
        })

        $('#check-answer').on('click', () => {
            $('.q').each((idx, item) => {
                if ($(item).text().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                    show_aw($(item).attr('show-aw'))
            })
            $('.q-text').each((idx, item) => {
                if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                    show_aw($(item).attr('show-aw'))
            })
            $('.aw').removeClass('aw')
        })

        function show_aw(aw) {
            $('.' + aw).addClass('text-success')
            $('.' + aw).removeClass('text-danger')
        }


        $('#sound-modal').modal({
            'show': true,
            'backdrop': "static",
            'keyboard': false
        })
        $('#sound-intro').on('click', (e) => {
            $('#sound-modal').modal('hide')
            const audio = document.querySelector('audio[data-sound="sound-intro"]');
            audio.play()
        })

        $(".drag").draggable({
            revert: "invalid",
            cursor: "move",
            opacity: 0.7,
            zIndex: 100,
            containment: ".card-box",
            stop: function(event, ui) {
                if ($("#choices").children().length == 0) {
                    $("#check-answer").prop("disabled", false);
                }
            },
        });

        $(".dropbox").droppable({
            accept: ".drag",
            tolerance: "touch",
            zIndex: 100,
            over: function(event, ui) {
                $(this).css("border-color", "#777");
            },
            out: function(event, ui) {
                $(this).css("border-color", "#ccc");
            },
            drop: function(event, ui) {
                if ($(this).children().length > 0) {
                    var move = $(this).children().detach();
                    $(ui.draggable).css({
                        top: 0,
                        left: 0
                    }).parent().append(move);
                }
                $(this).css("border-color", "#ccc");
                $(this).append($(ui.draggable).css({
                    top: 0,
                    left: 0
                }));
            },
        });
    </script>

    @stop