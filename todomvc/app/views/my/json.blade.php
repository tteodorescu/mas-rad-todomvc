@extends('layouts.master')

@section('sidebar')
 @parent
  {{$params}}
  <?php echo $params; ?>
@stop

@section('content')
<p>This is <b>json</b> my body content.</p>
@stop