<link rel="stylesheet" href="{{ asset('public/css/draggable.css') }}">
<style>
    table tr td {
        vertical-align: middle;
    }

    .table tr td {
        vertical-align: middle;
        border: 1px solid black;
    }

    .table tr th {
        border: 1px solid black;
    }

    .input-con {
        display: inline-block;
        position: relative;
    }

    .input-con2 {
        width: 100px;
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
        min-height: 40px;
    }

    .dropbox .drag {
        margin: 0;
        vertical-align: middle;
    }

    .grid-5 {
        grid-template-columns: repeat(3, 1fr);
    }

    .aw {
        display: none;
    }

    .input-text {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 3px;
        width: 100%;
        height: auto;
        min-width: 80px;
        min-height: 40px;
    }

    #caller-3 tr .col-3-500 {
        width: 500px;
        padding-left: 10px;
    }
</style>
@php


$caller_1 = new stdClass();
$caller_1_choice = new stdClass();
$caller_1->e1 = new stdClass();
$caller_1->e2 = new stdClass();
$caller_1->e3 = new stdClass();
$caller_1->e4 = new stdClass();
$caller_1->e5 = new stdClass();
$caller_1->e6 = new stdClass();
$caller_1->e7 = new stdClass();
$caller_1->e8 = new stdClass();
$caller_1->e9 = new stdClass();
$caller_1->e10 = new stdClass();
$caller_1->e11 = new stdClass();
$caller_1->e12 = new stdClass();
$caller_1->e13 = new stdClass();
$caller_1->e14 = new stdClass();
$caller_1->e15 = new stdClass();
$caller_1->e16 = new stdClass();
$caller_1->e17 = new stdClass();
$caller_1->e18 = new stdClass();
$caller_1->e19 = new stdClass();
$caller_1->e20 = new stdClass();

$caller_1->e1->q = "attitudes";
$caller_1->e2->q = "discrepancy";
$caller_1->e3->q = "status";
$caller_1->e4->q = "emancipation";
$caller_1->e5->q = "eradicating";
$caller_1->e6->q = "belittle";
$caller_1->e7->q = "reviewed";
$caller_1->e8->q = "to skid";
$caller_1->e9->q = "assumption";
$caller_1->e10->q = "anecdote";
$caller_1->e11->q = "to denote";
$caller_1->e12->q = "insults";
$caller_1->e13->q = "connotations";
$caller_1->e14->q = "counterparts";
$caller_1->e15->q = "the former";
$caller_1->e16->q = "the latter";
$caller_1->e17->q = "newly-coined";
$caller_1->e18->q = "omission";
$caller_1->e19->q = "prolonged";
$caller_1->e20->q = "intention";

$caller_1->e1->aw = "ways in which people think; beliefs";
$caller_1->e2->aw = "difference";
$caller_1->e3->aw = "position, standing";
$caller_1->e4->aw = "freedom from restrictive bonds";
$caller_1->e5->aw = "getting rid of";
$caller_1->e6->aw = "make someone look small and unimportant";
$caller_1->e7->aw = "reconsidered, changed";
$caller_1->e8->aw = "to slide out of control, usually in a vehicle";
$caller_1->e9->aw = "something which is accepted as true without proof";
$caller_1->e10->aw = "short story, often humorous";
$caller_1->e11->aw = "to show";
$caller_1->e12->aw = "language used to hurt someone's feelings";
$caller_1->e13->aw = "additional meanings";
$caller_1->e14->aw = "equivalents";
$caller_1->e15->aw = "the thing mentioned first";
$caller_1->e16->aw = "the thing mentioned last";
$caller_1->e17->aw = "recently invented (words, phrases)";
$caller_1->e18->aw = "leaving out; not included";
$caller_1->e19->aw = "extended, over a longer period";
$caller_1->e20->aw = "aim, purpose to do something";

$caller_1_choice->ch1 = "ways in which people think; beliefs";
$caller_1_choice->ch2 = "make someone look small and unimportant";
$caller_1_choice->ch3 = "aim, purpose to do something";
$caller_1_choice->ch4 = "equivalents";
$caller_1_choice->ch5 = "short story, often humorous";
$caller_1_choice->ch6 = "freedom from restrictive bonds";
$caller_1_choice->ch7 = "difference";
$caller_1_choice->ch8 = "leaving out; not included";
$caller_1_choice->ch9 = "extended, over a longer period";
$caller_1_choice->ch10 = "getting rid of";
$caller_1_choice->ch11 = "position, standing";
$caller_1_choice->ch12 = "to slide out of control, usually in a vehicle";
$caller_1_choice->ch13 = "additional meanings";
$caller_1_choice->ch14 = "reconsidered, changed";
$caller_1_choice->ch15 = "something which is accepted as true without proof";
$caller_1_choice->ch16 = "the thing mentioned last";
$caller_1_choice->ch17 = "to show";
$caller_1_choice->ch18 = "language used to hurt someone's feelings";
$caller_1_choice->ch19 = "recently invented (words, phrases)";
$caller_1_choice->ch20 = "the thing mentioned first";




$caller_2 = new stdClass();
$caller_2_choice = new stdClass();
$caller_2->e1 = new stdClass();
$caller_2->e2 = new stdClass();
$caller_2->e3 = new stdClass();
$caller_2->e4 = new stdClass();
$caller_2->e5 = new stdClass();
$caller_2->e6 = new stdClass();
$caller_2->e7 = new stdClass();
$caller_2->e8 = new stdClass();
$caller_2->e9 = new stdClass();
$caller_2->e10 = new stdClass();

$caller_2->e1->n = "1";
$caller_2->e2->n = "2";
$caller_2->e3->n = "3";
$caller_2->e4->n = "4";
$caller_2->e5->n = "5";
$caller_2->e6->n = "6";
$caller_2->e7->n = "7";
$caller_2->e8->n = "8";
$caller_2->e9->n = "9";
$caller_2->e10->n = "10";

$caller_2->e1->q = "In language, slang has a lower ... than academic language.";
$caller_2->e2->q = "The speaker began his speech with a short ...";
$caller_2->e3->q = "The man was a real bully and was always trying to ... his wife's achievements";
$caller_2->e4->q = "I hate both jogging and sprinting; the ... is too slow, and the ... is too fast.";
$caller_2->e5->q = "There are a number of ... words and phrases in the English language; many of them have their origins in other languages.";
$caller_2->e6->q = "John couldn't balance the books; there was a ... in the figures.";
$caller_2->e7->q = "Sally was very disappointed she wasn't selected to play for her netball team; her ... from the team was a great shock for the rest of the players.";
$caller_2->e8->q = "Initially I was given a six-month visa to remain in Australia but the visa was ... by three months so that I could spend some time up north.";
$caller_2->e9->q = "The World Health Organization has been trying to ... malaria for a long time.";
$caller_2->e10->q = "Wayne's motorcycle ... on the muddy road and he ended up in a ditch.";

$caller_2->e1->aw = "status";
$caller_2->e2->aw = "anecdote";
$caller_2->e3->aw = "belittle";
$caller_2->e4->aw = "former***latter";
$caller_2->e5->aw = "newly-coined";
$caller_2->e6->aw = "discrepancy";
$caller_2->e7->aw = "omission";
$caller_2->e8->aw = "prolonged";
$caller_2->e9->aw = "eradicate";
$caller_2->e10->aw = "skidded";


$caller_3_choice = new stdClass();

$caller_3_choice->ch1 = "a. 'Man'";
$caller_3_choice->ch2 = "b. Everyone should be aware of his rights.";
$caller_3_choice->ch3 = "Female forms to denote sexual difference";
$caller_3_choice->ch4 = "b. People should be aware of their rights.";
$caller_3_choice->ch5 = "b. Mr and Mrs Smith";
$caller_3_choice->ch6 = "- author, usher, waiter";
$caller_3_choice->ch7 = "Females are referred to in terms relating to males";
$caller_3_choice->ch8 = "a. Humans";
$caller_3_choice->ch9 = "- doctor, librarian";
$caller_3_choice->ch10 = "Female forms for insults and abuse";


$caller_4 = new stdClass();
$caller_4->e1 = new stdClass();
$caller_4->e2 = new stdClass();
$caller_4->e3 = new stdClass();
$caller_4->e4 = new stdClass();
$caller_4->e5 = new stdClass();

$caller_4->e1->n = "1";
$caller_4->e2->n = "2";
$caller_4->e3->n = "3";
$caller_4->e4->n = "4";
$caller_4->e5->n = "5";

$caller_4->e1->q = "Although it has been said that language reflects the society that creates it ,";
$caller_4->e2->q = "The aim of the short story is";
$caller_4->e3->q = "Which of the following is NOT an example of sexist language?";
$caller_4->e4->q = "The speaker believes";
$caller_4->e5->q = "The speaker does NOT believe that the prolonged use of sexist language";

$caller_4->e1->aw = "c. changes in language tend to develop more slowly than attitudes.";
$caller_4->e2->aw = "c. to show that society makes assumptions based on role stereotypes.";
$caller_4->e3->aw = "a. human.";
$caller_4->e4->aw = "b. it would not be possible to get rid of all examples of sexist language.";
$caller_4->e5->aw = "d. requires a certain degree of conscious effort.";

$caller_4->e1->choice = new stdClass();
$caller_4->e2->choice = new stdClass();
$caller_4->e3->choice = new stdClass();
$caller_4->e4->choice = new stdClass();
$caller_4->e5->choice = new stdClass();

$caller_4->e1->choice->a = "it betrays the attitudes of those who use the language.";
$caller_4->e1->choice->b = "language develops at the same rate as attitudes.";
$caller_4->e1->choice->c = "changes in language tend to develop more slowly than attitudes.";
$caller_4->e1->choice->d = "language changes more quickly than attitudes.";
$caller_4->e2->choice->a = "to show that not all surgeons are men.";
$caller_4->e2->choice->b = "to show that all surgeons are women.";
$caller_4->e2->choice->c = "to show that society makes assumptions based on role stereotypes.";
$caller_4->e2->choice->d = "to show that open-minded people are not puzzled by the story.";
$caller_4->e3->choice->a = "human.";
$caller_4->e3->choice->b = "mankind";
$caller_4->e3->choice->c = "male-nurse";
$caller_4->e3->choice->d = "policewoman";
$caller_4->e4->choice->a = "nothing can be done to eradicate sexist language.";
$caller_4->e4->choice->b = "it would not be possible to get rid of all examples of sexist language.";
$caller_4->e4->choice->c = "sexist language will soon be a thing of the past.";
$caller_4->e4->choice->d = "nothing has been done to change sexist language";
$caller_4->e5->choice->a = "is largely the result of laziness.";
$caller_4->e5->choice->b = "is largely the result of ignorance.";
$caller_4->e5->choice->c = "will have a harmful effect on the status of women.";
$caller_4->e5->choice->d = "requires a certain degree of conscious effort.";


$caller_5 = new stdClass();
$caller_5->a = new stdClass();
$caller_5_a_choice = new stdClass();
$caller_5->a->e1 = new stdClass();
$caller_5->a->e2 = new stdClass();
$caller_5->a->e3 = new stdClass();
$caller_5->a->e4 = new stdClass();
$caller_5->a->e5 = new stdClass();

$caller_5->a->e1->q = "spinster";
$caller_5->a->e2->q = "to man a ship";
$caller_5->a->e3->q = "to man the reception desk";
$caller_5->a->e4->q = "a one-man operation";
$caller_5->a->e5->q = "mankind";

$caller_5->a->e1->aw = "woman / person who is not married";
$caller_5->a->e2->aw = "to crew a ship";
$caller_5->a->e3->aw = "to staff the reception desk";
$caller_5->a->e4->aw = "a one-person operation";
$caller_5->a->e5->aw = "human beings / humans";

$caller_5_a_choice->aw1 = "to crew a ship";
$caller_5_a_choice->aw2 = "a one-person operation";
$caller_5_a_choice->aw3 = "woman / person who is not married";
$caller_5_a_choice->aw4 = "human beings / humans";
$caller_5_a_choice->aw5 = "to staff the reception desk";

$caller_5->b = new stdClass();
$caller_5_b_choice = new stdClass();
$caller_5->b->e1 = new stdClass();
$caller_5->b->e2 = new stdClass();
$caller_5->b->e3 = new stdClass();

$caller_5->b->e1->q = "'Man and his World'";
$caller_5->b->e2->q = "'Man Management'";
$caller_5->b->e3->q = "'Man's Condition'";

$caller_5->b->e1->aw = "'The Human World'";
$caller_5->b->e2->aw = "'Human Resource Management'";
$caller_5->b->e3->aw = "'The Human Condition'";

$caller_5_b_choice->aw1 = "'Human Resource Management'";
$caller_5_b_choice->aw2 = "'The Human World'";
$caller_5_b_choice->aw3 = "'The Human Condition'";

$caller_5->c = new stdClass();
$caller_5_c_choice = new stdClass();
$caller_5->c->e1 = new stdClass();
$caller_5->c->e2 = new stdClass();
$caller_5->c->e3 = new stdClass();

$caller_5->c->e1->n = "1";
$caller_5->c->e2->n = "2";
$caller_5->c->e3->n = "3";

$caller_5->c->e1->q = "The lecturer can effectively assess his students' learning.";
$caller_5->c->e2->q = "Many students have wives and children to support.";
$caller_5->c->e3->q = "The tenant is responsible for the security of his own apartment.";

$caller_5->c->e1->aw = "Lecturers can effectively assess their students' learning";
$caller_5->c->e2->aw = "Many students have families to support";
$caller_5->c->e3->aw = "The tenant is responsible for the security of the apartment";

@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <h4 class="mt-0">{{$pageTitle['sub_menu_name']}}</h4>
            <div class="row">
                <div class="col-lg-12">
                    <span>
                        In the lecture you will hear the words in List A.
                        <b>Before you listen to the lecture</b>, match the words in List A with their meanings in List B.
                        Then do Exercise 2.
                    </span>
                    <div class="w-100 d-flex justify-content-center">
                        <table class="w-50 mb-3">
                            <tr class="text-center">
                                <th class="py-2">List A</th>
                                <td class="py-2"></td>
                                <th class="py-2">List B</th>
                            </tr>
                            @foreach($caller_1 as $index => $caller_1)
                            <tr>
                                <td class="pl-4" style="width: 200px;">{{$caller_1->q}}</td>
                                <td class="px-3">=</td>
                                <td>
                                    <select class="form-select form-control q-text" show-aw="caller_1-{{$index}}" aw="{{$caller_1->aw}}" aria-label="Default select example">
                                        <option value="...">...</option>
                                        @foreach($caller_1_choice as $choice)
                                        <option value="{{$choice}}">{{$choice}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="pb-2">
                                    <span class="aw caller_1-{{$index}} text-danger">{{$caller_1->aw}}</span>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="mt-4 col-lg-12">
                    <table class="w-100">
                        <tr>
                            <td colspan="2">
                                <h5>Complete the following sentences using some of the words from List A. You may need to change the
                                    form of some of the words</h5>
                            </td>
                        </tr>
                        @foreach($caller_2 as $index => $caller_2)
                        <tr>
                            <td style="vertical-align: middle;">{{$caller_2->n}}.</td>
                            <td style="vertical-align: middle;" class="pb-2">
                                <span class="pr-2 q-caller-2 q-caller-2-{{$index}}" q="caller-2-{{$index}}" aw="{{$caller_2->aw}}">{{$caller_2->q}}</span>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="mt-4 col-lg-12">
                    <table id="caller-3">
                        <tr>
                            <td colspan="4">
                                <div class="border border-dark px-2 text-center">
                                    <div class="drag-container">
                                        <div class="d-grid grid-5" id="choices">
                                            @foreach($caller_3_choice as $choice)
                                            <div class="drag">{{$choice}}</div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <th class="pt-4">Problem</th>
                            <th class="pt-4">Examples</th>
                            <th class="pt-4">Remedy</th>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td class="col-3-500">It assumes that a particular role or job is exclusively male or female.</td>
                            <td class="col-3-500">
                                a. postman, fireman, chairman
                                <br>
                                b. to mother, to father fatherly / motherly advice
                            </td>
                            <td class="col-3-500">
                                a. postperson, fireperson, chairperson
                                <br>
                                none given
                            </td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td class="col-3-500">Phrases which are male by nature but which include both males and females.</td>
                            <td class="col-3-500">
                                <div class="input-con py-1">
                                    <div class="dropbox q" show-aw="caller_3-2-2-1" aw="a. 'Man'"></div>
                                </div>
                                <br>
                                <span class="aw caller_3-2-2-1 text-danger">a. 'Man'</span>
                                <br>
                                <div class="input-con py-1">
                                    <div class="dropbox q" show-aw="caller_3-2-2-2" aw="b. Everyone should be aware of his rights."></div>
                                </div>
                                <br>
                                <span class="aw caller_3-2-2-2 text-danger">b. Everyone should be aware of his rights.</span>
                            </td>
                            <td class="col-3-500">
                                <div class="input-con py-1">
                                    <div class="dropbox q" show-aw="caller_3-2-3-1" aw="a. Humans"></div>
                                </div>
                                <br>
                                <span class="aw caller_3-2-3-1 text-danger">a. Humans</span>
                                <br>
                                <div class="input-con py-1">
                                    <div class="dropbox q" show-aw="caller_3-2-3-2" aw="b. People should be aware of their rights."></div>
                                </div>
                                <br>
                                <span class="aw caller_3-2-3-2 text-danger">b. People should be aware of their rights.</span>
                            </td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td class="col-3-500">
                                <div class="input-con py-1">
                                    <div class="dropbox q" show-aw="caller_3-1-3" aw="Female forms to denote sexual difference"></div>
                                </div>
                                <br>
                                <span class="aw caller_3-1-3 text-danger">Female forms to denote sexual difference</span>
                            </td>
                            <td class="col-3-500">
                                authoress, usherette, waitress
                                <br>
                                lady-doctor; female-librarian
                            </td>
                            <td class="col-3-500">
                                <div class="input-con py-1">
                                    <div class="dropbox q" show-aw="caller_3-3-3-1" aw="- author, usher, waiter"></div>
                                </div>
                                <br>
                                <span class="aw caller_3-3-3-1 text-danger">- author, usher, waiter</span>
                                <br>
                                <div class="input-con py-1">
                                    <div class="dropbox q" show-aw="caller_3-3-3-2" aw="- doctor, librarian"></div>
                                </div>
                                <br>
                                <span class="aw caller_3-3-3-2 text-danger">- doctor, librarian</span>
                            </td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td class="col-3-500">
                                <div class="input-con py-1">
                                    <div class="dropbox q" show-aw="caller_3-1-4" aw="Females are referred to in terms relating to males"></div>
                                </div>
                                <br>
                                <span class="aw caller_3-1-4 text-danger">Females are referred to in terms relating to males</span>
                            </td>
                            <td class="col-3-500">
                                a. man and wife
                                <br>
                                b. John Smith and his wife
                            </td>
                            <td class="col-3-500">
                                a. none given
                                <br>
                                <div class="input-con py-1">
                                    <div class="dropbox q" show-aw="caller_3-3-4-2" aw="b. Mr and Mrs Smith"></div>
                                </div>
                                <br>
                                <span class="aw caller_3-3-4-2 text-danger">b. Mr and Mrs Smith</span>
                            </td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td class="col-3-500">
                                <div class="input-con py-1">
                                    <div class="dropbox q" show-aw="caller_3-1-5" aw="Female forms for insults and abuse"></div>
                                </div>
                                <br>
                                <span class="aw caller_3-1-5 text-danger">Female forms for insults and abuse</span>
                            </td>
                            <td class="col-3-500">bitch, vixen</td>
                            <td class="col-3-500">none given</td>
                        </tr>
                    </table>
                </div>
                <div class="mt-4 col-lg-12">
                    <table class="w-100">
                        <tr>
                            <td colspan="3">
                                <h5>Listen to the lecture again. Choose the correct answer from the choices given for each question.</h5>
                            </td>
                        </tr>
                        @foreach($caller_4 as $index => $caller_4_1)
                        <tr>
                            <td>{{$caller_4_1->n}}.</td>
                            <td colspan="2">{{$caller_4_1->q}}</td>
                        </tr>
                        @foreach($caller_4_1->choice as $index2 => $caller_4_2)
                        <tr>
                            <td></td>
                            <td style="width: 20px;">
                                <div class="form-check">
                                    <input class="form-check-input position-static q-check caller_4-{{$index}}-{{$index2}}" type="radio" name="caller_4-{{$index}}" show-aw="caller_4-{{$index}}" aw="{{$caller_4_1->aw}}" value="{{$index2}}. {{$caller_4_2}}">
                                </div>
                            </td>
                            <td onclick="checkRadio('caller_4-{{$index}}-{{$index2}}')">{{$index2}}. {{$caller_4_2}}</td>
                        </tr>
                        @endforeach
                        <tr class="aw">
                            <td></td>
                            <td colspan="2" class="aw caller_4-{{$index}} text-danger">{{$caller_4_1->aw}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="mt-4 col-lg-12">
                    <table class="w-100">
                        <tr>
                            <td colspan="4">
                                <h5>
                                    Below are some examples of sexist language
                                    <br>
                                    Find ways of changing the words and phrases to make them less sexist.
                                </h5>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div class="border border-dark px-2 text-center">
                                    <div class="drag-container">
                                        <div class="d-grid grid-5" id="choices">
                                            @foreach($caller_5_a_choice as $choice)
                                            <div class="drag">{{$choice}}</div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 20px;"><b>a.</b></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        @foreach($caller_5->a as $index => $a)
                        <tr>
                            <td></td>
                            <td style="width: 250px;">{{$a->q}}</td>
                            <td>=</td>
                            <td>
                                <div class="input-con pb-1">
                                    <div class="dropbox q" show-aw="caller_5_a-{{$index}}" aw="{{$a->aw}}"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="aw caller_5_a-{{$index}} text-danger">{{$a->aw}}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td class="pt-3" colspan="4">
                                <div class="border border-dark px-2 text-center">
                                    <div class="drag-container">
                                        <div class="d-grid grid-5" id="choices">
                                            @foreach($caller_5_b_choice as $choice)
                                            <div class="drag">{{$choice}}</div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 20px;"><b>b.</b></td>
                            <td colspan="3"><b>Consider alternative titles for the following books:</b></td>
                        </tr>
                        @foreach($caller_5->b as $index => $b)
                        <tr>
                            <td></td>
                            <td style="width: 250px;">{{$b->q}}</td>
                            <td>=</td>
                            <td>
                                <div class="input-con pb-1">
                                    <div class="dropbox q" show-aw="caller_5_b-{{$index}}" aw="{{$b->aw}}"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="aw caller_5_b-{{$index}} text-danger">{{$b->aw}}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td style="width: 20px;" class="pt-3"><b>c.</b></td>
                            <td colspan="3" class="pt-3"><b>Rewrite the following sentences to get rid of any sexist language:</b></td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table class="w-100 m-0 p-0">
                                    @foreach($caller_5->c as $index => $c)
                                    <tr>
                                        <td></td>
                                        <td style="width: 20px;">{{$c->n}}.</td>
                                        <td colspan="2">{{$c->q}}</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 20px;"></td>
                                        <td colspan="2"></td>
                                        <td class="py-1">
                                            <b>Answer: </b>
                                            <input type="text" class="input-text q-text w-75" show-aw="caller_5_c-{{$index}}" aw="{{$c->aw}}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 20px;"></td>
                                        <td style="width: 20px;"></td>
                                        <td style="width: 20px;"></td>
                                        <td class="aw caller_5_c-{{$index}} text-danger">{{$c->aw}}</td>
                                    </tr>
                                    @endforeach
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="sound-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-primary py-2">
                <h4 class="modal-title text-white mx-auto">Listening - 
 {{$pageTitle['sub_menu_name'] }}</h4>
            </div>
            <div class="modal-body text-center">
                <button id="sound-intro" class="btn btn-bordered-primary">Play Sound</button>
                <audio data-sound="sound-intro">
                    <source src="{{ asset('public/isac_listening/'.$pageTitle['sub_menu_type'] .'/' .$pageTitle['name_audio']) }}" type="audio/mp3">
                </audio>
            </div>
        </div>
    </div>
</div>


@section('button-control')
<button id="check-answer" class="btn btn-info">Check Answers</button>
<!-- <button id="show-answer" class="btn btn-success">Show Answers</button> -->
@endsection

@section('js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

<script>
    $('.q-caller-2').each((idx, item) => {
        let text = $(item).html()
        let new_text = $(item).html()
        let aw = $(item).attr('aw').split("***")
        console.log("text", text)
        console.log("aw", aw)
        for (let i = 0; i < text.split("...").length - 1; i++) {
            let input = '<div class="input-con input-con2 caller_3 pb-1 "><input type="text" class="input-text caller_3 q-text" aw="' + aw[i] + '" show-aw="caller_3-' + idx + '-' + i + '" autocomplete="off"></div>' +
                '<span class="w-100 px-2 aw caller_3-' + idx + '-' + i + ' text-danger">' + aw[i] + '</span>'
            new_text = new_text.replace("...", input)
        }
        $('.q-caller-2-e' + (idx + 1)).html(new_text)
    })

    $('#check-answer').on('click', () => {
        $('.q').each((idx, item) => {
            if ($(item).text().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'), item)
            else
                show_error(item)
        })
        $('.q-text').each((idx, item) => {
            if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'), item)
            else
                show_error(item)
        })
        $('.q-check:checked').each((idx, item) => {
            if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'), item)
            else
                show_error(item)
        })
        $('.aw').removeClass('aw')
    })

    function show_aw(aw, item) {
        $(item).addClass('border border-success')
        $('.' + aw).addClass('text-success')
        $('.' + aw).removeClass('text-danger')
    }

    function show_error(item) {
        $(item).addClass('border border-danger')
    }

    function checkRadio(x) {
        $('.' + x).prop("checked", true);
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