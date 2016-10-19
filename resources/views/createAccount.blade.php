@extends('layout')

@section('content')
@extends('partials.header')

<div class="col-md-8 col-md-offset-2 dash" style="margin-top: 1%">
<div class="col-md-4 col-md-offset-4" style="margin-top: 1%">
<h1>Create Account</h1>

  <form method="POST" action="{{ url('/createAccount') }}">
   {{ csrf_field() }}

  <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
      <label for="date">Date Of Birth:</label>
      <input type="date" class="form-control" id="date" name="dob">
    </div>
    <div class="form-group">
      <label for="contact">Contact :</label>
      <input type="contact" class="form-control" id="contact" name="contact">
    </div>
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="password">
    </div>
    
    <button type="submit" class="btn btn-default">Create Account</button>
     <button type="reset" class="btn btn-default">Cancel</button>
  </form>

</div>
</div>
@endsection