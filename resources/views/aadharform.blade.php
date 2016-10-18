@extends('layout')

@section('content')
@extends('partials.header')


<div class="col-md-8 col-md-offset-2">
<h1> Aadhar Card Registration Form </h1><br/>
<form>
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
  </div>
  <div class="form-check">
  <label>Gender: </label><br>
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" value="" name="gender">Male</label>
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" value="" name="gender">Female</label>
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
  <div >
                <div>
                    <h3>Upload Image</h3>
                    
                </div>
                <div >
                    <label >
                        <span>Browse</span>
                        <!-- The file is stored here. -->
                        <input type="file" name="image" class="imageupload">
                    </label>
                    <button type="button" class="btn btn-default">Remove</button>
                </div>
                

            </div>
  </form>
  
  </div>
  
@endsection