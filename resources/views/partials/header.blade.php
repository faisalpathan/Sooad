<style type="text/css">
		.dash{
			box-shadow: inset 0 1px 0 rgba(255,255,255,.15),0 1px 5px rgba(0,0,0,.075);
		}
</style>
<div class="col-md-8 col-md-offset-2  dash ">
<h1 style="text-align: center"> Formplus </h1>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Form+</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="home">Home <span class="sr-only">(current)</span></a></li>
       
        <li class="dropdown">
          <a href="form" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Forms <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="form">Government Form</a></li>
            <li><a href="formIndus">Industrial Form</a></li>
            
           
          </ul>
        </li>
      
       <li><a href="aboutUs">About Us</a></li>
        <li><a href="contactUs">Contact Us</a></li>
        </ul>

      <ul class="nav navbar-nav navbar-right">
      @if(Auth::check())
          <li><a href="history">User history</a></li>
        <li class="dropdown">
          <a href="createAccount" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">welcome,{{Auth::user()->name}} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{url('edituser')}}">Edit</a></li>
            <li><a href="{{route('logout')}}">Logout</a></li>
          </ul>
        </li>
        @else
        <li><a href="createAccount">Create Account</a></li>
         <li class="dropdown">
          <a href="createAccount" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('login')}}">Admin</a></li>
            <li><a href="{{route('login')}}">User</a></li>
          </ul>
        </li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
