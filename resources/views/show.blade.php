@extends('layouts.app')

@section('content')
<a href="/"class="btn btn-default">Go BACK</a>
<h1>{{$todo->title}}</h1>
    <div class="label label-danger"> {{$todo->day}}</div>
    <p>{{$todo->content}}</p>
@endsection