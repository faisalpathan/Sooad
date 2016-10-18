@extends('layout')

@section('content')
@extends('partials.header')
<div class="col-md-8 col-md-offset-2  dash " style="margin-top: 2%">
<div class="col-md-12">
<p>Latest News<marquee> The forms for all the government forms are available here</marquee></p>
</div>
<div class="col-md-4" style="margin-top: 5%">
<div class="row">
                            <div  id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="0">
                                        <img src=""></div>

                                        <div class="item" data-slide-number="1">
                                        <img src=""></div>

                                        <div class="item" data-slide-number="2">
                                        <img src=""></div>

                                        <div class="item" data-slide-number="3">
                                        <img src=""></div>

                                       
                                    </div><!-- Carousel nav -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>                                       
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>                                       
                                    </a>                                
                                    </div>
                            </div>
</div>
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
</div>


@endsection