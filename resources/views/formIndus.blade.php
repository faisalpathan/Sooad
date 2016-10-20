@extends('layout')

@section('content')
@extends('partials.header')
<div class="col-md-8 col-md-offset-2 dash" style="margin-top: 3%;">

<table class="table table-striped" id="example" style="margin-top: 3%">
  <thead>
    <tr>
      <th>Sr no</th>
      <th>Forms</th>
      <th>Action</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>New Broadband Connection</td>
      <td><span class="glyphicon glyphicon-eye-open
"> </span>&nbsp;<a href="#">View  </a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="aadharform">Fill form</a>&nbsp;<span class="glyphicon glyphicon-arrow-right
"></span> </td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Bank Loan</td>
      <td><span class="glyphicon glyphicon-eye-open
"> </span>&nbsp;<a href="#">View  </a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="#">Fill form</a>&nbsp;<span class="glyphicon glyphicon-arrow-right
"></span></td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Manager Appointment Form</td>
      <td><span class="glyphicon glyphicon-eye-open
"> </span>&nbsp;<a href="#">View  </a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="#">Fill form</a>&nbsp;<span class="glyphicon glyphicon-arrow-right
"></span></td>
      
    </tr>
     
  </tbody>
</table>

@endsection