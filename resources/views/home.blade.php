@extends('layout')

@section('content')
@extends('partials.header')

<div class="col-md-8 col-md-offset-2  dash " style="margin-top: 2%">
<div class="col-md-12">
<p>Latest News<marquee> The forms for all the government forms are available here</marquee></p>
</div>
<div class="col-md-6" style="margin-top: 5%">
<section class="section-white">
  <div style="width: 150%;"">

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/modi.png" alt="...">
          
        </div>
        <div class="item">
          <img src="img/iit.png" alt="...">
          
        </div>
        <div class="item">
          <img src="img/dte.jpg" alt="...">
         
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>

  </div>
</section>

</div>

<div class="col-md-3" style="float: right; margin-top: 5%">
<div style="background-color: #FFB74D; text-align: center; border-top-right-radius: 3px; border-top-left-radius: 3px">
<h4>Form List</h4>
</div><br>
<div>
<ul class="list-group">
<li class="list-group-item"><a href="#">Form for adhaar card</a></li>
<li class="list-group-item"><a href="#">Form for driving license</a></li>
<li class="list-group-item"><a href="#">Form for ration card</a></li>
<li class="list-group-item"><a href="#">Form for gas line</a></li>
<li class="list-group-item"><a href="#">Form for Marriage registration</a></li>
<li class="list-group-item"><a href="#">Form for new telephone line</a></li>
</ul>
</div>
</div>

<div>
</div>
<div class="col-md-12">

    <h2> Our Inspirations </h2>
    <div class="col-md-4">
<img src="img/mii.png" width="100%">
</div>
<div class="col-md-4">
    <img src="img/dbit_logo.png" width="70%">
</div>
<div class="col-md-4">
    <img src="img/digital.jpg" width="100%">
</div>
</div>


@endsection