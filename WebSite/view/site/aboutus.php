<?php $url='http://localhost:8888/WebTravel_MVC/Web_travel/WebSite/'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>About US</title>
  <link href="https://fonts.googleapis.com/css?family=poppins" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfxpqpzzvqgk6tah5pvlgofqnhsod2xbe+qkpxcaflneevoeh3sl0sibvcoqvnn" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/jssor.slider-27.5.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $url; ?>public/css/pages.css" />

	
</head>
<body>
	<!-- header -->
  <header>
    <div class="topbar">
      <div class="container-fluid">
        <div class="topbar-left">
          <ul class="st-list socials">
            <li>
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
            </li>
          </ul>
          <ul class="st-list topbar-items">
            <li class="hidden-xs hidden-sm">
              <a href="mailto:contact@shinetheme.com" target="">contact@shinetheme.com</a>
            </li>
          </ul>
        </div>
        <div class="topbar-right">
          <ul class="st-list topbar-items">
            <li><a href="#">Login</a></li>
            <li><a href="#">Sign up</a></li>
            <li class="dropdown dropdown-currency hidden-sm hidden-xs">
              <a href="#">EUR<i class="fa fa-angle-down"></i></a>
              <ul class="dropmenu">
                <li><a href="#">USD</a></li>
                <li><a href="#">AUD</a></li>
              </ul>
            </li>
            <li class="dropdown dropdown-language hidden-sm hidden-xs">
              <a href="#">English<i class="fa fa-angle-down"></i></a>
              <ul class="dropmenu">
                <li><a href="https://homap.travelerwp.com/fr/">Français</a></li>
                <li><a href="https://homap.travelerwp.com/fr/">Français</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="head1">
      <div class="container">
        <div class="toggle">
          <i class="fa fa-bars menu1"></i>
        </div>
        <div class="header1left">
          <img src="https://travelhotel.wpengine.com/wp-content/uploads/2018/11/logo_homap-4.svg">
          <div class="menu">
            <nav id="st-main-menu" >
              <a href="#" class="back-menu"><i class="fa fa-angle-left"></i></a>
              <ul id="main-menu">
                <li><a href="../HTML/HomePage.html">HOME</a></li>
                <li><a href="#">LISTING<i class="fa fa-angle-down"></i></a>
                  <ul class="sub-menu">
                    <li><a href="">Full Map Layout</a></li>
                    <li><a href="#">Half Map Layout</a></li>
                    <li><a href="../HTML/slidebar.html">Slidebar Layout</a></li>
                  </ul>
                </li>
                <li><a href="#">HOTEL<i class="fa fa-angle-down"></i></a>
                  <ul class="sub-menu">
                    <li><a href="../HTML/detailhotel1.html">Hotel Detail 1</a></li>
                    <li><a href="#">Hotel Detail 2</a></li>
                    <li><a href="#">Hotel Detail 3</a></li>
                    <li><a href="../HTML/roomdetail1.html">Room Detail</a></li>
                  </ul>
                </li>
                <li><a href="#">HOUSE<i class="fa fa-angle-down"></i></a>
                  <ul class="sub-menu">
                    <li><a href="#">House Detail 1</a></li>
                    <li><a href="#">House Detail 2</a></li>
                  </ul>
                </li>
                <li><a href="#">PAGES<i class="fa fa-angle-down"></i></a>
                  <ul class="sub-menu">
                    <li><a href="../HTML/aboutus.html">About Us</a></li>
                    <li><a href="../HTML/blog1.html">Blog</a></li>
                    <li><a href="#">404 Page</a></li>
                  </ul>
                </li>
                <li><a href="../HTML/Contact.html">CONTACT</a></li>
              </ul>
            </nav>
            <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript"> 
    $(document).ready(function(){

       $("li").click(function(event) {
         $('.fa.fa-angle-down').toggleClass('daonguoc');
         t = $(this);
         t.parent().find('ul').slideToggle();
       });
     
       $('.menu1').click(function(){
       $("nav").toggleClass('open'); 
       });
       $('.fa.fa-angle-left').click(function(){
          var t = $(this);

     t.parent().find('ul').next().slideToggle();
       $("nav").removeClass('open'); });
     })
  </script>
  </script>
          </div>
        </div>
        <div class="header1right">
          <form action="" method="get" class="header-search hidden-sm">
            <input type="text" class="form-control" name="s" value="">
            <i class="fa fa-search"></i>
          </form>
          <img class="ico-card" src="images/ico_card.svg" alt="">
        </div>
      </div>
    </div>
  </header>
  <!-- end header -->
  <div class="main-content">
    <div class="banner">
            <div class="container">
                <h1>About Us</h1>
            </div>
        </div>
        <div class="st-breadcrumb">
            <div class="container">
                <ul>
                    <li class="hiddenn">Home</li>
                    <li class="hiddenn"><a href="#">About us</a></li>
                </ul>
            </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <img class="abc" src="https://travelhotel.wpengine.com/wp-content/uploads/2018/12/about_1.jpg" height="184px" width="570px" alt="">
                <h2>Our Story</h2>
                <p>Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa. Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa. 
                </p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <img class="abc" src="https://travelhotel.wpengine.com/wp-content/uploads/2018/12/about_1.jpg" height="184px" width="570px" alt="">
                <h2>Our Story</h2>
                <p>Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa. Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa. 
                </p>
            </div>
        </div></div>
        <div class="st-list-statistic">
            <div class="container">
                <div class="row">            
                    <div class="col-md-3 col-sm-6">
                        <div class="item-wrapper">
                    <div class="item">
                        <div class="front">
                            <div class="inner">
                                <h4>100+</h4>
                                <p class="sub-text">partner</p>
                            </div>
                        </div>
                        <div class="end">
                            <p class="desc">Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa.</p>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="col-md-3 col-sm-6">
                <div class="item-wrapper">
                    <div class="item">
                        <div class="front">
                            <div class="inner">
                                <h4>2k+</h4>
                                <p class="sub-text">properties</p>
                            </div>
                        </div>
                        <div class="end">
                            <p class="desc">Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa.</p>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="col-md-3 col-sm-6">
                <div class="item-wrapper">
                    <div class="item">
                        <div class="front">
                            <div class="inner">
                                <h4>300+</h4>
                                <p class="sub-text">destinations</p>
                            </div>
                        </div>
                        <div class="end">
                            <p class="desc">Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa.</p>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="col-md-3 col-sm-6">
                <div class="item-wrapper">
                    <div class="item">
                        <div class="front">
                            <div class="inner">
                                <h4>40k+</h4>
                                <p class="sub-text">booking</p>
                            </div>
                        </div>
                        <div class="end">
                            <p class="desc">Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa.</p>
                        </div>
                    </div>
                </div>
            </div></div>
            </div></div>
    <div class="st-aboutus-info">
        <p class="message">"Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa. Nam dapibus nisl vitae elit fringilla rutrum."</p>
        <img src="https://homap.travelerwp.com/wp-content/uploads/2018/12/people_10.jpg" alt="">
        <p class="name">Adam Blin</p>
        <p class="pos">Founder</p>
    </div>
    <script src="./js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideWidth: 830,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1420;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 051 css*/
        .jssorb051 .i {position:absolute;cursor:pointer;}
        .jssorb051 .i .b {fill:#fff;fill-opacity:0.5;}
        .jssorb051 .i:hover .b {fill-opacity:.7;}
        .jssorb051 .iav .b {fill-opacity: 1;}
        .jssorb051 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 105 css*/
        .jssora105 {display:block;position:absolute;cursor:pointer;}
        .jssora105 .c {fill:#000;opacity:.5;}
        .jssora105 .a {fill:none;stroke:#fff;stroke-width:350;stroke-miterlimit:10;}
        .jssora105:hover .c {opacity:.5;}
        .jssora105:hover .a {opacity:.8;}
        .jssora105.jssora105dn .c {opacity:.2;}
        .jssora105.jssora105dn .a {opacity:1;}
        .jssora105.jssora105ds {opacity:.3;pointer-events:none;}
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1420px;height:500px;overflow:hidden;visibility:hidden; margin-bottom: 151px;">
        Loading Screen
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1420px;height:500px;overflow:hidden;">
            <div>
                <img data-u="image" src="<?php echo $url; ?>libs/Images/001.jpg" />
            </div>
            <div>
                <img data-u="image" src="<?php echo $url; ?>libs/Images/002.jpg" />
            </div>
            <div>
                <img data-u="image" src="<?php echo $url; ?>libs/Images/003.jpg" />
            </div>
            <div>
                <img data-u="image" src="<?php echo $url; ?>libs/Images/004.jpg" />
            </div>
            <div>
                <img data-u="image" src="<?php echo $url; ?>libs/Images/005.jpg" />
            </div>
            <div>
                <img data-u="image" src="<?php echo $url; ?>libs/Images/006.jpg" />
            </div>
            <div>
                <img data-u="image" src="<?php echo $url; ?>libs/Images/007.jpg" />
            </div>
            <div>
                <img data-u="image" src="<?php echo $url; ?>libs/Images/008.jpg" />
            </div>
            <div>
                <img data-u="image" src="<?php echo $url; ?>libs/Images/009.jpg" />
            </div>
        </div>
        Bullet Navigator
        <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        Arrow Navigator
        <div data-u="arrowleft" class="jssora105" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora105" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <div class="container">
        <div class="row">
            <div class="st-aboutus-team">
                <h3>Leadership Team</h3>
            </div>
        </div>
    </div>
    <div class="st-content-wrapper">
    <div class="container">
            <div class="row">
                <div class="bg-holder col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <img class="image" src="<?php echo $url; ?>libs/Images/people_9.jpg"alt="">
                    <div class="overlay overlayFade">
                        <div class="text">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                    <h3 class="img-overlay">Eva Hicks</h3>
                    <h4 class="img-overlay">CEO</h4>
                </div>
                <div class="bg-holder col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <img class="image" src="<?php echo $url; ?>libs/Images/people_7.jpg" alt="">
                    <div class="overlay overlayFade">
                        <div class="text">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                    <h3 class="img-overlay">Eva Hicks</h3>
                    <h4 class="img-overlay">CEO</h4>
                </div>
                <div class="bg-holder col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <img class="image" src="<?php echo $url; ?>libs/Images/people_3.jpg"alt="">
                    <div class="overlay overlayFade">
                        <div class="text">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                    <h3 class="img-overlay">Eva Hicks</h3>
                    <h4 class="img-overlay">CEO</h4>
                </div>
                <div class="bg-holder col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <img class="image" src="<?php echo $url; ?>libs/Images/people_4.jpg"alt="">
                    <div class="overlay overlayFade">
                        <div class="text">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                    <h3 class="img-overlay">Eva Hicks</h3>
                    <h4 class="img-overlay">CEO</h4>
                </div>
            </div>
            <div class="row">
                <div class="bg-holder col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <img class="image" src="<?php echo $url; ?>libs/Images/people_5.jpg"alt="">
                    <div class="overlay overlayFade">
                        <div class="text">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                    <h3 class="img-overlay">Eva Hicks</h3>
                    <h4 class="img-overlay">CEO</h4>
                </div>
                <div class="bg-holder col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <img class="image" src="<?php echo $url; ?>libs/Images/people_6.jpg"alt="">
                    <div class="overlay overlayFade">
                        <div class="text">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                    <h3 class="img-overlay">Eva Hicks</h3>
                    <h4 class="img-overlay">CEO</h4>
                </div>
                <div class="bg-holder col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <img class="image" src="<?php echo $url; ?>libs/Images/people_7.jpg"alt="">
                    <div class="overlay overlayFade">
                        <div class="text">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                    <h3 class="img-overlay">Eva Hicks</h3>
                    <h4 class="img-overlay">CEO</h4>
                </div>
                <div class="bg-holder col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <img class="image" src="<?php echo $url; ?>libs/Images/people_8.jpg" alt="">
                    <div class="overlay overlayFade">
                        <div class="text">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                    <h3 class="img-overlay">Eva Hicks</h3>
                    <h4 class="img-overlay">CEO</h4>
                </div>
            </div>
            
        </div>
  </div></div>
  <footer>
        <div class="mailchimp">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                    <div class="col-xs-12  col-md-7 col-lg-6">
                        <div class="media">
                            <div class="media-left">
                                <img src="https://homap.travelerwp.com/wp-content/themes/traveler/v2/images/svg/ico_email_subscribe.svg" alt="" class="media-object">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading st-heading-section f24">Get Updates & More</h4>
                                <p class="f16 c-grey">Thoughtful thoughts to your inbox</p> 
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12  col-md-5 col-lg-6">
                        <form action="" class="subcribe-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="your Email">
                                <input type="submit" name="submit" value="Subcribe">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
    <div class="row">
            <div id="footer_content">
                <div class="col-lg-3 col-sm-3 col-xs-12 col-md-12">
                <h4 style="font-weight: 600;font-size: 14px;">NEED HELP?</h4>
                <br />
            

                <div  class="footer_content_element">
                    <p class="footer_content_element1" >Call Us</p>
                    <h4 class="footer1" style="font-weight: 600;font-size: 18px; color: #1A2B48 ; padding-left: 15px;  " >+ 00 222 44 5678</h4>
                </div>
                <br />
        
                <div class="footer_content_element">
                    <p class="footer_content_element1" >Email for Us</p>
                    <h4 class="footer1" style="font-weight: 600; font-size: 18px; color: #1A2B48 ; padding-left: 15px;  " >hello@yoursite.com</h4>
                </div>
                <br />
            
                <div class="footer_content_element">
                    <p class="footer_content_element1" >Follow Us</p>
                    <p style="padding-left: 15px;"><span ><img src="https://travelhotel.wpengine.com/wp-content/uploads/2018/12/ico_twitter_footer.png"  ></span><span style="padding-left: 15px;"><img src="https://travelhotel.wpengine.com/wp-content/uploads/2018/12/ico_twitter_footer.png" ></span><span style="padding-left: 15px;"><img src="https://travelhotel.wpengine.com/wp-content/uploads/2018/12/ico_instagram_footer.png"  ></span></p>
                </div>
                <br />
                


            </div>
            <div class="col-lg-3 col-sm-3 col-xs-12 col-md-12">
                <h4 style="font-weight: 600;font-size: 14px;">COMPANY</h4>
                <br />
            
                <div class="footer_content1_element">
                    <div class="footer_content1_element1" ">
                        <a href="" ><p>About Us</p></a>
                        <br>
                    
                        <a href="" ><p>ACommunity Blog</p></a>
                        <br>
                        
                        <a href="" ><p>Rewards</p></a>
                        <br>
                    
                        <a href="" ><p>Word with Us</p></a>
                        <br>
                        
                        <a href="" ><p>Meet the Team</p></a>
                        <br>
                        <br>
                        
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-xs-12 col-md-12">
                <h4 style="font-weight: 600;font-size: 14px;">SUPPORT</h4>
                <br />
        
                <div class="footer_content1_element">
                    <div class="footer_content1_element1" ">
                        <a href="" style="color: #1A2B48"><p>Acount</p></a>
                        <br>
                    
                        <a href="" style="color: #1A2B48"><p>Legal</p></a>
                        <br>
                        
                        <a href="" style="color: #1A2B48"><p>Contact</p></a>
                        <br>
                    
                        <a href="" style="color: #1A2B48"><p>Affiliate Program</p></a>
                        <br>
                        
                        <a href="" style="color: #1A2B48"><p>Privacy policy</p></a>
                        <br>
                        <br>
                        
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-xs-12 col-md-12">
                <h4 style="font-weight: 600;font-size: 14px;">SETTING</h4>
                <br />
                
                <div class="footer_content1_element">
                    <div class="footer_content1_element1" ">
                        <p style="font-size: 14px;color: #5E6D77;" >Languages</p>
                        <select style=" width: 180px; height: 40px; border-radius: 4px;" >
                            <option>English</option>
                            <option>France</option>
                            <option>Spanish</option>
                        </select>
                        <br />
                        <br />
                        <br />
                        <p style="font-size: 14px;color: #5E6D77;" >Currencies</p>
                        <select style=" width: 180px; height: 40px; border-radius: 4px;" >
                            <option>EUR</option>
                            <option>USD</option>
                            <option>AUD</option>
                        </select>

                        
                    </div>
                    
                </div>
            </div>
            </div>
        </div>
        

        <div class="row">
            <div class="footer_sub">

            <div class="col-lg-4">
                <div class="footer_sub_L">
                    <p style=" font-size: 15px; color: #768092;">Copyright © 2018 by <a href="#">ShineTheme</a></p>
                
                
            </div>
                
            </div>
            <div class="col-lg-5"></div>
            <div class="col-lg-3">
                <div class="footer_sub_R">
                <p><span style="margin-left: 15px;"><img src="https://homap.travelerwp.com/wp-content/themes/traveler/v2/images/svg/ico_paymethod.svg"></span></p>
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>
       </div>
    </footer>
    
</body>
</html>


