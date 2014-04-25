@extends('layouts.master')
<!--@section('title', 'New task')-->
@section('content')

<!--if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

<!--{{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css') }}-->
{{ HTML::style('bootstrap.css') }}

<?php $now=new DateTime; ?>

<span style='display:inline-block;'>
<table class='table'>
<table class='table'>
  <caption style='text-align:left;font-style:italic'>
    {{ 'printed on:'.$now->format('d-m-Y') }}<br>
  </caption>
  <thead class='text-primary'>
    <tr>
      <th> <a href="{{ URL::to('task/create')}}" > new task </a>
      <th>
      <th>Task Name
      <th>Task Title
    </tr>
  </thead>
  
  <tbody>

@foreach ($tasks as $task)
    <tr>
        <td> <a href="{{ URL::to('task/'.$task->id.'/edit')}}" > edit </a>
        <td> <a href="{{ URL::to('task/'.$task->id.'/destroy')}}" > delete </a>        
        <td> {{ $task->name }}
        <td> {{ $task->title }} 
    </tr>
@endforeach
  </tbody>
  
</table>
</table>

{{ $tasks->links() }}
  
</span>

@endsection
