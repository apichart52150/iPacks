 @extends('layouts.main') 

@section('content')
<div class="content">
    <div class="container-fluid">

        <div class="panel-body">
        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="card-box widget-user">
                    <img src="{{ asset('public/assets/images/iconlis.png') }}" class="rounded-circle" alt="user">
                    <div class="wid-u-info">
                        <h4 class="card-title text-break">IELTS LISTENING </h4>
                       
                            <button class="btn btn-primary" data-toggle="modal" data-target="#listen">Start</button>
                       
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-box widget-user">
                    <div>
                        <img src="{{ asset('public/assets/images/club3.png') }}" class="rounded-circle" alt="user">
                        <div class="wid-u-info">
                            <h4 class="card-title">IELTS READING</h4>
                           
                                <button class="btn btn-primary" data-toggle="modal" data-target="#reading">Start</button> 
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-box widget-user">
                    <div>
                        <img src="{{ asset('public/assets/images/club1.png') }}" class="rounded-circle" alt="user">
                        <div class="wid-u-info">
                            <h4 class="card-title">IELTS WRITING</h4>
                            
                                <button class="btn btn-primary" data-toggle="modal" data-target="#writing">Start</button> 
                           
                        </div>
                    </div>
                </div>                     
            </div>
        </div>

        <div id="listen" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-full">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="full-width-modalLabel">New Cambridge  Key Skills  Mock Test</h4>
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
                        <center><a href="#" class="btn btn-primary">Start exam</a></center>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->



        <div id="reading" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-full">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="full-width-modalLabel">New Cambridge  Key Skills  Mock Test</h4>
                    </div>
                    <div class="modal-body">
                        <p align="center">IELTS Reading
                            <ul>
                                <li>Answer <strong>all</strong> the questions</li>
                                <li>You can change your answers at any time during the test</li>
                                <li>There are 40 questions in this test</li>
                                <li>Each question carries one mark</li>
                                <li>Click 'next' for the next passage</li>
                                <li>Click 'previous' to review your answers</li>
                            </ul>  
                        </p>
                        <center> <a href="#" class="btn btn-primary">Start exam</a></center>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div id="writing" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-full">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="full-width-modalLabel">New Cambridge  Key Skills  Mock Test</h4>
                    </div>
                    <div class="modal-body">
                        <p align="center">IELTS Writing
                            <ul>
                                <li>Answer <strong>both</strong> parts</li>
                                <li>You can change your answers at any time during the test</li>
                                <li>There are two parts in this test</li>
                                <li>Part 2 contributes twice as much as Part 1 to the writing score</li>
                                <li>Click 'next' for Task 2</li>
                                <li>Click 'previous' to review Task 1</li>
                            </ul>  
                        </p>
                        <center> <a href="#" class="btn btn-primary">Start exam</a></center>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

    </div>
    <!-- end container -->
</div>
<!-- end content -->
@endsection    
