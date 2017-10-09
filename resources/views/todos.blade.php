@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">       
            <form action="/create/todo" method="post">
                {{ csrf_field() }}
                <input type="text" class="form-control input-lg" placeholder="Create a new ToDo" name="todo">
            </form>
        </div>
    </div>
    <hr>
    @foreach($todos as $todo)
       <h4> {{ $todo->todo }} 
            <a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger">X</a> 
            <a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-info btn-sm">update</a>
            @if(!$todo->completed)
                <a href="{{ route('todo.completed',  [ 'id'=>$todo->id ]) }}" class="btn btn-success btn-sm">Mark As Completed</a>
            @else
                <span class="text-success"><small>COMPLETED!</small></span>
            @endif
    </h4> 

        <hr>
    @endforeach    

@stop

