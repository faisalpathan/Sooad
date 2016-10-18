<style type="text/css">
		.dash{
			box-shadow: inset 0 1px 0 rgba(255,255,255,.15),0 1px 5px rgba(0,0,0,.075);
		}
</style>
<div class="col-md-8 col-md-offset-2  dash ">
<h1 style="text-align: center"> Formplus </h1>
<ul class="nav nav-pills navbar-static-top">
  <li role="presentation"><a href="home">Home</a></li>
  <li role="presentation"><a href="form">Forms</a></li>
  <li role="presentation"><a href="#">Collaborators</a></li>
  <li role="presentation"><a href="aboutUs">About Us</a></li>
  <li role="presentation"><a href="contactUs">Contact Us</a></li>
<ul class="nav nav-pills navbar-right">
@if(Auth::check())
    <li class="dropdown">
              <a href="#" style=";padding:15px;" class=" hvr-bounce-to-bottom dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i></i>welcome,{{Auth::user()->name}}
          <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{url('edituser')}}">Edit</a></li>
                <li><a href="{{route('logout')}}">Logout</a></li>
              </ul>
    </li>  
    @else
      <li class="dropdown">
                    <a href="#" style=";padding:15px;" class=" hvr-bounce-to-bottom dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i></i>Login
                <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{route('login')}}">Admin</a></li>
                      <li><a href="{{route('login')}}">User</a></li>
                    </ul>
          </li>
          <li role="presentation"><a href="createAccount"  style=";padding:15px;" >Create Account</a></li>
        @endif 
</ul>
</div>
</div>
