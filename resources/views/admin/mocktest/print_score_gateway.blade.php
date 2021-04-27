@extends('layouts.mocktest_admin')
<!-- @section('title','Writing 1&2') -->

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row mt-2">
        <div class="col-12">
          <div class="card-box">
            <div class="row text-center text-uppercase py-3 font-weight-bold">
              <div class="col-3">Student name : {{ $print[0]->std_name }}</div>
              <div class="col-3">Date : {{date('d/m/Y H:i:s',strtotime($print[0]->create_date))}}</div>
              <div class="col-3">Course : {{ $print[0]->coursename}}</div>
              <div class="col-3">Teacher : {{ $print[0]->th_name}}</div>
            </div>
            <!-- end personal info -->

            <div class="container py-3">
              <div class="row">
                <div class="col-12">
                  <?php $i = 0; ?>
                  @foreach($print as $value)
                  <?php $i++; ?>
                  <div class="row justify-content-center my-4">
                    <div class="col-8">
                      @if($value->title == '1')
                        @include('student.mocktest.gateway.newtask1')
                      @elseif($value->title == '2')
                        @include('student.mocktest.gateway.newtask2')
                      @else
                        @include('student.mocktest.gateway.newtask3')
                      @endif
                    </div>
                  </div>

                  <div class="row mt-3 justify-content-center bg-dark text-white p-2 font-weight-bold">
                    <div class="col-3">
                      @if($value->title == '1')
                        Writing Task 1 Academic
                      @elseif($value->title == '2')
                        Writing Task 1 General Training
                      @else
                        Writing Task 2 
                      @endif
                    </div>
                    <div class="col-2 text-right">
                      Answer::Round {{ $i }} 
                    </div>
                    <div class="col-7 text-right">
                      Set Exam :: @if($value->set_exam == 'A') {{$value->set_exam}} @else {{$value->set_exam}} @endif / Date Exam :: {{$value->create_date}}
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 border border-top-0 p-3 font-18">
                      {!!$value->text_answer!!}
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
            <div class="mt-4 mb-1">
                <div class="text-right d-print-none">
                    <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-printer mr-1"></i> Print</a>
                </div>
            </div>
          </div>
          <!-- end card-box -->
        </div>
        <!-- end col-12 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container-fluid -->
  </div>
  <!-- end content -->
@endsection 





