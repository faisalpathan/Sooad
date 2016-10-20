@extends('layout')

@section('content')

@extends('partials.adminHeader')

<div class="col-md-8 col-md-offset-2 dash" >
	
<div class="col-md-12" style=" border:1px solid; margin-top: 5%">
            <div id="chart-container" class="col-md-12"></div>
          </div>


</div>
<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
<script type="text/javascript" src="js/charts.js"></script>
@endsection