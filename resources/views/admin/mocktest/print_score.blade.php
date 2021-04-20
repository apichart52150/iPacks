@extends('layouts.mocktest_admin')
@section('content')
@section('title','Listening & Reading')
<div class="content">
  <style>
    page {
      background: white;
      display: block;
      margin: 0 auto;
      margin-bottom: 0.5cm;
      box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);  
      padding: 10px 10px;
    }
    @media print {
      body, page {
        margin: 0;
        box-shadow: 0;
        margin-top: 0.5cm;
        font-size: 20px;
      }

      .content_style{
      font-size: 20px;
    }
    }

    .content_style{
      font-size: 18px;
    }

    .table td{
      padding: 3px 3px;
    }

    .table th.ans_title{
     padding: 5px 5px;
     background-color: #DDDDDD;
     font-color: #000000;
   }
 </style>
 <style type="text/css" media="print">
  input{
    display:none;
  }
</style>
<input type="button" class="btn btn-primary waves-effect waves-light mb-1" name="button" value="Print This Page" onclick="print();"> 
<page size="A4">
 <div class="container mb-2">
  <table border="0" width="100%">
    <tr>
      <td align="left" class="ans_title_page">Test Answer</td> 
      <td align="center" class="text-right">Student name : {{ $print[0]->std_name}}  </td> 
    </tr>
  </table>
</div>  

<div class="container">
  <div class="row">
    <table class="table table-bordered"> 
      <?php $i=0;?>
      @foreach ($print as $value)  
      <?php $i++; ?>
      <tr> 
        <th colspan="10" class="ans_title">
          @if(($value->type)=='L')
            {{'Listening'}} 
          @else 
            {{'Reading'}} 
          @endif 

          Answer::Round {{$i}} | Set Exam :: @if($value->set_exam == 'A') {{$value->set_exam}} @else {{$value->set_exam}} @endif |

          Date Exam :: {{date('d/m/Y H:i:s',strtotime($value->create_date))}}</th>

        @if($value->type=='L')
        <th colspan="3" class="ans_title">Total Score : {{$value->lis_score_total}}</th>
        @else
        <th colspan="3" class="ans_title">Total Score : {{$value->read_score_total}}</th>
        @endif
      </tr> 
      <tr>
        @for($i = 1; $i <= 40; $i++)
        <?php $data = 'q'.($i); 
            $as = 'as'.($i);?>
        @if($i == 6 || $i == 12 || $i == 18 || $i == 24 || $i == 30 || $i == 36)
        <td class="ans_label">{{ $i }}</td>
          <td class="ans_ans content_style">@if($value->$as == 1)
                    <i class="mdi mdi-check text-success"></i>
                    @else
                    <i class="mdi mdi-close text-danger"></i>@endif{{$value->$data}}
          </td>
        </tr>
          <tr>
          @else
          <td class="ans_label">{{ $i }}</td>
          <td class="ans_ans content_style">@if($value->$as == 1)
                    <i class="mdi mdi-check text-success"></i>
                    @else
                    <i class="mdi mdi-close text-danger"></i>@endif{{$value->$data}}</td>
          @endif
          @endfor
        </tr>
        @endforeach
      </table>


    </div>
  </div>

</page>
</div>
@endsection 





