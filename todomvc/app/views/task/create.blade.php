@extends('layouts.master')
<!--@section('title', 'New task')-->
@section('content')

<!--if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{Form::model('task', array('action'  => 'TaskController@store')) }}

<div class="form-group">
  {{ Form::label('name', 'Name') }}
  {{ Form::text('name', null) }}
</div>

{{ Form::submit('Create') }}

{{ Form::close() }}

@stop
