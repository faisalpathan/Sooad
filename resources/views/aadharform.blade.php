@extends('layout')

@section('content')
@extends('partials.header')


<div class="col-md-8 col-md-offset-2">
<h1> Aadhar Card Registration Form </h1><br/>

<form method="POST" action="store">

<input type="hidden" name="_token" value="{{ csrf_token() }}">

<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
<div class="col-md-4 ">
  <div class="form-group">
    <label for="fullName">Full Name</label>
    <input type="text" class="form-control" id="fullName" name="fullname" placeholder="Enter Full Name">
  </div>
  <div class="form-group">
  	<label> Father's Name </label>
  	<input type="text" class="form-control" id="fatherName" name="fname" placeholder="Enter Father's Full Name">
  </div>
  <div class="form-group">
  <label>Mother's Name</label>
  <input type="text" class="form-control" id="motherName" name="mname" placeholder="Enter Mother's Name">
  </div>
  <div class="form-group">
  	<label>Address</label>
  	<input type="text" class="form-control" id="address" name="address" name="address">
  </div><br/>
  <div class="form-group"><label>Gender</label>
                <label class="radio-inline col-md-push-1" for="radios-0">
                  <input name="gender" id="radios-0" value="male" checked="checked" style="font-size:15px;" type="radio">Male</label>
                <label class="radio-inline col-md-push-1" for="radios-1">
                  <input name="gender" id="radios-1" value="female" style="font-size:15px;" type="radio">Female</label>
              </div>
  </div>
  <div class="col-md-4 col-md-offset-2" >
  	<div class="form-group">
  	<label>Mobile Number</label>
  	<input type="number" class="form-control" id="mobile" name="mobile" name="mobile">
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email"  placeholder="Enter email">
    </div>
    <div class="form-group">
    <label>Date Of Birth</label>
    <input type="date"  class="form-control" id="date"  name="DOB" >
  </div>
            <br/>
            <div style="margin-left:-10%;margin-top:30%;">
            <input type="submit" class="btn btn-success"  value="Submit">
            <input type="reset" class="btn btn-success" value="Reset">
            </div>
  </form>
  
  </div>
  
@endsection