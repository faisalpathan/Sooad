@extends('layout')

@section('content')
@extends('partials.header')

<div class="col-md-8 col-md-offset-2 dash" style="margin-top: 2%">
<div class="col-md-4 col-md-offset-4" style="margin-top: 3%">
<h1>Edit User</h1>
<form method="get" action="edituser/{{Auth::user()->id}}">
  {{ csrf_field() }}
<div class="form-group">
 @if(Auth::check())
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{Auth::user()->name}}">
  </div>
  <div class="form-group">
    <label for="date">Date Of Birth:</label>
    <input type="date" class="form-control" id="date" name="dob" value="{{Auth::user()->dob}}">
  </div>
  <div class="form-group">
    <label for="contact">Contact :</label>
    <input type="contact" class="form-control" id="contact" name="contact" value="{{Auth::user()->contact}}">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="password">
  </div>
  <button type="submit" class="btn btn-default">Save</button>
  <button type="reset" class="btn btn-default">Cancel</button>
</form>
@endif
</div>
</div>
@endsection