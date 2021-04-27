@extends('layouts.main_admin')

@section('topbar-menu')
    <div class="topbar-menu">
        <div class="container-fluid">
            <div id="navigation" class="bg-dark">
                <!-- Navigation Menu-->
                <ul class="navigation-menu  d-lg-flex justify-content-center">

					<li class="has-submenu">
                        <a href="{{ url('/admin') }}" class="text-light">
                            <i class="fas fa-home"></i>Home
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ url('clubs/dashboard') }}" class="text-light">
                            <i class="fas fa-users"></i>Club Room
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ url('clubs/student') }}" class="text-light">
                            <i class="fas fa-address-card"></i>Student
                        </a>
                    </li>

                </ul>
                <!-- End navigation menu -->

                <div class="clearfix"></div>
            </div>
            <!-- end #navigation -->
        </div>
        <!-- end container -->
    </div>
@endsection

@section('page-title')
	<div class="row">
		<div class="col-12 m-0">
			<div class="page-title-box">
				<div class="page-title-right">
					<ol class="breadcrumb m-0">
						<li class="breadcrumb-item"><i class="fas fa-address-card"></i> <a href="{{ url('clubs/student') }}">Back</a></li>
						<!-- <li class="breadcrumb-item"><a href="#">Topic </a></li> -->
						<li class="breadcrumb-item active">Edit</li>
					</ol>
				</div>
				<h4 class="page-title">Edit</h4>
			</div>
		</div>
	</div>     
@endsection

@section('content')
<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 class="header-title">Edit</h4>
            <div class="row">
                <div class="col-12">
                    <div class="p-2">
                    @foreach ($student as $student)

                        <form class="form-horizontal" role="form" action="studentupdate/{{ $student->std_id }}" method="POST">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="simpleinput">Class || Course</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="course" required="">
                                        @foreach ($course_student as $course_students)
                                         <option selected="" value="{{ $course_students->nccode }}">{{ $course_students->nccode }}</option>
                                        @endforeach
                                        @foreach ($course as $courses)
                                            <option value="{{ $courses->nccode }}">{{ $courses->coursename.' '.$courses->nccode }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="std_id">ID</label>
                                <div class="col-sm-10">
                                    <input type="text" id="std_id" name="std_id" class="form-control" value="{{$student->std_id}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="std_username">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="std_username" name="std_username" value="{{$student->std_username}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="std_mobile">Mobile</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="std_mobile" name="std_mobile" value="{{$student->std_mobile}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="std_password">Password</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="std_password" id="std_password" value="{{$student->std_mobile}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Full Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="std_name" value="{{$student->std_name}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nickname</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="std_nickname" value="{{$student->std_nickname}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Club</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="std_point" value="{{$student->std_point}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Bonus</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="std_bonus" value="{{$student->std_bonus}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">SAC Paper</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="std_sacpaper" value="{{$student->std_sacpaper}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">iSAC Writing</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="std_pointsac" value="{{$student->std_pointsac}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">iSAC Speaking</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="std_pointspeaking" value="{{$student->std_pointspeaking}}">
                                </div>
                            </div>

                            <div class="form-group text-center">
                                <a href="{{url('clubs/student')}}" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancle</a>
							    <button type="submit" class="btn btn-info waves-effect waves-light">Add</button>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div> <!-- end card-box -->
    </div><!-- end col -->
</div>
<!-- end row -->

@endsection