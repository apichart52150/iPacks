@extends('admin.layouts.master')
@section('title','Edit Club Room')
@section('content')
<div class="row">
  <div class="col-sm-10 col-sm-offset-2">
    <h1>{{ trans('quickadmin::templates.templates-view_edit-edit') }}</h1>
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
{!! Form::model($club_room, array('class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.club_room.update', $club_room->id))) !!}
 
 
<div class="form-group row">
        {!! Form::label('subtitle_id', 'Sub Title*', array('class'=>'col-sm-2 control-label')) !!}
        <div class="col-sm-6">
        <select class="form-control" name="subtitle_id" required="">
        @foreach ($data_filter as $data_filters)
        <option selected="" value="{{ $data_filters->subtitle_id }}"><b>{{ $data_filters->title_type.' : '.$data_filters->title }}</b></option>
         @endforeach
        @foreach ($data as $datas)
        <option value="{{ $datas->id }}">{{ $datas->title_type.' : '.$datas->title }}</option>
        @endforeach
    </select>
        </div>
        </div>

<div class="form-group">
  {!! Form::label('topicClub', 'Topic Club', array('class' => 'col-sm-2 control-label')) !!}  
  <div class="col-sm-6"> {!! Form::text('topicClub', old('topicClub',$club_room->topicClub), array('class'=>'form-control')) !!} </div>
</div>
<div class="form-group"> {!! Form::label('teacher', 'Teacher Name', array('class'=>'col-sm-2 control-label')) !!}
  <div class="col-sm-6"> {!! Form::text('teacher', old('teacher',$club_room->teacher), array('class'=>'form-control')) !!} </div>
</div>
<div class="form-group"> {!! Form::label('amount', 'Amount*', array('class'=>'col-sm-2 control-label')) !!}
  <div class="col-sm-3"> {!! Form::text('amount', old('amount',$club_room->amount), array('class'=>'form-control')) !!} </div>
</div>
<div class="form-group"> {!! Form::label('start_date', 'Start Date*', array('class'=>'col-sm-2 control-label')) !!}
  <div class="col-sm-3"> {!! Form::text('start_date', old('start_date',$club_room->start_date), array('class'=>'form-control datetimepicker')) !!} </div>
</div>
<div class="form-group"> {!! Form::label('end_date', 'End Date*', array('class'=>'col-sm-2 control-label')) !!}
  <div class="col-sm-3"> {!! Form::text('end_date', old('end_date',$club_room->end_date), array('class'=>'form-control datetimepicker')) !!} </div>
  
</div>

<div class="form-group"> {!! Form::label('start_post_date', 'Start Show *', array('class'=>'col-sm-2 control-label')) !!}
  <div class="col-sm-3"> {!! Form::text('start_post_date', old('start_date',$club_room->start_post_date), array('class'=>'form-control datetimepicker')) !!} </div>
</div>

<div class="form-group"> {!! Form::label('end_post_date', 'End Show *', array('class'=>'col-sm-2 control-label')) !!}
  <div class="col-sm-3"> {!! Form::text('end_post_date', old('end_date',$club_room->end_post_date), array('class'=>'form-control datetimepicker')) !!} </div>
</div>

<div class="form-group"> {!! Form::label('status', 'status', array('class'=>'col-sm-2 control-label')) !!}
  <div class="col-sm-10">
    <?php //dd($club_room->status); ?>

    @if ($club_room->status == 0)
        <label class="radio-inline">
      <input type="radio" name="status" value="0" checked="">
       1 Point</label>
     <label class="radio-inline">
      <input type="radio" name="status" value="1">
       1 Bonus</label>
     <label class="radio-inline">
      <input type="radio" name="status" value="2">
      ยกเลิกคลาส</label>
   @elseif ($club_room->status == 1)
        <label class="radio-inline">
      <input type="radio" name="status" value="0" >
       1 Point</label>
     <label class="radio-inline">
      <input type="radio" name="status" value="1" checked="">
       1 Bonus</label>
     <label class="radio-inline">
     <input type="radio" name="status" value="3">
      1 Bonus S.2</label> 
       <label class="radio-inline">
      <input type="radio" name="status" value="2">
      ยกเลิกคลาส</label> 
         @elseif ($club_room->status == 3)
        <label class="radio-inline">
      <input type="radio" name="status" value="0" >
       1 Point</label>
     <label class="radio-inline">
      <input type="radio" name="status" value="1">
       1 Bonus</label>
     <label class="radio-inline">
     <input type="radio" name="status" value="3" checked="">
      1 Bonus S.2</label> 
      <label class="radio-inline">
      <input type="radio" name="status" value="2">
      ยกเลิกคลาส</label> </label>
   @elseif ($club_room->status == 2)
<!--        <label class="radio-inline">
      <input type="radio" name="status" value="0" >
       1 Point</label>
     <label class="radio-inline">
      <input type="radio" name="status" value="1" >
       1 Bonus</label>-->
     <label class="radio-inline">
      <input type="radio" name="status" value="2" checked="">
      ยกเลิกคลาส</label> 
       

   @endif

  </div>
</div>

<div class="form-group">
  <div class="col-sm-10 col-sm-offset-2"> {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
    {!! link_to_route(config('quickadmin.route').'.club_room.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!} </div>
</div>
{!! Form::close() !!}

@endsection