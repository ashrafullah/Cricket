@extends('frontend.layouts.app')
@section('content')

<!-- TOPNAVBAR 
            =================-->
            <div class="topmenu">
              <div class="container-fluid">
                <div class="row"  id="page-top">
                  <div class="col-md-6 col-sm-6"> 
                     <div class="info">Cricket 2018 <i class="fa fa-long-arrow-right"></i>  07	April - 27 May</div>
                  </div>   
                  <div class="col-md-6 sec col-sm-6">  
                  	<div class="social"> 
                  		<ul>
                  			<li>Social Corner </li>
                  			<li><a href="#"><i class="fa fa-facebook"></a></i></li>
                  			<li><a href="#"><i class="fa fa-twitter"></a></i></li>
                  			<li><a href="#"><i class="fa fa-google-plus"></a></i></li>
                  		</ul>
                  	</div> 
                  </div>
                </div>
              </div>
            </div>  
        
        <!-- NAVBAR 
            =================-->
            <nav class="navbar navbar-expand-lg navbar-light" id="mainNav" data-toggle="affix">
              <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.html"><img src="img/logo.png" alt="" class="img-fluid"></a>
                <button class="navbar-toggler navbar-toggler-center  ml-auto py-3 my-1 " type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  Menu
                  <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                      <!-- <a class="nav-link active" href="index.html">Home</a> -->
                      <a class="nav-link" href="{{route('frontend_index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="score.html">Score</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="news.html">News</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="video.html">Video</a>
                    </li>  
                    <li class="nav-item">
                      <a class="nav-link" href="team.html">Teams</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="photo.html">Photo</a>
                    </li> 
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Language
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">English</a>
                        <a class="dropdown-item" href="#">বাংলা</a>
                        <!-- <a class="dropdown-item" href="#">தமிழ்</a>
                        <a class="dropdown-item" href="#">తెల్గు</a> -->
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="login.html">Login</a>
                    </li> 
                     <li class="nav-item">
                      <!-- <a class="nav-link" href="register.html">Register</a> -->
                      <a class="nav-link" href="{{route('frontend_register')}}">Register</a>
                    </li> 
                  </ul>
                </div>
              </div>
            </nav> 

        <!-- NEWS
            =================-->
            <section id="news" class="news">
                <div class="container">
                    <div class="row justify-content-center">
<div class="col-md-12">
<div class="card">
<header class="card-header">
  <a href="login.html" class="float-right btn btn-outline-primary mt-1">Log in</a>
  <h4 class="card-title mt-2">Sign up</h4>
</header>
<article class="card-body">
<!-- <form> -->
	 <form action="{{ url('/frontend/register') }}" class="form-image-upload" method="POST" enctype="multipart/form-data">


        {!! csrf_field() !!}


        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        @endif
<div class="form-row">
    <div class="col form-group">
      <label>Name: </label>   
        <input type="text" class="form-control" placeholder="">
    </div> <!-- form-group end.// -->
    <div class="col form-group">
      <label>Father's Name:</label>
        <input type="text" class="form-control" placeholder=" ">
    </div> <!-- form-group end.// -->
  </div> <!-- form-row end.// -->
  
 
  <div class="form-row">
  	 <div class="col form-group">
    <label>Mother's Name:</label>
    <input type="text" class="form-control" placeholder="">
  </div>
    <div class="col form-group">
      <label>Date of Birth: </label>   
        <input type="text" class="form-control" placeholder="">
    </div> <!-- form-group end.// -->
    <div class="col form-group">
      <label>Current Age:</label>
        <input type="text" class="form-control" placeholder=" ">
    </div> <!-- form-group end.// -->
  </div> <!-- form-row end.// -->
  <div class="form-row">
  <div class="col form-group">
    <label>Mobile Number of Player:</label>
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
    </div>
    <select class="select" style="max-width: 120px;">
        <option selected="">+88</option>
        <!-- <option value="1">+88</option> -->
        <!-- <option value="2">+198</option>
        <option value="3">+701</option> -->
    </select>
      <input name="" class="form-control" placeholder="Phone number" type="text">
    </div> <!-- form-group// -->
  </div> <!-- form-group end.// -->
   <div class="col form-group">
    <label>Mobile Number of guardain:</label>
     <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
    </div>
    <select class="select" style="max-width: 120px;">
        <option selected="">+88</option>
        <!-- <option value="1">+88</option> -->
        <!-- <option value="2">+198</option>
        <option value="3">+701</option> -->
    </select>
      <input name="" class="form-control" placeholder="Phone number" type="text">
    </div> <!-- form-group// -->
  </div> <!-- form-group end.// -->
  <div class="col form-group">
    <label>Email address:</label>
    <input type="email" class="form-control" placeholder="">
    <!-- <small class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div> <!-- form-group end.// -->
</div>
   <div class="form-row">
    <div class="col form-group">
      <label>Facebook ID: </label>   
        <input type="text" class="form-control" placeholder="">
    </div> <!-- form-group end.// -->
    <div class="col form-group">
      <label>Skype/Imo/Viber ID:</label>
        <input type="text" class="form-control" placeholder=" ">
    </div> <!-- form-group end.// -->
  </div> <!-- form-row end.// -->

 <div class="form-row">
  <div class="col form-group">
    <label>School/Collage:</label>
    <input type="text" class="form-control" placeholder="">
   
  </div> <!-- form-group end.// -->
  <div class="col form-group">
    <label>Class/Year:</label>
    <input type="text" class="form-control" placeholder="">
    
  </div> <!-- form-group end.// -->
  <div class="col form-group">
    <label>Section:</label>
    <input type="text" class="form-control" placeholder="">
   
  </div> <!-- form-group end.// -->
</div>
	<div class="form-row">
  <div class="form-group">
    <label>Height:</label>
    <input type="text" class="form-control" placeholder="">
    
  </div> <!-- form-group end.// -->
  <div class="col form-group">
    <label>Weigth:</label>
    <input type="text" class="form-control" placeholder="">
    
  </div> <!-- form-group end.// -->
  <div class="col form-group">
    <label>Blood Group:</label>
    <input type="text" class="form-control" placeholder="">
    
  </div> <!-- form-group end.// -->
  <div class="col form-group">
    <label>Group:</label>
    <div class="form-group">
      <label class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" name="gender" value="option1">
      <span class="form-check-label"> A </span>
    </label>
    <label class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" name="gender" value="option2">
      <span class="form-check-label"> B</span>
    </label>
     <label class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" name="gender" value="option2">
      <span class="form-check-label"> C</span>
    </label>
  </div> <!-- form-group end.// -->
  </div> <!-- form-group end.// -->
</div>
  <div class="form-group">
    <label><h5>Present Address:</h5></label>
    
    
  </div> <!-- form-group end.// -->
  <div class="form-row">
  <div class="col form-group">
    <label>Village/Road:</label>
    <input type="text" class="form-control" placeholder="">
    
  </div> <!-- form-group end.// -->
  <div class="col form-group">
    <label>House:</label>
    <input type="text" class="form-control" placeholder="">
    
  </div> <!-- form-group end.// -->
  <div class="col form-group">
    <label>Floor:</label>
    <input type="text" class="form-control" placeholder="">
    
  </div> <!-- form-group end.// -->
  <div class="col form-group">
    <label>P.S:</label>
    <input type="text" class="form-control" placeholder="">
    
  </div> <!-- form-group end.// -->
  <div class="col form-group">
    <label>District:</label>
    <input type="text" class="form-control" placeholder="">
    
  </div> <!-- form-group end.// -->
</div>
  <div class="form-group">
    <label><h5>Parmanent Address:</h5></label>
    
    
  </div> <!-- form-group end.// -->
  <div class="form-row">
  <div class="col form-group">
    <label>Village:</label>
    <input type="text" class="form-control" placeholder="">
   
  </div> <!-- form-group end.// -->
  <div class="col form-group">
    <label>P.O:</label>
    <input type="text" class="form-control" placeholder="">
   
  </div> <!-- form-group end.// --> 
  <div class="col form-group">
    <label>P.S:</label>
    <input type="text" class="form-control" placeholder="">
   
  </div> <!-- form-group end.// -->
  <div class="col form-group">
    <label>District:</label>
    <input type="text" class="form-control" placeholder="">
    
  </div> <!-- form-group end.// -->
</div>
  <div class="form-group">
    <label><h5>Playing Details</h5></label><br>
    <label><h6>Batting Style:</h6></label>
    <div class="form-group">
      <label class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" name="gender" value="option1">
      <span class="form-check-label"> Left Handed Bat </span>
    </label>
    <label class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" name="gender" value="option2">
      <span class="form-check-label"> Right Handed Bat</span>
    </label>
     
  </div> <!-- form-group end.// -->
  </div> <!-- form-group end.// -->
  <div class="form-group">
    
    <label><h6>Bowling Style:</h6></label>
    <div class="form-group">
      <label class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" name="gender" value="option1">
      <span class="form-check-label"> Left Handed Bat </span>
    </label>
    <label class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" name="gender" value="option2">
      <span class="form-check-label"> Right Handed Bat</span>
    </label>
    <label class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" name="gender" value="option2">
      <span class="form-check-label"> Wicket Keeper</span>
    </label>
     
  </div> <!-- form-group end.// -->
  </div> <!-- form-group end.// -->
   <div class="form-group">
    
    <label><h6>Bowling pattern:</h6></label>
    <div class="form-group">
      <label class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" name="gender" value="option1">
      <span class="form-check-label"> Left-arm offbreak </span>
    </label>
    <label class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" name="gender" value="option2">
      <span class="form-check-label"> Left-arm legbreak</span>
    </label>
    <label class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" name="gender" value="option2">
      <span class="form-check-label"> Right-arm offbreak</span>
    </label>
     <label class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" name="gender" value="option2">
      <span class="form-check-label"> Right-arm legbreak</span>
    </label><br>
    <label class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" name="gender" value="option2">
      <span class="form-check-label"> Left-arm Orthodox</span>
    </label>
    <label class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" name="gender" value="option2">
      <span class="form-check-label"> Right-arm Orthodox</span>
    </label>
    <label class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" name="gender" value="option2">
      <span class="form-check-label"> Left-arm Medium fast</span>
    </label>
    <label class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" name="gender" value="option2">
      <span class="form-check-label"> Right-arm Medium fast</span>
    </label>
     
  </div> <!-- form-group end.// -->
  </div> <!-- form-group end.// -->
  <div class="form-group">
    <label><h5>Cricket Background:</h5></label>
    
  </div> <!-- form-group end.// -->
  <div class="form-group">
    <label>Cricket Academy:</label>
    <input type="text" class="form-control" placeholder="">
    
  </div> <!-- form-group end.// -->
  <div class="form-group">
    <label>Cricket Club:</label>
    <input type="text" class="form-control" placeholder="">
    
  </div> <!-- form-group end.// -->
  <div class="form-group">
    <label>Major Team:</label>
    <input type="text" class="form-control" placeholder="">
  </div> <!-- form-group end.// -->
  <div class="form-group">
    <label>Enter your Passport type Photo:</label>
    <input type="file" class="form-control" placeholder="Enter your Passport type Photo">
  </div> <!-- form-group end.// -->
  
 
    <div class="col form-group">
        <button type="submit" class="btn btn-primary btn-block"> Register  </button>
    </div> <!-- form-group// -->      
    <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
</form>
</article> <!-- card-body end .// -->
<div class="border-top card-body text-center">Have an account? <a href="login.html">Log In</a></div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->
</div>
</section>