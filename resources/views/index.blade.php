@extends('layouts.app')

@section('content')
<h1>TodoList</h1>
@foreach($todo as $todo)
    <div class="card m-2">
    <h2><a href="todo\{{$todo->id}}">{{$todo->title}}</a></h2>
        <h3>{{$todo->content}}</h3>
    <span class="label label-danger">{{$todo->day}}</span>
    </div>
@endforeach
@endsection