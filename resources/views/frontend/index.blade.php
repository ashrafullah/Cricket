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
                    <div class="row">
                        <div class="col-md-9">

                            <!-- LEFT NEWS 
                                =================-->
                            <div class="left-news">
                                <div class="row top-banner">
                                    <div class="col-md-8">
                                        <div class="left">
                                            <a href="news-desc.html">
                                                <img src="img/banner-top/banner-1.jpg" alt="" class="img-fluid">
                                                <div class="img-caption">
                                                    <p>Trending</p>    
                                                    <h5>Indian Premier Leage 2018</h5>
                                                    <small>23 Dec 2018</small>
                                                </div>
                                            </a> 
                                        </div>
                                    </div> 
                                    <div class="col-md-4">
                                        <div class="right">
                                            <a href="news-desc.html">
                                                <img src="img/banner-top/banner-2.jpg" alt="" class="img-fluid">
                                                <div class="img-caption">
                                                    <p>Trending</p>    
                                                    <h5>Gujarat Lions over Unpaid</h5>
                                                    <small>23 Dec 2018</small>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="right first">
                                            <a href="news-desc.html">
                                                <img src="img/banner-top/banner-3.jpg" alt="" class="img-fluid">
                                                <div class="img-caption">
                                                    <p>Trending</p>    
                                                    <h5>Live update RPS vs RCB</h5>
                                                    <small>23 Dec 2018</small>
                                                </div>
                                            </a> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row second-banner">
                                    <div class="col-md-4 mt-4">
                                        <div class="second-banner-cont">
                                            <a href="news-desc.html">
                                                <img src="img/second-banner/second-banner-1.jpg" alt="" class="img-fluid">
                                                <div class="img-caption">
                                                    <p>Trending</p>    
                                                    <h5>Kohali celebrate gayle style</h5>
                                                    <small>23 Dec 2018</small>
                                                </div>
                                            </a>
                                        </div>  
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <div class="second-banner-cont">
                                            <a href="news-desc.html">
                                                <img src="img/second-banner/second-banner-2.jpg" alt="" class="img-fluid">
                                                <div class="img-caption">
                                                    <p>Trending</p>    
                                                    <h5>Rohit Sharma man of the Match</h5>
                                                    <small>23 Dec 2018</small>
                                                </div>
                                            </a>
                                        </div>  
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <div class="second-banner-cont">
                                            <a href="news-desc.html">
                                                <img src="img/second-banner/second-banner-3.jpg" alt="" class="img-fluid">
                                                <div class="img-caption">
                                                    <p>Trending</p>    
                                                    <h5>IPL Final, virat half century</h5>
                                                    <small>23 Dec 2018</small>
                                                </div>
                                            </a>
                                        </div>  
                                    </div>
                                </div>
                                <div class="row banner-slider mt-4">
                                    <div class="col-md-12">
                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
                                          <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                          </ol>
                                          <div class="carousel-inner">
                                            <div class="carousel-item active">
                                              <a href="news-desc.html">
                                                  <img class="d-block w-100" src="img/banner-slider/banner-slider-1.jpg" alt="First slide">
                                                  <div class="carousel-caption d-none d-md-block">
                                                    <h5 class="pb-4">Cricket 2017 Guajarat Lions win Celebration</h5>
                                                  </div>
                                              </a>
                                            </div>
                                            <div class="carousel-item">
                                              <a href="news-desc.html">
                                                  <img class="d-block w-100" src="img/banner-slider/banner-slider-2.jpg" alt="Second slide">
                                                  <div class="carousel-caption d-none d-md-block">
                                                    <h5 class="pb-4">Indian Premier Leage 2018 India Khelega</h5>
                                                  </div>
                                              </a>
                                            </div>
                                            <div class="carousel-item">
                                              <a href="news-desc.html">
                                                  <img class="d-block w-100" src="img/banner-slider/banner-slider-3.jpg" alt="Third slide">
                                                  <div class="carousel-caption d-none d-md-block">
                                                    <h5 class="pb-4">Indian Premier Leage 2018 India Khelega</h5>
                                                  </div>
                                              </a>
                                            </div>
                                            <div class="carousel-item">
                                              <a href="news-desc.html">
                                                  <img class="d-block w-100" src="img/banner-slider/banner-slider-4.jpg" alt="Third slide">
                                                  <div class="carousel-caption d-none d-md-block">
                                                    <h5 class="pb-4">Indian Premier Leage 2018 India Khelega</h5>
                                                  </div>
                                              </a>
                                            </div>
                                          </div>
                                          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                          </a>
                                          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                          </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row news-list">
                                    <div id="on-items-bucket" class="col-md-12 mt-4"></div>
                                    <div id="off-items-bucket" class="col-md-12 mt-4">
                                        <div class="news-list-cont pb-1">
                                            <img src="img/news/news-1.jpg" alt="" class="img-fluid">
                                            <a href="news-desc.html"><h5>With 20 needed to win off the last two overs for Knight Riders, Super Kings still stood a chance.</h5></a>
                                            <p class="desc">However, Hilfenhaus bowled an above waist-high full toss the next ball, yielding three runs and an extra delivery that was hit for four by Shakib Al Hasan. "In the 19th over, there was a big turning point.</p>
                                            <p>01 December 2018 <span class="ml-5"><i class="fa fa-tag"></i> IPL 20-20</span></p>
                                        </div>
                                        <hr>
                                        <div class="news-list-cont py-1">
                                            <img src="img/news/news-2.jpg" alt="" class="img-fluid">
                                            <a href="news-desc.html"><h5>Major finals tend to be flat and forgettable because the occasion ends up too big.</h5></a>
                                            <p class="desc">Over seven weeks, the IPL's presence spread through its audience like the heat of a genuine Indian summer. An annual league that takes far longer than the football, cricket and rugby world cups.</p>
                                            <p>02 December 2018 <span class="ml-5"><i class="fa fa-tag"></i> IPL 20-20</span></p>
                                        </div> 
                                        <hr>
                                        <div class="news-list-cont py-1">
                                            <img src="img/news/news-3.jpg" alt="" class="img-fluid">
                                            <a href="news-desc.html"><h5>Runs in Cricket guarantee India berth  his form into the upcoming domestic season time</h5></a>
                                            <p class="desc">Looking leaner and fitter, the wicket-keeper batsman asserted that a good preseason is crucial for him to remain in shape for the rest of the season. "I had struggled with my fitness last season.</p>
                                            <p>12 December 2018 <span class="ml-5"><i class="fa fa-tag"></i> IPL 20-20</span></p>
                                        </div> 
                                        <hr>
                                        <div class="news-list-cont py-1">
                                            <img src="img/news/news-4.jpg" alt="" class="img-fluid">
                                            <a href="news-desc.html"><h5>Cricket 2017: Karun Nair stars as Daredevils beat Sunrisers by six wickets</h5></a>
                                            <p class="desc">Delhi Daredevils defeated Sunrisers Hyderabad by six wickets in their crucial Indian Premier League match here on Friday. Opting to bowl, Daredevils restricted Sunrisers Hyderabad to 158 for seven.</p>
                                            <p>16 December 2018 <span class="ml-5"><i class="fa fa-tag"></i> IPL 20-20</span></p>
                                        </div> 
                                        <hr>
                                        <div class="news-list-cont py-1">
                                            <img src="img/news/news-5.jpg" alt="" class="img-fluid">
                                            <a href="news-desc.html"><h5>Their performance against Royal Challengers Bangalore — who with their power-packed</h5></a>
                                            <p class="desc">Irrespective of whether the curators prepare featherbeds or not, RCB has a batting unit that can terrorise most bowling combinations. The form they have been in is an even more dangerous portent.</p>
                                            <p>12 December 2018 <span class="ml-5"><i class="fa fa-tag"></i> IPL 20-20</span></p>
                                        </div> 
                                        <hr>
                                        <div class="news-list-cont py-1">
                                            <img src="img/news/news-6.jpg" alt="" class="img-fluid">
                                            <a href="news-desc.html"><h5>Fitness remains his priority, Samson has also changed his approach towards batting</h5></a>
                                            <p class="desc">It limited my approach as I was thinking a lot and making things complicated. So I got frustrated. At the start of IPL 10, I worked with (Daredevils coach) Rahul Dravid and things started to fall in place.</p>
                                            <p>15 December 2018 <span class="ml-5"><i class="fa fa-tag"></i> IPL 20-20</span></p>
                                        </div> 
                                        <hr>
                                        <div class="news-list-cont py-1">
                                            <img src="img/news/news-7.jpg" alt="" class="img-fluid">
                                            <a href="news-desc.html"><h5>IPL 2016, RCB Vs DD Playing 11: List of today's Probable XIs for RCB vs Delhi Daredevils</h5></a>
                                            <p class="desc">Things didn’t start well for DD but after winning the last match confidence of Delhi Daredevils will be high and they will try to play bold tonight when they will face RCB.</p>
                                            <p>12 December 2018 <span class="ml-5"><i class="fa fa-tag"></i> IPL 20-20</span></p>
                                        </div> 
                                        <hr>
                                        <div class="news-list-cont py-1">
                                            <img src="img/news/news-8.jpg" alt="" class="img-fluid">
                                            <a href="news-desc.html"><h5>Tens of thousands of people turned out on the streets of Kolkata on Tuesday to receive the KKR team</h5></a>
                                            <p class="desc">The political leadership, top actors and musicians, and the local cricket establishment - including former ICC president Jagmohan Dalmiya - joined the team in the celebrations.</p>
                                            <p>12 December 2018 <span class="ml-5"><i class="fa fa-tag"></i> IPL 20-20</span></p>
                                        </div> 
                                        <hr>
                                        <div class="news-list-cont py-1">
                                            <img src="img/news/news-9.jpg" alt="" class="img-fluid">
                                            <a href="news-desc.html"><h5>Kings XI Punjab pooled in Rs 5.50 crore for little-known Australian all-rounder.</h5></a>
                                            <p class="desc">At 26, with sparse international exposure, he wasn’t exactly an investment for the future either. In his first three IPL outings, he hardly did anything remotely suggestive of his value.</p>
                                            <p>12 December 2018 <span class="ml-5"><i class="fa fa-tag"></i> IPL 20-20</span></p>
                                        </div>
                                        <hr>
                                        <div class="news-list-cont py-1">
                                            <img src="img/news/news-10.jpg" alt="" class="img-fluid">
                                            <a href="news-desc.html"><h5>Gujarat Lions' three-match winning streak came to an end yesterday after losing.</h5></a>
                                            <p class="desc">Gujarat Lions batting so far has revolved around explosive openers Brendon McCullum and Dwayne Smith. When the duo clicked, the Lions have managed to achieve scores around 200.</p>
                                            <p>12 December 2018 <span class="ml-5"><i class="fa fa-tag"></i> Cricket 20-20</span></p>
                                        </div>  
                                    </div>
                                    <div class="col-md-12 text-center my-4">
                                      <button id="load-more" class="btn-general btn-white" role="button">view more</button>
                                    </div>
                                </div> 
                            </div>                               
                        </div>
                        <div class="col-md-3">
                            <!-- RIGHT NEWS 
                                =================-->
                            <div class="right-news">
                                <div class="live-score">
                                    <div class="card text-center">
                                      <div class="card-header">
                                        Live Score
                                      </div>
                                      <div class="card-body"> 
                                        <ul>
                                            <li><img src="img/team-logo/mumbai_indians_logo.png" alt="" class="img-fluid"><p>163/07 20ov.</p></li>
                                            <li>vs</li>
                                            <li><img src="img/team-logo/chennai_super_kings_logo.png" alt="" class="img-fluid"><p>123/05 14.02ov.</p></li>
                                        </ul> 
                                      </div>
                                      <div class="card-footer text-muted">
                                        07 April 2018
                                      </div>
                                    </div>
                                    <div class="card text-center mt-3">
                                      <div class="card-header">
                                        Live Score
                                      </div>
                                      <div class="card-body"> 
                                        <ul>
                                            <li><img src="img/team-logo/delhi_daredevils_logo.png" alt="" class="img-fluid"><p>163/07 20ov.</p></li>
                                            <li>vs</li>
                                            <li><img src="img/team-logo/kings_XI_punjab_logo.png" alt="" class="img-fluid"><p>123/05 14.02ov.</p></li>
                                        </ul> 
                                      </div>
                                      <div class="card-footer text-muted">
                                        08 April 2018
                                      </div>
                                    </div>
                                </div> 
                                <div class="team-point">
                                    <div class="card text-center mt-3">
                                      <div class="card-header">
                                        Team Points
                                      </div>
                                      <div class="card-body">
                                      <table class="table table-hover">
                                        <thead  class="thead-light">
                                          <tr>
                                            <th>Top</th>
                                            <th>Team</th>
                                            <th>Pts</th>
                                            <th>RR</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>
                                            <td><img src="img/team-logo/chennai_super_kings_logo.png" alt="" class="img-fluid"> <b>CSK</b></td>
                                            <td>13</td>
                                            <td>+0.832</td>
                                          </tr> 
                                          <tr>
                                            <td>2</td>
                                            <td><img src="img/team-logo/mumbai_indians_logo.png" alt="" class="img-fluid"> <b>MI</b></td>
                                            <td>13</td>
                                            <td>+0.832</td>
                                          </tr> 
                                          <tr>
                                            <td>3</td>
                                            <td><img src="img/team-logo/kolkata_night_logo.png" alt="" class="img-fluid"> <b>KKR</b></td>
                                            <td>13</td>
                                            <td>+0.832</td>
                                          </tr> 
                                          <tr>
                                            <td>4</td>
                                            <td><img src="img/team-logo/sunriser_logo.png" alt="" class="img-fluid"> <b>SRH</b></td>
                                            <td>13</td>
                                            <td>+0.832</td>
                                          </tr> 
                                          <tr>
                                            <td>5</td>
                                            <td><img src="img/team-logo/kings_XI_punjab_logo.png" alt="" class="img-fluid"> <b>KXIP</b></td>
                                            <td>13</td>
                                            <td>+0.832</td>
                                          </tr> 
                                          <tr>
                                            <td>6</td>
                                            <td><img src="img/team-logo/delhi_daredevils_logo.png" alt="" class="img-fluid"> <b>DD</b></td>
                                            <td>13</td>
                                            <td>+0.832</td>
                                          </tr>
                                          <tr>
                                            <td>7</td>
                                            <td><img src="img/team-logo/royal_chalanger_logo.png" alt="" class="img-fluid"> <b>RCB</b></td>
                                            <td>13</td>
                                            <td>+0.832</td>
                                          </tr>
                                          <tr>
                                            <td>8</td>
                                            <td><img src="img/team-logo/rajasthan_royals_logo.png" alt="" class="img-fluid"> <b>RR</b></td>
                                            <td>13</td>
                                            <td>+0.832</td>
                                          </tr> 
                                        </tbody>
                                      </table> 
                                      </div> 
                                    </div>
                                </div>
                                <div class="latest-news"> 
                                    <div class="card text-center mt-3">
                                      <div class="card-header">
                                        Latest News
                                      </div>
                                      <div class="card-body">
                                        <div class="latest-news-cont pb-1">
                                            <img src="img/news/news-10.jpg" alt="" class="img-fluid">
                                            <a href="news-desc.html">
                                                <h5>Fitness remains his priority, Samson has also changed</h5>
                                            </a>
                                        </div>
                                        <hr>
                                        <div class="latest-news-cont pb-1">
                                            <img src="img/news/news-9.jpg" alt="" class="img-fluid">
                                            <a href="news-desc.html">
                                                <h5>Kings XI Punjab pooled in Rs 5.50 crore for little-known Australian</h5>
                                            </a>
                                        </div>
                                        <hr>
                                        <div class="latest-news-cont pb-1">
                                            <img src="img/news/news-8.jpg" alt="" class="img-fluid">
                                            <a href="news-desc.html">
                                                <h5>Tens of thousands of people turned out on the streets of Kolkata</h5>
                                            </a>
                                        </div>
                                        <hr>
                                        <div class="latest-news-cont pb-1">
                                            <img src="img/news/news-7.jpg" alt="" class="img-fluid">
                                            <a href="news-desc.html">
                                                <h5>Their performance against Royal Challengers Bangalore</h5>
                                            </a>
                                        </div>
                                        <hr>
                                        <div class="latest-news-cont pb-4">
                                            <img src="img/news/news-1.jpg" alt="" class="img-fluid">
                                            <a href="news-desc.html">
                                                <h5>Cricket 2017: Karun Nair stars as Daredevils beat Sunrisers</h5>
                                            </a>
                                        </div>
                                      </div> 
                                    </div>
                                </div> 
                                <div class="top-player"> 
                                    <div class="card text-center mt-3">
                                      <div class="card-header">
                                        Cricket-2017 Top Player
                                      </div>
                                      <div class="card-body"> 
                                        <div class="col-md-12">
                                          <div class="run top-head">
                                            <p>Runs</p>
                                            <p>David Warner</p>
                                            <p>600</p>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="top-head">
                                            <p>Wickets</p>
                                            <p>Bhuvneshwar</p>
                                            <p>26</p>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="top-head">
                                            <p>Sixes</p>
                                            <p>Rishabh Pant</p>
                                            <p>9</p>
                                          </div>
                                        </div> 
                                      </div> 
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </section>