<!DOCTYPE html>
<html  class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ isset($title) ? $title : 'Заголовок' }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="http://{{$_SERVER['HTTP_HOST']}}/img/icon/favicon.ico">

        <!-- all css here -->
        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="http://{{$_SERVER['HTTP_HOST']}}/css/bootstrap.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="http://{{$_SERVER['HTTP_HOST']}}/css/animate.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="http://{{$_SERVER['HTTP_HOST']}}/css/meanmenu.min.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="http://{{$_SERVER['HTTP_HOST']}}/css/owl.carousel.css">
        <!-- icofont css -->
        <link rel="stylesheet" href="http://{{$_SERVER['HTTP_HOST']}}/css/icofont.css">
        <!-- Nivo css -->
        <link rel="stylesheet" href="http://{{$_SERVER['HTTP_HOST']}}/css/nivo-slider.css">
        <!-- animaton text css -->
        <link rel="stylesheet" href="http://{{$_SERVER['HTTP_HOST']}}/css/animate-text.css">
        <!-- Metrial iconic fonts css -->
        <link rel="stylesheet" href="http://{{$_SERVER['HTTP_HOST']}}/css/material-design-iconic-font.min.css">
        <!-- style css -->
        <link rel="stylesheet" href="http://{{$_SERVER['HTTP_HOST']}}/css/style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="http://{{$_SERVER['HTTP_HOST']}}/css/responsive.css">        
        <!-- color css -->
        <link href="http://{{$_SERVER['HTTP_HOST']}}/css/color/skin-default.css" rel="stylesheet">

        <!-- modernizr css -->
        <script src="http://{{$_SERVER['HTTP_HOST']}}/js/vendor/modernizr-2.8.3.min.js"></script>

    </head>
    <body>
        <!--body-wraper-are-start-->
        <div class="wrapper waraper-404">

            <!--slider header area are start-->
            <div id="home" class="header-slider-area">
                <!--header start-->
                <div class="header-area header-2">
                    <!--logo menu area start-->
                    <div id="sticker" class="logo-menu-area">
                        <div class="container hidden-xs">
                            <div class="row">
                                <div class="col-md-2 col-sm-3">
                                    <div class="logo">
                                        <a href="/"><img src="img/logo.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-9">
                                    <div class="main-menu text-center">
                                        <nav>
                                            <ul id="nav">
                                                <li><a class="smooth-scroll" href="/">Home</a></li>
                                                <li><a class="smooth-scroll" href="/">Timeline</a></li>                                             
                                                <li><a class="smooth-scroll" href="/">Speakers</a></li>
                                                <li><a class="smooth-scroll" href="/">News</a></li>
                                                <li><a class="smooth-scroll" href="/">Feed</a></li>   
                                                <li><a href="/authors">Our Team</a></li>
                                                <li><a class="smooth-scroll" href="/contact">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <a href="/auth/login" class="btn btn-danger square-btn-adjust" style="float: right">LogIn</a>
                                <a href="/auth/register" class="btn btn-success square-btn-adjust" style="float: right">Register</a>
                                
                            </div>
                        </div><!--logo menu area end-->
                        <!-- mobile-menu-area start -->
                        <div class="mobile-menu-area">
                            <div class="container">
                                <div class="logo-02">
                                    <a href="/"><img src="img/logo-02.png" alt=""></a>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <nav id="dropdown">
                                            <ul>
                                                <li><a class="smooth-scroll" href="/">Home</a></li>
                                                <li><a class="smooth-scroll" href="/">Timeline</a></li>                                             
                                                <li><a class="smooth-scroll" href="/">Speakers</a></li>
                                                <li><a class="smooth-scroll" href="/">News</a></li>
                                                <li><a class="smooth-scroll" href="/">Feed</a></li>   
                                                <li><a href="/authors">Our Team</a></li>
                                                <li><a class="smooth-scroll" href="/contact">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--mobile menu area end-->
                    </div> 
                </div>
                <!-- header End-->
            </div>
            <!--slider header area are end-->

            <!-- main blog area start-->
            <div class="area-404 ptb100 fix">
                <div class="container ptb100">                  
                    <div class="row">
                        <div class="col-xs-12 text-center">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10583.539581943789!2d35.0404627!3d48.458738!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb4637f658c8cf549!2z0KPRh9C10LHQvdGL0LkgSVQt0YbQtdC90YLRgCBMZXZlbCBVUA!5e0!3m2!1sru!2sua!4v1494726283181" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>                       
                    </div>
                    <h2 style="margin-top: 20px">По какому графику работает офис?</h2>
                    <h4>Приемная работает ежедневно с 9:00 до 18:00.</h4>
                </div>
            </div>
           <!-- Add Google Maps -->
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAl_YC4rjpCObXVO0GrcEVu6rqvbl-lcxU&callback=myMap"></script>

            <script>
            // Google Map Location
            var myCenter = new google.maps.LatLng(48.46637695, 35.05218029);

            function initialize() {
            var mapProp = {
              center: myCenter,
              zoom: 14,
              scrollwheel: false,
              draggable: false,
              mapTypeId: google.maps.MapTypeId.ROADMAP
              };

            var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

            var marker = new google.maps.Marker({
              position: myCenter,
            });

            marker.setMap(map);
            }

            google.maps.event.addDomListener(window, 'load', initialize);
            </script>
            <!--information area are start-->
            <div class="information-area off-white ptb100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="single-information text-center">
                                <div class="info-icon">
                                    <i class="zmdi zmdi-phone"></i>
                                </div>
                                <h4>Phone</h4>
                                <p>+ (0192) 5184203</p>
                                <p>+ (0185) 0950555</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="single-information text-center">
                                <div class="info-icon">
                                    <i class="zmdi zmdi-email-open"></i>
                                </div>
                                <h4>E-Mail</h4>
                                <p><a href="mailto:company@email.com">company@email.com</a></p>
                                <p><a href="mailto:we@company.info">we@company.info</a></p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="single-information text-center">
                                <div class="info-icon">
                                    <i class="zmdi zmdi-city-alt"></i>
                                </div>
                                <h4>1st Venue</h4>
                                <p>555 / 2A Sevent Streth</p>
                                <p>Rampura, Bansree.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="single-information text-center">
                                <div class="info-icon">
                                    <i class="zmdi zmdi-city"></i>
                                </div>
                                <h4>1st Venue</h4>
                                <p>689 / 2B Sevent Streth</p>
                                <p>Rampura, Bansree.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--information area are start-->

            <!--footer area are start-->
            <div class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="social-area">
                                <ul>
                                    <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-google"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="payment-area">
                                <ul>
                                    <li><a href=""><img src="img/icon/pay-01.jpg" alt=""></a></li>
                                    <li><a href=""><img src="img/icon/pay-02.jpg" alt=""></a></li>
                                    <li><a href=""><img src="img/icon/pay-03.jpg" alt=""></a></li>
                                    <li><a href=""><img src="img/icon/pay-04.jpg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer area are start-->
        </div>   

        <script src="js/vendor/jquery-3.1.1.min.js"></script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
        <!-- Nivo js -->
        <script src="js/nivo-slider/jquery.nivo.slider.pack.js"></script>
        <script src="js/nivo-slider/nivo-active.js"></script>
        <!-- wow js -->
        <script src="js/wow.min.js"></script>
        <!-- Youtube Background JS -->
        <script src="js/jquery.mb.YTPlayer.min.js"></script>
        <!-- datepicker js -->
        <script src="js/bootstrap-datepicker.js"></script>
        <!-- waypoint js -->
        <script src="js/waypoints.min.js"></script>
        <!-- onepage nav js -->
        <script src="js/jquery.nav.js"></script>
        <!-- animate text JS -->
        <script src="js/animate-text.js"></script>
        <!-- plugins js -->
        <script src="js/plugins.js"></script>
        <!-- main js -->
        <script src="js/main.js"></script>
    </body>
</html>
