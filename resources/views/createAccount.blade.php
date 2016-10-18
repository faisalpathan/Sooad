@extends('layout')

@section('content')
@extends('partials.header')

<div class="col-md-8 col-md-offset-2 dash" style="margin-top: 2%">
<div class="col-md-4 col-md-offset-4" style="margin-top: 3%">
<form method="post" action="">
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="date">Date Of Birth:</label>
    <input type="date" class="form-control" id="date">
  </div>
  <div class="form-group">
    <label for="contact">Contact :</label>
    <input type="contact" class="form-control" id="contact">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  
  <button type="submit" class="btn btn-default">Create Account</button>
</form>
</div>
</div>








@endsection