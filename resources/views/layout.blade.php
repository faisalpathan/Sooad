<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
		    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		    <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
		    <!-- Include Date Range Picker -->

		    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css">
		    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
	<title>Form+</title>
	 <link href="https://fonts.googleapis.com/css?family=Abhaya+Libre" rel="stylesheet">


</head>
<body >

@yield('content')
<script type="text/javascript" src="{{ asset('http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/1.2.1/bootstrap-filestyle.js') }}"></script>
    <script>
										 $(document).ready(function() {
				$('#myTable').DataTable( {
					"paging":   true,
					"ordering": true,
					"info":     true
				} );
			} );
			
            </script>
            
     @yield('script')<!-- This to include your script-->	

</body>
</html>