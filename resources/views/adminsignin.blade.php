@extends('layout')

@section('content')
@extends('partials.header')
<h1> Admin Sign in </h1>
<div class="col-md-8 col-md-offset-2 dash" style="margin-top: 2%">
<div class="col-md-4 col-md-offset-4" style="margin-top: 3%">
<form method="post" action="">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>



@endsection