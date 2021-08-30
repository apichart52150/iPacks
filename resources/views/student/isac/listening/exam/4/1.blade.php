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

    .grid-5-2 {
        grid-template-columns: repeat(5, 1fr);
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

$caller_1->e1->n = "1";
$caller_1->e2->n = "2";
$caller_1->e3->n = "3";
$caller_1->e4->n = "4";
$caller_1->e5->n = "5";
$caller_1->e6->n = "6";
$caller_1->e7->n = "7";
$caller_1->e8->n = "8";
$caller_1->e9->n = "9";
$caller_1->e10->n = "10";
$caller_1->e11->n = "11";
$caller_1->e12->n = "12";
$caller_1->e13->n = "13";
$caller_1->e14->n = "14";
$caller_1->e15->n = "15";
$caller_1->e16->n = "16";
$caller_1->e17->n = "17";
$caller_1->e18->n = "18";
$caller_1->e19->n = "19";
$caller_1->e20->n = "20";

$caller_1->e1->q = "cannibal";
$caller_1->e2->q = "to confess";
$caller_1->e3->q = "to slaughter";
$caller_1->e4->q = "to mutilate";
$caller_1->e5->q = "to stew";
$caller_1->e6->q = "to execute";
$caller_1->e7->q = "the executioner";
$caller_1->e8->q = "mayhem";
$caller_1->e9->q = "coffin";
$caller_1->e10->q = "bushranger";
$caller_1->e11->q = "scaffold";
$caller_1->e12->q = "skull";
$caller_1->e13->q = "controversial";
$caller_1->e14->q = "to commute";
$caller_1->e15->q = "a warrant";
$caller_1->e16->q = "the poll";
$caller_1->e17->q = "rigged";
$caller_1->e18->q = "embezzlement";
$caller_1->e19->q = "to detect";
$caller_1->e20->q = "loot";

$caller_1->e1->aw = "someone who eats human flesh";
$caller_1->e2->aw = "to admit to a crime; to say one is guilty";
$caller_1->e3->aw = "to kill in large numbers (often referring to animals)";
$caller_1->e4->aw = "to cut into pieces";
$caller_1->e5->aw = "to cook";
$caller_1->e6->aw = "to carry out the death sentence";
$caller_1->e7->aw = "person who carries out the death penalty";
$caller_1->e8->aw = "confusion; chaos";
$caller_1->e9->aw = "the wooden box in which a dead body is buried";
$caller_1->e10->aw = "outlaw; robber";
$caller_1->e11->aw = "platform on which executions take place";
$caller_1->e12->aw = "bone framework of the head";
$caller_1->e13->aw = "likely to cause argument or lack of agreement";
$caller_1->e14->aw = "to exchange one thing for another (punishments)";
$caller_1->e15->aw = "written permission; authorization";
$caller_1->e16->aw = "election";
$caller_1->e17->aw = "fixed to give a false result";
$caller_1->e18->aw = "using other people's money for one's own advantage";
$caller_1->e19->aw = "to discover the existence or presence of someone";
$caller_1->e20->aw = "stolen goods";

$caller_1_choice->ch1 = "to cook";
$caller_1_choice->ch2 = "written permission; authorization";
$caller_1_choice->ch3 = "the wooden box in which a dead body is buried";
$caller_1_choice->ch4 = "to exchange one thing for another (punishments)";
$caller_1_choice->ch5 = "someone who eats human flesh";
$caller_1_choice->ch6 = "fixed to give a false result";
$caller_1_choice->ch7 = "person who carries out the death penalty";
$caller_1_choice->ch8 = "to discover the existence or presence of someone";
$caller_1_choice->ch9 = "to cut into pieces";
$caller_1_choice->ch10 = "platform on which executions take place";
$caller_1_choice->ch11 = "to carry out the death sentence";
$caller_1_choice->ch12 = "to admit to a crime; to say one is guilty";
$caller_1_choice->ch13 = "stolen goods";
$caller_1_choice->ch14 = "likely to cause argument or lack of agreement";
$caller_1_choice->ch15 = "outlaw; robber";
$caller_1_choice->ch16 = "election";
$caller_1_choice->ch17 = "using other people's money for one's own advantage";
$caller_1_choice->ch18 = "bone framework of the head";
$caller_1_choice->ch19 = "to kill in large numbers (often referring to animals)";
$caller_1_choice->ch20 = "confusion; chaos";

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

$caller_2->e1->col = new stdClass();
$caller_2->e2->col = new stdClass();
$caller_2->e3->col = new stdClass();
$caller_2->e4->col = new stdClass();
$caller_2->e5->col = new stdClass();
$caller_2->e6->col = new stdClass();
$caller_2->e7->col = new stdClass();
$caller_2->e8->col = new stdClass();

$caller_2->e1->col->c1 = new stdClass();
$caller_2->e2->col->c1 = new stdClass();
$caller_2->e3->col->c1 = new stdClass();
$caller_2->e4->col->c1 = new stdClass();
$caller_2->e5->col->c1 = new stdClass();
$caller_2->e6->col->c1 = new stdClass();
$caller_2->e7->col->c1 = new stdClass();
$caller_2->e8->col->c1 = new stdClass();

$caller_2->e1->col->c1->q = "Albert Fish";
$caller_2->e2->col->c1->q = "Genghis Khan";
$caller_2->e3->col->c1->q = "Ned Kelly";
$caller_2->e4->col->c1->q = "John Lee";
$caller_2->e5->col->c1->q = "Not mentioned";
$caller_2->e6->col->c1->q = "Charles King";
$caller_2->e7->col->c1->q = "Claude Gautier";
$caller_2->e8->col->c1->q = "9-year-old boy";

$caller_2->e1->col->c1->aw = "";
$caller_2->e2->col->c1->aw = "";
$caller_2->e3->col->c1->aw = "";
$caller_2->e4->col->c1->aw = "";
$caller_2->e5->col->c1->aw = "";
$caller_2->e6->col->c1->aw = "";
$caller_2->e7->col->c1->aw = "";
$caller_2->e8->col->c1->aw = "";

$caller_2->e1->col->c2 = new stdClass();
$caller_2->e2->col->c2 = new stdClass();
$caller_2->e3->col->c2 = new stdClass();
$caller_2->e4->col->c2 = new stdClass();
$caller_2->e5->col->c2 = new stdClass();
$caller_2->e6->col->c2 = new stdClass();
$caller_2->e7->col->c2 = new stdClass();
$caller_2->e8->col->c2 = new stdClass();

$caller_2->e1->col->c2->q = "American";
$caller_2->e2->col->c2->q = "...";
$caller_2->e3->col->c2->q = "...";
$caller_2->e4->col->c2->q = "...";
$caller_2->e5->col->c2->q = "Venezuelan";
$caller_2->e6->col->c2->q = "...";
$caller_2->e7->col->c2->q = "...";
$caller_2->e8->col->c2->q = "...";

$caller_2->e1->col->c2->aw = "";
$caller_2->e2->col->c2->aw = "Mongolian";
$caller_2->e3->col->c2->aw = "Australian";
$caller_2->e4->col->c2->aw = "English";
$caller_2->e5->col->c2->aw = "";
$caller_2->e6->col->c2->aw = "Liberian";
$caller_2->e7->col->c2->aw = "French";
$caller_2->e8->col->c2->aw = "American";

$caller_2->e1->col->c3 = new stdClass();
$caller_2->e2->col->c3 = new stdClass();
$caller_2->e3->col->c3 = new stdClass();
$caller_2->e4->col->c3 = new stdClass();
$caller_2->e5->col->c3 = new stdClass();
$caller_2->e6->col->c3 = new stdClass();
$caller_2->e7->col->c3 = new stdClass();
$caller_2->e8->col->c3 = new stdClass();

$caller_2->e1->col->c3->q = "Murder + cannibalism";
$caller_2->e2->col->c3->q = "...";
$caller_2->e3->col->c3->q = "...";
$caller_2->e4->col->c3->q = "...";
$caller_2->e5->col->c3->q = "...";
$caller_2->e6->col->c3->q = "...";
$caller_2->e7->col->c3->q = "...";
$caller_2->e8->col->c3->q = "...";

$caller_2->e1->col->c3->aw = "";
$caller_2->e2->col->c3->aw = "Mass murder";
$caller_2->e3->col->c3->aw = "Killed 4 troopers";
$caller_2->e4->col->c3->aw = "Accused of murder";
$caller_2->e5->col->c3->aw = "Kidnapping";
$caller_2->e6->col->c3->aw = "Election rigging";
$caller_2->e7->col->c3->aw = "Embezzlement";
$caller_2->e8->col->c3->aw = "Bank robbery";

$caller_2->e1->col->c4 = new stdClass();
$caller_2->e2->col->c4 = new stdClass();
$caller_2->e3->col->c4 = new stdClass();
$caller_2->e4->col->c4 = new stdClass();
$caller_2->e5->col->c4 = new stdClass();
$caller_2->e6->col->c4 = new stdClass();
$caller_2->e7->col->c4 = new stdClass();
$caller_2->e8->col->c4 = new stdClass();

$caller_2->e1->col->c4->q = "Executed: electric chair";
$caller_2->e2->col->c4->q = "None";
$caller_2->e3->col->c4->q = "...";
$caller_2->e4->col->c4->q = "...";
$caller_2->e5->col->c4->q = "...";
$caller_2->e6->col->c4->q = "...";
$caller_2->e7->col->c4->q = "...";
$caller_2->e8->col->c4->q = "...";

$caller_2->e1->col->c4->aw = "";
$caller_2->e2->col->c4->aw = "";
$caller_2->e3->col->c4->aw = "Executed: hanged";
$caller_2->e4->col->c4->aw = "Sentenced to die: commuted to prison";
$caller_2->e5->col->c4->aw = "None";
$caller_2->e6->col->c4->aw = "Not mentioned";
$caller_2->e7->col->c4->aw = "Not mentioned";
$caller_2->e8->col->c4->aw = "Probation + TV ban";

$caller_2->e1->col->c5 = new stdClass();
$caller_2->e2->col->c5 = new stdClass();
$caller_2->e3->col->c5 = new stdClass();
$caller_2->e4->col->c5 = new stdClass();
$caller_2->e5->col->c5 = new stdClass();
$caller_2->e6->col->c5 = new stdClass();
$caller_2->e7->col->c5 = new stdClass();
$caller_2->e8->col->c5 = new stdClass();

$caller_2->e1->col->c5->q = "1936";
$caller_2->e2->col->c5->q = "...";
$caller_2->e3->col->c5->q = "...";
$caller_2->e4->col->c5->q = "...";
$caller_2->e5->col->c5->q = "...";
$caller_2->e6->col->c5->q = "...";
$caller_2->e7->col->c5->q = "...";
$caller_2->e8->col->c5->q = "...";

$caller_2->e1->col->c5->aw = "";
$caller_2->e2->col->c5->aw = "1227";
$caller_2->e3->col->c5->aw = "1880";
$caller_2->e4->col->c5->aw = "1933";
$caller_2->e5->col->c5->aw = "Not mentioned";
$caller_2->e6->col->c5->aw = "Not mentioned";
$caller_2->e7->col->c5->aw = "Not mentioned";
$caller_2->e8->col->c5->aw = "Not mentioned";

$caller_2_choice->ch1 = "Liberian";
$caller_2_choice->ch2 = "Election rigging";
$caller_2_choice->ch3 = "Embezzlement";
$caller_2_choice->ch4 = "Not mentioned";
$caller_2_choice->ch5 = "Mongolian";
$caller_2_choice->ch6 = "Not mentioned";
$caller_2_choice->ch7 = "American";
$caller_2_choice->ch8 = "Executed: hanged";
$caller_2_choice->ch9 = "Mass murder";
$caller_2_choice->ch10 = "1880";
$caller_2_choice->ch11 = "French";
$caller_2_choice->ch12 = "None";
$caller_2_choice->ch13 = "Sentenced to die: commuted to prison";
$caller_2_choice->ch14 = "Australian";
$caller_2_choice->ch15 = "Probation + TV ban";
$caller_2_choice->ch16 = "Not mentioned";
$caller_2_choice->ch17 = "Accused of murder";
$caller_2_choice->ch18 = "Bank robbery";
$caller_2_choice->ch19 = "1227";
$caller_2_choice->ch20 = "Not mentioned";
$caller_2_choice->ch21 = "English";
$caller_2_choice->ch22 = "Not mentioned";
$caller_2_choice->ch23 = "1933";
$caller_2_choice->ch24 = "Not mentioned";
$caller_2_choice->ch25 = "Killed 4 troopers";
$caller_2_choice->ch26 = "Kidnapping";


$caller_3 = new stdClass();
$caller_3->e1 = new stdClass();
$caller_3->e2 = new stdClass();
$caller_3->e3 = new stdClass();
$caller_3->e4 = new stdClass();
$caller_3->e5 = new stdClass();
$caller_3->e6 = new stdClass();
$caller_3->e7 = new stdClass();
$caller_3->e8 = new stdClass();

$caller_3->e1->n = "1";
$caller_3->e2->n = "2";
$caller_3->e3->n = "3";
$caller_3->e4->n = "4";
$caller_3->e5->n = "5";
$caller_3->e6->n = "6";
$caller_3->e7->n = "7";
$caller_3->e8->n = "8";

$caller_3->e1->q = "Albert Fish killed a total of 6 people.";
$caller_3->e2->q = "When Genghis Khan was alive, the population of the world was about 200 million.";
$caller_3->e3->q = "Ned Kelly was executed in Melbourne Prison.";
$caller_3->e4->q = "There was no doubt that John Lee killed his employer.";
$caller_3->e5->q = "Venezuela and Colombia share the same crime laws.";
$caller_3->e6->q = "The election in Liberia was not conducted fairly.";
$caller_3->e7->q = "Claude Gautier embezzled more than 10,000 dollars.";
$caller_3->e8->q = "The nine-year-old boy spent over $80 of the loot before he turned himself in to the police.";

$caller_3->e1->aw = "False: the true total may have been much higher";
$caller_3->e2->aw = "True";
$caller_3->e3->aw = "False: he was hanged outside Melbourne prison";
$caller_3->e4->aw = "False: no real evidence was offered by the prosecution";
$caller_3->e5->aw = "False: the offence with which he was to be charged (in Venezuela) was not a crime in Colombia";
$caller_3->e6->aw = "True";
$caller_3->e7->aw = "True";
$caller_3->e8->aw = "True";

$caller_3_choice = new stdClass();
$caller_3_choice->a = "True";
$caller_3_choice->b = "False";




$caller_4 = new stdClass();
$caller_4->e1 = new stdClass();
$caller_4->e2 = new stdClass();
$caller_4->e3 = new stdClass();
$caller_4->e4 = new stdClass();
$caller_4->e5 = new stdClass();
$caller_4->e6 = new stdClass();
$caller_4->e7 = new stdClass();
$caller_4->e8 = new stdClass();

$caller_4->e1->n = "1";
$caller_4->e2->n = "2";
$caller_4->e3->n = "3";
$caller_4->e4->n = "4";
$caller_4->e5->n = "5";
$caller_4->e6->n = "6";
$caller_4->e7->n = "7";
$caller_4->e8->n = "8";

$caller_4->e1->q = "Which of the following statements about Albert Fish is correct?";
$caller_4->e2->q = "Which of the following statements about Genghis Khan is correct?";
$caller_4->e3->q = "What do we know about Ned Kelly?";
$caller_4->e4->q = "Which of the following statements about John Lee is NOT true?";
$caller_4->e5->q = "Why did the police in Venezuela not arrest the kidnapper?";
$caller_4->e6->q = "Why was the result of the Liberian election unfair?";
$caller_4->e7->q = "Which of the following statements about Claude Gautier is true?";
$caller_4->e8->q = "Which of the following statements about the 9-year-old boy is NOT true?";

$caller_4->e1->aw = "a. He confessed to the murder of 6 people.";
$caller_4->e2->aw = "c. He was responsible for the deaths of a large number of people.";
$caller_4->e3->aw = "d. All of the above.";
$caller_4->e4->aw = "c. The trap door on the scaffold would not open at all.";
$caller_4->e5->aw = "d. He crossed the border into Colombia.";
$caller_4->e6->aw = "b. Because the majority was greater than the total number of electors.";
$caller_4->e7->aw = "d. None of the above.";
$caller_4->e8->aw = "c. The boy was caught and arrested by the FBI";

$caller_4->e1->choice = new stdClass();
$caller_4->e2->choice = new stdClass();
$caller_4->e3->choice = new stdClass();
$caller_4->e4->choice = new stdClass();
$caller_4->e5->choice = new stdClass();
$caller_4->e6->choice = new stdClass();
$caller_4->e7->choice = new stdClass();
$caller_4->e8->choice = new stdClass();

$caller_4->e1->choice->a = "a. He confessed to the murder of 6 people.";
$caller_4->e1->choice->b = "b. He admitted killing more than 6 people.";
$caller_4->e1->choice->c = "c. He was hanged for his crimes.";
$caller_4->e1->choice->d = "d. He served life imprisonment in Sing Sing Prison.";
$caller_4->e2->choice->a = "a. He murdered his funeral guards.";
$caller_4->e2->choice->b = "b. He personally killed one tenth of the world's population.";
$caller_4->e2->choice->c = "c. He was responsible for the deaths of a large number of people.";
$caller_4->e2->choice->d = "d. He once ate 70 enemy chiefs.";
$caller_4->e3->choice->a = "a. He was probably born in 1854.";
$caller_4->e3->choice->b = "b. He and his gang were responsible for the deaths of at least 4 troopers.";
$caller_4->e3->choice->c = "c. He was executed in public.";
$caller_4->e3->choice->d = "d. All of the above.";
$caller_4->e4->choice->a = "a. He was convicted of killing his employer.";
$caller_4->e4->choice->b = "b. He was sentenced to death.";
$caller_4->e4->choice->c = "c. The trap door on the scaffold would not open at all.";
$caller_4->e4->choice->d = "d. He died in America in 1933.";
$caller_4->e5->choice->a = "a. He was not guilty.";
$caller_4->e5->choice->b = "b. His house was in Colombia.";
$caller_4->e5->choice->c = "c. His lawyer was in the bedroom.";
$caller_4->e5->choice->d = "d. He crossed the border into Colombia.";
$caller_4->e6->choice->a = "a. Because the opposition didn't get any votes.";
$caller_4->e6->choice->b = "b. Because the majority was greater than the total number of electors.";
$caller_4->e6->choice->c = "c. Because the President put himself up for re-election.";
$caller_4->e6->choice->d = "d. Because there was no opposition.";
$caller_4->e7->choice->a = "a. He took part in a bank robbery.";
$caller_4->e7->choice->b = "b. He spent all the money on gambling, alcohol and women.";
$caller_4->e7->choice->c = "c. His father informed the police about his son's crime.";
$caller_4->e7->choice->d = "d. None of the above.";
$caller_4->e8->choice->a = "a. He stole over $100.";
$caller_4->e8->choice->b = "b. The security cameras didn't detect him.";
$caller_4->e8->choice->c = "c. The boy was caught and arrested by the FBI";
$caller_4->e8->choice->d = "d. He wasn't put into prison.";

@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <h4 class="mt-0">{{$pageTitle['sub_menu_name']}}</h4>
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="font-italic m-0 pt-3">Caller 1</h4>
                    <span>
                        Do this exercise before you listen to the tape. Match the following words with their meanings:
                    </span>
                    <div class="row justify-content-center mb-2">
                        <div class="col-md-12">
                            <div class="border border-dark px-2 text-center">
                                <div class="drag-container">
                                    <div class="d-grid grid-5" id="choices">
                                        @foreach($caller_1_choice as $choice)
                                        <div class="drag">{{$choice}}</div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-2">
                        <div class="col-md-12">
                            <table class=" w-50 mb-3">
                                @foreach($caller_1 as $index => $caller_1)
                                <tr>
                                    <td class="pl-5" style="width: 200px;">{{$caller_1->n}}. {{$caller_1->q}}</td>
                                    <td>=</td>
                                    <td>
                                        <div class="input-con">
                                            <div class="dropbox q" show-aw="caller_1-{{$index}}" aw="{{$caller_1->aw}}"></div>
                                        </div>
                                        <br>
                                        <span class="aw caller_1-{{$index}} text-danger">{{$caller_1->aw}}</span>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <h4 class="font-italic m-0 pt-3">Caller 2</h4>
                    <div class="row justify-content-center mb-2">
                        <div class="col-md-12">
                            <div class="border border-dark px-2 text-center">
                                <div class="drag-container">
                                    <div class="d-grid grid-5-2" id="choices">
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
                            <table class="table w-100 mb-3">
                                <tr>
                                    <th>Name</th>
                                    <th>Nationality</th>
                                    <th>Crime</th>
                                    <th>Punishment</th>
                                    <th>Died</th>
                                </tr>
                                @foreach($caller_2 as $index => $caller_2)
                                <tr>
                                    @foreach($caller_2->col as $index2 => $col)
                                    @if($col->q == "...")
                                    <td class="q-caller_2 q-caller_2-{{$index}}-{{$index2}}" replece="q-caller_2-{{$index}}-{{$index2}}" show-aw="caller_2-{{$index}}-{{$index2}}" aw="{{$col->aw}}">{{$col->q}}</td>
                                    @else
                                    <td>{{$col->q}}</td>
                                    @endif
                                    @endforeach
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <h4 class="font-italic m-0 pt-3">Caller 3</h4>
                    <table class="w-100">
                        <tr>
                            <td colspan="4">
                                <h5>
                                    True or False?
                                    <br>
                                    If a sentence is false, say why it is false.
                                </h5>
                            </td>
                        </tr>
                        @foreach($caller_3 as $index => $caller_3)
                        <tr>
                            <td style="width: 25px;">{{$caller_3->n}}.</td>
                            <td colspan="3">{{$caller_3->q}}</td>
                        </tr>

                        @foreach($caller_3_choice as $index2 => $choice)
                        <tr>
                            <td></td>
                            <td style="width: 1px;">
                                <div class="form-check">
                                    <input class="form-check-input position-static q-check-input caller_3-{{$index}}-{{$index2}}" text="caller_3-input-{{$index}}-{{$index2}}" type="radio" name="caller_3-{{$index}}" show-aw="caller_3-{{$index}}" aw="{{$caller_3->aw}}" value="{{$choice}}">
                                </div>
                            </td>
                            <td style="width: 100px;" onclick="checkRadio('caller_3-{{$index}}-{{$index2}}')">
                                {{$index2}}. {{$choice}}
                            </td>
                            <td>
                                @if($choice == "False")
                                <input type="text" class="caller_3-input-{{$index}}-{{$index2}}">
                                @endif
                            </td>
                        </tr>
                        @endforeach

                        <tr class="aw">
                            <td></td>
                            <td colspan="3" class=" caller_3-{{$index}} text-danger">{{$caller_3->aw}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="col-lg-12">
                <h4 class="font-italic m-0 pt-3">Caller 4</h4>
                <table class="w-100">
                        <tr>
                            <td colspan="3">
                                <h5>Choose the best answer from the given options.</h5>
                            </td>
                        </tr>
                        @foreach($caller_4 as $index => $caller_4_1)
                        <tr>
                            <td style="width: 25px;">{{$caller_4_1->n}}.</td>
                            <td colspan="2">{{$caller_4_1->q}}</td>
                        </tr>
                        @foreach($caller_4_1->choice as $index2 => $caller_4_2)
                        <tr>
                            <td></td>
                            <td style="width: 20px;">
                                <div class="form-check">
                                    <input class="form-check-input position-static q-check caller_4-{{$index}}-{{$index2}}" type="radio" name="caller_4-{{$index}}" show-aw="caller_4-{{$index}}" aw="{{$caller_4_1->aw}}" value="{{$caller_4_2}}">
                                </div>
                            </td>
                            <td onclick="checkRadio('caller_4-{{$index}}-{{$index2}}')">{{$caller_4_2}}</td>
                        </tr>
                        @endforeach
                        <tr class="aw">
                            <td></td>
                            <td colspan="2" class="aw caller_4-{{$index}} text-danger">{{$caller_4_1->aw}}</td>
                        </tr>
                        @endforeach
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
    $('.q-caller_2').each((idx, item) => {
        let input = '<div class="input-con py-1">' +
            '<div class="dropbox q" show-aw="' + $(item).attr('show-aw') + '" aw="' + $(item).attr('aw') + '"></div>' +
            '</div><br>' +
            '<span class="aw ' + $(item).attr('show-aw') + ' text-danger">' + $(item).attr('aw') + '</span>'
        $(item).html(input)
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
        $('.q-check:checked').each((idx, item) => {
            if ($(item).val().trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'))
        })
        $('.q-check-input:checked').each((idx, item) => {
            let aw = ""
            if ($(item).val() == "False")
                aw = $(item).val() + ": " + $('.' + $(item).attr('text')).val()
            else
                aw = $(item).val()
            if (aw.trim().toUpperCase() == $(item).attr('aw').trim().toUpperCase())
                show_aw($(item).attr('show-aw'))
        })
        $('.aw').removeClass('aw')
    })

    function show_aw(aw) {
        console.log("aw", aw)
        $('.' + aw).addClass('text-success')
        $('.' + aw).removeClass('text-danger')
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