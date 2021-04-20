<?php 
use App\Http\Controllers\AllScoreController;
?>
@extends('layouts.mocktest_admin')
@section('content')
@section('title','Class Registration')
<div class="content">
  <style>
    @page{ 
      size: A4 landscape;
      margin: 10px;
    }/*ขอบกระดาษ*/

    .sheet.padding5mm { 
      padding: 5mm 5mm;
      margin: 0mm 0mm;
    }
    .bigbox{
      width: 400px; 
      font-size: 12px;
      word-wrap: break-word;
    }
    .mediumbox{
      width: 200px; 
      font-size: 12px;
      word-wrap: break-word;
    }
    .smallbox{ 
      font-size: 12px;
      width: 50px;
      word-wrap: break-word;
    }


   td{
     font-size: 10px;
   } 

   .aligntext{
     padding: 5px;
     text-align: left;
     word-wrap: break-word;
   }
 </style>
	<style type="text/css" media="print">
		input{
			display:none;
		}
	</style>
  
<input type="button" class="btn btn-primary waves-effect waves-light mb-1" name="button" value="Print This Page" onclick="print();"> 
<page size="A4 landscape">
  <body>
    <section class="sheet padding5mm">
      <table class="table" style="width:100%" border="0">
        <tr>
          <td colspan="12"><p class="ans_title_page">Class Registration</p></td>
        </tr>
        <tr>
          <td align="left">Class :: {{$get_class_id['class_name']}}</td>
          <td>NC Code :: {{$get_class_id['class_nccode']}} </td>  
          <td>Date Exam :: {{date('d/m/Y H:i:s',strtotime($get_class_id['class_date_exam']))}} </td>
          <td align="right">Teacher :: {{$get_class_id['teacher_name']}} </td>  
        </tr>
      </table>
      <table class="table-bordered" cellspacing="0" width="100%" style="text-align: center;">
        <thead>
          <tr>
            <th rowspan="2" class="smallbox">No.</th>
            <th rowspan="2" class="mediumbox">Student Name</th>
            <th rowspan="2" class="smallbox">Set Exam</th>
            <th colspan="6" class="smallbox">Exam</th>
            <th rowspan="2" class="smallbox">Overall band</th>
            <th rowspan="2" class="bigbox">Course Recommendation / Note</th>
            <th rowspan="2" class="smallbox">Expected Band</th>
          </tr>
          <tr>
              <th class="smallbox">Listening</th>
              <th class="smallbox">Reading</th>
              <th class="smallbox">Writing 1</th>
              <th class="smallbox">Writing 2</th> 
              <th class="smallbox">Overall writing score</th>
              <th class="smallbox">Speaking</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 0;?>
            @foreach ($data as $class)
            <?php $i++;?>
          <tr>
            <td>{{$i}}</td>
            <td class="aligntext">{{$class['std_name']}}</td>
            <td>{{ $class['set_exam'] }}</td>
            <td>{{$class['lis_score']}}</td>
            <td>{{$class['read_score']}}</td>
            <td>{{$class['score_wri_1']}}</td>
            <td>{{$class['score_wri_2']}}</td>
            <td>{{$class['score_wri_overall']}}</td>
            <td>{{$class['score_speaking']}}</td>
            <td>{{$class['score_overall']}}</td>
            <td class="aligntext">{{$class['rec_course']}}</td>
		        <td>{{$class['expectband']}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </body>
  </section>
</page>
</div>
<!-- end content --> 
@endsection 