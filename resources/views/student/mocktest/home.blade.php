@extends('layouts.main') 
@section('topbar')
    <div class="topbar-menu">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li class="has-submenu">
                        <a href="{{url('user_home')}}">
                            <i class="fas fa-home"></i>Home
                        </a>
                    </li>

                    <!-- <li class="has-submenu">
                        <a href="{{route('faqs')}}">
                            <i class="fas fa-question-circle"></i>FAQs
                        </a>
                    </li> -->

                </ul>
                <!-- End navigation menu -->

                <div class="clearfix"></div>
            </div>
            <!-- end #navigation -->
        </div>
        <!-- end container -->
    </div>
    <!-- end navbar-custom -->
@endsection

@section('page-title')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{url('user_home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Mocktest</li>
                    </ol>
                </div>
                <h4 class="page-title">Mocktest</h4>
            </div>
        </div>
    </div>     
@endsection


@section('content')

<div class="row">
    <div class="col-xl-4 col-md-6">
        <div class="widget-bg-color-icon card-box border border-primary">
            <div class="avatar-xl float-left">
                <img src="{{ asset('public/assets/images/mocktest/iconlis.png') }}" class="font-24 avatar-title text-white" alt="user">
            </div>
            <div class="text-right p-1">
                <h3 class="text-primary mt-1"><span class="counter">LISTENING</span></h3>
                @if($data['checklis'] >= 1)
                    <button type="button" class="btn btn-secondary waves-effect disabled">Start</button>
                @else
                    <button class="btn btn-primary" data-toggle="modal" data-target="#listening">Start</button>
                @endif
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="col-xl-4 col-md-6">
        <div class="widget-bg-color-icon card-box border border-primary">
            <div class="avatar-xl float-left">
                <img src="{{ asset('public/assets/images/mocktest/club3.png') }}" class="font-24 avatar-title text-white" alt="user">
            </div>
            <div class="text-right p-1">
                <h3 class="text-primary mt-1"><span class="counter">READING</span></h3>
                @if($data['checkread'] >= 1 || $data['checklis'] == 0)
                    <button type="button" class="btn btn-secondary waves-effect disabled">Start</button>
                @else
                    <button class="btn btn-primary" data-toggle="modal" data-target="#reading">Start</button>
                @endif
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="col-xl-4 col-md-6">
        <div class="widget-bg-color-icon card-box border border-primary">
            <div class="avatar-xl float-left">
                <img src="{{ asset('public/assets/images/mocktest/club1.png') }}" class="font-24 avatar-title text-white" alt="user">
            </div>
            <div class="text-right p-1">
                <h3 class="text-primary mt-1"><span class="counter">WRITING</span></h3>
                @if($data['checklis'] == 0 || $data['checkread'] == 0 || $data['checkwriting'] >= 1)
                    <button type="button" class="btn btn-secondary waves-effect disabled">Start</button>
                @else
                    <button class="btn btn-primary" data-toggle="modal" data-target="#writing">Start</button>
                @endif
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<!-- modal -->
<div id="listening" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">{{ $data['name_type'] }}  Mock Test</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <p align="center">Listen to the description of the exam.
                    <audio controls controlsList="nodownload">
                        <source src="{{asset('public/sound/Introduction_MOCK_Test.MP3') }}" type="audio/ogg">
                        <source src="{{asset('public/sound/Introduction_MOCK_Test.MP3') }}" type="audio/mpeg">
                    </audio>
                </p>
                <p align="center">Type all your answers in the spaces. At the end of the real test you will be given 2 minutes to check your answers.</p>
            </div>
            <div class="modal-footer">
                @if(($data['set_exam']) == 1)
                    <a href="{{ url('keyskills_1/listening') }}" class="btn btn-primary text-white waves-effect waves-light">Start Exam</a>
                @elseif(($data['set_exam']) == 2)
                    <a href="{{ url('keyskills_2/listening') }}" class="btn btn-primary text-white waves-effect waves-light">Start Exam</a>
                @elseif(($data['set_exam']) == 3)
                    <a href="{{ url('found_1/listening') }}" class="btn btn-primary text-white waves-effect waves-light">Start Exam</a>
                @elseif(($data['set_exam']) == 4)
                    <a href="{{ url('found_ex/listening') }}" class="btn btn-primary text-white waves-effect waves-light">Start Exam</a>
                @elseif(($data['set_exam']) == 5)
                    <a href="{{ url('key_ex/listening') }}" class="btn btn-primary text-white waves-effect waves-light">Start Exam</a>
                @elseif(($data['set_exam']) == 6)
                    <a href="{{ url('speak_write/listening') }}" class="btn btn-primary text-white waves-effect waves-light">Start Exam</a>
                @elseif(($data['set_exam']) == 7)
                    <a href="{{ url('gateway/listening') }}" class="btn btn-primary text-white waves-effect waves-light">Start Exam</a>
                @endif
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- modal -->
<div id="reading" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">{{ $data['name_type'] }}  Mock Test</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <p align="center">Reading
                    <ul>
                        <li>Answer <strong>all</strong> the questions</li>
                        <li>You can change your answers at any time during the test</li>
                        <li>There are 40 questions in this test</li>
                        <li>Each question carries one mark</li>
                        <li>Click 'next' for the next passage</li>
                        <li>Click 'previous' to review your answers</li>
                    </ul>  
                </p>
            </div>
            <div class="modal-footer">
                @if(($data['set_exam']) == 1)
                    <a href="{{ url('keyskills_1/reading') }}" class="btn btn-primary text-white waves-effect waves-light">Start Exam</a>
                @elseif(($data['set_exam']) == 2)
                    <a href="{{ url('keyskills_2/reading') }}" class="btn btn-primary text-white waves-effect waves-light">Start Exam</a>
                @elseif(($data['set_exam']) == 3)
                    <a href="{{ url('found_1/reading') }}" class="btn btn-primary text-white waves-effect waves-light">Start Exam</a>
                @elseif(($data['set_exam']) == 4)
                    <a href="{{ url('found_ex/reading') }}" class="btn btn-primary text-white waves-effect waves-light">Start Exam</a>
                @elseif(($data['set_exam']) == 5)
                    <a href="{{ url('key_ex/reading') }}" class="btn btn-primary text-white waves-effect waves-light">Start Exam</a>
                @elseif(($data['set_exam']) == 6)
                    <a href="{{ url('speak_write/reading') }}" class="btn btn-primary text-white waves-effect waves-light">Start Exam</a>
                @elseif(($data['set_exam']) == 7)
                    <a href="{{ url('gateway/reading') }}" class="btn btn-primary text-white waves-effect waves-light">Start Exam</a>
                @endif
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- modal -->
<div id="writing" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">{{ $data['name_type'] }}  Mock Test</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <p align="center">Writing
                    <ul>
                        <li>Answer <strong>both</strong> parts</li>
                        <li>You can change your answers at any time during the test</li>
                        <li>There are two parts in this test</li>
                        <li>Part 2 contributes twice as much as Part 1 to the writing score</li>
                        <li>Click 'next' for Task 2</li>
                        <li>Click 'previous' to review Task 1</li>
                    </ul>  
                </p>
            </div>
            <div class="modal-footer">
                @if(($data['set_exam']) == 1)
                    <a href="{{ url('keyskills_1/writing') }}" class="btn btn-primary text-white waves-effect waves-light">Start Exam</a>
                @elseif(($data['set_exam']) == 2)
                    <a href="{{ url('keyskills_2/writing') }}" class="btn btn-primary text-white waves-effect waves-light">Start Exam</a>
                @elseif(($data['set_exam']) == 3)
                    <a href="{{ url('found_1/writing') }}" class="btn btn-primary text-white waves-effect waves-light">Start Exam</a>
                @elseif(($data['set_exam']) == 4)
                    <a href="{{ url('found_ex/writing') }}" class="btn btn-primary text-white waves-effect waves-light">Start Exam</a>
                @elseif(($data['set_exam']) == 5)
                    <a href="{{ url('key_ex/writing') }}" class="btn btn-primary text-white waves-effect waves-light">Start Exam</a>
                @elseif(($data['set_exam']) == 6)
                    <a href="{{ url('speak_write/writing') }}" class="btn btn-primary text-white waves-effect waves-light">Start Exam</a>
                @elseif(($data['set_exam']) == 7)
                    <a href="{{ url('gateway/writing') }}" class="btn btn-primary text-white waves-effect waves-light">Start Exam</a>
                @endif
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection    
