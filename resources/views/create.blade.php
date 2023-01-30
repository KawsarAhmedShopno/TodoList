@extends('layouts.app')




@section('content')

<form method="post"action="/todo">
    @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title"id="title" placeholder="Title">
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control" id="content"name="content" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="day">Day</label>
    <input type="text" class="form-control" name="day"id="day" placeholder="Day">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection