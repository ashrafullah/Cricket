<!DOCTYPE html>
<!-- <html class="no-js" prefix="og: http://ogp.me/ns#"  lang="en-IN"> -->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Cricket 2018 News</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 

        <meta name="description" content="We craft awesome Bootstrap themes for free and share selected resources for web designer &amp; developer. Download Free HTML themes for Bootstrap" /> 
        <link href="img/logo.png" rel="apple-touch-icon" sizes="96x96">
        <link href="img/logo.png" rel="icon" sizes="96x96" type="image/png">
        <link href="img/logo.png" rel="icon" sizes="32x32" type="image/png">
        <meta content="img/logo_icon_96dp.png" name="msapplication-TileImage">
        
        <meta property="og:url" content="https://www.boostraptheme.com/demo/index.html" />
        <meta property="og:title" content="Free Bootstrap Template" />
        <meta property="og:locale" content="en_IN" /> 
        <meta property="og:site_name" content="Boostraptheme" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="BoostrapTheme" />
        <meta name="twitter:creator" content="BoostrapTheme" />

        <link rel='stylesheet' href="{{asset('frontend/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/app.css')}}">

       <!--  <link rel="stylesheet" href="{{asset('frontend/css/templatemo-style.css')}}">
        <script src="{{asset('frontend/js/jquery.js')}}"></script> -->

    </head>

    <body>

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
                      <a class="nav-link active" href="index.html">Home</a>
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
                      <a class="nav-link" href="register.html">Register</a>
                    </li> 
                  </ul>
                </div>
              </div>
            </nav>





            
            @yield('content')




            <!-- FOOTER 
            =================-->
            <footer class="footer">
              <div class="container">
                <div class="row">
                  <div class="col-md-3">
                    <div class="team">
                      <h5>Teams</h5>
                                <div class="border-bot"></div>
                      <ul>
                        <li><a href="team.html">Chennai Super Kings</a></li>
                        <li><a href="team.html">Delhi Daredevils</a></li>
                        <li><a href="team.html">Kings XI Punjab</a></li>
                        <li><a href="team.html">Kolkata Knight Riders</a></li>
                        <li><a href="team.html">Mumbai Indians</a></li>
                        <li><a href="team.html">Rajasthan Royals</a></li>
                        <li><a href="team.html">Royal Challengers Bangalore</a></li>
                        <li><a href="team.html">Sunrisers Hyderabad</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="team">
                      <h5>Useful Links</h5>
                      <div class="border-bot"></div>
                                <ul>
                        <li><a href="news.html">News</a></li>
                        <li><a href="score.html">Score</a></li>
                        <li><a href="video.html">Video</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="photo.html">Photo</a></li>
                        <li><a href="video.html">Live TV</a></li>
                        <li><a href="#">Stats</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="trend">
                      <h5>Today Trend</h5>
                      <div class="border-bot"></div>
                        <ul>
                          <li><a href="news-desc.html">Cricket Auction 2018</a></li>
                          <li><a href="news-desc.html">Cricket highest paid player 2018</a></li>
                          <li><a href="news-desc.html">The Washington Sundar story</a></li>
                          <li><a href="news-desc.html">Vivo's Rs 2,199 cr investment </a></li>
                          <li><a href="news-desc.html">Krunal Pandya interview</a></li>
                          <li><a href="news-desc.html">Krunal Pandya interview</a></li>
                        </ul>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="company-desc text-center">
                      <a href="index.html"><img src="img/logo.png" alt="" class="img-fluid"></a>
                      <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container-fluid footer-b text-center">
                    <small>Copyrights &copy; 2018 Design by <a href="#">Cricket.com</a></small>
                </div>
            </footer>

        <script src="{{asset('frontend/js/jquery.min.js')}}"></script> 
        <script src="{{asset('frontend/js/popper.min.js')}}"></script>
        <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.easing.min.js')}}"></script>
        <script src="{{asset('frontend/js/app.js')}}"></script> 
    </body>
</html>