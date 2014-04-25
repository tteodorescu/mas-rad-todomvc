@extends('layouts.master')
<!--@section('title', 'New task')-->
@section('content')

{{ HTML::style('bootstrap.css') }}

<!--if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{Form::model('task', array('action'  => 'TaskController@store')) }}
<div style='max-width:300px; max-height:300px'>
  <fieldset class = 'has-warning'>
    <legend> {{ $task ? 'Edit Task' : 'New Task' }} </legend>
    {{ Form::label('name', 'Name', array('class' => 'label-info')) }}
    {{ Form::text('name', $task ? $task->name : null, array('class' => 'form-control')) }} <br />
    {{ Form::label('title', 'Title', array('class' => 'label-info')) }}
    {{ Form::text('title', $task ? $task->title : null, array('class' => 'form-control')) }}
    {{ Form::hidden('id', $task ? $task->id : null)}}
  </fieldset>
</div>

{{ Form::submit('Create', array('type' => 'submit')) }}

{{ Form::close() }}

@stop
