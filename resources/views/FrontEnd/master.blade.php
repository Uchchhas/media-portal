<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <!-- Stylesheets -->
    <link href="{{ asset('FrontEnd/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('FrontEnd/css/responsive.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('FrontEnd/images/favicon.ico') }}" type="image/x-icon">

  </head>

<!-- page wrapper -->
<body class="boxed_wrapper">

  <!-- .preloader -->
  <div class="preloader"></div>
  <!-- /.preloader -->


    <!-- main-header -->
    <header class="main-header">


        <div class="logo-area">
            <div class="container">
                <div class="logo-box">
                    <a href="{{ url('/') }}"><figure><img src="{{asset('FrontEnd/images/logo/logo1.png')}}" alt=""></figure></a>
                </div>
            </div>
        </div>


        <!-- main-menu -->
        <div class="theme_menu menu-area stricky centred">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 menu-column">
                        <div class="menu-area">
                            <nav class="main-menu border-top">
                                <div class="navbar-header">
                                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                  <ul class="navigation clearfix">
                                      <li class="current">
                                        <a href="#">Home</a>
                                      </li>
                                      <li>
                                        <a href="#">About</a>
                                      </li>
                                      <li class="dropdown"><a href="#">Features</a>
                                        <ul class="submenu">
                                          <li>
                                            <a href="#">Standard Post</a>
                                          </li>
                                          <li>
                                            <a href="#">Slider Post</a>
                                          </li>
                                          <li>
                                            <a href="#">Gallery Post</a>
                                          </li>
                                          <li>
                                            <a href="#">Video Post</a>
                                          </li>
                                          <li>
                                            <a href="#">Audio Post</a>
                                          </li>
                                          <li>
                                            <a href="#">Shop</a>
                                          </li>
                                          <li>
                                            <a href="#">Single Shop</a>
                                          </li>
                                          <li>
                                            <a href="#">Cart Page</a>
                                          </li>
                                          <li>
                                            <a href="#">Checkout Page</a>
                                          </li>
                                        </ul>
                                      </li>
                                      <li>
                                        <a href="travel.html">Travel</a>
                                      </li>
                                      <li>
                                        <a href="lifestyle.html">Lifestyle</a>
                                      </li>
                                      <li>
                                        <a href="music.html">Music</a>
                                      </li>
                                      <li>
                                        <a href="contact.html">contact</a>
                                      </li>
                                  </ul>
                                  <!-- mobile menu -->
                                  <ul class="mobile-menu clearfix">
                                    <li class="current dropdown"><a href="#">Home</a>
                                      <ul>
                                        <li><a href="index.html">Homepage Larg Grid</a></li>
                                        <li><a href="index2.html">Homepage Grid</a></li>
                                        <li><a href="index3.html">Homepage List</a></li>
                                        <li><a href="index4.html">Homepage Masonry</a></li>
                                        <li><a href="index5.html">Homepage Classic</a></li>
                                        <li><a href="index6.html">Homepage Zigzag</a></li>
                                      </ul>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li class="dropdown"><a href="#">Features</a>
                                        <ul>
                                            <li><a href="post1.html">Standard Post</a></li>
                                            <li><a href="post2.html">Slider Post</a></li>
                                            <li><a href="post3.html">Gallery Post</a></li>
                                            <li><a href="video-post.html">Video Post</a></li>
                                            <li><a href="audio-post.html">Audio Post</a></li>
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="shop-single.html">Single Shop</a></li>
                                            <li><a href="cart.html">Cart Page</a></li>
                                            <li><a href="checkout.html">Checkout Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="travel.html">Travel</a></li>
                                    <li><a href="lifestyle.html">Lifestyle</a></li>
                                    <li><a href="music.html">Music</a></li>
                                    <li><a href="contact.html">contact</a></li>
                                  </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
           </div>
        </div><!-- end main-menu -->
    </header>
    <!-- end main-header -->


    <!-- Hidden Bar -->
    <section class="hidden-bar right-align">

        <div class="hidden-bar-closer">
            <button class="btn"><i class="fa fa-close"></i></button>
        </div>
        <div class="hidden-bar-wrapper">

            <!-- .logo -->
            <div class="logo-box centerd">
                <a href="index.html"></a>
            </div>
            <div class="about-hidden-box">
                <div class="title"><h4>About Us</h4></div>
                <div class="text">We must explain to you how all seds this mistakens idea off denouncing pleasures and praising pain was born and I will give you a completed accounts off the system and expound the actually teaching of the great explorer ut of the truth, the master builder of human happiness.</div>
                <a href="#" class="btn-one btn-bg">More About</a>
            </div>
            <div class="contact-hidden-box">
                <div class="title"><h4>Contact Info</h4></div>
                <div class="single-item">
                    <div class="icon-box"><i class="fa fa-map-marker"></i></div>
                    <div class="text">68 Smithfield Avenue,<br /> Broadwalk</div>
                </div>
                <div class="single-item">
                    <div class="icon-box"><i class="fa fa-phone"></i></div>
                    <div class="text">+ (01) 735 264 9870</div>
                </div>
                <div class="single-item">
                    <div class="icon-box"><i class="fa fa-envelope"></i></div>
                    <div class="text">belfast@gmail.com</div>
                </div>
            </div>

        </div>
    </section><!-- / Hidden Bar end -->


    <!-- slider-style-four -->
    <section class="slider-style-four">
        <div class="container-fluid">
            <div class="two-column-carousel nav-style-one owl-dots-none">
                <div class="single-item">
                    <figure class="img-box"><img src="{{asset('FrontEnd/images/home/14.jpg')}}" alt=""></figure>
                    <div class="inner-box">
                        <div class="content blog-content-one">
                            <div class="meta-text"><a href="#">Fashion</a></div>
                            <div class="title"><h3><a href="post2.html">Took a whole lotta trying just to get up</a></h3></div>
                            <div class="date"><span>On</span> JANUARY 07, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL JOHN HEYMAN</div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <figure class="img-box"><img src="{{asset('FrontEnd/images/home/15.jpg')}}" alt=""></figure>
                    <div class="inner-box">
                        <div class="content blog-content-one">
                            <div class="meta-text"><a href="#">Fashion</a></div>
                            <div class="title"><h3><a href="post2.html">Star the professor and mary on gilligans</a></h3></div>
                            <div class="date"><span>On</span>JANUARY 19, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL JOHN HEYMAN</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider-style-four end -->



    <!-- slider content -->
    <section class="slider-content centred sp-one">
        <div class="container">
            <div class="four-column-carousel owl-dots-none owl-nav">
                <div class="carousel-style-one">
                    <div class="img-box"><a href="post2.html"><figure><img src="{{asset('FrontEnd/images/home/1.jpg')}}" alt=""></figure></a></div>
                    <div class="lower-content">
                        <div class="meta-text"><a href="#">Travel</a></div>
                        <div class="title"><h6><a href="post2.html">Love Boat soon will be making another run</a></h6></div>
                    </div>
                </div>
                <div class="carousel-style-one">
                    <div class="img-box"><a href="post2.html"><figure><img src="{{asset('FrontEnd/images/home/2.jpg')}}" alt=""></figure></a></div>
                    <div class="lower-content">
                        <div class="meta-text"><a href="#">Lifestyle</a></div>
                        <div class="title"><h6><a href="post2.html">Call him flipper flipper faster than lightning</a></h6></div>
                    </div>
                </div>
                <div class="carousel-style-one">
                    <div class="img-box"><a href="post2.html"><figure><img src="{{asset('FrontEnd/images/home/3.jpg')}}" alt=""></figure></a></div>
                    <div class="lower-content">
                        <div class="meta-text"><a href="#">Fashion</a></div>
                        <div class="title"><h6><a href="post2.html">East side to a deluxe apartment in the sky</a></h6></div>
                    </div>
                </div>
                <div class="carousel-style-one">
                    <div class="img-box"><a href="post2.html"><figure><img src="{{asset('FrontEnd/images/home/4.jpg')}}" alt=""></figure></a></div>
                    <div class="lower-content">
                        <div class="meta-text"><a href="#">Music</a></div>
                        <div class="title"><h6><a href="post2.html">A maximum security stockade to Los Angeles</a></h6></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider content -->


    <!-- blog side -->
    <section class="blog-side blog-style-one sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12 content-side">
                    <div class="blog-details-content">
                        <div class="content-box">
                            <div class="video-gallery">
                                <img src="{{asset('FrontEnd/images/home/video-gallery.jpg')}}" alt="Awesome Video Gallery">
                                <div class="overlay-gallery">
                                    <div class="icon-holder">
                                        <div class="icon">
                                            <a class="html5lightbox" title="Garden Video" href="https://youtu.be/yVb0mfmMV9w"><i class="fa fa-play"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-content-one sp-two">
                                <div class="top-content centred">
                                    <div class="meta-text"><a href="#">Travel</a></div>
                                    <div class="title"><h3><a href="video-post.html">Flying away on a wing and a prayer</a></h3></div>
                                    <div class="date"><span>On</span> JANUARY 10, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL JOHN HEYMAN</div>
                                </div>
                                <div class="text">
                                    <p>The need no welfare states starship enterprise the Brady Bunch that's the way we all be came the Brady Bunch these days are all Happy and Free these days you wanna be where everybody knows your name fish do not fry in the kitchen and beans do not burn on the grill took a whole lotta trying just to get up that hill.</p>

                                    <p>There are all Happy and Free these days you wanna be where everybody knows your name fish do not fry in the kitchen and beans do not burn on the grill took a whole lotta trying just to get up that hill.</p>
                                </div>
                                <ul class="meta-list centred">
                                    <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 37</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 20</a></li>
                                    <li><a href="video-post.html"><i class="flaticon-substract"></i> &nbsp; CONTINUE READING &nbsp; <i class="flaticon-substract"></i></a></li>
                                    <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="{{asset('FrontEnd/images/home/5.jpg')}}" alt=""></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="post1.html"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-three">
                                        <div class="top-content centred">
                                            <div class="meta-text"><a href="#">FASHION</a></div>
                                            <div class="title"><h4><a href="post1.html">Most of this beautiful day</a></h4></div>
                                            <div class="date"><span>On</span> JANUARY 15, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL JOHN HEYMAN</div>
                                        </div>
                                        <div class="text">
                                            <p>The need no welfare states starship enterprise theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Happy and Free these days a fish do not fry in the kitchen and beans...</p>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 19</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 13</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="{{asset('FrontEnd/images/home/6.jpg')}}" alt=""></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="post1.html"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-three">
                                        <div class="top-content centred">
                                            <div class="meta-text"><a href="#">MUSIC</a></div>
                                            <div class="title"><h4><a href="post1.html">Scream the addams family</a></h4></div>
                                            <div class="date"><span>On</span> JANUARY 26, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL JOHN HEYMAN</div>
                                        </div>
                                        <div class="text">
                                            <p>The need no welfare states starship enterprise theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Happy and Free these days a fish do not fry in the kitchen and beans...</p>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 19</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 13</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content-three sp-four">
                            <div class="single-item">
                                <div class="single-item-overlay">
                                    <div class="img-box">
                                        <img src="{{asset('FrontEnd/images/home/7.jpg')}}" alt="">
                                        <div class="overlay">
                                            <div class="inner-box">
                                                <div class="content blog-content-one">
                                                    <div class="meta-text"><a href="#">FASHION</a></div>
                                                    <div class="title"><h3><a href="post1.html">Flying away on a wing and a prayer</a></h3></div>
                                                    <div class="date"><span>On</span> February 10, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL JOHN HEYMAN</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="{{asset('FrontEnd/images/home/8.jpg')}}" alt=""></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="post1.html"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-three">
                                        <div class="top-content centred">
                                            <div class="meta-text"><a href="#">LIFESTYLE</a></div>
                                            <div class="title"><h4><a href="post1.html">Five passengers set sail that day</a></h4></div>
                                            <div class="date"><span>On</span> March 12, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL JOHN HEYMAN</div>
                                        </div>
                                        <div class="text">
                                            <p>The need no welfare states starship enterprise theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Happy and Free these days a fish do not fry in the kitchen and beans...</p>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 19</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 13</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="{{asset('FrontEnd/images/home/9.jpg')}}" alt=""></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="post1.html"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-three">
                                        <div class="top-content centred">
                                            <div class="meta-text"><a href="#">TRAVEL</a></div>
                                            <div class="title"><h4><a href="post1.html">Smile from seven stranded</a></h4></div>
                                            <div class="date"><span>On</span> March 23, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL JOHN HEYMAN</div>
                                        </div>
                                        <div class="text">
                                            <p>The need no welfare states starship enterprise theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Happy and Free these days a fish do not fry in the kitchen and beans...</p>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 19</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 13</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-content-box">
                            <div class="blog-content-four">
                                <div class="single-item-carousel nav-style-one dots-style-one">
                                    <div class="carousel-content">
                                        <figure><img src="{{asset('FrontEnd/images/home/10.jpg')}}" alt=""></figure>
                                    </div>
                                    <div class="carousel-content">
                                        <figure><img src="{{asset('FrontEnd/images/home/10.jpg')}}" alt=""></figure>
                                    </div>
                                    <div class="carousel-content">
                                        <figure><img src="{{asset('FrontEnd/images/home/10.jpg')}}" alt=""></figure>
                                    </div>
                                    <div class="carousel-content">
                                        <figure><img src="{{asset('FrontEnd/images/home/10.jpg')}}" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-content-one sp-two">
                                <div class="top-content centred">
                                    <div class="meta-text"><a href="#">Travel</a></div>
                                    <div class="title"><h3><a href="post2.html">Flying away on a wing and a prayer</a></h3></div>
                                    <div class="date"><span>On</span> April 01, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL JOHN HEYMAN</div>
                                </div>
                                <div class="text">
                                    <p>The need no welfare states starship enterprise the Brady Bunch that's the way we all be came the Brady Bunch these days are all Happy and Free these days you wanna be where everybody knows your name fish do not fry in the kitchen and beans do not burn on the grill took a whole lotta trying just to get up all Happy and Free these days you wanna be where everybody knows your name fish do not fry in the kitchen and beans do not burn on the grill took a whole lotta trying just to get up that hill.</p>

                                    <p>There are all Happy and Free these days you wanna be where everybody knows your name fish do not fry in the kitchen and beans do not burn on the grill took a whole lotta trying just to get up that hill.</p>
                                </div>
                                <ul class="meta-list centred">
                                    <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 37</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 20</a></li>
                                    <li><a href="post2.html"><i class="flaticon-substract"></i> &nbsp; CONTINUE READING &nbsp; <i class="flaticon-substract"></i></a></li>
                                    <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="audio-content-box">
                            <div class="blog-content-five">
                                <div class="audio-gallery">
                                    <figure><img src="{{asset('FrontEnd/images/home/11.jpg')}}" alt=""></figure>
                                    <div class="audio-content">
                                        <div class="audio-content">
                                            <audio class="audio-bg"
                                                id="t-rex-roar"
                                                controls
                                                src="http://soundbible.com/mp3/Tyrannosaurus Rex Roar-SoundBible.com-807702404.mp3">
                                                Your browser does not support the <code>audio</code> element.
                                            </audio>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-content-one sp-two">
                                <div class="top-content centred">
                                    <div class="meta-text"><a href="#">FASHION</a></div>
                                    <div class="title"><h3><a href="music.html">The system like a true modern day</a></h3></div>
                                    <div class="date"><span>On</span> April 19, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL JOHN HEYMAN</div>
                                </div>
                                <div class="text">
                                    <p>The need no welfare states starship enterprise the Brady Bunch that's the way we all be came the Brady Bunch these days are all Happy and Free these days you wanna be where everybody knows your name fish do not fry in the envok itchen and beans do not burn on the grill took a whole lotta trying just to get up all Happy and Free these days you wanna be where everybody knows your name fish do not fry in the kitchen and beans do not burn on the grill took a whole lotta days you wanna be where everybody knows your name fish do not fry in the kitchen.</p>
                                </div>
                                <ul class="meta-list centred">
                                    <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 37</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 20</a></li>
                                    <li><a href="music.html"><i class="flaticon-substract"></i> &nbsp; CONTINUE READING &nbsp; <i class="flaticon-substract"></i></a></li>
                                    <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                </ul>
                            </div>
                        </div>
                        <ul class="page-pagination centred">
                            <li><a href="#"><i class="fa fa-angle-left"></i>&nbsp;&nbsp;&nbsp;PREV</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#" class="active">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">NEXT&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12 sidebar-side">
                    <div class="sidebar-content">
                        <div class="sidebar-about centred">
                            <div class="sidebar-title">ABOUT ME</div>
                            <figure class="img-box"><img src="{{asset('FrontEnd/images/home/1.png')}}" alt=""></figure>
                            <h5 class="name">Jassy Beula</h5>
                            <div class="text"><p>These days are all share them with me oh baby just sit right back and you will hear a tale a tale of a fateful trip that started.</p></div>
                            <ul class="social-link">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                        <div class="sidebar-post">
                            <div class="sidebar-title">RECENT POST</div>
                            <div class="single-post">
                                <div class="img-box"><a href="post1.html"><figure><img src="{{asset('FrontEnd/images/home/p1.jpg')}}" alt=""></figure></a></div>
                                <h6><a href="post1.html">Fleeing from the Cylon tyre</a></h6>
                                <div class="text">JULY 09, 2018</div>
                            </div>
                            <div class="single-post">
                                <div class="img-box"><a href="post1.html"><figure><img src="{{asset('FrontEnd/images/home/p2.jpg')}}" alt=""></figure></a></div>
                                <h6><a href="post1.html">Life support systems return</a></h6>
                                <div class="text">MAY 19, 2018</div>
                            </div>
                            <div class="single-post">
                                <div class="img-box"><a href="post1.html"><figure><img src="{{asset('FrontEnd/images/home/p3.jpg')}}" alt=""></figure></a></div>
                                <h6><a href="post1.html">Eoner on a crusade</a></h6>
                                <div class="text">AUGUST 09, 2018</div>
                            </div>
                            <div class="single-post">
                                <div class="img-box"><a href="post1.html"><figure><img src="{{asset('FrontEnd/images/home/p4.jpg')}}" alt=""></figure></a></div>
                                <h6><a href="post1.html">Aboard were expecting you</a></h6>
                                <div class="text">SEPTEMBER 10, 2018</div>
                            </div>
                            <div class="single-post">
                                <div class="img-box"><a href="post1.html"><figure><img src="{{asset('FrontEnd/images/home/p5.jpg')}}" alt=""></figure></a></div>
                                <h6><a href="post1.html">Our dreams come true</a></h6>
                                <div class="text">OCTOBER 09, 2018</div>
                            </div>
                        </div>
                        <div class="sidebar-newsletter centred">
                            <div class="title"><i class="fa fa-envelope-o"></i>&nbsp;&nbsp;NEWSLETTER</div>
                            <div class="text">These days are all share them wit me</div>
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Your Email Address" required="">
                                    <button type="submit" class="btn-one">SUBSCRIBE</button>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-instagram">
                            <div class="sidebar-title">INSTAGRAM</div>
                            <ul class="img-list clearfix">
                                <li><figure class="img-box"><a href="#"><img src="{{asset('FrontEnd/images/home/i1.jpg')}}" alt=""></a></figure></li>
                                <li><figure class="img-box"><a href="#"><img src="{{asset('FrontEnd/images/home/i2.jpg')}}" alt=""></a></figure></li>
                                <li><figure class="img-box"><a href="#"><img src="{{asset('FrontEnd/images/home/i3.jpg')}}" alt=""></a></figure></li>
                                <li><figure class="img-box"><a href="#"><img src="{{asset('FrontEnd/images/home/i4.jpg')}}" alt=""></a></figure></li>
                                <li><figure class="img-box"><a href="#"><img src="{{asset('FrontEnd/images/home/i5.jpg')}}" alt=""></a></figure></li>
                                <li><figure class="img-box"><a href="#"><img src="{{asset('FrontEnd/images/home/i6.jpg')}}" alt=""></a></figure></li>
                            </ul>
                        </div>
                        <div class="sidebar-categories">
                            <div class="sidebar-title">CATEGORIES</div>
                            <ul class="categories-list">
                                <li><a href="#">Beauty<span>(3)</span></a></li>
                                <li><a href="#">Dressing<span>(8)</span></a></li>
                                <li><a href="#">Fitness <span>(7)</span></a></li>
                                <li><a href="#">Lifestyle<span>(6)</span></a></li>
                                <li><a href="#">Travel<span>(9)</span></a></li>
                            </ul>
                        </div>
                        <div class="sidebar-img-content">
                            <div class="single-item">
                                <figure class="img-box"><img src="{{asset('FrontEnd/images/home/12.jpg')}}" alt=""></figure>
                                 <div class="inner-box">
                                    <div class="content">
                                        <div class="meta-text"><a href="#">Travel</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-item">
                                <figure class="img-box"><img src="{{asset('FrontEnd/images/home/13.jpg')}}" alt=""></figure>
                                 <div class="inner-box">
                                    <div class="content">
                                        <div class="meta-text"><a href="#">MUSIC</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog side end -->


    <!-- instagram-section -->
    <section class="instagram-section centred">
        <div class="container">
            <div class="instagram-title">FOLLOW @ INSTAGRAM</div>
            <ul class="instagram-img-list clearfix">
                <li><a href="#"><figure><img src="{{asset('FrontEnd/images/home/f1.jpg')}}" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="{{asset('FrontEnd/images/home/f2.jpg')}}" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="{{asset('FrontEnd/images/home/f3.jpg')}}" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="{{asset('FrontEnd/images/home/f4.jpg')}}" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="{{asset('FrontEnd/images/home/f5.jpg')}}" alt=""></figure></a></li>
            </ul>
        </div>
    </section>
    <!-- instagram-section -->


    <!-- main footer -->
    <footer class="footer-style-one main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 footer-column">
                    <div class="logo-wideget footer-wideget">
                        <div class="footer-logo">
                            <a href="index.html"><figure><img src="{{asset('FrontEnd/images/footer/logo1.png')}}" alt=""></figure></a>
                        </div>
                        <div class="text">
                            <p>The need no welfare states starship enterprise to a theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Hap  fish do not fry in the kitchen and beans.</p>
                        </div>
                        <ul class="social-style-one">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 footer-column">
                    <div class="footer-post-wideget footer-wideget">
                        <h3 class="footer-title">RECENT POST</h3>
                        <div class="single-post">
                            <div class="img-box"><a href="post1.html"><figure><img src="{{asset('FrontEnd/images/footer/1.jpg')}}" alt=""></figure></a></div>
                            <h6><a href="post1.html">Fleeing from the Cylon tyre</a></h6>
                            <div class="text">JULY 09, 2018</div>
                        </div>
                        <div class="single-post">
                            <div class="img-box"><a href="post1.html"><figure><img src="{{asset('FrontEnd/images/footer/2.jpg')}}" alt=""></figure></a></div>
                            <h6><a href="post1.html">Life support systems return</a></h6>
                            <div class="text">August 19, 2018</div>
                        </div>
                        <div class="single-post">
                            <div class="img-box"><a href="post1.html"><figure><img src="{{asset('FrontEnd/images/footer/3.jpg')}}" alt=""></figure></a></div>
                            <h6><a href="post1.html">Eoner on a crusade</a></h6>
                            <div class="text">November 09, 2018</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 footer-column">
                    <div class="footer-categories-wideget footer-wideget">
                        <h3 class="footer-title">CATEGORIES</h3>
                        <ul class="categories-list">
                            <li><a href="#">Beauty<span>(3)</span></a></li>
                            <li><a href="#">Dressing<span>(8)</span></a></li>
                            <li><a href="#">Fitness <span>(7)</span></a></li>
                            <li><a href="#">Lifestyle<span>(6)</span></a></li>
                            <li><a href="#">Travel<span>(9)</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- main footer end -->


    <!-- footer bottom -->
    <section class="footer-bottom footer-bottom-one centred">
        <div class="container">
            <div class="copyright">CopyrightS © 2018 <a href="#">BELFAST</a>. All rights reserved</div>
        </div>
    </section>
    <!-- footer bottom -->



<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-angle-up"></span></div>



<!--jquery js -->
<script type="text/javascript" src="{{ asset('FrontEnd/js/jquery-2.1.4.js') }}"></script>
<script src="{{ asset('FrontEnd/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('FrontEnd/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('FrontEnd/js/wow.js') }}"></script>
<script src="{{ asset('FrontEnd/js/validation.js') }}"></script>
<script src="{{ asset('FrontEnd/js/jquery.fancybox.pack.js') }}"></script>
<script type="text/javascript" src="{{ asset('FrontEnd/js/SmoothScroll.js') }}"></script>
<script src="{{ asset('FrontEnd/js/html5lightbox/html5lightbox.js') }}"></script>
<script src="{{ asset('FrontEnd/js/script.js') }}"></script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.commonsupport.com/Belfast/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Mar 2019 19:45:42 GMT -->
</html>
