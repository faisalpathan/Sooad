@extends('layout')

@section('content')
@extends('partials.header')

<div class="col-md-8 col-md-offset-2 dash" style="margin-top: 3%;">
<div class="container">
  <div class="row">
    <div class="span4 offset4">
      <div class="tabbable">
        <div class="text-center">
          <ul class="nav nav-pills centered-pills">
            <li class="active"><a href="#tab2" data-toggle="tab">Government Sector</a></li>
            <li><a href="#tab3" data-toggle="tab">Private Sector</a></li>
          </ul>
        </div>
        <div class="tab-content">
          <div class="tab-pane active" id="tab2">
            <p>I'm in Section 2.</p>
          </div>
          <div class="tab-pane" id="tab3">
            <p>I'm in Section 3.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<table class="table table-striped" style="margin-top: 3%">
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
      <td>Aadhar Card</td>
      <td><span class="glyphicon glyphicon-eye-open
"> </span>&nbsp;<a href="#">View  </a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="aadharform">Fill form</a>&nbsp;<span class="glyphicon glyphicon-arrow-right
"></span> </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Driving License</td>
      <td><span class="glyphicon glyphicon-eye-open
"> </span>&nbsp;<a href="#">View  </a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="#">Fill form</a>&nbsp;<span class="glyphicon glyphicon-arrow-right
"></span></td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Marriage Certificate</td>
      <td><span class="glyphicon glyphicon-eye-open
"> </span>&nbsp;<a href="#">View  </a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="#">Fill form</a>&nbsp;<span class="glyphicon glyphicon-arrow-right
"></span></td>
      
    </tr>
     <tr>
      <th scope="row">3</th>
      <td>Telephone connection</td>
      <td><span class="glyphicon glyphicon-eye-open
"> </span>&nbsp;<a href="#">View  </a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="#">Fill form</a>&nbsp;<span class="glyphicon glyphicon-arrow-right
"></span></td>
      
    </tr>
  </tbody>
</table>



@endsection