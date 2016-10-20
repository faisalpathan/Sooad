@extends('layout')

@section('content')
@extends('partials.header')
<style>
      #map-container { height: 300px }
    </style>
    <div class="col-md-8 col-md-offset-2 dash" style="margin-top: 3%">
<div id="map-container" class="col-md-6" style="margin-top: 3%" ></div>
<div class="col-md-6" style="float: right">
<h1>Contact Us:</h1>
<h3> Don Bosco Institute Of Technology</h3>
<h4><span class="glyphicon glyphicon-map-marker">Premier Automobiles Road,Near Vidyavihar Railway Station,Kurla(w),Mumbai,Maharashtra 400070</span></h4>
<h4><span class="glyphicon glyphicon-globe" style="margin-top: 2%">dbit.in</span></h4>
<h4><span class="glyphicon glyphicon-phone" style="margin-top: 2%">022 2504 2018</span></h4>
</div>
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script>	
 
      function init_map() {
		var var_location = new google.maps.LatLng(19.081638, 72.888881);
 
        var var_mapoptions = {
          center: var_location,
          zoom: 16
        };
 
		var var_marker = new google.maps.Marker({
			position: var_location,
			map: var_map,
			title:"DBIT"});
 
        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);
 
		var_marker.setMap(var_map);	
 
      }
 
      google.maps.event.addDomListener(window, 'load', init_map);
 
    </script>



@endsection