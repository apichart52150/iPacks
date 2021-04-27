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
                      @if($value->set_exam == '1')
                        @if($value->title == '1')
                          <p><strong>Writing 1</strong> : You should spend about 20 minutes on this task.<br>
                          <strong>The bar-chart below shows the advertising budget for a major company using a number of
                          dlfferent types of media in millions of dollars during a twenty-year period, with projections for
                          the future.<br></strong>
                          <strong>Summarize the information by selecting and reporting on the main features, and make
                          comparisons where relevant.
                          <br></strong>
                          <p>Write at least 150 words.</p>
                          <img src="{{ asset('public/assets/images/task1.jpg') }}">
                        @else
                          <p><strong>Writing 2</strong> : You should spend about 40 minutes on this task.<br>
                          <strong>The increasing number of tourists in the world is bringing benefits to both individuals and
                          society.</strong><br>
                          <strong>What benefits does tourism bring and are there any drawbacks?</strong><br>

                          <br>Give reasons for your answer and include relevant examples from your own knowledge and experience.<br>
                          Write at least 250 words.</p>
                        @endif
                      @elseif($value->set_exam == '2')
                        @if($value->title == '1')
                          <p><strong>Writing 1</strong> : You should spend about 20 minutes on this task.<br>
                          <strong>The tables show world population between 1950 and 2050 and the distribution of population by region.  <br><br></strong>
                          <strong>Summarize the information by selecting and reporting on the main features, and make
                          comparisons where relevant.</strong>

                          <p>Write at least 150 words.</p><br>
                          <img src="{{ asset('public/assets/images/writing_task1_part2-new.png') }}" style="width: 100%;">
                        @else
                          <p><strong>Writing 1</strong> : You should spend about 40 minutes on this task.<br>
                          <strong>Many people say that we now live in 'consumer societies' where money and possessions are given too much importance. Others believe that consumer culture has played a vital role in improving our lives.<br></strong>
                          <strong>Discuss both views and give your opinion.</strong>

                          <p>Write at least 250 words.</p><br>
                        @endif
                      @elseif($value->set_exam == '3')
                        @if($value->title == '1')
                          @include('student.mocktest.found_1.task1')
                        @else
                          @include('student.mocktest.found_1.task2')
                        @endif
                      @elseif($value->set_exam == '4')
                        @if($value->title == '1')
                          @include('student.mocktest.found_ex.task1')
                        @else
                          @include('student.mocktest.found_ex.task2')
                        @endif
                      @else
                        @if($value->title == '1')
                          @include('student.mocktest.key_ex.task1')
                        @else
                          @include('student.mocktest.key_ex.task2')
                        @endif
                      @endif
                    </div>
                  </div>

                  <div class="row mt-3 justify-content-center bg-dark text-white p-2 font-weight-bold">
                    <div class="col-3">
                      @if($value->title == '1')
                        Writing Task 1
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





