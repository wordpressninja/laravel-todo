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
       <h4> {{ $todo->todo }} <a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger">X</a> </h4> 
        <hr>
    @endforeach    

@stop

