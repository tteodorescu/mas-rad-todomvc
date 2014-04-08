
<!--@section('title', 'New test')-->
<!--@section('content')-->

<!--if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{Form::model('test', array('action'  => 'TaskController@store')) }}

<div class="form-group">
  {{ Form::label('name', 'Name') }}
  {{ Form::text('name', null) }}
</div>

{{ Form::submit('Create') }}

{{ Form::close() }}

<!--@stop-->