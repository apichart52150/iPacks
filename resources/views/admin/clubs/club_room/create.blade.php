@extends('layouts.main')
@section('title','Add New Club Room')
<style>
  .hide-block {
    display: none; 
  }
</style>
@section('content')
<div class="row">
  <div class="col-sm-10 col-sm-offset-2">
    <h1>{{ trans('quickadmin::templates.templates-view_create-add_new') }}</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        {!! implode('', $errors->all('
        <li class="error">:message</li>
        ')) !!}
      </ul>
    </div>
    @endif </div>
</div>
{!! Form::open(array('route' => config('quickadmin.route').'.club_room.store', 'id' => 'form-with-validation', 'class' => 'form-horizontal')) !!}

<div class="form-group row">
        {!! Form::label('subtitle_id', 'Sub Title*', array('class'=>'col-sm-2 control-label')) !!}
        <div class="col-sm-6">
        <select class="form-control" name="subtitle_id" required="">
        <option selected="" value="">เลือก Sub Title เพื่อสร้างห้องเรียน</option>
        @foreach ($data as $datas)
        <option value="{{ $datas->id }}" {{ old('subtitle_id') == $datas->id ? 'selected' : '' }}>{{ $datas->title_type.' : '.$datas->title }}</option>
        @endforeach
    </select>
        </div>
        </div>

<div class="form-group {{ old('subtitle_id') == 14 || old('subtitle_id') == 15 ? '' : '  hide-block'}} " id="clubType">
  {!! Form::label('clubtype', 'Club Type*', array('class' => 'col-sm-2 control-label')) !!}  
  <div class="col-md-6">
    <select name="type" class="form-control">
      <option value="">- Select Type -</option>
      <option value="live">Live at NC</option>
      <option value="online">Online Course</option>
    </select>
  </div>
</div>
  
<div class="form-group">
  {!! Form::label('topicClub', 'Topic Club', array('class' => 'col-sm-2 control-label')) !!}  
  <div class="col-md-6">
    <input type="text" name="topicClub" class="form-control" value="{{ old('topicClub') }}">
  </div>
</div>


<div class="form-group"> {!! Form::label('teacher', 'Teacher Name', array('class'=>'col-sm-2 control-label')) !!}
  <div class="col-sm-6"> {!! Form::text('teacher', old('teacher'), array('class'=>'form-control')) !!} </div>
</div>
<div class="form-group"> {!! Form::label('amount', 'Amount*', array('class'=>'col-sm-2 control-label')) !!}
  <div class="col-sm-2">
    <input class="form-control" name="amount" type="number" value="10" >
  </div>
</div>
<div class="form-group"> {!! Form::label('start_date', 'Start Date*', array('class'=>'col-sm-2 control-label')) !!}
  <div class="col-sm-3"> {!! Form::text('start_date', old('start_date'), array('class'=>'form-control startdatetimepicker', 'autocomplete' => 'off')) !!} </div>
</div>
<div class="form-group"> {!! Form::label('end_date', 'End Date*', array('class'=>'col-sm-2 control-label')) !!}
  <div class="col-sm-3"> {!! Form::text('end_date', old('end_date'), array('class'=>'form-control enddatetimepicker', 'autocomplete' => 'off')) !!} </div>
</div>

<div class="form-group"> {!! Form::label('start_post_date', 'Start Show Date*', array('class'=>'col-sm-2 control-label')) !!}
  <div class="col-sm-3"> {!! Form::text('start_post_date', old('start_post_date'), array('class'=>'form-control startdatetimepicker', 'autocomplete' => 'off')) !!} </div>
</div>
<div class="form-group"> {!! Form::label('end_post_date', 'End Show Date*', array('class'=>'col-sm-2 control-label')) !!}
  <div class="col-sm-3"> {!! Form::text('end_post_date', old('end_post_date'), array('class'=>'form-control enddatetimepicker', 'autocomplete' => 'off')) !!} </div>
</div>

<div class="form-group"> {!! Form::label('status', 'status', array('class'=>'col-sm-2 control-label')) !!}
  <div class="col-sm-10">
    <label class="radio-inline">
      <input type="radio" name="status" value="0" checked="">
       1 Point</label>
     <label class="radio-inline">
      <input type="radio" name="status" value="1" {{ old('subtitle_id') == 14 ? 'checked' : ''}}>
       1 Bonus S.1</label>
       <label class="radio-inline">
       <input type="radio" name="status" value="3" {{ old('subtitle_id') == 15 ? 'checked' : ''}}>
      1 Bonus S.2</label> 
    <!--<label class="radio-inline">
      <input type="radio" name="status" value="2">
      ยกเลิกคลาส</label>-->
  </div>
</div>
<div class="form-group">
  <div class="col-sm-10 col-sm-offset-2"> {!! Form::submit( trans('quickadmin::templates.templates-view_create-create') , array('class' => 'btn btn-primary')) !!} </div>
</div>
{!! Form::close() !!}

@endsection

@section('javascript')
<script>
    const subTitle = document.querySelector('select[name="subtitle_id"]');
    const radioStatus = document.querySelectorAll('input[name="status"]');
    const clubType = document.getElementById('clubType');
      
    subTitle.addEventListener('change', (e) => {
      if(e.target.value == 14 || e.target.value == 15)  {
        radioStatus[1].checked = true;
        clubType.classList.remove('hide-block')
        $('option[value="live"]').attr('selected', false)
      } else {
        radioStatus[0].checked = true;
        clubType.classList.add('hide-block')
        $('option[value="live"]').attr('selected', true)
      }

      if(e.target.value == 15) {
        radioStatus[2].checked = true;
      } 
    })
</script>
@stop