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
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Aadhar Card</td>
      <td><span class="glyphicon glyphicon-eye-open
"> </span>&nbsp;<a href="#">View  </a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="aadharform">Fill form</a>&nbsp;<span class="glyphicon glyphicon-arrow-right
"></span> </td>
      <td>Pending</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Driving License</td>
      <td><span class="glyphicon glyphicon-eye-open
"> </span>&nbsp;<a href="#">View  </a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="#">Fill form</a>&nbsp;<span class="glyphicon glyphicon-arrow-right
"></span></td>
      <td>Pending</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Marriage Certificate</td>
      <td><span class="glyphicon glyphicon-eye-open
"> </span>&nbsp;<a href="#">View  </a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="#">Fill form</a>&nbsp;<span class="glyphicon glyphicon-arrow-right
"></span></td>
      <td>Pending</td>
    </tr>
     <tr>
      <th scope="row">3</th>
      <td>Telephone connection</td>
      <td><span class="glyphicon glyphicon-eye-open
"> </span>&nbsp;<a href="#">View  </a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="#">Fill form</a>&nbsp;<span class="glyphicon glyphicon-arrow-right
"></span></td>
      <td>Pending</td>
    </tr>
  </tbody>
</table>



@endsection