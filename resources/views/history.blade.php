@extends('layout')

@section('content')
@extends('partials.header')
<div class="col-md-12 dash" style="margin-top: 2%">
<div class="container">
  <h2>Username, Your History</h2>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">Aadhar Card Forms </a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        	<table class="table table-striped" id="example" style="margin-top: 3%">
			  <thead>
			    <tr>
			      <th>Aadhar ID</th>
			      <th>Fullname</th>
			      <th>Father Name</th>
			      <th>Mother Name</th>
			      <th>Address</th>
			      <th>Gender</th>
			      <th>Mobile</th>
			      <th>Email</th>
			      <th>DOB</th>
			      <th>Status</th>
			    </tr>
			    </thead>
			    <tr>
			    @foreach($display as $values)
			    <td>{{ $values->aadhar_id }}</td>
                <td>{{ $values->fullname  }}</td>
                <td>{{ $values->fname     }}</td>
                <td>{{ $values->mname     }}</td>
                <td>{{ $values->address   }}</td>
                <td>{{ $values->gender    }}</td>
                <td>{{ $values->mobile    }}</td>
                <td>{{ $values->email     }}</td>
                <td>{{ $values->DOB       }}</td>
                <td>{{ $values->status    }}</td>
			  	</tr>
			  	@endforeach
			</table>
</div>
    </div>
  </div>
</div>

</div>



@endsection