@extends('layout')
@section('content') 
	<div class="row">
		<div class="col-lg-12">
		  	<form action="{{ route('todo.save', ['id' => $todo->id]) }}" method="post">
		  		{{ csrf_field() }}
		  		<input type="text" class="form-control input-group-lg" name="todo_update" value="{{ $todo->todo }}" placeholder="Update your ToDo item">
		  	</form>
		</div>
	</div>
@stop