@extends('layouts.mocktest_layout')

@section('content')

    <style type="text/css">
        .checkbox label::before {
            border: 1px solid #000000;
        }

        .checkbox label::after {
            color: #009688;
            font-size: 18px;
            top: -3px;
            left: -2px;
        }

        .font-13 {
            font-size: 17px;
        }

        .text-muted {
            color: #000000 !important;
        }

        body {
            font-size: 17px;
            color: #000000;
        }
    </style>

    <audio preload="auto" id="listeningSound1">
        <source src="{{ asset('public/sound/UntitledProject.MP3') }}" type="audio/mpeg">
        <source src="{{ asset('public/sound/UntitledProject.MP3') }}" type="audio/ogg">
        Your browser does not support the audio tag.
    </audio>

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
                        <h4 class="page-title">Listening</h4>
                    </div>
                </div>
            </div> 

            <div class="row">
                <div class="col-md-12">
                    <div class="card-box border border-primary">
                        <div id="dplay"></div>
                        <h4 class="m-t-0 header-title"><b>LISTENING</b></h4>
          
                        <h5><span id="dplay"></span></h5>
                        <form id="basic-form" action="{{ route('ans_lis') }}" method="post" onsubmit="return confirm('Are you sure you want to finish?');">
                            {{ csrf_field() }}
                            <input type="hidden" name="std_id" value="{{session('std_id')}}">
                            <input type="hidden" name="classroom_id" value="{{ session('class_id') }}">
                            <input type="hidden" name="set_exam" value="1">
                            <input type="hidden" name="ques_lis_3" value="">
                            <input type="hidden" name="ques_lis_4" value="">
                            <input type="hidden" name="ques_lis_5" value="">
                            <input type="hidden" name="ques_lis_6" value="">
                            <input type="hidden" name="ques_lis_11" value="">
                            <input type="hidden" name="ques_lis_12" value="">
                            <input type="hidden" name="ques_lis_13" value="">
                            <input type="hidden" name="ques_lis_14" value="">
                            <input type="hidden" name="ques_lis_15" value="">

                            <div>
                                <h3>SECTION 1 </h3>
                                <section>
                                    <div class="col-md-12">
                                        <div class="card-box" id='s1'> <span class="fa fa-assistive-listening-systems"></span> <strong>QUESTIONS 1 - 5</strong> <br>
                                        
                                            <div class="container mt-3">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p class="text-muted m-b-5 font-13">Questions 1 and 2 Label the map below.<br/> Choose the correct letter <strong>A-H</strong> next to questions 1 and 2</p>
                                                        <img class="card-img-bottom img-fluid" src="{{ asset('public/assets/images/mocktest/ieltslis.png')}}" alt="ielts listening">
                                                        <table class="table table-bordered table-striped mt-3">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <strong>1</strong>.Elderly woman</td>
                                                                    <td>
                                                                        <select class="d-inline ml-2" name="ques_lis_1">
                                                                            <option value="">Select</option>
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
                                                                    <td><strong>2</strong>.Thieves' car </td>
                                                                    <td>
                                                                        <select class="d-inline ml-2" name="ques_lis_2">
                                                                            <option value="">Select</option>
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
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <p class="text-muted m-b-5 font-13">Questions 3-5 <br> Choose the correct letter<strong> A,B</strong> or <strong>C</strong></p>
                                                        <p align="left"><strong>3</strong>.When Mrs. Reynolds saw the thieves, she</p>

                                                        <div class="container">
                                                            <div class="col-12">
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input" id="radio3-1" type="radio" value="A" name="ques_lis_3">
                                                                    <label for="radio3-1"  class="custom-control-label mt-0"> A : ran after them. </label>
                                                                </div>
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input" id="radio3-2" type="radio" value="B" name="ques_lis_3">
                                                                    <label for="radio3-2"  class="custom-control-label mt-0"> B : telephoned the police. </label>
                                                                </div>
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input" id="radio3-3" type="radio" value="C" name="ques_lis_3">
                                                                    <label for="radio3-3"  class="custom-control-label mt-0"> C : went to help the elderly woman. </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <br>
                                                        <p align="left"><strong>4</strong>.The elderly woman was</p>

                                                        <div class="container">
                                                            <div class="col-12">
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input" id="radio4-1" type="radio" value="A" name="ques_lis_4">
                                                                    <label for="radio4-1" class="custom-control-label mt-0"> A : badly hurt. </label>
                                                                </div>
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input" id="radio4-2" type="radio" value="B" name="ques_lis_4">
                                                                    <label for="radio4-2" class="custom-control-label mt-0"> B : unhurt. </label>
                                                                </div>
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input" id="radio4-3" type="radio" value="C" name="ques_lis_4">
                                                                    <label for="radio4-3" class="custom-control-label mt-0"> C : very upset. </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <br>
                                                        <p align="left"><strong>5</strong>.Which woman had once had her bag stolen in the past?</p>

                                                        <div class="container">
                                                            <div class="col-12">
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input" id="radio5-1" type="radio" value="A" name="ques_lis_5">
                                                                    <label for="radio5-1" class="custom-control-label mt-0"> A : the elderly woman </label>
                                                                </div>
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input" id="radio5-2" type="radio" value="B" name="ques_lis_5">
                                                                    <label for="radio5-2" class="custom-control-label mt-0"> B : Mrs. Reynolds </label>
                                                                </div>
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input" id="radio5-3" type="radio" value="C" name="ques_lis_5">
                                                                    <label for="radio5-3" class="custom-control-label mt-0"> C : Mrs. Reynolds’ friend </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>

                                                <hr>
                                                <span class="fa fa-assistive-listening-systems"></span> <strong>QUESTIONS 6- 10</strong> <br>
                                            

                                                <div class="row mt-3">
                                                    <div class="col-5">
                                                        <p class="text-muted m-b-5 font-13">Question 6 <br> Choose <strong>TWO</strong> letters,<strong>A-F.</strong></p>
                                                        <p align="left"><strong>6</strong>.The bag contained</p>
                                                       
                                                        <div class="mt-3">

                                                            <div class="custom-control custom-checkbox mb-4">
                                                                <input id="checkbox6-1" type="checkbox" class="custom-control-input" value="A" name="ques_lis_6[]">
                                                                <label for="checkbox6-1" class="custom-control-label" style="margin-top: 0px;"> A : a purse. </label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox mb-4">
                                                                <input id="checkbox6-2" type="checkbox" class="custom-control-input" value="B" name="ques_lis_6[]">
                                                                <label for="checkbox6-2" class="custom-control-label" style="margin-top: 0px;"> B : £50. </label>
                                                            </div>   
                                                            <div class="custom-control custom-checkbox mb-4">
                                                                <input id="checkbox6-3" type="checkbox" class="custom-control-input" value="C" name="ques_lis_6[]">
                                                                <label for="checkbox6-3" class="custom-control-label" style="margin-top: 0px;"> C : a cheque book. </label>
                                                            </div> 
                                                            <div class="custom-control custom-checkbox mb-4">
                                                                <input id="checkbox6-4" type="checkbox" class="custom-control-input" value="D" name="ques_lis_6[]">
                                                                <label for="checkbox6-4" class="custom-control-label" style="margin-top: 0px;"> D : a cheque card. </label>
                                                            </div> 
                                                            <div class="custom-control custom-checkbox mb-4">
                                                                <input id="checkbox6-5" type="checkbox" class="custom-control-input" value="E" name="ques_lis_6[]">
                                                                <label for="checkbox6-5" class="custom-control-label" style="margin-top: 0px;"> E : a bus pass. </label>
                                                            </div> 
                                                            <div class="custom-control custom-checkbox mb-4">
                                                                <input id="checkbox6-6" type="checkbox" class="custom-control-input" value="F" name="ques_lis_6[]">
                                                                <label for="checkbox6-6" class="custom-control-label" style="margin-top: 0px;"> F : a door key. </label>
                                                            </div>
                                                            
                                                        </div>
                                                    
                                                    </div>

                                                    <div class="col-7">
                                                        <p class="text-muted m-b-5 font-13">Questions 7-10 <br>Complete the table below.<br> Type <strong>NO MORE THAN TWO WORDS AND/OR A NUMBER </strong>for each answer.</p>
                                                        <table class="table table-bordered table-striped">
                                                            <tbody>
                                                                <tr>
                                                                    <th> </th>
                                                                    <th><strong>age</strong></th>
                                                                    <th><strong>build</strong></th>
                                                                    <th><strong>hair colour</strong></th>
                                                                    <th><strong>distinguishing marks</strong></th>
                                                                </tr>
                                                                <tr>
                                                                    <td>younger man</td>
                                                                    <td>about 17</td>
                                                                    <td><strong>[7]</strong>
                                                                        <input type="text" class="form-control" onChange="javascript:this.value=this.value.toUpperCase();" name="ques_lis_7"/>
                                                                    </td>
                                                                    <td><strong>[8]</strong>
                                                                        <input type="text" class="form-control" onChange="javascript:this.value=this.value.toUpperCase();"name="ques_lis_8"/>
                                                                    </td>
                                                                    <td>none</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>older man</td>
                                                                    <td>about <strong>[9]</strong>
                                                                        <input type="text" class="form-control" onChange="javascript:this.value=this.value.toUpperCase();" name="ques_lis_9">
                                                                    </td>
                                                                    <td>medium</td>
                                                                    <td>brown</td>
                                                                    <td>a <strong>[10]</strong>
                                                                        <input type="text" class="form-control" onChange="javascript:this.value=this.value.toUpperCase();" name="ques_lis_10">on chin
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <h3>SECTION 2</h3>
                                <section>
                                    <div class="col-md-12">
                                        <div class="card-box"> <span class="fa fa-assistive-listening-systems"></span> <strong>QUESTIONS 11-15</strong> <br>

                                            <div class="row mt-2">
                                                <div class="col-md-6">
                                                    <p class="text-muted font-13">Questions 11 – 13 <br> Choose the correct letter,<strong> A, B</strong> or <strong>C.</strong></p>
                                                    <p align="left"><strong>11</strong>.The Bridge Hotel is located in</p>

                                                    <div class="container">
                                                        <div class="col-6">
                                                            <div class="custom-control custom-radio">
                                                                <input class="custom-control-input" id="radio11-1" type="radio" value="A" name="ques_lis_11">
                                                                <label for="radio11-1" class="custom-control-label mt-0"> A : the city center. </label>
                                                            </div>
                                                            <div class="custom-control custom-radio">   
                                                                <input class="custom-control-input" id="radio11-2" type="radio" value="B" name="ques_lis_11">
                                                                <label for="radio11-2" class="custom-control-label mt-0"> B : the country. </label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input class="custom-control-input" id="radio11-3" type="radio" value="C" name="ques_lis_11">
                                                                <label for="radio11-3" class="custom-control-label mt-0"> C : the suburbs. </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                    <p class="mt-2" align="left"><strong>12</strong>.The newest sport facility in the hotel is </p>
                                                    <div class="container">
                                                        <div class="col-6">
                                                            <div class="custom-control custom-radio">
                                                                <input class="custom-control-input" id="radio12-1" type="radio" value="A" name="ques_lis_12">
                                                                <label for="radio12-1" class="custom-control-label mt-0"> A : a swimming pool. </label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input class="custom-control-input" id="radio12-2" type="radio" value="B" name="ques_lis_12">
                                                                <label for="radio12-2" class="custom-control-label mt-0"> B : a fitness center. </label>
                                                            </div>
                                                            <div class="custom-control custom-radio">   
                                                                <input class="custom-control-input" id="radio12-3" type="radio" value="C" name="ques_lis_12">
                                                                <label for="radio12-3" class="custom-control-label mt-0"> C : a tennis court. </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <p class="mt-2" align="left"><strong>13</strong>.The hotel restaurant specialises in</p>
                                                    <div class="container">
                                                        <div class="col col-lg-6" aling ="left">
                                                            <div class="custom-control custom-radio"> 
                                                                <input class="custom-control-input" id="radio13-1" type="radio" value="A" name="ques_lis_13">
                                                                <label for="radio13-1" class="custom-control-label mt-0"> A : healthy food. </label>
                                                            </div>
                                                            <div class="custom-control custom-radio"> 
                                                                <input class="custom-control-input" id="radio13-2" type="radio" value="B" name="ques_lis_13">
                                                                <label for="radio13-2" class="custom-control-label mt-0"> B : local food. </label>
                                                            </div>
                                                            <div class="custom-control custom-radio"> 
                                                                <input class="custom-control-input" id="radio13-3" type="radio" value="C" name="ques_lis_13">
                                                                <label for="radio13-3" class="custom-control-label mt-0"> C : international food. </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            

                                                <div class="col-md-5">
                                                    <p class="text-muted m-b-5 font-13">Questions 14 and 15<br>Choose <strong>TWO</strong> letters,<strong> A-E.</strong></p>
                                                    <p align="left"><strong>14-15</strong>. Which <strong>TWO</strong> business facilities are mentioned?</p>

                                                    <div class="mt-3">

                                                        <div class="custom-control custom-checkbox mb-4">
                                                            <input id="checkbox14-1" type="checkbox" class="custom-control-input" value="A" name="ques_lis_14[]">
                                                            <label for="checkbox14-1" class="custom-control-label" style="margin-top: 0px;"> A. internet access </label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox mb-4">
                                                            <input id="checkbox14-2" type="checkbox" class="custom-control-input" value="B" name="ques_lis_14[]">
                                                            <label for="checkbox14-2" class="custom-control-label" style="margin-top: 0px;"> B. mobile phone hire </label>
                                                        </div>   
                                                        <div class="custom-control custom-checkbox mb-4">
                                                            <input id="checkbox14-3" type="checkbox" class="custom-control-input" value="C" name="ques_lis_14[]">
                                                            <label for="checkbox14-3" class="custom-control-label" style="margin-top: 0px;"> C. audio-visual facilities </label>
                                                        </div> 
                                                        <div class="custom-control custom-checkbox mb-4">
                                                            <input id="checkbox14-4" type="checkbox"  class="custom-control-input" value="D" name="ques_lis_14[]">
                                                            <label for="checkbox14-4" class="custom-control-label" style="margin-top: 0px;"> D. airport transport </label>
                                                        </div> 
                                                        <div class="custom-control custom-checkbox mb-4">
                                                            <input id="checkbox14-5" type="checkbox" class="custom-control-input" value="E" name="ques_lis_14[]">
                                                            <label for="checkbox14-5" class="custom-control-label" style="margin-top: 0px;"> E. translation services </label>
                                                        </div> 
                                                    </div>

                                                </div>
                                            </div>

                                            <hr>
                                            <span class="fa fa-assistive-listening-systems"></span> <strong>QUESTIONS 16-20</strong> <br>
                                            
                                            <div class="row mt-2">
                                                <div class="col-md-12">
                                                    <p class="text-muted m-b-5 font-13">Questions 16-20 <br>Complete the table below.<br>Type <strong>NO MORE THAN THREE WORDS AND/OR A NUMBER </strong>for each answer.</p>
                                                    <table class="table table-bordered table-striped mt-3">
                                                        <tbody>
                                                            <tr>
                                                                <th colspan="3">
                                                                    <p align="center">
                                                                        <strong>
                                                                            SHORT BREAK PACKAGES
                                                                        </strong>
                                                                    </p>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    <strong>
                                                                        Length of stay
                                                                    </strong>
                                                                </th>
                                                                <th>
                                                                    <strong>
                                                                        Cost (per person per night)
                                                                    </strong>
                                                                </th>
                                                                <th>
                                                                    <strong>
                                                                        Special features
                                                                    </strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <td>2 days</td>
                                                                <td>
                                                                    <p>
                                                                        <strong>[16]</strong> 
                                                                        £<input type="text" class="d-inline ml-2" onChange="javascript:this.value=this.value.toUpperCase();" name="ques_lis_16">
                                                                    </p>
                                                                </td>
                                                                <td>
                                                                    <p> Full cooked breakfast</p> 
                                                                    <p> Entertainment in the <strong>[17]</strong>
                                                                        <input type="text" class="d-inline ml-2" onChange="javascript:this.value=this.value.toUpperCase();" name="ques_lis_17">
                                                                    </p> 
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>3 days</td>
                                                                <td> £60</td>
                                                                <td> 
                                                                    <p>As above,<strong> plus:</strong> </p>
                                                                    <p> 
                                                                        - a <strong>[18]</strong>
                                                                        <input type="text" class="d-inline ml-2" onChange="javascript:this.value=this.value.toUpperCase();" name="ques_lis_18">
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>5 days</td>
                                                                <td>
                                                                    <strong>[19]</strong> £
                                                                    <input type="text" class="d-inline ml-2" onChange="javascript:this.value=this.value.toUpperCase();" name="ques_lis_19">
                                                                </td>
                                                                <td> 
                                                                    <p>As above,<strong> plus:</strong> </p>
                                                                    <p>- 2 days' free beauty therapy</p>
                                                                    <p>
                                                                        - full-day membership of a <strong>[20]</strong>
                                                                        <input type="text" class="d-inline ml-2" onChange="javascript:this.value=this.value.toUpperCase();" name="ques_lis_20">
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <h3>SECTION 3 </h3>
                                <section>
                                    <div class="col-md-12">
                                        <div class="card-box"> <span class="fa fa-assistive-listening-systems"></span> <strong>QUESTIONS 21-23</strong> <br>
                                            <div class="row mt-2">
                                                <div class="col-md-12">
                                                    <p class="text-muted m-b-5 font-13 mt-3">Questions 21 and 22<br>Complete the sentences below. <br>Type <strong>NO MORE THAN TWO WORDS AND/OR A NUMBER</strong> for each answer.</p>
                                                    <div class="container">
                                                        <p>
                                                            <strong>21</strong>.Last year, Dina got a grade
                                                            <input type="text" class="d-inline ml-2" onChange="javascript:this.value=this.value.toUpperCase();" name="ques_lis_21">for the Theory and Practice option.
                                                        </p>
                                                        <p>
                                                            <strong>22</strong>.Dina has some free time because her
                                                            <input type="text" class="d-inline ml-2" onChange="javascript:this.value=this.value.toUpperCase();" name="ques_lis_22">has been cancelled.
                                                        </p>
                                                    </div>

                                                    <hr>

                                                    <div class="col-md-6 mt-3">
                                                        <p class="text-muted m-b-5 font-13">Question 23<br>Choose <strong>ONE</strong> letter , <strong>A-E.</strong></p>
                                                        <p><strong>23</strong>.Which book does Dina advise against?</p>
                                                        <div class="container">
                                                            <div class="col-12">
                                                                <div class="custom-control custom-radio"> 
                                                                    <input class="custom-control-input" id="radio23-1" type="radio" value="A" name="ques_lis_23">
                                                                    <label for="radio23-1" class="custom-control-label mt-0"> A : Brown : Observing Theory in Practice </label>
                                                                </div>
                                                                <div class="custom-control custom-radio"> 
                                                                    <input class="custom-control-input" id="radio23-2" type="radio" value="B" name="ques_lis_23">
                                                                    <label for="radio23-2" class="custom-control-label mt-0"> B : Jespersen : Theory’s Crucible </label>
                                                                </div>
                                                                <div class="custom-control custom-radio"> 
                                                                    <input class="custom-control-input" id="radio23-3" type="radio" value="C" name="ques_lis_23">
                                                                    <label for="radio23-3" class="custom-control-label mt-0"> C : Piresi :  On Giants’ Shoulders </label>
                                                                </div>
                                                                <div class="custom-control custom-radio"> 
                                                                    <input class="custom-control-input" id="radio23-4" type="radio" value="D" name="ques_lis_23">
                                                                    <label for="radio23-4" class="custom-control-label mt-0"> D : Willard : Practical Theories in the Social Science </label>
                                                                </div>
                                                                <div class="custom-control custom-radio"> 
                                                                    <input class="custom-control-input" id="radio23-5" type="radio" value="E" name="ques_lis_23">
                                                                    <label for="radio23-5" class="custom-control-label mt-0"> E : William : Knowledge Theory </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                            <span class="fa fa-assistive-listening-systems"></span> 
                                            <strong>QUESTIONS 24-30</strong>
                                            
                                            <div class="container mt-2">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p class="text-muted m-b-5 font-13">Questions 24 – 30<br>Complete the table below. <br>Type <strong>NO MORE THAN TWO WORDS AND/OR A NUMBER </strong> for each answer.</p>
                                                        <p align="left"><strong>How to use the Recall System</strong></p>

                                                        <div class="container">
                                                            <p>   
                                                                • Take a<strong>&nbsp;[24]</strong>
                                                                <input type="text" class="d-inline ml-2" onChange="javascript:this.value=this.value.toUpperCase();" name="ques_lis_24">from librarian’s desk.
                                                            </p>
                                                            <p>
                                                                • Complete the details of the book. Write your<strong>&nbsp;[25]</strong>
                                                                <input type="text" class="d-inline ml-2" onChange="javascript:this.value=this.value.toUpperCase();" name="ques_lis_25">address on back.
                                                            </p>
                                                            <p>
                                                                • Hand it in at the <strong>&nbsp;[26]</strong>
                                                                <input type="text" class="d-inline ml-2" onChange="javascript:this.value=this.value.toUpperCase();" name="ques_lis_26">
                                                            </p>   
                                                            <p>
                                                                • Check mail in your department twice a day to see if book is ready to collect. It normally takes 3 days. 
                                                            </p>    
                                                            <p>
                                                                • Cost: <strong>&nbsp;[27]</strong>
                                                                <input type="text" class="d-inline ml-2" onChange="javascript:this.value=this.value.toUpperCase();" name="ques_lis_27">per book.
                                                            </p>    
                                                        </div>

                                                        <p class="mt-2" align="left">
                                                            <strong>Dina’s advice on organizing a study group to work on an assignment</strong>
                                                        </p>

                                                        <div class="container">
                                                                <p>
                                                                    • Find two or three people on the course  who live near you.
                                                                </p>
                                                                <p>
                                                                    • Divide up the reading load.
                                                                </p>
                                                                <p>
                                                                    • Take it in turns to <strong>&nbsp;[28]</strong>
                                                                    <input type="text" class="d-inline ml-2" onChange="javascript:this.value=this.value.toUpperCase();" name="ques_lis_28">what you have read for the others.
                                                                </p>
                                                                <p>
                                                                    • Explain your <strong>&nbsp;[29]</strong>
                                                                    <input type="text" class="d-inline ml-2" onChange="javascript:this.value=this.value.toUpperCase();" name="ques_lis_29">to each other.
                                                                </p>
                                                                <p>
                                                                    • Write first draft of essay.
                                                                </p>
                                                                <p>
                                                                    • Exchange drafts and <strong>&nbsp;[30]</strong>
                                                                    <input type="text" class="d-inline ml-2" onChange="javascript:this.value=this.value.toUpperCase();" name="ques_lis_30">
                                                                </p>
                                                                <p>
                                                                    • Write final version of essay.
                                                                </p>
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
                                        <div class="card-box"> <span class="fa fa-assistive-listening-systems"></span> <strong>Questions 31 – 40</strong>
                                            <div class="container mt-2">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p class="text-muted m-b-5 font-13">Questions 31 – 33<br>Complete the sentences below.<br>Type <strong>NO MORE THAN THREE WORDS </strong>for each answer.</p>

                                                        <fieldset style="border:1px solid  #E0E0E0" class="col-12 mt-3">
                                                            <div class="container">

                                                                <p align="center">
                                                                    <strong>PEREGRINE FALCONS</strong>
                                                                </p>

                                                                <p>
                                                                    <strong>31</strong>.The Peregrine falcons found in
                                                                    <input type="text" class="d-inline ml-2" onChange="javascript:this.value=this.value.toUpperCase();" name="ques_lis_31">
                                                                    are not migratory birds. 
                                                                </p>

                                                                <p>
                                                                    <strong>32</strong>.There is disagreement about their maximum
                                                                    <input type="text" class="d-inline ml-2" onChange="javascript:this.value=this.value.toUpperCase();" name="ques_lis_32">.
                                                                </p>

                                                                <p>
                                                                    <strong>33</strong>.When the female is guarding the nest, the male spends most of his time
                                                                    <input type="text" class="d-inline ml-2" onChange="javascript:this.value=this.value.toUpperCase();" name="ques_lis_33">.
                                                                </p>
                                                            </div>
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <p class="text-muted m-b-5 font-13">Questions 34 – 37<br>Complete the table below.<br>Type <strong>NO MORE THAN THREE WORDS AND/OR A NUMBER</strong> for each answer.</p>
                                                        <table class="table table-bordered table-striped mt-3">
                                                            <tbody>
                                                                <tr>
                                                                    <td><strong>Ages of falcons</strong></td>
                                                                    <td><strong>What occurs</strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>20 days old</td>
                                                                    <td>
                                                                        The falcons <strong>&nbsp;[34]</strong>
                                                                        <input type="text" class="d-inline ml-2" onChange="javascript:this.value=this.value.toUpperCase();" name="ques_lis_34">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>28 days old</td>
                                                                    <td>
                                                                        The falcons are<strong>&nbsp;[35]</strong>
                                                                        <input type="text" class="d-inline ml-2" onChange="javascript:this.value=this.value.toUpperCase();" name="ques_lis_35">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> 2 months old</td>
                                                                    <td>
                                                                        The falcons <strong>&nbsp;[36]</strong>
                                                                        <input type="text" class="d-inline ml-2" onChange="javascript:this.value=this.value.toUpperCase();" name="ques_lis_36">permanently 
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1-12 months old</td>
                                                                    <td>
                                                                        More than half of falcons <strong>&nbsp;[37]</strong>
                                                                        <input type="text" class="d-inline ml-2" onChange="javascript:this.value=this.value.toUpperCase();" name="ques_lis_37">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <span class="fa fa-assistive-listening-systems"></span> <strong>Questions 38 – 40</strong><br>Complete the notes below.<br>Type <strong>NO MORE THAN THREE WORDS</strong> for each answer.</p>
                                                
                                                        <fieldset style="border:1px solid #E0E0E0" class="col-md-12">
                                                            <p class="mt-2" align="center"><strong>Procedures used for field research on Peregrine falcon chicks</strong></p>
                                                            <table class="table" border="0">
                                                                <tr>
                                                                    <td width="150px">First :</td>
                                                                    <td>
                                                                        catch chicks.
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="150px">Second :</td>
                                                                    <td>
                                                                        <strong>[38]</strong>
                                                                        <input type="text" class="d-inline ml-2" onChange="javascript:this.value=this.value.toUpperCase();" name="ques_lis_38">to legs 
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="150px">Third : </td>
                                                                    <td>
                                                                        <input type="text" class="d-inline ml-2" onChange="javascript:this.value=this.value.toUpperCase();" name="ques_lis_39">of chicks 
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="150px">Fourth :</td>
                                                                    <td>
                                                                        take blood sample to assess level of pesticide
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="150px">Fifth :</td>
                                                                    <td>
                                                                        check the <strong>&nbsp;[40]</strong>
                                                                        <input type="text" class="d-inline ml-2" onChange="javascript:this.value=this.value.toUpperCase();"name="ques_lis_40">of the birds 
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </fieldset>
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

    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="mySmallModalLabel">Keyskills 1</h4>
                </div>
                <div class="modal-body text-center">
                    <h5 class="text-center mb-4">Click to play Sound</h5>
                    <button type="button" class="btn btn-warning" id="Play">Play Audio <i class="fa fa-play-circle"></i></button>
                </div>
            </div> 
        </div> 
    </div> 
 
@endsection 


@section('javascript') 
    <script src="{{asset('public/js/mocktest/timer_ieltslistening.js')}}"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
    <script type="text/javascript">

        $(document).ready(function(){
            $('input[name="ques_lis_6[]"]').click(function(e){
                var Max = 2;
                var Checked = $('input[name="ques_lis_6[]"]:checked').length;
                if(Checked==Max){
                    $('input[name="ques_lis_6[]"]').each(function(){
                        if(!$(this).is(":checked")){
                            $(this).prop("disabled", true); 
                        }
                    });
                }else{
                    $('input[name="ques_lis_6[]"]').each(function(){
                        $(this).prop("disabled", false); 
                    });
                }
            });


            $('.modal').modal({backdrop: 'static', keyboard: false}) 

            function LoadModal() {
                $('.modal').modal('show');
            }

            // var obj = document.createElement("audio");
            //  obj.src = "{{ asset('public/sound/UntitledProject.MP3') }}";
            //  obj.autoPlay = true;
            //  obj.preLoad = true;

            let audio = new Audio("{{ asset('public/sound/UntitledProject.MP3') }}");

            $('#Play').on('click', function() {
                audio.play();
                $('.modal').modal('hide');
                begintimer();
            })

        });

        $(document).ready(function(){
            $('input[name="ques_lis_14[]"]').click(function(e){
                var Max = 2;
                var Checked = $('input[name="ques_lis_14[]"]:checked').length;
                if(Checked==Max){
                    $('input[name="ques_lis_14[]"]').each(function(){
                        if(!$(this).is(":checked")){
                            $(this).prop("disabled", true); 
                        }
                    });
                }else{
                    $('input[name="ques_lis_14[]"]').each(function(){
                        $(this).prop("disabled", false); 
                    });
                }
            });
        });

        $( document ).ready(function() {
            $('input').attr('autocomplete','off');
            $('input').attr('spellcheck','false');
        });

    </script> 
@stop
